
<!--Top Reviews and Recommendations-->
<!--echo isset($foo) ? 'true' : 'false'; // false
echo array_key_exists('foo', compact('foo')) ? 'true' : 'false'; // true
echo isset($bar) ? 'true' : 'false'; // false
echo array_key_exists('bar', compact('bar')) ? 'true' : 'false'; // false-->

<?php 
  // function review_grid() {
  //     $grid_data = file_get_contents("includes/functions/resources/news.json");
  //     $grid_panels = json_decode($grid_data,true);
  //     foreach ($grid_panels['grid'] as $grid_panel) :


  //     $large_img = $grid_panel['img_lg'];
  //     $small_img = $grid_panel['img_sm'];
  //     if(isset($large_img) ){
  //       echo "Exists";
  //     }
  //     if (isset($small_lg)) {
  //       echo "Exists";
  //     } else {
  //       echo "Does not Exist";
  //     }
  //   endforeach;
  // }
?>

<?php 
  function carousel_images() {
    $dirname = "images/carousel_feature/";
    $carousel_images = glob($dirname."*.jpg");
    foreach($carousel_images as $carousel_image):
?>

<?php 
    endforeach;
  }
?>

<!--Indie Releases-->
<?php 
  function indie_images() {
    $dirname = "images/indie_releases/";
    $indie_images = glob($dirname."*.jpg");
    foreach($indie_images as $indie_image) :
?>
    <div class="swiper-slide">
      <img src="<?php echo $indie_image?>" alt="">
    </div>
<?php 
    endforeach;
  }
?>



<?php 
  function news() {
    $news_resources = file_get_contents("includes/functions/resources/news.json");
    $news_decode = json_decode($news_resources,true);
    $dirname = "images/news/";
    $news_images = glob($dirname."*.jpg");
    foreach ($news_decode['news'] as $news_article) :
      // foreach($news_images as $news_image):
?>

  <a href="#" class="object">
    <div class="media-sm">
      <img src="<?php echo $news_article['news_image'];?>" alt="<?php echo $news_article['alt'];?>">
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
      // endforeach;
    endforeach;
  }
?>


<?php 
  function trending_list() {
    $trending = file_get_contents("includes/functions/resources/news.json");
    $trending_panels = json_decode($trending,true);
    foreach ($trending_panels['trending'] as $trending_panel) :
?>
  <li><a href="#"> <img src="<?php echo $trending_panel['trending_image']; ?>" alt="trending"></a></li>
<?php
    // endforeach;
    endforeach;
  }
?>
