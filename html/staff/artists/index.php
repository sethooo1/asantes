<?php require_once('../../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php

// Find all artists
$artists = Artist::find_all();

?>
<?php $page_title = 'artists'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="artists listing">
    <h1>artists</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/artists/new.php'); ?>">Add artist</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Username</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($artists as $artist) { ?>
        <tr>
          <td><?php echo h($artist->id); ?></td>
          <td><?php echo h($artist->first_name); ?></td>
          <td><?php echo h($artist->last_name); ?></td>
          <td><?php echo h($artist->email); ?></td>
          <td><?php echo h($artist->username); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/artists/show.php?id=' . h(u($artist->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/artists/edit.php?id=' . h(u($artist->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/artists/delete.php?id=' . h(u($artist->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
