<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::orderBy('id', 'DESC')->get();

        return view('admin.supports.index', compact('supports'));
    }
}
