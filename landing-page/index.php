<!DOCTYPE html>
<html lang="en">

<head>
  <title>rev-3 landing page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/style.css">
</head>

<body>
  <!-- Included as a separate standalone component -->
  <?php require_once 'header.php'; ?>
  <div class="d-flex flex-column align-items-center justify-content-center vertical-align">
    <?php require_once 'countdown.php'; ?>
    <?php require_once 'aboutContent.php'; ?>
  </div>
  <!-- Included as a separate standalone component -->
  <?php require_once 'parallax1.php'; ?>
  <?php require_once 'centralContent.php'; ?>
  <?php require_once 'parallax2.php'; ?>
  <?php require_once 'lastContent.php'; ?>
  <?php require_once 'footer.php'; ?>
  <script src="./dist/js/script.js"></script>
</body>

</html>
