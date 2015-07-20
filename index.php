<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Zakir Dakua">
	<title>D/L Method Calculator</title>
	<link rel="stylesheet" href="style.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<script type="text/javascript" language="Javascript" src="jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var max_fields      = 10; //maximum input boxes allowed
			var wrapper         = $(".field_wrap"); //Fields wrapper
			
			var a_wrapper         = $("#a_interruption_wrap"); //Fields wrapper
			var a_add_button      = $("#a_add_interruption_button"); //Add button ID
			
			var b_wrapper         = $("#b_interruption_wrap"); //Fields wrapper
			var b_add_button      = $("#b_add_interruption_button"); //Add button ID
			
			var x = 1; //initlal text box count
			$(a_add_button).click(function(e){ //on add input button click
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(a_wrapper).append('<div>Over: <input type="text" name="interruption_over_played[]"/> Wicket lost: <input type="text" name="interruption_wiket_lost[]"/> Over lost: <input type="text" name="interruption_over_lost[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
				}
			});
			
			var x = 1; //initlal text box count
			$(b_add_button).click(function(e){ //on add input button click
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
					x++; //text box increment
					$(b_wrapper).append('<div>Over: <input type="text" name="interruption_over_played[]"/> Wicket lost: <input type="text" name="interruption_wiket_lost[]"/> Over lost: <input type="text" name="interruption_over_lost[]"/> <a href="#" class="remove_field">Remove</a></div>'); //add input box
				}
			});
			
			$(wrapper).on("click",".remove_field", function(e){
				e.preventDefault(); $(this).parent('div').remove(); x--;
			})
		});	
	</script>
</head>
<body>
	<div class="container">
		<h1>D/L Method Calculator</h1>
		 <form method="post" action="" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-5">
			<div class="border">
				<h2>Team A</h2>
				<div>
				Initial Over: <input type="text" name="a_initial_over">
				</div>
				<div class="field_wrap" id="a_interruption_wrap">
					<button id="a_add_interruption_button">Add Interruption</button>
					<?php /* ?><div>Over: <input type="text" name="a_interruption_over_played[]"> Wicket lost: <input type="text" name="interruption_wiket_lost[]"> Over lost: <input type="text" name="interruption_over_lost[]"></div><?php */?>
				</div>	
				<div>
				Final Score: <input type="text" name="a_final_over">
				</div>
			</div>
			</div>
			<div class="col-sm-2">
			<div class="border">
				<h2>Result</h2>
				<div>Over: <input type="submit" name="submit" value="calculate"></div>
			</div>
			</div>
			<div class="col-sm-5">
			<div class="border">
				<h2>Team B</h2>
				<div>
				Initial Over: <input type="text" name="b_initial_over">
				</div>
				<div class="field_wrap" id="b_interruption_wrap">
					<button id="b_add_interruption_button">Add Interruption</button>
					<?php /* ?><div>Over: <input type="text" name="interruption_over_played[]"> Wicket lost: <input type="text" name="interruption_wiket_lost[]"> Over lost: <input type="text" name="interruption_over_lost[]"></div><?php */?>
				</div>	
			</div>
			</div>
		</div>
	</div>
</body>
</html>