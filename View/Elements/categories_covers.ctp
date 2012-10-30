<?php $categories = $this->requestAction('categorytypes/index'); ?>
<?php $nameGroup = 'portadas'; ?>
<?php
foreach($categories as $categorie) {
	
}
?>
<div class="div_sideheader_left">
Categorías
</div>
<div class="div_sidecontent_left">
	<ul>
		<li><?php echo $this->Html->link('Todas las Portadas','/'.$nameGroup); ?></li>
	<?php foreach($categories as $categorie): ?>
		<li>
			<?php if (!empty($categorie['Categorygiven'][0])): ?>
			<a href="/<?php echo $nameGroup.'/'.$categorie['Categorygiven'][0]['url']; ?>" title="<?php echo $categorie['Categorygiven'][0]['name']; ?>">
				<?php echo $categorie['Categorygiven'][0]['name']; ?>
			</a>
			<?php else:?>
			<a href="/<?php echo $nameGroup.'/'.$categorie['Categorytype']['url']; ?>" title="<?php echo $categorie['Categorytype']['name']; ?>" rel="nofollow">
				<?php echo $categorie['Categorytype']['name']; ?>
			</a>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ul>
</div>
