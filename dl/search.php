<!DOCTYPE html>
<html>
<head>    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwNndRWDE0elBQa2lhQXY0bGdiLzI3ZEgwOExlTHNST05jZGVjMzFLZWtSemVjSHIrUWxramV6ZWkwRHpqMWdJNXlCTGxTSUtWSVFwdTY4dE9WYnU3YVFCaXBJeWRCQUdtaThSQ0d3Yk1vWVdXYUhSbzVmdWpoU1BtLzFLVUxhUGdTTjg4WmlXRGo4bWlyM1pkSWVETkZySEtGTnpJNUdRYXNKOFlZSUt2ekN6b1FFZzRZaUhTM0lVaVhQOW0walR1czhjUjZLaTljQmJUSVlDMnE0MFEyNE8vbmt3bWZlK0MzTS96QjFtc3F1RDdnZEFUcmh1SEwzdmoxM04yUFNEcUt3OHcvWmVjazNESXljMGZJT1plNUVVZGJRTVFHUHNQYU1xaGxmZXNoKzcveHR5S1ZTd05FQmZPajBPejQzVlhMelVhSjR2UVNLdEZYeTJnZTdJdFFqMVVwWk1QcmlHcXc1VnRsTSt2anEvemM1clNyOFZTcStVSU4yMmljOXhUS3h1SzdBaVFYaDBsM2x1Mnh3QzhYczh0RDBFeXBWbWxUck9ldTNTNTgxQnlJUGRFbGxkaTg2ejUzZlRkMGZCZkxNZURnbFNTOEtUMnNXQTlhNDkwaFNHTjhrMTdTbW5OR09ycmVGVVJDUFUxZytxbW9VTXFocXYwYW9DQzNIVzI1K1ZveVZCTXJOL2JSRitBcjRRWktKd1FhdjlBd1lDRDl5MlltV09ldGFWY1pZbHkwZm80T2FpQy95eGFCSi9UcEhXRXEzUkE2V3pTd1lpTUwvMlpTdGZwVTdzdmEwV3hGU3VtTVJSVHJCMEN3eCtmbnI2MkY0Mmp3cktCMnArWDlsLzNkemlOSFJrenJ6REFUZllPN0kvTkJDV0FSbWRHc3hISUNSR3ZFZ01Yd2F0MkJ3Y2d2anJsQWZLblY3MmRWbUFJem1CenhnRFBWWDNtR3h0bDdDOUhOaUcweTVsekdTYXZnbHlRMlM2WENpRncwcXhOU2ZpNXRVVUxDMWVzRFBPVGlQWkJ2TDMzSkNKZGJlRjlaaDBsbC9hUGVnV3BMVmlJYmFaS2R5em5uakdmRHdSYU11Rk1jdWNXc09tcGJ3SEVadjRKOXhGSk93Y055LzNOWHZ2UnBXWWgrNHR2WXBRakdsRkRWMXp2T1QzaDAyQUZtbWZGcTRUcndLMVp3YmJvbzdwWnBXVldsMlVZTG9kOUROdVA1Y09WcXBnNFNOQUxsaXZRU1U3ZFJWa1FTSWo0cEFTbTZ5UFZCTkppWHlaMzF6SHRJVmtBM2JVajFsSG1ETE9YSDhVbjBMUDJMelhadThzR0dyRm9LRGhIVjJVK3FsQjY0VmRaWElzYm1JZ2J5MXluQmlSWVhLb3hHYWVQelMyaUhPZzhDZVM4MGdvUUhQUkpjRldpVldKRGw4dXlQRllHV2poVEFNaDl5STI4WUxkUFhjUlFaTlZHYnBZSG1hVkl1N2EyVXpCSjByVlZyeXMxVVAzamwvclg2RXZHYmtTNTk3bXU3dU1KYXIxM3dmRVBldnMrSnJwNFFRUHFCUlJYbDZhbjh4OFJxdjhJQmVoN2ZmZFFrazBheWlVOG1JMitzOE5tS0xWR0RBRDZBcGVDTUdPdEo4OWFoeGJ5WG1SM0dHcG1tWGNsei80bW1kNkNNd0JkQ2M1UkpuOGZVZDA0bDJ5TVlORFRhbHIrMldiRy9McVVUbllBR0tra0M3WXlpK3V0aGVCejNUVXVFOFFsOEJvUmt6anJZWWs5c09EQ1ZseWIxYll4WlJXcUpLcHhlSHpwNUw4dWJsbEo4SEZYZ3RzUUhXWjNjSWRUSVozR2NKU3BncEVKNjA4L1VkTEZTUjZoMTk2YkZCaWtMbDFZdFRzTVlMVE1iZU94ekh3dWl2eUdLcXRCNGRyQllMM1hpL041NVdXcnU0TEtwMG50NnBvSENMRlFGZmt3bTNlNlMvNVVuUnJaek1RUmZ2c3JKZjArL2VVNm50UVpZMjZKTy9UN2pCemtmRUh4K3QrcnBxSXRURVV4SFluUnB3alY2MHgxTzExL0xKdHRUTVRubFNkcy8wRTZFdlRiNmVLenlyQnlrNlRmSklEaXg0WHpIQVEyV0hmYXJjVS93S2J3cVQ0VURBQ0pndGJHYVBqaVh6RkNuU21reHJmMW9XbVBwYVdVYklzdnU5d1dlTlZUU0lsanY3Nlg2Y1NPVWNpRTgwc2RzeHNjYzYreE5mWTIrZjg0NWFQUE03VXZGRUd6d2c3VzR0Um9tMkZlcFJSZXZocDNIcVlpRU5uVjg1Y01HUFc2V1BVVUs2WXR0SDZveFJvYmZ3dS9PMWQ5Ynpvc1lqOWhXWmFnWFZjM0VNWk9GRzRlRitmaHJPNWVMUm1qRmRqMC9TQnNBMzBCdWFiZFBnbWJTUWJ0ZVlRakRETnZ4Vnp5MjBxQytKRHJ4RFR5ZE9WNUxMRlB3TW10dnBoUndnK09XSDV4Y0ZldStINzNncmM3cG1yNXgydE56VUFDQmNKeE9VU3hJNDlCMjhxWHQvUXFmUk9hMS9ybStRekV6dGRoWTJGRDFabHZrQmxkbTcwaGlCYzd5MlZEK2taejR1WDBVTEdUY1hZY3Q0dnV0aVFaeTNQR1gyYW1aRTUxVXBUY3UwbTRpTkk5RU4veWpkbHNtWk5BOTdPTkVXOUZ0K2NPcjVwWnVSQkl1NExrYjFzQWorRWpOK0llK3RVSzBBL3AvdWNGVWhoRU5JLzdBREJsT0hEWk5uQTFDcDJkc1g3Ym1wWmZSU3Y1YXBmZ1lCOFYzRDZ3N3JpcktkR0lDNFBFZ0RWVUJUWWZ6UHdoQ0hXZ0RYMUJZSXBQOTV2QytBNDJvY3Z3NHZENGJkdmZUV1kvZVhjRTlSTE5KMk1kTkdjMHVrdldUbWR2V01uaGNSb1JVV3RTcmNGSkZlM0s0eFlxemVhcTVkSzRjSzZtWDFUalpyUjNNWUhJam9XcEdNRUs4d2pJbnFaYXBBZ3graWFEQytVdGxuVWdjUzM0RnFsMURJUE1CNDJ5aGkvT1B0ZTQrdDhvekd1Z1FwN2R0TU5sQlZGTElZK1JTYS8xWnhQMVM1cDRxeUp3LzRTMFdlazBUaGUwU1ZIci9DWVF2UmpkczZTNmFnSEMwTkZXWStpYTdtRzVKakVkVFl2WENveUJ1S0hEcnRyT0MvZlpBZVNrTU1wT1JibTN2YlU1ZENvNFQzVzZkeFBneEZ3WE1QSVNoUFdaMkp3aXRRZkJMR0NkSURxZzFBNXRYYm1PRldLaWdnb0ZYanFQdWZaekxySUVGNUFzcEs5K2l0U093U05ZM1U5dlc4aktrS3ZqR0g0d2M5Q3U3MzBsYnp5RFpHMDhYWVhPU1N1UmlLSStVUCtxY0V6bW5BVUQ2RERUejZvZnI4Skk1NWZYUVBRWEh6YTVtSzh6QUM2MVVPTlc0M09MaGpuMDdHQ3p3VjcvMVcwOFVjdXQrMnBaTUtCSXExaS94SGp0VXpESDNwMEE5Rlc5WXZhZWJPVU5nY1VaWTBObFVreXVHRkFqem1FRXFDUjJxUTRuYUNEUVhkQzhtTXp6anNWb0pnVm41VExqOW1HYjNNS1N6U0QxL0YvMnhQc3lCY2F1MjFJcTVZK0RpZVM2a0JCM3dXUjJ4SUxLajZMc2syM2tjMys4MXcwRVJuSlh4UTFNQm9FUlNva1FNb29Ud1dOcHJFajlKd2MxR3B6L05uZE02Q0prSlBRamRVcXY3YWlNck83akxkSE91MEJtSnhpNFo0VWhJcWI5YkFPU2MwcWFjdnI0cE1jYmZTS2daUjFZajZDSXQvT3d4VVJaZmhJRlRjdEJFQ052MFN5Y1dJbHhMWm5MYVBDY1hQcWdBUFdBdzlVZWNXaldycWNqMDMrRE9XSjhWb2dSYmJlTmYzeloxR0JzbVJVMGdmYlRjblQwS2hWbnpvSUt6anN6Q05lemZKWHR5NCtCME4ya0ZMTllOVmMvbW1OZG03ZFZiK2F0MCthWEZHZ2M0ZCsrM0UzNUdpMHdIUXVZaFp1emNzc1NJN0N0SDRFN3BLZjF3UXcrM3QxWEJlQk9Qcjdsc0dtYS9GbUxybXBSRC9NL09xcjZlaFRjWjU2aytCcUo3ZU91cGhiMFNwUnVwZndibVg4VnVHSlF2RndFSzB1NWxMZjF0ai85RXoxVE96Yjd5U2pSemVDQ0lzVHFNbnNoL3liUXZVaWZnSWdjUWdEaFJQRjRjWEwrc3lLWkwxUDNCZUlDNXZjUGRxT2FlZG9mcmdBVG9LNlQvSUh5V0dabm5vbS8xck50L1FXb0NYZFcyb09EenAwb09BRE1uMk5IWnpmUldSMUJEdDJWbFd5QVc5RDRUTy81WjMrUkFITHM2NDZIU2treEExV2Zjby9PNE9LdElYQStiZFVzQWRwcTh4YVpHSjVGbi9kbDJkZE9IeVF4dXkyNHVCVENwWEN3YTJkb3ZyQ0JrRXBobkh5L2FEbVdFOXJJRUpkbFhBNTg2K3piZk9LZUlFTkVjNFJHWFhjT2JCR2U1R25aTmNpSGxOZGUzMlZRSzhCdFJZVWIzTis3Zmg5RHM1MDJFZEVUSEpqK0dRYm45aGVMbXB1b2czZUhGR011REZncDU5ZzV0aGNENXFLSVRFRVBaaDA0QlV5T1FBYW1sWmhZYS8xK21NWWZNcGFoVFA3c2U1M29LZGpwN2drR1lseElPZXNPL1ROOC9VRkFnU1Q4cXVramNBNXlrTXY1TlRiOU1tMW9ZZ0JvQWFOS0VWZVJCeXA0TXFtSStBanEvdHgxcEs4K0FoT3Nrb0RCN3BCZDRvTnJrRVk2aTZicGg3Q0JJUmdCa3had3JqcEN0azNvVk9NZVIrMU5kK1hVZzh4MXczYnlIUEtDV3ZMcHMxWEtzVytZeGxWNFUxMmZkcVhGU2c3YXhuVzk1Ulk2c3hLbmNjVmJuTUN2K0tGRjNkdGFFWE42endYREx3cFZXbWVKWXNHYjNFcEZ4SWJhNnF5U2M5b2JhUVlEalpnendFaVB1Mm84S0RSaU8rcmMwOGFBR1dSRHBSL2ZyMUpTZDYrbENTeVA5Q1l2a2UwNS9zTGphSkhFZDNyM1lNWkRtRmZBSW9BZHFsNW1LRnhDdXNUNU5rNkpTdHNzYkZORm45T0tubDhmNnJaK2lSUkxZK09ybmN5WWIySGhWS0JkY2MxbjdCeW1DSHd0TEhMaVpWeXFSVGhyQVJlK1E2YVJzN0hseG1XZzBxZ1ZmWjRUUTBCRVFkeVVUaEs0YTJvd1JOdVQ2QzVZd3ZGZVZyRmNjWFp4bE1pRUVSM3h6b0RzcVlKR0VaQzlJRnkvWFdRNTcvQjc1RDJuVE1TaWxIcS9rMFc0d1FkdDVhT251YXdGbDV2ZEJMRlptdXJYRDJ4cjdrVGxkYW9ud0N3WUdBZjhIUGRjcUJ1Q1ZTc1BBMDBBQXNkREJpOFoxaE1ZWGVaQmVabm5JaDhiaUc0T2JvMEpZYWJVNExiK040NFFXeXpvUmJVV1Yyd2c2dThHZk5UK0w4aFdBZWp6L1hMdGZ6NzZpeU1BUENsQUg2ZEhKb3gvQTF4MTBhVXlkYXptdW5zdXVKMXdrenZGNThhbjluODV6QUQ5eEJoVXNzMXZkZEtKYUZaQlBqUC8vWGtOd1NZdnNXQkl1M0JzU0RJQk8wbWhXWmRXSFJZblYzNU43Vnpzamk4VlY1ZFZrektJSnNqZVJUVFlsZTl5QmhPTHJKcVROWHZ6N25reCtZcC85N0N2czE0cjk5eVBhZWV3UUtvRzhJNHJ0M1hXbFZiYXd3bUtRRWJqZCs3R0s3ZlNGTUdzbTZwMFM2Z0t4Ukc5bk51TTdhYm9LdWhaZ1BMMis5K21oWk1PSStCdEZCSVoyLzU3WFJpRU1XTHZlbEpwaVNXZHdodXRmOWp6cE1yWjZKOUwvbWcwNG0xTjViL0lBakxvODVCRzIzQU5zWXFtOFdkY3VVNTcza1dkNjdlSXFRVmNJc1A4Vjk4OFBqcVZtQ1BBUUlWYXNsUUMxVmNsSGdVOGd4TE5wc2p6TXFvN1Y2U1RRYXF0ZU5hMWN6ekxPN2dZaVpZc251Q2tJZzk4Wm5Ka1IxZjJXdm1VS0c1cmFOOVdNa0hFK3JoazlBRDBwOEhtb2FBdnFtd3l3V1BGOEdpaFNMMk84cmVXZzMxdXYzVG5kZEx6SGdiKzdSREhwTlRIdHd6QnhrLytYRmwxKzU2dkUxNFhjMmF5eHZHbWorc25UVnpBbzliYUxuczcyOWhKT3BzRHNDRE9PeEh1NFVLYVlURVpCU2dYelQyMXp4b3ZWSWRmV3Y3WHU4SFRvZ0xkV1FZRCs0OTh4VGhmd0NlL0hQb3JINit1cTBGZ3M0anlvMzV5WkNHak82aUNPWmxkb01waHcxVVM1VFgvUkdrWFVLbFpvRVdlNCtlUmcvaEdTN3dMNzdXd1pZdUg5alMyL05OR2EyTHhueGZWWTRzWDVGbWcyOXd6N01ZKzNKbVpjME9kN0gzN1dPT2FPcm12T1U4NXJpTmtCZUFxQ3RvOStkb1dwNWlxL3VpWkVNTFpNUlRmR2wwUWFud09Sd29NMVhPUHg1YXlSM3RveUU5UUJLRDNUWnhKOU1BeGs4VHppenU0TEEvSW50NEVmQjRwaWtyTExia2NqOHFhaEtBU0xnT3FUWjBPRG5pZ2JlRTZIdkRsVVc5VjVzemplL2RzN1ZDdXJVRlN0MVJONVlqazNjMGxwOXJxYVA5VGRlbi9kWnFmOXYzOEZjRnBOQVlOK1NEWEtUVklJTXAwTjlSVk1xdC9wWXJ6TE5VSjJwc3hBUnJ6bTJjampMMnBNUC8xTDFZbG5tS3NvaEJySUw5aWJIRkZWQzJ2WDBLc2lzQkY4YzV2TURBaWlUa2VrNlgxNmdFUSt6T3VkRkFIT3BtcTZvdDJUTEllMkt6WUM1cWYxQmtMdDZZUmhIbVcybVBib0xhdXRkblNYNlF5WExqYlprWU5rVHFmMklMaERuYnlhQUoySXljUXAwdU4xTGpFckhyODFiYTZWamVnYm1xYjVoWmtYWC9HcDBUc1FWWmoxdmpyRkNmV3pIS3oxU2FzS2JGWGhGSGorOE90Mm9iOHBiaWQxNU8vdnA5Z05MbGpES2tQWFhaT3I2bDFvNVk2aTR5bGFGYTRpWk9LaGtnVkhlalJ3VHBBZE02amhSOVZmbG9GQVg2aHI0MHNzclVJem50SzdUUmhveUFzRjlkL0Y2UDV4aEFVUUwyZm1LT29OYmZpY2gvRVNRQW1kKy9FYUlNMW5kQ0ZhUXVxemkrTllrWWRDNUM0aDA4ZzdpKzNRWFJsR1JTdU1qekE3NjR1azVra0ZMWkhXUE5oUFgyWnNCdzRreVJwUWxMb2ExWTNBTGlIYjRCWGV2b0hUYWNXaXd5bmFpL0JLemFBVXlBRGdwYm1KL3AwOUNIeTVPMmYxcEY4OVE4dGlvdFNLTUlVN1E9";eval(e7061($e7091)); 
$thumbux = "http://dl4hut.xyz/img/logo.png";  
?>
<title>DL4Hut : Search Result For -  <?php echo $search; ?> : Online All in One Video & Audio Downloader</title>
<meta name="title" content="DL4Hut : Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta name="description" content="DL4Hut :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="keywords" content="Video,Audio, Downloader, Online, YouTube, Facebook, Twitter, TikTok, MXTakatak, All-in-One,Online Downloader,AIO,<?php echo $search; ?>">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="5 days">
<meta name="author" content="TheOfficialVKr">
<meta itemprop="name" content="DL4Hut :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta itemprop="description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta itemprop="image" content="<?php echo $thumbux; ?>">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="DL4Hut :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta name="twitter:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="twitter:site" content="theofficialvkr">
<meta name="twitter:creator" content="itsmethevkr">
<meta name="twitter:image:src" content="http://dl4hut.xyz/stream.php?vkr=<?php echo $thumbux; ?>">
<meta property="og:title" content="DL4Hut :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
<meta property="og:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta property="og:image" content="<?php echo $thumbux; ?>">
<meta property="og:url" content="http://dl4hut.xyz/">
<meta property="og:site_name" content="DL4Hut :  Search Result For -  <?php echo $search; ?> :  Online All in One Video & Audio Downloader">
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
<style type="text/css">  html, body  {    font-family: "Gotu"  }  input  {    padding: 5px;    border-radius: 10px;    border-style: solid;    border-color: blue;    transition-duration: 0.5s;    width: 80%;  }  input:focus  {    border-color: skyblue;    transition-duration: 0.5s;  }
</style>
</head>
<body style="word-break: break-all;" class="bg-light">  <div class="text-center p-5">    <a href="<?php echo $domain; ?>/">  <img src="<?php echo $domain; ?>/img/logo.png" width="200px" height="90px"></a>  </div> 

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
<h2 style="word-break: break-all;">      
Result For <?php echo $search; ?>  
<?php if(!empty($titlea)){   echo '
<br>
<img src="'.$thumba.'" style="width:100%; height:340px;">    
<br> '.$titlea.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$ida.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleb)){    echo '  <br>
<img src="'.$thumbb.'" style="width:100%; height:340px;">    
<br>
'.$titleb.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idb.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlec)){    echo '  <br>
<img src="'.$thumbc.'" style="width:100%; height:340px;">    
<br>
'.$titlec.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idc.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titled)){    echo '  <br>
<img src="'.$thumbd.'" style="width:100%; height:340px;">    
<br>
'.$titled.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idd.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlee)){    echo '  <br>
<img src="'.$thumbe.'" style="width:100%; height:340px;">    
<br>
'.$titlee.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$ide.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlef)){    echo '  <br>
<img src="'.$thumbf.'" style="width:100%; height:340px;">    
<br>
'.$titlef.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idf.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleg)){    echo '  <br>
<img src="'.$thumbg.'" style="width:100%; height:340px;">    
<br>
'.$titleg.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idg.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleh)){    echo '  <br>
<img src="'.$thumbh.'" style="width:100%; height:340px;">    
<br>
'.$titleh.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idh.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlei)){    echo '  <br>
<img src="'.$thumbi.'" style="width:100%; height:340px;">    
<br>
'.$titlei.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idi.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlej)){    echo '  <br>
<img src="'.$thumbj.'" style="width:100%; height:340px;">    
<br>
'.$titlej.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idj.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlek)){    echo '  <br>
<img src="'.$thumbk.'" style="width:100%; height:340px;">    
<br>
'.$titlek.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idk.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlel)){    echo '  <br>
<img src="'.$thumbl.'" style="width:100%; height:340px;">    
<br>
'.$titlel.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idl.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlem)){    echo '  <br>
<img src="'.$thumbm.'" style="width:100%; height:340px;">    
<br>
'.$titlem.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idm.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlen)){    echo '  <br>
<img src="'.$thumbn.'" style="width:100%; height:340px;">    
<br>
'.$titlen.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idn.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleo)){    echo '  <br>
<img src="'.$thumbo.'" style="width:100%; height:340px;">    
<br>
'.$titleo.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$ido.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlep)){    echo '  <br>
<img src="'.$thumbp.'" style="width:100%; height:340px;">    
<br>
'.$titlep.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idp.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titleq)){    echo '  <br>
<img src="'.$thumbq.'" style="width:100%; height:340px;">    
<br>
'.$titleq.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idq.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titler)){    echo '  <br>
<img src="'.$thumbr.'" style="width:100%; height:340px;">    
<br>
'.$titler.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idr.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titles)){    echo '  <br>
<img src="'.$thumbs.'" style="width:100%; height:340px;">    
<br>
'.$titles.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$ids.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titlet)){    echo '  <br>
<img src="'.$thumbt.'" style="width:100%; height:340px;">    
<br>
'.$titlet.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idt.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  ';
} else echo '';   if(!empty($titleu)){    echo '  <br>
<img src="'.$thumbu.'" style="width:100%; height:340px;">    
<br>
'.$titleu.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idu.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>    
';
} else echo '';   if(!empty($titlev)){    echo '  <br>
<img src="'.$thumbv.'" style="width:100%; height:340px;">    
<br>
'.$titlev.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idv.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  
';
} else echo '';   if(!empty($titlew)){    echo '  <br>
<img src="'.$thumbw.'" style="width:100%; height:340px;">    
<br>
'.$titlew.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idw.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlex)){    echo '  <img src="'.$thumbx.'" style="width:100%; height:340px;">    
<br>
'.$titlex.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idx.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>  
';
} else echo '';   if(!empty($titley)){    echo '  <br>
<img src="'.$thumby.'" style="width:100%; height:340px;">    
<br>
'.$titley.'  <br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idy.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';   if(!empty($titlez)){    echo '
<br>
<img src="'.$thumbz.'" style="width:100%; height:340px;">    
<br>
'.$titlez.'
<br>
<a href="'.$domain.'/dl/yt.php/?vkr='.$idz.'">
<button style="width:100%;"  class="btn btn-success"> Download Now </button></a><br>
';
} else echo '';
?>
</h2>   <h1> How to Download </h1> <br>
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
   </div>  <br>
</div>  
<div class="bg-dark text-white" style="bottom: 0;width: 100%;padding:12px">Developed by <a target="_blank" href="https://www.instagram.com/theofficialvkr">Vijay Kumar</a> <span style="float: right;">Copyright &copy; <?php echo date("Y"); ?></span><br> .</div><script type="text/javascript">
        window.setInterval(function(){            if ($("input[name='vkr']").attr("placeholder") == "Video URL or Name") {                $("input[name='vkr']").attr("placeholder", "Video URL or Name");            }            else            {                $("input[name='vkr']").attr("placeholder", "Video URL or Name");            }        }, 3000);    </script>    
</body>
<style type="text/css">
img[src*="000webhost"][style],
body > div:nth-last-of-type(1)[style]{  opacity: 0 !important;  pointer-events:none !important;  width: 0px !important;  height: 0px !important;  visibility:hidden !important;  display:none !important;
}
img[src*="http://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;}
</style>
</html>
