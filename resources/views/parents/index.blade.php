@extends('layout.app')

@section('content')
    <div class="container">
        <div class="d-flex  justify-content-between">
                <button class=" rounded px-1 bg-success">
                    <a href="../school" class="text-white btn "> <i class="fa fa-back"> <h6> Back to Home Page</h6></i> </a>
                </button>
                       
            
                 <button class="rounded px-1    bg-primary">
                    <a href="{{ route('parents.create') }}" class="text-white btn "><h6>Add New parent</h6></a>
                </button>
            
               
        </div>
        

        <h3 class="text-center text primary bg bg-rounded light bg-light m-1 p-2 mb-3">
            Welcome to <strong>Fastville International Schools</strong> Parents Page
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
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Actions</th>
                </tr>


                @foreach ($parents as $parent)
                <tr>
                        <td>{{ $parent->id }}</td>
                        <td>{{ $parent->father_name}}</td>
                        <td>{{ $parent->mother_name}}</td>
                        <td style="width:250px">
                            <form action="{{ route('parents.destroy', $parent->id) }}"method="POST">
                               
                                <a href="{{ route('parents.show', $parent->id) }}" class="btn btn-success"> Show</a>
                                <a href="{{ route('parents.edit', $parent->id) }}" class="btn btn-warning"> Edit</a>
                                
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="confirm('Are you Sure you want to Delete parent/Student?')">Delete</button>
                           
                            </form>
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>

        {{ $parents->links() }}
    </div>
@endsection