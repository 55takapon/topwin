"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  });
  var topBtn = $('.pagetop');
  topBtn.hide(); // ボタンの表示設定

  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  }); // ボタンをクリックしたらスクロールして上に戻る

  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  }); // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  });
});
/*
  // 以下追加
  // swiper pc用
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 2,
    //ブレイクポイント追加
    breakpoints: {
      // 768px以上の場合
      768: {
        slidesPerView: 4,
      },
      // 980px以上の場合
      980: {
        slidesPerView: 4,
      },
      // 1200px以上の場合
      1200: {
        slidesPerView: 4,
      },
    },

    spaceBetween: 20,

    centeredSlides: true,
		initialSlide: 1,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop: true,
  autoplay: {
		delay: 5000,
		disableOnInteraction: true,
	},
	pagination: {
	    el: '.swiper-pagination',
	    type: 'bullets',
			clickable: true,
	  },
  });
*/
//アコーディオン

var li_1 = "";
/*
for (var i = 1; i <= 5; i++) {
  li_1 += "<li>項目"+i+"</li>";
}
*/

$('.open-5').append(li_1);
$('.open-5').each(function () {
  $(this).css("height", $(this).height() + "px");
});
$('.open-5:not(:first)').hide();
$('.btn-5').click(function () {
  $(this).next('.open-5').slideToggle('slow').siblings('.open-5');
  $(this).siblings('.btn-5').removeClass('active');
  $(this).toggleClass('active');
}); //お問い合わせのチェックをされたら送信できるようにする同意ボタン

$(function () {
  $('.Form-CheckItem-Label').on('click', function () {
    if ($('#JS_CheckItem').prop("checked") == true) {
      $('.JS_FormSubmit').addClass('isActive');
    } else {
      $('.JS_FormSubmit').removeClass('isActive');
    }
  });
}); //AOS導入 フェード
// AOS.init();

AOS.init({
  offset: 100,
  duration: 1200,
  easing: 'ease',
  delay: 100,
  once: false,
  anchorPlacement: 'bottom-center'
});
$(function () {
  //ヒーローの高さを100%に調整

  /* 
  var windowHeight = $(window).height();
  $(".hero").height(windowHeight);
     $(window).resize(function () {
    var windowHeight = $(window).height();
    $(".hero").height(windowHeight);
  });
  */
  //ページ内スクロール
  $('a[href^="#"]').on('click', function () {
    var speed = 300;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({
      scrollTop: position
    }, speed, "swing");
    return false;
  }); //スクロールに応じてヘッダーの背景色が変化

  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
      $('.header').addClass('active');
    } else {
      $('.header').removeClass('active');
    }
  });
});
jQuery(window).on('scroll', function () {
  if (0 < jQuery(this).scrollTop()) {
    //背景色を付与する高さ指定
    jQuery('.header__section').addClass('change-color');
  } else {
    jQuery('.header__section').removeClass('change-color');
  }
}); // ハンバーガーボタン作動 

$(".openbtn").click(function () {
  //ボタンがクリックされたら
  $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し

  $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
});
$("#g-nav a").click(function () {
  //ナビゲーションのリンクがクリックされたら
  $(".openbtn").removeClass('active'); //ボタンの activeクラスを除去し

  $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスも除去
}); //ファーストビュー3枚スライド@夢見るゴリラ

var mySwiper = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,
  // ループの指定
  effect: "fade",
  //フェードの指定
  autoplay: {
    delay: 4000,
    //４秒後に次のスライドへ
    disableOnInteraction: false //ユーザー側で操作してもスライドを止めない

  },
  speed: 2000,
  //２秒かけてフェードで切り替わる
  allowTouchMove: false,
  //マウスでのスワイプを禁止
  pagination: {
    // 丸のページネーションを使うなら書く
    el: ".swiper-pagination",
    clickable: true //クリックを有効化する

  },
  navigation: {
    // 左右のページ送を使うなら書く
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
}); //モーダル@しょーご

MicroModal.init({
  openClass: 'is-open',
  disableScroll: true
}); //flatpickr日付選択

flatpickr("#flatpickr", {
  minDate: "today",
  mode: "range"
  /*mode: "multiple",*/

}); //タブ

$(function () {
  // ①タブをクリックしたら発動
  $('.tab li').click(function () {
    // ②クリックされたタブの順番を変数に格納
    var index = $('.tab li').index(this); // ③クリック済みタブのデザインを設定したcssのクラスを一旦削除

    $('.tab li').removeClass('active'); // ④クリックされたタブにクリック済みデザインを適用する

    $(this).addClass('active'); // ⑤コンテンツを一旦非表示にし、クリックされた順番のコンテンツのみを表示

    $('.area ul').removeClass('show').eq(index).addClass('show');
  });
}); //アコーディオン右端にトグル

$(function () {
  // 最初のコンテンツ以外は非表示
  //$(".accordion2-content:not(:first-of-type)").css("display", "none");
  // 最初のコンテンツを表示させる
  $(".accordion2-content:first-of-type").addClass("is-open"); //最初のトグルをアクティブにさせる

  $(".jsAccordionTitle:first-of-type").addClass("is-active");
  $('.jsAccordionTitle').on('click', function () {
    //nextは次の要素を取得する、今回はクリック要素の次の要素にis-showクラスをつけている
    $(this).next().toggleClass('is-open'); //クリックした要素自体にもclass付与

    $(this).toggleClass('is-active');
  });
}); //スクロールヒントを表示

window.addEventListener('DOMContentLoaded', function () {
  new ScrollHint('.js-scrollable');
}); //「スクロールできます」に文字をカスタマイズ

new ScrollHint('.js-scrollable', {
  scrollHintIconAppendClass: 'scroll-hint-icon-white',
  // white-icon will appear
  i18n: {
    scrollable: 'スクロールできます'
  }
});