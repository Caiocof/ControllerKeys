@extends('room.master')
@section('content')

<div class="row mt-5 ml-5">
    <div class="col-12">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
          </div>
        @endforeach
    </div>
</div>

<div class="row ml-5">
    <div class="col-12">
        <form action="{{route('store.room')}}" method="POST" autocomplete="off">
            @csrf
        <input type="hidden" name="room_id" value="{{$room->id}}">
        <div>
            <div class="form-group col-md-2">
                <label for="nameSala">Sala</label>
                <input type="text" class="form-control" name="nameSala" id="nameSala" value="{{$room->name?? ''}}" disabled>
            </div>
        </div>
        <div>
            <div class="form-group col-md-6">
                <label for="requester">Nome do Solicitante</label>
                <input type="text" class="form-control" name="requester" id="requester" autofocus>
            </div>
        </div>
        <div class="form-group  col-md-6">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{route('index.room')}}" class="btn btn-primary" role="button">Voltar</a>
        </div>

    </form>
</div>
</div>



@endsection


