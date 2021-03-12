
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  
 <form method="POST" action="/bbb" enctype='multipart/form-data'> //enctypeは画像を正常に送信するために必要なコードです。
    {{ csrf_field() }}
    
  <body>
    <div class="card mb-3" style="max-width: 1127px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
    </div>
        <input type="file" name="picture" >
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">内容</h5>
        <input type="text" name="content" size="95" maxlength="500">
     
   
    <select name="category" style = "margin: 10px 0px;">
<option value="" selected>ジャンル選択</option>
<option value="レジャー">レジャー系</option>//出力する際にはvalueに設定した値が出力される。
<option value="ドライブ">ドライブ</option>
<option value="日帰りドライブ">日帰りドライブ</option>
<option value="日帰り温泉">日帰り温泉</option>
<option value="季節限定">季節限定</option>
<option value="雨の日">雨の日</option>
<option value="室内">室内</option>
<option value="高校生向け">高校生向け</option>
<option value="大学生">大学生</option>
<option value="社会人">社会人</option>
<option value="贅沢したい日">贅沢したい日</option>
<option value="初デート">初デート</option>
</select></br>
<select name="area" style = "margin: 10px 0px;">
<option value="" selected>地域選択</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select></br>


    <button type="submit" class="btn btn-primary" >投稿する</button>
  </div>
</div>
   
      </div>
    </div>
  </div>
</div>
</form>
<nav class="nav nav-pills nav-fill" id = "footer">
  <a class="nav-item nav-link" href="{{route('top') }}">検索🔍</a>
  <a class="nav-item nav-link" href="{{route('mypage') }}">マイページ⌂</a>
  <a class="nav-item nav-link" href= "{{route('create') }}">新規投稿作成＋</a>
  <a class="nav-item nav-link"  href="#">周辺のデートスポット🗾</a>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  
</html>
