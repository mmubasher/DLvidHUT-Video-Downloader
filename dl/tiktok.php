<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwNndRWDE0elBQa2lhQXY0bGdiLzI3ZEgwOExlTHNST05jZGVjMzFLZWtSemVjSHIrUWxramV6ZWkwRHpqMWdJNXlCTGxTSUtWSVFwdTY4dE9WYnU3YVFCaXBJeWRCQUdtaThSQ0d3Yk1vWVdXYUhSbzVmdWpoU1BtLzFLVUxhUGdTTjg4WmlXRGo4bWlyM1pkSWVETkZySEtGTnpJNUdRYXNKOFlZSUt2ekN6b1FFZzRZaUhTM0lVaVhQOW0walR1czhjUjZLaTljQmJUSVlDMnE0MFEyNE8vbmt3bWZlK0MzTS96QjFtc3F1RDdnZEFUcmh1SEwzdmoxM04yUFNEcUt3OHcvWmVjazNESXljMGZJT1plNUVVZGJRTVFHUHNQYU1xaGxmZXNoKzcveHR5S1ZTd05FQmZPajBPejQzVlhMelVhSjR2UVNLdEZYeTJnZTdJdFFqMVVwWk1QcmlHcXc1VnRsTSt2anEvemM1clNyOFZTcStVSU4yMmljOXhUS3h1SzdBaVFYaDBsM2x1Mnh3QzhYczh0RDBFeXBWbWxUck9ldTNTNTgxQnlJUGRFbGxkaTg2ejUzZlRkMGZCZkxNZURnbFNTOEtUMnNXQTlhNDkwaFNHTjhrMTdTbW5OR09ycmVGVVJDUFUxZytxbW9VTXFocXYwYW9DQzNIVzI1K1ZveVZCTXJOL2JSRitBcjRRWktKd1FhdjlBd1lDRDl5MlltV09ldGFWdE9HdFR6OUxpWW9XL0NPMEc1NXZMdFNpNHRjQ3FtVm4yYWJCZno2SHVuR3NIS0tDWDczZVU0d2VMNmxRVDZaVGJ3ZUVCZWZrYzVUOUJDeHhtcFlvUVJFWUlucU84azdtOUtVNDJWSGpRSENFaEg5Q3FBR0Y5VHZWSXVrRlNFLzZzM3dXbllNd3RDYXBqd3d6c09aUEM4L1ljVGs5dlgyOVJHazRYRjRkSFZ0blRGWjRLdUxNd1lWZkJrdHJ5Mi9FMEM5TkQvREpWaENsREJTMVU0Z3dhZFRhVEQ1UHJEQnFtK0dsYWdKWm5vTnNhMzlERXJRamxuR2FlV01KYTJ6RGpVWU1qMXFVTUFhUjd5eFYrMk52R1JGbWRyUnlpa2hlNTBoWEd0cmFKSVNZbi9Bak9ac0N2R2dBWlJES1doL1hQcEVTcXlMZTlWdWMyQmpSYUFENWE2MXZESEVOTWk4dEVkRDFIY1JGa3l6bi96S0pYM2ZsRE5FMDkvNG9BWHB2NmxBOGRJMVdNVThjZDRGU1JQMmd5VTdNMmtHTWVKdklzeXcwTER3VXAvV2ZwdUMyMnp4ajlSSnVDckVYL0lJVEFPQ0dVbXc3c1ViejRqeFMvTCt1L0plRE5qd1NoSnZXbnlxWlEvdTBFdlExcHRxWTl5eEJtQVVaVVhyQzljREpHZTB5SVVZekhEZ1hTWTdkZTIrTXozd2oxL21mQ2FZcGN0MDZDa1dHbVNGTFJ1b2tvWE9TZnhDOVZmT0pZRDJKV2FMR3gyNEhTOStmeUh3ZXlxZVFOWkRaZHQ1R21neXVOa3BQNnRHQ1U5eStZSHFKVi9RbWdXcndEdCtudHBzZzVLS0JodWdpZC9lMkROd2VuenY2NE0zMU4yNElxWGdSblVNeW9SVm9wbGtsR0VzNVd5anNrdGU0d2I4eUtmRDUyV1JrTHNkSDV0Rk5JcDdLeFI5WVhvNjhaS1Z5cWplVzdHcUdQR2RySnNLaXlzR05GVlg2RUkxZktmcTdNWmdMM1cyb0tzKzhtTTBFZTZaQVR3NjF6WVpoaDlwOERiRmdjSFRnWVcvenRWdzcyM3RpbHc1UitPN3ZQQTE4anBKbFZZOHFSd3h5bkNGWGlIaXZkNFV3bEFrZWtwN0hHTC9FS2NRZThSM1BvM2NoUUg5aFNVdm5hbC8zK3p0VUE4OXhjbTRrNWdTRkpXbFNqOUs5Qk5laEtaZlgvWk9mS01pRmtWandYaElhNEpQRHphTWprZ3dEd0cwY01BTlRLUENNdnV2TEFlY3VENVNCcEJOWVE0Uit2cDNuTngxZDI0bElzMEJydkNWazg5OWRYcTF6MU1rQ2Q0OCs4VWtUM2UreGdKVEpMYjIzeTZkUUxSaTlLRm9DSEN0ZnZzekJiN053aGxXRTd1Y0Z5L2s4SjFkKzhJSjlFY08vOFUrUWV0OHRPa0w1RlpObjJGck54SkhhQTY3WEpicGNJb1NLcDMrc2VLWmZmdWRCQmJsbzhOdGZOU0VmZU9rNWc1cVgxUjlCWG80U1lISFBuYWg0OWVLQmdqSlplNDFualhOL3FBTzZlNEJlZGY5WUdwUG5OalozQXhUU1o0bzYweFZhODk0ek9EU2RHZmJSczJNZGZDRG54YUZhbG05ZUZHRUlWMmR1N1hCSDZXZjBIczFhZnlnZHNHSWEzRVVoeXU4WVhqSWNvTzlyNUZRRVhnQm1uQlJQZVV4cjJpZHdXTFEzdUJPSzV3OXRZZ0ExajVGdS9MekJYSU5FdnBCZ0krTGxCRDBKVkhaNklkVVdwUnY3dE1UTTZGc3lrb2ZIclVZVVpScmplbkV0S0dTaDJ2ZWthbFhYU2tMR3ZsejRuMDl5RGpkL241N2EzY20yNkhqVDV0UGhmVDlXWUNYL0pZaVRVT0VOMzJXYmM5ZkV0c21lb0swbk9ialB4M1A4UGJCVHFmTTlsaHdKSFd5L0hDb0FqV0xoNFVZa0t6WXgyUStMeFVLV2wzSE5KanRweUZ5Nm1Tc09pcmovTjNxa01ZQVBDblE4djl3eUV0a3NObngrWHRqbXlxTTFmMGZtZVU4SUZRWnJoZGtTOVZGUzdLVUtlSndXbFhVbG1scmRTbjJTMHdVRWJzcmlrS0QvRlZwVmlZaVVHUUtPYk5QMTBiSG5JdXpPUEh4a2RLdEhaQnVrcU51Skc5My9SRFpUNHVFM3d2cDUvaG1wSWVlYVVPc1plelUzMXptSGhHR204NFNsSjdWOG56T0NUUjFUUVRFbWdiejRDdm5lb05xMmVWY1hCR25HUzMvTDNWRWErWFhod1FNZXlOQkFOcE5ESUQvNThqZzk2VGNTK0xPYVVEakpYOGd0K1cwazUzbzg2dUdVQnJWajJqaUxXV2hQbXF6K2lGNVJKZG1DWUxsb293a25LZDhwQ3Z4V05EZzduanNQb25XQzgweC9qT0Z2bnVmRmt5ZE5KQnhZSEpXcE0xMisvaG9hd3JnWWhFdmRqcU9FTjNPOG1xQnlLUFR5bnZFPQ==";eval(e7061($e7091));
?>
<!DOCTYPE html>
<html>
<head>
    <title>YavDL:  <?php echo $title; ?> .. </title>
<meta name="title" content="DL4Hut : Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="description" content="DL4Hut :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="keywords" content="Video,Audio, Downloader, Online, YouTube, Facebook, Twitter, TikTok, MXTakatak, All-in-One,Online Downloader,AIO,<?php echo $title; ?>">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="5 days">
<meta name="author" content="TheOfficialVKr">
<meta itemprop="name" content="DL4Hut :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta itemprop="description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta itemprop="image" content="<?php echo $thumbux; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="DL4Hut - Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="twitter:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="twitter:site" content="theofficialvkr">
<meta name="twitter:creator" content="itsmethevkr">
<meta name="twitter:image" content="<?php echo $thumbux; ?>"> 
<meta property="og:title" content="DL4Hut :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta property="og:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta property="og:image" content="<?php echo $thumbux; ?>">
<meta name="twitter:image:src" content="http://dl4hut.xyz/stream.php?vkr=<?php echo $thumbux; ?>">
<meta property="og:url" content="http://dl4hut.xyz/">
<meta property="og:site_name" content="DL4Hut :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
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
