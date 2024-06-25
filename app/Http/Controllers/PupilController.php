<?php

namespace App\Http\Controllers;

use App\Models\Pupil;
use App\Models\Classes;
use App\Models\Parents;
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


        $pupils = Pupil::with(['classes' , 'fees', 'parents'] )->latest()->paginate(3);
        // dd($pupils);
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
        $classes = Classes::all();
        return view('pupils.create', compact('parents', 'classes'));
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
            'father_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
            'school_fee' => 'required',
            'classes_id' => 'required'
            ]);
            // dd($request->all());
            
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
        // dd($pupil->classes);
        // create a variable, call the model; use with function and pass in the 
        //relationship model name i.e the name used in model while creating the relationship 
        $parents = Parents::where('id', $pupil->parents_id)->get();
        // $parents = Parents::get('id');
        // dd($parents);
        // foreach($pupil as $parents)
        // // dd($pupil->id);
        // $parentId = $pupil->id;
        // // dd($parentId);
        // $parents = Pupil::find($parentId)->parent;
        // // dd($parents);

        $pupilId = $pupil->id;
        $fees = $pupil->school_fee;
        // dd($pupilId);

        $paid = Pupil::with('fees')->find($pupilId)->fees->sum('fees');
        $owed = $fees - $paid;

        // dd($fees);
        // $sum = array_sum($fees);
        // dd($sum);
        

        return view('pupils.show', compact('pupil', 'parents', 'paid', 'owed'));
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
            'father_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
            'school_fee' => 'required',
            'classes_id' => 'required'
        ]);
        $pupil->update($request->all());

        return redirect()->route('pupils.index')->with('success', 'Pupil updated successfully');
    }

    // Pay School Fees 


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
