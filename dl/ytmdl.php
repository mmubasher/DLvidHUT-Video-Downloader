<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwM0xacWRLNWNyNGVobGQ1amJEeUFGOFc1VTkyb0l1Tko5bW1Bb0hrTnNIN0JRck9aTTVPTEJrNjVPV2h6bzIvZTdRbHA4Q2o3Vjk5MC96Yzl0b2o4S1FrK2tnSUQvOUJEdHVSczlSN0NRUGU4RWZwUFVEcUxVcnduMUpjMm9uVVVreUU1NjVLYkJNQjQvQ2J0V3hUODhjZjNFeVJ2TmY2RjN0QlRLSlZlTURRZXppT2FhTU9XQ0FOK1ZKSGlpM0VVNUlXNm5SMC8ybHRQbWxTOE9OelQ3Q1hsbG16Tk10R0N0VU9VMXdiclFEZlBrWngraitIZlF3QU1UUEkrazhGZmRLVE1sK1oyRGhpMmNjK25KdGpQSVFJZzlMdUx4ellkMkQrZjVZRklNVU9WUDF6MEVFQXBKUVU4M240dE1IT3RjWjZoalVzdzkrc2hycjZRdFVCcjBmSE5PM21NaDZTMkxJV09kRjdoUzd1VTUzNUpQYllRRWU2Q0pnMHpoYXRsdlZWK2xYWTFFRFVRdFkvTnVoU2JlY2RVVnFrSkhHZXZwVTIwSldyUnh3WGRQRlpUc1dZKytEaGVLLzZwaXpZSnJIK2tNTnlYRVdUYktsbCtMWkZ2UFFWSGFQeWhyMk5ETUxnaEtBcWQvMlMrYnQveTVYTXk1Mjc1WWVzTFpqNXVqQTJ5MjlmYkdRUk81YllFc202YjI0SE5OWmlSU0VrK2RBM284WEh5ZUNRUHowbnNHU2duSmQzZ3ltcXNBVVFCeFpGY1poM3FUS3dUUHkzUUF5MTFrNkRQN3E4V2x3bFUxOUpqaDBqM3NPeHNWdDljUXQ3bmZBUysxbGJJcnlPWThhTWFnek5hYy85ekwxSjB2WDEyNzJrTGRJNDRXVXRCMXMyM0F2UEc3K0ovRG1USWxaYXN5Z2VEQnRlQ3RoNFRpeDdNR0tZTG9WaElQQURzUTRtL0xSRTBxUUtaVnJ2bUEwbmVJSE5nWFppN3NZSWtjQlJaYjNRSGZZL2trU0JSdDcvNnh4OWNIbkM1Zk90UG5COTFqWmlBdHhVYTJwcTVQUEE3M1dSdGpib29KTENHMlBBR2NtYTB4OTA0dDBPZEtKUjJiTzlxVlFxd1d5eG5hZ1ZqL2hFTzJVSVRmNmxEbVAzYTh6cXVEcHZsOVE0YTA1a1BaZ1g3MjlCT2tXVk02ZkwrY09Yc0MvcG92dkVSaUt3bTB0QWowZ0xYM3NqNDVJdXlsV1dMQUQxbkN5RzBybkZvUnFuYTdkMEQvN2lRaEhSRDVQbjFqV285bHBFUFg5RXJUY2ZvUnpuU3JZeDNTb3BndlBaK09yM1IycGNNdkRXTGQvbjY2NzhXRHR1d1JzeHdHbTJYV0hYOEpjQ0taZWlNSGphNUh5eEhZMXBlL0U4SElnbTB6VHliYzhMOEJURUlLbmdsYWUwdXhPc1RWRXE1L21SeWtQQzFhZ0xkZVRJczdBQmozM0tuYjJ4NjM0Ym1IcG5wV1cxV2x2Ukp1dWlyL2hrejJoRjc3dEhDQnpjVXU4RTRqN0U4KzVrWVhwNUxXZ0FXcVlScUhEYzNuNVpJb3hpVmxKbVVTWkRBWXdoY0ZlbEc2Y3dqTUgwZ014dHlxRXZJYWlOc3ljUmRsQWNkK0VycC9BVld6c1VJa2tBS2hJWk55SU1saEVkZnI3bWVqclp6MUZlQWtFVHFLU2daaHA1aXdtWGQ1blBuNzNZS0RGQU52ZDVpdFVXM0gxeEY2STRSWW1BS1VqYVd0dWF2Wjc5N213SzUyMGZJcmYvcjVHOEp0THhvdGRxWU5BVkVtbG1rMURocFNlSnlPNEpmMEh5ZlhUOXhuZTdMSW5oY3lqMnJyR2d3TWYzNDZ3dEJReWV3SHZYUjRKZC96SmlxR21GSTI4OUowWmlFL1RHSEJRMmVqZFlSaVN6dDdUUHhlSzRJQys5bmhveEMrUEQ1a0JMV1pXaGlKKzU4WC9DbFl0dXFSNzJhUnA4MjhDMXJ4UWJpYzNLTk5nL2NuQloyKytoMnpnVklLZ1ZJR0w0ZXp2OGpEWFpYTEVlTkZ2dmt2a3F4VGRiTzlhenViWEJoeGpPQ05EcFdjZHNwK1ZsVVZnaWc1YXE2dUdqOG9VMmVwVnJQVHNESkNYYW1FcVc0Y2plQ0l6S1lodU92S1hIMmIvR2ZHUW5ISmFZQVVvMzJHZkJjTnhIQnFHL0JTbWlObExub2lnbjRVeGo5SVAzRGJ1Mk9IcEgvZk9hMFFzeFFveTlHbndrUEYvTTZrUnpHeGNNRVlZdUlIcGVaMkRROGFPbzlZQTVEemZwK2pkdlNVWHNzL0FXbHRCNHVOM2xxRGszUnc0bGVzcmNLclBZNDJzcmFVWjlHY0pqdkE9PQ==";eval(e7061($e7091));
if(!empty($thumb)){
    $thumbux = $thumb;
} else $thumbux = "http://dl4hut.xyz/img/logo.png";

