<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>
  </div>

  <div class="football-block-wrapper">

    <div class="container">
      <div class="common-list-category">
        <a href="#" target="">
          <div class="category-item">
            <span>Champions League</span>
          </div>
        </a>
        <div class="arrow">
          <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_103_3181)">
              <path d="M4.5 3.5L7.5 6.5L4.5 9.5" stroke="#4A5568" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
              <clipPath id="clip0_103_3181">
                <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <a href="#" target="">
          <div class="category-item">
            <span>Barcelona vs Man United</span>
          </div>
        </a>
      </div>

      <!-- START MATCH INFO DETAIL -->
      <div class="match-info-detail-wrapper">
        <div class="column">
          <div class="club-wrapper">
            <span class="club-name club-name-pc">Manchester United</span>
            <span class="club-name club-name-mb">Man United</span>
            <img src="./images/club-2.png" alt="" class="club-image">
          </div>
        </div>
        <div class="column">
          <div class="line-info line-score">
            <div class="line-left">1</div>
            <span class="slash">:</span>
            <div class="line-right">0</div>
          </div>
          <div class="line-info">
            <div class="line-left">Elapsed:</div>
            <div class="line-right">
              <span class="ft-label">FT</span>
            </div>
          </div>
          <div class="line-info">
            <div class="line-left">Half time:</div>
            <div class="line-right txt-strong">
              1 : 0
            </div>
          </div>
          <div class="line-info">
            <div class="line-left">Full time:</div>
            <div class="line-right txt-strong">
              1 : 0
            </div>
          </div>
          <div class="line-info">
            <div class="line-left">Kick off:</div>
            <div class="line-right txt-strong">
              16:00
            </div>
          </div>
          <div class="line-info">
            <div class="line-left">Date:</div>
            <div class="line-right txt-strong">
              June 22, 2022
            </div>
          </div>
        </div>
        <div class="column">
          <div class="club-wrapper">
            <span class="club-name club-name-pc">Liverpool</span>
            <span class="club-name club-name-mb">Live</span>
            <img src="./images/chel-club.png" alt="" class="club-image">
          </div>
        </div>
      </div>

      <!-- START MATCH INFO DETAIL -->

      <!-- START MATCH PLAYER-->
      <div class="match-player-wrapper">
        <div id="football-tabs">
          <ul class="sub-nav">
            <li><a href="#tabs-1">Highlight</a></li>
            <li><a href="#tabs-2">Record</a></li>
          </ul>
          <div id="tabs-1" class="football-tab-content">
            <div class="player-wrapper">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VkGzajNpNwo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
          <div id="tabs-2" class="football-tab-content">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VkGzajNpNwo"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!--  END MATCH PLAYER-->

      <!-- START SELECT PLAN -->
      <div class="match-plan-wrapper">
        <h3 class="title">Choose your plan</h3>
        <div class="list-match-plan">
          <div class="plan-item">
            <div class="plan-item-content">
              <h4 class="plan-title">1 Months</h4>
              <div class="price-wrapper">
                <div class="top-price">
                  <span class="prev-price">$10.99</span>
                  <span class="save-label">Save 5%</span>
                </div>
                <div class="primary-price">
                  <div class="left-content">
                    <span class="sign">$</span>
                    <span class="price">4</span>
                    <span class="month">/mo</span>
                  </div>
                  <div class="plan-btn-block">
                    <button class="btn-select-plan">Upgrade</button>
                  </div>
                </div>
              </div>

              <p class="plan-description">
                Your plan renews automatically. You can <a href="#">
                  <strong>
                    <u> stop automatic renewal</u>
                  </strong>
                </a> at any time.
              </p>
            </div>
          </div>

          <div class="plan-item">
            <div class="plan-item-content">
              <span class="recommend-label">SPECIAL DEAL</span>
              <h4 class="plan-title">
                12 <span class="highlight"> + 3 Months Free</span>
              </h4>
              <div class="price-wrapper">
                <div class="top-price">
                  <span class="prev-price">$10.99</span>
                  <span class="save-label">Save 10%</span>
                </div>
                <div class="primary-price">
                  <div class="left-content">
                    <span class="sign">$</span>
                    <span class="price">3.5</span>
                    <span class="month">/mo</span>
                  </div>
                  <div class="plan-btn-block">
                    <button class="btn-select-plan">Upgrade</button>
                  </div>
                </div>
              </div>

              <p class="plan-description">
                Your plan renews automatically. You can <a href="#">
                  <strong>
                    <u> stop automatic renewal</u>
                  </strong>
                </a> at any time.
              </p>
            </div>

          </div>

          <div class="plan-item">
            <div class="plan-item-content">
              <h4 class="plan-title">6 Months</h4>
              <div class="price-wrapper">

                <div class="top-price">
                  <span class="prev-price">$10.99</span>
                  <span class="save-label">Save 15%</span>
                </div>
                <div class="primary-price">
                  <div class="left-content">
                    <span class="sign">$</span>
                    <span class="price">3</span>
                    <span class="month">/mo</span>
                  </div>
                  <div class="plan-btn-block">
                    <button class="btn-select-plan">Upgrade</button>
                  </div>
                </div>
              </div>

              <p class="plan-description">
                Your plan renews automatically. You can <a href="#">
                  <strong>
                    <u> stop automatic renewal</u>
                  </strong>
                </a> at any time.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- END SELECT PLAN -->

      <!-- START LEAGUE HIGHLIGHT  -->
      <div class="match-league-highlight">
        <h3 class="title">Premier League Highlight</h3>
          <div class="list-match-of-league">
            <div class="list-timeline-wrapper">
              <div class="common-home-league-table live-schedule-table">
                <div class="table-row">
                  <div class="left-column">
                    <div class="time-wrapper">
                      <span class="time">
                        <span>00:30</span>
                        <span class="text-default">21/12</span>
                      </span>
                    </div>
                    <span class="dot"></span>
                    <div class="league-name">Premier League</div>
                  </div>
                  <div class="right-column">
                    <div class="list-club-wrapper">
                      <div class="column-50 club-1">
                        <div class="club-item">
                          <span class="club-name">Man City Man</span>
                          <img src="./images/club-1.png" alt="" class="club-image">
                        </div>
                      </div>
                      <div class="dash"> - </div>
                      <div class="column-50 club-2">
                        <div class="club-item">
                          <img src="./images/club-2.png" alt="" class="club-image">
                          <span class="club-name">Man City Man Man City Man Man City Man</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="left-column">
                    <div class="time-wrapper">
                      <span class="time">
                        <span>00:30</span>
                        <span class="text-default">21/12</span>
                      </span>
                    </div>
                    <span class="dot"></span>
                    <div class="league-name">Premier League</div>
                  </div>
                  <div class="right-column">
                    <div class="list-club-wrapper">
                      <div class="column-50 club-1">
                        <div class="club-item">
                          <span class="club-name">Man City Man</span>
                          <img src="./images/club-1.png" alt="" class="club-image">
                        </div>
                      </div>
                      <div class="dash"> - </div>
                      <div class="column-50 club-2">
                        <div class="club-item">
                          <img src="./images/club-2.png" alt="" class="club-image">
                          <span class="club-name">Man City</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="left-column">
                    <div class="time-wrapper">
                      <span class="time">
                        <span>00:30</span>
                        <span class="text-default">21/12</span>
                      </span>
                    </div>
                    <span class="dot"></span>
                    <div class="league-name">Premier League</div>
                  </div>
                  <div class="right-column">
                    <div class="list-club-wrapper">
                      <div class="column-50 club-1">
                        <div class="club-item">
                          <span class="club-name">Man City Man</span>
                          <img src="./images/club-1.png" alt="" class="club-image">
                        </div>
                      </div>
                      <div class="dash"> - </div>
                      <div class="column-50 club-2">
                        <div class="club-item">
                          <img src="./images/club-2.png" alt="" class="club-image">
                          <span class="club-name">Man City</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-row">
                  <div class="left-column">
                    <div class="time-wrapper">
                      <span class="time">
                        <span>00:30</span>
                        <span class="text-default">21/12</span>
                      </span>
                    </div>
                    <span class="dot"></span>
                    <div class="league-name">Premier League</div>
                  </div>
                  <div class="right-column">
                    <div class="list-club-wrapper">
                      <div class="column-50 club-1">
                        <div class="club-item">
                          <span class="club-name">Man City Man</span>
                          <img src="./images/club-1.png" alt="" class="club-image">
                        </div>
                      </div>
                      <div class="dash"> - </div>
                      <div class="column-50 club-2">
                        <div class="club-item">
                          <img src="./images/club-2.png" alt="" class="club-image">
                          <span class="club-name">Man City</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!-- START LEAGUE HIGHLIGHT  -->

    </div>
  </div>

  <?php include "templates/footer.php"; ?>
</body>

<script>
  $("#football-tabs").tabs({
    active: 0
  })
</script>

</html>