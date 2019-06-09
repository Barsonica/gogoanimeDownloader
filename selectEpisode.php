<?php

function searchAnime($site, $searchIndex){
    $returnValue = array();
    $page = new DOMDocument();
    $page->loadHTML(file_get_contents("$site/search.html?keyword=$searchIndex"));
    
    $links = $page->getElementsByTagName('p');
        
    foreach ($links as $link){
        //vrátí všechna jména a adresy bez site za sebou
        if($link->getAttribute("class") == "name"){
            $returnValue .= $link->nodeValue;
            $returnValue .= $link->firstChild->getAttribute("href");
        }
    } 
    return $returnValue;
}