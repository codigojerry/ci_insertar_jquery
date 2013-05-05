<?php

echo '<a href="'.base_url().'">Inicio</a> &gt; <a href="'.base_url().'index.php/news">News</a>';
echo '<h2 class="titulo">'.$news_item['title'].'</h2>';
echo $news_item['text'];