@extends('room.master')

@section('content')


    <?php

    if (!empty($rooms)) {
        echo "<div class='container'>";
        foreach ($rooms as $room) {
            $status = ($room->status ? "btn btn-outline-danger" : "btn btn-outline-success");
            $uri = ($room->status ? "/receber/" . $room->id : "/entregar/" . $room->id);
            echo "


            <a href='" . url($uri) . "' class='{$status}' id='btnKeys' role='button' aria-pressed='true'>{$room->name}</a>

";
        }

        echo "</div>";
    }
    ?>
@endsection

