@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Creacion contenido de la Tematica</h1>

                    <form method="POST" action="{{route('temas.store')}}" enctype="multipart/form-data">

                        @csrf
                
                        <label for="">
                            Numero de la Unidad
                            <br>
                            <input type="text" name="num_unidad" value="">
                        </label>
                
                        <br>
                        <label for="">
                            Nombre del Tema
                            <br>
                            <input type="text" name="nombre_Tema" value="">
                        </label>
                
                        <br>
                        <label for="">
                            Descripcion del Tema
                            <br>
                            <textarea name="descripcion_Tema" rows="10"></textarea>
                        </label>
                
                        <br>
                        <label for="">
                            Url Video del Tema
                            <br>
                            <input type="text" name="url_video" value="">
                        </label>

                        <br>
                        <label for="">
                            <br>
                            <input type="file" name="imagen" value="">
                        </label>
                        <br>
                        
                        <button type="submit">Crear Tema</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection