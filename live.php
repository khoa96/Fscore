<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="live-wrapper">
    <div class="header">
      <div class="play-match">
        <div class="player-wrapper">
          <div class="box-player">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/VkGzajNpNwo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="box-chat">
            <div class="chat-header">
              <h4 class="box-title">Chat</h4>
              <div class="list-dot">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
            <div class="chat-content">
              <div class="list-message">
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
                <div class="message-item">
                  <a href="#" class="avatar">
                    <img src="./images/avatar-user.png" alt="">
                  </a>
                  <p class="message-detail">We missed you so much, take care of yourself, do well in the gym, and come back as soon as possible,</p>
                </div>
              </div>
            </div>
            <div class="chat-form">
              <div class="form-wrapper">
                <form action="#" method="#">
                  <input type="text" placeholder="Your comment" name="" value="">
                </form>
                <button class="btn-send">
                  <img src="./images/send.png" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="control">
          <div class="list-server">
            <button class="btn-server active">Server 1</button>
            <button class="btn-server">Server 2</button>
            <button class="btn-server">Server 3</button>
          </div>
          <ul class="list-contact">
            <li>
              <a href="#">
                <img src="./images/icon-facebook.png" alt="">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/icon-twitter.png" alt="">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="./images/icon-share.png" alt="">
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container bet-wrapper">
        <div class="list-club">
          <div class="club-item">
            <span class="club-name">Manchester United</span>
            <img src="./images/mc-club.png" alt="">
          </div>
          <div class="club-item">
            <img src="./images/lei-club.png" alt="">
            <span class="club-name">Liverpool</span>
          </div>
        </div>

        <div class="table-bet">
          <div class="d-flex align-items-start table-bet-mb">
            <div class="nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active customer-nav-link" id="v-pills-2-way-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2-way" type="button" role="tab" aria-controls="v-pills-2-way" aria-selected="true">2-way</button>
              <button class="nav-link customer-nav-link" id="v-pills-odd-even-tab" data-bs-toggle="pill" data-bs-target="#v-pills-odd-even" type="button" role="tab" aria-controls="v-pills-odd-even" aria-selected="false">Odd/Even</button>
              <button class="nav-link customer-nav-link" id="v-pills-last-team-tab" data-bs-toggle="pill" data-bs-target="#v-pills-last-team" type="button" role="tab" aria-controls="v-pills-last-team" aria-selected="false">Last team to score</button>

            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <!-- content tab 2-way -->
              <div class="tab-pane fade show active" id="v-pills-2-way" role="tabpanel" aria-labelledby="v-pills-2-way-tab">
                <div class="tab-bet-content">
                  <div class="bet-item">
                    <span class="step-title">1. Choose The Winning Team</span>
                    <div class="list-bet-club">
                      <div class="bet-club-item">
                        <div class="choose-item">
                          <label class="checkbox-wrapper">
                            <input type="checkbox" name="choose-2-way">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <img src="./images/mc-club.png" alt="">
                        <span class="club-name">Manchester United</span>
                        <span class="status">15% picked</span>
                      </div>
                      <div class="bet-club-item active">
                        <div class="choose-item">
                          <label class="checkbox-wrapper">
                            <input type="checkbox" checked="checked" name="choose-2-way">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <img src="./images/lei-club.png" alt="">
                        <span class="club-name">Liverpool</span>
                        <span class="status">51% picked</span>
                      </div>
                    </div>
                  </div>
                  <div class="bet-item">
                    <span class="step-title">2. You bet</span>
                    <div class="choose-price">
                      <div class="list-price">
                        <span class="price-item">$1</span>
                        <span class="price-item">$2</span>
                        <span class="price-item">$5</span>
                        <span class="price-item">$10</span>
                      </div>

                      <p class="win-message">
                        If win, you get: <span class="win-price">$50</span>
                      </p>
                    </div>
                    <div class="input-form">
                      <img src="./images/icon-dollar.png" class="icon-dollar" alt="" />
                      <form action="#" method="#">
                        <input type="text" name="" value="" placeholder="Enter">
                      </form>
                    </div>

                    <div class="box-submit">
                      <p class="intro-message">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <path d="M9 15.75C12.7279 15.75 15.75 12.7279 15.75 9C15.75 5.27208 12.7279 2.25 9 2.25C5.27208 2.25 2.25 5.27208 2.25 9C2.25 12.7279 5.27208 15.75 9 15.75Z" stroke="#461A53" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M9 6H9.00667" stroke="#461A53" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M8.25 9H9V12H9.75" stroke="#461A53" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Rule of Double Chance</span>
                      </p>
                      <button class="btn-confirm">Confirm</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- content tab 2-way -->

              <!-- content tab odd even -->
              <div class="tab-pane fade" id="v-pills-odd-even" role="tabpanel" aria-labelledby="v-pills-odd-even-tab">
                <div class="tab-bet-content">
                  <div class="bet-item">
                    <span class="step-title">1.Choose whether the total score is even or odd</span>
                    <div class="list-bet-club">
                      <div class="bet-club-item">
                        <div class="choose-item">
                          <label class="checkbox-wrapper">
                            <input type="checkbox" name="choose-odd-even">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <span class="choose-title">
                          <strong>Odd</strong>
                        </span>
                        <span class="odd-even-value">1.05</span>
                      </div>
                      <div class="bet-club-item active">
                        <div class="choose-item">
                          <label class="checkbox-wrapper">
                            <input type="checkbox" checked="checked" name="choose-odd-even">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <span class="choose-title">
                          <strong>Even</strong>
                        </span>
                        <span class="odd-even-value">1.03</span>
                      </div>
                    </div>
                  </div>
                  <div class="bet-item">
                    <span class="step-title">2. You bet</span>
                    <div class="choose-price">
                      <div class="list-price">
                        <span class="price-item">$1</span>
                        <span class="price-item">$2</span>
                        <span class="price-item">$5</span>
                        <span class="price-item">$10</span>
                      </div>

                      <p class="win-message">
                        If win, you get: <span class="win-price">$50</span>
                      </p>
                    </div>
                    <div class="input-form">
                      <img src="./images/icon-dollar.png" class="icon-dollar" alt="" />
                      <form action="#" method="#">
                        <input type="text" name="" value="" placeholder="Enter">
                      </form>
                    </div>

                    <div class="box-submit">
                      <p class="intro-message">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <path d="M9 15.75C12.7279 15.75 15.75 12.7279 15.75 9C15.75 5.27208 12.7279 2.25 9 2.25C5.27208 2.25 2.25 5.27208 2.25 9C2.25 12.7279 5.27208 15.75 9 15.75Z" stroke="#461A53" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M9 6H9.00667" stroke="#461A53" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M8.25 9H9V12H9.75" stroke="#461A53" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Rule of Double Chance</span>
                      </p>
                      <button class="btn-confirm">Confirm</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- content tab odd even -->
              <div class="tab-pane fade" id="v-pills-last-team" role="tabpanel" aria-labelledby="v-pills-last-team-tab">
                <div class="tab-bet-content">tab3</div>
              </div>
            </div>
          </div>
        </div>

        <div class="result-bet-detail">
          <h3 class="title-detail">You bet</h3>
          <div class="list-detail">
            <div class="detail-item">
              <div class="content">2-way</div>
              <div class="content"><strong>Liverpool</strong> win</div>
              <div class="content">$3</div>
            </div>
            <div class="detail-item">
              <div class="content">2-way</div>
              <div class="content"><strong>Manchester United</strong> win</div>
              <div class="content">$5</div>
            </div>
            <div class="detail-item">
              <div class="content">Odd/Even</div>
              <div class="content"><strong>Odd</strong></div>
              <div class="content">$15.5</div>
            </div>
            <div class="detail-item">
              <div class="content">Last team to score</div>
              <div class="content"><strong>Liverpool</strong></div>
              <div class="content">$24.5</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="live-main-content">
    <div class="container wrapper-content">
      <div id="live-main-tabs">
        <ul class="live-main-nav">
          <li class="nav-item"><a href="#live-head-to-head">Head to Head</a></li>
          <li class="nav-item"><a href="#live-betting">Betting</a></li>
          <li class="nav-item"><a href="#live-match-centre">Match Centre</a></li>
        </ul>
        <div id="live-head-to-head">
          <!-- HEAD TO HEAD TAB CONTENT -->
          <div id="head-to-head-tabs">
            <ul class="live-sub-nav">
              <li class="sub-nav-item"><a href="#sub-tab-1">Summary</a></li>
              <li class="sub-nav-item"><a href="#sub-tab-2">Team Statistics</a></li>
              <li class="sub-nav-item"><a href="#sub-tab-3">Player Statistics</a></li>
            </ul>
            <div id="sub-tab-1">
              <!-- PREVIOUS MEETING TABLE -->
              <div class="table-1-wrapper">
                <h3 class="table-title">
                  Previous Meetings
                  <span class="sub-title">(Last 6 matches)</span>
                </h3>
                <div class="table-content">
                  <div id="previous-meeting-tabs">
                    <ul class="previous-meeting-nav">
                      <li><a href="#tabs-1">All</a></li>
                      <li><a href="#tabs-2">Home vs Away</a></li>
                      <li><a href="#tabs-3">Away vs Home</a></li>
                    </ul>
                    <div id="tabs-1">
                      <!-- ==============ALL TAB IN TABLES ============= -->
                      <div class="table-content">
                        <!-- start table header for pc -->
                        <div class="table-header-pc">
                          <div class="club-info">
                            <img src="./images/mu-club.png" class="club-image" alt="" />
                            <div class="list-card">
                              <div class="card-item">
                                <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                  <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                </svg>
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                </svg>
                                <span class="number">0</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                </svg>
                                <span class="number">12</span>
                              </div>
                            </div>
                          </div>
                          <div class="list-progress">
                            <div class="progress-item">
                              <span class="label">Won (50%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((3 / 6) * 100%);" aria-valuenow="3" aria-valuemin="0" aria-valuemax="6">3/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item">
                              <span class="label">Drew (12%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((4 / 6) * 100%);" aria-valuenow="4" aria-valuemin="0" aria-valuemax="6">4/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item"> <span class="label">Won (33%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((2 / 6) * 100%);" aria-valuenow="2" aria-valuemin="0" aria-valuemax="6">2/6</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="club-info">
                            <div class="list-card">
                              <div class="card-item">
                                <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                  <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                </svg>
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                </svg>
                                <span class="number">20</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                </svg>
                                <span class="number">43</span>
                              </div>
                            </div>
                            <img src="./images/inter-club.png" class="club-image" alt="" />
                          </div>
                        </div>
                        <!-- end table header for pc-->


                        <!-- start table header for moblie -->
                        <div class="table-header-mb">
                          <div class="top-line">
                            <div class="club-info">
                              <div class="list-card">
                                <div class="card-item">
                                  <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                    <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                  </svg>
                                  <span class="number">10</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                  </svg>
                                  <span class="number">0</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                  </svg>
                                  <span class="number">12</span>
                                </div>
                              </div>
                              <img src="./images/mu-club.png" class="club-image" alt="" />
                            </div>
                            <div class="club-info">
                              <img src="./images/inter-club.png" class="club-image" alt="" />
                              <div class="list-card">
                                <div class="card-item">
                                  <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                    <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                  </svg>
                                  <span class="number">10</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                  </svg>
                                  <span class="number">20</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                  </svg>
                                  <span class="number">43</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bottom-line">
                            <div class="list-progress">
                              <div class="progress-item">
                                <span class="label">Won (50%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((3 / 6) * 100%);" aria-valuenow="3" aria-valuemin="0" aria-valuemax="6">3/6</div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-item">
                                <span class="label">Drew (12%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((4 / 6) * 100%);" aria-valuenow="4" aria-valuemin="0" aria-valuemax="6">4/6</div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-item"> <span class="label">Won (33%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((2 / 6) * 100%);" aria-valuenow="2" aria-valuemin="0" aria-valuemax="6">2/6</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end table header for moblie -->

                        <div class="list-timeline">
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>


                        </div>
                      </div>
                      <!-- ==============ALL TAB IN TABLES ============= -->
                    </div>
                    <div id="tabs-2">
                      <!-- ============== HOME AS AWAY TABLE ============= -->
                      <div class="table-content">
                        <!-- start table header for pc -->
                        <div class="table-header-pc">
                          <div class="club-info">
                            <img src="./images/mu-club.png" class="club-image" alt="" />
                            <div class="list-card">
                              <div class="card-item">
                                <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                  <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                </svg>
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                </svg>
                                <span class="number">0</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                </svg>
                                <span class="number">12</span>
                              </div>
                            </div>
                          </div>
                          <div class="list-progress">
                            <div class="progress-item">
                              <span class="label">Won (50%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((3 / 6) * 100%);" aria-valuenow="3" aria-valuemin="0" aria-valuemax="6">3/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item">
                              <span class="label">Drew (12%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((4 / 6) * 100%);" aria-valuenow="4" aria-valuemin="0" aria-valuemax="6">4/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item"> <span class="label">Won (33%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((2 / 6) * 100%);" aria-valuenow="2" aria-valuemin="0" aria-valuemax="6">2/6</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="club-info">
                            <div class="list-card">
                              <div class="card-item">
                                <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                  <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                </svg>
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                </svg>
                                <span class="number">20</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                </svg>
                                <span class="number">43</span>
                              </div>
                            </div>
                            <img src="./images/inter-club.png" class="club-image" alt="" />
                          </div>
                        </div>
                        <!-- end table header for pc-->


                        <!-- start table header for moblie -->
                        <div class="table-header-mb">
                          <div class="top-line">
                            <div class="club-info">
                              <div class="list-card">
                                <div class="card-item">
                                  <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                    <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                  </svg>
                                  <span class="number">10</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                  </svg>
                                  <span class="number">0</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                  </svg>
                                  <span class="number">12</span>
                                </div>
                              </div>
                              <img src="./images/mu-club.png" class="club-image" alt="" />
                            </div>
                            <div class="club-info">
                              <img src="./images/inter-club.png" class="club-image" alt="" />
                              <div class="list-card">
                                <div class="card-item">
                                  <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                    <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                  </svg>
                                  <span class="number">10</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                  </svg>
                                  <span class="number">20</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                  </svg>
                                  <span class="number">43</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bottom-line">
                            <div class="list-progress">
                              <div class="progress-item">
                                <span class="label">Won (50%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((3 / 6) * 100%);" aria-valuenow="3" aria-valuemin="0" aria-valuemax="6">3/6</div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-item">
                                <span class="label">Drew (12%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((4 / 6) * 100%);" aria-valuenow="4" aria-valuemin="0" aria-valuemax="6">4/6</div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-item"> <span class="label">Won (33%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((2 / 6) * 100%);" aria-valuenow="2" aria-valuemin="0" aria-valuemax="6">2/6</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end table header for moblie -->

                        <div class="list-timeline">
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>


                        </div>
                      </div>
                      <!-- ==============HOME AS AWAY TABLE============= -->
                    </div>
                    <div id="tabs-3">
                      <!-- ============== HOME AS AWAY TABLE ============= -->
                      <div class="table-content">
                        <!-- start table header for pc -->
                        <div class="table-header-pc">
                          <div class="club-info">
                            <img src="./images/mu-club.png" class="club-image" alt="" />
                            <div class="list-card">
                              <div class="card-item">
                                <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                  <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                </svg>
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                </svg>
                                <span class="number">0</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                </svg>
                                <span class="number">12</span>
                              </div>
                            </div>
                          </div>
                          <div class="list-progress">
                            <div class="progress-item">
                              <span class="label">Won (50%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((3 / 6) * 100%);" aria-valuenow="3" aria-valuemin="0" aria-valuemax="6">3/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item">
                              <span class="label">Drew (12%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((4 / 6) * 100%);" aria-valuenow="4" aria-valuemin="0" aria-valuemax="6">4/6</div>
                                </div>
                              </div>
                            </div>
                            <div class="progress-item"> <span class="label">Won (33%)</span>
                              <div class="progress-wrapper">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: calc((2 / 6) * 100%);" aria-valuenow="2" aria-valuemin="0" aria-valuemax="6">2/6</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="club-info">
                            <div class="list-card">
                              <div class="card-item">
                                <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                  <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                </svg>
                                <span class="number">10</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                </svg>
                                <span class="number">20</span>
                              </div>
                              <div class="card-item">
                                <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                </svg>
                                <span class="number">43</span>
                              </div>
                            </div>
                            <img src="./images/inter-club.png" class="club-image" alt="" />
                          </div>
                        </div>
                        <!-- end table header for pc-->


                        <!-- start table header for moblie -->
                        <div class="table-header-mb">
                          <div class="top-line">
                            <div class="club-info">
                              <div class="list-card">
                                <div class="card-item">
                                  <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                    <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                  </svg>
                                  <span class="number">10</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                  </svg>
                                  <span class="number">0</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                  </svg>
                                  <span class="number">12</span>
                                </div>
                              </div>
                              <img src="./images/mu-club.png" class="club-image" alt="" />
                            </div>
                            <div class="club-info">
                              <img src="./images/inter-club.png" class="club-image" alt="" />
                              <div class="list-card">
                                <div class="card-item">
                                  <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                    <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                  </svg>
                                  <span class="number">10</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                  </svg>
                                  <span class="number">20</span>
                                </div>
                                <div class="card-item">
                                  <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                  </svg>
                                  <span class="number">43</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bottom-line">
                            <div class="list-progress">
                              <div class="progress-item">
                                <span class="label">Won (50%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((3 / 6) * 100%);" aria-valuenow="3" aria-valuemin="0" aria-valuemax="6">3/6</div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-item">
                                <span class="label">Drew (12%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((4 / 6) * 100%);" aria-valuenow="4" aria-valuemin="0" aria-valuemax="6">4/6</div>
                                  </div>
                                </div>
                              </div>
                              <div class="progress-item"> <span class="label">Won (33%)</span>
                                <div class="progress-wrapper">
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: calc((2 / 6) * 100%);" aria-valuenow="2" aria-valuemin="0" aria-valuemax="6">2/6</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- end table header for moblie -->

                        <div class="list-timeline">
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="timeline-item">
                            <button type="button" class="collapsible">
                              <div class="collapse-icon">
                                <img src="./images/icon-arrow-up.png" alt="" class="icon-arrow icon-arrow-up">
                                <img src="./images/icon-arrow-down.png" alt="" class="icon-arrow icon-arrow-down">
                              </div>
                              <!-- collapse title for PC -->
                              <div class="collapse-title colapse-title-pc">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <span class="club-name">Manchester United</span>
                                  <div class="list-score">
                                    <span class="score">3</span>
                                    <span>:</span>
                                    <span class="score">2</span>
                                  </div>
                                  <span class="club-name">Liverpool</span>
                                </div>
                              </div>
                              <!-- end collapse title for PC -->

                              <!-- start collapse title for mobile -->
                              <div class="collapse-title colapse-title-mb">
                                <div class="date-time">
                                  <div class="flag">
                                    <img src="./images/flag-match-6.png" alt="" />
                                    <span>FAC</span>
                                  </div>
                                  <span class="time">27-10-2021</span>
                                </div>
                                <div class="list-club">
                                  <div class="club-item">
                                    <span class="score">3</span>
                                    <span class="club-name">Manchester United</span>
                                  </div>
                                  <div class="club-item">
                                    <span class="score">2</span>
                                    <span class="club-name">Liverpool</span>
                                  </div>
                                </div>
                              </div>
                              <!-- end colllápe title for moblie -->
                            </button>
                            <div class="timeline-content">
                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="phan-luoi-nha" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">23'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="ghi-ban" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M7.5 9.4L8.7 11.9H11.3L12.5 9.4L10 7.5L7.5 9.4Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">76'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>


                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-do" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                  </div>
                                  <div class="middle-column">90'</div>
                                  <div class="right-column">
                                    <svg id="the-vang" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="2" width="16" height="20" rx="3" fill="#FAC712" />
                                    </svg>
                                    <span class="player-name">Messi <span class="status">(Pen.)</span>
                                  </div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="miss-penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#E34B31" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#E34B31" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="var" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <rect x="1" y="1" width="18" height="18" rx="9" fill="#1A202C" />
                                      <path d="M7.17295 7.28249C7.32295 7.28249 7.45194 7.33349 7.55995 7.43549C7.67394 7.53149 7.73095 7.65449 7.73095 7.80449C7.73095 7.88249 7.71294 7.96349 7.67695 8.04749L5.45395 13.2495C5.39995 13.3695 5.32195 13.4595 5.21995 13.5195C5.12395 13.5735 5.02495 13.6005 4.92295 13.6005C4.82695 13.5945 4.73395 13.5645 4.64395 13.5105C4.55395 13.4505 4.48495 13.3665 4.43695 13.2585L2.21395 8.03849C2.19595 8.00249 2.18395 7.96649 2.17795 7.93049C2.17195 7.88849 2.16895 7.84949 2.16895 7.81349C2.16895 7.63949 2.23195 7.50749 2.35795 7.41749C2.48395 7.32149 2.60395 7.27349 2.71795 7.27349C2.94595 7.27349 3.11095 7.39049 3.21295 7.62449L5.18395 12.2595L4.86895 12.2685L6.67795 7.62449C6.77995 7.39649 6.94495 7.28249 7.17295 7.28249Z" fill="white" />
                                      <path d="M9.95894 8.71349L8.01494 13.2855C7.97294 13.3995 7.90694 13.4895 7.81694 13.5555C7.73294 13.6155 7.63994 13.6455 7.53794 13.6455C7.37594 13.6455 7.25594 13.6005 7.17794 13.5105C7.09994 13.4205 7.06094 13.3095 7.06094 13.1775C7.06094 13.1235 7.06994 13.0665 7.08794 13.0065L9.32894 7.62449C9.37694 7.50449 9.44894 7.41149 9.54494 7.34549C9.64694 7.27949 9.75494 7.25249 9.86894 7.26449C9.97694 7.26449 10.0759 7.29749 10.1659 7.36349C10.2619 7.42349 10.3309 7.51049 10.3729 7.62449L12.5869 12.8985C12.6169 12.9765 12.6319 13.0485 12.6319 13.1145C12.6319 13.2765 12.5779 13.4055 12.4699 13.5015C12.3679 13.5975 12.2539 13.6455 12.1279 13.6455C12.0199 13.6455 11.9209 13.6125 11.8309 13.5465C11.7469 13.4805 11.6809 13.3905 11.6329 13.2765L9.69794 8.76749L9.95894 8.71349ZM8.29394 12.1875L8.78894 11.1525H11.2189L11.3899 12.1875H8.29394Z" fill="white" />
                                      <path d="M13.322 13.6005C13.154 13.6005 13.004 13.5495 12.872 13.4475C12.74 13.3395 12.674 13.2075 12.674 13.0515V7.84949C12.674 7.69349 12.725 7.56449 12.827 7.46249C12.935 7.35449 13.067 7.30049 13.223 7.30049H15.815C16.127 7.30049 16.418 7.38449 16.688 7.55249C16.964 7.71449 17.186 7.94249 17.354 8.23649C17.522 8.52449 17.606 8.85749 17.606 9.23549C17.606 9.46349 17.558 9.68549 17.462 9.90149C17.372 10.1175 17.246 10.3125 17.084 10.4865C16.928 10.6605 16.751 10.7955 16.553 10.8915L16.562 10.6845C16.73 10.7745 16.868 10.8825 16.976 11.0085C17.09 11.1285 17.177 11.2605 17.237 11.4045C17.303 11.5425 17.342 11.6925 17.354 11.8545C17.378 12.0045 17.393 12.1365 17.399 12.2505C17.411 12.3645 17.429 12.4605 17.453 12.5385C17.483 12.6165 17.537 12.6765 17.615 12.7185C17.747 12.7965 17.828 12.9105 17.858 13.0605C17.894 13.2045 17.861 13.3335 17.759 13.4475C17.693 13.5255 17.609 13.5765 17.507 13.6005C17.405 13.6185 17.303 13.6185 17.201 13.6005C17.099 13.5765 17.015 13.5465 16.949 13.5105C16.847 13.4505 16.745 13.3635 16.643 13.2495C16.541 13.1295 16.457 12.9705 16.391 12.7725C16.331 12.5745 16.301 12.3195 16.301 12.0075C16.301 11.9055 16.283 11.8125 16.247 11.7285C16.211 11.6385 16.16 11.5635 16.094 11.5035C16.028 11.4375 15.944 11.3895 15.842 11.3595C15.74 11.3235 15.62 11.3055 15.482 11.3055H13.664L13.799 11.0985V13.0515C13.799 13.2075 13.757 13.3395 13.673 13.4475C13.589 13.5495 13.472 13.6005 13.322 13.6005ZM13.673 10.3785H15.77C15.878 10.3785 15.983 10.3305 16.085 10.2345C16.187 10.1325 16.271 9.99749 16.337 9.82949C16.403 9.65549 16.436 9.46649 16.436 9.26249C16.436 8.99849 16.364 8.77949 16.22 8.60549C16.082 8.42549 15.932 8.33549 15.77 8.33549H13.691L13.799 8.04749V10.5945L13.673 10.3785Z" fill="white" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="thay-nguoi" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M4.71372 7.20714C3.67471 7.33931 2.7211 7.85048 2.03584 8.64259C1.35059 9.43469 0.981958 10.4519 1.00068 11.4991V13.9365C1.00068 14.036 1.04019 14.1313 1.11051 14.2017C1.18083 14.272 1.27621 14.3115 1.37566 14.3115H2.73308C2.78007 14.3115 2.82533 14.3292 2.85991 14.361C2.89449 14.3928 2.91587 14.4364 2.91982 14.4832L3.25055 18.4678C3.25847 18.5617 3.30144 18.6491 3.37092 18.7128C3.44041 18.7764 3.53131 18.8116 3.62553 18.8112H6.62536C6.71959 18.8116 6.81049 18.7764 6.87997 18.7128C6.94945 18.6491 6.99243 18.5617 7.00034 18.4678L7.33257 14.4832C7.33652 14.4364 7.3579 14.3928 7.39248 14.361C7.42706 14.3292 7.47233 14.3115 7.51931 14.3115H8.87524C8.97469 14.3115 9.07006 14.272 9.14039 14.2017C9.21071 14.1313 9.25021 14.036 9.25021 13.9365V11.3117C9.24957 10.7354 9.12833 10.1657 8.89431 9.63919C8.66028 9.11264 8.31864 8.6409 7.89136 8.2543C7.46408 7.86771 6.96061 7.57482 6.41335 7.39447C5.86608 7.21413 5.28713 7.15032 4.71372 7.20714Z" fill="#1A202C" />
                                      <path d="M5.12583 6.4372C6.5755 6.4372 7.75068 5.26202 7.75068 3.81235C7.75068 2.36269 6.5755 1.1875 5.12583 1.1875C3.67616 1.1875 2.50098 2.36269 2.50098 3.81235C2.50098 5.26202 3.67616 6.4372 5.12583 6.4372Z" fill="#1A202C" />
                                      <path d="M18.6703 3.57958L16.4204 1.3297C16.2095 1.11867 15.9233 1.00007 15.6249 1C15.3266 0.99993 15.0404 1.11839 14.8294 1.32933C14.6183 1.54026 14.4997 1.82639 14.4997 2.12477C14.4996 2.42314 14.618 2.70933 14.829 2.92036L15.159 3.24959H11.1249C10.8266 3.24959 10.5405 3.36811 10.3295 3.57908C10.1185 3.79005 10 4.07618 10 4.37453C10 4.67288 10.1185 4.95901 10.3295 5.16998C10.5405 5.38095 10.8266 5.49947 11.1249 5.49947H15.159L14.829 5.82945C14.6181 6.0404 14.4996 6.32649 14.4996 6.62478C14.4996 6.92307 14.6181 7.20915 14.829 7.42011C15.0418 7.6278 15.3273 7.74407 15.6247 7.74407C15.922 7.74407 16.2076 7.6278 16.4204 7.42011L18.6703 5.17024C18.8812 4.95928 18.9996 4.6732 18.9996 4.3749C18.9996 4.07661 18.8812 3.79053 18.6703 3.57958Z" fill="#1A202C" />
                                      <path d="M10.3297 11.5791L12.5796 9.32921C12.7905 9.11818 13.0767 8.99958 13.3751 8.99951C13.6734 8.99944 13.9596 9.1179 14.1706 9.32884C14.3817 9.53977 14.5003 9.8259 14.5003 10.1243C14.5004 10.4227 14.382 10.7088 14.171 10.9199L13.841 11.2491H17.8751C18.1734 11.2491 18.4595 11.3676 18.6705 11.5786C18.8815 11.7896 19 12.0757 19 12.374C19 12.6724 18.8815 12.9585 18.6705 13.1695C18.4595 13.3805 18.1734 13.499 17.8751 13.499H13.841L14.171 13.829C14.3819 14.0399 14.5004 14.326 14.5004 14.6243C14.5004 14.9226 14.3819 15.2087 14.171 15.4196C13.9582 15.6273 13.6727 15.7436 13.3753 15.7436C13.078 15.7436 12.7924 15.6273 12.5796 15.4196L10.3297 13.1697C10.1188 12.9588 10.0004 12.6727 10.0004 12.3744C10.0004 12.0761 10.1188 11.79 10.3297 11.5791Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="the-vang-thu-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <g clip-path="url(#clip0_569_6449)">
                                        <rect x="2.55469" y="1" width="12.4411" height="15.5514" rx="3" fill="#E34B31" />
                                        <g clip-path="url(#clip1_569_6449)">
                                          <rect x="8.64355" y="2.47559" width="11.4871" height="14.3588" rx="3" transform="rotate(16 8.64355 2.47559)" fill="#FAC712" />
                                        </g>
                                      </g>
                                      <defs>
                                        <clipPath id="clip0_569_6449">
                                          <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                        <clipPath id="clip1_569_6449">
                                          <rect width="14.3588" height="14.3588" fill="white" transform="translate(7.26367 2.07959) rotate(16)" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                              <div class="timeline-detail">
                                <div class="empty"></div>
                                <div class="timeline-result">
                                  <div class="left-column">
                                    <span class="player-name">Messi</span>
                                    <svg id="penalty" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                      <path d="M10 2C5.6 2 2 5.6 2 10C2 14.4 5.6 18 10 18C14.4 18 18 14.4 18 10C18 5.6 14.4 2 10 2ZM14.7 13.8H12.7L12.1 15.7C10.7 16.2 9.2 16.2 7.8 15.7L7.2 13.8H5.2C4.4 12.7 3.9 11.3 4 9.7L5.6 8.6L5 6.7C5.8 5.5 7 4.6 8.5 4.2L10 5.4L11.6 4.2C13 4.6 14.2 5.5 15 6.7L14.4 8.6L16 9.7C16.1 11.3 15.6 12.7 14.7 13.8Z" fill="#1A202C" />
                                      <path d="M13.635 8.76383C13.635 9.21117 13.5323 9.62183 13.327 9.99583C13.1217 10.3625 12.8063 10.6595 12.381 10.8868C11.9557 11.1142 11.4277 11.2278 10.797 11.2278H9.631V13.9998H7.75V6.27783H10.797C11.413 6.27783 11.9337 6.38417 12.359 6.59683C12.7843 6.8095 13.1033 7.10283 13.316 7.47683C13.5287 7.85083 13.635 8.27983 13.635 8.76383ZM10.654 9.73183C11.0133 9.73183 11.281 9.6475 11.457 9.47883C11.633 9.31017 11.721 9.07183 11.721 8.76383C11.721 8.45583 11.633 8.2175 11.457 8.04883C11.281 7.88017 11.0133 7.79583 10.654 7.79583H9.631V9.73183H10.654Z" fill="#1A202C" />
                                    </svg>
                                  </div>
                                  <div class="middle-column">80'</div>
                                  <div class="right-column"></div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ==============HOME AS AWAY TABLE============= -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- PREVIOUS MEETING TABLE -->

              <!-- TABLES -->
              <div class="table-2-wrapper">
                <h3 class="table-title">Tables</h3>
                <div class="table-content">
                  <div id="tables-main-tabs">
                    <ul class="tables-main-nav">
                      <li><a href="#tables-main-1">Standings</a></li>
                      <li><a href="#tables-main-2">Form</a></li>
                      <li><a href="#tables-main-3">Streaks</a></li>
                    </ul>
                    <div id="tables-main-1">
                      <div id="tables-standings-tabs">
                        <ul class="tables-sub-nav">
                          <li><a href="#tabs-1">Overall</a></li>
                          <li><a href="#tabs-2">Home</a></li>
                          <li><a href="#tabs-3">Away</a></li>
                          <li><a href="#tabs-4">Wide</a></li>
                        </ul>
                        <div id="tabs-1">
                          <!-- standing-overrall -->
                          <div class="table-result">
                            <div class="row-item table-heading">
                              <div class="team-info">
                                <div class="team-id">Team</div>
                                <div class="team-name"></div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">P</div>
                                  <div class="detail-item">W</div>
                                  <div class="detail-item">D</div>
                                  <div class="detail-item">L</div>
                                  <div class="detail-item">GF</div>
                                  <div class="detail-item">GA</div>
                                  <div class="detail-item">GD</div>
                                  <div class="detail-item">Pts</div>
                                </div>
                                <div class="list-player">Form</div>
                              </div>
                            </div>
                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number champion">1</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number europa">2</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number relegation">3</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>


                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number">4</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list-suggest">
                            <div class="suggest-item">
                              <span class="color-league champion"></span>
                              <span class="name-league">Champions League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league europa"></span>
                              <span class="name-league">Europa League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league relegation"></span>
                              <span class="name-league">Relegation</span>
                            </div>
                          </div>
                          <!-- standing-overrall -->
                        </div>
                        <div id="tabs-2">
                          <!-- standing-home-->
                          <div class="table-result">
                            <div class="row-item table-heading">
                              <div class="team-info">
                                <div class="team-id">Team</div>
                                <div class="team-name"></div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">P</div>
                                  <div class="detail-item">W</div>
                                  <div class="detail-item">D</div>
                                  <div class="detail-item">L</div>
                                  <div class="detail-item">GF</div>
                                  <div class="detail-item">GA</div>
                                  <div class="detail-item">GD</div>
                                  <div class="detail-item">Pts</div>
                                </div>
                                <div class="list-player">Form</div>
                              </div>
                            </div>
                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number champion">1</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number europa">2</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number relegation">3</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>


                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number">4</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="list-suggest">
                            <div class="suggest-item">
                              <span class="color-league champion"></span>
                              <span class="name-league">Champions League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league europa"></span>
                              <span class="name-league">Europa League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league relegation"></span>
                              <span class="name-league">Relegation</span>
                            </div>
                          </div>
                          <!-- standing-home- -->
                        </div>
                        <div id="tabs-3">
                          <!-- standing-away -->
                          <div class="table-result">
                            <div class="row-item table-heading">
                              <div class="team-info">
                                <div class="team-id">Team</div>
                                <div class="team-name"></div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">P</div>
                                  <div class="detail-item">W</div>
                                  <div class="detail-item">D</div>
                                  <div class="detail-item">L</div>
                                  <div class="detail-item">GF</div>
                                  <div class="detail-item">GA</div>
                                  <div class="detail-item">GD</div>
                                  <div class="detail-item">Pts</div>
                                </div>
                                <div class="list-player">Form</div>
                              </div>
                            </div>
                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number champion">1</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number europa">2</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number relegation">3</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>


                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number">4</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>
                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number"></span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="list-suggest">
                            <div class="suggest-item">
                              <span class="color-league champion"></span>
                              <span class="name-league">Champions League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league europa"></span>
                              <span class="name-league">Europa League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league relegation"></span>
                              <span class="name-league">Relegation</span>
                            </div>
                          </div>
                          <!-- standing-away -->
                        </div>
                        <div id="tabs-4">
                          <!-- standing-wide-->
                          <div class="table-result">
                            <div class="row-item table-heading">
                              <div class="team-info">
                                <div class="team-id">Team</div>
                                <div class="team-name"></div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">P</div>
                                  <div class="detail-item">W</div>
                                  <div class="detail-item">D</div>
                                  <div class="detail-item">L</div>
                                  <div class="detail-item">GF</div>
                                  <div class="detail-item">GA</div>
                                  <div class="detail-item">GD</div>
                                  <div class="detail-item">Pts</div>
                                </div>
                                <div class="list-player">Form</div>
                              </div>
                            </div>
                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number champion">1</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number europa">2</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number relegation">3</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>


                            <div class="row-item table-row">
                              <div class="team-info">
                                <div class="team-id">
                                  <span class="number">4</span>
                                </div>
                                <div class="team-name">Manchester United</div>
                              </div>
                              <div class="team-result">
                                <div class="result-detail">
                                  <div class="detail-item">1</div>
                                  <div class="detail-item">2</div>
                                  <div class="detail-item">33</div>
                                  <div class="detail-item">45</div>
                                  <div class="detail-item">8</div>
                                  <div class="detail-item">9</div>
                                  <div class="detail-item">+34</div>
                                  <div class="detail-item">+12</div>
                                </div>
                                <div class="list-player">
                                  <div class="player-item green">W</div>
                                  <div class="player-item grey">D</div>
                                  <div class="player-item orange">L</div>
                                  <div class="player-item green">L</div>
                                  <div class="player-item green">W</div>
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="list-suggest">
                            <div class="suggest-item">
                              <span class="color-league champion"></span>
                              <span class="name-league">Champions League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league europa"></span>
                              <span class="name-league">Europa League</span>
                            </div>
                            <div class="suggest-item">
                              <span class="color-league relegation"></span>
                              <span class="name-league">Relegation</span>
                            </div>
                          </div>
                          <!-- stading-wide-->
                        </div>
                      </div>
                    </div>
                    <div id="tables-main-2">
                      <div id="tables-form-tabs">
                        <ul class="tables-sub-nav">
                          <li><a href="#tabs-1">Overall</a></li>
                          <li><a href="#tabs-2">Home</a></li>
                          <li><a href="#tabs-3">Away</a></li>
                          <li><a href="#tabs-4">Wide</a></li>
                        </ul>
                        <div id="tabs-1">tab21</div>
                        <div id="tabs-2">tab22</div>
                        <div id="tabs-3">tab23</div>
                        <div id="tabs-4">tab24</div>
                      </div>
                    </div>
                    <div id="tables-main-3">
                      <div id="tables-streaks-tabs">
                        <ul class="tables-sub-nav">
                          <li><a href="#tabs-1">Overall</a></li>
                          <li><a href="#tabs-2">Home</a></li>
                          <li><a href="#tabs-3">Away</a></li>
                          <li><a href="#tabs-4">Wide</a></li>
                        </ul>
                        <div id="tabs-1">tab21</div>
                        <div id="tabs-2">tab22</div>
                        <div id="tabs-3">tab23</div>
                        <div id="tabs-4">tab24</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TABLES -->

              <!-------- FIXTURES-------->
              <div class="table-3-wrapper">
                <h3 class="table-title">Fixtures</h3>

                <!-- tab show mobile only -->
                <ul class="fixture-tabs-mobile">
                  <li class="tabs-mobile-item tab-active" id="fixture-mobile-tab-1">
                    <img src="./images/mu-club.png" alt="">
                    <span class="team-name">Man United</span>
                  </li>
                  <li class="tabs-mobile-item" id="fixture-mobile-tab-2">
                    <img src="./images/inter-club.png" alt="">
                    <span class="team-name">Liverpool</span>
                  </li>
                </ul>
                <!-- tab show mobile only -->

                <!-- start table content for pc -->
                <div class="table-content-pc">
                  <!--  start left column -->
                  <div class="compare-item">
                    <div id="fixture-left-tabs">
                      <ul class="fixture-tabs">
                        <li><a href="#fixture-main-1">All</a></li>
                        <li><a href="#fixture-main-2">Premier League</a></li>
                      </ul>
                      <div id="fixture-main-1">
                        <div id="fixture-all-left-tabs">
                          <ul class="fixture-tabs">
                            <li><a href="#tabs-1">Overrall</a></li>
                            <li><a href="#tabs-2">Home</a></li>
                            <li><a href="#tabs-3">Away</a></li>
                          </ul>
                          <div id="tabs-1">
                            <!-- all-overrall -->
                            <div class="list-result">
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <div class="suggesst">
                              <span class="status"></span>
                              <span class="description">Upcoming Match</span>
                            </div>
                            <!--all-overrall-->
                          </div>
                          <div id="tabs-2">
                            <!--  all-home -->
                            <div class="list-result">
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <div class="suggesst">
                              <span class="status"></span>
                              <span class="description">Upcoming Match</span>
                            </div>
                            <!--all-home -->
                          </div>
                          <div id="tabs-3">
                            <!--  all-away -->
                            <div class="list-result">
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <div class="suggesst">
                              <span class="status"></span>
                              <span class="description">Upcoming Match</span>
                            </div>
                            <!--  all-away -->
                          </div>
                        </div>
                      </div>
                      <div id="fixture-main-2">
                        <div id="fixture-premier-left-tabs">
                          <ul class="fixture-tabs">
                            <li><a href="#tabs-1">Overrall</a></li>
                            <li><a href="#tabs-2">Home</a></li>
                            <li><a href="#tabs-3">Away</a></li>
                          </ul>
                          <div id="tabs-1">
                            <!-- all-overrall -->
                            <div class="list-result">
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <div class="suggesst">
                              <span class="status"></span>
                              <span class="description">Upcoming Match</span>
                            </div>
                            <!--all-overrall-->
                          </div>
                          <div id="tabs-2">
                            <!--  all-home -->
                            <div class="list-result">
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <div class="suggesst">
                              <span class="status"></span>
                              <span class="description">Upcoming Match</span>
                            </div>
                            <!--all-home -->
                          </div>
                          <div id="tabs-3">
                            <!--  all-away -->
                            <div class="list-result">
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <div class="suggesst">
                              <span class="status"></span>
                              <span class="description">Upcoming Match</span>
                            </div>
                            <!--  all-away -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end left column -->

                  <!-- start right column -->
                  <div class="compare-item">
                    <div id="fixture-right-tabs">
                      <ul class="fixture-tabs">
                        <li><a href="#fixture-main-1">All</a></li>
                        <li><a href="#fixture-main-2">Premier League</a></li>
                      </ul>
                      <div id="fixture-main-1">
                        <div id="fixture-all-right-tabs">
                          <ul class="fixture-tabs">
                            <li><a href="#tabs-1">Overrall</a></li>
                            <li><a href="#tabs-2">Home</a></li>
                            <li><a href="#tabs-3">Away</a></li>
                          </ul>
                          <div id="tabs-1">
                            <!-- all-overral -->
                            <div class="list-result">
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <!-- all-overral -->
                          </div>
                          <div id="tabs-2">
                            <!-- all-home -->
                            <div class="list-result">
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <!-- all-home -->
                          </div>
                          <div id="tabs-3">
                            <!-- all-away -->
                            <div class="list-result">
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <!-- all-waya -->
                          </div>
                        </div>
                      </div>
                      <div id="fixture-main-2">
                        <div id="fixture-premier-right-tabs">
                          <ul class="fixture-tabs">
                            <li><a href="#tabs-1">Overrall</a></li>
                            <li><a href="#tabs-2">Home</a></li>
                            <li><a href="#tabs-3">Away</a></li>
                          </ul>
                          <div id="tabs-1">
                            <!-- all-overral -->
                            <div class="list-result">
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <!-- all-overral -->
                          </div>
                          <div id="tabs-2">
                            <!-- all-home -->
                            <div class="list-result">
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>

                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign orange">L</span>
                                  </div>
                                </div>
                              </div>

                              <!-- incoming match -->
                              <div class="result-item incoming-match reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <!-- all-home -->
                          </div>
                          <div id="tabs-3">
                            <!-- all-away -->
                            <div class="list-result">
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign green">W</span>
                                  </div>
                                </div>
                              </div>
                              <div class="result-item reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">2:1</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                    <span class="sign grey">D</span>
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                              <div class="result-item incoming-match reverse">
                                <div class="team-info">
                                  <span class="team-id">WCQ</span>
                                  <span class="team-name">Manchester United</span>
                                </div>
                                <span class="score">vs</span>
                                <div class="right-box">
                                  <div class="time-and-address">
                                    <span class="time">12-11-21</span>
                                    <span class="address">Manchester United</span>
                                  </div>
                                  <div class="sign-wrapper">
                                  </div>
                                </div>
                              </div>
                              <!-- incoming match -->
                            </div>
                            <!-- all-waya -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end right column  -->
                </div>
                <!-- end table content for pc -->
              </div>
              <!-- FIXTURE -->
            </div>
            <div id="sub-tab-2">
              Team Statistics content
            </div>
            <div id="sub-tab-3">
              Player Statistics content
            </div>
          </div>
          <!-- END HEAH TO HEAD CONTENT -->
        </div>
        <div id="live-betting">
          live betting content
        </div>
        <div id="live-match-centre">
          <div id="match-centre-tabs">
            <ul class="live-sub-nav">
              <li class="sub-nav-item"><a href="#sub-tab-1">Summary</a></li>
              <li class="sub-nav-item"><a href="#sub-tab-2">Player Statistics</a></li>
            </ul>
            <div id="sub-tab-1">
              <div class="match-center-summary">
                <h3 class="title">Timeline</h3>
                <div class="table-5-wrapper">
                  <div class="table-row">
                    <div class="list-player left">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-bong" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </div>
                    </div>
                    <div class="timer">
                      <span class="time-label">27'</span>
                    </div>
                    <div class="list-player right"></div>
                  </div>

                  <div class="table-row">
                    <div class="list-player left">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-bong" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                        </svg>
                      </div>
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-A" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </div>
                    </div>
                    <div class="timer">
                      <span class="time-label">89+2'</span>
                    </div>
                    <div class="list-player right"></div>
                  </div>

                  <div class="table-row">
                    <div class="list-player left"></div>
                    <div class="timer">
                      <span class="time-label">89+2'</span>
                    </div>
                    <div class="list-player right">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-mui-ten-xanh" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.1801 6.02938L12.1801 18.3823" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.3608 11.0117L12.18 6.02937L17 11.0117" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-mui-ten-do" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12.1801 17.9706L12.1801 5.61768" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.3608 12.9883L12.18 17.9706L17 12.9883" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="table-row">
                    <div class="list-player left"></div>
                    <div class="timer">
                      <span class="time-label">89+2'</span>
                    </div>
                    <div class="list-player right">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-A" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </div>
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-bong" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                          <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                        </svg>
                      </div>
                    </div>
                  </div>

                  <div class="table-row">
                    <div class="list-player left">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="the-do" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect width="16" height="20" rx="3" fill="#E34B31" />
                        </svg>
                      </div>
                    </div>
                    <div class="timer">
                      <span class="time-label">89+2'</span>
                    </div>
                    <div class="list-player right">
                    </div>
                  </div>

                  <div class="table-row">
                    <div class="list-player left">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-A" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </div>
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-bong" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                          <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                        </svg>
                      </div>
                    </div>
                    <div class="timer">
                      <span class="time-label">89+2'</span>
                    </div>
                    <div class="list-player right">
                    </div>
                  </div>

                  <div class="table-row">
                    <div class="list-player left">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>

                        <svg id="icon-mui-ten-xanh" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.1801 6.02938L12.1801 18.3823" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.3608 11.0117L12.18 6.02937L17 11.0117" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                      </div>
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg id="icon-mui-ten-do" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12.1801 17.9706L12.1801 5.61768" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.3608 12.9883L12.18 17.9706L17 12.9883" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                    </div>
                    <div class="timer">
                      <span class="time-label">89+2'</span>
                    </div>
                    <div class="list-player right">
                    </div>
                  </div>

                  <div class="table-row">
                    <div class="list-player left">
                    </div>
                    <div class="timer">
                      <span class="time-label">89+2'</span>
                    </div>
                    <div class="list-player right">
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12.1801 6.02938L12.1801 18.3823" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.3608 11.0117L12.18 6.02937L17 11.0117" stroke="#18B745" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                      <div class="player-item">
                        <span class="player-name">Gabriel Martinelli(1-0)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12.1801 17.9706L12.1801 5.61768" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                          <path d="M7.3608 12.9883L12.18 17.9706L17 12.9883" stroke="#E34B31" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="match-centre-summary-tabs" class="match-centre-summary-tabs">
                  <ul class="match-center-nav">
                    <li><a href="#tabs-1">Match Centre</a></li>
                    <li><a href="#tabs-2">Match Commentary</a></li>
                    <li><a href="#tabs-3">Chalkboard</a></li>
                    <li><a href="#tabs-4">Heatmaps</a></li>
                    <li><a href="#tabs-5">Live stream</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div class="match-centre-summary-content"> tab1</div>
                  </div>
                  <div id="tabs-2">
                    <div class="match-centre-summary-content">tab2</div>
                  </div>
                  <div id="tabs-3">
                    <div class="match-centre-summary-content">tab3</div>
                  </div>
                  <div id="tabs-4">
                    <div class="match-centre-summary-content">tab4</div>
                  </div>
                  <div id="tabs-5">
                    <div class="match-centre-summary-content">tab5</div>
                  </div>
                </div>
              </div>
            </div>
            <div id="sub-tab-2">
              <!-- club-1 -->
              <div class="table-4-wrapper">
                <div class="table-title">
                  <img src="./images/mc-club.png" alt="" />
                  <span class="club-name">Manchester United</span>
                </div>
                <div id="match-centre-tab-1">
                  <ul class="match-center-nav">
                    <li><a href="#tabs-1">Standings</a></li>
                    <li><a href="#tabs-2">Offensive</a></li>
                    <li><a href="#tabs-3">Defensive</a></li>
                    <li><a href="#tabs-4">Passing</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-2">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-3">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-4">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- club-1 -->

              <!-- club-2 -->
              <div class="table-4-wrapper">
                <div class="table-title">
                  <img src="./images/lei-club.png" alt="" />
                  <span class="club-name">Liverpool</span>
                </div>
                <div id="match-centre-tab-2">
                  <ul class="match-center-nav">
                    <li><a href="#tabs-1">Standings</a></li>
                    <li><a href="#tabs-2">Offensive</a></li>
                    <li><a href="#tabs-3">Defensive</a></li>
                    <li><a href="#tabs-4">Passing</a></li>
                  </ul>
                  <div id="tabs-1">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-2">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-3">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-4">
                    <div class="table-content">
                      <div class="table-heading">
                        <div class="player-info">Player</div>
                        <div class="match-value">
                          <div class="table-column">Shots</div>
                          <div class="table-column">ShotsOT</div>
                          <div class="table-column">Keypasses</div>
                          <div class="table-column">PA%</div>
                          <div class="table-column">AerialsWon</div>
                          <div class="table-column">Touchers</div>
                          <div class="table-column text-danger">Rating</div>
                          <div class="table-column">Key Events</div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="table-row">
                        <div class="player-info">
                          <span class="number">1</span>
                          <div class="player-detail">
                            <img class="flag" src="./images/flag.png" />
                            <div>
                              <p class="player-name">Kevin De Bruyne</p>
                              <p class="player-history">30, M(CLR),FW</p>
                            </div>
                          </div>
                        </div>
                        <div class="match-value">
                          <div class="table-column">3</div>
                          <div class="table-column">0</div>
                          <div class="table-column">2</div>
                          <div class="table-column">86.5</div>
                          <div class="table-column">1</div>
                          <div class="table-column">28</div>
                          <div class="table-column text-danger">7.67</div>
                          <div class="table-column">
                            <div class="key-events">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4C7.6 4 4 7.6 4 12C4 16.4 7.6 20 12 20C16.4 20 20 16.4 20 12C20 7.6 16.4 4 12 4ZM16.7 15.8H14.7L14.1 17.7C12.7 18.2 11.2 18.2 9.8 17.7L9.2 15.8H7.2C6.4 14.7 5.9 13.3 6 11.7L7.6 10.6L7 8.7C7.8 7.5 9 6.6 10.5 6.2L12 7.4L13.6 6.2C15 6.6 16.2 7.5 17 8.7L16.4 10.6L18 11.7C18.1 13.3 17.6 14.7 16.7 15.8Z" fill="#1A202C" />
                                <path d="M9.5 11.4L10.7 13.9H13.3L14.5 11.4L12 9.5L9.5 11.4Z" fill="#1A202C" />
                              </svg>
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.2" x="4" y="4" width="16" height="16" rx="8" fill="#461A53" />
                                <path d="M13.8724 14.1401H10.2244L9.55239 16.0001H8.40039L11.4244 7.68408H12.6844L15.6964 16.0001H14.5444L13.8724 14.1401ZM13.5604 13.2521L12.0484 9.02808L10.5364 13.2521H13.5604Z" fill="#461A53" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- club-2 -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN TAB -->
  <?php include "templates/footer.php"; ?>
</body>
<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      const isActive = this.classList.contains('active')
      const iconArrowUp = this.querySelector('.icon-arrow-up')
      const iconArrowDown = this.querySelector('.icon-arrow-down')
      if (isActive) {
        iconArrowDown.style.display = 'none'
        iconArrowUp.style.display = 'block'
      } else {
        iconArrowDown.style.display = 'block'
        iconArrowUp.style.display = 'none'
      }
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }

  // handle choose one checkbox.
  $("input:checkbox").on('click', function() {
    var $box = $(this);
    if ($box.is(":checked")) {
      var group = "input:checkbox[name='" + $box.attr("name") + "']";
      $(group).prop("checked", false);
      $box.prop("checked", true);
    } else {
      $box.prop("checked", false);
    }
  });

  // handle toggle show tab fixture in mobile
  $("#fixture-mobile-tab-1").on('click', function() {
    $(".tabs-mobile-item").removeClass("tab-active")
    $(".compare-item").first().css("display", "block")
    $(".compare-item").last().css("display", "none")
    $(this).addClass('tab-active')
  })

  $("#fixture-mobile-tab-2").on('click', function() {
    $(".tabs-mobile-item").removeClass("tab-active")
    $(".compare-item").first().css("display", "none")
    $(".compare-item").last().css("display", "block")
    $(this).addClass('tab-active')
  })
</script>
<script>
  $(function() {
    //head to head tabs
    $("#live-main-tabs").tabs({
      active: 0
    });
    $("#head-to-head-tabs").tabs({
      active: 0
    });
    $("#betting-tabs").tabs({
      active: 0
    });
    $("#match-centre-tabs").tabs({
      active: 0
    });
    $("#previous-meeting-tabs").tabs({
      active: 0
    })
    $("#tables-main-tabs").tabs({
      active: 0
    })
    $("#tables-standings-tabs").tabs({
      active: 0
    })
    $("#tables-form-tabs").tabs({
      active: 0
    })
    $("#tables-streaks-tabs").tabs({
      active: 0
    })
    $("#fixture-left-tabs").tabs({
      active: 0
    })
    $("#fixture-right-tabs").tabs({
      active: 0
    })

    $("#fixture-all-left-tabs").tabs({
      active: 0
    })
    $("#fixture-all-right-tabs").tabs({
      active: 0
    })
    $("#fixture-premier-left-tabs").tabs({
      active: 0
    })

    $("#fixture-premier-right-tabs").tabs({
      active: 0
    })


    // match centre tabs
    $("#match-centre-tab-1").tabs({
      active: 0
    })
    $("#match-centre-tab-2").tabs({
      active: 0
    })
    $("#match-centre-summary-tabs").tabs({
      active: 0
    })
  });
</script>

</html>