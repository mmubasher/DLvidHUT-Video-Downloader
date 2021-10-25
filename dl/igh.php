<!DOCTYPE html>
<html>
<head>
    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwM0xacWRLNWNyNGVobGQ1amJEeUFGOFc1VTkyb0l1Tko5bW1Bb0hrTnNIN0JRck9aTTVPTEJrNjVPV2h6bzIvZTA5WFV2bmQrK2U5WVY0MTNUQWlSQTNTejBmVmdJMDRVTi9lUGY2WDJJZW96M3lueWRNbnN2N2ZnM2dFSCtobDl5WHJOTU5OMkxQREl4OWlkRUdTVFhqRkpPOUpjRm12UDgzaHFUNjQ1eGRGRnJWdjZqRHplYmU5MkN2U08zS2VWdXRDZjVUUjhFaDlXNDJXRFVwVlNEQUQ0a0ducTVwUjRUcTRjRXAzOUhzUC9QSkpRT1o2Sm5MQU5TK3BpbkswUG50RVdVb0tuMjdkT0hIK3gzYzkrSTFHTmtTME1GUGUzb2crcjJVSW5CTFBxTnk2WHRYMVVCWnFXakcvNmxleEhNWHl6T3BBYkNJOUlGSkFjNVBBeWNtTnRQZGNnM1hIN09XbUNyZnFJSHErbTdGRkxiZzNMam80L2VsTWhreWNaamJPS2R2UHB6a1F2SmU0Sk81Z2JTVWZUOHg2MkRETkhJQ2k1OHpSS3VyN3J2TW1PSlNyUzdMZXBzc0FvbmNUWjh0TUorb2JMREIzTENQSmlpQzdSTkUvRnFSTmt0b21Kc0k4WWdhM0w3NVBSUmhRM25rejN4c0VQaUlTbnNoQ2I5WVdtcXVZUFlHa1d2Ri8rOU5Qa3ZNQ2JWRWRtVWdJWDVNNGhobENIWUxISDNCNXF6dlluVkRqcnRPbWhCM1RNZ2NhTjByRmFuRDVCNGQyTnpwVG1CMDdHeFNmSzJJcWVvaTR6ZG9xd2xER1loL0kwMU8wTlEyWUpUWElZQzBvcS83ZXhPWTlQNi9WcDRoTW9BSFdXTmZnd0ZYNlRCdEhQOWUxRHgxMHFRRUt6NGFCZmtSQVNhV0xQNzhycjhKL21FZnRyN2RDTlcxRmR2SVdGMlFHREg3RWo0QlVkVXJLcjNOT2N3MysrNllOM2dDTi9LYzg2M1BtZU9JVUUrTFJVNUtXVFVBOGMzMWtKUHhpNCtVcUVKakhxM01ja0t4Y3BPZUNJeG13Z1g0R3djc3JFRGw3Kyswck5KeGw3OWQxZ3pkN2NsbXFCN01vbnl3SFpRK3ZUdDBvYTRodFJXZ1pCMndweWJPOHVQMUg3c216SythdFNqdStSQ1dVNk40K1l3UnBnRDBPdFo1T0JQYkp5OG90S2E0bktkT1d2MXhjcXQ3K0dpUFlPakYreHJtblpYZE8rc3FUd1BlK3dwOFhZeHgrQTlyQy9HTnQ4MmZ4UmkxZmxPei9GYjZRc2F4K3ZBSzlyZVNzZU9McGNJNVllbUh4cnBDanUwaFhvV2hYbWxMUUJlakhMZnY1VnVrTk1DYUZLUGRtcWprQzA3OExKdnFRbDZNajRHZWo1K2d6SkR0V0dvemRPbitMem9sS3VYOWhmNWFrTGc4TW1mRzNZa0VEQ3E1SHlzaGszQ3dnaDZnUDNnc3JzdzFPQzR6M0pMblQ1ZEl6YU9SK0ZkdEdMWEF4aENZY3BLRHVPZzBkS0FEQlM2MkI2ai83dHo4dnFXOEZJOXJWS1BJT0JUOTlJZFp2cTQvNFJXM3ZaUW5rSjRLZ3JGNXNXVlFaN1g0QTgzZmN0ZEpZSkNaMWlpSUFKc1o3T2g3dWRRc3grUnNiZnVUVmJOODNZZk0wSnFpcHZCd1d0Y1FodjNCS2lhb3d3RE1jaGVQSVBSMVpCNmh1WFdmUmxDYVNBZWxBWjEzQXo4OCtqR0dUWndESjFzTkJ3NEZPYVNPbnNQSUNCMU9uTmxXTStSYVhXbGNrZ29yL0xjZmhUNlZROXBtdzZxeVVrZStveUxxOGtmZzh6M3ZaY1lWaG1GYnBTWHY0VjdPRVRpRU9DVHI2Sm5paVNJY2dPZUpoeTdnOFkxV211OEpXc3Bod3QwK2czbjR5U2pLS1pUcW5sMW5xL1pxVENFRElPNlFTeC8yWFVtVGxoZ3BiMWl6RXdPcGFKOVdCZ01vSHFJZHBacG9zSnJhTm9hbzhaZjlKamZON2tJRmNrWGdxY202NHI2S2RGT0ozUGZoU2dtOEZaWjlLVDNNMUVzNjZvcGdRUXNnNjhqWWpMSklmUGZETE9FQnQ0ZzkxNkZzczhrODVxSXc3ZUZLOVh0dlA5Q2U0UXJpcWhnRU1WZEJrT1dqWXFzbmkyMUVzYTVKZFZHZ2x3VTBYb0RyRE5EK2xwbjVzN0YwZDdCem82bTBQUHY5WHhiVzBGQWQ1MG53RjBtVnlHUkYvMTJQN1B3bWlwZUZabkM2c3p5UUt4dklEQVlrWEtuUm1mZW5PRE0vZWgzMG5CeTRZSXVaUVM0L3ZtNkdXMDhWY2duaFVZRmxEVkdSZFd4VUtudXVBN3lCUHI2aHRNR2oxeG1OQWMxWElIV0pkSjNSdDdNWHliWUhMakVNWWZNU0ZwNnE2UjkyV0FWbEdST1VIM0hZck90ZzBXQTd2b2VQckxxM083eUc0RlVPTVIvYTZqMWRyUEVod1Z0dHJxa1dxZDBwd3FLVmNXOFlFSUJNVXdMZmU1WDZZM3JjdHhTa0laVU9QYnlYMFI1c29XMml4NnBERUpFWThnOWxkeE1OcklaWXo4RjhUMi8xWDNRL01FeUJCYUQvYU9zRWYybi9nME9kYjdPdzJPSHV5TlViaTVwZmMvKzJ4S09KRHRYcGlTcjJYMk1QVjNiVmtSWEdwOXEzN1NaSUwzRzg1STBnQms3WDM3cG1SUEhJT1huanoyWW5kV3MrMmllc1I5bFpvSlB5cGFqQStFdGdsSysyUzlPRGN2L0xhNWRaMGpQR0FlZ3J3L3dBUHk5dmszUnNRYy9jekVCZWhYamhDU1Nzc2Npc1dVWStrazFqQXN3dEhSQ3RiTzZUWnlpV3UyQ3NubUVHU1JLeUZialp3empFR0d0NWlsakJiZE9LclcwSlo0eUthaFFXY1lreUxWMlVYUUVpaElZMHN3NU4xWGZqN2NvMDBOaysyOE9KdzlrUk5uWitFMXpZVEVMN3Evd0dJdmVCUld5WVZWRGFDTC8zZEw1cUR3QXNCeVIvZDdtY1NLbE90S2pQOFNBZFYvV0VWdGphMEozYXQvY0xRVW1mOTVLeFRBMExqcEZlR0NaUWIxVm1JaEdaSTU1RXJZOVJoY0FLblVRK3NUVGQxbFRpVzVCUFROQmZ4U0g2TkR5aUdreHVRWk40emdqWEFyWXFHMng5aU4xOHZFblg5dG1IZDV5UXpaSHVEMGdCV2tvNkgvcXZKb255OUdCYUZsNldFbFQwdG96cXRoYWJiMU1FNis3MnM5NmphZzJIQjZoRDFJYmtmUmZXekp0bkxWVGZXN2dteUlZNzg1aE5NWHp5b2NPTkpUU3NDWWFaZ216TURWbWpNRUxnTzVVcTJqYi9iaGRxNVNHQ002MEZMTUUwSEFadlBUak1PVk5TSFA5ZE8yVktOb3RyUzdIZXYvU1p4NlNoaHRlKzFjakMralNSelpOTnVrdEE0NUxFN0pESUJzWXJic0lsVklZaldjK3c3YW5WdFdKaHE0N0pZVzFIYW9nV3BSSjdRLzQwT1pMSHhQaHUwMlZRQVhoQkc5TXR1Ty9oV2t1d1BxNVpXbmdQeFgrSmVQeGdaTGU5ZVQrbnNHYlJsQ3BuS2h5SHNKalRaTWZqTVNtTGd6bHFRN0ZHTkdtd2J2SURpZ0V0OUxpWEdLalU5SGJwN2gwUWdZR0pzTlpnWCtBaGJKUFZKeXU3Umo1REFmcDdMWDV0bWVnb3g1S2k2eGVxay8yUTgxZ2NDbzFLU1EzREMyREVrclMxVlArVWxYSGlPbjZtN3MrQU1yb21YQy95ZlF5SFFNRlpZeXByY0RYVnBLcHEzWUV6YnJvb0VJQTlKNExrVGxSMEdNK2xwN1ZDamNxdnFraVVvbXY2VDI5OTUvTmVmUHlTUGtESndadlZJd0ZrVHBwTHJnWVVCcE9CU1NMMysvcFlXbjJMUXZLSkljYU52QVlwUFlzeC9YSmlsbWhyeWk5NXdsYUFrZnBEaGZNNVRJUUlGMlhpQlk1Q0I1RklFZlFMbzFPNVBPNFpFV3RvNEx5Q052UlF1c0QxdXRiSTBueGhOWDFESzVLVHV1c0MxS2hnYUpZY3JReGRDYlJQa2Q1Q0ZiV2RVejdsMFZZZWFDYUhoaTFrVjVEYnlHbXZRU09sWkp1QUtjcXVzSVBZWG1qcU1kVkRiMHpzYnFOOERQeFhSSmxVY2R6dFlvcld6WDk3Z3RVdkVsdU5xdk8rOFpXbjJUOWhUL1hKck55QThZamxkRzczSWF0cWtqT1FXVndTYnlJaEgzNFc2M0hJMGRmcUp5Q1ZvRkpwbERoaTRRT2pjYWViYUNmRTJsYkxvVjJYaXZGSzEySXZIZC9hd24yZWRMZGwxOGI1UlZTYlRjL0tnR3dDRFZmaGdVekFJRU9tbVVkbnYzWWR6WU1hdnVRTDNNaitsWUx2d2U2L2hFbEU0RlZpKzFzWVQwcTN1SVVIR1ZrSGVLcnp2eTNQaFc3bXpERExJWVNWQ01qdWh4Ti83UUd2TmY4aXp2aTR5M0F6NE1SQ3VDNWt1dkRGU1NDTWY0cS95bFlnOHgzTXZnQmdTYVFSM3NXd0t3OUxiUHJ0Rzg3aStadHZ1czdDTzYzbWVVekZhbk5zMDI2dGl3T3ZDVnF4dzl5R2dMbW5WQlRlMlJJRjRCdFQxOVRiakRpSkk5MGZ2Wk1EaVBpRmFqekxLTGJEM3VYaEplRktRelprVDFBTnVqVUpIU3F5ZXJ2UGRDbVFadzRGejVTd1d5TkRZRFVrMnNncFdzeWs2Skd2dExCdWpUZVMvTlRrTHFBOWNCZ3hoRVV4QkloS1FicUVGM1NxK0ZoMzRXaStyT1kzQ2oxV1cxWFRMUWlBK01xSUpJcDgwKzZVMURsNHJGQVdLK2FWc1BxZjZKSmxQL2JIV1BQSnU2SjJ0SmRNSFcxV3lvaksvdFNuZDhrSkRiY3JSZkxJNlpoajZ5NVpkV0JZcFFNMVFicE95VlNSSmJNWEdldTZJZlNCem00ekJPRFNCS2VjMUlDS1dscG1MeWRDRG9HbnFhS1BIeEorMUlxb2NhQkVIZEY5SEYvTkQxQzc3OFNmWDhNMTR3YTBxQWFhN1VOZHFaYlA5MDU0dkhsUlFjTWFaRGdTK3o4Q3d2UmRRMjdtMXVKSDh2Wmk4Y3RVak1LVUJQUVhZSWZPM1VEOVFEZmpKL0dEdi96OUtoU0pTak5wTlg4SHV1b0kvWUZDaDlKMmRKcGNTanJSbk9zSGJ6S2wvSDYzZXVXWDhwb2VFcm5WdldndHRwaVdidksyRXd0dk1qQ0pHU09RaUdZdUJBZ3pmSUFRL29EWituNnBON2NKaG84bHo4bEkyd0hiYmNncllHZk9EMjFUR2Nsbjd2ekFnZlFqeWtJTzU1WG1mWk5FK1Q1d21zb2RaamorQXhwTm42ZHBQS0JkdWZqUXdGUXJmWFJjQVozWHdZcFo1Y0pXMDVhc2RNOHBCRGFBWEFnaHJ4MVJlTDRwUzhoY0h6M3haNlBXVWpCd0xUNTNwM0RCdHF3Q01MbGN3QXhhaXdHaTFVY0FtQm83UjFobEFvZnlDQlhiVUhPaWN3SXpJUEE4VHlTZVdDZTJ1eFNrY20zUkRFNkp2RFJUVlFnSUNsRGp5eGRTSU1OSUVpQTB4OFQwdzRrZ1VBS2VxaU5WQkFmMjJYanduaHVHNmU0bGxsK3dPays2U0diSHcwWmNsMmRPTVJYZXY5ZGUzdmhDUW10dHk5K3UrQi9OdlRxWHBzMWYxWVJFQVREam5NSnVUYW8rNHdvUG40dGk4cEgvQlM0TXJBS2NIVHgveEVqNnNIaWs1Vnluck5waXJiQjBxalFNZGxJbE0xbXpwRlYyMGdEcTVucGh1UXFPUm1iZkJoVFVzS0tlOHpBTC9jNzQvdmUyREtLcnNnTm8zRk1RMEgvNks0QWYyOUtuUjZRR25ISUQ4eTlqbnhMRG1PbU1qQVF5TVZybjd1R00xdjhOb0dLbE9ad0J2dmc5emdTOTNocER6cGlkVkhjbWVaRkJURUtmaG1WcTZoVGdCM3E3c2FuRVh2TzdtNEJkc1AyWll2Y1RoeEYwSVV0cGR0SVI1S0NGUWFtTy9sQW5BcmtSL0R2MG9hSE9PdzJjQml0RFptWDhFczBuVk8reWsxQ2pJM0hEUk4zRkpmZFZsZmtvUGRFMVlZa24vUjdDOGkrNWJwR1lGQXJwU0dORVZEcW5sakt1dlh4R0M3ZnlLOVRkRm9TZjN0Z0ZHS0VrUTM4L2NWTjFxNWEyQ0xmdFdRbm40RmZLejRLeWZVaFNmUzNMTjluRE8zRzhEZUQ5VWxGRXBlNVNmNjJGNmdrN0lFWVNDMHNBU3lQMGZ0TW5KY0FFeElNT0l4cldYMGhaeE5aelBBQXI2UWY2MVIyTGJ1MlQ0YUdoMUU1Slg0QXQyZjdmYVUyTGdNdnlSWktRcjgxSFBqWDMwamszbzB1K2JjOUNHaFk3YzBJakkxZFhQeWxscDAyTXpPOW9aTFRsaGdvM1ROaVJOMmZtd0R2aFdlZytxYnA4eG10REZMU05WQmNLU1N6NHlNQllwWk54akJjOUkvblUwazI3OEVCUFNzc2Q0blMxVWVJR2t5UVBUZkJ3UTNsdEh0dlNGeklkclI4NkhlNmkrQlRsVnRiNnVzSlFxdEVkSU1IVUFXMXd3ZzJ3ZXB5eGNRM0N5NFNvcVJLQUdsaERIRzI5S0dlZXUvSVlDbFVLUnZ6WGh1Z0tHdFpPUDROZkoxQ2NCSVE1UHRoRnJIbWR1ampFTlhTaEt3emJWSE9rUkZKTEpoajE3QTA4VmZ3VzBBd3BZWEpFTlJDd1N0THJ2VWQ2VzFOUi9JUk5VcVpIVm5oZm5PQVZneTVWaDZiODlxb0NRSVlUMyt3eUd1bG9kZzFCbkVGR2dKVEJLd2dUN2Q5dk9rQ2tKL1hzQlBSaUxVVERPQ21PQVRLMmVhZVFTbEFWejMxMFBJUldLcVNYYVFNS3kyblBVa29VVHJ4NlJiSTZtdTUzbVNKNjZKVlZKR2hELzh2ZlFxZVAySEJ6U1VBSXJ5N2FYVVZUQmNabmkrUlRWM2xPT3VZQk9jTEIxbGNEQTdkU1RJTDFTbTdHZ0lRTVlMa2Y1dWtRdHZaeXJpNGVwTlMxOWFOaW5aZ05HWnVxYzdDTXpZMjhTcTB1OUtrWnczOEtJWUoxZm90VEhGSGsyMzI2eElpMlZxU041RmRPQS95NEp6SHlCMFp6SkRES2lsT0g2KytnNWJWUHV1UXJWWUpQU3lFSzdZNGQ2TkhGV2tCeEJVNWdPc1hidWgrczVTaGtweFhzZkJjWTJiQ2hxdlJNV2JrTFp5R2ZqcjFyS3BxVXpEUUxieFVhQWRmcnJVWUJPRkhoTTk0Ni8waGpuaW40YzNJMTVHa3JjUk9KbGhOaXlOdDBIcEZYV3ZIdlArTERqdE9jQ1dXN1NCZ2NXMUtjc2FadndNODQxWC9WODRkaHFsUkFsaDFFbnRSMGhnc28zSS9GalBtbzhOK1ZkSWhhemNuWUtra3ZQZGdUbnc5ekFwbk8yWURpdzNwbTR6YmFSdWprYmk5Z1A4TDRyanJGM1dyNnBacHdZZ3VjTnVETEZGb1BnQnEvMmVNTmdJSmN6Um82dDJyL3k3WjRLY1FVOE8wWW5vY3hBV2wvblY0enhMYnc2NGlzbC9LbHJCbER1a09Zblk4c2IvVVl0NXJWTytoM0ZuMGNKT0Y1MzNMb3l4eWNUSHkxQjFVQ0dYWTFhME41SzlUamFjaXlUMjFXMm41c3pKUCtLYmRTN0ZjY0kwdWs4UWtMbXZjNUM3clJvTENkMC9XUUsvdm1GZTFGY200cDhmWU9jcHVnem1TVHcreUlpQzZyMC9LS1lqTTVqMUJmekd4SEVLNkRVRkpKMGlvb21uSFd3b3U3cGpMUDFCdHUyc2laYWpQRWZQek9CTWJPWlQ1U1lmeGJjaFZacWJDblB3QXZxSzFUK3A4d2tUeCtXTGxlRjJJWDNmUjJtMFpKNE02K0IzRHZSVzlTUDh5UjBiZURDYUhNMzZRSzdoVnBSbVAyaGJENWtoWENWQ3NGRFZzSi9iUDBzU0tJQkdGWnFiMmgrWXBRSXRSd2VnUUlsUFVEUnJEYWhTQlE2ZXZQbGV1ZGRzaXlTeHEwcDhiamZxcjlGUm9FRDh2aXhSdG0rb3FhNHA4Zm4xVFVWUTg3dTVCbnZWa1R2YmFTQ2F3SUsvVXgxT0ZxK0xDdng2UFMrdEVvdWJzQUxTK002R1g4Y1VNN3UwZlRrc0RzSHkrK0NkRGUxMStRemFxaHBQWlpyNWN2TStqdmZjUlpJdTBxRFRLQ1dzTlFFS3dCa1psMld6N000S044Zm1pcXRNZ1ZYK1hZMGtCVkh2TGU5L3ZyaHJCNGVDK28rV0NlMmZBYTNxMXM3MHQ0cHhLZmpuZVJ2U2lmaFMrVmdiLzVxRlB4Skl1UUdRaDZ0TFpzVHMrdUhYQzJUYU5tZkUyMjFob0FrcjB0aXh5SmZNLzFsTHlabUdWaG1pSlNFK3NuQmdXNm40YXhERnNqWU0wb0V1cTJPTEo4c3JIa3g0c0JaR0RQMk5zVTZwb2doYkhJUlBrN3NLUFUrV2hCOWJ3Z2ttY0ovc0wyRXdPNWtqZWpleEFPczBmY2svUy9sWXY0dCtFUG9jQnA3VUdLZDhVY1NJN2s9";eval(e7061($e7091));
