<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class PoliceStation extends Model
{
    use HasFactory, HasUlids;
    
    protected $guarded=[];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function scopeSearch($query, $searchItem)
    {
        return $query
            ->where('name', 'ILIKE', "%{$searchItem}%");
    }
}
