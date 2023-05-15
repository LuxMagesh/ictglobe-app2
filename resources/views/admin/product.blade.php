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
                        <div class="">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                            {{session()->get('message')}}
                        
                    </div>
                    @endif
                        <h2 class="h2_font">Add Product</h2>
                        <div class="div_center">
                            <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="design">
                                    <label>Name</label>
                                    <input type="text" name="title" placeholder="add product name" required="">
                                </div>

                                <div class="design">
                                    <label>Description</label>
                                    <input type="text" name="description" placeholder="add product description" required="">
                                </div>

                                <div class="design">
                                    <label>Price</label>
                                    <input type="number" name="price" placeholder="add product price" required="">
                                </div>

                                <div class="design">
                                    <label>Quantity</label>
                                    <input type="number" min="0" name="quantity" placeholder="add quantity" required="">
                                </div>

                                <div class="design">
                                    <label>Category</label>
                                    <select name="category" required="">
                                        <option value="" selected="">Add a Category Here</option>
                                        @foreach($category as $categories)
                                        <option value="{{$categories->category_name}}">{{$categories->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="design">
                                    <label>Discount Price</label>
                                    <input type="text" name="discount_price" placeholder="add discount price">
                                </div>


                                <div class="design">
                                    <label>Image</label>
                                    <input type="file" name="image" required="">
                                </div>
                                <input type="submit" class="btn btn- staxo" name="submit" value="Add Product">
                            </form>
                        </div>
                </div>
        </div>
       <!-- container-scroller -->
       <!-- plugins:js -->
            @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>