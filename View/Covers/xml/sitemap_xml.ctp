<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
	<loc>http://www.fullportadas.com/</loc>
	<changefreq>always</changefreq>
	<priority>0.8</priority>
</url>
<?php foreach($covers as $cover):?>
<url>
	<loc>http://www.fullportadas.com/<?php echo $cover['Review']['url']; ?></loc>
	<changefreq>always</changefreq>
</url>
<?php endforeach;?>
<?php foreach($categorytypes as $categorytype):?>
<url>
	<loc>http://www.fullportadas.com/portadas/<?php echo $categorytype['Categorygiven']['url']; ?></loc>
	<changefreq>always</changefreq>
</url>
<?php endforeach;?>
</urlset>