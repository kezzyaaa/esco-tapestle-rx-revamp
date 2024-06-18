<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes/head')
<body>
	@yield('components')
	@include('includes/nav')
    @include('components/breadcumb-prod')

	<section class="bg-img pb-5 page-background">
		<div class="container container d-lg-flex align-items-stretch">
            <div id="content" class="text-break px-md-4 pt-lg-5 pt-3 w-100 pb-4" style="background: rgba(238, 238, 238, 0.3);">
                <div class="td_block_wrap tdb_single_categories tdi_95_ef3 td-pb-border-top td_block_template_1 " data-td-block-uid="tdi_95_ef3">
                <div class="tdb-category td-fix-index"><a class="tdb-entry-category" href="{{$activeNewsSel->newsCategory->path()}}"><span class="tdb-cat-bg"></span>{{$activeNewsSel->newsCategory->title}}</a></div></div>

                <h1 class="mt-3 news-title">{{$activeNewsSel->title}}</h1>
                <p class="mt-3 news-author-date">By <strong>{{$activeNewsSel->author}}</strong> {{$activeNewsSel->created_at->format("d F, Y")}}</p>
                <div class="td-post-sharing-visible">
                    <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-facebook" href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank" style="transition: opacity 0.2s ease 0s; opacity: 1;">
                    <div class="td-social-but-icon"><i class="fa fa-facebook"></i></div>
                    <div class="td-social-but-text">Facebook</div>
                    </a>
                    <a class="td-social-sharing-button td-social-sharing-button-js td-social-network td-social-linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url={{url()->current()}}" target="_blank" style="transition: opacity 0.2s ease 0s; opacity: 1;">
                    <div class="td-social-but-icon"><i class="fa fa-linkedin"></i></div>
                    <div class="td-social-but-text">LinkedIn</div>
                    </a>
                    <div class="talk-bubble tri-right left-in">
                        <div class="talktext" title="share">
                            <p class="mb-0"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</p>
                        </div>
                    </div>
                </div>
                <img class="img-fluid my-4 center-block" src="/images/news-banner/full/{{$activeNewsSel->banner_img}}" alt="{{$activeNewsSel->title}}" title="{{$activeNewsSel->title}}">

                @yield('content')
            </div>
            @include('includes.news_sidebar')
		</div>
	</section>
  @include('includes/footer')
</body>
@include('includes/scripts')
</html>

