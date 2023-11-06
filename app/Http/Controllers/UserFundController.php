<?php

namespace App\Http\Controllers;

use App\Models\User_fund;
use Illuminate\Http\Request;

class UserFundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User_fund::all();

        return view('user_fund.index', ['data'=>$data]);
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
    public function show(User_fund $user_fund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_fund $user_fund)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User_fund $user_fund)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_fund $user_fund)
    {
        //
    }
}
