<nav id="sidebar" class="solution-sidebar">
    <div class="pr-4 pt-5 mt-sm-5 mt-md-0">
        <h5>{!!$sidebar_title!!}</h5>
          <ul class="list-unstyled components mb-5">
              @foreach($sidebar_menus as $sidebar_menu)
          <li><a class="{{ Request::is($sidebar_menu->section.'/'.$sidebar_menu->slug) ? 'active' : '' }} with-trans" href="/{{$sidebar_menu->section}}/{{$sidebar_menu->slug}}">&raquo; {{$sidebar_menu->name}}</a></li>
              @endforeach
          </ul>
        {{-- <div class="mb-5">
            <h5>Tag Cloud</h5>
            <div class="tagcloud mt-4">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
        </div> --}}
    </div>
  </nav>
