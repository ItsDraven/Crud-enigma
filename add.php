<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
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
		$sql = "INSERT INTO recepcao_caixa (firstname, lastname, localidade, departamento, address, processador, motherboard, tipo_gpu, nome_grafica, megas_grafica, tipo_hd, quant_hd, ram, stick_ram, ram_total, Slot_DIMM0, Slot_DIMM1, Slot_DIMM2, Slot_DIMM3) VALUES ('$firstname', '$lastname','$localidade','$departamento', '$address', '$processador', '$motherboard', '$tipo_gpu', '$nome_grafica', '$megas_grafica', '$tipo_hd', '$quant_hd', '$ram', '$stick_ram', '$ram_total', '$Slot_DIMM0', '$Slot_DIMM1', '$Slot_DIMM2', '$Slot_DIMM3')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: indexx.php');
?>