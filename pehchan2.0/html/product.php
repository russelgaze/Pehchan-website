<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require '../headerandfooter/header.php'; ?>
  </head>
  <body>
    <?php require 'navbar.php'; ?>
    <?php require 'productnav.php';?>
<div class="row">
  <div class="col l2">

  </div>
  <div class="col l10">
    <div id="content">

    </div>

  </div>

</div>
    <?php require '../headerandfooter/footer.php'; ?>
    <script>
    function getDataFromUrl(urlWithContent)
    {
    	// jQuery async request
    	$.ajax(
    	{
    			url: urlWithContent,
    			dataType: "html",
    			success: function(data) {
    																	return $('#content').html(data);
    															},
    			error: function(e)
    			{
    					alert('Error: ' + e);
    			}
    	});
    }
    </script>
    <script type="text/javascript">
    	$("#content").load("producthome.html");
    </script>
  </body>
</html>