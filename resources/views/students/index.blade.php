


@extends('students.layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 10 Crud </h2>
                    </div>
                    <div class="card-body">



                        <div class="mt-1 mb-4 ">
                            <div class="float-right relative max-w-xs">
                                <form action="{{ route('student.search') }}" method="GET">

                                    <input type="text" name="s"
                                           class=" block w-full p-1 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                           placeholder="Search..." />


                                </form>
                            </div>

                        </div>



                        <a href="{{ url('/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>


                        @if(session('flash_message'))
                            <div class="alert alert-success">
                                {{session('flash_message')}}
                            </div>
                        @endif



{{--                        @if (isset($flash_message))--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                {{$flash_message}}--}}
{{--                            </div>--}}
{{--                        @endif--}}


{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($massage->all() as $massage)--}}
{{--                                        <li>{{ $massage }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}


{{--                        {{$massage}}--}}



                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
{{--                                        <td> {{ $loop->index +1 }}</td>--}}
{{--                                        <td scope="row">{{ $loop->iteration }}</td>--}}
                                        <td scope="row">{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>

                                            <a href="{{ url('/show/' . $item['id']) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/edit/' . $item['id']) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form action="{{ url('/delete/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                            <div>  {{$students->links('pagination::bootstrap-5')}}</div>
                        </div>
{{--                        </x-app-layout>--}}
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

