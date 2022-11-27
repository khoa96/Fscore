<?php include "templates/head.php"; ?>

<body>
  <div class="header">
    <?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>
  </div>
  <div class="container">
    <div class="common-page-wrapper club-page-wrapper">
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
            <div class="column header-club-column">
              <img src="./images/league-image.png" alt="" class="image-league">
              <div class="league-info">
                <span class="league-name">Premier League</span>
                <div class="club-info-wrapper">
                  <div class="info-block">
                    <img src="./images/club-1.png" class="image-club" />
                    <span class="club-name">England</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-club-column d-flex flex-end">
              <div class="prem-stats-wrapper">
                <span class="prem-title">22-23 PREM STATS</span>
                <div class="prem-stats-table">
                  <div class="prem-stats-column">
                    <span class="label">Squad size</span>
                    <span class="value">640</span>
                  </div>

                  <div class="prem-stats-column">
                    <span class="label">Foreign players</span>
                    <span class="value">923</span>
                  </div>

                  <div class="prem-stats-column">
                    <span class="label">Average age</span>
                    <span class="value">92</span>
                  </div>

                  <div class="prem-stats-column">
                    <span class="label">Total market value</span>
                    <span class="value txt-hightlight ">€ 9.6943B</span>
                  </div>

                  <div class="prem-stats-column">
                    <span class="label">Player Salary</span>
                    <span class="value txt-hightlight ">€ 9.6943B</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div id="footballer-tabs">
        <ul class="sub-nav">
          <li><a href="#tabs-1">Overview</a></li>
          <li><a href="#tabs-2">Salary</a></li>
          <li><a href="#tabs-3">Champions</a></li>
          <li><a href="#tabs-4">Statistics</a></li>
        </ul>
        <!-- ===========START Overview TABS ============= -->
        <div id="tabs-1" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content">
                <h3 class="main-common-title">Manchester City Matches 22-23</h3>
                <div class="common-club-matches-table">
                  <div class="table-heading">
                    <div class="heading-column d-flex">
                      <span class="icon-arrow">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_448_11553)">
                            <path d="M12.5 5L7.5 10L12.5 15" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_448_11553">
                              <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                      <span class="label">Previous</span>
                    </div>
                    <div class="heading-column d-flex flex-center">
                      <span class="label">Nov 2022</span>
                      <span class="icon-arrow">

                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_448_11556)">
                            <path d="M15 7.5L10 12.5L5 7.5" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_448_11556">
                              <rect width="20" height="20" fill="white" transform="translate(20) rotate(90)" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>

                    </div>
                    <div class="heading-column d-flex flex-end">
                      <span class="label">Next</span>
                      <span class="icon-arrow">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_448_11550)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#1A202C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_448_11550">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div class="common-match-list-timeline">
                    <div class="match-timeline-item">
                      <div class="left-column">
                        <div class="time-wrapper">
                          <span class="time">03 Nov 03:00</span>
                          <span class="sign">FT</span>
                        </div>
                      </div>
                      <div class="league-column">
                        UEFA Champions League
                      </div>
                      <div class="middle-column">
                        <div class="club-item club-1">
                          <div class="club-info">
                            <span class="club-name">Man United</span>
                            <img src="./images/club-1.png" alt="" class="club-image">
                          </div>
                          <span class="score">1</span>
                        </div>
                        <span class="dash"> - </span>
                        <div class="club-item club-2">
                          <span class="score">2</span>
                          <div class="club-info">
                            <img src="./images/club-2.png" alt="" class="club-image">
                            <span class="club-name">Tottenham Hotspur</span>
                          </div>
                        </div>
                      </div>
                      <div class="right-column">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_502_9690)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_502_9690">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>

                    <div class="match-timeline-item">
                      <div class="left-column">
                        <div class="time-wrapper">
                          <span class="time">03 Nov 03:00</span>
                          <span class="sign">FT</span>
                        </div>
                      </div>
                      <div class="league-column">
                        UEFA Champions League
                      </div>
                      <div class="middle-column">
                        <div class="club-item club-1">
                          <div class="club-info">
                            <span class="club-name">Man United</span>
                            <img src="./images/club-1.png" alt="" class="club-image">
                          </div>
                          <span class="score">1</span>
                        </div>
                        <span class="dash"> - </span>
                        <div class="club-item club-2">
                          <span class="score">2</span>
                          <div class="club-info">
                            <img src="./images/club-2.png" alt="" class="club-image">
                            <span class="club-name">Wolves</span>
                          </div>
                        </div>
                      </div>
                      <div class="right-column">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_502_9690)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_502_9690">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>

                    <div class="match-timeline-item">
                      <div class="left-column">
                        <div class="time-wrapper">
                          <span class="time">03 Nov 03:00</span>
                          <span class="sign">FT</span>
                        </div>
                      </div>
                      <div class="league-column">
                        UEFA Champions League
                      </div>
                      <div class="middle-column">
                        <div class="club-item club-1">
                          <div class="club-info">
                            <span class="club-name">Man United Wolves</span>
                            <img src="./images/club-1.png" alt="" class="club-image">
                          </div>
                          <span class="score">1</span>
                        </div>
                        <span class="dash"> - </span>
                        <div class="club-item club-2">
                          <span class="score">2</span>
                          <div class="club-info">
                            <img src="./images/club-2.png" alt="" class="club-image">
                            <span class="club-name">Tottenham Hotspur</span>
                          </div>
                        </div>
                      </div>
                      <div class="right-column">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_502_9690)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_502_9690">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>

                    <div class="match-timeline-item">
                      <div class="left-column">
                        <div class="time-wrapper">
                          <span class="time">03 Nov 03:00</span>
                          <span class="sign">FT</span>
                        </div>
                      </div>
                      <div class="league-column">
                        UEFA Champions League
                      </div>
                      <div class="middle-column">
                        <div class="club-item club-1">
                          <div class="club-info">
                            <span class="club-name">Man United</span>
                            <img src="./images/club-1.png" alt="" class="club-image">
                          </div>
                          <span class="score">1</span>
                        </div>
                        <span class="dash"> - </span>
                        <div class="club-item club-2">
                          <span class="score">2</span>
                          <div class="club-info">
                            <img src="./images/club-2.png" alt="" class="club-image">
                            <span class="club-name">Wolves</span>
                          </div>
                        </div>
                      </div>
                      <div class="right-column">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_502_9690)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#A0AEC0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_502_9690">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <h3 class="main-common-title">Manchester CityStats 22-23</h3>
                <div class="common-club-stats-table">
                  <div class="table-row table-heading">
                    <div class="column-40"></div>
                    <div class="column-10 flex-center">Apps</div>
                    <div class="column-10 flex-center">Goals</div>
                    <div class="column-10 flex-center">Shots pg</div>
                    <div class="column-10 flex-center">Discipline</div>
                    <div class="column-10 flex-center">Possession%</div>
                    <div class="column-10 flex-center">Pass%</div>
                  </div>
                  <div class="table-row">
                    <div class="column-40">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Arsenal Arsenal </span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">14</div>
                    <div class="column-10 flex-center">40</div>
                    <div class="column-10 flex-center">17</div>
                    <div class="column-10 flex-center">
                      <div class="list-score">
                        <span class="score score-warning">2</span>
                        <span class="score score-danger">1</span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">65.3</div>
                    <div class="column-10 flex-center">0.0</div>
                  </div>

                  <div class="table-row">
                    <div class="column-40">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Arsenal Arsenal </span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">14</div>
                    <div class="column-10 flex-center">40</div>
                    <div class="column-10 flex-center">17</div>
                    <div class="column-10 flex-center">
                      <div class="list-score">
                        <span class="score score-warning">2</span>
                        <span class="score score-danger">1</span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">65.3</div>
                    <div class="column-10 flex-center">0.0</div>
                  </div>


                  <div class="table-row">
                    <div class="column-40">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Arsenal Arsenal </span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">14</div>
                    <div class="column-10 flex-center">40</div>
                    <div class="column-10 flex-center">17</div>
                    <div class="column-10 flex-center">
                      <div class="list-score">
                        <span class="score score-warning">2</span>
                        <span class="score score-danger">1</span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">65.3</div>
                    <div class="column-10 flex-center">0.0</div>
                  </div>

                  <div class="table-row">
                    <div class="column-40">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Arsenal Arsenal </span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">14</div>
                    <div class="column-10 flex-center">40</div>
                    <div class="column-10 flex-center">17</div>
                    <div class="column-10 flex-center">
                      <div class="list-score">
                        <span class="score score-warning">2</span>
                        <span class="score score-danger">1</span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">65.3</div>
                    <div class="column-10 flex-center">0.0</div>
                  </div>

                  <div class="table-row">
                    <div class="column-40">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Arsenal Arsenal Arsenal Arsenal Arsenal Arsenal Arsenal Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">14</div>
                    <div class="column-10 flex-center">40</div>
                    <div class="column-10 flex-center">17</div>
                    <div class="column-10 flex-center">
                      <div class="list-score">
                        <span class="score score-warning">2</span>
                        <span class="score score-danger">1</span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">65.3</div>
                    <div class="column-10 flex-center">0.0</div>
                  </div>

                  <div class="table-row table-footer">
                    <div class="column-40 flex-center d-flex">
                      Total / Average:
                    </div>
                    <div class="column-10 flex-center">14</div>
                    <div class="column-10 flex-center">40</div>
                    <div class="column-10 flex-center">17</div>
                    <div class="column-10 flex-center">
                      <div class="list-score">
                        <span class="score score-default">4.8</span>
                        <span class="score score-default">1</span>
                      </div>
                    </div>
                    <div class="column-10 flex-center">60.3</div>
                    <div class="column-10 flex-center">0.4</div>
                  </div>
                </div>

                <h3 class="main-common-title">Last Match Formations</h3>
                <p class="txt-line">Manchester City 1 : 2 Brentford 12 Nov 19:30</p>
                <p class="txt-line">Formation: 4-3-3</p>

                <div class="club-visual-match-wrapper">
                  <div class="club-visual-match">
                    <div class="visual-line">
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>
                    </div>
                    <div class="visual-line">
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>

                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>
                    </div>
                    <div class="visual-line">
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>

                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>

                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>
                    </div>
                    <div class="visual-line">
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden Phil Foden Phil Foden Phil Foden </span>
                      </div>
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden Phil Foden Phil Foden Phil Foden Phil Foden </span>
                      </div>
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden Phil Foden Phil Foden Phil Foden Phil Foden </span>
                      </div>
                    </div>
                    <div class="visual-line">
                      <div class="player-item">
                        <span class="number">13</span>
                        <span class="player-name">Phil Foden</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-layout">
              <div class="right-common-content">
                <div class="common-footballer-right-sidebar-block">
                  <h4 class="block-right-title">Strengths</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Consistency</span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Ball control </span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Playmaking</span>
                    </li>
                  </ul>
                </div>
                <div class="common-footballer-right-sidebar-block mt-16">
                  <h4 class="block-right-title">Weaknesses</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Error proneness</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Overview TABS ============= -->


        <!-- ===========START Salary TABS ============= -->
        <div id="tabs-2" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content">
                <h3 class="main-common-title">Lionel Messi Salary</h3>
                <div class="common-player-salary-table">
                  <div class="table-heading">
                    <div class="column-15">Year</div>
                    <div class="column-15">Weekly Salary</div>
                    <div class="column-15">Annual Salary</div>
                    <div class="column-25">Team</div>
                    <div class="column-20 txt-center">Leagues</div>
                    <div class="column-10 txt-center">Age</div>
                    <div class="column-10 txt-center">Contract untill</div>
                  </div>
                  <div class="table-row">
                    <div class="column-15">2022-2023</div>
                    <div class="column-15">£1,026,205</div>
                    <div class="column-15">£53,362,673</div>
                    <div class="column-25 txt-overflow">Paris Saint Germain (PSG)</div>
                    <div class="column-20 txt-overflow txt-center">French Ligue 1</div>
                    <div class="column-10 txt-center">35</div>
                    <div class="column-10 txt-center">2023-06-29</div>
                  </div>

                  <div class="table-row">
                    <div class="column-15">2022-2023</div>
                    <div class="column-15">£1,026,205</div>
                    <div class="column-15">£53,362,673</div>
                    <div class="column-25 txt-overflow">Paris Saint Germain (PSG)</div>
                    <div class="column-20 txt-overflow txt-center">French Ligue 1</div>
                    <div class="column-10 txt-center">35</div>
                    <div class="column-10 txt-center">2023-06-29</div>
                  </div>


                  <div class="table-row">
                    <div class="column-15">2022-2023</div>
                    <div class="column-15">£1,026,205</div>
                    <div class="column-15">£53,362,673</div>
                    <div class="column-25 txt-overflow">Paris Saint Germain (PSG)</div>
                    <div class="column-20 txt-overflow txt-center">French Ligue 1</div>
                    <div class="column-10 txt-center">35</div>
                    <div class="column-10 txt-center">2023-06-29</div>
                  </div>

                  <div class="table-row">
                    <div class="column-15">2022-2023</div>
                    <div class="column-15">£1,026,205</div>
                    <div class="column-15">£53,362,673</div>
                    <div class="column-25 txt-overflow">Paris Saint Germain (PSG)</div>
                    <div class="column-20 txt-overflow txt-center">French Ligue 1</div>
                    <div class="column-10 txt-center">35</div>
                    <div class="column-10 txt-center">-</div>
                  </div>

                  <div class="table-row">
                    <div class="column-15">2022-2023</div>
                    <div class="column-15">£1,026,205</div>
                    <div class="column-15">£53,362,673</div>
                    <div class="column-25 txt-overflow">Paris Saint Germain (PSG)</div>
                    <div class="column-20 txt-overflow txt-center">French Ligue 1</div>
                    <div class="column-10 txt-center">35</div>
                    <div class="column-10 txt-center">-</div>
                  </div>

                  <div class="table-row">
                    <div class="column-15">2022-2023</div>
                    <div class="column-15">£1,026,205</div>
                    <div class="column-15">£53,362,673</div>
                    <div class="column-25 txt-overflow">Paris Saint Germain (PSG)</div>
                    <div class="column-20 txt-overflow txt-center">French Ligue 1</div>
                    <div class="column-10 txt-center">35</div>
                    <div class="column-10 txt-center">-</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-layout">
              <div class="right-common-content">
                <div class="common-footballer-right-sidebar-block">
                  <h4 class="block-right-title">Strengths</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Consistency</span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Ball control </span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Playmaking</span>
                    </li>
                  </ul>
                </div>
                <div class="common-footballer-right-sidebar-block mt-16">
                  <h4 class="block-right-title">Weaknesses</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Error proneness</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Salary TABS ============= -->


        <!-- ===========START Champions TABS ============= -->
        <div id="tabs-3" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content">
                <div class="club-tab-header">
                  <h3 class="main-common-title mb-0">Champions</h3>
                </div>

                <div class="common-list-champion-wrapper">
                  <h5 class="champion-header-title">
                    English Champion <span class="txt-hightlight">x8</span>
                  </h5>
                  <div class="list-champion-cup">
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>

                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>

                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>


                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>


                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>

                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>

                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>

                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label txt-uppercase">PSG</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="common-list-champion-wrapper">
                  <h5 class="champion-header-title">
                    English League Cup <span class="txt-hightlight">x8</span>
                  </h5>
                  <div class="list-champion-cup">
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/league-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label">Barcelona</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/league-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label">Barcelona</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="common-list-champion-wrapper">
                  <h5 class="champion-header-title">
                    English Supercup <span class="txt-hightlight">x8</span>
                  </h5>
                  <div class="list-champion-cup">
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/super-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label">Barcelona</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/super-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label">Barcelona</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="common-list-champion-wrapper">
                  <h5 class="champion-header-title">
                    FA Cup<span class="txt-hightlight">x8</span>
                  </h5>
                  <div class="list-champion-cup">
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/fa-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>

                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/fa-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label">Barcelona</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/fa-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label">Barcelona</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/fa-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                        <span class="label">Barcelona</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-layout">
              <div class="right-common-content">
                <div class="common-footballer-right-sidebar-block">
                  <h4 class="block-right-title">Strengths</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Consistency</span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Ball control </span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Playmaking</span>
                    </li>
                  </ul>
                </div>
                <div class="common-footballer-right-sidebar-block mt-16">
                  <h4 class="block-right-title">Weaknesses</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Error proneness</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Champions TABS ============= -->

        <!-- ===========START Season statistics TABS ============= -->
        <div id="tabs-4" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content">
                <h3 class="main-common-title">Matches</h3>
                <div class="common-season-statistics-content-wrapper">
                  <div class="column">
                    <div class="list-season-statistics-table">
                      <div class="season-statistics-table-item">
                        <h5 class="title">Summary</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Total played</span>
                            <span class="value">1</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Started</span>
                            <span class="value">1</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Minutes per game</span>
                            <span class="value">90.0</span>
                          </div>
                        </div>
                      </div>

                      <div class="season-statistics-table-item">
                        <h5 class="title">Attacking</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Goals</span>
                            <span class="value">1</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Scoring Frequency</span>
                            <span class="value">90.0</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals per game</span>
                            <span class="value">1</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Shots per game</span>
                            <span class="value">4.0</span>
                          </div>
                        </div>
                      </div>

                      <div class="season-statistics-table-item">
                        <h5 class="title">Defending</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Interceptions per game</span>
                            <span class="value">0</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Tackles per game</span>
                            <span class="value">0</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Tackles per game</span>
                            <span class="value">286 (94.0%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Clearances per game</span>
                            <span class="value">0</span>
                          </div>
                        </div>
                      </div>

                      <div class="season-statistics-table-item">
                        <h5 class="title">Cards</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Goals per game</span>
                            <span class="value">0</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goal conversion</span>
                            <span class="value">0</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Penalty goals</span>
                            <span class="value">0</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <div class="list-season-statistics-table">
                      <div class="season-statistics-table-item">
                        <h5 class="title">Passes</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Assists</span>
                            <span class="value">2.9</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Passes</span>
                            <span class="value">16%</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Key passes</span>
                            <span class="value">3/3</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Accurate Per game</span>
                            <span class="value">1/6</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. long balls</span>
                            <span class="value">34/167</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. crosses</span>
                            <span class="value">5/80</span>
                          </div>
                        </div>
                      </div>
                      <div class="season-statistics-table-item">
                        <h5 class="title">Other(per game)</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Succ. dribbles</span>
                            <span class="value">2(67%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Total duels won</span>
                            <span class="value">4(40%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Fouls</span>
                            <span class="value">2.0</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Was fouled</span>
                            <span class="value">1.0</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Offsides</span>
                            <span class="value">1</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-layout">
              <div class="right-common-content">
                <div class="common-footballer-right-sidebar-block">
                  <h4 class="block-right-title">Strengths</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Consistency</span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Ball control </span>
                    </li>
                    <li>
                      <span class="dot"></span>
                      <span>Playmaking</span>
                    </li>
                  </ul>
                </div>
                <div class="common-footballer-right-sidebar-block mt-16">
                  <h4 class="block-right-title">Weaknesses</h4>
                  <ul class="list-property-footballer">
                    <li>
                      <span class="dot"></span>
                      <span>Error proneness</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END statistics TABS ============= -->
      </div>
    </div>
    <?php include "templates/footer.php"; ?>
</body>
<script>
  $("#footballer-tabs").tabs({
    active: 1
  })

  $("#overview-top-player-tabs").tabs({
    active: 0
  })

  $("#schedule-top-player-tabs").tabs({
    active: 0
  })

  $("#squad-top-player-tabs").tabs({
    active: 0
  })

  $("#club-stats-player-tabs").tabs({
    active: 0
  })

  $("#champions-top-player-tabs").tabs({
    active: 0
  })

  $("#season-statistics-top-player-tabs").tabs({
    active: 0
  })

  $("#transfer-top-player-tabs").tabs({
    active: 0
  })
</script>

</html>