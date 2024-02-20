<?php

namespace App\Models;

use App\Http\Traits\AuthScope;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResource extends Model
{
    use HasFactory, HasUlids, AuthScope;

    /**
     * Model Relation of Resource belongs to a User
     *
     * @return void
     */

     protected $fillable = [
        'user_id',
        'resource_type',
        'resource_id'
     ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Polymorphic Relation of User Resourc Model with either
     * State, District, Block or Municipality
     * or any relatable model that can be
     * accessed by a User role
     */
    public function resource()
    {
        return $this->morphTo();
    }
}
