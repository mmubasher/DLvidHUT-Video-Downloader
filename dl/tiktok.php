<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwM0xacWRLNWNyNGVobGQ1amJEeUFGOFc1VTkyb0l1Tko5bW1Bb0hrTnNIN0JRck9aTTVPTEJrNjVPV2h6bzIvZTdRbHA4Q2o3Vjk5MC96Yzl0b2o4S1FrK2tnSUQvOUJEdHVSczlSN0NRUGU4RWZwUFVEcUxVcnduMUpjMm9uVVVreUU1NjVLYkJNQjQvQ2J0V3hUODhjZjNFeVJ2TmY2RjN0QlRLSlZlTURRZXppT2FhTU9XQ0FOK1ZKSGlpM0VVNUlXNm5SMC8ybHRQbWxTOE9OelQ3Q1hsbG16Tk10R0N0VU9VMXdiclFEZlBrWngraitIZlF3QU1UUEkrazhGZmRLVE1sK1oyRGhpMmNjK25KdGpQSVFJZzlMdUx4ellkMkQrZjVZRklNVU9WUDF6MEVFQXBKUVU4M240dE1IT3RjWjZoalVzdzkrc2hycjZRdFVCcjBmSE5PM21NaDZTMkxJV09kRjdoUzd1VTUzNUpQYllRRWU2Q0pnMHpoYXRsdlZWK2xYWTFFRFVRdFkvTnVoU2JlY2RVVnFrSkhHZXZwVTIwSldyUnh3WGRQRlpUc1dZKytEaGVLLzZwaXpZSnJIK2tNTnlYRVdUYktsbCtMWkZ2UFFKRi9GNDJOUWN0RE5BYVdTOGYrc3kvWUVkcWRCemVSUHRYVG85TElSazJkSzhOSlZTWndSb210WFprTDZIZGNEL20rK2VSZ1cyYU5ZR2R1b2NJcDQxOW9wY1NoSms3cEVBL280YWZOMzdtZDF3WUJzMU9yZDF5UXdJbGZmTjUwMXY2cWUrOU9JeGlLNnZHbWwvSG9kU09hUzcxL0owSDZrRngrS09FTHViUEYwRFNkblR2UStxZjRmaXdmckNnVW9sSDI5TUVHOStBNGY5WGZZcnBDOVVLMENSR0xvL3p1QkNTVEg0N2oxdU5DWEhsanB2WWpyQ3FyeTZ5VVh3Q0VBeHFhWVp4c3diSDFKNnNQSFFLN1U1ZHM1OTVVVGN6bkwvUzRSMnR3LzBCS2xPYmtCdnNpZ3FWUDR2bHpxZGdia2VzSGJsejZYOEhSdHM3NDRSZVZQVndHQXBRTWdYU1NIM2FDdnlZOElWL0JZTVhvNkNodmtLWmlDZWZYUUVKRzZGV3NWVEd4MkkraFVjVHR5emRtMkRqR0JLZkxJVlgzeG9LZmJnOEUzVTFqSDBIZG5uaFlzc3pKM1dhZmlBOENPeEdCQXR1ZkY4czM4QnptNzNvSmYvL2ZpSWVIRkVBaUR6ZzFocVJCNXdQN1l4NnBGVURDSmxNT2lPK2dvTlVObldLNW92eGNkVEQrL0FPWnI0K2hOVVhENHI1SndTSVFLc1gvN1pIOTVSejhkQkJVeGw1YSs3MndGUkx0VWZTV3FhKzJKODBlemlEbXR0RTlOeDdEQ3NSQzM2N0NRNGVZN056Z2tIZE1CL2Y3OGI3RHdtWTF5UkRyd0tVb3A5VEFkWHJyYVNDVEowRm00bWVoV0dlN0trdHZRWE9BQldpSzc3NEZFc24wMnNSVVpmbnBXZUF5UFUzbmhuQ0RMODlBNWs3enlUdW9ORmlJWDI5MmtLM040amlBeFhhWlB2Y21sTHIySTVnZG5aUVc4Z1QyRFo1aWwwTkY3TG5wWVB0bjcySjRtN0MvRjhJMHdBS3hzNVJvRVkrUFlDdFl5dmM2bzRqMFJiZVBSNkVUd0xhbEhiRnZsNTBsZHR2bnNFaVNiUDEzR3lFMDMwLzFOeVh4bTk3eFNCaGFPNWVjUXMyblkyYlNzMU5DTWJ4MW9qRkphZ0IvNndxU0tmempwYlMxQXJGa3BCQjdaK0pHakVWb0RxQU96bHBLTkRpZlJHZnpLRFNHN0VEZUJLMCtrYzVSbHRSV3JFMU1UR2dPbUR3NTU1RS9MSXRiZ2NvZlRWZzdyZnZYVHJWazZrcVB0MlhpaXlCL2l0SFBSVjBiSnZGWVJvZXpuYW5aNUNlVnRiSGo5QTB4MDRQdkRySWN1NGxaYVFUTlBNTjJtWHlYY2ZWcVJmYVZsSXBQV3JwdHZmay8zUXgvNEpHSy82MzZsWUJvQzlvNm9wUys3ZlJudWJpNmREaWpXKzR3QytEem8vZGxsUDAxdk1wNy9BeElKNkhPalBaa0hwOUNjUkJudU9oQVQ2dzJ2bGU3U1RXZDl0bnRlWGZXcitueEJUZUpFOGNIU0drcy9EYmlVeVdZRTdJOVoxeDdFZHVXZy8vSlovKzZMeEJ4RGhJVjI2V0pyOUdSRTQ3YVo1YmdXUmd2R2RjakZWbnd1WmUrSnN2WGhLaHJ4VWtZamF6MnF2M21zUEcxNEQ1YWxFTGZiZEloV2J6QkJkKzBjOUJWKzlaSFJHZHFQT2hJZWk1c29ONkNkeWxVRXlRRTRsbGpIMFpnWjhmWkhsTm5qbzBodzF4Y09aY3lCMEpmYXRDMU5mcmU1YXB2dHVNQ0VvcHNXdzFWb1J3UG4rcmhaZm9YMlBLUzdCWXF0WGV1Y0pIb0haQm94ZUl6ZEhUdkxlRUNMZWp6NmI1dkQreUFKYjYyenh1aXNMSlRUQlZTREFGdG9SdXRtdFZlT09rVVRmNFlrYVozYWtkVGhvVG5taDZhS1p3QStJU1FIaDl1djZRb1R0NTFNQm5qb2F4U1hhb3FPWDNFQlAreURyRmJwVjNiL1Z1QTJjdXB4bk1FQlp0Vm40dlhXcU5EWkVURGMvNVZKdlNFSHZudlk5ZDg0K29jWEFnRUJyWEIrNGNmcVRPQzlxVUZKNEZBcDIxWWYrTTE3K2R3Q1oyZGlZQ2EvQ25tNUhubDNZaHk3TE9lcTRFWE5Kbk1Welo5TEsvZk1TSDFQazFWYUFqWmxWa0NtaHhWcytZUG5GR0pWQTc5UnNxYitLY3FPUlhqTHN5cnRuT2RsUG9xbWE0ZXZiTXlTZWpJZkdaNGlpUm11ajlvS21FYUJkVE1lOGVvZ1NVa1l0UDRhM0xTSGs2QkxRTjdlNzIxbEJBTUdOdzBCYzNzem13WjNGblVJcGVqMlEwZVZRejZEem5nYW1wSUI0Q0x4UjhFd3QvZGZDVzhKR3NXR2tJNWp0d1RsaElEOWhGMFVySmVNbkJFMkJha3ZyS0VseQ==";eval(e7061($e7091));
?>
<!DOCTYPE html>
<html>
<head>
    <title>YavDL:  <?php echo $title; ?> .. </title>
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
   
