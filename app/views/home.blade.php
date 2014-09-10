@extends('templates.default')

@section('content')

      <div class="jumbotron">
        <h2>Coming Soon to UW-Whitewater</h2>
        <p class="lead">Slightly Used is an online marketplace created specifically for UW-Whitewater students to buy and sell furniture and other living essentials.</p>
		
    <form method="POST" name="sign_up_form" method="post" action="http://localhost/laravel/landing/public/submit" accept-charset="UTF-8" enctype="multipart/form-data" id="sign_up_form" class="form-inline" role="form">
			<input type="email" class="form-control" id="input_email" placeholder="Enter email" name="input_email" autocomplete="off">
			<button type="submit" class="btn btn-primary">Submit</button>
	</form>
      
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h3 style="text-align:center">Buy with ease </h3>
          <p>Do you struggle to find furniture or other living essentials for your new place? 
		  Whether you need a whole living room setup or just a mini fridge, check out what is for sale by other students just down the block from you. 
		  No need to waste time with garage sales.
		      </p>
        </div>

        <div class="col-lg-6">
          <h3 style="text-align:center">Sell with confidence</h3>
          <p>Do you have furniture you need to get rid of after moving or graduating? Well don't throw it to the curb! 
		  All it takes is a couple of minutes to post it on the Slightly Used website. 
		  After all, wouldn't it be nice to get some money for your slightly used items?
		      </p>
        </div>
      </div>
@stop