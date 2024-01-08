@extends('layouts.plantilla')

@section('title','show')

@section('content')

    <?php
    if ($categoria) {
            echo "bienvenido al curso $curso, de la categoría $categoria";
        }
        else {
            echo "bienvenido al curso: $curso";
        }
    ?>
@endsection