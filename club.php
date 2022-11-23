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
      <div id="club-tabs">
        <ul class="sub-nav">
          <li><a href="#tabs-1">Overview</a></li>
          <li><a href="#tabs-2">Salary</a></li>
          <li><a href="#tabs-3">Schedule</a></li>
          <li><a href="#tabs-4">Squad</a></li>
          <li><a href="#tabs-5">Transfer</a></li>
          <li><a href="#tabs-6">Champions</a></li>
          <li><a href="#tabs-7">Season statistics</a></li>
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
                <h4 class="block-right-title">English Premier League Standings 22-23</h4>
                <div class="common-league-stading-table">
                  <div class="table-row table-heading">
                    <div class="column-10 txt-center">#</div>
                    <div class="column-70 txt-left">Team</div>
                    <div class="column-10 txt-center">P</div>
                    <div class="column-10 txt-center">Pts</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">1</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row active">
                    <div class="column-10 txt-center">2</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>


                  <div class="table-row">
                    <div class="column-10 txt-center">3</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">4</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Tottenham Tottenham Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>
                  <div class="table-footer">
                    <span class="label">Standings</span>
                    <span class="icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_448_11547)">
                          <path d="M7.5 5L12.5 10L7.5 15" stroke="#3AC5C9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_448_11547">
                            <rect width="20" height="20" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>

              <div class="right-common-content league-top-player-wrapper mt-16">
                <h4 class="block-right-title">Manchester City Top players 22-23</h4>
                <div id="overview-top-player-tabs">
                  <ul class="pill-nav">
                    <li><a href="#pill-tabs-1">Goals</a></li>
                    <li><a href="#pill-tabs-2">Assists</a></li>
                  </ul>
                  <div id="pill-tabs-1" class="pill-sub-tabs">
                    <div class="top-player-table">
                      <div class="table-heading">
                        <div class="column-10 txt-center">#</div>
                        <div class="column-50 txt-center">Players</div>
                        <div class="column-20 txt-center">Matches</div>
                        <div class="column-20 txt-center">Goals(PK)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">1</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Erling Braut Håland</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">2</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Marcus Edward</span>
                              <span class="position">Foward</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>


                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Neymar</span>
                              <span class="position">Midfielder</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>
                    </div>
                  </div>
                  <div id="pill-tabs-2" class="pill-sub-tabs">
                    tab2
                  </div>
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
                <h3 class="main-common-title">Manchester City Player Salary 22-23</h3>
                <div class="common-player-salary-table-wrapper">
                  <div class="table-heading main-heading">
                    <div class="column-35 txt-left">Players</div>
                    <div class="column-5">Age</div>
                    <div class="column-15">Annual Salary</div>
                    <div class="column-15">Weekly Salary</div>
                    <div class="column-15">Market value</div>
                    <div class="column-15">Contract untill</div>
                  </div>
                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Strikers</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                  </div>
                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Midfielders</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                  </div>
                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Defender</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                  </div>

                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Goalkeeper</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">£19,500,000</div>
                      <div class="column-15">£375,000</div>
                      <div class="column-15 txt-highlight">€170,000,000</div>
                      <div class="column-15">2027-06-29</div>
                    </div>
                  </div>
                </div>

                <div class="player-salary-description">
                  <h3 class="main-common-title">Manchester City Player Salary 22-23</h3>
                  <ul>
                    <li>
                      <p class="title">
                        1. Manchester City have a total of 29 players in their home squad. The highest earning player in the squad is Kevin De Bruyne earning £400,000 per week.
                      </p>
                      <p class="value">Manchester City play in the English Premier League, Manchester City player wages bill is: £151,772,000 per year, £2,918,693 per week</p>
                    </li>

                    <li>
                      <p class="title">2. Who is the highest paid player in 2022 Manchester City?</p>
                      <p class="value">Kevin De Bruyne has the highest salary at Manchester City, earning £400,000 per week</p>
                    </li>
                    <li>
                      <p class="title">
                        3. What is Manchester City yearly wage bill in 2022?
                      </p>
                      <p class="value">Manchester City total salary bill is £151,772,000 per year</p>
                    </li>

                    <li>
                      <p class="title">
                        4. How much is Erling Braut Håland salary?
                      </p>
                      <p class="value">Erling Braut Håland signed an annual average salary of €170,000,000 contract with the Manchester City. Erling Braut Håland earned £2,918,693 per week in Manchester City.</p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
            <div class="right-layout">
              <div class="right-common-content">
                <h4 class="block-right-title">Manchester City Player Salary 22-23 All</h4>
                <div class="common-player-salary-all-table">
                  <div class="table-row">
                    <span class="label">Goalkeeper</span>
                    <span class="value">€7,072,000</span>
                  </div>
                  <div class="table-row">
                    <span class="label">Strikers</span>
                    <span class="value">€25,740,000</span>
                  </div>
                  <div class="table-row">
                    <span class="label">Midfielders</span>
                    <span class="value">€72,040,000</span>
                  </div>
                  <div class="table-row">
                    <span class="label">Defender</span>
                    <span class="value">€72,040,000</span>
                  </div>
                  <div class="table-row table-footer">
                    <span class="label">Total</span>
                    <span class="value">€151,772,000</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Salary TABS ============= -->


        <!-- ===========START Schedule TABS ============= -->
        <div id="tabs-3" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content">
                <div class="past-match-content-wrapper">
                  <div class="column-50 match-left">
                    <div class="header-block">
                      <h3 class="main-common-title mb-8">Schedule 22-23</h3>
                    </div>

                    <div class="list-past-match-league">
                      <div class="past-match-league-item">
                        <div class="league-info-wrapper">
                          <img src="./images/league-6.png" class="league-image" />
                          <div class="league-info">
                            <span class="group-name">Europe</span>
                            <span class="league-name">UEFA Champions League, Group E</span>
                          </div>
                        </div>

                        <div class="list-timeline">
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">-</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                              </div>
                            </div>
                            <span class="icon-star">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="past-match-league-item">
                        <div class="league-info-wrapper">
                          <img src="./images/league-1.png" class="league-image" />
                          <div class="league-info">
                            <span class="group-name">England</span>
                            <span class="league-name">Premier League</span>
                          </div>
                        </div>

                        <div class="list-timeline">
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">-</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                              </div>
                            </div>
                            <span class="icon-star">

                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>

                            </span>
                          </div>
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">-</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                              </div>
                            </div>
                            <span class="icon-star">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7141 3.44083L15.0301 8.09983C15.1461 8.33483 15.3701 8.49883 15.6301 8.53683L20.8151 9.28583C21.0251 9.31383 21.2141 9.42383 21.3431 9.59183C21.5851 9.90683 21.5481 10.3528 21.2581 10.6238L17.5001 14.2578C17.3091 14.4378 17.2241 14.7018 17.2741 14.9588L18.1741 20.0868C18.2371 20.5118 17.9471 20.9098 17.5221 20.9788C17.3461 21.0058 17.1661 20.9778 17.0061 20.8988L12.3881 18.4778C12.1561 18.3518 11.8781 18.3518 11.6461 18.4778L6.99413 20.9118C6.60513 21.1098 6.12913 20.9628 5.91713 20.5818C5.83613 20.4278 5.80813 20.2528 5.83613 20.0818L6.73613 14.9538C6.78113 14.6978 6.69613 14.4348 6.51013 14.2538L2.73213 10.6208C2.42413 10.3148 2.42213 9.81683 2.72913 9.50883C2.73013 9.50783 2.73113 9.50583 2.73213 9.50483C2.85913 9.38983 3.01513 9.31283 3.18413 9.28283L8.37013 8.53383C8.62913 8.49283 8.85213 8.33083 8.97013 8.09583L11.2841 3.44083C11.3771 3.25183 11.5421 3.10683 11.7421 3.04083C11.9431 2.97383 12.1631 2.98983 12.3521 3.08483C12.5071 3.16183 12.6341 3.28683 12.7141 3.44083Z" stroke="#1A202C" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="middle">
                    <div class="dash"></div>
                  </div>
                  <div class="column-50 match-right">
                    <div class="header-block">
                      <h3 class="main-common-title mb-8">Results</h3>
                    </div>

                    <div class="list-past-match-league">
                      <div class="past-match-league-item">
                        <div class="league-info-wrapper">
                          <img src="./images/league-6.png" class="league-image" />
                          <div class="league-info">
                            <span class="group-name">Europe</span>
                            <span class="league-name">UEFA Champions League, Group E</span>
                          </div>
                        </div>

                        <div class="list-timeline">
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">FT</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                                <span class="score txt-primary">1</span>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                                <span class="score txt-secondary">2</span>
                              </div>
                            </div>
                            <span class="icon-star">
                              <span class="league-sign league-sign-danger">L</span>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="past-match-league-item">
                        <div class="league-info-wrapper">
                          <img src="./images/league-1.png" class="league-image" />
                          <div class="league-info">
                            <span class="group-name">England</span>
                            <span class="league-name">Premier League</span>
                          </div>
                        </div>

                        <div class="list-timeline">
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">FT</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                                <span class="score txt-primary">1</span>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                                <span class="score txt-secondary">2</span>
                              </div>
                            </div>
                            <span class="icon-star">
                              <span class="league-sign league-sign-default">D</span>
                            </span>
                          </div>
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">FT</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                                <span class="score txt-primary">1</span>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                                <span class="score txt-secondary">2</span>
                              </div>
                            </div>
                            <span class="icon-star">
                              <span class="league-sign league-sign-success">W</span>
                            </span>
                          </div>
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">FT</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                                <span class="score txt-primary">1</span>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                                <span class="score txt-secondary">2</span>
                              </div>
                            </div>
                            <span class="icon-star">
                              <span class="league-sign league-sign-success">W</span>
                            </span>
                          </div>
                          <div class="block-club-common">
                            <div class="time-wrapper">
                              <span class="time txt-secondary">03/10/22</span>
                              <span class="type hour txt-secondary">FT</span>
                            </div>
                            <div class="list-club-wrapper">
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-1.png" alt="">
                                  <span class="club-name text-overflow-club txt-primary">Manchester City </span>
                                </div>
                                <span class="score txt-primary">1</span>
                              </div>
                              <div class="club-item">
                                <div class="club-info-wrapper">
                                  <img src="./images/club-2.png" alt="">
                                  <span class="club-name text-overflow-club txt-secondary">Chelsea</span>
                                </div>
                                <span class="score txt-secondary">2</span>
                              </div>
                            </div>
                            <span class="icon-star">
                              <span class="league-sign league-sign-success">W</span>
                            </span>
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
                <h4 class="block-right-title">English Premier League Standings 22-23</h4>
                <div class="common-league-stading-table">
                  <div class="table-row table-heading">
                    <div class="column-10 txt-center">#</div>
                    <div class="column-70 txt-left">Team</div>
                    <div class="column-10 txt-center">P</div>
                    <div class="column-10 txt-center">Pts</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">1</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row active">
                    <div class="column-10 txt-center">2</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>


                  <div class="table-row">
                    <div class="column-10 txt-center">3</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">4</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Tottenham Tottenham Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>
                  <div class="table-footer">
                    <span class="label">Standings</span>
                    <span class="icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_448_11547)">
                          <path d="M7.5 5L12.5 10L7.5 15" stroke="#3AC5C9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_448_11547">
                            <rect width="20" height="20" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>

              <div class="right-common-content league-top-player-wrapper mt-16">
                <h4 class="block-right-title">Manchester City Top players 22-23</h4>
                <div id="schedule-top-player-tabs">
                  <ul class="pill-nav">
                    <li><a href="#pill-tabs-1">Goals</a></li>
                    <li><a href="#pill-tabs-2">Assists</a></li>
                  </ul>
                  <div id="pill-tabs-1" class="pill-sub-tabs">
                    <div class="top-player-table">
                      <div class="table-heading">
                        <div class="column-10 txt-center">#</div>
                        <div class="column-50 txt-center">Players</div>
                        <div class="column-20 txt-center">Matches</div>
                        <div class="column-20 txt-center">Goals(PK)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">1</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Erling Braut Håland</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">2</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Marcus Edward</span>
                              <span class="position">Foward</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>


                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Neymar</span>
                              <span class="position">Midfielder</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>
                    </div>
                  </div>
                  <div id="pill-tabs-2" class="pill-sub-tabs">
                    tab2
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Schedule TABS ============= -->


        <!-- ===========START Squad TABS ============= -->
        <div id="tabs-4" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content main-common-squad">
                <h3 class="main-common-title">Squad</h3>
                <h4 class="main-common-sub-title">Coach</h4>
                <div class="common-player-wrapper mb-24">
                  <img src="./images/account-image.png" class="player-image" />
                  <div class="player-info">
                    <span class="player-name mw-100">Erling Braut Håland</span>
                    <span class="player-description">Spain</span>
                  </div>
                </div>

                <div class="common-player-salary-table-wrapper">
                  <div class="table-heading main-heading">
                    <div class="column-35 txt-left">Players</div>
                    <div class="column-5">Age</div>
                    <div class="column-15">Height</div>
                    <div class="column-15">Weight</div>
                    <div class="column-15">Market value</div>
                    <div class="column-15">Contract untill</div>
                  </div>
                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Strikers</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0Ms</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0M</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">-</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">85kg</div>
                      <div class="column-15 txt-highlight">-</div>
                      <div class="column-15">-</div>
                    </div>
                  </div>
                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Midfielders</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0Ms</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0M</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">-</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">85kg</div>
                      <div class="column-15 txt-highlight">-</div>
                      <div class="column-15">-</div>
                    </div>
                  </div>
                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Defender</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0Ms</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0M</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">-</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">85kg</div>
                      <div class="column-15 txt-highlight">-</div>
                      <div class="column-15">-</div>
                    </div>
                  </div>

                  <div class="common-player-table">
                    <div class="table-heading sub-heading">Goalkeeper</div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0Ms</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">21</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">87kg</div>
                      <div class="column-15 txt-highlight">€ 170.0M</div>
                      <div class="column-15">Jun 2027</div>
                    </div>
                    <div class="table-row">
                      <div class="column-35 txt-left">
                        <div class="common-player-wrapper">
                          <img src="./images/account-image.png" class="player-image" />
                          <div class="player-info">
                            <span class="player-name">Erling Braut Håland</span>
                            <span class="player-description">#9 - Norway</span>
                          </div>
                        </div>
                      </div>
                      <div class="column-5">-</div>
                      <div class="column-15">195cm</div>
                      <div class="column-15">85kg</div>
                      <div class="column-15 txt-highlight">-</div>
                      <div class="column-15">-</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="main-common-content mt-16 main-common-squad">
                <h3 class="main-common-title">Stats</h3>
                <!-- FOR PC ONLY -->
                <div id="club-stats-player-tabs" class="vertical-tab-content content-tab-only-for-pc">
                  <ul class="vertical-nav">
                    <li><a href="#vertical-tabs-1">Goals</a></li>
                    <li><a href="#vertical-tabs-2">Assists</a></li>
                    <li><a href="#vertical-tabs-3">Minutes played</a></li>
                    <li><a href="#vertical-tabs-4">Red cards</a></li>
                    <li><a href="#vertical-tabs-5">Yellow cards</a></li>
                    <li><a href="#vertical-tabs-6">Shots</a></li>
                    <li><a href="#vertical-tabs-7">Dribble</a></li>
                    <li><a href="#vertical-tabs-8">Dribble succ</a></li>
                    <li><a href="#vertical-tabs-9">Clearances</a></li>
                    <li><a href="#vertical-tabs-10">Interceptions</a></li>
                    <li><a href="#vertical-tabs-11">Passes</a></li>
                    <li><a href="#vertical-tabs-12">Key passes</a></li>
                    <li><a href="#vertical-tabs-13">Crosses</a></li>
                    <li><a href="#vertical-tabs-14">Crosses accuracy</a></li>
                    <li><a href="#vertical-tabs-15">Long balls</a></li>
                    <li><a href="#vertical-tabs-16">Long balls accuracy</a></li>
                    <li><a href="#vertical-tabs-17">Duels</a></li>
                    <li><a href="#vertical-tabs-18">Duels won</a></li>
                    <li><a href="#vertical-tabs-19">Fouls</a></li>
                    <li><a href="#vertical-tabs-20">Dispossessed</a></li>
                    <li><a href="#vertical-tabs-21">Was fouled</a></li>
                    <li><a href="#vertical-tabs-22">Saves</a></li>
                    <li><a href="#vertical-tabs-23">Punches</a></li>
                    <li><a href="#vertical-tabs-24">Runs out</a></li>
                    <li><a href="#vertical-tabs-25">Runs out succ</a></li>
                    <li><a href="#vertical-tabs-26">Good high claim</a></li>
                    <li><a href="#vertical-tabs-27">Passes accuracy</a></li>
                  </ul>
                  <div class="vertical-tab-content">
                    <div id="vertical-tabs-1">
                      <div class="common-stats-table">
                        <div class="table-row table-heading">
                          <div class="column-10 txt-center">#</div>
                          <div class="column-75 txt-left">Team</div>
                          <div class="column-15 txt-left">Goals</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">1</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">2</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">2</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">3</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>


                        <div class="table-row">
                          <div class="column-10 txt-center">4</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>


                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                        <div class="table-row">
                          <div class="column-10 txt-center">5</div>
                          <div class="column-75 txt-left">
                            <div class="player-wrapper">
                              <img src="./images/account-image.png" alt="" class="player-image">
                              <span class="player-name">Erling Braut Haland</span>
                            </div>
                          </div>
                          <div class="column-15 txt-left">18(3)</div>
                        </div>

                      </div>
                      <div class="common-pagination">
                        <button class="pagination-item btn-prev disabled">
                          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.67372 2.037C4.59176 2.12829 4.55078 2.22862 4.55078 2.338C4.55078 2.44737 4.59176 2.54304 4.67372 2.625L8.93934 7L4.67372 11.375C4.59176 11.457 4.55078 11.5526 4.55078 11.662C4.55078 11.7714 4.59176 11.867 4.67372 11.949C4.75568 12.031 4.85134 12.0719 4.96072 12.0719C5.07009 12.0719 5.16576 12.0355 5.24772 11.9626L9.77322 7.30056C9.85518 7.2186 9.89616 7.11827 9.89616 6.99956C9.89616 6.88085 9.85518 6.78052 9.77322 6.69856L5.24772 2.03656C5.16576 1.96364 5.07009 1.92719 4.96072 1.92719C4.85134 1.92719 4.75568 1.96364 4.67372 2.03656V2.037Z" fill="#1A202C" />
                          </svg>
                        </button>
                        <button class="pagination-item active">1</button>
                        <button class="pagination-item">2</button>
                        <button class="pagination-item">3</button>
                        <button class="pagination-item">4</button>
                        <button class="pagination-item">5</button>
                        <button class="pagination-item btn-next">
                          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.67372 2.037C4.59176 2.12829 4.55078 2.22862 4.55078 2.338C4.55078 2.44737 4.59176 2.54304 4.67372 2.625L8.93934 7L4.67372 11.375C4.59176 11.457 4.55078 11.5526 4.55078 11.662C4.55078 11.7714 4.59176 11.867 4.67372 11.949C4.75568 12.031 4.85134 12.0719 4.96072 12.0719C5.07009 12.0719 5.16576 12.0355 5.24772 11.9626L9.77322 7.30056C9.85518 7.2186 9.89616 7.11827 9.89616 6.99956C9.89616 6.88085 9.85518 6.78052 9.77322 6.69856L5.24772 2.03656C5.16576 1.96364 5.07009 1.92719 4.96072 1.92719C4.85134 1.92719 4.75568 1.96364 4.67372 2.03656V2.037Z" fill="#1A202C" />
                          </svg>
                        </button>
                      </div>
                    </div>
                    <div id="vertical-tabs-2">tab2</div>
                    <div id="vertical-tabs-3">tab3</div>
                    <div id="vertical-tabs-4">tab4</div>
                    <div id="vertical-tabs-5">tab5</div>
                    <div id="vertical-tabs-6">tab6</div>
                    <div id="vertical-tabs-7">tab7</div>
                    <div id="vertical-tabs-8">tab8</div>
                    <div id="vertical-tabs-9">tab9</div>
                    <div id="vertical-tabs-10">tab10</div>
                    <div id="vertical-tabs-11">tab11</div>
                    <div id="vertical-tabs-12">tab12</div>
                    <div id="vertical-tabs-13">tab13</div>
                    <div id="vertical-tabs-14">tab14</div>
                    <div id="vertical-tabs-15">tab15</div>
                    <div id="vertical-tabs-16">tab16</div>
                    <div id="vertical-tabs-17">tab17</div>
                    <div id="vertical-tabs-18">tab18</div>
                    <div id="vertical-tabs-19">tab19</div>
                    <div id="vertical-tabs-20">tab20</div>
                    <div id="vertical-tabs-21">tab21</div>
                    <div id="vertical-tabs-22">tab22</div>
                    <div id="vertical-tabs-23">tab23</div>
                    <div id="vertical-tabs-24">tab24</div>
                    <div id="vertical-tabs-25">tab25</div>
                    <div id="vertical-tabs-26">tab26</div>
                    <div id="vertical-tabs-27">tab27</div>
                  </div>
                </div>
                <!-- FOR PC ONLY -->
                <!-- FOR MOBILE ONLY -->
                <!-- DIRECTION TO ./stats-detail.php WHEN CLICK -->
                <div class="content-tab-only-for-mobile">
                  <ul class="statis-nav-for-mobile">
                    <li>
                      <a href="./stats-detail.php">Goals</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Assists</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Minutes played</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Red cards</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Yellow cards</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Shots</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Dribble</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Dribble succ</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Clearances</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Interceptions</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Passes</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Yellow cards</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Key passes</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Crosses</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Crosses accuracy</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Long balls</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Long balls accuracy</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Duels</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Duels won</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Fouls</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Dispossessed</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                    <li>
                      <a href="./stats-detail.php">Was fouled</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>

                    <li>
                      <a href="./stats-detail.php">Punches</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>

                    <li>
                      <a href="./stats-detail.php">Runs out</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>


                    <li>
                      <a href="./stats-detail.php">Runs out succ</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>


                    <li>
                      <a href="./stats-detail.php">Good high claim</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>

                    <li>
                      <a href="./stats-detail.php">Passes accuracy</a>
                      <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_483_18764)">
                            <path d="M7.5 5L12.5 10L7.5 15" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                          <defs>
                            <clipPath id="clip0_483_18764">
                              <rect width="20" height="20" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                    </li>
                  </ul>
                </div>
                <!-- FOR MOBILE ONLY -->

              </div>
            </div>
            <div class="right-layout">
              <div class="right-common-content">
                <h4 class="block-right-title">English Premier League Standings 22-23</h4>
                <div class="common-league-stading-table">
                  <div class="table-row table-heading">
                    <div class="column-10 txt-center">#</div>
                    <div class="column-70 txt-left">Team</div>
                    <div class="column-10 txt-center">P</div>
                    <div class="column-10 txt-center">Pts</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">1</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row active">
                    <div class="column-10 txt-center">2</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>


                  <div class="table-row">
                    <div class="column-10 txt-center">3</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">4</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Tottenham Tottenham Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>
                  <div class="table-footer">
                    <span class="label">Standings</span>
                    <span class="icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_448_11547)">
                          <path d="M7.5 5L12.5 10L7.5 15" stroke="#3AC5C9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_448_11547">
                            <rect width="20" height="20" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>

              <div class="right-common-content league-top-player-wrapper mt-16">
                <h4 class="block-right-title">Manchester City Top players 22-23</h4>
                <div id="squad-top-player-tabs">
                  <ul class="pill-nav">
                    <li><a href="#pill-tabs-1">Goals</a></li>
                    <li><a href="#pill-tabs-2">Assists</a></li>
                  </ul>
                  <div id="pill-tabs-1" class="pill-sub-tabs">
                    <div class="top-player-table">
                      <div class="table-heading">
                        <div class="column-10 txt-center">#</div>
                        <div class="column-50 txt-center">Players</div>
                        <div class="column-20 txt-center">Matches</div>
                        <div class="column-20 txt-center">Goals(PK)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">1</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Erling Braut Håland</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">2</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Marcus Edward</span>
                              <span class="position">Foward</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>


                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Neymar</span>
                              <span class="position">Midfielder</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>
                    </div>
                  </div>
                  <div id="pill-tabs-2" class="pill-sub-tabs">
                    tab2
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Squad TABS ============= -->




        <!-- ===========START Tranfer TABS ============= -->
        <div id="tabs-5" class="common-tab-content">
          tab5
        </div>
        <!-- ===========END Tranfer TABS ============= -->

        <!-- ===========START Champions TABS ============= -->
        <div id="tabs-6" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content">
                <div class="champion-tab-header">
                  <h3 class="main-common-title mb-0">Champions</h3>
                  <div class="box-select-time-wrapper">
                    <span class="label">Year</span>
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

                <div class="common-list-champion-wrapper">
                  <h5 class="champion-header-title">
                    English Champion <span class="txt-hightlight">x8</span>
                  </h5>
                  <div class="list-champion-cup">
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/champion-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
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
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/league-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
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
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/super-cup.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
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
                      </div>
                    </div>
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
                      </div>
                    </div>
                  </div>
                </div>

                <div class="common-list-champion-wrapper">
                  <h5 class="champion-header-title">
                    Promoted to 1st league<span class="txt-hightlight">x11</span>
                  </h5>
                  <div class="list-champion-cup">
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/icon-promoted.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/icon-promoted.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                    <div class="champion-cup-item">
                      <div class="cup-item">
                        <img src="./images/icon-promoted.png" alt="" class="cup-image">
                        <span class="time">2021/2022</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="right-layout">
              <div class="right-common-content">
                <h4 class="block-right-title">English Premier League Standings 22-23</h4>
                <div class="common-league-stading-table">
                  <div class="table-row table-heading">
                    <div class="column-10 txt-center">#</div>
                    <div class="column-70 txt-left">Team</div>
                    <div class="column-10 txt-center">P</div>
                    <div class="column-10 txt-center">Pts</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">1</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row active">
                    <div class="column-10 txt-center">2</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>


                  <div class="table-row">
                    <div class="column-10 txt-center">3</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">4</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Tottenham Tottenham Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>
                  <div class="table-footer">
                    <span class="label">Standings</span>
                    <span class="icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_448_11547)">
                          <path d="M7.5 5L12.5 10L7.5 15" stroke="#3AC5C9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_448_11547">
                            <rect width="20" height="20" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>

              <div class="right-common-content league-top-player-wrapper mt-16">
                <h4 class="block-right-title">Manchester City Top players 22-23</h4>
                <div id="champions-top-player-tabs">
                  <ul class="pill-nav">
                    <li><a href="#pill-tabs-1">Goals</a></li>
                    <li><a href="#pill-tabs-2">Assists</a></li>
                  </ul>
                  <div id="pill-tabs-1" class="pill-sub-tabs">
                    <div class="top-player-table">
                      <div class="table-heading">
                        <div class="column-10 txt-center">#</div>
                        <div class="column-50 txt-center">Players</div>
                        <div class="column-20 txt-center">Matches</div>
                        <div class="column-20 txt-center">Goals(PK)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">1</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Erling Braut Håland</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">2</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Marcus Edward</span>
                              <span class="position">Foward</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>


                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Neymar</span>
                              <span class="position">Midfielder</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>
                    </div>
                  </div>
                  <div id="pill-tabs-2" class="pill-sub-tabs">
                    tab2
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Champions TABS ============= -->

        <!-- ===========START Season statistics TABS ============= -->
        <div id="tabs-7" class="common-tab-content">
          <div class="main-layout">
            <div class="middle-layout">
              <div class="main-common-content">
                <h3 class="main-common-title">Manchester City Season statistics</h3>
                <div class="common-season-statistics-content-wrapper">
                  <div class="column">
                    <div class="list-season-statistics-table">
                      <div class="season-statistics-table-item">
                        <h5 class="title">Summary</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Matches</span>
                            <span class="value">40</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals scored</span>
                            <span class="value">34</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals conceded</span>
                            <span class="value">33</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Assists</span>
                            <span class="value">12</span>
                          </div>
                        </div>
                      </div>

                      <div class="season-statistics-table-item">
                        <h5 class="title">Passes</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Ball possession</span>
                            <span class="value">66.5%</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Accurate per game</span>
                            <span class="value">610 (89.4%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. own half</span>
                            <span class="value">286 (94.0%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. opposition half</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. long balls</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. crosses</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                        </div>
                      </div>

                      <div class="season-statistics-table-item">
                        <h5 class="title">Defending</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Clean sheets</span>
                            <span class="value">13</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals conceded per game</span>
                            <span class="value">610 (89.4%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Tackles per game</span>
                            <span class="value">286 (94.0%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Interceptions per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Clearances per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Saves per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Errors leading to shot</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Errors leading to goal</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Penalties committed</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Penalty goals conceded</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Clearance off line</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                        </div>
                      </div>

                      <div class="season-statistics-table-item">
                        <h5 class="title">other</h5>
                        <div class="table-content">
                          <div class="table-row">
                            <span class="label">Clean sheets</span>
                            <span class="value">13</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals conceded per game</span>
                            <span class="value">610 (89.4%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Tackles per game</span>
                            <span class="value">286 (94.0%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Interceptions per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Clearances per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Saves per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Errors leading to shot</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Errors leading to goal</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Penalties committed</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Penalty goals conceded</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Clearance off line</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column">
                  <div class="list-season-statistics-table">
                      <div class="season-statistics-table-item">
                        <h5 class="title">Attacking</h5>
                        <div class="table-content">
                        <div class="table-row">
                            <span class="label">Ball possession</span>
                            <span class="value">66.5%</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Accurate per game</span>
                            <span class="value">610 (89.4%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. own half</span>
                            <span class="value">286 (94.0%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. opposition half</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. long balls</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Acc. crosses</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Matches</span>
                            <span class="value">40</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals scored</span>
                            <span class="value">34</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals conceded</span>
                            <span class="value">33</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Assists</span>
                            <span class="value">12</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Clean sheets</span>
                            <span class="value">13</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Goals conceded per game</span>
                            <span class="value">610 (89.4%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Tackles per game</span>
                            <span class="value">286 (94.0%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Interceptions per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Clearances per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Saves per game</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Errors leading to shot</span>
                            <span class="value">331 (82.7%)</span>
                          </div>
                          <div class="table-row">
                            <span class="label">Errors leading to goal</span>
                            <span class="value">331 (82.7%)</span>
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
                <h4 class="block-right-title">English Premier League Standings 22-23</h4>
                <div class="common-league-stading-table">
                  <div class="table-row table-heading">
                    <div class="column-10 txt-center">#</div>
                    <div class="column-70 txt-left">Team</div>
                    <div class="column-10 txt-center">P</div>
                    <div class="column-10 txt-center">Pts</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">1</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row active">
                    <div class="column-10 txt-center">2</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>


                  <div class="table-row">
                    <div class="column-10 txt-center">3</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>

                  <div class="table-row">
                    <div class="column-10 txt-center">4</div>
                    <div class="column-70">
                      <div class="club-wrapper">
                        <img src="./images/mc-club.png" alt="" class="club-image">
                        <span class="club-name">Arsenal Tottenham Tottenham Tottenham</span>
                      </div>
                    </div>
                    <div class="column-10 txt-center">14</div>
                    <div class="column-10 txt-center">37</div>
                  </div>
                  <div class="table-footer">
                    <span class="label">Standings</span>
                    <span class="icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_448_11547)">
                          <path d="M7.5 5L12.5 10L7.5 15" stroke="#3AC5C9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_448_11547">
                            <rect width="20" height="20" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>

              <div class="right-common-content league-top-player-wrapper mt-16">
                <h4 class="block-right-title">Manchester City Top players 22-23</h4>
                <div id="season-statistics-top-player-tabs">
                  <ul class="pill-nav">
                    <li><a href="#pill-tabs-1">Goals</a></li>
                    <li><a href="#pill-tabs-2">Assists</a></li>
                  </ul>
                  <div id="pill-tabs-1" class="pill-sub-tabs">
                    <div class="top-player-table">
                      <div class="table-heading">
                        <div class="column-10 txt-center">#</div>
                        <div class="column-50 txt-center">Players</div>
                        <div class="column-20 txt-center">Matches</div>
                        <div class="column-20 txt-center">Goals(PK)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">1</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Erling Braut Håland</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">2</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Marcus Edward</span>
                              <span class="position">Foward</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>


                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Neymar</span>
                              <span class="position">Midfielder</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>
                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>
                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>

                      <div class="table-row">
                        <div class="column-10 txt-center">3</div>
                        <div class="column-50">
                          <div class="player-wrapper">
                            <div class="avatar-wrapper">
                              <img src="./images/account-image.png" alt="" class="user-avatar">
                            </div>

                            <div class="player-info">
                              <span class="player-name">Pedro Flips</span>
                              <span class="position">Defender</span>
                            </div>

                          </div>
                        </div>
                        <div class="column-20 txt-center">13</div>
                        <div class="column-20 txt-center">18(3)</div>
                      </div>
                    </div>
                  </div>
                  <div id="pill-tabs-2" class="pill-sub-tabs">
                    tab2
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===========END Season statistics TABS ============= -->


      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
</body>
<script>
  $("#club-tabs").tabs({
    active: 6
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
</script>

</html>