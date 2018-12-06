<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">HostName:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">IP:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lastname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Localidade:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="localidade" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Departamento:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="departamento" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Windows:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="address" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Processador:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="processador" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Motherboard:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="motherboard" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipo de GPU:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipo_gpu" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nome da Gráfica:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome_grafica" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Megas da Gráfica:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="megas_grafica" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipo de HardDrive:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipo_hd" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">HardDrives Instaladas:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="quant_hd" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipo de Ram:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ram" required>
					</div>
				</div> 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Sticks de Ram:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="stick_ram" required>
					</div>
				</div> 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Total de Ram:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ram_total" required>
					</div>
				</div> 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM0:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM0" required>
					</div>
				</div> 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM1:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM1" required>
					</div>
				</div> 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM2:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM2" required>
					</div>
				</div> 
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Slot DIMM3:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Slot_DIMM3" required>
					</div>
				</div> 
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>