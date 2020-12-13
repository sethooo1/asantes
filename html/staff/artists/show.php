<?php require_once('../../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$artist = Artist::find_by_id($id);

?>

<?php $page_title = 'Show Artist: ' . h($artist->full_name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/artists/index.php'); ?>">&laquo; Back to List</a>

  <div class="artist show">

    <h1>artist: <?php echo h($artist->full_name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>First name</dt>
        <dd><?php echo h($artist->first_name); ?></dd>
      </dl>
      <dl>
        <dt>Last name</dt>
        <dd><?php echo h($artist->last_name); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($artist->email); ?></dd>
      </dl>
      <dl>
        <dt>Username</dt>
        <dd><?php echo h($artist->username); ?></dd>
      </dl>
    </div>

  </div>

</div>
