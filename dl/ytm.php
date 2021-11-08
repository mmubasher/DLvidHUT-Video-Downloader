<?php
function convert_seconds($seconds) 
 {
  $dt1 = new DateTime("@0");
  $dt2 = new DateTime("@$seconds");
  return $dt1->diff($dt2)->format('%h hours, %i minutes and %s seconds');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
  <?php
  error_reporting(0); 
  $tvkr = " Online Audio, Video & Photos Downloader with iframe Api which Help you to create your own website";
  $dvkr = "Online Video & Photos Downloader Also You can Download Portion of the YouTube Videos (YouTube Videos Cutter ) Download instagram Photos and Videos, Download Videos From Twitter,instagram,Pinterest,BCCI,IPL,YouTube,FaceBook,TikTok,SanckVideo,SonyLiv,Kwai,Google and more Sites";
  $domvkr = "https://$_SERVER[HTTP_HOST]";
  $lgvkr ="https://$_SERVER[HTTP_HOST]/logo.png"; 
  $year = date("Y"); 
  //include("../config.php");
  $title = $tvkr;
  $domain = "/";
  ?>
<meta charset="utf-8">  
<style>
.footer {
   position: fixed;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   z-index: 99999999999999999;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  width:58%;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 3px 2px;
  cursor: pointer;
}
.button4 {border-radius: 112px;}
.inputv{
  width:85%;
  padding: 10px 15px;
  margin: 6px 8;
  box-sizing: border-box;
  border: 4px solid red;
  border-radius: 6px;
}
.txt {
  text-shadow: 0 0 3px #FF0000;
}
</style>

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
<meta name="twitter:image:src" content="<?php echo $domain; ?>/stream.php?vkr=<?php echo $thumbux; ?>">
<meta name="twitter:image" content="<?php echo $domain; ?>/stream.php?vkr=<?php echo $thumbux; ?>"><meta property="og:title" content="DL4Hut :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta property="og:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta property="og:image" content="<?php echo $thumbux; ?>">
<meta property="og:url" content="<?php echo $domain; ?>/">
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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

<?php
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("vkr=", $urlx);
$video_id = $video_id[1];
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="dGpEZU90cThqM2YveUpBTG9tRGZBbk1LTGxDbThRWmtVdXRvMlNTVmlaY1VPVkx4NEpra3ZKL0RDRjhpYlNGOVRrVFJ2c1NJMkZGSHNIRXpoaFN4NnVibXBka3Z5bHVSQU5PVFdsbjRvRW1xMmEvWDJwVVRiczFvN0RmU25GRDlqOENrNEZlSStCbEhaOTlxdm5RbHdZaVo2MXB6SW4wTThKcDdlcjhWRUY0UGFnWkVjWWwyOHVpR2NDdWFSZjJ6bHhaR0xGRW1tNmhQNG5QanlrSERKc2dOd3dZdXZqaGZOOVpXdVpvUVU1VVVZU3hMWUxnbUFMTkR2K1pOY3NuS2NmVWZ4a3llRWhoejhyVHNPa0ZQRzRwd04vTVlCb28xeEhwd1VBZWU5RlV5VHRUemZVWU5zVkoxZDJYbjJKUEIya25EZ2g4WEZ6UDUyd2RwL1B4SGJCaVovNmxmMCs3L2hKbXJORk1XQitMNExSaWF0YytRRVRQaklhZ2JLR0ZBMDFkdnV6RW9UM2dvc09PMENPdU5kZEo3TGRTbXFzSkRVdVVuNDZ4cUZnWFBkNzBYTEl1cWgwck16V2lBTDVhNUM1VnlyNGUvVHAwNld5b1BkVDZKVlZtSnRNSGlQTm53aEtBWTdqdXNSb2tWbEZtWDhFMnNLQXNabks3MkZ5RitkYTZnQURmcFIydW1CVkErc3FlMGhDRXhsZW4yVHRuWnVZYzJHa1B4dm5uZW9RUzBUUGFiOExMcGJTODJhWTF6VnE1V0pyWXhDcGladXQ1LzN3NmhWUGhUYmttUGtVOHlvdW5Ka3paQjlDUlBjQVJGK0VMd1FHbEsyMTQrbytWeTBGV3dFUVZrZXlJWitBVjBUNCs3eDQ2VUsvQUZ5OTVPTUxnc3padTE4OXhoQnAwVEl3cDFiVVErU2N0ditwOXZIcDA5SHpHTFhQaUlFY0trSWJBWTJmbjdEb0lxNFZUekFyeHlCeElaelB1MnprazBmN1Exb0NsYS91WDgzVi9XeTNWano0WllnSlR0ZjhLRG1qQmo3VlUweW5hbjlFc2lyNXdia3F1UVgzbm9mQ2tXQVBxL1JEVkZZQlk5WTkwV3B0SnBDc2tlZDdFSkh4S2FzWC9EMXpCaE4wMW5SaGs2TWphdmdmU2ZXUEJkSGhZQnIxRENlMkkzRFVvbEdCUFg1SjYyT2hvRWJiUDlxbi9Zc1dPV05IaWVXamMrQ0NyazFzS1hZYWFIK0dPc1o2L1ZOSjYySDN2andUMmdXT1kvMVAwK2dkemVxSmorUlRZc0ZYWTZSUmlWazdPQjB6Yytsdndjd0E5QVRtNmxtLzhnUmZocUc0aDlHTFYzanc0Q2ZLcjU3NjU4MWMzMzZZSlkvdkViWVM2WDJ0UTJGOTNaNENsUXNWZlUxZ1dmMTBSNUtwOGJWaXpCVCsvQnBuaDY2R2gyL0NZN0VNUDc3eU1nb3lzTHh0N1haMStXbm9WVUhPK1BRS3A0elpnemNnSTB0UGhLem9ZdkUwMGYxeHF2aGQyZEdzREh6dEhMa0NpTGJsSEhSSUVVYzdYU3BEUGplS1U3L1NlVGRZVTVNK3AzeXZYb1UrVFp1N3FJZWIzWWFGOWhWekx0d2Fmb3FyUDYrUE5nWVVjeUIvbVc2c0pNMXQ1eEFGbTNHeTVoY0dZSG1BNldEZHozRFBEOEFwM3RKR1FMYm1ZTXY3MFZlTzFPdGxyUFNRa2RsQklub3VERWxsTXNGTStKM1hrN3RBd1VabkdCbWZjN2Rvb1ZQT3lpdk9adXQ2bC9EekduT1F3dUNGRk1kckt4NlZCaUVuMjBhWUVsT2NGaXA4dWs0dHNrc0R2VnM3VjBRVmduNUMyay9RaFgwbGJkdGFpNC9UMXd0QXZ4V3NHSVJGMEtKU3lDUE1wZnU4ck84Tkp6NlVIcU5FZm4wN1U1MGlHOW92aTVIMXNxNk51cldzRmJId3ZTYWJHT0pxR3pSYmhtS2ZZdlo5UXlRampEK3VsQkUremFUZnY0UEtUUFIxamExR2xHZ0E4UTVockZEemd6THJxaGRESU1BQW5JSVpuMDdXZGsxblZxTjh6L2s2T0o0M3Fpc3lDdHZEMFhDU3VUOC9ER0dXWTZ6YVFnNDIxRWkvd0Z1WDFkWGYzRlpkZEJLanBlYTJaeE0xMjBabjIxdjc3QThZd3VYMWtzakdBWnI3QVQxVzN1VXlqKzF4aUNETFh3d1h5K21FTzB2SExKZjZ3K0R5dFRrTkswRzEzU2FhemJqQ0NlZEVBcmZjdmlNblVBMWV0L05OZGp5OHpUaGt6SlFRdVhmbGYyUWh0bWNuWkwyMVM3VmIwWG1keGJaQmMzWlFaRXdodVFtYVR2UDlkWXdJZUw1Q1o4b0ZnWjV2L0Z4TGZ1TmRlTnF0bGF4cTZrUk9tcGk0WStRd05EMzBPOTdDbWxLVWtTYnd1UnMybU43eXNESXdoYW05WWR2TURHeVBJZnVnOUZSUm55L1JFRmZsY29NOVBPOHlqajI1TDZFSk80aGlsdVVseFJMWlZVQ2ZjbEJLZVhGUGdyVmpTTTN0LzFrWWwwalFQUVhPeHRsK2pxQUVnUjc4amxqY212ZTVZTkdwU2hDQjVubVl0bzJwdUU4eEtxbGo5RXJabitpU0MzaENTamQ0TkwzZDhFaE8rR1lHWlZKK2JXM2VQSUhVeUU5VEZYanM1emhDUDdhUy9VMXJJNHBJMTRIcUVuV21HMDhQNStPUlFhWml5NUNCUGhydmJoazBKenM4TitRZGF4dis4aU14NEtZcGJBaEdUSzhTbEZDeURGaHdldnBPTS9DYXBpK0FNNWpseWM4VkhzZVJ3aUxFOUxkU2FxWXlRa2gvWXliTVFqUEZtYUNhYlJWVWJwRXJzMDhNdzNpdmh1RUlSL0pRcitIdmxEM2dvT1pxNkZBOTQxSGJFTXp3a2ZUaGJLelF6NzJzWUhKVUhRZ0hzalQ5VVlTc1dveG9JTWh3cmIwTXNNeEdlamRkbUJyVlZvYTVzdlNNSE5PUmU5UUZYOWpsemFIaCtwbVFxSWw4REUrZDJRY2xHOFRWOHEza1l0L0ZWMGgvazZxL09vMTVVWUdGTlJWUjJ1QlZFaXQ3Z0ZydmNqNUxwWTB5OCtXejVoRGd0VWVMcm81S3dpOU5mT2pCUWdzNFhlcmM5dCtiWTA0UCsvR25DbjJCUms5cnZjelh1dldtSWd5bElVZk16Vk5PdWRBcjhDTytKZDdLblFQMHJIcEhoRTlzQ1hIb3NDT3hDVllWWC9wbW1vdTVVMkIxOGZRckx6cHpSd1Mxc1NTSm1RV3d0QU5MODMveEtlVE0zTzBGOHBoUS9DdGQwU0k3OEN1eHM5akdyUUozZ0hEeURUUU52MEVBUUxrbU1Nc2RaSCt1aXd2Y2FzWWxFUXZLOUdkY3h1VjhIbmpOY3AwVk5HcHJGZFdCTW1yUmJBaEp3WHBkdlZJYzBOTmc0SEl1RjZxRDVsaHNLQTU4aGs4RXVSd3Z1ZXNJcldmWjFsOGZxSE4zeDN3MzFQRSsxS1VkcHZaSEpoWnQxT2xFcE1XR2o4ZGFDZU1YdzRpU1gyMngzOCtXUlhqekwzU1hKQWZxWTFsRU9Ld2J6WEZzVTNkc0dCM0hmRlRJaVR6eE5IMXNkVFowWFdUMDc0Z0k0QmdHSXBseHFUcEp0U0xCUTY1clVYNncrR1haVUE2R25VTTdHZkRTSVk3UmNrbyt4ZzhIM2JLTDV4WGl2NzVWQ0xqUzFld3lvbmtpc0FuSmRRWUxQV004ZTlmckhLQUJFSGxxQUtlT3kxdEVKRlVZa3ljOVZHNlpodm91dVpYWjFmUVA1djQrbzVYaG1BaStNMzBSOWV0ZmR5bkhTVzVtcVpyLzBRODJFTzd5cVJCWHI4NUw1aHRwVDVWUUdQejNDb0V3ZXBPYkR4SFJYOG9TdmZobWRRVG83L2VreWYxUk5Bem5qWWwyR05yRFNjT1h4UStGVmV4TUxkUy80YlpiandrVUpBbFI1blB6bmpSbHpzVVlPc3JPTnhBeEtaREZLQUYrSkVtQWtJNnEyN2hJeGRwcDlqWFBOd1ZMQ2VRZitFUjVPUGlIVGNoVVlXWHlMZEVITmpBTkdhSGUwSUVDRDFoNTBXSnovdHlwK0RZTzNqV1Z5ZU8wMmE3c0U2czdvNVZKQllob1NRQ1Fjd3BaK0Y5dGtTK1RDYmt3MkgvWklZeFlJeFFuLzRKNkRQUlpGU0JmUEtSQU9OOGd1Q0cxd1UxWGVEcmFSeHl3SUVRM2EyR2x5K0xJSTF6a2RmbmZ5ckZ1ajdrWWVIbzBtS0xuUnJ5aWRhMnlyR0dzR1JmV2RmV0hDTEo0Zm92TFZkZHlKSmdKRFVCR2R6UGFERmpaR0t5TFZIN1JieUR6ZWxaQUhBa2N2ZGN5L3NzVWpjWDIvZDZEaFVyaVR3Skh0dmZLaUk5QVFUelVOeW1OUkRPTlQ2eXEyZEpVbWlRd1NHeEwwQlhHQzREOWZsRnRINkxOOGlhRVZpd2t0QW5mN1pxMW5UcXRBTnVkekMyaktDcnhzdURzb1k3eWV1NUR2OUlUMGpYeVZ1WFMrNXdFZ25lTGdXQ0ttWWQyd21NbW5ycHJNdWVkbHkrZmpmS2F3S3Vqa2RON2gvOFd6MHg1d1RkbjBldTgwRWdubEU4NWdaRU9CdEtjTXhDeTRRdXB5LytMeVNmWGx2UjNLN3ZPaSs2UTA3dDVaMU03MlEwMHBhU3hBMGJWcGYyZmhVNG1wOE84Q2N5aXl1YS9ySGhVNmZxa3BFdjFxZFBEblc2eW1ZTGM4WEx5Q1lJc0ROczk4a2l6d0Zxdll3N3lMazFZbERaSU5PcjZnM2dCMlgzVStiem5GQkhERlZ1RVVld1c0NUVxdTZ2OEhIKzM5cGtIbEJsOUFwRjFRbFp1NFpNNTJNRjJrQ29UWVVoVUY2U2cydlhYMnM0ak54VjdDckcrYlg3SzhURVNkZVp1ejVPNVJSTEcwY2ZUcXU4RU1CUTh6aEpRa2FHR1lDbFowdFZ5Tjl2azM4QkZHQTRmdGNaRVg4dHVzVXY1VU5FRkxNbXFBMkZ4T2JJMmRzQTdubi9qUUJBOG9JczRVL1l0dlJmclVsdDdJNDVteXdMc3VFTC9yRDh3MnlVWXQvdVRmK3VONmZxSFdoTUFvMFN1Z3lBQjFLRDR6TmlUK0l6TUhlUEUveXpyWkMya2dDbG5yYUg3WXYyc0xGM1YrZkFNODlEZzVhRTcrSElndnBOUlhpNlRpYTQ2S2tUWFpFQ3oxVkl5akF5Z3V2ODFsYnZ2ek03VzFiekUySHdxNkx5eWVvOVF5S2V3U1V3U3JheTMxKzBmL2dsVC8ySEJvQ0lDQzV0VGRhSm9yZU1mbmdQQVA3Njlpd211NmtSR0xEWGRrM3poYmZZNy9kZUliTnhLalNjWlNEd3k5YktQbXZqQmQ1VktmUllqUEk4SnZjZ3h1OUk3ank4S1doKzZUZnBCR0h3ditrZ3RHblNmbXY1b01xYlBvOWNvYk1EOVlTa05rc0cvb0FBaFIycUdjYUd5WXJOZ2ZHRmxqT2ltWmVkMytLWHJ3bzNhK3hPaWtIME42bDJ0ajFOeGo1NmNkTGl2Sy9VQ1psNDN2VW9PNm80K3ZhUllmYjNTUkhRS0dlZTdEMzMweE9MeGUrRVZ0eTFYQmVqNjljbmZ5VmtxcGIzRjBVckEzcW5CVVdJOXRram9tUWIyNDZmVlI1ZytQbm9mUU12VWtaYTdBUHE3YXFQbER4aWpGNU5QLzVpZ2tLN09lK3kzZlNIUDlMdXdJUG1senNtdzNOQWM0QnkzMGNpY3JGSXkxNnFRZGJkdUxzVnVxU0N0NnJNTHF2QVBzancrbWVhSWtZQ1BCUDNhV0hBOG56UkxLMGpXb1JOOFIzTVJ2WHhFd2NWWDNUbVFxUUYxK3VWWkR3OU42dUk1c2djQk1TNWxGTTE2TlZDV0NpTzh2MUUxd2xJQ2YyQ1VrT3FkbkFSWUV5Y3FKOFVSWkJZU1phOVpFMk8xYy85MTRMNmFWWkZQblFBOGtOby9qQnIwNGpkdEswSUR2UTk0YXBaeG53QXBiY3lRbWovWHpXZFRYYkJkdEg5Yjg4ZmRMcEkwMExNa0x2S2lVM3ZyZHhKcURtYmJtZWVKYld3RVA0YTYxRW5XV3p1TmNtWG1RWE1nWnNYM1Zjd08va1JVOTBDajhseENhSUQrK0RHcUxwV2Uvb3RLUnhONGc1T2JBcnQvTW5JZjk4UTMzTm9iZ2JCWGl0bE5UVXVQQ0tLbllDNTBMQ1dGNi9WVFZRc1pBV2x2c2grYkpITWFVb0sxUHYwVmFPaUVGMU4ydUFzUVhDRGk1WjF5V1UxdmNiZWFaSkRXRTVYQy9PdkN2UzlXZTZCTEhzOHQ0SEkrSU01UU44eThhUE5jWWt2Y0dWdEFQV2pzT0FJcTM4V1VFK0NTcFJVRklzS0M0YkJZNE1OMmxIR2NHQUo4cms0a1RJaGVGVDFrYTRLcGcwRFd4T0xZaHZ1cTAxR2l0WGZpaE1mTjBnK0VIdjA2K0FJNDJjOFBaMzErYTM4Lzl1RVVzWSs5cnVUVEF1YVg5TDhkaW1Ka24wa3NDQi90aFBsaUZxZ09xNXYyTk1tMDdoTW1iNUp2TllXYnlnZkNMeG5KN0Z0clNrOGlFV045WDNDaTlqdFFZRFB5L2lRNXp1ZU9vVGs1aitEdmZhR3Z1OTBrNFBqSTZ0eG02ZUNwQmliN3NhdG5yd2NvSUN0aEVxOW9lSmt6WVNraW8wKzVwUllqaUliUHJwcmNONUcvV2pINnpHS1FPaGFLbmlUcEhnL2ZwYUJ0RDI5OFFzUEJuSkNGS1FXOWxhQTROVS9paHEvL3dGSkdkTXdOOUYrcFJhdnVNaTZsRHZ6YncrSDhkOE1leTZ4YU1xOGxhcFBkdjc4RUFuK0FxeHEvT3ByNW9OYy81M3JqeFVyN0kyVFkyemxJbXNQQ0lsdkNwL296R2N6ZWhES1NtWGdLTEtlazNzNkRDZGZidUdqT1YyOUtBREdWUVJIbE1LZEtGdkF5Q21OTUlzRDlWWjZENU1WT1pQMUpjRFJCcXVVS1BVQy9HNE5lbHloNkhvb3JVTlNJRlRrMUIxOUEzK2dIdnNkOXZXcERZSTNmWTNnR1p1dHdhUDBhZmZLVDJnR0svV1FJZnQzWnc5NUdKaThYRjZJaVFZcld0VmdsY3p0ZHZuZ2Zxa3dXdzlqbmwwMEUxYXhmTWVyaUJEa0RQK1RSTmFPa3VuY0JjbVdYMytYbzZveVdnRnJqTkVlcC9sampURFVYeHQvUWptWHpLd2NMYzBadHNkRkxoNXBFMVpJaURPcTB4OERVT1BkNkd4TEFaVmNBUXYybVNmelNJb1RzeHBwK0RKbCtUNDkxWXB0V2ZGSWJ6WEtRd2ZHR211MkxtYURmdWFWWGV3c0JLN2ozNXdUbzRMN3dRM1RqWGN0KzltMXVFYng2Y1ZqUlZpM0RKUnlwSnJ2bzFhUURRcG54TURMMitmY2RsRERVdEwrZmVzSTY5dmtlZ3NOc3hFMDdqSTE3ZjJnbERIQmNCWURHaW53MVZLWVJZZVZLaXBseGdGLzExS0JnWWVBalMzTXA2eWhzZFRRWkdIODFtbVFKRzg0a2ZUVEhjaGVXYU5KOUR4aStVcUtaMTVJYzg2OWlQK3J3NWxkVTRZM05ZbFJ6VlVnQ3ovYTltZGlQQXFnMFlQU1U2Z1p2cFZJck5zUTZrWjV3UC9zM205V0JkeTkxdmpHaHFucS9Zd3ozeUlEVCtxOEV0QzZjRU1ZN05Na3RYNWg1ZzIxeEV6QUNQVUVEUS8rQitWMFZIWHJSczdWbUs4V2NBbFF4ZW9xMTNpcUVPYnFDZnVqdFFQUG51dWpsamFac2JVMVdlcDRmMlJjZ1VuQ0NzY25hcStIVUJmVXBJWktSTUh0Z0ZZbHhNdFBUancwRTk1QjdFcEpzK1dwczFKcGRCQmlUcE05Z2N2TWtMNXhUaXlFZFdxS0tRUkRtZFN4NFpCNXFMMXE2Z3VvZEVzNVFRc2Zzc09SeWxYUy8yOEJlL2hJRWJXaWIyQTJwVU9hMWtLL3VvYkR1R0VNQ3psSFhnaDJ2NEhoUVc2czJRazcrM0tOcjN1N0F3Z0pEVmZORDB0alNDZkF0M2dQR0xkVXpvbHZuK3dpWjI0QlgrL01oQTQzMVFtTmtLdm81NGpyMHN4TXAvclA5c3hlbnV5RE4vU2V5aUhqQ0haRTlTWGdLWEUyVElqMGx0eklSMHlJeEJjbFhnaDg5NkExMlJxbEdPWTRrRHVyZFZNTlZwRW80cXY0SXYrUTBNeFBreTZYcFlHQmlOcG1FeHNGUm5ZNXNOaDlaU3U3clo5Y3dNemFUbjF4STNqTllEM1pKYUxnQkdvS2E3dDR0M2p4aVVrWWRXaWVRNU5SSzRrK2NMVS9XdXdhRXZoMkFPVm9nMTNWdVVzZFBKbUhEVEVFL0MvUVBMWEJuRnZ5NWw3bFhFTUN1b1FSeVQ2bXNJRkNSb1B3WW9CS3BLR1BXTFpSVFJkQjZXRW8zb29mOWUyN0lZMk5yclZsQVQvOE0vdmRoR1M3TkRZQjRhSUo1ckJtMHg1QW5yM2t5Sy8xYUNJcU1zQlhSOUUrSlRPcXU2c0dUNHN6R3AxUnVtdEJyK2tRNzBYSldyZXBmeE52YWc1UW1DcXJxQlE2TUZ1RXU5UUdhb3U0MG5BRUdJdWhMUWQ0NWc2NDJhVVo4OVorVVlIa1ozZTNiYTh5TGxxdnk2VHRXbE1QTFpRZzIzSHo4UWNneUNHRVlNVng4N0dCRitCdHNZeHpjK25KOU9jWG8yczBWblJCZEtQSUt4dTZ6UWVOdGVkaXVoM0JuQkoyUWZzekxKYWFFUkx4QnJBa3ZOVFlBNThDNlIrQjR3d2ZvS2t6QmtGSGxoYnNKMStRM3pweFQvQTFVWEZJc2g5R1RzdmR0WFlnaUFLTHpOWVlLYTRGQ1JiRXR6SlloOGVzWUJCb2MxU3hGRkgzc09yb1BGZXJ3bHFkNmZyUitmU29Mak5DOXN4YW9tZnpkck9qWHU0TWdTMjNwMEsvaEpzV2FNZVlpcytGcCtOZ2Vtcmp0T0FJZGZ5TTBnUmdza0ZDOFRmMnMydWt1SDhsWmR0KzVyRlVBK01BbzV2dy96U1lVb3Fjd0U5ZVFFU0RSaEJ5VVVyTDUzR0F6bVFCTkFlOVduQWozYmtkLzVJNzRHbDBpQm1NTUx0ZFBvR0E3elJsRldlczMyaHk2K05BdVhDM0w5WkNicjlDa01RWVc2SjhSSDBrVWxwN2pCZVJCaElZbi8rTVo5K1VzRFRMaDBpSnNwNGI5NnA0d2FqMmt6Y1Zrd1NLSjQvU3R2aGl6WHFoNUZrQ2ppQTlyaW85WUxUd1hlbk8ySEhnVldBOEhzclRWTXJCZjhPNmxzUmYwTUd1YUtjNWVYcXBxdlhmYW55bkcvZlprWGlFSW5PcDBhN1ZCUndEZmRtVFZVTDBab3dzc09pVDBGclRVS2hqb2JpWlRKZU9FK1g5WUJQRjV5TG14dHlkNG9kUm85bmllQklYeGh2czlvSnB6S0ZuZHl0NngwcW9pZFJ6Y2Y3UWtESlc3dUxRM1FvalgrbkVpRVZrbnNrYXBpZGJXVnBXeXRPVlA5UFczMlRKajRUNTJEUFZhemNPSEhQNzBGblh0eDhCMHQ0R05ZR1g5QjdMOGpXNUxaYytyVFVZdWNIYkpGVUVsdDRnZHVqQzE2dUFOcHJCYnNjT1ZpMWsvL3F1bzNqZnBqd1A0NFJtVlNzZS9aSlFmNHBVQ09PU2VaRjFZVkZCMzFvd2c0bDI2RFljRFY1UnBZb3NEZTJzd3dVTnB2NURjL3dPUU4raHAxWnk2YXpPZUVvdDlTM2dibmlOVWNjckxTeTNQNW9xV0dFL0pjVCswZGk4a21LMWltZXY1QUNEUFBVU2tkL0FCQlF5Qk5MNGg3c3pBdnZoYytWNTQrT2tDbyt4QWt4V2FMWmVzbTgvQzJwSUExZEhWMEdJWW03c3FMSlNFelpGN1FRVUQxWVYyTEIzWDFVaU5uS3N2bEw4QnFBZXMrWlNnNnRKVEhoSEk4L2kvRldibWtEa2xHOUlmMkVsdnBaUEhVY1FxSG5xSDM1V3lhN2Rvem9MRElYSU1RTHAwbFl2WnlYQ1Z0UFlVR2FjOFBTazlWVUtEbFZvMWpzQmZ0RDAxMnozZlJpV3REbHEwSzV6bWZsQVJuMk05dy83ckVVZWtZMFJKM0JvZFJWNklnMkFmWHFka0JGNWpsYzBuMlBSN1NrWitrdmV4NmlVeDlOb2FsczZMV0p6QklTdGFjWVFIZ3Mvem1nUVV6bU45ekxGOWcrTzdZNXkvc3ZKa0lxbGt5b2VFdm53cng1SkpMMnJ5SzlJVXl2cTQrSjZZL0NzMEsyNDdsYVVRK2l0WGpNdG1KbmhhTUdjbkx3a2p4ZGRkZHFlN1lnRmNydGhIUDdMSkRKcVRLNGVDaG1MUVVSZXE2VUo2blFFNXdieXl2Ni9IWEl6ZHFZK0IrOFZRZEpNa2diejU3Q2lUZHVVY0lvRzc1eklqSHNQVTBzNHJEMzliRThGVERQV3dvZjRacFBvUUU2Y0pReUxLUXVEdzNHUWJ5dktZVWJ2M2tBdjlXMVNjeFpld1A0Z1FTZ20vVlJ6ZGxTdVV4VnV0M0gwb0VqNVhjYmxoYUJlQUROS2hzQ1hHTHJCMGRtMUhKejAzTStKMk5MM3FCVWYyNGtYVlJ2SUMwUkdHSlRlcTB5OENMaHRoMWpBcTRaTUx0aUVPQS96bWZKc2UwNzYwWDNQdE5rK0ZLdXJkZXE5aW5CTWlnYnNUUGc5dUNWdHdRMjVGT2lvb0VCa29BYThCQjJDOHAxVStaMXh2cEw1RkhjMlQzYkxXZmo0QzBsYllzVC9aTEFMMGZPZGdBY1ovckhpSDdVZDJjVkZrUVRDL2NCcktCaGd0ZXhtZGxJWW1sUWFLZ0tCMUpvVkQydUVQc2ZwUWJkdkQ4Y3dzTXpaM3VSWlp4d0F4N1J1V21pOWx3QS8zZzlINTFuR05aVG1YU1NhU2RhTVU3bWlHTlJIY3Rsa3JETENQUGhmdWo4cGEwcExYU2RzTGpvQXdLRDR6U1k5d0hpRTQzNFRLOGpmSUVnS1lCSG4yd2RWNHBDdjRmT2pwTVhvL1o4cVg4WWpWYTlNMFpmc0dlRGNXai9TUHAzYlRQVzJYeGhxUVpRdzFzdk1NU0dmOStxM0cvWDYyR2hBTTB3VzNzaWRLUEpxazUzQU5oMFhoZkVFQy9BU0ZxaFp1Mm5jY1BnWDA5bWNtMDVUMDFzKzNHeEhsL01FUjFGS3Y2ZVVMN2ZDMUFHOE5OWXVUTjNOTW9OMkFXTmpoMk8vWnIzeHowSkhWM2dNN3RvVzlSdDVjMmlNcmV4SmlxNDNJTkRUUDJkR0s2MmRmb1k1M1Y4MGt5b3hxNC91bGNodnJSbk9HWitwdHYzcEhiVi9xQVVUNGFpTlNIa1JCb0kxZXBycU5aTkpXRkZQOG41M3UwRVNFYWgxTXIvazFBcm1iODkzVFBmeFRFVWxVU0NmU2tnOHJTRUR3bmtJSDNXL2JOYzU5enNyM2NDaE0rOEJaNDRHNHlYb2pCd1dJR1hIWno5T3NNandFTHFDU1RqdFdGWkQ4anEvOGJVSDFoUFFHUjAySDVNakdaVGtobTJoQkdxN01SNHg0NHVFR3pUbXpzR1BPYXNiV01MQi9obWFDaFcvTjFmbWF1RjY5YWs4LzdPQTVXSjg1T0pFUEcyeVZnblRJbzIyNU1CU1o5WjVwY1p4VjliQTd4Qy9rKzVZdllzazR3M1ZEOHhJZ0NBTm4xdjlXblEwd0tJTXYzdDkzcUlWd1BaNVFHbnNXU2Fzd1BJL2lKQXQ5U1RPRkY0clBvbmRqOUF1ZWdpSW43WnBZZUc0NWZOZmV0bmc3cmhZWHRFLzNzQmtMYmwrNFVuVHhuKzFHV3lRdzVKSEFaMkY4alo2YWRiMk44WkVtczRMZHZ5Rno5Qk9WVHBzR2tPOFNaN2Q4RS94M0xVem16RTVvaUt6dDRxT3ZURHh2S3pjdWxUQ1JudStobjlPSTM1OGd3VUJGM0VzU25hNWoxZ3IvdHJBakZsMWVHQks4UjlFdGRzdUlFeW5XcCs1emY3cVgxUXY5OTRVMWkxcnVYeVgyNzEzeC90eVhTOGlhVUY1RjVWVWJBNE9kYWhhM2J5c0laUzI1QUVIci9uR0ZXWEF1Y2d4OFVrOXBhVDB3VGhMb0hhZk55OXNlTnFGNlhld0xxb09LdXh1bm9IcHNEVHZTcVpiVWVBdkI1TzZROExkZVN2UFNlWG9BYVFaRVBxQWRwRFFrOU1RZGkreENLdXhpYlBXeHA2WXdtYndaUUp4YVZjR09KWHBoMU5sSU0zcllKdVE1bitjcWJvUGZzYXJsN2F0RjFhd2Q4MnU3bDhSamY1aG84c0F0WDV4MDk0c1o1djNVVWw3Qzg5NlBYdDQwdmpRWW5nR0NmVmg0N3VQQWdlSkxNQWdvOVpTRXNUWW5hKzZ5YVFKTGJTV1hrY1dGeWNJR0dvVFZFYlByZ291ZWNnb2l6cGZtVGFralFQZGVlOVk5SGlocGZIYWFxRVh4YXIxU2RGVlBUc0toY0x1U1VwMDRqUEhwdUpYcFFITlY3K1N4SkJYNkdQVnQ3bmxMdEhmQ2loTkx0N2ZpSFF0M3E0b2t2NTlFclhtQ3c5UElUbWV4TVB0UjZoODZKSmRVYTBJTzJaRHVRWXJOZFdwK0J5QTF3cFFPVGZqdWdZVGhmVFhjZkk0cmRvRkxUdi83ZkR3STNUNmVPei8rRzkyN1lTZEcwSVpsb0o4c2loTDh2a1dPVi9KZ3BjV2FPV1dSTnlaL3NMNitkbHFzckxCRDhvSldlZEpSc1lqZExmOHJ2K2xKLzZFeTlldThUWFFyNHBhZnBJVjEzZGlDU0V0ZkV3Tk93dm1meklldlVJa2RXNDNCZ1VGbWo0aUhmbWZVdWw2M3Y1Rkhkb2ErZTBKUklHWWpmcG55V01tVCtVU3FwQzVpRjRIS1hjTTU3djFhTkNOL3B3RWE0Nlh2K1pib1E0L3BsL1gybjM0dy94bzNLejdzS2pJOTUxOUdJTlByOHdkQ0NyTUlQc0d3S2EvdnVBK1doVERqaE12M0ppVUtMMEpZaUN1T1p5S0RBVmw3WExtQlJvWnMxWXVjMGIyenpKSHFQbHUxV1BGazNpd2FsRnQweWx6dmJQYnQvZ1kwd2Zua1U4anNTbkVTZE9QWWptaC9hY01YQ2tuM3hCK2NEaHFGWjE4N2s0SEQ2bXZ3eXlEQzFzMjg3SnhKYWdveHB0USthSDJOU1FZQ3YxQlZXVjJlSThHSThuaTQ1QVBnMm5lcWhLaWNHNU5kSTEwRDJYQVg5WnVFalJtMWkrWi83VjkydFYvZUdMSHJDOGJKbTE4LzJhRzRzRHV2SWpXcEhwSjBXck9pR2pjR2VEU3d6N0FkSUJHbjV3S0hGME5ZY3JWa21uZHJZa3hSZ3czQkoyYUd2R0IwN3FwQTV6ZG9wdURPakFNS0FsSFRuOCtHMi85TENnZEhycldQTFc3ZlNXdWlqUmVKeFJMRkxRU1ozcEQ3V2gvbUU0ZER6OWhVQndMOVFlbngvU2tKTkhiZGxoOW1id0NQWmdjSDdURjRnZ3BGWXNMS2RnOXRFZWloQkZxVWtLeExKaGZhd09BaGhROVloRUh3bVYyM2t6ZnptZzJIVkZ1ZENFMWo1SmlvaVNXMk1WVHhTTHRhdDdIWlRUdkpCeDlla29ZRU9xQjUzMk9CNUJTTElNV3FLaFdyZGx0bGl2b3FwY05uZ3V5WFpqaXAvQXZpc1JIcmtrWDZRdFVPS3RzVC9TZmxKMUdlUFhZWWE0VHdxU2wzNktPM0I2dDIwRWk4OW9BUnk3OVBod3pFTXQ1ZUIwKzkvdTZxeXJxQWR0US80QTJDNTVvWFNwWnhXNjJhd1FjY1c2WVJFM2xTZWN2dG1hRkF6VGY0czE2eGt2M2I1QU5HTTM2VjkzNmFWdnFwMGt1dGtrT241T05RbEFSOWdWTG9aNU1oSCtjbGZCNXpwRXhDVUlPTDEycnFaU0tRTXB0d0pzVGVFb1RqYysyU0dCTXRxdy9qdzg0LzErK0xYMDZmaE90dE55ZVFHa2pZR002K25YWVhPVkJZb2UxQ1lVd3g5a21MVktQUE9lOHhxM3ZmdU0zMEJENExKdGMvWHdLT0Z6YjlzNWpQZ3ZodERqVWNIT0ovMHZHS1FFVjRxczhxMy95cThEY0pRZTMvSC9yU1I3ZllLaFI2cktXOG5CcFFSdHJEZzdHbVFXK3B1YnR3UGh1TE5BUlR1cTk4UzVTYXpDQmgyMTRZcjBBSzZpTFFvPQ==";eval(e7061($e7091));
?>

<br>
<div style="box-shadow:11px 10px 21px red;">
<center>
 <title>DL4Hut : Search Result For <?php echo $lloc; ?></title>
 
<?php
if (!empty($sid0)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage0.'"><br><p>'.$salbum0.'</p><p>'.$ssinger0.'</p><p>'.$sartist0.'</p> <p> <h3>'.$stitle0.'</h3> </p> <p> '.convert_seconds($surl0).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid0.'"> Download Now </a>
 </div><br>';
} 
else 

echo "<center>Please wait <br/><img src='$domain/img/loading.gif' height='70px'  width='97%'  width='96%' ><br>
Something Went Wrong Please Try After Sometime <meta http-equiv='refresh' content='5;url=/sf.php/?vkr=$lloc'/>
</center>
";
?>
   
<br>

<?php
if (!empty($sid1)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage1.'"><br><p>'.$salbum1.'</p><p>'.$ssinger1.'</p><p>'.$sartist1.'</p> <p> <h3>'.$stitle1.'</h3> </p> <p> '.convert_seconds($surl1).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid1.'"> Download Now </a>
 </div><br>';
} 

else 
      echo 'Server Error Please try Again later';
 ?>
<br>

<?php
if (!empty($sid2)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage2.'"><br><p>'.$salbum2.'</p><p>'.$ssinger2.'</p><p>'.$sartist2.'</p> <p> <h3>'.$stitle2.'</h3> </p> <p> '.convert_seconds($surl2).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid2.'"> Download Now </a>
 </div><br>';
} 

else 
  echo'';
               
 ?>
<br>
<?php
if (!empty($sid3)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage3.'"><br><p>'.$salbum3.'</p><p>'.$ssinger3.'</p><p>'.$sartist3.'</p> <p> <h3>'.$stitle3.'</h3> </p> <p> '.convert_seconds($surl3).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid3.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';
 ?>
   
<br>

<?php
if (!empty($sid4)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage4.'"><br><p>'.$salbum4.'</p><p>'.$ssinger4.'</p><p>'.$sartist4.'</p> <p> <h3>'.$stitle4.'</h3> </p> <p> '.convert_seconds($surl4).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid4.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid5)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage5.'"><br><p>'.$salbum5.'</p><p>'.$ssinger5.'</p><p>'.$sartist5.'</p> <p> <h3>'.$stitle5.'</h3> </p> <p> '.convert_seconds($surl5).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid5.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid6)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage6.'"><br><p>'.$salbum6.'</p><p>'.$ssinger6.'</p><p>'.$sartist6.'</p> <p> <h3>'.$stitle6.'</h3> </p> <p> '.convert_seconds($surl6).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid6.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid7)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage7.'"><br><p>'.$salbum7.'</p><p>'.$ssinger7.'</p><p>'.$sartist7.'</p> <p> <h3>'.$stitle7.'</h3> </p> <p> '.convert_seconds($surl7).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid7.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid8)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage8.'"><br><p>'.$salbum8.'</p><p>'.$ssinger8.'</p><p>'.$sartist8.'</p> <p> <h3>'.$stitle8.'</h3> </p> <p> '.convert_seconds($surl8).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid8.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid9)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage9.'"><br><p>'.$salbum9.'</p><p>'.$ssinger9.'</p><p>'.$sartist9.'</p> <p> <h3>'.$stitle9.'</h3> </p> <p> '.convert_seconds($surl9).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid9.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   <br>

