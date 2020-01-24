<footer class="footer">
    <div class="container">
        @if( $configuracao->fraseRodape != '' )<p
                class=" pull-left item_left">{{ $configuracao->fraseRodape }}</p>@endif
        <ul class="pull-right social-links text-center item_right">
            @if( $configuracao->twitter != '' )
                <li><a href="{{$configuracao->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
            @if( $configuracao->instagram != '' )
                <li><a href="{{$configuracao->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>@endif
            @if( $configuracao->facebook != '' )
                <li><a href="{{$configuracao->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
        </ul>
    </div>
</footer>