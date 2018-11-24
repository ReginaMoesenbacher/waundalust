<?php

namespace App\Http\Controllers\Backend;

use App\Waundarouten;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WaundaroutenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waundarouten = Waundarouten::all();



        return view('backend.waundarouten.index', ['waundarouten' => $waundarouten]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $waundarouten = new Waundarouten;
        $waundarouten->fill($request->old());

        return view('backend.waundarouten.create', ['waundarouten' => $waundarouten]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'string|required',
            'length' => 'string|required',
            'distance' => 'string|required',
            'claim' => 'string|required',
            'content' => 'string|required',
            'preview' => 'string|required',
            'img' => 'string|required',
            'maps' => 'string|required',

        ]);

        $waundarouten = new WaundaroutenController;
        $waundarouten->fill($request->all());

        $waundarouten->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Waundarouten  $backendWaundarouten
     * @return \Illuminate\Http\Response
     */
    public function show(Waundarouten $backendWaundarouten)
    {
        $waundarouten = Waundarouten::findOrFail($backendWaundarouten);

        return view('backend.waundarouten.show', ['waundarouten' => $waundarouten]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Waundarouten  $backendWaundarouten
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Waundarouten $backendWaundarouten)
    {
        $waundarouten = Waundarouten::findOrFail($backendWaundarouten);
        $waundarouten->fill($request->old());

        return view('backend.waundarouten.edit', ['waundarouten' => $waundarouten]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Waundarouten  $backendWaundarouten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waundarouten $backendWaundarouten)
    {
        $this->validate($request, [

            'title' => 'string|required',
            'length' => 'string|required',
            'distance' => 'string|required',
            'claim' => 'string|required',
            'content' => 'string|required',
            'preview' => 'string|required',
            'img' => 'string|required',
            'maps' => 'string|required',
        ]);

        $waundarouten = Waundarouten::findOrFail($backendWaundarouten);
        $waundarouten->fill($request->all());
        $waundarouten->save();

        return response()->redirectToRoute('backend.waundarouten.show', $backendWaundarouten)->with('info', 'Waundarouten updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Waundarouten  $backendWaundarouten
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackendWaundarouten $backendWaundarouten)
    {
        $waundarouten = BackendWaundarouten::findOrFail($backendWaundarouten);
        $waundarouten->delete();

        return response()->redirectToRoute('backend.waundarouten.index')->with('info', 'Waundarouten deleted');
    }
}
