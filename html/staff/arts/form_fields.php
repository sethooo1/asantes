<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($art)) {
  redirect_to(url_for('/staff/arts/index.php'));
}
?>

<?php $artists = Artist::find_all(); ?>

<dl>
  <dt>Unique ID</dt>
  <dd><input type="text" name="art[u_id]" value="<?php echo h($art->u_id); ?>" /></dd>
</dl>

<dl>
  <dt>Name</dt>
  <dd><input type="text" name="art[name]" value="<?php echo h($art->name); ?>" /></dd>
</dl>

<dl>
  <dt>Artist</dt>
  <dd>
    <select class="" name="art[artist_id]">
      <option value=""></option>
      <?php foreach ($artists as $artist) { ?>
        <option value="<?php echo h($artist->id); ?>" <?php if($art->artist_id == $artist->id) {echo 'selected';} ?>><?php echo h($artist->full_name()) ; ?></option>
      <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Date of Creation</dt>
  <dd><input type="date" name="art[date_of_creation]" value="<?php echo h($art->date_of_creation); ?>" /></dd>
</dl>

<dl>
  <dt>Price</dt>
  <dd>$ <input type="text" name="art[price]" value="<?php echo h($art->price); ?>" /></dd>
</dl>

<dl>
  <dt>Asking Price</dt>
  <dd>$ <input type="text" name="art[asking_price]" value="<?php echo h($art->asking_price); ?>" /></dd>
</dl>


<dl>
  <dt>Bid Price</dt>
  <dd>$ <input type="text" name="art[bid_price]" value="<?php echo h($art->bid_price); ?>" /></dd>
</dl>

<dl>
  <dt>Current Owner</dt>
  <dd><input type="text" name="art[current_owner]" size="18" value="<?php echo h($art->current_owner); ?>" /></dd>
</dl>

<dl>
  <dt>New Owner</dt>
  <dd><input type="text" name="art[new_owner]" size="18" value="<?php echo h($art->new_owner); ?>" /></dd>
</dl>

<dl>
  <dt>Market Status</dt>
  <dd><input type="text" name="art[market_status]" size="18" value="<?php echo h($art->market_status); ?>" /></dd>
</dl>

<dl>
  <dt>Description</dt>
  <dd><textarea name="art[description]" rows="5" cols="50"><?php echo h($art->description); ?></textarea></dd>
</dl>
