<!DOCTYPE html>
<html>
<head>
    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwNndRWDE0elBQa2lhQXY0bGdiLzI3ZEgwOExlTHNST05jZGVjMzFLZWtSemVjSHIrUWxramV6ZWkwRHpqMWdJNTkzdDRsUVMvSENxcEVBczVXamxJNnRJNlljRmlEWGk4eTF1ZENUWTZrWlgrS0J0akRqZ09sL3JodzN0Tlo4SFZTK1hVbVMxSVlhY2lLN2dleE1IS3dNRGx0VCs2a3pGbGowSUFaRDFhS1FLSUI0K0RpQ1VNZTdwZlBhMDdUL0NmRVpFTXk2cTBvQk5tZ2d4UmloOE5uVlZGMmY2dVJOanBQL3FOQlQvVW53SW9INHF0WUMvTjgrWDlSS3NhQklDalkvTVBMSHZOUS9OYVd2clBFdU92USsrRExuZGwrZUYrK2wrSW5zcDloSGhKUmNqSExaQ2M5cDVNaEFqM3JVT3lMZ0tvYmltTlo2SnlKdTBCQ01QU1dzSVFtTXp5QmJ2Q2FvWEZIY1hmS2tNcEl6ODRFTldES0xsalltREZsRzBVUlFIZElEQkxBejV4S012Q0I0OFFjZ0xuejNMRHVZdXY1Nmo5c29ISndSRVF4ZVpKclA1b1hkQUFMNGtEZkI1ZnRpZk5RTVZKVUw5UWFHazFOZStuMjBQTTdsbnd6SG9BZEhkMDJSdERYUlQ3djJITXpNODZkOVhPRmpZbDNueTBacFZ3ZjdXYVVzcTdxcEhEbmlsdFdLUDZpcGM3cFl3N0NhclJrb3dqWUxIYnErOEcvaW1mMzVWRTZYR0YyeFVjZFVqK095VjNCTk9HMlJtbjJBL3dxN2hYVENCcllaMzNkTWF1amJMTzRrS3VYMW9xVHJMOHY1SnZkVHltSlJNSzhkbzA2aWg5VnhCVlBTa0JWNWFvQzhRakovcGlUWEZNclk5MWY1K3FuWUx1N21MUXBuMzZXM05ZdjFkMkk3ekNKaWJSTXNxOW1rUUNpM0N4OE1IdXpYQ2t4UUxZbkt3UFNmbGdzblpmY2ZycXc3TURUbklvaE9INXJ5YVpJc0xDYlhjTGtsV0ZPd0tQRWtlWXkvdWpTclhCN3NRK1hDVXNaQXhHeWpvVWsyMGlubE1LZEFBZVJ3N3JlZmFFYURnODRWYWNkRWhDWjdlUEZpaUZkUlR0d3MrVDdLUURuQnRxRjdLLzNDL0QyQ2JKZUZ5TDR0eEU3a3Q5bUx6WEwwRVQyVVM3VDBGdUp5ZDFnQXQwYnVBMnp6d0Z4Qm1ZNEplUGp2RThTVUNJb3FXb2Y1UlR2Z21CRnlTekVnVjVwZ2pUOGFyZWd5cGlqZVhCVzF6dG9hSVNkTnNVbkVFdDNjcHJBQWRpY2dsaFFBaFZDOTg1d09wRzNxdlJwZm5FM0ZEOEpna201N2hXNi9Ia2VKd3Fram1yVXlDQ2xoOXdGRUMwUHphczZ4Wlh2ZzA4YXc5Q2piaXQrV1pnc3ZIaU0wcnd0M0RDd0daSXd3N1piNTg0eVEyYUo5eHQ0SU9EQXVQdWxBN2RZL2J4WThCVExDSURZOHlCNStQREd6ZVJHa3FWb05hMk9uNjZzNGEwbHRQNlJNWDNVcU5HR0ZiMm9TOE9UVGRJWVllckRXMVVrOTZVMFl4aWNncURtdlk5K0s5ZVRvRVdzVlU4Y3grVkh2ZCt6cUdMZ2xiRWJoU3EwUFBRa2IzQU9yaE1HdHRZQ3JLd1VoSEV3c3JsOWdjVlFIc0c2K29oelNvYUp5T2JiUlo3TjAwRDBuVjF1dExqV05VVUJ0NlNxNFRORU1JclF2MjB3RVpWSVljUGw2T2VvMFczVjZnQnY0SHEzZEpYS3lDR0JRK1hJb1I3dlhkcGR4QmpDMThnTHdZWSs5VnlLUk9RL29hckJaY2Y3bk9BYnRMUHFEUHNGc1M2b1ZkOGIvekdDTkRCN2x3elFTOU1Rc1BmNFdmRXNoQzVnT284VmFUZlhVaWNCNEFGNkJzeHFVc3lkazh3V1RJOGhSYkU2NVFQeDF1MGg1ZVd1a3VsVUFnbkhZRDM2WHR4WGxWVU9GTVFsaUhwdFFtWEVFUkE5ZEZvYmQwZ0xUOU51QURpb3ZDdVJTcGRPKzhRTUZZOE1JV0hRVy9SNFpYb2pVaTR2dWhLRFBCWFlaS1VSODgvNGxETGZDR3VZTzdBZUgwajNCSnEwdG1nNXBGbGNRVHpTTnJjNmgzZW1nbjZCZG5Ba0lWTklGZUFtNnc1bjBEenJsTFkrUUw3K3ZKUTArSWN2TlNpL1ZYcElKdC9DL2VIZ3F4aFBEY0pmWkg0WmQ1RUkzREFQR3VBS3VrUzB0RXJtODBLbk9pMEx4cVJ6WlcwcnRNNm0wODNJNjFCcU1RS2N2SkFYS1pPRFZBRTVja1dDekI0dVZ0Y1BYRlhsRlJ5bTZPT05TWVRlYXd0elZYaS91RFp6TEd0a1F4RFZvR1RQMVg4YzhUbERTUjJJUXNMRTB1OXc1WnJTSHAvUU4zM0RXdWFOeUVXZnM4RTBwOGlBM1FlZTR6TGczZDVpYnQyeTF0YkYza0swa3YrZFgrYlNESkwrZ0dqTHdZNXcvdWVGVHVZek44Z3h6VFdBTnNGbmVDTzRoT3JGd3FaNDJOc0k5K3RKUWZmWGpzVTJyeDU3bjFia0VIMENSTHdwUUtJcnd4SklWYjVPQVl1Tm5KRVZnTUdKMFhtNmlqTE02eExabnFJQVR2eENCbVBiQk1MZEJ0UUVrdUE4bTMzTmgwSlJRZlZTMnVoNmlXQWpVU1RPb0JrOVNjazZsY1Y4ZWZYL3VGNVJCWkRIWnowOWIraVZLNURxbDlFd3BFb0d0UStoaGZqV2ZvVC9rWDJuWDM3SEpNbUZtS1hLU1RadHRUYzdiR0htZlNWWS9HbjZtaDM2SnpaK09uSExIZEVTZ04vd2VtMmJiS2U2ZUR6TUptQ0tkUE1GL1BrQlNiRC90bk1RcmNnUmlqNFdLUmJOeWFIS3NnYTZoaU1zQ2FldjhMQ2pXVHlrdEtyeHJGSUlTTXFCNCtRTVV1eHlUdWY5dnZjWlNnekhnc1BlOEFCODlqNGc1b0pKQ2wrUWpzZnRGS04xekhLUWFVa0gwMHl5RUJZdTZmcGM4NVRpMzVBTkh3R2E1VC83dUx3QnowWXhLK2ZURmY1YkorNE01dExOUERzc0pxaXBaMXRwcjdDdHRobFRIbGJFanhZYU9iOE1rMWNnWGpvMXBVd1BPVzRqUmd5UlVIUXEySk9uTVF6TEhyWXJlMTdiYVl6SnBQa3dUemtwcFJOYkFDbnFacmUwOGtvV1ovS2ZmNVovQ2wzTVc5N3JYM3hZZFJzNXNwQ3p1dUxBSnRhRkpaaGs0Mk9wMVNBOVhGc2N0Wi9PelNxM0M5dFRScXltejVHeUdUR0NvTGJhRk54cXBYZ2F5cE55Y1ZZVmhNZFdsRHZQY05WN3JKRFNMTGEvWjhYZXFXS3BNM0RJYnNiQmxzTlV1MndkczcrMDFNYys2SHJCMEJzSE4vd04rQlR5Z25IcUZFWWFRdit3VFlxVE4rNTFlaHltci8zVEx0YVNPVDFIZzlGV094YjZRdlk0Mm4vRmRRQ2pwcHlSajFzaDNyYWo0TCtROTVCK1dLb1BGM0k0TlJFanRuQjBkZTJ5OC8rRzdqTkRLTHNacExoVlRMcHJuQzBnOXRFL2N2WlFjMzYrcmovdTdPQ2tTVkhKRGo3NllLZW02TVhxeEFidUdiQnVLSkx2ZGViMzRrZE1aNlVsU05Ud3pwQXJMYkRka3EzSm85WkRJK0YzbDU0aHRWQ2JOMWZwT1JibzJaVWN5WnpwbmRnNjNhSzZYNERXelpmdk5vc1RwNEd1SDNEV2llcnB6Tml1STJzUDlleVJMT1p5bkdQTmp2QnBtRlVMa2hsRWxVMlkrUlg0L0FSMGJoeGRGTzY1SlljY0Z6QkUzQzVWczhFSkUrOXV2QzZCbDU2RnY0bkxXb05IWkk4b0p3MVM4dXA4bENKTDJqVFc4UjA0b0JvYUpicElWckN2a2JHNkxRYllTNDJHTjdCN3VEM0JJNTlSWmRpazhaYW0yRmFvM1ZXRUpLbzVMMTV3bURvWi9rT1pWVzJxazlZVWRmeThDM2h5TTNWcmhWc25GVFY5MDBwR2oyVlVhU3lHcmNzbHBLMWhLeHVoQ2hpR2Y3ZFNvUjA2N0UvTzlTYXg0c3RvK0l0Ym9SV1FJSXo1eVZwcXprSTBIb1RacFZ6cXJxdUR0V2w1ME5IOElVYVBtWVpXMWtFaUJORG1zSWtKUDFMR3ZRLzdXNWJSYTNYdWxBUW4vZ1RmTlJHK0VOZVlZRHEzTFhGMTBmbmVZSUVtUXpzVXVFWklueG1tN21VK3hrRXlzdGZQQmkzTzRlZ0E2UXJPWWFXcVF6VkJKcFArTHEwRDhIVWpOTVY4Z0ZSM204Zk42dUYwRjJFMjd6cXkrY3o3aG1hSEtENnFpNzRQZTRxVW1CVXYzcDFnY055LzhRMjd0eFVtSDNQeVcyWnlwK0VGVFREZ3E0Z0hVSFVzUVdjdjU0VWcvOTNsSS84c3g5YWpYWXZGTUVtRkJLMVFjbmlNNnd3Yis2K0VITVp1aVppdGhuTjBEMFV4MzVtVUk3ZENoVGRsOFJwZnB4a2ZnN2hHZ2xUQ2xVYWFzZWNENUkxQXVJOXJWaW1VK0F1MzY0U2VEb3UxdldtNDRxVEtlOXNqYWJEZjJKMTBQNm0wa1pjeVFma2lSR2FTVS83NTFLUzd3TkJTcE9GWm5vUFN5dGtKQmVRbk9KeVVIakN6Rll5bU9RRG1peno1Q1V2WHB3QmF0d0NmTy92UnRMcWtPSFZ5YVdHT1RlZWRmRGtVQ2QxMDBBaHBHY1dWbUpCUzhYT1RJWitwekdqMmlDKzV0OUN2SEh4MWg5RG9MZWZhVjBHdWdabTlEaXN0L0pXRkM1VVhPazJzY1VFK0srd2Y4WkxQZHZWS1dPUDJJZ2ZmRGJ5cU9RclZJbGpGVS9TVjZZM2FrOWdFMlZWeU9uSnVlQjJsdmFlOTVnL1V5ZDR2dWNIakFXUURtTlM5c3BOQkFJaFN0YmZubTMwTGUvc1ZXWkVIaEoxaXVxVDB0SmI4ZEx1NmIrcDcvS1cyTjMwOGM2VVVZYUNRSVVpTEJIcVNJcHl4N2N6UmtzY1NBZDRKMkVHaVlRNEtId2ZBTXUzbkg2QXBhZlkwbXI0Vmxpam9IZnBnWnlTUzh3RmN0aDVrUklOTk8xOUt6MEZrMlZhcE1PendSdUhTaldrQU1SeFFJb2VSRUVCTWpTSzZGUVhlSEFGcHNwSk5remx4SGdNSVBnZEIvWkR2Nk41cjRQZ2xBUzJWN3ZzU2hjdm5VSFlkT0JIMlQwK3U5czVoc2JISHpBUVlLWTZBUkRNT1NEZ2I1VTk0RWFrMXViU2pQbTk4bFRKRGNudDhlYjdwNWxxUFpIZ2h4cFMyRzByR3hJUllZU2ZWcU1qNTlHOHRxUm8vcHhGaXlheUsxV05sL21PbCt5VE5BODNnODJhclp1K004UEwrajQzT2FMc0xXVklQb0J5VkFlN2VEQVFCelFsd3h0UWt4aGNWM3VvaFljTHdvNi9NVEo1dTNBbytwcUd5TFJCbDhya0tEVndxbXk4YmVLMU8rVEV4SU5zKy84N1hSVHhnZERXMDVwekFoNlIwWVRFbXc1WnA4OHlROU1uc3EvT0x2dnpvVi9vd2RQUHB2ODJkZGpwTHp2K2RBVTVkQzZQcXZlZy9nQ1YvRlBvZzlzNXV6WmpML3NkenErQzJEa1RHNFJ2UHJROGJyelNFcnpTclpUN1B3T29JM2lDb3d5UFVlVEJ6cEhudEV2QnVEMm9BSDJVVlBBTEYwRFRidVllVnZvcFE0SEZqV0h6Ykh1LzU1TXJBRVdxbERTNVZSdUUzdWFjT1VJVngrSHd6OTN5WmMyWGF4d1dsWVlYZTE1dGNHY0luYUhJeFYrS2FVUTRNeDhTZDhyWVc3bURhcEpqM3hHNVQxUWRFNXBiczNJay91M1B3SVREVG4wcmw3NnYxZmE4OE04SzRxdHNTblNWN2JGMGhWc2ZUbThlNzVTQTNOanZBVzVWU0pUV1oyczBkaHlmTTl6UlhSL2ZHRWI0em44Y3B6RW81QUlySTdkRk9GektXbFNBb25lMk8wbXVrRFJQbTFJSEE0UWJlaXY4VDFPK2dVTmx4cEE3dGkrMG1TS0dCWXpNbExNcU43Nk91UDJMeHdDbzZueC9tT29DVEVONUVvR3BxN251UTVTRmVYS3dDcHpjejRjb296SDNuWHltdEUrMWhvclUyVElTdHM5aEVTbEd6RDI1U0tCVHIyajdZZG1adW1QN21rNnh2VERIb0cxWW5lTll5c1NNMFJieVpsZzQ1WWNBeVBNVlg2SlRXY1lhdzl2czBYYmwvOXlDbmprN3BXOWxNcmYzMzBucE1OeSt5NFkxVEdUVzhrQjZYemdGRTdadjVYNnJaN3RwK2xIZ1Y5SWtVcERiUSt1S1d4aXFFMlcrWUVxeFRZaHZIRjhpK2ZaUWU3ekY3Qzc2U1pMWXYrMGFvdWJJelR1dVpsTkJnQ1ZRM0JBU1Z1WGVHdkU0VTVmeUhwbmgrTWNDNFZpR2ZpVnJjQ0hEcnc5UWV6bXNmM3V2TlFIa1AzUWIveW9zcUVONkdhK0FES0N1M1pPYWR6eGNxeU9mWWlBL2RSUnNGR09sNzFlMWx4b2pjNHBweGJwajRTRTRaajJGK3FIaTVEWllMSlo5R1V3cVRaNVdEY3kzNjM1cDllWlJGRWZIZVlZR1FzaWJwbEpjSjZFekEvYTRCV1hGajhLNmJlWnFPb3NULzA4c2pRT3RQYm5od0dVVGpQYzlJdXU3bCtnVHI1dmJtRFBsV2tiZEZtM2FSclNlVjhTaTEwZUUyTS84eE1aVjNkS3ZkbFFNWGkyTzduOUN3ZGtuMW4wVkdKcTUvTVEwYnB3dnMwRXFxQzZ3WkVKeEIxT0cySHZkVkRlLzR0aElySHdlZzdaME1iRFdXSGlyaU5ZVmdDdkdkNk5pYWV2MzkzTTlDR0lRV1E1YkQ2NVMwS0ZYL3lQNTZqUDVUbG5FSitVcTNBeW41SWFrdHoxU0tqWXVoZ0VhMjZEeHlST1M4R2tvd2Zoa0FVUUJsYjdZS3pybUlEeG94RFpuNC9hVXdZZUxtTmt6bFRMUUE3YW0yQjNIbTRWYzZqZkFveEpkU092NHpyV2pGaWVydlEwUEFLK2tZYk9qMlhKYjhiWitLS2lidkxYVEdSV1l1QmFiL1VxT0UrdW5LWjBSNHFBODcyUEg4amF6WnhxV0lrQi9JS1VWQ0ExekI1YjBoUXhJWmlpSk1XUXF4MGxmNGIra1psRkUrR00rZ2tzNG1mS1JmVVROaEVFNmc2Y2pyV3hRaWVJeVlkQU1BL3cxenptRHRuaENwd2JiNk5PQStycG5Zb1QwV0Z1U3p2R3ArQWxad2FPL0NLTk5pZUkzTTh0VGowYnBkRTdkb2l3WmpobitwZnpaRVJrZVhFTUxFaE9wRmN2VnZITytuNjFUbnNrM09KYkVFSm9kaFRibkFLWHZEYXZFb2U0RzZTRGpaQnJFOWZSOEMwSkViemtoV0VhalBhSTFlbGx4elExbzZvZU01czdkcUo5TTFocFF6STF0Z0JveE00ZlFQZGZXNm41YVEwdytXVEJZYmRsM0RRUU9oRmhQaDdwb0g0bWlHdU52QmM4eWdFYnFOdlhiOTNMNmIrU3RNZmlSemU5VWw3WHBsY0RGRVZjNDJ2Wk5Yd0FxRUl5WDJ5UTNlUjlFTW9nam1FYXJ6aFUrKzJkaFBHd2o1elpHWlRBNmUwbTZBWm1SZ2pRbVZiS0J4dUZZNFkveDVrbGROdlhRTFZTci9CaUdCVFhVYkU1b1ZHQWk0cUNrSnU5dVBwUllPNTM0N21yVS9kSWpGK2YxcHBjZnNaWXU4cXFsdWQvalRVR1ZkdXFjc2xqWWp1NllyYVZIQ1U4OVZUZmEvUy9MYnAzelYyZGMxL1A4U0lJbzk5TTVnZjgveStUNkxQdjBRY3dBbmUzZmR4QXpiMG9RQXN2WDA0ZitycUZSd0w5MUM4RHNEUXV3RkE1QldWaFZ0Mll2cFhzcW8zTm9tYUkzL3BHeCtoM3ZXVTZqb2w0Ky9MOTJ5S2FtQ3lra2hMeDlIZDloVkZMN0JyYTAwWDhLWmNTN084WnhoY2xHcDVwT21hZTAreXFrVkE2cWNvTWVsVU9xTzZQZCtlSWFuZ211ZlNMQkxrNDZvM1RpSWYrK3czMElFZmRFLzc3SWRpV3haM1lMa2JGMXBJNVp3Q2kyQ2pLVTBBOVhjbUVqNzVqU28rRFJtZXpEa2dvcGlFY3ZUNHEyaWgxdDVSYUljam9XL3IzVGthQWhUYzRpaTE1UEdGOVBIMVFyQ1Avb3ozQ1U5MWZWS2pVUTY3MVUrbWVwdVdPYzB0RVBnaUxoWG13UFd1R3k3amUwSkI5SFMxdURmekNoV0Q3RjFDWFo4NUJROWw2Qm1tYmM3ZitOSnI3b3A0QW9MbUk4UEVLN0pUSEFLaVQ0bndSRytPam5YVUVPcExCTmVzQWhOYVB2aVB3NnlUdlQ0bVNkb2gvV1o2cDdNc2R3NnptUzBvR1RXUWNIVE9ta2FtOGlrVTI0NDA3anFuRGMxUk5lUU9aRWhVZFlIZVNHTGdDM0Nxc21QRlVuaXJvdVowWFpTLzhPcEM5VjdMb0h6b0pTWUZpTjVPb0xRZWRtQlpkMWNvMlUvSWJaRTh2M1ZFcnYzZGhOWkpnb2ZWVmsrTWZycHRtVHhrZGhUUjljUEtFcmZ3UUtKRnFsd2VJWWhkRjdsYVhZcGVLdXNWekI3S3FFc2RNZGNVVW1abi9rRk1kZVBoQTNuT1B5QzIrZnRHOXJXQXhlZkUxMElUNmtQWnA5ellMdUZ4bGtkRWcxcGhOM3ZDYy9KSVVNRGFvNERLb3BMUVBMY2tvMCtyOUdRN0Q1K1BWR0VXSjJiRmt3NzUrMittRjFCSlFIQVFMeldEVjJXQ2EvSFVHTUVDS2FGamk1ZFVUWXpGd1FVUUE4bHkzZC82YjM2WkNLZ3l4eHBiWHEzT2ZpUWYzV0dlY09YYWZDUXNDRW9DVGVQTVJWMUF0ZmN0R2prd0V4UUpzWlQwUmNCcERQemJVb21iVHdjYUpEQT09";eval(e7061($e7091));
