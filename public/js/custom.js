(function ($) {
    'use strict';

    /* ****************************************
    :: 1.0 Fullscreen Code
    :: 2.0 Welcome and Advisor Slider active code
    :: 3.0 Testimonials Slider Active code
    :: 4.0 Meanmenu active code
    :: 5.0 Onepage nav active code 
    :: 6.0 Magnific-popup Video active code
    :: 7.0 counterup active code
    :: 8.0 ScrollUp active code
    :: 9.0 Sticky Active code
    :: 10.0 wow active code
    :: 11.0 scrollUp active code
    :: 12.0 YouTube video active code
    :: 13.0 PreventDefault a click
    :: 14.0 Preloader active code
    **************************************** */

    /* ***********************
    :: 1.0 Fullscreen Code
    ************************ */

    $(window).on('resizeEnd', function () {
        $(".welcome_area, .welcome_slides .single_slide, .single_slide").height($(window).height());
    });

    $(window).on('resize', function () {
        if (this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function () {
            $(this).trigger('resizeEnd');
        }, 300);
    }).trigger("resize");

    /* *******************************************
    :: 2.0 Welcome and Advisor Slider active code
    ******************************************* */

    if ($.fn.owlCarousel) {
        $(".welcome_slides, .single_advisor_profile").owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            smartSpeed: 300,
            autoplayHoverPause: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
    }

    var owl = $('.welcome_slides');
    owl.owlCarousel();
    owl.on('translate.owl.carousel', function (event) {
        $('.owl-item .single_slide .slide_text h2').removeClass('animated').hide();
        $('.owl-item .single_slide .slide_text h3').removeClass('animated').hide();
        $('.owl-item .single_slide .slide_text .btn').removeClass('animated').hide();
    })

    owl.on('translated.owl.carousel', function (event) {
        $('.owl-item.active .single_slide .slide_text h2').addClass('animated fadeInDown').show();
        $('.owl-item.active .single_slide .slide_text h3').addClass('animated fadeInRight').show();
        $('.owl-item.active .single_slide .slide_text .btn').addClass('animated fadeInUp').show();
    })

    /* *******************************************
    3.0 Testimonials Slider Active code
    ******************************************* */

    if ($.fn.owlCarousel) {
        $(".testimonials").owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            dots: true,
            autoplay: true,
            smartSpeed: 800
        });
    }

    /* *********************
    4.0 Meanmenu active code
    ********************* */

    $('.main_menu_area .mainmenu nav').meanmenu();

    /* ************************
    5.0 Onepage nav active code 
    ************************ */

    if ($.fn.onePageNav) {
        $('#nav').onePageNav({
            currentClass: 'current_page_item',
            changeHash: false,
            scrollSpeed: 1000,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'linear',
            begin: function () {},
            end: function () {},
            scrollChange: function ($currentListItem) {}
        });
    }

    /* *********************************
    6.0 Magnific-popup Video active code 
    ********************************* */

    $('.video_btn').magnificPopup({
        disableOn: 0,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: true,
        fixedContentPos: false
    });

    /* **********************
    7.0 counterup active code
    ********************** */

    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });

    /* *********************
    8.0 ScrollUp active code
    ********************* */

    $.scrollUp({
        scrollName: 'scrollUp',
        scrollDistance: 450,
        scrollFrom: 'top',
        scrollSpeed: 500,
        easingType: 'linear',
        animation: 'fade',
        animationSpeed: 200,
        scrollTrigger: false,
        scrollTarget: false,
        scrollText: '<i class="fa fa-angle-up"></i>',
        scrollTitle: false,
        scrollImg: false,
        activeOverlay: false,
        zIndex: 2147483647
    });

    /* *******************
    9.0 Sticky Active code
    ******************* */

    $("#sticky").sticky({
        topSpacing: 0
    });

    /* *****************
    10.0 wow active code
    ***************** */

    new WOW().init();


    /* **********************
    11.0 scrollUp active code
    ********************** */

    $(window).stellar({
        responsive: true,
        positionProperty: 'position',
        horizontalScrolling: false
    });

    /* ***************************
    12.0 YouTube video active code
    *************************** */

    if ($.fn.mb_YTPlayer) {
        $('.player').mb_YTPlayer();
    }

    /* ************************
    13.0 PreventDefault a click
    ************************ */

    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    /* ***********************
    14.0 Preloader active code
    *********************** */

    $(window).load(function () {
        $('body').css('overflow-y', 'visible');
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

})(jQuery);


