<?php

  /**
   * Session class for Admin user and other Users
   */
  class Session
  {
    private $admin_id;
    public $username;
    private $last_login;
    private $customer_id;
    public $customer_email;
    private $customer_last_login;

    public const MAX_LOGIN_AGE = 60*60*24; //1 day

    public function __construct()
    {
      session_start();
      // Automatically check for checked_stored_login
      $this->check_stored_login();
      $this->customer_check_stored_login();
    }

    public function login($admin)
    {
      if ($admin) {
        //Prevent Session fixation attacks
        session_regenerate_id();
        $this->admin_id = $_SESSION['admin_id'] = $admin->id;
        $this->username = $_SESSION['username'] = $admin->username;
        $this->last_login = $_SESSION['last_login'] = time();
      }
      return true;
    }

    public function login_customer($customer)
    {
      if ($customer) {
        //Prevent Session fixation attacks
        session_regenerate_id();
        $this->customer_id = $_SESSION['customer_id'] = $customer->id;
        $this->customer_email = $_SESSION['customer_email'] = $customer->email;
        $this->customer_last_login = $_SESSION['customer_last_login'] = time();
      }
      return true;
    }

    public function is_logged_in()
    {
      //return isset($this->admin_id);
      return isset($this->admin_id) && $this->last_login_is_recent();
    }

    public function customer_is_logged_in()
    {
      //return isset($this->admin_id);
      return isset($this->customer_id) && $this->customer_last_login_is_recent();
    }

    public function logout()
    {
      unset($_SESSION['admin_id']);
      unset($_SESSION['username']);
      unset($_SESSION['last_login']);
      unset($this->admin_id);
      unset($this->username);
      unset($this->last_login);
      return true;
    }

    public function customer_logout()
    {
      unset($_SESSION['customer_id']);
      unset($_SESSION['customer_email']);
      unset($_SESSION['customer_last_login']);
      unset($this->customer_id);
      unset($this->customer_email);
      unset($this->customer_last_login);
      return true;
    }

    private function check_stored_login()
    {
      if (isset($_SESSION['admin_id'])) {
        // code...
        $this->admin_id = $_SESSION['admin_id'];
        $this->username = $_SESSION['username'];
        $this->last_login = $_SESSION['last_login'];
      }
    }

    private function customer_check_stored_login()
    {
      if (isset($_SESSION['customer_id'])) {
        // code...
        $this->customer_id = $_SESSION['customer_id'];
        $this->customer_email = $_SESSION['customer_email'];
        $this->customer_last_login = $_SESSION['customer_last_login'];
      }
    }

    private function last_login_is_recent()
    {
      // code...
      if (!isset($this->last_login)) {
        // code...
        return false;
      } elseif (($this->last_login + self::MAX_LOGIN_AGE) < time()) {
        // code...
        return false;
      } else {
        // code...
        return true;
      }
    }

    private function customer_last_login_is_recent()
    {
      // code...
      if (!isset($this->customer_last_login)) {
        // code...
        return false;
      } elseif (($this->customer_last_login + self::MAX_LOGIN_AGE) < time()) {
        // code...
        return false;
      } else {
        // code...
        return true;
      }
    }

    public function message($msg='')
    {
      // Session messages that appear on the next ldap_control_paged_result
      if (!empty($msg)) {
        // Then this is a "set" messages
        $_SESSION['message'] = $msg;
        return true;
      } else {
        // Then this is a "get" message
        return $_SESSION['message'] ?? '';
      }

    }

    public function clear_message()
    {
      // Clear the message stored in the Session
      unset($_SESSION['message']);
    }
  }

 ?>
