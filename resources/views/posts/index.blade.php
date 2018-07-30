@extends ('layout')

@section('content')
      <div class="col-lg-8">

        @if($posts->count())
        @foreach($posts as $post)
        
          @include('posts.post')

        @endforeach
        @endif

      </div>

      <div class="col-lg-4">

        @include ('layouts.rightDetail')

      </div>

@endsection