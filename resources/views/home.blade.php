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
                
                <div class="card-header"><b>{{__('Entry.My_Entries')}}</b></div>
                <div class="card pt-4 pl-3">
                    <ul>
                        @foreach ($entries as $entry)
                        <li>
                            <a href="{{ route('entries.show',$entry->id) }}">{{ $entry->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                    {{ $entries->links()}}
                </div>
            </div>
            @endsection
</body>
<html>
