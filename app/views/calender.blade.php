@include('includes/header')
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="/">Home</a></li>
				<li><a href="#">Performance</a></li>
				<li><a href="/analysis">Analysis</a></li>
				<li><a href="#">Strategy</a></li>
				<li class="active"><a href="/calender">Calender</a></li>
				<li><a href="#">Broker</a></li>
				<li><a href="#">Bonus</a></li>
				<li><a href="#">Download</a></li>
				<li><a href="#">About</a></li>
			</ul>   
		</div><!-- end of .navbar-collapse -->
	</nav><!--end of nav-->
</div><!--end of nav div-->

<iframe src="http://ec.forexprostools.com?ecoDayBackground=%23009978&defaultFont=%23ffffff&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&category=_employment,_economicActivity,_inflation,_credit,_centralBanks,_confidenceIndex,_balance,_Bonds&importance=1,2,3&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,48,10,35,7,43,60,36,110,11,26,12,4,5&calType=week&timeZone=8&lang=1" width="100%" height="500" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
<div class="poweredBy">
	<span style="font-size: 11px;color: #333333;text-decoration: none;">
		Real Time Economic Calendar provided by 
		<a href="http://www.Investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a>.
	</span>
</div>
<br><br>
@include('includes/footer')