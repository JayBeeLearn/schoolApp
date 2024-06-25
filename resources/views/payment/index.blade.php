@extends('layout.app')


@section('content')
    <div class="bg-gray-600 text-white text-center px-2 py-1 rounded-md my-2">
            <h1 >Payments</h1> 
    </div>

    <div class="space-y-4">
        @foreach ($payments as $payment)
            <div class="bg-gray-300 rounded-sm px-4 py-2">
                <p> Payment of  <span class="text-2xl font-bold">{{ $payment->amount }}</span> by </p>
                <p class="text-xl"><a href="{{ route('parents.show', $payment->parents->id) }}">{{ $payment->parents->father_name }}</a> on {{ $payment->created_at }} </p>
            </div>
        @endforeach
    </div>

    {{ $payments->links() }}
@endsection