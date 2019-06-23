<script type="text/javascript">
	
	function downloadAll(){
		
		var elements = document.getElementsByTagName('a');
		
		for (var i = 0; i < elements.length; i++) {
			var link = elements[i].getAttribute("href");
			window.open(link);
		}
	}
	
</script>

<?php
error_reporting(0);
include 'fileFromEpisodeLink.php';
include 'selectEpisode.php';

$episodes = getEpisodes($_GET['seriesLink']);
	
foreach($episodes as $a){
    $url = urlencode($a);
    echo "<a href=\"episode.php?episodeLink=$url\"><button>$a</button></a>";
}

echo "<button onclick=\"downloadAll()\">Download All</button>";


