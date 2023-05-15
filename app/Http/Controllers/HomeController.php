<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Commands;
use App\Models\Operating_System;
use App\Models\Platforms;
use Illuminate\View\View;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        // $bookings=bookings::all();
        // return view('admin.booking', compact('bookings'));
        // return view('auth.login');
          return view('admin.home');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
            {
                // return view('admin.home');
                $commands=commands::all();
                $platforms=platforms::all();
                $data=operating_system::all();
                return view('admin.command', compact('commands','platforms','data'));
                // return view('admin.command', compact('commands'));
            }
        else
            {
                $commands=commands::all();
                $platforms=platforms::all();
                $data=operating_system::all();
                return view('admin.command', compact('commands','platforms','data'));
            }
    }
}
