<?php 
  function news() {
    $news_resources = file_get_contents("includes/functions/resources/news.json");
    $news_decode = json_decode($news_resources,true);
    foreach ($news_decode['news'] as $news_article) :
?>

  <a href="#" class="object">
    <div class="media-sm">
      <img src="<?php echo $news_article['news_image'];?>" alt="">
    </div>
    <div class="media-body">
      <h2 class="h2">
        <?php echo $news_article['news_heading'];?>
      </h2>
      <i class="italic">
        <?php echo $news_article['date'];?>
      </i>
      <p class="news">
        <?php echo $news_article['paragraph'];?>
      </p>
    </div>
  </a>
<?php 
    endforeach;
  }
?>
