@extends('layouts.app'){{--home hereda de un archivo  llamada app--}}

@section('content')
<div class="container">
    
    <div class="alert alert-info" role="alert">Ejemplo de 2 selects</div>
        <p>Elige un vídeo según la lista de reproducción:</p>
    <div class="row">
    <div class="col-md-4">
        <p>Lista de reproducción
        {{-- Form::select('lista_reproduccion', $listas_reproduccion) --}}
        <select id="lista_reproduccion" name="lista_reproduccion" class="form-control">
            @foreach($listas_reproduccion as $item)
                <option>{{ $item->nombre }}</option>
            @endforeach
        </select>
        </p>
    </div>
    <div class="col-md-4">
        <p>Vídeos
        <select id="videos" name="video" class="form-control">
        </select>
        </p>
    </div>
    <div class="col-md-4">
        <p><br><button id="enviar" type="submit" class="btn btn-default btn-block">Enviar</button></p>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel administrativo</div>
                <div class="panel-body">
                    <p>
                        <i class="glyphicon glyphicon-stats"></i>
                        <span id="products-total">{{ $listas_reproduccion->total() }}</span> 
                        registros | página {{ $listas_reproduccion->currentPage() }} 
                        de {{ $listas_reproduccion->lastPage() }}
                    </p>    
                    <div id="alert" class="alert alert-info"></div>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th>Nombre del producto</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listas_reproduccion as $item)<!--products-->
                            <tr data-id="{{ $item->id }}">
                                <td width="20px">{{ $item->id }}</td>
                                <td>
                                    {{ $item->nombre }}
                                </td>                    
                                <td width="20px"><!--Uso exclusivo de formulario para la operacion elimniar, se uso form aplicando laravlecollective-->
                                    {{--{!! Form::open(['route' => ['destroyProduct', $item->id], 
                                    'method' => 'DELETE']) !!}
                                    <a href="#" class="btn-delete" title="Eliminar">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    {!! Form::close() !!}--}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $listas_reproduccion->render() !!}<!--paginacion-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
