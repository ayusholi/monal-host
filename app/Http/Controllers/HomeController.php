<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vps_services = Service::where('service_type', 'vps')->take(3)->get();
        $email_services = Service::where('service_type', 'email')->take(3)->get();
        $faqs = Faq::all()->take(5);
        return view('index', compact('vps_services', 'email_services', 'faqs'));
    }

    public function serviceDetail($slug)
    {
        $services = Service::take(5)->get();
        $service_detail = Service::where('slug', $slug)->firstOrFail();
        return view('service.detail', compact('service_detail', 'services'));
    }

    public function contactUs()
    {
        $services = Service::take(5)->get();
        return view('pages.contact_us', compact('services'));
    }
}
