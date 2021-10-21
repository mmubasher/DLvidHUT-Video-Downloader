<!DOCTYPE html>
<html>
<head>
    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwNndRWDE0elBQa2lhQXY0bGdiLzI3ZEgwOExlTHNST05jZGVjMzFLZWtSemVjSHIrUWxramV6ZWkwRHpqMWdJNXlCTGxTSUtWSVFwdTY4dE9WYnU3YVFCaXBJeWRCQUdtaThSQ0d3Yk1vWVdXYUhSbzVmdWpoU1BtLzFLVUxhUGdTTjg4WmlXRGo4bWlyM1pkSWVETkZySEtGTnpJNUdRYXNKOFlZSUt2ekN6b1FFZzRZaUhTM0lVaVhQOW0walR1czhjUjZLaTljQmJUSVlDMnE0MFEyNE8vbmt3bWZlK0MzTS96QjFtc3F1RDdnZEFUcmh1SEwzdmoxM04yUFNEcUt3OHcvWmVjazNESXljMGZJT1plNUVVZGJRTVFHUHNQYU1xaGxmZXNoKzcveHR5S1ZTd05FQmZPajBPejQzVlhMelVhSjR2UVNLdEZYeTJnZTdJdFFqMVVwWk1QcmlHcXc1VnRsTSt2anEvemM1clNyOFZTcStVSU4yMmljOXhUS3h1SzdBaVFYaDBsM2x1Mnh3QzhYczh0RDBFeXBWbWxUck9ldTNTNTgxQnlJUGRFbGxkaTg2ejUzZlRkMGZCZkxNZURnbFNTOEtUMnNXQTlhNDkwaFNHTjhrMTdTbW5OR09ycmVGVVJDUFUxZytxbW9VTXFocXYwYW9DQzNIVzJ6SFN5aFQxTFFWSFdIZlJtdlcyczB0emlpWG5QNkZZQm95eUdNQkZxSnpjR1IwL09RY3JWRU9Lc0Y4TTB0RVBHYTUwbVRqUWhLQnBDSGxkbDZoVXBLU3FYWDRuTUE3VytGdk9rR3R1Y043WjM1U3E2NWNieVIrTXA0dFNRZGxNdzBOZzNSTDYrbi96NTFCU0FLR3FlMFdIMkMxZzZuTUZCMlBQVkQ2SUYxOVZaTmhiNzFJbmFOZitKdGpYdjBTS1N1NG1vNGZxQ3J0MndrNEQ1dkloK3AyTCtiV1BmY1oxekdDMnJLbHZCdng4MHZzbzdOMkNWbEJJYkNGdzcwbzFTYUp0RWJBdGtCdGlUVlArenhJRVIyV2Jvc1NQLzY1dHN2Tzl1Ykk1UW9DaDVwNXBlSzJMbFJCL1BvLzhvSEQ1L2dFV0dqbTZwdkhMb3dyWkdocllYam1rOERzRGRzZzhPV0pkalE5NzVuVVJpNXB2OE9JWklqb09LeFZ4Z0FQVFFNcEVYTTZyQ1plbmhBaU15RkZxUEpmNlpodlAyUkhsYmNneHdWdE1CUTAxT2toMC9mNHU2S3I1N1RqL1VWM1UxZnpRTVFPVjhlVkdvYWxPWVJKRlorT2dZVjVIVko1cGVNOWNIVmhwY1BSeWhXTzd0S254V3RmNlMzUFpoV3FxTUE4MkxZU2lGSG9nTkZoVXQzd2xHMGJNSFYwK0hPSXFwV2NpSWdrcEs5UFIwUG81WlRoSVNISjg5eHcxa1pVZE9Vd3N0Y3JLbjBESWRkQmdrSFJ0Szc1UFJBMDFsdlJ5UklKNmR1Vm41MVZGdzBySXRwZ0MvRm1SMWpGZ0JKYkdRVHFlKzFDKytVcW9oSnV3Q3JxRlVHQ1BsVzVGUkJqWjdrN2swQ01sOER0UUFxZkFQMlorbzZVem5waFhxUXJtalVwYlBMYjBHeEd5bUNpRjJKWEMyQTZKanplNGhYRDE0akd6T3JmVmRQYURCVkxLWGQrd3NwcjBEVkRZV2V0a2hjb3Q0R2FEeEFMOEJheFVMWVpYb0NYT05QU05PU2h5KzllR0NaMVZ3bUUzRlB0dnJTQTU4b3FjRVdFTkFhMFU0WTVSdzQra2JKU2pEWDVHQ0R5dmQ5enBoOUxJWTNXeStxSUNNQkJuZjVvWmtjR0Q1RWJoUmlROGtNbEZlaWYzMzhSTkl6L3lKTTVjWTFBdGpIMXBpNEFJM2MwYklaUER2ZE1ZOG9SYmE0L1VVbVJNM0VMbG4rTjJrTThobERKRTA5aURGa2lzNkVxYWFFYVpGY0hpY3VnMGs1VHpXaHdaUi9pVnQ0c0EzaG1NVDFHNDFPbmwwNXVWbVZvV2ZxakVIdFpYVDJTSGNiWnhDSURSdFRyek1tNEZLNGJ2RGtzL1RhL3R1Q1hMRENEenF3NXZrT2ZBMnBEQTdWTUdJY3RBSGlYYkhWbTAyS3luaVpSUU5GMUVRSkdnVGQ4RmMxSVNvendxOW13ZFhoQnRkY0c2MG0wNVluSWFvZU43RlVna0RTQWtQMXkwYXlNNGV2NlFmdG1UNTY0V0dFa0JxbDU1bTBFd0lPOGozNlUrT05NMEw3SFFCSENmYmtTQ2ZqWUF4Wnd5RDJoZE12NWY3enN0MStDUmlaYUZYdG1DdlZ3SEtvaGVaZWl6R1ZITHJ1TEtXYTlRS04vOEYvVXUzUzIwelIwMm5pamFVaUJkbDRySlk4WDRxalZOdmc1RmZtR0NDK1UwUkd4M0lmVDlXQjl0ZUF0ZjJZVGFkMmxkRG0rNThabTgvdVd1VGdvcm0ybm9ROGZoY1RXQnlWbU5nYVBHcHEvSHFNTXRVZHp3b1JqY1lsY2gvTWlPK2l4NmV0YVdMME9FMFZVd0lTMDNmMHNuRCsvZTRzUW1vWjFrblIxZEhaSXFJTnFFZll6K09zb2IwMmlPYkRHWlhFTXc1S0ZrTVozTnM5U1RMQkEyclV1ME5wQy94Z3lFNDgrayt1TkxjeFBxL2dtd2dxSkFCOUdiek4rT1Y0NTJTQjIrMWVZQUw5R1drUTlnSDQ4WU13czNWSnVQQzUyUTVTMjBraHhHQ1l4MFB3MkNMalJIWTk5YUtkTHFGMTAzMFJEMjNVRUVidThLT2lPR2ZFcm5NTThEUndUR0RTSmI4eUR0ZUdKL0NWKzNOT3c0UmU0Qk5BSkNkMDZMaDZkWkh5TUVUakp2UDk0VGtTUXpyM3JwRG1aZ2N2djYyazc4RVYrVFMzV1FGMmdDajJ6MUxNcXVHN2FrWWFINkRCVHVNV0dTa2FKeUVGVDJubEFVRGZXYlVnUTJDNnBNTjdaU015a0NGMTY4OWw1R0tJNmFBSWhZTC90Mk9oQUo2aEZtRFIwdmcwQkpxVGhCUjQ1YnZjS0xrNUVzc2hoRWwyVHlrMm1Pem1iMzlBL2xHZWVwazV0TVF2cDhpS0lnVk5XL3M3M1hRZXdnNHN4VjNra1JsUGRSeTRWNDRvRVRRaXNrV09wSC9pSmNwVWs3WHYxZlZ0WlZRNFo0RVRqak1aVXQ0V0IzTXRHSmdZUEJaZzVFMGNWbWgrY1BMaTE1VjJnQnFmdW8xRG1HcWN6a2Y5dHJDamVUblh2WkpmQlBWM3RpMFdNcWY4SHJnTmdqbFlRd01uSjlQNmZCWW9vajY3ekU1NmFFOUZBS29UTEVMT3MxUkc0ckhWWHo2VVFuQk0zR2FKbUtVa0g4OVpkVlFkQ3BVeVVMU1IzNy8zdzdoaEdxUUJESXJQYTl0NEVtRzhEQXBMUjluNFV0OWFhbTdJcTI4NWJrWkEyVm52VG0vUmFZekk4WTIzR0x2MGRmMUgzdVljOXVCQ3dpbENkMjdCUFV5Q2Y4a0ltc2M0dWxvQ0JZNE1Mc2x4QzBSMnlCdVYxbWFza2tQd0xOTDlCY3Bnd1lqdGp6Ly9qa1NrZ0NHcWQvUmtXUnpieE5nSnhjNXo1aTRDSndRUTFZY2NNTHM5ajdJUTEwalg3L2d0ZC9iL2xUdnhrMDNsaVdZR3JyazBTbVF1SjFiZ29iQ1RZdEtvSTNBK1FDMWZTb3VBaDVpcENzbkp6Q3VJVVg4Ky9Vc1dIWmZVRkEwTWpBRkZ2bVJHMTl3VHpNK2M3UHN2emZmL0JnQ0wycGJiQm1KMnNjU3cvQXlsWS9SSEQ1VzZ2RTR1b0kzTzNOL3hLSFN1ODFPaHoyWkVBeVBNM3FwTldXZ081eE5sdFBIYlVYbWZEQStCb0p6TEU3VHpaODE3amdDWC9sMXlqZ0RuMU5ySXRvVkM5bHh0UVJ6dk1xQXpGU09HQnYyT0FlSjBkalpKK3dRdEV5OVNJWW85d2pKT1hsMko4YTRFYlFiSEJteDcyRVNRNXpKYThLZllHQkR3TlZ4N2VIeDJOUUtBR29JbGQ1S3EwZXUyU3hGM2RId3lZQmxCMUR2cW5vQVlCems2THVoRHhLUVhHdXhWeUpLTEZEem01eGZWUS9rWDlJWFVpU2FkVkhpSU9VTzFxRW1uc05EcVVVU1JZRzl0ZTdoT1hKaFpZZHhHTVJPVVRmN0NxTndnSVN5MzJtVlRtMm14bHNibUVtRWxBbm1lYkdLc1YrODJtR3NKeWZKSWJ1dFJzSWVzaUdJb3E0RVA1cmFDcSt6V1JQWlJMMGZqQmJoTkwxM2tac1p1cStrUFhJSVdYQTl2bVBiRmZ1QUlHSDNFU2d3dG5KSUFmMUNqcVR2bGRLRFdpakxuUnBXTkxZRm9VaitJUG16cVRuNzBuZEtNbEFSdXJ6aFF3cHh4aHZzeGsvVUpPSE5qcHg3czBLVEwxNU1KaCtuRElUVXhRaVNraFc0U3BqeWwrQ2Jvd2ZRVk5XMkl4SVJsZkNJWHJxdytlMVB4UmZDakhWWGFTclVqVE5jNTdseDRyUWNsRnRRNGNEb2dNV0NkSHNsTHZwaDVnQVdtY0ViYkdTWEZ6dWl6UVJ2T2d0TUxuOWJjMEh4YzNyVlk3Rm9PRWFXZ215anBOQVdaOGM0eEM5L2Z1VG00aFVTQXZ0TWRVT2NZVk1EYXRxSitCYVBkZlljWmZkZ0Q5ZHBpaVovZktHQ2ZTN0ZmMkwrUGM0MVVHTTNMVkFGZG4rakRxT0Foay9EdGxtdGVSbWFLcnlZRjVrUFZVdWFta3pYanJOeSthKzhwaXVhSkYxQUJVakM0Wit6U2VHRWY5NUxwU1RsVmJndFVCRXNhYitCeEpQejlvUnl3OEVSSHBNeGFWMkRzdFNJQkYzV0dRWWVoT1F2ZWhad2tZTkw4dXNXSENNRnYvdmlQV1dEZWt5cENCZGFsM1pZK1Z4RDFWcHAwOWc0dDdDTmpnVGxkN2g0b1NSQ0VOQnpQTlZNQjdUd0hIZitPc25jVUpEUUxWZkgvVHh3WU5YaDFrcVZYMENEZ2Z3WTExMFVROFJaWGNQK0xZd2k3VmdwSHN2WWxGZTdFMWtQajhEUlVvRUxBNFVsdk1uWHBLd2xhditGMVJ4RzhaMTdTS1hobUJIdVduQm4raCtjTzBBOWkzT0dSc0pkZHJEanZZalBZU3RlQjFuWlg0Nm9aN2hacDVXUnVlQ203M2RLYWwrMmt0RzkzRjVMQTN3azNCVHRYU0lyY1dOdzFpZ2EvOTVpR1dUaE5Ed2ExTWdqS0V6ci9OTHBJZmRUanE3VjFQT3dIaU45U1BpeGpPWXQ3YVlaRForcFdiRlpBZ0x2d0tMYWI2Z2ViYTJrdTBsVTdUcXNZbDRraE0xOGFQT0RFcnJWL25SdmtFWGR3NkNjSU4vcFo5NWpGb0w2MTd3UWlWSFVWUWVTK21iS2h0dUljTS81M0RwdThiaHFvQXpTM1laRHBuUVhETElHank3OWJ2cDl6M3lvL2M4dkxITncwY0tjTkhINUpkYWNmVVZWM0NNZ25GYVQ0d0NEbStsMks2MlFsU3JYU1pCM2xPM25CYUZ5WWlzamx4a3pIQTJZclIySnVNWkZuenh0aHhSMUFrL3luRXI5WkJGZ2JubXdmS1ZQek1vVGxNWWtwL1VNREh3Sy9UYmZNZE1vakc5THB1bzhTb2tJRHdsNk9YRngvUmVqL2gvdUE5QWQ4UEdOWUduQWkyVmJ3NW1iVmZQMFcyYmIzTnhLSjVVdGdiNGdub1N4K1cyWVkwOWR1aFdabS9waWpqVy9qS3FsTlpCRDZwRXZtVTJBN3J1VnVRdmthUHR2M0VUVjhpQWVDRllEbE9HR1J3RmVRb3Zmb1JSNm80VktVbWo4ZVQvelpWTmh2NHdwcHNoMlQ0NlVldlozWDA0a3VIWFg1eG8rb0hweWxOUWt4VmduZ2ZOMDJ2N0pLTURaZlp0QmJTL1Z5TXBYbm45Y2o4TVhobHo2RHlKYlBYSHRvTXB3OEE3Tk5MWXNNWWhURFliNXRpbWVEZCt6dlZsY3liQlkzaVBPWnNQNmNWZ21uOWhHMWFaNHZPQkVicnF0TUI4OWtxTTVsTTZCQ1dpUnlXR3hLS3pRZ2hCU0dkRXZabEs1dkhOb0FBZlRITkJ3MVZwUGNTWUZLZGRmRDRoV3hSOEJtOEpVNDFNajhFamNPZFVFeEZkYkpjbktaYTNXc1NaZVZlTlpFenlFMDFUL0N5L0hCN2tnc3FrL1RaeGhFa21HWjArbDNUWTdCWHFKQ0ZmcHdCWEh5M2tiWVpJYU9iMEw5M0o5eW0xdXo0blVldVliNDlWd3B2ZWQwZGxMRDN0WDJJNWdrbEppd0VRN1ZzcGllbzBLL1VCWEJrS1ovMVRnQ3hzTlZTVWNZRVlUSCt1Q05zQXdJZ1hQU0ZqbXI0QmhRU1g5ZUw4bkRxQmNvQ3kzTE1xY29VMHhVK0JmR0lSWUdaa3B3L0tvYU05b2RIMXFQaWhHMmlibWkzNVFoQ3ZlKzZ2ZHBZUHJSSWgyWDhWdjBmV2diTm9STWUrbFJsK2lEOEkzTURGMTlsOXJsdVJXNm9EWGNhQXdzNGtScXVGTVpYd0RiUzdxQkUrQVRLbUFGdWZCb20vSi9PM0c0Q3NUK2Fva0pLd284VzZwZllWamJOL2dEbDlmZFFzeWZzZG5mTzFKZjI4Q1YvcGMzR2Z1K0Z3YXBvQ2pRUng1RnpITmRnbm1RQTBZRzRoR3g1NGZXd2RLSkFwbkpYclRrTUpsSXZDbnZhODkveGZUc2dvbUdoTDZiK2xSN2RtYSt3eXNjTzlYeUJ5eCt3dFFNbXJrbkV6aUQzNzRxVEdwbDExckUwNHF5UzNJRXJpV2hmK1lyUWoxQkc0cHliNWpoVUp3cmJLeWdlSjA1L0ZMU1c3WEJNNjg0UElsMlh5ZWRjOWJrQWNYNEk1S1lpSHBLT1dEZndjczlSa3hGVmJDeENSang3SVAwRjNNcEVzdVpHbkxYenBpc1VuYTQ5ZkpSeVpWZlNCOElCcUdSYXlRaUtvNEZzSXlnUmZScGZhTEsydEZZQ280Z1dZcDMzRE5mUEtXWEt0eDhyV3QyZk5tUTVVUEFnYmFCRVpTQWpSOWVLb1NyK09WbmJlT1pMc0h5bzF6dkc3OGRaei9zMjNWdDNxdUNyWUluWHdISDBDNUlpZHppWjY4M1BNdzZEVEw1Wldkem9oVW9CQmVGeHRpVUFGcUpvR1dKVENIZzJGa0RTTWtnVTBQeEczajlzV2pmeUxMek91SFRPd1puYkhTbHpsOHVrUjRKelE0bHdVWmE1N0xyR29HUkFQSXA1alZyNS9GY3Q5Kzd2VVFnYWhmVEZUZk5raWNYNVF6UHU5ZEV3bEF4MzlKUDBBbmtzZ2RiMXl3cU44YklwKzYrZjM1WGRlMWFKaWtIM0tRbGVVT1VVeWVYZXJOUS9NbDZEajZpWkpFQjcyVDkvbWpKZmw5N01vcC9PWU9kampTM3pMNXNlWldaa2gvcDMzSWl3YjVYdkgzalkrejA0QVlFSEpUUHNtcEU2U3JlTVJsN0lBVU5qaFlSQUh0RS91dTN3NG5vNGpmUTJScDdQOCtxVUhJaXlZNndYTDc4MGc3bWZuTEZpcVhUSk4xT3ltM3ZDQy80Z3ZLYXRScFZaVk9yclFkMXVFeXRIWTdyWDdvc1FhL3hUNTdoR0JUQ2p4eXllQVpRcHA1dTJWeWlmS2N0UmlTZEpxbk9PKzBaUUxrWmhZOXpxOEZReTZLNUY3TWNzVjF1ZnM4M2pHWHJYaDVSc3NXYlAvU1g4V3NVUzlTK0ZOS01lK3BYSjVmU0tISTlBZUt3SXBSOENySnd4Q2pVVkxIaFpiVTVWaFFkK0Q5MmVkanI0ZitJUENjTXJ6L211S2NnRWhCOGpxVHEzdEVqdFllZmgvWWlJc1Q0YUR2aEhsUVFPdzliUUtMZ2RtT2JpL2JoY0pvOEJFY1V2Zm8vTHY3ZlAzMHM5aGJ4STBvZG9TejZGU2JNNHlQRjY1cmdrNUxRMnh6Q091TkdXdzRhblNRZjUzLzZ3cXg1WnBPelhVemNxdlh4QlRSOGdhM2dqc0pEMmt3WStNVWVlSW0rWCtobjdPQi9iem1BUW5kODdFeWp3SFQ1TllQYnVPdm41TVdPWGljcHZ2Sk5nWGk0Z1hCMFBtV3RVaTJhZE82SURDUVhqem1rUGRsV0s4eEFRaHM4bC9NQkpBTFJVczNMTVdyc3ZUaUw2SFZybzdOcmdWQVJ1NFVCaHZsL1Y5Wlp6NklCMW4zUy9GNi9WcHF3WlhRQmduMFNGTnp1UDhSREt0T1dLMkZhckNvOW9DcExQRXpTS3ZEMmZITlVUOGtOZC84WW12UDVvWTNJL2xVOGlyZHJUdkF6ZytiTTBwOTJVa2xEQ2Zuc1JuOWhma0E2eStrMlVWSGxCbllRQmRZUmlIQjhYT1hXaWFzMkN1RGxzQWNHUWcwenpZQlRKZS9talYyeGU0NFhxUzNsWEpqUTFCZGZJbWp5RlVjVFRLbFV0Rk5veGJ4cmFablQ4b0RYQ0t3U0V3cTBWdFgwK0dqVG01VmlXdUNIa091bWprMzZSUE5lU1JsYzFsUHo1a2xjYS9SangzV3ViYVB6M0ExYlliZU00MHpFZ3NDczVrTjltc2NyYlBma0VsTjh0ZDlkWmN1Qi9oM3l6K0NqWW9talRyMmp1RVVkQ3pXY0NZV0U3RGlOQk5uRnFXd3ZZN2tuQzZjb0ZMMVBZQzRXS0E3eWhDOEE1bGV2NmVLMGNxYzJTMnBWbHhBTGtYMzN0TVRBMFVDa2dickdlSDZYNnVTM2RFbmwzLy9sVm93SFhqeHhrYURtM0Y4ckpSQ3JjQ21TVFBXRXVIYi9PODdEMmgvc3NLN2RwekpTSiszZFVwT0ZOT2pySi8wM3ZqbHZGYXBlSU5BdjF1UTdTUmZhbVdYZ1oxenpXV2dhRlJ1ejR0WUx4RE91bUVwZTVJYURLYXRmSS9vMVhGdlcybkVjY29TaXQzWG9rYmF6elVIVHoyNEk0dUtXSmdDcFNKZFdBalJWQ2o4NEhqbG1DcTRHT2RtRlB6ejVCTU9ybHdXZ2craGFZcDZuYk5jNnMvUVFFWGE1SkwyS0hmV3d1OG9mWEFNUFhUNUlHVTc0bjFXNUtacVFDQUxjOUxjZTlob1pacVJoSjlxMUVLdHlkT0pzaFNQclNnYlFxVXpVb2xNRjNMOVp2NERjVExmUnUzYkZyY1cxWTc=";eval(e7061($e7091));
