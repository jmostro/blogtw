@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ $entry->title }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif                                            
                    {{ $entry->content }}
                    @if ($entry->user_id === auth()->id()) 
                    <hr>
                    <a class="btn btn-primary" href="{{ route('entries.edit', $entry->id) }}">{{ __('Entry.Edit') }}</a>
                    @endif
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection