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
            <div class="col footer__contacts">
              <a class="footer__mail" href="mailto:<?php echo $email;?>"><img src="img/envelope.svg" alt="envelope"/><span><?php echo $email;?></span></a>
              <a class="footer__address" href="#"><img src="img/pin-w.svg" alt="pin"/><span><?php echo $address;?></span></a>
              <a class="footer__phone" href="tel:<?php echo $phone;?>"><img src="img/phone.svg" alt="phone"/><span><?php echo $phone;?></span></a>
            </div>
        </div>
    </div>
</footer>
<!--mobile menu-->
<div id="mobile-menu">
      <div class="container">
        <div class="bg-contain" id="close-menu"></div><a class="mobile-menu__phone" href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
        <div class="header__main-nav">
          <ul>
            <li><a href="/local">Local moving</a></li>
            <li><a href="/long">Long distance</a></li>
            <li><a href="/storage">Storage services</a></li>
            <li class="has-submenu"><a href="#">Other services</a>
                <?php echo $submenu;?>
            </li>
            <li><a href="/contact">Contact us</a></li>
          </ul>
          <?php echo $countrySel;?>
        </div>
        <div class="mobile-menu__bottom-menu">
          <ul>
            <li><a href="/about">About us</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/calculator">Calculator</a></li>
            <li><a href="/faq">FAQ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--mobile menu end--><a href="#popup-success" data-lity="data-lity" id="open-success"></a>
    <div class="popup-container lity-hide" id="popup-success">
      <div class="popup-close bg-contain"></div>
      <p class="popup-title">Thank you!</p>
      <p class="popup-subtitle">Our manager contact you as soon as possible</p><img class="popup-success-img" src="img/user.svg" alt="user"/>
    </div>
    <div class="popup-container lity-hide" id="popup-form">
      <div class="popup-close bg-contain"></div>
      <p class="popup-title">get a free quote</p>
      <p class="popup-subtitle">Send us an application and our manager contact you as soon as possible</p>
      <form method="POST">
        <div class="row">
          <div class="col main-form__col">
            <div class="input-wrapper black">
              <input type="tel"/><span class="input-placeholder">Phone *</span>
            </div>
          </div>
          <div class="col main-form__col">
            <div class="input-wrapper black">
              <input type="email"/><span class="input-placeholder">Email *</span>
            </div>
          </div>
          <div class="col main-form__col-sm">
            <div class="input-wrapper black">
              <input type="text"/><span class="input-placeholder">Move From</span>
            </div>
          </div>
          <div class="col main-form__col-sm">
            <div class="input-wrapper black">
              <input type="text"/><span class="input-placeholder">Move To</span>
            </div>
          </div>
        </div>
        <div class="main-form__col textarea-col">
          <div class="input-wrapper black">
            <textarea></textarea><span class="input-placeholder">Your Message</span>
          </div>
        </div>
      </form>
      <div class="main-form__submit-block">
        <input type="text" value="no info" name="add-info" hidden="hidden" id="popup-add-info"/>
        <input type="text" value="popup form" name="form-id" hidden="hidden"/>
        <input class="btn-red" type="submit" value="Get a free quote"/>
        <p class="main-form__submit-warn"><img src="img/lock.svg" alt="lock"/><span>We don’t share your information</span></p>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
  </body>
</html>