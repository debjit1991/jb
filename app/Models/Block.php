<?php

namespace App\Models;

use App\Http\Traits\AuthScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;

class Block extends Model
{
    use HasFactory, HasUlids, AuthScope;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['name']);
        // Chain fluent methods for configuration options
    }

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => strtoupper($value),
        );
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function state()
    {
        return $this->district->state();
    }

    public function localConstituencies()
    {
        return $this->hasMany(PanchayatConstituency::class);
    }



    /**
     * Model Relation of Block attached with multiple Users
     *
     * @return void
     */
    public function attached_with()
    {
        return $this->morphMany(UserResource::class, 'resource');
    }

    public function scopeForAuthUser($query)
    {
        $attachments = Auth::user()->attached_to->groupBy('resource_type');

        if ($attachments->keys()->contains(District::class)) {
            $query = $query
                ->where(function (Builder $query) use ($attachments) {
                    $query
                        ->whereIn(
                            'blocks.district_id',
                            $attachments->get(District::class)->pluck('resource.id')
                        );
                });
        } elseif ($attachments->keys()->contains(Block::class)) {
            $query = $query
                ->where(function (Builder $query) use ($attachments) {
                    $query
                        ->whereIn(
                            'blocks.id',
                            $attachments->get(Block::class)->pluck('resource.id')
                        );
                });
        } elseif ($attachments->keys()->contains(State::class)) {
            $district_id = District::whereIn('state_id',$attachments->get(State::class)->pluck('resource.id'))->pluck('id');

            $query = $query->where(function (Builder $query) use ($district_id) {
                $query->whereIn(
                    'blocks.district_id', $district_id
                );
            });
        }  else {
            $query = $query->whereRaw('1 != 1');
        }

        return $query->selectRaw('blocks.*');
    }

    public function scopeSearch($query, $searchItem)
    {
        return $query
            ->where($this->getTable() . '.name', 'ILIKE', "%{$searchItem}%");
    }

    public function scopeForDistrict($query, $district_id)
    {
        return $query->where($this->getTable().'.district_id', $district_id);
    }
}