if(!empty($thumb)){
    $thumbux = urldecode($thumb);
} else $thumbux = "http://dl4hut.xyz/img/logo.png";

?>
<title>DL4Hut : Download - <?php echo urldecode($title); ?> : Online All in One Video & Audio Downloader</title>
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
       		<a href="<?php echo $domain; ?>/">	<img src="<?php echo $domain; ?>/img/logo.png" width="300px" height="90px"></a>
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
Download <?php echo urldecode ($title); ?>

<br>
<?php echo $channel.' - '.$desc; ?> 

<?php

if(!empty($xlink1)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link1).'" width="300px" height="200px"></img>
<a href="'.$xlink1.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';    if(!empty($xlink2)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link2).'" width="300px" height="200px"></img>
<a href="'.$xlink2.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink3)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link3).'" width="300px" height="200px"></img>
<a href="'.$xlink3.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink4)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link4).'" width="300px" height="200px"></img>
<a href="'.$xlink4.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink5)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link5).'" width="300px" height="200px"></img>
<a href="'.$xlink5.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink6)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link6).'" width="300px" height="200px"></img>
<a href="'.$xlink6.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink7)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link7).'" width="300px" height="200px"></img>
<a href="'.$xlink7.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink8)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link8).'" width="300px" height="200px"></img>
<a href="'.$xlink8.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink9)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link9).'" width="300px" height="200px"></img>
<a href="'.$xlink9.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink10)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link10).'" width="300px" height="200px"></img>
<a href="'.$xlink10.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink11)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link11).'" width="300px" height="200px"></img>
<a href="'.$xlink11.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink12)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link12).'" width="300px" height="200px"></img>
<a href="'.$xlink12.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  
if(!empty($xlink13)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($link13).'" width="300px" height="200px"></img>
<a href="'.$xlink13.'">
<button style="width:100%;"  class="btn btn-success"> Download  </button></a><br>';
}
else echo '';  


