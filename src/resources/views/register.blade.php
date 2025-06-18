@extends('layouts.default')
@section('title', '商品登録')

@section('content')
<form action="/register" method="post">
  <table>
  @csrf
    <tr>
      <th>商品名</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>値段</th>
      <td><input type="text" name="price"></td>
    </tr>
    <tr>
    <th>商品画像</th>
    <td>
      <label for="image">ファイルを選択：</label>
    <input type="file" name="image" id="image" accept="image/*">
    </td>

    <tr>
    <th>季節</th>
    <td>
    <label>
    <input type="checkbox" name="seasons" value="spring"> 春
    </label>
    <label>
    <input type="checkbox" name="seasons" value="summer"> 夏
    </label>
    <label>
    <input type="checkbox" name="seasons" value="autumn"> 秋
    </label>
    <label>
    <input type="checkbox" name="seasons" value="winter"> 冬
    </label>
    </td>
    </tr>

    <tr>
    <th>商品説明</th>
    <td><input type="text" name="description"></td>
    </tr>
    </tr>
    <tr>
      <th></th>
      <td><button>登録</button></td>
    </tr>
  </table>
</form>
@endsection
