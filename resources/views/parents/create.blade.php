@extends('layout.app')

@section('content')
    <div class="min-h-[100vh]">
        <div class="container text-center bg-blue-500 m-2 p-2 rounded text-white">
        <h2 class="text-2xl md:text-4xl">
            Add New Parent to the School
        </h2>
        </div>
        @if ($errors->any())
            <div class="container alert alert-danger">
                <p><strong>Whoops!</strong> There are some errors with your input </p> <br>

                @foreach ($errors->all() as $error)
                    <ul>
                        <li>{{ $error }}</li>
                    </ul>
                @endforeach
            </div>
            
        @endif
        <div class=" ">
            <form action="{{ route('parents.store') }}" method="POST">
                @csrf

                <div class=" sm:grid sm:grid-cols-2 justify-content-center">
                    <div class="father px-4 space-y-4">
                        <div class="form-group">
                            <label class="block" for="father_name">Father Name Name</label>
                            <input type="text" name="father_name" placeholder="Enter Father's Name" class="w-full border-2 rounded-md px-4 py-2">
                        </div>

                        <div class="form-group">
                            <label class="block" for="father_phone">Father Phone Number</label>
                            <input type="text" name="father_phone" placeholder="Enter Father's Phone Number" class="w-full border-2 rounded-md px-4 py-2">
                        </div>

                        <div class="form-group">
                            <label class="block" for="father_occupation">Father's occupation</label>
                            <input type="text" name="father_occupation" placeholder="Enter Father's occupation" class="w-full border-2 rounded-md px-4 py-2">
                        </div>
                    </div>
                    <div class="mother px-4 space-y-4">
                        <div class="form-group">
                            <label class="block" for="mother_name">Mother Name Name</label>
                            <input type="text" name="mother_name" placeholder="Enter mother's Name" class="w-full border-2 rounded-md px-4 py-2">
                        </div>

                        <div class="form-group">
                            <label class="block" for="mother_phone">Mother Phone Number</label>
                            <input type="text" name="mother_phone" placeholder="Enter mother's Phone Number" class="w-full border-2 rounded-md px-4 py-2">
                        </div>

                        <div class="form-group">
                            <label class="block" for="mother_occupation">Mother's occupation</label>
                            <input type="text" name="mother_occupation" placeholder="Enter mother's occupation" class="w-full border-2 rounded-md px-4 py-2">
                        </div>
                    </div>
                </div>     

                <div class="text-center my-2">
                    <button type="submit" class="bg-blue-500 px-4 py-2 text-white font-semibold rounded">Submit</button>
                </div>
            </div>

            </form>

        </div>
    </div>
@endsection