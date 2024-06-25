@extends('layout.app')

@section('content')


       <div>
        <div class="bg-blue-400 bg-primary rounded-md py-2 px-4">
            <h2 class="text-center text-white">{{ $classes->class }} Class List </h2>
        </div>

        <div class="mx-auto my-2 ">
            <ol class="space-y-2">
             @foreach ($students as $student)
             <li class="list-decimal  bg-green-100 px-4 py-2 rounded-md ">
                    
                        <div class="flex items-center">
                            <a href="{{ route('pupils.show', $student->id) }}"> 
                                <h3 class="text-blue-500 mr-4 hover:underline text-xl sm:text-xl md:text-2xl" >{{ $student->first_name }} {{ $student->father_name }}</h3> 
                            </a> 
                            <small>{{ $student->gender }}</small>
                        </div>
                    
                </li>
                
            @endforeach
            </ol>
        </div>
       </div>
@endsection