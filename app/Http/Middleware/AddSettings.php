<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Settings\Setting;
use Config;

class AddSettings
{
    public $attributes;
    /**
     * 執行請求過濾器。
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $settingData = Setting::first();
        $google_analytics = $settingData->google_analytics;
        // echo $google_analytics;
        Config::set('google_analytics',$google_analytics);

        return $next($request);
    }

}