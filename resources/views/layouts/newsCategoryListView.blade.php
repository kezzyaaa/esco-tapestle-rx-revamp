<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>
	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb')

	<section class="bg-img pb-5 page-background">
		<div class="container container d-lg-flex align-items-stretch">
            <div class="text-break px-md-4 pt-lg-5 pt-3 w-100" style="background: rgba(238, 238, 238, 0.3);">

                <section class="latest-post-area mt-0">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-lg-12 post-list">
                                <div class="latest-post-wrap mb-4">
                                    <div class="news-cat-head">
                                        <div class="cat-title">{{$activeNewsCatSel->title}}</div>
                                    </div>
                                    @foreach($newslist as $singleNews)
                                        <div class="single-latest-post row align-items-center">
                                            <div class="col-md-4 post-left">
                                                <div class="feature-img relative">
                                                    <div class="news-overlay overlay-bg"></div>
                                                    <img class="img-fluid" src="/images/news-banner/thumb/{{$singleNews->banner_thumb}}" alt="{{$singleNews->title}}">
                                                </div>

                                            </div>
                                            <div class="col-md-8 post-right">
                                                <a href="{{$singleNews->path()}}">
                                                    <h4>{{$singleNews->title}}</h4>
                                                </a>
                                                <ul class="meta">
                                                    <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> {{$singleNews->author}}</a></li>
                                                    <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i> {{$singleNews->created_at->format("d F, Y")}}</a></li>

                                                </ul>
                                                <p class="excert">
                                                    {!! $singleNews->description !!}
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                    <div class="d-flex justify-content-center my-3">
                                        {{ $newslist->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')
</html>

<style>
    .td-social-network, .td-social-handler {
        position: relative;
        display: inline-block;
        margin: 0 3px 7px;
        height: 40px;
        min-width: 40px;
        font-size: 11px;
        text-align: center;
        vertical-align: middle;
    }

    .td-social-but-text, .td-social-but-icon {
        display: inline-block;
        position: relative;
    }
    .td-post-sharing-visible, .td-social-sharing-hidden {
        display: inline-block;
    }

    .td-social-network .td-social-but-icon {
        padding-left: 17px;
        padding-right: 17px;
    }
    .td-social-but-text {
        margin-left: -6px;
        padding-left: 12px;
        padding-right: 17px;
        line-height: 40px;
    }
    .td-social-facebook .td-social-but-icon, .td-social-facebook .td-social-but-text {
        background-color: #516eab;
    }
    .td-social-linkedin .td-social-but-icon, .td-social-linkedin .td-social-but-text {
        background-color: #2867B2;
    }

    .td-social-but-icon {
        padding-left: 13px;
        padding-right: 13px;
        line-height: 40px;
        z-index: 1;
    }
    .td-social-but-icon i {
        position: relative;
        top: -1px;
        line-height: 40px;
    }
    .td-social-network {
        color: #fff;
    }
    .td-social-network:hover {
        color: #fff;
    }
    .td-social-network .td-social-but-icon {
        border-top-left-radius: 2px;
        border-bottom-left-radius: 2px;
    }
    .td-social-but-text:before {
        content: '';
        position: absolute;
        top: 12px;
        left: 0;
        width: 1px;
        height: 16px;
        background-color: #fff;
        opacity: .2;
        z-index: 1;
    }
    .tdb_single_categories a {
        pointer-events: auto;
        font-size: 10px;
        display: inline-block;
        margin: 0 5px 5px 0;
        line-height: 1;
        color: #fff;
        padding: 3px 6px 4px;
        white-space: nowrap;
        position: relative;
        vertical-align: middle;
    }

    .tdi_95_ef3 .tdb-cat-bg {
        border-width: 1px;
    }
    .tdb-cat-bg {
        position: absolute;
        background-color: #222;
        border: 1px solid #222;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
    }
</style>
