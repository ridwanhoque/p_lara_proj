<?php

namespace App\Http\Controllers;

use App\Models\BkashOrder;
use Illuminate\Http\Request;

class BkashOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bkash_orders  = BkashOrder::orderByDesc('id')->get();
        return view('bkash_orders.index', compact('bkash_orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BkashOrder  $bkashOrder
     * @return \Illuminate\Http\Response
     */
    public function show(BkashOrder $bkashOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BkashOrder  $bkashOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(BkashOrder $bkashOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BkashOrder  $bkashOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BkashOrder $bkashOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BkashOrder  $bkashOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(BkashOrder $bkashOrder)
    {
        //
    }
}
