<div class="mdl-card mdl-shadow--2dp maincard">
    @if (!is_null($body))
    {!! nl2br($body) !!}
    @else
    <p>UPDATES FROM REDDIT</p>
    <p>Keep yourself safe and informed</p>
    <p>Visit r/Coronavirus to talk about COVID-19, and visit www.who.int for more information.</p>
    @endif
</div>