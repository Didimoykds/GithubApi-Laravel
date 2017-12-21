<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GithubController extends Controller
{
    public function getView()
    {
        return view("github_challenge");
    }
}
