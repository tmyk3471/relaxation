<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">Relaxation Navi</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav ml-auto" style="margin-right:2rem;">
                <li class="nav-item">{!! link_to_route('therapist', 'セラピスト一覧', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item"><a href="news" class="nav-link">ニュース一覧</a></li>
                <li class="nav-item"><a href="shop" class="nav-link">店舗一覧</a></li>
                <li class="nav-item"><a href="#" class="nav-link">掲載依頼</a></li>
            </ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <!--li class="nav-item"><a href="#" class="nav-link">Users</a></li-->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"><a href="#">My profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">{!! link_to_route('signup.get', 'ユーザー登録', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>