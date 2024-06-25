@extends('layout.app')

@section('content')


       <div>
        <div class="bg-blue-400 bg-primary rounded-md py-2 px-4">
            <h2 class="text-center text-white">{{ $classes->class }} Class List </h2>
        </div>

        <div class="mx-auto w-2/3 my-2 space-y-2">
            <ol>
             @foreach ($students as $student)
                <li class="text-2xl">
                    <a href="{{ route('pupils.show', $student->id) }}">{{ $student->first_name }} {{ $student->father_name }}</a>
                </li>
            @endforeach
            </ol>
        </div>
       </div>
@endsection