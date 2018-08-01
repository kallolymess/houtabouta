@extends ('layout')

@section('content')

        <div class="col-lg-8">
          <div class="card border-info mb-1" style="max-width: 60rem; min-width: 30rem;">

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

            
          <div class="card bg-secondary mb-1" style="max-width: 60rem; min-width: 30rem;">
              <div class="card-header"><h6>Comment</h6></div>
              {{-- <div class="card-body mb-1"> --}}

                @if($postId->comments->count())
                <ul class="list-group  mb-1">
                  @foreach ($postId->comments as $comment)
                  
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ trans($comment->body) }}
                    <span class="badge badge-primary badge-pill">{{ $comment->created_at->toFormattedDateString() }}</span>
                  </li>
                    
                  @endforeach
                </ul>
                @endif

                <form method="POST" action="/posts/{{ $postId->id }}/comment">
  
                  {{ csrf_field() }}
                  
                  <fieldset>
  
                    <div class="form-group">
                      <textarea class="form-control" name="body" id="body" placeholder="Give us a comment about this post..." rows="2" ></textarea>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Publish</button>
                    
                    @include('layouts.formErrors')
                    
                  </fieldset>
                </form>
              {{-- </div> --}}

            </div>
          </div>

@endsection