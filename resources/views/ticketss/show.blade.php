<x-app-layout>

<div class="card text-red-600">
    <div class="card-header">Ticket Page</div>
    <div class="card-body">



        <div class="card-body">
            <h5 class="card-title">Name : {{ $ticket->title }}</h5>
            <p class="card-text">Address : {{ $ticket->description }}</p>
            <p class="card-text">Email : @if($ticket->attachment)


                    <a href="{{'/storage/'.$ticket->attachment}}">Attachment</a>
                    @endif</td></p>



            <p class="card-text">created_at : {{ $ticket->created_at->diffForHumans()}}</p>
            <p class="card-text">updated_at : {{ $ticket->updated_at->diffForHumans()}}</p>


            <div class="flex mx-6">




                <a class="mx-6" href="{{ route('ticket.edit', $ticket->id) }}" title="View Student">
                    <x-primary-button><i class="fa fa-eye" aria-hidden="true"></i> edit       </x-primary-button></a>

            <form action="{{route('ticket.destroy',$ticket->id)}}" method="post">
                @method('delete')
                @csrf

                <x-primary-button>delete</x-primary-button>

            </form>

                </div>

            <button><a href="{{ url('/ticket/') }}">Back</a></button>
        </div>

        </hr>



    </div>
</div>
    </x-app-layout>
