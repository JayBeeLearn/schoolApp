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
            <h2 class="text-center text-white text-2xl sm:text-3xl md:text-4xl">
                Our Classes
            </h2>
        </div>

        <div class="space-y-2 my-2">
            @foreach ($classes as $class)
                <div class="flex bg-green-100 px-4 py-2 rounded-md items-center">
                       <a class="text-blue-500 mr-4 hover:underline text-xl sm:text-xl md:text-2xl" href="{{ route('class.show', $class->id) }}"> <h3>{{ $class->class  }}</h3></a> <small>{{ $class->school_category }}</small>
                </div>
            @endforeach
        </div>
    </div>
@endsection