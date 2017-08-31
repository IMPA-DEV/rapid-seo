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
              <li class="current"><a href="/storage">Storage services</a></li>
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
    <!--main slider-->
    <section class="main-slider">
      <div class="container">
        <div class="row">
          <div class="col main-slider__sidebar">
            <ul class="main-slider__sidebar-menu">
              <li class="main-slider__sidebar-menu-item"><a href="#">About us</a></li>
              <li class="main-slider__sidebar-menu-item"><a href="#">Blog</a></li>
              <li class="main-slider__sidebar-menu-item"><a href="#">Calculator</a></li>
              <li class="main-slider__sidebar-menu-item"><a href="#">FAQ</a></li>
            </ul>
            <div class="country-selector">
              <select>
                <option selected="selected">San Diego</option>
                <option>San Fracisco</option>
                <option>NY</option>
              </select>
            </div>
          </div>
          <div class="col main-slider__main-col">
            <h1 class="main-slider__title">storage services</h1>
            <p class="main-slider__subtitle">Welcome to Rapid Moving & Storage Company</p>
            <div class="main-slider__location-popup">
              <div class="input-wrapper">
                <input type="text" id="loc-popup"/><span class="input-placeholder">Your Location</span>
              </div>
              <a class="btn-red" id="open-loc-popup" href="#popup-form" data-lity="data-lity">Get a free quote</a>
            </div>
            <p class="main-slider__callback">Need Help With a Booking? Give Us a Call: <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
          </div>
        </div>
      </div>
    </section>
    <!--main slider end-->
    <!--how it works-->
    <section class="how-works bg-main storage">
      <div class="container">
        <h3 class="section-title">how it works</h3>
        <div class="row">
          <div class="col how-works__item">
            <div class="how-works__item-img bg-contain" style="background-image: url('img/works/sofa.svg');"></div>
            <p class="how-works__item-title">We pick up your Stuff</p>
          </div>
          <div class="col how-works__item">
            <div class="how-works__item-img bg-contain" style="background-image: url('img/works/store.svg');"></div>
            <p class="how-works__item-title">We take it to our Storage facility</p>
          </div>
          <div class="col how-works__item">
            <div class="how-works__item-img bg-contain" style="background-image: url('img/works/hand.svg');"></div>
            <p class="how-works__item-title">We bring it back Whenever you want</p>
          </div>
        </div><a class="btn-red" href="#popup-form" data-lity>Get a free quote</a>
      </div>
    </section>
    <!--how it works end-->
    <!--prices-->
    <section class="prices">
      <div class="container">
        <h3 class="section-title">affordable prices</h3>
      </div>
      <div class="container">
        <div class="prices__tabs-content">
          <div class="row prices__tabs-content-block current" data-tab="1">
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">studio<span class="volume">220 ft<sup>3</sup><span>storage</span></span></p>
                <p class="prices__tabs-content-item-price">99<span>/hour</span></p>
                <div class="prices__tabs-content-selector">
                  <input type="radio" name="plan1" value="6 month" id="plan1-1" hidden="hidden"/>
                  <label class="prices__tabs-content-selector-label" for="plan1-1">6-month Minimum</label>
                  <input type="radio" name="plan1" value="3 month" id="plan1-2" hidden="hidden"/>
                  <label class="prices__tabs-content-selector-label" for="plan1-2">3-month Minimum</label>
                </div><a class="btn-red" href="#" data-lity="data-lity" data-order="2movers&amp;truck local">select plan</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">1 bedroom<span class="volume">220 ft<sup>3</sup><span>storage</span></span></p>
                <p class="prices__tabs-content-item-price">129<span>/hour</span></p>
                <div class="prices__tabs-content-selector">
                  <input type="radio" name="plan2" value="6 month" id="plan2-1" hidden="hidden"/>
                  <label class="prices__tabs-content-selector-label" for="plan2-1">6-month Minimum</label>
                  <input type="radio" name="plan2" value="3 month" id="plan2-2" hidden="hidden"/>
                  <label class="prices__tabs-content-selector-label" for="plan2-2">3-month Minimum</label>
                </div><a class="btn-red" href="#" data-lity="data-lity" data-order="2movers&amp;truck local">select plan</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 bedroom<span class="volume">220 ft<sup>3</sup><span>storage</span></span></p>
                <p class="prices__tabs-content-item-price">159<span>/hour</span></p>
                <div class="prices__tabs-content-selector">
                  <input type="radio" name="plan3" value="6 month" id="plan3-1" hidden="hidden"/>
                  <label class="prices__tabs-content-selector-label" for="plan3-1">6-month Minimum</label>
                  <input type="radio" name="plan3" value="3 month" id="plan3-2" hidden="hidden"/>
                  <label class="prices__tabs-content-selector-label" for="plan3-2">3-month Minimum</label>
                </div><a class="btn-red" href="#" data-lity="data-lity" data-order="2movers&amp;truck local">select plan</a>
              </div>
            </div>
          </div>
        </div>
        <p class="prices__info">Need a larger space? Click here to see more offers<br/><a class="btn-red transparent">Large Space</a></p>
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
    <!--form small-->
    <section class="form-small">
      <div class="container">
        <h3 class="section-title">Get an instant price quote</h3>
        <form method="POST">
          <div class="row">
            <div class="col">
              <div class="input-wrapper">
                <input type="tel"/><span class="input-placeholder">Phone *</span>
              </div>
            </div>
            <div class="col">
              <div class="input-wrapper">
                <input type="email"/><span class="input-placeholder">Email *</span>
              </div>
            </div>
            <div class="col">
              <input type="text" value="storage footer form" name="form-id" hidden="hidden"/>
              <input class="btn-red" type="submit" value="Get a free quote"/>
              <p class="main-form__submit-warn"><img src="img/lock.svg" alt="lock"/><span>We don’t share your information</span></p>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!--form small end-->
    <!--footer-->
    <?php
      include 'footer.php';
    ?>
    <!--footer end-->