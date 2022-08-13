@extends('layout.app')


@section('content')

    <div class="">
        <a href="{{ route('class.index') }}" class="btn btn-warning my-2"> Back</a>
    </div>

    <div class="container bg-info rounded">
        <h2 class="text-center text-white p-2">
            Create A New Class
        </h2>
    </div>

    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="school_category">School Category</label>
                <select name="school_category" id="school_category">
                    <option value="Secondary">Secondary</option>
                    <option value="Primary">Primary</option>
                    <option value="Nursery">Nursery</option>
                    <option value="Pre-Nursery">Pre-Nursery</option>
                </select>
            </div>
        </form>
        
    </div>


@endsection 