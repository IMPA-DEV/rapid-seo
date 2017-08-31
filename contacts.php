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
              <li class="current"><a href="/contact">Contact us</a></li>
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
    <section class="int-page-head bg-cover" style="background-image: url('img/contacts-bg.jpg');">
      <div class="container">
        <h1 class="int-page-head__title">Contact us</h1>
        <div class="int-page-head__menu">
          <ul>
            <li><a href="/about">About us</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/calculator">Calculator</a></li>
            <li><a href="/faq">FAQ</a></li>
          </ul>
          <?php echo $countrySel;?>
        </div>
      </div>
    </section>
    <!--internal page head end-->
    <section class="int-page-content bg-main">
      <div class="container">
        <h2 class="int-page-content__title">Contact us</h2>
        <p class="int-page-content__subtitle">Please use the form to contact us online. If you need immediate assistance, please call us at <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
        <div class="contacts-page__form">
          <form method="POST">
            <div class="row">
              <div class="col contacts-page__form-col">
                <div class="input-wrapper black">
                  <input type="tel"/><span class="input-placeholder">Phone *</span>
                </div>
                <div class="input-wrapper black">
                  <input type="email"/><span class="input-placeholder">Email *</span>
                </div>
              </div>
              <div class="col contacts-page__form-col textarea-col">
                <div class="input-wrapper black">
                  <textarea></textarea><span class="input-placeholder">Your Question</span>
                </div>
              </div>
            </div>
            <div class="center-block">
              <input type="text" value="contacts form" name="form-id" hidden="hidden"/>
              <input class="btn-red" type="submit" value="Send a question"/>
              <p class="main-form__submit-warn"><img src="img/lock.svg" alt="lock"/><span>We don’t share your information</span></p>
            </div>
          </form>
        </div>
      </div>
      <div class="contacts-page__contacts-block">
        <div class="container">
          <div class="row">
            <div class="col contacts-block__info-col">
              <p class="contacts-block__title">address:</p><a href="#"><?php echo $address;?></a>
              <p class="contacts-block__title">phone:</p><a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
              <p class="contacts-block__title">email:</p><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
            </div>
          </div>
        </div>
        <div class="contacts-page__map"></div>
      </div>
    </section>
    <!--footer-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col footer__logo"><a href="/"><img src="img/logo.svg" alt="rapid"/></a></div>
          <div class="col footer__menu">
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Calculator</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col footer__copyright"><span>Copyrights ©2013-2017.</span></div>
          <div class="col footer__contacts"><a class="footer__mail" href="mailto:info@Rapid-Moving-Company.com"><img src="img/envelope.svg" alt="envelope"/><span>info@Rapid-Moving-Company.com</span></a><a class="footer__address" href="#"><img src="img/pin-w.svg" alt="pin"/><span>11519 Culver Blvd Los Angeles CA 90066</span></a><a class="footer__phone" href="tel:(888) 399-2822"><img src="img/phone.svg" alt="phone"/><span>(888) 399-2822</span></a></div>
        </div>
      </div>
    </footer>
    <!--footer end-->
    <!--mobile menu-->
    <div id="mobile-menu">
      <div class="container">
        <div class="bg-contain" id="close-menu"></div><a class="mobile-menu__phone" href="tel:(888)765-9878">(888)765-9878</a>
        <div class="header__main-nav">
          <ul>
            <li class="current"><a href="#">Local moving</a></li>
            <li><a href="#">Long distance</a></li>
            <li><a href="#">Storage services</a></li>
            <li class="has-submenu"><a href="#">Other services</a>
              <ul>
                <li><a href="#">Other services</a></li>
                <li><a href="#">Other services</a></li>
                <li><a href="#">Other services</a></li>
                <li><a href="#">Other services</a></li>
                <li><a href="#">Other services</a></li>
                <li><a href="#">Other services</a></li>
                <li><a href="#">Other services</a></li>
              </ul>
            </li>
            <li><a href="#">Contact us</a></li>
          </ul>
          <div class="country-selector">
            <select>
              <option selected="selected">San Diego</option>
              <option>San Fracisco</option>
              <option>NY</option>
            </select>
          </div>
        </div>
        <div class="mobile-menu__bottom-menu">
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Calculator</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--mobile menu end-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>