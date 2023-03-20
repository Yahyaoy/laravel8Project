@foreach($conversation->replies as $reply)
    <div>
        <header style="display: flex; justify-content: space-between;">
        <p class="m-0"><strong>{{$reply->user->name}} Said..</strong></p>

{{--        @if($reply->isBest())--}}
            @if($conversation->best_reply_id == $reply->id)
            <span style="color: green">Best Reply !!</span>
        @endif
        </header>

        {{$reply->body}}

       @can('update',$conversation)
        <form method="post" action="/best-replies/{{$reply->id}}">
            @csrf
            <button
                type="submit"
                class="btn p-0 text-muted"
            >Best Reply?
            </button>
        </form>
        @endcan
    </div>

    @continue($loop->last)
    <hr>
@endforeach
