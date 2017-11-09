<?php
$url = "http://tonyarchambeau.com/feed/"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a><p>'.utf8_decode($item->description).'</p> ('.$date.')</li>';
}
echo '</ul>';
?>