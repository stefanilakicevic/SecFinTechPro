<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Fund::query()
            ->select('fund.name', 'fund.isin', 'fund_category_id', 'fund_sub_category_id', 'fund.wkn', 'fund_categories.name as category_name', 'fund_sub_categories.name as subcategory_name')
            ->leftJoin('fund_categories', 'fund_categories.id', '=', 'fund.fund_category_id')
            ->leftJoin('fund_sub_categories', 'fund_sub_categories.id', '=', 'fund.fund_sub_category_id');

        if (Auth::check()) {
            $data = $query->paginate(10);
        } else {
            // For guests, you may handle what they can see (basic data) in a different way
            $data = $query->select('fund.name', 'fund.isin', 'fund.wkn')->paginate(10);
        }

        return view('fund.index', ['data'=>$data]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $results = Fund::where('name', 'like', "%$query%")
            ->orWhere('isin', 'like', "%$query%")
            ->orWhere('wkn', 'like', "%$query%")
            ->get();

        return view('fund.search_results', ['results' => $results]);
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
    public function show(Fund $fund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fund $fund)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fund $fund)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fund $fund)
    {
        //
    }
}
