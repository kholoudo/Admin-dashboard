<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $adminName=User::where('role','=','admin')->get();
        // dd($adminName);
        $allUsers = User::all();
        $allService = Service::all();
        $allCategory = Category::all();
        $allContact = Contact::all();
        $allStatus = ['pending', 'accepted', 'rejected'];
        $users = User::with('services')->where('role', 'user')->get(['*']);

        return view('admin.index', compact('allUsers', 'allService','allCategory','users','allStatus','allContact'));

        // $allUsers = User::all();
        // $allService = Service::all();
        // $allCategory = Category::all();
        // return view('admin.index', compact('allUsers','allService','allCategory'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


        public function update(Request $request, $userId, $pivotId)
    {
        $users = User::with('services')->where('role', 'user')->get();
        $user = $users->find($userId);

        $user->services()->wherePivot('id', '=', $pivotId)->updateExistingPivot($request->service_id, [
            "user_id" => $request->user_id,
            "service_id" => $request->service_id,
            "mobile_number" => $request->mobile_number,

            "status" => $request->status,
            "date" => $request->date,
            "time" => $request->time,
            "note" => $request->note
        ]);



        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
