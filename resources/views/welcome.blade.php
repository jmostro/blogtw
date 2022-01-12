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
                <h1 class="mb-2">{{__('Entry.Last_Entries')}}</h1>
                @foreach ($entries as $entry)
                <div class="card mt-4 mb-4">
                    <div class="card-header">{{ $entry->title}}</div>
                    <div class="card-body">                        
                        <p>{{ $entry->content }}</p>
                    </div>
                    <div class="card-footer">
                        {{__('Entry.Author')}}:
                        <a href="{{ route('user.view', $entry->user_id)}}">
                        {{ $entry->user->name }}
                        </a>
                    </div>
                </div>
                @endforeach
                {{ $entries->links()}}
            </div>
        </div>
        @endsection
</body>
<html>
