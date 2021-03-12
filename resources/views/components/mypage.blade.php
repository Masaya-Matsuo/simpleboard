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
  <style>
      #footer {
  width: 100%;
  position: fixed;
  bottom: 0px;
  }
  </style>
  <body>
   <table border="single" width="100%" height="250" class="sample2">
    <tr>
        <td>
        　　プロフィール画像　　　　　　　　　　　　　総投稿数　　　　　　　　    総閲覧数　　　　　　　　総行きたい数　　　　　　　　　 <a href="#" class="btn btn-primary" >行きたいリスト</a>
        </td>
    </tr>
    <tr>
        <td>
            ユーザーネーム</br>
            名前</br>
            自己紹介文</br>
             <a href="{{ route('edit') }}" class="btn btn-primary" >プロフィール編集</a>
         </td>
    </tr>
    <tr>
        <td>
            自分の投稿を表示
        </td>
    </tr>
            
 </table>
  <body>
   @if(Auth::check())<!-- ログインしていたら、ログアウトが表示されるようにするよ -->
   <form method="post" name="form1" action="logout">
     {{ csrf_field() }}
    <a href="javascript:form1.submit()">ログアウト</a>
</form>
   @else<!-- それ以外はログインが表示されるようにするよ -->
   <a href="{{ route('login') }}">ログイン</a>
   @endif
 <!-- フッター -->
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
 
 
 
 
 
 