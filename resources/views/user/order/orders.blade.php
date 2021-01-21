@extends('layouts.fontend-master')

@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
        <div class="sign-in-page">
         <div class="row">
            <div class="col-md-4 ">
                @include('user.inc.sidebar')
            </div>
            <div class="col-md-8 mt-2">
                <div class="table-responsive">
                    <table class="table">
                    <tbody>
                            <tr style="background: #E9EBEC;">
                                <td class="col-md-1">
                                    <label for="">Date</label>
                                </td>
                                <td class="col-md-3">
                                <label for="">Total</label>
                                </td>

                                <td class="col-md-2">
                                    <label for="">Payment</label>
                                </td>

                                <td class="col-md-2">
                                    <label for="">Invoice</label>
                                </td>

                                <td class="col-md-2">
                                    <label for="">Order </label>
                                </td>

                                <td class="col-md-1">
                                    <label for="">Action</label>
                                </td>

                            </tr>

                            <tr>
                                <td class="col-md-1">
                                   <strong>12/12/2021</strong>
                                </td>
                                <td class="col-md-3">
                                <strong>৳200</strong>
                                </td>

                                <td class="col-md-2">
                                <strong>Bkash</strong>
                                </td>

                                <td class="col-md-2">
                                <strong>SPM0152222</strong>
                                </td>

                                <td class="col-md-2">
                                    <span class="badge badge-pill badge-warning" style="background: #418DB9; text:white;">Pending</span>
                                </td>

                            <td class="col-md-1">
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> View</a>

                            <a href="" style="margin-top: 5px;"  class="btn btn-sm btn-danger "><i class="fa fa-download" style="color:white;"></i> Invoice</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
	</div>
</div>
</div>
@endsection
