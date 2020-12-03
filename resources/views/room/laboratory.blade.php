@extends('room.master')

@section('content')

    @if (!empty($laboratorys))
        <div class='row mt-3 mb-3'>
            <div class="col-12">
                @foreach ($laboratorys as $laboratory)
                    @php
                        $status = ($laboratory->status ? "btn btn-outline-danger" : "btn btn-outline-success");
                         $uri = ($laboratory->status ? "/receberLab/" . $laboratory->id : "/entregarLab/" . $laboratory->id);
                    @endphp
                    <a href='{{ url($uri) }}' class='{{ $status }}' id='btnKeysLab' role='button'
                       aria-pressed='true'>{{ $laboratory->name }}</a>
                @endforeach
            </div>
        </div>
    @endif
@endsection

