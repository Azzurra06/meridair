<?php

$curl_iqa = curl_init();
curl_setopt($curl_iqa, CURLOPT_URL, "https://api.atmosud.org/iqa2021/commune/indices/journalier?format_indice=couleur,qualificatif,valeur,image&indice=iqa&format=json&insee=83137&srid=2154&date_debut=2022-12-14&date_fin=2023-12-31&info_diffusion=true");
curl_setopt($curl_iqa, CURLOPT_SSL_VERIFYPEER, FALSE );
curl_setopt($curl_iqa, CURLOPT_SSL_VERIFYHOST, FALSE );
curl_setopt($curl_iqa, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl_iqa, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($curl_iqa, CURLOPT_TIMEOUT, 20);
$result_iqa = curl_exec($curl_iqa);


// if(!$result_iqa){
//     die("Erreur");
// }

$tab=json_decode($result_iqa, true) ;


curl_close($curl_iqa);

?>

<!--
// Récuperer l'IQA, le qualificatif et les messages de prevention
curl -X GET "https://api.atmosud.org/iqa2021/station/mesures/indices/journalier/now?format_indice=valeur,qualificatif,couleur,image&indice=iqa&format=json&srid=83137" -H "accept: application/json"
https://api.atmosud.org/iqa2021/station/mesures/indices/journalier/now?format_indice=valeur,qualificatif,couleur,image&indice=iqa&format=json&srid=83137

for($i=0; $i<10; $i++){
echo $tab[$i]['commune'].' '.$tab[$i]['valeurs']. '<br />' ; 
}
-->
