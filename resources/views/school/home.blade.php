@extends('layout.app')

@section('content')
    <div class="">
        <h1 class="bg  bg-info text-white text-center  rounded my-2 py-3">
            Welcome to @include('include.schoolname')
        </h1>
    </div> 
    <div class="">
        <div class="grid gap-2 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 px-4">
            <a href="{{ route('pupils.index') }}" 
                class="text-center text-white">
                <div class="md:min-h-[10rem] bg-blue-500 rounded col  px-4 py-4 pl-4  ">
                    <div class=" ">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl md:min-h-[5rem]">Pupils and Students</h3>
                        <h6> All our stars in one place. <br></h6>
                    </div>
                </div>
            </a>

            <a href="{{ route('parents.index') }}" 
                class="text-center text-white">
                <div class="md:min-h-[10rem] bg-yellow-500 rounded col  px-4 py-4 pl-4 ">
                    <div class="">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl md:min-h-[5rem]">Parent</h3>
                        <h6>Our clients and patronizers</h6>
                    </div>
                </div>
            </a>

            <a href="{{ route('payment') }}" 
                class="text-center text-white">
                <div class="md:min-h-[10rem] bg-gray-500 rounded colpx-4 py-4 pl-4 ">
                    <div class=" ">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl md:min-h-[5rem]">Payment</h3>
                        <h6>Payment Info </h6>
                    </div>
                </div>
            </a>
                   

            <a href="{{ route('class.index') }}" 
                class="text-center text-white">
                <div class="md:min-h-[10rem] bg-info rounded col  px-4 py-4 pl-4 ">
                    <div class=" ">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl md:min-h-[5rem]">Class</h3>
                        <h6>All our classes are listed here </h6>
                    </div>
                </div>
            </a>

            <a href="" 
                class="text-center text-white" >
                <div class="md:min-h-[10rem] bg-green-500 rounded col  px-4 py-4 pl-4 ">
                    <div class=" ">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl md:min-h-[5rem]">Teachers</h3>
                        <h6>Our Unique and Innovative teachers</h6>
                    </div>
                </div>
            </a>

            <a href="" class="text-center text-white">
                <div class="md:min-h-[10rem] bg-red-500 rounded col  px-4 py-4 pl-4 ">
                    <div class=" ">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl md:min-h-[5rem]" class="">Debtors</h3>
                        <h6>The List we dont want</h6>
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection