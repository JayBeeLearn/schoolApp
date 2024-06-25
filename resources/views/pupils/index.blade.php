@extends('layout.app')

@section('content')
    <div class="container">
        {{-- <div class="flex  justify-content-between mt-4">
                <button class=" rounded px-2 py-1 bg-green-500">
                    <a href="../school" class="text-white "> <i class="fa fa-back"> <h6> Back To Homepage</h6></i> </a>
                </button>
                       
            
                 <button class="rounded px-1    bg-primary">
                    <a href="{{ route('pupils.create') }}" class="text-white btn "><h6>Add New Pupil</h6></a>
                </button>
        </div> --}}
        

        <h3 class="bg-blue-500 rounded-md text-center px-4 py-2 my-4 text-xl text-white sm:text-2xl md:text-3xl">
            Welcome to <strong>@include('include.schoolname')</strong> Students and Pupils Page
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

        <div class="space-y-4 mx-4">
            @foreach ($pupils as $pupil)
            <div class="bg-blue-50 px-4 py-2 rounded">
                <p class="text-xl ">
                    <a href="{{ route('pupils.show', $pupil->id) }}" class="text-blue-500"> {{ $pupil->first_name }} {{ $pupil->father_name }} </a>
                </p>
                <div class="mx-4">
                    <p>
                    {{ $pupil->gender }}
                </p>
                <p>
                    <a href="{{ route('class.show', $pupil->classes->id) }}" class="text-blue-500">{{ $pupil->classes->class }}</a>
                </p>
                </div>
            </div>
        @endforeach
        </div>

       

        {{ $pupils->links() }}
    </div>
@endsection