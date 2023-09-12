<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all(); // Adjust the condition as needed

        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'badge' => 'required',
            'description' => 'required',
        ]);

        // Upload image to storage
        $imagePath = $request->file('img')->store('banner_images', 'public');
        $imageUrl = Storage::url($imagePath);

        Banner::create([
            'img' => $imageUrl,
            'badge' => $request->input('badge'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banners = Banner::findOrFail($id);
        return view('banners.edit', compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'badge' => 'required',
                'description' => 'required',
            ]);

            $banner = Banner::findOrFail($id);

            if ($request->hasFile('img')) {
                // Delete the previous image if it exists
                if ($banner->img && Storage::disk('public')->exists($banner->img)) {
                    Storage::disk('public')->delete($banner->img);
                }

                $imagePath = $request->file('img')->store('banner_images', 'public');
                $imgUrl = Storage::url($imagePath);
                $data['img'] = $imgUrl; // Store the image path
            }

            $banner->update($data);

            return redirect()->route('banners.index')->with('success', 'Banner updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $banner = Banner::findOrFail($id);

    // Delete the image from storage
    Storage::delete('public/' . $banner->img);

    // Delete the banner record
    $banner->delete();

    return redirect()->route('banners.index')->with('success', 'Banner deleted successfully');
}
}
