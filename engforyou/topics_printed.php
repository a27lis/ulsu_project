<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Тексты</title>
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
        <div class="header-title" style="margin-top: -390px">
          <div class="pro">Тексты</div>
        </div>
        <div class="stars" style="margin-top: -440px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="topics-list">
      <ul class="ul-topics">
        <li class="li-topic">
          <div class="topic-info">
            <div class="title-topic">
              Тема 1. The United Kingdom of Great Britain and Nothern Ireland
            </div>
            <?foreach ($topics as $topic):?>
            <div class="topic-el">
              <a class="menu-item" onclick="window.location.href = 'topic.php?paramId=<?=$topic['id']?>'">
              <? echo ($topic['theme'] === "Тема 1. The United Kingdom of Great Britain and Nothern Ireland") ? $topic['title'] : ""; ?>
              </a>
            </div>
            <?endforeach?>
          </div>
        </li>
        <li>
          <div class="topic-info">
            <div class="title-topic">Тема 2. The United States of America</div>
            <?foreach ($topics as $topic):?>
            <div class="topic-el">
              <a class="menu-item" onclick="window.location.href = 'topic.php?paramId=<?=$topic['id']?>'">
              <? echo ($topic['theme'] === "Тема 2. The United States of America") ? $topic['title'] : ""; ?>
              </a>
            </div>
            <?endforeach?>
          </div>
        </li>
        <li>
          <div class="topic-info">
            <div class="title-topic">Тема 3. Russia</div>
            <?foreach ($topics as $topic):?>
            <div class="topic-el">
              <a class="menu-item" onclick="window.location.href = 'topic.php?paramId=<?=$topic['id']?>'">
              <? echo ($topic['theme'] === "Тема 3. Russia") ? $topic['title'] : ""; ?>
              </a>
            </div>
            <?endforeach?>
          </div>
        </li>
      </ul>
    </div>
    <div class="scribble" style="margin-top: 122px">
      <img src="img/scribble-red.svg" alt="scribble" />
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
