<?php
error_reporting(0);

function searchAnime($site, $searchIndex){
    $returnValue = array();
    $index = 0;
    
    $page = new DOMDocument();
    $page->loadHTML(file_get_contents("$site/search.html?keyword=$searchIndex"));
    
    $links = $page->getElementsByTagName('p');
        
    foreach ($links as $link){
        
        if($link->getAttribute("class") == "name"){
            $returnValue[$index]["name"] = $link->nodeValue;
            $returnValue[$index]["link"] = $site . $link->firstChild->getAttribute("href");
            
        $index++;
        }
        
    } 
    return $returnValue;
}

function getEpisodes($animeLink){
    
    $animeLink = str_replace("/category", "", $animeLink);
    $animeLink .= "-episode-";
    $index = 1;
    $returnValue = array();
    
    while (true){
        $returnValue[$index] = $animeLink . $index;
        
        if(!(strpos(file_get_contents($returnValue[$index]),'class="anime_video_body_watch"') != false)){
            array_pop($returnValue);
            return $returnValue;
        }
        echo $index;
        $index++;
    }
}
