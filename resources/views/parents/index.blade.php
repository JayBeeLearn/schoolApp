@extends('layout.app')

@section('content')
    <div class="mt-4">
        <div class="flex  justify-between text-white" >
            <div class="rounded px-4 py-2 bg-yellow-500 ">
                <a href="/school" >Back to Home Page </a>
            </div>
                       
            <div class="rounded  bg-blue-500 px-4 py-2">
                <a href="{{ route('parents.create') }}" >Add New parent</a>
            </div>
        </div>
        

        <div class="bg-info my-2 rounded text-white px-4 py-2">
            <h3 class="text-center text-2xl sm:text-3xl sm:text-4xl ">
            Welcome to <strong>Fastville International Schools</strong> Parents Page
        </h3>
        </div>

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

        <div class="w-11/12 mx-auto">
            <div class="space-y-2">
                @foreach ($parents as $parent)
                    <div>
                        <div class="bg-green-100 rounded-sm px-4 py-2  hover:bg-gray-200">
                            <div class="flex">
                                <a href="{{ route('parents.show', $parent->id) }}" class="text-blue-500 text-lg">
                                    <p class="mr-4">
                                        {{ $parent->father_name}} 
                                    </p>
                                </a>
                               <a  href="tel:{{ $parent->father_phone }}">{{ $parent->father_phone }}</a>
                               
                            </div>

                            <div class="flex">
                                <a href="{{ route('parents.show', $parent->id) }}" class="text-blue-500 text-lg">
                                    <p class="mr-4">
                                    {{ $parent->mother_name}} 
                                    </p>
                                </a>
                               <a  href="tel:{{ $parent->mother_phone }}">{{ $parent->mother_phone }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{ $parents->links() }}
    </div>
@endsection