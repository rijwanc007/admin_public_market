<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Tvc;
use App\Subscribe;
use App\CvUpload;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
        $total_ads = 20000;
        $today_ads = 100;
        $total_tvc = Tvc::orderBy('id', 'DESC')->count();
        $total_subscriber = Subscribe::orderBy('id', 'DESC')->count();
        $total_cv = CvUpload::orderBy('id', 'DESC')->count();
        return view('index', compact('users', 'total_tvc', 'total_ads', 'today_ads',
        'total_subscriber', 'total_cv'));
    }
}
