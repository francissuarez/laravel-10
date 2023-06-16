<x-app-layout>

    <div class="card">
        <div class="card-header">Contactus Page</div>
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


            <form action="{{ route('ticket.update', $ticket->id)}}" method="post" enctype="multipart/form-data">

{{--                @csrf--}}

                {!! csrf_field() !!}

                @method("patch")
                {{--            <input type="hidden" name="id" id="id" value="{{$ticket->id}}" id="id" />--}}
                <label>title</label><br />
                <label for="name"></label><label for="title"></label><input type="text" name="title" id="title" value="{{$ticket->title}}"
                                                                            class="form-control"><br />
                <label>description</label><br/>
                <label for="address"></label><label for="description"></label><textarea type="text" name="description" id="description"
                       value="{{$ticket->description}}" class="form-control"></textarea><br />


                <span class="whitespace-nowrap px-6 py-4">  @if($ticket->attachment)

                        <a href="{{'/storage/'.$ticket->attachment}}">Attachment</a>
                    @endif</span>
                <td>

                    <input multiple type="file"
                           id="attachment" name="attachment"
                           accept="image/png, image/jpeg"

                           class="mb-5 text-xl border border-2 border-gray-100"


                    >



                    <x-input-error :messages="$errors->get('attachment')" class="mt-2"></x-input-error>

                    <x-primary-button>{{ __('Submited') }}</x-primary-button>
            </form>

        </div>
    </div>
</x-app-layout>
