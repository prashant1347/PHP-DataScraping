<?php

include ('simple_html_dom.php');
$html = file_get_html('https://merolagani.com/LatestMarket.aspx');

foreach($html->find("div#ctl00_ContentPlaceHolder1_LiveTrading") as $h){
echo $h->innertext;

}

?>