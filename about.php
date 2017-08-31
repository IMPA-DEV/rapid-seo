<?php
include 'variables.php';
?>
<?php
  include 'head.php';
?>
    <!--header-->
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col header__logo"><a href="/"><img src="img/logo.svg"/></a></div>
          <div class="col header__main-nav">
            <ul>
              <li><a href="/local">Local moving</a></li>
              <li><a href="/long">Long distance</a></li>
              <li><a href="/storage">Storage services</a></li>
              <li class="has-submenu"><a href="#">Other services</a>
                <?echo $submenu;?>
              </li>
              <li><a href="/contact">Contact us</a></li>
            </ul>
          </div>
          <div class="col header__phone-col"><a href="tel:<?echo $phone;?>"><?echo $phone;?></a>
            <div id="menu-btn">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--header end-->
    <!--internal page head-->
    <section class="int-page-head bg-cover" style="background-image: url('img/about-bg.jpg');">
      <div class="container">
        <h1 class="int-page-head__title">About us</h1>
        <div class="int-page-head__menu">
          <ul>
            <li class="current"><a href="/about">About us</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/calculator">Calculator</a></li>
            <li><a href="/faq">FAQ</a></li>
          </ul>
          <?echo $countrySel;?>
        </div>
      </div>
    </section>
    <!--internal page head end-->
    <section class="int-page-content bg-main">
      <div class="container">
        <h2 class="int-page-content__title">rapid moving company</h2>
        <div class="about-us-page">
          <div class="about-us-page__item row">
            <div class="col about-us-page__item-photo">
              <div class="about-us-page__item-img bg-cover" style="background-image: url('img/content/about.jpg');"></div>
            </div>
            <div class="col about-us-page__item-info">
              <p class="Lorem">ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo dudolores et   ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem  ipsum dolor sit amet. moving down ts.</p>
            </div>
          </div>
          <div class="about-us-page__item row">
            <div class="col about-us-page__item-photo">
              <div class="row about-us__slider">
                <div class="col about-us-page__col-photo">
                  <div class="about-us-page__item-img bg-cover" style="background-image: url('img/content/about.jpg');"></div>
                </div>
                <div class="col about-us-page__col-photo">
                  <div class="about-us-page__item-img bg-cover" style="background-image: url('img/content/about.jpg');"></div>
                </div>
                <div class="col about-us-page__col-photo">
                  <div class="about-us-page__item-img bg-cover" style="background-image: url('img/content/about.jpg');"></div>
                </div>
                <div class="col about-us-page__col-photo">
                  <div class="about-us-page__item-img bg-cover" style="background-image: url('img/content/about.jpg');"></div>
                </div>
              </div>
            </div>
            <div class="col about-us-page__item-info">
              <p class="Lorem">ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo dudolores et   ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem  ipsum dolor sit amet. moving down ts.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--about us-->
    <?php
      include 'about-inc.php';
    ?>
    <!--about us end-->
    <!--partners-->
    <!--partners-->
    <?php
      include 'partners-inc.php';
    ?>
    <!--partners end-->
    <!--footer-->
    <?php
      include 'footer.php';
    ?>
    <!--footer end-->