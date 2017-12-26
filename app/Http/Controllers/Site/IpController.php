<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;

class IpController extends Controller
{

    public function getView()
    {
        return view('descubra_ip');
    }

    protected function getIpInformation(Request $request)
    {
        $ip = $request->ip();
        dd($ip);
    }

    public function getIp(Request $request)
    {
        $ip = $this->getIpInformation($request);
        return View::make('descubra_ip', $ip);
    }

}
