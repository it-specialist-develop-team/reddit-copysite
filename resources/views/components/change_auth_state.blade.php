<div class="container mdl-shadow--2dp">
    @auth
    @include('components.btn_sign_out')
    @endauth
    @guest
    {{-- Log in or sign up to leave a comment --}}
    @include('components.btn_sign_in')
    @include('components.btn_sign_up')
    @endguest
</div>