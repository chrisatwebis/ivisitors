<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php
	//Get the birthday
	$birthday = $_GET['birthday'];
  $birthday_time = strtotime( $birthday );
  
	//Insurance Amount
	$amount = $_GET['amount'];
	
	$start = $_GET['start'];
	$end = $_GET['end'];
	$start_time = strtotime( $start );
	$end_time = strtotime( $end );

  //get age from birthday and start time
  $effective_date_age = site_helper_age_from_dob($birthday,$start);
  //get age from birthday
  $current_age = site_helper_age_from_dob($birthday);
  
	global $language;

	$days = (($end_time - $start_time)/(60*60*24))+1;
	$days = round($days);
	if(!isset($start) || !isset($end) || !isset($birthday) || !isset($amount))
	{

		if(!isset($birthday)){
      print "<div class='price_search_msg'>".t("Please chose your 'Birthday'!")."</div>";
    }
    if(!isset($amount)){
      print "<div class='price_search_msg'>".t("Please chose your 'Coverage'!")."</div>";
    }
		if(!isset($start)){
      print "<div class='price_search_msg'>".t("Please chose your insurance policy 'Start Date'!")."</div>";
    }
		if(!isset($end)){
      print "<div class='price_search_msg'>".t("Please chose your insurance policy 'End Date'!")."</div>";
    }		

	}else{
?>
<div class="search_result_summary">
	<span class="item"><span class="label"><?php print t("Current age:");?></span><span class="value"><?php print $current_age;?></span></span>
  <span class="item"><span class="label"><?php print t("Effective date age:");?></span><span class="value"><?php print $effective_date_age;?></span></span>
	<span class="item"><span class="label"><?php print t("Amount:");?></span><span class="value"><?php print $amount;?></span></span>
	<span class="item"><span class="label"><?php print t("Total days:");?></span><span class="value"><?php print $days;?></span></span>
</div>
<table class="search_result">
	<thead>
		<tr>
		  <th class="insurance_company"><?php print t("Insurance Company");?></th>
		  <th class="deduction"><?php print t("Deductible");?></th>
		  <th class="price_per_day"><?php print t("Price/day");?></th>
		  <th class="price_total"><?php print t("Total price");?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $id => $row): ?>
			<?php print $row; ?>
		<?php endforeach; ?>
	</tbody>
</table>
<?php } ?>