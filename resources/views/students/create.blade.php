@extends('students.layout')
@section('content')
    <div class="card">
        <div class="card-header">Students Page</div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('create') }}" method="post">
{{--                @include('alert.alerts')--}}
                {!! csrf_field() !!}

                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                <label>Email</label></br>
                <input type="text" name="email"  id="email" class="form-control  value="{{ Request::old('email') }}" @error('email') is-invalid @enderror"></br>

                <input type="submit" value="Save" class="btn btn-success"></br>
{{--                @error('email')--}}
{{--                <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                @enderror--}}
            </form>

        </div>
    </div>
@stop

