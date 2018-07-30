@extends ('layout')

@section('content')
      <div class="col-lg-8">

        @if($posts->count())
        @foreach($posts as $post)
        <div class="card border-info mb-3" style="max-width: 60rem; min-width: 30rem;">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3>
              <a href="/posts/{{ trans($post->id) }}"  style="max-width: 60rem; min-width: 30rem;">{{ trans($post->title) }}</a>
            </h3>
            <span class="badge badge-info badge-pill">{{ $post->created_at->toFormattedDateString() }}</span>
          </div>
          <div class="card-body">
            <p class="card-text">{{ trans($post->body) }}</p>
          </div>
        </div>
        @endforeach
        @endif

      </div>

      <div class="col-lg-4">

        @include ('layouts.rightDetail')

      </div>

@endsection