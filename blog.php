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
              <li><a href="/contacts">Contact us</a></li>
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
    <section class="int-page-head bg-cover" style="background-image: url('img/blog-bg.jpg');">
      <div class="container">
        <h1 class="int-page-head__title">blog</h1>
        <div class="int-page-head__menu">
          <ul>
            <li><a href="/about">About us</a></li>
            <li class="current"><a href="/blog">Blog</a></li>
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
        <div class="blog-page row">
          <div class="col blog-page__item"><a class="blog-page__item-bg bg-cover" href="#" style="background-image: url('img/content/about.jpg');">
              <p class="blog-page__item-title">Lorem ipsum dolor sit amet, et accusam et justo duo dolores et ea rebum.</p>
              <p class="blog-page__item-date">01.01.2017</p></a></div>
          <div class="col blog-page__item"><a class="blog-page__item-bg bg-cover" href="#" style="background-image: url('img/content/about.jpg');">
              <p class="blog-page__item-title">Lorem ipsum dolor sit amet, et accusam et justo duo dolores et ea rebum.</p>
              <p class="blog-page__item-date">01.01.2017</p></a></div>
          <div class="col blog-page__item"><a class="blog-page__item-bg bg-cover" href="#" style="background-image: url('img/content/about.jpg');">
              <p class="blog-page__item-title">Lorem ipsum dolor sit amet, et accusam et justo duo dolores et ea rebum.</p>
              <p class="blog-page__item-date">01.01.2017</p></a></div>
          <div class="col blog-page__item"><a class="blog-page__item-bg bg-cover" href="#" style="background-image: url('img/content/about.jpg');">
              <p class="blog-page__item-title">Lorem ipsum dolor sit amet, et accusam et justo duo dolores et ea rebum.</p>
              <p class="blog-page__item-date">01.01.2017</p></a></div>
          <div class="col blog-page__item"><a class="blog-page__item-bg bg-cover" href="#" style="background-image: url('img/content/about.jpg');">
              <p class="blog-page__item-title">Lorem ipsum dolor sit amet, et accusam et justo duo dolores et ea rebum.</p>
              <p class="blog-page__item-date">01.01.2017</p></a></div>
          <div class="col blog-page__item"><a class="blog-page__item-bg bg-cover" href="#" style="background-image: url('img/content/about.jpg');">
              <p class="blog-page__item-title">Lorem ipsum dolor sit amet, et accusam et justo duo dolores et ea rebum.</p>
              <p class="blog-page__item-date">01.01.2017</p></a></div>
          <div class="col blog-page__more-btn"><a class="btn-red" href="#" id="blog-more-btn">Read more</a></div>
        </div>
      </div>
    </section>
    <!--footer-->
    <?php
      include 'footer.php';
    ?>
    <!--footer end-->