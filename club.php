<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>
  </div>
  <div class="container">
    <div class="common-page-wrapper league-page-wrapper ">
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
            <span>Barcelona - Man United</span>
          </div>
        </a>
      </div>
      <div class="common-header-wrapper">
        <div class="block-common">
          <div class="common-info-wrapper">
            <div class="column">
              <img src="./images/league-image.png" alt="" class="image-league">
              <div class="league-info">
                <span class="league-name">Premier League</span>
                <div class="club-info-wrapper">
                  <div class="info-block">
                    <img src="./images/club-1.png" class="image-club" />
                    <span class="club-name">England</span>
                  </div>
                  <div class="select-block">
                    <select name="" id="" value="">
                      <option value="">22/23</option>
                      <option value="">22/24</option>
                      <option value="">22/25</option>
                      <option value="">22/26</option>
                      <option value="">22/27</option>
                      <option value="">22/28</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="column direction-column">
              <p class="line">
                <span class="label">Title holder:</span>
                <span class="value">Manchester City</span>
              </p>
              <p class="line">
                <span class="label">Most valuable player:</span>
                <span class="value">Erling Braut Håland € 170.0M</span>
              </p>
            </div>
            <div class="column direction-column">
              <div class="prem-stats-wrapper">
                <span class="prem-title">22-23 PREM STATS</span>
                <div class="prem-stats-table">
                  <div class="prem-stats-column">
                    <span class="label">Player</span>
                    <span class="value">640</span>
                  </div>

                  <div class="prem-stats-column">
                    <span class="label">Foreign players</span>
                    <span class="value">923</span>
                  </div>

                  <div class="prem-stats-column">
                    <span class="label">Number of teams</span>
                    <span class="value">92</span>
                  </div>

                  <div class="prem-stats-column">
                    <span class="label">Total market value</span>
                    <span class="value txt-hightlight ">€ 9.6943B</span>
                  </div>



                </div>
              </div>

            </div>
          </div>

          <div id="league-tabs">
            <ul class="sub-nav">
              <li><a href="#tabs-1">Overview</a></li>
              <li><a href="#tabs-2">Schedule</a></li>
              <li><a href="#tabs-3">Standings</a></li>
              <li><a href="#tabs-4">Stats</a></li>
              <li><a href="#tabs-5">Champions</a></li>
            </ul>
            <!-- ===========START Overview TABS ============= -->
            <div id="tabs-1" class="common-tab-content">
              <div class="main-layout">
                <div class="middle-layout">
                  <div class="main-common-content">
                    main league
                  </div>
                </div>
                <div class="right-layout">
                  <div class="right-common-content">
                    right content
                  </div>
                </div>
              </div>
            </div>
            <!-- ===========END Overview TABS ============= -->


            <!-- ===========START Schedule TABS ============= -->
            <div id="tabs-2" class="common-tab-content">
              tab2
            </div>
            <!-- ===========END Schedule TABS ============= -->


            <!-- ===========START Standings TABS ============= -->
            <div id="tabs-3" class="common-tab-content">
              tab3
            </div>
            <!-- ===========END Standings TABS ============= -->


            <!-- ===========START Stats TABS ============= -->
            <div id="tabs-4" class="common-tab-content">
              tab4
            </div>
            <!-- ===========END Stats TABS ============= -->




            <!-- ===========START Champions TABS ============= -->
            <div id="tabs-5" class="common-tab-content">
              tab5
            </div>
            <!-- ===========END Champions TABS ============= -->


          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>
<script>
  $("#league-tabs").tabs({
    active: 0
  })
</script>

</html>