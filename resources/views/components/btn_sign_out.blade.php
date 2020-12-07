<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">SIGN OUT</button>
</form>