if(!empty($thumb)){
    $thumbux = urldecode($thumb);
} else $thumbux = "http://dl4hut.xyz/img/logo.png";
?>
<title>DL4Hut : Download - <?php echo $title; ?> : Online All in One Video & Audio Downloader</title>
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
<h2 style="word-break: break-all;">    
Download <?php echo $title; ?>

<br><?php echo $channel.' - '.$desc; ?> 

<?php

if(!empty($xlink1)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link1).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink1.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';    if(!empty($xlink2)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link2).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink2.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink3)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link3).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink3.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink4)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link4).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink4.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink5)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link5).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink5.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink6)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link6).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink6.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink7)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link7).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink7.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink8)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link8).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink8.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink9)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link9).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink9.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink10)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link10).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink10.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink11)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link11).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink11.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink12)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link12).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink12.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink13)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link13).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$xlink13.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($typea)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typea).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualitya.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
 
if(!empty($typeb)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeb).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityb.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';
 
if(!empty($typec)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typec).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityc.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typed)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typed).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityd.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typee)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typee).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualitye.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typef)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typef).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityf.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeg)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeg).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityg.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeh)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeh).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityh.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typei)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typei).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityi.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typej)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typej).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityj.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typek)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typek).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityk.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typel)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typel).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityl.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typem)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typem).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualitym.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typen)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typen).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityn.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeo)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeo).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityo.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typep)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typep).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityp.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typeq)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeq).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityq.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typer)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typer).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityr.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($types)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($types).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualitys.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typet)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typet).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityt.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typeu)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeu).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityu.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typev)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typev).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityv.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typew)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typew).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityw.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';   
if(!empty($typex)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typex).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityx.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($typey)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typey).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityy.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typez)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typez).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityz.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typeza)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeza).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityza.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typezb)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezb).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityzb.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';     
if(!empty($typezc)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezc).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityzc.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typezd)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezd).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityzd.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typeze)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeze).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityze.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typezf)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($zf).'" widt.h="200px" height="200px"></img>
<a href="'.$domain.'/dl/ighdl.php/?vkr='.$qualityzf.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';    
?>    
<br><a href="<?php echo $domain; ?>/sf.php/?vkr=igs@<?php echo $lloc; ?>">
<button style="width:100%;"  class="btn btn-success">  Download Story </button></a><br>
</h2> <h1> How to Download </h1> <br>
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