if(!empty($typea)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typea).'" width="300px" height="200px"></img>
<a href="'.$typea.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';  
 
if(!empty($typeb)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeb).'" width="300px" height="200px"></img>
<a href="'.$typeb.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';
 
if(!empty($typec)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typec).'" width="300px" height="200px"></img>
<a href="'.$typec.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typed)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typed).'" width="300px" height="200px"></img>
<a href="'.$typed.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typee)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typee).'" width="300px" height="200px"></img>
<a href="'.$typee.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typef)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typef).'" width="300px" height="200px"></img>
<a href="'.$typef.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typeg)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeg).'" width="300px" height="200px"></img>
<a href="'.$typeg.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typeh)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeh).'" width="300px" height="200px"></img>
<a href="'.$typeh.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typei)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typei).'" width="300px" height="200px"></img>
<a href="'.$typei.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typej)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typej).'" width="300px" height="200px"></img>
<a href="'.$typej.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typek)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typek).'" width="300px" height="200px"></img>
<a href="'.$typek.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typel)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typel).'" width="300px" height="200px"></img>
<a href="'.$typel.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typem)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typem).'" width="300px" height="200px"></img>
<a href="'.$typem.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typen)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typen).'" width="300px" height="200px"></img>
<a href="'.$typen.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typeo)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeo).'" width="300px" height="200px"></img>
<a href="'.$typeo.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typep)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typep).'" width="300px" height="200px"></img>
<a href="'.$typep.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typeq)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeq).'" width="300px" height="200px"></img>
<a href="'.$typeq.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typer)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typer).'" width="300px" height="200px"></img>
<a href="'.$typer.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($types)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($types).'" width="300px" height="200px"></img>
<a href="'.$types.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typet)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typet).'" width="300px" height="200px"></img>
<a href="'.$typet.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($typeu)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeu).'" width="300px" height="200px"></img>
<a href="'.$typeu.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typev)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typev).'" width="300px" height="200px"></img>
<a href="'.$typev.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typew)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typew).'" width="300px" height="200px"></img>
<a href="'.$typew.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';   
if(!empty($typex)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typex).'" width="300px" height="200px"></img>
<a href="'.$typex.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';  
if(!empty($typey)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typey).'" width="300px" height="200px"></img>
<a href="'.$typey.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';     
if(!empty($typez)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typez).'" width="300px" height="200px"></img>
<a href="'.$typez.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';     
if(!empty($typeza)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeza).'" width="300px" height="200px"></img>
<a href="'.$typeza.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';     
if(!empty($typezb)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezb).'" width="300px" height="200px"></img>
<a href="'.$typezb.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';     
if(!empty($typezc)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezc).'" width="300px" height="200px"></img>
<a href="'.$typezc.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typezd)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typezd).'" width="300px" height="200px"></img>
<a href="'.$typezd.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typeze)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($typeze).'" width="300px" height="200px"></img>
<a href="'.$typeze.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($typezf)){
    echo '  <br><img src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($zf).'" width="300px" height="200px"></img>
