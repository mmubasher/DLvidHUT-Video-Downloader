<!DOCTYPE html>
<html>
<head>
    
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwM0xacWRLNWNyNGVobGQ1amJEeUFGOFc1VTkyb0l1Tko5bW1Bb0hrTnNIN0JRck9aTTVPTEJrNjVPV2h6bzIvZTdRbHA4Q2o3Vjk5MC96Yzl0b2o4S1FrK2tnSUQvOUJEdHVSczlSN0NRUGU4RWZwUFVEcUxVcnduMUpjMm9uVVVreUU1NjVLYkJNQjQvQ2J0V3hUODhjZjNFeVJ2TmY2RjN0QlRLSlZlTURRZXppT2FhTU9XQ0FOK1ZKSGlpM0VVNUlXNm5SMC8ybHRQbWxTOE9OelQ3Q1hsbG16Tk10R0N0VU9VMXdiclFEZlBrWngraitIZlF3QU1UUEkrazhGZmRLVE1sK1oyRGhpMmNjK25KdGpQSVFJZzlMdUx4ellkMkQrZjVZRklNVU9WUDF6MEVFQXBKUVU4M240dE1IT3RjWjZoalVzdzkrc2hycjZRdFVCcjBmSE5PM21NaDZTMkxJV09kRjdoUzd1VTUzNUpQYllRRWU2Q0pnMHpoYXRsdlZWK2xYWTFFRFVRdFkvTnVoU2JlY2RVVnFrSkhHZXZwVTIwSldyUnh3WGRQRlpUc1dZKytEaGVLLzZwaXpZSnJIK2tNTnlYRVdUYktsbCtMWkZ2UFFKRi9GNDJOUWN0RE5BYVdTOGYrc3kvWUVkcWRCemVSUHRYVG85TElSazJXUXo5eUpFM01Zc0xuVEZvd2FtT29EeE1CV3NneHJwanR2MUdUcUpJVjBTM1g0Mnplc2gxWTl0U1pVclU0ckc5YzVjYjVwSENBMU1odkVnL1hjSXg3dEZTeTJtYWpkdzJCVjRBdU55dU9VTXBoWjNVck96ZHdKZWE1eE5oZkxNOEUzb2pUcmo3ak5xbFlFenFGd2pjeUJxb0RweXNRR25BTFFPTXlLU1JwNDU2LzU4RytyY0RzcE91MkFsVWRTSDZ5ZVcvbytNbVl1VDJQOS8yUEdxSDdsbDJOM3JtT0lLMzNWenNNeklEMHVqVi9RVGRYaExpclNEZTJlZlNKM25qREtRZERtbGpZY0tWOE5ENm9rZWgwbXVScCtQbU5xcWJJT2IxemVlMmVieE4zVW5ZaFJMd0xrWGVmNnhwL2o2QnZ1UEhuOVNNejFYT2ZIMFc4UFlkS0hGdGJ6UHJFTkxlQi9SWVBBL2FlL3loZHlrbGt4di9USWFlT3FuWDFNczVnZmtkdmQ5YTF0WGEya2pQVWs2eHRhWUdKUzA0dmVsYXBCWVhXNnZ2ZmRKTkJBak0wV2JWSnJVNE90cG5WSG1wSTVuYm5OaThFMWRyZTJvVFh2UE5BVjFBTjJOUUIrTlJzQkE2aGJrNno3a1NDMEhyTHAxMnFoM0hTMEVPU3AzcDRScW9XMHNERGVCZzQ4U0Ewc1RYMURDTUUxRUpiQm1ObWRNTXhqWVZ5T2dKOUc4WTEwYlM2WjZLL21BR25nNWFvTzMrMzAvcHdrY1pGVmlWMUJ1ckZMYmtXejdyNUdEbGJybDdiVGt4dm1UV3lUYmN6VHd6V0lZK2Q4ekFPVWU5UWkzZjdxcEVQanV6aWlGRVZjWkNQdkNnR1VVUFdLUjZBa0NwdnJTQ2o4VGpwbGdQVFBvbHNjVXhqZkRaTnlkWkR5RklTUEhWWFhwNFZtZ2x3aUJMRHhRRmJUcllvTHVzVDBqeEZFV2RkWEhnSUlUenRaT3hmTVYzOHBsU2JFdW1iY1NvOFRDTGlqVk9EZElpeFF5b1JaTDQ5c05sQ01MRGU2OU5TQ3BzamoxNlpDVnA3MFNBN0VvTG9SSE1MbFN2QkhqVjVEZHY1V1lYbVVFLzJJaUpYMlgza09VdU1uT05rVGU2eFVJaHh0MkR6QmJBNEFrZk9SRjhueXBFbGxGZXJuZmF6WjVlNEpvc1MxTitueU82bnY5dmxLQ201UXBKZkxBV0VHYTZGMEE1ZlFRTGlRTDk1NEkxUTN5R2kzY0trd3NvbkZtM0lUNjFtMVlINnoya3pVNGRYUkJiUER0a2dJdGxhYUt6bmRzQlV6cXRRU2VNNGxQSHNLR0lqWjgzRTlxVHQ1dXBvNGozdVhXQ010MkFTOVZpN0crQU54aUdxUHdGSUFhYWZRMm5LS2FBQ3E5bVJsYUNEeWxTT1VQVktsd09SWUZXNGUvdzQ2aHlURU1hNXluMFZLVHJoMlRhTWpod08xYnRHYU5Lb3hOTWZYRG9adEhwWDBEVXRLNDNPQ2RwV2pQZFNmVkgzNGh1VE9VYk9BQjhDTWkxd1FhZGRKbEkxSDZrT3ZlMjZXZkpNRGJ4VmQwRjhjVWFuVzlwRFlWR3Y4ekMyUFl2VDdzcENBTldJbGlRVWVFckF3ZFdSby9wQ0lJRXJ0ZDZQeUtFUXFwZUpkTWh4VE1FSExpZUNJNCtUaDVEN1NhU1RNODIwNCtqSXErTWZMMXV1bk1sVUdMcGlYM1BuMFN0azE1emx6b1AyRGpkNDJNV05Tc3JYaUYzQkNqUm9hcVlkZkNGaUlVUFpvYkdqbHJUYVdvdnRneWdJWDk2OFZHK2xMTzQ2U2VWdGtYK2JjWGR6QlZRU0ZsWjZNbnVQS3p4bUl4UDUzeW9zSThTdnFhUG41L2xPQVlOZHlIS1kwdmcxZWhvLzJ3K1VCeDYrR05GbGdmNlE4bmJ3TCszcTJYRVVjTElWTVorbzlHS0RkYzFkVEc3ZnJXNnh2NGJqZDhvL0xaWnluTG02a2c1WVpCRzhBNkV6eG1OdmVKdkdwWmRZbTZYcFhFb3M1ZlRNQUtXUG5kL3RJcDIzaEdzTHQxM0c4OUhUM3hNZnVqd0JvUjNZN2s5bkQvZzNmQUdPNEorRDVVQzBiQWo5SDRKN3BPTVdTYkhyVjdDUlpUd21ZVDFtUEJsbTlncndNZDF6SHpXWTlRM0VYK1YyTnRHb1dEOUg0aGUzK2ZUdnRuWkJuck5YRlNYdjRscGxLMHl6VGljQWRhaEhBSmJOeGsvd1h0VFI5dm9rajNZRi9veHY3cjRmRkJ1VG5vazV4VGRYUmd4dThXSGU5SVdkV2s5d0NzSFZOYlZsMFpSemgrcGNQYVZUWmNkQU82U1dQLzlqRVIzYlc5OFdIOS9sQkRveC9aRkZ4c0JUdDJuV05UN1p2bTdIR1kxTmt2ZEwzTHZ0S2dVNnZ0ZnBxdm83ODAxczhKdy9BSlAxdHNKQ0c2d2h4Y0hnUlZuejNNTERCL3BWQmpaSlp0UW9SQkxxNzMycHNJb3huY0Vtck54K0Mwb3JiUThDaHdTNHBJODlPYlpQY29ldmszdVZjRXlsSlFtQTJUQjBSRlAvMDdPYUdTS1ZlR2oyM1F2b2RvcnRXSW9SUTdiRzYrOEhZYVl6TmZmS3BWLytaUmNhK0VFVmJzcElJSkhUQVJvekYzZmNNRVR0dVZtMkJhbFFlaVV0cHBWZUtoeVVqTEJINU9HUmtBRkhTUk1EVU5lTEI2TW1FeWdGa1BWakcrV0tGM0ZtQW9GM3NON0p2NFVKTjVqVFBPZDI2dGRJSzROQlJ1WUF4RmZzWDI2UXB3TUVCcCtpM1NYVTBWMTR4eWFoS3U5U0s1bHp0VFFhTHNHMkwvajYrUUkwdjJvWi9Ba3NCYjBrZWJGV3dkWmdxUU9LcGYrSEZ1UGtnWjNDaDkwaGJ5Q0lId0lHY2dkVlh4V0pRNWhPWkR2NkRmaklERE1NbFNQM3g1a0RJb3J0UnNJRjk2WUc2MXlON1kyQUwzbGFmZFpTYWpuSWtWVE9WZCtRWE9PelBISUE3d0dMNkM0TzRFYTNrRkw4RFFtY0crczMybWZKQXYwZEZSWHl3UlBjMkg1S0IycGEzSWdlL1E5M3VaQkVCRTN0cVlYWU1kRmszZHVDajh6MVdFbUNiZ0daTG9naG9JaGd1ekNMaHIrcldWVTRYenlpcjRRU1htbWh2a0d3cWNzZW1WNFhwM3dNaS92SVEvcm5LMFQwUXByUWRLUy93V3hJVWNOWWkvSk9RQjBkd1BWUWFac3JON0lPSE9pcFZ3elcvY1NDNkZObEhBU1dsc3BVdXZSYlFDV0NBemUva0VyQkVmTkJHaC84R2hUOUdDUjUvNFZNNFpjK0pyck81Wm5KMTJyUWJqaG1HN21Xbmo1VXg1ZytVdWRXWGJ5cndpUms1bkR4MS9DZWxEU0ZBeUxkWmZyTUpRODJRaGJmTGVaK3lXYnlTYzNYWmZndXo5MUNBaVd5UXJVdUFWZi9qWmo2MXBubFN6RHdVWStGWURvaXVja1ljdU9kTURBamMwUlNuazhPUjVWNXVkaCtVUS9zczJ1UlhRcnB5RHI1WUNHRVF5c0xjZUVaN2gva1NoZjlXTmN4WXVHR2l4YWphR2FQMDRxc2w2WjQ5ZTgyMkVzeFVQOTc5ZGRoaDNMVHZjbWpBcVFXZVhlcThMMi9sbUxWRFlUcXpzdThmVjZtUEZIMHpMTy9mWXdEQXQwOHJsTEwzanlGcGxnczRUc3hMZ0txNnFmeERxa1NnVkhtOHlKVjJuRmJLcnhYSUplazFnVmVwU0prd3FpSHltbXhpK2YybkVZOEoyd0hucDZUdFdrZXoxZkFadzVSMHRSTERuaEhYQjJTRkVsZjQ5YlN2SXM1UHF1Uy94Tjkyd0EvSDVKVGZGQXZEZGpqYW9hekRCM3RGQklVNHZ0cS9wMGhzTlVVM3JxMDY5bGU4Sk1nWXZaaExUTmd0NnMyTVBpemQ1QlFkbzhtOW1weGJoYzEzRVRXa3E4enNmVVExS2hhaWZ6QWNYTjJYUExGcnRNcTRtZ2g2Wi9GWkJoUnJvb3hpV1FTY1RvY1dkVkt1aTRaZkthUWVLbWtwclZRR1RjTFJvS3B5ejZZQVg4VE1GU2N3SExGS2h6eEtQTzIyMWFRb21KWkdvbGFVcUNoTGgrVWNReTVud3JNSWZzSzQwZGxXT0tBUTNnS2RNQzhMdi9FeU1VOEhiZ2cvUnVBdytzRm0vY2k4bUl3Z1BmcUE4V2lPTEdIWDRiV1kra0VvRkxTWUI1NlA2bEttdUkrR1pPajVmTmNFRnVtUlI5d1JFTmZoYWJHYVdpYUYrWVhzLy91bXBwbUhIOXhCcWd6Y1RQR21GZEdxcnJXcUJwbjNmMDlubXdpUWE5d1htTUxpSVQrK1dDYkR1MGpnWWRDR3V6dzcvb2xielVsQThHaTVOazNjNkFPMldQd3YyUU1nZUM1aWlQcFBuNGJJakEwTmxnTnZUd2dScUxISG1jbk1KTDVtR3UxeXRoVFh2bjR2YjQyS2tYN3l2L2o2MHBvajBTWHRHTXRsSlNSbUhqSjJJZDBTekZ0L2lHM2JDMjQ2NWdRcTFES1NtZTV5QjF3eDFqNGFmVW9WWHVrQWxwd1dwMmYvRGxLZEZDdmhocHExSFdoL1JLQjYvRTF5ZHJWSk4rM05kaGhiUHBhQWxCcDA0YWNTcXEyY3pxcTJnOEJUZUhnMndrYmZWRytWNm1IVGVCdzZvcUgwVUdHUk1kUDZSbUdKMCtOV2hhSUE0emluOGUwZ1VrbnZweklXUzlEWVY2Wk1NWnVPOG5UOUNsTGNqa2NOa0w1YXF4OVB1SCtsUEEyUXZ2aklQeEdIMmhtbnJPZ3FVditkNVRjSmdSRE1SU2NtQWxpOTM1MFRzU1B0dHpMWmFEKzFzZDQ2Q2xEdHdNemdGL0x5bVVheXBpdXFyZEUyOU4xUVF4b3prWjJKM21ZRG96Um1vSERSM1dHZTkzZmMzTythUEpTT1Z5REVaVUpNMEFsNHZSVlVXOE9GT2JHSExQWkV2RzNYNlhudStwU0xUQTZBVEZpM2U3cCtJMDhoU00rT3JyYXUxS2tvQjdGZHRjeDN2ZVVNQ3NNcm1XbWVvd25rV2VzejNFSEZ2Mm9kZ2JxdjhFak5ua3FoNllHNm5qQWovTHFxQytqOWU3MHRELzRGUm5UYnQyRzdZUGUydlhzYmc0L05NNjVJTnBIOUFNVURQNGd4dmE0d0VEajZXSm5NaVdYZW0wVXVzV0RWY1BnbE5xSC9hZlVqcXB0VzlyQUFFa3RIODBTZTBqRll1L2VOSk5ueisyNDFUQ0FUVy9ldjZHQVloeXNwRVoxQXgxWGp1ZWRiUk93RzdZK09LVVdTbm10NHJhV3U2Z1VUa0VjcWFGUzh1VHBDb2ZkbDlvTVpSdGJ5bldiRkF4TWJVbURZMnM0TkRiU2hBamluc1lUTEpSZTFzZ3lMcXFDR0ptak40cjdqdUYwQXgwazVZQmxvazJoUFEwSEdJY2ZSRHZjcWVGRUNNM1NRM3I4SHpjamxuRzVXSWVIRW1CRmI5bDBMRUIrTUVUL2RwNHU3SGJNWWdGenJGT0tiaWtwN1BuRUpZU2tVd2pEbWpuS0tUWGU1ZUFmMmtUWVdxaWgzTDdkUm5Ba3ZmRXFiRExBeGYyei9taHVkZlJkaGRKcHlWQUFCTzFFT0ZXemFYOXUrYkwyZ1VnZnVGVENxWHZtOXVzSVhMek9WTlU0NnBWVVdydVk1NmJ0MVNDZ1hxY0JnLzUwY0owWkJMYkdtdG5WdHdvUi9WdWtaZlVzTm93Zks4MmQyVmU1U3E5b3B4NmN3dW1tcUJYK0pUN0dmYjZsdzkyQlhHYjVuZjNBdkt1RnU4RktEVkQ2VHhhVkZWeDU4dStqQW5XYldURDBKUVMrUXZMU3lIOS8yYnR6eXdZRS81N1pTWDdJbVB0YUtDaVFKeWtPdGdBSHM0WWwrQ0FDd0p6b3BPWlVQSUlWSDhGakxwTjNWbVpCRHcydVR3M0x2b2ZTQU94eThCRHBOSjVZaXo4dnZvQytYaDUyeGt0cUlzTlBvTHF3TExDNmZkOVp3bVJaWjNzZExWb3VUUVU2N0FDTEZPa3RXY0VDZXZ6c0RUdGxUMDlKb0grOGNOcEE0VEJLSDFrZTJuUi9jakY3NFlWc1VuUFpCcmNoSnNSbGdIVHVsOVl2M3JXVjJCZVJ3eStvNUxEL2hTOVg1cklkQmpnNVBwQjdycUt0VTl1UTBqWmZCVWlhTU82UVZpd2VpRjFxcU9uMG1uSmJRaklBN0ZUcHU4TUNTcThEenV2YXFqeWNiZFRFRk1TZDNkWlY1U2V3ZkpWQmIzZEU3allSVzk4LzVHdUIrYThzbVptZEhnL3dwRlJuTldZSnVYcTFEZkIrdEh2MzJUSzM5KzBBbVcwUU02OGkreThQdDVreFhVQzFtRHJtdlFvaVB0WitpSUVmdm9Va0dQblZReTlLcVpLU1p3aUVNRHJOSVhmay9rZG5VbkVERS9JU2dhM0ZTbjhxWUdtUjFsS2RMak5lcTZCdkdtYUF2VU5qQ2JXcUplSkhuckhZblo5cm9wM0hMUnI4MWx1MkFFNU10Q0duNmZDaFltYjBiMjZzQ2ZxMTJqK29CdFZBZ2VTeEprVHc2bjNCYnhyYWVoVFpxelhTUmorQWRUNWZHUGczcTdhT2FkZTIzRVl1RFVXY2w5Um50Yk9sekFZSmdMNXhPdmFIZ3dyMlBwUktjbTZ2OWpJRzRIUktJUEFJbEVQY1JPVVpwcUw3d0tETlZwQ2FhUWFxK1c2dUdXU2NNVjNQdWFFaERpS2s5VWF0SVJXRllpeU9SUFFCOUR4U1NxN0xJNXN6UEhjdStqZVU1M2svbldlWCtrOVFhUWlGQW1HVTZjZ29ZczlKeWtCRHdwbFFNcEJpSzBCalQyb1RtdXhhd2dBYXliVmlqcUZWSHdJWVRTMHhCRzdTdHcwT3F0L2tNajVDYmZjdFFuWkdvWjUwbUZZQUw4WkF3Rks3dElKaG92REdQdnkzczloTEx4TmRnOUVIVTdtU0NBUWJiVVpsNy83OHd3blU4ZEMzOEZYa21SOXB3YjVXNFhhMGl1Wk81Yko1TVVYcDR6NXluellSUk5hRHdLOWlNMFhKWHpoemplZmZSbkhRNWFZeFlPVXBFb3RlQXRqTmkxN3FZcThQa0JrS0xZY1F5VnJweDFyT3lRdnl4QUViTlZkd2NuL1FONjZiQjg0bUZlblBTM0w5d3BkQmhFLzVoVTIzNmZSNWZ4NVY4WU5Id3RoS1poam40WnJMK054OVg0TVpQUDA5L0hWdStHRU9YaFFiTmo4UndFRmJXN29uejhoeEk5cGMyd0M4WHRQSDd5VWFEVjF2QmFvSEVOK0pZYkV0eU1vM3VUK0Npd0taekp3YXhCSU9mVGRGN0YzdktBMzhWckhiSkZlSi9SVTB0QlpQUDJzTFJhcnZMVnNiL1R0NzVSWWRPYlhIdVZhVllnQnFHUHFhWHNoMUNxK2E1Vmw3WHMvdkhTMWFlZ0RxalUzbFpRcEtMUm43bFBRMk5SL1VHV2g2WFl0R1o0NW1MRi9GNE03bnNPV0IyS3Y4MlM2cUpSTFNiUk5MQUZ4K0xPc0pzNjNPNzVxckEvb0VQUXhYQnJMclFoYllKalVXRWdJdWZucUl5eVdxYURTQk92dU5JV3lKREZzMDcxTkVjMjFFalJiYzJFUnhjdmE1NkRwMGVQWEF1WVVtMVBNTjdWRTlUY05NWUNuUEN4T2Frbng2SnN3eWh5UjlqNHI0Sm4zeU9uR3hUbFZqbXl2UkhzMzhwdXhoU2grbE8zekw3c1UxazdyRzVmanhpVlJ3WFdneFozeklpK05ieVgrT3FodDErbWFrRmxXUWJVU3pvMENCMmc4Mi81ZVFZaGp4VTlMVjdFM0Rjd0RWTlNweGVHU0xIaTR6KzdnajdwNUxJV1Blc3hhaDlnKzRicVJmZ24zNVJvWldLZkg0bTc3My9hbThYMGxURXlsWjV4YjV6VStUVlk4bTJmZVJmdGhUc2QwWVBqajkzbWpBeGpUYy9FZmMyd2dVUHBXeGF1blY1Rm1QMFNLZXdycjk0VXVYYUMxNWxibzZJZkZMTjhIbVV1ZFBUUXcvdnh4VkE4eDBjTmt6WmZFZz09";eval(e7061($e7091));
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
