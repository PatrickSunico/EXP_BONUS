<?php
  require('includes/functions/functions.php');
  include('includes/global/head.php');
?>
  <?php include('includes/components/navigation.php');?>
  <?php include('includes/components/search.php');?>
  <?php include('includes/components/main_carousel.php'); ?>

  <div id="feature-wrapper">
    <?php include('includes/components/reviews_recommendations.php'); ?>
    <?php include('includes/components/features_carousel.php'); ?>
    <!--2 Row Carousel-->
    <!--Upcoming Releases-->
    <?php include('includes/components/upcoming_releases.php');?>
    <!--Indie Releases-->
    <?php include('includes/components/indie_releases.php');?>
    <?php include('includes/components/news.php');?>
  </div>

<?php
  include('includes/global/footer.php');
?>
