@if(session()->has('message'))
<p class="alert alert-success mt-0"> {{session('message')}} <a target="new" href="/storage/stock.json"><b>You may Click here to view it</b></a></p>
@endif