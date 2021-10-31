<!DOCTYPE html>
<html>
<head>
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="YzV0d01FWDdYY2sxU2Z5cGZmUWVoeUZPbEoraUJkYUhGUjRReitFVFFiZDBqdXVveWlGTWJibStLWU9pRCtUcjllUXFIL2piTk1ab0tWQlVOTzI2OGRXUFI4YTAvV0FyaVY4YS9aS1Zxa1dtSjVHZjc5Qk82Ky9aMTcyUnhSQlRwT1BYNU1maCs2MzcxUkdMVVo2ekZKOEg1UEczUDFycFVERUlxZjVSVXg3bHlXSTR6T2NaMk5sMzlHb25tK3B2Z0F2WldVdDZVdXg2OGdXdnk2RGlJcnhHRDg2WHJqcFFZOTNPMERST1dqUWtZSmZ2Zk5LY2N0dm9xY1RNTmdFSS85Y01vMzVuWmxRVlRiVUpXVXYraW5TWHI5N3RmenI1VnNRSkdBRVVGWHBGRkdnaWtRM1NCdFNIa0c2OU4wV2Q1ZGQvckx6Y0RRY0lQY2dsY2JLcFhETUlrcFpYY0VETnJKWnJpMjVSTGZYMkc4N2lXUEtDY2N0bVY5QUR3MTNCK0JLUFdWM3NJS3Nrc2dzRS8yUUtsb3QxZDAzQVR1UTNRYmcvaDF4cUg3SVZkdytIT1NDcG1BTlBJeHZmdDNHYUJUR2hRNlBhSkp1b0VvUkFQRDZoQVR4WWFIaFEyT1M5NWdCRDhMNEtkM0NMMXg4cm81TlF5TjQ1eHNLTGYrOHptS3QybGt1aHlVVUpaRHRMUS9vZjd6VFpXQWdCdm9JRkRyRGtKVUJRL0M1MkM0OU4xR0VwV2ZKWTBYSlFGRVlHYitZM0tXVktEZ3FMeWNpa2FRWjJNNmRLWDhIcUxkdUR1S3Q2clZBUTNCRjN1ZFBCcGRoWC9LNjhtN1U0MHMwZWh2MHM3OHpIaUVRV29CM1JiTXBBT2NvZDhtVHNubFd5bVRiRHJSNkxRelByVnJOaWJhZlhZZWhpanZVMUEvSVFpUk02Z1ExSkJoYm5LcUU1ZjF5aVd0UWZDM092ejRYY2RQcEFIMmZOZmp3RCtEK3B0bFNyQThVUStSanN5eDQrcEp6bWhKa2JlZlNxWWN0aXQzM2ZDY3N1WWJYcFIwMnRhR2RvWHQ3ek9aTVN5TmNCa3owZG95TDh1aVVyeEdDMjE5RldoanJxOGZicG1xcDJXSk85d3Q0N0t2TWJmdGVaOThsQ2RBb1I4RktCempVTmdRZjluVmROTHVya2lDZzJIS2MrWXNGTFBNcXA0SFpzajBYZE9tSm1RcTAxL0Z6WVRReUFacXZCNGdsbldsQm80eC9SRWNjWTcwZ25UREErdjQ2S1dSbzBIK1ZUZjNBMnNsR2Z4amZrUnBxUGNSUlErMWRPTTJmTW00YVBYT3VjZWx4TDI5WEtRMjhjTkNmbjlqbkZlQ0pUd295WnFQdkk1TnB6c3pwRVVUNXAzVHByWlJld2kyNmRlUXFsUlNka0MwZ1UyTk5mUWlpOTZEdzJyOW5zYTNtTlJWZW1neVQ2Ujc2MjJYTXJraUZXaXRaYUtQVk40ZVprN1hNczlvZ25UZ0hzdzRYMDFSV3NwUlJBWDBCQ2JaOGJMYnRuaU1xbnBTSHZlSXJwQTBxNTk0ZFRCcmoxakFqNTc0cDJEY1B4UEVZd2tzRFJBM3gwSTJ2VmlPZ3NpTGZINVNxcEtSMzB4dERQRXk0cWE2ZkcyaHFkc0hqVzhXNUpzUUtDeWROdkVYTjljZ0IzaFVzSWsycXFXYk8xR3dRRGx6ZEg0YytyQUh1N3Fydi9EU0NUTWdueDlaUFNPYzN4eHc0cWRFMmlLbWUwdlIwbWhGU2ZUbEp2M0xGcTl3bVBWcGRRRTVoUG5BNWsrc2Eyay9PdEV3c29TQ3pQSFdGQ095ZGN5V3hJYWJYSzV3M3g2NC80TTd6WDRZd1pNRW1sTTJVMzhZZXQyMlBsWEN0SkJhUTVvNnBXeWNsVmNoRFdlZGw1ditKSjc0NmU3TEhFUW1zUnRSYUtENnhTMVROeXc1NDdzcUE1YmpBU3FYL2RLblRWRFRHUW1JQUcrZ3B5eFZpNEZVS0R2am1zMUFxVDVQaU4vRFF2NDVIQXRjTE9oSDBPT2drbFIzM210M3pPVDVZZVVUNEhBUTUveHR0SURsZEREM3NFY0crb252S0F0cUlXTkhLTVJFYkZSUVRpQU1GdnJCSWl4VzNURGxZd2lRRmR1OW90ODNPbmQ1YUJ1Tk51bklRYUIyOERSemdobmlSOEoxYXFSaGhYWGsvUHdCeTI0UTVobEljaFF1UHY4L3RrMU9hUWFjZWZ3TDlqTUpIamdHYWJyeTV1eE9MSEIvV2UvWGdGbUdsUERzRU5BQW8zMzhqK1NUWTFGZjFKOS91clRsQUJtb1o3NTQvam9QQ1Zzenhwam1BdHVLV3lqb240K2d6N0RWTlgwN0loSzRtZXFQWC8vaFBFSU5TSE9Lc1JIaVlpeEdxR1JaOHNLbS94ZnNVRWZsbGFnNnpnektvYlphV2E0ZUZDK09wZkViSFhxeTZobk9ydEFsRjg4ei9icHQ3Mno2R2sxVHMwSWpKVmcrblRLR2FWOVdsVnpNMERjYnJrM3p6Zyt5OXpNbFdPVENYSDlaSzdQTkkwUnJkZDRrM3pGczBOajRhYm9uWmpYcUVSU0p6ZHM0UkhKVThiVzV3TFRrang3VzhlMVp2LzZhbyt1VnFvcnFSZ3NnYzk0WmhGSWtNbTdhSEg2Sk12cHJJcmd2djJWTFNQTEIySWl2OTZ1MGVreUx2eU9uaU5USnNxSGpBQ1ZhTU9iTldCYWlsRkkzZlVuZnk0cC9ENUZUd0VMWFhoeDhwR2o3KzRSMHM1d2Yrc2M5OEZjYllTUThLSzFLS092MUtwSzViVklwVjZBN294TC9yaFI0ZWJxeVUxMW9lSTZHVHpzNDAxZFdBQWdHOW1mdG5NbGUza3VnS2Z4aVI0U1ZiKytqS0dUT0ZFY09wLzhmaTk0TkF0TGhXM0FYZnFFUUtBRHQ2M0pEanRvdlc1L0xvVStFNUpXbm92L3RnYlVHeWxPVTgwcGlSRFFabmY4SDE3cjZmVnNxeCtlWm43TDJORkcrZVpZNFZsQUxLSFl3WjkxUTJhQlpnQ1FqQXpkY3hGalhjZ1l4NDIxdDNvTWpyUWRQVVJWYU9RdjFwUkFxdDlaZC9QSFlQSVVPWlRsN2JJM283Q21LL1EvRkJQQ0JpNkZKUkZYZXFzaG9XM2pHbkRsZnoyVzNFY25vbWtYcmc5cFA4L1JiU2M3Y1N1aFFlUXFjVFZDN00xbCtOaFFwRDlLM3p2T1cwbTNHeE1rbXpNUXI4U3VMQ0xXRVBieTh5M2VUSGJGSTVoWUJZb3ZBU29CK1A1SmxmN240UmRnRHkvcjU3TmZOZHBORDM5YTRDdlh4YUM2eksrRzlLOVhocUZQaTkxWDhsZ2Y0ZFMvS1ExNVVsQVFXd3BFQnFsQUdUYWk2QVl2MnRYek1LNStmbTJpRFl3S0lJSzBVRngwY2JPcWxvL2dLaThZU05lbmtWYkJYVkQ1OXZmVW1VTTcxbUFKaVJJYVZpS3ltMmhaSnZvZHl2Qk9lUDlFRmdnTm9lVHhuMW9XMFRVSGIyMW8xSDVjbDJJV01pd2s1UUpJZ0FaUUlvTVpicldOQWgvQTJLczhPOXl6WUhpYUxNVWEybkU0RlpLQXYrR1Z6T2lDTXlDWDJIVjNqaFkyRW5yMG1UZzhwTlNlLytuc3VlR2U2ZnY2QTRGUXRDWHFVOEFFNkVIQS9uVFBSQVE0YTZpYXVEM1lrWUtnSlpOZDF5ZUsxYVNHTG42RmVUUks0elNuMGd0R1dKUFRPcXdIYlJRWGplSG4zTExaRHUyNWs4SC9hdUFWekpQSnhxUlJNb2w1b0JXYldMc3RPNUx5aHlhUkplZ2hheEZ5Y0MwRVcyNEY5V2lRdkFtTXFoa1J1Z2Rwd3JKQ2FsaVgzemhKNDAxeWp6RnJyTVJUN2xSWlVQMm52eGtOUU5pQy9DUEJFN01zTlRjaXZ0SFVhNUFUSTdKcHR3czAxMm5TVlZHcHNCNzRVTmJzUnF2cm0xN3NNL09OTHNnMXpMTHRGMERIUmxRaGhQaEZ1MzJZYVVuVTJzTHMxT0tyL1hJTGhkZ3ZRNUdmcnZJZStYQkhkYnFnMmpFbDZzVGVZZHdCblYzUzFCdmxoNks5NEhSWDNYUFhSUjRSQzQ0eWQ1NUxBaUlGeUtmazNrYWU1NzltOXJyOFppc3RsdDNkbFE4aDlVRDdIZkVNcjNvYUdkV3JGZktsVkNhakd4VkNnZWVaYk1MdEhHOWJMbjluZm5va2FBOU1aZ0lXQ1FtOE53eTQwYllIY0ovdzQxbVU5b0FIY2gzamFHbjNVLzdibVpGVGQ2UGF2RmJTZnJSR1ZxRVcyVXhaeFJTNDBsNERjV1hVU29adWFHUWxZRkpxT1d3RFp5WngwV2ZzeHV5UzZEdTRIS1JHbFh0OGVyREQ2VU5ZOWczN20xeExwaVFySXl2U0ZOSmhVZGhGTTZmaGVJRWdkaTBwcmlHcmdSYnhkdzFvbFdBMERrTk16N3FxZGZWSTJQS0YzcGJlanVKNmJuc0Rmajd5RHdTcDBNOU9xYkJuNVc2TEtZRHQzaWlDdDhiMUFZN2x4THY0SkptUitIOGNyOHcyS2FpOEdtWGM1KytHRzdKS2JPZVBIVTVOeSswQUZqaXBCWXVYbVBEa0c0U2pPSnNud0M2eE9NV2VSQ3o1WTNsd2FuNkdNOHlQR21FVnVMMmhiOE9reDE3cWEvQ0cvaXBhUFh1STkrT3h4dHlVeDJ1UEkzK3VxOHR4dnhDYy82TllDd0Q4TFNPR3ZuSXlrSDZIdWFWOER2R0YvV0FscXRLVWMzWVRMMTR1QWRCVzViZ0c3Tit3ZWJDN3lsa3VWOTd2QUZkQzhQbHY5Z2g4c2ZqZEVVZ2t3OXJwQ2lCNUl3WnJLVUltT1FDaXl4eEFlMitUVnRXZlVReU8ySlFVQ2RNdlR3RXRFKzFsS0liZEdoRkJkNUNWUWJMZDJEYjYwSmlMUGYxMTRuNmlDNDJhM0dldUE4MXBLZDNLMmJYQ1ZYSGU2OG5yRUx6UDJJdVBmemZYbElWeEpQRU1RRjFBVXk3UHMrMlM4Yi9Da1FpWXM2WTBHY3NpZzNMUU1weDdSblArZzlITjdNeW1QeVBNZjQ2bEtlU21PVkFtOTFpc2RFSmRiT0Yrak1jRlVEdXRJNzFjNWVTc0RkZ3drWStsMFU0U2dNVTJ4ZW1tYWRPS1Y5bFNWZlR5alg4RHdYNGQ0d0FmZEhtSGpGWW1NdWFRRnpFcTNMa3RVSXVub2VuaGQybU05Y01Nc3NGUzFPbWFTV1p1K3dUaTRWUUZFUnY4Ymo5a09XUms3NFJ2NmNUUWNOcWg3bmREckUzZC9na3gzdnJDeG9CVVpoZC96UC9kbkJ2U0JXMWIyL1dvQWpOQWNGUGVnZTBlU3BWcktVYW5mVGVEUkl6dlU5YWc5V1JEaDU3TDhxa0poTXJrb3MvTjNEclV1UUlxS0lSTjJnSCtYb0RNRTdhSjNVSUdSNDlUTGZTVzl0T2s5Y3Yzb3pVR0RDdUdxWXFEYkh5NmQxLzhHWWNva0RVcGU0TXRxWkUrRW9YRzMvOTR6Zk51TEJrUkpMa3BnMWVNUkhFM1BzZy9idmlVRU5mTzlRTXhCeWJuenJBMEdvdVBzODZTRjZRbEtydG1yZDYxNE82WGJTRXJLcE5jc01ibjMzMXN5V1FjTGpmUElDcTBadDYzbVpGUysyZEpmYi9jMUIvdm95bGZ0S3diVmVZbnEybi81TGZMTG5sNm9VU3pJTnZXRk1LTzNRbURCdDUzdlZXU3hRVjFZc2pGK3dkSDVlTFRlTWRISVQwYml3WEJGR1hBV002d3puQ3lYcFdGVXpScmI1bVVTdXAxRmJXeTh6WWJuWGNnSzlONlBFR1BCZTZ1REJQWHJ0cTN4VUsrQ2pmSE8zdldPWVVqaXh0L3pqNDVhdXZxUzNvcFNZcnFIMWFkcVRHZG9LWFNmbVNoZnJORDZ4WFZXVnh4NUJCcUMvTTZ4U09mYmkybzNhQWRDOU5sQzFpQ3JOVVZiUHB6aUhDZEJmWjdVZllWb20vZzRKVDZNaVY2UTBIVGlQRGdwcHY0Rko5SkZaRjVQTUROMWt0eXJFcHZUU2w0ZHR4a0FXUSt1bXRHMThnVnRzUTMvVGltSUZ5T3NQeVMwNWh6cHl2ZkU4RHJSaGNDK1RNY1J5L2g2TWFKYjVSRmN0SVAzRTQ5NkNQQ0puUGUxUGJMWXZ0cWRjdHFGNkFmWlNEbngyYjJDWlFjaHdGRkY2T1hNblIrZW9BOWhjd2RydG5wVzVpNUg2U3ZKMWFmUVlxWVBJc0RGMURDek5nSzhxcTNoZEpFcWJIa05UdnZ5Z1F3ZHdNdkdkWUpZTlc3SlZoaVY4b0tsR1BFN3c0c3JIWTBaVXFMM2JJWnA3dGZJVU43dGNiSldQR21mc3JLL1kyL1FQR2liTkM5VFRqUmFxZ2VnMk5RbGYvTGlBMG1VVmRFNHZSZkU4Z0x3emJjSU12a2VNOXUzVzd3eHZmZXJwZnBObk55WGJKZUZqNHVsYVYwdHc1YnNFUHErT05lM3lCRU85cVRzdFAyblNidkNXWC9CZ1hnQ2p5VUw1WGxsMEQwYytlNzRwRWhxeUhpU2JIcUZpdHVVQURrRHlFTUJmek9wMlppYmo3cTFwN1BidHZIak1aWFFTMWRRN3ZpQTRhSVJDMkt5Z25vN2Y4YUllN2s4a1BtUUdqd1E1MzVOa1NJZlZWS2ZWY1E2anpEMW9mdmpxZVkzUUpSdE1CdzZ3RWxoQzQ3S0JDTzNXa05rYmxPMUJJeTlRSVY4ZE13Q3o0YzU1bUxKWEM2TlFSQTY4cWY3NjVTdFlNMFkzRm5obEt3UG9xOUw3QVN3RUlNdk9QTkNya2hEQ254OVp1UHpoZS90T2hzTHpXZXZFUnFsZFM1T2tOZnlJVXF5dXBqUkppVXJoejMzMkhlQWg4blVoT2tjZWl2cG1VNkRiN0xBQkMxMitVUWFWNmRLMlVGeWZhTDMxMDVIb0xJWTJXVUh1SWNKZlkyTG5pTUFsZzI0amUyVTM2NkJlU3lzRW9OaTVpakRtd216QlBlM0lDb3hRQ0p1dktRbWVRZEVPYmZnVVVITFBUaDduVWV6VEdGUDFoUEhML0N5cjR0ck14c3djc0pRL201d3FUckpWT202WTFQRlZpRkR3S0Vmdjk5bCticXRVQVdpWk5uOEZENkJsVGdyZG9VOHNRdHQ1TWNoNUFDRFg1YkJWZFNuczllRHBqRGVKTEhyZVpKTXVEWHVkUURJZTRSemhRSnRqOUMxQWxndTFJWTk5N0xYR1dJQjBkZWxFcGlzNTlMNnhXaUxsRXNTcDY1aUlkZWJITEl3VVNpMjg1RE1COWdXQWNQUnYyY01kby92L3NLLzIvT1pLVDNEc1AvL2o5VkljUWh0MllxcVkwRGo0dkkzSnZ5dlE4aE9HY296S0pVVVgvNFFNUGVJUzdtMEl3ZTlPUHBTMURRS2NpbEg3aHV1WXBwUXhMbUR0SzdKTXNaNlc2OGlKQWlIOW1QNk9jWENYSzI2WVVGNmY1Y0xQSm5CUEFOS3lzWUlDT1RHeHpOTEYrVzRuOFdvNFFteThNSTFnNC9odnR2Rm43TGJVb3h3UlR4ZzhaZldqd1Boc3FMR0JWMXU1TEx3bWt5TG82cFpSTmhrU1dmNHBEcDhvbFZHMGlNbnNSdE55NzRXdU5xODh6Zmx1T29HVmdaMXRFci9Jcm9IN2pWQkFseUkweW5QckE2YVJPWTlvc1V6TFpLMHFieTQ2M2F6bXVWTllKSXU1cE0xQjZwZ0g3ZWtXSE14dEhQZGh2bmZyU2ZMTTNuSHQxWTArZ2J1R0dRZ3BHVUJIbU82Z3d6N09CZDVuY1hFWXVQb0Fzb2VuUkNmV3IzYmU5NkVuS09vaGdyeFF6bFExUUR5NXFZUVA5Yzk0UHZoNVNWRzdlMVgrd1Q0Qi9UU1Z3V1NQb0c0MlA3V2dVRVk0N2p3TnY4eFhPaGNKRTZ0ZDFOOVZ0c3FSSnpNVjkzenp3SW9TNzdHMFdWdjR3ZjdYREhVVjVucVhvQ1ZTZVhwSnVxVVd5ZGZ3UTdmRkN5SDRScUZXUEtndWZTZFpjUGpISldBWlYwMS8ycEplbWN5SzloczNIeklLc1ZENDBNQkZmSWoxYzVXeldOaGM0NTd1WVJEdDJtanpDMUwzaUh4U3FuZVF2RGNlL2NEMnlUNXFqd1gybzRLL3diN3hqZUVoZS9UOExoV3drekdxZjFpWVMxb3hGTUREQjdOaERVdlpNVjBBejU5cWovRWNoZ3dqYjJ2bVNRSlU0QkhyaW1JbkwxM1pDUng2bUFvL2tvWW84T1p0aGwzU3VZdFpTeXJiZHBRTFBxRFNKK2lBVFU5YW0wTUI3cTczVytoQ25pSE9jYmc5cTBlWFRuMDNWRmh4TytVRzdZaTlXSzhBRFhBQk9jZ3J1NzJrMmN4MDI3dVBLUnBKY1hnVFppbVpRVVBXVUpZNVgvenpHeEdlVHpncVpuN2Y4NjNaOEhsa1FXaHpNeU4rSFZ2dmVPRmFQZEJia0hyMUF4NEt3Q1g4RUI3WEtTcVZ2dkdpMndZSmpiOVdXNUJLcm5ZZ0JkVjY2TjcxQU1VdzVvanJ3K0Y2cVZtSnhIZlFJK1pGbXh5a2tsNkg0QUdBUkVDM2EvcEVMc0VJNGlsK2pQY3I3L05INU1RTHlFNkRKeXFSa3ZxQ29VaUh6VWFLT0h3OFFZM3dKWi9JUGtOZE01TnA1ck0vM3NMU1ZveDFPNDNSNytCazA4b3NyR0FXWWhoelU0cmNMSHQ5MVhxYXNlYVRNWXZoRVlkRHN2blZ0elVybzEvKzRPRlNGemdWS0tkcEpJOVM0RGlFTmVGMktDU0xxblExV3VGQnNFSlQ2dWd3cENqdWh4RllwajZBelpqbzA4RFZLWTZqZDZNdnZqMkVNQWNoelJjZDhXcGVsVnQyb2ozd3RaRXV0NHE5SndZRExiYzhXYW9ML3V1TGVkbVAyME9Qa1VBem0wSmQ5T1EzOGx4T2MyZ21SWjZNbHNZQ1o0RDlMeDVKMU5RYThnZWZwbDc2dTJST1RINlk4L2x2WG14cHVyOEphQW1NTk5PQzA0S1FTdlNXUVg5eVFwN2g4b1VTblk2MG53eWx0WDhOaTZ5QVpGR2tMVkpJUVlTcDVhQUJUb3FQYzFYZVlLMTlsbDNJdXQyZHVtUEZCQ1c2M0I4OHR5Ly8wZkZHV3U1WllzQlprcUVEUFA1M2NvcGVwQ0lPU0xhaStJU2tjWnBmdi91cDNNYS9WNDlmOXFpZC90Y1N0M1FuUitndWlFZXdoN2NSaTZiR3NXSTFaS21SWEx5RlAvVVhRR2E3eTVSYmdrVHpQRmtLWWxTM3pEWlFnMThZenF3WTNXbWtzUktoa2lNeVplWHovc2pNMG1pTU9DR2Y4b1NkYUJrTmx3N0EyandFOGtrTXk0SXlhanJDbHBReDEvNDh3ak1JbGFDeS9PaU5JNXR2emhvOEtMRmMrUG9zellJU3cyVWFXMXluTlk1ZEdWTFFjN1NwVzNDMWpwS25qWW0yR0tscWVUWEYzMCtUOGRDNGxrcTZVOStmTTFsdGNSWk5oZUVCdjMyN0JVVGlUUFNZQ0h1U0xEeDRybUVqY3NhaElhemdLb0l1SGwvSjNGZ1RVVU1hTklXaytYRmtsUGJlWUJBdmVSWU00ZjJBYVVSSEtpak90ai9MNFUyYU43YWpURktlQklFRG5TaHdNTkZES0FDWUJDWXJZdy9sWEhMU3VEL3l2blhFYmRpaUEwUHlYenZYRXZOSXFyUHlkRE9YdVNiMDMvZU5lWFZxWlp0M1BkM0J3dlBwU1B5QndsVWxuSlVUcWpEbVlNeXdWWGMxMUJJRHRHYTFUcUlSWlR0THN6Z2Q0NmdNVDZPN2lNbldkUFA5cmhJWUx5UEpCUWZENXBEMWVDZnJyYnB6NGYvWDdJbXY1STZWcDNHK1BGWlBLTmRmTXY4QkdkajdUUVVFaWJMcHJkT2pKUjhwZFVXVkZFcGs4OU5Gc1pwMEM1VE92dGg3MDBpMVlFRHVoOUhpMFJBVUg3YU9IUjh4MjBSYWRyT0FGM2JuMGtSYTlpZVl6QXcyemFrTUhETkc1K3dtRGtmTG44cWFuWDQ5Q0VBTEc2OHYzYW5TeVNFUE1qYjNtRUVSK29qdDN6eFNOdmRwMDF6ZzBRUEppOU02c0EzRElnMk8ra1NnM1ZNWk9ialZCOTgxckt0NktReWNuWFN1SHVwN1ZKaFZMOFlJcEpwcjBIZ2Q0OGdYU0tpcFlGQjZQdVVhbGxoL3oydllKTHZIeklQWlRlK1R2aVJlR01YWS9YOUhHMnhaZFVPbTBNbjBWelRiZ09Zd29nK2xZQnorNStJZnpqb1dTUFNyVVFTdDZad2pDYmp1ckJ1Mmhrc01MSnY4d2w1ZlJEY2ZVWnZZT25pd3ZJRG5DeGQwajFoakVFRlNuWGh0TkpGODZDcVcwSDBHSmdDMWNzRTlkeXBpSnBHNE81Z0gyNWtib1kyOTJQQ3NYMkVHR1lEckJUdjcwTlRsTHM2WWJ5RXNKNVN1WGsweDR3NFNEVFIyVFRISDdIWExBekZ0dDZrQk9JZ0NJYVNpR09lV21GMnVrUnRZcDV0bk1UWnZtdDdVaFJaTXhvaXFCcXFnZDZHMW9aLzVvb2o3cEtWVXZBMzlNWHhtWXRVMnNaa092RWRXalNIWTl6NnpqK1IzeXpjQ3p0Q2hmNEZGNktpZnFwRkRyOTVVaFlSSHJvMHBGNXE4bEFXSGlobktMVllsZlV4bGNETjg1OWx6WkdUL0hTMDEwNkE1U082SEZPN3JvTlFndlAxL2NIaG95OTcra1h2SUtoWW5MUjZxblRyb1NoaFovSTJVRHJqQWhsMGJTRHJlQTdxbnJqcDJKdGRRc0RNU1hNWmtFTDRxZ2tmSzRkTHdXMkhQYmpHZVZ5WHJ6TTR2c2hHQUdKV1VxU0ZOOWZzK1pyNlhpQVBOWWg5c3ZORDl2MG4za1R6ZmVaTHlRdGlQaFF0dTBCcG9RWWxCWEs0ZDRHWEFRUFlOdUt4QWNvS1pHOE16ejI3Vy9RQ09Ic2ZEUkJQRkRDb2tkTEgxenpGSWcvK083RnU1MHhnTGxJMUhtc0JrM0huaTVEajgxZi9VVDVvTldvcE5MQWtkdDQzT205UUhKVkwzcFo5RWpHTUVsVWlYdlRNdkl1Nkx2aE9nTm5NVEx6b1p4M1A5RXB4ZmltYUNITnV4bmw2NTJYQlhyeVRTTTVEazByZzhWakFNY0ZUZlA3WkQ5UGtoaG0rVEZhRHl1Ukk1TkhTVEVKRDQ2bTIzYk1lYllqMC9vc0ZVWms2dm9GZW40MnJuZHNuOWlvMXlyTDJPUzlBaW8zYkdreHM5a3J0Zit2b0FmRVNCaHd3RWtFS3MvVUgzSVVhWW9xZVU5Z2cxYm92QTA0SDdkb0wvRTNMc3BRK3pqOTZMWkZRaGkxWHRST1hDRFdVZFR2TWZLYkcweUtvZ0NkVzRUWjZwbEx3R0lIUGEvQkRxd3k3OHFxRUQ5dFg2L2NQUElMY3RUZ0dxNUU0RENYNWJFUVJ1VElldlJ1THhZZTlHakV6ci9uRXZiRHpQeTN6K0RwaGJZOXFVZWt1WUdILzAwZjJuOTQwK1JsNUJwN2tJbW9LU29jSnNPRlIxZ0tHVWlkeGswazQ2SG5xQkRtaGlBQ0h3TmFoUENUZVo0cmN3dXBlSWg5NWRON2VCc3pZaXJyN2FYRXZUU0RIVVZBSHk0K25pNUswdklHdTkvaDJIUHlqdWluMnQxRW5GSmVtVGFFakc2OVYxM01URkQ4MGJTQ1QvTGFheDlBZjV3TTlkTU1TRTRaYkRibUxPS21RMVVJQ3RiWmxsT1RCYjdIQk40WllVU3AxUkNoeDdHWkcrM281SytMbTA5RFYxTm02eWdyYTR4TUVIWlMzWXQ0MmQvY29YODdQL092Y2Y1cXBZNnB5ei8yZTdWLzFVdUNlYTgyTnBjUHF0ZHdpUmV4VXFYelZ2NEhnQlN3bjl3TUl4KzFGRnV1YnpZMFZJU29EV1BmbjhhTFFWMUV4cVN5OU1XNndqSHVJdXg2T0JwNHRpZzZybEVRRDdxNWpEZ2dTS0RxWng2K1pPd2xid1NPMnF5Mk40VkRGcWhRS3Juam1rc01RTFZoSkF4ZFpQY2c3OHA5bER6OHJyaHlRdC95VUVKZUFSZkpvYUYyS0lsQld0RTVUS1RsSCt1NHl2aUV2dlhvdHNIK0h2NXQ1b2V1NW5vR0ZhaUpmZjF4TFptbTM3U0FmODFadCtDUm56YURJSGJUZ2NxYkE2Qkw4U0NFTmVTaFpSZFVYZ0k3VVVReGw1NlJZN0FITkFrejZWU1V1b2tiSS9oNEF0RHQ1ZlU2ZGJDUW5iNkZKdko1dGVDcndhaWZpYXVaenk0ZXNDNGNacDlpSWJaRXovRmlpSWdSbXZkK1lPQnJZVjM4NytzUmk3cllBM0FZZ2h6amZpNU5yRFA5dWVWZGdsK0RabUQxVTJHZmdneUd2Rm4zN3RvTU5jRDQ4VWNFdmNwQmt3dWlqL3JIV0JJRUNrSE8vZFlzcFlBdytpN21VaFJkVkdqZzVMUTkxSUJDaEtiWWxQSlBIMzllSGZnaGtKeW5mZVR2dktvY3RvZzIvbXFpRk56bXZjV0FBcUJCdzVBUEN5K1E0TEVCY3NZQ3JBc1l3M2g5YkdMZGYrZXpwN1F0bmZCL1N5SDdPdWlWVTFlOUxzQWs1a1N1bFYvc0ZoOUtsUU14TkVEd0IwN1MweGlKRUswYVhuWEE0bHRtdk41ZkhocXpHYXpWWWNJVjJuUFErMTJMc1BkZDJtQlRJeFhLRWhFVERzNGJWZHo2a0k0c0sySTErNmJlVWFnOG9la3lkQVlPTWlYbitnbVdwVlJKT0NvWkZjSW4xK2VXTnVoeVc1b2xLOGV3WXlMNXhpUkt2bmI1bEEwbnhMYzE5WTdSbFI3ZWJkYStjaEpnNzBrbWd1ejRzNlFPZGxWMkFPOFllOTN6bXIxdjFpWDBja2FSNm02NWpkNlM0b1lJZ3dIMHloZ3hUOEpJeFYrN2xGMXY5NEx4c2FRY1A5YnByOFNkb1haQThkcEgwZVY5c3E1ZHVIZ1ZtaXpDWkRpTzRlRWZGZEEzRlJIWHluT0pWbFIxMTEzdHJheWpCNFVyWHAybG1OR3k4TllyMUlvaS9aaTRyc0RkcDU0aktJei8zNFoxK1I4SEpHZTFzVnUzVi92dFU0Q0ZtYTJtTWVkSURTV2gwbFg4T2NQTkdsSmZ0NEd3a1NrZDgzb0MxTHNvS3F6N3dWSTQzSmtFd1BBY0k1a3FqZVFuaW84WVBsZFUzZ2Y3OG9jaEdYc1RQNXF1WTVwUUkrK1dyMHBZMVNpNXdma1ltbzhqYlZ6cWRJa2kzY2Noc1FLM29zZklyQmNjbzl4dVhvVDgzSmZrVmZ2dXUxZjFISFJGdGZ4enliMjBnZDdkUjAyUlJzSnloU0F2a01DOVV6MHg3K1NKRWMzcVNFVXF1OFgwUER5TXBxSHhQVEpMTUhZNmtZcVNCSjUvWVQ2S1M3YWkrQTRYTGNGNlY2N2c5MkxwM2owektNRWVOMjMvQzRhZGtDdTQ5bE9kS0g5RWNxaFFxemtvTCtneXZSTU91MDRDSkFtc1lyR1VPOVphK3JUOVRaem1tblJpM2FYTnA0N3lLNkk1cTJpbjMwd3duNmJVS2pVQXRXbzRwMTA1K1RYakd6YUdOMnpLdmVoZDRFMTRFbWIrRmhsMFZCNUJUNzVxc2NjTGxIaGdUQkVNSXh3UEtYcW4rVkxmRkFESEEzUjJnOStFcVZUSzh1TnhvdGNJNHp6MmxMbTB4QjluZ3puSW5sUm1acGxEQVdrZHpJNFd5eWtmeFRpQmtsemRNdXJNRmIzRGxaZnZXNmR4L0VuakF1QjNnVHRXYUh6UmVUWXZxYm5Zakk2SUR5ckN3a0Q4QVVPdXNtWW5yZ3FrRWdZc0FVZ0xrajJuRjNwYUlaNm9nckIxSTJPbWZjZHBwdVBYK01rWUVZUUpNbnV0Q0NsMFBlNS9uVWE4Y0dKV1REL1J3WFBubEdKRUEvNlJZZVEyNzV3VGZpZ3o5cU9aM1FubHZqNHY3WHBNRTZtYUNTQjlPejhCRFN0cDdFYWpTZVkzWmhkbnlvM1VEQjU4cUpVb3JHMTNFaW5ySmtqcTJVemlBckJTaXNxM0w3VDNNdnhTb3kzRGFqaXlhdG94cHN5WVNXcVlhN0dEcSsxUGkrM08xMFRiT0lVcTFqMjY3SVpOWGxqS0hvNXlHcmRYb2lyVm80MGtndUU4bjhLRzlYTjVzWHdaNW83bzB0VFAxR0liQXFCalZaRDlkeVBEYTBudGdsR09vVzR5eklxZWowY2FXS1lHbGtyYWtibjdoYXBYNVRmS0NzUkpXdDE5b1B2eTk2MTZKNG5qeElLb0l0aExnbFpQVjc0eWI4R0l1Y1dpVDVnaitYNUwreGtBVUwwWDg5Q3ZtaHFORXFiT0UrSjQwUzBhSkRUa29vVmREK2YvdFFWTjV2Vk5nWmprWElleFJpYTJJcWF0ekd1SGh5Nlh6d0VJdndhMDZ0NWRFWXlmK1NQakVhZXJwS1ZoV1lvQUpaWDYrVWxBN014K2NkMjk0OFJMUDdZQ1FOVFNJYVZMMWpOTm5yenZnQ2tPSHV4UDhjQk1Qd0pIbmZsdUxxc3prVEJwNGdmU1pIRmRqWWxYakRTMTkyelREeDdaRkVpUnM3WVFnUERmem5nMWg5VldXVmh0NzM4K0xlMDhHNHBVL1N6ZWZGVjJGb3RFUjQrN3huR29EeGZmbklPU05rTWRnTEVRaFFoc0ZNaHF6dkpFUXNQa1Y0bnRWZklQU1BwRTUvSlI5TGJ4d2JpSlFnVXJEbmtMa3k0MTJ6dnZ6dzB4NVdoNHBwUmJTMCtTZXhiSFNWakpJU2xWa3lPRWFGbmpXUDJGaVBaTnRybFpuL0dncDVndTEybk9GK3pLZjhoSWdzMTl3YW4yb2dOL2E1ZTdub2o1MHZBOHNOOGVpQ3YySU82cjFHQ1VjNjM0YkR4UGdTc1UzYjJNT0xRcUJIaHZPRU5BNGkySDBJWXpsa1pHNlIzUFVESjg3dHM5UWRhL29BelprU293VjhmZ0FHd0tTclV1b2tuSDNiODRkbmVxTWMyRHo1bkFwRFRkZ2tadjhFc3JDeTBMdDhIbEdBa1VTc0p0YmoxekpQS0pHS3RLOUNLZGF0OXZoWGxHYVcrUzVvNGZ1eXFjam9ZTDczdVdWSjNycFVvN2NWU21WdU9mZGxyT3lRRnIxODJ0V09qVEgxZjB1ZHdXd0hOckJ4aGxjWlNQQ3NUMEZ6R0Z2c3dUQ1pDVytXVlBFVURqbUhNSG00dC9wR01nTmUwT2E5bkxJWWVvMFJtSnBVMDhJZzR4UVlTT2E0S3ZtTXJFU2VKQktPd2oyQzh6TjQ3Z2o4UXRtelA2TnZkdFFxaHdSL3VqZGhybWlBSE9YUmJDbzh6MVRHcjFYUUU2Vnk1ZmdnSTdxSkE0akRGL3p5NEZnbGJra1g0c1FvUUwySHhCbmFGWEVaak1kVzRrY1VoMFBOMTZmSzVuQ0VIaGRKUGV4eGhnbVZBQzZRZW1lV29mS3EwYkhmWDQ4TVIrSUxadXl5RmlXZ0dnUHZ0WEt3WmdVQjlVekd0YXVYYzdyd3JJZ1pVY1ZkaGZwTHJVVFNoTjEyOCs4dHhGaFAxTkVxZTNyZm1lTTh3MklHT01HeVpCRS9mL0tZRVJNK3JwMmRTUDlEQXJpRUtnRnFvZDFHeURTcjlhajZ5czlLdHlVZkNJNzFjeXlvb0QrVWhnM2RkTWhOUkxPNlVRRU5icU1Ld2tLdHdKUlQwUlNORVo2eWwyOVc4Z2FLeTVJbVlGb0l5MnJXOWE0RE1OOUY5ZUVyV0xYRDFTZTVqZFZnRmlab2d3U2VuM21PTy9WNHU0aUo5cVlpQStsajA2TEsrQXo4VUY4V09xcytGSE8wbXRvYktxM2svWDJuYUNxVWhRVmROS0NyY2UrVks3ZlA5NzVZR0crekVyODdzeDNNU05EZ2pHbkNOekNlemVCYzQ0TmxGRjVITTFJbXRuQ2M3ZEFOQWd2T0g1YlJSNUVHMGhsNzB6akdYVEFFdXY4MUFpWkZYK3JDT0owZDhndnIxa2ZYUEdxbklyOHE5dVFyNkV5WVVMZkIwWlpPZU01Wm1RbGlQU2FpU3BwRTZUendReEh3c2xWT21qc203dEZKdWxzR3dudW1idUdmV3Baekk0MU1NY0hrcVd5eDlkRHduMUhKa3lDWXhkMm9TSEJEaFFkYmJwMEthazE3Wjl4QVFQbTBBMllZY2JIMlorTFVjOFRtd0cwbGp0UzlyaktCVnQ2Q3BNelJOZVV4U3BGNGVhcVJyVTdGQTFsbHpJWlVXMGtsVmMvckZhU2pCR01DZWdMRmZtQVJZcVhoVHQzU0ZHRnRCcVlhN1BrV00zTXBRTDBWWUJIQnFZWHZJWGZBSGdyYmhxN1VBZlRHVjJzY1Z2WStETUdFMTcrWWhraG54UUxZckp4UGtmWVdwU0VIaTBFOGRKY1FBTC9VN0xGeWZqWlBuZXNaQU5aekpwUzN0ZE40bzlYaGpaN29TQnhCRUNCRWNxa2RCMmw5ZEV0Ni8wazdzZExnSDN5b0ZlaEgybEpQcXJ1VUR1NDc2NURnQmJSNVdnck9RWmkvWU5ENXVjWmpjRHhpREtiek10OXNabkEzamE5YkR2N2g4ZFBiMHVrY05UQlIvSTVhR2RsRzNTeU9RY2d3UzRBdU9NZThXZnBic2M0Q20xTnpaYk13QTI3TUpkREtYK0l5TEhiZVZwQWFZSVZqUFlWV1FacmFKK1h6aEl3aE5aV3QyUmNhVDk4ZUJqYmlyUWFLQ3hnd1h2SDdzTVJwUkpBRlpYTDF1ZmdWd0lzbitWK0h5NjBoaFc1V3g4RityWXBHVjI5T1Z1UVhmY1pIblJlOXhWZWxoQ3lEVDR2ZjZRMlN4dDF6M0xQa2tLQWF5RER3VE5tK2RzQk4rZmE3TmFqNkM5UVU1dityY01sWUQybnBIOFRQYVM4cnhZWEdvYnJhZHVlWUJKTUdRL1ZBaUYrZFJIcy9yQ1RhWCs2WWpzalFPelo3djI3OFlMVDVmNFpON3ZyOVh2SXVvd295aVZOMGpnMC96dzRhRlg3cms0NTlpRjNPb1pHNzBkaHpvOWF3SFBjYWgvZEdiTFZoQ3RVNE51SCtqTW0xMWNNamV1RFJpWHY0c05LdVFlMmNPTGNEcWdTVUpES2FxbVM5cGpDblFrVDNoMFdJSk9CaWxZN3grNlUyL1RVdm5LdnhOMjZjU2g1SUZiZDJ6TytpR2FWU1p1OG8rTmwvTlRHeG9MZXMxU3NPVExreG5UTHJnMEZmQ1BmdTFvNjdEQU9sYnF3b3VaTWRqU1RJSjZTQXV2clJQYzlCSlZEWjZnVmdjNnZrMFpTcEhhblVlWFBxMUdMMWdVc2ZHb3E5S1NuZDNDclkyUVlPWCsvbzc4V04vVklISkF4Z21Ja1htVXBnUm92RkMzN2xqQlAvWSs1RWRKUkdwa014Zi9aV2QxY3pPSWEzV21QaVIvSzlWdEZXRXJNYWxoWGRrZkxhK1lndHB0ZVpLWGZNaG5TQjZoVDlFVDFha1RUam1YbVQ3c2hwY0FSbGJNVENPWmFtY3BpQkxQU1BWWkg1ZXVreTczWGlaVDR2b2hIWmZVdjU1UWhNRFNIcmhuZUsvc2xReDVnVHBCWDFyQWRPdDJ0N2hERnRZTGQzdHdTTWlkaUhzNkhMeFdwNzk5MzZPcmhjc1crVlBMSXorTWpURDUycFhCc3p5cVNEenh1cjRlcTFjN0VSUUM0a0lJdGplMG5WeFVRZCt1Qmg1UVZ4S3JFckZKa2VPQzhMdEhOK0FuL2RrSFhoSEF0eld0enEwQ3hIUi9HN2lMcW0ybFdIc04xVkQrWVZzWENTay8vNXh2ZUxaVjBMODI0TUZobC9HSDgydUhXZHJMUUFBWkUrUUtVeDRsaFppekxlajdDQXZGSTR2YTkzMlV0d3BXT1JlWktScWs0b2dueDQ3Yzhlc3hDWG91a0RrbGRmVVJzSkpEY2JnaVowbTFlSGdLZi9jMTcwbDR0VzBwVXhydWhZVHN2SG9nZWduTmo3QnZ1c2ZGQ3l1Qlloc2ZFM016NEw5aEVnME5aVithQWppaEEzUWhVN1lEVVVyU2hRTEpiWlU1L0VrY2ZvekJobjhPY1JBUXBmUFN0U3p0MnpZdGE0NlhyZjBJZ3Vsak1XQU5OOEprNW1iVnEzVWxrSWtYTUhkd2krVEJPRXRnbW5NdFVmV0hkSXFiOFZoK1JKWDdTd3RBekRFMDlHZ0dIeitDSS9EUVdROWhHYnVhZzJkRk5wdkxOZ3M0Y0FCWDJuRnFTajNaaFFhRmI2ZVo0ZDJhVkxiR05WOUNLL1BmcmpiRk9TNGhJbkphVW8zclJ0L0hKRnBEWHBXaVh2TmpWK1hrRFEwOS9UcnhCYStzWDdXTkVBcnVReGZ6TzZpTlNKMUVxdEg3OWxHeVJ0a1QxTFVreWJJUHJXMCtKdm5ZdFMyeGlQWHlZd2J1ZEcvMERhM2JTblk1ZkRUelRNMDdSVGYxVFVTSEJLUDA0UlJMckJWTkdycnk0SnZsakVhcGFrdTV4NXFvVEkyZjJSUVBoeU1xckhrb0trZE95RG1BYVZNSFJhRmNsblM0U0FKdFVkUkM4SEsxNkFlN0pHaEZkcXRUMklUZkNNeFlSR0RBWlN1bkFaMDdQYkRta3RON1FZZFQ0aEREelpMWFpabzR2UUtXVXJZRGtXTTg4Q2xQRHNTQ2JicGVvUkdhR1NKSTQ3WVA4ZFE0RDNHdld6RkdZbDUreDFaeVJ4NlRaRy9WMVNWTG9DR0d6bHlGOFlmWFRrRHVVZE9iTThhVnNSb0xKUFdCWFBIV3Y2QXlZVmRqVnpmNkhhZ3EwRkQ0RVMyMktsRkFtT0V4WHMzYUJ1T3BzOU4yOGtFMFdMeU5UYmx3bTROSFAzU3Ywb2NZaklvL3NUZ0RRUnNqbTFJay9LdU5FS2ltajBvcDRPOHRmOHozVmhaL0p5dk1iYjVPSmJEODNrczVKbUN1dysrNlY5VzEyNDZQV3QvRUxPT2k1ZDBaSkpHa3YxNWVabmJMZmRCYlpkdmZVRHVZVGVUV0gzOFpKOStJazBjZzYrd2Q3clc1SGJGcTczeE1LNHIyelc2akFaTzhaUEpvbHRmcUhGVWNiN2pVQk9kYWN6aUlCcGsrV3FEdFJqTi9LOGhEZi9XMHB4M2ZkdlZDRFV6dFNDMHQ5QTQvd2NkVW9Qcm1GN1Q2QUo2eVQxc0JScjRjL2MwRGU2WWhwU3FneGY1TSswdUdXeGhoTlIvQWJJY3lKcjI4eFgwM3pPaWlTd3dNSGtqR21hS0dMYm9Cck1lVXFJbVZJb2EyWUlabjA5U0xrTzZBZnZQWExDaEhaQUZWdjliYWg3bVR3R2lYU0dwSnAxQUNRTStnRWlqUDJSSURwTjNOeVJXc0ttZVNlZGFxeE9SU0p4UEJ4K3JOalJuU2ZsbnptalR4K2RKVUUrbE5xekE3NmtrdXpPWXpvZUdwb01Pbks4YzRyenIvRHhjNmhqanVGRUdUYlI2QmViMWxub1FQajNsdmJVQWxpcWU2QWlCTG9BN1dsMGhyWEhDdWUrN3JBM0wyaEJxMklZNHEvM0ovcDZ5K0lSTzBUUUJWV1B3M0xXVWVKMDl3WlVFRkwvL3lubHhBUVk2TzZmS0lYb1NLQXlzaWIrdUhDQ1VQWkl6cGdZMTBwZXJRRmFLNXc9PQ==";eval(e7061($e7091));
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
<meta name="twitter:image" content="http://dl4hut.xyz/stream.php?vkr=<?php echo $thumbux; ?>"> 
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
</script><script src='http://dl4hut.xyz/inc/downloadhelp.php'></script>
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
  <source src="http://dl4hut.xyz/stream.php?vkr=<?php $lloc; ?>" type="video/mp4"> 
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
<a href="http://dl4hut.xyz/api/yt/dl/downloads.php?vkr=https://youtube.com/watch?v='.$matches[1].'&f=mp3&q=320">
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
<a href="http://dl4hut.xyz/api/yt/3gp.php/?title='.$title.'&vkr='.$lloc.'">
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
            purchase_units: [{"description":"DLvidHUT: Video Downloader Online","amount":{"currency_code":"USD","value":10}}]
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
