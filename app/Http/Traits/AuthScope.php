<?php

namespace App\Http\Traits;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

trait AuthScope
{
    protected function scopedModelIds() : Collection
    {
        //Get Auth User Resources Type and Id

        $attachments = Auth::user()->attached_to;

        $data = new Collection();

        $resources = [];

        foreach ($attachments as $attachment) {
            $resources[] = $attachment->resource;
        }

        foreach ($resources as $resource) {
            //Get Base class for the invocating model

            $relation = Str::lower(class_basename(get_class()));

            //Call the eloquent relation with Resource Type and plural of Base class
            if (class_basename($resource) == class_basename(get_class()))
            {
                $data = $data->merge($resource[$this->getKeyName()]);
            }
            elseif (method_exists($resource,$relation))
            {
                $data = $data->merge($resource->$relation[$this->getKeyName()]);
            }
            elseif (method_exists($resource,Str::pluralStudly($relation)))
            {
                $relation = Str::pluralStudly($relation);
                $data = $data->merge($resource->$relation->pluck($this->getKeyName()));
            }
            else
                $data = collect();
        }

        return $data->unique();
    }

    public function scopeByAuthUser($query)
    {
        return $query->whereIn($this->getTable().'.'.$this->getKeyName(), $this->scopedModelIds());
    }

    public function scopeNotByAuthUser($query)
    {
        return $query->whereNotIn($this->getTable().'.'.$this->getKeyName(), $this->scopedModelIds());
    }
}
