<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>О нас</title>
    <script
			  src="https://code.jquery.com/jquery-3.7.1.min.js"
			  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-remake.css" />
  </head>
  <body>
    <div class="header">
      <?
        include 'navigation.php'
      ?>
      <div class="brand">
        <div class="swirl">
          <img src="img/shape-swirl.svg" alt="" />
        </div>
        <div class="header-title">
          <ul class="header-ul">
            <li><div class="pro">Про</div></li>
            <li><div class="your-eng">Твой Английский</div></li>
          </ul>
        </div>
        <div class="stars" style="margin-top: -440px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="block-about">
      <div class="history">
        <div class="title">
          <div class="title-history">О нас и история</div>
        </div>
        <div class="sparkle-left">
          <img src="img/sparkle-left.svg" alt="sparkle" />
        </div>

        <div class="info">
          <ul class="first-row-links">
            <li class="li-history">
              <p class="history-text">
                Eu non diam phasellus vestibulum lorem. Fringilla est
                ullamcorper eget nulla facilisi etiam dignissim. Id diam vel
                quam elementum pulvinar. Elementum eu facilisis sed odio morbi
                quis commodo. Sed odio morbi quis commodo odio aenean sed
                adipiscing odio diam. uno fablotoson louw uit.
              </p>
            </li>

            <li class="li-history">
              <p class="history-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam
                pellentesque at bibendum euismod tellus duis cursus dignissim
                odio. Sit vulputate et integer in. Sit vel, senectus iaculis
                morbi. Amet interdum imperdiet laoreet morbi tincidunt
                fermentum, libero. Ante enim eget.
              </p>
            </li>
          </ul>
        </div>
        <hr class="history-hr" />
      </div>

      <div class="creator">
        <div class="title">
          <div class="title-f">Основатель</div>
        </div>
        <div class="scribble-blue">
          <img src="img/scribble-blue.svg" alt="sparkle" />
        </div>
        <div class="creator-card">
          <div class="card-f dark-shadow">
            <ul class="first-row-links">
              <li>
                <div class="cover-f">
                  <img class="image-cover" src="img/avatar.png" alt="" />
                </div>
              </li>
              <li class="li-f">
                <div class="card-body-f">
                  <div class="face">
                    <img src="img/face.svg" alt="face" />
                  </div>
                  <div class="text-name">Лисейкина Анастасия</div>
                  <p class="card-text-f">
                    Lorem ipsum dolor sit amet con sectet piscing elit, sed do
                    eiusmod tempor rarylet podofcast.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="scribble" style="margin-top: 190px">
        <img src="img/scribble-red.svg" alt="scribble" />
      </div>
    </div>

    <div class="footer">
      <div class="logo-year">
        <img src="img/footer-logo.svg" alt="" />
      </div>
      <div class="footer-nav">
        <ul class="first-col">
          <li class="footer-item">
            <a class="menu-item" href="about.php">О нас</a>
          </li>
          <li class="footer-item">
            <a class="menu-item" href="grammar.php" style="color: #cd4631"
              >Грамматика</a
            >
          </li>
          <li class="footer-item">
            <a class="menu-item" href="speaking.php">Говорение</a>
          </li>
        </ul>
        <ul class="second-col">
          <li class="footer-item">
            <a class="menu-item" href="topics.php" style="color: #cd4631"
              >Тексты</a
            >
          </li>
          <li class="footer-item">
            <a class="menu-item" href="times.php">Времена</a>
          </li>
          <li class="footer-item">
            <a class="menu-item" href="game.php" style="color: #cd4631"
              >Игра</a
            >
          </li>
        </ul>
      </div>
      <hr style="margin-top: 380px" />
      <div class="rules">
        <img src="img/terms.svg" alt="" />
      </div>
    </div>
    <script src="js/menu.js"></script>
    <script src="js/reg.js"></script>
  </body>
</html>
