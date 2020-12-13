<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($artist)) {
  redirect_to(url_for('/staff/artists/index.php'));
}
?>

<dl>
  <dt>First name</dt>
  <dd><input type="text" name="artist[first_name]" value="<?php echo h($artist->first_name); ?>" /></dd>
</dl>

<dl>
  <dt>Last name</dt>
  <dd><input type="text" name="artist[last_name]" value="<?php echo h($artist->last_name); ?>" /></dd>
</dl>

<dl>
  <dt>Email</dt>
  <dd><input type="text" name="artist[email]" value="<?php echo h($artist->email); ?>" /></dd>
</dl>

<dl>
  <dt>Username</dt>
  <dd><input type="text" name="artist[username]" value="<?php echo h($artist->username); ?>" /></dd>
</dl>

<dl>
  <dt>Country</dt>
  <dd><input type="text" name="artist[country]" value="<?php echo h($artist->country); ?>" /></dd>
</dl>

<dl>
  <dt>State/Region</dt>
  <dd><input type="text" name="artist[state]" value="<?php echo h($artist->state); ?>" /></dd>
</dl>

<dl>
  <dt>City</dt>
  <dd><input type="text" name="artist[city]" value="<?php echo h($artist->city); ?>" /></dd>
</dl>

<dl>
  <dt>Address Line 1</dt>
  <dd><input type="text" name="artist[address_one]" value="<?php echo h($artist->address_one); ?>" /></dd>
</dl>

<dl>
  <dt>Address Line 2/P. O. Box</dt>
  <dd><input type="text" name="artist[address_two]" value="<?php echo h($artist->address_two); ?>" /></dd>
</dl>

<dl>
  <dt>Phone Number</dt>
  <dd><input type="text" name="artist[phone_num]" value="<?php echo h($artist->phone_num); ?>" /></dd>
</dl>

<dl>
  <dt>Bio/Background</dt>
  <dd><textarea name="artist[bio]" rows="5" cols="50"><?php echo h($artist->bio); ?></textarea></dd>
</dl>
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
<p><input type="file" name="file_upload" value=""></p>
