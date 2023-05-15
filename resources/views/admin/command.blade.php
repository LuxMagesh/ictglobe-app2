command<!DOCTYPE html>
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

            label
            {
                display: inline-block;
                width: 200px;
            }

            .design
            {
                padding-bottom: 15px;
            }
    </style>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
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
                        <div class="">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                            {{session()->get('message')}}
                        
                    </div>
                    @endif
                    <div class="row ">
                      <div class="row py-2">
                        <div class="col-md-12">
                            <h2>Add a New Command</h3>
                        </div>
                      </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Command Line Details</h4>
             
                    <div class="table-responsive">
                    <form action="{{ url('/add_command') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                      <table class="table">
                        <thead>
                          <tr>
                            <th>Platform</th>
                            <th>Operating System</th>
                            <th>Command</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                          <tr> 
                          <td>
                            <select name="platform" required="">
                              <option value="" selected="">Add a Platform Here</option>
                                @foreach($platforms as $platformss)
                                <option value="{{$platformss->platform_name}}">{{$platformss->platform_name}}</option>
                                @endforeach
                            </select>
                            </td>
                            <td>
                            <select name="operating_system" required="">
                              <option value="" selected="">Add a Operating System Here</option>
                                @foreach($data as $data)
                                <option value="{{$data->os_name}}">{{$data->os_name}}</option>
                                @endforeach
                            </select>
                            </td>
                            <!-- <td><input type="text" name="platform" placeholder="add platform for your command" required=""></td> -->
                            <!-- <td><input type="text" name="operating_system" placeholder="add an operating system for your command" required=""></td> -->
                            <td><input type="text" name="command_line" placeholder="add your command" required=""></td>
                            <td><input type="text" name="description" placeholder="description" required=""></td>
                          </tr>
                          <tr> 
                            <td><input type="submit" class="btn btn-outline-primary" name="submit" value="Confirm Command"></td>
                          </tr>
                        </tbody>
                      </table>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
                  
                </div>
        </div>
        <script>
            $(function () {
            $('.datetimepicker').datetimepicker();
            }); 
        </script>
       <!-- container-scroller -->
       <!-- plugins:js -->
            @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>