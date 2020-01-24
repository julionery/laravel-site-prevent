<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    @include('site.layout._script_header')

<body id="start">

<!-- Preloader -->
@include('site._preloader')

<!--  Fixed Header  -->
@include('site._header_servicos')

<div class="breadcrumb-area clearfix" style="background: #f1f1f161 !important;">
    <div class="container">
        <h2 class="page-title">{{ $configuracao->itemMenu4 }}</h2>
        <ul class="breadcrumb pull-right">
            <li><a href="{{ route('site.home') }}">{{ $configuracao->itemMenu1 }}</a></li>
            <li class="active">{{ $configuracao->itemMenu4 }}</li>
        </ul>
    </div>
</div>


<section id="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <div class="posts-section">
                    <article class="post-entry">
                        <div class="post-media">
                            <img src="{{ asset('eydia/img/blog/post-thumb.jpg') }}" alt="post thumb" class="img-responsive">
                        </div>
                        <div class="post-excerpt">
                            <h2>{{ $servico->titulo }}</h2>
                            <p>{!! $servico->detalhes !!}</p>

                            <ul class="post-share text-right" style="padding-right: 20px">
                                <div class="excerpt-btn">
                                    <a href="{{ url('/contato') }}">Contate-nos</a>
                                </div>
                            </ul>
                        </div>
                    </article>
                    <!-- end .post-entry -->

                </div>
            </div> <!-- end .col-xs-12 col-md-8 -->

            <div class="col-xs-12 col-md-3">
                <div class="right-sidebar">

                    <aside class="sidebar">
                        <h4 class="widget-title">Categorys</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Donec elementum lectus</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Nam suscipit nulla vitae leo</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Duis tristique</a></li>
                        </ul>
                    </aside>
                    <!-- end .sidebar -->

                </div>
            </div> <!-- end .col-xs-12 col-md-4 -->

        </div>
    </div>
</section>





<!--  Footer  -->
@include('site._footer')

<!--  Scripts Footer  -->
@include('site.layout._script_footer')

</body>
</html>