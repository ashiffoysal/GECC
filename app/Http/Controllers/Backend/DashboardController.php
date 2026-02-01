<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInformation;
use App\Models\Seo;

class DashboardController extends Controller
{
    public function admin()
    {
        return view('backend.dashboard.index');
    }

    public function contact()
    {
        return view('backend.dashboard.contact');
    }

    // 
    public function siteSettings()
    {
        $data =CompanyInformation::first();
        return view('backend.company_information.index', compact('data'));
    }
    // 
    public function updateSiteSettings(Request $request)
    {
           // ✅ Validation
        $request->validate([
            'company_name' => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'nullable|string|max:50',
            'mobile'       => 'nullable|string|max:50',
            'address'      => 'nullable|string',
            'facebook'     => 'nullable|url',
            'twitter'      => 'nullable|url',
            'youtube'      => 'nullable|url',
            'googleplus'   => 'nullable|url',
            'logo'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'fab_icon'     => 'nullable|image|mimes:jpg,jpeg,png,ico|max:1024',
        ]);

        // ✅ Find data
        $data = CompanyInformation::findOrFail($request->id);

        // ✅ Update normal fields
        $data->company_name = $request->company_name;
        $data->email        = $request->email;
        $data->phone        = $request->phone;
        $data->mobile       = $request->mobile;
        $data->address      = $request->address;
        $data->facebook     = $request->facebook;
        $data->twitter      = $request->twitter;
        $data->youtube      = $request->youtube;
        $data->googleplus   = $request->googleplus;
        // $data->updated_by   = Auth::id(); // admin id

        // ✅ Logo upload
        if ($request->hasFile('logo')) {
            $logoName = time() . '_logo.' . $request->logo->extension();
            $request->logo->move(public_path('uploads/company'), $logoName);
            $data->logo = $logoName;
        }

        // ✅ Favicon upload
        if ($request->hasFile('fab_icon')) {
            $iconName = time() . '_favicon.' . $request->fab_icon->extension();
            $request->fab_icon->move(public_path('uploads/company'), $iconName);
            $data->fav_icon = $iconName;
        }

        // ✅ Save
        $data->save();

        return redirect()->back()->with('success', 'Company information updated successfully');
    
    }

    public function seoSettings()
    {
        $data =Seo::first();
        return view('backend.seo.index', compact('data'));
    }

    public function updateSeoSettings(Request $request)
    {
        // Implementation for updating SEO settings goes here
         // ✅ Validation
        $request->validate([
            'meta_title'              => 'nullable|string|max:255',
            'meta_description'        => 'nullable|string|max:500',
            'meta_keywords'           => 'nullable|string',
            'meta_author'             => 'nullable|string|max:255',
            'meta_tags'               => 'nullable|string',
            'google_analytics'        => 'nullable|string',
            'google_verification'     => 'nullable|string',
            'facebook_verification'   => 'nullable|string',
            'bing_verification'       => 'nullable|string',
        ]);

        // ✅ Single row SEO settings
        $seo = Seo::find($request->id);

        if (!$seo) {
            $seo = new Seo();
        }

        $seo->meta_title            = $request->meta_title;
        $seo->meta_description      = $request->meta_description;
        $seo->meta_keywords         = $request->meta_keywords;
        $seo->meta_author           = $request->meta_author;
        $seo->meta_tags             = $request->meta_tags;
        $seo->google_analytics      = $request->google_analytics;
        $seo->google_verification   = $request->google_verification;
        $seo->facebook_verification = $request->facebook_verification;
        $seo->bing_verification     = $request->bing_verification;
        // $seo->updated_by            = Auth::id();

        $seo->save();

        return redirect()->back()->with('success', 'SEO settings updated successfully');
    }
    



}
