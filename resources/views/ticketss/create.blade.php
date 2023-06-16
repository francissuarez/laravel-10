

<x-app-layout>

    <style>
.content{

    display: grid;
    width: 90%;
    margin-right: auto;
    margin-left: auto;
    place-content: center;
    /*height: auto;*/
    height: 80vh;
}
.form{

    /*border: 1px solid red;*/
    padding: 20px;
    background: #718096;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    height: auto;
    width: 500px;
    /*font-size: x-large;*/

;



}
.good{

    margin-top: 15px;
}

    </style>



    <body>
<div class="content">
    <div class=" ">

{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}




    <form method="POST" action="{{route('ticket.store')}}" enctype="multipart/form-data" class="form">
        @csrf
{{--        @method('POST')--}}
        {!! csrf_field() !!}

        <h2 class="text-center text-xl font-semibold self-center p-2 border-gray-100 border-b-2 border w-48">Ticket Request</h2>

        <label for="name">Title</label>

        <label for="title"></label><input class="m-5 bg-gray-800 text-white " type="text" name="title" id="title" placeholder="fullname">
        <x-input-error :messages="$errors->get('title')" class="mt-2"></x-input-error>


        <label for="textarea">Textarea</label>


        <label for="description"></label><textarea class=" bg-gray-800 text-white" id="description" name="description" placeholder="textarea" ></textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2"></x-input-error>

        <label for="avatar">Choose file</label>

        <input multiple type="file"
               id="attachment" name="attachment"
               accept="image/png, image/jpeg"

        class="mb-5 text-xl border border-2 border-gray-100"
        >
        <x-input-error :messages="$errors->get('attachment')" class="mt-2"></x-input-error>

{{--        <div class="textarea">--}}
{{--        @include('ticket.text-area')--}}
{{--        </div>--}}

        <hr />
        <div class="flex items-center justify-content-center self-center good">
            <x-primary-button>{{ __('Submited') }}</x-primary-button>

        </div>

    </form>




    </div>
</div>

    </body>

    </x-app-layout>
