@extends('layout.app')

@section('content')
    <div class="container text-center bg-primary m-2 p-2 rounded text-white">
        <h2>
            Add New Pupil/Student to the School
        </h2>
    </div>
    @if ($errors->any())
        <div class="container alert alert-danger">
            <p><strong>Whoops!</strong> There are some errors with your input </p> <br>

            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>
        
    @endif
    <div class="container">
        <form action="{{ route('pupils.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" placeholder="Enter First Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" name="middle_name" placeholder="Enter Middle Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" placeholder="Date of Birth" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Residential Address" class="form-control">
            </div>

            <div class="form-group">
                <label for="parents_id" class="sr-only" >Parents Id</label>
                <input type="text" name="parents_id" placeholder="Enter parents ID" class="form-control" value="{{ $parents->id }}" hidden>
            </div>

            <div class="form-group">
                <label for="school_fee">School Admitted</label>
                <select name="school_fee" id="school">
                    <option value="15000">Nursery</option>
                    <option value="15000">Primary</option>
                    <option value="18000">Secondary</option>
                </select>
            </div>

             <div class="form-group">
                <label for="class">Class Admitted</label>
                <select name="class" id="class">
                    <option value="Creche">Creche</option>
                    <option value="Lower Reception">Lower Reception</option>
                    <option value="Upper Reception">Upper Reception</option>
                    <option value="Preparatory">Preparatory</option>
                    <option value="Nursery One">Nursery One</option>
                    <option value="Nursery Two">Nursery Two</option>
                    <option value="Basic One">Basic One</option>
                    <option value="Basic Two">Basic Two</option>
                    <option value="Basic Three">Basic Three</option>
                    <option value="Basic Four">Basic Four</option>
                    <option value="Basic Five">Basic Five</option>
                    <option value="JSS One">JSS One</option>
                    <option value="JSS Two">JSS Two</option>
                    <option value="JSS Three">JSS Three</option>
                    <option value="SS One">SS One</option>
                    <option value="SS Two">SS Two</option>
                    <option value="SS Three">SS Three</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        </form>
    </div>
@endsection