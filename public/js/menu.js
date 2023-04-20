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
            var $input = $(this).find('input[type="checkbox"]');
            var $allbtn = $(this).siblings('.js-select-btn');

          // 他のinput要素の選択を解除する
          $allbtn.find('input').prop('checked', false);
          $allbtn.find('input').removeAttr('checked');
          $allbtn.removeClass('selected');
          
          // 押されたボタン内のinput要素を選択する
          $input.prop('checked', true);
          $input.attr('checked', 'checked');
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

  //食べたもの日記の画像プレビュー
  var $fileLabel = $('.file-label');
  var $inputFile = $('.js-file-input');
  //画像ドラッグオーバー時
  $fileLabel.on('dragover',function(e){
    e.preventDefault();
    e.stopPropagation();
    $(this).css('border','3px dashed #c8c2bc');
  });
  //画像ドラッグリーブ時
  $fileLabel.on('dragleave',function(e){
    e.stopPropagation();
    e.preventDefault();
    $(this).css('border','1px solid #c8c2bc');
  });

  //画像を置いたとき
  $inputFile.on('change',function(e){
    $fileLabel.css('border','1px solid #c8c2bc');
    //画像の情報を変数に
    var files = this.files[0]; //files配列にファイルが入ってる
    var $img = $(this).siblings('.js-file-img'); //そのイメージを変数に
    //ファイルリーダーの準備
    var fileReader = new FileReader();

    //ファイルリーダーが読み込まれた時のイベント
    fileReader.onload = function(event){
      //指定のimgタグのsrc属性を書き換えて、表示する
      $img.attr('src',event.target.result).show();
    };

    //画像を読み込む
    fileReader.readAsDataURL(files);

  });
  