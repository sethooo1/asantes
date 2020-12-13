<?php
  /**
   *
   */
  class Photograph extends DatabaseObject
  {

    static protected $table_name = "photographs";
    static protected $db_columns = ['id', 'filename', 'type', 'size', 'caption', 'art_id'];

    public $id;
    public $filename;
    public $type;
    public $size;
    public $caption;
    public $art_id;

    private $temp_path;
    protected $upload_dir = "images\arts";

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

        // Make sure the caption is not too long
        if (strlen($this->caption) >= 255) {
          $this->errors[] = "The caption can only be 255 characters long.";
          return false;
        }

        if (empty($this->art_id)) {
          $this->errors[] = "The art ID was not specified.";
          return false;
        }

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

    static public function find_photo_on($art_id=0) 
    {
      $sql = "SELECT * FROM " . self::$table_name . " ";
      $sql .= "WHERE art_id='" . self::$database->escape_string($art_id) . "'";
      $obj_array = self::find_by_sql($sql);
      if(!empty($obj_array)) {
        return array_shift($obj_array);
      } else {
        return false;
      }
    }

  }

 ?>
