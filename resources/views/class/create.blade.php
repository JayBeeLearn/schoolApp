@extends('layout.app')


@section('content')

 <div>
       <div class="">
        <a href="{{ route('class.index') }}" class="btn btn-warning my-2"> Back</a>
    </div>

    <div>
        <div class="bg-info rounded">
        <h2 class="text-center text-white p-2">
            Create A New Class
        </h2>
    </div>

        <div class="w-2/3 flex mx-auto  ">
            <form action="{{ route('class.store') }}" method="POST">
                @csrf
                <div class="input mb-4">
                    <label class="mb-0 text-l block" for="school_category">Select School Category</label>
                    <select class="border-blue-300 border-2 rounded py-1 px-2 min-w-[70vw] sm:min-w-[50vw]" name="school_category" id="school_category">
                        <option value="Secondary">Secondary</option>
                        <option value="Primary">Primary</option>
                        <option value="Nursery">Nursery</option>
                        <option value="Pre-Nursery">Pre-Nursery</option>
                    </select>
                </div>


                <div class="input mb-4">
                    <label class="mb-0 text-l block" for="class">Class Name</label>
                    <input mb-4 type="text" class="border-blue-300 border-2 rounded py-1 px-2 min-w-[70vw] sm:min-w-[50vw]" name="class" id="class">
                </div>

                <div class="input mb-4">
                    {{-- <label class="mb-0 text-l" for="arm"></label> --}}
                    <input hidden type="text" class="border-blue-300 border-2 rounded py-1 px-2 min-w-[70vw] sm:min-w-[50vw]" name="arm" id="class">
                </div>

                <div class="input mb-4 flex ">
                    <button class="w-full btn bg-primary mx-auto  text-white font-semibold" type="submit">Add</button>
                </div>


            </form>
        </div>
    </div>
 </div>
        


@endsection 