@extends('layout.app')


@section('content')
{{-- External JavaScript --}}
    {{-- <script src="{{ url('js/main.js') }}"></script> --}}

    <div class="d-flex justify-content">
        <div class="container">
            <a href="{{ route('parents.index') }}" class="btn btn-warning my-2"> Back</a>
        </div>
        {{-- Total Amount owed by a parent  --}}
        <div class="container ">
            <span id="schoolFee" class="bg bg-dark p-2 rounded text-white"></span>
        </div>
        {{-- Add New ward to a parent --}}
        <div class="container my-1">
            <a href="{{ route('pupils.create', $parent->id) }}" class="btn btn-primary text-white  ">New Ward</a>
        </div>
        
    </div>

    <div class="container bg bg-primary rounded text-center text-white py-2">
        <h3> {{ $parent->father_name }}</h3>

    </div>
   
    <div class="d-flex justify-content-center m-2">
        
        <div class="father col bg-light ml-4 pl-4">
            <table class="table table-bordered">
                <tr>
                    <th style="width:200px">DESCRIPTION</th>
                    <th>DETAILS</th>
                </tr>
                <tr>
                    <td>Father's Name</td>
                    <td>{{ $parent->father_name }}</td>
                </tr>

                <tr>
                    <td>Father's Phone Number</td>
                    <td>{{ $parent->father_phone }}</td>
                </tr>

                <tr>
                    <td>Father's Occupation</td>
                    <td>{{ $parent->father_occupation }}</td>
                </tr>
            </table>
        </div>
        <div class="mother col bg-grey m-2">
            <table class="table table-bordered">
                <tr>
                    <th style="width:200px">DESCRIPTION</th>
                    <th>DETAILS</th>
                </tr>
                <tr>
                    <td>Mother's Name</td>
                    <td>{{ $parent->mother_name }}</td>
                </tr>

                <tr>
                    <td>Mother's Phone Number</td>
                    <td>{{ $parent->mother_phone }}</td>
                </tr>

                <tr>
                    <td>Mother's Occupation</td>
                    <td>{{ $parent->mother_occupation }}</td>
                </tr>
               
            </table>
           
        </div>
        
    </div>
    

    <ol>
        @foreach ($pupils as $pupil)
            <li>
                <a href="{{ route('pupils.show', $pupil->id) }}">
                    {{ $pupil->first_name}} 
                    {{ $pupil->middle_name }} {{ $pupil->last_name }}
                </a> <span class="schoolFees" >{{ $pupil->school_fee }} </span>
            </li>
        @endforeach
    </ol>
    <div class="container text-center">
            <a href="{{ route('parents.edit', $parent->id) }}" class="btn btn-warning"> Edit</a>
    </div>
@endsection