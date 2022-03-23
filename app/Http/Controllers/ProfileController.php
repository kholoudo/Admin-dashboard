<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

        public function index()
        {



            $orders = DB::table('services_users')->where('user_id','=',Auth::user()->id)
            ->join('users','services_users.user_id','=','users.id')
            ->join('services','services_users.service_id','=','services.id')
            ->get(['name','users.mobile_number','services.service_name','date','time','status']);

            return view('layouts.profile',compact('orders'));
        }

        public function update(Request $request)
        {
        $user_id=Auth::user();
        $user_id->name=$request->input('name');
        $user_id->email=$request->input('email');
        $user_id->update();
        $request->flash();
            session()->flash('success', 'Your profile updated successfully.');
        return redirect()->back()->with('status profile updated');

        }



}
