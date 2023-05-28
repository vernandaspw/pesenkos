@extends('layouts.app')

@section('content')
    <div class="page">
        <div class="d-flex justify-content-center">
            <div class="mt-5 pt-4 text-white" style="font-size: 30px">Feature Is Comming Soon</div>

        </div>
        <div class="d-flex justify-content-center mt-5">
            <a class="btn btn-light" href="{{ url('/', []) }}">Go To Home</a>
        </div>
    </div>
@endsection

<style>
    .page {
        background-color: {{ env('COLOR300') }}
    }
</style>
