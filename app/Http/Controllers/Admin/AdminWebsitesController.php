<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminWebsitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $websites = DB::table('products')->where('cat_id', 1)->get();
        return view('admin.websites.index', compact('websites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.websites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'mainImage' => 'required|image'
        ]);

        $mainImage = time() . '.' . $request->file('mainImage')->extension();
        $request->file('mainImage')->move(public_path('uploads/websites/'), $mainImage);


        // Insert And Return Last ID
        $lastID = DB::table('products')->insertGetId([
            'cat_id' => 1,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'mainImage' => $mainImage,
            'server' => $request->get('server')
        ]);
        foreach ($request->file('images') as $value) {
            $name = time() . "range(0, 50, 1)" . '.' . $value->extension();
            $value->move(public_path('uploads/websites/'), $name);
            DB::table('product_gallery')->insert([
                'product_id' => $lastID,
                'src' => $name
            ]);
        }

        return redirect()->back()->with('success', 'Your Website has been added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $website = DB::table('products')->find($id);
        return view('admin.websites.edit', compact('website'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}