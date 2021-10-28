@extends('layouts.admin-master')
@section('chat')
    active
@endsection
@section('admin-content')
     <!-- ########## START: MAIN PANEL ########## -->
     <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
          <a class="breadcrumb-item" href="index.html">SHopMama</a>
          <span class="breadcrumb-item active">Chat</span>
        </nav>

        <div class="sl-pagebody">
            <div id="app">
                <chat-component></chat-component>
            </div>
        </div>
    </div>

  <script src="{{ asset('js/app.js') }}" ></script>
@endsection