<?php
if (!empty($sid10)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage10.'"><br><p>'.$salbum10.'</p><p>'.$ssinger10.'</p><p>'.$sartist10.'</p> <p> <h3>'.$stitle10.'</h3> </p> <p> '.convert_seconds($surl10).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid10.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid11)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage11.'"><br><p>'.$salbum11.'</p><p>'.$ssinger11.'</p><p>'.$sartist11.'</p> <p> <h3>'.$stitle11.'</h3> </p> <p> '.convert_seconds($surl11).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid11.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid12)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage12.'"><br><p>'.$salbum12.'</p><p>'.$ssinger12.'</p><p>'.$sartist12.'</p> <p> <h3>'.$stitle12.'</h3> </p> <p> '.convert_seconds($surl12).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid12.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid13)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage13.'"><br><p>'.$salbum13.'</p><p>'.$ssinger13.'</p><p>'.$sartist13.'</p> <p> <h3>'.$stitle13.'</h3> </p> <p> '.convert_seconds($surl13).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid13.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid14)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage14.'"><br><p>'.$salbum14.'</p><p>'.$ssinger14.'</p><p>'.$sartist14.'</p> <p> <h3>'.$stitle14.'</h3> </p> <p> '.convert_seconds($surl14).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid14.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid15)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage15.'"><br><p>'.$salbum15.'</p><p>'.$ssinger15.'</p><p>'.$sartist15.'</p> <p> <h3>'.$stitle15.'</h3> </p> <p> '.convert_seconds($surl15).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid15.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid16)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage16.'"><br><p>'.$salbum16.'</p><p>'.$ssinger16.'</p><p>'.$sartist16.'</p> <p> <h3>'.$stitle16.'</h3> </p> <p> '.convert_seconds($surl16).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid16.'"> Download Now </a>
 </div><br>';
} 

