<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation Recepção</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script>
	$(document).ready( function () {
	  var table = $('#myTable').DataTable({
	        initComplete: function () {
	        this.api().columns().every(function () {
         	var column = this;
         	if (column.index() !== 4) {  //avançar para coluna 4 e desativar
           	$(column.header()).append("<br>")
           	var select = $('<select><option value=""></option></select>')
                .appendTo($(column.header()))
                .on('change', function () {
                	var val = $.fn.dataTable.util.escapeRegex(
                    	$(this).val());
                 		column
                    		.search(val ? '^' + val + '$' : '', true, false)
                    		.draw();
             			});
	           		column.data().unique().sort().each(function (d, j) {
	             	select.append( '<option value="'+d+'">'+d+'</option>' );
	                });
	            }
	        });
	    }
	});  
});
</script>
<style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;}
.hero-image {
  background-image:url(imagem/cx.png);
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;}
.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-weight: bold;}
.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
  font-weight: bold;}
.page-header {
  padding-bottom: 0px;
  margin: 0px 0 20px;
  border-bottom: 0px solid #fff;}
.hero-text button:hover {
  background-color: #555;
  color: white;}
div.container {
    width: 100%;}
.row {
    margin-right: -15px;
    margin-left: -15px;
    padding: 3px;}
</style>
</head>
<body>	
	<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">RAMÔA</h1>
    <p>Recauchutagem</p>
    <button>Pagina Principal</button>
  </div>
</div>
<div class="container">
	<h1 class="page-header text-center"></h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">	
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"<div class='alert alert-danger text-center'><button class='close'>&times;</button>".$_SESSION['error']."</div>";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"<div class='alert alert-success text-center'><button class='close'>&times;</button>".$_SESSION['success']."</div>";
					unset($_SESSION['success']);
				}?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Novo</a>
				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>		
			</div> 
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Host Name</th>
						<th>Localidade</th>
						<th>Departamento</th>
						<th>Administrar</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM recepcao_caixa";
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['firstname']."</td>
									<td>".$row['localidade']."</td>
									<td>".$row['departamento']."</td>
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Editar/Visualizar</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Eliminar</a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}

							/////////  AR SE FOR MySQLI apenas compativel com mysqlllli ////////s

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();
</script>
</body>
    <script>
       $.fn.dataTable.ext.errMode = 'none';
    $('#table').on( 'error.dt', function ( e, settings, techNote, message ) {
    console.log( 'An error has been reported by DataTables: ', message );
    } ) ;
    $(function(){
    table = $('#myTable').DataTable( {
        paging: false
    } );
    table.destroy();    
    table = $('#myTable').DataTable( {
        ordering: false  //put false for not showing the arrows
    } );
    });
    </script>
<<footer><div class="PP"><p>Ramoa: 2018</a></p></div></footer>
<<style>
.PP{text-align: center;}
</style>
</html>