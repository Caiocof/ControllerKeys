@extends('room.master')
@section('content')

    <?php if (!empty($listKeys)) {


        echo "<div class='container' >
        <h1 class='titlePages'>CHAVES NÃO DEVOLVIDAS</h1>
        <table class='table table-hover bg-primary' >
            <thead>
            <tr >
                <th scope='col'>ID</th>
                <th scope='col'>SALA</th >
                <th scope='col'>SOLICITANDE</th >
                <th scope='col'>DATA / HORA</th >
            </tr >
            </thead >
            <tbody >";

        foreach ($listKeys as $listKey) {

            echo "
            <tr  class='table-light'>
                <th scope='row'>$listKey->id</th >
                <td > $listKey->name</td >
                <td > $listKey->requester</td >
                <td >" . date_format($listKey->updated_at, 'd-m / H:i') . "</td >
            </tr >
            ";
        }
        echo "
            </tbody >
        </table >
    </div >";
    }
    ?>

@endsection


