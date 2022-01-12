<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
@extends('layouts.app');

<body>
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">&Uacute;ltimas entradas</div>

                    <div class="card-body">
                        @foreach ($entries as $entry)
                        <p><b>{{ $entry->title }}</b></p>
                        <p>{{ $entry->content }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>
<html>
