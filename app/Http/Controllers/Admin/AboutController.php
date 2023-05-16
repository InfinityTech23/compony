<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = DB::table('about-us')->get()->first();
        return view('admin.about-us.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $about = DB::table('about-us')->find($id);
        return view('admin.about-us.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($request->file('image')) {
            $imageName = time() . "" . $request->file('image')->extension();
            $request->file('image')->move(public_path('uploads'), $imageName);
            DB::table('about-us')->where('id', $id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imageName,
            ]);
        }
        else
        {
            DB::table('about-us')->where('id', $id)->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
        }


        return redirect()->back()->with('success', "About us has been updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
