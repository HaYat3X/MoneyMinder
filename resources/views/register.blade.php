@extends('layout')

@section('content')
<form class="col-4 mx-auto">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">ユーザ名</label>
        <input type="text" class="form-control" id="exampleInputUser">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">メールアドレス</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">パスワード</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">登録</button>
</form>
@endsection