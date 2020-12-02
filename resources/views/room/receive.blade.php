@extends('room.master')
@section('content')

    <div class="row mt-5 ml-5">
        <div class="col-12">
            <form action="{{ route('update.room', ['room_id' => $rentRoom->receiveKey]) }}" method="POST" autocomplete="off">

                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $rentRoom->id }}">
                <input type="hidden" name="requester" value="{{ $rentRoom->requester }}">

                <div class="form-group">
                    <div class="alert alert-primary" role="alert">
                        <h4 for="requester">
                            Certeza que <b>{{ $rentRoom->requester }}</b> está
                            devolvendo a chave?</h4>
                    </div>
                </div>

                <div class="form-group div-btn-receive">
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-success btn-receive">Sim</button>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('index.room') }}" class="btn btn-primary btn-receive"
                               role="button">Não</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
