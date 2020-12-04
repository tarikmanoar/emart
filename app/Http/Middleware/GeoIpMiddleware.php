<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;

class GeoIpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = geoip()->getClientIP();
        $geoInfo = geoip()->getLocation($ip);
        $data = [
            "ip"          => $geoInfo->ip,
            "iso_code"    =>$geoInfo->iso_code,
            "country"     =>$geoInfo->country,
            "city"        =>$geoInfo->city,
            "state_name"  =>$geoInfo->state_name,
            "postal_code" =>$geoInfo->postal_code,
            "lat"         =>$geoInfo->lat,
            "lon"         =>$geoInfo->lon,
            "currency"    =>$geoInfo->currency,
        ];
        $visitor = Visitor::where('ip', $geoInfo->ip)->first();
        if ($visitor == null) {
            Visitor::create($data);
        }
        return $next($request);
    }
}
