<div class="div_header_center">
	<h1><?php echo $keyw; ?></h1>
</div>
<div class="div_content_center">
	<?php foreach ($covers as $cover): ?>
	<?php
	if($cover['Review']['status'] == 'completed') {
		$review_description = $cover['Review']['description'];
	} else {
		$review_description = "";
	}
	//--
	echo
		$this->Html->tag(
			'div',
			$this->Html->tag(
				'div',
				$this->Html->image(str_replace('/s1600/', '/s420/', $cover['Cover']['image']),array('alt'=>'Portada para facebook de '.$cover['Review']['title'])),
				array('class'=>'div_list_item_image')).
				'<div class="div_list_item_background"></div>'.
			$this->Html->tag(
				'div',
				$this->Html->tag('h2',$this->Html->link($cover['Review']['title'],'/'.$cover['Review']['url'])).
				$this->Html->tag('p',$review_description).
				$this->Html->link('Ver Portada','/'.$cover['Review']['url'],array('class'=>'btn btn-primary btn_ver','title'=> __('Ver Portada ').$cover['Review']['title'])),
				array('class'=>'div_list_item_description')),
			array('class'=>'div_list_item', 'title'=>$cover['Review']['title'])
	);
	?>
	<?php endforeach; ?>
</div>
<div id="div_paginate">
	<?php echo $this->element('paginate_covers'); ?>
</div>

