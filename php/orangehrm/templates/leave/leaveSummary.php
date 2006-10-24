<?php
/*
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures 
 * all the essential functionalities required for any enterprise. 
 * Copyright (C) 2006 hSenid Software, http://www.hsenid.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 */

/*
 *	Including the language pack
 *
 **/
 $empInfo = $records[count($records)-1][0];
 
 array_pop($records);
  
 $lan = new Language();
 
 require_once($lan->getLangPath("leave/leaveCommon.php"));
 
 if ($empInfo[0] === $_SESSION['empID']) {
 	require_once($lan->getLangPath("leave/leaveSummaryEmployee.php"));
 } else {
 	require_once($lan->getLangPath("leave/leaveSummarySupervisor.php"));
 }
 
 if (isset($_GET['message'])) {
?>
<var><?php echo $_GET['message']; ?></var>
<?php } ?>
<h3><?php echo $lang_Title.date('Y'); ?><hr/></h3>

<?php 
	if (!is_array($records)) { 
?>
	<h5>No records found!</h5>
<?php
	}
?>
<table border="0" cellpadding="0" cellspacing="0">
  <thead>
  	<tr>
		<th class="tableTopLeft"></th>    	
    	<th class="tableTopMiddle"></th>
    	<th class="tableTopMiddle"></th>
    	<th class="tableTopMiddle"></th>
		<th class="tableTopRight"></th>	
	</tr>
	<tr>
		<th class="tableMiddleLeft"></th>    	
    	<th width="180px" class="tableMiddleMiddle"><?php echo $lang_LeaveType;?></th>
    	<th width="180px" class="tableMiddleMiddle"><?php echo $lang_LeaveTaken;?></th>
    	<th width="180px" class="tableMiddleMiddle"><?php echo $lang_LeaveAvailable;?></th>
		<th class="tableMiddleRight"></th>	
	</tr>
  </thead>
  <tbody>
<?php
	$j = 0;	
	if (is_array($records[0]))
		foreach ($records[0] as $record) {
			if(!($j%2)) { 
				$cssClass = 'odd';
			 } else {
			 	$cssClass = 'even';
			 }
			 $j++;
?> 
  <tr>
  	<td class="tableMiddleLeft"></td>
    <td class="<?php echo $cssClass; ?>"><?php echo $record->getLeaveTypeName(); ?></td>
    <td class="<?php echo $cssClass; ?>"><?php echo $record->getLeaveTaken(); ?></td>    
    <td class="<?php echo $cssClass; ?>"><?php echo $record->getLeaveAvailable(); ?></td>
	<td class="tableMiddleRight"></td>
  </tr>

<?php 	
		}
?>	
  </tbody>
  <tfoot>
  	<tr>
		<td class="tableBottomLeft"></td>		
		<td class="tableBottomMiddle"></td>
		<td class="tableBottomMiddle"></td>
		<td class="tableBottomMiddle"></td>
		<td class="tableBottomRight"></td>
	</tr>
  </tfoot>
</table>