<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Contactanos: Fullportadas.com</title>
		<meta charset="utf-8" />
		<meta name="distribution" content="Global" />
		<meta name="rating" content="General" />
		<meta name="author" content="Fullportadas" />
		<meta name="language" content="es" />
		<meta name="robots" content="index,nofollow" />
	<?php
		//Insertar Icono navegador
		echo $this->Html->meta('icon');
		//Insertar clases (archivos CSS)
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap_form.min');
		echo $this->Html->css('960');
		echo $this->Html->css('reset');
		echo $this->Html->css('text');	
		echo $this->Html->css('fullportadas');
		echo $this->Html->css('form');
		
		//
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
	<?php
		// Incluir archivos Java (.js)
		echo $this->Html->script('jquery');	
	 	echo $this->Html->script('bootstrap.min');
	?>		
	</head>
	<body>
		<div class="container_12 bg_white" >
			<div class="grid_12 sep_5px">
				<header>
					<?php echo $this->Html->link(
							$this->Html->image('fullportadas-logo.jpg'),
							'/',array('escape'=>false));
					?>
				</header>
			</div>
			<div class="grid_12 sep_10px">
				<a href="/" style="color:#000000; font-weight:bold; text-decoration:underline;">Home</a>
				&nbsp; &nbsp;
				<a href="/portadas" style="text-decoration:underline;">Portadas</a>
			</div>
			<div class="grid_12 sep_10px">
				<?php echo $this->Session->flash(); ?>
				<div class="grid_12">
				<?php echo $this->Form->create('Mail'); ?>
					<fieldset>
						<legend style="font-weight:bold;"><?php echo __('Rellena el formulario para contactarte con nosotros.'); ?></legend>
						<div class="grid_6 prefix_1 sep_10px">
							<div class="grid_1">Nombres:</div>
							<div class="grid_4"><?php echo $this->Form->input('name', array('label'=>'', 'class'=>'grid_4')); ?></div>
						</div>
						<div class="clear"></div>
						<div class="grid_6 prefix_1 sep_10px">
							<div class="grid_1">E-Mail:</div>
							<div class="grid_4"><?php echo $this->Form->input('email', array('label'=>'', 'class'=>'grid_4')); ?></div>
						</div>
						<div class="clear"></div>
						<div class="grid_6 prefix_1 sep_10px">
							<div class="grid_1">Asunto:</div>
							<div class="grid_4"><?php echo $this->Form->input('subject', array('label'=>'', 'class'=>'grid_4')); ?></div>
						</div>
						<div class="clear"></div>
						<div class="grid_6 prefix_1 sep_10px">
							<div class="grid_1">Mensaje:</div>
							<div class="grid_4"><?php echo $this->Form->input('message', array('label'=>'','rows'=>'5', 'class'=>'grid_4')); ?></div>
							<?php echo $this->Form->input('status', array('type'=>'hidden','value'=>'1')); ?>
						</div>
					</fieldset>	
						<div class="clear"></div>
						<div class="grid_6 prefix_1">
							<div class="grid_1">&nbsp;</div>
							<div class="grid_4">
								<button type="submit" class="btn btn-primary grid_4">Enviar</button>
							</div>
							<?php echo $this->Form->end(); ?>
						</div>
				</div>
			</div>
			
			<div class="grid_12 sep_5px">
			


	
	<?php
		
		
		
		
		
	?>
	


	
			</div>
			<div class="grid_12 alpha omega sep_5px">
				<div id="div_footer">
					<div>
						<footer>
							<?php echo $this->element('footer_covers'); ?>
						</footer>				
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
