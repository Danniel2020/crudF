<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

  </head>
<body>

<div class="container">
    <div class="card ">
        <div class="card-doby">
            <h1> Registo de Personas </h1>
            <table id="usuarios" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>nombre</th>
                            <th>apellido</th>
                            <th>direccion</th>
                            <th>cedula</th>
                        </tr>
                        <tbody>
                            @foreach ($comas as $coma)
                                <tr>
                                    <td>{{$coma->id}}</td>
                                    <td>{{$coma->nombre}}</td>
                                    <td>{{$coma->apellido}}</td>
                                    <td>{{$coma->direccion}}</td>
                                    <td>{{$coma->cedula}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </thead>
            </table>

        </div>

    </div>
    <br>
    <button type="button" class="btn btn-success">Success</button>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#usuarios').DataTable();
});
</script>

</body>
</html>


