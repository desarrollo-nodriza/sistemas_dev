<div class="page-title">
	<h2><span class="fa fa-list"></span> Nueva Tienda</h2>
</div>
<?= $this->Form->create('Tienda', array('class' => 'form-horizontal', 'type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false, 'class' => 'form-control'))); ?>
<div class="page-content-wrap">
	<div class="row">
		<div class="col-xs-12 col-sm-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Configuración de la tienda</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th><?= $this->Form->label('nombre', 'Nombre'); ?></th>
								<td><?= $this->Form->input('nombre'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('url', 'URL'); ?></th>
								<td><?= $this->Form->input('url'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('configuracion', 'Configuracion BD'); ?></th>
								<td><?= $this->Form->input('configuracion'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('prefijo', 'Prefijo de las tablas'); ?></th>
								<td><?= $this->Form->input('prefijo'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('activo', 'Activo'); ?></th>
								<td><?= $this->Form->input('activo', array('class' => 'icheckbox')); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('principal', 'Tienda principal'); ?></th>
								<td><?= $this->Form->input('principal', array('class' => 'icheckbox')); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('tema', 'Tema de la tienda'); ?></th>
								<td><?= $this->Form->select('tema', array(
											'dark-head-light' => 'Dark Head Light',
											'dark' => 'Dark',
											'default-head-light' => 'Default Head Light',
											'default' => 'Default',
											'forest-head-light' => 'Forest Head light',
											'forest' => 'Forest',
											'light' => 'Light',
											'night-head-light' => 'Night Head Light',
											'night' => 'Night',
											'nodriza' => 'Nodriza',
											'serenity-head-light' => 'Serenity Head Light',
											'serenity' => 'Serenity'
										), array('class' => 'form-control','empty' => false)); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('email_remitente', 'Email remitente'); ?></th>
								<td><?= $this->Form->input('email_remitente'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('emails_bcc', 'Email para <br> Copia oculta'); ?></th>
								<td><?= $this->Form->input('emails_bcc', array('placeholder' => 'Emails separados por coma (,)')); ?></td>
							</tr>
						</table>
						<div class="pull-right">
							<input type="submit" class="btn btn-primary esperar-carga" autocomplete="off" data-loading-text="Espera un momento..." value="Guardar cambios">
							<?= $this->Html->link('Cancelar', array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Información del Comercio</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th><?= $this->Form->label('nombre_fantasia', 'Nombre Comercio'); ?></th>
								<td><?= $this->Form->input('nombre_fantasia'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('rut', 'Rut'); ?></th>
								<td><?= $this->Form->input('rut'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('direccion', 'Dirección'); ?></th>
								<td><?= $this->Form->input('direccion'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('giro', 'Giro comercial'); ?></th>
								<td><?= $this->Form->input('giro'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('detalle_cuenta', 'Información para transferencias'); ?></th>
								<td><?= $this->Form->input('detalle_cuenta'); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('fono', 'Teléfono'); ?></th>
								<td><?= $this->Form->input('fono', array('class' => 'form-control js-fono')); ?></td>
							</tr>
							<tr>
								<th><?= $this->Form->label('logo', 'Logo (300x135)'); ?></th>
								<td><?= $this->Form->input('logo', array('class' => '', 'type' => 'file')); ?></td>
							</tr>
						</table>
						<div class="pull-right">
							<input type="submit" class="btn btn-primary esperar-carga" autocomplete="off" data-loading-text="Espera un momento..." value="Guardar cambios">
							<?= $this->Html->link('Cancelar', array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->Form->end(); ?>