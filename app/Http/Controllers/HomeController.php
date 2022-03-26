<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all()->take(3);
        $faqs = Faq::all()->take(5);
        return view('index', compact('services', 'faqs'));
    }

    public function serviceDetail($slug)
    {
        $services = Service::take(5)->get();
        $service_detail = Service::where('slug', $slug)->firstOrFail();
        return view('service.detail', compact('service_detail', 'services'));
    }

    public function contactUs()
    {
        return view('pages.contact_us');
    }
}
