<?php include("path.php");

include(ROOT_PATH . '/app/controllers/topics.php');

$posts = array();
$postsTitle = 'Recent Posts';

if(isset($_GET['t_id'])){
  $posts = getPostsByTopics($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
}

//$posts = selectAll('posts',['published' => 1]);
else if(isset($_POST['search-term'])){
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPost($_POST['search-term']);
}else{
  $posts = getPublishedPosts();;
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- Custom Style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <!-- header -->

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <!-- Page slider -->
    <div class="page-wrapper">

      <!-- post slider -->
      <div class="post-slider">
        <h1 class="slider-title" >Trending Posts</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>

        <div class="post-wrapper">

          <?php foreach ($posts as $post):?>

          <div class="post clearfix">
            <img src="<?php echo 'assets/images/' . $post['image'];?>" alt="" class="slider-image">
            <div class="post-info">
              <h4> <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> </h4>

              <i class="far fa-user"> <?php echo $post['username']; ?> </i>
              &nbsp;
              <i class="far fa-calender"> <?php echo date('F j, Y', strtotime($post['created_at']));?> </i>
            </div>
          </div>

        <?php endforeach; ?>

        </div>
      </div>
      <!-- Content -->
  <div class="content clearfix">
    <!-- main content -->
    <div class="main-content">
      <h1 class="recent-post-title"><?php echo $postsTitle; ?></h1>

      <?php foreach ($posts as $post): ?>

      <div class="post clearfix">
        <img src="<?php echo 'assets/images/' . $post['image'];?>" alt="" class="post-image">
        <div class="post-preview">
          <h2> <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> </h2>
          <i class="far fa-user"><?php echo $post['username']; ?></i>
          &nbsp;
          <i class="far calender"><?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          <p class="preview-text">
            <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...') ;?>

          </p>
              <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
        </div>
      </div>
    <?php endforeach; ?>


    </div>

    <div class="sidebar">

      <div class="section search">
        <h2 class="section-title"> Search </h2>
        <form class="" action="index.php" method="post">
          <input type="text" name="search-term" value="" class="text-input" placeholder="Search...">
        </form>
      </div>

      <div class="section topics">
        <h2 class="section-title">Topics</h2>
        <ul>

          <?php foreach ($topics as $key => $topic):?>
            <li> <a href="<?php echo 'index.php?t_id=' . $topic['id']. '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a> </li>

        <?php endforeach;?>



          <!-- <li> <a href="#">Article</a> </li>
          <li> <a href="#">Blog</a> </li>
          <li> <a href="#">Report</a> </li>
          <li> <a href="#">Essay</a> </li>
          <li> <a href="#">Motivate</a> </li>
          <li> <a href="#">Inspire</a> </li>
          <li> <a href="#">Life</a> </li> -->
        </ul>
      </div>

    </div>

  </div>




    </div>

<!-- footer -->
<?php include("app/includes/footer.php"); ?>





    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <!-- custom js -->
    <script src="assets/js/scripts.js"></script>
    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html>
