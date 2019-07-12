@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <div style="margin-top:1rem;">
                <h6 style="color:blue;">■課題</h6>
                <div style="color:blue;">・ログイン認証後に表示ページするページを権限ごとに振り分ける！！</div>
                <h6 style="margin-top:1rem">■登録済みユーザ</h6>
                ・id: 2, name: "user2",    email: "user2@gmail.com",    role_id: "2"<br>
                ・id: 3, name: "kawakami", email: "tmyk3471@gmail.com", role_id: "1"<br>
                ・id: 8, name: "shop1",    email: "shop1@gmail.com",    role_id: "3"<br>
            </div>
        </div>
    </div>
@endsection