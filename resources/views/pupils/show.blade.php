@extends('layout.app')

@section('content')

   <div class="mt-4 mx-4">
        <div class="my-2 ">
            <h3 class="text-center text-3xl text-blue-600">{{ $pupil->first_name }} {{ $pupil->father_name }}</h3>
        </div>
     <div class="flex justify-between sm:text-lg md:text-xl text-white">
        <div class="bg-yellow-400 px-4 py-2 rounded-l-lg">
            <a href="{{ route('pupils.index') }}" class=""> Back</a>
        </div>

        <div class="flex w-9/12 justify-between">
            <div class="bg-red-500 items-center flex px-2 py-1 rounded-sm text-white" >
                <h4 class=> Owed {{ $owed }}</h4>
            </div>

            <div class="bg-blue-500 items-center flex px-2 py-1 rounded-sm text-white">
                <h4 class=> Paid {{ $paid }}</h4>
            </div>

            <div class="bg-yellow-500 items-center flex px-2 py-1 rounded-sm text-white">
                <h4 class=> Fees {{ $pupil->school_fee }}</h4>
            </div>
        </div>
    </div>

    <div class="sm:w-2/3 mx-auto my-2">
              

        @foreach ($parents as $parent)
            <ul>
                <li>
                    Father: <a href="{{ route('parents.show', $parent->id) }}" class="text-blue-500"> {{ $parent->father_name }} </a>
                </li>

                 <li>
                    Mother: <a href="{{ route('parents.show', $parent->id) }}" class="text-blue-500"> {{ $parent->mother_name }} </a>
                </li>
            </ul>
        @endforeach

       
        <table class="">
            
            <tr class="">
                <td class="">Class</td>
                <td class=" text-lg"><a href="{{ route('class.show', $pupil->classes->id) }}" class="text-blue-500">{{ $pupil->classes->class }}</a></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td class=" text-lg">{{ $pupil->gender }}</td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td class=" text-lg">{{ $pupil->date_of_birth }}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td class=" text-lg">{{ $pupil->address }}</td>
            </tr>
            <tr>
                <td>School Fee</td>
                <td class=" text-lg">{{ $pupil->school_fee }}</td>
            </tr>
            
        </table>
        <div>
            <h3 class="text-center text-2xl">Payment History</h3>
          <div class="my-2">
             @if(count($pupil->fees) > 1)
                <div class="space-y-2">
                @foreach ($pupil->fees as $payment)
                    <div class="bg-blue-50 px-4 py-2 ">
                        <p>Paid {{ $payment->fees }}</p>
                        <p>on {{ $payment->created_at }}</p>
                    </div>
                @endforeach   
            </div>
           @else
           No Payment yet. Make Payment
           @endif
          </div>

          
        </div>   


        <div class="w-2/3 flex justify-between mx-auto">
            <div class="bg-yellow-500 px-4 py-2 rounded-sm text-white text-xl">
                <a href="{{ route('pupils.edit', $pupil->id) }}" class=""> Edit</a>
            </div>

            <form action="{{ route('pupils.destroy', $pupil->id) }}"method="POST">
                                
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 px-4 py-2 rounded-sm text-white text-xl" onclick="confirm('Are you Sure you want to Delete Pupil/Student?')">Delete</button>
            </form>
        </div>
    </div>
    
   </div>
@endsection