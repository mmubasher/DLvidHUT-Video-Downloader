<!DOCTYPE html>
<html>
<head>
    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwM0xacWRLNWNyNGVobGQ1amJEeUFGOFc1VTkyb0l1Tko5bW1Bb0hrTnNIN0JRck9aTTVPTEJrNjVPV2h6bzIvZTdRbHA4Q2o3Vjk5MC96Yzl0b2o4S1FrK2tnSUQvOUJEdHVSczlSN0NRUGU4RWZwUFVEcUxVcnduMUpjMm9uVVV0dmZLcVZCTEtIbTNsdTFqNTVtUm50V2t3WjNaWE1FTWk4ak1vdWFDMDkxb3lVMGpvR3pLM2RLSmtFbFk1T2REMEFuSVlwYnYyMUNtb3VkbWNPKzdwQnk0NDhNcWJERmRoMmxIRUIxWDIxaEhINjgrNzd0TVN2QmNwdFRTRFhqcnBJek1mWGlIbUxIMUZZTWlGVml4Q2UzdGY0RFR6SDlGOFgxWFI5dGVOZkJDbnpqRUFucytRYkU4aVJFOXc5MGRKVDVnb1FLcW15MDdnN3U0aTJBY1RRV0lTNVRVMEE5NVB4N1NxY3BZODcrS1hlTzFiTzI5bXN4QnB4a0orZXY4SDRYSmYxS0grQUZuci84MXdUTXIzQk1LLzZvWlBST3oybHpqdzE4VkNlVzBVRkU5bUtITEdqSzAzaHJiWnpLVWQ3NC80TEc2c3dqOG1WaEJnQWkyZDV2WEQvUnRVSE1QR1FLeWtBM3lnTkhEeUpmSThlWE5Kc0h0VEd5anEyZmJkNzdWR1A3bm1yd3FzQm9FbTRWeHlUSzhGVmdDb1FITTM2cGcxV05BNjJ3d3pYVFVqNXRNV2RwYlFUV2dQM0xacjRuNW41aUQxNGppRUpYeUxEM3pSY2lFeENiS0RQVnlrMmJDTGNlYWZMUWU0b1lyTFpsNWcrYStZdVZnQ2t3aDV2YUVRR3FpT0hUYkpWRW5WeVR0TkpDQTg1YmtqNUJrRlV5Ri9mbzQ2OU9YckdIWnZFZWVpTGRscDlFWVp3ZDN3aUNqMnpYRm9IM1U0VTNkTEgwamtFQ0c0TFZqS3BNQ29XYlBGYmpNMGVPQ1Z5RWVJdzBwOTdBVFNFOGxNZ0FkemN6dzNwcDZPUXdyZ05JWVgvV3VzNzJHTUdSQUxwTnJHQ2wwUitNeG5CRVA3Ti91WlpFd3htMTVYb0V4Nlp4VW9ZUEViSWpHTWt1UmpXZFBuVTV3RHM4Y21qNnNVajNjYk40cFF5QkovQnJObkQyMVNGb3lDVFl5UUNJTFVQSlVXeVFiUGEwU0dONjNXTlNhK3RGYUN1NzR1THRHYW5lMk9KNU9xS3BDRnVSVGZzejIveGNSZnpXcnZTR2Z0UFRaemJMczlidHh5TkI2Y1YyOXgyMnYwUTM5cjBjRWRNSVlWdVBhNEtpaGc0Z2FxZnF6bkxyL0RTN3VsbC9qbTVSaTVQeXQ1MGllaWwwdUJpS2J1Um1PWDAzVmhNT1NEc3kvc3VHVXZSenJ4N28vbTZGeW9XemR1WXZjNGZNVnMzL0ZLU1lBRmE4cmMxaG9vUXJTMHJuN2h5SEY3OGpiRGFJdUNtL0x2eiszbGE2RnlmbUJXTHJmWUFlQi9Ldndncnc2ODIyZkRCZ0FROUU4SUNlVUZucEtiOEtlTWY1Z3J0ZlZNNzZ2MkNCbFdxNjh5RjJQOEkvaTNndmhFZ0Y1cC9qakZjMzREYWtmMTM1L1M2dHZUL3ptM2tKa3FXNjhmbE5Za2tXWTNPMFBoZkhXalFld3NNK1gybVNaeVJjZXY2V1JqYURuVFprcEpac3o0R3c4UEx5QjhEVTVZajlQL0pqc25aNUE4K3Z3c2FDbG1PK0hrTkVyRVlHOU5SUDR1T0NKNk43YnE5OXBDVC83bUtoTTcxaEcwbzBLQ1lvVU5CRnRrVFRxbmd4cjZ3cjVlWVUvNG5VdGkvTWdsSHNXMUZ1TFpUenY5QUJ3Rkx4WlhPRHhaVnFwSFFhUGp2UWtUT0YzZUFJcm5mYjRKSnF2dWhIWTdXdm1TRkZFV3R0b1ZDVFhUYVYxekEycEtScnlCdFg5VjJTQzNFWG84N2xOQ1E5TkJXdHBPNFhqcjJTMUN3SXVJRXM1ZXI4U0Z2ZktHQ1owTzRtekRzSVdiYUZlQkpIWmUyZXc1aXhsZzIyQ3RUUkcxaHUwcDhtQ1FJbnhjaVhzQTd5RGJWTVhZQVRveFQ3dngzdHk0MnNvWnhRbUtuOGphcGN1R3U4YmkrU0RMS1hMWEg1UFljWGhXVDRpUnpIKy9teW94QnR6TUNGWTV5Vkxrd1hncGNSbWx6dVZlU3FVZHVjb3hMNDF3Q1pJb3NXbUpiYTBSZzJNZnl4bWxVcDl4WFI1K3NJSFZ2d1dUeE9DQTNBbkl2aU9PeS9hZFoySFVYSVY2NC9JZHVSRWRoNmUwZTFOa2NCV2JnZS95NTdpWCt1dUZJV1Q1U1pBYXEvMHNMQkg5dGY3bFdtNUl5azgwUUJqdnNHWGVTZHJxaWtRa1RZRkdKYnQyVWVCVEdWOU80UVl2TWtNVTdMTWdjcVRHaFp3c0xHVTh1bWpHcE9meTJZUFJlbXpMR28rNnRZZ2x2cjNtclh3ZEVSdEF2UWxpNmVUb3JVQ01MZWpOMk9iMlo2M2tZSmVVOGpoeFZya0NBTUFHeHdOcExuZnR1ZzhnTUROODRyTnhDeGRzOUtUbDdvbTZ4KzZVOU9PYzlJRWo5VjZWK2kyeEoxSW9rRUFqZWVZaGxLWXVGbmFwOEhOMlh1WW1uMnFyREgrd0NNeHVORzFUNy9VRS8zaWZkQXhJY1RxKzV2d3EwbkFYRGNzV0VkMW15SVJRbmZCQ1JGRitCdTZxZWV0SE9JcDhEeUdiSXYxYmZmUUNSa01kalpqZG5sYTdmTXUvcU9SbjFIN1JGYWZya0VxYU9zUEtIUkdqV0d2WXpvUXdobEF4MmtVTFBpTHltVVNUbURZbmVFOUlRSDdSRnlGNS9mSnUzQmRWMzFTU1Y4L2tFbFRITkpYbHo0akVjSUthbTJkWisvUmtyU0RzWlFmUWQyZ25temJkT0doR09ROU9tZHBrejEzTmZiNm9COThRTWt0VVRMVXc3MjVZUThXOFBMcitwczRlU1RvVUpuWmJKUHpLOEt1Y1dTSTJDeWFjUEoyM1NJTUJ1YW0zL2JCUjFYRjZKcW96T2VBbkhtTVgxK252c010V2dNRE1DMnFvbzd2ejkwb3VIRHIzTUk1OWJNOW93WUFGM2R3a09vM2FUVGxMQmw4ZlhaUDM3cW1leGRJVStuQWNYOWkzcWRoaVU5Mkk2bG9idzdxeXhuMHF3Y3hoWEhmOGFjN09xZEtkbTg4VFRSMUpnOTNlalNHYUNGQzhGbStjdWthUlE2eVNGNFdjNDFtOGx2Zmc4UkZVMkJMNGVUM1l3bVJWblBEWkJvaTZBY1FmUzRWR21SdHBkQ1RrMUZpbmU4blIxcVhNZEFwYnV6alh1eDFlV1h3Q3AzYlg3QkNPSFBxeUdjRnFHbXdPRnZicDBVRXljbjFWenJTWEtTUS9SN0RBb2hHN3ArZlptamxBOHB3RWQvSUY0UEIvc0tMdElTMFRVZnAvWWVDaDRiYmgzWHdvMVVMYi9iOUQ5OGpTaldRbzUraENwTmhrRnU1WWkyY2pVNEZaenFIendWZnJlZEcwa25DbUx3WkZaRklCcklISFptNVdab0VjK05xMjhIQ3MrOTFxTys0WHdNRmVYUGRiY0UvcXNZSjhjbDduNC9OWFZuMk1ZTEh3OEhoQVI3ekZzV0kwUjFobXFRWFMwTUNDODc1eDU5N0NsN0ZFR2YxS1V4M2xGVE9kMGpIcStkYnlMZVc5Wmp3c3o4azQ1c0puTEZuejcvTGo2U0puaHczRHM4dlk4Y25vblVoK0VoYlN1Ui9ySHY2QlRyU0lxbW5FZkdJWjgrNjdJTGh3TmZpT2hIRjhsdGEyL0l2ODFRbHMrMGJwUXVJTTU2Z0NIZlBZUlZEcUQ1dHJMMVZGSVVOWDZMSis0a0hFclRKZWgrUVYrODR0SExRbEJRTDdyWEJaSk5NY1oxeGFLcFUwanViN3BLbjhJTVhXMEFqZ3lvNVVpb1VSWGNoeFR4NU1FVTNRYzlncUJGaTNMR2gvSmRQUlhHblEyVGJzdXJlSlJTcjVrRlBaUUNHL2hJbTNKMTFEODNXdXlzUlM3VXlhcC9ldzNvZzV2dUN6TDNiS2lXMGtyY25QaVgxUjFuVWltNUNRTFFnUHVNK1I5RUVhUVJwbWxHVFZqbUF5QUVYV1JIWk1zbStnODJ4N0JQS2RUZTJtZlNYWjlhdysrRHh3WVppcFE2UURkZW9qQWhMMU1vNHRVcU9Mdzg4MDJ0MDl6Y0xsaG1od0plbXg4NDZmOXpIcmMxaWoxVEs0NnRJUkhFOHlTMEVEUEZ1dTlyNmZpN3F6RVZmVTU1d2c5bFF0UlcwK3BBVEpPYnJsTjFHTTFRS3FxQkl5ZDhoWTFwKzlCWnU1RDBkZnFSQzlPVi9tUFV0c1haMVhrRjV1VlEyUWFzNUQvRHNqM1ZnZm5zbWk3ZXdreDRDcWtJODEvWE1MRmRqcWFnZHhCRldOSXNGT0xxb2NXR2hvM0cybnUyaFV3OXBZdUtXdThlVUI0bmE1eEhSNFF2VUYxcnJ2b2F5RmZwZnFQRmtNTXhaZDVXRis2T08za25pT25hMGV1L1p3SEZNWmV3MXRkdUF0VDc4UDlUeWJyYXl1bVYvdVJBdTNEZzd5RWZyNkFVV29rRmhobU1BaEEzZnpmOTBsNHFzSlNvVk45YWsyV2lEbWlxN3hTSjEzbDVvbTE0c3ZMaTRINElycDJKQlZNWFlrckQrSm05Y3l2K2VvU2hWVDZzcEZkc1JqbThMTG95WXNoRUNqVkJybjh6SElXZWsrckl5Zk01VHk4WVg3ZnRQcWk0Z0dWQThyUUROTXJuUTltZlhKeHBrSWhDYk0vWHRCMW9FbmEzVDVJZkkyNUo4T3pTTW41Z2czK0RBQmxBTjg5N1lhZnViYjNMUkcyWFZ3VnFRbmUzZWQ2U0pjN05WS1pneWZ0WWZVUDNjT240RU9aeWJqczcyMWxPRVZhcENRSFpycElZeTBXL2JtT3k0WVE0TitwbWx1Q080YVQ4WGhPN1NnVlVpeE9qMURRWnJON1JUVDNPbVdsRGQ2Vm9WVjJtV09UeDMzeEdpM2wzTFdQeUp3aWdUZ1NWdFRlYzdpN2pZa2RyUndlRnZKUnhVc0V0ZGJGVTRRREY0ZHNyYVpOamFiYnR2R1VwMTYrTVVjOEFESE1sbTliQ1RXSGFXeWh0eUVIdGNST2h4VFZnY1hSL2VOVmZheTI0VGpJb0NNcm1mQndFa1pORzdqRXVROTYrZitkem5WbGxrNWQ2NjN5amsyREsxUEhvWXh0MmpqaW9mc0c5dXA1MHVpNGFJTitTckFzbXZsckZDbDlnekFDRk5rUFhEZHhyMFVNVDROUGw4QnI5bmN2ZGN0UnpZUWEzUHBibG5ZWEJaWlkvcDN2YXVZUE1lNlZxQmlDTjMyU1M3b2l3ZGtoL1Zha2lXOGpJZVZpK3NzZGFoZXI3dXZMdE01MUlSbEJYRFpBdnVXKzZFNFd4SjVqREtnVmRLLytvLzM3bVBZTEsvaDRTdjZZbVlEUS9DL1hQWU1RVFc1Vyt4Z3hhNkRQWEM4TFUySkJRbDliUXBwd2t3R3dibFh4QVhrTHhtTEwwbm5YNVFTMUpaNXNlOEVrMTlJQlhMV04yc0RYM3ptVjh2ZnhHZEJWaXV1VWtVZkJIaG9jaG9aOWFOaWVUM284UENTaldkUGNmV0Y5R01kNEVRbFhMS3gxeHNHeXR0dU5leFVvRTBpc2xJSHRWbzVZRHl0V1RzUWVHMTRnTFBpSEFqRzFCV0RBUHZIbklLT2w0Skp5S2RFRlV0K1hCYzFrM0VFNTZoeHdQMFVnWFVDdHlJQ1ExWklEbUJEbDVrYzZ2WHZMbGd5clJuWmI0TTk2YWt6bm5wRHhGV0xqQm9rUHBrTHJPWWUwQ1FBNDRIMzFNRWIzbHh6ZVMrNDNUTWRaZ2dLRVFMSm1YNURJWnpTMllhV255VVhPbkNtaUdhTWZ4L1gzL2poY0prVDZqSWVtMWxibDdKbUVoYlZWS1lrRmpmVWxaTHB5SCtsOVhOTmhFZmFuaUxCNkFUNThXV0pXL1g2SkIzZGRFczZCdTQ4Ri9OT3VpeWx4NlhwMVhsS0laS3pvTkY5cHI0YVZ6OGZwajVWVTFyZnpsSFl4b2V1WTRJT3dTNFRZcDhWRU9Wd0RzMGVGajNOQWdBUlRDMlhPSjZRSVlqbTBwQW45SFlOZThWWmFvVlZvRkhXQTlpR3lvcGZjT21BYVFqRGdObXdLc3lmNG5BczB4cmJ2WDNvYTA0Y0pqQklFYzZiWHNJUVFRVVp1U2dRWjc0Vjl2TjVicXlha1pQRFBNN3JXdy9Pa05od3JYTWxETldVTUs5WnV1cWt0VzZORVByeGh0YmxqeWVkNW1tQkdLcmhBcG1WaUFZYkMxTU4zWURoZFpiczNqYW9qUjgrdVdlS3ViMk52Q3ZUV1VNWkdqWUVlaDNyMFRJRWg3ajNPMEM2U1dYblc1UmJlS1JwaUFDb0pYWUhDVUNlMlhsemxRQnNKbXluRjc3REFPN0pVRGtQTG5vVUc1OWtKQWdGenowU0lNendJdHNXK3d2aTJZV1ZtYUpsS1FrUWorUzJwL2llYkt5emRSZlpkckdnWmRhaDlnWG9aWExSK01DK3dESEFqcFFFelVxVG1RYktJQ3J0dSttL1lzeVA0c2dDb0tPM01YSlNEL2NZQVNXM3AxMm1XK3VEcmlVYjducHpDdlJpWWVWeVY5UXY3d2RvTkF1OEZBWUZZQThtTHB5UjFCMCtJRStSVkR0c1ArLzg0SmR6Y0Rqcm4xWnBjbmY2dGdTMFg3NXNweDF0MHBWaHV0dXhUY2k1OEJ3aEJLT3ZvR1UxcHRFY2F0SGkwdVcyZjMrUnpnS0FiRHZXV29iMHo3aEtXOHNDbDlOb09nOGRWYVczQ2U2VTVVVUlxVG02SkZtZTVocnZnS1hlblJ4R1NHVmM5cmpBV2Y4NXdYQzRtbVNvcFp1bGYrZ3ByMVVPemtTOTJyMDRKeHc5SXRhcTIxNTEyYW00UUc0UUdmZmh6cGNQanVnWHV6bEM4UWlXS0lFN2N1bVdqNndweE9ueVYyOWllSWlKc2xjRTNZL0ozWEwxMWtEQmdjY0J6OElrcWFHVFpYM1ZReGhNQW15b3cydjFBWWE1cGFRVUtma0lJNEdkSVJ0NW11UFR5cFY2S2k1ekhJN2RWbitCcjVuNWpPKzluSWhydjZwOTJpNmo0T0tiUUt4YWlXRElTSHZJK0gxeU5tZytaVVRoUWVqV1FEeW1RTCtRKzdqZ0F5NFJBYlRlaERqdzJKQlRnNTRmTm1aSDI2eGZjemdhUEdmdVk5dFNhNzBHa3BSbCtORGFIRGt1VDdOTVlUakJ1ajA4dThCeGhzejFwbzhOcGxMaG1aQ0VjaDQyUFdLbmFGY3AvSW94R3R2YVlhOFQvSStVdXdmdTFROStwYnlqTnJwSUwrRnBWMjA0RHZ3RWhXa1pvUlVMTk0weFBDQng1RkVwR2RXbnpibW4zaEprQktOUVRUMitBSWd2OHZWZlphaUVtVEF5T1hQbHNWbTVmQXd4OTNXbjY0TG1GZ1VtUEltQTk0S2Z5djd0bmt2Z2FJcVJBQ3gvYnowS1dxY2hyWnErZXFjYnBwOWE1L2ttOTViS0p6aFpSdTdwUFRXeXZZYWxERGI2V2NiUm5ZQnNjTHJoVGtaMDJtUTFHOTJqTVR1WkdBbmhETEZLZnIwa1c3eURTSVFOaVduejYrYjgxakhnaVRieXZabjZtZ3JrOFdPcmU4TW1uRVFDUzY5K1J0MHVkblBrazBQYmhJTzkzeUk5T1lEZVRpQmhqSDNlZUUxak9nQVNGWm9kNDRScWU3c1ZsVDZjbEUrcnJqZUZHNHFCT2J1SDZoTkxwL0Rxa0hhNlVnb0pEeHlONXRXS3JvZDdYbnQzNm1TT3M2R2xyTVRLdjYwOUN5VTVHQ0dDcVVESFM3ZGF2cG02U2lzMWlzTUFpcUtldk85OENRK1F0cXA1Qm5OK3QvQXU3ZUNJV0doOUtwUXNuaHNjUUM3ekJ4eVhyd08xQTZMSTRRNGNOSE5aTmRkMDRqTnIrL05rV2ZqcGRoQXJmc1pwRDdlOCtjYSswQWljd3IvQnRzYklmRzd0Z1gvSDRqWndQcG04endkdWRIU2RpVFRwbnUwaFlLZHg0d2Jud0FQRHdJUEV3YUJ6UllwUlRyN0FHWHdQbGJnZ05oVSswazZTQXdXWUhhWVZWT2lBdjk4TDc5Ui9LemhRUXdJU2crK2hmTVdMVHdUMEF0czVhT09ZVW9SeHJJdnpGMDQwb1krMG1Wa2NRMUhmVm0xOHl1ekxtbFZwU0U2U1c3UTJrandTVlpOQitzRW9EMkh0NEQ3WG13QmV2NXBTMmZzRFNnUTRzWHRlMlYvaTZRdXBVNU9kREQ5Q0pXYTg1ZUV2VGxOcW94VjV2ZENxZUprWjR4Y3JqSWxOVjg4TmJ2bU5FWm5ZampISXZNQnZoTURxMjVQbkhldUw4M2NodG52djFwWHJ2YVYwSm5sVERZSFZMU0xCWm5uYkhKK2VaMEhneWxDTTZvZmRsQXVTTE9Oa0JPMjNwUXltdkVTZEdhU09XbVZZUnVyRDNCL0NSbDFKWDBwRFpueGo5cDdEVFlwRnlEZjRxVnVaa3BnT0dSVzQzTEpldU5hVWs3M252NWRjWlJzWlVjUUxqRWlycm0yUHAyV1JYbUh3bkg5OUZnNG9iV0kvQStqT1Y3b3pibThCVjV1VmkvamlRelZVRGhHMnZueFBPY2pvVFYvdm5WQXJLak44UmlxNjBUdFBwVHZUaHpadUh4YnJ2OEN0bWxpVkVEcm00THVqVmp5UHhjbEVsTGpUbk5ySDBnYmZKZElOL0ZNT3FtSmc3T1BFd24wTTV5SVlSYTZEVUdNd3JKZXp0YXJ1YkFhb2hmcUhQQ1BJQVZON0dSeG1nYmlHK1pqNDBXR21yOGFSRmUxamQ2dWl1ZFBBMHNzUXRDWlNlcmdrVkhPMFA1TzlGWUNvbFR1N3RRRE1KL3dLRkRLREJVeit5cjVCMU1nQWNxMVNpcUNvSHNET1FrdnFjNTN1VVNDU2VPenc2NThpeEFtZ2tzQlp4bEI0L3ZwbWl3bjhJSTV4Qyt5SnlPMFlEWFVNOHUvZHNpdnVyb0pIeHJLaVJWNitrQTRYckpRci9GVlkrOWE0VHUwMkpVMFZVYTdpaDJ2bEUxV2t2NUVpNGFTenNHRUEyZXhaUnNnY2dwVjBwcnF2NSs3Tmx6RG5iSGE0QVZJZDhOV2I2WXhJYm5VOUtUQkdSZWt2UXRwTldSV00vUXM1NkhGZURhQTlHd2lxOTV6QVdNL3g5OG1aNnQ1TytHZzM1TzVpWks3NW4zQWdDRDZPczNnSmRuVlJMTEwxek5iMHhtSTJUVzMrZmdyRHJYcWpWQzdIVkZDNGZLWURXaVJBYU9ZS3VVcWNTdWlBRytHNFJ3ZkJubmpGbVY4SGFpUXdrMEVLbTlnd0tjUE03aDN5M1ZheTI1UTltclR2OGhFL2lHSDJSNzRTajBPNzN2OHVCaUc2VHIxZ1JERXQ0bkpTOXV0Nld2Y1VWOHVEaTZHdkM5VjR5UHNkZFJxZUVKYlQvUU1tRUFuamtBL3VJcUhyU3hXeUkzM2VkdEdpdWNDUzJRYmtTZ2FwT1h5QkxZb0hMTTBtNllRZWlFTlRRaGhvZE1KOVlFWmRpSHVPUjAzdXpzU2E2alBaeWswMG5RTGpYZHVYVmFKUkl6MVhHRkRnY3dmTXNnS0NheVFRNDZ5UlhUanFmNVFWVWxQdVpGTENBenJBdFNnUmdmdUNKSk1vNmMxVDEyZzRuZWxaQWpYSENTejRycTBpeTIyODg2emhHaDZpYUlPSkxLVk5yeGliQTdlc0s5UnJWQTk2Z2dweFpGejBZUTUrWDRVSUlPd3JvalpHa2U4bzY5cEl2UnBnNHNmSGNyNDk0YkdLT0k2OU1lNmhtdEpEUDYrL3ZjWEVZZWxTdXlkc2RLbjV2YnBtYlNrZ2JZejVWNUpxTTZSbFBWVlQvdG1DMTlmZ2s1L1lJUTJkS2d3NG9TTDcwRC8xQXB1dFB1SlppeHpYR0Y1cHJVVzk2ZlNtMkdZTnJSYno1cVBOWG9YQzBvVXRrN2tROTNkR0tRVXFJQ1RCMk90bXg3WFljVi8zWExJdVNpU09XNmp0TGgwQnNHdEc5MEtHTDdjeUlRYXlGSFFucHljejFaTm43cDhpNWJPdXNyTnFWeW9DSGIwSy9zWTVrekkwZWJmaVZsSWRRL2Z4M2tWY04zbnk0RzVlS0lhdlk4NzZUakZNWmhSTkFDQjhKVklxb1Z2cFRObWJNa1I3RkdIMGg0N2NaQVJOQjhDZjJGZGc3NHZXdmJtRi9WS0x0SHFuTFhKTU9iQU91RzdSdVpGSENMT29qUmVqaU1QbTVzOTBFSnU4d1orbUlTS3IrRE4yWUNlaVZkVGMyODR1SUNkaVA5NVlReVhFVjExM0RaWlRoQkNDZ2FQRTcxZlRlOEQzNGY3TklWK21aQ3dPblJDMTc2TVpJS091b3BCVlpnZDY5ODRoZ0J5VlNGd3JJTmlEODlMbTFsSGNQTnArazZlK2RTcHE4SjJKWmFRRWp2cmNhcGI2a2hMNitZeFJHNjNqVmliVEc2QWY1cHl4R2kzRENLTDBWckVMYzI0bWxESU5NQi9mbGwxVlp4bVRGU2tBUC96Q25JdFBSOUplZVdKWlNpamRaNWMvY2lrSXVveXI5N3VjY2VxSzc5S3lmb3VrQ3JKZkFlZGdxV0VUUTJPT2FWYWJ4K2JRekN1YlJWWUJQdGEyK2EzcDk4S1VuY2hoQ2lOOTJ6bmgwcnpvVXVtMUZpVXRYb2lrY2FmNlZXWFlaM0NHbVQ5ODZWOUZKM0MySk83a0tUVVpNMmdrNlNZUkF0VGdlZHZLVFZmVlVaSlJYUUpETEpDNUVGSnZFVUVTekhYVWE0R09ORm1TZ2ZjeSt4MFJNZkxTdFZJY1IrK2RMMFN2UmF2eGxMc3gvVGVJUElvd1FvdDUwYlF1NzMxcWw3Wnk3VGV0eWlMQXNMUEVBL2dmOVpseStSaHM2YU1ocnl4SzQ1MkFHU3lxQlRoR3JlWVVoK3pFSXRsYTFxYXl5WmdNc2lnaTFvMXVQRGkreWtZWUdkS2tZLy9lYktZaWYrb3pqVHRpbnZHWjhEVUQzU2hua2R0SXMyemFreTFBbWxSUllLUng3VEd0K2tPdFpicVhGK3NRQ0t4RVpVWng2ekV1WS84TGdFOHJQT2luVGJFSHU2VlF6ajZGZSt3bEpXRnlnUHJvRjN4Rm0wRmZIL3FBZ2ViT1dBcDY4QjRQYnlvQzdBbzRhTlN2VW56MStyTmhGMkordlhrRTJWbGRIbDkzbW5KVFdlbmQvL29Eb25LaEpPUjdneVRIV1BSYSs0OHAxSEV1NWNpT0tlTXdyd2FHSURaOVM4WWtsZXQ4Q2szaitZOHY1OUNkUEZ4dmg2Z1RaZXJVSTdCREY5ZTZmZW9xUktaallzaFhlTTBQTmVsR1J0STlzV2R3L1U0aHkyT3JiS0NmQUVubnF4RmZkUlZyWG10cVgwY1dRYlhhWkh5NmU2RldjQ0lkOUg2OHIzYXJmNVBkS01sQUx4NGYySW9pM2dLakhwYVVMaWlWU1BQdC9OWTBNQTAwUHJrUmpFMTlzdDdGdnBUTEd4Z2F6OFREOWRJNFRYWFB0RTJrSWtCWjdNMkJJZHFkMllUL054Q3NwQkI3VWpjd0pieEV0RHQ1Ky9SaGpzWXZ4amhBNXljRTJYQ2pueW1aREN2Tk1tYXg3MUw1VWdwc1ZkS0xLTjhGdy8zanlmcDhrZFZnaVZQdG5nNXp3eUdjZkpHdUdBQkZlbytMVGwrSWVQRTg2QmV1Y2Z4NkZmWnpHWjFSS28rczYyR3l2dFkzTGZXZmEyTXRUUEEwaW1uOVFISWE2cU1oRlBCS042Q2FlY3lmNG8ya3Z1VDJ5aEVvZDQ4UlBXcDg0NnZrOEJaZXdZT2laOVVMc2NJekVJbmdXNkRCN2xaQTNpVGpNVFVWOHVLb2JVa243SVhFVk1ER2JRQnlVcGhKMER2UGtQOThtT2NyNlR5TlRqTWF4TTlPLytUTFI1ejc3UnltcEJuTU8zNkdPWnRsRjQyT2ZjNUpRSElRN0NsSFVya3RhZ3BqZUJuMEhXZDlpaERwcnFGVDFpMExpRXZsS2tOWVk2MTRwcEtMZDRXS0hHYzJ4TlhnYXduRk1haTRKU0tPWWZlWHBkcnp3eWdsMVBza0NtOGNQZWROVHhiTmpGWmtZaEJzbFJsTWorQ2hEVWNBc2toWjN5WG9hSXM4WmJvNndlM0lEaXUxa09jWWx2ZmxWd3Z5S1dCZm81WTJPa0NrS1c1L0UwdmovMUh1R015RFF3dXIwcDVzYnhjci9BVyt1RVRJQ05LcURncWl1YlREOCsvdm9ZeFR4RkU2TVFvYVlhZmdmQ0VsWEVtT1hxWmVDRlVvWUlyejEyNGNOUFFNd1kzakNzSXVDYmtaV2J2dURUeFgzNXFsMENLY2lubFZxZjN4RmlCUjcrNGVTWnVJeThhay9aVEhXd21Qajg5dXdOb2lhSE1mUHg2ejFNdzFDaGtqWUxnbzBMd2dUTWRDS2szdEdkcVliajhtQlBMTXlLTzlwZWJVN2NYY1B3bnZuQW9KNXowbFczU2FOQXkzbVpJOHVITFRLbEpDYU13bWNPc3R1U2tkY3RCQ2k3b0pmbFZwSmZpTmFuUjBTUHNJYU44V1drTXR0RjQwOUtxT1JiRFFKdEpDalAwem1GUWZnQ3F6VmMxZWlBdXBhSFZ3V0YvdVVwby9xaHdzS3RMNmMrK3RvQWRJUm1Kd1Y4eXZKTm44Szl0dU94MnFiaGlsRzNObHU5czVPWlVBV2lmczJHT3Q2T0dlWGRzTGFCTDFwbkpHRXVOcWxYbDJRVndHSllTTGx5Tzd4ckFxczRSbDNuK3c0TnUxeVpsdnN4VlFvUlZuV3N1K3BZbGJRMVdFZVBDaENGWVliVmdlL3JadDc1UnZRQVI5TXN5MyszT01nd09CSkllRjc5K1F0VGhyMU0rR2JqaTdKSU1zYTFvcGFFSkRGWGhHVTA4RUtzdWMrOHhkMFZCN0ZJSDZaNThUK203MExCYnQ1Uzh0V3VDb2VPckxZT0hGSXVnclcwOEZnYkxNUFU5YUk3MlYrYS9Wc0JSbzROTG9QYzZOUFdJSEtJT3NiOHpENThBcWVsQXlxVEZxRXgyUU9rVFJZejJ1eFZlajh4SUVYcStHeUgzTHRoS3lPYUdxMjgwZndiSG1ndURDSmpQRXBUcCthNjg3WlI1UFVhZmFTNFFJZXZhdVl2SFd3bG0reFpuSzNiekJNOE5MMGI2b0lWQjFKWEVuTHVBZkNadUdsOTVaa0FNMGNzYXIyY3BpZzBKeTlVMW5xb0xGVzNOR1NMV3VTTlJkYnZOZkZXZk80RUk4bDlMcVJ5V2g2b2ZxRFdzS2NUZ3dGNWg2Z2djdXdZcWM1WDZkWitQYXFZWjNPZFZKQ0pjeisrcW1pYmdEckhrZFloZGpPcGF1aXU0aDdGVHBBNVgvOE9POG83NldOYTFidnBrcHJiT2xlMWsweE1qQlNOeWJ0ZnBiR3gzc0N1QjNYaFgzR25ydmJkQmo4Z3BqRXNSMmhEUE1FL0gwOTVwM2V3QlBWRm1scUphL3J1VHVFTU0xQ214S2wrYTNlVFA0Q3RxamdXbG9QVnY3aVVmNmdEWk9VVzNCTmJjZFNDZWV3WWk0bjJ6cHowbzhnU2lBbjNMV3FZN1FmSEk2bnFCaVVCVEp4ZlA0TEZXbzhsT2pnbmV3a0JESlBCMzVnVjM4U2tVb204MUpDV0pPeGN3NGV0Ly90YlJkZy9FY01DVTE4aTlBM1BZZEJMZ1hsc1dZYmlVSDlwSXVzOXQ0NHJqQ1hSV0NVRVcvS1pxazBVbVp2cFRBZTh0dUtWNE1uWVpkb0FFNWlWek43cGtKV2xmUms2VmYvZm85NHd1MkZ3d3BuQ1Q4NjlLRzRtS1ZlRHgwQXdsNG9Lc05vZS9WTjJrRTJvUUNyUmJCVnlreHhIVkxlMDJOU3NRQkZzMUhmRUcyYTYremxTUit1bTB1VjlPREMwWUZITVQ0MStWRndsc2VTMWsvY0tvUG5QK3NCZXBxc1RIVWYwV3FWenpHaUNaR0pISjFXZTMzRitkTlNtRmxteFZBRVo1VlFxa0swbDQ0cHBwV3JaUGljM1c0VnBkbXorRE5iaG5sNVM2S2t3MlBFSjlHdi9DZDRxWkh4UDRVZ3RicW4xRDEwVXVLa1FxcjRuWlhvdmJvR3FtMlUvakt6Um9iZEFoL1lhM05xMXltNlVsdkhGT0RTamkreVI2bi9LWnR0VDlPaGUwY1pSYnB5VnNCaHdJMjBEekFodUxHZlZaWCtFSG4vMXRiVG15eTNkd3RtZS9CZVMrUFdNakhCZGd3UnJpUk5vdGJzaExhT1U1MHFDbXZNWnIxczlkN2hTbUVPbmU5U1REbHdlTTJVeSsvSkNSVU9mbkJPZU5WcWVwazVhUGUwMXg5OE1EUEFrNThSNjZ1bGpqR28yZXhhY2lpUFovbVJQdjhLOTRLWHFHWS9LWWo1TFJnRlVNWWthNmlIYlo2MlZLekFvV204TGZxQWpsam9KUlovcU0xV21WM0JPeFBQYitlcElNRlJzVEQzbTJ3WWJSZWNHREd5OFZzU2ZNTWFhaFRlQ2RCK21hdjlFV0JlRXZyWkQ0NUtpZFJ6VjVXTnpucnFXRmVLaEZadFArQUZzMHM5eHcxeWlxUzZDMk5kWC8zU1B0c3pmWGF6OVh2L2tINDBzUWJ2S2Q1YlFsa09xS0FCRlY0djF0cjVsd3daSVI1Yzk4MmJjd0JmSm9jRE1MTEJiUDQyVW5JT0NtbGFwMlJyZHF5L0dJajA4R2o4Rjl4bExnbVl1bWowR0hXSkl4aHp6TmQreEJITm1hSlMwWU4xU3lqU1pZSGNmL3RsV3oyQSszN0ZPbndEWHNVcjVwQkNQRDRYVjJLeFk2aFp4cVBsd2d4REliOFFlTFZ5VGVqZnovY2I3Zm1MMytPd056ZkpBY1hCc0VCVURVL0paQ204NlNsbXJ0SURkQUcrc0hFTGVvNEs3YWtXc0FValNpRHJ3UXQrZDVYdWFpMjZoRTR6K3N1SDhVV3lQQVFqL3lBSmdHK2c2Vk5QcjFDa2c4aDhmZ3RkSC9FdGQ4YzBCSzIwd0dDNWdSYW42MmF2ZEpnZGZIUEVlc1NtYThBQzQzUEpnR0xtb2FkNDhqQ0RtWi9EUlpueTVCemlYQ3dlK2UxU2p2WWtiV3pyNnBEc2NnU1B2clpwWE9sU2ZTcW9zcGpzZ1Vhd1VMcWR5K2ZLNnhnNlFtQ2hzaEFhSXpxTjhHa1liNEpTc0FPNC9ISW85WWNjRWYwdURVSHk1RVFDQmVOaVh3SFE5aXNtVE5JNjdtL2NLSTRPVUJ2V1o5dW0yWnJ5M0k5QS91Z09KdTRERTNSZmNzQWZtN3JtcVd0L015UzY1T2Rqem9aWHg5ano4WW9RTGxrd0tHYXFqdjlFVjgrRU9aQnl3QnczbzIxSTl3ZTN1em1uVWViS2Uzcm1CNWdUd3RzRUVzcVhtZWw5VmdRUTdPaFM2NkpyWmtISVlIME5TMFJRRE9jS1lkVnJZenFiaWNSVUsvYnlZK3FTZlBFY29uWlEybTUrWG56eUZJYkgvamdWNmJxYTJEblhPVUFib2RacGNod2VCWlY1emg2QXpFUWhxN2IvanJORks0K3E3ODgydDVVWFB4cDBiT1BXR3lHVzlvR01XQ2VHdWtNcCtsV3I4dzZVcDVhRElCR0ljTzlUZlFHT2t3V1NqUjFESmppdVpWampxZU12VFV0QmlCaUNabytvU056ai9wMVl5b1RoemR3cmxIZ1NXMENHano1TkJ6amhER0t6STNFcDQrTEZUK3Y4TC8zcnNEY3AzVmVERndudEFRRE5CbnhJdVlBamdBSUZZYUpIcnU3NFRueXdyZDFyWGVTeXBzUmV3RzdwSVNQUHU2YzY1czFMQTVESzcyTEluRU9nK3hlZzhoY0N5VXVBVXFpeGZ2UU5oTHpjUnVjLzJqMjkzaUFFRVo2QXFpWkV5djVKQ0JaNmwwcGl2bEVQZnhyQ2s4ODN3RmpaNllwQ1ZZTWJ2TWpmcVlaZlNVMTNlV0JiZUs4UHdjdmxxMEt0K1R0dndCWEtBb211RWtvZ3h3cXJOVGNGZVdwUDJiS2YvU2ZoUG1PVjM3VlZWR0ZadTYyUFJzdTNwTXI3VTZTRkJkNS9kL2M4SUFmMjFINkRhVExPNExER1RtdFlteEgvbFZVTkYzN2toTHJsVCtJK011MWVvYzhyV2dlRUdBVGpwdTdtcHcrQUZjNGozOW9POWRRSVZwUTNKZlZqYlg5d3pKMWhpWG15TzVNYVZlM1I0ZjdTMG5VWVZCWk9aNHJROFdwUG9QaHBYL0hBbUZJSmdlVUlGYUhqcDB0cXlwZmdERklYN3NoRDdtZkYvOVZQZnZxR2FLalhHWW4wSCs3UkxPd3pKWWwyaFhHQTE5R0NjVnFnd0EwajlpUHU3VTBrVUJpRmJlVHJtWjdOK3ZCNXE4eElqbUZtM3c2Wk5XQlFOSWdTRCtHT2Q0Mm9oVU0zTS9FN0RYTGlQQmFjdFd5bk5IT2Q4RC9EV1EwME9rN1ZaVGp2VTZGUVZZNDRuU1h3Si9MUjZ4bS9vYXlnMXJJb0FjbDVhY291MlNOUVpLWnZyZVArQ2MzR2tUNG5MU1NhUWFZLythYVd1OEQ5R0Uwd1A1K2lhaWhDc2RheVdyY3c1TVNQSmhKQnJjVTN6aWwrOUZXOXBwd1d3RG8veit5bGtYeUZqR09ucmZvZFlJUmM2bFB4VVBkSVVMR282b1Axcy9iTHlIdGE4aEE5R3hwZ05jVFVPNmdPUERNYkNLQXhmeElvUVRkWVdIL2dvY0g3QlFVSVpReGg4MFZXSXJ4VWFoZUt4M0RSS1orWWxjOFkxRzlkd21RUEp5M2Z0d0R5cXF1cUtzRVc5L3BFZHhoUktwRU1nN2cxQWQ2TkFlWjF4NklhL0sxY0toMnhMWlZmbHRIZ2liK1RDdExlSG1tWlN1S2FiQWJBak1NU0U2dm8vNjhGU2NjWmRleWkyZUpiMm5PK0NyeVpqMFUwWkkwQzEzNjgxajc2QzNkSDUxSmJSWkpsUVowUEE3cFFZc3Y0ZHB4U0JvOEVEeVZxMlNycTdnVWpuRi9RcEFoRzVyaERXbFgrSWdPQ1I4aHk3U2V6SHNHRE82a1RNNG1URW5VaHhWTGxrZmlvQU1QeDNSZnB6Y05KaDJHWGNTWVAydExqamFWZzMyL2pQbG9pRHFiL2Q4Mzhpd1E2SDY1WFpuY2p2SG9UekFQa1BWTDJLL0RvOGdMVkgveWVaZklidVRxMzJybkNTNTk3TEx6TG5kcjFqUWRGM0hKMDI2cWt3Q3k0a1FxeTdJQ3ZsZVZSbnU2WkxwM09SY3BZM0hFcnRzSHgycytXeHJuSFpXUjgvSzFkZ2RqRS9WdEhwVnVzYVpXaFFJSjlabHFYTFBVcmhmRHM1b0N1cFllMk5Rb3JhbDdFbE41UVNTUjJOWXp3YWV1UXowMm54MFBaYWJVajY1aVR4aS9FL29HZ0lkZGsvbDNhSVlTT2dRaU5YT3RleU8vSFZlSjN1aVZOZk8yVkY0RGV1bzM1bmFqVTJlWXNYL21RWVRXcGJzOWt4QXNlcTlEaE5qcDFKRUpoeVBsMUZPTEV1K3ZIa0ZIaWRuQk0vTUYwK0JNRzE2N0pLdGd6TWt4YlRFQkovaWw1Z0VRU0VSYlhJNG5LL3JtVU1IcXlscnBRR0dFQkozVmpBQW5WbTllMGlUR1hKSXBPdkllVEFXdE5rc3hnU1Y0dGsyRTBpeHROQ1Ztck4vb0ZBd1JqbXhveE5rV3Q0UDRBM0w4bGJpcFl2aUdjNFVBRHBJT1A4NGFRTGxIc3pYMEdjVk9nMGVDOENTRHhGc1RMclpEbWZKUEo4VXdIQVhhbTBndm9kV3VCSUJ6SC81OUVEVFZMT3Z6TFF3WEZIcFBFS3F6Y0k2NTNwZ2hkRjVkUkZmL3cwditDTUxNdlJxS0ZDUUlBM2ZOL2c4b05leEpFVkJkWWJwN1hEZ3BPeElQbEFCNGIwN1VwbEZveXFoczVSMXRRQlZoMGhoZU9MZ1BaSWc5b2dGSk0yTU95OG0rNFgzWWFybG90SEN4YUlONHZJZE9Kc29WbThCYUF3VCs1RkZ0Uk5KV3JqS2ROODljRmdDMi9uT1prNi9CejN0YzdrdWRlc2k1RkI3K3JnUGtRZzFaN0lrdlBvYmkzSTdmRmV3VlZ0Wll1VzF1SGxhdjZrSmlqb1NYb2kzMmZ6UFAvY05zaDZzWXBNOUpBOHhtckZhUTFHcFl0Znkya1hjbVBuc3VjWDZwUGMwVHRtT2JmZnA3VzBSWGs1czM5QnloUGgrZjVUSjN5ZE95ZmJCNzFlb1lEOUsxd1p6UXlSRWQxcTRId096ZzY2a3UyVnp3bDNLUzlia2N5eDdSMG4zUS9uVkpseHoxTW9LVkg0blNzOTdBRXlwcDdGQ0F4bXdkUllKQll0ZzFkU1FsWnlXTm40QXN1RkM0UFpONTcyZDdJazdHVTF6TWFBUDlMMVVnREFhWlRsUlZ4Z21OQjRWRDhEQTlVTmM2dnlQSy84eXA3RlRDV2lIZ0ZOQU5HdHFDMzFMYWE0bmxoeWpSTFRzamRxUUlkRVV2QjBRYlZicXZIOWRVRUdBd1huUDdpcWtKUHBDN1hEbmw5bzRmRVJ6dUtIOXFwd2syZmxXTnJwdlFwTWpSVkFiajVMZ1lTZXJlc2c0YTByNDlKSXpSb3NpMGxiZ1I3aDNsSGZUZHhPRURNeVpVMVU5ODdrWlovcGJsQTNVRHpMc2wxcFduZmxqSit2b3UyaEdHNmpPSXRkaUk4cmZpa2t4SytVcSt2bDdVaHFYM1E2N1VhWExkY3J2ZlU5Qk45dVp1RUJnYWRMWWNnVG5UZjVDd2lpVzlEWnF5cDN4TVVqVUpKUytWQ0VkYkdWaVNkNjlrWG1PeGpwUTIva1BGWDVCNU9BVTdqZ2JXc0Q3WnMwSjd1UGtVVkg3OXVtNkF2VTNaQlBzeGkyeGtBcVJyb1dORjZEbkYzVWlEdU0zcFZ5cFliZ2J1WGFsbFBMYmo2SGpMNXhyd1RSa1Z5N0JncnRDaFpDYmFQQkN5enRUR05vaTN5QU5MTGJkR05taHBSKzgvbm9ra3g3R3UxVlZKcE1DTnUyRkEweUxVTHAwWGdHZERJM3F1U1cycjVBTzJLQ3JoZ3dVYTd2emNUTFBUMmcwckw1MEZmZmtPRlJOWXhuODY2MFNobmVKd1VFTlBKa1Q3ekZrM1BQeWlCZkt6emorRmNWdXVhKzlWbjYwUG1PYXp3TXo1MDhINHY5aWhvUWVDd3ZpQWIxTCtBbGx1bzZIeml3SXVpK3dZd0NxZUJmTHMrSUpnRnRFclF1ZjgxVTloSkcvRW03L20xUVNndXp3a2cvVVJYNFJlUmNGakcxTXNFZXROeWtMeUVDUWEvd3dOYVFrQ29MYkREMGFPcGErbDdBbFpTQ0hsemhCL3JjWkNYOWhrNVUyTWV1R3FrVExqYUlZbWNiOFBybG50eDJGNDZJbjBra21WdWV0WUQwVE5helpRYit5YkxORDdxYjNDTWcyK2Y5ZVdibmhhYms1bkVQS1RRSVZ2VjhBREZhSWVrQm1uVGdqVWVMQUNoVEx3VEV4eDVHRlNEU1NGTzBUeDdVcVBJa1F0TzVjN2V5ZVY0RmtJQ2FOR0kyRW85bjJtTm5na2p1QzAydmJna1Z3bnJrWUdpVTlVME9Jb1dYcGZLanU1MEVKZFI2b3QwcGh6QllXc3R2QmhQTlQ0R0cwRXcr";eval(e7061($e7091));
