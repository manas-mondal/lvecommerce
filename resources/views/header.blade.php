<?php 
use App\Http\Controllers\ProductController;
$total= ProductController::cartItem();
 ?>
<div>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Ecom</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Order</a></li>
      
    </ul>
    <form class="navbar-form navbar-left" action="/search">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">cart({{$total}})</a></li>
    </ul>
  </div>
</nav>
</div>