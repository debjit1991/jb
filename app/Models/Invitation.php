<?php

namespace App\Models;

use App\Http\Traits\Auditable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    use HasFactory, HasUlids, Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'designation',
        'mobile',
        'role_id',
        'resources',
        'link',
        'invited_by',
        'expiry_at',
    ];

    protected static $rules = [
        'name'          => 'required',
        'email'         => 'required|email|unique:users',
        'designation'   => 'required',
        'mobile'        => 'required|digits:10',
        'role_id'          => 'required',
        // 'resource_type' => 'required',
        // 'resource'      => 'required',
    ];

    public static function getValidationRules()
    {
        return static::$rules;
    }

    protected function resources(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }

    public function getResource($resource)
    {
        return $resource['resource_type']::find($resource['resource_id']);
    }

    public function getInvitationLinkAttribute()
    {
        return urldecode(url('invitation_link') . '?invitation_token=' . $this->link);
    }

    public function getInvitedBy()
    {
        return User::find($this->invited_by)->name;
    }

    public function scopeSearch($query, $searchItem)
    {
        return $query
            ->where('name', 'ILIKE', "%{$searchItem}%")
            ->orWhere('email', 'ILIKE', "%{$searchItem}%")
            ->orWhere('designation', 'ILIKE', "%{$searchItem}%")
            ->orWhere('mobile', 'ILIKE', "%{$searchItem}%");
    }

    public function getResourcesArrAttribute()
    {
        return array_map(function ($resource) {
            return [
                'type' => explode('\\', $resource['resource_type'])[2],
                'name' => $resource['resource_type']::find($resource['resource_id'])->name
            ];
        }, $this->resources);
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function invitedByUser()
    {
        return $this->belongsTo(User::class, 'invited_by');
    }
}
