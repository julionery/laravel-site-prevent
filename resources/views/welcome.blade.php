<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    @include('site.layout._script_header')

<body id="start">

<!-- Preloader -->
@include('site._preloader')

<!--  Fixed Header  -->
@include('site._header')

<!-- Home Banner -->
@include('site._slide')

<!--  Sobre  -->
@include('site._about')

<!--  Institucional  -->
@include('site._institucional')

<!--  Portifólio  -->
@if($portfolio != null)
@include('site._portfolio')
@endif

@if($portfolio == null)
<div class="container"><span class="border"></span></div>
@endif

<!--  Servicos  -->
@include('site._services')


<!--  Equipe  -->
@include('site._equipe')

<!--  Contact  -->
@include('site._contact')

<!--  Footer  -->
@include('site._footer')

<!--  Scripts Footer  -->
@include('site.layout._script_footer')

</body>
</html>