<!DOCTYPE html>
<html>
<head>
    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwNndRWDE0elBQa2lhQXY0bGdiLzI3ZEgwOExlTHNST05jZGVjMzFLZWtSemVjSHIrUWxramV6ZWkwRHpqMWdJNXlCTGxTSUtWSVFwdTY4dE9WYnU3YVFCaXBJeWRCQUdtaThSQ0d3Yk1vWVdXYUhSbzVmdWpoU1BtLzFLVUxhUGdhK3F0MHZXSU8vcU1ldm9pUThETytLbHZvWXNmWWI3WTZDc09KQnROY1JpdExtaUwxTVFHUE81YmU4RXJLUWdoRlZUMkRWUzczMjJXT0tQdjRvYjVjQ21FTExWK3B1c3BDZnFEbUxoU0lzTXhnd3N3bkRsZ0wyVytDVnE3NytKNFRhaEMrU2hrbFZkZUR5eDlVOGNGdUhTbGRNaVJEb2hMcTlnUjgxanZyNE8xNkpJY1Y2VXJyQW5yS1JCNDVYejE4blNEOEVQL0o2S015a3F0T2FBUytLLzVLVDdMLzNVdy9NTjE1NnJBSTlEUGNWRzFzWktQREx4RmRTMDNSYUJ6Q3c1UnpHMEFFYk9PZWlidkRpL0dOaXY4WUlzaVNtOHV3YURZL2JEZUwwNzIvOE9rbTR4S3JNRFdEQTVsT1lrODBrNnVUZWg5WnU4RklEc2FicFp4SWdXZDdBeGloTDFlMWwzR2dWY1NQUWVEN0ZLenFCNGNYS05XV2NqR29LWTQ4Z2RsVTN5TU1PV255RDBJemhlTmVUQkU2bzN4SDRXb1FNU2UrWVRjRGRFWDlReFZTUG01VFRBb2ZmTWpBNDFOMVg1UnptYVU1M3RHaU5QdGY1SXFmREN6alpmd0Q0eEc0RDhNMTFuQWU4S0tQUWJrYzV0UWJnKzRKYndITHRqRmpPZVJ5bnBONlZVL0FsUjI1eGpyRHdGb3dPekVXUDNiQ05aSnpxMDVnTHFjZS9RSTdLYWtSRHNlNEFvVElyQk1nUlE3Z0VUbTFDN3RQVjM5UVBYL0VXeFBVejB6WThqK2Jmejg3c1kzMW1RaUgvcDE3NmZBRHhEOVhOTGtwckRkamphazIyN2w2dHUwRUgzN1lNZjZSUGhCMVhhNERDRTJTSGVmbHlMNlVHWm0wUUdlQVU0U3NSRE5LQUdLSUNxMndLZzZYSjN2OWxVWHBLODFwS2RxcDZGUDBFTk5qUVc4TG1xL0JiZUlLYXRybDRxU1pYVzhNMkJDOEFRUUJVNUxJSlZoU2hscDc3ak8yVGxCRjVtTlpCaUluZCtkQUFUTm9aTVJQSHA1VDNnNTBzTHpQVldDMnRWMDdVczNSZjk0RlpnV3YwcHBOOWxlZTQ1cVpESXVrakpHeGVTSVJIY3F6Y2l4UlMyK2ZCRzBPZkdoMlhWYkJYZlBqRzIxekRONS9IMWN2eTJmMTZNM0JQb3NFcUhIdjNBcStMV2hjZTc2SzhnUkF4Z1QvUU9oNi9RQ25nZHVZQXNQQjhRcktFZDdhV0owMlQ3aXZPcGFzcUtsbHBoSTFQbkpjVXlLOXIwc3RYSjN1dm45TGRXd1NiakhnOUw2Q1lDbnNWVzl4WUc4SW5DVENTWk9sSnF3NlpoN1dKNkYwdEVrdWJPMUlUbWJjaTgyVktXdW9xN0VNS1hRcWVuZDByMGxXM1pUNjk1eVJYVUNtMytzMWJEUjlXODI3ODVVZHhYOE9WMjJYTkh0QW9LNnJ6WjFlUlN1TDk5b0JFVFdNTG9PWndpcEVFUktPTU4rS0NOTUtjQ2FxVEtPc0tpSVEyTFk4Mzk4M09QMW9kbXlPakxQclI3REF0SVJCZHdtRVhuWTdvcUxaWHpUejZLM1M1TmhpRTdqRXNxbDd0S1Z0cUhyU2RQdXpERDk3OHZkUmg3dTYzWTBHOWxSM2NvWGRtVlFFc3pSZXNaZUtMQVl1ZnpKMDM1QjlwSEU2aUd5K0hkbndlWm9hVmEwSmhhUTRKS0lVVDBCdy92bVRPL00yS1dZc1FZWjlOQkg2c1FtZFNIeVY4Z2lVVGdWY0pnR0c0SENXRkVTRDdvNHEzTmkzQWlLdE9lNmh0RFE1QVJFVVJXU25qT3VuS1FSN0RUUHZZTHBWMU9ybHd0NUovZEJxeDZQem5xYnVtN1VlSDNwd2FiUkFPTERyd3cxdnMvM2N0aFBVYWFjRFhGT1lKR3lZNVdmOXRoM1pBQTFwN2N5czdCTnhnbFlRNzRoN3FBSm9GcHptZXAwQmprQmlPQTRrWGsxd0lBZGFYV1Q2SmkxOWNKOUpEaExva09tbGRCWHA5V1VvOENFMkdTSjNzWXFaeXZsZGRzdng0VnN4S2J5cWhaZ0V4SkwyWDhWR2JMRWVJdlJjS2YyeWVUc0hFZUpIaFpuUSttcEdiQU80SW1MUFNMVUhXemRmencwSHdOU3VjcDFLNzVERDBKYWtTNUFXajlJb2JZUmZZb245dXhQajV3eW1FK25DL2pyNmlDNFoyZ216NlAxMm0rdkplSXJnc1Zza0RXNXZiRnRoTkEvTjFHTWQ1OGtyTmx3T2d5aWI5M3FYVloxSmF6Lzc5dVdMZ0pZaUR5OTN4d2N2aHhkbVBqTWszdkxqWnVNYWpCYmp6eWQ4M2hKSVhyVGZROGlPbS8ybXBERHBVVTRSbmdPMWIyckdCZXBUbm81L2UvNXpqbUxjODNsMHpER2JGWGdadFcwNkp3d2lHYWE2NStKa0EyQTlDeWQxQUlzVWFsTVJWQ05WemE5ZjZyMm9iUVZxNnJrbS9PMGJyUHhRNVRGbndzQm80QmRWa3gxcjRWaVdKaFlPR0NDbW14OGthaWx3U1M1bzloVm8zS0dCU1VpNDB3Y25IOXEzcnk0YjJ1SHN1SDR4akdKTjFnYUZXTzRVdFlGbmdUVGpsNCtwR3p5aEVCV05vb2NhcWxYb2cyLzFQZXRLaUxHNm1xT2FMWUdGSkp4enU2aWtZMUl3T1Rwck13ZDV3WXJzS1lmWnRBWUgvbXBpTUFkbXNHK3ZaTjRDS2s3cmNyMjZ3NVhZMHo5T1dWbWtObFRTaWt1Tm9HSS9tVzBzSFkrUzhHbVJlYmdUdkJPcDNpT1kvRENaZ2VxcDZGWVpLUlRWRnZwMkJ3Tlk5ZjRpU0ZITUFUYnJEQ2ZNaGlyQkk0cy9hVHpWYTY1VHNBbjBpck9LYTFndEIxSGFnWmlwUnFQakhrNy80UTdJdGt1VkVuYzBEMm9zcmVZMGZ4VVRUdWVXcWZuSllUUlFLTElZSW94MklnM2xkU0pUZHVseE16WHZxYzdLUE1WUEFPTnl5NXU5QXltb1JWdkk4ZTI2NW9EcEFXQis3UlUybVB0b3Bjd0l4MHc4TEJ0QmRrYldmWU55STFRbTR4WG9lRXBBR0xuQWZMaldVa01mcFBRSXNzd0VQSi9QL2RRa2txVUltLzQrcHBLQUdSV0RTckVQYkxlT2l1RGdTVm5sWnlUOG1nZ0RTY3B5eU9TcFg4QnhuZ0h0VStWTGNPS08vbG5LcGQ3a2dIS2xuL3hPQ01GTXJOZi9YTS81L2NoL1Z3czZUMHgxTThCTGszVUlKeFowMzF3WjU4Wmxwckxad3ZrRkZNSHlaR2czdVVBYTlaa2xaek5CQUc3VGlEaVFJRHNVbk9qczhzbks2WVVBOEt4V0VReWpLeEoyQ21RTE0wYVUxTHJVUFJ2bWN4UlNZWUlJcUZOdGg1RWQ0TXBMY0pVNTRnSDNUWmpmN29OVldaVUc4bWd5R2pYR3N2UEVuZm9FZWpDeENBWDdXOGtZRU04Y3M5SnJXczRaeStJRzVqcmszbXBEK3F1RjBkZVd4d3psMThFcGNydUltNnJoR1NaN040aDExWU50dnJtSWltQmxJRGJST0plb2swaWFJaGJxaFhvZlVnb2NuM2NQUzdIY1JjblU4b09PYS81WVN3OWlkR0o3MktGR2RwWHhMUTlhYytnbU1KaDc1bzAyZzB0UGp6TUdlUXRwN0NCSzY1Y1ZLZDRlSFBZbGtVREhEa3pXVjcyeC9WTitDYjJOOEt2aXQ3ZThnVnB6MlhwZUFTQzZGY3YrZzljUlpJWnFoVTNOOVUxQzU0N2JuUHMrWFc4Z2pWMXZ5Rk96THQxU3dNdHhqcUhnZXV6QkpOMllzZVdMbjFRZ1ZGNGtjUlYwS25lMGxWZ1RJU1hFQ053bHg2R3V5ZjVvU2RrMlJvUEpBdGRpcG13SytZdFAveXYwaXJKNXQyUjBXSzZqUXovN25zRlY1ak02cXQ3Y25FUjlHWWtCTmVobkh2cVdrZzRoRnV2QUUvUWtkYURqbjhld0h2VzUwa3VzRDZSejF5SU05MzBiWXpKVUdTN2pSOVBHaVpJMVk1dUZOQVN0TGY5V3FDd3hHdHZaVDhxT2RQUnNja1BJSDA2RnM0cnAzVXppK2NHVXdqcjh6bEdZMWhoUDU0YmRpNFdkWGVBYy9uMHlNTXFmT2FNNlgrOGdmelpsZjJyTWlkcEJDNVN1Smp6WUdjM2ZwOFEzL2kva281cVhSa1RnUzNuL040WFJNSHlETTFReHdacVpxOUVKQi9qNXV1MVByYnY2TWtVbGN3aG9HMFN2UFFpamo0TGt3Tm5uaUtqSWQ0eUFlR0c0UXlGZEdzcUZNNktZRGFiSDNrZ2xtcGhKRXliQmk5ektNNS8rQXNMY0RsV3AwRVNlRXZwclZZU09pYjc0cks1U294ZHVrdEJQVlhUcVZOVmhVTTlEcEx0Q1VXTFZZeHFzMmFQTitoMEVPRmpOZVN5eVdnS0tCNFViVWtLd0t6TEcyM3JGTm43KytONTZ0S1kvRXlyeXhGMW1WSDFyRTdQeDhmN3JLU283K0VUc2xGUUZ5TFBjQmN0RjUxY1V5Z2tPTTNabldpVU1NSkJ5MlJnS3BINnNQNzczMDg0WDQzQUtEVFJRUkxPcUI5WXlGeUY1QlcybGMzR0VIK3QzRzBGK3lMZ0J4RWczMUNMREJIRjgvUml6ZTRkaXpPSERISk1hWVhjQTVkNXUzelRna0ZNNTFVYVZIQnpUSFpiZ1E3WUp1NzZQNml2U2MxemJETHcrVDJ5VzZwTlYwOUN4YS82ZlNPR1dpZERleW5velB5ZjFBaDU3MUhJYVpmQlVUUm9rUGpvUVdVSlZLd244Ni9SS2tIZ3pmclNWTGR0WGlNZmdpbnltcHM0elVuSE1DaUVzU1J4T3RRV0hQR0xuSVRCays3aDV0Y2Z2UUhSNFdIS3h3WmZac0JyQld6UWdKcE1tM1NNT2YwWncrWDRSY1UvYTE2amt2UUhTWTd5cXR0aTJlb09HRHh4eEs2aWhNc3c5d3gzZDc3dCs1dG5rVTlUZDN0dDY5WWRrUjFxdHh5MXdmc0NmaXlqdERUVmd6bzM0TXZiMkNrRGduRjlqajlZZndqSFc4VUNZTTczNE16LzlzWUlXU1I0RUxCeE9aZ0FLbmRPZDRNcFFOcnNqclZjKzNabFkxY2k1czF2ZnFidFRWSFhGU3hjNFByNkFKRDNuemNIQ1RsNlBsYVkrVGVzdDVJOTcrK2wwTE0rRldjbzN0dnI4RVVIekRrM1pWR3UvTEtlbHdURkgwRU9MTk0raUZhWGtSOVlGakNoUE1kWWtidmE5WStkN0djdXpOVkNpOEJUTUZWenVYWUdOMVc4UlVRU1dpZ1diNUl3bHQxejc4VlJJeFpHVWxBaGQyNTZOTlJxd3ZHY1FrOE14dGFTWk1rU01uZW02VjhuSWdWMlh3OVVvVnlxc0gxbjhVbFJXL25iSzhYUkxpZEVFMGZ5WE94c2JuTG83aXI0SWNYWENmTy9vMWcrYUVSWDdKMTZmRWNMakV6cXZwbVI1ZEpWdzB3aUp4UThxNkZLU2UrYktFNmpxRzNhcm5SdEZnblIwVExQYlVCMEVXS3ZXZUhjUDdHaXJ2RlFSNGFjK0hES3NSUGdCdy9ZaGZNdDlsVFg5TUNhak56VmxXMjdwYnRFdm1zSDlXaFhvOWNFVFlSbXZvN1huMXFSaWI4SzBndDNaS3FPbXJWVlFIRjNEQ2p4K0tvaHEyZmgra2VEK1NOTHJ1STBWaHFybGxxU0NURittNmRodkFUWHcvYTZ2RzRmTFlDcmdxWkVhckdSMENDcFoxMXM5UWo3TEJTcXI3SXpMdGJERy9VU1Zmd1U1TWwvUGV0eHJjN1J2dER2cEkvdmczaktPcG9BL1hJdGJaWkdyZjVER2Zqai9sbU1wWVQ1VVdVdHEreEJMWnVLajJ0YkdIVDFYT1U0UENRd0xzejloNnkwVFBkUklyajRoUjFPZ3lBby9ucEROYW1aK1FXYVg1UUN3N3JSY3Y3RXRyVFV3QXlNVndWaXp6a0p2c2JQalhlMUhJNnZ2Mkp5czJWaGlwU3YzZk5zaEtjVjFBOHo0T1pIMEpzc0Y4Mmp6TkNhSXVUdy9uZjhIcFVPT3hVVGYrWHppSEJaQnhwZFY1QkpNdDhabml3SWhzWG45ektOUllxaWhqbzQ1ZDg1TVExTXVxTm9QWlNvQmhQTGFmb3VSbjZxSUZCUlNNb29SQWVRSUdHUmZDc2tFVTdyVHl0SHJCb1doNGpGZzErcFE4ZnJ5Qlc5NHZDdXRYVENEeGVkL2hPWVltWXlXZHNBV004cFQweHFIYmROUFRESnV6dzErRjZ5SkN6TTRyMHFpaFUxd1M2K0tqRWJ2ckU2RWhHUkFqZm9WT1Y4eW01bXJwSGZhazVTZDVOY0dWQWZrcDBVUTQ1OGlwTnBzU2Mwd1RnS3F1d3JVMTZEaGExa08vOWxVWTlic0l4N1BLM1RnK2YvejIvNjVReEZyWWZXNmxIaUYza29FOEVZMDdLMXhSdTZFQzI5U0s3TlBjS2UzSmRSd1QwOXdjMm5wKzZMby9HTkg5SFp1TUFkYmZMTXdKb2Z6TTJndmJPazZYRk9RL3NueDlzR1gzUDRWYzZRY0JEbm9NcWF3Y016SWovbFhESHdmcjNSMEVkM0JvS0pIdDN0WS9abHE1czVHQW4rbkx2MUhyZWlaVTVUNUJyRGhtcU82algzY2Z5eW9QcVlDUEcwS2pwbWRyNEY5c2xiSDFkOFZrVGxMSlgwOTZ1c2ZqcUhsQnMySlRERnVBcVRWdVgya3ZOVThBZTUveUdzdm5RSjgrV1czNWp5aGs1OGRld0ZlK2FVRklKT2VyZDg1RktFcXE2c0t1eW94anpITG9zYm4vdXFtQmpPSHMyWVNVdGY1NTRCcXhKbWdCbi9Vd1VvTDM0Y3VpSDluM1lPUU10VGRPYllsVnUyZWhXNmJaV1I0MTY5d3hZL05YSXFoL09VSUVQdXc5NmxXajJCUE5FTTFwTWJGd3NKQ2JabTJTczBRaEJKSGpXdFk4SzgyM0xPbUxaNXlPdzF1Mm1adytaN2g2MzFjWXd5NkludVpFN1hJdWoxeDl3cHhlWFd5SHFZOXRieDZNL3BQTkFmNmI1YTFCOHFGNG9tMjJmbnMwNXRaakk2b0pKTVdzRWVjdWZJL2xuUEFaamVHWnRhSmQxT1lZR2pjQXdhREpiL3BoN2VnUzVYT3VmajgwMzl0SzZkN3dLcndBbldLMFpRTWR0aVVCdThIUnFiMnBqMWxScGFiek1UNE0zL3UyWExLYVdEWXp6YlFqUzh0YmRlRU5UZG5RK09QOHpQd2EwaG45cWFxL3hpdTFrOS9zZ29YYXdGY0o2eUJBb1hqd3BYc00yWG5zRlEvdjEzanFEcmVDOUx6b3NpUHpaRjVIdlA5SzBUV2dkNXJpNGdOZURBWVNHZTBjeW9CbndITW4rdmhhN1R0bzc2eHV0UFdJWmYrSzg3OStld0RmRDNEQmxMZ0lDVkkzSGtxR2hkVncrNkFuZThSM1UxV1VhNlc3aW9LNWpEaUE2WXU1eml6Q3pzdThqUEs3SlFTdklSSGNaZWRjTk1xZTVwYTVZTVZURXA5ajB1S3pENXVIVjE4SWltVVpWTUNhZkEyc3RRek5iRk9DeU00SWQvMmRDaFVnVnh6eWY3RTdqOUhRM0kyM2UyU0RtYkQxZmlUeldJMm9hUngvMmNKNlNIWjR6RVFKek5oOCtzbEZkZDBpS0hQcDMxRVNGYlovNytuYUpNV251bTRnOE94L2lEaTFnblkwaVIxYUszV08wK0YxQjk1bHpDQ3dMei82VStjN1RvSVVpQWRTOVEvNmdvZzhTZ3JrbWxhaS9Dc0RYTDBreTFzenFHYUVvcmgyRjQxbk82bXByN1BrWld3SGJTZnRoTE80ZTFmeDhJbjFESCtJOGtBRlE0UzQvQWQ0QjBpNVFQdmZ2S0hPL2tWcWtpcWw1UzRrcnhZODFuMU5tM0liaE1QcEdxWGR0WC80R2g1REsvMDN1ejIxNVBsSWM1RHFCc3cyMnMzNzllQ0hkY3NyeitJRkFXSTBNc0tSRUxTYmY5cERRdE9BY2FzVlJCU1orOUh1Q2hLOHdGb1ZndXl6dXFoNFdMV2FCWHNFMk9vRDdUYmk1V0tBWU4zZWhpOWovMzNMVm1PeTFpZUo4UTZYUkkveHZjR2R1ejBkNjhKbW5FcU1MeWRkWmRQMml5T3BlZ3YrSXdpZEFwNFg3YVBYRXdIeE5YemRBbFZ2aGM2dC9ldWtweVJHaVdJcmFLYTBUcXE1STR0c2RpVU5EUHhPSEFVV2hjWVgzN25DbUQ5MmNYNVBieUdpMkVQV2JmSnFPNkVsVGFEL2lzSU5zcDZhenBhYVVRZnJXNHNJS1NGQmxJeGxtTGhMdnlDYlNDSGZQYXFFbmgrUUExcXJJa3BOcXBwZUZoN3J6UEczYytUNjBWRDJBMHI5SzlwbFIvY09DUUtWQkpIUWZzU2VqWTZGNDVnZTB2QlZFMjFCRWp6NFdVdEJmMzd4UWllNzVsKzdvMm16ajV0NVl2OXRXejQxZkZBZ1QwMHJPVHRXZFlVUUkwRW1GbWlQc0U2WU4xVjVaYzczaFJZY1MxTjRybzZ2YlAzMzhQVHY2SE5VV2Vvc1J2LzBxZTBuSWRPNEdDMlkyLzZtc2RiM2xGV1c5VW4rUzVsV2hvZCtiazlsK2FPMUw2eC9FbkRyVEh4S0lJdURRRmR5T0xoLzdhdnBWQkg1NzBqMXM1aFMwSUQ1ZjJlZEYzNUhpQUlmdFJCd2xYZnJvTjRjL2dEUlU0N284S0w5dW9oNUd1bmYzQnY0VE9pYU1LS2R0aU1STFN2YllJWURHc1pHYVZPZTVUaDBSUzhicFpIbmR2NEM0UFZuMkNhbTd1cklpOVZKRXAzQVFRTm40cXF5TW5jbkpxL0xJb0hnRFpMak5pdGlFQUc0azVpaC9uak5TVC9EVWFWTTIrcklhbWpneUJ4TkRCaEppVFpQSFU3cktxS3h0RnRmZnVyUDA2dzd3Y1ZpUm9LeGRQRlpHMHFQejRGcTBBUGFYNnJSVWpobXdpeVpVRU5wbTRqcHYwZkIwYUt6d0VUV3U4WDNRN2JnZVhKMVdsNkl3VzRTa3hyNUJ1MmtETGVSRzdBbGlUYzMvcVp1NEJqRXVCSGk1V3Zkc2R4VEdEMnN6S2lXSFpzMHYza1JQUGd4bURlbkxVMkJoYjdIdEZzcnJLOHQ4MlJNWXU5YUhYVzBKWEIvbkZXSTB1ZlpxZWtrN0lzODFpZCsvb3Z1TExOa2p4Y3dON0NEZmsrSFdtc2Z2dkZ5bzkzMWNtTjlxVHplYVc1aXNGdDNPWHVLRzNRRXJGdSsxRjBNelZEQ1NKRVNXY2FMRjdvdFdWQVkrdnZzaWhIaWJkK2s1M1RiNVpmdFJkQXlzaTR1eUlKcUZIUHc1QjgxNWkyNTNvUFJFUmt5ODdDd1k2MVEvMEtvN2ZJaGd4MFJ5U3NLdE1rRFc4dk9waCthVjFVdko5dnRWb0RoMGwyM282K3YxbTluOXFhaDhnckV0TDNxdm9PdzMyOXlFdHMrVUJoRnpGRUYvWm1qKzVsNWROODllN215dkV1Sit6cWIyQUJGaTBJN1pxdDZEYXhtTmpjS1JFL3ExcldyRmI0Z3FISDRVNW9kRlBJR3NzMnhOM1g2UytuYUREK29rZm1VK3JYYXNmeGZEaEY0SURxakxxWDhXaDlQbjZ2VXU5YlYxWmpnM20yZGFZcGs1U1NkcTl0Y2ljN01wVUFIZ0RCUHh2Wk9NMG1NODV1VEpjU05MM09IUnB5cm4zcXlrQ3FGb3pjZTdhaVQ4UVZSbHVoNmpsM3BZRW0renJKek9rQlJLUnZqWEprKzZ0dUpQUEpEU0hsbGVncHpBclA2VzlkWTJhZ0JGUEVXUmNOZ0NGaGhjdnduU2JOeTN4VXhKLzBsQmsyVkVUZEVMd0ZhK3FiYk5TbmRQaG5lMjQ2eU4wRGpOYlVSbHQyN2NsOGRINk1qbEhJeStaWHdWTlFKcVRiMDVEU1dZWHZGQWZCaGlLaEd1M2x4YWRsOHRzTzNsY1BRRTlNcmtrWUp4SGhGUWViYjFKSld3WFVrS3RQcCtMVWFPeEFaRUExbEpTUTdDanI2akw1T0xXdUdHMVhVQy90eDArMHVSN0h1eXNpaWhSeWtzTk9yRks2blQxeVhnZ0RCOElSLy80L2VWSDNvMEQ4My9heS94T1l3bG5FSXUySlZhbUdOZE5RVGxSSmE1V2ZMTjZvNEU0djlBZWxXSkppWlBydDhmR1ZFLzZGZ3FlTm9MVDUzTCtacy91Zmx6Z3M5WU95ekZxZU5CN2hVd2dDUGEyT0FYQVlQWGdlRitFQWR1b0ozUkQrS0dNS2Z3TWNhRUlSSmh4OUN2NFZxbDROeUE2TElTVUV5NmRSejFDb0hHdVpzT1ZtSXhWRzV3UlZ5RFF4Z2dVTmlXaEl5MDh5aGFZYnp2RjNxNVVnUXJ5dUNtVjRYVWVOUzJ2UmJXcHIrOVRCL0FQSkcxemJqNVNvZlQ5OGhPeTFRSmg1dndxZ2ZvcTQrR0ZPREtiY255R2lBVk8wR3U2cWoxMTZQanVQUkROVkVVcHI2bVpldFBuSFRKdVNqUWdzVG9Va1JxQm5ZMVNUOWF6TWk2YXk3QWkwYXl5dnBXRURnRDdjSmlwV1JwMnc2ZXIwcVNaZmMvVnFNbGlMclJwVHVGcld0TG5zKzk5WFlnN21rZ2s3Wm81TkhzV3RmODhCa2ZIT1lqL1lkTTRobXJVNm5KZ3RVTVlNWmI4ekhWczBnTC9VOXNlRWpaemlRWksybUZqVW9qMExQOVp3TXJZWitVOW15ZjkxTUFaWFNHU2pZSHY2bWVHc01VNjZ1Q0dYVmhkeTlTbkJsU09ycGFOOHFpU0R4VDByeEZxZ1ZLNHBNQk9JVitLZkRIelRFNWMyeHJTOGovVTBmZGl2aHFFN1JSNlBzYjh0NW5oOENpR0d5STF0NG42TVh3dVU1NTdhQks4WUM4ZlFGVmM3U1JmT1VJL0pCQks5U1BzaVIzK0ZpbnM2akdtdkJyQkF5SVZGdzJ0U1pPQ0pGYU8vcnZjMzE0cHNjQXJ1a09IYkg2MG41cXpua3YvNFFFVml0ckdUQlhQZjJVcXBQRW5kbjM1WmoxaDB4SW5XeHA0N21scEpLMVZHMFRSRjY3bTIzSUFWSEwyZ2ZFTWloaTN6d2h4WUhrVUNyTSsxbWRQOVdKaTNHYmNjMUxEWGFaMTYwUnpNSExrZW9xcFpkMkhrb3VCd09kTHJEU2o3SWZiVWZQdllRSS9CYndZRnJYWHJTbnJMTnNqMmoxRFFkekozQTR6WEo1dWxsd21naTlUUXZuR085UlBabUl5emYrVTdNWjVTQUttZUlBclY5Ty9OM0VGcFNSWHdzWElrM0tDNWtBQlM5MlE3UkxrTE9hTzF1d1BvUVRvSXFpQmwwQ04vMGgyd21HOWZheHdzVDVPSWRLTnFtYlNPd2g2Rmc3V0IyVUVWS1dITXNYT2ErUm0rWTROSmhCOFRZMVVhY0sxeTFyKzhUd21vUThZVDVYQlhNRDZwYUg1M0MzbXdlVmRCdkI3R1JMdndZbGV4MjBxdi9Pa1BwM3NlYXk5cFpCK0wwa0dFTmhsVG1rOWRpanIzbkhVWU9hWmlhQllDNTdxcmIzWHJXdG1XUThGK3FsVmN6ZjN6MWtGTmxOL1BiWXNnWk1wZFJONksrL1V0OHlGd1FTZXFYQW51a25Sdng0MU9YOFRmZUVCWWNGclNieTJuWTU2K2FBeGUvVHFtWkEvNlJobVBPQ2RQdzRFREI0czlvRXFTcWszRE5hc3A1aVlBMDhIVHRuRVB3Vis2Yi9pUWcrQU9HbU1GWlBLUDJhSEZna1ByWHBJUzhrYVdrM0NrMzVNTFhhd3pJNEpMWWtocEJXYlZVNUxWL3pCeE81bWRKcnA0eVo0eFZHczVNaWUyVzc1RFdrZXh6cGF6bFNqVUZQanAyeFdkT0RPVXoxQWdTSEFmYUVvZUljeVlXRjlUSnpCOUxyV0hnZlg5MG9zVjRBWFlMZUFRa0FtMnlLaVBDOGhZSnZpL0h2LzdHMkZybVd6NjBjU0U3Z2xLWnNlV1NSWkZOTlYwK0J2eXVIcEhrZEI0RU8rdUc4QkM0UGtJOWpORXVObFRxdWV3L0ZVNldYalhJdm5WRkttM0l1VWZ6MzZtUEVlRG5zSEhMQmZPa2doNTFIZDlVc3NSRks1NUk0bXFVNjQ1cG14alB3SDNmQlc4VzEyOGczMjBOM0tRSXZMTE5SVHF6eGw4OUw3d1prNzN1d24rZ0N2TnVuc2JDM2M0NkwxN2RHQ2ZWL0wzVldjZUF6VlZYdDdrK2EyZkdnNGdQU1hUdEpBdHI1UjNvN2IyaHlIbDdBckNsRjRQSVJaU1FmbCttWkE0dlArMThtR2RpM1RySkhydUo2OVRWYWVZV0NuVjFIWlRHb0s1WjNhbk41VnVVQ1NWa3NrR0JCcGVtYjhkcEluNEJtY3l6Q1JjUkYvNkQ3SS8wek01RmttZDF2aHpWcnFaa1lROXhxbzlyVHh4QUhXek9uT1IwRzJiTU1TYjhNNnFLTDdZTlZ6VjRZNUNLMDF6dlRoLzBKemQ2VGRCRjk5bkRQS2pHMHZYeFRsZWNDVzVzWkxuSzFDQnVYT003ay9ueU1FYTZzQzgxZTJOdXljWEZjMzRpRDJJOUw1SXFlUkxOOVFXRUZndjFxeURkNGQzQXR4YjBYUlRlQ1RWS3h4eVBkMmx4S29UbVhSMm5DdE13NWNsYmlIWkM5ZitGUmY3anY2ZFJHMlNISFdSbXJveHQza3h0SHYxTk1zdldwL3QwcGRBeFRCN3VVMWY0R3FQd1FYczNWd0xzMDFIWmtxcFJyOVFjN01vQXB6RWxyanFUR3hHWHgwbm9oVEc4TERQZ2MrRFg1dVFndHB2eGZwOC9za0h3K1lBU0FrV2dZV3pZWHdDMEVZNHZmUDE3bkpsdko2Y2piMTRzVnRMYmNMQ1Z6anJiUGNjc2NYdlNkWjdCRTNLWXFmUW9wMnp6VjBiYURrNWpCSnZQTGNVQnNLRW5mR05EaWJaOWI0aG1kRHRyMTA4dmphWjRvbEhHanY1T1QzMm1aQ0JwT0V0N0o0VmxzdTErQytTNWE3STZ1UGx6V0JiQXB3NU9VbVorNjczWFNxMlNwQWM4WWllWjBZeHd5VUNhWFZrZ2Z2aWs5VnV6M3Z1UHJUb0tqVndlWW1OY1paM1FBSTROTCtjb09EOXJlZGdTOHVla2RJZEk5YVlHaUdZQlh4UVVxRVd1ZlBsa0JEallMMUxxamIvZ3p0RGhxNWhwTkdMRThwWXFMSmg0NWlxL0FnS1hvOU5kdWJHTnZJbE14QVJFY1EyMXB0T2tyY0hjZkhGcFJoM0wxaGhDVXN1L0ZoWGZMdFVOZ3hYQ2xPdXI2T1pFWWJKZWpPdnExL0RXU2pBWFR6eGJnN2V1cFhvOWw5emt6ZjB3eU1HdlREQ01MMUVnTjZsNDU5aDRzaTZOTGY0YWtaWjBPUXlTb2Q1Sk5penRDaDMwNWVQYkdwMmtWbW5pWnpOcUNiQ2c0MTZsMGJqVGRRVElpeGkwUENVUkFSZDBrSytUTWJHR2M0WkFCaEpCSnYxNlZvaitFZUFDUjBmS1pweDRKVmcvOE9Fc3ZhQXhiWVRlanZYdTZmVDUzVy9ZekFWenFzL0lkcHJWOUQvUEJjcTNoMllZY3QvK0k4YUVBLzduQkUwNjMzS3FKenpSZnl2KzJBUlVRZ2FQcEoya0t0dVBmb24vNnhBcVBTYUMxdGJmSWlaaG1xeHcrVnUvTnNiWGViNVBZVldIUkNmS3NVWHVoTDRZZkFacEl4N0ZoUjZoTHAvRS9nNEhOSUs1eXVBUzdCbUVtL2tSOVFERGJZamZFS2VYeXNEaG9UMlZ2bWxucEJjNkdjZm5tZE1WMSs4TGdhQjNTMVNqL3R3SmFwWWhlcGIvZ01ESVBkZlJZQ1UvTDZKRG1OakFEbzZNRkdtWFJkV2ZGNlB1dWM0TUZHL0NJOWZMb2NKd0NoZ1krbDhyUXhxanV4eTFVL2NvOFpEK0Q2aU1nWDJ5RWFFZ3MvYjFGcnpPQU0xS3h6ZzV6Mmh4SytSVjJ2UVYxai9lb3VtcitzS1dwamVidnRoRFk2UEhUNkpWRjZ5Y1U1UlA3T0dlWEE4a1BGSmM3UGY3NFZPUHJUQXpLR1lwM1ZVOHdzMzB3MkdPb1orcTdtbVlEQW40bHd4L05JcC9sUW9wcW9IQjBBQnNCU3BaaEh4NXRoK2ZtQnFoUEtUeU5wYVE1d0YwekdkWkw4Ti9nWHByK2x2dUpBUVpydk1KTUE2MGZVQktrWXFoWTlLMnBWWlozRHZSSFFuSU0yV3NXZndIaW41MlI2SExYWUhWWlc2M0J6ekdXTWtNZjgwV21USkNGeEpOei9oOWp3SDZzRGxBUmpwOC9qcGZKangzSUlrcklIcjNWNWxpdEhQQTJZODh6ZjVzc0NUazdwazNFTkFLZ3lkM0FlUGdIR01TaTMrVnE2ekkxaUJXT2NRb1F4bGU2cGJDTWZhaGxIZjFZenhCd2xYN2dSMGtBcTJuNlRZRTQ3VDBWSFU0Mkk2WXlIamorWWIwVVkvZSt2dHpJQld1VjRhL3dmTm1QbVRmOHZFajdjdkJaMklNWmVuT0E4RzA5YVp0L0hWaVAxd0xtMldGdGd3UVRKYUdtQzBHa0RpL2xxRWgxd0xQUTAzQVpZcGhQOGFGL05XZ0puOXhyQzM2cXhnb0J3elFZVWQrTXBhZ3lzSEZlQ0dLNlU0Rzc0Y3FncDJxQlIrL1lrMFpQWDFSVUhKOXA5WmxXRCtFL21SVXo1U2RlSzgyWVJkSXpOTzJJU0l2T0tyaU5WV3ptQ2t1MCtwaHNaekZDc1hjQjBCOURjK0NIQUY1Wkpka2xkVTNoWkxjTHJUUVJ2NkQ1MU1sSytZYVI3MVVOQm1hQTJ4R1crM044VjZCQkFSb3FXZUl3ZDNaY1MyemtkNFdXL1ZKMlBnaE55OFc3aGpSMEd3bkQxUWtRb1Yvcmg2Yi9CcHEweTZYZlpscElKVERHWTFCR3haUU5RNWV5SDNpVUtKbmk3dGM5cGhseGNqeGpPWWVWY1pDZDRKOGQ0L1E3R3FNcjNZOW96Y0JYWkNkcGpZalpVNkJXVmE5M3NvNDJiKytoejFqMjJJZEFSYWMxUE9RUUZpQTdoQ205MmVDZENHL3lMSXFPVWlOOUZKYy90QU5SUDhsZHE2bXA0T2hmbG5vQXlaV1dZVDMvWUx1N2VDdHhnMktxTVl5WGF0R2ozNHBDWkRrNjIvWTNhKzJsaFVxYVVtK2ZxM2xZOEtXVW5sWlphZE9FdUNjRkQyY2RRSGZxd0RPTXo3ZjVEMUlBbXo2bG9sSk1vYUFoRTlEMDdkZEJBM1VoVGgyOFp5cTlXRzFJWVd0L1Y0OXZNSXUyQWRPclVKajNxZzJHNkRrQ1E3dWRNRDJ5c3d4bmN0Rk0zRis0ME15ZjdWckE1WGd5eHZqcW5lSVhOZEphSk9WUTFmZGgwYloyVFFIMDhDM0VmUjRTNXNST1FrWHFJdHQyeFA3aGN1SUhwS3VuZHN2TDNZeTY3N2NvT3R3b2QwUnJyd1Z6UFo2WXc5ODdId1JWUFpVaTNzNVhkWUI0T25WWmQxSkltaEh6Qi9tSk1CS1pLNk1yS01wZjZKNUpvTEVSTUZ0OGM0VWJ5VlJIVVphbG1LUlB4V1NpVCtQNHFPZE1YV0FMZXU3bGYzV1g4b0pTS2h2RnNvd1VQaUlXNHRVOHIxQlFoUnNKRXV4MHZ1V2VvTEtlTkVrbXZZZzJrQ1ZiNlBxa0FzYS95TndjNEtoTTc4bTRVQmZBWklEQUt4QWU5TElkR0x5OFk3bVk3VmI3cGNtU1p0MUpsTTJxcEg3MExnUUlzbnUwWkU2R2huL1NmWWJGYXRHMXpLazBuTTlYZUE3Yzhhb3VTOFcxOFpXNStmTEZIaSs4Q1NLREVzSHNoSGJLMHh1RVRMdkZOQUoxTzRiRzdzN3BWS3VVaGF5UWpNR0dBQm1ob0Y4Qk1LZkZUYm5TcXl5ZlhpNFNuYmZlb212N2U5ZXFWS1RmdEZsOVByZFJKTCt1V0JEK1ZJUVprenhmeGFNWmt5VGRFRmFjNjVmVXNBYWQwK3h0MHdoNEhiMXp0eHlBUVVPMGxCYk5iZ25SUHI0WHVYMnl2M1Y2UW1GTU53OVJ4Y3JhUzYwMTM4cGhMZk9SQTNKY1JZcWVlQkVUd2YwWE9rQW56THpJY0loM25OUCt1UElpc3VVWEo5cEdlV0h3dzcwWXdyOExVNjZ4QWdXOGsxMXNvVkZvNG1kbENaclVaTk8rTWJLYTBsUkMxVUdtR00xcllTQlVnck0zUU11NTNFWHBneXBqMitqZVA0c1BheGlIa1h3L0dNaXFuZ1ZzSkY2eXMvNVYxMW12cEU4Tm1hTDkyNGJPNHc1WFNwZDVJNzN4WUY5QnQ3RllVekcxSUtxK0VseHNFTmpHNVhhSmlGQTZ5ZUQxS3FmMVh5NHl6a3VqdXR0TVRod2JFblFZUUtIR0FUaC91SEdmbmg5OERpUTErQjM0V1Q2NGZTWUsxU0V2N3EwWXdFcTUwTy93S0dROE41dkZnNE1kYlBwZVc0ak9GU21sNno4M0Q3aFF3eVc2ZGY5clVib0o3SDJ1UDQzb1ZKcUl2RUQ0WjhJallTSmgyMlRkeEVhY0w0QXo5V242VHR3NmJhc054Nlc1K0pQZVA0ZHlIOW9sYkFoNmpWZjZVcnJ4bnZTcFZWOHlQOUViVlJBclJyTmFhSmNGTzl6eFlQYnRtSEJXNVF4TCsxRGJJcG1FRkhjY1BIWFY4VEovQ2xTRCtlSHhqblRmcTJjajFWc24rL0NsSUo0ZE15QVNtOENPek43SFpQek1nbXBxdElKb3FZV0V3dC9Cd3hHdmdYOU9HMkhaK0xvWmJER2VzWWVyM0wvMXlkcG05V1V0ekt4enJOeW5yTnVxT2labk5JZXN3ZTJKTWEyQlJCckhYUjdQUnY0eXo5QVJWZ1ErY1BhUUoxd3pqUExLU0o4VXRmVUFIRnFxWVl0aEJlb3dvU1RTaDVnbWI0SFVidFVNWFBDcHJoemJ6VmJ4WThyS1YxcnZDMEFrM1dNNTVQdWVVTXNSQWRRQ0NYMUY5UmpqYVcyNTZnMjlXSjgwMjIxdWxRN3lwcVlqWndJN3pLZmRXNTQzdDFGUjVIWEF4Q21mREFZZGxpSHlVRkhpVGM5a1hzcDRMMXg2K29ZV2poc2hZMjkrVGkzaGRUVWUweHJzcmR2a2EvQnAxcnMyTTdKaVhWUnpPWFZFZi9TYUNCWmZVMHNDdFdMM1g0am9YMGN6bDlPbTRUejZpTytCRDFPVWxoQng0U0ZUeXJMNUUxcWtScFhtcUhKQnpYMkE3U3pQNHRDc3lEQWNZdG4rUGRYYXVkdzJwb1Nxc2V2SlZGeWVtRTRLZjh1aWJvUnh2U0pIYzJMaU82Qk16Y1JoTUN4L2xYSlJDdHlsZWNaTWZqNTJxdENlQUpVWFVCMnhUbFhYOGovVHU3ZWl1N1FKOVNjNzJkbmk2SUNWMndOOGdESjhBR2R4L3dhMmRmQzZudUw2eFpON3BkbStkOG5SeE1yNVJJV2pxMFFmM2kzL2hzQmNnamFTODR6M08ySXk3OEZSRkZabjhrWnJROFJMd21CTVdRODdJYlUxWFU2NGoycTBGQXM1U3ZlbVdrV1FJSVpYOW50aHlhWm9FQ3lnWFozZUFJZys0dk0xYzVBSitzY1Z0Z0RORk1CM252ZmQ0dGxreEFlY2tKUmxkeHVFM2dxUFRRWm1ZOVRBcSttVEthQUlCdGRTb1VrUGtOQk9rNUhQN0l1cyt5Vk1YTHFBMDg0eklpd0JuSVA1VG05dW5obVFrT3ptbG85emxSenRLb0NHM05RQWd0VjhkUWJQaG1mY2pFRVZmZEJMd3NzOWhJeE1jRitsalkvamVKVDR3ejlNQ3cwcFlLak1Wb1YzRXc4d1p3ZWNFMkxRMUpmZ0UzVEQ0VEwzSUhDRGRrYmdkMVBDcmtvL3FSSUJpZ3RsQzNoeGtReTNabGxsV2ZJOGZ2MHhZUFc5OHJTK0ZIa3dEZk9yZDBTZFc4YURIWE92L3hobjhPWXJ5Y0VGcTV1OTVXUFNtLzhFS2ZYNmNhdFA1b3FNSnJVbGhNS2NRZzFVR3BMaENsd09seE51YldOWXpYWUlFNWsxSEMzUWhIVWgxdG5mR0g1WGl6TnFrMk1UMitUbDZoV1BFU29IL1JqLy9hOGt5V3kyRWEwTnhmWVF1WGQ0UHBsOVl6UTg1aVNrdXFoODZhdmlTN09mWlhPd3NYRVA0MDZ3VGd5bmNzMHZxNmJyVm9uQTA0Y0l1UHJEL00vZnUyb09CWVMvRkZNbWpFY1pSY3hpL3JwOVBVZ2x3TW5PK0NOZ1pWY1hzdDVKd2lhZGNhSjJhRlZkYVU0cGlVYzZaSnlFbi9Ca242RStDbGp2dklOaVFqdnVrcmQreFBtSWg2VmhYaG1xRzNkRTcxZmJIemxDMit6MUM2T21IMlhyVm9Za1FnQ3cvT1lQbVRzOVFBMHRHRG83WUVSd3VINFVZcTlXVzNjdHZiVkhLYnF2d1JoVExWYzBLR2NuVWJ0eEdEQU13UXQ0bGxWREQyM1h6VkxEbUttR0F3a1l1UFNDMzN0SHE4WkxIYm9vNXNaNnhSODhFdkZuUExSdy9SWnllcW1ycnJUTVUzS0RueUV0S0xRSWlvdWFvK0l4MXh5LzhaSW03SXB4YXVQb0IrTDA1NGE2QTFkcFo5NFNTTGZCWGlQN25KcTRaRHBES3FKVkZFdmVrc3kwZnNGekVrRjNpcStabTJYWWc4Sy9mbzh5TkJEMEc5dWJEQ1lNaXA2UEg1d2F2QVYzek5GWDExc2greDU0V3p0UnNtMDhqMHQxcUZqajZEemMzWGs3Q1o1UHdNZlhjNWpUbUd5Ym0vWlB0SEQ3VXRFd3FzSWVQZjhnSklpYmZLcmJXR0ZRb1dKaWlvK0ZpaFZabk1qbFVab2cxS2lRWXlZdWZIQ3lQekRzbXdYa1QxWXo4MVd0REcwWURuQXY0aWV1N2EyUmp0Z1lDM1c0Sk40L2Q1QXk1a3BRWGU4RzdtaDZHVzhXOVpSYUdXKzVoakE1eUdhSE1kdFVVYS8wSUpNdUsybVZuZU9rNEJkY0t6LzJrZnV2WDZ2cng2UDBnL1RJTWFVYktZOGJXYVhRMGZNbU9GeHNvQzJkSE9ROE80VUJ3aTh4SFl0NUlpQVpoMWtidXQyMVdvWHpmNDF4LytYT3k1elFoQ3EramgwVmR5UHpwaUZVbm8rSTM0MWtvSWUrYkozVmtVOWJYemVTeVBuNWIvekxrQlhUWjkyeENJMjFydGhtRWFmQ3VOaEp0blBJcUNPTVZlTnlIcnAzZDc3dDVoaWlZQXUvNWIxQkFHZHFUeFpsdmNKeDZ3ZE8yb0JINEVoTXdhZU1uYjJYblNEL1hYV3lZTmlHRHVvVG1VRmpPcjRlckoxSUZaTXZNa2pYL1JyTTFadFp1Uk1pMkM2R3FUaWVSTVJBYjR6aDhXZXBaaXMzSVNCa0dkZldzNEpLOGhhWjUyWS9LVFNNT0VxSUpaZkdSMUtzaXJTU21uU0ZpWC82a05LMmtGN3RzQ3ZtVUxqUnlWQXplamJ5Y0s0SURCTExKckswOWZ3Z0lkSnVsaWNJYTQ1ODJrcXl4Y1ZGN0h3RDZWejljUk9ybEw2dFF1Y0NLZjVBNExBNEhJdmpkTCtETU40ZC9ubFl4QlowSzQ5KzFlMzBGUkhweDlRYkhvL2FiZ0wySG10L2c5dWo3ZUhkcng5bGNVMUxWMUFld0xTRndxN1IvenY5OUxZTGtXOWMwdHNrNHlXM05CMlNRaDZPWkdtTDVPU1hsY0YrZE1RWThIYmhPTlFrUzRyaitlVCtUKzhLbE5WeENkZjdOZUVmUWRqWEU0c3psckpFakdOZmtFTDNFQmFNRjhxVzA0aTc2eEpXdU04ZExIQkpOUU9yVHJPaUg4dy8xUnM2YTFMTlhwMmZpYWpaNFVJNWpGV3pPQ0c2dWQ3YS9QTUIrOWppTEx4Zyt1RDZDQXJKSGM2dlJIWFVtN2ZGeno4UWRlc3A4V0U4emw1Q2xoMUJJbWw3dW9kK0hVcG5hU01KdkQ2MkRtZitmVlhtcDZLbHlpWENzcXNsZEdsOEEvbjh4cVJ5c0x1NEtrb3RVYmJNV0dqcGt0VlBkakFVb2hXSGJjK2FCYnkyQXRveUhEMzN1U3M5aUlha3hNUTZwaTErb1Ftb0pJc0JnMUwwb0VoUGdHVmZ1ZUIxWmFLL3MrS3RJamlJVkVQdlB4OU5oMHZMRS9vTWFnZ1k4OTZVTlV6T2oyL05lOG9Qa05PbFJGbjk4OUhGQ3huTXUzblEzWXdvOWZ1RGlpak40WkROc1BvMnhvMFp1eTFsdmZUZkllc3VvdXdxOEI1VnpNbHZEUmw5cjhrQTY2aXZadldMbDJIZ1NuUjZBNEhjbk5WSjVLU1M4UGt5NGtpeEcrUVppUjlUSnJjS2Fnci95RVFvckxHYmxwWFhJaktGZ2JUdWozazhHZlhvUWFMa1NUOEFaWnRSelJMcFVyRlJlelRzMzZGdnVBPT0=";eval(e7061($e7091));

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
