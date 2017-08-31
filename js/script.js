$( document ).ready(function() {
    var currentClass = 'current';

    //main form
    var formBack = $('#form-back-btn');
    var formNext = $('#form-next-btn');
    var formSubmit = $('#form-submit-btn');
    var inpWrap = $('#main-form .inputs-container__wrapper');
    var formPosition = 1;
    $("#main-form").submit(function() {
        var thisForm = $(this);
        var form_data = thisForm.serialize();
        $.ajax({
            type: "POST",
            url: "send.php",
            data: form_data,
            success: function() {
                alert("Ваше сообщение отпрвлено!");
            }, error: function() {

                alert("err");
            }
        });
    });
    formBack.click(function () {
        if (formPosition > 1) {
            formPosition -= 1;
            formMoving(formPosition);
        }
        formNext.show();
        formSubmit.hide();
    });
    formNext.click(function () {
        if (formPosition < 3) {
            formPosition += 1;
            formMoving(formPosition);
        }
        if (formPosition == 3) {
            formNext.hide();
            formSubmit.show();
        } else {
            formNext.show();
            formSubmit.hide();
        }
    });

    function formMoving(formPosition) {
        inpWrap.css('transform','translateX(-' + (formPosition - 1) / 3 * 100 + '%)');
        if (formPosition > 1) {
            formBack.addClass('visible');
        } else {
            formBack.removeClass('visible')
        }
    }
    //tabs
    var calcTabEl = $('#calc-active-tab');
    $('.prices__tabs-btn').on('click',function () {
        var thisEl = $(this);
        var tabNum = thisEl.attr('data-tab');
        thisEl.parent().addClass(currentClass).siblings().removeClass(currentClass);
        thisEl.closest('.prices__tabs').next().find('.prices__tabs-content').children('[data-tab="'+ tabNum +'"]').addClass(currentClass).siblings().removeClass(currentClass);
        if (calcTabEl) {
            calcTabEl.val(tabNum);
            totalCalcResult = 0;
            writeCalcResults(totalCalcResult);
            $('.calc__part-content input[type="number"]').val(totalCalcResult).attr('data-prev',totalCalcResult);
            $('.calc__part-content .result input[type="text"]').val(totalCalcResult);
        }
    })
    $('.prices__mobile-tabs select').on('change',function () {
        var thisEl = $(this);
        var tabNum = thisEl.val();
        thisEl.parent().next().children('[data-tab="'+ tabNum +'"]').addClass(currentClass).siblings().removeClass(currentClass);
    });
    //not empty inputs
    $('.input-wrapper input,.input-wrapper textarea').on('blur',function(){
        var thisInp = $(this);
        if (thisInp.val() != '') {
            thisInp.addClass('not-empty');
        } else {
            thisInp.removeClass('not-empty');
        }
        if (thisInp.hasClass('datepicker-inp')) {
            thisInp.addClass('not-empty');
        }
    });
    //review slider
    $('.reviews__slider').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3,
        speed: 500,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: true,
                    slidesToShow: 1
                }
            }
        ]
    });
    //offer slider
    $('.we-offer__slider').slick({
        slidesToShow: 1,
        speed: 500,
        arrows: false,
        responsive: [
            {
                breakpoint: 9999,
                settings: 'unslick'
            },
            {
                breakpoint: 768,
                settings: {
                    dots: true,
                }
            }
        ]
    });
    //how works slider
    $('.how-works__slider').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        speed: 500,
        arrows: false,
        responsive: [
            {
                breakpoint: 9999,
                settings: 'unslick'
            },
            {
                breakpoint: 768,
                settings: {
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                }
            }
        ]
    });
    //about us slider
    $('.about-us__slider').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        speed: 500,
        arrows: false,
        responsive: [
            {
                breakpoint: 9999,
                settings: 'unslick'
            },
            {
                breakpoint: 768,
                settings: {
                    dots: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                }
            }
        ]
    });
    //mobile menu
    var menuEl = $('#mobile-menu');
    var menuBtn = $('#menu-btn');
    var menuClose = $('#close-menu');
    menuBtn.on('click',function () {
        menuBtn.addClass('active');
        menuEl.addClass('active');
    });
    menuClose.on('click',function () {
        menuEl.removeClass('active');
        menuBtn.removeClass('active');
    });
    menuEl.find('.has-submenu').on('click',function(){
        $(this).children('ul').fadeToggle(300);
        return false;
    });
    //faq accordion
    $('.faq-page__item-title').on('click',function () {
        $(this).toggleClass('active').next('.faq-page__item-content').stop().slideToggle(500);
    });
    //blog more btn
    $('#blog-more-btn').on('click',function(){
        $(this).hide().parent().siblings('.blog-page__item').show();
    });
    //close popup
    $('.popup-close').on('click',function () {
        $('.lity-close').click();
        $('#popup-add-info').val('no info');
    })




    //calc render
    var calcContainer = $('#calc-room');
    var calcContainerAlph = $('#calc-alph');
    var itemsCount = 0;
    $.getJSON('js/calc.json', function(data) {
        calcRender(data,1);
        calcRenderAlph(data,2);
    });

    var calcVolResEl = $('#calc-vol-result');
    var calcWeightResEl = $('#calc-weight-result');
    function writeCalcResults(totalRes) {
        calcVolResEl.val(totalRes);
        var totalWeight = totalRes * 7;
        calcWeightResEl.val(totalWeight);
    }
    //calc render
    function calcRender(data,tabNum) {
        var output='';
        itemsCount = 0;
        for (var i in data.items) {
            var goodsListArr = [];
            for (var j in data.items[i].goods) {
                goodsListArr[goodsListArr.length] = data.items[i].goods[j];
            }
            //sorting before output
            goodsListArr.sort(sortGoodsName);
            output += createCat(data.items[i].category, goodsListArr,tabNum);
        }
        calcContainer.html(output);
    }
    //calc render alph
    function calcRenderAlph(data,tabNum) {
        var output='';
        var fullGoodsArr = [];
        itemsCount = 0;
        for (var i in data.items) {
            for (var j in data.items[i].goods) {
                fullGoodsArr[fullGoodsArr.length] = data.items[i].goods[j];
            }
        }
        fullGoodsArr.sort(sortGoodsName);
        var alphArr = [];
        var firstLetter = '';
        var letterCount = 0;
        var arrCount = 0;
        for (var i = 0; i < fullGoodsArr.length; i++) {
            firstLetter = fullGoodsArr[i].brand[0];
            if (i == 0) {
                prevLetter = firstLetter;
                alphArr[0] = [];
            }
            if (firstLetter.toLowerCase() === prevLetter.toLowerCase()) {
                alphArr[letterCount][arrCount] = fullGoodsArr[i];
                arrCount++;
            } else {
                arrCount = 0;
                letterCount++;
                alphArr[letterCount] = [];
                alphArr[letterCount][arrCount] = fullGoodsArr[i];
                arrCount++;
            }
            prevLetter = firstLetter;
        }
        for (var i = 0; i < alphArr.length; i++) {
            var catName = alphArr[i][0].brand[0];
            output += createCat(catName,alphArr[i],tabNum);
        }
        calcContainerAlph.html(output);
    }
    //calc categories
    function createCat(name,itemsList,tabNum) {
        var catItemsOutput = itemsGroup(itemsList,tabNum);
        return  "<div class='calc__part'>\
                    <button class='calc__part-btn'>"
                    + name
                    + "</button>\
                    <table class='calc__part-content'>\
                    <tr>\
                        <th>Article</th>\
                        <th>Quantity</th>\
                        <th>Cubic Feet</th>\
                        <th>QTY x CFT</th>\
                    </tr>" + catItemsOutput + "</table></div>"
    };
    //calc items group
    function itemsGroup(itemsList,tabNum) {
        var output = '';
        for (var i = 0; i < itemsList.length; i++ ) {
            output += calcItem(itemsList[i].brand , itemsList[i].vol,tabNum);

        }
        return output;
    };

    //calc item
    function calcItem(name,vol,tabNum) {
        itemsCount++;
        return "<tr>\
                    <td><input value='" + name + "' name='"+ tabNum +"item" + itemsCount + "' type='text' disabled></td>\
                    <td><input type=\"number\" min=\"0\" value=\"0\" data-prev='0' data-vol='" + vol + "' name='"+ tabNum + "item" + itemsCount + "'></td>\
                    <td><input value='" + vol + "' name='"+ tabNum +"item" + itemsCount + "' type='text' disabled></td>\
                    <td class='result'><input value='0' name='"+ tabNum +"item" + itemsCount + "' type='text' disabled></td>\
                </tr>"
    };
    //sorting by name
    function sortGoodsName(A, B) {
        A = A.brand.toLowerCase();
        B = B.brand.toLowerCase();
        if (A < B) return -1;
        if (A > B) return 1;
        return 0;
    }

    //change calc
    //calc accordion
    $(document).on('click','.calc__part-btn',function () {
        $(this).toggleClass('active').next('.calc__part-content').stop().fadeToggle(300);
        return false;
    });
    //calc input change
    var totalCalcResult = 0;
    $(document).on('change','.calc__part-content input[type="number"]',function () {
        var thisEl = $(this);
        var thisVal = +thisEl.val();
        var thisVol = +thisEl.attr('data-vol');
        var result = thisVal * thisVol;
        var prevResult = +thisEl.attr('data-prev') * thisVol;
        thisEl.parent().siblings('.result').children('input').val(result);
        totalCalcResult = totalCalcResult + result - prevResult;
        writeCalcResults(totalCalcResult);
        thisEl.attr('data-prev',thisVal);
        if (thisVal) {
            thisEl.closest('tr').addClass('show-print');
        } else {
            thisEl.closest('tr').removeClass('show-print');
        }
    });

    //datepicker
    $( ".datepicker-inp" ).datepicker();
});

