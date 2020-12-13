<?php
  /**
   * This class will handle everything concerning an Art
   */
  class Art extends DatabaseObject
  {

    static protected $table_name = 'art';
    static public $db_columns = ['id', 'u_id', 'name', 'artist_id', 'date_of_creation', 'price', 'asking_price', 'bid_price', 'current_owner', 'new_owner', 'market_status', 'width', 'height', 'depth', 'art_style', 'art_medium', 'art_subject', 'description'];


    public $id;
    public $u_id;
    public $name;
    public $artist_id;
    public $date_of_creation;
    public $price;
    public $asking_price;
    public $bid_price;
    public $current_owner;
    public $new_owner;
    public $market_status;
    public $width;
    public $height;
    public $depth;
    public $art_medium;
    public $art_style;
    public $art_subject;
    public $description;


    public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->u_id = $args['u_id'] ?? '';
    $this->name = $args['name'] ?? '';
    $this->artist_id = $args['artist_id'] ?? '';
    $this->date_of_creation = $args['date_of_creation'] ?? '';
    $this->price = $args['price'] ?? 0.0;
    $this->asking_price = $args['asking_price'] ?? 0.0;
    $this->bid_price = $args['bid_price'] ?? 0.0;
    $this->current_owner = $args['current_owner'] ?? '';
    $this->new_owner = $args['new_owner'] ?? '';
    $this->market_status = $args['market_status'] ?? 1;
    $this->width = $args['width'] ?? 0;
    $this->height = $args['height'] ?? 0;
    $this->depth = $args['depth'] ?? 0;
    $this->art_medium = $args['art_medium'] ?? '';
    $this->art_style = $args['art_style'] ?? '';
    $this->art_subject = $args['art_subject'] ?? '';
    $this->description = $args['description'] ?? '';

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

    //This is the name used in the title of the detail.php page
    public function name() {
      return "{$this->name} {$this->artist_id} {$this->price}";
    }

    protected function validate() {
      $this->errors = [];

      // Add custom validations

      return $this->errors;
    }

  }

 ?>
