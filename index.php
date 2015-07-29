<?php
$pageTitle = 'Home';
 include 'header.php'; 


?>
<!-- Our site's hero area -->
<div class="hero">
  <div class="row ">
    <?php if (!empty($userName)) : ?>
      <h1><?php echo $userName; ?> , nice to see you again.</h1>
    <?php else : ?>
    <h1>Who are you? Login <a href="login.php">here</a></h1>
    <?php endif; ?>
  </div>
</div>

<!-- A row of two 1/2 width columns -->

  <div class="column one-half-home">
    <div class="row">
      <h3>Column Heading</h3>
      <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>
  </div>

  <div class="column one-half-home-two">
    <div class="row">
      <h3>Column Heading</h3>
      <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>
  </div>


<?php include 'footer.php'; ?>