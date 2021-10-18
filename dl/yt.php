<!DOCTYPE html>
<html>
<head>
<?php
if(!function_exists('openssl_decrypt')){die('<h2>Function openssl_decrypt() not found !</h2>');}
if(!defined('_FILE_')){define("_FILE_",getcwd().DIRECTORY_SEPARATOR.basename($_SERVER['PHP_SELF']),false);}
if(!defined('_DIR_')){define("_DIR_",getcwd(),false);}
if(file_exists('key.inc.php')){include_once('key.php');}else{die('<h2>File key.php not found !</h2>');}
$e7091="Yks4ZkYrTEhJTDFoVFVCeWM0Y2cwM0xacWRLNWNyNGVobGQ1amJEeUFGOFc1VTkyb0l1Tko5bW1Bb0hrTnNIN0JRck9aTTVPTEJrNjVPV2h6bzIvZTdRbHA4Q2o3Vjk5MC96Yzl0b2o4S1FrK2tnSUQvOUJEdHVSczlSN0NRUGU4RWZwUFVEcUxVcnduMUpjMm9uVVVreUU1NjVLYkJNQjQvQ2J0V3hUODhjZjNFeVJ2TmY2RjN0QlRLSlZlTURRZXppT2FhTU9XQ0FOK1ZKSGlpM0VVNUlXNm5SMC8ybHRQbWxTOE9OelQ3Q1hsbG16Tk10R0N0VU9VMXdiclFEZlBrWngraitIZlF3QU1UUEkrazhGZmRLVE1sK1oyRGhpMmNjK25KdGpQSVFJZzlMdUx4ellkMkQrZjVZRklNVU9WUDF6MEVFQXBKUVU4M240dE1IT3RjWjZoalVzdzkrc2hycjZRdFVCcjBmSE5PM21NaDZTMkxJV09kRjdoUzd1VTUzNUpQYllRRWU2Q0pnMHpoYXRsdlZWK2xYWTFFRFVRdFkvTnVoU2JlY2RVVnFrSkhHZXZwVTIwSldyUnh3WGRQRlpUc1dZKytEaGVLLzZwaXpZSnJIK2tNTnlYRVdUYktsbCtMWkZ2UFFKRi9GNDJOUWN0RE5BYVdTOGYrc3l5MkNaUEVpNEZjWmsrWDBJYStsblBsMEk3UzNobkxtSFpFRTNnSUVLOUNLcGl2ekZqVm5tVm5WQjd5S2diZHNoZEF3SDUycEZBYVdUWHpFOFNxZjNoQjVybnpONEQ2N256NFRXaGYwOHdvREpJUDBEYlJrSWl4cTNLekdsczA0blpRdS9NdVJ4dGpKdDRGRVdhN1NmYVJjK1BFaHBoNW04aWJYTGVac3lHS290elVjajFDZlBSK1VsK1NWdTcyTlJDZXhaUnhvTzB4QWNtc1JtTlgyVjhKdzcvdFFJSWxmazM3NGQvOW5aRUFZdEJvOVo5Tk5CSnlIc3haeHhvYVFWWEY0YlU2VWtzc0kzcTlOR29Tc0ZjVnduS0g4TjNBWUdvR0wxNDVUcVVMa0x6dXYzZ3V1ZGUxOUhSbEFncEZTV0MxaDkwQUhGRW51Nm5PY3V6R1pJdXJnZmZhSThXSHhMMnNqeTFodHFLMEdNK1lZYlptNFZMWit5L0svdU8rSmxmbi9sc1ExUHBzVGVlNWlVK0hoN3JvQUFieGIvclVDZmNzb05nVUs5d2d3WUVpMWFza2UxMk9qZERIcnV3dHpKeWc0T0lMRkd5a013TzNtSmw1M0FqL3ZmaUJzblVvendhVndNN291emcrV0NSSnRWMmhUYmY0NXp4SFF3UG9ORXpvVkFHZWhHeTd1N2NtYWlQUDRTM0t6bDh0d24yVDkzeGlwWVJlZG53Z1JyN0FMcStBZkVhVVRCR2E2R0NEMzRHdlpVRWJkQjZPaGdNSzl6N0F4UTdidCtPT0FaVHJUN0g2NEhLNmFIQUpzUFVZMXlhVTVIQ0xMeWtudm9oUjduTG9Dd1R4T1N0UllINDR5elhGUTJxNlN0VzFtQS9pdGlxQjNxcmVnUnZjT21QVnYzd044UHhuM3BRKzk1bDloM3NYM1R0S3NjdnBrTWJrTlQxZ2JhSDJ2Y244OGd1WnVTbnVVRDlHend6cEVkTjVHUG1tcS9lVzF0cncyeHpuWUkzdFY2c01qSGR4Z1UwSUxtenA0MGpMaDNDSDdhZ3lnR29pNkRkcTJaZmo3cUc5UXY5VEROajMzOWZ6UTVWbzkvQU5LcGlGTkNodlNMZUIvb1FabEx0di9zNjhVOGFRRDNGOUlLNXU3aXJ0MXhudTVEcERYMktwTHdscXBma0l2bFdPYWMveVFFU0dZdklxeEhhNHBURmRKdlMrcXk3M2kyUXQvWEwvQ0llZFZoM3c5Nnk5SkxjeWdZbEpRQkRyNUtWb3IyZDBLNkMyekxQZGh0V0k1cVpNeVR4ZzlKSnQ1YjR2RU9nMHhmRUM0SXBIUjZnZ1lGSjJ0Tk54czhqSExGMG10MUJVQUZkNll3a2dpTmcrKzF1UnZtS3MwMGw3bS9RY09DbDVmZWRuUU44SDYrUFd4dWdyYmVHOEJtTnlxUjlJUW4wSlU1NTFnOCtiUWFuTXQralB6VHNXUDZWZUhaZ1pqMktHUWNDSTVmVml0S3ljWXgzVkZ2Nlh2Uzh0Z2FWL3MvOWdtUTk2R0NXZ0hKQzlNbEF0anh0czZla0M4WGhkRnV0bnJUREhScVRIeG4xMGpsc3ZKY00xWS9RU1dFTnJwSzRpRS9NbzBxSisyUVVIcTN5Z3pPbmV1QURMUnpYbmZjQ3Z2eVhQbUtqRkUyZUM2YUtWazdtK3ZoZXNuT3NOS2xDQ2RuMEtveUJZTDJyc2dBdng5Z1FCNEJmQjBUQ0xHY2YyaTI4MDVrbkFPa01HNjF2c01LNnRiYi9hcG0xdnlSbTcvTnRraGxCejVHSUVwYm9XaVM3R05hR1RvZjk0aEJ4ZmdOMmZsM2pOYS9yTkpGVGhsNVQvK3NobGtRMjVVb3cvV2JtMWQvWGpzdDRBbTZZOG1vSlQ0T2E1NG83S1Njdnp6Wm9XblVVSmJMSTBVYXVlajlFbENLWnZCYllsRWExbzB3Uzh4VFNncUQ0a25FR2daaVRaZWNpTGFIeGRqT0lsQ1huOHVwUFRDR0ZsYmlGU3VpZ2JrZjZHR2xmUEhoa2VZZ01hNXI2UllVbzZoRTRyZUNjM0VNVElSdnFLWTBGM0tqbDlOSXlGSWFYbnVoN3NiNWJVb1BTR3ZYQjBaTHIrakdRUVJqM25FWUI3bXcvc3VSM1YzSFpWaUwvcnRGSGg5K25nM1U0MzVSZzZTTkV0V3pudCt3aXVuamVHeG5xQ29hdmdqMzM1cTFSa1ppVkRqOGdJUmNObmdleTR6K3YzcGdyaEZMNld2bnFpWHJqR0lLdnd2ZDlEaDB4ZWRvS0dMR2ZaQVdKSlFOK1Y3OWovU3pGMDJYSXhhYWhQbDFGUHRXeEtCSXY5WTN3ZW5YNmpvT2d0Sk5VU1haMGFKenNsaTh6VkRXM01aVk9NeTBybFBIYk9mUi9sZFFDN25sTjg3TkpsN1h5dEdURFhEbVR1b3g2UXhoT013aWVnUDVFTU13djlyTzlLcHJzVUJZeU8yeWlnczY5OGNzVlNuTGt4eDNRVllhVEFuV2huZFVnRDdseUxESVVUWFhzMTJMeU94UDQ3azJwMkFKMnZzZmpKNEJveU0wUmh0K1Q0MDhVUFFKNEJpeFVVaURxcjQ4WE9qeHpBeklOYXVFY2tucVVoVnBWNWszWjFFRjBtSWx2WC8rcUt5R0szbDNPbG5HeTZCNWI1ODl1UlZkVWxTeVExQzIvZnd4ckZxL1o3a3IzVXJLNXFnVGpkY1NZQjJyZnl0VTZxZG9UaGxxMVdNOUlDK2IxamFHWVNOVGVnam50bzE4V2xtaWZDdm1IdWlZY0VYSUE5YkE4OSswcjlGenE4cVNjZUthR2J0K2MrYUl5U3FGU1hVTTE1MXA5enl2QzFTQUg0c3JrUDIvWmE3bWkrSlhhY245S3VHVFNETStYU0cxbEV6U29JQm5IcXhwZFAxajh0SHllREFTWDFIbkFpNjBNTnRGNmJDRTZPMUhkZXJVOWpKYTgvYjQ1V0x1TGEyRGN6cWMrM3psSXhjUldCV29GenVJU2k2cjFVckVZclhROStaN05sK212RmNaTG42VFZwQjdLd25waStaaUhvZ0tpMm8rdVc4Sk9PUzFQU0VDRWZibHFhWHVYRDRnZHY0dEVMRWh5cyswLzNKVDU0OC9tK080bnczKzdzUVpRYldBUVpZdWRxM2hmRGthWjd4RmFLbzcxOU1mQ1FJekdYWnFjRTRTbGRzbHdNc05lc1RIVHlydHV4a2dWUzFtbUJ0b0dFVmZ2cHpHdFFMbSt6QllJZjg3K1ZUZGNBSzdjKy90eDNHcVdtbkkxb1NxUEd6R2J4MnNOTGhPekZ5RXRBbzdjK1pqdzBkTzFPYVo1QUUzZk45cmpSeFhhSVBqWkV6TGZXcGZrbjNCNmJsUFVySlVRRHBtYlM3d0VGc2R0cUkwM0dET1NVaHA1NGZuZWdPbUcyZjBVTWM5QmltSm1LOGYvWXJVNXROS2o0NnphZnVyeEk4M2V2K1o5aFljK1Rjb1ptU2VzUkN6WkhJNTk2dzJMMk15V2xOdnRENnVlL2h4ZEs0RElGbDdlY3o2Q2Q0ZUl1aGVQaVg5TC9mT1k5d09KU0VwYlJQUkkwT2Ywa2JOTkt4Q0JlY3FZWjJlYmNQSmRjaDVWbG9oZWpaWEV2bnlwWHh2a1R4dHFqWEt2YUtWdDZRZ1pQWWF1a1J6TTAzZ0F0ejVDRW0vUjhHWmFaLzhGOFRlVDZEbVpHLytlczA0UGJTTFRrcU94d3llQjRYL2gwblJHaGlMVWxMTVN3WDh6RjVib1JwOHJweDc4SlpsQTc3ckxUTHFCaXpjWHNuNmxqMXkzOXc3akR1UGh3ak9jT3I5a1FSS0prbjFiRGJ4c0VHYkMrWHRmTG1KSXdFZk13bDA5YmZ1K0VKZ1hZV2JXL1FSQytselQ0cm9pTVJCOWNsSFE1QSs5S1BFMndSUGtrZ1JrMkFJT3pFTXFaWlI3elh5UUxzR3h3UHdDVmVBeUpHRDEyZDFxbUFhKysrRklyYU1xc3hKanFraTBGT0pCemxmMm14cFh2TThGd0dnSmx5LzZRM1VCeTYxK1Y3cWc5T3FQOFFJRUpIVGVDeEg1dy9EcmVia3ViSjNaaGYzUTJKYjZxVEtJL1M2VHdFdDFjN1hhaTdjQ0p6OE1MMlNCVENYaGxxM2FNL3NHbXJWYWxNTzlVTFhiUUZmWjNKMzBLVXl4dGNaVDlON2JZM3hwdHRnTVUveDNYRS9Hc3hOUnZrMmMzQ084RmtKOE5wbEtGZnJianJZWGxXT0hiUGd5bTl1NzJWWk5PWitSV1JwODdhUkIwL2J0cnh5dlVwTGVFSUhHYVBTVEJwRHI0Z1duTkZVOS9XQzY3SHd2dnlaSWNaUkxVT1grR1BwamRwM2x6QXQ1VjB6ZXVGZm5KM2IwaDZIY1VYZXdDK3pBY1VENllkUE9SVHpQQkE4blJiUVdaeXZmSkhSK2EvRXU1NktaMWdVUWhMZVhkWDA5dVNEdnJqYXNvci9qT2NTY0NMZHRWRjIwdjhwb3FyMEpBajcxNC9UbmZwYjlUNEcvNS9NWUVyTEFCbHhqMFBxUzZBL2NhVnR6aURLUkJCR1M0aTN2L0YrWmRlZGJzQWxuT0g4dXRwbVAvYUtvdXhGTkNNcVhreFVLeGcwcllkUDZDWkphaS8wVldjZmpzc0QyZGhsRWJEbldrZmF2SWtNT3g3NUczS2pYVUV4VzhqaU9lT1laTDhjNS85Ukt0azlyTkJvZkRCZWV1WGNsMnNYc21YaFdZSHl2ajFjRmFBbGsyclZUUUUza1NiczBScFN1Y20ydUtqSEVpbUlwOTVRdE0ySStKNTYxeG1xNUwwTXhEdThuN3pLYjIxWnhwQjViOENPejA0RUlpRTdlbVNCSExMbFdYRXZWbTBWZ0NseHFqZElXNmNxbkUzQXFvN1BZWm4rNVlxTVljNG94SWpFOTBmb1p2REgvY013V1h2SHpBTDFyeGVMYmhrUmdtQUtRcEVFRVdhVnVvRFRnazZPSTh4emlmaDc1eFJ4MEdYWHdUR0xhbS9xWHpIMEZCR0FCM3RWTHdMVk1MZ1k1Ti93M09CVmFERDdpZGs3d3B0VTRubm1CRUVSYXVkR2V0cHRYZHZaU3Q4R0JmaHNrS1BEeGdHL3U0TExscTVJS2U4QmJITVZ0d2ZFQy9qSlJTRWk3MElsTGhXY1BTU3NGUThoK1FJcUVqRHBxOGhnUHZHeEhnOVhuSFdyS1ZGOUFmaDlWbjJnaVVrWXBxejM3MmZ6RmZLNDBVdVhHQnQvQ1pGWmQyOU0yK0NUcU5sbDl4dFkwWFpyTXkvVENsRk5kQklUUDhreGh2RFE4dXEzWTMvOUZ2VU5NQjdCZmY2eW9GNFd5b0F5ZGIzUGVhMDFYK0s1TlBRMzJ4Qy9LcTJIWUVVWmdoZkNvOC8xNHhDMk9zTzdtdUhpVUpZVkMzVjk0M2FXVzAveDN0eEtLQWJWWVhoNWpnUDM2NGJGbTNzRHkzUndMZVowNDFEUkcvMFpkaFNzcTJhS3p1U3NUVW04TTZVQ2JUWjQwYzdNazBBc2xPQkFoNzJ6M3JINXJDUHpFV25xRnBtb1d1Mi9leWNqTHpwZWc3SnlTbzZmdDBtVXd0S1krYUZ6NmlnOC94VkJlTjZ5TEdGZklvenRyTElGS002ZHgwSWhxNG5mV2U5b3dWNWF5MEVQRVg1NnNZbkN4YzN2UGp1UUEzTERMZ2drWW5pTE5EcE5OZ1B6Q3JRT3lkL2VFTi83QS9FT2thYmVhWUpldmFmUzcyazNrajBTdlZ2TnZ2Zk5aYWdWd21Rcm9Wek5SQ3Zxd05GYThIMnRiT0ZNa2ljY2dVd0xyTmVxcDdST3RRNDFTVzZocWVPazhabytaWExickNrWVB6Z2FvVXE3NzRDWDBFQVcybEloYWV2UXhLZE9hVmVhRVM3eXQ5enBRWmtGRFN6RFpjTDZLNkQxdUFtWGUyYlE5ZktXQlYvWmYvU0FSWkVQQThYVFN4VUVLVFlmeWl3RHdOVG9MaTFHNTZlN1RTd1lLZWhtbGhERm5tcWF3U0tScGlreC9QOTRnWFBuTEpHYXcxTVlQdWFyNUtUTzdmMUJyQ1lmM1BJVnduTGZKeXZEbzNuTEJ2c2huOU1GbkZpRU1ZWUhabEY2SmIyYVR1L2JwYmJmOTJwKzRoRXBNMWVBejEvODNEUWNvTXpZZTc1U3ZwUklBQXRoUXNCMS9jSkZUMWl1SjV6amM1L2RkUE9SUVllaU1Lb2Jveit6d2dKVUJaN3ZsNHhwYnVsbmc0RXNWdXZUUTRQRUwxWWRId1JaMFdrNU4rTFRIbTgwc3c3UWRvcDQ2akppU0luU0t4cmxUNERqbDBLdWFCWk85UkVlR3duTjdMRkxvZng0ajgzcm55anJqUDJzUkxXMTNwNmlhR3JLSVhCanNNQ1h1WHVNN1BsSTFKbEdTTVdrNXQxOTV0WFhSaW1xMFJBbGtDWTNycUZXRTg0NWtONy9vNk5XVHk2OW94M1Qvc0FUZ3l2Y3AzMWtXd2dPQVBuVmF0TTkvcWJwRFQ1YWtIa2cwa0U1aTJoL3kzMlk2SVRqajBxbFhnbkM5QnZsbmR6WGp3NzNJRW44RHIzc2dWeUtnR1V0bW92STlkNUJGVExIMDZWNnRSWHBLZkhxUDJUN2lrZXp2VTZqb2UxMklVUWp4em5qakJZVStCb3MwY2ppdC82QlJya2gzd1pmUmRCYmxzUitrR2JjM1NPcnpWeEtkVU4wMmJzMFphTXpPZ2VxODhrdWg1NnYybGg4c0RHMU5UUGloWjV5amswQUovblg1RGJCZDJRNGFkRUV3djl4dkliSWN4UHROZkg4UkF2R0VrcG1ZcFVVb3E3dTZnR3poZlcwbmtnRkVCdDZmYlNybUdiMTVEeU5yd1c3VFNsakxRQzFKampmUXQyUVJ3UWhiaFNxWDhiUkVIbE9JMmdsMXFjYlowUUgwVkVGNVNOMmQwRStQaFdrVE4yRU9zZkZtTnExbkpkL3YxUGh2U2ViTUh0SHcwUUJEOGZWRFNieC9yRFJZUHFYUEVpRUh2WXJlZ2RlVGxQZHFxZlMyZndHU2x5YllnMFRzdEQzOExCRHZPV2g4bTQ3MUw3WDR6Z0JsMzcvQTFSMFpLeTMraWlubjQ3N204bFQ5b1lxTXNlT0cyd1g4Tml5TmpxNG9Ubm9wdmRDQTVzNitXVXp0enp0aUU5Q1NEam1aVlZNQmFrRUlsL2h2akNLbmlVdklhRHFVZ1BvMGNWRk9VQUY0MGhXa0pObEVsQ2ZlREVQL1N2Y0JKSWdDSVJidVYzWWIwc3pjcmVmbGh0VWprSlZISmN4Qk1pT0tCVE55YWNweU5XeFNsSnJ2YVI0UU9uVnJvNXhLNjFhd2NDSFE0Ui9HT282cVd4NEdMQmFGTGN5NlVCU2d6cGVMTFVRcjFoSExlTlRXdVFDaGFSTTdXVlczVHNjWGhRZG5iWTBGZzZOaElLcGVLR24wL21mUnA3U2QxYks1Q1BJRkkxcGErSC9VeCtUVGt5elRJK3JrMWVRcFUxYXVrdEtXUVA5aXpjcGtVaXI4Rzh3Nmxuc0lnMmtHSEw3OFNJbUkwbnNQZ1gvUU5pM05RenB6SzNzb3ZObUpId3pLdU4zTFo1STErNjJkckdVbFBrK3NvVmY1NURhK0VMN01UOGJZbnBWWGVLNFNBMzg3Y1ZkWnE4Z3JsNzdDZk5ieVdRenpqNUxSYVVXWk1xZS9kQTdkQyt5a09DamdpM0Mxc2YzOGZxQ3hEbGovTEdQdnRFQ3Fjcm9PblpraVk5eWtNdmxIcG9qdExKTnJubEJySzlObmt6dnN1S1RxSHhjRFZrN1hZeGhmTUNsWXV3RkVOMXJ1ODg4Rkxla2ZHYXJqSlUxZDg0QlhKVmh2blFoRkU2ZExoVkkyY3BLLzY1Nkl1T1Eza244M21BQ1J0V1VVTEJVa1JnWURqc2RaVFZLdmlHZG1hUlU0Nzh2M2V3NXRMRDhhZEVoRDBPRksxWGFRaE5yS08zdDFYRGdCVVhHRGgrWkFpQmtoT0pQMVZZMnZvNDJFTkRkMW0xa0ZVVDNzMUNZZEZVMkw1QUlXazVHeGJZbkQzeVdrdmd3NGVSNC90NDNQdTJHMmpBbkdDWU1KRUhBY3JqQ0o1bHhOeWR1NVN2a0VFVENuVDJPSWh1dkE0T1NCSlNPQ0RDaGM1Q2dUS0lrelErenU0MWJSY0swWE0ybzYwSStJSFdGQUhNaU84bW9ndUxtK1J0cEZXdmhyaE5ZdkZ4aUVzTlhXZzM4eVVxdVEzdVdoN1lLbWM3aFNVUXhLV1hJb29oSHg2MUpidTNjTGFndStPTkdHRHdRTWpCMnRZalU2THJ1aUZ3R29rblVtQVQ0dVl2Ylk5OEhpME15QlowZnVxd3RKOW43Y3RYY25XWFpkc0hEYU1uWGxoR1FacG56OUZTZGlxYUVoeGc3VERYZVlBaVVCbU1QVUxtVWxiOWEyTzZVM0EwSHIxOGJwaDRFT0hxNDNVWTdkbXpwSWVKL2lLWGxUUWh4dE9RdDRmZVladHpTcWx4d2dQb1FnSFRlV1gyQTZ6djkwTzRSTTU0TktQU3lzWVIxc0U3MzVMVzNxaFdrM2ZQVzFtSTJTZHhoVWtqWWhGZWs2VHE4TnVIbVdaVXUvSGZpZUZhK05BNEZtb3NzRGJTbjRsTzdHVE1IZFdBUFR6YUYxeFlmR2VodjRvOHlYOGNjZU5WYmtNamRtWnFCTExrclU3T0hmTEhkTjdlT2RzS1hwS2JZVWFqYldYSkkwRjYvenNUZ2ZMUmtGZkpWcHBkRWY1VFJhSXlJZFd5ZmNjeThXekRWb1hheEZVMHBLc1BKRW5CVEs2aUJORDFCb3lXNFNNN3p6NG4rQ0ZSMWJ6V29vVS9DWHc2R2duVnNkbVJ1SVJkeEFoYjc5d0Y2dGpsV2xaeWlOVHdLaWEvQWEweXlsQWdlV2J4Tm1PdjQ1MnhiNmEzZHZBOGFvbFBDNjBUcU5RbW4rWGFKM1lIZ005SGJTVzBJUVdyYVdYdllwREZ2NUU3VUNPQTRvTENaSE9YUTlFZXQyNktOY2Znb2dHaXMyQ1JQL1ZCT3VNb1ExMlB1ZjFjN0NFdmZBTSs5RTAxWHY0NnM2MG1Nd0FydG4zbVczL0VwY3lnQmVEaEhYMTRzN1dmc0RzUEhrOHI0ZXNlZTloWHcyRmFQL1RydDJFZXpLVFdTd0x1Qmx4Z2R3UmJpUEtaQ1psUGhYYS93NGxrU20zaTNqRTlYR2NqNlR4MWdzQlg5ZnFDU1lyV0lBc1dnUXpzdlR5V0xCaTFXOWNFNjczamdpT3hKYzlYYmZFeUd3cllqUkRVWjlTZ2VLWExwUTNLZFJ1YStkZTcyL291V2NKQkxVdHZHbVk4STV4VDJQb2J4d3ZuNUU4TDU1Q1FBZEJqc1hPTTZndlFMRVVLMWM5OFVJZk5xTWh3NG1LQXFhVHNMWi82eFlEZ3FRbG9HMTl2cWhkTG0zUEpsU1g1L3F4RGlsTVU3dFRiaWw1Mk1pd3VHZmh2cFpwd2trVkpFK3ZFMGZlendkUzN1R21jOEdDc2t6VVNJTUhqMGMrSjFkTkVFYjBTeVFoNjUwSkJzWVFCMVhEWmZKKzdiSGw0VE9reWNNdnpMR0k1cUltR0EyQnQ3ak1oTEFQRUNOTzY5VzhhTGhoR3JlUmJaM1h1RGNqRTkxVEhZYWx5MEZaV2ZXaUlrRVpSK1J6OWRyekdxMit3ZWJvdDI1WUlmV1p5V0U2b1lvQ0tZblFPbjJ5V3M0Z25zd3hsb2kxakhlQ3NLZHhkRkRlNXFkTzRMRFBYdGV1QTVhTE5JbERNNUl0Z2lkUWxHQ094SXlXa3JtRlBpTnlKWDNzeWs4Mm1mZVRoc0hiODc3b09UajJkRTRYbnQ0ZmZFRFVNUmZabmJvdjJJU3FZemhOaHZMMnlDU09uRWF6R0ljUUErVmY3emJKdW5EQ0tBVzYyRFBOSlp5cDFyY1I3aVNWY1RZK2Q4c3MyVk52a3A1TnBUR3YxMFpoRGUrd0RGSSs3MG1rRUhHSCtoZ2Q5VXp2bm1neGY2NkxIL1d6Q2oyNEI3bkdHQXJGc0svNVdNTHY2UFhySktCdkxSbnpTV1M1UDU1SXFGaUVITGFYMndZMVluWDBFUUxFbzNpNTQ3aEFUZU14LzJnZFZYVDMvVHZUTmhtcWxtYWx3eEVrQmplbElqQ0piUFJVVzNHZERld0hrUE1KWEF2em5uL2xhN0E2eDQzeDFsT2ZxR0F4NXltbXhmWDZUblFBNmx1TW5ETDdiSVVXekxKNFFNdHhLa1dqVlNDQzc1SFlwNDJKbFA3cmN0WDN0Q05DWk85WU1JQkxBWW9NNW9lRFFUUm1IeG5SZWtGY3dHUTlRUW16cVo4bXJOcjZiSEpRLzhZRklNY3YxamVMUWFPaXdIV3JXUy9QcWR0RGd1ci9YOFllSThmYlBiQkNRQmRsWGZpc0NKSzVzVG5YSk9GYnMvSC9hYm9XdUgyZ05pYlJ3K3lJQTRsOXFyQW9IVHMxUmNYTjUyRnpidGNuNElXeXFBcVNTVStlZzExckY3ajZHdnErK1VZeHI2dU9iK2xBcDBVL0RnMm1HempLTE5VOS8vcldNa0toMmNKRXdOaklJL0hiWkRYR2RZZzNJb05ZTzIzMTFUMEFGZURtM2s1ZzM2UGpuR3VqdHRXcldRdWRRTzNjalBSTFRhUlVLRUpVQnVJYTJobVhnYlk4Nnh0QXlVSTB6OVk5YUdNWjB3WGIvMEkxT3MvWmVnRnozTW5wWVJwak1PL0tzTlVWenZod0RhaVREbHQyVTRySExjVXRrajNGVzlQVTdVZS9yVjNEVjFOYTVJZnZLUFlEcS9naGtHRXpkK1JwSkh0SVpQWmpRNnM4RG0vMkI0c01YSmROc1lwRVVnYnIyZXJ5ZmEyNlJwNDZ3STAzUUt0V0pFOUQ0cmpnUDZuWEwvaEQ3cjRSR3dsUWVMeTdUTldtYzRRUmI0c2hSRzRiWmh5YXBLSElrdStLZWl5bnhEL1hHMy9MMjdzYWRta0FHQnBoNTErT0tnVVdFV0VGNDlvWTB4UGptZEoyNEFqeVZPUTNWZFhNWlpTZ0JjZ1JtbVk4VW5VTUpXMmhYbmhtVVlxd2dNNkllS0Ria3E2WVM4T0dhbk9tb3A1RTg1b1h2OXJIeFljajRlaWFRQ2tXb2hQSW5VRVIrMEw5aUdqdWl5bGhGLzlmVFFsMkFxM3NrQlFITEpHVVVQOEJwQUtNVEN1YnBIM0Y5bDNGRFdrUklmamNzc09lZ01PS3ZZeVAzMnJRYTJlTjA5THdGQVRwOWxHVkRhdzUyZXhYRXo4K255WTU0WlFqNzIzRHVvYzFHN2JoU0x4emxvbUNkZUZrclE1d1JoQ0U4YmczV0ltZ3psa254MXQ2MmwxclhvdnVqb1Vya05tYlM5OUd2R3c2WkZ0blJxUlkvRjl4ckNseHBpNkNObEhBeDlIM1lzZkpoamlMM2JEQ05ndk1CUndwTHlYMTVuaG5OUEdPL1dXN1JpTGJVOTVydWdJMis5anRlY1ZWblV2SVF2VFNrVTBGUFlJNmxzNjIvN2ExQUlTK1VTbVpYR1RoRDhWdG81T203dDJXVUlreG9VdVRJTnIrbzExdGo0MGZtYXc0S3ZkREhVb2wzTFJObDRpY1U4bVVWOC9OQXVPdVowU2JFVTNYelZaL0srVXRNemkrSVV2d1dONnpjTVBYUjV5d2gxM3N1UmNib1l0eHV2K0tyU3JuYXNOYVBudFlFYTF5VzZDeFRsbmowZDUwUy9wMVRzNDhxZm9tVkF0dlpxOGJqbmMrVVA4a0RwNWY4QVRKWjRubW5LdXdHL1ZZMUp3Ni9QbEJpdGhzNTBDbUt2eXNXcEUzaE5oV25yTS9GSG40ZHVsNDUyb2htWk9iRWJ4aTVhbXYxL1JMTmt6Qi83bW4yblhDbGsxMFFGbSszcmpoaEFtc0U1ZDlJRkl5ZmdwUFpzNDFvS3lmTFpUY1FmYmJRbU5Kd1Q1N0c0QlJJZkhnMndab0oyNC9FUW4vNE9FYmY0QWZhZkxiaGtiMEFaWWdRRmI3ZnlXc1JaUytsV2VyT1NYK2lHLytIbU44Y0FpdzVnbHBoc3FWVXJlazVTdWJQNUI1elFUcWdqZjlIMzdLdSs0NTdET3h1QVI2clc0WDMrVmtrS0k0Wk9yTDFWZzMrSStqd1JkVGR6SnVLVDhXSTYzK203OXNXM2kwSEMrZkJuTWZGR3M5Q1JJWU5WU0N0d0RzVW1iV0Nmb3VPL3YxcFhRem5qYWtRUEJaa0Y5MkUwL05PWnJkRG9pYWpsc2F5K2RpeE1aVklEeFBjMjdGOWZlUTVlekxKelE2TUZta2tSNEVqR2lMamtWeXJ3UHRGQ3Z5NFRnSnNjY05tS0dmWXBsR0tvZlB0NnpFVVhnVnNDQ1JyNUxEUTZGK1JLVmpwdmlGOXNsalRvWGJkK3hTQ3R3cWZOUnRML1FjUFNDNUZIM1RWRmRhcUZxb042WU1nS1NnQWVIakxmMWU2YVVuWXNBOEF3bERNMThJdDFFeHVPcjVwR20zM044MDJSQlFQejNMdUhSL1hTbVZQWlhGVVRYOW83VE1YeG9rREl3enNFTGV2a2grTm9BZjVtWEpSQnFGTEI0dU45WHQzZ1Q5M2pSR2pPcmsxVWUwQ3FrcU0rL1JFcG9RbTk3TmdhYTYzNEJaSmw4REF1Y01jN1pNRkMxdzIrZmwzMCs3Z1VYNEd6cHpqbXVhNXNvZzJ5OVhsSEo3eHNwa2MzYWY2dy91RVVvN3ZTdHhHOS9mTmtlbmlvZVRxbTBPaHI0U2JTSXdvellmWFcxcHpWQ1FxNHB5ZCtSWW84L2pVRHZRaCtvMnlBWWhTRmRubDVHTWc5bkFJTXNHZHhtTjByYktnTFFpTS9kcjZuYVc1V2xUQ055R3h6Z1dmclZHM0swVVBUeVNJYWRYSjN6Zm85clNUb01MNnoweTZLRHVNKzAya2t0SXVQRXNnWms5VHJVN0VzY2xhS1pmSFMvL1FFT2F4a3loRjgySEsrSTZhVTV1dlVjUkVNblpDdWdtN2JSc1Evdk5ETi9JVmx2ckgxNkF2OXBzbFhYdHQ2VW4wRTNJTGN1bkJLY081WWRicUwwQzg1M3hoQi8wOGJtSmpSY3AvZnZDRGZPbG5POGw5cjFLVGtuUSs1dVNYdEpNQWpCOHdjcDZXOWZTMEZ4dUNGUkM3bk1JV090NWEwSzFHUDU3OFRwRStkUkNCRkFpcEVTMUdJeXhPdUM0aXh1UFVvd2FFb3dkdllPT2dXQmNIVm9peERWeEhXNWlqVEVRbGtxZG4zVzM4OGxSR21xNitqeHNkUEdNMjhNZnFuSHpPQ2RDWFdJT1ppaGNHdUNwMThsVWZaYWluZFBTaExQWTgrQ091ZU1maEpTbUlEcEVPL2VjNlpMenBLbG9sNEUzSlJIeWt1OUZyYStCcWRRZytSeXh1YmkxWVU3eXlkOFlvZmEzOFZ6Y2JQM1U4bGFyemRYTmZHNkw1M0VHWm1Uak9TYlZwS2FyaEZPdUFFYnJ5Ui9OalVqRDg1cVVBajJvRmswUHU3dGdvWmRPSEJBMG5ST0J3eFkzaVk1K21FUXRqSFZiNkJydm5kWk5JOEVSVTVmNi9KdDhjZCsvNzRweHkyaG9aMUlpa1dNVzdzRTE4VW9rSjJZR1k2T2VQWHp3TmQ3UGh2cEsyVEtzczhvMHd5SS92YjdlTm53bXNvaHdjOFllaHBJclI3RW4wN2NCVUNhbjNGWWR2U1JyWUtTZy9GRWx4ZlpsNGJMTkxDWWFUdktMbW5Rb1V6dElpSndqWFhNSXl4eURkZ1pQN0RtaGhSQzhua3lHcmdWbFhib2xaYW81NTVUSTcyckxBTFk3RURvQWtRYU1xZTdEZjI1WFZoTUwrNTltTmJiS1JJcldFb0owYVNWZmlJSExWNmhJbTBPSnAxMGpXMlFnTUlkYXozZEVpaXMwWWJYTkJnUDROQ25uSC9Gc0tYTk9LUC8yWm85YkJnWWFVbDVSUDR5MHVoZ0hrQjFiSDh0V2Ivd2NNR3ZqUGY0TkQ4aDNyTkJVS2duUzZLL21MUWZYOW9zaHJ3Mmhrc1JvT3RGT2l5bC9pUGNJNTNzZ3ovNExIWjJKLzVTRmZtS0xCbzBrbkpiT3JNMXBKbGxJLzJPclhCS3lQNGpTZTBxL0ozcU1tdDJaazBxOTY0Z3dQenE1eGlMWU93cTNaOVZvR0FvZGVISWliNXBSd3hZWUhQdElVbXh2SHExOHN0N3k3OUhOaEsrWHpmcm4xZjV2akc4UGgwL2pnYmFzbVd4bW9TbGNvdDdLR0JVMXFqUFl5cHRRTDlSY29yWlhPdzdxUEZWT3dyVWkzQjZYYkVQNy9icXIzdTMvV0kwVWdabzZtRzFkMXUrMGJHVGpQby8ySlZYRkdoa3Z6MEdyck90c3VrbU96YnJ2aXhsZUYxZGtQS1hyNHlIeVNLNGtRVy9IYzR4NWZXNTlZTGZWRmtDZEVyUjBIdlJTU1ZUc2J2SDhBbk5pS2ZSUnRhRGcrbDVIdTQxVkJYMTQvNklWOVRHNG5EbSt5ZkpOMWtVaUovc3Y0Yy9NNjVQVHl6QzRLVzI3WFMyOXc1eEZLWEN6aStCK3o4RHc4QlJWS0g4VjRsNGF0WGFDNFFRQzNFekZVMVkwMzVRcFhTeE5zWldvaTd0MTVZTk5FVjJOWDVGREFrVkd5dTFOT2M4cEpOeTdwWklQbG4ySG53NmZtbVpZeG1OMzdnRDhYdGRNQjFUUnkxeWJBOWg0MngxWUc1VFRxOWg4SGo3NFdocVBObk9EbEhMK3BZSFFoMmRDRUcvRmF4NG5PbFQrZDkvRXpWRVdweVdhbGx2U3NZL241SmZDQ2VVZ29XMjhXdnZZNzBRQUZIajBWd3ROT0RLZU9obk8wc3Y0T2tsUGEyWTNpZVNDTUZPSEUxa2hiUURlNFgrSFpDbnJXeThWc2NSWDFTUk9KdjB6SGFrYkk3WlNENlJZNlVVb0xHZ3lUZHBFSUx1UnpLYU1OamM1eVVzbzY2Z3NMR0w0Zis0b3d5SE9CbllhekczdUM0a2RXVm9xdm9adGkyN1RwN1k4eTRXSE5JOFYvSHdzWlpBNG4vOUZQaTBlSy9nbnFXUlVIcGU5dUdyUlgySmwvQWQwdGp2YlRuZDBhNnhJa0gxSENBQ0FFM2VvTG42d0xVSlNRdVdmNlU5NmVGRTJiUkhIYXJqd1BQdXdOeHh0amk0QWQvM00rTG5aV05QV0xFd2Zja2JyRVBjS1Z1a0pCR0xWU2Z6akNlb1daS0tFY3VtcFBzNkxxRnIzV2hYUi80NGM1WWNVNUVEQzRVZ2hNVG9ra2g1SFhZUDhwVkZ0TUhHaFF0Skg1K1BTRnhPcjBkSVdrcVR1NHM1M1gzME9CUWFycmNsVTdaV1lUMzEvV0VJWGlzMDdvRGlnemdWR1VnRGRqRnB1SXRNSnNubnhCTk9iVkp0SVFYOVBjSXNDUnV4L3N6cXAvZTFUNVVoTGlES0ExSTdWWUVCYS9BaGIrV2pZTHhZS0NncUtLTHRVTkxKb1pKZ3dXSlNNaTFGak5rWkEwWjVweHZDT3ZOYlZnY3lacGdMK2J0WDF2d2pQRkNZb1gyTHU1MVVhSlFlVytHZzh6QmhhWDltOVBzWnYwL3p6OEZrMVRvOXJoVGFvZDBKMk56VElCb0ZtMERzd0JJYVQvUSs4Wmt3TVRzVmpCazM1cWp0THo0WnY2TDFKSmpQWmZMZGtDbkt6ZDhMa3dzVEx4TklaUm9xUGF6MVkxVkFsbU1mcUZHVW8zTGpaelc5ZWw1c1hHQ0lQRU9lVzhKU0p5Mnc1S0IvenJoTzJZcXg3azNCQ041V2Mrd0VBekRXdlR5RHFIOFQrQTcvOU05blJRditUR0ZkTjZPcUZJVmVRREFiS3Awd0VGUExSVUV5ZkpaMTJoZVlrYVhXQTd4a0llZUt4UVVsbkk3aDNwQUM1UndFRXdmbWF3TEZ6UGtVb1gvRUVrSjF2UHV4UjJlOGZjaUxPTDlBUm0wT2x5emJYVTFOS3FkZnNlY2JDY1NWa0NTV2dCMWs5VDJWY2h4dkJwZlU2aEdqemxDdStSZzlmVTdLVmFpd0FSMXBnbGs0aFducys0ZzJwRnliNTB4T1lramhPYnJweElGUTgvSFY2ek9Qczc3dGhxZjVxSGI4SzVrMnBtNytXdm01SFBWSHBma3h0d1pzemQwYktmWjF1djQ3d1R1Z2ZYVW9ubW52elhXeElrOHdPcy9HWGtwY3FwcXVyaE1KUUxkbU1SRkQ1NlFTNzV6MVc4cVh5YVdkR0Ewc0lvUjQrcVR3NENMUllhdGEwdzhRV09Mbm1ST1JjVEtJRXNuRWM0WTM5QlZ6a2tQT1BXUUpXSStZSkhQcXlpWHQwL1JTZ2czSkt1K1F0eDJNQzlMZGFjeGhiOFZkVUFPTFB4TXMvQStZK0ZtNjRXditoOHBNMFR0enJQYzhWd0R6K2ZZZ0dhQ1lIWGkxUjNvdDduRmlVY3FNZzAxTjlrQjNUUVlQeTJXMG81UlV0d3o3Z0xpRWlTNWdUSmx6RC90OG9hVlViZ2Zxd1NqVjVidHZRVC9zekpOQXJHTlY4ZVg2RjNSQXJ5V2NYRVlPZnlGTllVR1hDRkd3cExVREtqN0NRSHI2MzVoVjBCSFlCYlo2K3RSeHJtTFpnSG5LRmdOenlHOEVtT0pHR3NydGFncVhlLzZWYld6VVBDMUpLOFdpSW4yaDBpemZTM3kySllhQkJSUjZNUzl2cGN0dU9MUHliaHlWM29EREV3R2Z2RnFGMWNlV1R2anZGK2FNTFAyaU9yWWE5N3BnbmQyWDhYYWdTejZlVFd0MFhDbGlCTjBncVJFWWlDVVY2ZUdzRlIyMFp2RndGcG1CcTNwdWJKb2tiZjA4blFHQnpqSUMvZHdsbXhESWpLRXFuZlkxanpVZHhJQkV2OTBhTnF1SCs5bTJIajhjUjlhejArZXdVaG51dXU1MWx1YUJFLzhWeVpRWUlUZHhZaGdmNEQ3M2hFbWdybmp4NjJ4aTNjaDl2OVh0L2NnZlQ0TStEbWdWUjg1K0JqaStkeWJCN0YvdE9yNnE5bDJHam4ybHRLeFZLclRPV1RveVFtRGV4NTBlc2N4KzVuOC9kSUMyRHNVckhtUDdadmFPOTdPY21RYzA4VitYelZqdlJHRFRFazc4S3lwWTdTeEZzalA2WnB3Sy9PL2RFQnZDWjZYdlMvYTJqTVgyVW5aNEJiUmlXUFUxVVNqeDI4TWxXY1k5YWNVQTRucVozOTExWXdZc09Ec3d0V1prOW9hazJyZ1Z1TVZkQ3BKQ1F2QU5pQTBISTZNMzV6aWlzUE41ZWI3cmlUMGZlNThSTWdhYjgwanVaMGhjTThvNkpnUW9rRFcvSUM0V2Z0RS92QytOVFlveXVhRTMzT2FUOUNsYm5ublNFRTVoQWlRbzA5VDJJZ254NHYwdXlnRm5UbVFQbytGT2xIdXhXdko5TlBpekgySkRTYjNEZE5od3pCZnB0aGxXRmd3aVMrTVpOOGhzQ0FFdlRySUFyak5VeWFZcDRGajFOb2VRMmoxWHJhaHNrSURiaUEwZDAwa3h0aWc5S3NwN1ZrNUVhUG1KQjdXK2kwMC9FWkh0eE9nL2ZRQ1MzSThkazhwY2tPaEJHckxPWWtvVGt0bUFzMkFrL3JwYldpSkg3VXloV2tLSG4zWTVwclBRQmlIUURST2ZyMzlSb0NBYjhtQTg1ZnhFdlFMNXQ4T0FMVTJBS3ZETkhvck5PbG1nNGYxZWhMaHhmVXhDdTF6OUdxRDhuZjd5a0RlNkZQUjUyTFNOVVRnZnFja012YjdzTVNzckhXcXhYMlVJQ1N5bVZWK2lWdDBQTFN6UlJGZTFvZHkxOHVhVXduTFYwMnFibm55TnVzcForcEw4aDdmdUpBVDlWTGJXZWFHZkxFcnVlaDJETllPaTdUUFlac1ZNUmFockcyU2JwRnBXYmRFNDVvazVwS1BpcUpUblpyWGZjUCtLQ3dzSlpic3pnYk1jM1hoN0hjTDUxK1AwOFNuN3ZWTWJlVzIzbXRFa2FrL3ZaZFdkNHpFMkRhSHpKajhDSVZRM1Frdkw3Wm91WEF2R3FsaGNLQ2NlUmFlb2dTaTQ0T1N4MVIrZCtKZDdITFpDeEFKU21vVnRWaWJHNndkd3Fza2VjamsvVVh5UlFoQ0ordTFkQ1l0WHNINHRSN1cyZExJbDN6Mk5LNHdWQS84UVdlRTJGQjRzcW9KdWFsSERRcVArdWRjVTVGTjgxd2s5dlhHZVRKc0pVcUx2aksrdTFDOHJySGY1cWxDWmtMbU9VNEE0UllUM3EyOVdMSUhnTG9IM1M0QTdpWUNVNVNHbnhaYmZBTUZQMSt2K2FpRENLVUNOc081Q21JL3c3WjRESjNxOVlLVmQzNzRGcEtqWkRobTdrUWVHcVJETWFxT1U3U0UzRXhoN0VNVDBXNkViOTBnRmZlZUFmckJlUDZGRGhVZ3hHWkdBMXo4QjVmRG1idlBKN3VBLzhIenlZYnhqeFkrZjUydmMvZFJBN2RtYjZ5OWRlYWwxK292c2h1ZFh6bXN5Z25qUnhIRzhGeTlIZGVFRWpiNnQrb3VSR3NubXVoZTRkam8zbUVrOHc2clZ2NEpwOEdUWE94cTN0WCtHc3p5MDlYSitPN1lMU20vSjE4b1E3OHdVU1hLSzNmZFVKaGZGM3VmWDI1bE1Sd2c4VFEzakl2MHBVQnlrTDBoeGxtT2c5eHpaQ28zRkRUZlgzUnlqdkFTVm11cW0rZzJEcE1udG1OMmtNanRoeEM2aVFLSUN1ZmF2QzFnVmxGcW5teXJ1U3VjY0xhT2p1U3JybDRrcTJXOHpYbUk0bFNUam1STFNiZjB2YVVuVUJheklvK0NaSGZBd000dlQ3RDQ1OHU3TXJJbWNoaWk0KzQ0aTNNY3FEcllDUEJmK1Fkc2lhcFRpdkozVGx2OVp0YnVjRGE5ZmlpVHRGc3F1ZXFLc2JwSWNwYjdPV2hpOEtBWXhMNGFjRnZOemFxdHJTcjkvNmJ6cGxLdjNyZHU0MkVYR3ZlWDUvRFd4MlQ4N1JTMnY5a0IydFF5TVg4YUFTM3R1bzBzSGNaWFV5d2RzQjJnU2pmZXpnRS9rQjJ5bjFyVXB0WkJKcXlZelh5VTJyaFREK1lydjNFREsraXAyZFptUGhleFRCM0MyMlJJSjFpR21WUVJqK1ViTVVGRTlRPT0=";eval(e7061($e7091));
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
<video poster="<?php echo urldecode($thumb); ?>" width="100%" height="340" controls>
  <source src="https://streamytv.herokuapp.com/stream.php?url=<?php echo urlencode($dla); ?>" type="video/mp4">   
  <source src="<?php echo $dla; ?>" type="video/mp4">
    <source src="<?php echo $vpdl; ?>" type="video/mp4"> 
 <source src="<?php echo $dlb; ?>" type="video/mp4">
  <source src="<?php echo $dlc; ?>" type="video/mp4">  
  <source src="<?php echo $url; ?>" type="video/mp4">   
  <source src="http://dlhut.ml/stream.php.php/?vkr=<?php echo $lloc; ?>" type="video/mp4"> 


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
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://dlhut.000webhostapp.com/dl/aio/?f=asMp3&vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://dlhut.000webhostapp.com/dl/aio/?f=as360&vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo '';  if(!empty($matches[1])){
    echo '<iframe style="border:0px; height:45px; width:99%;" scrolling="no" src="https://dlhut.000webhostapp.com/dl/aio/?f=as720&vkr=https://www.youtube.com/watch?v='.$matches[1].'"></iframe>';
} 
else echo ''; 
if(!empty($matches[1])){
    echo '<br>
<a href="http://dlhut.ml/dl/aio/3gp.php/?title='.$title.'&vkr=https://www.youtube.com/watch?v='.$matches[1].'"><button style="width:100%;"  class="btn btn-success"> Download  3GP </button></a><br>';
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
