<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
    <style type="text/css">
            .div_center
            {
                text-align: center;
                padding-top: 40px;
            }

            .h2_font
            {
                font-size: 40px;
                padding-bottom: 40px;
            }

            .input_color
            {
                color: black;
            }

            .center
            {
                margin: auto;
                width: 100%;
                text-align: center;
                margin-top: 30px;
                /* border: 3px solid white; */
            }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
      <!-- partial -->
            @include('admin.nav')
       <!-- partial -->

           <div class="main-panel">
                <div class="content-wrapper">
               
                    @if(session()->has('message'))
                          <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                              {{ session()->get('message') }}

                          </div>
                    @endif
                    <div class="row py-2">
            <div class="col-md-12">
                <h2>Platform Details</h3>
            </div>
          </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="col-12 grid-margin">
                    <div class="row">
                        <div class="col-6 grid-margin">
                            <h4 class="card-title">Add Platforms</h4>
                        </div>
                        <div class="col-6 grid-margin">
                            <div class="form-group">
                                <!-- <label for="date_filter">Filter by Date:</label> -->
                                <form action="{{ url('/add_platform') }}" method="POST">
                                    @csrf
                                    <input type="text" name="platform_name" placeholder="Add Platform">
                                    <input type="submit" class="btn btn-outline-primary" name="submit" value="Add">
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                        <tr>
                            <td>Platform</td>
                            <td>Action</td>
                        </tr>
                        </thead>
                        <tbody>
    
                        @foreach($platforms as $platformss)
                        <tr>
                            <td>{{$platformss->platform_name}}</td>
                            <td><a onclick="return confirm('Are you Sure You Want to Delete this Platform')" class="btn btn-outline-secondary" href="{{url('delete_platform', $platformss->id)}}">Delete</td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
                </div>
        </div>




                </div>
           </div>

       <!-- container-scroller -->
       <!-- plugins:js -->
            @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>