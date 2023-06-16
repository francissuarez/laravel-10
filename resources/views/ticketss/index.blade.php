


<x-app-layout>



<div>

    @if(session('flash_message'))
        <div class="alert alert-success dark:focus:text-gray-200">
            {{session('flash_message ') }}
        </div>
    @endif



        <div class="flex flex-col text-white">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Title</th>
                                <th scope="col" class="px-6 py-4">Description</th>
                                <th scope="col" class="px-6 py-4">Attachment</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                            </thead>
                            <tbody>



                            @foreach( $Tiket as $ticket)

                                @if(session('flash_message'))
                                    <div class="alert alert-success dark:text-green-400">
                                        {{session(('flash_message '))}}
                                    </div>
                                @endif

                            <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$ticket->id}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$ticket->title}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{$ticket->description}}</td>


                                <td class="whitespace-nowrap px-6 py-4">  @if($ticket->attachment)


                                        <a href="{{'/storage/'.$ticket->attachment}}">Attachment</a>
                                    @endif</td>
                                <td>




                               <a href="{{ url('/ticket/' . $ticket['id']) }}" title="View Student">
                                   <x-primary-button><i class="fa fa-eye" aria-hidden="true"></i> View       </x-primary-button></a>


{{--                                    <x-primary-button>edit</x-primary-button>--}}
{{--                                    <x-primary-button>delete</x-primary-button>--}}
{{--                                    <x-primary-button>view</x-primary-button>--}}




                            </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</div>
    </x-app-layout>
