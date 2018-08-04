
      <div class="card border-success col-lg-12" style="max-width: 25rem;">

          <form class=""  method="POST" action="search">
            {{ csrf_field() }}

            <legend>Blog Suche</legend>

            <div class="form-group has-success">
              <input class="form-control is-valid" placeholder="" id="s" name="s" type="text">
            </div>

            <div class="form-group">
              <select class="custom-select form-control-sm" name="where">
                <option value="title">Title</option>
                <option value="body">Body</option>
                <option value="all">Alle</option>
              </select>
            </div>

            <div class="form-group">
              <input class="dateBarber form-control form-control-sm" placeholder="Zeitraum Von" id="date_from" name="date_from" type="text">
            </div>

            <div class="form-group">
              <input class="dateBarber form-control form-control-sm" placeholder="Zeitram Bis" id="date_to" name="date_to" type="text">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>

        </div>
        <div class="mb-3">

          <form method="POST" action="event">
            
              @include('layouts.formErrors')

          </form>
        </div>
  
        <div class="card border-danger mb-3" style="max-width: 25rem;">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h4 class="card-title">danger card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <script type="text/javascript">
          $('.dateBarber').datepicker({  
            format: 'yyyy-mm-dd'
          });  
        </script>