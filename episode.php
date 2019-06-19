<?php
error_reporting(0);
$site = "https://www5.gogoanime.tv";
include 'fileFromEpisodeLink.php';
include 'selectEpisode.php';

downloadAnime(getDownloadPageLink($_GET['episodeLink']));
