<?php
if($charge_id==1)
{
$charge="OPD";}
else if($charge_id==2)
{
$charge="IPD";}
else if($charge_id==3)
{
$charge="LASER";}
else if($charge_id==4)
{
$charge="INJECTION";}
else if($charge_id==5)
{
$charge="INVESTIGATION";}
$charge_id=$charge_id;
?>
<html>
    <body>
       
             <table  width="100%" style="line-height:22px;" >
                <tr>
                    
                    <td colspan="2" style="text-align:center;width:85%">
                        <h3><?=$company_name?></h3>
                        <p><?=$company_address?>   </p>
                        <p>T:<?=$company_land_phone?>|Mob:<?=$company_mobile?></p>
                        <p>E:<?=$company_email?><br/><b>GSTIN NO:<?=$gstin_no?></b></p>
                    </td>
<!--                 <td style="text-align:center;font-weight:bold;width:20%"><p style="width:20%">&nbsp;</p>
                    <barcode type="QR" code="" class="barcode" size="1.0" error="M" />
                    </td>  -->
                </tr>
            </table>
       
       <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border-top: 1px solid black;border-bottom: 1px solid black">
                <tr>
                    
           <td style="width:27%;line-height:10px;text-align:center;font-weight:bold;">
                    <h4>&nbsp;<?=$charge?> BILL</h4>
                   </td>
                    
                </tr>
        </table>
             
         <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border: 1px solid black"> 
          <tr>
                    <td style="line-height:15px;text-align: left;width:15%;"><strong>Bill No</strong></td>
                    <td style="line-height:15px;text-align: left;width:45%">: <?=$invoice_number;  ?></td> 
                    <td style="line-height:15px;text-align: center;width:17%">Date of Admission</td>
                    <td style="line-height:15px;text-align: left;width:23%">: <?=$date_of_admission?></td>
                </tr> 
                 <tr>
                    <td style="line-height:15px;text-align: left;width:15%;">Bill Date</td>
                    <td style="line-height:15px;text-align: left;width:45%">: <?=$bill_date;  ?></td> 
                    <td style="line-height:15px;text-align: center;width:17%"><?php if($charge_id==2){?>Date of Surgery<?php }?></td>
                    <td style="line-height:15px;text-align: left;width:23%"><?php if($charge_id==2){?>:<?php }?><strong> </strong></td>
                </tr>
              </table>
              <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border: 1px solid black"> 
                <tr>
                    <td style="line-height:15px;text-align: left;width:15%;">MRD No</td>
                    <td style="line-height:15px;text-align: left;width:45%">: <strong><?=$mrdno?></strong></td> 
                    <td style="line-height:15px;text-align: center;width:17%;">Contact Number</td>
                    <td style="line-height:15px;text-align: left;width:23%;font-size: 12px">: <?=$mobileno?>  </td>
                </tr>
         
                <tr>
                    <td style="line-height:15px;text-align: left;width:15%;">Patient Name</td>
                    <td style="line-height:15px;text-align: left;width:45%">: <strong><?=$titlename;  ?> <?=$fname;  ?> <?=$lname;  ?>  Age/Sex: <?php if($ageyy) echo $ageyy.'Y'; ?>  <?php if($agemm) echo $agemm.'M'; ?> / <?=$gender;  ?></strong></td> 
                    <td style="line-height:15px;text-align: center;width:17%;">Patient Address</td>
                    <td style="line-height:15px;text-align: left;width:23%;font-size: 12px">: <?=$address?> </td>
                </tr>
         </table>
              
               <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border: 1px solid black"> 
                <tr>
                <td style="line-height:15px;text-align: left;width:15%;">Patient Category</td>
                    <td style="line-height:15px;text-align: left;width:45%">: </td> 
                    <td style="line-height:15px;text-align: center;width:17%">Sub Category</td>
                    <td style="line-height:15px;text-align: left;width:23%">:<strong> </strong></td>
                  </tr>
                </table>
                <table  width="100%" style="line-height:10px;margin-top:0px;font-size: 13;border:  1px solid black"> 
                  <tr>
                    <td style="line-height:15px;text-align: left;width:15%;"><?php if($charge_id==2){?>Surgeon<?php }else {?>Doctor<?php }?> Name</td>
                    <td colspan="3" style="line-height:15px;text-align: left;width:85%">: Dr: <?=$doctorname;  ?></td> 
                </tr>
               </table>
               <br>
            
             <table  width="100%" style="line-height:15px;font-size: 12;height: 100%;border-left: 1px solid black;border-right:  1px solid black;border-top: 1px solid black" >
                <tr>
                    <td style="border-bottom:1px solid black;width:10%;border-right:  1px solid black">Sl NO</td>  
                    <td style="border-bottom:1px solid black;width:70%;border-right:  1px solid black">Particular</td> 
                    <td style="border-bottom:1px solid black;text-align: right;">Amount</td>
                   
                </tr>
              <?php $sl=1; foreach($particulars_details as $data){
        $idval=$data->charge_id;
        $particularid=$data->particulars_id;
        if($idval==1){
            $charges='opdcharge';
            $id="opdcharge_id";
        }
        elseif($idval==2){
            $charges='ipdcharge';
            $id="ipdcharge_id";
        }
        elseif($idval==3){
            $charges='laser';
            $id="laser_id";
        }
        elseif($idval==4){
            $charges='injection';
            $id="injection_id";
        }
        elseif($idval==5){
            $charges='investigation';
            $id="investigation_id";
        }
        $name=$this->db->get_where($charges,"$id=$particularid")->row()->name;
     ?>
                 <tr>
            <td align="left" style="border-bottom: 1px solid black;border-right:  1px solid black"><?= $sl; ?></td>
            <td style="border-bottom: 1px solid black;border-right:  1px solid black"><?= $name; ?></td>
            <td style="border-bottom: 1px solid black;text-align: right;"><?= number_format($data->amount,2); ?></td>
        </tr>
                
            


         <?php    }
         ?>
     
                 </table>
 <br>
            <table style="width:100%;font-size: 14px;">
                <tr>
                    <td style="width: 60%">
                        Total Package Amount: <?=number_format($grand_total,2)?><br>
                        Advance Amount: <?=number_format($advanced_amount,2)?><br>
                        Amount Paid by Patient: <?=number_format($grand_total,2)?><br>
                        Cash: <?=number_format($grand_total,2)?><br>
                        Terms and Conditions:NB: <?=number_format($grand_total,2)?>/-(<?=$net_amount_in_words?>) was directly collected by patient.
                    </td>
                 </tr>
            </table>
            <br/><br/><br/><br/>
             <table style="width:100%;font-size: 12px;">
              <tr>
                 <td colspan="10">
                       <?=$username;  ?><br>
                       Authorised Signatory
                    </td>
              </tr>
             </table>
            
            
        </div>
    </body>
</html>