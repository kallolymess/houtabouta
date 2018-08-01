@extends('layout')

@section('content')
        <div class="col-lg-12">
            <div class="card border-secondary mb-1" style="max-width: 60rem; min-width: 30rem;">
          
              <form method="POST" action="event">
          
                {{ csrf_field() }}
          
                <fieldset>
                  {{-- <div class="row"> --}}
                    <div class="row col-xs-16 col-sm-16 col-md-16 col-lg-16">
                      {{-- <div class="card-header"><h6>Comment</h6></div>
                    </div> --}}

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-lg-4">
                      <div class="form-group">
                          <label for="title">Event Name</label>
                        <div class="">
                          <input type="text" name="event_name" class="form-control" value="" />
                        </div>
                      </div>
                    </div>
            
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                      <div class="form-group">
                          <label for="start">Start Time</label>
                        <div class="">
                          <input type="text" name="start_date" class="dateBarber form-control" value="" />
                        </div>
                      </div>
                    </div>
            
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                      <div class="form-group">
                          <label for="end">End Time</label>
                        <div class="">
                          <input type="text" name="end_date" class="dateBarber form-control" value="" />
                        </div>
                      </div>
                    </div>
            
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 text-center"> &nbsp;<br/>
                      <button type="submit" class="btn btn-primary">Publish</button>
                    </div>

                  </div>
          
                  @include('layouts.formErrors')
          
                </fieldset>
              </form>
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">MY Event Details</div>
              <div class="panel-body">
                {!! $calendar_details->calendar() !!}
              </div>
            </div>

            <script type="text/javascript">
              $('.dateBarber').datepicker({  
                format: 'yyyy-mm-dd'
              });  
            </script>  

@endsection