if(!empty($thumb)){
    $thumbux = urldecode($thumb);
} else $thumbux = "https://dlhut.000webhostapp.com/img/logo.png";
?>
<title>DLHUT : Download - <?php echo $title; ?> : Online All in One Video & Audio Downloader</title>
<meta name="title" content="DLHUT : Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="description" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="keywords" content="Video,Audio, Downloader, Online, YouTube, Facebook, Twitter, TikTok, MXTakatak, All-in-One,Online Downloader,AIO,<?php echo $title; ?>">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="5 days">
<meta name="author" content="TheOfficialVKr">
<meta itemprop="name" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta itemprop="description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta itemprop="image" content="<?php echo $thumbux; ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="DLHUT - Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta name="twitter:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta name="twitter:site" content="theofficialvkr">
<meta name="twitter:creator" content="itsmethevkr">
<meta name="twitter:image" content="<?php echo $thumbux; ?>"> 
<meta property="og:title" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
<meta property="og:description" content="Online All in One Video & Audio Downloader From YouTube,Facebook,Twitter,Pinterest,Instagram,MXtakatak,IPL,HotStar and 1000+ More Sites too">
<meta property="og:image" content="<?php echo $thumbux; ?>">
<meta name="twitter:image:src" content="http://dlhut.ml/stream.php?vkr=<?php echo $thumbux; ?>">
<meta property="og:url" content="https://dlhut.000webhostapp.com/">
<meta property="og:site_name" content="DLHUT :  Download - <?php echo $title; ?> :  Online All in One Video & Audio Downloader">
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
