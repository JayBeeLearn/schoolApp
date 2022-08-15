<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\Pupil;
use Illuminate\Http\Request;

class PupilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pupils = Pupil::latest()->paginate(3);
        return view('pupils.index', compact('pupils'))->with(request()->input('page'));


        // $products = Product::latest()->paginate(3);
        // return view('products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Parents $parents)
    {
        // $parents = Parents::all();
        return view('pupils.create', compact('parents'));
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
            'first_name' => 'required|max:255',
            'middle_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
            'school_fee' => 'required'
        ]);

        Pupil::create($request->all());

        return redirect()->route('pupils.index')->with('success', 'Pupil added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pupil $pupil, Parents $parents)
    {
        // create a variable, call the model; use with function and pass in the 
        //relationship model name i.e the name used in model while creating the relationship 
        $parents = Parents::where('id', $pupil->parents_id)->get();
        // $parents = Parents::with('pupil')->get();
        

        return view('pupils.show', compact('pupil', 'parents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pupil $pupil)
    {
        return view('pupils.edit', compact('pupil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pupil $pupil)
    {
        $this->validate($request, [
            'first_name' => 'required|max:255',
            'middle_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required'
        ]);



        $pupil->update($request->all());

        return redirect()->route('pupils.index')->with('success', 'Pupil updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pupil $pupil)
    {
        $pupil->delete();
        return redirect()->route('pupils.index')->with('danger', 'Pupil deleted successfully');
    }
}
