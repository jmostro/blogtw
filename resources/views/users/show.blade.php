@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h2 class="mb-2">{{ $user->name }}</h2>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>&Uacute;ltimas publicaciones</b></div>
                <div class="card-body">                    
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <ul>
                        @foreach ($entries as $entry)
                        <li>
                            <a href="{{ route('entries.show',$entry->getFullSlug()) }}">{{ $entry->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="card">
                <div class="card-header"><b>&Uacute;ltimos tweets</b></div>
                <div class="card-body">
                    --------WIP-----------------


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
