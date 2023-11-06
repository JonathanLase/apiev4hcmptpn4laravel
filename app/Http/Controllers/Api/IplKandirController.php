<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\IplKandirRequest;
use App\Http\Resources\IplKandirResource;
use App\Models\Iplkandir;
use Illuminate\Http\Request;

class IplKandirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IplKandirRequest $request)
    {
        $createIplKandir = Iplkandir::create($request->validated());

        return new IplKandirResource($createIplKandir);
    }

    /**
     * Display the specified resource.
     */
    public function show(Iplkandir $iplkandir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Iplkandir $iplkandir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iplkandir $iplkandir)
    {
        //
    }
}
