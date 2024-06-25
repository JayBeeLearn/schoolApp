@extends('layout.app')


@section('content')
{{-- External JavaScript --}}
    {{-- <script src="{{ url('js/main.js') }}"></script> --}}
   <div class="my-2 px-4">
     <div class="">
        <h3 class="text-center text-3xl text-blue-600"> {{ $parent->father_name }}</h3>
    </div>
    <div class="flex justify-between  my-4 sm:text-lg md:text-xl text-white">
        <div class="bg-yellow-400 px-4 py-2 rounded-l-lg">
            <a href="{{ route('parents.index') }}" class="btn btn-warning my-2"> Back</a>
        </div>

         
        {{-- Total Amount owed by a parent  --}}
       <div class="flex w-9/12 justify-between">
            <div class="bg-red-500 px-2 py-1 items-center flex rounded-sm text-white" >
                <h4> Owed {{ $owedByParent }}</h4>
            </div>

            <div class="bg-blue-500 px-2 py-1 items-center flex rounded-sm text-white">
                <h4> Paid {{ $paidByParent }}</h4>
            </div>

            <div class="bg-yellow-500 px-2 py-1 items-center flex rounded-sm text-white">
                <h4> Fees {{ $parentFee }}</h4>
            </div>
        </div>
        {{-- Add New ward to a parent --}}
        
        
    </div>
    <div class="">
        <a href="{{ route('pupils.create', $parent->id) }}" class="bg-blue-500 float-right w-1/3 rounded px-4 py-2 text-white" >New Ward</a>
    </div>

   
    {{-- <div class="">
        <input id="moneyPaid" type="number" class="form-control my-1 w-50 pull-right" onchange="distributeAmount()"> <button class="btn btn-success m-1" onclick="payFees()">Pay</button> work on JS
    </div> --}}

     <div class="">
        <form class="" action="{{ route('parent.pay') }}" method="POST">
            @csrf
            <input type="hidden" name="parent_id" id="" value="{{ $parent->id }}">
            <input id="moneyPaid" name="amount" type="number" class="outline rounded-md px-4 py-1 outline-2 outline-green-400" onchange="distributeAmount()"> 
        <button class="bg-green-500 px-4 py-1 rounded text-white text-lg" onclick="payFees()">Pay</button>
        </form>
    </div>
   
    <div class="d-flex justify-content-center m-2">
        
        <div class="">
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

        {{-- <span  class="sr-only"></span> --}}
        <input id="numberOfChildren" type="hidden" id="" value="{{ count($pupils) }}">
    
    <div class="my-2 px-8">
        <h3 class="text-2xl text-center">Wards </h3>
        <div>
            <ol>
                @foreach ($pupils as $pupil)
                    <li class="list-decimal text-xl">
                        <a href="{{ route('pupils.show', $pupil->id) }}" class="text-blue-500">
                            {{ $pupil->first_name}} {{ $pupil->father_name }}
                        </a> 
                    </li>
                @endforeach
            </ol>
           
        
        </div>
    </div>

    <div class="w-2/3 mx-auto flex justify-between text-white font-semibold ">
            <div class="bg-yellow-500 px-4 py-2 rounded-sm ">
                <a href="{{ route('parents.edit', $parent->id) }}" class=""> Edit Details</a>

            </div>

            <div class="bg-red-500 px-4 py-2 rounded-sm">
                <form action="{{ route('parents.destroy', $parent->id) }}"method="POST">
                                                       
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="" onclick="confirm('Are you Sure you want to Delete parent?')">Delete Parents</button>
                           
                </form>
            </div>
    </div>
   </div>
@endsection