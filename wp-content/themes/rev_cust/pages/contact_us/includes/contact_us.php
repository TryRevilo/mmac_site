<?
function practice_area_img($img_path)
{
	$items = "";
	$files = glob($img_path . "/*.*");
	for ($i=1; $i<count($files); $i++)
	{
		$num = basename($files[$i]);

		$items .= <<<HTML

		<div class="item">						
			<img src="images/competition_antitrust/$num" class="img-responsive" alt="">
		</div>

HTML;
	}
	return $items;
}
?>