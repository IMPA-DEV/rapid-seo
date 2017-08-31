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
              <li class="current"><a href="/long">Long distance</a></li>
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
                <input type="text" value="long main form" name="form-id" hidden="hidden"/>
                <input class="btn-red" id="form-submit-btn" type="submit" value="Send"/>
                <div class="btn-red" id="form-next-btn">Next</div>
              </div>
            </form>
            <p class="main-slider__callback">Need Help With a Booking? Give Us a Call: <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
          </div>
        </div>
      </div>
    </section>
    <!--main slider end-->
    <!--about us-->
    <section class="about-us">
      <div class="container">
        <h3 class="section-title">About us</h3>
        <p class="section-subtitle">If you’re searching for Los Angeles best moving company, the team at Rapid Moving Company is ready to serve you. For more than a decade, we’ve been a resource for people who need Los Angeles local movers and Los Angeles long distance movers. Additionally, we provide help in other locations along the Los Angeles county, including San Diego, San Francisco, Las Vegas etc.</p>
        <div class="row">
          <div class="col about-us__item">
            <div class="about-us__item-img" style="background-image: url('img/about/shield.svg');"></div>
            <p class="about-us__item-title">MOVING PROTECTION</p>
            <p class="about-us__item-descr">Whether you’re moving down the street, across the country or to a new home or business building, we’re here to help with managing your relocation stress.</p>
          </div>
          <div class="col about-us__item">
            <div class="about-us__item-img" style="background-image: url('img/about/planning.svg');"></div>
            <p class="about-us__item-title">PROFESSIONAL PLANING</p>
            <p class="about-us__item-descr">We’ll create a customized move plan tailored to your needs and take into account packing, parking, temporary storage, elevator access and more.</p>
          </div>
          <div class="col about-us__item">
            <div class="about-us__item-img" style="background-image: url('img/about/price.svg');"></div>
            <p class="about-us__item-title">HONEST PRICES</p>
            <p class="about-us__item-descr">After an inventory of your home or office, we provide a straightforward, all-inclusive rate that will not be affected by external factors - guaranteed.</p>
          </div>
        </div>
      </div>
    </section>
    <!--about us end-->
    <!--main form-->
    <section class="main-form bg-cover">
      <div class="container">
        <h3 class="section-title">get a free quote</h3>
        <p class="section-subtitle">Send us an application and our manager contact you as soon as possible</p>
        <form method="POST">
          <div class="row">
            <div class="col main-form__col">
              <div class="input-wrapper">
                <input type="tel"/><span class="input-placeholder" require>Phone *</span>
              </div>
              <div class="input-wrapper">
                <input type="email"/><span class="input-placeholder" require>Email *</span>
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
                    <input type="text"/><span class="input-placeholder">Moving Date</span>
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
          <input type="text" value="long middle form" name="form-id" hidden="hidden"/>
          <input class="btn-red" type="submit" value="Get a free quote"/>
          <p class="main-form__submit-warn"><img src="img/lock.svg" alt="lock"/><span>We don’t share your information</span></p>
        </div>
      </div>
    </section>
    <!--main form end-->
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
    <!--moving calculator link-->
    <section class="mov-calc">
      <div class="container">
        <div class="row">
          <div class="col mov-calc__content">
            <h3 class="section-title">moving weight calculator</h3>
            <p class="mov-calc__descr">Estimate Your Shipment Before You Move</p><a class="btn-red" href="/calculator"> Calculate</a>
          </div>
          <div class="col mov-calc__image"><img src="img/calc.png" alt="calc"/></div>
        </div>
      </div>
    </section>
    <!--moving calculator link end-->
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
                <input type="tel"/><span class="input-placeholder" require>Phone *</span>
              </div>
            </div>
            <div class="col">
              <div class="input-wrapper">
                <input type="email"/><span class="input-placeholder" require>Email *</span>
              </div>
            </div>
            <div class="col">
              <input class="btn-red" type="submit" value="Get a free quote"/>
              <input type="text" value="long footer form" name="form-id" hidden="hidden"/>
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
    