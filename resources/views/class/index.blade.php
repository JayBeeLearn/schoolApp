@extends('layout.app')

@section('content')
    <div class="container">
        <div class="d-flex  justify-content-between my-2" >
            <button class=" rounded px-1 bg-success">
                <a href="../" class="text-white btn "> <i class="fa fa-back"> <h6> Back To Homepage</h6></i> </a>
            </button>
                        
                
            <button class="rounded px-1 bg-primary">
                <a href="{{ route('class.create') }}" class="text-white btn "><h6>Add New Class</h6></a>
            </button>
        </div>
        <div class=" bg-info p-2 rounded ">
            <h2 class="text-center text-white">
                Our Classes
            </h2>
        </div>

        <div>
            @foreach ($classes as $class)
                <div class="flex">
                       <a href="{{ route('class.show', $class->id) }}"> <h3>{{ $class->class  }}</h3></a> <small>{{ $class->school_category }}</small>
                </div>
            @endforeach
        </div>
    </div>
@endsection