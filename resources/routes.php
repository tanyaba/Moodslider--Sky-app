<?php

$contentList = ['home', 'uploadView', 'upload'];
if (in_array($content, $contentList)){
    call($content);
} else {
    call('error');
}

function call($content){
    
    include_once "resources/".$content.".php";
}

