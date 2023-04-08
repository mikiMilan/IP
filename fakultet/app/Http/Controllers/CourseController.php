<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $predmeti = Course::all();
        return view('predmeti.index', ['naziv'=>'Predmeti', 'predmeti'=>$predmeti]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('predmeti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataFrame = $request->validate([
            'naziv'=>'required|min:3',
            'opis'=>'min:10',
            'status'=>'required|in:o,i',
            'ects'=>'numeric'
        ]);

        Course::create($dataFrame);

        return redirect('/predmeti')->with('message', "Uspjesno ste kreirali kurs.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $predmet = Course::where('id', $id)->get();
        dd($predmet);
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $predmet = Course::where('id', $id)->get();
        return view('predmeti.edit', ['naziv'=>$predmet[0]['naziv'],'predmet'=>$predmet[0]]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataFrame = $request->validate([
            'naziv'=>'required|min:3',
            'opis'=>'min:10',
            'status'=>'required|in:o,i',
            'ects'=>'numeric'
        ]);

        $predmet = Course::where('id', $id)->get()[0];
        $predmet->update($dataFrame);

        return back()->with('message', "Uspješno je izmjenjen predmet");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $predmet = Course::where('id', $id)->first();
        $name = $predmet->naziv;
        $predmet->delete();

        return redirect("/predmeti")->with('message', "Kurs ".$name." je obbrisan");
    }
}
