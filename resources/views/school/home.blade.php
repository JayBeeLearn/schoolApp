@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="bg  bg-info text-white text-center  rounded my-2 py-3">
            Welcome to @include('include.schoolname')
        </h1>
    </div> 
    <div class="container">
        <div class="d-flex my-4 mx-2">
            <div class="bg-primary rounded col mx-4 px-4 py-4 pl-4  ">
                    <a href="{{ route('pupils.index') }}" class="text-center" style="color:white">
                        <div class="container ">
                            <h3>Pupils and Students</h3>
                            <h6> All our stars in one place. <br> See a list of all the pupils and Students in the School </h6>
                        </div>
                    </a>
            </div>

            <div class="bg-warning rounded col mx-4 px-4 py-4 pl-4 ">
                    <a href="{{ route('parents.index') }}" class="text-center" style="color:white">
                        <div class="container ">
                            <h3>Parent</h3>
                            <h6>Our clients and patronizers</h6>
                        </div>
                    </a>
            </div>

            <div class="bg-secondary rounded col mx-4 px-4 py-4 pl-4 ">
                    <a href="" class="text-center" style="color:white">
                        <div class="container ">
                            <h3>Payment</h3>
                            <h6>Payment Info </h6>
                        </div>
                    </a>
            </div>
            
            
        </div>

        <div class="d-flex my-4 mx-2">
            <div class="bg-info rounded col mx-4 px-4 py-4 pl-4 ">
                    <a href="{{ route('class.index') }}" class="text-center" style="color:white">
                        <div class="container ">
                            <h3>Class</h3>
                            <h6>All our classes are listed here </h6>
                        </div>
                    </a>
            </div>

            <div class="bg-success rounded col mx-4 px-4 py-4 pl-4 ">
                    <a href="" class="text-center" style="color:white">
                        <div class="container ">
                            <h3>Teachers</h3>
                            <h6>Our Unique and Innovative teachers</h6>
                        </div>
                    </a>
            </div>

            <div class="bg-danger rounded col mx-4 px-4 py-4 pl-4 ">
                    <a href="" class="text-center" style="color:white">
                        <div class="container ">
                            <h3 class="">Debtors</h3>
                            <h6>The List we dont want</h6>
                        </div>
                    </a>
            </div>
            
        </div>
    </div>
@endsection