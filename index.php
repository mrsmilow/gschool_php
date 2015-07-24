<?php 
  $pageTitle = "Home";
  include "header.php"
?>
    <!-- Our site's hero area -->
    <div class="hero">
      <div class="row clearfix">
        <?php if(!empty($userName)) : ?>
          <h1>Hello <?php echo $userName; ?>, nice to see you again.</h1>
        <?php else : ?>
          <h1>Who are you? Login <a href="login.php">here</a></h1>
        <?php endif; ?>
      </div>
    </div>
    <!-- A row of two 1/2 width columns -->
    <article class="column one-half home_content">
      <div class="row">
        <h1>Column Heading</h1>
        <p>
          Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.
        </p>
      </div>
    </article>
    <article class="column one-half home_content">
      <div class="row">
        <h1>Column Heading</h1>
        <p>
          Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.
        </p>
      </div>
    </article>
<?php include "footer.php" ?>