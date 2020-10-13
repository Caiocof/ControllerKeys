@extends('room.master')
@section('content')
    <form action="{{url('/receber/update',['room_id' => $rentRoom->room_id])}}" method="POST" autocomplete="off">

        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$rentRoom->id}}">
        <input type="hidden" name="requester" value="{{$rentRoom->requester}}">
        <div class="formReceive">
            <div class="form-group col-md-6">
                <label for="requester">
                    Certeza que <b>{{$rentRoom->requester}}</b> está
                    devolvendo a chave?</label>
            </div>
            <div class="form-group  col-md-6 buttonReceive">
                <button type="submit" class="btn btn-success">Sim</button>
                <a href="{{url('/chaves')}}" class="btn btn-primary" role="button">Não</a>
            </div>
        </div>
    </form>

@endsection


