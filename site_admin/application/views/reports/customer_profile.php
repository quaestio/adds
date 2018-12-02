<html>
<head>
<title>Profile of <?=$primary_reg_name?></title>
<link href="<?= base_url();?>css/report.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $this->load->view('reports/report_header')?>

	<h4><?=$primary_reg_name?>[<?=$org_name?>]</h4>
<hr />
<table>
    <tr><td>Reg. Type</td><td><?php 
    
    if($reg_type=="B") echo "Buyer";
    if($reg_type=="S") echo "Seller";
    if($reg_type=="C") echo "Both";
    ?></td></tr>
    <tr><td>Org Name :</td><td><?=$org_name?></td></tr>
    <tr><td>Address :</td><td><?=$address_line_1?>, <?=$address_line_2?>, <?=$city.','.$state.', '.$country?></td></tr>
    <tr><td>Pin Code :</td><td><?=$zip?></td></tr>
    <tr><td>Office Email :</td><td><?=$office_email?></td></tr>
    <tr><td>Land Line :</td><td><?=$land_line.' Ext:'.$land_line_ext?></td></tr>
    <tr><td>Primary Reg Name :</td><td><?=$primary_reg_name?></td></tr>
    <tr><td>Designation :</td><td><?=$designation?></td></tr>
    <tr><td>Primary Mobile :</td><td><?=$mobile_primary?></td></tr>
    <tr><td>Alternet Mob :</td><td><?=$alt_mobile_primary?></td></tr>
    <tr><td>Primary Email :</td><td><?=$email_primary?></td></tr>
    <tr><td>Date_registered :</td><td><?=$date_register?></td></tr>
    <tr><td>Email Verified ?</td><td><?=$email_verified?></td></tr>
    <tr><td>Mobile Verified ?</td><td><?=$mobile_verified?></td></tr>
    <tr><td>Admin apprived :</td><td><?=$identity_verified?></td></tr>
    <tr><td>Interested Categories :</td><td><?php foreach ($ic as $i){echo $i['tc_name'].',';}?></td></tr>
 
</table>

</body>
</html>
