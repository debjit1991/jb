<?php

namespace App\Models;

use App\Http\Traits\AuthScope;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;

class District extends Model
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


    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Model Relation of District has many Blocks
     *
     * @return void
     */
    public function blocks()
    {
        return $this->hasMany(Block::class);
    }

    /**
     * Model relation of District has many Muncipalities
     *
     * @return void
     */
    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }

    /**
     * Model relation of District has many Police Stations
     *
     * @return void
     */
    public function policeStations()
    {
        return $this->hasMany(PoliceStation::class);
    }

    /**
     * Model relation of District has many Assembly Constituencies
     *
     * @return void
     */
    public function assemblyConstituencies()
    {
        return $this->hasMany(AssemblyConstituency::class);
    }
    /**
     * Model relation of District has many Panchayat Constituencies
     *
     * @return void
     */
    public function panchayatConstituencies()
    {
        return $this->hasManyThrough(PanchayatConstituency::class, Block::class);
    }
    /**
     * Model relation of District has many Municipality Constituencies
     *
     * @return void
     */
    public function municipalityConstituencies()
    {
        return $this->hasManyThrough(MunicipalityConstituency::class, Municipality::class);
    }

    /**
     * Model relation of District has many Municipality Constituencies
     *
     * @return void
     */
    public function gtaConstituencies()
    {
        return $this->hasMany(GtaConstituency::class);
    }

    /**
     * Model Relation of District attached with multiple Users
     *
     * @return void
     */
    public function attached_with()
    {
        return $this->morphMany(UserResource::class, 'resource');
    }
    /**
     * Get the Constituencies  for a District
     *
     * @return void
     */
    public function constituencies()
    {
        return $this->hasMany(Constituency::class);
    }
    public function scopeSearch($query, $searchItem)
    {
        return $query
            ->where($this->getTable() . '.name', 'ILIKE', "%{$searchItem}%");
    }

}
