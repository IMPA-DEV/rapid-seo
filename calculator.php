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
    <div class="calc-page__header-bg"></div>
    <!--internal page head end-->
    <section class="int-page-content bg-main">
      <div class="container">
        <h3 class="int-page-content__title">cubic feet calculator</h3>
        <p class="int-page-content__subtitle">Use the calculator below to add up the items you will be moving and get a full cubic feet and weight estimate</p>
      </div>
      <ul class="prices__tabs calc-tabs">
        <li class="prices__tabs-item current"><a class="prices__tabs-btn" data-tab="1">Sort by room</a></li>
        <li class="prices__tabs-item"><a class="prices__tabs-btn" data-tab="2">Sort by alphabet</a></li>
      </ul>
      <form method="POST">
        <div class="container calc">
          <div class="prices__tabs-content">
            <div class="row prices__tabs-content-block current" data-tab="1">
              <div class="calc__container" id="calc-room"></div>
            </div>
            <div class="row prices__tabs-content-block" data-tab="2">
              <div class="calc__container" id="calc-alph"></div>
            </div>
          </div>
          <div class="calc__results-block row calc__container">
            <div class="col calc__results-block-col">
              <p class="calc__results-block-title">Cubic Feet Total:</p>
              <input class="calc__results-block-val" type="text" value="0" disabled="disabled" name="vol-result" id="calc-vol-result"/>
            </div>
            <div class="col calc__results-block-col">
              <p class="calc__results-block-title">Total Weight:</p>
              <input class="calc__results-block-val" type="text" value="0" disabled="disabled" name="weight-result" id="calc-weight-result"/>
            </div>
            <div class="col calc__results-block-col"><button class="btn-red transparent" id="btn-calc-print" onclick="window.print(); return false;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22">
                        <g fill="#F15946" fill-rule="nonzero">
                            <path d="M17.735 4.51h-.568V3.25A3.263 3.263 0 0 0 13.902 0H7.047c-1.8 0-3.265 1.46-3.265 3.251v1.258h-.517C1.465 4.51 0 5.97 0 7.76v5.244a3.263 3.263 0 0 0 3.265 3.25h.513v4.123A1.63 1.63 0 0 0 5.408 22h10.124c.898 0 1.63-.73 1.63-1.623v-4.122h.573c1.8 0 3.265-1.46 3.265-3.251V7.76a3.263 3.263 0 0 0-3.265-3.25zM5.015 3.25c0-1.113.91-2.02 2.028-2.02h6.85c1.117 0 2.029.907 2.029 2.02v1.258H5.014V3.251zm10.911 17.135a.396.396 0 0 1-.394.392H5.408a.396.396 0 0 1-.394-.392v-6.798h10.912v6.798zm3.838-7.378c0 1.113-.912 2.02-2.029 2.02h-.568v-1.44h.815a.614.614 0 0 0 .619-.616.614.614 0 0 0-.619-.616H2.872a.614.614 0 0 0-.62.616c0 .342.276.616.62.616h.91v1.44h-.517a2.028 2.028 0 0 1-2.029-2.02V7.765c0-1.113.912-2.02 2.029-2.02h14.47c1.117 0 2.029.907 2.029 2.02v5.243z"/>
                            <path d="M5.61 17h7.78c.339 0 .61-.222.61-.5s-.271-.5-.61-.5H5.61c-.339 0-.61.222-.61.5s.276.5.61.5zM13.394 17H5.61c-.34 0-.611.222-.611.5s.271.5.61.5h7.78c.339 0 .61-.222.61-.5s-.271-.5-.606-.5zM18.256 7h-1.512c-.413 0-.744.222-.744.5s.33.5.744.5h1.512c.413 0 .744-.222.744-.5s-.33-.5-.744-.5z"/>
                        </g>
                    </svg>
                    <span>Print</span></button></div>
          </div>
          <h3 class="int-page-content__title">send your list for estimate</h3>
          <p class="int-page-content__subtitle">Use form below to send us your list for moving estimate. If you need assistance, please call us at <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a></p>
          <div class="contacts-page__form">
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
              <input type="text" value="calc form" name="form-id" hidden="hidden"/>
              <input type="text" value="1" name="active-tab" hidden="hidden" id="calc-active-tab"/>
              <input class="btn-red" type="submit" value="Send a list"/>
              <p class="main-form__submit-warn"><img src="img/lock.svg" alt="lock"/><span>We don’t share your information</span></p>
            </div>
          </div>
        </div>
      </form>
    </section>
    <!--print styles-->
    <link href="css/print.css" rel="stylesheet"/>
    <!--footer-->
    <?php
      include 'footer.php';
    ?>
    <!--footer end-->