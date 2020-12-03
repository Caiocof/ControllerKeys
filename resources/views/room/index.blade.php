@extends('room.master')

@section('content')

    @if (!empty($rooms))
        <div class='row mt-3 mb-3'>
            <div class="col-12">
                @foreach ($rooms as $room)
                    @php
                        $status = ($room->status ? "btn btn-outline-danger" : "btn btn-outline-success");
                         $uri = ($room->status ? "/receber/" . $room->id : "/entregar/" . $room->id);
                    @endphp
                    <a href='{{ url($uri) }}' class='{{ $status }}' id='btnKeys' role='button'
                       aria-pressed='true'>{{ $room->name }}</a>
                @endforeach
            </div>

        </div>
    @endif
@endsection

