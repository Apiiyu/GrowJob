<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use Illuminate\Http\Request;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMagang = Intern::paginate(4);
        return view('intern.intern', compact('dataMagang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intern.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $createInfoMagang = new Intern;
        // $createInfoMagang->title = $request->title;
        // $createInfoMagang->slug = \Str::slug($request->title);
        // $createInfoMagang->body = $request->body;
        // $createInfoMagang->infoPerusahaan = $request->infoPerusahaan;
        // $createInfoMagang->save();

        /* 
            Ada cara untuk membuat code kita semakin ringkas dalam pembuatan info magang
            1. Hilangkan Parameter Request dan variable requestnya
            Public function store(){}

            2. lalu kita membuat variable attr yang menampung semua requestnya
            $attr = request()->validate([
                'title'          => 'required|min:3|max:32',
                'body'           => 'required|min:3|max:300',
                'infoPerusahaan' => 'required|min:3|max:300',
            ]);

            $attr['slug'] = Str::slug(request('title'));
            Intern::create($attr);
        */


        $request->validate([
            'title'          => 'required|min:3|max:32',
            'body'           => 'required|min:3|max:300',
            'infoPerusahaan' => 'required|min:3|max:300',
        ]);

        $createInfoMagang = $request->all();
        $createInfoMagang['slug'] = \Str::slug($request->title);
        Intern::create($createInfoMagang);

        return redirect()->to('magang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function show(Intern $Intern)
    {
        $Magang = $Intern;
        return view('intern.detail', compact('Magang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function edit(Intern $intern)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intern $intern)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intern  $intern
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intern $intern)
    {
        //
    }
}
