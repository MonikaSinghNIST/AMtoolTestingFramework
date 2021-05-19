<?php
if ($have_phones){ 
	$sim['sim'] = "SIM/UICC";
	$sim['nosim'] = "No SIM/UICC";
	foreach ($the_phones as $q){
		$p = explode(';',$q);
		printf ('<tr> <td> <input name="selected_device"');
		printf (' value=%s type="radio"> </td>',$p[0]);
		printf ("<td>%s</td>",$p[1]);
		printf ("<td>%s</td>",$p[2]);
		printf ("<td>%s</td>",$p[3]);
		printf ("<td>%s</td>",$p[4]);
		printf ("<td>%s</td>",$p[5]);
		printf ("<td>%s</td>",$p[6]);
		printf ("<td>%s</td></tr>", $sim[trim($p[7])]);
	}
} else {
	echo '<tr><td colspan="8" align="center"><i>No devices - please use the \'<a href="ft_mdt_get_device.php">Create/Edit Mobile Device List</a>\' page to record your test devices.</i></td></tr>';		
}
?>
