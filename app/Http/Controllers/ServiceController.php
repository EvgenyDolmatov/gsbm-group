<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('app.account.services.services', [
            'services' => Service::all(),
        ]);
    }

    public function create()
    {
        return view('app.account.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255']
        ]);

        $images = $request->file('images');
        $service = Service::create($request->all());

        if ($images) {
            foreach ($images as $image) {
                ServiceImage::uploadImage($image, $service);
            }
        }

        return redirect()->route('services.index');
    }

    public function publicShow($serviceSlug)
    {
        return view('app.service-page', [
            'service' => Service::where('slug', $serviceSlug)->first(),
        ]);
    }

    public function edit(Service $service)
    {
        return view('app.account.services.edit', [
            'service' => $service,
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255']
        ]);

        $images = $request->file('images');
        $service->update($request->all());

        if ($images) {
            foreach ($images as $image) {
                ServiceImage::uploadImage($image, $service);
            }
        }

        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
        $service->remove();
        return back();
    }
}
