<?php

function fromroot($rootfile ,$file, $value=False){
    
    $folder = dirname($rootfile);
    $folder = str_replace($_SESSION['root'], "", $folder);

    for($i=1; $i<count(explode("/", $folder)) ;$i++){
        $file = "../".$file;
    }
    if ($value){
        return $file;
    }
    return sprintf('"%s"',$file);
}

?>