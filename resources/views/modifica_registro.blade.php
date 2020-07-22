<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karcher SLP</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body{
            background-color: #E4F0D0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('view_registro')}}"><i class="fas fa-car"></i> Registro <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('view_tabala')}}"><i class="fas fa-table"></i> Lista de Autos</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card p-5">
        <div class="mb-3">
            <h2>Modifica Registro</h2>
        </div>
        <form method="POST" action="{{route('modifica_registro')}}">
                {{ csrf_field() }}
                <input type="hidden" value="{{$servicio->id}}" name="id">
                <div class="form-group">
                    <label for="auto">Auto</label>
                    @if ($servicio->car_model !== null)
                        <input type="auto" class="form-control" id="auto" name="auto" value="{{$servicio->car_model}}" readonly>
                    @else
                        <input type="auto" class="form-control" id="auto" name="auto" value="{{$servicio->car_model}}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    @if ($servicio->price !== null)
                        <input type="precio" class="form-control" id="precio" name="precio" value="{{$servicio->price}}" readonly>
                    @else
                        <input type="precio" class="form-control" id="precio" name="precio" value="{{$servicio->price}}">
                    @endif
                </div>
                <div class="form-group">
                    <label for="placas">Placas</label>
                    @if ($servicio->plates !== null)
                        <input type="placas" class="form-control" id="placas" name="placas" value="{{$servicio->plates}}" readonly>
                    @else
                        <input type="placas" class="form-control" id="placas" name="placas" value="{{$servicio->plates}}">
                    @endif
                   
                </div>
                <div class="container">
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Economico</label>
                                @if ($servicio->economic === 1)
                                    <input type="hidden" value="{{$servicio->economic}}" name="economico">
                                    <select class="form-control" name="economico" disabled  >
                                        <option value="{{$servicio->economic}}">Si</option>
                                    </select>
                                @elseif ($servicio->economic === 0)
                                    <input type="hidden" value="{{$servicio->economic}}" name="economico">
                                    <select class="form-control" name="economico" disabled >
                                        <option value="{{$servicio->economic}}">No</option>
                                    </select>
                                @else
                                    <select class="form-control" name="economico">
                                        <option value="">Elige una opcion....</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                @endif
                        </div>
                        @if ($servicio->employed_sanitizer !== null)
                            <div class="form-group col-6">
                                <input type="hidden" value="{{$servicio->employed_sanitizer}}" name="empleado">
                                <label>Empleado</label>
                                <select class="form-control" name="empleado" disabled>
                                    <option value="{{$servicio->employed_sanitizer}}">{{$servicio->employed_sanitizer}}</option>
                                </select>
                            </div>
                        @else
                            <div class="form-group col-6">
                                <label>Empleado</label>
                                <select class="form-control" name="empleado">
                                    <option value="">Elige una opcion....</option>
                                    @foreach ($empleados as $empleado)
                                        <option value="{{$empleado->name}}">{{$empleado->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @if ($servicio->company !== null)
                            <div class="form-group col-6">
                                <input type="hidden" value="{{$servicio->company}}" name="empresa">
                                <label>Firma</label>
                                <select class="form-control" name="empresa" disabled>
                                    <option value="{{$servicio->company}}">{{$servicio->company}}</option>
                                </select>
                            </div>
                        @else
                            <div class="form-group col-6">
                                <label>Firma</label>
                                <select class="form-control" name="empresa" >
                                    <option value="">Elige una opcion....</option>
                                    @foreach ($companias as $compania)
                                        <option value="{{$compania->name}}">{{$compania->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        @if ($servicio->type_car !== null)
                            <div class="form-group col-6">
                                <input type="hidden" value="{{$servicio->type_car}}" name="tipo">
                                <label>Tipo</label>
                                <select class="form-control" name="tipo" disabled>
                                    <option value="{{$servicio->type_car}}">{{$servicio->type_car}}</option>
                                </select>
                            </div>
                        @else
                            <div class="form-group col-6">
                                <label>Tipo</label>
                                <select class="form-control" name="tipo" >
                                    <option value="">Elige una opcion....</option>
                                    @foreach ($tipos as $tipo)
                                        <option value="{{$tipo->type}}">{{$tipo->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    </div>
                </div>
                @if ($servicio->comments !== null)
                    <input type="hidden" value="{{$servicio->comments}}" name="comentario">
                    <div class="form-group">
                        <label for="comentario">Comentario</label>
                            <textarea disabled class="form-control" name="comentario" id="comentario" rows="3" required>{{$servicio->comments}}
                        </textarea>
                    </div>
                @else
                    <div class="form-group">
                        <label for="comentario">Comentario</label>
                        <textarea class="form-control" name="comentario" id="comentario" rows="3" required>
                        </textarea>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</body>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>