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
        
        var_dump(searchAnime($site, "Death"));
        
        //$downloadPage = getDownloadPageLink("https://www5.gogoanime.tv/death-note-dub-episode-8");
        //downloadAnime($downloadPage);
        
        ?>
    </body>
</html>
