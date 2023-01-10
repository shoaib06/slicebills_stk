<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/') ?>css/style.css">

  <title><?= $website_title; ?></title>
  <script type="text/javascript">
    (function() {
      var tf = document.createElement('script');
      tf.type = 'text/javascript';
      tf.async = true;
      tf.src = ("https:" == document.location.protocol ? 'https' : 'http') + "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" + new Date().getTime() + Math.random();
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(tf, s);
    })();
  </script>
  <noscript>
    <img src="https://api.trustedform.com/ns.gif" />
  </noscript>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <?php $image = $this->common_model->GetSingleValue(SETTINGS_TABLE, 'value', array('type' => 'website_logo')); ?>
        <a href="<?= base_url('/'); ?>">

          <img src="<?php echo base_url('uploads/' . $image) ?>" width="50%;" height="100px;">
        </a>
      </div>
      <div class="col-md-6" style="display: flex;justify-content: flex-end; margin-top: 15px;">
        <img src="<?= base_url('assets/front/') ?>images/secure.png" width="19%;" height="38px;">
        <img src="<?= base_url('assets/front/') ?>images/trustpilot-5stars.png" width="19%;" height="38px;">
      </div>
    </div>
  </div>

  <section>
    <nav class="navbar navbar-expand-lg" style="border:1px solid;
    background-color: rgb(252, 251, 251);">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="display: flex;margin: 0 auto;">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/#About Us') ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/#Quiz') ?>">Debt Savings Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/front/contact') ?>">Contact Us</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </section>