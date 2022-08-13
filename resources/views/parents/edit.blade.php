@extends('layout.app')

@section('content')
    <div class="container text-center bg-primary m-2 p-2 rounded text-white">
        <h2>
            Add New Parent to the School
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
    <div class="container ">
        <form action="{{ route('parents.update', $parent->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="container-md d-flex justify-content-center">
                <div class="father col">
                    <div class="form-group">
                        <label for="father_name">Father Name Name</label>
                        <input type="text" name="father_name" placeholder="Enter Father's Name" class="form-control" value="{{ $parent->father_name }}">
                    </div>

                    <div class="form-group">
                        <label for="father_phone">Father Phone Number</label>
                        <input type="text" name="father_phone" placeholder="Enter Father's Phone Number" class="form-control" value="{{ $parent->father_phone }}">
                    </div>

                    <div class="form-group">
                        <label for="father_occupation">Father's occupation</label>
                        <input type="text" name="father_occupation" placeholder="Enter Father's occupation" class="form-control" value="{{ $parent->father_occupation }}">
                    </div>
                </div>
                <div class="mother col">
                    <div class="form-group">
                        <label for="mother_name">Mother Name Name</label>
                        <input type="text" name="mother_name" placeholder="Enter mother's Name" class="form-control" value="{{ $parent->mother_name }}">
                    </div>

                    <div class="form-group">
                        <label for="mother_phone">Mother Phone Number</label>
                        <input type="text" name="mother_phone" placeholder="Enter mother's Phone Number" class="form-control" value="{{ $parent->mother_phone }}">
                    </div>

                    <div class="form-group">
                        <label for="mother_occupation">Mother's occupation</label>
                        <input type="text" name="mother_occupation" placeholder="Enter mother's occupation" class="form-control" value="{{ $parent->mother_occupation }}">
                    </div>
                </div>
            </div>     

           
                   
           

            <div class="text-center d-flex justify-content-around">
                <div class="">
                    <a href="{{ route('parents.index') }}" class="btn btn-danger"> Cancel</a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        </form>

    </div>
@endsection