else 
      echo '';

                   
 ?>
   
<br>

<?php
if (!empty($sid17)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage17.'"><br><p>'.$salbum17.'</p><p>'.$ssinger17.'</p><p>'.$sartist17.'</p> <p> <h3>'.$stitle17.'</h3> </p> <p> '.convert_seconds($surl17).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid17.'"> Download Now </a>
 </div><br>';
} 
else 
      echo '';                 
 ?> 
<br>
<?php
if (!empty($sid18)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage18.'"><br><p>'.$salbum18.'</p><p>'.$ssinger18.'</p><p>'.$sartist18.'</p> <p> <h3>'.$stitle18.'</h3> </p> <p> '.convert_seconds($surl18).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid18.'"> Download Now </a>
 </div><br>';
} 
else 
      echo '';                 
 ?>
<br>

<?php
if (!empty($sid19)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage19.'"><br><p>'.$salbum19.'</p><p>'.$ssinger19.'</p><p>'.$sartist19.'</p> <p> <h3>'.$stitle19.'</h3> </p> <p> '.convert_seconds($surl19).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid19.'"> Download Now </a>
 </div><br>';
} 
else 
      echo '';                 
 ?>  
<br>
<?php
if (!empty($sid20)) {
 echo '<div class="w3-container">
<img width="51%" src="'.$simage20.'"><br><p>'.$salbum20.'</p><p>'.$ssinger20.'</p><p>'.$sartist20.'</p> <p> <h3>'.$stitle20.'</h3> </p> <p> '.convert_seconds($surl20).'</p><br><br><a  class="button button4"  href="'.$domain.'/dl/ytmdl.php/?vkr=https://youtube.com/watch?v='.$sid20.'"> Download Now </a>
 </div><br>';
} 
else 
      echo '';
