<?php

function practice_area_img($img_path)
{
	$items = "";
	$files = glob($img_path . "/*.*");
	for ($i=0; $i<count($files); $i++)
	{
		$num = basename($files[$i]);

		$items .= <<<HTML

		<div class="item">						
			<img src="{$page}/images/commercial_corporate/$num" class="img-responsive" alt="">
		</div>

HTML;
	}
	return $items;
}