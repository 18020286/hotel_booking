<?php

$rm = new Room();
$cur = $rm->single_room($_GET['id']);

?>
<div class="panel panel-primary">
	<div class="panel-body">
		<table class="table table-hover" border="0">
			<caption><h3 align="left">Room Details</h3></caption>
			<tr>
				<td width="80"><img src="<?php echo $cur->ROOMIMAGE; ?>" width="300" height="300" title="<?php echo $cur->ROOM; ?>"/>
				</td>
				<td align="left" align="left">
					<p>
					<strong>Accomodation </strong>
					<?php
                  		$rm = new Accomodation();  
                  		$res =  $rm->single_accomodation($cur->ACCOMID);

					 echo ': '.$res->ACCOMODATION; ?><br/>
					<strong>Name </strong>
					<?php echo ': '.$cur->ROOM; ?><br/>
					<strong>Description </strong>
					<?php echo ': '.$cur->ROOMDESC; ?><br/>
					<strong>Price </strong>
					<?php echo ': '.$cur->PRICE.'$'; ?><br/>
					<input type="button" value="&laquo Back" class="btn btn-primary" onclick="window.location.href='index.php'" >
					</p>
				
				</td>
			</tr>
		</table>
	
	 </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
