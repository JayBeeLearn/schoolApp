@extends('layout.app')

@section('content')

        <div class="container bg-primary text-center text-white rounded py-2 my-2">
            <h2>Editing {{ $pupil->first_name }} {{ $pupil->last_name }}</h2>
        </div>
    <form action="{{ route('pupils.update', $pupil->id) }}" method="POST">
            @csrf
            @method('PUT')

            
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="{{ $pupil->first_name }}">
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" name="middle_name" placeholder="Enter Middle Name" class="form-control" value="{{ $pupil->middle_name }}">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="{{ $pupil->last_name }}">
            </div>

            
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" placeholder="Date of Birth" class="form-control" value="{{ $pupil->date_of_birth }}">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Residential Address" class="form-control" value="{{ $pupil->address }}">
            </div>

        

            <div class="text-center d-flex justify-content-around">
                <div class="">
                    <a href="{{ route('pupils.index') }}" class="btn btn-danger"> Cancel</a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        </form>
    </div>
@endsection