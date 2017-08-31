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
                <?php echo $submenu;?>
              </li>
              <li><a href="/contact">Contact us</a></li>
            </ul>
          </div>
          <div class="col header__phone-col"><a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
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
    <section class="int-page-head bg-cover" style="background-image: url('img/faq-bg.jpg');">
      <div class="container">
        <h1 class="int-page-head__title">faq</h1>
        <div class="int-page-head__menu">
          <ul>
            <li><a href="/about">About us</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/calculator">Calculator</a></li>
            <li class="current"><a href="/faq">FAQ</a></li>
          </ul>
          <?php echo $countrySel;?>
        </div>
      </div>
    </section>
    <!--internal page head end-->
    <section class="int-page-content bg-main">
      <div class="container">
        <h3 class="int-page-content__title">answers to frequently asked questions</h3>
        <div class="faq-page">
          <div class="faq-page__item">
            <button class="faq-page__item-title">When should I contact Rapid Moving & Storage to plan my move?</button>
            <div class="faq-page__item-content">
              <p>The sooner you can contact our professional moving company to start planning your residential and commercial moves the better. In fact, we suggest that you contact our moving services approximately 4-6 weeks in advance to ensure that we are available and that everything is taken care of in time ahead of your moving date. More time may be required for commercial moves, moves that involve storage, interstate and international moves. The more time you give our crew to take care of the details for your local, interstate or international move, the better we will be able to accommodate any special requests or specific time frames.</p>
            </div>
          </div>
          <div class="faq-page__item">
            <button class="faq-page__item-title">When should I contact Rapid Moving & Storage to plan my move?</button>
            <div class="faq-page__item-content">
              <p>The sooner you can contact our professional moving company to start planning your residential and commercial moves the better. In fact, we suggest that you contact our moving services approximately 4-6 weeks in advance to ensure that we are available and that everything is taken care of in time ahead of your moving date. More time may be required for commercial moves, moves that involve storage, interstate and international moves. The more time you give our crew to take care of the details for your local, interstate or international move, the better we will be able to accommodate any special requests or specific time frames.</p>
            </div>
          </div>
          <div class="faq-page__item">
            <button class="faq-page__item-title">When should I contact Rapid Moving & Storage to plan my move?</button>
            <div class="faq-page__item-content">
              <p>The sooner you can contact our professional moving company to start planning your residential and commercial moves the better. In fact, we suggest that you contact our moving services approximately 4-6 weeks in advance to ensure that we are available and that everything is taken care of in time ahead of your moving date. More time may be required for commercial moves, moves that involve storage, interstate and international moves. The more time you give our crew to take care of the details for your local, interstate or international move, the better we will be able to accommodate any special requests or specific time frames.</p>
            </div>
          </div>
          <div class="faq-page__item">
            <button class="faq-page__item-title">When should I contact Rapid Moving & Storage to plan my move?</button>
            <div class="faq-page__item-content">
              <p>The sooner you can contact our professional moving company to start planning your residential and commercial moves the better. In fact, we suggest that you contact our moving services approximately 4-6 weeks in advance to ensure that we are available and that everything is taken care of in time ahead of your moving date. More time may be required for commercial moves, moves that involve storage, interstate and international moves. The more time you give our crew to take care of the details for your local, interstate or international move, the better we will be able to accommodate any special requests or specific time frames.</p>
            </div>
          </div>
          <div class="faq-page__item">
            <button class="faq-page__item-title">When should I contact Rapid Moving & Storage to plan my move?</button>
            <div class="faq-page__item-content">
              <p>The sooner you can contact our professional moving company to start planning your residential and commercial moves the better. In fact, we suggest that you contact our moving services approximately 4-6 weeks in advance to ensure that we are available and that everything is taken care of in time ahead of your moving date. More time may be required for commercial moves, moves that involve storage, interstate and international moves. The more time you give our crew to take care of the details for your local, interstate or international move, the better we will be able to accommodate any special requests or specific time frames.</p>
            </div>
          </div>
          <div class="faq-page__item">
            <button class="faq-page__item-title">When should I contact Rapid Moving & Storage to plan my move?</button>
            <div class="faq-page__item-content">
              <p>The sooner you can contact our professional moving company to start planning your residential and commercial moves the better. In fact, we suggest that you contact our moving services approximately 4-6 weeks in advance to ensure that we are available and that everything is taken care of in time ahead of your moving date. More time may be required for commercial moves, moves that involve storage, interstate and international moves. The more time you give our crew to take care of the details for your local, interstate or international move, the better we will be able to accommodate any special requests or specific time frames.</p>
            </div>
          </div>
          <div class="faq-page__item">
            <button class="faq-page__item-title">When should I contact Rapid Moving & Storage to plan my move?</button>
            <div class="faq-page__item-content">
              <p>The sooner you can contact our professional moving company to start planning your residential and commercial moves the better. In fact, we suggest that you contact our moving services approximately 4-6 weeks in advance to ensure that we are available and that everything is taken care of in time ahead of your moving date. More time may be required for commercial moves, moves that involve storage, interstate and international moves. The more time you give our crew to take care of the details for your local, interstate or international move, the better we will be able to accommodate any special requests or specific time frames.</p>
            </div>
          </div>
        </div>
        <div class="contacts-page__form">
          <p class="contacts-page__form-title">If You Didn't Find Your Answer In Our FAQs, Please Feel Free To Contact Us Using The Form Below Or By Calling<a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
          <form method="POST">
            <div class="row">
              <div class="col contacts-page__form-col">
                <div class="input-wrapper black">
                  <input type="tel"/><span class="input-placeholder" require>Phone *</span>
                </div>
                <div class="input-wrapper black">
                  <input type="email"/><span class="input-placeholder" require>Email *</span>
                </div>
              </div>
              <div class="col contacts-page__form-col textarea-col">
                <div class="input-wrapper black">
                  <textarea></textarea><span class="input-placeholder">Your Question</span>
                </div>
              </div>
            </div>
            <div class="center-block">
              <input type="text" value="faq main form" name="form-id" hidden="hidden"/>
              <input class="btn-red" type="submit" value="Send a question"/>
              <p class="main-form__submit-warn"><img src="img/lock.svg" alt="lock"/><span>We don’t share your information</span></p>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!--footer-->
    <?php
      include 'footer.php';
    ?>
    <!--footer end-->
    