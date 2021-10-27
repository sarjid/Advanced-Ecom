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
            <div class="col-md-8 mt-1">
              <div class="card">
                    <div class="card-body">
                        <div id="app">
                            <chat-component></chat-component>
                        </div>
                    </div>
              </div>
            </div>
          </div>
	</div>
</div>
</div>

<script src="{{ asset('js/app.js') }}" defer></script>
@endsection
