@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header " >{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                        <img src="images/j.jpg">
                    @endif

                    {{ __('You are logged in!') }}

 <div class="">                   
<div style="float:left"><strong>a</strong></div>
<div>a</div>
<div>a</div>
<div> <h1>{{ $user->email}} </h1></div>
<img src="../images/j.jpg">

</div> 

</div>
            </div>
        </div>
    </div>
</div>
@endsection
