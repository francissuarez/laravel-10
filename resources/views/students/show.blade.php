@extends('students.layout')
@section('content')
    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">

            <div class="card-body">
                <h5 class="card-title">Name : {{ $students->name }}</h5>
                <p class="card-text">Address : {{ $students->address }}</p>
                <p class="card-text">Mobile : {{ $students->mobile }}</p>
                <p class="card-text">Email : {{ $students->email }}</p>
                <p class="card-text">created_at : {{ $students->created_at }}</p>
                <p class="card-text">updated_at : {{ $students->updated_at }}</p>

                <button><a href="{{ url('/student') }}">Back</a></button>
            </div>

            </hr>

        </div>
    </div>
