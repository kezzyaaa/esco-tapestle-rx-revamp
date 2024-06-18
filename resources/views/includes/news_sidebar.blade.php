      <nav id="sidebar" class="news-sidebar">
          <div class="pl-0 pt-0 pl-sm-4 pt-sm-3 pt-lg-5 mt-5 mt-sm-0">
              {{-- <h5>Latest News</h5> --}}
            <div class="tab-head">
                <div class="tab-title">Latest News</div>
            </div>
              <div class="sidebars-area mt-3">
                <div class="single-sidebar-widget editors-pick-widget">
                    <div class="editors-pick-post">

                        <div class="post-lists">
                            @foreach($recentNews as $singleRecentNews)
                            <div class="single-post d-flex flex-row">
                                <div class="detail">
                                <a href="{{$singleRecentNews->path()}}"><h6>{{$singleRecentNews->title}}</h6></a>
                                    <ul class="meta">
                                         <li><a href="#"><i class="fa fa-user-o secondary-text-color" aria-hidden="true"></i> {{$singleRecentNews->author}}</a></li>
                                        <li><a href="#"><i class="fa fa-calendar-o secondary-text-color" aria-hidden="true"></i> {{$singleRecentNews->created_at->format("d F, Y")}}</a></li>
                                     </ul>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </nav>
        <style>
            .sidebar-sub-prod{
                position: absolute;
                left: 100%;
                top: 0;
                background: #fff;
                width: 320px;
                opacity: 0;
                visibility: hidden;
                transition: all 50ms;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
                box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
            }
            .dropdown-toggle:hover .sidebar-sub-prod{
                opacity: 1;
                visibility: visible;

            }
        </style>
