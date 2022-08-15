@extends('layout.app')

@section('content')

    <div class="">
        <a href="{{ route('pupils.index') }}" class="btn btn-warning my-2"> Back</a>
    </div>

    <div class="container">
        <div class="container bg-primary text-center text-white rounded py-2 my-2">
            <h2>Showing {{ $pupil->first_name }} {{ $pupil->last_name }}</h2>
        </div>
        

        @foreach ($parents as $parent)
            <ul>
                <li>
                    Parents's Name: <a href="{{ route('parents.show', $parent->id) }}"> {{ $parent->father_name }}, {{ $parent->mother_name }} </a>
                </li>
            </ul>
        @endforeach
        <table class="table table-bordered">
            <tr>
                <th>DESCRIPTION</th>
                <th>DETAILS</th>
            </tr>
            <tr>
                <td>Student Id</td>
                <td>{{ $pupil->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $pupil->first_name }} {{ $pupil->middle_name }} {{ $pupil->last_name }}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>{{ $pupil->gender }}</td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td>{{ $pupil->date_of_birth }}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{ $pupil->address }}</td>
            </tr>
            <tr>
                <td>School Fee</td>
                <td>{{ $pupil->school_fee }}</td>
            </tr>
            
        </table>   

    </div>
    <div class="container text-center">
            <a href="{{ route('pupils.edit', $pupil->id) }}" class="btn btn-warning"> Edit</a>
    </div>
@endsection