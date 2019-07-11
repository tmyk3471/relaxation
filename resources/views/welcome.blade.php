@extends('layouts.app')

@section('content')
    <!--div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
        </div>
    </div-->
    <div class="row">
        <div class="sub col-12 col-md-3">
            <h3>地域で探す</h3>
            <ul>
                <li>梅田</li>
                <li>本町</li>
                <li>心斎橋</li>
                <li>難波</li>
            </ul>
        </div>
        <div class="main col-12 col-md-9">
            <h3>おすすめセラピスト</h3>
            <div class="recommend row">
                @if (count($therapists) > 0)
                    @foreach ($therapists as $therapist)
                        <div class="card" style="width:24%; margin-right:1%;">
                            <img src="{{ $therapist->img1 }}.jpg" class="card-img-top" alt="{{ $therapist->name }}さんの画像">
                            <div class="card-body">
                                <p class="card-text" style="margin:0;">名前：{{ $therapist->name }}</p>
                                <p class="card-text" style="margin:0;">店舗名：{{ $therapist->shop_id }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div style="margin-top:1rem; color:blue;">
                    <h6>メモ</h6>
                    ・画像の置き場所を調べる<br>
                    ・shop_idを店舗名に変更する方法を調べる
                </div>
            </div>
            
            <h3 style="margin-top:3rem;">最新ニュース</h3>
            <p>※実装保留</p>

            <div style="margin-top:3rem;">
                <h4>登録データ確認用 ※あとで消す</h4> 
                <h6>ユーザー一覧</h6>
                @if (count($users) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>名前</th>
                                <th>メール</th>
                                <th>権限</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role_id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>


            
        </div>
        
    </div>
    

    
@endsection