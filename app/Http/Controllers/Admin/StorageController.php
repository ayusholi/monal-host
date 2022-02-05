<?php

namespace App\Http\Controllers\Admin;

use App\Models\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storages = Storage::all();
        return view('admin.storage.index', compact('storages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.storage.create');
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
            'latitude' => 'required',
            'longitude' => 'required',
            'price' => 'required'
        ]);

        Storage::create($request->all());

        return redirect()->route('admin.storages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $storage = Storage::findOrFail($id);
        return view('admin.storage.detail', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storage = Storage::findOrFail($id);
        return view('admin.storage.edit', compact('storage'));
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
        $storage = Storage::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'price' => 'required'
        ]);

        $storage->update($request->all());
        return redirect()->route('admin.storages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $storage = Storage::findOrFail($id);
        $storage->delete();

        return redirect()->route('admin.storages.index');
    }
}
