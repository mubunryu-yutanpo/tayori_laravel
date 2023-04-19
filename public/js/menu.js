// MENUボタンtoggle
$(function(){
    $(document).on('click', '.js-menu-btn', function(){
        $('.js-menu').addClass('on');
    });
    $(document).on('click', '.js-menu-close-btn', function(){
      $('.js-menu').removeClass('on');
    });

    // サブメニュー
    $(document).on('click', '.js-submenu-btn', function(){
        $(this).next('.js-submenu').toggleClass('open');
        $(this).children('.js-submenu-plus-icon').toggleClass('on');
        $(this).children('.js-submenu-minus-icon').toggleClass('on');
    })
  });

  // 日記のセレクトボタン
  $(function(){
    $(document).ready(function() {
        // ボタンがクリックされた時の処理
        $('.js-select-btn').on('click', function() {
          // 他のinput要素の選択を解除する
          $('input[type="checkbox"]').prop('checked', false);
          $(this).siblings('.js-select-btn').removeClass('selected');
          // 押されたボタン内のinput要素を選択する
          $(this).find('input[type="checkbox"]').prop('checked', true);
          $(this).toggleClass('selected');
        });
      });
      
  });


  
  // フッターをページ最下部に固定
  $(function(){
    var $ftr = $('.footer');
    if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
      $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) + 'px;' });
    }
  });
  