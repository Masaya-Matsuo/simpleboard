 <!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>date spots</title>
  </head>
 
  

<style>
      figure {
  width: 1127px;
  position: relative;
  margin:0;
}

figure img {
  width: 100%;
  vertical-align: top;
  margin:0;
}

figure figcaption {
  font-size: 40px;
  font-family: "ＭＳ ゴシック",sans-serif;;
  color: #ffffff;
  position: absolute;
  top: 0;
  display: flex;
  width: 100%;
  height: 100%;
  margin: 0;
  align-items: center;
  justify-content: center;
  text-align:center;
}

.decorator {
  background-color: rgba(0, 0, 0, 0.1);
}
#footer {
  width: 100%;
  position: fixed;
  bottom: 0px;
}
#a{
padding: 1000px;
}


  </style>
 <body>
  <!--  @if(Auth::check())<!-- ログインしていたら、ログアウトが表示されるようにするよ -->-->
  <!-- <form method="post" name="form1" action="logout">-->
  <!--   {{ csrf_field() }}-->
  <!--  <a href="javascript:form1.submit()">ログアウト</a>-->
  <!--</form>-->
  <!--@else<!-- それ以外はログインが表示されるようにするよ -->-->
  <!-- <a href="{{ route('login') }}">ログイン</a>-->
  <!-- @endif -->
    
  <!-- ヘッダー -->
  <header>
    <figure>
     <img src=https://assets-cf.lovegraph.me/uploads/albums/16668/photographs/3dfcea98-ad9f-4e50-a822-9048f0d44ec6.jpg?ccolor=white&cgravity=southwest&cname=Kenyu+&ls=1080&v=1590637397&s=39e11d794561a8db2617b18f6039ef11alt="文字の代替">
       <figcaption class="decorator">行きたい場所が必ず見つかる</br>
                                      オススメデートコース
       </figcaption>
    </figure>
  </header>
 <!-- ジャンル、地域選択-->
 <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ジャンル選択
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">レジャー系</a>
    <a class="dropdown-item" href="#">ドライブ</a>
    <a class="dropdown-item" href="#">日帰りドライブ</a>
    <a class="dropdown-item" href="#">日帰り温泉</a>
    <a class="dropdown-item" href="#">季節限定</a>
    <a class="dropdown-item" href="#">雨の日</a>
    <a class="dropdown-item" href="#">室内</a>
    <a class="dropdown-item" href="#">高校生向け</a>
    <a class="dropdown-item" href="#">大学生</a>
    <a class="dropdown-item" href="#">社会人</a>
    <a class="dropdown-item" href="#">贅沢したい日</a>
    <a class="dropdown-item" href="#">初デート</a>
    <a class="dropdown-item" href="#">穴場スポット</a>
    <a class="dropdown-item" href="#">マニアック</a>
  </div>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    地域選択
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">北海道</a>
    <a class="dropdown-item" href="#">青森県</a>
    <a class="dropdown-item" href="#">岩手県</a>
    <a class="dropdown-item" href="#">宮城県</a>
    <a class="dropdown-item" href="#">秋田県</a>
    <a class="dropdown-item" href="#">山形県</a>
    <a class="dropdown-item" href="#">福島県</a>
    <a class="dropdown-item" href="#">茨城県</a>
    <a class="dropdown-item" href="#">栃木県</a>
    <a class="dropdown-item" href="#">群馬県</a>
    <a class="dropdown-item" href="#">埼玉県</a>
    <a class="dropdown-item" href="#">千葉県</a>
    <a class="dropdown-item" href="#">東京都</a>
    <a class="dropdown-item" href="#">神奈川県</a>
    <a class="dropdown-item" href="#">新潟県</a>
    <a class="dropdown-item" href="#">富山県</a>
    <a class="dropdown-item" href="#">石川県</a>
    <a class="dropdown-item" href="#">福井県</a>
    <a class="dropdown-item" href="#">山梨県</a>
    <a class="dropdown-item" href="#">長野県</a>
    <a class="dropdown-item" href="#">岐阜県</a>
    <a class="dropdown-item" href="#">静岡県</a>
    <a class="dropdown-item" href="#">愛知県</a>
    <a class="dropdown-item" href="#">三重県</a>
    <a class="dropdown-item" href="#">滋賀県</a>
    <a class="dropdown-item" href="#">京都府</a>
    <a class="dropdown-item" href="#">大阪府</a>
    <a class="dropdown-item" href="#">兵庫県</a>
    <a class="dropdown-item" href="#">奈良県</a>
    <a class="dropdown-item" href="#">和歌山県</a>
    <a class="dropdown-item" href="#">鳥取県</a>
    <a class="dropdown-item" href="#">島根県</a>
    <a class="dropdown-item" href="#">岡山県</a>
    <a class="dropdown-item" href="#">広島県</a>
    <a class="dropdown-item" href="#">山口県</a>
    <a class="dropdown-item" href="#">徳島県</a>
    <a class="dropdown-item" href="#">香川県</a>
    <a class="dropdown-item" href="#">愛媛県</a>
    <a class="dropdown-item" href="#">高知県</a>
    <a class="dropdown-item" href="#">福岡県</a>
    <a class="dropdown-item" href="#">佐賀県</a>
    <a class="dropdown-item" href="#">長崎県</a>
    <a class="dropdown-item" href="#">熊本県</a>
    <a class="dropdown-item" href="#">大分県</a>
    <a class="dropdown-item" href="#">宮崎県</a>
    <a class="dropdown-item" href="#">鹿児島県</a>
    <a class="dropdown-item" href="#">沖縄県</a>
  </div>