if(!empty($thumb)){
    $thumbux = urldecode($thumb);
} else $thumbux = "http://dl4hut.xyz/img/logo.png";

?>
<title>DLvidHUT : Download - <?php echo $title; ?> : Online All in One Video & Audio Downloader</title>
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
   

        <!-- ShareThis BEGIN --><div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END --><br>
<h2 style="word-break: break-all;">    
Download <?php echo $title; ?>  
<video poster="<?php echo urldecode($thumb); ?>" width="100%" height="340" controls>
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($dlb); ?>" type="video/mp4">   
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($dld); ?>" type="video/mp4">   
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($dlf); ?>" type="video/mp4">   
 <source src="<?php echo $dlb; ?>" type="video/mp4">
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($dlh); ?>" type="video/mp4">   
  <source src="<?php echo $url; ?>" type="video/mp4">   
  <source src="http://dl4hut.xyz/stream.php.php/?vkr=<?php echo $lloc; ?>" type="video/mp4"> 

  <source src="<?php echo $dld; ?>" type="video/mp4">
  <source src="<?php echo $dle; ?>" type="video/mp4">
  <source src="<?php echo $dlf; ?>" type="video/mp4">
  <source src="<?php echo $hd; ?>" type="video/mp4">
  <source src="<?php echo $sd; ?>" type="video/mp4">
  <source src="<?php echo $vod; ?>" type="video/mp4">
  <source src="<?php echo $videolink1; ?>" type="video/mp4">
  <source src="https://yavdl.000webhostapp.com/api/videos/dl.php?vkr=<?php echo $lloc; ?>" type="video/mp4">
  Your browser does not support the video tag.
