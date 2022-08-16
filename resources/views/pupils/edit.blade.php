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

            <div class="form-group">
                <label for="class">Class </label>
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