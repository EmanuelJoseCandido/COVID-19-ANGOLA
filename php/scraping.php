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
$activeCasesWorld = utf8_decode( $DOMDocument->getElementsByTagName( 'div' )->item(29)->nodeValue );


/* North America */
$casesNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(1)->nodeValue );
$deathsNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(3)->nodeValue );
$activeCasesNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(6)->nodeValue );
$recoveredNorthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(5)->nodeValue ); 
/* North America */


/* Europe */
$casesEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(14)->nodeValue );
$deathsEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(16)->nodeValue );
$recoveredEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(18)->nodeValue ); 
$activeCasesEurope = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(19)->nodeValue );
/* Europe */


/* Asia */
$casesAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(40)->nodeValue );
$deathsAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(42)->nodeValue );
$recoveredAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(44)->nodeValue ); 
$activeCasesAsia = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(45)->nodeValue );
/* Asia */


/* South America */
$casesSouthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(27)->nodeValue );
$deathsSouthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(29)->nodeValue );
$recoveredSouthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(31)->nodeValue ); 
$activeCasesSouthAmerica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(32)->nodeValue );
/* South America */


/* Africa */
$casesAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(53)->nodeValue );
$deathsAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(55)->nodeValue );
$recoveredAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(57)->nodeValue ); 
$activeCasesAfrica = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(58)->nodeValue );
/* Africa */


/* Oceania */
$casesOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(66)->nodeValue );
$deathsOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(68)->nodeValue );
$recoveredOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(70)->nodeValue ); 
$activeCasesOceania = utf8_decode( $DOMDocument->getElementsByTagName( 'td' )->item(71)->nodeValue );
/* Oceania */

/* World */


/* Function for manipulate date */
function manipulateData($update)
{
    $minutes = $hours = $day = $month = $year = "";
   
    for ($i=0; $i < strlen($update); $i++) { 
      if ($i > 13 && $i < 17) {$month .= $update[$i];}
      elseif ($i > 17 && $i < 20) {$day .= $update[$i];}
      elseif ($i > 21 && $i < 26) {$year .= $update[$i];}
      elseif ($i > 27 && $i < 30) {$hours .= $update[$i];}
      elseif ($i > 30 && $i < 33) {$minutes .= $update[$i];}
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
