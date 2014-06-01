<?php
/*
ADD AN APPLICATION ID !!

If you want to know how to find out your app id, either search on google for: facebook appid, either go to http://rieglerova.net/how-to-get-a-facebook-app-id/

*/

$appID = ''; // add the App ID here

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $appID; ?>"; // addyour appId here
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>