<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commands;
use App\Models\Operating_System;
use App\Models\Platforms;
use Illuminate\View\View;
use Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class AdminController extends Controller
{

    public function view_os()
    {
        $data=operating_system::all();
        return view('admin.add_os',compact('data'));
    }

    public function add_os(Request $request)
    {
        $data= new operating_system;
        $data->os_name=$request->operating_system;
        $data->save();
        return redirect()->back()->with('message', 'Operating System Added Successully');
    }

    public function delete_os($id)
    {
        $data=operating_system::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Operating System Deleted Successully');
    }

    public function view_platform()
    {
        $platforms=platforms::all();
        return view('admin.add_platform',compact('platforms'));
    }

    public function add_platform(Request $request)
    {
        $platforms= new platforms;
        $platforms->platform_name=$request->platform_name;
        $platforms->save();
        return redirect()->back()->with('message', 'Platform Added Successully');
    }

    public function delete_platform($id)
    {
        $platforms=platforms::find($id);
        $platforms->delete();
        return redirect()->back()->with('message', 'Platform Deleted Successully');
    }
    public function show_commands(Request $request)
    {
        $commands=commands::all();
      
        $platforms=platforms::all();
        $data=operating_system::all();
        
        return view('admin.view_command', compact('commands','platforms','data',));

    }

    public function create_command(Request $request)
    {
        $commands=commands::all();
        $platforms=platforms::all();
        $data=operating_system::all();
        return view('admin.command', compact('commands','platforms','data'));

    }
    public function add_command(Request $request)
    {
        $commands=new commands;
        $commands->platform=$request->platform;
        $commands->operating_system=$request->operating_system;
        $commands->command_line=$request->command_line;
        $commands->description=$request->description;

        $commands->save();

        return redirect()->back();
        $commands=commands::all();
        return view('admin.view_command', compact('commands'));

    }

    public function delete_command($id)
    {
        $commands=commands::find($id);
        $commands->delete();
        return redirect()->back()->with('message', 'Command Deleted Succesfully');
    }

    public function update_command($id)
    {
        $commands=commands::find($id);
        $platforms=platforms::all();
        $data=operating_system::all();
        return view('admin.update_command', compact('commands','platforms','data'));

    }

    public function update_command_confirm(Request $request, $id)
    {
        $commands=commands::find($id);
        $commands->platform=$request->platform;
        $commands->operating_system=$request->operating_system;
        $commands->command_line=$request->command_line;
        $commands->description=$request->description;

        $commands->save();

        return redirect()->back()->with('message', 'Product Updated Succesfully');
    }

    
    public function search(Request $request)
    {
       $search_text = $_GET['query'];
       $commands = commands::where('command_line', 'LIKE', '%'.$search_text.'%')->get();
       $platforms=platforms::all();
       $data=operating_system::all();
       return view('admin.view_command', compact('commands','platforms','data'));

    }

    public function filter(Request $request)
    {
       $filter = $_GET['platform'];
       $filter2 = $_GET['operating_system'];
       $commands = commands::where('platform', 'LIKE', '%'.$filter.'%')
       ->where('operating_system', 'LIKE', '%'.$filter2.'%')->get();
       $platforms=platforms::all();
       $data=operating_system::all();
       return view('admin.view_command', compact('commands','platforms','data'));

    }

}
