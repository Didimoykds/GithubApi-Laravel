<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PulkitJalan\GeoIP\GeoIP;
use View;

class IpController extends Controller
{

    protected function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }

    protected function getIpInformation(Request $request)
    {
        $elbSubnet = '172.31.0.0/16';
        Request::setTrustedProxies([$elbSubnet]);
        $info['ip'] = $this->getIp();
        if( isset($info['ip']) ){
            $geoip = new GeoIP();
            $geoip->setIp($ip);
            $info['lat'] = $geoip->getLatitude();
            $info['lon'] = $geoip->getLongitude();
            return ['ip' => $ip, 'local' => $info];
        } else {
            return ['message' => "Not found"];
        }
    }

    public function getView()
    {
        return view('descubra_ip');
    }

    public function getLocalInformation(Request $request)
    {
        $information = $this->getIpInformation($request);
        return View::make('descubra_ip', ['information' => $information]);
    }

}
