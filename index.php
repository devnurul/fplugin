<?php
/*
plugin name: Social share
author: Nurul Islam
author url: devnurul.me
*/

function nin_social_connections($atts,$content=null){ 
    ob_start();
    ?>
    <a href="https://facebook.com"> FaceBook</a>

<?php 
 return ob_get_clean();
}
   

add_shortcode("noor_social", "nin_social_connections");