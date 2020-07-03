@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
                    @method('PATCH')
                     @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{ $user->name }}" placeholder="Escribe tu nombre">   
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Escribe tu email">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
 @endsection