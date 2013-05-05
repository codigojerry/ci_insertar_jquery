<a href="<?php echo base_url().'index.php/news/add'; ?>"><img src="<?php echo base_url().'img/add.PNG'; ?>" width="15" height="15" title="Agregar" /> <u>Agregar</u></a>

<?php foreach ($news as $news_item): ?>

    <h2 class="titulo"><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="news/view/<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>