</video> 
<br><?php echo $channel.' - '.$desc; ?> . 
Duration : <?php echo $duration; ?>
<?php
if(!empty($mp3)){
    echo '<br>
<a href="'.$mp3.'">
<button style="width:100%;"  class="btn btn-success"> Download  in MP3 </button></a><br>';
}
else echo '';
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/mp3/128.php/?vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/videos/dl.php?vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo '';  if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/mergedstreams/720.php/?vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://yavdl.000webhostapp.com/api/mergedstreams/1080.php/?vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo '';
if(!empty($vod)){
    echo '<br>
<a href="'.$vod.'">
<button style="width:100%;"  class="btn btn-success"> Download  in Video </button></a><br>';
}
else echo '';
if(!empty($hd)){
    echo '<br>
<a href="'.$hd.'">
<button style="width:100%;"  class="btn btn-success"> Download  in HD </button></a><br>';
}
else echo '';
if(!empty($sd)){
    echo '<br>
<a href="'.$sd.'">
<button style="width:100%;"  class="btn btn-success"> Download  in SD </button></a><br>';
}
else echo '';
if(!empty($videolink1)){
    echo '  <br>
<a href="'.$videolink1.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($audiolink12)){
    echo '  <br>
<a href="'.$audiolink2.'">
<button style="width:100%;"  class="btn btn-success"> Download Audio </button></a><br>';
}
else echo '';  
if(!empty($link1)){
    echo '  <br>
<a href="'.$link1.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';    if(!empty($link2)){
    echo '  <br>
<a href="'.$link2.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link3)){
    echo '  <br>
<a href="'.$link3.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link4)){
    echo '  <br>
<a href="'.$link4.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link5)){
    echo '  <br>
<a href="'.$link5.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link6)){
    echo '  <br>
<a href="'.$link6.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link7)){
    echo '  <br>
<a href="'.$link7.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link8)){
    echo '  <br>
<a href="'.$link8.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link9)){
    echo '  <br>
<a href="'.$link9.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link10)){
    echo '  <br>
<a href="'.$link10.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link11)){
    echo '  <br>
<a href="'.$link11.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link12)){
    echo '  <br>
<a href="'.$link12.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($link13)){
    echo '  <br>
<a href="'.$link13.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($typea)){
    echo '  <br>
<a href="'.$dla.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typea.' in '.$qualitya.' - '.$sizea.' - '.$formata.' </button></a><br>';
}
else echo '';  
 
