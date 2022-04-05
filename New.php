<?php
$URL = "https://voe.sx/e/hzkt44pskukq";
$Fetched_Contents = file_get_contents($URL);
if (preg_match('/"hls": "(.*?).m3u8(.*?)"/i', $Fetched_Contents, $MP4_Link)){
    $Complete_MP4_Link = "{$MP4_Link[1]}.m3u8{$MP4_Link[2]}";
    //now embed in your mp4 player using html,javascript
    echo $Complete_MP4_Link;
}else{
    echo "Didn't found any mp4 link.";
}
?>


