@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-2">Últimas Entradas</h1>
            @foreach ($entries as $entry)
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <a href="{{ route('entries.show', $entry->getFullSlug()) }}">
                    {{ $entry->title}}                
                    </a>
                </div>
                <div class="card-body">
                    <p>{{ $entry->content }}</p>
                </div>
                <div class="card-footer">
                    {{__('Entry.Author')}}:
                    <a href="{{ route('users.show', $entry->user->username)}}">
                        {{ $entry->user->name }}
                    </a>
                </div>
            </div>
            @endforeach
            {{ $entries->links()}}
        </div>
    </div>
</div>
@endsection
