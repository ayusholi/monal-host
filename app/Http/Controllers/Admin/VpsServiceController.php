<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\VpsService;
use Illuminate\Http\Request;

class VpsServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.vps.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.vps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'ram' => 'required|integer',
            'ram_unit' => 'required|string',
            'cpu_cores' => 'required|integer',
            'interval' => 'required',
            'storage' => 'required|integer',
            'storage_unit' => 'required|string',
            'storage_type' => 'required|string',
            'interval_type' => 'required|in:month,year',
            'base_price' => 'required|integer'
        ]);

        $service_data = [
            'name' => $attributes['name'],
            'slug' => $attributes['slug'],
            'service_type' => "vps",
            'interval' => $attributes['interval'],
            'interval_type' => $attributes['interval_type'],
            'base_price' => $attributes['base_price'],
        ];

        $service = Service::create($service_data);
        $vps_service = [
            'ram' => $attributes['ram'],
            'ram_unit' => $attributes['ram_unit'],
            'storage' => $attributes['storage'],
            'storage_unit' => $attributes['storage_unit'],
            'storage_type' => $attributes['storage_type'],
            'cpu_cores' => $attributes['cpu_cores'],
            'service_id' => $service->id
        ];
        VpsService::create($vps_service);

        return redirect()->route('admin.vps-services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        if(!$service->vpsService) abort(404);
        return view('admin.services.vps.detail', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        if(!$service->vpsService) abort(404);
        return view('admin.services.vps.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        if(!$service->vpsService) abort(404);
        $attributes = $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'ram' => 'required|integer',
            'ram_unit' => 'required|string',
            'cpu_cores' => 'required|integer',
            'interval' => 'required',
            'storage' => 'required|integer',
            'storage_unit' => 'required|string',
            'storage_type' => 'required|string',
            'interval_type' => 'required|in:month,year',
            'base_price' => 'required|integer'
        ]);

        $service_data = [
            'name' => $attributes['name'],
            'slug' => $attributes['slug'],
            'service_type' => "vps",
            'interval' => $attributes['interval'],
            'interval_type' => $attributes['interval_type'],
            'base_price' => $attributes['base_price'],
        ];

        $service->update($service_data);
        $vps_service = [
            'ram' => $attributes['ram'],
            'ram_unit' => $attributes['ram_unit'],
            'storage' => $attributes['storage'],
            'storage_unit' => $attributes['storage_unit'],
            'storage_type' => $attributes['storage_type'],
            'cpu_cores' => $attributes['cpu_cores'],
            'service_id' => $service->id
        ];
        $service->vpsService()->update($vps_service);
        return redirect()->route('admin.vps-services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        if(!$service->vpsService) abort(404);
        $service->vpsService()->delete();
        $service->delete();

        return redirect()->route('admin.vps-services.index');
    }
}
