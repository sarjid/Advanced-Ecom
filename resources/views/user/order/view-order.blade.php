@extends('layouts.fontend-master')

@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Orders</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
        <div class="sign-in-page">
         <div class="row">
            <div class="col-md-3 ">
                @include('user.inc.sidebar')
            </div>
            <div class="col-md-9 mt-2">
                <div class="row">
                   <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h4>Shipping Details </h4></div> <hr>

                        <div class="card-body" style="background: #E9EBEC;">
                        <table class="table">
                             <tr>
                                 <th>Shipping Name: </th>
                                 <th>{{ $order->name }}</th>
                             </tr>
                             <tr>
                                 <th>Shipping Phone: </th>
                                 <th>{{ $order->phone }}</th>
                             </tr>
                             <tr>
                                 <th>Shipping Email: </th>
                                 <th>{{ $order->email }}</th>
                             </tr>
                             <tr>
                                 <th>Division: </th>
                                 <th>{{ $order->division->division_name }}</th>
                             </tr>
                             <tr>
                                 <th>District :</th>
                                 <th>{{ $order->district->district_name }}</th>
                             </tr>

                             <tr>
                                <th>State :</th>
                                <th>{{ $order->state->state_name }}</th>
                            </tr>
                            <tr>
                                <th>Post Code :</th>
                                <th>{{ $order->post_code }}</th>
                            </tr>

                            <tr>
                                <th>Order Date :</th>
                                <th>{{ $order->order_date }}</th>
                            </tr>


                        </table>
                        </div>
                    </div>
                   </div>

                   <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h4>Order Details <span class="text-danger">Invoice: {{ $order->invoice_no }}</span></h4></div>
                        <hr>

                        <div class="card-body" style="background: #E9EBEC;">
                        <table class="table">
                             <tr>
                                 <th>Name: </th>
                                 <th>{{ $order->user->name }}</th>
                             </tr>
                             <tr>
                                 <th>Phone: </th>
                                 <th>{{ $order->user->phone }}</th>
                             </tr>

                             <tr>
                                 <th>Payment Type: </th>
                                 <th>{{ $order->payment_method }}</th>
                             </tr>
                             <tr>
                                 <th>Tranx Id :</th>
                                 <th>{{ $order->transaction_id }}</th>
                             </tr>

                             <tr>
                                <th>Invoice :</th>
                                <th class="text-danger">{{ $order->invoice_no }}</th>

                            </tr>

                            <tr>
                                <th>Order Total:</th>
                                <th>৳{{ $order->amount }}</th>
                            </tr>

                            <tr>
                                <th>Order : </th>
                                <th>
                                   <span class="badge badge-pill badge-warning" style="background: #418DB9; text:white;">{{ $order->status }}</span>
                                </th>
                            </tr>


                        </table>

                        </div>
                    </div>
                   </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                            <tbody>
                                    <tr style="background: #E9EBEC;">
                                        <td class="col-md-1">
                                            <label for="">Image</label>
                                        </td>
                                        <td class="col-md-3">
                                        <label for="">Poduct Name</label>
                                        </td>

                                        <td class="col-md-3">
                                            <label for="">Poduct Code</label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for="">Color</label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for="">Size</label>
                                        </td>

                                        <td class="col-md-2">
                                            <label for="">Quantity</label>
                                        </td>

                                        <td class="col-md-1">
                                            <label for="">Price</label>
                                        </td>

                                    </tr>

                                 @foreach ($orderItems as $item)
                                    <tr>
                                        <td class="col-md-1"><img src="{{ asset($item->product->product_thambnail) }}" height="50px;" width="50px;" alt="imga"></td>
                                        <td class="col-md-3">
                                            <div class="product-name"><strong>{{ $item->product->product_name_en }}</strong>
                                            </div>
                                        </td>

                                        <td class="col-md-2">
                                        <strong>{{ $item->product->product_code }}</strong>
                                        </td>

                                        <td class="col-md-2">
                                            <strong>{{ $item->color }}</strong>
                                            </td>

                                        <td class="col-md-2">
                                        <strong>{{ $item->size }}</strong>
                                        </td>

                                        <td class="col-md-2">
                                        <strong>{{ $item->qty }}</strong>
                                        </td>

                                        <td class="col-md-1">
                                        <strong>৳{{ $item->price }} ({{ $item->price * $item->qty }})</strong>

                                        </td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @if ($order->status !== "delivered")
                @else

                <div class="form-group">
                    <label for="label">Order Return Reason:</label>
                    <textarea name="" id="label"  class="form-control" cols="30" rows="05">Return Reason</textarea>
                </div>
                @endif

            </div>
          </div>
	</div>
</div>
</div>
@endsection
