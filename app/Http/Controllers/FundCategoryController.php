<?php

namespace App\Http\Controllers;

use App\Models\Fund_category;
use Illuminate\Http\Request;

class FundCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fund_category::all();

        return view('fund_category.index', ['data'=>$data]);
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
    public function show(Fund_category $fund_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fund_category $fund_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fund_category $fund_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fund_category $fund_category)
    {
        //
    }
}
