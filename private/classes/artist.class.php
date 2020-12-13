<?php

class Artist extends DatabaseObject {

  static protected $table_name = "artists";
  static protected $db_columns = ['id', 'first_name', 'last_name', 'country', 'state', 'city', 'address_one', 'address_two', 'phone_num', 'email', 'username', 'bio', 'filename', 'type', 'size'];

  public $id;
  public $first_name;
  public $last_name;
  public $country;
  public $state;
  public $city;
  public $address_one;
  public $address_two;
  public $phone_num;
  public $email;
  public $username;
  public $bio;
  public $filename;
  public $type;
  public $size;

  private $temp_path;
  protected $upload_dir = "images/artists";

  public function __construct($args=[]) {
    $this->first_name = $args['first_name'] ?? '';
    $this->last_name = $args['last_name'] ?? '';
    $this->country = $args['country'] ?? '';
    $this->state = $args['state'] ?? '';
    $this->city = $args['city'] ?? '';
    $this->address_one = $args['address_one'] ?? '';
    $this->address_two = $args['address_two'] ?? '';
    $this->phone_num = $args['phone_num'] ?? '';
    $this->email = $args['email'] ?? '';
    $this->username = $args['username'] ?? '';
    $this->bio = $args['bio'] ?? '';
    $this->filename = $args['filename'] ?? '';
    $this->type = $args['type'] ?? '';
    $this->size = $args['bio'] ?? '';
  }

  public function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

  // Pass in $_FILE(['upload_file']) as an argument
  public function attach_file($file)
  {
    // Perform error checking on the form parameters
    if (!$file || empty($file) || !is_array($file)) {
      // error: nothing uploaded or wrong argument usage
      $this->errors[] = "No file was uploaded.";
      return false;
    } elseif ($file['error'] != 0) {
      // error: report what PHP says went wrong
      $this->errors[] = $this->upload_errors[$file['error']];
      return false;
    } else {
      // Set object attributes to the form parameters
      $this->temp_path = $file['tmp_name'];
      $this->filename  = basename($file['name']);
      $this->type      = $file['type'];
      $this->size      = $file['size'];
      // Don't worry about saving anything to the database yet
      return true;
    }
  }

  public function save()
  {
    // A new record wont have an id yet
    if (isset($this->id)) {
      // Really just to update the caption
      $this->update();
    } else {
      // Make sure there are no errors

      // Cant save if there are prexisting $errors
      if (!empty($this->errors)) {return false;}

      // Cant save without filename and temp location
      if (empty($this->filename) || empty($this->temp_path)) {
        $this->errors[] = "The file location was not available";
        return false;
      }

      // Determine the target path
      $target_path = '\wamp64' .DIRECTORY_SEPARATOR. 'www' .DIRECTORY_SEPARATOR. 'github' .DIRECTORY_SEPARATOR. 'asantes' .DIRECTORY_SEPARATOR. 'html' .DIRECTORY_SEPARATOR. $this->upload_dir .DIRECTORY_SEPARATOR. $this->filename;

      //Make sure file doesnt already exist in directory
      if (file_exists($target_path)) {
        $this->errors[] = "The file {$this->filename} already exists.";
        return false;
      }
      // Attempt to move the file
      if (move_uploaded_file($this->temp_path, $target_path)) {
        // Success
        // Save a corresponding entry into the database
        if ($this->create()) {
          // After the creation in the database has been succesful
          unset($this->temp_path);
          return true;
        }
      } else {
        // File was not move
        $this->errors[] = "The file upload failed, possibly due to incorrect permissions on the upload folder";
        return false;
      }
    }

  }

  public function image_path()
  {
    // The path to the image moved to the folder
    return $this->upload_dir.DIRECTORY_SEPARATOR.$this->filename;
  }

  // validate method for Admin class
  protected $upload_errors = array(
    // http://www.php.net/manual/en/features.file-uploads.errors.php
    UPLOAD_ERR_OK             => "No errors.",
    UPLOAD_ERR_INI_SIZE       => "Larger than upload_max_filesize.",
    UPLOAD_ERR_FORM_SIZE      => "Larger than form MAX_FILE_SIZE.",
    UPLOAD_ERR_PARTIAL        => "Partial Upload.",
    UPLOAD_ERR_NO_FILE        => "No file.",
    UPLOAD_ERR_NO_TMP_DIR     => "No temporary directory.",
    UPLOAD_ERR_CANT_WRITE     => "Cant write to disk.",
    UPLOAD_ERR_EXTENSION      => "File upload stopped by extension.",

  );

  protected function validate()
  {
    $this->errors = [];

    if(is_blank($this->first_name)) {
      $this->errors[] = "First name cannot be blank.";
    } elseif (!has_length($this->first_name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "First name must be between 2 and 255 characters.";
    }

    if(is_blank($this->last_name)) {
      $this->errors[] = "Last name cannot be blank.";
    } elseif (!has_length($this->last_name, array('min' => 2, 'max' => 255))) {
      $this->errors[] = "Last name must be between 2 and 255 characters.";
    }

    if(is_blank($this->email)) {
      $this->errors[] = "Email cannot be blank.";
    } elseif (!has_length($this->email, array('max' => 255))) {
      $this->errors[] = "Last name must be less than 255 characters.";
    } elseif (!has_valid_email_format($this->email)) {
      $this->errors[] = "Email must be a valid format.";
    }

    if(is_blank($this->username)) {
      $this->errors[] = "Username cannot be blank.";
    } elseif (!has_length($this->username, array('min' => 8, 'max' => 255))) {
      $this->errors[] = "Username must be between 8 and 255 characters.";
    } elseif (!has_unique_username($this->username, $this->id ?? 0)) {
      $this->errors[] = "Username not available. Try another one";
    }

    if ($this->password_required) {
      if(is_blank($this->password)) {
        $this->errors[] = "Password cannot be blank.";
      } elseif (!has_length($this->password, array('min' => 12))) {
        $this->errors[] = "Password must contain 12 or more characters";
      } elseif (!preg_match('/[A-Z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 uppercase letter";
      } elseif (!preg_match('/[a-z]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 lowercase letter";
      } elseif (!preg_match('/[0-9]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 number";
      } elseif (!preg_match('/[^A-Za-z0-9\s]/', $this->password)) {
        $this->errors[] = "Password must contain at least 1 symbol";
      }

      if(is_blank($this->confirm_password)) {
        $this->errors[] = "Confirm password cannot be blank.";
      } elseif ($this->password !== $this->confirm_password) {
        $this->errors[] = "Password and confirm password must match.";
      }
    }
    return $this->errors;
  }

  static public function find_by_username($username)
  {
    $sql = "SELECT * FROM " . static::$table_name . " ";
    $sql .= "WHERE username='" . self::$database->escape_string($username) . "'";
    $obj_array = static::find_by_sql($sql);
    if(!empty($obj_array)) {
      return array_shift($obj_array);
    } else {
      return false;
    }
  }

}

?>
