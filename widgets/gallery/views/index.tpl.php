<ul class="list-group">
	<?php foreach ($categories as $category): ?>
	<li class="list-group-item<?php echo ($this->url->request == 'gallery/'.$category['category_id'].'/'.$category['name']) ? ' active' : ''  ?>">
		<span class="badge badge-default pull-right"><?php echo $category['nb_gallery'] ?></span>
		<a href="<?php echo url('gallery/'.$category['category_id'].'/'.$category['name']) ?>"><?php echo $category['title'] ?></a>
	</li>
	<?php endforeach ?>
</ul>