//图片按需加载
$(function(){
    var $wd = $(window),
        $img = $('img'),
        imgTop,          //图片距离顶部高度
        scTop,             //滚动条高度
        wH;           //窗口高度
    wH = $wd.height();         //获得可视浏览器的高度
    $wd.scroll( function() {
        scTop = $wd.scrollTop();       //获取滚动条到顶部的垂直高度
        $img.each(function(){
            imgTop =  $(this).offset().top;
            if(imgTop - wH < scTop &&     //图片必须出现在窗口底部上面
                imgTop - wH > 0 &&        //排除首页图片
                $(this).attr('src') != $(this).data('url')){ //排除已经加载过的图片
                   $(this).attr({
                       src: $(this).data('url')
                   });
            }
        });
    });
});


//咨询侧边栏显示隐藏
$(function(){
    $('#shan').click(function(e){
        e.stopPropagation;
        $(this).parents('#asideFloat').animate({right:"-100px"}).fadeOut('fast');
        $('#sprite').fadeIn('slow').css('right','-2rem');
    });

    $('#sprite').click(function(e){
        e.stopPropagation;
        $(this).animate({right:"-100px"}).fadeOut('fast');
        $('#asideFloat').animate({right:"1.5rem"}).fadeIn('fast');
    })
})

//底部透明带
$(function(){
    // $('#asideFloat li').click(function(){
    //     $('#asideFloat').animate({right:"-100px"}).fadeOut('fast');
    //     $('#tel').fadeIn();
    // });

    $('#remove').click(function(){
        $(this).parents("#asideFloat").fadeOut('fast');
    });
    $(window).scroll(function(){
        if(document.body.scrollTop>500　&&　$(document.body).width()>415){
            console.log(111);
            $('.float-foot').fadeIn('slow');
        }else{
            $('.float-foot').fadeOut('slow');
        }
    })

    if($(document.body).width()<415){
        $('.float-foot').fadeOut('fast');
    }

    // if($(document.body).width()<415)
    // {   
    //     $('.container').removeClass('container').addClass('container-fluid');
    // }else{
    //     $('.container-fluid').removeClass('container-fluid').addClass('container');
    // }
})


//报价表table切换
$(function(){
    var count = 1;
    var current = null;
    $('.tabbable .fa-plus').on('click', function(e){
        e.stopPropagation();
        if(current != this){
            count = 1;
        }
        current = this;
        var text = $(this).parent('a').text();
        var id = $(this).parent('a').attr('href');
        var url = '#panel-'+Math.random();
        $(id).prepend('<p>'+'<a contenteditable="true" data-toggle="tab" href='+url+'>'+text+'</a>'+count+'<span class="fa fa-remove "></span></p>');
        count++;

        var dom = $(id).clone();
        dom.find('.checkbox input').each(function(){
            $(this).attr('checked', false);
        });//取消勾选
        dom.find('.sum').text(0);

        var newdom = dom.attr('id', url.split('#')[1]);
        newdom.attr('data-id', url.split('#')[1]);
        $('.tab-content').append(newdom);
        $('.tab-content .tab-pane').each(function(){
            $(this).removeClass('active');
            $(this).css('display','none');
        });
        newdom.css('display','block');
        newdom.addClass('active');
    })

    $('.nav-tabs li a').on('click', function(){
        var id = $(this).attr('href');
        $('.tab-content .tab-pane').each(function(){
            $(this).removeClass('active');
            $(this).css('display','none');
        });
        $(id).css('display','block');
        $(id).addClass('active');
    })

    $(document).on('click','.tab-pane .fa-remove',function(){
        $(this).parent('p').remove();
        count = 1;
    })

    $(document).on('click','.tab-pane p a',function(e){
        e.stopPropagation();
        var id = $(this).attr('href').split('#')[1];
        console.log(id);
        $(document).find('.tab-content .tab-pane').each(function(){
            console.log($(this).attr('id'));
            if($(this).attr('id') != id){
                $(this).removeClass('active');
                $(this).css('display','none');
            }else{
                $(this).addClass('active');
                $(this).css('display','block');
            }
        });
        
    })
})

