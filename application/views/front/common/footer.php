<section style="margin-top: 80px; background-color: rgb(212 210 210);">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <p style="margin-top:50px;">National Debt Support is an independent website created to help users find a solution to their debt problems. Our service is free to use and you are under no obligation to accept any of the recommendations you receive. Calls may be recorded for training and quality purposes. Please check with your service provider for details. On completion of our form, we will introduce you to one of our authorised Debt Solutions provider. We use the contact details you have given us on the form to make this introduction. An adviser will contact you by telephone. During that call, the expert adviser will discuss your options in more detail to see if they can help.
​</p>
        <p>Digital Hopr Inc. does not directly administer debt management services. It is ultimately up to you to determine whether the company that we may introduce you to are appropriate for your situation</p>
        <p>Digital Hopr Inc. is paid for providing marketing services to selected Debt Management companies who are legally appointed to manage debt adjustment services. They have no affiliation with your Creditors. They will offer free initial consultations with no further obligation.</p>
        <p>We use cookies to give you the best experience. By using our website, you agree to our use of cookies in accordance with our cookie policy. Names and pictures associated with client testimonials are not real in order to protect the privacy of all clients. </p>
        <p>www.deptsupportnational.com is owned by Digital Hopr Inc. Registered Address: <?= $address;?></p>
      </div>
      <ul style="text-align: center;">
        <li style="list-style: none;"><a href="<?=base_url('front/privacy')?>">Privacy Policy</li>
        <li style="list-style: none;"><a href="<?=base_url('front/terms')?>">Terms & Conditions</li>
        <li style="list-style: none;"><a href="<?=base_url('front/service_providers')?>">Service Providers</li>
      </ul>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>


    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="<?= base_url('assets/front/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        $('.step-1').show();

        $(".forsee").on('click',function(){
          let step= $(this).data('nextstep');
          // alert(step)

          $('.type-debit').hide();
          $(".step-"+step).show();

        });
      })
    </script>

  </body>
</html>