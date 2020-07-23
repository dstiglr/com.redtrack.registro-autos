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
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-car"></i> Registro <span class="sr-only">(current)</span></a>
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
            <h2>Registro</h2>
        </div>
        <form method="POST" action="{{route('auto_registro')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="auto">Auto</label>
                    <input type="auto" class="form-control" id="auto" name="auto">
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="precio" class="form-control" id="precio" name="precio">
                </div>
                <div class="form-group">
                    <label for="placas">Placas / Economico</label>
                    <input type="placas" class="form-control" id="placas" name="placas">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Empleado</label>
                            <select class="form-control" name="empleado">
                                <option value="">Elige una opcion....</option>
                                @foreach ($empleados as $empleado)
                                    <option value="{{$empleado->name}}">{{$empleado->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Firma</label>
                            <select class="form-control" name="empresa">
                                <option value="">Elige una opcion....</option>
                                @foreach ($companias as $compania)
                                    <option value="{{$compania->name}}">{{$compania->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Tipo</label>
                            <select class="form-control" name="tipo">
                                <option value="">Elige una opcion....</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{$tipo->type}}">{{$tipo->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="comentario">Comentario</label>
                    <textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
                </div>
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