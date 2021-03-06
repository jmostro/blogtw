@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">                    
                        {{ $entry->title }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ $entry->content }}
                    @can ('update', $entry)
                    <hr>
                    <a class="btn btn-primary" href="{{ route('entries.edit', $entry->id) }}">Editar</a>
                    @endcan
                </div>
                <div class="card-footer">
                    {{__('Entry.Author')}}:
                    <a href="{{ route('users.show', $entry->user->username)}}">
                        {{ $entry->user->name }}
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
