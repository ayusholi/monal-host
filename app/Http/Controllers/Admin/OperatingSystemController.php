<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\OperatingSystem;
use App\Http\Controllers\Controller;

class OperatingSystemController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operating_systems = OperatingSystem::all();
        return view('admin.operating_system.index', compact('operating_systems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.operating_system.create');
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
            'version' => 'required',
            'remarks' => 'required'
        ]);

        OperatingSystem::create($request->all());

        return redirect()->route('admin.operating-systems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operating_system = OperatingSystem::findOrFail($id);
        return view('admin.operating_system.detail', compact('operating_system'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operating_system = OperatingSystem::findOrFail($id);
        return view('admin.operating_system.edit', compact('operating_system'));
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
        $operating_systems = OperatingSystem::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'version' => 'required',
            'remarks' => 'required'
        ]);

        $operating_systems->update($request->all());
        return redirect()->route('admin.operating-systems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operating_systems = OperatingSystem::findOrFail($id);
        $operating_systems->delete();

        return redirect()->route('admin.operating-systems.index');
    }
}
