<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmailService;

class EmailServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.email.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.email.create');
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
            'interval' => 'required',
            'storage_type' => 'required|string',
            'interval_type' => 'required|in:month,year',
            'base_price' => 'required|integer',
            'mailbox' => 'required|integer',
            'storage' => 'required|integer',
            'storage_unit' => 'required|string|min:2|max:5',
            'anti_spam' => 'required|integer|in:0:1',
            'rate_limit' => 'required|integer|in:0:1',
            'blacklist_email' => 'required|integer|in:0:1',
        ]);

        $service_data = [
            'name' => $attributes['name'],
            'slug' => $attributes['slug'],
            'service_type' => "email",
            'interval' => $attributes['interval'],
            'interval_type' => $attributes['interval_type'],
            'base_price' => $attributes['base_price'],
        ];

        $service = Service::create($service_data);
        $email_service = [
            'mailbox' => $attributes['mailbox'],
            'storage' => $attributes['storage'],
            'storage_unit' => $attributes['storage_unit'],
            'storage_type' => $attributes['storage_type'],
            'anti_spam' => $attributes['anti_spam'],
            'blacklist_email' => $attributes['blacklist_email'],
            'rate_limit' => $attributes['rate_limit'],
            'service_id' => $service->id
        ];
        EmailService::create($email_service);

        return redirect()->route('admin.email-services.index');
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
        if(!$service->emailService) abort(404);
        return view('admin.services.email.detail', compact('service'));
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
        if(!$service->emailService) abort(404);
        return view('admin.services.email.edit', compact('service'));
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
        if(!$service->emailService) abort(404);
        $attributes = $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'storage_type' => 'required|string',
            'interval_type' => 'required|in:month,year',
            'base_price' => 'required|integer',
            'mailbox' => 'required|integer',
            'storage' => 'required|integer',
            'storage_unit' => 'required|string|min:2|max:5',
            'anti_spam' => 'required|integer|in:0:1',
            'rate_limit' => 'required|integer|in:0:1',
            'blacklist_email' => 'required|integer|in:0:1',
        ]);

        $service_data = [
            'name' => $attributes['name'],
            'slug' => $attributes['slug'],
            'service_type' => "email",
            'interval' => $attributes['interval'],
            'interval_type' => $attributes['interval_type'],
            'base_price' => $attributes['base_price'],
        ];

        $service->update($service_data);
        $email_service = [
            'mailbox' => $attributes['mailbox'],
            'storage' => $attributes['storage'],
            'storage_unit' => $attributes['storage_unit'],
            'storage_type' => $attributes['storage_type'],
            'anti_spam' => $attributes['anti_spam'],
            'blacklist_email' => $attributes['blacklist_email'],
            'rate_limit' => $attributes['rate_limit'],
        ];
        $service->emailService()->update($email_service);
        return redirect()->route('admin.email-services.index');
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
        if(!$service->emailService) abort(404);
        $service->emailService()->delete();
        $service->delete();

        return redirect()->route('admin.email-services.index');
    }
}
