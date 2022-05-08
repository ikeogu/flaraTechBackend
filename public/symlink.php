<?php


// $link = '/home/appgidic/public_html/flaretech/flaretech_uploads/storage';

// $target ='/home/appgidic/public_html/flaretech/flaretechbackend/storage/app/public/';

// if(symlink($target, $link)){
   
//     readlink($link);
//     echo "Storage linked."; 
// }else{
//     echo "Could not sync!";
// }
 Artisan::call('cache:clear');
echo "yaweh!";
?>