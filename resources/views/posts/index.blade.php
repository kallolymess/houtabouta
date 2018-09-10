@extends ('layout')

@section('content')
      <div class="col-lg-8">

        @if($posts)
        @foreach($posts as $post)
        
          @include('posts.post')

        @endforeach
        @endif

        {{-- {{ $posts->appends($_GET)->links() }} --}}
        {{ $posts->appends(Request::except('page'))->links() }}
        {{-- {{ $posts->appends(['q' => '1'])->links() }} --}}
      </div>

      <div class="col-lg-4">

        @include ('layouts.rightDetail')

      </div>

@endsection