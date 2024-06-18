      <nav id="sidebar" class="solution-sidebar">
          <div class="pr-4 pt-5">
              <h5>Solutions</h5>
                <ul class="list-unstyled components mb-4">
                    @foreach($solutions as $solution)
                        <li>
                            <a class="with-trans" href="{{$solution->path()}}">&raquo; {{$solution->title}}</a>
                            {{-- <ul class="list-unstyled sidebar-sub-prod"">
                                @foreach($solution->children as $children)
                                    <li><a class="with-trans" href="{{$children->path()}}">&raquo; {{$children->title}}</a>
                                @endforeach
                            </ul> --}}
                        </li>
                    @endforeach
                </ul>
          </div>
          @if ($solution_childs->count() > 0 && $layout !="solutionsDetailsMainView")
            <div>
                <h5 class="mb-4">Unit Operations</h5>
                <ul class="list-unstyled components mb-5 tags">
                    @foreach($solution_childs as $tag)
                        <li>
                            <a href="{{isset($tag->ext_link)?$tag->ext_link:$tag->path()}}">{!!$tag->title!!}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
          @endif

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
