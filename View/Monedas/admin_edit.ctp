<div class="page-title">
	<h2><span class="fa fa-money"></span> Monedas</h2>
</div>
<?= $this->Form->create('Moneda', array('class' => 'form-horizontal', 'type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'form-control'))); ?>
<div class="page-content-wrap">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Editar Moneda</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<?= $this->Form->input('id'); ?>
							<tr>
								<th><?= $this->Form->label('nombre', 'Nombre'); ?></th>
								<td><?= $this->Form->input('nombre'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('codigo', 'Código'); ?></th>
								<td><?= $this->Form->select('codigo', array(
										'CLP' => 'Peso Chileno (CLP)',
										'US' => 'Dolar (US)',
										'UF' => 'Unidad de fomento (UF)'
									),
									array(
										'class' => 'select form-control',
										'empty' => 'Seleccione'
									)
								); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('activo', 'Activo'); ?></th>
								<td><?= $this->Form->input('activo', array('class' => 'icheckbox')); ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="panel-footer">
					<div class="pull-right">
						<input type="submit" class="btn btn-primary esperar-carga" autocomplete="off" data-loading-text="Espera un momento..." value="Guardar cambios">
						<?= $this->Html->link('Cancelar', array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
					</div>
				</div>
			</div>
		</div> <!-- end col -->
	</div> <!-- end row -->
</div>
<?= $this->Form->end(); ?>