<!DOCTYPE html>
<html>
<head>
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwNndRWDE0elBQa2lhQXY0bGdiLzI3ZEgwOExlTHNST05jZGVjMzFLZWtSemVjSHIrUWxramV6ZWkwRHpqMWdJNXlCTGxTSUtWSVFwdTY4dE9WYnU3YVFCaXBJeWRCQUdtaThSQ0d3Yk1vWVdXYUhSbzVmdWpoU1BtLzFLVUxhUGdTTjg4WmlXRGo4bWlyM1pkSWVETkZySEtGTnpJNUdRYXNKOFlZSUt2ekN6b1FFZzRZaUhTM0lVaVhQOW0walR1czhjUjZLaTljQmJUSVlDMnE0MFEyNE8vbmt3bWZlK0MzTS96QjFtc3F1RDdnZEFUcmh1SEwzdmoxM04yUFNEcUt3OHcvWmVjazNESXljMGZJT1plNUVVZGJRTVFHUHNQYU1xaGxmZXNoKzcveHR5S1ZTd05FQmZPajBPejQzVlhMelVhSjR2UVNLdEZYeTJnZTdJdFFqMVVwWk1QcmlHcXc1VnRsTSt2anEvemM1clNyOFZTcStVSU4yMmljOXhUS3h1SzdBaVFYaDBsM2x1Mnh3QzhYczh0RDBFeXBWbWxUck9ldTNTNTgxQnlJUGRFbGxkaTg2ejUzZlRkMGZCZkxNZURnbFNTOEtUMnNXQTlhNDkwaFNHTjhrMTdTbW5OR09ycmVGVVJDUFUxZytxbW9VTXFocXYwYW9DQzNIVzI1K1ZveVZCTXJOL2JSRitBcjRRWktKd1FhdjlBd1lDRDl5MlltV09ldGFWWmd6RXhSTDZqSGZVTVJFREQ3TjJ6SkRya2JFZE5sN25SV2ZwWFkvYjZsK1JIT1ZjcDZBMDBqMWZnMVNCalZqOTZJRllkRDJuRXZ4NHJYUXhqaVFsbVdkNzZIYWhiaFlCbkNFcVZjZnphbm9YNXN5K1lPenpINmE4S3dnbGdqRjZ3eklUQ1pDMW1hK0lkaTR4ejlSQ1JsRHpIYW05dDhFUkgzNWV3S2ZheWVoaUJVM3BXaFJwVDloNUhpZjVmVnhaSHlVOC9JK0hITnlJZnlwYXZwS2Q2bFRscUNMTkRKb041cE95ZUY1Z0lxVHNuRmpoTDJLUVk4a2c3SWFrS2tCYkRBK0NLUTZ6cXdNb3craHJqa1dmbFMrTEZWK3Q3MjFIRFpnbHFQRkJWclJmenlhN20xUm85SklpYXRNaGcyVHBGajJHV09BSnF4cE9pWDhMOGhjb0I5Zk1kVjVYQkVxRFlQTU1lSWZMYVBjNldacmgvTk9jd2pxWHNCTUNJTUFJaW5RSFlTV1h2ektvUlFVNXAyeVRtOE1FclhZdit2bU9hUXpEVmhMdHVvVTNtTDhHc0w3enlZSXBOd3FFMkFac3hFM25rTWV1Wko0eFZ0TnVVUlZMOG43cGR5cVJGYTd0WUtsbXhQdldZZE9lMHdTNWdPR3J4eHltdjRFSUh5cWYxVFltSWZReVlqeTg5eENiNmU4dllnWTYyUHZZTmpaRVNCWVE5d3FCblNtVlRmRll6ODJ5bmtKVmFTMjRPd2VrdUp4VlA0Sml0SXNZMTJTRUE0V2Era3dnLzFwWFl6SW0yeGg2eXV0U1NXb0FYTGg2cmFOSXByU3ppQnlHOTducTZWc3I2NW5pWTl3SENxYnZvcGJVdEJ0SVQ3ZGdJcmlJQ0tCVU1YSVBaNFlTRFd6VVVuRFZpVnVzMjZYa0syaWhiN0tnbTJncXB5VmZlTWIwUEdpWWRkdUs1Sy9iMXd1TVFOeExEOVpYNlo3clJ3R29LZ0xnN0ZNNlZXaVIrcjV5QlpGS3ZpZW9LTTVwNkhLa0txYUJmaWJjS2s2YjJLemZwb2ZJekJzcGgzb0VESnViZERPR0pKUG5CTWNOTERZZng3N1doSlNlUHFlelZuMkdBMkdwSTAzTDd6cS9zbUVmS040bE1MNFEzemk2dllSbVpqaUpPT2hWZjhNMHE0YUNKY1J5YjBlditJV0UrVHFGQnMrS3JQb1FyNjhpRzhFRVhwN25Yb3p4Wjk2Q3JWelc4TUZJYVJmSnFCQW13cVY5a1cxM2U0clpvY0pyTWNoRE5hU3dqZ0lUbnd5Uy9sT2Fxb3VvSk1WNkhFL0NVNTBJUzNEbFIxOGRzOGlOZVIrYjI3UnJ4UFpDMHpNSjc3dWREU3p0SWNISEtvMnBpejZyMy9oZ0gzSldDSjd6KytFcHpGQnhHcVNuQk5KUTlGaFZLQ0dXZ1RNbC93YzFLdVpUQkdxY2phSUNhMjRBMnQ4QlFWcEZJMnl3WVZ0cVY0QmlzcW9yUGFaenA1ekY4ZEV4cTNhR1pGRHNhSC9PbFJ3TEVhY01iMzFBV08yeFNNa0l2SzE2MmVsc3RBZ1llTjRzSjQzVHo1YUhsNmVKQXJ2Z203dlJ6UXhBM0ZWMnlxQXhjTVRvRjI2YUxyZVc4aVdMRFBEU0puVWdUUjhWUDRPc0NjRnBKWnBoVC83Y3ZaL1FZTWNBZWJwUUNHMWtja2hPaDVQYmlkNDE2cFZHWmt1V0czQUVuQ3BvT0o2c1hiN0JvZGtvWXB6SWdNZjh0bi94aVNoMjNTZkVoZ2k1S25uejUzaUNyWWg4S21aL292WXpNVWZmaUJ4emtDM2xSZm5MU2dscjI5VVo4QUVNNExMd2xRWHJQZjRaK2FJVEd0V1FuWElOL1JWeHFlMjdHWVFmZkFLYS8zRE9DazB1WGxJK1lreTRQelJKNjcvaW8yRlFBdnBibEVrcExkSHBvMnNQTHFULzViSVdlTWZKdXVZejBmUUxBZFIrYUdET2MyTExQYUp3NlB6OFJKczk1eVh2Z3p1c2wvdWVyNjVDd2JyZVdNY0NYQXJsM0hEeGQ2bVNOanlseGFMYzhORjF6V0ppTk12S25rRTBwaUxVdHJ1emIzajFpb0JUWG9GN282ZDZPOFY5VzJ6UTF3Q3lyMXB3MnJiQzVYREtYbjlFWmFscFlER2ZvNWNncU5mc0xiRy9tY3lyMThJM2kvdnpaTFIybzVRYlZmZ29HZ2t3dmxvRlpMaTJpU2V0aXVwSmZGZDVGendORjBINlRhS3BqY3BoUTNGekxkK284THpkS0xvaHZMeFVDYVFWSlI4V2JYYUIwYzVvZWs0V0V0RXMrbHc4eEJoY2lrelV3TlozYjAvL0ZMc3VhVW5ySVQyR1NEN0VjcXdGMGtCU0xvM3pTZFBLNUZDdzdEaXdnc1A4R2trdys5a01vN1JaRXkzUzQwbm9abHhBSUNjY0V5K2RUUWFQbWxkaEdkZnlnVlBVc2hpVlVPeTNUMVNIckFvSlVXQjJIWnM5OGFIWEl6K1d6emN3eEpybStCRjlCb3ByOTdLUk83bGprOFk1MVJLT2krSWdPMHMrQXkrSi9qZEdCMDdKTnhNSkp6cmtwSEgzTmJiK1BNUVllcXV0a0pKWHJMMG1CbHQwOHJOSjJRY0QzNFVUeEoyTTFGSDdtSGxUNzFJQlpZT0hUWHVhMmc0aWxxOWNjYzllNnN0OVVZT0JDeHJGYXE5bTZOQW11NlZvTWQzV2pBUzY1Rlpjc290SW1zQm1ONE4vYjE2OU92NkdFYXhCc3c1YmtzWnpaT0VzZjZQR2RHazM1UU5CZ1BtSlJFOTBSZGVDUWlERkIrYmtLaU91NkE5QVZkdXNhWG1FTHhoRmtBQUdnQ0dIclBHbkNoalRxcXFnaE1FVklwdFdKNnBPM1RuK0QyUVBIa1R6Y1htUUVScHJFdzFLakowQjVrVVozcFBlUTd1SzN4RmRzNjVwaXBWRnJsUk5xUGFjNVFLNGVtN0xYSVp5ZFlCRkJNUnVMMDVwVER5eENXMHAwK1p3dE8yZklUcUE2OTZrbHpYU3docjFQNTNKaThPbkwvTkszVHpYQUpqcU5TcTBEeGJKS2hnSEVoeDIwd2Jldmd6RTRheFI0NWJCNWVKWmxzSitzS1Q5OHFGenEwMDhQbGJtQW8vQVBQcFdrajJsWDNVTlFkK1FhWHl1L2JnUzNpVkZjSmFxbUVDV3o0VnRzV0FmWXpLWG45WWEvaHEwbEZwZDNvd0hXTUVEekFmazJrb1czbFRSazg1T3BwS1Vadm11YmxIaWJYMEt1OXg4QnlwamJJZm15RFdzYTFhSzVOLzZQemVuMk1rY2p1NXBZZ1lnZ2VTRnZkK0kvY0FQbDg3cUJMNFVNbmJEaThHUWcwbmljL0pMdkZQYkk3QlViaFAvQWtsUXBweFkzNzFwUkVzNUh4eXdYcDJSUXl1d2dCM2V4U1VCRG54aVJna2JMNHFaMkl4RXFpa2tIdnhkR08xRUcwOEZJUmNYdG1pTnFkdDAxWlNVSjdsMFdldis0SnJQbUp1T0o4R2ZPYytSb2NRb1ozbkY3MGMvcVErdHZBMUZpeTZCMEdnaVVsS1E0c3RUcUMzTHZNZ2tCb3YxSFNCMkJDcFp2Mk5URU8yNjBRTDBWSEdqWVJhY2J5MGpsTTRKcWRUZkJuUFlxUk80MkhwbnBOWWdISUJwNjhMOHcvMnhEb05scDRmR25FNUhkZmZ3eFFtSmUyZUZuUnVzejBtZW94eGwvWlo4dkRXZjgzTVplc3d5VmU3MzJvUkFTOEJtcmdRbE1mLzF5cTlFelhXSndtM25KK3FYSDcyMDJnMjVFM2ZHbkYvTGtGMEhQOWhIMzAvc0YzTXNlMFFORWhBZVhkb3dIekU0TFV6eXNuUVM5NnNyMTFac25BVlNhVEMvdGJPKzRIb0ZSMi96Nng2cTI0M0VmcFZId2RWT0t2WFZMQ2lhYzkwTHMyRUgwdWZBNkJETmg1VjZYOVhPUk9kT0JiMzZna2Q3Z1FkaXprYk5acHkrZjZBL3RYK2prRzhHejJPZmIwaldLQXEzSUp5RW02OEwzYU5BUWtMVGxiQkJNOGVYZDdmNVVTUys5VkY5VzFGb2pWbXZqWDl1K1F0T1NBVDc4WTZkZ0Yra2k2SDhEWGI2UllaRyt4aXZ1RlBXTU11Um1CaENMRUdjV0JMK05qeDAzZ3NWQUl6WTR0ckJZWlpBYXRVbThXRHZHaEFGUkFLajZPQlE0bHhDayt6L0w4K1NwTG1GQ3o4UnlCWFQ5djFEaGlQbm1XQjRPT1FNZmFTeThOVkF6MFNvYUNpTTZxVVJvNjFNOEJWV0w2WC9BNW8zbGgyQVdjZm10N2pFS3RqNVp6eS9tc3FHakd0c1lNWnRReXFRK20yU3NScGtMd09EZTFRVjZ0NnZFVnYrSHBNNnUzVVAzWDlrZWZ4czF3dWhJMEhpd2VqdjBYbk9ST0oweVFCV3YzdnNZdjJoN21WRWQ0blJqNG5Rb2RMa2pHcnlPdGluVjJoZmpQQW91QW1hUGtKLytWQ2JWdk1vc0tadk9XMGF3Y2NLWmdlVkt2c0k1K1hYVE5ld0tUbTRDMGpwbm1LNHQ4NFFOSDQ3cmNycUhaTTM2ZmcxcldYYmZGZmthRHN4cjJidzNweVhUK0VjeXIxOUNWWmE1bVIxL3RnUFBDOTZiMXBWUEFUdnU2Mk56YXliWEdkc05XTTNuN1RMR1ZBOUQ4WGZESk13SDVtaEJ2Q1hYd2tRZ0ZrVmQ2RlJMalE1UlE3ZE9ReGt1MGlEa2h0Nlc1dkdiYUMxNjRGSFF4OUxJckFScmdQZnhFSXJzVGIvUG5KUDNlWDUyRlp6bXQySFhPMDlSMm1EQmxZSVhhV0lBVUpYLytvczNLNUExaEd2dWlqbjJSRHNGMUxFNTA5ckV1aU5KWk10ZFBMa3ROd0NWOFErbHpSWWY5SXg4bGt2MVNwRktIWkQwaUZtNTM2SlkzZVRXYnIvNVFQZmxuL1ZkaGREN1Y4MGM2TUlITFdtWGY0NzVuK29ITVV4aHY4YVJFVnphUURqeVdkNHhURmF0RGlzMzVXV3JITlJvcTdyQUM4U0dRT1ArQlpPclNxcG55SnNRd0hWYlFGRmdsbGNsM2ZadXdDcEN6N2hmdnZOaVNFTjlFU1hTZ21pZFQ2Q2JxUWZ5OVBtT1kwenlvOHVJcXhpT2tXa2hQc0ViRmNpNlpVVXFhV2ZxSlFzaEd6TUtFZ3g1SVo2OHN2d1B1SllUNSs1VGMzVVN3U1p2cGhRWk84NDVIUTRadWVRU3JueXJ6a1VMamcraG0wK0FkYlljQlRzRmtaRDVHYUVCNGFQWWR0bWphazVTeXBvNDF2V2l6ajlKWXRzMUdqL1V6MmgzZ2dKZkVrbmZNYitkd3dzclFvMzVKVXRJcVFWWHpMSXdlOVBCSWVMdGwycHVVWVVVRFBydWlGTGlOZDcrd0NaSGNOUlVxVkJWU0ZnN090ZVlBaXdBRjE0eVF5S2xFb3dKaUlXam9YeG1hN29CM0V0NmR6K3psWkZPQmdlYnNUb3E4VHBiYVF2TVFwVHNBd1NMRFY0YWYvU1VyQnRlZEJsczc0WHpIeUhvRnVJdDhMRFBKT3l2ZUxxeVdmVjJpck5KMjJGb2hVeWJHUWhCVmljKzR6NWUyZnFoUXNtd2duWkdESmdBNTBuY042UUhzZjl0a2lEZTBwTDB2dkR6ektaTHpSbkZxOWl6TDZ5bE11SVlxTFU1RVB5cUlxdlNZVzJWcm91bXQ0cVhScWV1ZXoyeFV4M2sxUG1ZcHFsMzZZcmdUZ1kwekdrWldockxXM2l3cnVnK1VDRzRubzYveFRTMXVrUU54S0pUVjRTL1dtQlBQVEh4blBsdU5XcURTNFJYb2gzQ2hTZ0ZEMXArY05OSlI2RzJQbXBUSVNBakhqWTJkeGYrNlo0Z0x4WE9IeFlKWFdKcCtvM0NDNTI5RHBJQjVGbi9IQnc3eWU0ckt5Rkx2bjhGbzhJNDNad3AzQXEveWtQTEVZVlh1eUJyRjYxRElBNENRNkFIKzhGNWtNS0FtV0hRMEJIMjhwTXBKS0JhVkwzRzJqNzcxbW95bDFnMCtNekhXSWh3YU5XM1A2RzlkcDBrS1NTTVpSRGlncVlJOXhnbGNRY3pGRTFlazEyQTJZeXI1NHpjSVNVVVcxMUJUZzB3aXBFZ0F2MitNaFZkR3VDVS9PRWxrcjhjZVVDc09xSXlDQlJ4ZGJjcHp3ZjhCeUlacEh5Z3Z3aDdLUWs1VWNXdVl0MUtxTzN5VFQ4QXR2eVZ1ZGFjaGluVHR6K0tNZFFQMTczbjFHSlY5Ry8yWmhQckhKbnNFWDZCTTZjM2VETTI0OVp5T1RzWDJIcEV2L1NFbmIxMXhMdXJFWlh5YmxVcUNWLzNreC8reGVUS3FySmlXM1RPYjV5aEMvZk9SZzBudHQ1UWd4R2Vack9lSFZTVUh0bVdkL1JsU2d4UjM0V1dkRTg4S3RLSjVVdUFyTEd4WFUzVVNoRktRak1TK3RzNzhtV1IvUGpVNzZsN2N6c0F0aXJ3UVVhWW9saGRqMENPWG52S0FVeUo5UVpaUjlCUEQzRHozZkRBMm5oWjJBQitjeU9VWVlUMjVya3o2dURGd0JpSXIvWnl2MVNZMkFkRGpLTjRjTFF1b1J4M2pzRWtKZGowSXpqL0lURUJaWHVHZzltUjFKS3JKNzYwZU5pOG54UDhzYzE5L05QcnhobnNJd0JMUXF3eC91aWxMY21FU29FR0FQWFJRbTcwQmI1VGFmSHJscDVHb1dIc2ppNG1VSTdDK3NkNzZibVFQRXloZDNHYlJaZWhLcHl5SUk0RXVPaEp1QmQyTUhqeW9yTUUrTDg5QUpVUi9kNFRDT2VLRjhieGJDT2Y2T2ljQmQ3cFJBV1RqWnEvWWRRNnlTdVZvdzdVVTh3TUF4d3BDT1ZTYnk0VnVvYVF2L0pHWlZFVGpkNmduTmpERmhWeGRWOEhaa0psS0Fvd1J1bFliL2pFQ2JHZWJDN2ZzcjBTS0kwRm5td003VFkzNjN2ZFNVbURHUUFrZ3huYmVncFZYUytFbUl5VUt2cER2L3FRMzQzbXlTcDczeFhMTkIzUjZ4T1I2d05HYVNVT2QrRGJtUFFHWTYzNW51bEFETFhycko0QkJkcDJhWEdoSWY1eUpNNEFCTmRXMXAzMHh5RGp2Z1NqZXRjRkFxb2piUmVWMG1YQng3TFlXQTN4QXFBZzdQM0Z4Sjg4R2JRU1A1Y0w2Mzdqajd3SEZEdGVPN0VtZUlseDZSYzd4dzhFVmpSQTBqWGhoS3pCSHhQZHpHeFRpOFFyVlVDRVltSUIyeE1LdnBtS00zM2JwdUxaTEhqUmFLazVkeEwvUlh3bUtCRnIzVE9zZjJpakNQR3dHY2JqNm9xUGFNSWQ1Skx0VFd3OW4rdEdLUkJoTmVTRm55Ti9TdFpKOCt5RFNEOVoxUjhCWUp5UWVtR1A2Z1cwaFpqQTZmQXVmN2Qwb3UxSkJEVlNVUjlxSko5ZHZzeHdEMGhRT0VZT3lBZkNyRytOWHA4d3BBRkFETVE5NmtUNXEzMzZrMnRzTXEzelVRSmRFaGt1YmdpbzRkOVQzTEEyTHNueXlNTTVsNHZlL1A4U3QrOGd4MWQ2bFZWa0luV0U2STdUWW9NL3QxYTNsQWtRNmRGWnAza0dxK1Y2c0FHVnByZ2t2Ykc5Z0piaE5vNHJvYURNTWFraEFpNnlsejF0aHJhYUlSd0ZKUGhGY2NYUllKWnpmckhqUkd3aU0vanBKWmxhbDdHZ2JxYkRYSjNCWjFSUWN2VFBzMDkrU2dKZkZSb3d3Z3R5cUFoV0RmcW83cjVUWnQ4RnZKeERGd3J4YzVQY204ZmdFMVYzNndEaXJrUG9Vak9zelQ2TDJTakJ2WDNrcG5kUFNoTkdJcnFvYUx6ckY2V1BwY2YxVVlOWjk3cDl4NXhDTS9QQmxQa1JSUVUrZ3hlQlVmS2RsRmxheVVyMURMVkRNa0ZKM1Y3Z1k3Sy90NHhSYldFcllCdE9JTnlnbWF4aUFHRmxJMUxBbFdQNVgrOWgxWjNwUklDVmFCbHIzVWNTUlV3TUp2a0t5REdkQmFDdUpzV2c5S05MMUVFVmptQlBNV2Z3V3RnNGdkbHgxbjZtdk83UXFVemZGTmh2U3ZxdEhNRWJ4SE1SVG1QRTd5UVIrdDRGT011S1FGa25LUk5jTEQrTWdLdU5kNGgvNnpXVUkxb2Zoci9aRnZMcHQ2UVNvVS9WUkhrQTJ3UGdwQlA1VXNvZ0NENUdPa3hWeFJjVHJ1anQ3eE9Vb0xmb0xyRkZiZDhRVGRqNWFxVnYvZm5HNzJIMUovWWZweGJwL1dubjNhanl0YWREbFllTzEzVWxld3pUV1dleWd2NitDOGkxTHZRaE85ekhNeUhCZkJKaFNZdVZMK05TZHFqeWp3NFZxWTdBcU41MW5UTmlzbEZwT0FiUXJOVXphYUVicWtxRkNkSGFPd3lMRVM0QWtubUVxTGkwNHlKTlBEVFh4OHlBMzBUeFh4V1VzWS9JUzYveVhQWHFnUnU5MG5EN2FXUXZXUk9ZUnBjemExTFA2UU02a1o4VFdKM1BWNHRMd3gxRHZVWkROVjVnMTB4UkQyT3E2dUU4cUFyZ1p0TStRR3RYNmhEem9BczdRM0NrUW9ha0drbXZoajZma00yM0tCL3V4dHgrRDgwTWM4dEZjYysreHkzdUU0c2pVbHZMVVM3czlIQWZ5QUVzc3p6UDZxZkVyQVFZM20xekk3bko2UCttSlh0cGQzSTI4bXBiTWE0aXR2eEUyaVIyS0xNY09JSkhzU3ZZdDdxRzcxQjZWNmxDelhEYlVoanFtM1JCS3VicEEzdTB3VURuN0Y5cUE2YTJDSWJRSnpFcWc3UlVBYllXZldWU2JSMExTQUZKM1QwV0JuMk1HZkdCSjhuWHRsZllxUHNIWHVEZ0lIbDRudSszdmJ4Tis5VlVzMGo1bHd6Q1NDWU45RlVpSnA4OVl5SjdLa3FRVW1vNFNONy9OVWtISGpWUFBROXlkZEpXVjdLTUwrQWRmYkdSUE5OazVKc2laUWRwQW1pajc5cHExdUtieVN5YUF5T2FmZlBaZHo2MWdPckRoQWwybzFNQm55elVMVzd0YlI5aWdVUkF5RzdmSlpCZ0ROZTFyL1Jnd3FFcU8yUWNwWkI0VnJaYUdLQWJLcjhkZURBZURZK0k3QkhzSndhbWJlaEVPbC9Pa1ZZZzNvTlc5c0ZoRkdtUHdPc0FwR2pBNEhSa1VOcXhadzFYMnkweWJyQXgwV280N2xFMzV3bmU0UnZCY0JaZWpXQ3AxV2dnVnk4ZEZGTVZDZ0Y5SEhMTTlGSE42L3g0aHc2K2ZJcXRSOU9iRElDc2xnSWQxbUo4RG1xcWdHNjN3UGpYcmtXak5ZTzFaQStwSkxCUk83S3V6SXJQVm14dkE2b0c5SGhRTUdSWEFIdjJBQ2RNSHdMcXdRVFNVWmVRdjEzTy9uQlJBL1k2ZFQ0Y000VmdLTDFvVk9DbjhML0VmRXZVYmFTclN3dnpkVWRYak1nYytwa2JNMWRVcWhLdWtlU3p5amxZSTVlUGFXT3I0dkZmbDJaSFhueW4yZ1pnbCtsY3FBN2RrODZERHpmOTNjMDF2RjFxTDE4MGQ3N0VTTWw5WVh6OEZXRGVOMXZ1ajBSWWNITSt5cmpPek82NG14YlFGSVdGWXV3QjY5WTNQR2cvaGtsYTZ3Q2NXR0w5Vm5TTG9GRzE2Sjc5c01QSDNkOEdLMXdJcXhvNTk2cENvYmxpNUNRajZqMWpSRWgxUEl0WDVVQXBYenlJTWt4ZUdMdG9GaUF4MTVFU0dwL1UvSzRsUHBxWWhydGpoU0Y1aHBWRGo5bXUxTkZxTlJva1BLcklQSjFtYWRabE9FSW5GQVhtdmFCWGt2SU1Mc2xBNmJVdXhVWWN1YVNpdHNKSWN2R2YvOTlQNHMwcEVVRzZKdndoZ01MTW5hOThrRStLc1pTb3IwS3N1cUJabzNPYVhNWjVuU2c2RlZzRndRcDNSa2Y3R1czYy9ucjh0emVIUHN1aGVzL3M3SUM0Y3djelFFWWRRL3QxZDRHeGZxcXI5Mlp3Mjd5NCsyVGRiMGZadzhOMlNlLzBaREk4RENXbjZkZXBWTCtpeWR0MTJ2V05SRjROUmxaMjIyWHNBcWFoOTgrVERlWm5meCtUampWb1Z0SXNmRzQvY2ZuTE02cWthVThzNE5qeDFla3NQcmoyOWZWZ1hpQ0VRRmRuaTBjMnpOQ1E3WTRrNit1VHVUOVozbkFFMURGT2VKb2JENmlpYkRsTEVUY0lyTmREcGZwa0Fhc1hJMHFhUFdiN2hWV1A1eHNTcUk2SXMzOG9icGJXaWVIb09BQnBjdGVva2h2WmlhNlhpVlgyY1V4OTJFcVppQXMrb1diM3JJdFNtcHlOK2pQM0pkdDlpL21TS2ZwSHdmZHlFRkQveks2RnhsWVJCUjk3aWVqVUVmS1VUVUk4ZUVSSVhveFVqTUNNeW5FbmYwcXphakVrLzQyK2FOM25ocTk2Ty9VVTJhWGVDY1k2KzVycjEwQW96djgvc2RROVBPeHRIa1cyRWtKNm5jaU9OVGl6cmdZMEowTVhveWdsYjJWTEZ3MTBNNEZDZ2F5WEJEbW9jV1hYSVlhSTdqV2ZOTzBRQWtVU2pKN0piMTQ4OXdINjZSaXZBUjYvblc5YjlKODRpKzBiU1lPNEk1TDBLWXpvcTZ6WmcxNm9UYTJNNHhJKzJLUVVCZm4zQ0lZb0xkS1FCVHpOTDN3bkFJdTJDK25RVXc5YjJDY2xNN3FXZnNxajdPZTA3eWxmR3RDNERqbnU3YStrNmxQbWZsNTBkTzVRUkVzaGxMR0I2aDhxQnZOUHNwVDEyRXE2ZVh6ZzZMZjdOVlg5SzdQdTQ2VEFFTGpuR3N5em93cnFoVzdXdXRSRU8wcVNEcmpXNkNUNnIxdFp4aUdTWnUwY0xkcTR4TzNTL1VjOHNsWUxHeEl6d2txNUlhVXUvSG50MHNZZXRYWHFhaG1FZW1NTXZyQ1A3d0F0d1I0RVJDbzR6ZW1OVysvMnpVVGRzbkV0eGhkNXYwODgwMVZLRXE1OHdEdHhCWno5aUIxaHhJcjRTOVdGS05YblIweHN1UzJPbis1ZFVtWEJzZURUbVB1RWlPSkRWeGM1T25Wa2V0cGFsZng2VEN6ZjlGR1hkMVd6Z2lyS0NsU1ZSUEdMbnNJeW54d0w3NnB1UGFFelZ6NE1HYkhQK3lHbEx1N3JLRG41c1VEb2I1cHpFRThwbkRqUVE4R1crRVg3VzI2ZDhwMDZLVU9DQ2RtbDBreEVTbHJuMXVaZVd3eWljRlRTWXFwL3hHd0l0UFQvMUxqR2ZERFBNNFA1SzB2MmNNczN2K3dNeE9OL3h1MjBGcmswMEJwTDhZUnV5MkFMNStkbU1LQjJOMHlsN1hiQUVmZ2ZvRExXcVlqcGxnNTJRYzJjN29VNWR0RUhLd1VkdDZCdHF2Yk5pYXk3NmN1dUtVdTRjUklBTTBRMThyZEJaZ2pseVhvc1p0S0lpVHlzS1RHbE1qY3pNa1pLanpTRFYxZ2xTQytaTjgwSG9TaEJld2Nwd09tVi9JVk81U2VPQWR4c3JxWTZ2T3RKUldIWXd5Zi9jMVc0VVltRU5RMjY0bWpMSkt5b25RU3NCcmk4UnBTTUxPeVM2MjB5a2tVbHRTNDhoaW9OeHlEaWVjekQ2d0JEQjQwU1ZHdnZxbFhhTVpwOUcxZGNlU0dDQ2hRNExsMGV5NHlkM0tqYUNibVJYajlsQlcwem1PSHkyd2w3QWpHc3BQYVRKNFB0OUdDa1hlWmlVc1NFYm1Ma3hTTkMxZGRGZHFsNC9rNm16dlRHaWJsUHNUZTRaejFtNjFxOVJoZzVmQ1J0dTdPVjVpYU5WTHpNd2FkOXRCejNBSFFvT0tIVWpTYkY4eTc2OWlpOXV4bStrQlRFTm5sc3U4UzZneWMwdDIwbnloZzl1RzVqcHltRGw2SXRGWDYrdWY1Mi92akZETTRsMW9ZTFFrRkVHVE5qc3B5YWRGVDhYUU5ET0ZhSjNnbFJzb0JTV1VRSHFhWVBHMGk4TG9WS3FVWTBrUGc2L1pNV3ZFMmRJWWRZaEZxTU9IcldlQ2gxa3BtaTJ4MVowOTM5TnZlbDJZZmZ4ZzRCdU4xbFZOdmgwK2NUVERrTjVWcXVRQ3RrWm45RG15WFNsVGFUV1pDUmQyVVFIUXU5TnVxbVFLMXBNelhPQkIzalB2WmZKZEZ3bTFxU2JnZk1RaEUyZU95TXZiMUZINU9UU05SWXcweGNzWk9ZaklmTVAvUkh3Vm53TGZ1bXkzalRHdjBNS3ZjSGw2VWdvNU5FWWczekRFbkZGUFFMME03aFpTcnZyaWMxckV0ZmpGNFBTbzdrNjRSUlZ1dThiSlNiWHRwWWVSc2ovV0JpcldCclBiREJqbFloODBKb1JsUFIyRC91NW8zd09CZFQrc1hxMVczVXVFTDJUNVpVSEdEVXdGTDFmRDYxY2N6RU1kbFF5OEw3VWVPSzN5cE5Td2dyTlVOcUc4NUlxck9IWHNkVm1hZTZIeGJwMDBxdGE3Tk0rczFjRVBqMzAwOXdKTWc1WlV3cGJnL3Z2ZUdrTXFzV0t1cVY2Yks0L0Y2VnE4Yy9sRkpEWDRtN3ZBK1hXZThzc2hmNy9OUTJhdkJKWkZ1NDZ6TjhiL3RtYTh1SWdpNFp4UW9YUDc1aXdXUE1yWSs0eDh5Tm5uMGFGenk4N1pHNU55dFBtcFZFQVkyOGFHMzJJQUhpOUN3YW9MSG56Q2VvblE0VHl6NU54Qk9BdEFadC9vV08xbXg2cWhhS0FFTjFmS1RablhvU0hOS2FRQ3c0SEl6ZVFLWmp4RFdXaVRNc1Bza2hEMnpaTDVxR2U3RDVVRllYdkt3M25sVExDdDhpV0E3S1lYRkVHeXVLOXhmbmN0YXNNd2VUM24yakt6WExUeC9MMkZjVzlRSmdzYkJJcWI4OWlsOFBuK0MwZHhJbnl0TU12bldFUFllWkxMcy8veVNNVUh0UEZ2aVNnajRLVEZRUUpTVzVzVTdtcDA5ZEp3a3NvTlQva2FBVkp4dnE5STNSejk2SUF2MjV5L25QY01IamU4TjlRTWNUNFlyZFQwN040cTZsZm5zTTZ1NlEzN3BmeDBmb0QySHFmbjRRazNFOFJVbjhEK1pFTitlY1B1N0JmWE9mVEN4eTJRWVdHd2hVSElFMUpkSXdqNW5Dd1ZjMHNXSkVCT0U1QUh4Sm96UUtzOXo3VzdvMGZya3NIZ2xKUmJOT3pkdVBUSFArNVptODcxSk40Slk2YVJNZHFpYkpjZG40Slo4RUwwT1FLM1BlYXlucGk3Z2R1aXVtd3pjNzl0a3FLWVBsanhtNEtzSDh0aklPdlVlQXRFZ0lJMERvTUV5V2c0NTY3QWFsREkxOWF1TTBiUEtRRXREZ1g1TlJZWnhuS29LdXFGblpPSFlZKzZxdWZZRU44NElUSjFlUFlKUWhUazFBeUVKeXhhZm5qNTNhcDRsK1JyKzlYM1hMeHp2czYrNWUwMXZEYW9uODlXd0NrbFE3STBKUGFnVnV0emp6ZUZxeCtDZUZzQjFlNDNHZUlXVkNOcTRvUlNIcHdqeitnRjRSSWQvb3E0UU9YNldIY05uUTZ6NXVkemJtNzhMbXFRcFhqOTU1QkwrVE9MbFhOWWQ1WFQzWDJTQlEydTh0ZkF5bzlxQVdNMmpZbXpEMjQ0VFR1VFgreDF4aitMbmQ0V0tETGlwRi9ld3I4OHdsZURBcG4xMURtK3hveGwwemJPMUMzQnZOVk5xNWdZcDFUSkU4Z2Q3cXpwam9rYVZvQ3djMW9oN0xtOXhCVXZqTnlvcXRmNStJSGcvWDRxUXRzYlZnaFhCdDF5dlhWRE5LczhSajkvVXhJZDhlTnZGTXl4Wk8yeWV6RWNvQ0JreVVhRS9CMDh0WUhyK1ZsNGNMMmhEQWVwZ0sxeVFIV3ZwNTg2QlVDRHNIK2x3RVNZLzlscldJUFUrYjdjc285M2l1cFRjVFIya1hRd1VRM2M1dXVOelYxZ3hsdXdzSXVaMTZlTjBXTGVMYk5BQlB2dTlESHgxUVpQT3VuaUt6WmJtY29aUHdzUnNKT2YzRHJCRmdmb09QYUYrZjNVdkR0VzlncVNPaDlRVkZlcERNVEc4WDZjWXVVd2JsTFR5YmVmVHQ2REZUSHBKL0F0M1RKUTI3SlNibjg0WW4xeXRlSnd2eXNyWHZXSmFQWlZnUjJwcSt2djJKKy9mck5jNVJJNlFNaWdjL3cyOXRzL3oyNzRXbE56M3QyVXJRQ1VjQ1YwdEVRRW0xQUd0ZTBHVVZkaU1IYkUrZStLN1JnVkc3TGFFdm90bk1SMUVxRk1wYjRkTUZkclR0M2FucUhJWFl1RnVhd3llcDNIam40K2RBTkpTUHRocW02U0U3cmZTSXg4R2dNc09tK1pIeHVwNWFjdHZvRzladWs0Q1ZhZS9EeVgxUUxScWI5a05Hc3BBKzRURWZPNUZMTkNucVJybjJBOXlZVE9MT2haak9XODZEMlJrOGwvU2lmQ1ZyVHdIZWs2Z3p4cDUrZ2FnN0pvVFlXOFBSV1N0MVpLTFQzMXlIK2ZvbzdMODFlaXZyWWZKcjFGbzVYV08wQVcrNktSdU5aRTQrOEdPYW12QVVVTEZtYmwwRFlFYWhDOEJ6VXJvRWNqVVFtRTRCdXFJVWpNb2h6ajRtRDl0NWl5ckNJYXpRdlBEZFJKS1dGdFBPWDNlQ3MydnZmNkpiOERqSDIvZm9kb0pIVHAwRmluZWxJVitBdFlURFFQbFFaNmQwM2RIamZjWlQ2Q3N5cU5pem5NVmYzRW1WbEgzajREWWh2T21OYWZsZGd6VXVQVk10T0FXY0FjaFBjRmdkbVpjazlXZlUvY2Y0c3N5aUxZTXJXYUJlYmFJdVJaZU5kdElVYU95emc0bjZDSWZCcjJBbzRzK0s2aS9GL3dNR0x5RTMzUEtmWUthNTdHQlJSSGdNT3oyK1ljOUdRdWJGdFJ4enBOa0lnLzBPeXdTWlRmWXprallGZ3F2akJoejR1a2swZ0FLNDVDcjdGeUlITkQvZXA1Y3phZmd6dDQrTThOcGxEUFJFYm0vWFJmK1lMTGVhd2tvc0tvOXVmZzRIazkxdDhBMHFCdFBpMWhXWUp3cmpvUlJVeUdRUG1LZEVFRVZUd3lPaU5pR0VVMWEwZStXeTZ1Qk1SQWl1SEJvUTBXc2NKYkdZR2VaRkdoS01GRlh5NS9rTFhCT0I1T0x0UW1sUUs2ZVNyWWl2aWpHV3p6eEZGY0Jzb1RUUGtPOGNodG9jU2ZlZno0ajN2ZHhZQVEwY0NqdDhDSnZ1SVZZSWx0NGlXTmNMdnUycWZZTklzb1lKT2d2MnFkKzJZaEpUby9sVTY1VHFkOS9INm5wTTJpU0pIdGIvbHVxQldqVmFwcXpINmJQb1VWTWdWNUZnWTk1SktPUkdNOFdoVnZDVk1MV051TkRDUzdzSlVvWHNtOVdSRGg2emE3cUdQcmM4TktrbmRZdXFUM1lRWVM4anZZZEEvbkVWd3FKd09oSWFLTUdIZ0YxbEhha0l3a3J1aHRtelQwRHB4VkczMWYreE4zbUt5dDVGTGZPazRoYjV3aWtIMEdqNHFpVjNsd2dKTmJVdzhzazZZR2pRaGQ0U2kzMDBOMnJiUGxYTmJqQXAvV3JCT3JjU0Z0cyt4dWNJbUw0TGNON2VDZjhlckllK0oxNjZEWUxrelZSNktQbVlOajlUVERyWEVYQzBiMk5NOXVOSGxwTEM5VHM2cHRtQ2tRalM1eUxSOGJlZUtuNWk2bkdES3lZKzZySDRJeGJIRGtsY0hWSitGcVNQZlpEdlMwQ09scDBFMkRSbU0xem8vcWNPcytPVHIvdFRkTWkyNGMvNmFndkNWUlpFVDZDVzlHenZHMDR6ejRPeHk4MkRpMUVRTmtIUjFyUDZNeVQ1RWF4bEZPZEwyVEpTeFErQ0V5YTZKd2ZIQUV0bkx1Y1Z4MjZsR1NEcmF5WEU1cFYrM3ZGL0VLSktONGVNNWxTK0I4cDlCUWJwNFhGWFY2KzdsRTdyeGVvL0htSGJJQTFFY3d5ZjRMb2pSTWE5UTEwL2Z6eEZSODk1SU5TcXE3TzV1bUM2M09tZGsvUTBmZVNaUk9nV0tEekJaT0pFRFRVcFh2UmpBa01JelVJTk5HVGdGUWZRd3pCaW1tNHc2L0FvZnlQTWpiQ2EwbWlLOTNBWVo0cFYzZlljU1J6YjNrWHNMelNnQXI4V0VseTZoWEQrTG5RVC90UElYVVBST25IM2FFZ09ra05uN0UrUVg5bXZoWEFIT293N1ZKNUpCcWt6YXcvTzhvVEpUeXYyTnFDaFBEUDhEbjk2SENqQW1wTlpaVHNoeW5SaVpJQUVDaUJVMkRoa1VvY1BaamRLUDFhMWtUQWhvY0NicWpKOVlBQ01PVVkvbUQ3SnNhUFNScm9OdCtKWnBJNmxGem5MR2xTL1Y3aFpyVkMvNkJUS2YzQlI2L0xYUGFOTzVxRE1DY0drQm1rVWdLRy9relZhYVFmM1ZPVEc3dU1Sd1l1S1cvOXdINFIyU2J2QStuTUF1Nmg0Y0hLNDQzLy9zbWEwbiszYW5CVUNsRTFSb1g3MlU5Z2ZKc1I5M1dSZ29yeWkzeFhvVnZkNzFwRHUwYmdra2I5OUdmUEx2cEhPMFVCaE11Z1dUR1h2MGJwcFNPa2VUZUVlRCtUdm5Rc09WK3BWa091WGkySU5raWtVU1d6b0toVzBxeXhyRlpxbnYwQjR1bXBRV04ydUN4ZHMvWW4vVE5Zd3dlRXVhbWFUY1FNM3R3a2ZtTmlXb3p6R2VTalhOM0pUOExnb3lsNmt2OUFtUGxVakFQQmlXMk9NSlBFU3Y3ZFU1d1BxMnFsOVJIRTNDS3l3VlRCcm5zTVNoQ2NSV2w3aEN6WTdCYk55aUgzZDlXZUxuMDhrZlpCbHVHcXpoc2ZITURjRUFIYXplTWJsZXd3cVhjL2JOWitBcDhobHc2aFk3cnVhbTcyNHZwbzZLZEdkOVhLNEF3dWxVc3h1YnZ6V3lpV3EyWFVFdm9vWE9RU2NQcG9xNjhRMUkrcEtlOHY2aDBYamw5Nk02Y2FxMC96NkhNa0tJUzNLT1A5OHBJVjZwZzJZTmM4RlpRaFRKWmcyMlFXc3MrRW5sWlJDMXNCQmdaQ3ZEc3RvTk5RVzBLcURPRDFEVldObkRCd3o0REZSN1d4bHRJcnphcmoyenFIa01PVXJQdlNEMzdCeUU0dDlBbGRaK1ZoZEdUMGp1RG1sNXFKanZ5bkpyZ2I4NnUzVnAyRzFWQXVucVUxVWw4ZGNBaXF6U0F1R0I5KzJaZmJtOXpFNmRmdkZSeVBUV015QkZxd0pQMlNXS09zeC93dVJlKy9IbzJFMTZRUVBVejFrT3pxbGVSNUs4NnY2L2NsdHhJejIwUWJDTVY4cmI1QWI0dk9oQWNOaXhjRkFheFAwdDM2blcrL2lSdm1TMzRIODhIc0FLbTg0RGV1VU9kWmFDNHQ4ZUg2QklyaHJ0YlY3QzFpdENlajFiRkdkOVFpOGpTNVIyRDFpWU9yQUk4SFZzNnVIcnp5VVNGTUVVMDNtS0lnYVFJTlRZeUExclhxNTFqVUFJQnZrSkF2TnBUajB3Ym5tU2JiVWVsSlhXYWVKcGJPZUJWL2NYUUdzdHdJclVMbHZKZEZCeVRMVXgwQ2paQXhpakF6NjVncU9kbVlVTEZZNEs3UmtEdWI5bTBQdUZiWTlqbmZoT3JhaTJNWHdjU3pWbDNFc3ZVVDl2cGJESTl3ak5IRDRvdGNtSll6YU5Oc0VGdEwwcmFKWFNXMGJJd0VXVHFsdlZOT0tSS0NLeUVJaUJZMzBzNE51eU1aQ2YwdEJhNTdsNnl2NitFN3BKbzFOKzRyZjc0TzFWMlp1OERhbjZCbnRBeFFYenVlUGp0VENLR1hTSFgzMjVUTDVmaWJJaENUYVhYUnNYWjdTbTdLZnpRUFphTlNWUmQ1ZU5rSjcyR3BvdzBkcWxaUk1WZHBXK1QrR3Mzb2UrdVd4cHV6bG03Y2N5RTVYTmJHaTg0NEpreU1sdkZQeXFXdW9uQlJzUGRjT1FwMVpuR211WHZPTUtNOXZ1RjNqZjg3UVBvVDloLzUrdEpmV0tqMTZ4U0VTU0w5eTFwZUlqM1pSaDFyeHFkWDFudWxob1UwcFNUbmVNd1pIYWJvbkNmZlhZMG5mU0xJRXhVejQ2Vm82cVlVZnVvbWMwanBHaytzbmxQUkMvOE1kZG1jSnRwZ20rZTc1SEhkbzJwWDlLMmlOZkxRRGsycGY4Uzh0S0lyZ1JWOStyaVFybHdISGxkcjRPQ0pQeG5mQkh6VW92YTd3VmtGbThwYXFyN2QrUjBkNVhmVDFCV1kzU3dISHcraCtZMDFBYkNLQ0hmbkIvRm5KSFZjbEJSeUlwYTdYakIvUjU4dG1uSVBEeWorbDBETkNDT2VuTFpmNzZkc1lKeVdIYldTSWsxN1JFVVpCMndVMkFMLzVOZ2QwYWN1cEZtUG93VENJbGlxNnl0ZU0zV05CZmRLQ1krbnFJS0x4ajRnaldLUG9EZyszV29FbHRudjQ3Rk1JZEh6T3NGRGNvczRYY1FTRTF1UitiYlkzdG00U2o3ekU2S3BqalFpekQwSkhuZ3lWTkZ3RHYxNVREOHEvQUdvM2plT00rdmFWa2k4NkJ4d3c3SVhjSGdCbDUwN3pzNWppRFhoM0FCakVGQlR4L3A3WWIwRUhCam1ldWk0TnlTV1M3OUpta2J5bFF5azNCbEtQbm5DRmZTUFIvZXR0MEF3Zng0VGJObXZiaStBT0VFSjNOTm43YzVxVzJhNlY3Y0cwYjZVSUtCUkxZVDdUbjVpa0ZiWmlKSjBTOVpUM0MwdnZCTkpIcFFxa1phaWVIMklRUWNydDNGQTRIbzFTdGw3UzJhbkZxSUhmN0pTdUk0b3hvOTBTM1FwamQ0c1cxVmo4aVBGa0taL3VnOUNheFFoWVhEZzNnaUVTdjhLSUJVNktaRW1HM3dpS1lCMzluVmxHaEU1MXFHQVRMRFB6MmNMeU1rakFXZDk4OW0vaTIwWC8wMkt0NjA2NTczT2dKWElsaFU3WXg5QW41ZWEwWFA1dml0RkFqc3BsY242YktjRjljYmE2YnFxWjVxQ1ptZVJZQlZySldqSWVTZzVhTWE2Zm9RMWlWVk5mdmNpMHhzMDZJNnRNRG9rV3huWnoxRzlMa3Rvd0lLdmdIQ2p6cms4RFc5b2piaHR0NGxlcjF0YVo5dUdLL01WOVM2MElrUkx5d1FudzIxbFhMMG1VVTZvOWdRYVZmbHo5elhnVWVQQUpDdENJQ0VxU2k2SzRpK0hrUzNmQ3V4ak0xT1N0d291YXNja1BoaW1nVXZJakZKY2t3Yk1FWUY0OU9rOE5WV1dPUTlaaUoxL24rOTdxalFVWjBxNnRvQzRPWjYwdkkybFRjb2t0UjFYZGZmb2pkOFRhNmE0aWtqZXU4MStZYzdYT3o3b3RIVXVMaitWV2gyWjJURXd3c0twdE9nNWZSalYwWHRmMjBNVnZhQnFGeHV4blMxYjQrb1dHRXFSRTFReEx4d1BBempEK0pVeFNpcVpDbGZTU3E4ZDZXQmhXUUxucGNnL1kzM0pldC9GMUxsNDdnR2g1ME9PRHJiRE1zcVN3VmdpM1hvajFTc1g1SW5idXBNWk96YVppcnorNkNERXo5YzZpVW1vN25mMWVIMTVQUWtFTXpKK0QrRmIrOGppaE5tOTNGWk9mL3N1enM0Nlh6akpyRHVrQ1FJa2JKK3RiMXAxMzIxTEZ0blJ1a2RDSFpTQU1UWmdtck43bDZ6eGhyRDhPNG5jdFg1R1lyU2QwbnkzOG03Qm90N2lFd05tT0h3eE9hb2hUTnNXL0paOGUrbkhsN1NwdTBCc0RraU9rTVpEZ2w2ZDdlZUxRRDU0VUJZN0lPRkYzcmlobGI3Z013YUhjQ3BGQU5iSGh4cmNHTE1XZWdZWDlpbE41NjhVN1BiQjJFT29PMS9SZCs3Zg==";eval(e7061($e7091));
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
<video poster="<?php echo urldecode($thumb); ?>" width="100%" height="340" controls>
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($dla); ?>" type="video/mp4">   
  <source src="<?php echo $dla; ?>" type="video/mp4">
    <source src="<?php echo $vpdl; ?>" type="video/mp4"> 
 <source src="<?php echo $dlb; ?>" type="video/mp4">
  <source src="<?php echo $dlc; ?>" type="video/mp4">  
  <source src="<?php echo $url; ?>" type="video/mp4">   
  <source src="http://dl4hut.xyz/stream.php.php/?vkr=<?php echo $lloc; ?>" type="video/mp4"> 


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
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="http://dl4hut.xyz/dl/aio/?f=asMp3&vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="http://dl4hut.xyz/dl/aio/?f=as360&vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo '';  if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="http://dl4hut.xyz/dl/aio/?f=as720&vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<br>
<a href="https://DL4Hut.ml/dl/aio/3gp.php/?title='.$title.'&vkr=https://www.youtube.com/watch?v='.$matches[1].'"><button style="width:100%;"  class="btn btn-success"> Download  3GP </button></a><br>';
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
<br><a href="<?php echo $domain; ?>/dl/aio.php/?vkr=<?php echo $lloc; ?>">
<button style="width:100%; background:red;"  class="btn btn-success"> More Format </button></a><br>
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
