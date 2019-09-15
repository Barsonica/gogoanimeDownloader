<?php
error_reporting(0);
$site = "https://www5.gogoanime.tv";
include 'fileFromEpisodeLink.php';
include 'selectEpisode.php';

$arr = searchAnime($site,$_GET['search']);

for($i = 0; $i < count($arr); $i++){
	echo makeButton($arr[$i]['name'], $arr[$i]['link']);
}
	
function makeButton($name, $link){
	return "<a href=\"series.php?seriesLink=$link\"><button>$name</button></a>";
}
