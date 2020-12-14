<?php require_once("../../private/initialize.php"); ?>
<?php customer_require_login(); ?>
<?php $page_title = "Welcome"; ?>
<?php include(SHARED_PATH . '/customer_header.php'); ?>

Welcome <?php echo $_SESSION['customer_email']; ?>

<?php include(SHARED_PATH . '/customer_footer.php'); ?>
