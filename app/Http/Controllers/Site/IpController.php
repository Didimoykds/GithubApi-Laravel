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

    protected function curlIp($ip)
    {
        $url="http://ip-api.com/json/".$ip;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        print $result;
    }

    protected function getIpInformation(Request $request)
    {
        $elbSubnet = '172.31.0.0/16';
        Request::setTrustedProxies([$elbSubnet]);
        $ip = $this->getIp();
        if($ip)
        $info = $this->curlIp($ip);
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
