<?php
/* Essencials */
ini_set('display_errors', 0 ); error_reporting(0);
$anoActual = date('Y');
/* Essencials */

/* Angola */
$WebSiteAngola = 'https://www.worldometers.info/coronavirus/country/angola/';   
$DOMDocument = new DOMDocument( '1.0', 'utf-8' );
$DOMDocument->preserveWhiteSpace = false;
@$DOMDocument->loadHTML( file_get_contents( $WebSiteAngola) );

$updateDate = manipulateData(utf8_decode( $DOMDocument->getElementsByTagName( 'div' )->item(12)->nodeValue ));
$casesAngola = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(4)->nodeValue );
$deathsAngola = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(5)->nodeValue );
$recoveredAngola = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(6)->nodeValue ); 
$activeCasesAngola = numberFormat($casesAngola) - (numberFormat($deathsAngola) + numberFormat($recoveredAngola));
$activeCasesAngola = number_format($activeCasesAngola,0,",",",");

/* Angola */


/* world */
$WebSiteWorld = 'https://www.worldometers.info/coronavirus/';   
$DOMDocument = new DOMDocument( '1.0', 'utf-8' );
$DOMDocument->preserveWhiteSpace = false;
@$DOMDocument->loadHTML( file_get_contents( $WebSiteWorld) );

$casesWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(4)->nodeValue );
$deathsWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(5)->nodeValue );
$recoveredWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'span' )->item(6)->nodeValue ); 
$activeCasesWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'div' )->item(28)->nodeValue );


/* North America */
$casesNorthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(2)->nodeValue ));
$deathsNorthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(4)->nodeValue ));
$recoveredNorthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(6)->nodeValue ));
$activeCasesNorthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(8)->nodeValue )); 
/* North America */


/* Europe */
$casesEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(40)->nodeValue );
$deathsEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(42)->nodeValue );
$recoveredEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(44)->nodeValue ); 
$activeCasesEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(46)->nodeValue );
/* Europe */


/* Asia */
$casesAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(59)->nodeValue );
$deathsAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(61)->nodeValue );
$recoveredAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(63)->nodeValue ); 
$activeCasesAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(65)->nodeValue );
/* Asia */


/* South America */
$casesSouthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(21)->nodeValue ));
$deathsSouthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(23)->nodeValue ));
$recoveredSouthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(25)->nodeValue )); 
$activeCasesSouthAmerica = numberFormat(utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(27)->nodeValue ));
/* South America */


/* Africa */
$casesAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(78)->nodeValue );
$deathsAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(80)->nodeValue );
$recoveredAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(82)->nodeValue ); 
$activeCasesAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(84)->nodeValue );
/* Africa */


/* Oceania */
$casesOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(97)->nodeValue );
$deathsOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(99)->nodeValue );
$recoveredOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(101)->nodeValue ); 
$activeCasesOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(103)->nodeValue );
/* Oceania */


/* America */
$casesAmerica = number_format(($casesNorthAmerica + $casesSouthAmerica),0,",",",");
$deathsAmerica = number_format(($deathsNorthAmerica+ $deathsSouthAmerica),0,",",",");
$recoveredAmerica = number_format(($recoveredNorthAmerica + $recoveredSouthAmerica),0,",",",");
$activeCasesAmerica = number_format(($activeCasesNorthAmerica + $activeCasesSouthAmerica),0,",",",");
/* America */


/* World */


/* Function for manipulate date */
function manipulateData($update)
{
    $minutes = $hours = $day = $month = $year = "";
   
    for ($i=0; $i < strlen($update); $i++) { 
      if ($i > 13 && $i < 17) {$month .= $update[$i];}
      elseif ($i > 18 && $i < 21) {$day .= $update[$i];}
      elseif ($i > 22 && $i < 27) {$year .= $update[$i];}
      elseif ($i > 27 && $i < 31) {$hours .= $update[$i];}
      elseif ($i > 31 && $i < 34) {$minutes .= $update[$i];}
    }

    switch ($month) {
      case 'Jan': $month = "Janeiro"; break;
      case 'Feb': $month = "Fevereiro"; break;
      case 'Mar': $month = "Março"; break;
      case 'Apr': $month = "Abril"; break;
      case 'May': $month = "Maio"; break;
      case 'Jun': $month = "Junho"; break;
      case 'Jul': $month = "Julho"; break;
      case 'Aug': $month = "Agosto"; break;
      case 'Sep': $month = "Setembro"; break;
      case 'Oct': $month = "Outubro"; break;
      case 'Nov': $month = "Novembro"; break;
      case 'Dec': $month = "Dezembro"; break;
      default: $month = ""; break;
    }

    $hours++;
    if($hours == 24){ $hours = "00";}

    $update = "$day de $month de $year | $hours:$minutes";

    return $update;
}
/* Function for manipulate date */


/* Function for Format Number */
function numberFormat($numero)
{
   return str_replace(['.',','],'', $numero);
}
/* Function for Format Number */
