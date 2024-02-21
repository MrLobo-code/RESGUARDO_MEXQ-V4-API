@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {!! csrf_field() !!}
                <fieldset>
                    <legend>Editar mensaje</legend>
                    <div class="form-group">
                        <label for="titulo" class="col-lg-label">Título</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{!!  $mensaje->titulo !!}">
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label for="contenido" class="col-lg-label">Contenido</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="contenido" name="contenido">{!! $mensaje->contenido !!}</textarea>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <input type="checkbox" name="status" {!! $mensaje->status?"":"checked" !!}> ¿Cerrar este mensaje?
                    </div>
 
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="ntm btn-primary">Actualizar</button>
                        </div>
                    </div>
                     
                </fieldset>
            </form>
        </div>
    </div>
@endsection