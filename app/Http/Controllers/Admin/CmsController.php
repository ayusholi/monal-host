<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmses = Cms::all();
        return view('admin.cms.index', compact('cmses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.create');
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
            'key' => 'required|unique:cms,key|min:2',
            'title' => 'required|string|min:2|max:255',
            'body' => 'required|min:2',
        ]);

        Cms::create($request->all());

        return redirect()->route('admin.cms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cms = Cms::findOrFail($id);
        return view('admin.cms.detail', compact('cms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cms = Cms::findOrFail($id);
        return view('admin.cms.edit', compact('cms'));
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
        $cms = Cms::findOrFail($id);
        $this->validate($request, [
            'key' => 'required|min:2|unique:cms,key,' . $id,
            'title' => 'required|string|min:2|max:255',
            'body' => 'required|min:2',
        ]);

        $cms->update($request->all());
        return redirect()->route('admin.cms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cms = Cms::findOrFail($id);
        $cms->delete();

        return redirect()->route('admin.cms.index');
    }
}