?>
<!DOCTYPE html>
<html>
<head>
    <title>YavDL: Download : <?php echo $title; ?> .. </title>
<meta name="title" content="DLvidHUT : Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="description" content="DLvidHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="keywords" content="Video,Audio, Downloader, Online, YouTube, Facebook, Twitter, TikTok, MXTakatak, All-in-One,Online Downloader,AIO,<?php echo $title; ?>">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="5 days">
<meta name="author" content="TheOfficialVKr">
<meta itemprop="name" content="DLvidHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta itemprop="description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta itemprop="image" content="<?php echo $thumbux; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="DLvidHUT - Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="twitter:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="twitter:site" content="theofficialvkr">
<meta name="twitter:creator" content="itsmethevkr">
<meta name="twitter:image" content="<?php echo $thumbux; ?>"> 
<meta property="og:title" content="DLvidHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta property="og:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta property="og:image" content="<?php echo $thumbux; ?>">
<meta name="twitter:image:src" content="http://dl4hut.xyz/stream.php?vkr=<?php echo $thumbux; ?>">
<meta property="og:url" content="http://dl4hut.xyz/">
<meta property="og:site_name" content="DLvidHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta property="fb:app_id" content="427710135379286">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $domain; ?>/img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $domain; ?>/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $domain; ?>/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $domain; ?>/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $domain; ?>/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $domain; ?>/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $domain; ?>/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $domain; ?>/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $domain; ?>/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $domain; ?>/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $domain; ?>/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $domain; ?>/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $domain; ?>/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $domain; ?>/img/favicon-16x16.png">
<link rel="manifest" href="<?php echo $domain; ?>/inc/manifest.json">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
<script type='text/javascript'>
if ('serviceWorker' in navigator) { navigator.serviceWorker.register('/inc/service-worker.js') }
</script>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=614490edfeb2560019eec6d8&product=sop' async='async'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">
  html, body
  {
    font-family: "Gotu"
  }
  input
  {
    padding: 5px;
    border-radius: 10px;
    border-style: solid;
    border-color: blue;
    transition-duration: 0.5s;
    width: 80%;
  }
  input:focus
  {
    border-color: skyblue;
    transition-duration: 0.5s;
  }
</style>
 </head>
<body style="word-break: break-all;" class="bg-light">
   <div class="text-center p-5">
       		<a href="<?php echo $domain; ?>/">	<img src="<?php echo $domain; ?>/img/logo.png" width="200px" height="90px"></a>
  </div>
      <div class="text-center">
   <h2> Paste a video url or name below and press on "Download". </h2><br><br>
