<?php

namespace App\Http\Controllers;

use App\Models\Horoscop;
use App\Models\Lang;
use App\Http\Requests\StoreHoroscopRequest;
use App\Http\Requests\UpdateHoroscopRequest;
use Carbon\Carbon;

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

    public function importarHoroscop()
    {
        $langs = Lang::all();

        // Definim els signes del zodíac en un array
        $horoscops = ['aquarius', 'pisces', 'aries', 'taurus', 'gemini', 'cancer', 'leo', 'virgo', 'libra', 'scorpio', 'sagittarius', 'capricorn'];
        $temps = ['today'];

        // Recorrem els signes del zodíac
        foreach ($temps as $temp) {
            foreach ($horoscops as $horoscop) {
                $text = file_get_contents('https://aztro.sameerkumar.website/?sign=' . $horoscop . '&day=' . $temp);
                Horoscop::create([
                    'date' => Carbon::now()->format('d/m/y'),
                    'lang' => 'en',
                    'sign' => $horoscop,
                    'time' => 'today',
                    'phrase' => $text,
                ]);
            }
        }

        // Mostrem un misstage de confirmació
        return response()->json(['message' => 'Horoscop importat correctament']);
    }
}
