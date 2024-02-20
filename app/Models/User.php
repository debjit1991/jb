<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Traits\AuthScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUlids, HasRoles, HasPermissions, AuthScope;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Model Relation User has One Profile
     *
     * @return void
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Model Relation of User has many Resources
     *
     * @return void
     */
    public function attached_to()
    {
        return $this->hasMany(UserResource::class);
    }

    public function resources()
    {
        return $this->attached_to->map(function ($resource) {
            return [
                explode('\\', $resource->resource_type)[2],
                $resource->resource_type::find($resource->resource_id)->name,
                $resource->resource->id
            ];
        });
    }

    public function scopeSearch(Builder $query, $searchItem)
    {
        return $query
            ->where('name', 'ILIKE', "%{$searchItem}%")
            ->orWhere('email', 'ILIKE', "%{$searchItem}%")
        ->orWhere(function ($query) use ($searchItem) {
            return $query->whereHas('profile', function ($query) use ($searchItem) {
                return $query
                    ->where('designation', 'ILIKE', "%{$searchItem}%")
                    ->orWhere('mobile', 'ILIKE', "%{$searchItem}%");
            });
        });
        // ->orWhereHas('attached_to', function (Builder $query) use ($searchItem) {
        //     $query->whereHas('resource', function (Builder $query) use ($searchItem) {
        //         $query->where('name', 'ILIKE', "{$searchItem}%");
        //     });
        // });
    }

    public function getHasExpiredPasswordAttribute()
    {
        return $this->password_expires_at?->isPast();
    }

    public function scopeForAuthUser(Builder $query)
    {
        $descendant_roles = Role::forAuthUser()->get();
        $auth_resource_types = $descendant_roles->pluck('resource_types')->flatten()->unique()->all();
        $auth_resources = collect([]);
        foreach ($auth_resource_types as $resource_type) {
            $auth_resources =  $auth_resources->merge(
                $resource_type::byAuthUser()->get()
            );
        }
        $auth_resources = $auth_resources->unique();
        $user_ids = collect([]);
        foreach ($auth_resources as $resource) {
            foreach ($resource->attached_with as $user_resource) {
                $user = $user_resource->user;

                if ($user?->hasAnyRole(
                    $descendant_roles->pluck('name')->all()
                )) {

                    $user_ids->push($user->id);
                }
            }
        }

        return $query->whereIn('users.id', $user_ids);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