if(!empty($typeb)){
    echo '  <br>
<a href="'.$dlb.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeb.' in '.$qualityb.' - '.$sizeb.' - '.$formatb.' </button></a><br>';
}
else echo '';
 
if(!empty($typec)){
    echo '  <br>
<a href="'.$dlc.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typec.' in '.$qualityc.' - '.$sizec.' - '.$formatc.' </button></a><br>';
}
else echo '';   
if(!empty($typed)){
    echo '  <br>
<a href="'.$dld.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typed.' in '.$qualityd.' - '.$sized.' - '.$formatd.' </button></a><br>';
}
else echo '';   
if(!empty($typee)){
    echo '  <br>
<a href="'.$dle.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typee.' in '.$qualitye.' - '.$sizee.' - '.$formate.' </button></a><br>';
}
else echo '';   
if(!empty($typef)){
    echo '  <br>
<a href="'.$dlf.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typef.' in '.$qualityf.' - '.$sizef.' - '.$formatf.' </button></a><br>';
}
else echo '';   
if(!empty($typeg)){
    echo '  <br>
<a href="'.$dlg.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeg.' in '.$qualityg.' - '.$sizeg.' - '.$formatg.' </button></a><br>';
}
else echo '';   
if(!empty($typeh)){
    echo '  <br>
<a href="'.$dlh.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeh.' in '.$qualityh.' - '.$sizeh.' - '.$formath.' </button></a><br>';
}
else echo '';   
if(!empty($typei)){
    echo '  <br>
<a href="'.$dli.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typei.' in '.$qualityi.' - '.$sizei.' - '.$formati.' </button></a><br>';
}
else echo '';   
if(!empty($typej)){
    echo '  <br>
<a href="'.$dlj.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typej.' in '.$qualityj.' - '.$sizej.' - '.$formatj.' </button></a><br>';
}
else echo '';   
if(!empty($typek)){
    echo '  <br>
<a href="'.$dlk.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typek.' in '.$qualityk.' - '.$sizek.' - '.$formatk.' </button></a><br>';
}
else echo '';   
if(!empty($typel)){
    echo '  <br>
<a href="'.$dll.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typel.' in '.$qualityl.' - '.$sizel.' - '.$formatl.' </button></a><br>';
}
else echo '';   
if(!empty($typem)){
    echo '  <br>
<a href="'.$dlm.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typem.' in '.$qualitym.' - '.$sizem.' - '.$formatm.' </button></a><br>';
}
else echo '';   
if(!empty($typen)){
    echo '  <br>
<a href="'.$dln.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typen.' in '.$qualityn.' - '.$sizen.' - '.$formatn.' </button></a><br>';
}
else echo '';   
if(!empty($typeo)){
    echo '  <br>
<a href="'.$dlo.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeo.' in '.$qualityo.' - '.$sizeo.' - '.$formato.' </button></a><br>';
}
else echo '';   
if(!empty($typep)){
    echo '  <br>
<a href="'.$dlp.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typep.' in '.$qualityp.' - '.$sizep.' - '.$formatp.' </button></a><br>';
}
else echo '';   
if(!empty($typeq)){
    echo '  <br>
<a href="'.$dlq.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeq.' in '.$qualityq.' - '.$sizeq.' - '.$formatq.' </button></a><br>';
}
else echo '';   
if(!empty($typer)){
    echo '  <br>
<a href="'.$dlr.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typer.' in '.$qualityr.' - '.$sizer.' - '.$formatr.' </button></a><br>';
}
else echo '';   
if(!empty($types)){
    echo '  <br>
<a href="'.$dls.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$types.' in '.$qualitys.' - '.$sizes.' - '.$formats.' </button></a><br>';
}
else echo '';   
if(!empty($typet)){
    echo '  <br>
<a href="'.$dlt.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typet.' in '.$qualityt.' - '.$sizet.' - '.$formatt.' </button></a><br>';
}
else echo '';   
if(!empty($typeu)){
    echo '  <br>
<a href="'.$dlu.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeu.' in '.$qualityu.' - '.$sizeu.' - '.$formatu.' </button></a><br>';
}
else echo '';   
if(!empty($typev)){
    echo '  <br>
<a href="'.$dlv.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typev.' in '.$qualityv.' - '.$sizev.' - '.$formatv.' </button></a><br>';
}
else echo '';   
if(!empty($typew)){
    echo '  <br>
<a href="'.$dlw.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typew.' in '.$qualityw.' - '.$sizew.' - '.$formatw.' </button></a><br>';
}
else echo '';   
if(!empty($typex)){
    echo '  <br>
<a href="'.$dlx.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typex.' in '.$qualityx.' - '.$sizex.' - '.$formatx.' </button></a><br>';
}
else echo '';  
if(!empty($typey)){
    echo '  <br>
<a href="'.$dly.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typey.' in '.$qualityy.' - '.$sizey.' - '.$formaty.' </button></a><br>';
}
else echo '';     
if(!empty($typez)){
    echo '  <br>
<a href="'.$dlz.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typez.' in '.$qualityz.' - '.$sizez.' - '.$formatz.' </button></a><br>';
}
else echo '';     
if(!empty($typeza)){
    echo '  <br>
<a href="'.$dlza.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeza.' in '.$qualityza.' - '.$sizeza.' - '.$formatza.' </button></a><br>';
}
else echo '';     
if(!empty($typezb)){
    echo '  <br>
<a href="'.$dlzb.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezb.' in '.$qualityzb.' - '.$sizezb.' - '.$formatzb.' </button></a><br>';
}
else echo '';     
if(!empty($typezc)){
    echo '  <br>
<a href="'.$dlzc.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezc.' in '.$qualityzc.' - '.$sizezc.' - '.$formatzc.' </button></a><br>';
}
else echo '';     
if(!empty($typezd)){
    echo '  <br>
<a href="'.$dlzd.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezd.' in '.$qualityzd.' - '.$sizezd.' - '.$formatzd.' </button></a><br>';
}
else echo '';     
if(!empty($typeze)){
    echo '  <br>
<a href="'.$dlze.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typeze.' in '.$qualityze.' - '.$sizeze.' - '.$formatze.' </button></a><br>';
}
else echo '';     
if(!empty($typezf)){
    echo '  <br>
<a href="'.$dlzf.'">
<button style="width:100%;"  class="btn btn-success"> Download '.$typezf.' in '.$qualityzf.' - '.$sizezf.' - '.$formatzf.' </button></a><br>';
}
else echo '';    
?> 
<br><a href="<?php echo $domain; ?>/dl/igh.php/?vkr=igh@<?php echo $video_idk; ?>">
<button style="width:100%; background:red;"  class="btn btn-success"> Download <?php echo $video_idk; ?> Highlights </button></a><br>

</h2><!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
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
