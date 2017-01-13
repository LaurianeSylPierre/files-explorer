<?php
    $base_url2 = "/home/laurianep/";
    if(isset($_GET["param_url"])){
        $base_url2 = "/home/laurianep/".($_GET["param_url"])."/";
    }
    $dir = scandir($base_url2);
?>

<p>
    <?=$base_url2?>
</p>