@extends('layouts.app')

@section('content')

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
            <h3>店舗一覧</h3>

            <div style="margin-top:1rem;">
                @if (count($shops) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>店舗名</th>
                                <th>画像</th>
                                <th>エリア</th>
                                <th>業態</th>
                                <th>住所</th>
                                <th>コンセプト</th>
                                <th>ＰＲ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shops as $shop)
                                <tr>
                                    <td>{{ $shop->id }}</td>
                                    <td>{{ $shop->name }}</td>
                                    <td>{{ $shop->img1 }}</td>
                                    <td></td>
                                    <td>{{ $shop->biz_type }}</td>
                                    <td>{{ $shop->address }}</td>
                                    <td>{{ $shop->title }}</td>
                                    <td>{{ $shop->text }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            
            <div style="margin-top:1rem; color:blue;">
                <h6>■課題</h6>
                ・エリアの実装は後に回す<br>
                ・業態テーブルを作成後、shopsテーブルと結合し、業態名が表示されるようにする
            </div>

        </div>
    </div>
    
@endsection