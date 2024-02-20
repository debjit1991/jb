<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

trait Auditable
{
    // use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
        // Chain fluent methods for configuration options
    }

    public function tapActivity(Activity $activity, string $eventName)
    {
        $activity->properties = array_merge($activity->properties->toArray(), [
            'session' => Session::getId(),
            'ip'      => Request()->ip()
        ]);

        $activity->log_name = 'audit';
    }
}
