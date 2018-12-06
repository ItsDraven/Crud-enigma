<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar membro de Ramoa</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">HostName:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">IP:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Localidade:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="localidade" value="<?php echo $row['localidade']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Departamento:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="departamento" value="<?php echo $row['departamento']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Windows:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Processador:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="processador" value="<?php echo $row['processador']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Motherboard:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="motherboard" value="<?php echo $row['motherboard']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipo de GPU:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipo_gpu" value="<?php echo $row['tipo_gpu']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nome da Gráfica:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome_grafica" value="<?php echo $row['nome_grafica']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Megas da Gráfica:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="megas_grafica" value="<?php echo $row['megas_grafica']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipo de HardDrive:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipo_hd" value="<?php echo $row['tipo_hd']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">HardDrives Instaladas:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="quant_hd" value="<?php echo $row['quant_hd']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipo de Ram:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ram" value="<?php echo $row['ram']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Sticks de Ram:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stick_ram" value="<?php echo $row['stick_ram']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Total de Ram:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ram_total" value="<?php echo $row['ram_total']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM0:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM0" value="<?php echo $row['Slot_DIMM0']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM1:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM1" value="<?php echo $row['Slot_DIMM1']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM2:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM2" value="<?php echo $row['Slot_DIMM2']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM3:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM3" value="<?php echo $row['Slot_DIMM3']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Atualizar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar Equipamento</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Tem a certeza que pretende eliminar o parâmetro</p>
				<h2 class="text-center"><?php echo $row['firstname'].' '.$row['lastname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Sim</a>
            </div>

        </div>
    </div>
</div>