<form action="<?php echo $domain; ?>/sf.php" method="GET" class="mt-2">
      <input required type="text" placeholder="Video URL or Name" class="mb-3" name="vkr"  value=""><br><br>
      <button class="btn btn-success" type="submit">Download</button>
</form>
</div>
<div class="m-5">
    
    
<center>
        <!-- ShareThis BEGIN --><div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END --><br>
<h2>    
Download : <?php echo $title; ?> <?php echo $error; ?>  
</h2> 
<br>
<object  width="100%" height="360">
    <param name="movie" value="https://www.youtube-nocookie.com/embed/<?php echo $matches[1]; ?>?html5=1&amp;rel=0&amp;hl=en_US&amp;version=3"/
    <param name="allowFullScreen" value="true"/>
    <param name="allowscriptaccess" value="always"/>
    <embed width="100%" height="360" src="https://www.youtube-nocookie.com/embed/<?php echo $matches[1]; ?>?html5=1&amp;rel=0&amp;hl=en_US&amp;version=3" class="youtube-player" type="text/html" allowscriptaccess="always" allowfullscreen="true"/>
</object>

<br>
Audio Format
<?php

if(!empty($title)){
    echo '<iframe style="width:96%; height:55px; border:0px;" scrolling="no" src="https://dlvkrhut.herokuapp.com/api/button/aio.php/?f=mp3&vkr=https://youtu.be/'.$matches[1].'"></iframe><br>';
}
else echo ''; 


if(!empty($m4a)){
    echo '<iframe style="width:96%; height:55px; border:0px;" scrolling="no" src="https://dlvkrhut.herokuapp.com/api/button/aio.php/?f=m4a&vkr=https://youtu.be/'.$matches[1].'">
</iframe><br>';
}
else echo ''; 

 if(!empty($matches[1])){
    echo '<iframe style="width:96%; height:55px; border:0px;" scrolling="no" src="https://dlvkrhut.herokuapp.com/api/button/aio.php/?f=webm&vkr=https://youtu.be/'.$matches[1].'">
</iframe><br>';
}
else echo ''; 
 if(!empty($matches[1])){
    echo '<iframe style="width:96%; height:55px; border:0px;" scrolling="no" src="https://dlvkrhut.herokuapp.com/api/button/aio.php/?f=wav&vkr=https://youtu.be/'.$matches[1].'">
</iframe><br>';
}
else echo ''; 
?>
    
<br><a href="<?php echo $domain; ?>/dl/yt.php/?vkr=<?php echo $lloc; ?>">
<button style="width:100%; background:red;"  class="btn btn-success"> More Format </button></a><br>  
</h2><br>
    <h1> How to Download </h1> <br>
    1. To Download Instagram story search Like this - igs@USERNAME
    <br>
    2. To Download Instagram Highlights search Like this - igh@USERNAME 
    <br>
    3. To Download YouTube music search Like this - ytm@Music Name
    <br>
    4. To search Youtube video normally put video name in search box .   
    <br>
    5. Apart from all this just put link in search box to Download normally.
   
<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
<br>
<div id="google_translate_element"></div>
    <script type="text/javascript">   function googleTranslateElementInit() {   new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element' ); }  
</script> <script type="text/javascript" src= 
"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> 
 </script> </center>
  <br>
  </div>  
</div>    
<div class="bg-dark text-white" style="bottom: 0;width: 100%;padding:12px">Developed by <a target="_blank" href="https://www.instagram.com/theofficialvkr">Vijay Kumar</a> <span style="float: right;">Copyright &copy; <?php echo date("Y"); ?></span><br> .</div><script type="text/javascript">
   window.setInterval(function(){        if ($("input[name='vkr']").attr("placeholder") == "Video URL or Name") {            $("input[name='vkr']").attr("placeholder", "Video URL or Name");        }        else        {            $("input[name='vkr']").attr("placeholder", "Video URL or Name");        }    }, 3000);
    </script>    
</body>  
<style type="text/css">
img[src*="000webhost"][style],
body > div:nth-last-of-type(1)[style]{
  opacity: 0 !important;
  pointer-events:none !important;
  width: 0px !important;
  height: 0px !important;
  visibility:hidden !important;
  display:none !important;
}
img[src*="http://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
</style>
</html> 
