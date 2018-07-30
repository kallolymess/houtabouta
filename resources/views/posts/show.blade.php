@extends ('layout')

@section('content')

  <div class="card border-info mb-3" style="max-width: 60rem; min-width: 30rem;">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h3>
        <a href="/posts/{{ trans($postId->id) }}"  style="max-width: 60rem; min-width: 30rem;">{{ trans($postId->title) }}</a>
      </h3>
      <span class="badge badge-info badge-pill">{{ $postId->created_at->toFormattedDateString() }}</span>
    </div>
    <div class="card-body">
      <p class="card-text">{{ trans($postId->body) }}</p>
    </div>
  </div>

@endsection