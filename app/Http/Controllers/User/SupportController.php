<?php

namespace App\Http\Controllers\User;

use App\Models\Support;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SupportMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $supports = Support::where('user_id', $user->id)->whereNull('primary_support_id')->orderBy('id', 'DESC')->get();

        return view('auth.user.support.index', compact('supports'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'title' => "required|min:2|max:250",
            'body' => "required"
        ]);

        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'type' => 'question',
            'user_id' => $user->id
        ];

        $support = Support::create($data);

        Mail::to(env('SUPPORT_MAIL'))->send(new SupportMail($request->title, $request->body, $user));

        return back();
    }
}
