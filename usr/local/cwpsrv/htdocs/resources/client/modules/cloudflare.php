<?php
	
	function cf_listrecords($zoneid,$email,$key,$type="A"){
		$url = 'https://api.cloudflare.com/client/v4/zones/'.$zoneid.'/dns_records/?type='.$type.' ';
		$output = shell_exec('
		curl -X GET "'.$url.'" -H "X-Auth-Email: '.$email.'" -H "X-Auth-Key: '.$key.'" -H "Content-Type: application/json"
		');
		return json_decode($output);
	}



$zoneid = '141a4b1806b1c11f3b4d0cdb2e11c967';
$email = 'yokowasis@gmail.com';
$key = '52115cca3a7b3a4ad11462e9b67b9876e88f6';

	$cf = cf_listrecords($zoneid,$email,$key);
	//print_r ($cf);
	?>
		<table>
			<tr>
				<td>Type</td>
				<td>Name</td>
				<td>Value</td>
				<td>Proxied</td>
			</tr>
			<?php for ($i=0;$i<count($cf->result);$i++) : ?>
			<tr>
				<td><?php echo ($cf->result[$i]->type) ?></td>
				<td><?php echo ($cf->result[$i]->name) ?></td>
				<td><?php echo ($cf->result[$i]->content) ?></td>
				<td><?php echo ($cf->result[$i]->proxied) ?></td>
			</tr>
			<?php endfor; ?>
		</table>
Test
	<?php
