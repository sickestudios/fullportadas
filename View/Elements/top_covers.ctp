<?php $tp_covers = $this->requestAction('covers/index/typeQuery:topCovers'); ?>
<div id="" class="grid_4 alpha omega div_sideheader_right">
	<h2><?php echo $keyw; ?> Populares</h2>
</div>
<div class="grid_4 alpha omega div_sidecontent_right">
<?php foreach($tp_covers as $tp_cover): ?>
	<div class="div_sidecontent_right_tcover">
	<div class="div_sidecontent_right_tcover_img" class="">
		<?php 
		echo $this->Html->link(
				$this->Html->image(
					str_replace("s1600","s50-c",$tp_cover['Cover']['image']),
					array('alt'=> $keyw.' '.$tp_cover['Review']['title'])
				),
				'/'.$tp_cover['Review']['url'],
				array('title'=>$tp_cover['Review']['title'], 'escape'=>false))
		?>
	</div>
	<div class="div_sidecontent_right_tcover_title">
		<?php echo $this->Html->link(
					$tp_cover['Review']['title'],
					'/'.$tp_cover['Review']['url'],
					array('title'=>$tp_cover['Review']['title'], 'escape'=>false)
				);
		?>
	</div>
	</div>
<?php endforeach; ?>
</div>