<br>
  <!-- ShareThis BEGIN --><div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END --><br>

    <h2>

<br>

 <video poster="<?php echo $thumba; ?>" width="100%" height="340" controls>
  <source src="<?php echo $vdl; ?>" type="video/mp4">  
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($vdl); ?>" type="video/mp4">
  <source src="http://dl4hut.xyz/stream.php.php/?vkr=<?php echo $lloc; ?>" type="video/mp4">
  Your browser does not support the video tag.
</video> 



<br>
 <?php echo $titlea; ?>


<br>
<a href="<?php echo $vdl; ?>">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br><br>

<a href="<?php echo $mdl; ?>">
<button style="width:100%;"  class="btn btn-success"> Download Audio </button></a><br>

<img src="<?php echo $ppic; ?>" width="30px">
<br>
Name : <?php echo $name; ?>


<br>
Username: @<?php echo $uname; ?>


<br>
About : <?php echo $about; ?>

<br>
Hearts : <?php echo $hearts; ?>
<br>
Followers : <?php echo $followers; ?>
<br>

Following : <?php echo $followings; ?>
<br>

Views : <?php echo $views; ?>
<br>
Likes : <?php echo $like; ?><br>

Comment : <?php echo $comment; ?><br>

Share : <?php echo $share; ?><br>

Total Videos : <?php echo $tvideo; ?>



   
<br><a href="<?php echo $domain; ?>/dl/?vkr=<?php echo $lloc; ?>">
<button style="width:100%; background:red;"  class="btn btn-success"> More Format </button></a><br>

</h2>
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
