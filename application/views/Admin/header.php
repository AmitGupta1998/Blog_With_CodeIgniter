<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("Assets/css/bootstrap.min.css") ?>" rel="stylesheet">
    <!--//link_tag("Assets/css/bootstrap.min.css")-->
    <title>Admin Panel </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if($this->session->userdata('id')){ ?>

    <li> <a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger">logout</a></li>

    <?php }?>

  </div>
</nav>