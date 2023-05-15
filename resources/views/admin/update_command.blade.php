<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
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
                              <h2>Update Command</h3>
                          </div>
                        </div>
                        <div class="col-12 grid-margin">
                          <div class="card">
                            <div class="card-body">
                            <div class="col-12 grid-margin">
                              <div class="row">
                                  <div class="col-6 grid-margin">
                                      <h4 class="card-title">Edit Command Details</h4>
                                  </div>
                                  <div class="col-6 grid-margin">
                                   
                                  </div>
                              </div>
                            </div>
                            <div class="table-responsive">
                            <form action="{{ url('/update_command_confirm',$commands->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <td>Platform</td>
                                      <td>Operating System</td>
                                      <td>Command Line</td>
                                      <td>Command Line</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                 
                                    <tr> 
                                      
                                    <tr>
                                      <td>
                                      <select name="platform" required="">
                                        <option value="" selected="">Edit Platform Here</option>
                                            @foreach($platforms as $platformss)
                                            <option value="{{$platformss->platform_name}}">{{$platformss->platform_name}}</option>
                                            @endforeach
                                        </select>
                                      </td>
                                      <td>
                                        <select name="operating_system" required="">
                                        <option value="" selected="">Edit Operating System Here</option>
                                            @foreach($data as $data)
                                            <option value="{{$data->os_name}}">{{$data->os_name}}</option>
                                            @endforeach
                                        </select>
                                      </td>
                                      <td><input type="text" name="command_line" placeholder="add command line" required="" value="{{$commands->command_line}}"></td>
                                      <td><input type="text" min="0" name="description" placeholder="add description" required="" value="{{$commands->description}}"></td>
                                      
                                  </tr>
                                    </tr>
                                    
                                   
                                  </tbody>
                                 
                                  
                                    
                           
                                </table>
                                <input type="submit" style="padding-left:40px: padding-right:40"class="btn btn-primary" name="submit" value="Save">
                                <a href="{{url('show_commands')}}"  style="padding-left:40px: padding-right:40:margin-left:80px" class="btn btn-primary" value="Cancel">Cancel</a>
                                </form>  
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