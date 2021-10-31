<!DOCTYPE html>
<html>
<head>
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwM0xacWRLNWNyNGVobGQ1amJEeUFGOFc1VTkyb0l1Tko5bW1Bb0hrTnNIN0JRck9aTTVPTEJrNjVPV2h6bzIvZTdRbHA4Q2o3Vjk5MC96Yzl0b2o4S1FrK2tnSUQvOUJEdHVSczlSN0NRUGU4RWZwUFVEcUxVcnduMUpjMm9uVVVreUU1NjVLYkJNQjQvQ2J0V3hUODhjZjNFeVJ2TmY2RjN0QlRLSlZlTURRZXppT2FhTU9XQ0FOK1ZKSGlpM0VVNUlXNm5SMC8ybHRQbWxTOE9OelQ3Q1hsbG16Tk10R0N0VU9VMXdiclFEZlBrWngraitIZlF3QU1UUEkrazhGZmRLVE1sK1oyRGhpMmNjK25KdGpQSVFJZzlMdUx4ellkMkQrZjVZRklNVU9WUDF6MEVFQXBKUVU4M240dE1IT3RjWjZoalVzdzkrc2hycjZRdFVCcjBmSE5PM21NaDZTMkxJV09kRjdoUzd1VTUzNUpQYllRRWU2Q0pnMHpoYXRsdlZWK2xYWTFFRFVRdFkvTnVoU2JlY2RVVnFrSkhHZXZwVTIwSldyUnh3WGRQRlpUc1dZKytEaGVLLzZwaXpZSnJIK2tNTnlYRVdUYktsbCtMWkZ2UFFKRi9GNDJOUWN0RE5BYVdTOGYrc3kvWUVkcWRCemVSUHRYVG85TElSazJWLzV6Slk0R2tHVzkySmMxaUtpbEd0dUVTaGgzaU03cjQ1T01ZTWZGMHI5UjgvdHBINEpyTVRMaWE1cEFPWVFidWZjL1NQcUVFRWxXWFNPSENWcVRKWWQzVC9Oa2U3KytKemUxVXp4ZU9YdVh1ZHNUUlRiQXk2bTFSbjVtSm8vaHlzcmdpM05tU0RjZmJqK1ZzU1VDamNhZFBiT29yeUxJZ3RsZ1VaTHovejBNY2hmeGRhWEgvcWduUFhVdVE0K1ZVNnZCT1hQcWlPTzB1OFAwQ3VjYmQ4azJkc0pROWRiOTVqMHMwMkNlaDRlZWs2ZVRVc01XbWtuanFLMU5CZVVEZzBSV1BwaDRrOUw3SGFUNVBhVFdwaUlONlRaaUtVanh0dVVDQ1hZemNNU2xXZ3pZaUFPRThqdWx2ZFlyVVlKaUZOYnpIY0k4TFREK2g2cXBTRG1XR3dmMGFjRTJYVGhkSEVwMk9MMXV2dGNuSTdmQlhqY3JpODF0UHo1Z1M5ODQyMmFCRVhscVNERmNpcGEvTnJKT0doNFhudXlQMjlYbmFrV2RpaEd2a0JYWHJnVWM0OWlKZWlKZ0ZYVHFFWGdIUVdwc05CTllzYW5admtTYmVMMGo5Sm5oTzFwaFo3WjJYWGNmZDRzWWVpM0ZIVDhQdlR3SGtzVjI3ZGVrYjg1eGtCZnlzNFE4dGNTUjlSSElYUDhjUEpsanRORzJwNmgwZnBkWm5iVTdmYmRGTERLaFRtSUZsQ1BDTC9RalQ3RzRJZm9LRWRvT1N6TTE5cWM1NCtUTkhHM01PRnJrZENzL1MwVWlnVDk3K3krdzZTcytFSnlpZVlzWTM0TDcyYXQzdkZnaVNGakhCcGNQTnY0NVlTNzlvOGNDTDVYTmpJUFhSOFJPWTVKdC9qa3FteThaMjVHRkJHVUY0eTl2UEg0d3pFRkgwRVptbkJjdWZ1dTNMOEd4cGdaOS9zdXJFRlJRUVVmM3Ztb0YyTGFyY29XM1dCTUVvQ2pDZ0xPZEJvQy9RWHI4ZnBzaDAyT1JSbjl2Q05XeXM3RFQrWlU2eGplOW9KQ05zbXduazdyeW51QTkxaWJQWVdjaGlHdWlOcUp2blBEL2RqUTQ2SG1yNndCWmMyUnBLeUR6aTVzbDNpTkcvYVVDUit6WWpFZHYyVHE4T0YzVnJnRFMwVWM0MnVSQWtNTDdyNUhsOXVCTGwyQ2hxQzN2YnFwMW1YNG01eDZFU3FhY1BPZ01FM1FkeE1Md1p1dTFtaXMyaXBiMnZaNUpYSllZL0JuNU5hUU4rc2ZNS2pvOUFPbkNlamN5VEZiQU5FUVFYcGYzUG04b0VOeGt1VnpONnVXWnREQmgweURmOVRLNVpmNjB3ekNXVUc4RVVrZ3JXeWk3V0xVV3crQzN1UjBIYlhiekk4enBPR0JsSU5xNGRFSVJkZnJFTXh6dUZRZmJwVCt3UnNwYVVGenBrVmcxMHcybHNmYWdKUXpKcW51YnhMYUVmUFEwU1pXT3o1QmVVU2RvNEVXVmM0c1hPeEVsOUxvdmQxRmVQVFR1c3p3UHhjVUxBWnZqRFlmL3NQaHFHeDZqbE15WXUzZ05VODE2MGhWa0twZGY0M2VEWituOUFJZWR3d3Y1WGlkUkxLa3VQN1lWMkZKWlFxMUZTM3NUTUdPSlkzWHNKeEdjY1prUUh6WlVGSTBMTlY2WnZVYXpIZWx4bmNxR1ZRUVd6ZDlNOEF4eER1RWhraVhHVFFhYjdZL28xVDhtWnlkR1pJbnJlMzZGenhoMENoaVIvQXZ0UjlsTnVQL0I0WE9uUjRNODF6ZkxHUm05ckE3S2cvSDRxZnJNcVhmdS9XQm1VQlNMZ3VqUEZnSkVqNUNpeTNNUkNBYThzZHNhN0xZRTZ3dEFUVGNZT0dma1lwcTNYblQ0aEpyeE12OFNkeGhCcFQzcHdxN3FWSGlzd0J1SXVqM1pQeE9GTlJKZkl1UFFkaVVNSDJTUlBrbnZOeE5XMG9sY2J1Z2pvaXF6RnNLaFAyYktvcnJPMFdNL296aWZtSmRoRzE2S3ZXK2dvWU4vTkdKVnRNditWUjFRejdERDdoTmRWY3Z0MG9UUzZ0SDlJeDU0YVFyTXlTSnpwQ01JZTBQZ2R6Lzlzc2xtT29tNEcrT010WGJ1WVJkSDFxRXJaenphMlkwb0hIWHVhaFBFc29UNUpLTzR0bllkNkJoNjJzRXc0NWo1eWRnT0N5Z2dtUGU0VW95eTV0MWVqei9XYmxhdlZZVndiZkpHVzFENEdwWWtackdYOURyTmJJQUliM3QwRUo5bkFKc2drdHlnRGtJUERJeEMxUzg3RzRrY0V1MEZkK3pCSFRLL1lxcGU5VHhLeGR1ZFVVNTAwTjc4S2Fvb3JxaFVwKzBlcVV0aElBbHRLU3ZZUUF0ZGNDMGh2eWczejZyd2hvQ2QzbHhCOHkzc202N1Z1anIrVUpkdHRlSzV0eTllUlZLdDA0aUZyUXJXUnk0c0FQNlpuRXhsYWVmYTZ4SHhoWkQ4MVI2ZEl2NEtDQlJFa2NuSTZCSzFCODVwd0Z2cU0vWFFXcmJFSGVXUEZhKzd6aGp3V2hlY1FvdHhEQ2J5Wm92bjlpOHA0TnBEK0docHAzVnllSDB4aCsvUyt3NHpsbTVtR1N1ZlpvUXVRd1NsOERraHpXcVIwRHZhSWw5cTdQbkJubHFJdW5wVEVvUnJjb1VQOStxZzdoZEJ6Ym9PcCtMaU9EcUpNaTFDN3NNcHFsMjJWYzV0K1ZyYVRKbTFkaFc0bllIN3Q2ekhFMWlsWmFCVnI5S2xLU2FycnpDVFI0eG1DcUVGQndua2k1MGlWQ3BWRWl0WlhQZVlJRTB6cjViZkI2djJsZ3M4bHlQY3ZuQUJVQ2Zxek1JL2R1azZscmpKNHlCdXA4eUsxMjB0NFNwTnI4bGRVZ1UvbVFlUkQ1OG1OOERzNGlYaExWNWtscUlXdDEzUnhOVzBvMW1COFU0anhPN0psT3dKaENJN2xwTFdlUUtRZVVXb1Y0eFVZdFB4d25SZ3BnZTE4dk9wUklLbVl3QVEvR0ZndDJhMnZmSFZieUVMRVQ3UGtHOE1ldzhXbFNVZFc5clVER0FVNHVUbzdObjhkZnc1S21xenA2VU5ETm1TUVQ0Vk1WRnF2R0gvZE9wZ2diRkR6UzN2TWw0WmdrK0phMy8vSjNOVkRjRFhFdFNKNWRJY3Nod2ljYm8rNUtydjU4K25KdzJuRTFMYS9xdm5RbktBTnFLMXNxMWVwYkFNUWJrUUhVMjJEY3lQeWZpSy9uejNsS2RiV2ExV0kyYTQ0Z2NSUHJGMm1lc1dsaUlUdmNWTDN6ZGFEd0phZ1pmNkw0K2xQOEJXK2hvMnZOcTZUM1ZCTksyNmNtdlR2NmxDMmd1ay9XN2l3VW9PWUh6aUYvamozT20vRUdGbHYvcURtL0ZNVTRESHFxakw5bUU5UGtnL0RGYmRyTGUwclozL1Yzc0lvMDdCNkZjZGtNcmZuamloM2ZBRWZLdG13NlhjalJ0ZHgwWlJ2OGFiWGZGMTBaR2gzdGFadkNqSW9iZmN4YWF1cFZjdWxmNlVCVnBVRnVCVnV6RUhkRlhTOGZoRE81QmpIZ3hzMXJPamRzdW9MTW5Ra3k4ZTM1QlJiUkhzUThpdGVRNzd0UWRPc1RxQVB1aVBCWEVrNDJXckhHUEFPUms2RkdtTnlLT1JlTHhZRGdQMUZ5by9qL0FGMFU1T1N5eGxsdGZrM1lYS1FSdTlWSFAxcGF3THdMa2F1aWdXZFp2NjhHMXA0L2lkS2tqS2loSk8yMzZ0QnFVNmVkVlRUSkhRVm44ZzNPTmQ4R1VCQlpFaTlyVXdDMDFURFJkdzF2WHdLT2s0QS9ubUlGVGVocjJkekxucTMzblNYb3JoeEFtN1dPUnBVRE9ZSEJ2eHVlVG5ZcXh0dStFQVhtVmFPNHF4WjBlSEZvQUMzRE5uVU04Y05jYVJVbUd3cFYrSlB0c3BPTHd0VnRSRTVQYXVZblRLM211d1VnWXdEL2FvaWVVZDJXanJIUm5aS2hPSElPWXE5S1FtdCtvVWoyUXhrSWxqRktvU0hzclJoL0VXeGRyenNsQ24zOHpuVVBFT3cyVThKeDdTL3pIMHV4YXppUVZHQzBoelAxbzBnKzVsV0FzYzRBVzNGY0J2Y3N2OG9BdkZrZjVtSDZjUWdGTm9EQ1YvQ2JUVGV2NFJncWRUa2R3bE0zTy9UR296dGphT1VDakxOQ0RIK1Z2M0hRU3hUU2NsTFJWUkl5YWExb2hqdlozUUtwd2NabDE2NnpyU0ZrTGNnK0xjQ1BGU1VaZHRhdFlRK01DNGtPejlKZDF2SFhtejNCQisvVzNyMXBVeGVVNktLanhOYlprUTZjSnZHOG84ZHpGSm1WVzdvT1c0NDZxVm95elZVR0lMV1dZMFNMMXpHazFXM29pSXU4bnRBQytPeE9ONS9XVjlhMk5mU3orWnFXZ3hzeDEvWGVhLy9nallaQlRSZmhvZ3Zxam9jUmhZZ1piNHVmd0RaQWJrbFdDbkJTbGk1YXA4L1FDR2Y5REwzRENQSitVUnQ3ajZ0NGFMWW5UUjQ2ZnRueDA4R0g1cEFqemdYaDdMU0grdWxkY1d5aVF1L2NrR29tRkxDSURHd0ZsbThicyt3NVkwSDhyTEhmTkxxU1NxMnFnREJzeDN3MGtLRzc5VkhyYWE1Wmo2TWhDRTlXZUJadTRjMXhtaStjdi81YU0xSzRmQVV0ZlBPYmNIK2lxc0FOQnl3UXN4V3FmUkpOL2o5NmpzTEQ2MEVad3NJWEs5ejZ2MjFPRFhYRG54Qk85VzRVb29jcjZZK3pUUVlGQUQ1cHNPTjBib2lwWGtSQmcrTGpmdG1zZUJ6ZXVUa0FLUjJ3QlMweU45U0Y0VEJKOWJYMk00TmlzaUpvNmo1Q1lKMWJ1eGVTaTBxMHlJNVphQXZuMFI3Umk1RGVrTDhqdGJZVHBBZ09ROTFSU01henZ2eXBXeGZQMVVxTmhVTGZBWEtiMFFhRVAyNURlcS9lVzV4c1JyMThOTzcvcGwzY25EVXZpa25WUVpLTitjSitycmNxSS9WWWVKNTc4VVJxODV6MUxMOXRFbjhvcEFiRDU0bVM4TVZ3OWhvbC9BSkpWcTN1M0s3dGNOamRjVjlmNy9WTkp3TmRWaUMxcHpEUThJWnhpQXpuUFBDNkxjMEsyTlZqQmFuaG1yZnNBQ0l2ZUR6SEFSbFlkVXpDb1ZzZ2hwNU9tc3JBQWVDdjJjdjJKZjZ6ZzBLbkI3WCt1OGR4eGxVYzB4Y1RFVkczRDlPaGpzTTEwcXVlYy9WaWQyMEZNNjVvc3V4MitHMkZCYk9HdTRPdTQxRmEyZzI3MGpGOWFXdkxsNEVVcmR2S1JPbVAzQ3VOcjU3aWFBUys1WW8rc0F0cVNxS3hYSFJUOTJpaVJ4K2NnMWxzUlhhekg0Q1Z2SHFTdm1rOHR5V0VjY0dFRDJaRzgxRFVWTEJjVkdYMGFRTFNIak81TGNaOC8xUXF5ak1Ib1MySmtTWHhuNWhmb2NQNUE4VUhNSEtWL2RUNTVKYVRZSjcwUlMzTzBXRllxcklFUmZoTkx4Nll1RllkZ2x6Z1hrWkZLU1c3ckp5dW9wbzlBbHRzVm5mNFFDdXZiK21DT3dTaU93OTFUVG9aV1RKM2MwanVxam9xR0NJaHFJdHhHdFoxSkxBVE1JM0UrMG5ZNkVWTzFva2ZLUVRZNFF6UzJwZmlFb0NnL3ZoQmZmVWpZVWFrUUU1VER6UnBrQmdMQkl2MmZyRzM1M3dLQklTV3RqbndETDdLTjBGZHhMS1BRTGs5Y2s3elk1SGt4SGJoaEpRRERTc2c0bWZESE5KcjllT2xlWmtuTHN4b3dNRzh2RWJld1B6UzNmSTRHSTZZUzdpLzUvek1SYnRiYjdqMml0Z3F6NlUwWjIrMEZhYWd0UWk0Y1dJZWl2Nmgyc1c1MFBBVjV1YjUvTUdNRlB1VzdLK2tocnpIV3c0M3RBblVtUGdyVGVzTHRDN0U1dS95dklkNDdqbDJrZXRLMDBkWnNOekswRXZaSUNaR0JmNy9uam5BZmJzcGN4ck42UTRDU3ducmMxblJRTVpYZk9hS3lKRFlhRGN1ZUhWcVJyM0dFcmN2Sis1cDZCZTArUmxObElzeGduSnFYOWh0bGEvRExXOE8rWnM4K2c2L3VtdncxbE1zK01HbW5RWGd5aDQyTUxocGliYkxlWFRpSy9KLzB1eHk1UFF5Uyt2N1JvMmxhVWVDQVRXbERxRWsraXhvTVF1M3BzcGxqMU9TRG1yWlkwM1dBWWlGb2ovMDdvQjUzMFVwU0t1KzQvZUdidjZwc1ozYnVIQ1hzRDBJUDY0OW9lc2JGMFRKQ0MrOUpqVEdtVEN0cHhnTlFSM0FSOFNGam0zc1REbVRCVjJsVHRoR2p6YXdITk5ycWN6RUUwUFZpS1I4bFZhTS9FWkFiMGxCVllVajlUMkE5TGpWQW82eWxUVjRsOGxYcG5pbHVzTVZoOS9WYisxVVhyY1luOUlNMnZYVXg1RHhTa1BtNXNrbFVYU085UGtyNzJ1K3dzNmQ2RElNcmgySFRjSmk5YTRRRE1IVjF2VzRGUUhPbU9uVlRLSFlTN3pkQ1J3TG1NaTNGL2FLUVdkQ3hDOTBGenpsRXBHY2lRU01YU2pCOGI0TEdseGRaWFpSSllZVEhHdk1YS1lyWkI3MnFWUHFjem5IQ0R6R0E5RkpqaGlWRGlId1MyZUg5UEpqSHVpRGUvSVBuZG44ckh1cVZ6d25OcGp1VjlzTFZQcktVaCtNR1hwRzlrNC9sSHlZL2JmbGFFalZsK2xWd25NaTg2aWs2K1BxcENOZFRsWWoyZHlPMXNjVFJKbnMySFVtZFZOOWxPdzZUYTk1YTVRaldVcitoTzB2clFDT2R1eURHNnFBOXpzeXpPRWxucFcyWnRUS0Iza0w3djhNU1ZkS1laYWttNWJwYi9xU0hkbU5CRE4yVW1JdEVQcTVKT0kvbERVYmNuTG9CUmQ4ZnhlN2MxaTRyTDBreDZlTFltOE5CanA3TjlnUjR3YVZWVHd6QnEwT3k4NWhXK0lYbzVJVUJQVmJtTGpOdmNiM0lYWi80L1JaSWpVa09tT0R0dHcyaW96RWpKV1ZQWlJWQi8rS01OaG1TWkR3c1M2ckNJcUlmaUl2aXhHN1hoUXExS2lVWXR4TSt4UFJOcEFVK2tDY0RrMitHNWxsZWN6SDJmRHFPeHFCU0IxVUppaGQ5eERLSmZCeTIxbVlZUVVjWW15Smgrelh3MUpuSlRwNk5ETXRCcWtzOTdoSE0vOVJxa2ZCbXd3SWpUdm40UGs1OUVKL1FqWnI5M2hLclFjaUd2VzdTcUNXRC91SmgvMjNoWTlFZmdQZTR5c0ljajVYN1pXTC9CM0Nyb3Y1YUJSYzNxaW9EWnd2SC8wNlRrT1daeXIzai9GVncyYU1pZXhYNUFVNnpkWjdjb3UvNW9sTFBQam1zbUZYQ1ArelpSTjlpU2hsVnZpdGplQm03QitiZHhlOTI5UlNrZ28xUXROUlhvNVpaZGxsMVp4ejFsZUIvU1B0NHBJekpLT2NQLzFJSHcvSmlHTUF5WU5DamVOZklvSTI5Rk5KQ0dvVDR1eDY2Z2ZtVWV0bFdUWHdhaTFqajBHUS9mczBuVDVaT3Z3d3gwL3lkeWZweHd6ZUxZK1gyM1drOWNuYjJuUDM4RnFLWTJXMTFienMyM2R2MHh1d1hCcnFCZ2RUeHdqbWc4QUZZdExId0NsNU1uYjl2Z2wzTVBONk16aHU5aHZPcjFHTlNPZ0tqQmowTTVOSFVEa2lFam9DcTM4MFlocjlINXJpZkdvSzR6cmNjaGFkNHovUUZuYzRIc0ZrTVhzYzdlU2grRndycWZyVGErV0lESFBtQkthZGFINXpTTlRnMm9OdGlsc1pFVE0wVDgzaVVQRFJjRUtodmsrREFqRXE5YnJ5MXBNaUJvTkIxVWFibzdiZjJkMnRqYmNNaDQ1bWdWditOdjljRHB4SlZ2SHdzVTNUY2lzMUl0RjFpRWJLMXlkQ0tNNjNiTUxuY3JaNXdkQ2VKNWFMcWpqTkZhTmxiS3FZMU1qY0JIUUc2UlUycThReWZPY29JQkNvTFJEaEZwTWF5K2ZxUEZKZjFsT2tibWdyYzJJeDlZQXZDem9GM2kwTm54czl1Y1M2eWp1SmdTTFplR1ZHMkxJdHJwTVgxS0NXZzJtNzNOYmdNYm5pSlVkbGhQVVo5Qk4vYlpxbGJCUkxZWk9YcHBoei92Ty91Q2psbU1FRU1PaFkxeUd0eVZ5M2d3b0VLejQ2T3RiRHFSK3BCWGFNbDYrNXVwcjVjcEwrdXJ4MUF0bWo5bjB2aC85bjdZNHc2cytLRHhnNGVWMFFOakZQRjF0WmdIa2h5eHN3ektaNk5jbUJFZkZWNmtkKzFQT21hQjdSVUh3bjBYVnNVQjM0aC9WNnN5bENoaXlzL1M3bytROFRrTVVra25zQmdPVlkyY1p3R3ZMS1NISHNkZXVMOEN2L24yZy9yR2M0RXNIbXQwWkFwRGxnT3Fqcm1HQXY5ZXdmSUV0alMrYVFyQUhlYUI0c0ZaTVM4M2ozMkhhaXZuTG43bGhrQkFSZjYvTDhRdE1yZ3BtYml2b01aTk00MTFpdXg5b3NNUm5MeENJQVJLdkM1N1NqcVJ2R1BUV1hOejhJWFdOTkxwbUtFQ3d0UTkyU2JlT29UNllPaVlEcHdSQktRMUE4U0FzSUFTOVFnTk1CdjFXZE9vWlBsQitoNi9zU1o2YlYwZC9KTzlTSXJPSm9SeEs5TEI1Y1NtUnNHT1REWFlLN1BhZEFIdk9vWEw0UThuV1BFSGRwZmcxc2VpaDNQMjB1UTRNeDNVcW0xaVlOTlBZVjZmcUY3T01Cdk5CYVQ5a0M2bnEwUmdyUlFHdnMvanJTcnpsRDVhMEdyTDRsRzExNVBpZXZJRnVZRlBTNzdrVG9KL0g2a2xmNGM2M2NJbzBmRVJDcU9XeDBhNitYNHlzbWFVbTBEUGtSczZpNEI5UVR1aHhuSHBXSWVNZXhtMG1iYWc2c2dIbTVXVXBqNURjNkFHQkR0M1pTdEpyMXhNT0FTeVFBSEdPNFNlQy85QlNNVlRkWnJyNmd0ZE4rM3YyTk9KdllCcDhZZk5IU29rRjlXRHdWbGhZQ2RxbVlTanN2OXhyNUZtQk9GamcvRU9aRGwxaHdMWS9NZW0yR1RSbHJJLzNZNDRKRDdVY2Q4RU9GeHRMNWdQL0xGbnJseUJRMlRTTy9mN0Nsc3UzN3l0QnRpdmlmU2xBV0Y2dERHNXI4VXR4TFZuVUJxR0FpR3IrY0ExZ1ZNaVZMNXhpdjVYY2V5S2xSVVBTbW1YL09aYzBWZ0VEWmg4bzJIZ21ZaVVLQ2Urd2VNNnBYSWFQVDBOS2FXNUdyTVpVdi9nd0p0d3pZRnhOUUZOVG12VHhaQmJydGQvYVVmaDRWQm9EMzVubEY0UnVzRTM1aXIzNjJYODFsSTlxZE9XTm5MRDU0TmdUTmxVaGdpTmVqN2hTeXF6enpJbytyZjVPV0xXMURsalkzbmtNWU9sNVVFbkJEczhIZTVNb2tqN3d4UzdHNFo1RG13eGZLRElITGVOZkM5NTlxTkpzN2lEOHlHQUprN2N1Q2JlT2JSVWR1d0Y5Wk5yNjBpRmpjUEp6WmpWRlZ1U3cxRXNxSDdxTXQ4TjMydGNHUGVxSGV3YXVkOFNhRzI4VHUycUhEODB3aUpJTmY2ZE1sS3g1dzVrTWNWL3RJVTlET2pydlQ0dnp4UmNuZHdnK29WYzBOZnRBaFFpUWJFVitGcGxvYWg3elRWR2dISVlrdHdqSkc4dTZURTJmQkNxNUozRE1ZKzg4TTdLdFp6N0NJYU1kazhKSVovUWJuRHo1UlFZV3hNbHRLMHo5SmJUbnM1TXFuSHNiUDd2QTlKWno1Smh6ZUc5Njg4K0IwME5JWW05NHFUVi9yTGY0blFHTUt1S3dLSTY3TFRWcnhvMDIxV0hXT3hyZmYvQ28zMTV3clNYakxDc1pzYi8wb3BZSS9MU1FkZUZDbklWa2c5RUp0aGNsTHVabFlpdm9Pc2I2ZldXYytCZ2ZQOGQ4RDgrTWt2Sys4YzQxaUdhUkZZdmx2R29Rd2xIeVNROSs0RVc4MHVPaW1GSEFrellwekhpWVZtbmNiQlFKd0xybW0xOEgwTlZ6QVlHYmlTWkNXcGVyckY2eVhzL0F0a2FRR1ZaVHZDazlqdVY0NFVIZ0R0UW8rL1Q1a01YYVRUVEJCdjhnb1lWNkVNTit2UEE0bTNRdDBBdGpYUWMvWllPL081VDVNaXVWakwzeFJuQjlyd0FFYTczaUdsazFWdCs0b2E3eVB1QzlEdFRXRjZHODBySWpQdTBIMEZzUE0yOGhzenphWDl5R243Y2c1OHVKSkcvY2NEN01CT2N6Ui8wSjhTZUtWei9zUDNlbmtIM1FGMkJNMThUeExMN283eDRwd1Y3bytLbUNIMFUvbEVIZTZIcXlZYllzcFE1alRsNGI5TStOMWhKNCtGK0RXTHZkaVpUb21FUjkvekpmY2VvQytObzA5NUdWdG1EbElxdjdrM3doZkhDZ1cwd1JaZ0NDMnZXS200dDhBQ0g1elFCYk9yOWt6SmEwTWp6aVlTWmFMWXc0QWNaMjhPejBOSVp6a1BQTVBWdEI4VHZlMU9XamRoTk9EbTA0WVRlMmo5bUQxVEtkSjZhNmpQTE5LWmhOb3p1alhOc1FweGg5NHlSeUoyemlpNUVzY3IzUS9nWUZNRFY3a2paVVBNMGpabTUxUEhuOGpHMXA5NnF5MysxVElCUUJmOHIvdXprb1Y4RWZQdm9ZSnNqdE9UWHYwSzlDRXppdDlxTmJCOERkNEZLSlZTSzdRTVBmaEs5U3Z2Qk14UUVqdzVpa2IzaktMb3p6ZlNPNnFOVFdTQTY0M1pWcVI2TlBlZnl5ZVUxWDROZXRzdnhUWE9ZOWZ2MG8vc1YxVHM2NkVjMnRQbmlzWnJORmtYdTV0MlZ4VllNMWNJb1kvUk45WmdweU9SbE1BZzZyQis3bFNyMzNhWDJxWExxVkJPSU5aOXZGMTJzRVVUSnA1dG5xc3JFWDhVZUJVdjVuYW1mcUFnMXYxVVZua2lSUWtEUEhYT3ZhN0dkM0g3TzNhTXdiSzlPTU0xcGFGR3c1b2FlbXgrb1JNUENwT1B5aTg3NDZJVHdCdnNaNitDZzNyVDcxSUZVajhKZmxnRHl4MEhrSG9TVjNyUVpRWGIyNHIzNDd3UlhXQllmWEtjSG5DYkpGUlZCMlZDWGpTZkhXcW40S2FRc0ZhYXhld2hLNXU3aDdtcUhEdTNNekJHbExqRk5IZEp1SS9CRHZpQmpkbjRVVWJNdUU3Y3I4dnhBN0ZNM01VT25teGF3ZnFjUElRanU0OVo5cFZBM09ZL0pMSStZc1JoRmpQWExjT3FKWXFyTDNqRXRJdXRoUytnQ1grQ21JN0dPakVsZk9taVNrTU5IQlVFcDQ1Lzl5b2o0bjFtaklkRnRWYm54c2pwQU9DVDZXeEI2MUpMTXBGMTg3c29pM1dTS1p5TWMxZnZwSlJzOFZHcjZLbUR5MzRmOTZ2U1QzVjVkMVdwMGhORTdtNkJSdXBCZWo2YWdpQjVMSXdPQUJKWUVlWEhvYzZ6a01yeERBVjBpRC9hWE5sUlIxVU9Zc3grZlpvU0xib1NnNkhTSlV4ZW85WlFGMk9PVVNWY25UdFdTUmh5UjVRb3hYc2lBbktMS2tBK3ljTWMxWU9nV2VaVkZjeU83NUhzS2hXWjhQRWhDQjhpTXkycVhoVy8vTE5yUmdaNnFpSm9NbVovclNSS1lqVFVQSkVPNllTQUN5ZWlTS29rbVRCYzJvQmtBcTBSTG5qYlJhTUN4Y2JMaDlwMi9EbFlRZnhpaDdRQVFWOFZCMlJBa1M1R25pWXV0RDZoeTY4eWhGZ1UxVmxaRGFpejhmOWV3UTIvWmVpb05pa08zU2hyMitBNTFIcVB3SkVQdGlMbmViUWh4eUpiZkhXblF0bVQxY1ZaSmFQNURubkZKSFJFK0FsK0Jrd0hNbmNIemFXaGkvcGVDcU0rZzZ0bTlEL0ZxTklGaVRoTVVKeVRDMnBMZ1lrbmQxYVlLckVsbTQ4QVNYdUVxU1QxaU5pRUdDNEZDb0l0aFo5UUdvajBjR1JTRTl5T25CQkNSci94RUJXczdRYlF0UGdtWG9JU3RuTTFOQmNwV3R5YTVqQ1Y2Q0dnaFRScWFpK01iWmx6MHA0QkhGZkdWVkZlRCsyZnE3aEZHZUxhSDI5VlJQVUN5YStwMjN2R0dhbXlmaTJFbXg3YndnOHNJOGlqcHNrMUtJWEtJT1QyT3Q3UXFTQTh1NklkbmVWT3dUdlRnSmJLdHQ5Y0I0YjZncFBVRmFrM25pREZWeU1oTDlQNktUeEFsT09FRmpIaS9ieDNrRzVnRDdkKzZBUExZRlpNT0QxQVJqS1l6cUxCbW9ibnJaT243M3d3Rm5wakJjeXZhVU5JQjVGY1o4UTZXV29uVVNjQk1oZEJqWm0rZm8wSVVLRzluVFFxUHFyRnR3aUVFVnNPTVhrdVNnVm8zdDZJOVVkYnQ4NEVjMUZlSHJZeDlMckxkcFNQeW5rM01BZEI2S1VYVm9yemx3Vy91b3BLRDR2OTdlYjRsSlRYNStpYllOQm9sMldIa1VpSUR6V3Fvd245NmpNNFFPUEU4eWVxRW5xTGVjY09BUDF5czV6a1ZBSFVMZm5Sd2tnRnRCZnRnK05mVkZpUDIxdGo5VzRRVGlJUENGL1BRZTdISks1OUcyQ1VkbmVtMFhiVmZaNmtwL3VoaXphY202bWVPOHZ4clZoUnhvZ01YcXJQRzYxVTdWRkQvUUY3MUNaR2w3aEplZ0Z5d3hxbEdPdkt3MlJXa0huRGZvM2dLRmMydkZyMjN6STNxOFVMQ1NUWDI2b1Rmc2RVSzlxQ3NwNnpLeGtxTThYbnpTMzJIVTY4YzJMNU9ySDBrL2hrSjlpQ0NmYWlwNnZ4emxHbGR4R0ZJbTZUWUxDc3lIVGJiUmlHU3M5UHpQYlpzSUZFeWY3RENVR1k3dzJqVHZCaEJZMjlOdWFvSjJQK004M284aExZMXlTUi9wV0w4MlR5YWd2K1VwWDNnSVorZVVpd0ZGY0pseXJPV2Z3YWxLSHZsd3JuMCtJeU5GWlVvWnZqMkpwemlpb1hYTzZlT1BkcUtkWklZcGxBSjhYTlVFWkVBTjJ0b1FPczJSZzRjOUJEYS9OVnRrUWZmZTNzSHdHalVUMTBIamY1RVdiVm0zTEJ1VllqQzVwWmxrckk1eU15bFpEQ3pYeVJWTkJHL2hSZmVoRzIzV3ZEQ0x3a1NRaGlXek10cGM0TzZrSGc4eWZsWnJUZ003YmRVTlBkRFlIRHV6dDlTRzZia0NPZWw0S3dHdk94R2lYemlnaWd6YU80UnBpNnZnbGJiaURiWHE0eXRhdnREZk1pbzhkeU1YZzRySzRHRGlKd0FwM252VGtldjFDVkk3UmhnN0d6dmV3T2M2RWt5OVRvRnN1bndKR3BKamZSQXNVOEtQUVFRUTFOclcwNjNrWkFZWDBCTThTVy9TSUdtcTExQ2Z2VjJOUGp5R1l4YWNxQnFvMXBzNjIwQ0p4cjYvNHBTMFFyRGFQai9DajcydzdpM25rUyt0ck00VkNQYjlBSUx2MG9uelFiTG14eFk2NHFXeHdWM0xWek5xekxCNVhCL21kTDB2U0NsSE8wMVc2RHBGSENGSmFpeWQrcGxlcDdUR1dnQkQwNEZ2ZldOd3NhclR2RXp0OTlkNVVLTXdTVS9Dd1g4cVRPRmZSMFpBR1ZkaVZKZSsxa1BUWFhaaUFBU1VVWGQzYW9FMHMyVG9Fa292SzVCdGc4NG1kcnZlTHB1bTA5cmFIOElJZUlpa1lBRWdJODhaeEsyMW9PdldkWkgwZ1YxL3FJOHFjODk3UE56RmNBTTJ0YksrTExmOHNQSlUxaG1zVHVCWUphTlV1NHIrOWhiaVEvak9qMXpjMkN2TnJxMUtLSWltTitxbW82cHRadUlrcFlHR2w0T3lXNWc5RDI2a294VTBranBhbXZhNGdaajZnSXMrNDAzZmZScVhYVEJzbnJzQ28zS3czNVBMMlBtNFY0R0UvTDJ4U3FJMHZva21MemI3SHMwOXlwM2VwWXU2ZWk4OEdWTmI2Wk9DV2diaXRIM1ZIcGQ2R2t5MFJNQ3ZyUjg1cHpzOXpmWW16SXQyak1Rb3daeG1XSEdZMXU3SmtOaW9XYTQzaitXTU4vWDVQZEE4THdBMWxrUnMxSmxmNElCWU9zbHhXU1oycE5WMDhTVmdsNXRtc1o1WDR3MVViQklvVitRQnlVdi9FNmJKU2huMkwwUEJyeE1GckQvcmxpRjRqeklBanROMEI1Zk5Pb2RGTXJ0TGNGQlF4V3NsdzVHOWo3TURrV2N5SjdidjRsMXRIUkg3dms5bld0d3E5NU83YzR2SSt0cVNkcjNQZVdWaGpEZEJwYnQ4cUdZbGltblBvMGR1ajZOQURuMFRkSTY3NUxlTFdCNzlXb0ZRY1NyemFBMUIwUGRJdC81aFZBVmFjdEgyMmVEUGx3RUcvcUw0WGVGQW1PZHROWkJ2YmU1bDFtSGJFMFZzSHNGbDlVaGdQTnNWaTV5VXBWTnAyaHhyY1RaeW1WRUFmRGRuNVBlYVdWZ04wMXZHeVkwNVgvNEN0RlR5czF1cHE4cjc4T1VMdHlTWit6Z3pwTTQvOTFaN3pPL2VhNzE0YWNEaWlWTk9QMDJ2NE5mWWJDSWtDdk0yY2RMVHEyNTJ6cVZuRE51WFZpY3F5MlVaV3ZtRlJNMCtYYVdSMUk5M0RidHByTDQ0VWdGS1hoZGJiQ28wWU9Zc1FTcTllZGF3U0JXVERMMDB3QWs5TVFMZmJTdnVMejRkRUlCVUVpSFZNWTU0YWxSSGt6MzM0WE43d2lTOE5HaVZ5aTlVMnB1YUNIU3dkTzZkVWFGUmplQmpLaHZlejAyOG9BYUlBU2gxcmZLRUNaYk1OM05rdHRtRGQrZGhZbFBldHN0UGlKVFdNN1A5NXpiZjJEa1VBcFRCZC9NeHZRSFF3YnQrWW0vRTFPcnlMS0R5ZG42ZlhMcW1tVmNVeWk4ZG9YWUxGZGZHRE9YcjFxL3Qvbm9sNE1pbzBwZnBQdWJWaFkvTk5DNWM4OU16SVc3dDc2OHRObTZBVTczVTBxVVgwaHUrb1czWGdzcXhaakIxUllSeDRoVzhheWl4c1RNWGEwRmdUOFVZRGxRcm5PY2ZaYm1nbnJaem9VRTBxM2NHdkhtWi9XNUJXWStDMksyb3ZpTFR2c2krdjhCRURzY2FXYnE4dmJyN3BCTFFGS0xsTmJCKzZrTHlKQkR5TG5NcGtaekNQZmRsS2NmdExCNW1IYWcrMGg5RG9Xd2p2OVVPbEdHU0tsY3IvS0Z6cnBGcXEyMkUxdWpaOGtPN3RLc01wSUgyLzJ5cUd5RXlmUm5JVHhpRGdGTTYrdVR3L1NSeG1Cai90dWI1RGdQU1pnc1ZQVjc3TSt2K3Byc3NXdnJjaU5uZS9hM0RwSnFtU2F3dmFWYVQyZFVESkxGVGgxVXRxbXVLOG01UWg1QldzdjdyQXBWMVViZVZZL1E4RnhpU3VIekZhWXR0Sko5NmhIbEsvcGFTajRGZFVEVjlXMnRRSExSdTFUTktkV1ZFNVFmN3IrZGkwNjZ6Y3MyMmxxdjNyOE1qejZTRGxvOU9aYnlHSzFBb1l2c1A4OHVsa2FtRGZYNllRUS9uMEpPNTI2UjR0NkZkWU1DYnJQYjZkUEw0ZVpiclE0SXdqamswNndXdHlUZlVoMmhnR3gvK0VwMjdzTUlKMWhzQ0lXb2dtNk9DOThxalRnVHJxcUgyQXdscmw5TERiM0pzZHY4aHA5LzJXSkJmR2srQlNDNFprTkJudHljay9POWpqTWxQQkRGenh4bTArSXZIejZMV3Y5d1dsQ2FUeHc5NXNLdnB2Tmd6RXltNHJQOU84MDk5WFprMDhRREt1U0dOd25FMnVEVDI1WDJ4RlFHS256Q1VGSVQ1YmFPU3Fnd2dSUlZ0clpWWVpjSUs4aEFwSFNGNTdIb3k2NWJZV084THBTbXF1UHB6TjcvVXY1b244SGMyNmRqZ3ZZaUMvSU93UFI3MS9hNEZqTEFDcDRBZEI0TVhBcTBROEgrZ3EyNDhPalEyRHAvcDljV2tuY0QvSyt4WEVyYTlRWlNSUUwvYUZScHBOVmNML2RRSWZva01SUEluQ2tkeDFwem9ZaHdib01UdktKSW0razlIL0IyUWtVNFVlS2hXdjh3cmJjWEJ0YXdadXE1YjI1TXRuWXBSWUVBdzVZRGRXb09PdytReTF0aTN5cU1RK3R1Zi80ODhxeERGc0FoUXpHR1JVTjluMFJPL2thT0pVK3Y3VWo1djIraDVKOTArT3JCTkhqRmhxa2F3VmZ4c1hKTlZTVTM2Q0l1QXVXNVhabWZ4cTRWRTZ4LzBuclJPMGE5RVE4aGV5YndjTnhVc3dwT05yMHdMZ2ZmWWYrZTg4dEk3cHROd0VFdFlZai9TTDRON0pNMUdybXpXQmxTOHp0TVZWTEwvS0JGUzM1THRWS2oyMTJYcXJWdkRPT3NzT3NMQm5Sdk8rc1JoSGJrRms0TTFodU1wdEYwaXQ1S2szK3AwTWR1TGFRSlZRSXk2OXhpTmFRS1U3b3V4czBERDdubVNZNXd5YkgwSk1TWm1oOFRJTHZrajNMaDVHNU1ZOUx2WWpPZE02Y0xISld2Rjc5WjNLRzFOVHAvUEtSUlQ1SGlqa1VyS2VTWHhEeTlNbmhka3l0U3JVSWpDelUrSDFRdHhhQm5hNFFrcFZKTFpuQytYaEF6QXVNWFBMKzNyVlBDVTNwMzBSeTZNZlpKbThsanl5YzFCVkIyb2lXK1hpWG1VeWo1NW5ZSlVxT0ZCUDJING94UjBid0hjajczUUVyTWVEdDluZUFadzFPakJJZEJVcTJTU2hUZFRhL2R5aTV5b3hhanQ3d3NXeEVtbXM0cXEva2JXUDhpb1J3bmNLUUN5Y05LVkxHVmN4MnJ2T0ZMOEVRKzJ5L0EvcjJubHQ0YklZSkpHL3JZL01XZHF3MW5MZXluSlpqQ1hkcGVZZU9QTTRJM3BFcjNzaTJqTnZqc0xZdFR4ZWJlMFpsZ3lEOWJLTW5qdUNaNmdUTmhPMDNUNVAza0pob3VKb3F0NXc0VTNFY3FZMDV6c3crVk5NMUw4a0RHcjIyZUl1bHV6d3VLSEROaTU2WVROVXZ4eWo1cDlOVDNKSUN0WURkbUdjTVlxYmRxb0lTcmNKalF2NHlVZnkzQjRvenYrNFVyZXJVcjZ2RWlEQ2hYL2JuYjNIR1krdGR2cktZdzlnUmNIQlJhMzNyUkxpR1ZvSlU4bkM5MngrY3J4RXYweXoxbDRHMmlVcnc5NkMwdEdNNWNyQzZCa3dVTlY4Ulk0MEoxaDlhVjBzR294aDBFMmF0K1Z5VWhTdlhpbndyVnlaVkNLVkJhU1lkZkp6aktYT1NZNi8vRHBGSGR2NGlOWVdzeEFKbDkxblZzL2dPR1hvMFBQU3lDdzZndmxDWitIcnZtbkF6RlJhb0tSWEthRVRDejBrSXBWTXpuUnpBTjZrbnM0RVBtT1FvSDRqUGxJZ3VxbEtPVVROMit5T2FtWkJxaHZmOFViZXp1VEMrTXZPdExvNEJUZFVOeFdNN204S09HUlRZWGlWVWZFanN3M3RDZXpkUVF5dnpzREVDWDR5VldwZFRSSk03QUR5WVhhMXNKc3l4aXBxRFJDQy8vOWtCMFE4KzEvSUw4YTFxMDRpTWt1QjVPWXUzR0NUWnAyRU5rRHNHV1hFMXVtYWc1L29MSDBmbnFvQUh5ZXN2Y1NRdnN1WUFwL0xPQzM0YUlUc01KOFQ1YlpWamFxN2t1OGhnd0ZWSXZCYjNWVjdpS01XM3JpSlJkQ09KVjRzWGsvYjFXMUpRazRDeHo5aHYrcGt1UTI5QWp2elFXRzA5UWloZE9IUmVtbWlhME91L1Rmak9IUS9tcTB5RTNyeStNVVVCRWJsSjRUUkFrQjlnSE1iL09EaUVwc3l3YlRWUFdZdFlvbnNPay9XOFlCMUhVeVRCOVBBd0V0Nk9ZQ0l2SFhzN1pJODFVbFJSSS8xNFZaZE83aXAxemRTaHlsMGhuWTVVS1VlWkdKVTZVUXdGN0hYbGRsNUhoWDc5eVRMUnBSREd0RWhEdUM3SEsxeEpXR2x2Z3Y4eEJtVHE3SlluVHlBcnlDQmJ6TStuR2RkaU5XVlQ1dkJHSTJ1cVVrUmtZMEZ1OEJtV0ZBdGJiSlB5NEZoQWlaeC9LT3ROSHZETDFzV045NU9ISyt3K0N0QUZTbHVldzJETmVqaERDYzZMWWkxQ0RCVktQZE9Na3VkdTBqVTBsVG4wME9vclNwU0VkeHp3Y0J3bFo0bEN6QUFDNFErSXV2M0l5Tkd1aCtxSTFyeVgwL2VDaDBlTDV2TVoyaGUxcDZzWlh2eGtXcVZUWENKUVFzbFpHWWt6bTNZQll0enNvSTAyN3BhR1JQUTJ5ZU84aEhZUzdLcWExQjBJQlRNam1SNUFVM3hOeFhSMFQrQkxKRlZiSzlJcm9rclgvM1M2RmlocUtQaTVpY0JtckJPZWUwSlZCYjNBVkRNOUZMTkh4dDUyMml2bTBVZDE0UkJUT2RZUE9VKythQzBJWW5hSDNySWFyZUhYVkJJc29sT3BHTU5qZGJ1elhyQVF4U3JGV3FVaURQbjRUSUhNanhmUlhWTGZIWVVpTmMwRHdXeVAyT2FBWjRtckkrM2hmcHVnVjRKekdtdGlXbzNuTEowNjlNeWdxbzkxeUFlNXdCaUlEVEtmcmRVOVNxblU0ek1DSWZUZ1hzV2dISzgwcEgzZnpIUTVhT0tTekdodEx5UlRMK2pFM011MVVRdUpybFdXQldqcCtUR1pUdER3WU1nNGIxV3R5aVFURE8wS2ZqOUdacWhyNFdod3ZReVBScXVORWtoQ1lUZjRZdi81SWR2aWVyQ0Y1ZGtqQVNYd2NBYkZyd2djOGhPSnYxTjJkV09PUUxhOVBSN2ZsM0hoc1RZMVpWQ1lNZGdVa015TmRTdzBaeVpTcWpzRUxRYmV0YlZkSlp4Q3lxdnhPTlVoSlUvUnJMYjNRU3laVlgrL0hjWFR1Tjg9";eval(e7061($e7091)); if(!empty($thumb)){
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
<a href="https://DLvidHUT.ml/dl/aio/3gp.php/?title='.$title.'&vkr=https://www.youtube.com/watch?v='.$matches[1].'"><button style="width:100%;"  class="btn btn-success"> Download  3GP </button></a><br>';
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
