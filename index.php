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
                <?php
                    echo $submenu;
                ?>
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
    <!--main slider-->
    <section class="main-slider">
      <div class="container">
        <div class="row">
          <div class="col main-slider__sidebar">
          <?php
                include 'sidebarmenu-inc.php';
            ?>
            <?php echo $countrySel;?>
          </div>
          <div class="col main-slider__main-col">
            <h1 class="main-slider__title">We deliver what others promise</h1>
            <p class="main-slider__subtitle">Welcome to Rapid Moving & Storage Company</p>
            <form class="main-slider__form row" id="main-form">
              <div id="form-back-btn"></div>
              <div class="col inputs-container">
                <div class="inputs-container__wrapper">
                  <div class="form-step">
                    <div class="input-wrapper">
                      <input type="text" name="zipform"/><span class="input-placeholder">Move From</span>
                    </div>
                    <div class="input-wrapper">
                      <input type="text" name="zipto"/><span class="input-placeholder">Move To</span>
                    </div>
                  </div>
                  <div class="form-step">
                    <div class="select-wrapper">
                      <select class="form-select" name="size_of_move">
                        <option selected="selected" disabled="disabled">Size of Move</option>
                          <option value="Few items">Few items</option>
                          <option value="Studio">Studio</option>
                          <option value="1 Bedroom">1 Bedroom</option>
                          <option value="2 Bedroom">2 Bedroom</option>
                          <option value="3 Bedroom">3 Bedroom</option>
                          <option value="4 Bedroom">4 Bedroom</option>
                          <option value="House">House</option>
                          <option value="Office">Office</option>
                          <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="input-wrapper">
                      <input type="text" class="datepicker-inp" name="date"/><span class="input-placeholder">Moving Date</span>
                    </div>
                  </div>
                  <div class="form-step">
                    <div class="input-wrapper">
                      <input type="email" required="required" name="email"/><span class="input-placeholder">Email</span>
                    </div>
                    <div class="input-wrapper">
                      <input type="tel" required="required" name="phone"/><span class="input-placeholder">Phone</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col submit-container">
                <input type="text" value="home main form" name="form-id" hidden="hidden"/>
                <input class="btn-red" id="form-submit-btn" type="submit" value="Send"/>
                <div class="btn-red" id="form-next-btn">Next</div>
              </div>
            </form>
            <p class="main-slider__callback">Need Help With a Booking? Give Us a Call:<a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
          </div>
        </div>
      </div>
    </section>
    <!--main slider end-->
    <!--about us-->
    <?php
      include 'about-inc.php';
    ?>
    <!--about us end-->
    <!--prices-->
    <section class="prices">
      <div class="container">
        <h3 class="section-title">affordable prices</h3>
      </div>
      <ul class="prices__tabs">
        <li class="prices__tabs-item current"><a class="prices__tabs-btn" data-tab="1">Local Moving</a></li>
        <li class="prices__tabs-item"><a class="prices__tabs-btn" data-tab="2">Long Distance</a></li>
        <li class="prices__tabs-item"><a class="prices__tabs-btn" data-tab="3">Storage Service</a></li>
      </ul>
      <div class="container">
        <div class="select-wrapper red prices__mobile-tabs">
          <select>
            <option value="1" selected="selected">Local Moving</option>
            <option value="2">Long Distance</option>
            <option value="3">Storage Service</option>
          </select>
        </div>
        <div class="prices__tabs-content">
          <div class="row prices__tabs-content-block current" data-tab="1">
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">129<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">159<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
          </div>
          <div class="row prices__tabs-content-block" data-tab="2">
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
          </div>
          <div class="row prices__tabs-content-block" data-tab="3">
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p><a class="btn-red" href="#popup-form" data-lity="data-lity" data-order="2movers&amp;truck local">Book now</a>
              </div>
            </div>
          </div>
        </div>
        <p class="prices__info">We always have great offers and special promotions! Call now to get special moving deals:<br/><a class="btn-red transparent">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="23" viewBox="0 0 32 23">
                    <path fill="#F15946" fill-rule="nonzero" d="M29.108 17.878l-1.01-1.017c3.3-3.325 3.299-8.736-.001-12.06l1.01-1.019c3.857 3.885 3.857 10.21 0 14.096zM27.36 5.54L26.35 6.56c2.336 2.355 2.336 6.186 0 8.54l1.01 1.02c2.893-2.918 2.893-7.663 0-10.579zm-1.803 1.816l-1.01 1.018a3.49 3.49 0 0 1 0 4.909l1.01 1.018a4.942 4.942 0 0 0 0-6.945zM2.892 17.877l1.01-1.016C.602 13.536.603 8.125 3.903 4.8l-1.01-1.019c-3.857 3.885-3.857 10.21 0 14.096zm1.747-1.759L5.65 15.1c-2.336-2.353-2.336-6.185 0-8.54L4.639 5.54c-2.893 2.916-2.893 7.661 0 10.577zm1.802-1.815l1.01-1.018a3.492 3.492 0 0 1 .002-4.91l-1.01-1.017a4.942 4.942 0 0 0-.002 6.945zM22.63 1.553v19.895c0 .853-.694 1.552-1.542 1.552H10.913c-.847 0-1.541-.7-1.541-1.552V1.553C9.372.7 10.066 0 10.913 0h10.175c.848 0 1.542.7 1.542 1.553zm-8.444-.245c0 .103.083.188.187.188h3.254a.187.187 0 0 0 .187-.188.187.187 0 0 0-.187-.189h-3.254a.188.188 0 0 0-.187.189zm2.585 20.14A.774.774 0 0 0 16 20.67a.774.774 0 0 0-.77.777c0 .43.344.776.77.776a.774.774 0 0 0 .771-.775zm4.786-18.985H10.444v17.662h11.113V2.463z"/>
                </svg>
                <span>(888) 399-2822</span></a></p>
      </div>
    </section>
    <!--prices end-->
    <!--reviews-->
    <?php
      include 'reviews-inc.php';
    ?>
    <!--reviews end-->
    <!--partners-->
    <?php
      include 'partners-inc.php';
    ?>
    <!--partners end-->
    <!--we offer-->
    <section class="we-offer bg-main">
      <div class="container">
        <h3 class="section-title">what we offer</h3>
        <div class="we-offer__slider">
          <div class="we-offer__item row">
            <div class="col we-offer__item-img-container">
              <div class="we-offer__item-img bg-cover" style="background-image: url('img/offer/1.jpg');"></div>
            </div>
            <div class="col we-offer__item-info">
              <p class="we-offer__item-title">LOCAL MOVING SERVICES</p>
              <p class="we-offer__item-descr">Whether you’re moving down the street, across the country or to a new home or business building, we’re here to help with managing your relocation stress.</p>
            </div>
          </div>
          <div class="we-offer__item row">
            <div class="col we-offer__item-img-container">
              <div class="we-offer__item-img bg-cover" style="background-image: url('img/offer/2.jpg');"></div>
            </div>
            <div class="col we-offer__item-info">
              <p class="we-offer__item-title">LONG DISTANCE MOVING SERVICES</p>
              <p class="we-offer__item-descr">Rapid Moving & Storage Company long-distance division has the experience and knowledge it takes to handle the special demands of long-distance and interstate moves.</p>
            </div>
          </div>
          <div class="we-offer__item row">
            <div class="col we-offer__item-img-container">
              <div class="we-offer__item-img bg-cover" style="background-image: url('img/offer/3.jpg');"></div>
            </div>
            <div class="col we-offer__item-info">
              <p class="we-offer__item-title">WAREHOUSING AND STORAGE</p>
              <p class="we-offer__item-descr">We are a full-service moving and storage warehouse based in Los Angeles, California.</p>
            </div>
          </div>
          <div class="we-offer__item row">
            <div class="col we-offer__item-img-container">
              <div class="we-offer__item-img bg-cover" style="background-image: url('img/offer/4.jpg');"></div>
            </div>
            <div class="col we-offer__item-info">
              <p class="we-offer__item-title">FULL PACKING & UNPACKING SERVICES</p>
              <p class="we-offer__item-descr">Rapid movers are trained to expertly and safely pack every kind of item in your home or office. There are a number of ways you can arrange…</p>
            </div>
          </div>
        </div><a class="btn-red we-offer__btn" href="#popup-form" data-lity="data-lity">Get a free quote</a>
      </div>
    </section>
    <!--we offer end-->
    <!--main form-->
    <section class="main-form bg-cover">
      <div class="container">
        <h3 class="section-title">get a free quote</h3>
        <p class="section-subtitle">Send us an application and our manager contact you as soon as possible</p>
        <form method="POST">
          <div class="row">
            <div class="col main-form__col">
              <div class="input-wrapper">
                <input type="tel" name="phone"/><span class="input-placeholder">Phone *</span>
              </div>
              <div class="input-wrapper">
                <input type="email" name="email"/><span class="input-placeholder">Email *</span>
              </div>
              <div class="row main-form__row-sm">
                <div class="col main-form__col-sm">
                  <div class="input-wrapper">
                    <input type="text" name="zipform"/><span class="input-placeholder">Move From</span>
                  </div>
                </div>
                <div class="col main-form__col-sm">
                  <div class="input-wrapper">
                    <input type="text" name="zipto"/><span class="input-placeholder">Move To</span>
                  </div>
                </div>
                <div class="col main-form__col-sm">
                  <div class="select-wrapper">
                    <select class="form-select" name="size_of_move">
                      <option selected="selected" disabled="disabled">Size of Move</option>
                        <option value="Few items">Few items</option>
                        <option value="Studio">Studio</option>
                        <option value="1 Bedroom">1 Bedroom</option>
                        <option value="2 Bedroom">2 Bedroom</option>
                        <option value="3 Bedroom">3 Bedroom</option>
                        <option value="4 Bedroom">4 Bedroom</option>
                        <option value="House">House</option>
                        <option value="Office">Office</option>
                        <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col main-form__col-sm">
                  <div class="input-wrapper">
                    <input type="text" class="datepicker-inp" name="date"/><span class="input-placeholder">Moving Date</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col main-form__col textarea-col">
              <div class="input-wrapper">
                <textarea name="descr"></textarea><span class="input-placeholder">Your Message</span>
              </div>
            </div>
          </div>
        </form>
        <div class="main-form__submit-block">
          <input type="text" value="home footer form" name="form-id" hidden="hidden"/>
          <input class="btn-red" type="submit" value="Get a free quote"/>
          <p class="main-form__submit-warn"><img src="img/lock.svg" alt="lock"/><span>We don’t share your information</span></p>
        </div>
      </div>
    </section>
    <!--main form end-->
    <!--footer-->
    <?php
      include 'footer.php';
    ?>
    <!--footer end-->
    