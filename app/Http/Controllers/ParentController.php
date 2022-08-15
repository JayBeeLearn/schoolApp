<?php

namespace App\Http\Controllers;

use App\Models\Pupil;
use App\Models\Parents;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents = Parents::latest()->paginate(3);
        return view('parents.index', compact('parents'))->with(request()->input('page'));

        // $pupil = Parents::with('pupil');
        // dd($pupil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parents.create');
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
            'father_name' => 'required',
            'father_phone' => 'required',
            'father_occupation' => 'required',
            'mother_name' => 'required',
            'mother_phone' => 'required',
            'mother_occupation' => 'required'
        ]);

        Parents::create($request->all());

        return \redirect()->route('parents.index')->with('success', 'Parent created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function shows(Parents $parent, Pupil $pupils)
    {
        // $parent_id = Parents::get('id');
        // $pupils = Pupil::find($parent_id);

        $pupils = Pupil::where('parents_id, $parent->id')->get();
        return view('parents.show', compact('parent', 'pupils'));
    }

    public function show(Parents $parent, Pupil $pupil)
    {
        // $parent_id = Parents::get('id');
        // $pupils = Pupil::find($parent_id);

        
        $pupils = Pupil::where('parents_id', $parent->id)->get();
        // dd($pupils->first_name);
        // foreach($pupils as $pupil)
        // {
        //     foreach($pupil->pupils as $p){
        //         dd($p->first_name);
        //     }
        // }
        // dd($pupil->pupils->id);
        return view('parents.show', compact('parent', 'pupils'));
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function edit(Parents $parent)
    {
        return view('parents.edit', compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parents $parent)
    {
        $this->validate($request, [
            'father_name' => 'required',
            'father_phone' => 'required',
            'father_occupation' => 'required',
            'mother_name' => 'required',
            'mother_phone' => 'required',
            'mother_occupation' => 'required'
        ]);

        $parent->update($request->all());

        return redirect()->route('parents.index')->with('success', 'Parent info updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parents  $parent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parents $parent)
    {
        $parent->delete();
        return redirect()->route('parents.index');
    }
}
