
        <div class="card border-info mb-3" style="max-width: 60rem; min-width: 30rem;">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3>
              <a href="/posts/{{ trans($post->id) }}"  style="max-width: 60rem; min-width: 30rem;">{{ trans($post->title) }}</a>
            </h3>
            <span class="badge badge-info badge-pill">{{ Carbon\Carbon::parse($post->created_at)->toDateString() }}</span>
          </div>
          <div class="card-body">
            <p class="card-text">{{ trans($post->body) }}</p>
          </div>
        </div>
