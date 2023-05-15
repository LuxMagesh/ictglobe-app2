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
                <h2 class="h2_font">Add Category</h2>
                    @if(session()->has('message'))
                          <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                              {{ session()->get('message') }}

                          </div>
                    @endif
                    <div class="div_center">
                        <form action="{{ url('/add_category') }}" method="POST">
                            @csrf
                            <input type="text" name="category" placeholder="Write category name">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                        </form>
                        
                    <table class="center">
                        <tr>
                            <td>Category Name</td>
                            <td>Action</td>
                        </tr>

                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->category_name}}</td>
                            <td><a onclick="return confirm('Are you Sure You Want to Delete this Category')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</td>
                        </tr>
                        @endforeach
                    </table>
                    </div>


                </div>
           </div>

       <!-- container-scroller -->
       <!-- plugins:js -->
            @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>