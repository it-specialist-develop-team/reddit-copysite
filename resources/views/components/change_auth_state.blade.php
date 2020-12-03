<div class="container mdl-cell mdl-shadow--2dp">
    @auth
        @include('components.btn_logout')
    @endauth
    @guest
    Log in or sign up to leave a comment
        @include('components.btn_login')
        @include('components.btn_signup')
    @endguest
</div>