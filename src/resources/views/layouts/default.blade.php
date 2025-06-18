<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('もぎたて')</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <style>
    body {
      font-size:16px;
      margin: 5px;
    }
    h1 {
      font-size:25px;
      color:#000000;
      letter-spacing:-4px;
      margin-left: 10px
    }
    .content {
      margin:10px;
    }
  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class="content">
    @yield('content')
    <aside class="sidebar">
    <h2>商品一覧</h2>
    <input type="text" id="title" name="title">
    </sidebar>
    <div class="search-section">
    <button type="search" onclick="performSearch()">検索</button>
  </div>
  <div class="price-range">
    <label for="price">価格帯で表示</label>
    <form action="detail.html" method="get">
  <select name="select">
  </select>
  </form>
  </div>
</div>
</aside>

  </div>
</body>
</html>
