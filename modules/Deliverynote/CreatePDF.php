<?php
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *
 ********************************************************************************/
 
include('include/DeliveryNotePDF.php');
$pdf=get_do_pdf();

// Request from Customer Portal for downloading the file.
if(isset($_REQUEST['savemode']) && $_REQUEST['savemode'] == 'file')
{
	$deliverynote_id = $_REQUEST['record'];
	$filepath='test/product/'.$deliverynote_id.'_DeliveryOrder.pdf';
	$pdf->Output($filepath,'F'); //added file name to make it work in IE, also forces the download giving the user the option to save

}else {
	$pdf->Output('DeliverOrder.pdf','D'); //added file name to make it work in IE, also forces the download giving the user the option to save
	exit();
}

?>
