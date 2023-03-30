<?php

if(!(isset($_POST["onamae"]))){
  header("Location:../index.html");
  exit();
  }

$name = htmlspecialchars($_POST["onamae"],ENT_QUOTES);
$tell = htmlspecialchars($_POST["tell"],ENT_QUOTES);
$email = htmlspecialchars($_POST["email"],ENT_QUOTES);
$company = htmlspecialchars($_POST["company"],ENT_QUOTES);
$kind = $_POST["kind"];
$inquiry = htmlspecialchars($_POST["inquiry"],ENT_QUOTES);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>翠風楼 | お問い合わせ確認ページ</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="favicon.png" rel="icon" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="192x192" href="touch_icon.png">
</head>
<body>

  <div id="btn-wrapper">
    <p id="timezone"></p>
    <p id="dayzone"></p>
    <p class="ham-menu">MENU</p>
    <p id="ham-btn"><span></span></p>
    </div><!-- /#btn-wrapper -->

  <nav id="g-nav">
  <a href="../index.html">
      <div class="nav-logo">
          <img src="../img/logo.svg" alt="翠風楼ロゴ">
          <p><small>トップに戻る</small></p>
      </div><!-- /.nav-logo -->
    </a>
    <div class="nav-wrapper">
    <ul class="left">
      <li><a href="../stay/index.html">ご宿泊</a></li>
      <li><a href="../food/index.html">お食事</a></li>
      <li><a href="../spa/index.html">温泉</a></li>
      <li><a href="../reserve/index.html">ご予約</a></li>
    </ul><!-- /.left -->
  </div><!-- /.nav-wrapper -->
  </nav><!-- #g-nav -->


<section>
    <div class="confirm-wrapper">
        <h2>お問い合わせ|確認画面</h2>
            <form id="g-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfxgvjIE4Mk5wsQNUlqqKOElBgAO-aqQqlk-4d3_earMV-zOA/formResponse" method="post">
              <dl class="form-list">
                <dt>お名前</dt>
                <dd><?php echo $name; ?></dd>

                <dt>お電話番号</dt>
                <dd><?php echo $tell; ?></dd>

                <dt>メールアドレス</dt>
                <dd><?php echo $email; ?></dd>

                <dt>会社名・団体名</dt>
                <dd><?php echo $company; ?></dd>

                <dt>お問い合わせ種別</dt>
                <dd><?php echo $kind; ?></dd>

                <dt>お問い合わせ内容</dt>
                <dd><?php echo $inquiry; ?></dd>


              </dl><!-- /.form-list -->

              <input type="hidden" name="entry.801537023" value="<?php echo $name; ?>">
              <input type="hidden" name="entry.1574291610" value="<?php echo $tell; ?>">
              <input type="hidden" name="entry.1454314283" value="<?php echo $email; ?>">
              <input type="hidden" name="entry.1107951834" value="<?php echo $company; ?>">
              <input type="hidden" name="entry.1258493004" value="<?php echo $kind; ?>">
              <input type="hidden" name="entry.828444392" value="<?php echo $inquiry; ?>">

              <input class="submit-button" type="submit" value="送信">
            </form>
    </div><!-- /.confirm-wrapper -->
</section>

<footer>
  <ul class="f-nav">
      <li class="footer-logo"><img src="../img/logo.svg" alt="伊豆 翠風楼"></li>
      <li>〒410-1234 静岡県伊豆市松原町1-2-3</li>
      <li>Tell:0000-11-2222<br>(対応時間: 9:00 ～ 18:30)</li>
  </ul>
  <small><a href="../policy/index.html" target="_blank">プライバシーポリシー</a></small>
  <p><small>&copy;2023 翠風楼</small></p>
  </footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js' integrity='sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==' crossorigin='anonymous'></script>
<script src="../js/script.js"></script>
<script>
$(function(){
//ajaxでページ遷移する
$('#g-form').submit(function(event){
var formData = $('#g-form').serialize();
$.ajax({
url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSfxgvjIE4Mk5wsQNUlqqKOElBgAO-aqQqlk-4d3_earMV-zOA/formResponse",
data: formData,
type: "POST",
dataType: "xml",
statusCode: {
0: function(){
window.location.href = "thanks.html";//遷移先ページ
},
200: function(){
//失敗したときの処理
alert('失敗しました');
}
}
});
//googleformへのページ遷移をキャンセル
event.preventDefault();
});
});

</script>

</body>
</html>