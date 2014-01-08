<div class="footer">
	<div class="justify">
		<p>Forex Function &copy; All Rights Reserved</p>
	</div>	
</div>
</div><!--end of container class-->
<?php

$current_url = URL::current();
//echo $current_url;
?>

<script type="text/javascript">
//refreshing the page after every 30 secs

$(document).ready(function(){

setTimeout(function(){

  document.location.href="{{$current_url}}";
  
},500000); // after every 5 minites the page will be refreshed
       

});

</script>

</body>
</html>