<?php include "templates/head.php"; ?>

<body>
  <div class="price-page">
    <div class="header">
      <?php include "templates/header.php"; ?>
      <?php include "templates/menu.php"; ?>
    </div>
    <div class="container">
      <div class="thankiu-page-wrapper">


        <svg width="96" height="96" viewBox="0 0 96 96" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="4" y="4" width="88" height="88" rx="44" fill="#0DC66D" />
          <g clip-path="url(#clip0_154_5149)">
            <path d="M29.3335 48L42.6668 61.3333L69.3335 34.6666" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
          </g>
          <defs>
            <clipPath id="clip0_154_5149">
              <rect width="64" height="64" fill="white" transform="translate(16 16)" />
            </clipPath>
          </defs>
        </svg>

        <span class="thank-description">Thank you for your purchase</span>
        <span class="total-purchase">$4.00 - 1 month</span>
        <div class="list-btn">
          <a class="btn-back btn-view" href="#">View reciept</a>
          <a class="btn-back btn-view" href="#">View profile</a>
        </div>
        <p class="description ">If you need any assistance, feel free to <a href="#" class="contact-us">contact us</a></p>
        <a class="btn-back" href="/">Back to home page</a>
      </div>
    </div>
    <?php include "templates/footer.php"; ?>
  </div>
</body>

<script>
  countdownTimeStart()
  $(function() {
    $("#choose-payment-type-tabs").tabs({
      active: 1,
    });
  });

  function countdownTimeStart() {
    var countDownDate = new Date("2022/11/20 18:20:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("price-time-hour").innerHTML = String(hours).padStart(2, '0');
      document.getElementById("price-time-minute").innerHTML = String(minutes).padStart(2, '0');
      document.getElementById("price-time-second").innerHTML = String(seconds).padStart(2, '0');

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  }
</script>

</html>