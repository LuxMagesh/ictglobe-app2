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
                    <div class="row ">
                        <div class="row py-2">
                          <div class="col-md-12">
                              <h2>Operating System Details</h3>
                          </div>
                        </div>
                        <div class="col-12 grid-margin">
                          <div class="card">
                            <div class="card-body">
                            <div class="col-12 grid-margin">
                              <div class="row">
                                  <div class="col-6 grid-margin">
                                      <h4 class="card-title">Add Operating Systems</h4>
                                  </div>
                                  <div class="col-6 grid-margin">
                                      <div class="form-group">
                                          <!-- <label for="date_filter">Filter by Date:</label> -->
                                          <form action="{{ url('/add_os') }}" method="POST">
                                              @csrf
                                              <input type="text" name="operating_system" placeholder="Add Operating System">
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
                                    <td>Operating System</td>
                                      <td>Action</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach($data as $data)
                                    <tr> 
                                      
                                    <tr>
                                      <td>{{$data->os_name}}</td>
                                      <td><a onclick="return confirm('Are you Sure You Want to Delete this Operating System')" class="btn btn-outline-secondary" href="{{url('delete_os', $data->id)}}">Delete</td>
                                  </tr>
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