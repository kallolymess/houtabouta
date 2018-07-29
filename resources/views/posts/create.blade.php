@extends ('layout')

@section('content')
      
        <div class="col-lg-12">
          <div class="card border-success mb-3" style="max-width: 60rem; min-width: 30rem;">
            <div class="card-header">Create a Post</div>
            <div class="card-body">
              <form method="POST" action="/posts">

                {{ csrf_field() }}
                
                <fieldset>
                  
                  <div class="form-group" style="max-width: 20rem; min-width: 10rem;">
                    <label class="col-form-label" for="inputDefault">Title : </label>
                    <input class="form-control" placeholder="Give your Post a Title" name="title" id="title" type="text">
                  </div>

                  <div class="form-group">
                    <label for="exampleTextarea">Share something : </label>
                    <textarea class="form-control" name="body" id="body" placeholder="Go ahead tell us something here..." rows="6"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Publish</button>
                
                </fieldset>
              </form>
            </div>
          </div>
        </div>

        

@endsection