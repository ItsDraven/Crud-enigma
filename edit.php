<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$localidade = $_POST['localidade'];
		$departamento = $_POST['departamento'];
		$address = $_POST['address'];
		$processador = $_POST['processador'];
		$motherboard = $_POST['motherboard'];
		$tipo_gpu = $_POST['tipo_gpu'];
		$nome_grafica = $_POST['nome_grafica'];
		$megas_grafica = $_POST['megas_grafica'];	
		$tipo_hd = $_POST['tipo_hd'];	
		$quant_hd = $_POST['quant_hd'];	
		$ram = $_POST['ram'];	
		$stick_ram = $_POST['stick_ram'];
		$ram_total = $_POST['ram_total'];
		$Slot_DIMM0 = $_POST['Slot_DIMM0'];
		$Slot_DIMM1 = $_POST['Slot_DIMM1'];
		$Slot_DIMM2 = $_POST['Slot_DIMM2'];
		$Slot_DIMM3 = $_POST['Slot_DIMM3'];
		$sql = "UPDATE recepcao_caixa SET firstname = '$firstname', lastname = '$lastname', localidade = '$localidade', 
		departamento = '$departamento', address = '$address', 
		processador = '$processador', motherboard = '$motherboard', tipo_gpu = '$tipo_gpu', nome_grafica 
		= '$nome_grafica', megas_grafica = '$megas_grafica', tipo_hd = '$tipo_hd', quant_hd = '$quant_hd',
		ram = '$ram', stick_ram = '$stick_ram', ram_total = '$ram_total', Slot_DIMM0 = '$Slot_DIMM0', Slot_DIMM1 = '$Slot_DIMM1'
		, Slot_DIMM2 = '$Slot_DIMM2', Slot_DIMM3 = '$Slot_DIMM3'WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: indexx.php');

?>