<?php

namespace App\Http\Controllers;

use App\Models\Cms;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function aboutUs()
    {
        $services = Service::take(5)->get();
        $cms = Cms::where('key', 'about_us')->firstOrFail();
        return view('pages.test', compact('cms'));
    }

    public function termsOfService()
    {
        $services = Service::take(5)->get();
        $cms = Cms::where('key', 'terms_of_service')->firstOrFail();
        return view('pages.cms', compact('cms'));
    }

    public function privacyPolicy()
    {
        $services = Service::take(5)->get();
        $cms = Cms::where('key', 'privacy_policy')->firstOrFail();
        return view('pages.cms', compact('cms'));
    }

    public function faqs()
    {
        $faqs = Faq::all();
        $services = Service::take(5)->get();
        return view('pages.faqs', compact('faqs', 'services'));
    }
}
