<div id="cover_view">
	<div id="cover_view_ads" class="sep_5px">
		<?php echo $this->element('adsense_728x90');?>
	</div>
	<div itemscope itemtype="http://schema.org/CreativeWork" >	
		<div id="cover_view_cover" class="sep_5px" >
		 <?php echo $this->Html->image($cover['Cover']['image'],array('alt'=>$keyw.' '.$cover['Review'][0]['title'],'itemprop'=>'image'))?>
		</div>
		<div id="cover_view_avatar">
			<?php echo $this->Html->image('/img/fullportadas_cara_cover.png',array('alt'=>'Fullportadas.com'))?>
		</div>
		<div id="cover_view_title">
			<?php echo $this->Html->tag('h1',$cover['Review'][0]['title'], array('class' => '','itemprop'=>'name')); ?>
			<?php echo $this->Html->tag('meta',NULL,array('itemprop'=>'description','content'=>$cover['Review'][0]['description'])); ?>
			<?php echo $this->Html->tag('meta',NULL,array('itemprop'=>'author','content'=>'fullportadas.com')); ?>
		</div>
	</div>
	<div id="cover_view_content">
		<div id="cover_view_content_desc" class="cover_view_content_box cover_view_content_box_desc">
			<div itemscope itemtype="http://schema.org/Review">
				<?php echo $this->Html->tag('meta',NULL, array('itemprop' => 'name', 'content'=>$cover['Review'][0]['title']));?>
				<?php echo $this->Html->tag('meta',NULL, array('itemprop' => 'datePublished', 'content'=>$cover['Review'][0]['created']));?>				
				<?php echo $this->Html->image('stars_'.$cover['Cover']['score'].'.jpg'); ?> <span>Autor: </span><a href="https://plus.google.com/109796589522847693203" target="_blank" rel="publisher,nofollow" itemprop="author">fullportadas.com</a>
				<?php echo $this->Html->tag('p',$cover['Review'][0]['description'], array('class' => '', 'itemprop'=>'reviewBody'));?>
				<span itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" >
					<?php echo $this->Html->tag('meta',NULL, array('itemprop' => 'ratingValue', 'content'=>$cover['Cover']['score']));?>
				</span>
			</div>
		</div>
		<div id="cover_view_content_like" class="cover_view_content_box cover_view_content_box_action">
			<div><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.fullportadas.com%2F<?php echo $cover['Review'][0]['url']; ?>&amp;send=false&amp;layout=box_count&amp;width=80&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=65&amp;appId=456923754339799" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:65px;" allowTransparency="true"></iframe></div>
		</div>
		<div id="cover_view_content_down" class="cover_view_content_box cover_view_content_box_action">
			<div><?php echo $this->Html->link('Descargar Portada',str_replace('/s1600/','/d/',$cover['Cover']['image']),array('class'=>'btn btn-primary')); ?></div>
		</div>		
	</div>
</div>
	
	
