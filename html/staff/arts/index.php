<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 4;
$total_count = Art::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);
// Find all arts;
//use pagination instead
//$arts = Art::find_all();

$sql = "SELECT * FROM art ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$arts = Art::find_by_sql($sql);


?>
<?php $page_title = 'Arts'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="arts listing">
    <h1>Arts</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/arts/new.php'); ?>">Add Art</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Unique ID</th>
        <th>Name of Art</th>
        <th>Artist</th>
        <th>Creation Date</th>
        <th>Price</th>
        <th>Owner</th>
        <th>Market Status</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($arts as $art) { ?>
        <tr>
          <?php $artist = Artist::find_by_id($art->artist_id); ?>
          <td><?php echo h($art->id); ?></td>
          <td><?php echo h($art->u_id); ?></td>
          <td><?php echo h($art->name); ?></td>
          <td><?php echo h($artist->full_name()); ?></td>
          <td><?php echo h($art->date_of_creation); ?></td>
          <td><?php echo h($art->price); ?></td>
          <td><?php echo h($art->current_owner); ?></td>
          <td><?php echo h($art->market_status); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/arts/show.php?id=' . h(u($art->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/arts/edit.php?id=' . h(u($art->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/arts/delete.php?id=' . h(u($art->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php
      $url = url_for('/staff/arts/index.php');
      echo $pagination->page_links($url);
     ?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
