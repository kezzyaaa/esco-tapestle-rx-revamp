<div id="floating-social-icons">

  @foreach($socialmedias as $socialmedia)
    <div class="fl-fl float-{{$socialmedia->name}}">
        <a href="{{$socialmedia->link}}" {{$socialmedia->type == 'social' ? 'target="_blank"' : ''}}>{{$socialmedia->tag}} <i class="fa {{$socialmedia->icon}}"></i></a>
    </div>
  @endforeach

</div>
