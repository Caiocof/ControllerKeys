@extends('room.master')

@section('content')

    @if (!empty($rooms))
        <div class='row mt-3 mb-3'>
        @foreach ($rooms as $room)
        <div class="col-2">
        @php
           $status = ($room->status ? "btn btn-outline-danger" : "btn btn-outline-success");
            $uri = ($room->status ? "/receber/" . $room->id : "/entregar/" . $room->id);
        @endphp
            <a href='{{ url($uri) }}' class='{{ $status }}' id='btnKeys' role='button' aria-pressed='true'>{{ $room->name }}</a>
        </div>
        @endforeach

        </div>
    @endif
@endsection