<a href="'.$typezf.'">
<button style="width:100%;"  class="btn btn-success"> Download Image </button></a><br>';
}
else echo '';

if(!empty($qualitya)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualitya).'" type="video/mp4"></video>
<a href="'.$qualitya.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';  
 
if(!empty($qualityb)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityb).'" type="video/mp4"></video>
<a href="'.$qualityb.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';
 
if(!empty($qualityc)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityc).'" type="video/mp4"></video>
<a href="'.$qualityc.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityd)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityd).'" type="video/mp4"></video>
<a href="'.$qualityd.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualitye)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualitye).'" type="video/mp4"></video>
<a href="'.$qualitye.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityf)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityf).'" type="video/mp4"></video>
<a href="'.$qualityf.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityg)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityg).'" type="video/mp4"></video>
<a href="'.$qualityg.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityh)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityh).'" type="video/mp4"></video>
<a href="'.$qualityh.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityi)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityi).'" type="video/mp4"></video>
<a href="'.$qualityi.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityj)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityj).'" type="video/mp4"></video>
<a href="'.$qualityj.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($qualityk)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityk).'" type="video/mp4"></video>
<a href="'.$qualityk.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityl)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityl).'" type="video/mp4"></video>
<a href="'.$qualityl.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualitym)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualitym).'" type="video/mp4"></video>
<a href="'.$qualitym.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityn)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityn).'" type="video/mp4"></video>
<a href="'.$qualityn.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityo)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityo).'" type="video/mp4"></video>
<a href="'.$qualityo.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityp)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityp).'" type="video/mp4"></video>
<a href="'.$qualityp.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityq)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityq).'" type="video/mp4"></video>
<a href="'.$qualityq.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityr)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityr).'" type="video/mp4"></video>
<a href="'.$qualityr.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualitys)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualitys).'" type="video/mp4"></video>
<a href="'.$qualitys.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($qualityt)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityt).'" type="video/mp4"></video>
<a href="'.$qualityt.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';   
if(!empty($qualityu)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityu).'" type="video/mp4"></video>
<a href="'.$qualityu.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityv)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityv).'" type="video/mp4"></video>
<a href="'.$qualityv.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityw)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityw).'" type="video/mp4"></video>
<a href="'.$qualityw.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';   
if(!empty($qualityx)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityx).'" type="video/mp4"></video>
<a href="'.$qualityx.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';  
if(!empty($qualityy)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityy).'" type="video/mp4"></video>
<a href="'.$qualityy.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';     
if(!empty($qualityz)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityz).'" type="video/mp4"></video>
<a href="'.$qualityz.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';     
if(!empty($qualityza)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityza).'" type="video/mp4"></video>
<a href="'.$qualityza.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';     
if(!empty($qualityzb)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityzb).'" type="video/mp4"></video>
<a href="'.$qualityzb.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
}
else echo '';     
if(!empty($qualityzc)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityzc).'" type="video/mp4"></video>
<a href="'.$qualityzc.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($qualityzd)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityzd).'" type="video/mp4"></video>
<a href="'.$qualityzd.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($qualityze)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($qualityze).'" type="video/mp4"></video>
<a href="'.$qualityze.'">
<button style="width:100%;"  class="btn btn-success"> Download </button></a><br>';
}
else echo '';     
if(!empty($qualityzf)){
    echo '  <br><video width="300px" height="250px" control ><source  src="https://streamytv.herokuapp.com/stream.php?url='.urlencode($zf).'" type="video/mp4"></video>
<a href="'.$qualityzf.'">
<button style="width:100%;"  class="btn btn-success"> Download Video </button></a><br>';
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
