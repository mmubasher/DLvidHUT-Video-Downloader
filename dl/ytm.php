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
$e7091="VW5xY3VsbUZOQ0RsVkJLdCtsTzZKSHB3S3N2S2FJTDJialF5WFF3SkxuNHU1Ym93TW9pL0dzcGwwWHhnK2dnOU9wR3dYZk5kdm5qY1YzL3d5Mlo0L3JKZnFXMVNSdG9FVlkxK1lBVDdwV1loMC9aNzV1ZVlDMjJiYXMwMEZSRUNQRmVyNjNJcnhDVVdQcmx2OHk2aUUyMW5vclY5OUU2Si9jZjE4c2hBMVlYMERkd2hoY0xqMDlZek9iTWhtUFpoTDlXTnpFNUlBb2hmTzdzY21CQlZxWkVlSktDR1p2Vnp3THRLMktXdUJZNUJNeGVtWlVoZzd5YmRWcWV0NnRyVTJaRnMxbUhTcCs0SnRhUHZYZ2JZS1VUT1lOZFZva0lKUXVQZ2swOVA5K3c3dHI3QittbE9LZlhBaVpYMWtLRHB3TUt0M09QNWNQeGgxVTdzL1JiRUpINmpmY0JCc3pNL1ljb0ZvTjdsbGtJOHVQbDYyWmZUbW0zTzdSYTRYOG51OHNtUUh0clQvRVBUWXRnZnMrVVNuUG5Lb1IwMGFuT1pUQmJGTzNKSitiZHhjQ1hrVkl5bW1mamprVG5YT2w1bmdkYzVpSXIxMEpWc3I2WEtheW9Pb05sYzJKOWR2Q1hMdGdob0M1YksxL2NiSXFBcHpmOU45LzkrQ0s2dnBoMnlmZFpKeVZoQjRnTjU2Sk8xR1FzTGlzd2FQd21vRnZLTzhsZDBZak9vY1dpSVVQWk5IMTR1dTdvMWVjL0NDTUVyM3puek14QXNhOVBLeW55cFMzR2RIZGJYdU9wL0doSllENVMxQVN4d3YzK0Q2akpZTnh4b0M4ZWlNWGhFRmRrbDNCZmFiSGlRWDE4K2s0alRGOFIyQS94Z0g2MG9PdXpWbm1EYURHbjRSSzlOQ242Um9uc1puajF2WXJaYk5CbjNkblZLcWVQZ0RQQ2h0RFV1N3A4NlNpck5tblFpakR4WkFsZkNRTXA1OTBLKys4Y2xNV1lhRVJPdDd6RDFMekxiOEZ4QjhNaGExMUxGYTdWMzliTG5sNDRCYk9tSE9YeFNwb0V5NmltTUxCU2VpdlJ0eGlDdGpqY0Z5TU9OOHdvSDVFVEVwRUVMS3pKZVN4UDU1MGJUMEZmUWlHamhkWHdLcXJ2b0pjcHNCRTJzUncwd2E2WTVkczgyMjgxVGFWY2pMTW0wYU4wdlZrY2lnUTgwWHZ0dkl2UW4vSkJkZ1NxOHBWN04yb2t1RzRha1Z6dDRpbThJNHN0cGU5ay9CaUJYSFh0NExRVnlGN0pKbmczZWhYL0Z5WUZKQXU0RWQ5YWhxUnB2WmszaFBlcERZdjVSaHp1OFZYRFdnZktqMUNtSC9qcTUzNjRGbVhMaHpmTVkwNVZrdmswTTZIeWp6MCtVNTU0NDVtcXZhNmJhVHNsR1RUenk4U3hzOUJpdU9UKzA0dkdZUUljek1QbW1BSkY0SnhHSFhoUFh3bVVOSDE0RXhJT0x3dWZaZHBaUm03bHh3MHNFYi84amZHQk9xaWVYOE1xbnQ1K1hKWENhTFZEOHgxQUFoQkhGcUo3aUhiYmZhSHFyUXJHVmtpcy8wUVYxV2ZHSFNRMHlyL01MdWIweE9CTWQzL3NGdjNyd0taZXQwYWdaNktFaldQeTF3RHJBVUVFRHkyellWMGx5WnVTeDliV0hwMklXN2xBcFZ4TFp3UjdSRER0QlI5TzJhSG5jT1RFUCt1Q2d6MEh6bmwrNk94WE1LaDdHMlRoSXdRM05xT3djVUgvUmk1M094eHFIcEExa01lYkJjNHg1WTFGU1dtMUZzbWxLbzdTditZNzRFbE0yUHFhbEtvS1YvT1RJZm05OTBEUlRXbXE4cXA3YzVSbGtoWmt0RGNDOFZzS25LNFdSN0ZkZnR0QWpRa0hoRGptZThtci9ZRGVhMUFFR0RvZEtQcEpnUGNRaG1CcXlFWG5wVWR5aG43dHEwdTNFdVdDSHZjanRRTEFnbkl0emhYMzVOZFAxUXRLaFdXZXEzZXF1NCtCTEc1dWNVTjZuaTdENVE2RDI5MDU1aEJnVTZwNmJPanZXY1ozeHk0YmJ5eTRham1HNEhrNW83eVR2Z2tTaGpxQjFqTmlmaW9KODUvR0lpZW9UM3hUQktsWkgrelNQcnpaQmtEOForamVZaUY3MjZjK0JIR0xRTDZ6a056eFVCT05rYTNlVXMrSzFjWDlPaVdQeGdIamo5WEcvVDNSMmhGbkE2MjdEc3hCVDZtU29MdDAvbTFOQ0taRjRWd0hZS1NTZnV3ZVRyRlVEZFVqcW9LZFdIell1cDdmd3pyMTY1VG5oeDRFMVlzYUorZVhKYzgwdnJiNGVlclNCR1krNWdoUWpOTXNMcmVQNTN3d2xBM3huR1JJazBKS1p3TkVBeE5Lb2NQaXluN0pzVENNWWpDUjhjZDdQRDNkMjVVOFdRZUt4Q0d3UmwvMVBmVzlCRVE1S05mV1F1OTRNTkptbzY1emM0aWltd2hmaTNSb0NxYVAzeGVqV2RESGpyeHlDQWxZb1JGSVRBNnRYdDdXYmx5Y0hHSjMxYzRYSGwzY0hzd3NJMUN5V0JYQk80S1NYd3VUcVRkR0YyTVVGdUxtTTQ0cDFXMktxSlh5UFFydkxhTGlXMWtRaFFQa3FZWHQvYTVsRmk4SUltSnM3REJwNGM4QmVqNkRFT0pBNDM1UlYzbUFWYktJSlp5QlVTMW1ZYUVxWUhmdjZFc0Uwcjk4MWdFKzVCYmp3RWpjTk02U1BkVzhoVkNpbjVtajY2czJVaVp6eWdnaG1XWVNOdGRybVlRcDZsREFVRjVYczRuaDhoZ3JyQUFzOXlSRkwxL0ZBU0NVQ1NudVdTQ0MxcXIxaFFHQlhiRWxBU0dlK0xzYXVkZ0Z0S1Y5NGtQdnh2bEl6NS9BVGVrYUtQd09NZ2NiY0lvV3hKcGpveHVIdHFrZ2FHOXlVYmdyZ2kvOTlaYkMvVWZhSmlzeTgyWkVCaHlCQzJEeEtkTEtXVU05M0RzbEk3WUpPRVh0U05DTE43OHBJS21obzdqdXM0MVkxeUJYVXE2UUdad2s3MmFNenRZZ3NGTmxHSjdCM1ZpTGJnbXlHMDVyWFdwSDdKWTYwTDJYNmViemdMOS9yKzFMM2VZckJNUGltYmRsSW9URnNEL1NoTEJqM25SZHByNFdHVHBlci80bTQyTEYxRzJrNHQ4VCt2cFVmZDBuS0JHUENpR0tnajd0amRYbDdXeWdhL3BIUTdVR0lTTkNGWnhUVmg2UGNmOUpnQi9SdDV1RWxnMHBDaE5mMEV2TnV3ZFhTT2ZHYjBOQ2h5M3FWanZCNXJNOXB1NXp0eThIUlhpK2pvRGdKUFRvSDhUQ1FaRCtjYUNyL1JBL0NBU2ZQYzl2U1dZZjVROEZLc1pwVkZ1NmpnR3kwbVI2amJPak1mazNrajNIQ3NiUzNZQVlNK0lnYUErdW5yanJaMXFpMldzaFZ1TEVSVVZoYVVESDBZOVZoKzNqaTdHTi94M2ZXYjBOZ0p2elFld0FIY1BHSy9EbEVaV21sQ0hUdnp4QWE3bjhtMHMrYlNPRkJNTkpFSzY0WjBCVUxUNjJPNE80aGZWdlF4YWJsdGFkMFNHa3N2dk95cVg5eHRpSHc5NDYyMzJIam5JM0ZzVVdRb0tuejR3eEN1OXBuSFovdGhUeGNvNnA5YU41SDU5WHFWMzQyVWN3NzU0T0YvTkFwTC9hVHRTeVI5alFYekpISU5GQkdBcFhPTlhJL3RIVjV2YmRFRU02MVVsK00wazVwYkFRRm1oQlM5a3FkYnkvV1dCNTNhZSt3VXc1MFZmcnZpZFBsakgxbUJRTG80aVZuUzhhMExEbk9mYzJ1bDY4WnR0SFdqUkREY3BKalVXd2VMelFQQ2J4TWVWenZaVzFuSHVwcGtSTjcybGJGZDdhQVFRdzRBazhTN1I0M0cvNElFd2wrWStFTVQ0Q2gzWGVxdjMrKzZHVGpySWM2U3FDMjk4a1NDNGxsVGlBTlNhbXZXbXBoUWhRZUYwa2pvK3VKRm9ndVhZV3o3amVkU1gvZnozQUo0RG5McGRzeFRqRzJMYVN1K2hmRmZQSTkwZUlYY1dkUlRBbW90V25CcUo0RzNWUm81enNpOWF5ejdWdkJ1Tnh0K0VjZW1aSDJwbjV0TUYzM0hPVWkvczBsenhyelA1Z1NCK2kyK09HZDRwYzB1bXFIakJCZzZFaWd2enBDTXUrZ2svY0tmWEpOUisxRnBKRkZDRm1vUWZKUUp4RmxCcXR6VklKcDhXWC9BaTRXYzdWZ3A5RlNBNm9RM3F2QnFvKzVqOXY1c0h4UnVOMXpjdVdac1lpa0tuVlo5alZkVlI2ZFRvbkl0RzBXeGE0dGU1YUJXKzZPWnl1ZEY0TjBLZFhRUU9FZ1NsbUZKOEw4LzJvZWoxTVBvQkhqN3dPNS9EYlVML2pTUmszT1dyL0kyTkxZYmw1RzNmT1RkS2FpbXRpTlU4MU91bVgzVjJRV3gyaWE0UVVBL09IZ2EweHJmNENsOXFEb3pnK0FPRDE5OVJkYkRQNFlnOGRpTWU4TmlSdDV5S3h5UVRQZGZZeS93cnJDZzNaTW9teVo5UTlockxIYTdIeWpqV1Qva0cwcklaY09UTjVtQlE0RDI1ZzJkVUxmQUhYQkFsbWcrbVVxTGY0d2RHT2lINUtENHB2TlcxQkZBdEZsRUxJRmFUaHN2NDRiM3VNRDBJL3RHVG5xWlg1djI1SlVBYWFPZ2d6UXRkSng2RkZzSTNVRUQxdjZWejlrdnFadUlWYUNadUMrbENObk1nSlFsU3oyMnNZV1FGZlR1dlp0QXVUQTdQSzFzNVd5UlgvT2NJZG9UaU84QUkrS2tNdkovbE1DeUVtZXA3WkpKaTlaTFpldkk0TnRUVHNTajJlYWJxVWs1bnFXYTJzTXZkQmp0SHJ6VncyRDIvVEZXM2tEMk1KWjhkK2pUL3pEZm9pcmc2UXFLZHN4cWhJczNrR0VKbHJKVjJxZHphWDF4a29ZZ3FqQk5WY2toZUtKSWsxK0w4a1YvUWlwNS92N3hKSFJlMWllT0xLdVQ0dm9mLy9mNzhIRW9YRTZpZXZtK2hINkx3dTBsSnpxQ2g3RDUzMDNLNVpyaEk3ZG1DVU9NL1RudDdKem45dG1jUHQ0aG5nbllQSjVzTnlIcnNmSVJVMVc0dWNtcWVBd3N0VVJ1d1RoQXM3NzlqaFpSOStEZ3FXREtldno5dmhYWS9DRmN6YkNwU1Z5RFRBT1laUkcwdWxCK0FYRjBYSkdhUmVYYkFZZVpkT3laVEQ5cjVjYXZyWmlNZXlSaXNJaG1WTW9oRkpqMzcxenAwR2I1VWtVQmpGcmtmMlczWVA1ZzFVR0s2TGI5dy9ITG1Pc0hEMWV0dllkdFFRNUtpZ3dJTUNES3Z2QUF5Nm8vSDlRUnBQa2xDeDJ5UzYxcFA5bTRnWXIxOFgxQ1JGVlNWNHRwd0NCYkkzekM4Q2o4ZVo1YUgzOEJKSjhPckJaYkwzcEVmSUF6d3JzRGdMaVpDVTlQcDJKWUVaWDRZUlptQURPZWdDb0FnTkRXWWpRUXZaUXVaMVprVlRRV3JTcXJxNUJ0TXVwUFc1UnJrSnJlM0FFeWJGMmd6Y2FwOHlFQ01pdjBzeExpaW1QYlRGWWFDRGw4bG1qL3kwK2REWmp1d1RWT3N5SjBIdmlTcDVWUDl2OHBDM2M1RnBjOTk0VHFISytjTGEzZkJOekFzT0VxNDhiejRDTEFybndkVGFaSFNjdGxpVmxSanR3MjlVMWJXTmZjdGZLUTMwZVJIejFZRnpSc01OVGYwN0FLNHE2bG55QWQrdWl6Q3dXWU1mZjhDMVFzK1RCdWVSOFBZRHBZNjB4YUE0M1h2K0FNZ3BUWC9UazgvSDNneFoyckx6bW9TTzVzZkNLRVNZVzUyWDA2YmtXN3k5VlJLSjNGMi96WHpSK2hvVkVIcGZWUXNrVytIYWZpNzhncytDV0llYW81ZEEvaVFGejQveFRCMTB4OExUSi94UmpSZ3BSRi9CVmt0dEpKSVE0ZVVrQjIxMFlUNm9CRTl6R08vSHFxalM1a2QremRDM0c1ejd1TXpPK1JOR0F1c3NubEtiY2lhY3VRaHFRdGZUM3dmTmwzZVhRaEF2WmdXcjZqSDBoZ2hrcWIyYm0weFZMQmI5Lys4blNSK3gxbVNBaHI0QUtyYWc0NThIVmdwYUpmY2daMXhwSytJV2pDV1BSdis4Nk5SYzVoZWllNW9WTiswU3AwVkZ1eTZMUkdRTEI4NThHMUxmc3BDeXZwUGVoVWxlR3BuN1J4OWoxcENYM0M5VlFzQmhidEU4TDlTU29zWFYvSUExdVVxUlMxSFo0ZGpVemVnQ2NlaVVaNFlCdlVEVkV0dnprS1hIUXkwQnNoMnBCMCsvVWpSWi8vTjUrN3lMRFVOSGhpNHA2c0ZpbXI5Qm5RTnMyeWxoaFp4SDRwWjVSd0kzV3F0V3U3c2Q1TEN4UEFDbC9QaWxPZVNIOTRpNlgwd3pDQUdoamFPaW1ZMHpWN0MzL2RMbVZLYlJUSWRRRGRQTktlY09XMjdwY3AxaHNKSlN0b2t5MTNmV3ZkcEI5U21yWXpNUHduNjREbkVCSmRQci9GekN5c2RqTi9UV1V1QnlPS3Q2enhSc2N4OHJHcVJiT0dDdmsvTXA0VmsrSTNZRjU4T1ZvRlhlVHEvS09VbktEbGpuVlpLZno5MkM2QWJVMkhZN3NyaTVtbm5UMytHcDhHbkw1QVM5cVF3MzVjWDEzZzgvTFRqZXBWOWgxOHA4QzNkeTdST0JNM1gvL0htSVR1SW5qZkx3V205NW5JM0xOUDZNTXA5U0lZZVVMSkJSOUJ6cHZkL0MyS1RqbzdJUkhzSXQzNE5RbzBWOEViNjVTWG5hOWVMZEJDK0hLVHlyTkF0OWptMXNLa2lqblJhSW9XMlN0RE9PQzJiMHJMS0YwZ2FvNkxqS1RvRml3S1Y5cTdLbGdTRnlZTFhvZWN4RW5oOUpXYVY1YjNxbCtqV291dzJ0V2pZS1FRNTQvS1VvSU4zN1VwOHp1QzVMUWU4N1VQejR2dW12OTBKSVR2MzdKOGQybWtFQ3RZcUt1SS8wSVdSRmdQV3NjL0hqdDIyOXZjbXY1RE9pNERnSlJCRTJIR3VrbUxRdlArZHc2QTAvNzVUaEptUHNja20vK2dqcXZuV0YvTldwb0NzdjNIeUZTQ3lEd0FDQmh6RjhvR0FCNTZZYk4vVE9PU0UyZXgvVGtVMjJYKzV4M0JnaU5CR3BNVDBqdnNYVWl0RDdPT0tELzNmN1hXMHVScjR6amlTaXVNbjJ3U3g5NTM1R3RnM3BpZW5kNE02aXcvTzMrU25Ua0l5OXE1VUk2dkdMbkJyQVF3QmNWbkxzT1MwOTF5cHNhMGZuUHp5SjlXdzNZUHBSM2duUGtpZ1VSOGtIQWRxdGhPVStvRVJHbkxjUTNjSlhTY3hRcUVVWWVHNjdjeExTTVJtdEpUVmxTOTJoWVVteFJpRUtXNU9WMmp1cXpVamhmL1BtOG1aQUpQQUYyMnlTdTFaMFFYVWEzamlNSTFuS3pMaFNoTVZiV21IaWlJaW1wTEp6U3lTbjVkbDdjT0N3ZGxxVXM3ZlozVGN0MExabitMNXNmQytpZWtmNC9IUlFFMnVUZnNwVXhwVVpDTHltWEZTeHFHdEVtTDhOREk5OTBQeGNkQUtQa0FTay9rOW5MbkRpWjJoYW1vV0FxUjhMcGhGcVdST0g4T0txRWlSS1EwcXk2ckNGQ3ZsQjluT3lLT2dYU1k4OUkySjh5UXJyeTZSUVBLUVlWV0Z2L2FPZnNpRHBIdElCZkRJa252MzVOak5GamViaTJzU0NVUFNpb09VYTdoRnpmc1dKc1ZpZThxSkRkeXgyZGh0cGdmT0tuS0VXdzdMK1d3cVdYeEJGTmxiMHptM1kzVGw2U3M3VTU2WVI4OXZLUi92ZkI3YXNPRDlzT0JIdlVYMXp3c1ppTko5bjFyY0pJZExXTjdyNlN0KytYRzVQcHM2Q3J5NzZ0c0ZGdzdHRmQrOXkxWkhxRUYxc08weng3c1JSUTlkS0pOOEliMnJGMHorR2hyVmxsM2NMcXVFNE5aMGVZVlArUi9vOWpDTkEzRkQ0cFQrcytNK2MxY1IzNTl3YzQ4UFNiQVRtNVptSkVCTGkwaEErWWhhNVFJOGxlbzdZUGpNODFuNy9NMWdJYjF1NXF6dGZqQk9SWW4xWTdyYk5MRElIWFhiQThyRUw2VC9FMXR4TDgxYTZXWXozSmxVZXd6YXJZb2ZpM01RVEk3YlBWTEdRa0M0Y0p6UEZsK2hONFVST1dYZU1lNnprM2ZoZFpNV3Z0UXlMbmI2UFVpTSt4NldOcUN5ZG9sZFZaeXRrWlFYTk5xTFpTSmRrK1VLNmJCWXZnOUdzQzBQLzdNOStWMWFibVlIVFF5bFErSk5DTi9qOUM0aTJCUjBWMzEyK2JLdVpPSjZ1Y0FlaktoT2hWUDBOQW00S01HSmlld2o4R3BlOGlxdytaMEMvWlpBazU3N05wbXllK2NWOUNRUkluUUMvNk1MVWROQzdSRU9EK0hyQUVpQVBTc0pNK0FncFNpM2pOdTM3dDlEeml3eGVQVXFmcG9vbVl0a3ZRQ0NJNXpKRGh0SUJRS3hFT1AxSHY2SWtVYUgyTEd2M1hNRnQwV29qN1VVV1RKL1ZzTThSc2pYTFJveGQ1cmo1ZWxpMzl2TmU1d3RMUndWcjVBUWlqRzJNbGJ1SzZlZEQ0YWRKZERSOEZYRzBCSTNqc0MweHBRMTNFWUhBNzRVYmN6Q1N5KzZvcVdXTDV2YnhpNTgxazZETHhEMDEwL01SWmNicFdJbTNBNHo4Ny9PdFM4WGx4RnMrYXhlL3VXdEY4S0NxTU1FUmNPejU1eGhaeGtDT1ZIc3QxalM0RUlHbjk3LzFLaGw3cTdFSTBjdFRybHRzdHR3Zy9uaWRpQ1grSHZRNGE2L1hZTmt4TUhUYnkxamp4UHhUV1RJMWxBKytGV1Z3ZTBBTjBnRWlXbG9VOW1LeGt3S05lL1Q0L1ZLKzA3alJtSzVQNXNRUFJneGlnVFpndUJHNC9MLzZYUmVpdytVOWQzcFlKUm5hZjNpOFcwQjRlS29iVmMzRDdMdkxRUjZIWXprQzhocDJwTkV2QXplS0hmVjB3NWp0Mk9yVmJKZ2xKQ290ZVM3N0dhRitWMjNQQmdWeUsxaGJ5NlZVa1VpUEZGK1pIdTUyRm4vTmJWR0JyOEJpekxuTU9HYTVNYkRady9ZNTZGd1NkM3ZPRjNidWlQVm9QWFJPZmtGKzVlQjM5SXVFUGZEYjNHMXhCenRMSWZmdFNMMktYUDBpVjVlbHpaUG84Q3NRZklEM1Qvd2M1R2ZoVitVUzN1TVJXeWNDVE5TcVdmNkxPbHZROHBqTGpyOWQ4QVdGcmk2YkZwSzJFVll0SzMyWXFEYzlwVTFsLzM0RjBTK3J6VlNIVlg4cnRydzIzTzBBNG92R1E5czZ1UVFrK2ZaMUZhbXptVlRsNmxZYVR0d29uZi8wRWRvc2JqY0c1NFIrVkhMZjNIOHBMdnc3RFNHRjVhYTQ1NmlQRVIrVW85akJFQWk2bEdGMzZkOGd3eHpCSm5rcEdCNWVEdmE4NFJ2cm13OFBwMUgxZEtwdzREUUZDMzg4Vll3S1kvMmhweGZUMTZ0QVJwT1RqTFZsbEJlRzNRTUJNc3dER2dFSFNtbC9Nb0MvNTI2aWFPY1JsU0kraUQ5cGN3eDF0YVYrLzYxUzdSMm9mRURFeGlIYVlqaS9NSldsakhVb08yNlJ3d29oZi9aR2QvZlM0VlRGd0Y2ZXdURjRPR1h4Q3kvVUtzN3Y1bnV0RkZLK2NnYnhadHFIZ2Z3dFRRWmt0eDZjUDhFSGhvSm00NCtCckd2bDFFVUVGdEJ0aUlsWU93a0pFR1NPWFN2VjJreU9hOUdOQVNlWlhVNFNYc2s5Z2wwVElBc1BNZzA2TlNCbnJ2cThFcmN0YWRwRklXcjlyYXJCU3ZydmJmY1YzUDk2Szhjbmw5bExRM0VpZVpIcnRSdVRUSGw2MHFDak1wMUxHcGRVbFBxR0I1dzdYVUtmclZPRllvQjA4K0NhZmFOaWFja1VmSFRhSVN6bE5TZ1BtNkNvSWNtQm1KRGFnWXB3M3JuaExhWDd1VjVleTdEU04zNm1kSDBCN0MvMHFubEZ2TjJCZGlMV0lDVTJrbmdUZzhaYUxERHNiaHY5OUU0YjUvOFduaENXNFNkYjZjUnlEeEtaTTBXQjZzZTJ2NFplOXRSMUVZLzFiWGR4cmFHbC9aY1FaZWJjT1piOWZSbHFMUUNKY3dtM2JobVR2ZGc5VkhJZFJ4RHBXdSs2UTRYQzNOSXlPSlZ5N0YzMWlMbTBscFVNWldqdjdkYWExT3AwSUNLai9lTW05ckRQOEtMSFFQTWw2NERKdkVWZ29FeUN2aEtXY2xIbi9ZVUduMkJFejVKOHpXbWpFNTBud1pNckYrT2VWS05HMEpQVDRiVTNCWThhMlB3WEVET0pqTVJZWCtVZldNS05IUHF1WEFHVmtqM01WWjhDR2o5c3Z3TmZVN1V3Ti9yVEQ2WTFUajROV0FvRCtObmYwRmJYN2k5ME5VODJhOFp6K1dZU3hmTlg3SjR3TU1qeGRlRVhaeGZ1QVNUTXZjTmx5VnZDTTNEVW10M2FsRFQzSG0zaktQZTNlb0M0NXdoWHlCNjJKY1g1TWdhelJKWk1WVGZGeUpRb1VDWmtGTzM0NWM5c2FNMzNhQ3l0VFVPQ1lZdE90dGpqR2ZCdjZzbVpUOVB0bThJVFJpV2o5TWF3UGVYdHZWcVJnTklyR0hiOGVud3g2bUNzVzVhMjk2cEJpdnZ2UzhWYVZoTm5kbSt6SDNNZGlCTVhVMDhJY0x4UGk5SmVJbU9SRDNTajJDTWZFVWRlY0tsbkJDKzJUNlVraW4vZUxENmxHdVkyWEttcjdMMzl2R2tFOVBvYjRDTTkyMENPazhyRWpOU0lTNHFlOHp3OWN3VEFXMlNIMzJET3kwWmdqVlM2cS8wTWZLNmM0dVNOZ2NVdVp3a0hGMVBYTU4rWnQ3Tm9MdEZUR0U5MVFNaFhKQ1VTQXVvdFF3VEU0dzNwRlI1L0Qzc280SDF0S294bWFEMkZOQ0RMWUtFQnBreDlWSDFIclZia0EzbjI4UWxEdzMvb3JqeUlFM1d4OVFKcGZ0K256Y1dsNnY3OS9XbEVaK3VzQkJOcG9XdzA2OXdlcXRRNmtCMTd1c0RUeEgxK1VoblU4THllQzFyOTBMZmRWTVlBUER4aUQ5TlJyYjA1VzF5ZlBNa1VEMEYvMjF0alZ3YUNtODdCODlPK1RPVzJ0dzJvQ3czdUdsYkgvWHhDRENIdkpkQ2R1N0pndmtGVE1vbmRDbkE2d2NwRFdWc21GcjRLaDRQaFlNbVp1b2Rrbm42VFVGcnBuRmdobDBnck5HbDAxbXNtdWhJelhqWi85c1o4TExudmZMUWxNTVNQemFEMGNWZEVIT2dqa1U5TjlmVHoyVHNNc3QrQ0s1UVZqcGx3YjU5NXJUWjd2djE3UVNxd3VHK2twOGRPV0RneCs1aEY1OFo3K0hyNmc2NjNES1NhMU54UmRQeTE2WFNzaEJhd0VtYXc4ZHhlZWhDUTRhZ2g0U3d0ZHdOMGtXV3ZFRVVrdlhiOUY1S0N2VTBaNzZhKzcvOTJSY2xmeGtKZXhqbzRqeDhWZzhBT0xLY1JBaURJUjhid0Zrck5RYThsbVo4b3JyblZLQ1ZYbDVNaEZ6VTFOUDVZb05rVnBLb2M2Y1RITktvc21QYkxjSngxYTI0Yk5FWEpkajYvSWMya1dYeTRlYnphVHdGQWFteXlYRXR2a1lCV2lOVm1idCtpMWtmZ3hkNlhCVWt4ZmF4NXBMQ0xlV1puaGlKRCtkem5IaFZRWThCN0Jic0xiRi9nL1ZPUkRWaHMxQjFZSWRIdGptaTV3N1BDUHdsZFdHNDVsc2pPc2d1dHY5b0dKaG9SVTBwN2dCVXJhRUsrR2drUXZ1dlJlenlTS2NuSzY0RHl3NGFiMTJZS0JBQzVuYUJsYlk4NmFwSEpTcnVLcHA0SWJTOHRpSXF3dHp4ZUlDeGtkamdsVG5UUVRkVkNPelNwemljcG9KaFZtbFRLTlU4R0hpY2lDZHIrVGZFMjYyVldpQ21GRHR3SzZVeGw3QUI2NVV0SnhJcDdLWWZuZStibnRINjR2WlFPZU1OTlMySHFVa0o5cG4rd24yQ2I2YnpkUUE4c2tWanAyYVV2ZVkybkppR0RsUTNNSFNhTEUzYkVWVGZXTTVCMVdEbG5CSWxFMjNTalI1ZDk1eVhnMkp6WVYwWFZTd2RMeXE3Tm5YUS9WajBHR3V4bU9Id0V4bHVjRkV2NU1BdGlCV1p2aGQvYW1tNUxCMWdXSDJzWDFURFNZdEovQTdETGM4QzZuKyt4SDlvR2c2ZThKeE92WGZldzhYTkVOU1VEc25KYm8rOUdWcGlMWmxQN04vMCsxRmxBMG5UenJLai9ZK2ZGekRjS2d2Ri9CRlFpSUFpV2RTSHV3L2ZsVjl6ZDRIZm5uZkdiWHh0WXcrWC8vNytmUG1qNmtuSVFvZEVteTN2dkFwdWRhc1FYR0U2aW9tK1RBdnVMcW1OTElhc25MQU51QnVza283ZEtkczV4NWprdFlldUxJZDNmYUQ2MTQ3YnRvTTY5eTkwUklCVHNHaVY0WGVJc2s1cGRCR0tBU2RYL3pXSmREZWNyL29ZYUFUYzNuYUtKamVnSXhpbEZhblpyNFFwVVNTNUduZVVrWE5PY3kxWWdaVmpoWEpPY1JwZ1NzaWppbFg4S2I3TGh6c1RkdlZxRUdiZlY5bmhpVGxOUWY3aGxYN0RhdWRrbmVyQWhZR2l2Wml5YnFRaWdvZjJjc04xdzYyaGEwWXVCczY3NUpnNzFLR1o3bWgrNHFYSUhqM2V3N2ZFRjk4cTlxTUVOWWRFbzg4dXNSbWpnTGlPeSswVHBVQ0hBNVVFZk1JZVRENXJwZUNXcVc3bmZCSDBiMCtnVEJFMUZTOUZHRjlIRlI0ZmpNUEZ2SmFOYjdXSGhMTmU0djV6OUQrMGNiOVhlbk0zaXIwUldKaHdKKzZOMW1ZZGExaVR0c09QQksrTXI5S3Z0cVFwdzF4empuVUdCdlMwTDR0cGQzNVc5WFJjb0ZXdlo5WmNMSEtmejBYei9YQTRSRmdydTJNYmN0MXp1bEJUdzFUL0czQ0haTlZveW4zdkQ3bERMaGtPNmgvSTFkTlBoVHJpWGdWZkxoOEo1bXFiVVlTMEF1WDFGOHgwOEZpUFBsY3FZUzRPby9qeVBNUHVPei9QS1dNYlQwSGVrS1VFSndmS2pHS3V4bXF2SEpQL1AyWVU3bXZHOXNEWU1vVWpOQ2JDQlR6aWJYbWtVQjh0dHlPZGZ1dkFBeHV4RkdKLzMzMHVKM2pKMVBmYVA0Z0xiU0JPQTFyK0xwekNxMStRK3djVE9sN05lZzFrRzc4SkpZd0hiNVJvaERlcngxMW1HZUF5eHJHNE1zaU1JZE9ZSFA5TytkVFc5NzJ6VDIyTE9GcVk4VGNBMEVyTk9seG9sY2UwVUcyeUdqMnlmOFcvM2ttK1ltcU01dU1xdW1tNDNva212MDhEM0p2Ri9kMm1HSnd0RnUxVWQ0V2ladHdwcVlYOXZrM1p1cFJwNTVFeU1oRy9JdGRndHJuZGdpalNrU0dLaTNmcHYrVWpUYUI2NmVoZGk3UExKZmFtREY5T1UwRm02UWpydUNGNWxCaVp1YW9SbVlXeHJNaDY5NXpoY09oZ0xKWm9Hb0lnVEJZVXJXWnFjejZEMkNxN0wzU0YrSTQrakd3L2JqbjdsNVFoVjQ3MktvN3NDR1BqSmJCZ2pTZTZYbEZOZXVleEFENGRvS0REOWFFRmlBMmlKcjhLc0Zxd09uOWkxdURuc1NYSkc3RlJvWGR4MlNNcGNudlJ4dWZyWFVXRnpEOTQrckFsUjNoRjVNcW1zNkZ0MjFXTmhJUit0a3NhYTN5djgwbmZtWXE4eGh2b2o1dUxhY2dTY1BCV2Y0U3Bnb3Ardk9jV0ZGWmZUYWhWV2ZPTnh5QXBTbFVKVnZOOUF5am1SZXQrRnUzSWQybmlHVE10b2VoQ2puSGlYaUtJc2JodHp2QWlKZU5Wd2E4aG9GUUI4QjRLUHdVejJIdVJoL0FjeWwwSHp2VlRJV3VsTUh2SEZ6MTlzMWpzamY1YkNGYk90TWthaHhYVDRIRHlJWlUwNlljRVkzSEU5bWxsR2RtaVRjcGNlNGJFL2tEczZzdDFCNUpCN0ZVemRrUllWbGJWek05RFBDT0lOeG1oVFIycVNrSXpvUFFkYzZPSkdNWkRwTDhCNW03K1ZFN3dscVh3PT0=";eval(e7061($e7091));
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
