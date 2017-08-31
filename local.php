<?php
include 'variables.php';
?>
<?php
  $head = include 'head.php';
?>
    <!--header-->
    <header class="header">
      <div class="container">
        <div class="row">
          <div class="col header__logo"><a href="/"><img src="img/logo.svg"/></a></div>
          <div class="col header__main-nav">
            <ul>
              <li class="current"><a href="/local">Local moving</a></li>
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
                      <input type="text"/><span class="input-placeholder">Moving Date</span>
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
                <input type="text" value="local main form" name="form-id" hidden="hidden"/>
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
      <div class="container">
        <div class="prices__tabs-content">
          <div class="row prices__tabs-content-block current" data-tab="1">
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-text">The best way to move a studio or one bedroom</p><a class="btn-red" href="#" data-lity="data-lity" data-order="2movers&amp;truck local">get a quote</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-text">The best way to move a two or three bedroom</p><a class="btn-red" href="#" data-lity="data-lity" data-order="2movers&amp;truck local">get a quote</a>
              </div>
            </div>
            <div class="col prices__tabs-content-item">
              <div class="prices__tabs-content-item-container">
                <p class="prices__tabs-content-item-title">2 movers&truck</p>
                <p class="prices__tabs-content-item-text">The best way to move a big house or office</p><a class="btn-red" href="#" data-lity="data-lity" data-order="2movers&amp;truck local">get a quote</a>
              </div>
            </div>
          </div>
        </div>
        <p class="prices__info">We always have great offers and special promotions! Call now to get special moving deals:<br/><a href="tel:<?echo $phone;?>" class="btn-red transparent"><img src="img/ring.svg"/><span><?echo $phone;?></span></a></p>
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
    <!--how it works-->
    <section class="how-works bg-main">
      <div class="container">
        <h3 class="section-title">how it works</h3>
        <div class="row how-works__slider">
          <div class="col how-works__item">
            <div class="how-works__item-img bg-contain" style="background-image: url('img/works/list.svg');"></div>
            <p class="how-works__item-title">Request a Quote</p>
          </div>
          <div class="col how-works__item">
            <div class="how-works__item-img bg-contain" style="background-image: url('img/works/get.svg');"></div>
            <p class="how-works__item-title">Get your Quote</p>
          </div>
          <div class="col how-works__item">
            <div class="how-works__item-img bg-contain" style="background-image: url('img/works/calend.svg');"></div>
            <p class="how-works__item-title">Schedule an Estimate</p>
          </div>
          <div class="col how-works__item">
            <div class="how-works__item-img bg-contain" style="background-image: url('img/works/plan.svg');"></div>
            <p class="how-works__item-title">Plan your Move</p>
          </div>
        </div><a class="btn-red" href="#popup-form" data-lity>Get a free quote</a>
      </div>
    </section>
    <!--how it works end-->
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
              <input type="text" value="local footer form" name="form-id" hidden="hidden"/>
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
    