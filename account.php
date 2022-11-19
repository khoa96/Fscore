<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>
  </div>
  <div class="account-page-wrapper">
    <div class="container">
      <div class="page-price-header-wrapper">
        <ul class="common-list-category">
          <li>
            <a href="#">Home</a>
          </li>
          <span class="arrow">
            <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_739_17053)">
                <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_739_17053">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </span>
          <li>
            <a href="#">Account</a>
          </li>
        </ul>
      </div>
      <div class="account-header">
        <div class="user-info-wrapper">
          <img class="user-avatar" src="./images/account-image.png" alt="">
          <div class="info-detail">
            <h4 class="username">Messi</h4>
            <p class="line">
              <span class="email">David@gmail.com</span>
            </p>
            <p>
              <span class="expiration-date">Expiration Date: <strong>2025-12-20 02:02:19</strong></span>
              <span class="renew-plan">Renew plan: 2023-12-20. <a href="#" class="txt-link">Cancel renew.</a></span>
            </p>
          </div>
        </div>
        <div class="list-btn">
          <a class="btn-view" href="#">Forgot password</a>
          <a class="btn-view" href="#">Sign out</a>
        </div>
      </div>

      <div class="transaction-wrapper">
        <h4 class="transaction-title">Transaction history</h4>
        <div class="list-transaction">
          <div class="table-row table-heading">
            <div class="column-item">Date of purchase</div>
            <div class="column-item">Amount</div>
            <div class="column-item">Plan</div>
            <div class="column-item">Payment method</div>
            <div class="column-item">Transaction ID</div>
            <div class="column-item">&nbsp;</div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
          <div class="table-row">
            <div class="column-item">29.08. 22:30</div>
            <div class="column-item">$15</div>
            <div class="column-item">3 months</div>
            <div class="column-item">Paypal in Paddle</div>
            <div class="column-item">457348943</div>
            <div class="column-item">
              <button class="btn-view-transaction">View</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>

</html>