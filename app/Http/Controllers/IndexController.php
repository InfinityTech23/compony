<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = DB::table('about-us')->get()->first();
        $categories = DB::table('categories')->get();
        /**
         * cat_id => [
         *  1 => websites,
         *  2 => designs,
         *  3 => apps
         * ]
        */
        $websites = DB::table('products')->where('cat_id', 1)->get();
        $designs = DB::table('products')->where('cat_id', 2)->get();
        $apps = DB::table('products')->where('cat_id', 3)->get();
        return view('index', compact('about', 'categories', 'websites', 'apps', 'designs'));
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
        //
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