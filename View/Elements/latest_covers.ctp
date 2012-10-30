<?php $ft_covers = $this->requestAction('covers/index/typeQuery:lastedCovers'); ?>
<div class="div_header_center">
	<h1><?php echo __('Ultimas '); ?><?php echo $keyw ?></h1>
</div>
<div class="div_content_center">
	<?php foreach ($ft_covers as $ft_cover): ?>
	<div class="div_content_center_cover">
		<div class="div_content_center_cover_img">
			<a href="/<?php echo $ft_cover['Review']['url']; ?>" title="<?php echo $ft_cover['Review']['title']; ?>">
				<?php echo $this->Html->image(str_replace('s1600','s90-c',$ft_cover['Cover']['image']),array('alt'=>$keyw.' '.$ft_cover['Review']['title'])); ?>
			</a>
		</div>
		<div class="div_content_center_cover_text">
			<h2><a href="/<?php echo $ft_cover['Review']['url']; ?>" title="<?php echo $ft_cover['Review']['title']; ?>"><?php echo $ft_cover['Review']['title']; ?></a></h2>
			<p><?php if($ft_cover['Review']['status'] == 'completed'){ echo $ft_cover['Review']['description']; } ?></p>
		</div>		
	</div>
	<?php endforeach; ?>
</div>
<div class="div_footer_center">
	<?php 
		echo $this->Html->tag('div',
			$this->Html->link( __('Ver mas portadas'), '/portadas',array('class'=>'btn btn-primary'))
		);
	?>
</div>

