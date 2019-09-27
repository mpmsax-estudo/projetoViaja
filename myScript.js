<style type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var largura = $(window).width();
		if (largura <= 921) {
			$("#hire").hide();
			$("#resize").hide();
		}
		else if (tam >= 922) {
			$("#hire").show();
			$("#resize").show();
		}
	});
</script>
</style>
