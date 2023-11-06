<?php

namespace App\Http\Controllers;

use App\Models\Fund_sub_category;
use Illuminate\Http\Request;

class FundSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fund_sub_category::paginate(10);

        return view('fund_sub_category.index', ['data'=>$data]);
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
    public function show(Fund_sub_category $fund_sub_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fund_sub_category $fund_sub_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fund_sub_category $fund_sub_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fund_sub_category $fund_sub_category)
    {
        //
    }
}
