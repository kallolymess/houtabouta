                @if($errors->any())
                  <br><br>
                  <div class="alert alert-danger">
                    <ul class="list-group">
                      @foreach ($errors->all() as $error)
                      <li class="list-group-item d-flex justify-content-between align-items-center" style="color: firebrick">
                        {{ trans($error) }}
                      </li>
                      @endforeach
                    </ul>
                  </div>
                @endif