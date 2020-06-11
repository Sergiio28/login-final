<?php include("db/dbconect.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar tabla</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function(){
  //Mensaje
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var rownumber = $(this).attr("id");
        var value = $(this).text();
        $.post('proceso.php' , rownumber + "=" + value, function(data){
            if(data != '')
      {
        message_status.show();
        message_status.html(data);
        //hide the message
        setTimeout(function(){message_status.html("REGISTRO ACTUALIZADO CORRECTAMENTE");},2000);
      } else {
        //message_status().html = data;
      }




        });
    });
});
</script>
<style>
#status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
</style>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Panel de control</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>   -->
            <li class="nav-item active">
              <a class="nav-link" href="PanelControl.php">Panel de control</a>
            </li>  
                  
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            
            <a class="btn btn-danger" href="CerrarSesion.php">Cerrar Sesión</a>
          </form>
        </div>
      </nav>
<div class="container pt-5 mt-5">

<h3>Editar Base de Datos</h3>
</div>
<div class="container">

<?php
$sql = "SELECT * FROM `usuarios_detalles`";
$consulta = mysqli_query($con, $sql);
if($consulta->num_rows === 0) {
  echo "No hay resultados <br><br><br>";
} else {
?>

<div class="row">
<div id="status"></div>      
<table class="table table-striped" id="tabledit" style="width: 1024px;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Celular</th>
      </tr>
    </thead>
    <tbody>
<?php
$rownumber=0;
while($rowedit = mysqli_fetch_array($consulta)){
$rownumber++;
$nom = $rowedit["Nombres"];
$ape = $rowedit["Apellidos"];
$ciu = $rowedit["Ciudad"];
$cel = $rowedit["Cel"];
?>
<tr>
  <td scope="row"><?php echo $rownumber; ?></td>
  <td id="Nombres:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $nom; ?></td>
  <td id="Apellidos:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $ape; ?></td>
  <td id="Ciudad:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $ciu; ?></td>
  <td id="Cel:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $cel; ?></td>
</tr>
<?php
}
?>    
    </tbody>
 </table>
</div>
<?php }?>
</div>
<!--  
        
       Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    

      
    <script>
    $(document).ready(function() {
        $('#tabledit').DataTable({
            responsive: true
        });
    } );  
    
    </script>
</body>
</html>