@extends('layouts.app')

@section('content')
    <div class="text-center" style="margin-bottom:2rem;">
        <h1 style="font-size:2rem;">ユーザー登録</h1>
        <p>ユーザー登録すると、セラピストへの評価・コメントを投稿することができます</p>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                <input type="hidden" name="role_id" value="2"><!--追記-->

                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            
            <div style="margin-top:1rem; color:blue;">
                <h6>■メモ</h6>
                ・このページでは一般会員の登録のみができる(role_id=2)<br>
                ・店舗会員(role_id=3)の登録は、管理者（role_id=1）が管理者専用ページで登録ができる<br>
            </div>
            
        </div>
    </div>
@endsection