</div></br>


<!-- 並びの順番 -->
<div class="dropdown" style = "text-align: center;">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    新着順
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">人気順</a>
    <a class="dropdown-item" href="#">閲覧数順</a>
  </div>
</div>

<!-- メイン -->
<div class="container" max-width=80%><!--レイアウトbootstrap-->

@foreach($posts as $aaa)<!-- postsはpoststableのデータをすべて持っている。foreachは$postsにあるすべてのデータを一つずつ取り出すやつなので、新しい変数$aaaを使っている。-->
<div class="card mb-3">
  <svg class="bd-placeholder-img card-img-top" ><img  width="350px" height="500px" class="d-block mx-auto"  src="{{ secure_asset('storage/test/' . $aaa->picture) }}"></svg>
  <div class="card-body">
    <h5 class="card-title"></h5>
    
    <p class="card-text"><small class="text-muted"></small></p>
     @if($aaa->is_liked_by_auth_user())
    <a href="{{ route('post.unlike', ['id' => $aaa->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $aaa->likes->count() }}</span></a>
  @else
    <a href="{{ route('post.like', ['id' => $aaa->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $aaa->likes->count() }}</span></a>
  @endif
    <bottom>お気に入り</bottom>
    <p class="card-text">{{$aaa->content}}</p>
  </div>
  
</div>


@endforeach
</div>


<!-- pagination -->
<nav aria-label="Page navigation example" style="padding: 30px;">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>


<!-- フッター -->

<nav class="nav nav-pills nav-fill" id = "footer">
  <a class="nav-item nav-link" href="{{route('top') }}">検索🔍</a>
  <a class="nav-item nav-link" href="{{route('mypage') }}">マイページ⌂</a>
  <a class="nav-item nav-link" href= "{{route('create') }}">新規投稿作成＋</a>
  <a class="nav-item nav-link"  href="#">周辺のデートスポット🗾</a>
</nav>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

laravelの復習
memberの復習
コードの内容を理解するためにはとにかく基礎を完璧に理解するようになるしかない。
とりあえずphpの教材を繰り返し見たり、レッスンでやったコードをしっかり見返す。
コードを大雑把にみるのではなく、細かく見てこういうことかと理解していくことがとても大事だよ
来週までに復習と理解と投稿一覧のレイアウトをしっかりする。

プログラムの目的を考えながらコードを見る癖をつけろ！！
コントローラーとかの気持ちになって考えろ！！

