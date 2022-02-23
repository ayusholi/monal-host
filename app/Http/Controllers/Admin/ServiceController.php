<?php

namespace App\Http\Controllers\Admin;

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
        $services = Service::all();
        return view('admin.services.index', compact('services'));
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
        $this->validate($request, [
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

        Service::create($request->all());

        return redirect()->route('admin.services.index');
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
        return view('admin.services.detail', compact('service'));
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
        return view('admin.services.edit', compact('service'));
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
        $this->validate($request, [
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

        $service->update($request->all());
        return redirect()->route('admin.services.index');
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
        $service->delete();

        return redirect()->route('admin.services.index');
    }
}
