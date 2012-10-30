<!DOCTYPE html>
<html lang="es">
	<head>
		<title><?php echo $title_for_layout; ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo $description_for_layout; ?>" />
		<meta name="keywords" content="<?php echo $keywords_for_layout; ?>" />
		<meta name="distribution" content="Global" />
		<meta name="rating" content="General" />
		<meta name="author" content="Fullportadas" />
		<meta name="language" content="es" />
		<meta name="robots" content="index,follow" />
		<meta name="og:image" content="<?php echo str_replace("s1600","s100-c",$cover['Cover']['image']); ?>" />
		<meta content='349257305123639' property='fb:admins'/>
		<meta content='456923754339799' property='fb:app_id'/>
	<?php
		//Insertar Icono navegador
		echo $this->Html->meta('icon');
		//Insertar clases (archivos CSS)
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('960');
		echo $this->Html->css('reset');
		echo $this->Html->css('text');	
		echo $this->Html->css('fullportadas');	
		//
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<?php
		// Incluir archivos Java (.js)
	 	echo $this->Html->script('bootstrap.min');
	?>		
	<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27963961-6']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
	</script>
	</head>
	<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=456923754339799";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
		<div class="container_12 bg_white" >
			<div class="grid_12 sep_5px">
				<header>
					<?php echo $this->Html->link(
							$this->Html->image('fullportadas-logo.jpg',array('atl'=>$keyw)),
							'/',array('escape'=>false, 'title'=>$keyw));
					?>
				</header>
			</div>
			<div class="grid_12 sep_10px">
				<?php //echo $this->element('adsense_text_728x15');?>
			</div>
			<div id="cover_v" class="grid_12 sep_5px">
				<?php echo $this->element('view_cover'); ?>
			</div>
			<div class="grid_12 sep_5px">
				<div id="div_left" class="grid_8 alpha omega">
					<div id="div_aside_left">
						<?php echo $this->element('adsense_text_200x90'); ?>
						<aside>
							<?php echo $this->element('categories_covers'); ?>
						</aside>
					</div>
					<div id="div_content">
						<?php echo $this->element('comments_box'); ?>
						<section>
						
						</section>	
					</div>
				</div>
				<div class="grid_4 omega">
					<?php echo $this->element('adsense_300x250'); ?>
					<div>
						<aside>
						<?php echo $this->element('top_covers'); ?>
						</aside>				
					</div>
				</div>		
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
