@include('includes/header')
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
		<li><a href="/">Home</a></li>
		<li><a href="#">Performance</a></li>
		<li class="active"><a href="/analysis">Analysis</a></li>
		<li><a href="#">Strategy</a></li>
		<li><a href="/calender">Calender</a></li>
		<li><a href="#">Broker</a></li>
		<li><a href="#">Bonus</a></li>
		<li><a href="#">Download</a></li>
		<li><a href="#">About</a></li>
	</ul>   
</div><!-- end of .navbar-collapse -->
</nav><!--end of nav-->
</div><!--end of nav div-->

<div class="row">
	<div class="col-md-7">
		<iframe width="100%" height="270" scrolling="no" height="200" frameborder="0" src="http://tools.investing.com/technical_summary.php?pairs=1,2,3,5,7&amp;curr-name-color=%23333333&amp;fields=5m,15m,1h,1d" marginheight="0" marginwidth="0" allowtransparency="true"></iframe>
	</div>
	<div class="col-md-3">	
		<iframe width="100%" scrolling="No" height="270" frameborder="0" border="0" src="http://www.dukascopy.com/freeApplets/sentiment/?p=1&w=200&c=2&d=" style="overflow:hidden;display:inline;background:#ffffff;"></iframe>
	</div>
</div>

<div class="row">
	<div class="col-md-2">
		<img width="120" border="0" class="h2" usemap="#mt5_sell_buy_map" alt="" src="http://informers.instaforex.com/index.php/image_creating/informer/width=140&amp;ss=10&amp;ticker=EURUSD~GBPUSD~AUDUSD~EURJPY~EURGBP~EURCAD&amp;c1=4a494a&amp;c2=cccccc&amp;c3=00FF00&amp;i=1&amp;c4=ff0000&amp;u_jq=1&amp;u_bg=1">
	</div>

	<div class="col-md-2">
		<img width="120" border="0" class="h2" usemap="#mt5_sell_buy_map" alt="" src="http://informers.instaforex.com/index.php/image_creating/informer/width=140&amp;ss=10&amp;ticker=USDJPY~GBPJPY~NZDUSD~EURAUD~AUDNZD~USDCAD&amp;c1=4a494a&amp;c2=cccccc&amp;c3=00FF00&amp;i=1&amp;c4=ff0000&amp;u_jq=1&amp;u_bg=1">
	</div>
</div>
<br><br>

@include('includes/footer')