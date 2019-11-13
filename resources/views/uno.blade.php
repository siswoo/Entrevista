<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Emmanuel IPS</title>
  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Questrial|Red+Hat+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Questrial|Red+Hat+Display&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.toast.css">
  <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
</head>

<style type="text/css">
  .titulo1{
    border: 2px solid #ce3131;
    border-radius: 2rem;
    font-size: 1.3rem;
    font-weight: bold;
    background-color: #ce3131;
    color:white;
  }
</style>

<body class="mt-2">

    <div class="col-12 text-center mt-5 mb-4">
      <h2>Crear Orden</h2>
    </div>

    <div class="col-12 text-center">
      <div class="row">
        <div class="col-3 text-right">
          <strong>ID</strong>
        </div>
        <div class="col-3 text-center">
          <strong>Nombre</strong>
        </div>
        <div class="col-3 text-left">
          <strong>Email</strong>
        </div>
        <div class="col-3 text-left">
          <strong>Agregar Orden</strong>
        </div>
        @foreach($customers as $customer)
          <div class="col-3 text-right mt-2">
            {{ $customer->customer_id }}
          </div>
          <div class="col-3 text-center mt-2">
            {{ $customer->name }}
          </div>
          <div class="col-3 text-left mt-2">
            {{ $customer->email }}
          </div>
          <div class="col-3 text-left mt-2">
            <button value="{{$customer->customer_id}}" onclick="orden(value)" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Agregar</button>
          </div>
        @endforeach
        <div class="col-12">
          
        </div>
        <div class="col-12 mt-3">
        
        </div>
      </div>
    </div>

     <div class="col-12 text-center mt-5 mb-4">
      <a href="index">Volver</a>
    </div>

</body>

<!-- MODALS -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Orden a Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="guardar1" method="GET">
        <div class="row">
          <div class="col-12 text-center" style="font-weight: bold;">
            Productos Disponibles
          </div>
          <div class="col-12">
            <div id="respuesta1"></div>
          </div>
          <div class="col-12">
            <strong>Dirección</strong>: 
            <input type="text" name="delivery_address" required class="form-control">
          </div>        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ****** -->

</html>
<!-- LIBRERIAS JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.toast.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<!-- ************ -->

<script type="text/javascript">
  function orden(variable){
    $.ajax({
      url: 'dos',
      type: 'GET',
      data: { id: variable },
      success: function(response)
        {
          $('#respuesta1').html(response);
        }
      });
  }


  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
</script>