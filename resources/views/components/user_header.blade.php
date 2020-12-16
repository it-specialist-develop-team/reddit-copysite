<div class="sub-header">
    <div style="margin-top: 20px" class="sub-header-bar">
        @if ($data->attachment != Null)
        <img class="user_page-img" src="{{asset($data->attachment)}}" id="sub-header-icon">
        @else
        <img src="{{asset('img/sub-header-icon.jpg')}}" id="sub-header-icon">
        @endif
        <p>{{ $data->name}}</p>
    </div>

</div>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">