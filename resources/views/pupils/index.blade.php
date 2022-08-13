@extends('layout.app')

@section('content')
    <div class="container">
        <div class="d-flex  justify-content-between">
                <button class=" rounded px-1 bg-success">
                    <a href="../school" class="text-white btn "> <i class="fa fa-back"> <h6> Back To Homepage</h6></i> </a>
                </button>
                       
            
                 <button class="rounded px-1    bg-primary">
                    <a href="{{ route('pupils.create') }}" class="text-white btn "><h6>Add New Pupil</h6></a>
                </button>
        </div>
        

        <h3 class="text-center text primary bg bg-rounded light bg-light m-1 p-2 mb-3">
            Welcome to <strong>Fastville International Schools</strong> Students and Pupils Page
        </h3>

        <div class="container">
            @if ($message = Session::get('success'))
                <div class="container alert alert-success">
                    <h5>{{ $message }}</h5>
                </div>
            @endif
            
        </div>

        <div class="container">
            @if ($message = Session::get('danger'))
                <div class="container alert alert-danger">
                    <h5>{{ $message }}</h5>
                </div>
            @endif
            
        </div>

        <div class="container bg bg-light">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>


                @foreach ($pupils as $pupil)
                <tr>
                        <td>{{ $pupil->id }}</td>
                        <td>{{ $pupil->first_name }} {{ $pupil->middle_name }} {{ $pupil->last_name }}</td>
                        <td>{{ $pupil->gender }}</td>
                        <td>{{ $pupil->address }}</td>
                        <td style="width:250px">
                            <form action="{{ route('pupils.destroy', $pupil->id) }}"method="POST">
                               
                                <a href="{{ route('pupils.show', $pupil->id) }}" class="btn btn-success"> Show</a>
                                <a href="{{ route('pupils.edit', $pupil->id) }}" class="btn btn-warning"> Edit</a>
                                
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="confirm('Are you Sure you want to Delete Pupil/Student?')">Delete</button>
                           
                            </form>
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>

        {{ $pupils->links() }}
    </div>
@endsection