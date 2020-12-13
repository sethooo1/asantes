<?php require_once('../../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$art = Art::find_by_id($id);
$artistid = $art->artist_id;
$artist = Artist::find_by_id($artistid);

?>

<?php $page_title = 'Show art: ' . h($art->name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/arts/index.php'); ?>">&laquo; Back to List</a>

  <div class="art show">

    <h1>art: <?php echo h($art->name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Artist</dt>
        <dd><?php echo h($artist->full_name()); ?></dd>
      </dl>
      <dl>
        <dt>Unique ID</dt>
        <dd><?php echo h($art->u_id); ?></dd>
      </dl>
      <dl>
        <dt>Date of Creation</dt>
        <dd><?php echo h($art->date_of_creation); ?></dd>
      </dl>
      <dl>
        <dt>Price</dt>
        <dd><?php echo h($art->price); ?></dd>
      </dl>
      <dl>
        <dt>Bidding Price</dt>
        <dd><?php echo h($art->bid_price); ?></dd>
      </dl>
      <dl>
        <dt>Asking Price</dt>
        <dd><?php echo h($art->asking_price); ?></dd>
      </dl>
      <dl>
        <dt>Id</dt>
        <dd><?php echo h($art->id); ?></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><?php echo h($art->description); ?></dd>
      </dl>
    </div>

  </div>

</div>
