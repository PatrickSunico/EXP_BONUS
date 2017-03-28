
<!--Main Carousel-->
<?php 
  function main_carousel() {
    $main_carousel_data = file_get_contents("includes/functions/resources/resources.json");
    $main_carousel_panels = json_decode($main_carousel_data,true);
        foreach($main_carousel_panels['main_carousel'] as $main_carousel_panel):

?>
    <div class="swiper-slide">
        <img src="<?php echo $main_carousel_panel['img'];?>" alt="">
    </div>
<?php 
    endforeach;
  }
?>

<!--Top Reviews and Recommendations-->
<?php 
  function carousel_images() {
    // discount_price = full_price * discount_percent / 100;
    // discounted_price = full_price - discount_price;
    $carousel_resources = file_get_contents("includes/functions/resources/resources.json");
    $carousel_panels = json_decode($carousel_resources,true);
    foreach($carousel_panels['feature-carousel'] as $carousel_panel):
    $discount_price = $carousel_panel['full_price'] * $carousel_panel['discount_percent'] / 100;
    $full_price = $carousel_panel['full_price'];
    $discounted_price = $full_price - $discount_price;
?>

    <a href="#" class="swiper-slide">
        <div class="non-fb-container"> <!--non-fb-container-->
            <span class="discount">
                <h4 class="h4 featured_discount">
                  <?php echo "-" . $carousel_panel['discount_percent'] . "%" ; ?>
                </h4>
            </span>
            <span class="price-list">
                <h5 class="h5">
                  <?php echo "$" . number_format(round($discounted_price), 2); ?>
                </h5>
            </span>
        </div>

        <div class="platform">
            <div class="platform-list">
                <h4 class="h4"><?php echo $carousel_panel['game_name'];?></h4>
                <h5 class="h5">
                  <?php 
                    foreach($carousel_panel['platform'] as $carousel_icons) : 
                  ?>
                    <i class="<?php echo $carousel_icons; ?>"></i>
                  <?php 
                    endforeach;
                  ?>
                </h5>
            </div>
        </div> 
        <img src="<?php echo $carousel_panel['img'];?>" alt="">
    </a>
<?php 
    endforeach;
  }
?>


<!--Indie Releases-->
<?php 
  function indie_images() {
    $indie_carousel = file_get_contents("includes/functions/resources/resources.json");
    $indie_games = json_decode($indie_carousel,true);
    // $dirname = "images/indie_releases/";
    // $indie_images = glob($dirname."*.jpg");
    foreach($indie_games['indie_releases'] as $indie_game) :
?>
    <a href="#" class="swiper-slide">
      <img src="<?php echo $indie_game['img'];?>" alt="">
        <div class="platform">
          <div class="platform-list">
              <h4 class="h4"><?php echo $indie_game['game_name'];?></h4>
                <h5 class="h5">
                  <?php 
                    foreach($indie_game['platform'] as $carousel_icons) : 
                  ?>
                    <i class="<?php echo $carousel_icons; ?>"></i>
                  <?php 
                    endforeach;
                  ?>
                </h5>
          </div>
        </div> 
    </a>
<?php 
    endforeach;
  }
?>



<?php 
  function news() {
    $news_resources = file_get_contents("includes/functions/resources/resources.json");
    $news_decode = json_decode($news_resources,true);
    $dirname = "images/news/";
    $news_images = glob($dirname."*.jpg");
    foreach ($news_decode['news'] as $news_article) :
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
    endforeach;
  }
?>


<?php 
  function trending_list() {
    $trending_resources = file_get_contents("includes/functions/resources/resources.json");
    $trending_panels = json_decode($trending_resources,true);
    foreach ($trending_panels['trending'] as $trending_panel) :
?>
  <li><a href="#"> <img src="<?php echo $trending_panel['trending_image']; ?>" alt="trending"></a></li>
<?php
    // endforeach;
    endforeach;
  }
?>
