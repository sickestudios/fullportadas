<?php $ft_covers = $this->requestAction('covers/index/typeQuery:featuredCovers'); ?>
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
  	<?php $i=1; ?>
    <?php foreach($ft_covers as $ft_cover): ?>
    <div class="<?php if($i==1) { echo 'active'; $i=0; } ?> item">
    <?php echo $this->Html->link(
					$this->Html->image($ft_cover['Cover']['image'], array('alt' => __($ft_cover['Review']['title']), 'border' => '0')),
					'/'.$ft_cover['Review']['url'],
					array('escape' => false)
				);
	?>
		<div class="carousel-caption">
			<h4><?php echo $keyw.' de '.$ft_cover['Review']['title'] ?></h4>
		</div>
	</div>
    <?php endforeach; ?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

