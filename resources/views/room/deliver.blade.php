@extends('room.master')
@section('content')


    <form action="{{url('/entregar/store')}}" method="POST" autocomplete="off">
        @csrf
        <input type="hidden" name="room_id" value="{{$room->id ?? ''}}">
        <div>
            <div class="form-group col-md-2">
                <label for="nameSala">Sala</label>
                <input type="text" class="form-control" name="nameSala" id="nameSala" value="{{$room->name?? ''}}" disabled>
            </div>
        </div>
        <div>
            <div class="form-group col-md-6">
                <label for="requester">Nome do Solicitante</label>
                <input type="text" class="form-control" name="requester" id="requester">
            </div>
        </div>
        <div class="form-group  col-md-6">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{url('/')}}" class="btn btn-primary" role="button">Voltar</a>
        </div>

    </form>



@endsection