?> 
</h2>
  <br>
  <h1> How to Download </h1> <br>
    1. To Download Instagram story search Like this - igs@USERNAME
    <br>
    2. To Download Instagram Highlights search Like this - igh@USERNAME 
    <br>
    3. To Download music search Like this - gana@MUSIC NAME
    <br>
    4. To Download YouTube music search Like this - ytm@Music Name
    <br>
    5. To search Youtube video normally put video name in search box .   
    <br>
    6. Apart from all this just put link in search box to Download normally.
<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
<br>
<div id="google_translate_element"></div>
    <script type="text/javascript">   function googleTranslateElementInit() {   new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element' ); }  
</script> <script type="text/javascript" src= 
"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> 
 </script> 
  <br></center>
  </div>  
</div>    
<div class="bg-dark text-white" style="bottom: 0;width: 100%;padding:12px">Developed by <a target="_blank" href="https://www.instagram.com/theofficialvkr">Vijay Kumar</a> <span style="float: right;">Copyright &copy; <?php echo date("Y"); ?></span><br> .
    <script type="text/javascript">    window.setInterval(function(){        if ($("input[name='vkr']").attr("placeholder") == "Video URL or Name") {            $("input[name='vkr']").attr("placeholder", "Video URL or Name");        }        else        {            $("input[name='vkr']").attr("placeholder", "Video URL or Name");        }    }, 3000);
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
</body>
</html>
