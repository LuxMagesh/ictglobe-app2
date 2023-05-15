<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
    <style type="text/css">
       .title_deg
        {
            text-align:center;
            font-size:25px;title_deg
            font-weight:bold;
        }
        .center{
                margin:auto;
                width: 50px;
                border: 3px solid white;
                text-align: center;
                margin-top:40px;
        }
        .img_sz
        {
            width:80px!important;
            height:80px!important;
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
                <h2>Command Line Details</h3>
            </div>

          </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="col-12 grid-margin">
                  <div class="row">
                        <div class="col-6 grid-margin">
                            <h4 class="card-title">List of Commands</h4>
                        </div>
                        <div class="col-6 grid-margin">
                   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 grid-margin">
                        <div class="form-group">
                        <form action="{{url('/search')}}" type="get" method="GET">
                            <label for="Commands">Search for Commands:</label><br>
                            <input type="search" class="filter-input"  name="query" placeholder="Search for Commands..." data-column="2">
                            <button type="submit" class="btn btn-outline-primary">Search</button>
                        </form>
                        </div>
                        </div>
                        <div class="col-6 grid-margin">
                            <div class="form-group">
                                <label for="date_filter">Filter by Operating System and Platform:</label>
                                <form action="{{url('/filter')}}" type="get" method="GET">
                                <select  data-column="0" class="filter-select" name="platform" required="">
                                <option value="platform" selected="">Platform</option>
                                  @foreach($platforms as $platformss)
                                  <option value="{{$platformss->platform_name}}">{{$platformss->platform_name}}</option>
                                  @endforeach
                                </select>
                                  <select data-column="1" class="filter-select" name="operating_system" required="">
                                  <option value="operating_system" selected="">Operating System</option>
                                    @foreach($data as $data)
                                    <option value="{{$data->os_name}}">{{$data->os_name}}</option>
                                    @endforeach
                                </select>
                              
                              <button type="submit" class="btn btn-outline-primary">Filter</button>
                              </form>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="table-responsive">
                      <table class="table" id="datatables">
                        <thead>
                          <tr>
                            <th>Platform</th>
                            <th>Operating System</th>
                            <th>Command</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($commands as $commandss)
                          <tr> 
                            
                            <td>{{$commandss->platform}}</td>
                            <td>{{$commandss->operating_system}}</td>
                            <td>{{$commandss->command_line}}</td>
                            <td>{{$commandss->description}}</td>
                            <td><a class="btn btn-outline-secondary" href="{{url('update_command',$commandss->id)}}">Edit</a></td>
                            <td><a class="btn btn-outline-secondary" onclick="return confirm('Are You Sure')" href="{{url('delete_command',$commandss->id)}}">Delete</a></td>
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
       <!-- container-scroller -->
       <!-- plugins:js -->
            @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>