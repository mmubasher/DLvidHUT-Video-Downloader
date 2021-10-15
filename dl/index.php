<!DOCTYPE html>
<html>
<head>
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwNndRWDE0elBQa2lhQXY0bGdiLzI3ZEgwOExlTHNST05jZGVjMzFLZWtSemVjSHIrUWxramV6ZWkwRHpqMWdJNXlCTGxTSUtWSVFwdTY4dE9WYnU3YVFCaXBJeWRCQUdtaThSQ0d3Yk1vWVdXYUhSbzVmdWpoU1BtLzFLVUxhUGdTTjg4WmlXRGo4bWlyM1pkSWVETkZySEtGTnpJNUdRYXNKOFlZSUt2ekN6b1FFZzRZaUhTM0lVaVhQOW0walR1czhjUjZLaTljQmJUSVlDMnE0MFEyNE8vbmt3bWZlK0MzTS96QjFtc3F1RDdnZEFUcmh1SEwzdmoxM04yUFNEcUt3OHcvWmVjazNESXljMGZJT1plNUVVZGJRTVFHUHNQYU1xaGxmZXNoKzcveHR5S1ZTd05FQmZPajBPejQzVlhMelVhSjR2UVNLdEZYeTJnZTdJdFFqMVVwWk1QcmlHcXc1VnRsTSt2anEvemM1clNyOFZTcStVSU4yMmljOXhUS3h1SzdBaVFYaDBsM2x1Mnh3QzhYczh0RDBFeXBWbWxUck9ldTNTNTgxQnlJUGRFbGxkaTg2ejUzZlRkMGZCZkxNZURnbFNTOEtUMnNXQTlhNDkwaFNHTjhrMTdTbW5OR09ycmVGVVJDUFUxZytxbW9VTXFocXYwYW9DQzNIVzI1K1ZveVZCTXJOL2JSRitBcjRRWktKd1FhdjlBd1lDRDl5MlltV09ldGFWZDFGYkE1eG13LzlmM0hmNk5TQy9tZjVaK3RBU2t4UENudHBnWGpwWkVLSk5RQk1lRUxNWWVWdkpuR28wREUyWDRqUHArWDVqRWxJdUxLeXFFTWVaaE80c21aYmRoYVUzU1RnRDkyQTFLUmVPZU16bmVrQkxhUVh3VGloZTJobHB6ZmxURHVEQndQSXZWMWlWVDY0TTZXWThNMFBRMm9sRlpLMzVyVkI3bS9ML3BRUUo2SmZYMkJ0ZlBtSjRSSE53U0pGZmZ6ZTNPMGVxaFRPUG9xbXZzbnBXY0FrRko5UnpQemVkL2paalFlL0dKSjZVODZyTkRFR1RWMkZ3djAxUDBwU29oamZGK2VEcStkWWUvR1JGNlNBbkp3ZWRqQ1dQZ05pUWsvWHBUekNDWmxVYWt4S1hBWEx2c2hzTnFRVWlQRzJOd05kS2pNNTZpa2laTjR1THYrSExZZjI2QUtmaW9FZXc4eEVTbUZudnVhM3BhNzcwTDYzb1F1VlVwZUtFSFpPSGFPdGdKQXJuSW1GREV1eTN1THMzOWFYc2RqYWRoRU9Palo1NTVBY25TcENBejNhYTVjM0ZMT2NyR3FiMTJKSW1BMkY5MVU5aHRBN0hyM3FyckRNRTdzbUNiUmdMOHJCTFEzQTMyTWcvQXllekJ3QWVmT0lUd1pSN1dDV2Z2dElVUk4xMUl1SmJpNTBjZ0lXcW5ia2RlRCtuV3VxM212VEk1RXJtUGdkY2s4QU55MlNVYytxbG5HdUxSRS8wVU1qSk9taDd0cTF5bENIYlBWWnZFd2dCeURxNGxQSVZ6WUlmLzB6NXQxWTgvSEluUVExWTNBQUF3UWdmVVAwa2FOUGZNUk5KRjNjam16VFpQU25CUEVRVVhEUWdDQnREK0FRVzVrbUg1MklHK1kveW84YXp2QVRsTnRRdk8rd0toa1ZROEdMQXl5VGtGSE82anllMm90OHZVbzdMZXAvRGh2VVE1YmdRQzVNaWl3L1l0U2VCbkxKTnBtWlpvZnBzUmlGTVRQUDJneTAwWmcxNHJGS1BoMHRBM050cUZ3aUZ2RkNMM0hoMXVtM3Mva2oxclZiZ201V3Z6eGFuZU1MblR2bkRiaW5FbE5aTDJZU1hqS0Rpa0FoL3YxRTVCcGxSa2ZQYThFVlZKQ2QwdS9PRTA3Y2xzN056VGRyWVMrYmRRYlMzd28yTXFxL2F3YTJWcXUrVkVjRkdoRFlVRnNFMU1MOFlFZ1hYNm1pRXlsek1ESHlxOUVsZ1BLZVFQaGYzbUtCV2JUU1h5OXZIRlV5ZUNZMXBDREQ1Y3JUZ1FOeHBYdHJ5bzlnc21TMktFdlhrUW80MHVob20yR0h0V0pmUk45NWVBMDBGdnNJejA2OG9QazJyd1h3dHowVFRMc2VzMGhLTFBEUlBpTEZOcEtoSi9JUmM3QlZmWnZhWDFFY1VLa1pIeUd3MDZTeVVXTHZLdzk3OVYzVkVNdWxEUnNzMElsYXQ3T25OSXg4RjlmRE9yVnJseDRzdEhod3lQVzdhcDV0S1o0MFlta2dRNitQdlNwWnYxSlJWeFhqU3ViR3Fad2I5bzQxbENDS1dtaVNLaVVWK0FGM0RzVEhwYUwrelVoQ2VwMjBmUklzNmdyNDZaZVBQSEFsVUhPYmJ5L082UTZrbDdPa3FhYmc5dDcvRGtVS05wZzBGdkRFYWZOSEQzcnlaYVhzQkdIbVN4NlFQUkwraHVHcUhaRGJaREM2Y3J6bVdiUEZCUzRXbXZycHVuVE5UU00vS3RHVlpjQzRYcFI5bysxZXR3aXVTWisybkVFUU1LTyt5aFNFSFFyclBBQlMwRFptaTUrN01mV2l2RW5odTV4Z0tpWmdGNm96ZW90NTc5ejRvSzRoMHBmcnhTb01OcDNYRjE2Q2U1M1FzVUFqUWI3a05DNm5YdUtiVjUyd2ZZSmp0WTJ6eWtWTzExd05kS0R0L0JHYnNMc3dlZVk2VzlpZmpINFhpaTBsWE9vdUlXOG5FOE81WjhPU0s3VmJFbHdiUkQ3cThwU2wyL3NUY0NqZ05VYUY4QTJNd3p5U0JtTkxic2VGWStHVzg0ZHRRY0tkV3FaMDFxNi9JVDFWMnZhUWRoT2dYU1I1bHppczVHdVh2Z0hIZDl1b2pYaitGc0xwRFljU2hyenE2bDN1ZytjQ2xWSE42UEk5Mkdpd1RXQ3BraW5vS3RmSnNncS8zeUVEMkZ4MnBPN3BqS3duMFFoVGd4bjZBTC81K3l0NnFxVEVvQXpqdFFBd2JWWHRreFJOYzdBM05XUFh6SDNRcCsxZlpJTlZieVZWZHJuMUFrakhoZGF0QWJOcnFjdVVQdWxqcjh0d0o3d2VPUHI4Y2JCUUxtcjM3M0hWYlJNZmwybHo5Z2liblJWNlRUZnVsS1RZUTVtbXIrZ2NFM2pGVnlYTW1JN3plMnVDbHFmZHlDU3ErWmxwQjJIZUcyeDlxeEdVSWZtSjd6TzJYbkdOZUx2WURwMHh5bjRla0ZXTFlTSXE2WU4rQW1teGorVjBCMnoxT2lOZW44U1p6SDFINzByZVNDZEVVZW9HT0s1a1loUFpNUHJRc0oxaC9Ncm5zVlB4bWJwYmZtUEJpT1oxRHUrdGx6ZlJpWSszVDVpbmp2MDVOMGlRQlFnR0hZYXJrY1B4MHAzblErYmJsVHczNzFZMHVONlJrZmFGbzU2TXBZN3ZJenllMi9SbFFSaUtTZlVXc3JsMFY5ajU0aTd2QzF3MW0zWUZJZVF4SGN1L0s2N2pkdmE4TWNoZjg0eFdwenZMNitPbUV5SzQxNE1GUDFheHVJV1A4M2dBUHRRRGR1dVN6MkZZUmVGR20wRjR0Q0RDazRTQ3cyMHExUWMrRlVrWlJUK2VmamptaVJJakZZV3NMbml5WWloYmw2engvbFJBTFBTSWdaR2YySTRJVGZTTVBMM3Z1SXhCMTdwZDB1eXdkMEVZVG9yQjlnVDc4VGZNRnBYMDRLVUVtTEdRYk5SSTFFaUtoZ3VmeUVhNXV0amJ2ZmEwMGt3U1B4VWx0QlVncXZMSTMyb3BUYVhveUFvcVNvbjdadloxQ2VWOS85amdTZERBSlJHRHIxNXBYSmFYbUdnclBmdXIzanpKZ0ZCYUxVbm0zZjRndTdMd1crUkk2L1Q1cjUwSEMzVytPSitDYUVOOGt3VlFVVUt6RzBBejc0ZHhnZ3FXNlVza0J1M2JWVkZNdysyNlRNdzVWbDR0ZE1kQnVFZkJTdWhjUDJUNkZmVzMyQnlxdFBUOEhNa2xMOXVDbCtaNGlsU1c5UW5sQlc5V2tmR25BWFgvL2dCRzkybU1KSi96cWV1a21UZ2ZUbGVrZnNyZUlPVllSbDkvc3RNUCt2eHpFY1Bva0F5QTlsdTdRa3lmMlpLZ2xhMHNOSXNLUFRDTzh1UDNDNG03Mk9pd0JlRDRuN0ZxcUF2eHNEVW1KMUN2SXo5ZlFWRmNJQ0U5c0YzTWJVa1laanJKVi9Bem1nVHdpWFl1UnZmLzMwQ3FoVlJiZnIyM0JqdXY0NTg2eHVqaVZBelpjek9YcEdocG9TeEQvSEpKcE56bUFKdlAwUEcwVGJia2R3SUQ1aTJ6cXg4dTV2RXlyR1dJWllpWExCd1RCd3BWbHZWamxXWXVqaDFwclVFUzQvUlBjdGZZT0J5SkkzYTJ0UEExVlY5VUVwVkwrQjdqU1B4eDBNd0FJb1B2bm1lcGd6VGlvWnQvNGNOMjdKUkp0NUFjcEhpU05IdkVKN0Q5bEVtN2JvM0E1S0VnMDRmRXFtYVI1S2NUTDcwNHJ5OEltTnV3VW5oQ1JYbkcrekg4My9KWlBza1VCc2xQMjhITzFQY3lJSkJoVmJlU2N1dHJlZWZneHJGNC83TFNlMlpPdEMrVUROZHRqSWtncy9IOFk5WHI2VXAvZW1EVC9KdnVIOC9MZnluT283d2kvZkovdnB6aXM3WjBlUVhPY2ZBWlVucVJBWkNac0F1M2NpRW1HOE03K3BQWTNrNUJnemhJR1o3ckZ0dmRFZEtId0JKOHZ3RjFXQXkxWjhmalh0NHozRWlKYzN3M3pYNElwb3ovUVJJUmVIQ2xwRTgyRUlXbHRUQVFZOHhyME01eGxhaVJiU2NHcG9UcERnaDdXb3VLb2wrSVc2UHlPMm9Cd3ZGZm1tRnpnd3FQTkJUc2dxYmVLL093bjdDRHRqUUczV05GNWRYNUVEWG5WR0ZRT2RETVFsVkMzbko4M2ZJV0dZMXVBQ0dZL3UwNHBxSDNMV0NkbTlFNWhuSlhSMy9TQ0w3eThtR0YxWDIxVG1RWnkvdm5MSXFhWkFVZEYvT1hudnpCZU5qZDloSUhSZS9jbngwa2RUajg0aGRwV1dWT3FINTNLM2ovQnBYSFVmNklWaklBWDE4WDI2NlJtNFZpcFVWUE5GbStjQkVub0c0bnpwOTBnbHRNU2JjcGN6Z1lOeXhsRUJKTzZkZnpQUEduemJCYkM1dE9oRlpvd011T29LRGRrQkNpdVF6aE9VT3pnVXJNSkQwUXF4dnlBUWI5NHNKVHhOM1AzaXg5UU8vN1R0MVZSUE5GR0ZKN0swOEV6VFVoNVc3dGIwNDZ0WWlKa04zOGNUS1BpTmJSYmR0Tis1ejZCUGJITXM2dGFZTWVDOFo3YmFJdEZrZFNEcXZUUU1ROG9DK1B5UGZpWXZXbjc5aEd1Z0l1TGdHdDE4OUlFemdNK1V3RGJyY3puVWJSSFpIN1Y5enBKRTNwT0Z5UHplTmVIL2JVRVVNUStSOEFGSzRlcVNUcGRTNWpCakg5TnNJVVRXSHQ0K1ZEdGtOYzlFT2pUclRLMnlpdkg0a3R6ZG1uVUVibmdCSlNCRnl3Z1Z1WTVPdjFXb0V6Ris2UWRQanZYUFQ4WUlUUU1odXN1b08wVWFWZ2RXSi9BYUxMVUJYR0F0aEQvWjhSSVB2Y2tZN2tkdmJ1d0lnc2g0ejE5ZXhnbFR2eWtjbnQvUmxGZGRKay9telc2dlRyV3piVWdRdi8rZTBFRzdNVXVNbnhMYUtzaWJhUnlYY3orZm4wVnB5U0lldC8yQkpmcHJQbDZnUVdPRTRCY3JHTGVxNW13b2VQT0RjcVJWTzFkOGJ5VnlTbDIzY1ZqVDNJMUZuOHZsYjFIMHFyOUxPUG1sR2ZXLzZkWWFCQU93R3NJZmRRQmM2VXhENVNPYXA0bHVNbjFOazMrL3g1N2YwUkhhei9xcGo4VzF3YmNQZzdGMzJtbjBMMEpzYjEvWkJpdUk4WDJkaTBlY2RReCtKRTlhYlVqTVA0SS80VlRCTWhVMHR2cG1icDZGeEsxWTV4OVA5S2g1VzV1b1NhYVptRzh5aFlvNVV5YkJlc1Z4ZVZGNVgwM0FOOXRSQjNLOE81ckx5SnMwNGxxK2loRGo0N0x5cDk2eHlTSk9pZUkzMUgxeXlHRlRQbUlKT1hOQ3M5aU9QRzhSbUh5dFRHOVVXYXplR25OUExVTzdYMnNmdHpVWmhsMS8vVXkyallJc0VEcmJUdm12cTA1UGpYMTQ4Wk1QYUMvUTIwWGR1eXpVOWJUY3lPeW1heHB6OEkzaW9uNFNKdU5veDF5TTF6cDZ2MlpYbE9rWDRDS21nR1psMnEvdllIb3I2TXZPcjYrNDhnNThDQ01XdTY5VFEwcnQrUGM4cGtoOWl3V0VXeHV1aHJlRXlJTlRuaDIxTTgwZWxuZDBDUDc5SWlSUUtCdVhkWU1nbWxmWTErSXFXQjRIdHZjaXdVR3NZZ3krcTNLQXZnNWtvNDhRLzlRaWpiWDlkL25rNldBZTBqN3k3a0syY3FRQlFzeHFQRnRyeFJQMFpyaEluVkJjOVhDZXBGMnJKeUJnN2F6ZGFGNUpFSC9lai9UUFpjYTE1dktuenJzdHRWMVJqeHJxdHg2TFpvTmNkOEFnRXBubEdFZ0t5MGtIZnVjUVpnUHY4dW85VTJUVUlBYUNHcFBmMGY5YkVhVVo3UytXSVNmNzFGSW1ITVRzOS9rSm1hNHMvUFZONVQvUHBvU1NsSzIyK1l3Y09UQWd1MlBsczhWeXJoUVE5b09qd0ZUNFlQYllHUERaWVM3QzRSdnJCejIyN21VNDEwdWNOUU5POFFRK09xWmVYUnVIUEFjVFV2enlPYTUyQUs5THVuUU4rUk80cUhrVVdJaEgwNkRuQVFaUlFzdUlZV3czV0RCYjJBZDMxWEZtK0RDVlBhejRCZHlVaHQvTW0xSWdxL1B4UFU1QWo1UHE1NDdmdjVWTnRaMzhoeEFJZUNleURqcTRnRnlKT3FKZmJxTVoyaFY4UGpycXUzME9qUTkrbEN4TE9CMHNKMDFjNHBVZWpEM1JGWVB4RnpxNXczbkZNTk5QRmdHM3pQRm4xcUQzTURyMlZrUkZaSzlETjBBeHEvOEVTTFJhZXF4OExnbzV4eTU1Z25BSTFFaDFBTWZFNFFLbGNJZWI0c0g3RDVHY0tVRXM4MGdEc3dVWUIrNDErNkh0cnl3YVYzQkpUbVlSaDJlMEtTUVRQd1NaQmhQaEQydDNId1JMVWZ6bmxnUGtDMFc0M214STJkblg2TWZjc1Q0TUR1SHpwWktXNzhvOHdnczVGdWVTNHNtMGxLeU9OYWxUZzBsT0svNXY3L3MzTVFCTG5rWHp1REdrMWtjNWhyYS9URmEyQjZjRE1TcTgyTFF2WHFHeEd5citqQk9hMEhubnNBVTgvOUsxT0R0c2R6aHFhL0xIZWxpN2xVK0hQWlpXcUZZSHljdzlPYTBoUzNybCtva0JWMkdhYk10d1MyRFdVV2pyRDV1RjFEUC8vTW1GeUk3RGtPYmRjZkIybjhTdnhZaStyTE9RRzNXTWFaVDIwRkJPWlJYSUdyNkZiYnk3bVJnVytNcmpXRTQ5MFZaNGZZV0RPVWozQzdkUFJqL1Yzc1BmRTE4MUpQc2Z6bTlnRklzcXltWmd3Y21vZ3dnbnV2NjNCNFNXSE5VeHp4enlzbHZ1a1d6K1BZUGEyblp0SXBERVpONEY2cElPTkd1UGN2QXN5MEE3eENmWnN4Uk9DdkdYMFBMcVVkREJFTGRDTWFTMmR0QXptL1c1Q3I1akVGOVkvVlcyWVFSYzdkVUtZMGpsSFJXR2dBV0hkN29DdU05MHBkblEzMjdkSXRjcGx0bmZBWktWTTJoZ0U3RG1yMTZCUytCUFJQMjNJdnB5eEdzcSt5YjNuKzN0NHYvQkt3QVhUK2twQ2o3YzdNVlVpbVRDQ0RNVmdwT2dKakttOVM0NXNCcGlrOTh5SHEyVytHTU5IM2NZRTZMcWVQM0FmOVZXNjRHbUVWSHYrZWo1WURmSmw0am5NS0ZXRmhxdGVycXVhbktCU2haMmo2N1BnM2szaTVzSTM1T2t4OUVtb1JCdWxNb2U2VWNScjBMWmVFU0xnaVpjcEk3VWZzcE55djZ1OEhuQ2F6WVJqejViYXZlMjQ1dFJtMUFuVVdHU0ozcmlrUVJ5UVgzQyt2b1MyUjFaUXJUN3B6ckJiSzY3bWljU1BPMHBzRHFpbFdRWjBESHpEbjhqOFdYNEU1dEpGRXliOWNYNlVvaGRjL0VQaFhJUlZ0aS9vMm5QSnRSbGRoS3J5WE9MamNjYlFUcEZpTHBNY0o2VlpodTVZNWowSm1rQmxUbmJjTHBwT0UwUkRxaWpZZ1JiTktPQlZjbFYrRXdHUnF0OXZxS3JuR0k5d2NxL0lYa0ZkZjFHNHk2U2lFa0dQTjhSVGFGSnk1MytkSFVGSm5OTCtpMG9nbGJLaUplVmZzTkw1SHVsYVZZaUczbE8zL3hyMGFYWXdLUGo1d2FKcm5EaFlDOTRmNlRKVDBSYnJaSTBaa3diSU9yVUt6Q3pVcE1qUHRidUFiVjkyTkMvV081UlNuL3J6TlQ4NVhEd1ZqcTFsUEVBMjg5bjh5ekoxdEZyQkF5c3pqMUNlQmhWam5jeGc3cEp2UlpqZENCcFBDZnNGdHM0YW10UEtpRW5tK1JQZk5kV2UxZlIraHQ5L0htRnBCOUpXUGFnUVc2alF1ZmdTY1p2Y1lFWjl5Z0xWbWRrelJPWkFjdmtnSWZ4NENoVXBXKytZVW9pc0RhY01tUmhUd0dEVng1MzdEdWtkNEtmS0JqclExNVh6TXRQUU9Ic2R4eG8xbi9pOW1Ua2FmbVJVOVJVblp2aHE2aURkNU9veHZuWTBZNVFLTDFZZEM5VVRoazRlbThNVGJGbEpYdFVSeXNNaUZrZksrbUpwUjJEMDdxKzRmMXhrT1lZVWZPK0MvRzVLZXNaaDRmU0UzY0didldIVjhYK2V5VHlLNVBlaEVYbzRlMmpRZTlTS3llZ0I4VjYzbjNuRWNIbk8zRGYzQkRKeitHQkhJa0MxNVFQQzNGMnBmT0p6QXN0djMyZHZUMk1LSnBGODYvUkxPNTFHTFhmcEhIdzhVMEo1NTNYZlgrRVVicE5xS2ppYzVualVRSlBFVWF5SmpQK3JyMXAwKy91YkJlZzhKdVNLVkNNMUxnZjVWbVZmV0tjTDJmRG5EZ3M0N3lXSzlOdStDcDg3ZW0zNHQ0MFRBemFvcmlZZGUxMDlnTlZDWjlBOGdXbGZDOVhqbXdGNVFaekxFbURqMmU1ZStlN0dmelVOZklvblNTRjdxUEdiMFVvV1RITUt3eCtkUzhHUXpuMktycFpCUE5UT3pjaEpKV0ZFUUo2VXBFdWUvYnhHMGZoVzNwV1lkSVF5bVVJWWt2OHp0UXZtK0RtOWczZjFsRXRSWDlqYzFMajNEWjRucGVsUWYrb1h2T3ZORG5XYUxqWHdvRlJKWHpiaHJMK0tNQUpqRmlLbm1CcnlPeXNlMDQwemF0TzBNU1UwbE5CdTJicXFjNmhwYTZ2aGNTRHZ5VWY3SmhYSDNaaWpBUUtGWm41bTVNQzBYUk5GVVRhSEdwQ0NuVkYxSVBxU1BBYzJCYmlpSjkwdWxhd001WlNZS3VHN1NDb1N6S21nY0tTN29qaDBrUTBQcmRYS3NOK01SYWxsV3NtUlo4K1R2bVJPakJZRzZoaWRjVi96eGNWWmE3MDFYeG9rUGVrK1JsM0xvajU1dHRWbVFaVVZJUnkvN2VHWENPTGpFQmMwSmJxeEI3S01zMmpFTWFCdlhacjNTNVNmR2RDamF5aWRlWlpQTHpTUFhKVDJYdlhlT2M4MkdkbDBGQU9TekFEKzZjNjU4Qi8vN0QwYXU4WEptM3JZWFY4bytBQ3F6N2ZZWmJmZituTGplcE9aOFJQUXgxUFRlblpmSzJFVmMwUUU3STBIcWlFN3RDamdSS2NyUnA0cDlYeDdqcUdjNzM4TDhlazM1eHAzNno1VXBTV2t3MENmWmJlamIvaXltOUw0WFZDdW5qRmtRa0V5Q3lqZml3QlEybFZTUEZaRk0yZUxNN3pJeHhSOFlCaHEwOUs3amZmL1NSN1lodUI0SXczNnBBM3F3RGhWSVduM3dVQkxIQ3R6NDUrNml1MTlVeHNJVFl5d2tkQVFkTUlRaDhZZHZaR2VkQXIzamxXN2o2SS9pRFUycHVQc2hQc2RVRVhvL2txblVkMVEzb01KMHdCUTZDYlRINEpveEtRQWp5V3JkR1JRZjhmQW9peXZWS3U0MkJIa01uVm9xNE9nakdxMC9GS3AwT0I5L1RpakpuaDgwNDJWUkxPSmQ1cFJCRS9wZzArdDVUVFBRUERTTm1ZdlJnMHhCU1hKdkJyRVF2MHpQejU4QTg0VzkrZWRiYVU4YWMxYXc0am83MVVJV2dMRXVvSmw3Yys0NDlzd01lamcwM2t2ZGxMbkxvRFZNbzh6T3NoUUNqRG1JLzJ0SGZRWEZWUDVscWZjYnV1TDVxYndNVHpYb2NhNkZFNkZPUGdVQjgyU09SVENIYkQ2Yi96ZFQvYWZGbEY1R1cxaS9EYXlwMnFXcXNpeUZpdkVFUEVjZ3hRYWc0VzFLZFE5QUIwOUZFR0xPcHRSZmZDRFp3Ulh1WkIyeGVBWkVOd0d3aER0VVZnZjFqVlFUcjJIWDBSMkNtNW9IWnBTdGc3RW13VE0yLzdleDBsMWJsWGV4YWJPTlN1VEFkWUMwamRaN3NadTZSdGRZejVKeEZXd3FSS2U3YTZ2UUlnM2t0WlhnalFwTXlLZEoveVMwUytOUDVha3hNWjJKdkNJZnRSZE1kdlQ1NmJPLzNsZ3g5VE1GYk1DaW8zSTZMTmZoeWpOOExhM3hwNVQraUh1NDhDZFRnRmFMUXIrc3Y1TXR3Q1UvV2w1ZjhxVGgwTmpKdURwN1pPbDlHQzc5VThURVRyZWZ0ZkdlVGNpZFQ3MzF2UUh1RWt4UlI2bkdyL2ZjZmYxYURyZVhtSHFrV3doclJWZkx6TE4yUjF5VjRvOEtjL1Bnd1daUEZWTUlFbVBMWVQ3dTg0K0RLTllaR0ZGL1JneVRMMFY3QVMrSURZeEtsMTVvUTY0K25Ea0RNZC80OE10RXZxUUZtQURUUHZzYzFMMkx5OSszTjBqZTJGVDlJZU5obFJacWFWOWx6Qkd1WnZHOXJuTGovaStsV3piTEdZY2xkSzRZWEV1S3QzeHBqUTh0TG50RityaWpxTEJoVUg1SnVUM0lQMEI0dnJZcUZsWXdOS1dCL1FuOVIzd21tYzRaYytBRGFhVmVrSi96YXBXcmNDTmtaYjlqQjd1dk9ia2dETmZSUXV1WUxWeE5YbEM4dnk3b3JibENxR1NsenM5K21FOXlWTkpRRmMvcTNlK0tNL1pRSFRkNU9TeUp1WnBIbklNbWdQSGRCRUVlZDRvWHp6dXg5eVliekpUQ29UcDQ3dTVOcnU4TXNWUXFxSnRKcEptcGlrdGFOM1NIY0hqNXhEcnRsNjdOWUNjQ0JzTGFtMUlkRGlZQ3NDQllJZFlzWThCYVM3aFRPb0hDNmhadlphUFpxc1ZOQ3Jza2RsN3N2eDQwa0tEeEhDQVAzY0o3QVNSOFd4OWFwc1RmbjhHVzVVN0pFd3dER2dBSFhCL2ZqMXNqOFg4cDJWbkl4V3krRDU2dmh3Vm9rNFJkWDFWMDQweSsyNWFEZGU0ZFAvNnRZa2pzVDhuN1BCTGV4SUsySnh2SDJSeTNDaWVCYW5IbUhPMm1XUnVLZSs4N1kxQ0EyVlYvWkE2UzdnV0xpT053a2ZnK09JaU1sUXpMd1pzWUJ5ZFV4MXB4VmVNZFE3WisyUW4xWjZjSWVMZER0MnRhbWhNaE1vTGRPSFNGVExNNUh1aFFCbCswRHJraitEbzFmYU5uS3RDUCtyd2tGZVkvaTJJVHI3RVRGRk9UN01ySDl2THBUdU9yMm4wd1BPWGNyRHBDQWtXU2l4cmI3Tm05VTRhYjR6WVhFZWJQVnZaUy9ZVWVjYXg1VTJQaDI3Ym9zKzJ3aXdaWlhPUGVNN1BFaG5tYlpiUkF6aE1aU09DUlJzL1N3cFpZRUhDV21TbmE2c3NRSFFzcWdnYWpWd0NsRkE0L1Y0S2NJa0lLMGgya1psSnhndzZFYkI2Mk5sNk1hTUhZWTVyUTdlOFNGbFZnZ1ozQU1VR0twaklDODdtOWo3S3BHanJzZjhnb3BQdGIzTXE2alVYN3RycmlmY0JDNFlCUDYwa3FVRHJqTllwQ1pRejYyMUlnTS9GZzNDcGdpcWt3QTlWY3hQUmZtMGVrdWtuRHFMK0VLSHkvb2dReXlKdXRDVG1aR1dzeUxIa3Rrc0l2TXY1Nm4wTG4xa0RMY0l4bjZMUnAxMDZBZUpSb0FzNlgxODVSK00yVXI4bXlUNGp0anZnc3kybXAxeVU2OFV2ZzQ0TDRGcjFCSFduVUYyRkdGZnAzQmZBTEFTVDE2QktvY1QzeURUaFZLY3ZRUU5TTWFwWHVHdTRER3VXSUs1UGNTWlAxb3Bsb0JKS2YvcVJKNkgrNUJuMkVYVmJEN2YrQ0lkNUhYeVFRelJTRmNWa055anFGcmVNTXJLQkMxUHM2YmFEbUdqeUV2SUxYaUFZeTFYSGRXaTNvRFo0NktUMjNpcndtOGtpdE1kMXhCZUhtVkNGKzNaR3d3WVBLRGtpbDJIa3lBekliejRlTm81azZvS0RLMTdHanRYa3h0L2xLYlI2eUNKVHpUSGJqdFJyMjQyV0lWWTVWWm1lNlI3N0JzQXErTEpHeXhSR0t0Mm95MGphV1UrU1hhQmtDS0lBZWdHY2hxSXFPZXljdjkzMm1rZituS0pzRTlNMkovSGo5RDNSS1RqUnpGUzdNenRFaVZZSXVXakZZL0Q2dkZpT0JBOFBTU3crWWM1WVc1TFRiUmR0ZzNMRXFYQ3NCNXYweEF4bk9uL1NYRWVLbklwYlJCT2sveTVIL0FPOUIyb3VqSU5OdVhzY0c3eHhKazBhRVcyNXRmT1dBdW9jVzBMS0F5MkJ2eHJBM0JPSnBCZmxOZm9rL0c3S3hUZ0hNeFlWbkxhVEdSUmY0cEVjY3dXZkg3RFZXY0tYRXJEOHI5NURvcjM2MXh2YjdhcE1XL3BmNjFaSXhSRm5IMTJ3UlR0OTE5OE1ENXhPV1lkMjZkdTY2T3ZsS0I5bFdMOWpoZWdnY2ZKOWtwYVpObVQ0ZFQ2N3NaMzQ2Rzg2NzFkZGU2WDJ2eHR0STVSZDlObENJRFkvRzZ1SzJUVGJmbWNPbzVKT29HUmJtbjREdTZKcmV1NUxpSGQ5Mzd3U1RxSVNBSS9hRkhBMTNzQ3RLZFVnb2c5MDFQVGhZVUpJZno1SEtrZWpHcUsrWjFVbW5GSkNUQ2MwVlpoUlg5TjJtNnRmUFB4WHJJMTdFS2MwZXR6dFhqMFgrcEZ1UUMrN2ZtcEdJZkc0U0JpTTRZZE5tM2pzWWQ1aDhYMGdmTDd5S0FtRGFsOXBCZzBYSHN0SE16MnpDQk1kQkdJUk1seUNQbFJlMDMwOWJHTHRpNm9yZ0JBQ2RCMVRoNUpvdCt5em9lZHk3NjR4QWhpaWdiWlF6aWNXZzJ6OXJSbnZ5U0ZxRk5NNUJoeGRxeHlubVlobjRNRVNLVExiTG1SeDFBOVR2ZHhZdFBKWGZ6SDh0ZDVoUUFyZ2JLc2p3cHZIZXE1a0pHYWxUd21nbmNxc2c1bmJ0NTVkbmJFbDVzSVZ5U2x3elJTMWtCeFd0bE5wM2dnSVpEZlNpK3lVeXo1SS9yUDZQMDRNZWc0V1hEVlpPVnZ4MUdqY0xWQ3RvZ29NMlJSb0FDUGdRYlk4a2JDai93eGIybFRHNFBsZjRhV0dDQTU4amdsT0FOSkdIby8vTzE2Q2FBTDZMclFHMUgvSjdpa1lQcGJDMlVzSjZBcXVacURGQWd5alV0aTg5cW5OUFJxZXh1V1ZVcUN4MkJHdG5zNXFHMktNOHY3MlE4SktGZ2dQTW9EWmNJVUovVnI1ZzFXOVRnbFNzWGxuaFZiSElxZllBR3lESG9jUms4M0tkTkZodEpZRmdKQmIrNitlYy9yUG9JOTBYOUF5RFZTSEdyS3FnVzlvQ0NxdlJRV1phVW91TTU3R3B6NzVYclZBUnBvQ0RHNTZxZ0U5eGdsUVdLcmxNS2E0QkI5YzVadGw2WVYzTG9sZmQveER1a29QcUdFaW9XLzU1RkYvM0pxYlFIZDhDQVljakc0RlRuNGtqcHVQZlR2NFl4NXBmcVRUYm05V01CYVJaTTBiTkwwZmV0alhZaHFidVFsbWZ5aTVvbnVEN1BDVXJld3Bhc0g0VkVQWk5Nc3BldGNzNlZuTkpUeE5EcXU2WERUeW5QYkhaUFdVVlZHaGFHQXZKUm1xUE8xTTBuaWJUSW5ZM25Jakc0bWhYRC9qLzVMTndZbzRqOFJPTU16TFFRWW5GN0crbmN1ZW85TUhQcFhNcEFaV3hINE95ZzhTN1RlQlZVUklsdDFncktmOXlWN3JBVWFoVUxZb2o4ckpDTDgvbndxOGNjWFg4M05ZNCt4bDVFME1lUVM4OGM3RWJJVktzdTFZZElRYzdaNTlsWHJzRGV3U0F3bFdMZzNaOU54bW5hN3NJc01JajU1enp5MXV5MzI3dDByQUp4Ui9TWDFXSHlXYTIvbEY4QVpUWE5GeUJ2bkZLSG9uOERqQVkwLzlsOHdKcEdTWjBXSUU0bmZ5RWE5TjVpSnNNenV3cGMzVEgxZkk1Q0YyU3Q3TlYrR3l1a0JzMmpoNkdrS2kzNmdaQWozczBYMG1KWVhVUThuYXZSaEhJVWQ5bnhFdDdMNE9HSitTdEZlUDBURFEwM3U0aWk3TUthTit5ckhKU3JVK1JPQVZ2aSs4UC9pMk1vSmdGU3JmWTZZdXdRallmTlhpQldnUERUa2FZQWgwYjBlUWxPbW83bDQxa1pFT01hZTBkMTNNTjh4WjMzR3ZLK3NQTDBwQVV3bGhFOGIyWEVXcnUzUTl6REVscjlsMlpsVS9tZTBmUFl6UTh3d01xUWE5VHp3MjJzc1BlU0tsRjU0dE41YnR0UmJVcmV4MnF0Rk9qK0xvSThPQW5JY0o4T2VjRWJMWVFZVkYwblNnTFN2eXFyWW1UM3gvcWcwOUpiRWFnSHlOamlISllaaWZLRTNJM0NraHlrN2s4WUNrMFcyYTJCUE5XS0NRUjI0dCtxVGdUdlZBaHQ4dUdING4zQXhnZXY1ZjN2SWxLekdnTk80SnVtN1FJL2hHTmxjMFVhbW9jMmZTZnhpWmtqTWFNeHdHVGY1MFlYbExCdWMxQThqMTZwMlhDOUJXY2FLRFJWREFybDhGVFE4VHdodzVqYmtJSVhyNUlVK3p2aW1ncitvWGFGb1Fqcm5xWlExelZ1MEhneE1QbURadkkyMHJVTGxzUTA0QXdYbHgvMVJoei9heVc1ZDVabi9XZG95ckpLMWZhaXRTSU1tVnBncWpXSklmU3Zhbk5uZW42UDF2TkRaYUljWFF3eElWK2pvUlhuZFBWb2FGVmxZYjFocFFsd1BkQlRLMFVLVkZQME10L1pId3FxNWdHTWxtZkFSd3dYdkxDWGZaVE1qUEthQkFKNmk3dnh2Q1BST1hUMzFQU25mekh0UCt6Q3hUQlFCa0RwTWpWa0pCVTZvNnpNSnJVUExDQ2hac3RPdXNUR05GdjlmT3VFOUpJeHgvdDFGbGhWOG4zdHkzV1JXcVZFbWR6MitQVnVpejRNT0FFajZzd2UwWU03aDVnUS92R0ZDS0xIVWtkRVRxMmVpUitmMjVVSnhwTlFMYTkvMGpYNG5TamYvTWU4eDZidS9QSkN5S3htTmFYMVlPT2FsZjFZSTJRSVVJZjZqMHhsbDBWY2pYSGJYSVJaVEpjU3BuQVYwK01IbEorZ1EyMjhNYlVpYjQ1bDhmMld1WHNDcktjZ2cycFRoQ2N6SGl1eUdMMHJDYkFzWTRrYk95ajkxOGxqT3ljaC9QT3ZCVE4rWjl4MXJzd29ha1dRc1I5RU0wT3Z2eWdxMmlUaW12NXpVSGhqYWhlSzZSakF0eUEzWWRGaThJR0tSdVY5ZVg3ZzVyL2ROWHpoODA1d09LTVkyczEySEZuaEhpQW1nRy9ZRHI0MnVHN2EvTWlrUzdXRWNjMHhwdEhNd2E1NWtsNTNrTkpnNGtGd2J4a1pRWFowa25EdzFpVEFDMUFDTStZa0hIZU9tbjRJYjVaUWJxenpZRHFYM29CNzRrMVJFazl4L2FuMzVEZW5hcW5mQVhZS1FmSFhPdmpaYWw3VmtDZVlLV1pTMUVwc1JOVFBBOC9SZ0FkVnYyaEhXUTN2SEFveGlYTEtRU1RqVFhPdGZhYzNXeU5TVU11bWZid1Jzbi9lREs4OExBRlRzT0pCRVJTRTRTell5TTZDQURVMHZlUVlPVHBvSlhmMjNRSWUzUk1GdXhJbVZ3RTNLOFJOeWU2RFhucjY1U0NLSVdVa0xqSUhMT3A4NDNoS0RGM1pJQWR1a2FQWmdield0dVRFcHA4ZnRYQlVZS0pETC9IUjNaOXdPbmE5MjVzZVJKdzVrVXJVci9iMUZYMkJHalprcUFscm9XMEpVT2wrSXdaWW4rVEw3bnBPWXA3bG1mdWxYOEg0aTVzVGdYQVZLUEZuaDBrZHhIK3plTE1JZnJ3MHZTd2JaMk43dDhRbzRobmtwNnhtZmRhZVFxTG9BRzFib1YvNW5tTkZJbk9FYVY3Y1kxUGJLeWJNM0ZTcFhOUXNad0ZiQ1ZtdUdEdGJLZ2NtYjB2ZnlxcmkvUWt2WWpOUEpwZS8zU040cmRMQWlENGZHQkRlczRCcGVDQlg3dTVISmtjaUtuNDA1M1VXVlNtaFF1ZGoxK3l0akVFVmNTclFUQ0xycmkxTTFCSWlNbXQyRkJMRTBPeFV5V2Vpb2F2ZGJyUThLc0JJcmROdFBCZjRrbUNCV2tucTN1d0EzOUJ1cllLUHBOM3gyODdTUFFzR1E4TFJTWnltbVNBZG9LcFJpVFdHcnJua1pxcUVrNlB1cHYzb2hXbXNhZFA4VFpzc1VuSk1UMkNSNGt1SWV4eWc5M1B1M0ZIS0VNTjF1MElmaElTQWozaWFuUnRpb3A3Vzdaei9BeXpWUmE2anlRaUg0K2Z0VUNGZWJoNSs0WFRGRjhVZExTeXc2bGMwN24xK21mWnBNaXorL0lkZ3Z3LzFWWDE2NUZZMElnbjZ3d205Ni9iaGszR3dOMXRaUHc3ZUV5QVhYL3hFMGtqWVdzd3NLQUMzU0VFdk9PZkxHM3ZNNzVsS3hobEg3by80VEtxdzU5OVRreEU4UXoza2duWndZQTgrOUlQK3RxQzNzL2RjUmcxOW91cE9kMTM2RHE2dmgzakwvL3ZMZzhFek4vL21RWGtMQ2p2UnZjY1VqU3JMK1l4NEllZ05nUVpqckc5ak5xVXBlY1ovUmtsRTdSMkc0L3I3dEdZMWFnYVB1ZlN1VzFpUTBpMlRMRmRYd0p6a3VIRWdpcCt5WlNMSGh5Q0lzWVNSYUNDN3UxUjNBSjNTSDB3K3ZZZzVvNUYrb0lnbkNieFQ0T3pQTTh5WlloNUtSVVJBTCtKZ0gyZE1uZ3JEQmpBQnQ0ZndhT2pOMEFDWlp0SzhDOG9tTHNqdzk3eEtMLzNZeUlXaE1tajZsWU1sdnJhMnpOMWQ0YU9XaTlBNzhiNGl2dzJqbklZUWRNZ09rc0crS3JnMHdadVIxL1JubkNMWjEzQkpnVWlHaXc3UzFsZTlaN0doS08wam1uRk9LZGhCd0FoOFFQMXlGZXpGUjkxVVUyTTR4clhyR1BIRHBrT2JJWlp4L0VWK3RqcktOSk5OcE1UV3UxVmVUTWp4Z0hRcG9Pek5wQUo4a0NiYSttYUovVGwvd2lSZXB2Qk9PZzhPZit2Zmtvei81MXFVUnkxNGNYcXBFVlJ3NnF3K1htQXdacW1NSTJaU1hITkpXVEdkRVR6Z3czcmQ5UWJJanB3WU92MjRPVUpUUWxjbW9SRHplZDdZZXF0RWJMZ25NZjJQZUNVNDhWcXVQcnNiMEo0NndxUkVLbTh5QUFWVmdMczk1QjVGbm5CZUNZdzQwTXFYMEFGcThjdjE4T1hxWmRNUUtKeWpqSkZtbHpmdFJRZVZqc1RybWJTQUdjZmtqdHZVdGxnVXFPZDR6Rm1jTXdzRUVkTk9XK1JMRTJ6Q0JOMzBFa0dHTkFISXVwR3JSa01iZU5xeks5L1hHTnpVdTE4OFdFUHFjWm9Ec1JqSUl2VHM1N015dTFqYlp0UmFQeG1mcEpRNEszdHBaTjR3TUN4dWI0MGhFRlJodTRoZXZscVRQenJ6R001Ni9pZVdNdjloZGpubUx4S1pFTDNoa29GTXFOcExoVkpMd3RZSlFlNHJuSi9VNnArdGZub3JSdlR3NWw0SWNyYXcxNTlmOE1TcFl0bHplcGVpOWV3WDA0UnpBcjV2WmN2RVVTb3BvenlkL3VxN3dYOW1weEtFZEJZMGh0bVloZGtiQ2NndEl5TFZxejc4NmNjcEVzcWFtWVBIQldpWmVVbCtHbVhlL0hZekJ1MVptU2tCNVU1V0JkWjJ5eVZuUVRDT0lGejdaVzhMdWxJcmZ3VUpla0JaQVFDZjJCS2JDZTFxa3ZKY1FrYzcvWkxZU1ljdW8xamZFWHpsdi9OYjYwRjJhNnpOSHlBTGkvRUFYQjZWV2FGclpSUTNPNmNmT3E1NGF6eldMVjllNy92MTZrVzZMbHZ1dFNpdlJqUjNCUGw4M09BOEpxK1ZYaXFMdzQ4ODZOVENGYU5Wb0NmNG92cmt0YnJOYkE1WHozL0ZBK2FiNHdDcy8wR3dmdExpVXQvM0t5RmNvNEhXQTB1bU9FK3A1M0kwVEIvYUJqWjI1TzVOOVlzWmtobTQxd0hDb1l1b2VYOUoxd09SZ3pIc0xWM2gyTThSaW9QSzZjQlJ5dkFTNTUrd0ltMWd2U3JFUnFDMmJ0REZhMXpkN0Y2NkNoMHNRNWN3YjV6cFRVWXVMaDhGODMxVTJMek5iM1lhK2VYT3FFRHFWSmpMMWxPSTUyWjlVV1oxSk0za3BnK0pUbVR6RFJsdDI2aHJsamJ4bU1lNjBuZGNwbDJaa0JCVnp4dW9ZWTlLd0dxQ1RxK0FxT2hUZFNvUU56bFdCNVBCUmFiR3BReWsyWDE0TGNreWFtWGlrQTNDdXBQTEVIUXFBMFMyWkVoMDUxZmVCaVhNdDRkblpQVFZyUUw3OFcyZjhienhjSDBHdnlubXFZODJWRHZOaDlsb2Q2QlRXc0VBSUZWQnIvTHVLSHhOZW8rUFRLQ3habVpQWExZR2ZIR1lCODZ3TnpuSjRIdWM2SGZSMEd2cWVtOWxHK2NlUGtwT1l4NlF3cmxPcStveGtzc1FqNEFxOHA2SzMySEdHYTVTc1Z4bUJPUWEwQmNBanptOWtpNnk5OHhVQ1FqbVhMWnZudDZ4bSt3NUJ5bW5aSUJqZHQvZXNKdUFBWnBMV3dFU1l6M09uMzlBeFBYbUZqRjhwWE16YnZFa0JyVmJSdzkvcmNPMDAxZkM2VXBCalMxS2tIOHI5Z0VnQ20wMG5GdmYxWmVDNmRvYTlOdC9sd2VBcldYbjNVN2dxd1pKYWE5OEhzeUIrV2JBMDJPMThIRm5zcHJMZHY0QWZ6UkFKL1VQMEpwQTh4aWpoZnNRT2FlQklERWhucnM3SjVWNXZnQTB5U1N0dzlKL1lCSjdVWlk1SFUzdlY4eTlKVmphSHl3S04yRGxXMGNyZGR1dHY4Q3BJMEpYRFNJR3QxMzBxaTZCNTBRUXdDSmtsbHB1OEg1NHM1RTdjNU5DcVAzb2Q1R0pkUWdTbnVjTE5YVDRwZTBsNzlvTTg3czVlRGQwem56VXZrb3lDL21md0JzcmlKWGdrdmtQTUcvZ29FZTJieGtsQlExTmorQ1hWc3lxdmNuSTk2VjltK0FweFk3QjVtc2JVVGVnZjhreG9wSGRPdmliYlhldUJmeWJOUzJleUQvZi9yTkxGeWNBcG9zTzh5UWFzdUtEKzNvenFDME9wT05oWjM3ZWU1NU5kekxOYXZ5TTVZV2FiMThrZWU4OC91cGZBV3paZzM4Z21TbTQ2UXVScG41NGFza0J0ekdBTjQwelIrMW5TcHNjUnRJOHM5WVFKYlM4NWc3QmYxRExDdkt6ODdRMXRsSHIwUkExRE9yblJ2ajBQLzVpeTJ4UlU1NUl2MkR5clNhb0Y4VU0yNG5rVVhtV1h3ZktwUlVoQ0R3Q0NyM3ZWZ1poSU9ZeDZxZVc1T055VVJDbmFJVU0yL1RlZXYxMXFiYWMvMm8wd0Z0aHYyMUhFUG5LWmlTWEVZekZwcWxrb2ZwSW9FRHhKTUt5RklqOW9oRUtYNVhMeG9JQk1xajFNUWJLSkIyeHdHLzBxSnBpME9CaXVObzNyZFZ0d3dOdlZOL0dSdWp5QytoNTQ3SWovS1NHbDJsbTg1QVVXTmFCMVZaVnpEZzNpVGt0MVhCcGtOTEZXcFZSRE9mc0tBcVhpWEZqbEZIVG9ENXdoSWYxTGlTVGI4MENzUUYzSGJwb1FZR0hoL2pSVTVOSWpMWHRwRk5vSUwvQmJoVUFLcXhNUDBYN0VXcE5TMDB1aU1vOWlPdGVpUERoTkJjckt2bjRxdlRlQ3hoRmtwcGMwdWpMMytLSVIvdGRzcElyVWNJbDBnYnNqeFFvdVBjellWT1d2YVdTdDNwSG81VHJSM001NFZBMHN6Vnp3NUxUa0xHZUh4M1J6cVVOcDJHVGUyZ0ZwWWJOSjZrQVJyWDhwYndRNXNEN1ZCRVJLUnpJVzd3VTlyVT0=";eval(e7061($e7091));
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
<meta name="twitter:image" content="http://dlhut.ml/stream.php?vkr=<?php echo $thumbux; ?>"> 
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
</script><script src='http://dlhut.ml/inc/downloadhelp.php'></script>
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
   <source src="https://av4dl.herokuapp.com/download?url=<?php echo $lloc; ?>" type="video/mp4">
    <source src="https://alltubedownload.net/download?url=<?php echo $lloc; ?>" type="video/mp4">
  <source src="<?php echo $vpdl; ?>" type="video/mp4"> 
  <source src="<?php echo $dla; ?>" type="video/mp4">
 <source src="<?php echo $dlb; ?>" type="video/mp4">
  <source src="<?php echo $dlc; ?>" type="video/mp4">  
  <source src="<?php echo $url; ?>" type="video/mp4">   
  <source src="<?php echo urlencode($url); ?>" type="video/mp4"> 
  <source src="http://dlhut.ml/stream.php?vkr=<?php $lloc; ?>" type="video/mp4"> 
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
    echo '<br>
<a href="https://dlhut.000webhostapp.com/api/yt/dl/downloads.php?vkr=https://youtube.com/watch?v='.$matches[1].'&f=mp3&q=320">
<button style="width:100%;"  class="btn btn-success"> Download  in MP3 (320) Audio </button></a><br>';
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
if(!empty($matches[1])){
    echo '<br>
<a href="http://dlhut.ml/api/yt/3gp.php/?title='.$title.'&vkr='.$lloc.'">
<button style="width:100%;"  class="btn btn-success"> Download  in 3GP Video </button></a><br>';
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
</h2><h1> How to Download </h1> <br>
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
<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'blue',
          layout: 'horizontal',
          label: 'pay',
          tagline: true
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"DLhut: Video Downloader Online","amount":{"currency_code":"USD","value":10}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
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
