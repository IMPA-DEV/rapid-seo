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
    <!--main slider-->
    <section class="main-slider">
      <div class="container">
        <div class="row">
          <div class="col main-slider__sidebar">
          <?php
                include 'sidebarmenu-inc.php';
            ?>
            <?echo $countrySel;?>
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
                      <input type="text"/><span class="input-placeholder">Move From</span>
                    </div>
                    <div class="input-wrapper">
                      <input type="text"/><span class="input-placeholder">Move To</span>
                    </div>
                  </div>
                  <div class="form-step">
                    <div class="select-wrapper">
                      <select class="form-select">
                        <option selected="selected" disabled="disabled">Size of Move</option>
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                    <div class="input-wrapper">
                      <input type="text"/ class="datepicker-inp"><span class="input-placeholder">Moving Date</span>
                    </div>
                  </div>
                  <div class="form-step">
                    <div class="input-wrapper">
                      <input type="email" required="required"/><span class="input-placeholder">Email</span>
                    </div>
                    <div class="input-wrapper">
                      <input type="tel" required="required"/><span class="input-placeholder">Phone</span>
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
            <p class="main-slider__callback">Need Help With a Booking? Give Us a Call:<a href="tel:<?echo $phone;?>"><?echo $phone;?></a></p>
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
        <p class="prices__info">We always have great offers and special promotions! Call now to get special moving deals:<br/><a class="btn-red transparent"><img src="img/ring.svg"/><span>(888) 399-2822</span></a></p>
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
                <input type="tel"/><span class="input-placeholder">Phone *</span>
              </div>
              <div class="input-wrapper">
                <input type="email"/><span class="input-placeholder">Email *</span>
              </div>
              <div class="row main-form__row-sm">
                <div class="col main-form__col-sm">
                  <div class="input-wrapper">
                    <input type="text"/><span class="input-placeholder">Move From</span>
                  </div>
                </div>
                <div class="col main-form__col-sm">
                  <div class="input-wrapper">
                    <input type="text"/><span class="input-placeholder">Move To</span>
                  </div>
                </div>
                <div class="col main-form__col-sm">
                  <div class="select-wrapper">
                    <select class="form-select">
                      <option selected="selected" disabled="disabled">Size of Move</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
                  </div>
                </div>
                <div class="col main-form__col-sm">
                  <div class="input-wrapper">
                    <input type="text" class="datepicker-inp"/><span class="input-placeholder">Moving Date</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col main-form__col textarea-col">
              <div class="input-wrapper">
                <textarea></textarea><span class="input-placeholder">Your Message</span>
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
    