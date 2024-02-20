<?php

namespace App\Models;

use App\Http\Traits\AuthScope;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory, HasUlids, AuthScope;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * Model Relation of State has msny Districts
     *
     * @return void
     */
    public function districts()
    {
        return $this->hasMany(District::class);
    }
    /**
     * Model Relation of State has msny Districts
     *
     * @return void
     */
    public function blocks()
    {
        return $this->hasManyThrough(Block::class, District::class);
    }
    /**
     * Model Relation of State has many Districts
     *
     * @return void
     */
    // public function municipalities()
    // {
    //     return $this->hasManyThrough(Municipality::class, District::class);
    // }









}
