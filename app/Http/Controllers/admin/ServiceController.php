<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('admin/services/index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'service_name' => 'required|min:2',
        //     'service_description' => 'required|min:2',

        // ]);


        Service::create([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
            'service_price' => $request->service_price,

        ]);

        $request->flash();
        session()->flash('success', 'Service added successfully.');
    return redirect('services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($service_id)
    {
        $service = Service::find($service_id);


        return view('admin.services.edit',compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $service_id)
    {
        $service=Service::findOrFail($service_id);
        $service->service_name=$request->input('service_name');
        $service->service_description=$request->input('service_description');

        $service->update();
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_id)
    {
        $service = Service::find($service_id);
        $service->delete();
        return redirect('services');
    }
}
