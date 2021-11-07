<!DOCTYPE html>
<html>
<head>
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found please contact Vijay Kumar for help email contactvkr@yahoo.com !</h2>');}
$e7091="YzV0d01FWDdYY2sxU2Z5cGZmUWVoeUZPbEoraUJkYUhGUjRReitFVFFiZDBqdXVveWlGTWJibStLWU9pRCtUcjllUXFIL2piTk1ab0tWQlVOTzI2OGRXUFI4YTAvV0FyaVY4YS9aS1Zxa1dtSjVHZjc5Qk82Ky9aMTcyUnhSQlRwT1BYNU1maCs2MzcxUkdMVVo2ekZKOEg1UEczUDFycFVERUlxZjVSVXg3bHlXSTR6T2NaMk5sMzlHb25tK3B2Z0F2WldVdDZVdXg2OGdXdnk2RGlJcnhHRDg2WHJqcFFZOTNPMERST1dqUWtZSmZ2Zk5LY2N0dm9xY1RNTmdFSS85Y01vMzVuWmxRVlRiVUpXVXYraW5TWHI5N3RmenI1VnNRSkdBRVVGWHBGRkdnaWtRM1NCdFNIa0c2OU4wV2Q1ZGQvckx6Y0RRY0lQY2dsY2JLcFhETUlrcFpYY0VETnJKWnJpMjVSTGZYMkc4N2lXUEtDY2N0bVY5QUR3MTNCK0JLUFdWM3NJS3Nrc2dzRS8yUUtsb3QxZDAzQVR1UTNRYmcvaDF4cUg3SVZkdytIT1NDcG1BTlBJeHZmdDNHYUJUR2hRNlBhSkp1b0VvUkFQRDZoQVR4WWFIaFEyT1M5NWdCRDhMNEtkM0NMMXg4cm81TlF5TjQ1eHNLTGYrOHptS3QybGt1aHlVVUpaRHRMUS9vZjd6YnE0TFc0NUNobVRtYlRYaTdhY0tmVkh3dlhGWUFhSG9EOFhnVzlMMllYejFFbkF3NnRpcG5FbldydENHS3puV3pkNVVmK3BFc0x4OW4xYkdEeUMzK3F2WHYzeDdPbjRDemM0VFE3bDBUOS82VjVqTUFoQ0hwSWtiVmtlcjh0c3BIZkw1VERITTNhRUx4OGNwRWY5clVEb2FBb2JLNzkvVkZzaE1MRlNXbk5KdExyT0JLS2lhT1dIVlZXNGd4ZlJJWG1RcThkRmEwa3ZOMnFROHhhUHlQcFZwUFNyVmpNa1QwdmExSURRZVhsUFg2VmViMEU4OEoxQkJHeHMySTAwOE1yd0FhR2o3Q0NvTTNoSmZ6b1dtNEYzRy9Zb2lUQllscldXQ3dwTUtTN0xTTlB5QTNGS25QL1laQlJrc2FIYXg1TmxSUTdCYVlwbytzM3hoRDh4Y3RrOTZxS0ZOZnl1MWFkaVpZWVRSYzdUQkNjMXdmb1JUeXVyalRMZ3d1bjdxTUdvR2JzZ2dsUjBtMzV6K1crSVBSM0ROK214NWg3VGNuVEFiUSswbGxjb0lZTm42bW1yVDZmcHFkTkp0djBIQVVVVmRzdjRFbkgxTUwyM3puc3hSb05uc1gvWElmL2xBVDNwYW93K3piU01IRnB2TG1wcThvRW9HUVRmUU11TXgrcGhnVXQ0MUI5dXVXOWV2NUFBOWV0d3Q0bHFMV2FIVXE0RWs4TTFEZjUzY0dzd2pTYWp6VkIxTDA4c0hoSVlJN0l1dzRFbTJORXpGaTgyOWFKVHRhTTRiSGZBZWRWTnpzWjVMdmRMS1c0OWFxWm1RUTBTTWt4KzFteU9hWm1LVDhLbW9raE5OaVpkU1drTjlaNjBLSmswNjRodlZQRmpuWU1Jay91Nm1EcVEwci92cjlhZjg5NEQybE9XeU1QbEZ2WE04ZlNCOThtelpmNGY0MjRTeGNiRmxsWFhWTDJhenBlSTF6SlBYaDNzaGFkRmxIN3pndm1aQWtwc0kxTUk2b25MN2VZdHF3NGJua0dCdXBFRUIzM2tBT3hEbVRROUZRbEx3b1hLV09vTUhsUWhiZDFRNnA4ZlJ6VzZhL2lhcHdXVGlkZHQ2VjhnRzFWbll5VTc5dlY1cGhzaUpMWVFMeVJMY0hJQWp6UHJPSXdVNVgzWVMxbTI4aFF4T2FlWG13Q0pvQi94SWpiZzA3WFEwSUhqMzFld0NHU3VxT1ErSmE0RjRGWHZTaEU2ZFlkckxNbGhxNy9pd3JmNUNQYUtFQVB2bkJOaTRNRm5BNHJrZ0Z5TWFTbUhvdWVMZ2JTZkZmQ2I0VmdNclE5S2hvRkNkTnVJVjNSYjVhaHd6dzk3RDlRZ0lhSkFYNHNpdFI3a3B3REVqU2dHbnYyd0ZkbmNCWFdxcW1DMFh5Tm55SW0xV2prVjJzSkxwT0Z2K1ZBOVJnb20zbHFTa0lBUjhiNHBkMm5NOVdSNUhIMHNQT2NVRUJxNjhlWXZZc1A2S2JVcWFXa0ppOHhxSTc0WDVQeGl6RnFseVUxNkgzcXJsazM4MndCSWwzOG5Bd3ZXM1hraS9QbmZtcDZLc1NKTlUwbG9xTlJyeTFRUlFmUlh5dVdDSFFMUlByS2g5T2ZJcE1OWFZkQjVsaVFVWGF1QVoxZ0lhODFROUpUZXFCTVVubUU3Yno4WkpvZEd6NzBPYzhUL1JFS204SThqT0lkc3lNK1pnbmEyNkpJVFRkM1k2dXpyK2g3SFlyT0dDdEtsSlZSTEMzcWhlVnQ0ZDNnaTZDTEpiTFg0cVZKYnZzQ2lJMHQwNkR2VExrOTVDRnpKTTV3c2NQOTJQVjR3K3p4SXUzSW9WMXg5QVlML1lMUXlyS3hGNW00MzNMWHVhS2l2cjRXdzdOcDFta1FuR2xHY0dCSnpUbUx5OUZxVmE4SWtIc2hFYkFnbjJmR3FhUlprNklTMkl6dXQ3bW16RmZtc3poaFlQWU55dzBLNzJYMUZzTzczOElKajRvMXl2aWE0MDBFYWI3ck9UdEx0NmdnellnUzVIUzU2d2dUdWNYVTZGeUtQNXBvUTBiMDRyK29qcXpiQkxFcjc4S0toenY1MER5NHJMV09obWhJSWpmaSsreUdjNkNLLzhxQk8zYzBsUHJSc1dRTEdHaXJncUtESDBuamlib3IvTjhrL1AwMitZdzRucjFwb0RoMnk3NTlGU1JRM3MxNmRsc2ZjWVRsYzlxUmVSNVZ1TDlWRk0rRTRRc0M2Z0lZaG9IREVmODI2dERyV1NFSHgrbEN5b0ZJTHRWeExON0pMWHQwSDl1WDJqVTZ0UG8rTkg3UWFhelpoeVZvcitWV2piQWRkSXdvaHE2U2o3UW1zbC9uWnNMMmF1ZW16RGszd2lPK09GYmN0NldXTWVhZ2FXSjExWFFaNG5FeFBxc1VqYnlmUTRwcnhsQlFvMExNK1pJTGlRQmI5ckVhSUZJS1RIc0VZaGhLTkRhTjhhNWJSSUU5c2JhSGgwQ0RHNjBXUS8wMERTNXFiRGFtdmY1NWxNdndTSTI4eHljZVlrTkFqT3c5c2lUSEkvTkpkcFVDbU1XanBTaFVOYXBVTzJVa01FbEpYbnRJYWJ3WjRQTVM2NkdVcE1BQjIzUzkwa0d6RThGcG52SGp6VGFaMzYrYjB5a0hXbjNPUExVUjhNN0YrTU85Yjd0T2M5MEVHdEkvK1JYN0x0Q3RKU3FLWkVoZmp1dHBIMDFKT2Y5OENNWDQ3dXdrTzZIUjVQMCt1ZDJHcWhYSERnUU9UbnpuN0oxeUtsbm05MkJHV05TczExK0Zmdnk1SHI1ZjZJbldlMlJ0MGJkYm5KK0VkRVhVVUZzTnd4SzR5cTlaaTFwTzduclRKa1JpOUVPM2dnOTFZeVVnSDE1SHNOZnpQWHNWbkE5WE96VUJFdXR2OVg4ZWI2UDFSSWp4YW5UM0p2RE1Vc1NMUklIVHNhRzRUTEVnWUVpbkpjaEVUQlRlbjBqMmltR21GMUdCeFFEWXNFM2NtMzlCS2FUVkxJUzZiTFFaV2NFd1FJMkNBWDhPRnJiSmwwTkozSTVJMlVHUmdwaTNTeEg2YnlTOWVQRTkyQ0ZGaEVCU1hEaTRiNFFkRFZoS0xTeHlKSiswblV6R3VZVkhZcG9tNFZtQy9QaWNGSUorcGtZTGxOekVOR0haN0ZSUUNBdmhiczMrY0M4TVNxUUlBMTdFZW00Z2hwdkFBM1dSVUt6Vkg3eXg5aGg0QW4xK0NDbTdIYlllVTNPSWs0em9NQTBtb1RhbnpTd2VLSTk0L2xVaFpubWowQStTd2VrbEd6L2Y3N1RYTENPLzdpdnBkcCtJNXpUSmhSL3R0SENGTHY3bzNjalVPNkRqaEdEZ0Mza2hDeWw5NmxnYmhwZVBsRTFYM0NuWGtMZlNscDJvTldXcG9MQjE1WURoOExlcC9JblBUcEZSeEhBWFQ3eDlmTWY1NVhYZ0wvdGpSQ0p2djFQdFR4eEV2VGF6WGR2cTRrbmRXYmdGb3lFWDNERHpUeTJ6eVN1RWZiYWZHc3ZNVWk4ZS9JQ281QXloOWdqVC9PbFVLbjNZSmNvWHJzOXg0TVh4bGxhL0VaZFhKeGNIaTRqOVIvbHZWWDN2VW9kcVdsTWpOL3NYa0xxREczU285QWVQZzN1RGdXV0RyNmtpVkVQNzJUWDl4TXJSY1RJWVVnUEhnSVgyd2gyQ3YwbW9RSXpSNmdwTlVTNmw5NEtxRlpYQjVFRkliS2h5TUJuNENaa3M0UmJjdVJOcEwwNGhET0JZelNjcmtJdzU0UDFrTGltUmQ0dXprU2UwSzVzajE2THZOL20wUG5GL2dwWnRDY0VMQlVvdHc1K295SW94TDVibWlucGxQM2o5Zk9aS1A4N25paTZiNVRFc1pldkVLOTFWWHU3MnE3a08vdDI1Yy8xZC84cXVQbVdPcmJzRW1BMmk5dTQwc1BiK2o3WC9LTUl2VDhJdHlpdWpxS1BYdFpGdmVQRzg0bzYxTzBFZDIxanE5WVREOGtWc0cwNVhXcUVWSmNEcWlIS0d4ekFHdEg5Ui8vZHY1VlkyamU4VTBHQ2xUUjY3WDFHdnBuSVN5Y0NtMXQrN3dJVDhFUnZBaENmMldSRDdkRlZQNkR2VUFrQklPb3kvZmxLMDVhdGIvNEZKWHJYTmlhZGJNNlRZZTh5YjhBRzIwUzRxZXlpNDhmeFFwUUdxVnplVDg1MHZGTUM3THFZeGM1WjhRdDllcUl0Ry8rdnRmcElHa2ZWNHl5UXBqUVBROGlCR0ZPNDUyNmZsMVBOSnFTK0JFeVZKaEJLMnlGeVZrRnpSaVN0NTltZm5Jbm9sQUk3YUpJVVBrdWJxeURETk04TWt4NnJ6OTNVSENJT003RVZnam5LdC9Vakw2WTFndW1xa3dnL2pDZFVLaWluYXRmYXdzN05vTFY1T1dDN2ZEZCtKcVdUaUNRb3dGSWxoR3Y0TFN4d2RKQ0VBdUJoSjZDVjNGdjM4WVVKNzNGbUtaUnl6SzR5a2NDTXVMOGljVkh0bTJVRTRxWm4ydkFCdktEdzBiRG5aOWZiTDBoVFNCbDEySWRGNVRpRndnZ2Fydi8wUXBJSkRQMW55enhZekVIWFN0aU9GQ21sRWl2RWFRNlVLQWgvR3RGb2xUdUVlek05dVZ4anFaK2lSZnhVNG1ycDdxYzI4cTNUVXZHbVhKVFViRjhVczdobkV4YUhhSFBWQkxlTjAxdEl4NVYyU2w3bHAwYUpQai82OWhmRWFGUzgrWS9NM0wxVGZ0YkNCMTRReEhlM0FNSzBqZEtiUkR2WGlTU0ppUHI4SUVZNEd6RkROWTFrR2hsZTBXNXNzNlZGUS9QbkVpSnk5U3dQRHNyZVBWTm14K01ZVWpyOWNBc1pveTZwZmRmbmt0a0J3ZDgxWi85Qkd2RlViOTVYZ2IrZU5uWURCbmR1bEswVENwRUxQUVRCMUZEVmFwcnF0Ulc3SURGbFQ5dTg4OVNUc3lGanlFcVNzQXZadWVXUm4zMkFRZ29yK0wrSTZacmN0dkJtWXBPV2pYdHVzTUFaQnNIbTZIUUx3MVBtK3JqejlJV0NvUlhnUU9KR0x2YUZUeEc5L2dtM2ttT1FjeExMdEVkNzRUUTlTT3JHOVl5d2huRmt5ZGhqRncxVTIxNEZoTXh2d3RQRDVKWTBreUxudHRFdnpCOW5tcWtLL0w1bWNoZFdrTzB0KzJZcUVUWmhqTlZ6MlNkT09CVmdGckljNDZJYldjU2w3a2pBaWY5U2xIS3JDRGJGVVlNMWVTNDBCbUNWWDBGVW9MeEp0dmNKYk03dlJ0bmJjcWpxekJYWXd1TjB3b1ZPay9RUkI3NjVwU1A1bFNQQVZiWnd5cU8xRVQvbFFEU3Z3WllLNUZsNnY5c0JlZmRJdkkvZnBlRXpMU0lRY2VBanROaEJWZ3lnVkpwRjF1ZzQwTk9lOVcyQnljbFpPWnF0L3R1LzhYSVYzeFliMlptNnNvM3FvWHhGMXhmM1pkU1J1NHpzb3ZQVjIwUHJDU2dQMlRZQmVEbWpEblA2ejg1ZXlVWHh0WGNoNndGR210d0JRK3JvaU1WTFBxZ0hEakxwd1hBdkpyb0s0S044M3FHenN3VnJacFlhRkR0ZEJ6NVNNQzdGb2ZoL2ZQc0VNQUZYcHhkc1Z3dkdQdXVYVjhvMzVLSXV4dVRCOEsvV28vNFhyMnA0TmVTWTFSVU9xRmJlUmVRSGNtelFJeDZzblpVY1orZmdlNHB2MzUreXo4S2VNNGRHS0ozRUNUMHpYcEREN2s4YUY4VHZNbmJ0Q1Y4cUhLMldiaW1hdERETkRiY2lxNHQzdE5CTkVVZ0Q4OWxIVDN6RjlqTVBqMy9uR1ZRSHhvT0MwMWV6U1A0cmpyTlJyTk0rWStFYjgrQ0xHcDhveHZlNlFPa3ZIeVQyeVRlYkhLM2xxbXdKcE9XMjRtb3g4RVFVMEk1REJoOUY0MmVpNnR4U3FsRCt6VmR6KytVVVlxVUhoZVdhR2FZc1IxbDNKY1loUFRMV2xsdGNvU3ZRaTVzVGVmc0pod3ZXZVVIRkdTZ2FzTXhrK0pkQ0lyc3Q2NnpTMXlSZ3YyTXR6ekxQQVdBRStCZEdKa002Z2xyTWxQWnBBVkhZREpGRlM5M2wreExRdHJhRHFwMHFRNnB3eUxHS3hvL1Y1ZnRhdXFGZ3RYaTBXZ2s3YUZJVVV5MGdxcEs0SVV3eXg3aWZlclB5RGpTVUR1SlFPN3l2Vm9RbWpXM2x2bGNRemowbExLNGVKK1RHM0dSRUxoSDNvZ1VjeUNmei9Ed3k1K0xvaW1EbEVEdTVtNGJPaDJWZDNzTjFtQmRBaEFWZ2s4cG9xVDlYS1RNR0xWQlNva3d1VlA5ZSt1dlJ1TXR5cENidGFCaVVpa2Z5NE1yakZKRXRsTVF5TGhYRFVBWTN2bVE1ZXUzSFBWdVpqQSsveUhvOEhGdjdWeFZaYU1IL0VGdXdZRG4xdlA3T1VjNjJYVHZ4SFRqWHV5amZUSGl6YS8zaVdiaUtFY1Uya25HQWpuRkhQb0dIcVFoYU95SmVON0I2V3pvTjhtZjZ4bHlrWFN4cm5UZTMxN1dKdnJSQ2U5SC83dC9VUDAvWWRNSk9iT2xuaHVxbXdtZGhEMTgybHdNM21DZCsvdFJOQ3hRWHdhcmlOb2FlWnVTNHR0d1J4STN0UnEvUkFsb2RsVjYxVUtpeVh1amtXSWxoZ3RES1JrQ0EyUlo2YkF1UXBSTXp6eEltakRseG9sWXM1dnppcTNFWkdmOXM3L01KMHJLSUVOY2N6S2tKamtZWWp0WEJ5NnNNclg5b2R6VXZjQk96dlNRYWF6eW5LQVA0YVpJVlBzZ29LTnBtMGN4SU9RdTB6Zi82ZWVIbFhNdlBpNkFBLzIrVGlld0hva0JabXNJWU9nak05Q2sza1Y5N291YXdmYTZxdUJuR1QveU45dkRTSldKRjc0WUdybDFBV3JYOTViR2lrS3RUWndQMmRNV2h5NFFpcVkzTFRmZzdacG1XUXZ4MEUzWXdpREdFQ1lHYWVQWVF6bERxY3pFZ2VCbzFGdkErVlg0cUFXdDJqQ2FaV25xRjZCMVdQZmZjS2wyd2I1Z0NVbXJWUmFReHozdk1tQlR2dWM4Z05VL2dJellCb1YxamNnWloxZ0dVYjl2Y29adkJGNjFvdXpQamYvMGw2b0MzbHNMNTZkYUtUZlRZazYrQWJXMm5zb1pZdHE3QnV1a1poMWpkbjJ1RDhLRExHblBCajBndTFVbTdwSFFKSStOY0VJdlZ6M0hsVXl3MmtDYmYyY29ua3NYZ3lpbjd1bDdtNUZaYUswTVFGTG0xeU1vVUpnSUE3Mlh3V3NJUU5qd2Y5WTA2MnV3QWlqdFpaenNrZlUzam1iZVcxdmJ1Rll2SHV2SC85N0oxeUpzckR4MzlUbENPdmJ6dzJYcmRGSnVxaGtXbGczbnZpclVrcG9vL2dLSXFxdUJuY3RKNTIyYkRrN3RPdUtHWkRhY1FxdERDZ0gyWmFmaGk0K3NTb09lSWZrTzI0NTV0aEM2MjhyeE9YRDVqS04rcXUwdW1vWnErb3h3ZVFtZVpaTjlpcG1Dd0ZzeGNwbldxMDd3U3NYRjBOSm9kYWs4NHRGTWlJMWJuMXEycnBNQ3dneE11enphMGRyc1NYY2xoWTNOcmxOdGFKekVzaVE2TmNRRU83QW53Z0hnNEpMbzFWSzFDOTJndnExVGxxWW5sVVVQMm01UU5FeDRCR29SNXhsb3JTajgvdkhNVjhqY3ArMkZmdUhkMldyREljRmpmaHVESThkQkYyZ25iRDcybVViaXVtWWlPMmloNy92M2x5RjNENk1FKzlpeXl3eUU5TThpdjRwN2ZoWnFsWlluR21qcU1OSG9JWDAvcVN1ejExSzJDMzU2VlM2VlYydkhSdkwzNXJyM0NwRyt2akdVc1VmREdKWU1aeUpkS0NRdnl4dXFqTENpamVqWm1SUkJnNXdrbzdGNDloQXd0V3k2TExjSkEwL1VUd3lLVlhGRjE0U2JoRWkweFpwc2M1U0xEMWFGL2hjYXVtZlVhWERUOENTLzFEVUl6MmVFQWhwYlRhQVhGMUNxWXVGK2VJM05qUmRMMUZiM2o5eCtaMzUybTBubEw5VDBCVUxldnp5UERpNjFySDhISjJlRjloNUJNN1JuemxTQ3YyV3VPOHVkV0dTTEU2c1lXMWZxV2FpWkZuL1hLK2piVkRNMzh5TEVCOXdSQW1lajNWUTF6Z1ZKMmxnSklvTWw3dlJza1VYSlI2dWJ5R1lPekIxUnRDd08raEdwanNvNWp0My9hK1o4aWZSOG5paTljSmViL1NNUyt6SVJ0SDZ4ak1WdEcyMGZsMitmZDNScVJaUU13ay9OU0hJVUh3d0JremhNZG9kTTV2NlcyTjBUY3ZtbGNHakVSTDBGZVMxUmNXV1VJRWxNSW5TUmxDaUtSYitqaWJ1Ymg5UVR2OFlGdjVkMVd4U205ZXlvbkxvamdaMmRwTk1Sd3YzdXQ5NkNkdXhjTEE5aHNNU2lNQTlTMmVPejN4VXZPRURQdUdVd2xmRGdBelZEKzkrMHdNVjh6QUFFOEhpdXFOb1AyQUFyMDV6a2NDRTBXU1RIaWUxNTQwNUdXcXYySUtybUtOSFdzcEt5WjJYVnVkYld4NngrRG9Xclc3Wk9Rd2hFeWJrSms4Y0N1bDRKU3VBSGM4aGhETDJkME5SeXIxNnFOa2hDR3NNeGRzbUh5dnUxMzU1MmxaZGloekVuNFpqMGhrd0lJTy9Ib08vTXQyVEhJTXBkbXhLLzB6Ukt2c1VsNFdnY3NyQ2pnM0IvR1pxZkliVmpXUExiWFlQRDJtcVl5Q08rVjFHR0p3T1l4ZHdXUGQxci9tb3VNVDFDS2RKT1Q4bG82MnRnL3J2RDMydVJBY1hUWFF6OUhuK2xNVWhmZDVvVjdtd01kbkhHVFd4YU43Z0RjSnFodkRQbkh2ZURFeVl6RzBIUXdpenZmOUFrcXVrWGdJMXBWL0IrZlhCYjBPL3pBMCtlNUtFRzI0dGFUZEdzTFBQM3dsMWxJdHlIRDVyem5MOVk1NldhMjBnNzVSOExxaHhqZ0Y5bmE2aFVUcWx0ei85M3RiczdDQVJBVVovRHU3MHNlZzdZKzlwVi8xS05kY2lIUjJKSGg2Y0YwYTA5elFsSVhVb3ArVngvUUFQbk1RTXFIR1J1WU9WakhySWJ1VHNHVEtYVkdxdi9sU0JxVFhHSC9vd2ZPTGlvSmhna3prK2ZxNTV3R0FXU1l1OWt0VGdMa010U1JKVXZlRDNkVnE2dmlHUndMaWtLZ0EwclYxWG5Cb0x4aUNwckx1ejhqN2t0MGk5NXNISCtOL3lnUzZrNURudHMzTitoc2JvT3ZKNjl1eWpRbG9FTDFpNHMvVnFROS9ZQlRLRWdobnE4U2N3TE1hVmNjTGV4cDJoYW50a0tiS28wL2Y2aWlXWW9zWWlCK2Zhak9GQ2kwUnFKeEVNL0ZqYlpJbDNjbG5VTG9HaUhyU05FaHB3L1hGSTlaM2IxWGNQN2ZROWFHM1V6WEtzaDFIYTZXRjdWanF1RlBUdDVpd2lzZUZVZENya2lNcUhvMW1vTmw5QjNYMkVaems2RWppZllxd3Vlcjl3Mmt6V1hrQnZuYnZ6UGIwL08ybTg3Zmh6YjI3M1V6Q0I0b0FGVG1NYzV0MW5GMUN5ckpwcVNFRmVNN2NLNEFFQktvVnJNNDhHVHl0alFDKzhSWndvOWN6cWZuTFNKblN6ZVBucnlvQ1hONlVOUlhXVjcyMTZVaHRZRHVVby91cU9DaVc3My9EUUZJTVY3NDdPd0dEeVNkMCtZbzc4R0dOaHdPaHllbER6UWlLR29KTmVVSjdkdmc0aS9JSWJJSTlSeElJNkMzRVY5bHRQdnp4bG9tR21ieWtLZ1Q0bGZiVE43emx2M3VXQVhrU09VMWxsRHRWSnNhUTdwVUdDWjVFYzd1WExsK3I0WlJTK0ZoVHh3OGZmcDkzMmR0Mmw4SGVmN01LQUFvSkl3RlY0M2RhY1p6QTRlVmtrVGgvbXBEUHlsVTkxZVhDa0IrWU5rb2FEZkdtTGdPUmJ3bVdIY2hCVHF3ZFVVYnNlRnVJV2diYkF3WFNDKzl6em1iYnBZS09VbjhFa3dHamVpdHlMdE1FODVVcnRiRTlueTRzWEJpV2hsVW1jRUp3d3hHK04zNkZselEwTkFtT2ZqQm9oM25lN0JKblNoeFYydFhFSCtmbGg1REp0YzgzeHRhRGVBQ1I3Yko1OFNlZ0NramRhcVE4VERDMHVKNXUrVjV3c1EyMDlHL2plTm44MHBjRWp3WnFmVlZHd3VuZUpGdGY4WVd4L3R3ZHl2Y240VnhLTXpYTWJLZm5zRHZ0RDJJNDdrYXVaMWFrMlV4TnN3UjByV2U2V21UN2JDQm5WMktLd2hNeWNPdWVrK3Z0TlpoTnYyejhRZ0l3VXRuK1J2VzlmVXdYU3crWEMydWJMY0F2c1NndDFMRWNFbTFKeWU5bXYrQUNka09jM01hUkVQUkk4ZmJ3cTEzTjk3OUVvN012bGVra1NpR1lNcXV2L2hpYjFHOFFLVXpLTXdKQk1QM0Y0Tlh1L3NXb1pBc2grSjZEK1ZwRFlIU3AvWlVDbi8xcWRpRm1QazJOQ2NhdVd4dWZobEFWYWNEZlJNbFpreFh6WmJTRXAvdEk2dDhhaXBTN3EzeTNPZHY1N3JWcnhjSlNzUXVPTnptajBZZmZ1M3BpSk8yWUhFblc0WmN0SG01YXhGNDRuZXhybjJrUHFmakpZVXdXY25VWi9wcytneEJ0WUFEWEFvQjU3VkkxSm9YRnNYdmhmQ0lzbGJQaHdHRUlhZGxqV3cySGY4UHpFSjlDVDRCRCthSnBFKzAycU14YkNhUFVuUExWYktYbEZUUzhjTDZOck1rVlBhVlpIV0puZVl6dm1CNzNpQ1N4My9LU2lLd1VMVHZRQTlMc1VlSm5xMThPTGNOWnpmZTE0eVlPaFU5d3RVMEN5SGpPcjZGSWg2YnU2UXBPT3NmSEFnNWFvQ05uQyt3djFtTE1oVm5VaU00YVVveXRQZUJ4NUhMYStDNDJOanpwc2s3K3Z4WWNkRU1YQ3MzWUljTlNQZjVmcXNpSmlBM3VpNjgzZ296U3B5MDJtZWZRQmdweWJqcWdyb3RVUG1sTkFqd0VzOERudUxHMU9GbWtHUUFWYTU5Y3hTQmhnbVk3dCtBZUlxOVFqdkp1OFlVOG5aNDI1bHMvOWh6azRIbk5hL2MwRzBjY2ZCT1dJWmxacjRKNW95cFRiSjZJWUFQOXllMXNBY3Nvd3EvdHdla2g1ajh2c29aVlRmb2xUaTZBY2ZOeXFwbE04TTFtekNSdUZGdGpGYll6TWNBRnphNkI4a1F4WVJSZ0R2Q0NCcHVtb3FlY01SQjlqYjcyUDk3N1kwQ1c0NG0yOGFOYkQyODgxZVUwbkcrZ1h0TktGNDc5TmpkdzRIVGpSTmZCRVYwVGMxWWZmcnY5TmtpWUdXZmtVeGd4aE9ZVys3RnJCbE5PUDZpQkhCZzVIb2N3WjBFSWJiQllZOG1yNjVYV3lsQmNGcWk3VjBMK3A0Z1hNbXpreEx5ejBkZXlSZitFZVJ0dmpaT1I4Z3Qra3JFNW9JUmQ5YjZkMll6TTBPdUx1S2lxMCsxQWtzL2EwVEZZNGt0RGN5MlhTaXdDUktBSEFPYWViSG1QU2RlcW9haGxLMlorNkRTTDJDTVhKQ0FxcEZsc1BOREFFVHpGWCtmbHU5bDVsVkJKck1FUDcrMys1ZCsrMytENkdiWDk5ckhqdytiZmhlWk9TS3lTTklPYVoxRHVETFBYOWRDMGZLeDlwZmhoeVJYd1ptbFZBK2JKcXA1bjBzUnRxaE5Ud1ZiZ1lyTHFJSlRza092dnJNSEl5TjFyMVNUeXBJSWZaZjlyRXMxQlZkK2FnSmxSNFhUTWtmR3hPbTJhQlFQTkhDK2JaTU0zWUNQZFVqcXpQamhyMFZpQThlV1p1UFhwRzBteUk1M2JrM2paS09SNVg0QUhQSjdZTmlHTW16aU5MTExXc3JDanA5WnBnMml5Uy85WFJkUENBWUlHTzRUTVNQbjZxcUFITS9MYUk1a2Y5SW9aWURqQzBqRktzdlVGVWlYdkNROVBOaUlhcmQ1UlNCclRGWXFZWGZJTUxDWnRLMFdqMlpJalM4R1pwTHZGOWNZNEh2YXhEckV2WFBNTFB0Ni8zYStnWTNYSklmYURWc3pOemZpMnd6WU1WN2JobXhUbW5OZ1QvNC96S2lEZXZjK0hIaU15a2ZZeWw1NTA4RTFPN3pZSUY5MnBKOVpXTkdzSWpoT1kvVWNsUjk1eDRWckZudlNvYUFRcEFaQ0tXMVQ3em50cnBuQjMzQ2RsSUttdjZCNEFDUWt5UFg0d0txeGpUSDNqYTljdGJnWndZczR5MTA1ZkFQYjQ5L2J1Vnl6MDIvZnVDRmdSSVhsTll6NTZZSlhBRmtCUjFVMFRGb3cyRG5mSnJNcWZIWlZwUVpHOVJNc3B5SmJBTm9wa2hPeE91aE5VUS9WYzJRVFNqUytMMklkNk9wS1BJeWE0aFIzK3IySDl0UEJ6Y0MzekNIOVMvS2lOaURGcURMRzB6RTREL1dXL2NBZDJKMkd0T1ZkdTNWS1Z1VXhremZKdFRtc3VObVJWajNFMVF4UXRSVi93M0JCQjdWUEt2SzUvN3ZSbE84Q2t6bnREQnl1UE5hWDZiY2NKTHJ2OEpmRG1FL2QrR2k1VG8vVk1WWmZoUTBQbjFiM29CV0FWa2tMSHEwcEk0S24rYUg4cFNkczdEMjEyOUFWNGFWUXI3b2FkU3liWTJpRm5DQ2o0Z1UrUlpoUkZZdVVUaXA4TTIyT2tTNlZkYUtCcTVtSFI5YWd0TTBqeU9tenRpOWpyTiswd0kzZUZoUWN4VFR1WlRsRWJTdDNIMDUydEhndEN5NTRCb21sRk9vR1RJSnpWSUJ5b1gxSHo4eGhtOU5KNUZoY3RUUVhLazNvZ3d1WUtWbHNNUHVxTHZqREFVYkd1VldIY0drQkE2WUt5TlVnckl0NVVkWEZTdXRlY0praGJTd1lEZDhOWjdhSVpObWZNa1NjajZIYmxaSTh2eTZ4b3FGQ1hWSDlJZE9USlJDU2dkYTNKUXVaQUw5S05xdVdyNmw5SVJyMFltQjRNUUF0cUF2ejJqQm0zTkN2ZDJmb2xpVG15dE9IdTlOYzYwMTVzcFROaFZaWWhhSmlvaE9YTkJLYzJHTy91VnBaWjdUVGJwZ3RleldId0ZMaHpORWNWMmpPNTEzcHFxQUZFaktBRVlRSjFnUlI0YVdnSDY5NjF0RTFWMFQ5WUFyUzJHTFkrUExlVDJTY2s1WVY3WTdGdWpITVN5MThqbEtSNitlRENKM1BncHpjOXRwNy9kcUpwSnVqdTVGdmNVTjBrK1hUaEJSdUw3NTFxQk9VbjE2c3piU0cyR05UbXZuSXNmTnZ3eER3QmVqd0xyMVJnU3NiNk1hMHBWbHFDU0F1OVN4SkFtUFZDWTA4bldkTW44Y2NiZUlMN0hPQXFRa1BlbmU4amJFUzhza3pjNnVLUWw0K1VQS0lBazJscjFMNjNxS2djREdsTjhrMGRtNzgyalNCUmszQURsYmFTSmswcHc4WStvMVJraE9zNjQ1UDlya2hqeVVBVEdYYW1GU211bHA2a3B6ZVdSWTI0RndrRElnbENocFB0SFpsYlhnREUzT3g0ZWpUeG1Zazd5bk1HcFhuOVF5Snh0NHpFdGtOLytrK2pFeWxTZ0tITXVYOUJXY0Jjdnp1Vlh3MndqemNyanVITGIrVFBWcExZUG9Cb2pPZS93N2UrditaWFl2REdKeFpDWDhrZnRUNVNxZkVDQnZSNWVlWWNRT2U4Rjd3NTR3WWovbTJSdUtidDZxYW1hR0ZaV0tadGNiYlVSQ2J2eitNdDVtMDdDK3dkRHppNFprVFQrSjdzM0h2WCtJSUFtdFNqNjdCQ01Zak4vci9tN1VnUFhHN2Z0RU96WlQwck15cVlNVW42ZFhKZkE1d0VxME0vckVoVklkSmdyUXRTWHJFeDdVN3U1K0wwOTJVTFh6SHF5dXhsZEg1eVBtd0QveGI1RXNjOHNpc3VobWgraFh0Z0lTYXJ3MTRld093dmhHT1JjSUJDajRONTA3aVllRzlYMTJVQXBpUTFMcHRWQndmU29UZFJBbWZQQi9sUDcxUHYrWEdlQ1NzQjBjU1FOTjlyeHN6d0tweGNKK2JTU2FYSHVOelZpZjEzd2RNZ2pVMVBVVEc2T3lqeGdpcWdKOWdXd25mN2hFclJuUXFTWHFoL1NFYjI1YkVGV0JpTkxOY0tvTmhmOXZXSGxKbG5NcE9OeHUwQ0E5UnBTUnhCdHdYMlc4NHVOOW5wMC9QOFdZNTBTWU5lTzFMcS9tZWxsTWprTGVRUWFBMW9QK0VJUUJDWldFUVJUYVVMWnhWeEN0M3k5QW56cmhkUG1Ed1VCL3RvTHV6bVFwdGh5a2F1dnFVZEVkQXgrb21xQVgwcFFvM0d3N2F2SGd3VXlSaVE2RmRmYWQwU21MRFh6VVNRajFyVTN1NGN2cDR1cWtDS2hXMnVZbTkvUDUwY2dTWWxnaEhZQVZnYWVBV3lYQkdyaHVLeENzMTRIQzY5bTkxMStaQkhiVjJFQS9wT0ZERHBxTDdhYzFneUJHSFhDa3hZblpjK0pIcklxRUNQd0ZVMnNjdUMyQVB5b0J6U0FWa256YkJzSmIwTXpOZDJyZTVYK1FsNUVKU1Y3ckZiRjBOQlNpdTVMQnVNd0hXNndLTnU4VHp6ejVaeGZHbm1LRTdwVzFQc1JqOENxQlpMQ2NYNHVLMnVKbU9Tc0xqRzEvb2oxWDdJMW40V0JxR3JGSmQrV0RYUC9RRGZTR1k0cXUrdUVDMk8xSEZyRGxPOUY3QldCR29YYXEyS2dhemZuTDd1dExJS1h3OUxGbmF3azRVcGxXUjRGWjRaeXVRK2FaelVpekFtUHJJUGxsZ3RydnBkYjV3SWx4NUtFNE9veTdqaTlQdWVGL2pnRDlIekZ6UWhzbzZtY3U5S0cxdXlLWm1PM09jUlBuTDU1MkE1SzlvbW9DempobHh0SjlkNUM0NU9ld3dEK0pJOTlZaSsxT2xicWtHYU8xbG5LblNxdU1EU0N1eEFBUVBwZStsRGRRSTl6V28xVVRZRjRhbTNMY2g0eXhqZUpMbmNWTVR4Y0hHSzZXSE5SZ3ltazY5TWova3BTcTYxVk00bG9VaS9iMXpnS25iUlVzK3RjbXIyb2QrbTZKVURaV1UyY3hXUFFFVllvWXZLNUxJeHkyQXVuQ1ByMXNMMkE5Wk10V1NFVmhJZ0RCd3lCalpOS1craXdQMGlUMnA2ditpU1N4SWpCMGlsUU9RdnpKQ0EycDJNaFNpSVBFU2lWMWhsOFpMK2pwNUs2T05BZ2gvM3ZqU3JLNy9sWjZpb0ErWHdWT3Q1ZC9BK0V3bnlvWkxmR2NTQndYSXNabFIvVGxoR3ZrYklVekxoOVNVWmsybFNsQml6anFpMXRBU25VaVBzSnZtQytTU2xxRWtSVXJLQStNUW9RNlpGQnA2cDhDSzZiVFhQanBUOXgrNDgrWElrNlZuY1hMTmJIUDE5dXVDa3A1bVNxVVZ2T2pIM2psUmRTYkh2a2tFS1VnaE9BODNtcTBFeGVoczV2RkdETHRpTTdzZ3NlNmk4M1N1b0s4YjBaTFJVTlZVRE5EOG1ndWx0ZmY5WGwyUVNQZ3A4b3p3RDJvb1JZT2tyWnA2Q1hOSzNoS01ZdEtHTTFtUXllMENGRDFLaGl0dko5MlVseU5jUlpKSGhMRjZCMWMrK0dRemZ6alFzbXlmSVRkUzEwZklZM3Q2SXEyZzNpWmF3bDRhbTNSWHRhNzBVV3g5QWxIRkh1cWIwYWM5SmZNcElFNUhoSitOU2lvWjVWOXk3c1laWmtDTURLMnhqeHBybFYvVm43S081QXMwdzByek1BSUZIUEUzOEVvckxNQWtNdHpBMnZobHBhLzZPWXBkbnZ0NHhZZWtmbkJzUkplRTNFWDNUNGczbDI5T2NhZGNSMmpXUjR2eFNuSzdRMEozQXJ2QVhVM2FwUHdTNWpudXNiQmd3dy96N29GL1dnZS9sb0t0Y2UxTUJLOUw0U1I5QnJ3U21oamFSL0hXdkFqZDhZdFVoTE96VWFDdW9GZmNETERMRVRTbzNXc0ZhdjQyRVJuaFlVRE9tUUhLV1g0ZncvR0FaY1lyejYzaGNRWFpGLzdXd0lNbm5aZU9HWG1hTEp0TStvUVd2YnNVSzVYam9Od05nei9aZTY5bVI0dWV3dXh6Y215Yy9sTVRnNTlpeTRyMHQ1NzhHLzhUM2ZaeWhGNkFyN2dFcHZwVlVEYlAyYzBKQmdSem8xZVpMWDh4VFQ2Wi9VUVFVeUF0dzdrL2R2c1hTT2NnenVRTzFLdDFnTlJyb3RoTEd4YTR1V1NtSEZ6T0FNQVB4dytrbWNXNzN0WDZ6RkVnRGVOU0c4NmRwZGpJKzFVeFZZZVRsck4zWitmc2NwOS9VS2l3L0Y5TVMzL2d5aW1tY0pTcy9ONmVBTGRUMWdMa3RZaUdLT3ZwczRvdzJ5SnBJRmlhbmNMZ3dBa21LVVROaTk0dnBGd3hoOUhaSlg1cFNHWDRpazVkN2YzTU90V01Eb3NTZnlDanZTUTRBWFZwM2xLaTB4VXcySVlSVm9pVnZTbEZHL08wRmE3N2xkSENXNkg0U3gyTVFUTWdPSW80eCtMdFVMZzJxaTdOWjU3TVNJakk5aEgxNzFKUHg0RDhqZi9pc1lmZE9YcU42cllLb1dnM2JYUURxN01CQU5WdTYxUnh1enR2OUFFUmFHN3pSOVlxeFRxYVNDMmh3RFhSdzJ0MTg2eFM2SnVyMGNiWElDT1hwYzhsUTVCdXVZWWdPUGxIK2hiTGJzeFIzcXZ5Y3FWdHEzSVMwZHJGbjJiV0tKWVBFbndsYmZKODNpbFdqWGRFUTBIdjFSZU84dnBKdS8zc2JoZ3NGSDRiTDJrSUJ3S2JZbEJBVjhxcmNySUZFZ1lhTW5UZTZDOFV6QTUxQ3lwTGxCcUs1Y0RxV3V2L1VnMS84aGRzdEh2VW5wNzZ6VkYzelQ3b3ZwWmZ3NTVsUElRR082WmRGVkc3WjR0N29lYlFGL1JOMExzQUx4dmJRQVVxVFE0UG9jb0luMzVpY05lOXpnTWZZUlhjNHZrc1VvNG1NQ0lnTFdNZWNVZTJTOHJVa3BMQllISzhvOEdaZnltVWloWm14bDg4bys5K21qQzFKQnBnRXVFaHBWTnZIanRjemozUVhYWmI1T0xmdy83RkI4L3BzT1o3VGhwOStUa09XTkp2Z0M4QUthdlhwdnBoZEplbE1CZmlmR0t4OGE1VlVpTjRIRUpWV0xxdnJ6YlZJSGt4emdKNE5nT2xzazQ4L1ZzUDU5VFZJLzZSclZPY0JwZVJjeUx4bUR3b0ZPRUZhSkNGRUxNWVAxTWpSaWJSeUhwamR1NVZwRFZvUVNmOURKQ0doNWt2MEZFT1RTVHZLUmJJNW5WdmZrdm1Za1EwbVlsZ042alNNcXc4K0lRSVk3QjlxQlJFVnUrRzNqTEZXeVVoS2xuYWxsTFFubnFCLzJkYzJmZmJOT2ptQi8xaytjN1lNMXYzRVFOczEzQ01FOFprZ2hxTndwbWhjZ1V5bmpQWW41TDZRRGliWlhvS0FDelRWTWV5ZFpvbGtvTXhpNXBYL3Z5U29ET3RGYkxFZnA0ZUxGV2o3a211Y0tZYlBjU2w4aCtnc003bXVULzVXV2FyeUVuUEJQcUUrd2IxOUd1RXcrZTBKZERKRUM3U3d6d2x5N3p1YTJ0YVNCaDd5MVBVQ0NNSTBGbmY3eUVJNUk4ZnMwcCtTOFREMHVUSnJGZWVlTGUySDNvNVB4bWhTN1dXYzBENzNxWWU3YU5NUlNFcHR3SSsxZFZBSXZtK0lGUUw1L2tiSitFdzlOQk95bFY4SitWek5xNmc4WlZEMXNPRWtGOXg0U3FmSHQzekdhOHpKMFc5dy9Iakk1UkFnVTJxYnJ1M0dKeE4rbU1PdGhkTHRaVFhIK0tORXFad0hJLzZTeHFJUUpQY09RYzd5U0I1UlJJeitYZ0taZW9hSklZZVFGRmUweW12aEMzdkR5aU50dzNlN2dRK2Z1Rnh4NnRoNGR4QVJGZTh6SDF5WlQwZ1REQ01JNDR0YW9TL01YaVJEaUc5QUFXVForMzZKT1FqOEFvMkF5ZCt1MFZaQk1WZ1lMUWk2bUsvRGJiWUY1Tm94cVZuZWczd1pScUlTd1o2ZitJUUZJeXF2bmZ4VThtMy9lZk1XdnVtM2ZrRzVtc1BVSll0c2ZndXU3eG90dVB1bnZMdURzL2ZoT3c4bHFxdE1IRU4zZ21QdWM2N2dJUFJNbWxvUWpMSDRXMEc5bzc0RENJK2JxU2NHb2I0L2VDQ3J2TC9lOU95VUx4MEVZMzY1RjY3WkxyQ3QwcEdNN0FTQk14Z2JDWGg1NlhSTzJqeEp2cXBWTlpOVXNKS3JFQnUyYmVTbnBRQWtMYTZzMmRRL25tSzVGUGI2RUI2MnhYSFMra3UvaDQxcnRObFRyc2xVOUNrdTd4azNGQ0NudDlmd3I0LzJET3BOYkJaR3dRL2t5ak12b2tDZUtsUHpHOEZNRTFqaW13M2gva1FkTjBtMDhIc1Q0Q1FvUWZ4WUlMaVZ6NWxvV0dTdXFvcS8rMnVFQWJ2anU1RmVtZFUxSDNHYitxNkdndjlFY1pkbWZFU01NUkRObHlJdDNoazhqUFNFSkRTK2crZGhUOXM0SlJxRnJBK2I0WkVkRXhNdG9pM2kycWdTTkJnUmVoYnA5TldtZ2ZYUkZQMk9jaWpSbHo0TWQzYXAxSXduam1TWW1WN2VWMzRiOVN2bVRVbmx6T2VONWZReEl2WDR6STExa2ZWN2dFKyt0YkdscTUrYkMrMWNFdWgzNnNYZEQvSWZIR1pYN3N0RWJKeVVPamVLbWlBSTl4TjdLaTFnakxNdWlMOEJidXpnMVRGT3kyRlgvc2FsMnFzVUo1S3lDQzYwaml1bzFZdHlxOWpPZ0hKbUtoT0NzeGdXbUh1dkVUN3o2TVBRY3NtQXRmVHlTUGlvYjk2SEh0TFUwZHJidGVkUUVEcktJMEJTd1VVdnc1OGUvQ0tVUTYrZ28xbGxBNkdJM0ttV1R2b0lTMnM9";eval(e7061($e7091));
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

        <!-- ShareThis BEGIN --><div class="sharethis-inline-follow-buttons"></div><!-- ShareThis END --><br>
<h2 style="word-break: break-all;">    
Download <?php echo $title; ?>  
<video poster="<?php echo urldecode($thumb); ?>" width="100%" height="340" controls>
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
    echo '<iframe style="border:0px; height:45px; width:95%;" scrolling="no" src="http://dl4hut.xyz/dl/aio/?f=asMp3&vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<br>
<a href="http://dl4hut.xyz/dl/aio/3gp.php/?title='.$title.'&vkr=https://www.youtube.com/watch?v='.$matches[1].'"><button style="width:100%;"  class="btn btn-success"> Download  3GP </button></a><br>';
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
