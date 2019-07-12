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
            <h3>セラピスト一覧</h3>

            <div style="margin-top:1rem;">
                @if (count($therapists) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>名前</th>
                                <th>所属店舗</th>
                                <th>画像</th>
                                <th>コメント</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($therapists as $therapist)
                                <tr>
                                    <td>{{ $therapist->id }}</td>
                                    <td>{{ $therapist->name }}</td>
                                    <td>{{ $therapist->shop_id }}</td>
                                    <td>{{ $therapist->img1 }}</td>
                                    <td>{{ $therapist->text }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
            
            <div style="margin-top:1rem; color:blue;">
                <h6>■課題</h6>
                ・therapistsテーブルのshop_idを、店舗名（shopsテーブルのname）が表示されるようにする<br>
            </div>

        </div>
    </div>
    
@endsection