<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/') ?>css/style.css">

   <title><?= $website_title; ?></title>
</head>

<body>

</body>

</html>
<div class="container">
  <a href="<?= base_url('/'); ?>">

    <?php $image = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_logo')); ?>
       <img src="<?php echo base_url('uploads/' . $image) ?>" style="margin:0 auto; display: block;">
  </a>