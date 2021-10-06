<div>
@if (Route::has('login'))
    <div>
        <a href="{{ url('/')  }}" >home</a>
           
        @auth
            <a href="{{  route('logout') }}">로그아웃</a>
        @else
            <a href="{{ route('login') }}">로그인</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">회원가입</a>
            @endif
        @endauth
    </div>
@endif

</div>