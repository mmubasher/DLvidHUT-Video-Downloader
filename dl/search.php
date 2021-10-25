<!DOCTYPE html>
<html>
<head>    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="YzV0d01FWDdYY2sxU2Z5cGZmUWVoeUZPbEoraUJkYUhGUjRReitFVFFiZDBqdXVveWlGTWJibStLWU9pRCtUcjllUXFIL2piTk1ab0tWQlVOTzI2OGRXUFI4YTAvV0FyaVY4YS9aS1Zxa1dtSjVHZjc5Qk82Ky9aMTcyUnhSQlRwT1BYNU1maCs2MzcxUkdMVVo2ekZKOEg1UEczUDFycFVERUlxZjVSVXg3bHlXSTR6T2NaMk5sMzlHb25tK3B2Z0F2WldVdDZVdXg2OGdXdnk2RGlJcnhHRDg2WHJqcFFZOTNPMERST1dqUWtZSmZ2Zk5LY2N0dm9xY1RNTmdFSS85Y01vMzVuWmxRVlRiVUpXVXYraW5TWHI5N3RmenI1VnNRSkdBRVVGWHBGRkdnaWtRM1NCdFNIa0c2OU4wV2Q1ZGQvckx6Y0RRY0lQY2dsY2JLcFhETUlrcFpYY0VETnJKWnJpMjVSTGZYMkc4N2lXUEtDY2N0bVY5QUR3MTNCK0JLUFdWM3NJS3Nrc2dzRS8yUUtsb3QxZDAzQVR1UTNRYmcvaDF4cUg3SVZkdytIT1NDcG1BTlBJeHZmdDNHYUJUR2hRNlBhSkp1b0VvUkFQRDZoQVR4WWFIaFEyT1M5NWdCRDhMNEtkM0NMMXg4cm81TlF5TjQ1eHNLTGYrOHptS3QybGt1aHlVVUpaRHRMUS9vZjcvVXI4Y1l5RS81U0dDRnFFaExoRjJSczRHMjFEQXQ2SE0zMkdncjNtckpNRlc5YS9BajRpakxOQUpNN0R1cFc5UllvbzlXU0gydzBaZ2VjSXo4ZWVGYjZsS0FWT0JpbnVCME11OUpFTEVDdzROeUZvU3BPclhXaTVWUFk1VW1ac1ZRTnhraWtXQzBWWGtXODd0OVorMkh0MWNQdWo1TDRIQXRKYmRkNExIRWV2NFNMQ1oweUp2aGdxU25IT0xsdTdGeEx0MnYzOW9mbUlqQUo5d3Y0cDFSVDhBcWZGUTNCT1loZWNlZENSeU9PQWhmaEd3K085dHBIWHVETXJ5QlF4a0VtcXJQb1dXbFM3ZDJZdW1IY2hHT2xFNVFsN2g0ZUhCcGtXdGlKdHJiY3dmV0NDZENGcjFFVCs0TUxibWV1bFpWWDBZMVNqZWtOZTBZVWlERWx0YUpKd3NmMXlMelhCc3VJSHZjSkVOa3MzMGtXeDlaenNPTlFwN1M4VnJZWU1JMmVFUkliSldTWURWYTByS0xBb1NEVzA2WTVWY3NIOXJIQmtkY0pDWlV1TG9aeFVSSGJ0NTZtRDRIVkxZT1ZqaTFxOUV1TVVMeFQyRUNDVXJubnQ4N2x2Q1lyT3ZFU1pOKzdPTC8yNUFVaDQxeVlJN3p3cEtzbXhkWm1KZGhDTUdtbUU5Slg4SitVTXcvVnZxbnpUb2lueFJWSTJkZFI4czVnNTRqcTMvOThTR0dFMGlBRXlzeU9kSGp1N0xTejNZNjdJeVBGZFF5YzNwTGFjc3VlYUJlYVphUEtBL1NRbmVZRXk1cDJPb0hsRlZiYW52em1LanMvLyt6MFNYMVhHYTJ0N2NyTkZKcTRlRWcyMHU5eDZxSVN5MUU5Vzh2OGVoNHZ3MFdEOFVmeC9reXVZdktyZUFmdTFHMFZzVXIvTXdDanNrbXh4K3NKd3lHazNNcWhvQzdodE9lNmFVcVQzVCtmRDBlMzYyb0gwOHhqWFlnbFNrWHZySWF1UUplZk8vTFFnbHduaXlyTndpZWd0d0lyUFN6OEpwYmIxQldLTVl0aDBKVHBtRHFMNVo3cENOaHlyL1Jhdnl6bmtWeDRqNlRGTzJ6czduQ1ZDSklOTnZrZXZqQ0tMSFNBTGxKTjM3Vk9qWENIZ1Q5Y3VYdkNSQnJCU1JXVHg2Kzhsa3dzaXdhK3ZNSGxiZ3BIUWk4ZVpSOFV0UkhBNFRoaUJrK3RDd3VCRmE3RTdKeHBkTGxOSjE5NjMrektnb3RRSUNsTDFRVGd2OGFLLzVMRUphK3RZdWFFcmVJMmdKek9KK0JLazU2bnhDNi9BQVJGNXRIS0xSb3p1QkN2RXMvVnhRRjNLbmZ1a3ZhQTl6UFBaVnR4ODJMMVovZE1FcG4ybDVpdGUvSXFqcmIxeElHZmlQYStEZmRjTWk5a0IzdTNIUVpIWEMzSCszRGxvcGZvRU9qeDF3NzRpSkkwNEtzYjJGQ1dzWHIrMC9CZ0twbjFmc1pmT2U3V0NSY3pua1I2Tk1HZTZ3VjF2NVVWbDdnbm4wWFRnemZxNUdYOGNySkZvYkxUTDVBeTU3QWduSkhXQzZUL0FudTgrMXZhSUhNTW1PNzlpUEVHSXBObVpJc2g4RE0rMFlnblNnRHFrSHZ6cldKSWd3RzN2b0JuZEVpaTlONUxLZ1Mvbk1aN3hSV1ZZVFRnU1E1cDBYaVBiTFhqQ3ByYnpFa1dIQjdZengvWG5ZYXZRcGdMMklwbHVxMXhXMlFTOEYxa3R0UFFkdGVaaHA2VFdDSjN3Q2FNQnN6ckR3a1pjaCt1ZEdhVmtKalVZTUJheG1jeXVjTTVmTlVWajhQSFh0WC9ya04vT3l1Z0ZjVmpTRDQzUEhCaGtwQXZTREFnejFVbFNDcmh0RlFUdTJzZ3BVSHBuY21RWHA0TUQ0UVpuNElmTEdtNWo2Rms4dGNJRE9VcWVuTnVjWWpZWGNOZVVCMWxDWVNQRlF6elgyTkU1TkJpbS91UXdVSWtBQXFFSTRUWlB2L2dvdEpiaTdpd0ZGYytlVjFCMEFQWUJidVNFdDFEU25sMGtxN216NXluMXdZbGU0VHJhczJBazU3dnY4MUZZUjZGZ0hiaGQ0TW81cHBhdzdxc0NCMyt6N2k4TzQwakNuR0pNVDUrZlVpTmJPdkZ2T0NBTVpTZk5kMzZRLzJzMGg2RVh2UmZIMTQvUnhIN2VnenlpQk1iWUk0aVB3ZFFVOUdSaVpCL1JiM3BIYmx1VC8yWnlHZlgrRVVZNTFWS3MxQk1iSCtScytYS3J2ejFGV3E0VXVNRTB4ZUNJZXJSTCsxdzIyMzF6T2FNT211bTJURnM1Yy9iTFJFOXBtMDhmaE02QWdkNEhUVnA3VlpvOGcwaWVnNjd2QnNlUUlQdkhyQWt1dW5mZkNueTNNNUZkc3VBRDRqTm9icXI3MHNvTGtYbGk5cUM2SG9qdmo3RXVlMDFncWRkc25QbjdOUUxJaVJMVjFnaE4wYzJRVC9SSnB3bWg3UnlaQlFzUDI1MzRJYTBHeUEwYnIzakpFcXc1UTQvaW1GV0s2WnJzSHZnREQ5dHVSaTdFUHY3U1J0c05sNmdmR2M2SkdOVXhXWjlHQzNzQkxCRDJHT2VtQ1VoQmpZWnhjRzZJMXUzcDVMd243QWtSQjdCNm81aEZUK0JjTXo3bUJtdG5ET1lXMHF2V2VDVHowKzRFcU95YUhuQlFwQXQzUVJoSElQbkNxelVlb3ZvL3pSaCs3MWZVRW12bS9ZRGs2dldKbExtRWpRc2hLOGlKMTViWk9NQTNTMXRHT3o3Z1ZnUGtxOU91ZmpKQXltVmZJcnI1NUhkYVQvL09qZEFwcXg2TmRRZ3NIODllMDN2Vlp3SjhCOFhPK0VrUFJIdXJkRlVzV3BRL0RlUmdKRzBpRmc1aStjaCsxK0VORnQrdnhJSEN2RWFFSXlBSDBLSGxWU0phcEZXVmVMZldlOVd5dHZFc0huWElEWHQ3b28xMWc5RXYvYlFDV3Y4VWtvSm1aQjhtYXZSWU5aN3lUcjJnMXllcEl6cUtyMU51RC9SR2laVXNpcXBKaDlQSVJ2ek9NbTYwU08zRGdTNVRMMGxCcmJSeUg0MElyTFNuNWt2QTNHN3lEaGZmLytBam14Mm40d3V6K2dCc1pVQ1VmRVZHVnFEUTl5Z0dSYUwwdlZiVzc5d2FhRUVRMDVKVTFIR2NPbWxTUHhZRVZUQ3BmUGpxSjI1R2g2cW1ITFdzb1lKbzVUelN1ejM0M09GaGc2Y2djaVc4dDhaM1VBV001U1ZHWlBtTnRBWFBuTWhTRWZGQmxra1dUbGw1Smg2aUpjYWZoYnlvL1BhZGhTekgxR1F0R28zdlYzTVprbnVtcXYzdFFPUFc5RU56VFBjRTJCbGpJQVI1Q3orK2R1dFpCRDJBZFN0dk80alBMb1IyNnY0aENGNEw4SG03SDhZMlV6dGRyOFpQTXBqMklidHNVUHdXWlVDSjl3bTNYSEloNEFtS3daZkxza01pUUNmRVJWZmpoQkdqMVBtRXFSY3ZucUxPUkdCR3RlS1RjQ3VnN1p2c3hvZHNpZXV4ekdVQjA5cVJ3V1hDWnRqNTA3SngwV3k3S3lZeDNkTnFlNysyRmxERC9uRlJobFR1dFF2eGxzT0gveDFwMEd5bERFc2FiWVhVTGVHL1Fwek1ReDBxWFNXcW55aTRLY2NFV1E3L0RoUC9tYU5TT1VrSnp5c3B2Y3g2M2pmVXhEWFYzSVNLZHBDT3dpZTVkQTlkNTlZRWxuL1ZUM3RoN1dYaHVIQVJ6VjFWOTIzbTBBejNmdFhuTWpGWWwrQktnQW82TllWNkRBdjkySFZSY3RYeEVjcFQvTTJiUW5kNnpKY1BFd3JUVXV1USs1dkcxb2tudUN3T2hmR0xUbFBDUmFjN0hOeDVLaGwwU0lYSFNXayt3S3BsOElJRXdLdTVVQXhzRndIZFZvRDlnVS9LTEx1dnFiaVBEanZ6dmNmeG84RXEwRWEwb1hUaGFMMk5XZVFTQmgxdUZaWklSNThZYTRQVGU5NmxXeDJ6Y0VCN3BRR1l5MG9xSXM2aDlHVDJMa1NHSHJOS2dIMFNhVGtsSnlyMU9MOG1DUDJKNmlhSk9GMHlDNm9yeklxUExKVnlkcUFDRUxFeXVxb2xvQ1RmeE81NkJodnFHV1VTSXdEc0FiL2JKdFdpdmVXSmVxUzdOaTdTRzhjWWQyNEIzQlZKVFZDVnJLYS9CUkRDeHlnSXNvdnhWQ3RRbmlUU2liWWJRdmVKS09YMFRFMTBUZ3MzTkRHc1RLZWp5M0V5Ti9TaXB5cmxGcE9DcGlBWnpyNVBHanhGeHkvOUhIUHhyOElUR2ZVUndHOVFzZmFqZ2VTV3h1QUh5RE9aMDBJYmxXL3V5QUNVTUhPaTJpVXRBYkV6NjVldkE2SEloOGd3eFlTWTlyWjdTbDYxVmorVmxLUEZPUGFEaWxrTzNLR2s0NXEzRXhDRXNOM0J4L3Bkd1BOOVk2Y1JGZUJrZ2RqV2JOY3hPWjhJc1RvSUExTnZUVTBpMG40RzZUN285aWZjaERFOHpiNlBLVm52WTlxUzc1akorcEkxT1dZWjRoWSsvS2pWVW9DbkRwNVltYyt0blFwQVdPTmdwa3g0dHFiUUFOaGpoekdJa3BhajJZR1FiaUZ5YVlCWjFIQTNHNk81ZWx1dllPdTFxdm1VWE9WUEp2djE1RGxqWjZkRzYxeXQwTS9CWFRyMFZTTWRGZ2dpSlFTQzltWFJkRnREYXRZVnI3M2NaUEdtcHdTcTJrMlN6cEZMSkdLSTNFbFExUnhOZXNSVzlTa3ErNmdjS2p2QUIzTFdaSXFLaFhZTkVXRkhmU1FKN3hMUm5TcXNNR3lTUXVEL0RSQVc5ckkyU2toczdhTzkyZTdnVlhtUENCWVh0bHFLSE1na1R5RVVFWUhFQm9HeUxrV2cwNElnd1lkemoxbTF4ckNoY0R4UjdZbndueWJqRW5NNDhBVFUxQmVEZUVPbiswcmVweGllK0g5ZmExdm5HUzV5czc4TjMrcTV3eWFYOTNDT3J2VW41TTdueEwvMzNacyt3UnhXVFdlbHhKdDFJdGxNY1hHMEttSlFSVW43NWxXOGs2QnE0akVFS0hidGVXa2kyeFlZc2VITVArWGFYdXBtSFFjK1lZL3VqTUFPcnZXVUdlMnN3WnZHNGQ3TzltUEY5dTZDTkppdVUwdXlkYVN6QVNWRXdndEV5bFcxd2xWbWcrdW5WR0FzYWttUnFadk90Ryt0T3lpRnE5b3BxZkNVUWN3ZFhCcEdLMEFiWDcvdWk0OHkvRnRoZTgxR0lBaWFUT0JpMzljditVNksxcDRQbFk2azMxVXUxcTY4SDNNUlRGbTVUK0J0bHo5VE1RelBkYk1LUWN5UHBIQ2UwOWcxWFRKVGE1RjBkS2tGUnVwWmhhT3dWdmJFYi9EWTllSXBzMGRvZWdMRFB1VXVqZnZZMUtkSFVVY2ZTRHFsdTJqV3FxeWRGUnJZRFI3REs3Mk5QU3o0L1JLL1ErTktGMmhzaGtIUnhYM0dGeHFxRHhEcDFzbHoxRStoS2o2bTdsVXU1VHNLb3NkK20vQmlIU1Q1UFdDNFpCZEh5Z0k0L0FhQW00YmQzZjZHdEtuOHRhaWJIenQrMzQxNi9VVlpvVndPMlRoUkhoUFdLemJhNDRkaXV2TVBMVmdCQ2EzWGo5ZUJ6SFphVHpVRTdwS2R6NUZGT25ycXJBbkVYR1lrUjlGN0JrVU5GczhJb29JUk9XcHc4emRzYkZVVGVyaU9ZQ0hEeFhENnFWS1YxT1k3S0cycFVBSnBRSi9seVlCYWxiSVZ1NnprMHgxS3hjd0Y5Y0lHUTd1THp5Z3JGblQwZTBEZTBJRFhKOFNMWXZZMWFkRlFLQUVWRDE5cGl3U0V2NVVxN2sxdURxN0h4blhhMStpR28yaUVERkdtV3NsQzNhREtKTVBwSk9ocGlkT01zMUMyT1M5Nnp6ODU3dTJ4cHBRbTBvcFozR2pIcDVCSmJYY3MzNjVFdU8rc01RUmxza0JIeVlYNWd0R0dDdmx5TXd3VlVDQlpBT2phbGJGcHBCdzFVVWF1WGk0aXliSVdoVUxLaWpkVDJhaCtOcTRsWldhTUVVaWtJR3Z2R0VkZWZHWUNaUzB1SWNXaHNQdktuR004TTdRUFFJVWxJMmwwN3ZyR21mdlhNMkwrUXVuRVY2UEtNS293VkFKV0tDM3Z3eHQxUGVKdGZxd3dLdE1EbW53R0xCNStIUWhWRVp3TytqT3FYRXhIV1J5L2pMRjhMRkVnTnA0Z3pOcktnenA0TzAwZDBlb3FabVgrSmd1TmlPcStUWFJDcGUxNXJyLzdib0tKMS9wWGV0cVN0WWZnTzRNQnZZUVBOdXF5WllE";eval(e7061($e7091)); 
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
