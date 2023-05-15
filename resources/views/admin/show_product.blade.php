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
                <h2 class="title_deg">All Products</h2>
                <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product Details</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Product Image</th>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $productss)
                          <tr> 
                            <td>
                            <img class="img_sz" src="/product/{{$productss->image}}">
                            </td>
                            <td>{{$productss->title}}</td>
                            <td>{{$productss->description}}</td>
                            <td>{{$productss->quantity}}</td>
                            <td>{{$productss->category}}</td>
                            <td>{{$productss->price}}</td>
                            <td>{{$productss->discount_price}}</td>
                            <td>
                            <a class="btn btn-success" href="{{url('update_product',$productss->id)}}">Edit</a>
                            </td>
                            <td>
                               <a class="btn btn-danger" onclick="return confirm('Are You Sure')" href="{{url('delete_product',$productss->id)}}">Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    <!-- <table class="center">
                        </tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Product Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($products as $productss)
                        </tr>
                            <td>{{$productss->title}}</td>
                            <td>{{$productss->description}}</td>
                            <td>{{$productss->quantity}}</td>
                            <td>{{$productss->category}}</td>
                            <td>{{$productss->price}}</td>
                            <td>{{$productss->discount_price}}</td>
                            
                            <td>
                               <img height="100" src="/product/{{$productss->image}}">
                            </td>
                            <td>
                               <a class="btn btn-danger" onclick="return confirm('Are You Sure')" href="{{url('delete_product',$productss->id)}}">Delete</a>
                            </td>
                            <td>
                            <a class="btn btn-success" href="{{url('update_product',$productss->id)}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </table> -->
                </div>
        </div>
       <!-- container-scroller -->
       <!-- plugins:js -->
            @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>