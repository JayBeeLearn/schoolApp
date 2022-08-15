@extends('layout.app')


@section('content')

    <div class="container justify-content-between d-flex">
        <div>
            <a href="{{ route('parents.index') }}" class="btn btn-warning my-2"> Back</a>
        </div>
        <div>
            <button class="rounded px-1    bg-primary">
                    <a href="{{ route('pupils.create', $parent->id) }}" class="text-white btn "><h6>Add New Pupil</h6></a>
            </button>
        </div>
        
    </div>

    <div class="container bg bg-primary rounded text-center text-white py-2">
        <h3>Showing {{ $parent->father_name }}</h3>

    </div>
   
    <div class="d-flex justify-content-center m-2">
        
        <div class="father col bg-light m-2">
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
                </a>
            </li>
        @endforeach
    </ol>
    <div class="container text-center">
            <a href="{{ route('parents.edit', $parent->id) }}" class="btn btn-warning"> Edit</a>
    </div>
@endsection