@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Entrada</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('entries.update',$entry->getFullSlug()) }}" method="POST">                    
                        @csrf
                        <div class="form-group row">
                            <label for="title">Título</label>


                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $entry->title) }}" required autocomplete="title" autofocus>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class='form-group row'>
                            <label for="content">Contenido</label>
                            <textarea id="content"  class="form-control @error('content') is-invalid @enderror" name="content"  required >{{ old('content', $entry->content) }}</textarea>
                            
                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>                            
                            @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection