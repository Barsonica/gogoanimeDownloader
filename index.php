<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'fileFromEpisodeLink.php';
        include 'selectEpisode.php';
        
        $site = "https://www5.gogoanime.tv";
        
        $searchResult = (searchAnime($site, "Death"));
        
        $episodes = getEpisodes($searchResult[0]['link']);
        
        $downloadPage = getDownloadPageLink($episodes[1]);
        
        downloadAnime($downloadPage);
        
        ?>
    </body>
</html>
