@extends ('layout')

@section('content')
      <div class="col-lg-8">

        <div class="card border-info mb-3" style="max-width: 60rem; min-width: 30rem;">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h4 class="card-title">Primary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card border-info mb-3" style="max-width: 60rem; min-width: 30rem;">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h4 class="card-title">Primary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card border-info mb-3" style="max-width: 60rem; min-width: 30rem;">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h4 class="card-title">Primary card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

      </div>

      <div class="col-lg-4">

        @include ('layouts.rightDetail')

      </div>

@endsection