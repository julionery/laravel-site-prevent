<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    @include('site.layout._script_header')

<body id="start">

<!-- Preloader -->
@include('site._preloader')

<!--  Fixed Header  -->
@include('site._header_contato')

<div class="breadcrumb-area clearfix">
    <div class="container">
        <h2 class="page-title">{{ $configuracao->tituloFaleConosco }}</h2>
        <ul class="breadcrumb pull-right">
            <li><a href="{{ route('site.home') }}">{{ $configuracao->itemMenu1 }}</a></li>
            <li class="active">{{ $configuracao->itemMenu6 }}</li>
        </ul>
    </div>
</div>


<!--  Contact  -->
@include('site._contact')

<!--  Footer  -->
@include('site._footer')

<!--  Scripts Footer  -->
@include('site.layout._script_footer')

</body>
</html>