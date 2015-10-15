  <?php

    if (isset($_POST['submit'])) {
    $cell = $_POST["cell"];
    $tissue = $_POST["tissue"];
	$organism = $_POST["organism"];
	$temp = $_POST["temp"];
    $print = $_POST["print"];
    }
    if (!isset($_POST['submit'])) { // if page is not submitted to itself echo the form
    ?>

    <html> <head> </head>

    <title>BioBots</title>
	<div>
		<div class="col-md-8">
           <h3>Send us a Printing Parameters!</h3>
		   <!-- This is the form for input where we log paramters. The action lets you know the page
		        is actually a hidden reload, and not a new page. This is one way of not using a DB-->
				<form method="post" action="<?php echo $PHP_SELF;?>">
					<p><strong>Cell Line:</strong></p>
					<p><input type="text" size="12" maxlength="12" name="cell"></p>
					<p><strong>Tissue Type:</strong></p>
					<p><input type="text" size="12" maxlength="36" name="tissue"></p>
					<p><strong>Organism:</strong></p>
					<input type="text" size="12" maxlength="36" name="organism"></p>
					<p><strong>Temperature:</strong></p>
					<input type="text" size="12" maxlength="36" name="temp"> </p>
					<p><strong>Grade print:</strong></p>
					High Grade<input type="radio" value="High" name="print"> Low Grade<input type="radio" value="Low" name="print"><br />
					<p></br><input type="submit" value="submit" name="submit"></p>
				</form>
		</div>
	</div>


    <?php  } else {
		// The code below will display once the submit button is pressed, retrieving any relevant values.
		echo "<strong>Below are the parameters you have submitted.</strong><br/><br/>";
		echo "You have selected the ".$cell." cell line.<br/><br/><br/>";
		echo "Your Tissue Type is ".$tissue.".<br/><br/><br/>";
		echo "The organism you are working with is ".$organism.".<br/><br/><br/>";
		echo "You wish your run to be set at ".$temp." degrees Fahrenheit.<br/><br/><br/>";
		echo "".$print." grade printing features will be used on this run.<br/><br/><br/><br/>";
		echo "<strong>!!If these are incorrect please hit back on the browser and resubmit!!</strong>";
    }
    ?>
	
        </div>
        <!-- /.row -->

    </div>
    </body>