/*数据存储*/
$(function(){
    $(document).on('change','tr input.form-control',function(){
        var arr = $(this).parents('tr').find('td.cumadd');
        console.log(arr.text());
        var num = $(this).parents('tr').find('input.num').val();
        var price = $(this).parents('tr').find('input.price').val();
        var total = num*price;
        arr.text(total);

        var p = $(this).parents('tbody').find('td.sum').text();
        console.log(p);
        var sum = 0;
        $(this).parents('tbody').find('td.cumadd').each(function(){
            console.log();
            if($(this).parents('tr').find('.checkbox input').is(':checked')){
                sum += Number($(this).text());
            }
        });
        $(this).parents('tbody').find('td.sum').text(sum);
    })
    

    var items = [];
    $(document).on('click','tr .checkbox input',function(){

            var item_id = $(this).parents('.tab-pane').attr('data-id');
            console.log(item_id);
            var id = $(this).attr('data-id');
            var quanity = $(this).parents('tr').find('input.num').val();
            var price = $(this).parents('tr').find('input.price').val();
            var sum = 0;


        if($(this).is(':checked')){
            var options = {'id':id,'num':quanity,'price':price};
            var item = {'id':item_id, 'options':options};
            console.log(item);
            items.push(item);
            console.log(items);

            $(this).parents('tbody').find('td.cumadd').each(function(){
                if($(this).parents('tr').find('.checkbox input').is(':checked')){
                    sum += Number($(this).text());
                }
            });
            $(this).parents('tbody').find('td.sum').text(sum);


        }else{
            items.forEach(function(e,index){
                if(e.options.id == id){
                    items.splice(index,1);
                    console.log(items);
                }
            })
            console.log('取消选择');

            $(this).parents('tbody').find('td.cumadd').each(function(){
                if($(this).parents('tr').find('.checkbox input').is(':checked')){
                    sum += Number($(this).text());
                }
            });
            $(this).parents('tbody').find('td.sum').text(sum);

        }
    })

   var data = JSON.stringify(items);

   // $('#save').on('click',function(){
   //      $.ajax({
   //          url:'192.168.1.31',
   //          data:items,
   //          dataType:'json',
   //          type:'POST',
   //          success:function(data){

   //          }
   //      })
   // })

})

//找工长table 切换
$(function(){
    $('.check-type li').click( function(){
      var i = $(this).index();
      var contans = $('.tab-contain .win_feature');
      contans.eq(i).show().siblings().hide();
    });
})


// 查看电话
$(function(){
    $('.view-phone').on('click', function(){
        $(this).html($(this).attr('data-id'));
    })
})

//table表格里a 链接无法跳转
$(function(){
    $('tbody td a').on('click', function(){
        var link = $(this).attr('href');
        window.location.href = link;
    })
})

//底部横幅显示隐藏
$(function(){
    $('.r-btm').click(function(){
        $(this).parents('.float-foot').animate({width:"0px"},500);
        $('.foot-form').fadeOut();
        $('.left-logo').animate({left:"-50px"},500).css('transform','rotate(30deg)');
    })

    $('.left-logo').on('click', function(){
        $('.foot-form').fadeIn();
        $(this).parents('.float-foot').animate({width:"100%"},500);
        $('.left-logo').css('transform','rotate(0deg)').animate({left:"100px"},500);
    })   
})
$(function(){
    $('.appointment').click(function(){
        var name = $(this).parents('.thumbnail').find('.housing').text();
        $('#house').val(name);
        $('#house').attr('preloader',name);
    })
})
$(function(){
    $(document).on('click','.appointing',function(){
        console.log(111)
        var home = $(this).parents('.gdxq-top').find('.home-area').text();
        console.log(home)
        $('#house').val(home);
    });
})


//平台分配客户进行报价自动录入客户信息

$(function(){
    $('.push-price-link').click(function(){
        var arrInfo = [];
        var tds = $(this).parents('tr').find('td');
        tds.each(function(index,e){
          if(index<=3){
            arrInfo.push($(this).text());
          }
        })
        console.log(arrInfo);
        localStorage.setItem('cinfo', JSON.stringify(arrInfo));
        //window.location.href = '/offers/create-1';
    })
})