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
  
include("../config.php");
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
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="VW5xY3VsbUZOQ0RsVkJLdCtsTzZKSHB3S3N2S2FJTDJialF5WFF3SkxuNFAxMkxPK0JCa3VteWFyaDNmRjhMUGdhNjU0K3pGVHlTR3BkaW4xcTZNdk4weTBNRDVLcXowVjdndkVkR1g4S2RRS3owd2hVSGwrVDJTZm14OU1UODV4RjhuT0RoeFNTN3ZMRDM5TWR4emEvaURFYkx3aXBQNC94dU9KYktncUszcE85TDBTUTZLYzFYUzBaaHVURXc3UWdjZDVrYjZ4cTlTK0diRU9YRDVGRUpoMWtLNkg0a0Z6UmhKdnVkYUtCMVVFay9DU29SZUZRd2tEcHBLY1V0bGM4cGxybFJ3Y0ZLQXc5MFkwRmtTTlE1SXd5T0dXMTFqd3RtNWZjZG92YWVBazJxN0EyTGV2NEd3VGRmTExRZ2pFN2QvcnVHQWgxZEo3RnNCZng5N3VkQ3lRTWZKZTJrbDk3MGJHUTlYSjJ3b1R6NDRaVnZsUFdha0tIME1wTGpGTllvNHFsTjEwQ2hPcktsdjVNRlg5ZGNCQzZNaHNQUjJzaXFuSE9BU2tTczhBM0lMUVpXVlEwZjVYVDR1UVMxRlIrbGRKQU5SVXJoOG5HbzQvOE1jYTVSaFhwYWxPT01ZdFJYMG5udVZ4NzhUTWNRNHJDdnhkYWI5S1A2SFAxREc2YVF1c1dKQ1BnV2wxc0VVUG9KVHVsSTg3SzQvUnpVWlNuRkRGUTY0Y3FKL0l5VnBubGREd05BeEFReTBPMjBXcnlsMy9zR2x6NzNGbStBS1dDenJSenFvbXd3TWM4NVZnYndiQXh0OUE0TGM5ZEU5c3ZqN09LT0kvTlhvYTRnQmRmeWs5bFdLTzlra0xFMVMxbmNxODNiTGlNSm0rZUZpdnRsM2dXUG5SNEJBZ2hDbEdCV1o0RVdhUGxoMGpON2VCWGJzelRKMEhyR091MElnL2lUOW5qRHc2THUrZ3VTKzdLQkZoTGhmY3UwNE04aW9ocXJVUXo5TjViT3ArM2ZxNFpNeGd5NWZIRHhDVGtSanE1OFBCcmdtQ2J0WFF5eG9HNzlTOUxGVXIvZU5ZaTFGanFsNStiRGdKS0lQVFB6M1BaS0VsbUZnaG04KzdVOUovWmdQYkQ4QW1VdCtpRVJLdTMzRkhJWUV2VEd2WDllSC8rTFRITVRaQm1KSlRYSFFqWHBsNW9DTUQ3TFlpdzNNSnBHa3h0QmVxa1U0a2tYam1Yd200ejlrd09NLzFRa1prU1plU1k5UjZGVjNhdEV3b2QwUkpoNU90cmREK1VSeVRpd3NuMFJKTDlaY3piSUEwTHAyRTVhZFBxV09vQzk3WkZZQ3hRN2QrRkpIZUZYVHlrYVJXQ3dRdEx0b1RrTUlqa2dOUUtVNkRoMGhoTCswais3ZURWaEFQcHdiaFNRSkdqRTJVdFFzanpYSXZtVi9lSE05UVBDVE1jQmFiNlVDdGZycytieWpNL2NPK3BpekI1bDFrU3p6YjJUVjJJWEhZMUhLQk15VzQxY1plVUpDRXo0SEt4SzBpMG9UMmlvR0dzdEIzc25FbU8zaVJHTUJSL09EN2t3dDFhdi8vRDRkcFYzYXkxd1FkbC9ZTThoNVNGdkhBMjZsY0ZXeWlDN0E3N0dBSmVrVFQ2QXdtUXNHVFJ2eUZRYm40eFpoZEJNa3ZpZ0YyKzRhanl2SmFvZlkvMmxubTN0bXQyTzhVVVNHUStJQTRQTytlNWozaExLUnFpWVVUMFQ2enh1UzVoRjJVKzRac0dNZW9zK1hGbVVLY2txUUNHUitHZWdkci9haDlIZFllT01hbm4zbW9xSWZJZjVzNHVac1dQRlNzMWIwOEtqUUVsMWt0RGJaWlZxNnBtNGhrUlRzRzhtcWRNL2VWOEtiSmtQY0haZVREWXRSUWNlNWFnU1VaclBJeHhRNEE4R1hJYjBBd1VqZ0hndVI0OWs4c2xJYm14Si9ET2tOa293SVNuejFTb2lucTk5MmdSSFJnMDVjQjlIZDJSTkMwZVkxRG5qS1A2OFBGYUI2SVUwNWg2aXRMYVdSZ21FRzlDSVFITDNBYjZicXY0aFZUMXFpdXI3NDBxb0NpOWQvbk1vbFhhVUJIQ013RlFUTFhneWtCUVlUSmNuQkFvNGxTbEpqTGdaZ2x6RWdqMldTSHRhY0llUlNMakRUOGRUSTNLWGYweWNMWDZNbVozZUZFUm4yT0Z3UGtVb0dJUjUyTU5TYVZUZ0JIVXZpcjJzVHZBUit5bVdzTFZnVWRRbyt6ZUw0U01Zek8vRC9qSGl5NXVNWTFYVHpOMmVvcVNReVJQTVc2NFdtWEd2amFMeEtjTDZ0b0lQcllHRWlBYlh5UUVaS2dUam8xR0k3ekoxNFVaMlJwSlM0ZEJhY1dUZTh6d2I4SjJFT21RMkRsK1BnV1VibUxYR3hCSVhMczg2VTZnNnlCUDJzWnJkbXpNekYwdER3T0FEYzdvdFJ0dG5LdXlndkhOc282SnN0ZUxOZHhrZU5FS0dLOGxXeWZMQ216UXk3RWlySWRlWXpFblFOV01VNFNJVFAzcld0aE1pTXQ0QlpCd0dGZUM0ZkpvM3pzemludHVpL3VZUS9QVkViRy9VbzA2bEZIQThpL3I1eDIwZFlEaU10SnpwZXoyVXBrTDNEd2xDZnkvMEZEMkl1UGdsQStCanBqdUduTkxTZ2VZbG9KUUk0S3FvZnJ2Ykh1U2NoVFhaUFBKc1RGc2lDOGlKS3gva2drL09QUFZtYk9KOXY0T0xZY0pHQ0c0aDhRbk82Sk55VTM5aHdaM0g2R3pRMkZUVFk1ei90UCtCZXU5aVpVbzI4bFQxNkpvNnJPM0d2RnJTVWU4MWQrVEpSTzdBckMxMzRkUXkzMlBTRXRWZ3Zmdllldi9wQmV5VnNJR1BjVTRZaVJGa1g2YU5GN0pDU3RRR25pZGVZQ3B0S1RtbEN3ZVcwSERTVFlBVDhoTW4ydXpTeEVXRFlDblpyZDZVY2J2aUhLS1JNSDhFUDU1TXdtdEI3QzI4U3lBeldNdjc3c3kvaWRucVpWRDNNalB2MW81NGJPTXpGR1hKb1V2bklUTnVYNktFVm1IelIxNitOOEsrRkNvbkQ1SFJJWEFPejYvMDNraktnNXFvU0tUNGZwenlUS1N5czJZS292ZHVBNGRWQ3hMVGRGanFTdVVFY2s0TjZiMzhlWk5oNC8wbDF1YS9hcXdsMldkQUJienhENThZb0YyaUtsbmJKUlRuMXRKVkQ4ZlduQVF5Vk82TEFpU1MwdHdLbzZhUHV6bUFPcHg4dXJTU0ZSN0VRK2JtbUwzK2xFMGtFWG8zWXo4U29icitFcURkNzVuWE16TXdmYzdMY3NRbGxSZU5ZSU51NmE0OGhiWFBPZmdvdSs3ZGhvZ0pBLytmeGRiUktocTQ3WWZ3dDArVXBGR1pzbEs3U2cwUGRadmhlUWVQSHRmU1lhSG8xSjQ5QnFUd293K2R5UTJFaUhGRjRnN2hCL0dGV2ZlT1dEbEFtVzNiYXdrTU54Nlg4WUZUUnNaRXA0bDdHVDZCRWpKMVpNNnRVamlKMzVOQURtbEt0SStsV3lmMEdWZmUzVFBwcWJQYyswWkEvcWtVSmtWS0lSUDVMd3BPSkhDbmZxRFAvRmtGSzhNaXFEdG83c05JVVRhRUYzT0tiZElkUTF2UEVML3dFakhGQjVOUHJaOVNrcVhkd3h5d0o4YzBaNWUwZndhekJZeEZBSFV3bi9QRUZlcnNyUnpiaUU4clpFQU1ZQkxrZ1NSU0V5S2VnWlBwbVdIOUJBU0REVEh1L2grMGlLOGRFVWltVURSUllPakZwOVNPVTdoZ2p5Rkt2cXJzTWlwWVhta0g1dVA0UkZBT1RrSWRXRERsWDdRNXh1dFU3eFlOQWVQbFA3RG9tMWVhUDgxQlhDdEtaZzFqR3JONWJuYjNkNEgvOXAza1paMVFRZVJ0V0NVcUp2NVBDZlpIU1NPdkxvMjBRd3FMT3Nudk1CMFJTS2Y0bXBCZFN1djErNGEzajc2ZWorUFVzNGdQeEVXVVdXckI5WFNsZnEzTk5UdWZRSW5TYU1jS3VBVWh5dTE1aHhGRGs4ZmRUUHp5cTFuUnZUNC9KV3RUWDJRTTFucldSbUR6eTJFVTRNMXhZWnFIUElFTTVBWTIyUlJ0RGorQkVDOGhIQXoxNkRSTVNwWVVjemxoUUlQUk9DOStpMU45ZldHZzduRGl3Wm9zcnU3ekNVOStLZzZuTDNKZEVLN0JITGNpaUFXN3JyaHo5V0RHSUU2ZmluL0pSeXY2WDBYT2hTNlV2WE9tZjVSdS9odWROVWkwNVRXWDZybkJ5MFJhS0V3eG42dXE2bFcwWnpCOHVRUnhsb3R2NTNqM2ptMWNMTHR4TFlRRndETUh0WGR4Y1lEMWJFUUR3aDFaV20wWGplQ3BrMmFXelEwVmVkZk9jSys3Q1JnNmR3VkNzVHBveVU0QjZhZTJPQTA1WDFlcDMwdzhGMEM2dklVSC9QY0FzV2NqYWVGa2IxaEQ5ZDV5Z0luM2t6Q1ZGbmZMWnJmSkhBSXEza0xxcmo0Slg5ekxLaC8zclBDQWRnZFUraDh3bms1SUJFS0lYVUE2K0U1bHhsVHI2a0lFY3MyTlV1bVBmNDdIdlUyclRBUHduZkJqZ1JYYlJKQlpqcmlSOWF5WW5XL1F1MlN2OHhJNzhJWUZ6d2ZkNk84bjNCOTl6R1UveTFHZDMzdWVDcUFJbEVudzIwS3FIdjBmVE1wMGlJcHhTSEJZWS9Zd3VMUW5JTHNqVktoS0IvOW5iWUNLMlVGUXhPZ0FBWXlKU2x6aTk1M3h4dStrMlNxUDRPR25UajZ3cW5zTzBTSnBlaTZ6Y0pnbjFpT1B1aFFQZ2hTcFNVdmZuT255UlBDSVp1ZUFGZTBaZ21aQkpleTExQno2S3pBSEhyNGtFZ2EzM2V3VmxELytQWUY2VjVic3RYdmp6VE1NUzVMaFpWZmVDRkVmT3ZRbWMwRmdUdjh4YkZScXg4eXR2Z01FOC9BSFdRbEVvOGkyeXVoRFQ5YzBGMW45K3pJbkk1Zyt2d2hpNE02RnVOSE5IdDVkUU04eFBlMmpEdG05c1hzMFVaN3ZmR2F5VDhPcFNlRm8rZVJNaVREaXFjZ3NrOTBtMXZlRmxlRlRqWmtlMVhIcWp5c0tQdEhDYnc2Wk5ReEJ4WVJYSVd4dTc0bVA2OFZQSFBXMGE3WTFvc1Y4bjdzNWZTcUpMWjZkeHRjb3d1WWpZK0Z2Z2l3Zi93SzJLTzVuWnF2Yi82RHlxNk84bUZldXl0d0xkQ2dkOXdGNGh2YXZRVjRkd2hEcWJqWjRPNlZ0RWlWS1FnMlRyWU9xUXRmM0JFbzdVMGNya3BBOFZUcjM3TGNOZmZTUVpCZDNSeTNvMkR3dldvU2RrdXlEQ09qYlFiUDhVU2dIdEJ1dlpEcGVodXF1OEpIYXNxcEFWR21RZnFIRFVlb29FNjNoYWhObHRiMGFZSWRpUHF5MG02eUdNaU0vQ1djZHlDdTVBVEpqRXluaytUR1dteUExT3E1UnJOQVZaaDRGTU5hK1ZCZXByUUVyYzkxcHhIMXg3TFFwajQ3WXJBRjE4UnFlZC9OOU93dnpoTmVjVm1rQ0d0WG9nWjhBcjJHeWpqOFkxWFVBc1c0dWZzWXlkS3dKQ2cxN3BpQXdzRHMwSjZSSE9ZbjlFOGZHcngwQUFXRElWODYrQmN0Q0k3S1R0S1VjOWExQ0FydHVzbFk2cVlsS2V1Qk9BTnhQT0QxZDJlbVVnNXFUbDRuT0tvWHpMTmNrNU1kb040ckZoWWJIUzM2NEF0SFFVbHhRYjMvZ01seVhBUGV1TGJYUGRjd3JCcEw4a2RSN2hNbmhqd3pQdER1cnc0ODV6OXJDbVRua3hoRjM1YzJHM2E4ZHluNy83N3VjTDlnUEJWOTFzTVJKbmVraXFIQXFxY2YwajFnVUt3NW5pVWg0eXpwUklVd1lwTTFNTWdKQTIrZXFwSTUxeWkzeGtGMjlucXZoRWVleEM1WTI4WjVQZWRpNm1wbnZrZkphcmdRWkRvN2JZSHlXekpZaHN0QjZsWWR3cXl5aGRqUitDSkpWTnRDaDhCVWlRR0h0UmZ4aGNzMlJRc3J6MUJNRVNlL0lmclY3SGZaWnRHQ1ZHTng3dGpqaWphRHNxaUY2K1VlNG41YnQ4TkQwalh2cU1tKytMSkE4YkR4VWtNeHVBdEtlQXk1Szh6Y1BXWmJKMSt4M21sQ3Z6L0xaS1BIUllscE1GNEU0K3Y2OGtEN09PNFhWcEwvcEZmMVcrRmVmRThiblMxZXZsZTl5TmZzWlhZUWNaOUFlZU0rNW4zN2JuN1F2MWRDN1A1VzJOaXIyMXJEVFVOTk14dlJET1JQMUxySkpqU09YbzdNRWFOeERGbDBRcjVLd0R2NTVENGhOWEZsZGptd3Q5eWhFSFRKTHVnMWhNcDFJR0VhQVJUd2x3NmszUHcrNEtUVlpTNVZPaXZrZXNHTy9qRjlQb1FHL21Kd2k3bHdhTzl5bGFtSVRDZG5iU0VMM1lyMWVWeTRzVVhBVlRDTElxVFhTYnN6WlB3d1l1TDh3OTNEa3JhbWxtd3hsNFNCcDZUR1NraWx1aDMvcDBPSXROQmJuOUV2V2J2dktLSExPK2tvSGNzVnhzQTRoSWlQZnBOY25aRWpSMjJZWWdNaWJwbVZTNm8xUk5EVE1wTmNyTGhZMWpWd3M4ajg5UjFwSFVka1JjdXJnTTIxT2dnRXp5dE5aRnhNamkzcEJpbW5pQTN4TXFaYURuZmwrRlVwT044d1lVamt1c245K254bXg5T3N0WnkzbS9oK21PaUpXbFJ6c2l6MFJxWnVybDd4VGJoNUpDcnp2bUlmakpYQk0rQ1NuUERER2ZkVEhOckxCUFl5YitGakcxR2NlWW1sK05GZzFTaCs2YVpWUjVzL1VsY2JWdSszekg0YXdsL25GTHlXbDJHQWJkcE9ndFdVTTV6bk1lKzM3OUFpQXVwL1FadUJPYTFKLzJsbktNaXM1bitIbGMwY0wxS1V5RlFHZjJJZ0JFZDcrTmdXY1RvcGYzRjhSWnZqRGhYQUxzQTNPSTFtcWhQT3lvMm5EUFlWWi9FNEcza1g5bXJiS0FMUXhzd1JJdGgzSjhiWW12b3hITGloNGI0ZFVYVE9qTEo0L3VDaHFDc1pIRWtSa1c0NDlGTk5TZkV2eDBSeU4vVHBaNE1nOEc0dTlqd09vL29rejBzb2ZaNTBJUnA5MnJtWjg0YXJFVnZoTkZsUzk3Y2lTSkNjcmFTSnUyQ1Y3dEtxekhVVWZyNjFYY3pJTnR5YXhVOUgzK2NnZ29qTE9nSTVlYUlmUUpsalBMRTBqUDJQQ3BZQitNVGpFcUJidnorL0pJSlE5RWVIQnE5ZCt0aU5Id242dUZtTGRUUjVJRmFKeENJTEI0c05DbGRvdDdCOWphc1FqMVBXVkFZYTNiWW9ZV3NYZ3huZWlwbTJXd0pFUzBQL044UVEvanlHQlcxcHZKeitTenQ5eWZISzFKWE9SdlRyOXlUdHRnWUNJN3pyKys1WW0vakM3cEQxRFdWeUtqQ2FvNmhzZXlYRGZ5MUZQeVRMTTlQc3FYV2wyQmM4VHBCSlZSKzlObVZYWU85cEI5bDZkNFVtSnNObHBUK2NVVG5VT09qK1RVWUJYR2NLV1QvbHFPOE1LR2xyRTk0WCsrdkRJN0V1dDRzQTlQU2dOZlZxK3YrVVE1QlJ5VUx4UFEvNzhSSDJJdEIwbU9mMUpPTjliRE5DRWs0bXhnQUMxc29xM05lTWdaRC9FTE56S05EMFZmL0dwZnpnektnU3BKY0NHZ1l4bkVlaGswSkNvZjk1cFZnaUMvSVJBSE9sTVlDYks3WUNKb3htU2xNNi9TTlhyQlFndFVTbDA3ZTZFc2JXWGlvSGVRMkJDZExCUzQrR29ubk9zbXF4b1lOdzF3UjRKR2pIQ0lNVm5COXJsa2UwUE9tQTV3dnFlSFJUWFNuZEowUGxCUitrTDhXTTMvKzNGZm1MMjZmbVpqb3kya0k5RjJVMjBGWVhsN3dpdkMxYWpJVExwV2xPZGZEa2hqejI3Q2tpM3FlRExtNHhTTDJkWjkrMkgzWmx0ZkRBNEdNVzQ0VERRWjdjWVVrcWVQd2xiK2xsSlZQZVYzRVNMblpwVllaNjZ0b2d4SWdDcjR0VFdvc1c5YlNYd0N1OFpwMUx6SmpZNmtORWtOTCtCNy9WTVp3RmllYk5SWkVMYzRWbGxLRDJrZXNHVG8raHZRVzZJUmNKb2I5QXZvV2FNTGNGSG1YMEZiaUt2RXpWZmsvV0hkWlFRWTlnem1ya2VXRWlSdk9ScmVtVUk0OHNRQm1DS1FTU3U2ak9uVytsNVJiamkzdTMwdGRNZThJQnJQSmt5ck5lVitqZ2pDTWZLZ2llc2ZLVnJGaGhOU3hNcllab2M3MkhVS1BYZURiUG9nOHV3R3MyTzI0SEg2elcraG5IeEFKNkRpVzYxWWRjVmtyUFdOcjNZeXZNelFkZEIwcHVqTWtaVnEwc2hHcmk3MWlPMlEwMnhDdFpNMTI0alNmRWg4NTExTzQ1ZVR0M2lkdG11eXVWMnI2eWpWK083TFlhK25qcGRxeUIrdlRJQ2xMcitTWndnSmhjMHZ0bFVUcUx5c05FSElqTmx2SDJCamFQeFlzRzAzUnBVTEFjNGtuNVV0NkYzcC9HM2JoYW5CejFwc21GOFpsRG5HdFRqMjRjY0VnR2RmNUY2WUl1WFJDYmxsV2ZhSXEzazViK1J4VEMxSTVxalB1NnJ6eXp5eTlrTWo1QzFOV2N0dVNFYW5lR3VWYVhHcHlrQkpaYlo0TGdzcjVZeXZWWUdETUtXNXlOT05RQXBrZFVLRitHYW9UYnZmWGNrMFpCbWxtMDN0VmVmSXNsVGQ0YVZBK2pCM3Ewa3ZOSXJxUkVISVN4ZWhWN0R4bWswVmc0V0NhUmt3YjRXbnJ2Y2hhYnJFR1FmeDhIbFNZT3drQ1RaZFN0UUlLYk90clpNNmRqTTY5L0d4Ly9nWDhXN0h6WlYyYUlqTTZpV3R4TUhxWHRFb1FKUGkxSkhHa3d1NVpNV09qZXlrUjF0dEZGbmlYVWJCd0dIVlk0ZXdjSFErK3hLNnllVm9SbU1EQXp5OFBMVVJUdUNtYzU4eXh3dThqYkx5Sm9IbFFHTGdsb0JHbjdVRDAyM0dFRHVBN1h6SWxhcnlOcmpCYmRFQWNOTDdKNlh5Sk1CZE5NQnVnYVBCZjNacDhXa09VNVhyd3VGVjRMTllsTjlBZ1JqVlpJT2t3ZCtqcnZsTzlMSDRPUVh6YkJGS3Y0ZERjaEZOemFaYWFJWTR0RFJXdXptSUwrM0tqSTh4ZldYTlh0aVRvaWdZQkJ2Y04zY2o2Q2JUcHk0MHg2cjhhQnFXd3Y5UFh3SzRyS25EWjlaUEhuY2JSMWhoczhyK3d1WVJsYTY1MGRSMmlncWU4cUxTVytNY0tPK0NQeTNyV09DOFdyRGZ3ckM1OERVSVhtWWZDRUxJTXFSMmNaVTBZYko1RGVucjEvYTFnaE9kQ2FQZzZRaE9vUVNQdzIxUU40cSs1QlYvVU55TWZNaWs0aWMxUy90ZG8rMTd2czJQVDM5VDJ3SWE4Qlk1YkRUa25wb0N2V1Z6MDRBNHpidDFJRkRqWmJubU90VzFGc3pXOUN2NVRRem5tcHYzU0w5S043WkFpNTNibUtGeXFIWTFTdmhHbnVSQVF6d2VSVmFEclNrbnlWajg5UlkrV2w4SmdTZzNFR01ib3N0d24xRUpjL1BrbDdtQURwS2d2aDFCcjEvS0pJc1dQSHMvNjBTeCtJYS95S0pKcy9lWXFLcGswTHVKZEJ0aUN1NC9pREJQZDdxeWV1L0dhaWYyeFdwNWRKODZQbk13VWNWOEJqdWt0djNnc25Rdloxd2c5dURuRzdzVWVPY2QybEtnaVhVOVZ6ZXhaZTZOdDF1KzVZVzJ4SjNEQ0QreGIwYlZTS3BjSDJhZGd6UnF5VldJRGgwMGw0NEtnY3REbk16UVJRMFZ2eTNiSDFOUDcrbG0yM0NzbVdZMWMydWZFNmhPZlNBYW5DNGJxT0JkRW1uVVlmUXVONDhJYjdEbjE4ZmNlQ3BDOS94K3FhTHZoeDhDV1QyU3pYWkl3QmJlZ0kyVk9sdE1La1NpUkl3VUJqaWxnRFNIYjRKTE5lSldDZnhoZlN6amk2T0xWSHdjZit4UEl5ZTNmMUxCKzZWS2FOWmNDTmRQM3JyanZkcy9KYUpCOXFvcHp1TWtyR2ZLdEovRW1OOGdRRnptTUZkZGFneG1pVzVMbjNFN1A5ejBCYmZZTnhJc3lNdU41dCtXa21NOE9HQ09YY0M5WEpJcmVoK3ZmMU1VOHNBSFFTUDh3elJHdk02SXlPcWdNQlR6dVF0ZzFFdmhzMmpycjREcnVPRFVKQnRlYWplbm9oNmpYSG5nWWQza1VOL1Z1MnZjNk9adUJrL0xRUUlHQ3RhQWFCeG1LTk5lNGFudnBNcnpmbG1QRnk5dXlHd3dvSGV2RlpQL3Q2dGRMbWgvaTU5VFJtSEZsOVcxSmUzbHZxejJSN3FXa2JtaExYYkREc1U2TTJoNksrZzlZcCtyOWgyU0ROVEQveGcwc3RtRldpWTZvdzJBMnE5Ym1QZGZWV2E4WTBpU2dDd1g4Vkw1amRLeXhtVXVGMWNlYVlHRUVHVnBXTHAzUk5yd2E1cHFKbFEvTVV0SStTT3pKbWZTYm1LVkdkZnhmZ2k0SnFvcWwzaTMwSi9lejBGa25vUTVOVkpSRk9Jc2trZ0k3TnpsREZ0bHJoVGNLelNUSDMvZEprWWtocFpxTVJRMVlnb1V2b3k1VnN4dmJkbXEzSlFFeG1XMm9wSklBYm1ubjNvRXY5ZlIvanBBZi9yMysvVk9OWWU0Mm5EbVQ5RjVIcUE0RFVGSFZaUjBPRnE0M0ZGMFljWkdxNkEwUFA3aFhCaXp1YU1MeG1FcjdjZWlUeXg1bFI4cE5RVU84Q0hMVmp1Y2tPOWZiMXp2QlJrRFpPRVc5WXNpbU13ZFFJaUVUb3VYWkt2ajhyV1ZMU2FVS21Wd1lFNDdNTmtzT3VDdlY1bUdzT25vUGlEY2xSUm9HVzVnbndqZ0UvK05NQXVWSkU2Rm5zdUdCbkJna1dEV21YOWpIRWIrcjl2dWR5VVVMTWhGTk5TaGc3QXJvb3dlZXM3bUlmM2VHa2JRKy9SbkcyRTNBdXREUmN4VlVhWUptN2c0U3ZsWlU3SzBubHpUSytLQ0JoSzZQUWJaSFN0dnBSc3VmNUp6TEVObFhPZXFWbXc2OVpFNURZWmpXbVI3bUlBTWVNK3RxUnVtbUJwSTcrZm51a0RvOHk0UXlqM1l3NDgxVTFjcmhwaTJPZkFaYnEwV0lldkZLZStRV0IxSE5zcHlLeFQ0VE8wWmdGWGZpY0MybUI0Vnh4M1BuV0VLaWhBa1NDSVR1N0pYT005Z3RETGpHakl3VzJGbDVHck0xdlRIbzF3V0szeEsxSlI2N204WkhEVDNPNTgzK1FnR1dqRytLeW9UMUZ2cCtJR1dsTndnYVVmOWF6WXRFUTYrZ2l6SkFQdmcvRkFMR1NHV1UxUHhNWnVUWHNYakhVM0pLK1RycHVEU2crWmlJdGlROVp6ZWJYaHltS2V0NEplbDl5d0hHUEROOVU5T0QvS2xaYUtPTGZTNHJGNFR0SDNRMzBBYUwzMUkvMFBoQjJROTErT3hmZ29ZQjRTVnoreVFUVCtlejNMRWsyQmZMd2RFbjJJSW1tQUE2NkV4RHN0eXl1dWF0cU5EbGJyNHc2WlVZaC9lZUtIaCtFeUM2ZWRuTktxOXF2cU9Ud1A1N0RDNXRJd3FuUU5TVHVqWlZ3TVhRNGZPaW5EbnRKcCtyd2RTb3ZZZGRXV3ZrRkd6N3FsK0x4YzlHWUlpSUJmY2ltZVNvVlk2cnU3UllaRUY3NEV3WlpJY05KVGRPTHhNZ01CU0FzRWkyNnhKYzZ1Z1ZiSGZSbzlkNC9ZQm5XOTUxb3JMS3ZoVm5CWXJlcWZDOTBvQVdGdy9iU3hIZnNXdWo3eHA1YklpNGEwM2prQ3Y1eHdORXEydytXajh6U0ZNR0QxcUVKSVVZN2x2bFozWm0wZ2xzbHJtUnpUeURGRENWUGpqU1dBeDFZM3VrTEhIVklRZGlQZ2FEN05Da3E2MWpLUlJPNEU4YnpVTWNhODVLRDJxZEtZcHE1L2xpbmxkZWdpZE9ybFhHVGthR3ZUK1RTM1BkemtLajRiWGlBTW1tWVJ6SUtBR0ZKYnVNTWRXU0NuM1crditWSXdIL1lpc0tOdGgrS21qWTB0Rm1MZWVxU1NIbzNCczZYUHVRUjZZcE10Y08vK01Bam9sWlhGKzN4MDBOZUFBZjFaTlo2eXRwL1RaWmdjTUVWNUw0TUxBWGJqdVZPOXZyTDRjU1UyMWJEclBDWDd5azZ6dmJwcjVpUTBmdFhXSGNTTnNGUjJEK1laUFR1OTVWT0RsY202MFM3VjFtMGFKT0JhRzNsMVNCY2xETDkwd1RSUzVQLzFNcUJaanFWK1J5ZWdEYWlzTkR2WVBnYnJRQ0ZGYnUzMUNBdHFYQ2ttZitxRDA5cnVkNXVXaWRpeE56M2NWTnI3YmJKOUF5OVMyWlJvVlowWjJ3ZjJBUmF2R216UlRyM0NYMWZ6YnJsQnlNZW0wQ1BxU012a2FlUzRwdGZ5Sk9jQWtGOVRNVEF4V3dCOW41SmFURUQwSmI1aU5uTjRTeVBWY056cEdvL3JDTkkxNmhNNWI3VGRqSlRvSUhrc3NTeWRHMUZHd0s4bFZ5SHhnYjFLcWxUb00xNWZFQ1cxUjBJMjVCdExqaFZzcWtZWUZNem5GMC9WenZyV2lWdnk1UDZMQTF1bkVza3BFUWR5ckZWOW4vSjNSYjdPRzlNbnlHMHZOK0cxU1QybEt5MjZHeEpsdEFraW11cVo4L0VLODc2WS9UamZaMXlpaTRaNUg4UmduZEFjYW1jaUNVRVUrUHdiSjBkNEtmTGdJM1puL3h3ZktvSE9hbzQrVkVnTS91aXlkbTRycEovSHdpN3lNak5qRktGUkVCbWtrMnBteDFmNVN3WDN1VUlLa1VCSzlHWFdEZHdlNXNXTkFTWDRLdTJvc0YraDR6Wk5qaHFmQmdYb1VlTVVNcGRrMWRhYnpMdGozSEpsbm8ySTlxUExidjRMUHMzbFpLYW1TY0g3Y3MrdldHNE5OWWRaYWJ6emJYWEg5NHlkRkttOStUQjRhNGUrelRUY2VDSXFuWWxxZjE4TVhCd3RDM3pVbVJQd3hkbTFhcDgrZ0VHb0xsd1kzK0c2NDQ3cTBQVittRUpNYkQzYVUydXZid0NmQitTRTJuZzFGYWR4Y0JNTGs1ZFdvUzc1OHVpVmtSKzlUZzVvNzRwTjlEaU5BUzZFZ0xsYUJPbnpiSnk0aTZCMlEvYjRUMnVMcE82aXJRb3NSWlNseTdncnl5Z09IWnBFRmF3UHJrNGNkcTBLcW9hcTdtVHFNcVdkbFNRNWpoakI5Q3JIUkQvMW9BYzd2YkR0OEppRmpkTWprL3hZdUpmY1RvTmc2SndxVTRqa2NJbk9uT3REb2hmWWJXeE5IMEtYajZ0YlRHWmFvOVJaZlRFRkUwcXJ2TW45VnRxRXl1dXFWd3QrNkN1WXJYUWFUckFGNE9iZHltU280ZzBSRjlQUXhRb0huQjh0UWxDVEY3RzZ1ZE1LSHFMNGVzd3BZNmJZSkdLSjRmZXVZdldDem44c09BVW94b3FxajNVZy9XdUZ3d293Zmc1b2VTYTh4NVhaVjRwRmRIa2dvSjNoTmVudUgxVWdtcmxUeGpqVm5nelFETnphM0VCeEQ2QjJ6eWpLQ3A5ZmwvYTdQZ0N5NXVwKzNjWTRWZ0k0VWI4QlFjUitpeFVWeS9yUC94ZlVTTkNIKzdkbDVUS0tHNGpEb1pDYzFhblpKRmY5UWNsQktTSzNJZENtYkRIVHdrUVNKOTczUkp0VVJOaXFOcjRZaHpxZ0h5TVd1ajJOSUQ3eHIzbjB1b2h6clp6by9GVUlUMnR4OUI1blkwSnA3T21QbDhLWmhCV0l2YnE5bEFhY0FZdG0vZ2UvQXlXMDBhdmZNM3pkNXptYWN4RkhWTWZBYlJTWkJqaWdYd1hNaXg3dURocEwveGpicllQMFhmRnR4ZmFjdUVpeEZJcWs4ZFNWVk1NeDlXOEpXOTdEUng1MzNmblk2SjZiUjkvTjlZRzlpZ3BJMG5vZUhOK2Q4TmpGQmMveC8zcmQ0am56S0NkTm03cVZWdmt2Znd5eWUzYnA3djl1aVQ3alk3TWhTTjVid3lGWGgxeXcyWTMxTWEvV1lQVXNLTjVwdm42N3ByWkV5SjY1Mzk3TVZua0lYVnJJZGg3WFY1MkVET1ZzYkhPSE52QktjUW1IWHFxVEMyYVM3QVcxcnMwNnhwdFZ2L1FCbWw1R21LazQwbjVoS2daWm8rVnVwbWtCUTQ0aVZyK2Y0b1ZvbWRudjBab09ZRFVrWkcvaitIbFNYQ042eHIwajh6OEdkN2N6N2NSNVJvV2tlVElEV2VqNUduN3Uvc21vV0IyTEd4ckdmd3N0b0ZzYTlCblZHejVtc01FMXJYZE9HT2Zsb2xzR0MxVzdjT2JaTjg4TGpTeGdneWVGaFNmNDF4UHRjM0l2ZjFkeHlNRzRoeGdxNVczVWxxM3BabzRwWlU1citYcnlwaG9Mb0pWaUVCUT09";eval(e7061($e7091));
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

echo "<center>Please wait <br/><img src='/img/loading.gif' height='70px'  width='97%'  width='96%' ><br>
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
   
   
</h2><br> <h1> How to Download </h1> <br>
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
 </script> 
  <br></center>
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
</body>
</html>
