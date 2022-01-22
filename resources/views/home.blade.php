@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($entries ->isEmpty())
                <p>A&uacute;n no has publicado ninguna entrada</p>
            @else
            <div class="card-header"><b>Mis Entradas</b></div>
            <div class="card pt-4 pl-3">
                <ul>
                    @foreach ($entries as $entry)
                    <li>
                        <a href="{{ route('entries.show',$entry->getFullSlug()) }}">{{ $entry->title}}</a>
                    </li>
                    @endforeach
                </ul>
                {{ $entries->links()}}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
