@extends('layout.app')

@section('content')
<div class="min-h[100vh]">
    <div class="text-center bg-blue-500 my-2 px-4 py-2 rounded text-white">
        <h2 class="text-2xl md:text-4xl">
            Add New Pupil/Student to the School
        </h2>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <p><strong>Whoops!</strong> There are some errors with your input </p> <br>

            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>
        
    @endif
    <div class="sm:w-full flex ">
        <div class="mx-auto w-2/3 pb-8">
            <form action="{{ route('pupils.store') }}" method="POST">
            @csrf

            <div class="group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" placeholder="Enter First Name" class="w-full border-2 rounded block px-4 py-1">
            </div>

            <div class="group">
                <label for="father_name">Father's Name</label>
                <input type="text" name="father_name" placeholder="Enter Middle Name" class="w-full border-2 rounded block px-4 py-1" value="{{ $parents->father_name }}" >
            </div>

          

            <div class="group">
                <label for="gender">Gender</label>
                <select class="border-2 rounded w-full px-4 py-1" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            
            <div class="group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" placeholder="Date of Birth" class="w-full border-2 rounded block px-4 py-1">
            </div>

            <div class="group">
                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Residential Address" class="w-full border-2 rounded block px-4 py-1">
            </div>

            <div class="group">
                <label for="parents_id" class="sr-only" >Parents Id</label>
                <input type="hidden" name="parents_id" placeholder="Enter parents ID" class="w-full border-2 rounded block px-4 py-1" value="{{ $parents->id }}" hidden >
            </div>

            <div class="group">
                <label for="school_fee">School Admitted</label>
                <select class="border-2 rounded w-full px-4 py-1" name="school_fee" id="school">
                    <option value="15000">Nursery</option>
                    <option value="15000">Primary</option>
                    <option value="18000">Secondary</option>
                </select>
            </div>

             <div class="group">
                <label for="classes_id">Class Admitted</label>
                <select class="border-2 rounded w-full px-4 py-1" name="classes_id" id="class">
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->class }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center bg-blue-500 px-4 py-2 my-2 rounded-md text-white">
                <button type="submit" class="w-full">Submit</button>
            </div>

            

            </form>
        </div>
    </div>
</div>
@endsection