<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$company_name;  ?></title>
</head>
<body>
  <table width="100%" style="font-size:14px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:1px dotted" border="0">
    <tr>
     
    
     <td style="width:100%;text-align:center;padding:10px;" valign="top">
        <b style="font-size:20px;font-family:TIMES NEW ROMAN;"><?=$company_name?></b> <br>
        <p style="font-size:13px"><?=$company_address?><br/>
       Pho: <?=$company_land_phone?>  Mob: <?=$company_mobile?>
        Email: <?=$company_email?><br/><b>GSTIN NO:<?=$gstin_no?></b></p> 
         <b style="margin-top:12px;font-size:14px;"><br>
     </td>
    </tr>
</table>
 <table width="100%" style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:1px dotted; black;" border="0">
    <tr>
        <td style="width:100%;text-align:center;padding:10px;border:0.6px solid black;">
          <h3>  CONSULTATION BILL  </h3>
        </td>
  </tr>
</table>
 <table width="100%" style="font-size:13px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:1px dotted; black;" border="0">
    <tr>
        <td style="width:100%;text-align:center;padding:10px;border:0.6px solid black;">
          <h3>  TOKEN NO: <?=$token_no;  ?> </h3>
        </td>
  </tr>
</table>

 <table width="100%" style="font-size:14px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:1px dotted; black;" border="0">
    <tr>
         <td style="width:65%;text-align:left;padding:10px;border:0.6px solid black;">
            <p><b>Name: <?=$titlename;  ?> <?=$fname;  ?> <?=$lname;  ?>  Age/Sex: <?php if($ageyy) echo $ageyy.'Y'; ?>  <?php if($agemm) echo $agemm.'M'; ?> / <?=$gender;  ?><br/>MR No:<?=$mrdno;  ?><br/>Address:<?=$address;  ?></b></p>
        </td>

        <td style="width:35%;text-align:left;padding:10px;border:0.6px solid black;" valign="top">
          <p><b>Dr: <?=$doctorname;  ?><br/>Appointemnt Date:<?=$appointment_date;  ?></b></p>
        </td>
  </tr>
</table>

 <table width="100%" style="font-size:14px;font-family:Verdana, Arial, Helvetica, sans-serif;margin-top:0%;border-collapse: collapse;border:1px dotted; black;" border="0">
   <tr>  

            <th align="left" style="width:10%;border-bottom: 1px solid black;">SL NO</th>
            <th align="left" style="width:70%;border-bottom: 1px solid black;">Particulars</th>
            <th style="width:20%;border-bottom: 1px solid black;">Amout</th>
  </tr>
  <tbody>
        <tr>
            <td align="left" style="border-bottom: 1px solid black;">1</td>
            <td style="border-bottom: 1px solid black;"></td>
            <td style="border-bottom: 1px solid black;"></td>
        </tr>
        <tr>
            <td align="left" style="border-bottom: 1px solid black;">2</td>
            <td style="border-bottom: 1px solid black;"></td>
            <td style="border-bottom: 1px solid black;"></td>
        </tr>
        <tr>
            <td align="left" style="border-bottom: 1px solid black;">3</td>
            <td style="border-bottom: 1px solid black;"></td>
            <td style="border-bottom: 1px solid black;"></td>
        </tr>
  </tbody>
</table>



<br/><br/><br/><br/><br/><br/>
<p style="text-align: left;">Billed by : <?=$username;  ?> Printed Time:<?php echo date('d F, Y (l) g:i:s A ', strtotime($created_date)); ?></p>

</body>
</html>