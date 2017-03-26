<?php 
  function news() {
    $news_resources = file_get_contents("includes/functions/resources/news.json");
    $news_decode = json_decode($news_resources,true);
    $dirname = "images/news/";
    $news_images = glob($dirname."*.jpg");
    foreach ($news_decode['news'] as $news_article) :
      foreach($news_images as $news_image):
?>

  <a href="#" class="object">
    <div class="media-sm">
      <img src="<?php echo $news_image;?>" alt="">
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
    endforeach;
  }
?>


<?php 
  function trending_list() {
    $dirname = "images/trending/";
    $trending_images = glob($dirname."*.jpg");
    foreach($trending_images as $trending_image): 
?>
  <li><a href="#"> <img src="<?php echo $trending_image; ?>" alt="trending"></a></li>
<?php
    endforeach;
  }
?>