<?php

namespace App\Http\Controllers;

use App\Models\Horoscop;
use App\Http\Requests\StoreHoroscopRequest;
use App\Http\Requests\UpdateHoroscopRequest;

class HoroscopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreHoroscopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Horoscop $horoscop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horoscop $horoscop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHoroscopRequest $request, Horoscop $horoscop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horoscop $horoscop)
    {
        //
    }
}
