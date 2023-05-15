<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
    <style type="text/css">
        .title_deg
        {
            text-align:center;
            font-size:25px;
            font-weight:bold;
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
                    <h1 class="title_deg">All Orders</h1>
                    <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Address </th>
                            <th> Phone </th>
                            <th> Product title </th>
                            <th> Quantity </th>
                            <th> Price </th>
                            <th> Payment Status </th>
                            <th> Delivery Status </th>
                            <th> Image </th>
                            <th> Delivered </th>
                            <th> Send Email </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $orders)
                          <tr>
                            
                            <td> {{$orders->name}} </td>
                            <td> {{$orders->email}} </td>
                            <td> {{$orders->address}} </td>
                            <td> {{$orders->phone}} </td>
                            <td> {{$orders->product_title}} </td>
                            <td> {{$orders->quantity}} </td>
                            <td> {{$orders->price}} </td>
                            <td> {{$orders->payment_status}} </td>
                            <td> {{$orders->delivery_status}} </td>
                            <td>
                                <img class="img_sz" src="/product/{{$orders->image}}">
                            </td>
                            <td>
                                @if($orders->delivery_status=='processing')
                                    <a class="btn btn-success" onclick="return confirm('Are You The Product is Delivered')" href="{{url('delivered',$orders->id)}}">Delivered</a>
                                @else
                                    <p style="color:green;">Delivered </p>
                                @endif
                            </td>
                            <td>
                                    <a class="btn btn-success" href="{{url('send_email',$orders->id)}}">Send Email</a>
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
            </div>

        </div>
       <!-- container-scroller -->
       <!-- plugins:js -->
            @include('admin.script')
        <!-- End custom js for this page -->
  </body>
</html>