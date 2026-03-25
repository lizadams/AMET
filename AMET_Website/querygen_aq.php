<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML><!-- InstanceBegin template="/Templates/amet3.dwt" codeOutsideHTMLIsLocked="false" -->
<META http-equiv="Cache-control" content="public, max-age=2628000">
<style type="text/css">
<!--
.style2 {font-size: medium}
.style3 {font-size: large}
-->
</style>

<style type="text/css">
<!--
.style3 {font-weight: bold}
.style4 {font-size: medium}
.style5 {font-size: 14px}
.style6 {
	font-size: 14px;
	font-weight: bold;
}
.style7 {font-size: 12px}
-->
</style>

<style type="text/css">
<!--
.style2 {font-size: 12px}
.style3 {font-size: 14px}
.style4 {font-size: 14}
.style5 {font-size: medium}
.style7 {font-size: x-small}
.style8 {font-size: small}
-->
</style>

<style type="text/css">
<!--
.style2 {font-style: italic}
-->
</style>

<style type="text/css">
<!--
.style2 {font-size: 12px}
.style3 {font-size: 14px}
-->
</style>

<HEAD>
<!-- #BeginEditable "doctitle" --> 
<TITLE>Atmospheric Model Evaluation Tool</TITLE>
<style type="text/css">
<!--
.style3 {color: #FF0000}
-->
</style>
<style type="text/css">
<!--
.style4 {font-size: large}
-->
</style>
<style type="text/css">
<!--
.style5 {font-size: medium}
-->
</style>
<style type="text/css">
<!--
.style7 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<style type="text/css">
<!--
.style8 {font-size: 13px}
-->
</style>
<style type="text/css">
<!--
.style9 {font-size: 16px}
-->
</style>
<!-- #EndEditable --> 
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK rel="stylesheet" href="general.css" type="text/css">
<style type="text/css">
<!--
@import url("generalie.css");
.style1 {font-family: Broadway, "Brush Script"}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}//-->
</script>
</HEAD>
<BODY bgcolor="#000000" text="#000000">
<TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
  <TR> 
    <TD background="images/images_03.jpg" valign="TOP"> <TABLE border="0" cellspacing="0" cellpadding="0" width="647">
        <TR> 
          <TD width="594" height="53" background="images/header_02.jpg" class="companyname">&nbsp;</TD>
          <TD background="images/images_03.jpg" width="53"><IMG src="images/images_03.jpg" alt="" name="spacer" width="53" height="53" id="spacer"></TD>
        </TR>
      </TABLE></TD>
  </TR>
  <TR> 
    <TD valign="TOP"> <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
        <TR> 
          <TD valign="top" bgcolor="#FFFFFF">&nbsp; </TD>
          <TD valign="top" bgcolor="#FFFFFF"> <table width="717" border="0" cellspacing="2" cellpadding="5">
              <tr> 
                <td width="703" valign="TOP"><!-- InstanceBeginEditable name="Text" --> 
	<?php
	//	echo "POST/GET Variables: <br>";
	//	foreach ($_POST as $key => $val)
	//	echo "$key =$val<br>";
	//	echo "POST/GET Variables: <br>";
	//	foreach ($_GET as $key => $val)
	//	echo "$key =$val<br>";
	?>
				<h1 class="generic"><font face="Arial, Helvetica, sans-serif">Air Quality Analysis and Statistics Module</font></h1>
            <?php
	  /////////////////////////////////////////////// 
	 include ( 'amet-www-config.php'); 
	 include ( 'amet-lib.php'); 	 
	 ///////////////////////////////////////////////
		$database_id=			$_POST['database_id'];
		$project_id=			$_POST['project_id'];
		$ametplot =        		$_POST['ametplot'];
		$data_format = 			$_POST['data_format']; 
    	        $state=				$_POST['state']; 
		$stat_id=			$_POST['stat_id']; 
		$ob_network_g=			$_POST['ob_network_g']; 
		$ob_network_s=			$_POST['ob_network_s']; 
		$ys=				$_POST['ys']; 
		$ms=				$_POST['ms']; 
		$ds=				$_POST['ds']; 
		$ye=				$_POST['ye']; 
		$me=				$_POST['me']; 
		$de=				$_POST['de']; 
		$ob_time=			$_POST['ob_time']; 
		$fcast_cond=			$_POST['fcast_cond']; 
		$fcast_hr=			$_POST['fcast_hr']; 
		$init_utc=			$_POST['init_utc']; 
		$elev_cond=			$_POST['elev_cond']; 
		$elev=				$_POST['elev'];  
		$lat1=				$_POST['lat1']; 
		$lat2=				$_POST['lat2']; 
		$lon1=				$_POST['lon1']; 
		$lon2=				$_POST['lon2']; 
		$t1=				$_POST['t1']; 
		$t2=				$_POST['t2']; 
		$ws1=				$_POST['ws1']; 
		$ws2=				$_POST['ws2']; 
		$wd1=				$_POST['wd1']; 
		$wd2=				$_POST['wd2']; 
		$q1=				$_POST['q1']; 
		$q2=				$_POST['q2']; 
		$start_hour=			$_POST['start_hour'];
		$end_hour=			$_POST['end_hour'];
		$ind_month=			$_POST['ind_month'];
		$POCode=			$_POST['POCode'];
		$DoW=				$_POST['DoW'];
                $Filter=			$_POST['Filter'];
		$Non_Filter=			$_POST['Non_Filter'];
		$Method_Code=                   $_POST['Method_Code'];
                $O3_NA_Sites=			$_POST['O3_NA_Sites'];
		$custom_query=			$_POST['custom_query'];
//	        $species=                       $_POST['species_in[1]'];	
//                $species=			array_slice($_POST['species_in'],0,1); 
	
 //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
//	Query Generator Script, Executed when submit is pressed
if ($_POST['submit'] == "Run Program (opens in new tab)"){
	//$dbase="test_avgAQ";

// Set some values to NULL if no value input by user.  Must be done to avoid errors
        if (($_POST['x_axis_min']) || ($_POST['x_axis_min'] == '0')) {$x_axis_min = $_POST['x_axis_min'];}
        else { $x_axis_min = "NULL";}
        if (($_POST['x_axis_max']) || ($_POST['x_axis_max'] == '0')) {$x_axis_max = $_POST['x_axis_max'];}
        else { $x_axis_max = "NULL";}
        if (($_POST['y_axis_min']) || ($_POST['y_axis_min'] == '0')) {$y_axis_min = $_POST['y_axis_min'];}
        else { $y_axis_min = "NULL";}
        if (($_POST['y_axis_max']) || ($_POST['y_axis_max'] == '0')) {$y_axis_max = $_POST['y_axis_max'];}
        else { $y_axis_max = "NULL";}
        if (($_POST['nmb_max']) || ($_POST['nmb_max'] == '0')) {$nmb_max = $_POST['nmb_max'];}
        else { $nmb_max = "NULL";}
        if (($_POST['nme_min']) || ($_POST['nme_min'] == '0')) {$nme_min = $_POST['nme_min'];}
        else { $nme_min = "NULL";}
        if (($_POST['nme_max']) || ($_POST['nme_max'] == '0')) {$nme_max = $_POST['nme_max'];}
        else { $nme_max = "NULL";}
        if (($_POST['mb_max']) || ($_POST['mb_max'] == '0')) {$mb_max = $_POST['mb_max'];}
        else { $mb_max = "NULL";}
        if (($_POST['me_min']) || ($_POST['me_min'] == '0')) {$me_min = $_POST['me_min'];}
        else { $me_min = "NULL";}
        if (($_POST['me_max']) || ($_POST['me_max'] == '0')) {$me_max = $_POST['me_max'];}
        else { $me_max = "NULL";}
        if (($_POST['rmse_min']) || ($_POST['rmse_min'] == '0')) {$rmse_min = $_POST['rmse_min'];}
        else { $rmse_min = "NULL";}
        if (($_POST['rmse_max']) || ($_POST['rmse_max'] == '0')) {$rmse_max = $_POST['rmse_max'];}
        else { $rmse_max = "NULL";}
        if (($_POST['cor_min']) || ($_POST['cor_min'] == '0')) {$cor_min = $_POST['cor_min'];}
        else { $cor_min = "NULL";}
        if (($_POST['cor_max']) || ($_POST['cor_max'] == '0')) {$cor_max = $_POST['cor_max'];}
        else { $cor_max = "NULL";}
        if (($_POST['nmb_int']) || ($_POST['nmb_int'] == '0')) {$nmb_int = $_POST['nmb_int'];}
        else { $nmb_int = "NULL";}
        if (($_POST['mb_int']) || ($_POST['mb_int'] == '0')) {$mb_int = $_POST['mb_int'];}
        else { $mb_int = "NULL";}
        if (($_POST['nme_int']) || ($_POST['nme_int'] == '0')) {$nme_int = $_POST['nme_int'];}
        else { $nme_int = "NULL";}
        if (($_POST['cor_int']) || ($_POST['cor_int'] == '0')) {$cor_int = $_POST['cor_int'];}
        else { $cor_int = "NULL";}
        if (($_POST['bias_y_axis_min']) || ($_POST['bias_y_axis_min'] == '0')) {$bias_y_axis_min = $_POST['bias_y_axis_min'];}
        else { $bias_y_axis_min = "NULL";}
        if (($_POST['bias_y_axis_max']) || ($_POST['bias_y_axis_max'] == '0')) {$bias_y_axis_max = $_POST['bias_y_axis_max'];}
        else { $bias_y_axis_max = "NULL";}
        if (($_POST['density_zlim']) || ($_POST['density_zlim'] == '0')) {$density_zlim = $_POST['density_zlim'];}
        else { $density_zlim = "NULL";}
	if (($_POST['num_dens_bins']) || ($_POST['num_dens_bins'] == '0')) {$num_dens_bins = $_POST['num_dens_bins'];}
	else { $num_dens_bins = "NULL";}
	if ($_POST['num_ints']) {$num_ints = $_POST['num_ints'];}
	else { $num_ints = "NULL";}
	if ($_POST['perc_error_max']) {$perc_error_max = $_POST['perc_error_max'];}
	else { $perc_error_max = "NULL";}
	if ($_POST['abs_error_max']) {$abs_error_max = $_POST['abs_error_max'];}
	else { $abs_error_max = "NULL";}
	if (($_POST['perc_range_min']) || ($_POST['perc_range_min'] == "0")) {$perc_range_min = $_POST['perc_range_min'];}
	else { $perc_range_min = "NULL";}
	if ($_POST['perc_range_max']) {$perc_range_max = $_POST['perc_range_max'];}
	else { $perc_range_max = "NULL";}
	if (($_POST['abs_range_min']) || ($_POST['abs_range_min'] == "0")) {$abs_range_min = $_POST['abs_range_min'];}
	else { $abs_range_min = "NULL";}
	if ($_POST['abs_range_max']) {$abs_range_max = $_POST['abs_range_max'];}
	else { $abs_range_max = "NULL";}
	if (($_POST['diff_range_min']) || ($_POST['diff_range_min'] == "0")) {$diff_range_min = $_POST['diff_range_min'];}
	else { $diff_range_min = "NULL";}
	if ($_POST['diff_range_max']) {$diff_range_max = $_POST['diff_range_max'];}
	else { $diff_range_max = "NULL";}
	if ($_POST['rmse_range_max']) {$rmse_range_max = $_POST['rmse_range_max'];}
	else {$rmse_range_max = "NULL";}
        if ($_POST['hist_max']) {$hist_max = $_POST['hist_max'];}
        else {$hist_max = "NULL";}
        if ($_POST['symbsizfac']) {$symbsizfac = $_POST['symbsizfac'];}
        else {$symbsizfac = "1";}
#        if ($_POST['near_zero_color']) { $near_zero_color = $_POST['near_zero_color'];}
#        else {$near_zero_color = "grey50";}
        if ($_POST['plot_radius']) {$plot_radius = $_POST['plot_radius'];}
        else {$plot_radius = "0";}
        if ($_POST['outlier_radius']) {$outlier_radius = $_POST['outlier_radius'];}
        else {$outlier_radius = "0";}
        if ($_POST['fill_opacity']) {$fill_opacity = $_POST['fill_opacity'];}
        else {$fill_opacity = "0.8";}
        if ($_POST['img_height']) {$img_height = $_POST['img_height'];}
        if ($_POST['img_width']) {$img_width = $_POST['img_width'];}
//        $species_ri = $species
	if ($_POST['species_in']) {
//	   $species_ri = "\"".$_POST['species']."\"";
//	   $species = $_POST['species'];
  	   $species_out = implode(",", $_POST['species_in']);
	   $species = array_slice($_POST['species_in'],0,1);
	   $species = implode("", $species);
	   $species_ri = "\"".$species_out."\"";
	}
//	elseif ($_POST['part_species']) {
//	   $species_ri = "\"".$_POST['part_species']."\"";	// species name used in run_info.r file (includes parenthesis)
//	   $species = $_POST['part_species'];				// species name used file names
//	}
//	elseif ($_POST['dep_species']) {
//	   $species_ri = "\"".$_POST['dep_species']."\"";	// species name used in run_info.r file (includes parenthesis)
//	   $species = $_POST['dep_species'];				// species name used file names
//	}
//	elseif ($_POST['tox_species']) {
//	   $species_ri = "\"".$_POST['tox_species']."\"";	// species name used in run_info.r file (includes parenthesis)
//	   $species = $_POST['tox_species'];				// species name used file names
//	}
        elseif ($_POST['custom_species_name']) {
           $species_ri = "\"".$_POST['custom_species_name']."\"";
           $species = $_POST['custom_species_name'];
        }
	else { // If regular species not set, then use custom_species
           $species_ri = "\"".$_POST['custom_species']."\"";
           $split = explode(',', $species_ri); //split string into array seperated by ', '
           $temp = array_values($split)[0]; 
           $species = str_replace("\"","",$temp);
        }
//	elseif ($_POST['tox_species']) {$species = $_POST['tox_species'];}	
//	else {$species = $_POST['custom_species'];} // If regular species not set, then use tox_species
////////////////////////////////////////////////////////////////////////////////////////

	$str=" and s.stat_id=d.stat_id";
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Station Criterion, Query Strings   SELECT d.obs,d.mod from surface d, station s where ...
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//             if ($_POST['state'] == "y") {
                $state="\"";
                $str1=" and (s.state = 'MM'";
                if ($_POST['state_AL'] == "y") { $str1=$str1." or s.state = 'AL'"; $state=$state."AL "; }
		if ($_POST['state_AK'] == "y") { $str1=$str1." or s.state = 'AK'"; $state=$state."AK "; }
		if ($_POST['state_AB'] == "y") { $str1=$str1." or s.state = 'AB'"; $state=$state."AB "; }
		if ($_POST['state_AS'] == "y") { $str1=$str1." or s.state = 'AS'"; $state=$state."AS "; }
		if ($_POST['state_AZ'] == "y") { $str1=$str1." or s.state = 'AZ'"; $state=$state."AZ "; }
		if ($_POST['state_AR'] == "y") { $str1=$str1." or s.state = 'AR'"; $state=$state."AR "; }
		if ($_POST['state_AA'] == "y") { $str1=$str1." or s.state = 'AA'"; $state=$state."AA "; }
		if ($_POST['state_AE'] == "y") { $str1=$str1." or s.state = 'AE'"; $state=$state."AE "; }
		if ($_POST['state_AP'] == "y") { $str1=$str1." or s.state = 'AP'"; $state=$state."AP "; }
		if ($_POST['state_BC'] == "y") { $str1=$str1." or s.state = 'BC'"; $state=$state."BC "; }
		if ($_POST['state_CA'] == "y") { $str1=$str1." or s.state = 'CA'"; $state=$state."CA "; }
		if ($_POST['state_CO'] == "y") { $str1=$str1." or s.state = 'CO'"; $state=$state."CO "; }
		if ($_POST['state_CT'] == "y") { $str1=$str1." or s.state = 'CT'"; $state=$state."CT "; }
		if ($_POST['state_DE'] == "y") { $str1=$str1." or s.state = 'DE'"; $state=$state."DE "; }
		if ($_POST['state_DC'] == "y") { $str1=$str1." or s.state = 'DC'"; $state=$state."DC "; }
		if ($_POST['state_FL'] == "y") { $str1=$str1." or s.state = 'FL'"; $state=$state."FL "; }
		if ($_POST['state_GA'] == "y") { $str1=$str1." or s.state = 'GA'"; $state=$state."GA "; }
		if ($_POST['state_GU'] == "y") { $str1=$str1." or s.state = 'GU'"; $state=$state."GU "; }
		if ($_POST['state_HI'] == "y") { $str1=$str1." or s.state = 'HI'"; $state=$state."HI "; }
		if ($_POST['state_ID'] == "y") { $str1=$str1." or s.state = 'ID'"; $state=$state."ID "; }
		if ($_POST['state_IL'] == "y") { $str1=$str1." or s.state = 'IL'"; $state=$state."IL "; }
		if ($_POST['state_IN'] == "y") { $str1=$str1." or s.state = 'IN'"; $state=$state."IN "; }
		if ($_POST['state_IA'] == "y") { $str1=$str1." or s.state = 'IA'"; $state=$state."IA "; }
                if ($_POST['state_KS'] == "y") { $str1=$str1." or s.state = 'KS'"; $state=$state."KS "; }
                if ($_POST['state_KY'] == "y") { $str1=$str1." or s.state = 'KY'"; $state=$state."KY "; }
                if ($_POST['state_LA'] == "y") { $str1=$str1." or s.state = 'LA'"; $state=$state."LA "; }
                if ($_POST['state_ME'] == "y") { $str1=$str1." or s.state = 'ME'"; $state=$state."ME "; }
                if ($_POST['state_MB'] == "y") { $str1=$str1." or s.state = 'MB'"; $state=$state."MB "; }
                if ($_POST['state_MH'] == "y") { $str1=$str1." or s.state = 'MH'"; $state=$state."MH "; }
                if ($_POST['state_MD'] == "y") { $str1=$str1." or s.state = 'MD'"; $state=$state."MD "; }
                if ($_POST['state_MA'] == "y") { $str1=$str1." or s.state = 'MA'"; $state=$state."MA "; }
                if ($_POST['state_MX'] == "y") { $str1=$str1." or s.state = 'MX'"; $state=$state."MX "; }
                if ($_POST['state_MI'] == "y") { $str1=$str1." or s.state = 'MI'"; $state=$state."MI "; }
                if ($_POST['state_FM'] == "y") { $str1=$str1." or s.state = 'FM'"; $state=$state."FM "; }
                if ($_POST['state_MN'] == "y") { $str1=$str1." or s.state = 'MN'"; $state=$state."MN "; }
                if ($_POST['state_MS'] == "y") { $str1=$str1." or s.state = 'MS'"; $state=$state."MS "; }
                if ($_POST['state_MO'] == "y") { $str1=$str1." or s.state = 'MO'"; $state=$state."MO "; }
                if ($_POST['state_MT'] == "y") { $str1=$str1." or s.state = 'MT'"; $state=$state."MT "; }
                if ($_POST['state_NE'] == "y") { $str1=$str1." or s.state = 'NE'"; $state=$state."NE "; }
                if ($_POST['state_NV'] == "y") { $str1=$str1." or s.state = 'NV'"; $state=$state."NV "; }
                if ($_POST['state_NB'] == "y") { $str1=$str1." or s.state = 'NB'"; $state=$state."NB "; }
                if ($_POST['state_NH'] == "y") { $str1=$str1." or s.state = 'NH'"; $state=$state."NH "; }
                if ($_POST['state_NJ'] == "y") { $str1=$str1." or s.state = 'NJ'"; $state=$state."NJ "; }
                if ($_POST['state_NM'] == "y") { $str1=$str1." or s.state = 'NM'"; $state=$state."NM "; }
                if ($_POST['state_NY'] == "y") { $str1=$str1." or s.state = 'NY'"; $state=$state."NY "; }
                if ($_POST['state_NF'] == "y") { $str1=$str1." or s.state = 'NF'"; $state=$state."NF "; }
                if ($_POST['state_NC'] == "y") { $str1=$str1." or s.state = 'NC'"; $state=$state."NC "; }
                if ($_POST['state_ND'] == "y") { $str1=$str1." or s.state = 'ND'"; $state=$state."ND "; }
                if ($_POST['state_MP'] == "y") { $str1=$str1." or s.state = 'MP'"; $state=$state."MP "; }
                if ($_POST['state_NT'] == "y") { $str1=$str1." or s.state = 'NT'"; $state=$state."NT "; }
                if ($_POST['state_NS'] == "y") { $str1=$str1." or s.state = 'NS'"; $state=$state."NS "; }
                if ($_POST['state_NU'] == "y") { $str1=$str1." or s.state = 'NU'"; $state=$state."NU "; }
                if ($_POST['state_OH'] == "y") { $str1=$str1." or s.state = 'OH'"; $state=$state."OH "; }
                if ($_POST['state_OK'] == "y") { $str1=$str1." or s.state = 'OK'"; $state=$state."OK "; }
                if ($_POST['state_ON'] == "y") { $str1=$str1." or s.state = 'ON'"; $state=$state."ON "; }
                if ($_POST['state_OR'] == "y") { $str1=$str1." or s.state = 'OR'"; $state=$state."OR "; }
                if ($_POST['state_PW'] == "y") { $str1=$str1." or s.state = 'PW'"; $state=$state."PW "; }
                if ($_POST['state_PA'] == "y") { $str1=$str1." or s.state = 'PA'"; $state=$state."PA "; }
                if ($_POST['state_PE'] == "y") { $str1=$str1." or s.state = 'PE'"; $state=$state."PE "; }
                if ($_POST['state_PR'] == "y") { $str1=$str1." or s.state = 'PR'"; $state=$state."PR "; }
                if ($_POST['state_QC'] == "y") { $str1=$str1." or s.state = 'QC'"; $state=$state."QC "; }
                if ($_POST['state_RI'] == "y") { $str1=$str1." or s.state = 'RI'"; $state=$state."RI "; }
                if ($_POST['state_SK'] == "y") { $str1=$str1." or s.state = 'SK'"; $state=$state."SK "; }
                if ($_POST['state_SC'] == "y") { $str1=$str1." or s.state = 'SC'"; $state=$state."SC "; }
                if ($_POST['state_SD'] == "y") { $str1=$str1." or s.state = 'SD'"; $state=$state."SD "; }
                if ($_POST['state_TN'] == "y") { $str1=$str1." or s.state = 'TN'"; $state=$state."TN "; }
                if ($_POST['state_TX'] == "y") { $str1=$str1." or s.state = 'TX'"; $state=$state."TX "; }
                if ($_POST['state_VI'] == "y") { $str1=$str1." or s.state = 'VI'"; $state=$state."VI "; }
                if ($_POST['state_UT'] == "y") { $str1=$str1." or s.state = 'UT'"; $state=$state."UT "; }
                if ($_POST['state_VT'] == "y") { $str1=$str1." or s.state = 'VT'"; $state=$state."VT "; }
                if ($_POST['state_VA'] == "y") { $str1=$str1." or s.state = 'VA'"; $state=$state."VA "; }
                if ($_POST['state_WA'] == "y") { $str1=$str1." or s.state = 'WA'"; $state=$state."WA "; }
                if ($_POST['state_WV'] == "y") { $str1=$str1." or s.state = 'WV'"; $state=$state."WV "; }
                if ($_POST['state_WS'] == "y") { $str1=$str1." or s.state = 'WS'"; $state=$state."WS "; }
                if ($_POST['state_WI'] == "y") { $str1=$str1." or s.state = 'WI'"; $state=$state."WI "; }
                if ($_POST['state_WY'] == "y") { $str1=$str1." or s.state = 'WY'"; $state=$state."WY "; }
                if ($_POST['state_YT'] == "y") { $str1=$str1." or s.state = 'YT'"; $state=$state."YT "; }

                if ($str1 != " and (s.state = 'MM'") {
                   $state=$state."\"";                
 	           $str1=$str1.")";
                   $str=$str.$str1;
                }
//                if ($state == "%") { $state="'All'"; }
//            }
                else {
                   $state="'All'";
                }
/////////////////////////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//:: Remove zero precipitation observations
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

//	if ($_POST['zeroprecip'] == "n") {
//		$str=$str." and d.precip_ob > 0";
//	}
//	if ($_POST['inc_valid'] == "y") {
//		$str=$str." and (d.valid_code != ' ' or d.valid_code IS NULL)";
//	}
//        if ($_POST['inc_valid_amon'] == "y") {
//                $str=$str." and d.valid_code != 'C'";
//        }
/////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//:: Regional Planning Organization -- VISTAS, CENRAP, MANE-VU, LADCO, WRAP
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
       if (($_POST['rpo_VISTAS'] == "y") || ($_POST['rpo_CENRAP']=="y") || ($_POST['rpo_MANEVU']=="y") || ($_POST['rpo_LADCO']=="y") || ($_POST['rpo_WRAP']=="y")) {	
           $str=$str." and (s.state = 'MM'";
           $rpo="\"";
	   if ($_POST['rpo_VISTAS'] == "y") {
	      $str=$str." or s.state='AL' or s.state='FL' or s.state='GA' or s.state='KY' or s.state='MS' or s.state='NC' or s.state='SC' or s.state='TN' or s.state='VA' or s.state='WV'";
              $rpo=$rpo."VISTAS ";
           }	
	   if ($_POST['rpo_CENRAP'] == "y") {
	      $str=$str." or s.state='NE' or s.state='KS' or s.state='OK' or s.state='TX' or s.state='MN' or s.state='IA' or s.state='MO' or s.state='AR' or s.state='LA'";
              $rpo=$rpo."CENRAP ";
	   }
	   if ($_POST['rpo_MANEVU'] == "y") {
	      $str=$str." or s.state='CT' or s.state='DE' or s.state='DC' or s.state='ME' or s.state='MD' or s.state='MA' or s.state='NH' or s.state='NJ' or s.state='NY' or s.state='PA' or s.state='RI' or s.state='VT'";
              $rpo=$rpo."MANE-VU ";
	   }
	   if ($_POST['rpo_LADCO'] == "y") {
	      $str=$str." or s.state='IL' or s.state='IN' or s.state='MI' or s.state='OH' or s.state='WI'";
              $rpo=$rpo."LADCO ";
	   }
	   if ($_POST['rpo_WRAP'] == "y") {
	      $str=$str." or s.state='AK' or s.state='CA' or s.state='OR' or s.state='WA' or s.state='AZ' or s.state='NM' or s.state='CO' or s.state='UT' or s.state='WY' or s.state='SD' or s.state='ND' or s.state='MT' or s.state='ID' or s.state='NV'";
              $rpo=$rpo."WRAP ";
	   }
           $str=$str.")";
           $rpo=$rpo."\"";
        }
	else {
	      $rpo="'None'";
	}   
/////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//:: Principal Component Analysis Regions -- Northeast, Great Lakes, Mid-Atlantic, Southwest
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        if (($_POST['pca_NE'] == "y") || ($_POST['pca_GL'] == "y") || ($_POST['pca_ATL'] == "y") || ($_POST['pca_SW'] == "y") || ($_POST['pca_NE2'] == "y") || ($_POST['pca_GL2'] == "y") || ($_POST['pca_SE'] == "y") || ($_POST['pca_LMW'] == "y") || ($_POST['pca_West'] == "y")) {
           $str=$str." and (s.state = 'MM'";
           $pca="\"";
	   if ($_POST['pca_NE'] == "y") {
	      $str=$str." or s.state='ME' or s.state='NH' or s.state='VT' or s.state='MA' or s.state='NY' or s.state='NJ' or s.state='MD' or s.state='DE' or s.state='CT' or s.state='RI' or s.state='PA' or s.state='DC'";
              $pca=$pca."Northeast ";
           }	
	   if ($_POST['pca_GL'] == "y") {
	      $str=$str." or s.state='MI' or s.state='IL' or s.state='OH' or s.state='IN' or s.state='WI'";
              $pca=$pca."Great Lakes ";
	   }
	   if ($_POST['pca_ATL'] == "y") {
	      $str=$str." or s.state='WV' or s.state='KY' or s.state='TN' or s.state='VA' or s.state='NC' or s.state='SC' or s.state='GA' or s.state='AL'";
              $pca=$pca."Atlantic ";
	   }
	   if ($_POST['pca_SW'] == "y") {
	      $str=$str." or s.state='LA' or s.state='MS' or s.state='MO' or s.state='TX' or s.state='OK'";
              $pca=$pca."South ";
	   }
	   if ($_POST['pca_NE2'] == "y") {
	      $str=$str." or s.state='ME' or s.state='NH' or s.state='VT' or s.state='MA' or s.state='NY' or s.state='NJ' or s.state='MD' or s.state='DE' or s.state='CT' or s.state='RI' or s.state='PA' or s.state='DC' or s.state='VA' or s.state='WV'";
	      $pca=$pca."Northeast2 ";
	   }
       if ($_POST['pca_GL2'] == "y") {
	      $str=$str." or s.state='OH' or s.state='MI' or s.state='IN' or s.state='IL' or s.state='WI'";
	      $pca=$pca."Great Lakes2 ";
	   }
	   if ($_POST['pca_SE'] == "y") {
	      $str=$str." or s.state='NC' or s.state='SC' or s.state='GA' or s.state='FL'";
              $pca=$pca."Southeast ";
	   }
	   if ($_POST['pca_LMW'] == "y") {
	      $str=$str." or s.state='KY' or s.state='TN' or s.state='MS' or s.state='AL' or s.state='LA' or s.state='MO' or s.state='OK' or s.state='AR'";
	      $pca=$pca."Lower Midwest ";
	   }
           if ($_POST['pca_West'] == "y") {
              $str=$str." or s.state='Ca' or s.state='OR' or s.state='WA' or s.state='AZ' or s.state='NV' or s.state='NM'";
              $pca=$pca."West";
           }
           $str=$str.")";
           $pca=$pca."\"";
	}   
	else {
	      $pca="'None'";
	}   
/////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//:: Climate Regions -- Ohio Valley (OV), Upper Midwest (UM), Northeast, Northwest, South, Southwest, Southwest, West, West North Central
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        if ($_POST['clim_reg_OV'] || $_POST['clim_reg_UM'] || $_POST['clim_reg_NE'] || $_POST['clim_reg_NW'] || $_POST['clim_reg_South'] || $_POST['clim_reg_SE'] || $_POST['clim_reg_SW'] || $_POST['clim_reg_West'] || $_POST['clim_reg_WNC']) {
           $str=$str." and (s.state = 'MM'";
           $clim_reg="\""; 
           if ($_POST['clim_reg_OV'] == "y") {
              $str=$str." or s.state='IL' or s.state='IN' or s.state='KY' or s.state='MO' or s.state='OH' or s.state='TN' or s.state='WV'";
              $clim_reg=$clim_reg."Ohio Valley ";
           }
           if ($_POST['clim_reg_UM'] == "y") {
              $str=$str." or s.state='IA' or s.state='MI' or s.state='MN' or s.state='WI'";
              $clim_reg=$clim_reg."Upper Midwest ";
           }
           if ($_POST['clim_reg_NE'] == "y") {
              $str=$str."  or s.state='CT' or s.state='DE' or s.state='ME' or s.state='MD' or s.state='MA' or s.state='NH' or s.state='NJ' or s.state='NY' or s.state='PA' or s.state='RI' or s.state='VT'";
              $clim_reg=$clim_reg."Northeast ";
           }
           if ($_POST['clim_reg_NW'] == "y") {
              $str=$str." or s.state='ID' or s.state='OR' or s.state='WA'";
              $clim_reg=$clim_reg."Northwest ";
           }
           if ($_POST['clim_reg_South'] == "y") {
              $str=$str." or s.state='AR' or s.state='KS' or s.state='LA' or s.state='MS' or s.state='OK' or s.state='TX'";
              $clim_reg=$clim_reg."South ";
           }
           if ($_POST['clim_reg_SE'] == "y") {
              $str=$str." or s.state='AL' or s.state='FL' or s.state='GA' or s.state='SC' or s.state='NC' or s.state='VA'";
              $clim_reg=$clim_reg."Southeast ";
           }
           if ($_POST['clim_reg_SW'] == "y") {
              $str=$str." or s.state='AZ' or s.state='CO' or s.state='NM' or s.state='UT'";
              $clim_reg=$clim_reg."Southwest ";
           }
           if ($_POST['clim_reg_West'] == "y") {
              $str=$str." or s.state='CA' or s.state='NV'";
              $clim_reg=$clim_reg."West ";
           }
           if ($_POST['clim_reg_WNC'] == "y") {
              $str=$str." or s.state='MT' or s.state='NE' or s.state='ND' or s.state='SD' or s.state='WY'";
              $clim_reg=$clim_reg."No. Rockies ";
           }
           $str=$str.")";
           $clim_reg=$clim_reg."\"";
        }
       else {
            $clim_reg="\"None\"";
       }   
/////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//:: World Regions -- North America, Europe, Asia
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        if ($_POST['world_reg']) {
           if ($_POST['world_reg'] == "North America") {
#              $str=$str." and (s.country='United States of America' or s.country='Canada' or s.country='Mexico' or s.country='Bermuda')";
              $str=$str." and (s.lat BETWEEN 0 and 60) and (s.lon BETWEEN -160 and -50)";
              $world_reg = "North America";
           }
           if ($_POST['world_reg'] == "CONUS") {
#              $str=$str." and (s.country='United States of America' or s.country='Canada' or s.country='Mexico' or s.country='Bermuda')";
              $str=$str." and (s.lat BETWEEN 20 and 60) and (s.lon BETWEEN -150 and -55)";
              $world_reg = "CONUS";
           }
           if ($_POST['world_reg'] == "Europe") {
#              $str=$str." and (s.country='IA' or s.state='MI' or s.state='MN' or s.state='WI')";
              $str=$str." and (s.lat BETWEEN 0 and 60) and (s.lon BETWEEN -20 and 30)";
              $world_reg = "Europe";
           }
           if ($_POST['world_reg'] == "Asia") {
#              $str=$str." and (s.country='Russia' or s.country='Republic of Korea' or s.country='Malasia' or s.country='Japan' or s.country='Thailand' or s.country='Vietnam' or s.country='Nepal' or s.country='Taiwan')";
              $str=$str." and (s.lat BETWEEN 0 and 60) and (s.lon BETWEEN 100 and 160)";
              $world_reg = "Asia";
           }
           if ($_POST['world_reg'] == "South America") {
#              $str=$str." and (s.country='Brazil' or s.country='Chile' or s.Country='Paraguay')";
              $str=$str." and (s.lat BETWEEN -70 and 0) and (s.lon BETWEEN -160 and -50)";
              $world_reg = "South America";
           }
        }
//      else {
//            $clim_reg="None";
//      }
/////////////////////////////////////////////////////////////////////////////


//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//:: DISCOVER-AQ Regions -- 4km Baltimore, 1km Baltimore, 2km SJV
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($_POST['discovaq']) {
	   if ($_POST['discovaq'] == "DISCOVERAQ_4km") {
	      $str=$str." and (d.stat_id='Appalac005' or d.stat_id='Billeri011' or d.stat_id='Brookha017' or d.stat_id='CCNY032' or d.stat_id='COVE_SE041' or d.stat_id='Dayton043' or d.stat_id='DRAGON_044' or d.stat_id='DRAGON_045' or d.stat_id='DRAGON_046' or d.stat_id='DRAGON_047' or d.stat_id='DRAGON_048' or d.stat_id='DRAGON_050' or d.stat_id='DRAGON_051' or d.stat_id='DRAGON_052' or d.stat_id='DRAGON_053' or d.stat_id='DRAGON_054' or d.stat_id='DRAGON_055' or d.stat_id='DRAGON_057' or d.stat_id='DRAGON_058' or d.stat_id='DRAGON_059' or d.stat_id='DRAGON_061' or d.stat_id='DRAGON_063' or d.stat_id='DRAGON_065' or d.stat_id='DRAGON_068' or d.stat_id='DRAGON_069' or d.stat_id='DRAGON_070' or d.stat_id='DRAGON_071' or d.stat_id='DRAGON_072' or d.stat_id='DRAGON_073' or d.stat_id='DRAGON_074' or d.stat_id='DRAGON_078' or d.stat_id='DRAGON_080' or d.stat_id='DRAGON_082' or d.stat_id='DRAGON_083' or d.stat_id='DRAGON_084' or d.stat_id='DRAGON_086' or d.stat_id='DRAGON_087' or d.stat_id='DRAGON_088' or d.stat_id='DRAGON_090' or d.stat_id='DRAGON_093' or d.stat_id='DRAGON_096' or d.stat_id='DRAGON_097' or d.stat_id='DRAGON_098' or d.stat_id='DRAGON_099' or d.stat_id='Easton_101' or d.stat_id='Egbert102' or d.stat_id='Georgia115' or d.stat_id='GSFC118' or d.stat_id='Harvard122' or d.stat_id='LISCO140' or d.stat_id='SERC187' or d.stat_id='Toronto207' or d.stat_id='UMBC215' or d.stat_id='Wallops223' or d.stat_id='090010017' or d.stat_id='090011123' or d.stat_id='090013007' or d.stat_id='090019003' or d.stat_id='090031003' or d.stat_id='090050005' or d.stat_id='090070007' or d.stat_id='090090027' or d.stat_id='090093002' or d.stat_id='090110124' or d.stat_id='090131001' or d.stat_id='100010002' or d.stat_id='100031007' or d.stat_id='100031010' or d.stat_id='100031013' or d.stat_id='100032004' or d.stat_id='100051002' or d.stat_id='100051003' or d.stat_id='110010041' or d.stat_id='110010043' or d.stat_id='130550001' or d.stat_id='130590002' or d.stat_id='130670003' or d.stat_id='130730001' or d.stat_id='130850001' or d.stat_id='130890002' or d.stat_id='130970004' or d.stat_id='131210055' or d.stat_id='131350002' or d.stat_id='132130003' or d.stat_id='132230003' or d.stat_id='132450091' or d.stat_id='132470001' or d.stat_id='210130002' or d.stat_id='210131002' or d.stat_id='210190017' or d.stat_id='210373002' or d.stat_id='210430500' or d.stat_id='210670012' or d.stat_id='210890007' or d.stat_id='211130001' or d.stat_id='211930003' or d.stat_id='211950002' or d.stat_id='211990003' or d.stat_id='240030014' or d.stat_id='240051007' or d.stat_id='240053001' or d.stat_id='240090011' or d.stat_id='240130001' or d.stat_id='240150003' or d.stat_id='240170010' or d.stat_id='240210037' or d.stat_id='240230002' or d.stat_id='240251001' or d.stat_id='240259001' or d.stat_id='240290002' or d.stat_id='240313001' or d.stat_id='240330030' or d.stat_id='240338003' or d.stat_id='240430009' or d.stat_id='245100054' or d.stat_id='250010002' or d.stat_id='250034002' or d.stat_id='250051002' or d.stat_id='250070001' or d.stat_id='250092006' or d.stat_id='250095005' or d.stat_id='250130008' or d.stat_id='250150103' or d.stat_id='250154002' or d.stat_id='250170009' or d.stat_id='250171102' or d.stat_id='250213003' or d.stat_id='250250041' or d.stat_id='250250042' or d.stat_id='250270015' or d.stat_id='250270024' or d.stat_id='260490021' or d.stat_id='260492001' or d.stat_id='260630007' or d.stat_id='260910007' or d.stat_id='260990009' or d.stat_id='260991003' or d.stat_id='261250001' or d.stat_id='261470005' or d.stat_id='261610008' or d.stat_id='261630001' or d.stat_id='261630019' or d.stat_id='330050007' or d.stat_id='330111011' or d.stat_id='330115001' or d.stat_id='340010006' or d.stat_id='340030006' or d.stat_id='340071001' or d.stat_id='340110007' or d.stat_id='340130003' or d.stat_id='340150002' or d.stat_id='340170006' or d.stat_id='340190001' or d.stat_id='340210005' or d.stat_id='340230011' or d.stat_id='340250005' or d.stat_id='340273001' or d.stat_id='340290006' or d.stat_id='340315001' or d.stat_id='360010012' or d.stat_id='360050133' or d.stat_id='360130006' or d.stat_id='360130011' or d.stat_id='360150003' or d.stat_id='360270007' or d.stat_id='360290002' or d.stat_id='360410005' or d.stat_id='360430005' or d.stat_id='360530006' or d.stat_id='360551007' or d.stat_id='360610135' or d.stat_id='360631006' or d.stat_id='360650004' or d.stat_id='360671015' or d.stat_id='360715001' or d.stat_id='360750003' or d.stat_id='360790005' or d.stat_id='360810124' or d.stat_id='360830004' or d.stat_id='360850067' or d.stat_id='360870005' or d.stat_id='360910004' or d.stat_id='361010003' or d.stat_id='361030002' or d.stat_id='361030004' or d.stat_id='361030009' or d.stat_id='361111005' or d.stat_id='361173001' or d.stat_id='361192004' or d.stat_id='370030004' or d.stat_id='370110002' or d.stat_id='370210030' or d.stat_id='370270003' or d.stat_id='370330001' or d.stat_id='370370004' or d.stat_id='370510008' or d.stat_id='370511003' or d.stat_id='370590003' or d.stat_id='370630015' or d.stat_id='370650099' or d.stat_id='370670022' or d.stat_id='370670028' or d.stat_id='370670030' or d.stat_id='370671008' or d.stat_id='370690001' or d.stat_id='370750001' or d.stat_id='370770001' or d.stat_id='370810013' or d.stat_id='370870035' or d.stat_id='370870036' or d.stat_id='370990005' or d.stat_id='371010002' or d.stat_id='371070004' or d.stat_id='371090004' or d.stat_id='371170001' or d.stat_id='371190041' or d.stat_id='371191005' or d.stat_id='371191009' or d.stat_id='371290002' or d.stat_id='371450003' or d.stat_id='371470006' or d.stat_id='371570099' or d.stat_id='371590021' or d.stat_id='371590022' or d.stat_id='371730002' or d.stat_id='371790003' or d.stat_id='371830014' or d.stat_id='371830016' or d.stat_id='371990004' or d.stat_id='390030009' or d.stat_id='390071001' or d.stat_id='390090004' or d.stat_id='390170004' or d.stat_id='390170018' or d.stat_id='390230001' or d.stat_id='390230003' or d.stat_id='390250022' or d.stat_id='390271002' or d.stat_id='390350034' or d.stat_id='390350060' or d.stat_id='390350064' or d.stat_id='390355002' or d.stat_id='390410002' or d.stat_id='390490029' or d.stat_id='390490037' or d.stat_id='390490081' or d.stat_id='390550004' or d.stat_id='390570006' or d.stat_id='390610006' or d.stat_id='390610040' or d.stat_id='390810017' or d.stat_id='390830002' or d.stat_id='390850003' or d.stat_id='390850007' or d.stat_id='390870011' or d.stat_id='390870012' or d.stat_id='390890005' or d.stat_id='390930018' or d.stat_id='390950024' or d.stat_id='390950027' or d.stat_id='390950034' or d.stat_id='390970007' or d.stat_id='390990013' or d.stat_id='391030004' or d.stat_id='391090005' or d.stat_id='391130037' or d.stat_id='391331001' or d.stat_id='391510016' or d.stat_id='391510022' or d.stat_id='391514005' or d.stat_id='391530020' or d.stat_id='391550009' or d.stat_id='391550011' or d.stat_id='391650007' or d.stat_id='391670004' or d.stat_id='391730003' or d.stat_id='420010002' or d.stat_id='420030008' or d.stat_id='420030010' or d.stat_id='420030067' or d.stat_id='420031005' or d.stat_id='420050001' or d.stat_id='420070002' or d.stat_id='420070005' or d.stat_id='420070014' or d.stat_id='420110006' or d.stat_id='420110011' or d.stat_id='420130801' or d.stat_id='420170012' or d.stat_id='420210011' or d.stat_id='420270100' or d.stat_id='420290100' or d.stat_id='420334000' or d.stat_id='420430401' or d.stat_id='420431100' or d.stat_id='420450002' or d.stat_id='420490003' or d.stat_id='420550001' or d.stat_id='420590002' or d.stat_id='420630004' or d.stat_id='420690101' or d.stat_id='420692006' or d.stat_id='420710007' or d.stat_id='420710012' or d.stat_id='420730015' or d.stat_id='420770004' or d.stat_id='420791100' or d.stat_id='420791101' or d.stat_id='420810100' or d.stat_id='420850100' or d.stat_id='420890002' or d.stat_id='420910013' or d.stat_id='420950025' or d.stat_id='420958000' or d.stat_id='420990301' or d.stat_id='421010004' or d.stat_id='421010024' or d.stat_id='421174000' or d.stat_id='421250005' or d.stat_id='421250200' or d.stat_id='421255001' or d.stat_id='421290006' or d.stat_id='421290008' or d.stat_id='421330008' or d.stat_id='421330011' or d.stat_id='440030002' or d.stat_id='440071010' or d.stat_id='440090007' or d.stat_id='450010001' or d.stat_id='450030003' or d.stat_id='450070005' or d.stat_id='450150002' or d.stat_id='450190046' or d.stat_id='450210002' or d.stat_id='450250001' or d.stat_id='450310003' or d.stat_id='450370001' or d.stat_id='450450016' or d.stat_id='450451003' or d.stat_id='450730001' or d.stat_id='450770002' or d.stat_id='450790007' or d.stat_id='450790021' or d.stat_id='450791001' or d.stat_id='450830009' or d.stat_id='450910006' or d.stat_id='470010101' or d.stat_id='470090101' or d.stat_id='470090102' or d.stat_id='470651011' or d.stat_id='470654003' or d.stat_id='470890002' or d.stat_id='470930021' or d.stat_id='470931020' or d.stat_id='471050109' or d.stat_id='471210104' or d.stat_id='471550101' or d.stat_id='471550102' or d.stat_id='471632002' or d.stat_id='471632003' or d.stat_id='500030004' or d.stat_id='510030001' or d.stat_id='510130020' or d.stat_id='510330001' or d.stat_id='510360002' or d.stat_id='510410004' or d.stat_id='510590030' or d.stat_id='510610002' or d.stat_id='510690010' or d.stat_id='510850003' or d.stat_id='510870014' or d.stat_id='511071005' or d.stat_id='511130003' or d.stat_id='511390004' or d.stat_id='511530009' or d.stat_id='511611004' or d.stat_id='511630003' or d.stat_id='511650003' or d.stat_id='511790001' or d.stat_id='511970002' or d.stat_id='515100009' or d.stat_id='518000004' or d.stat_id='518000005' or d.stat_id='540030003' or d.stat_id='540110006' or d.stat_id='540250003' or d.stat_id='540291004' or d.stat_id='540390010' or d.stat_id='540610003' or d.stat_id='540690010' or d.stat_id='541071002' or d.stat_id='090010010' or d.stat_id='090013005' or d.stat_id='090032006' or d.stat_id='090091123' or d.stat_id='090092123' or d.stat_id='090113002' or d.stat_id='100010003' or d.stat_id='100031003' or d.stat_id='100031012' or d.stat_id='110010042' or d.stat_id='130630091' or d.stat_id='130670004' or d.stat_id='130892001' or d.stat_id='131150003' or d.stat_id='131210032' or d.stat_id='131210039' or d.stat_id='131390003' or d.stat_id='132450005' or d.stat_id='132950002' or d.stat_id='210190002' or d.stat_id='210670014' or d.stat_id='211510003' or d.stat_id='240031003' or d.stat_id='240330025' or d.stat_id='245100006' or d.stat_id='245100007' or d.stat_id='245100008' or d.stat_id='245100040' or d.stat_id='250035001' or d.stat_id='250051004' or d.stat_id='250096001' or d.stat_id='250130016' or d.stat_id='250132009' or d.stat_id='250230004' or d.stat_id='250250002' or d.stat_id='250250027' or d.stat_id='250250043' or d.stat_id='250270016' or d.stat_id='250270023' or d.stat_id='261150005' or d.stat_id='261630005' or d.stat_id='261630015' or d.stat_id='261630016' or d.stat_id='261630025' or d.stat_id='261630033' or d.stat_id='261630036' or d.stat_id='261630038' or d.stat_id='261630039' or d.stat_id='330111015' or d.stat_id='330150018' or d.stat_id='340011006' or d.stat_id='340030003' or d.stat_id='340070009' or d.stat_id='340071007' or d.stat_id='340150004' or d.stat_id='340171003' or d.stat_id='340172002' or d.stat_id='340210008' or d.stat_id='340218001' or d.stat_id='340230006' or d.stat_id='340270004' or d.stat_id='340292002' or d.stat_id='340310005' or d.stat_id='340390004' or d.stat_id='340390006' or d.stat_id='340392003' or d.stat_id='340410006' or d.stat_id='340410007' or d.stat_id='360010005' or d.stat_id='360050080' or d.stat_id='360290005' or d.stat_id='360470122' or d.stat_id='360590008' or d.stat_id='360610079' or d.stat_id='360610128' or d.stat_id='360610134' or d.stat_id='360632008' or d.stat_id='360710002' or d.stat_id='360850055' or d.stat_id='361191002' or d.stat_id='370010002' or d.stat_id='370210034' or d.stat_id='370350004' or d.stat_id='370510009' or d.stat_id='370570002' or d.stat_id='370610002' or d.stat_id='370650004' or d.stat_id='370710016' or d.stat_id='370810014' or d.stat_id='370870012' or d.stat_id='370990006' or d.stat_id='371110004' or d.stat_id='371190003' or d.stat_id='371190042' or d.stat_id='371190043' or d.stat_id='371210001' or d.stat_id='371230001' or d.stat_id='371550005' or d.stat_id='371830020' or d.stat_id='371890003' or d.stat_id='371910005' or d.stat_id='390090003' or d.stat_id='390170003' or d.stat_id='390170015' or d.stat_id='390170016' or d.stat_id='390230005' or d.stat_id='390290020' or d.stat_id='390290022' or d.stat_id='390350038' or d.stat_id='390350045' or d.stat_id='390350065' or d.stat_id='390351002' or d.stat_id='390490024' or d.stat_id='390490025' or d.stat_id='390570005' or d.stat_id='390610014' or d.stat_id='390610042' or d.stat_id='390615001' or d.stat_id='390810001' or d.stat_id='390811001' or d.stat_id='390851001' or d.stat_id='390933002' or d.stat_id='390950026' or d.stat_id='390950028' or d.stat_id='390990005' or d.stat_id='390990006' or d.stat_id='390990014' or d.stat_id='391130032' or d.stat_id='391137001' or d.stat_id='391330002' or d.stat_id='391450013' or d.stat_id='391450019' or d.stat_id='391510017' or d.stat_id='391510020' or d.stat_id='391530017' or d.stat_id='391530023' or d.stat_id='391550005' or d.stat_id='391550006' or d.stat_id='420030002' or d.stat_id='420030064' or d.stat_id='420030092' or d.stat_id='420030093' or d.stat_id='420031008' or d.stat_id='420031301' or d.stat_id='420033007' or d.stat_id='420410101' or d.stat_id='420950027' or d.stat_id='421010047' or d.stat_id='421010055' or d.stat_id='421010057' or d.stat_id='421010449' or d.stat_id='421010649' or d.stat_id='421011002' or d.stat_id='440070022' or d.stat_id='440070026' or d.stat_id='440070027' or d.stat_id='440070028' or d.stat_id='450190048' or d.stat_id='450410003' or d.stat_id='450450009' or d.stat_id='450450015' or d.stat_id='450630008' or d.stat_id='450790019' or d.stat_id='470090011' or d.stat_id='470110103' or d.stat_id='470111002' or d.stat_id='470650006' or d.stat_id='470650031' or d.stat_id='470654002' or d.stat_id='470930028' or d.stat_id='470931013' or d.stat_id='470931017' or d.stat_id='471050108' or d.stat_id='471070101' or d.stat_id='471071002' or d.stat_id='471450004' or d.stat_id='471450103' or d.stat_id='471451001' or d.stat_id='471631007' or d.stat_id='471730105' or d.stat_id='510350001' or d.stat_id='510410003' or d.stat_id='510470002' or d.stat_id='510870015' or d.stat_id='511010003' or d.stat_id='511870004' or d.stat_id='515100020' or d.stat_id='515200006' or d.stat_id='516300004' or d.stat_id='516500008' or d.stat_id='516700010' or d.stat_id='516800015' or d.stat_id='517100024' or d.stat_id='517700011' or d.stat_id='517700015' or d.stat_id='517750011' or d.stat_id='518100008' or d.stat_id='518400002' or d.stat_id='540090005' or d.stat_id='540391005' or d.stat_id='540490006' or d.stat_id='540511002' or d.stat_id='540810002' or d.stat_id='090010012' or d.stat_id='100031008' or d.stat_id='110010023' or d.stat_id='131210048' or d.stat_id='250094005' or d.stat_id='250250040' or d.stat_id='330110020' or d.stat_id='340131003' or d.stat_id='340171002' or d.stat_id='340390003' or d.stat_id='360050112' or d.stat_id='360050113' or d.stat_id='360291013' or d.stat_id='360291014' or d.stat_id='360470052' or d.stat_id='360470118' or d.stat_id='360470121' or d.stat_id='360590005' or d.stat_id='360652001' or d.stat_id='360670017' or d.stat_id='360810120' or d.stat_id='360850111' or d.stat_id='370130151' or d.stat_id='370670023' or d.stat_id='371290006' or d.stat_id='390010001' or d.stat_id='390133002' or d.stat_id='390350051' or d.stat_id='390350053' or d.stat_id='390490005' or d.stat_id='390490034' or d.stat_id='390610021' or d.stat_id='390810018' or d.stat_id='390810020' or d.stat_id='390850006' or d.stat_id='390951003' or d.stat_id='391051001' or d.stat_id='391130028' or d.stat_id='391130034' or d.stat_id='391150004' or d.stat_id='391450020' or d.stat_id='391450021' or d.stat_id='391450022' or d.stat_id='391530022' or d.stat_id='391570006' or d.stat_id='420010001' or d.stat_id='420030003' or d.stat_id='420030031' or d.stat_id='420030038' or d.stat_id='420033006' or d.stat_id='420037004' or d.stat_id='420951000' or d.stat_id='421230004' or d.stat_id='440070012' or d.stat_id='450430011' or d.stat_id='450430012' or d.stat_id='450630009' or d.stat_id='450630010' or d.stat_id='450770003' or d.stat_id='470110102' or d.stat_id='471450104' or d.stat_id='471453009' or d.stat_id='471630007' or d.stat_id='471730107' or d.stat_id='517600024' or d.stat_id='540090007' or d.stat_id='540090011' or d.stat_id='540290005' or d.stat_id='540290007' or d.stat_id='540290008' or d.stat_id='540290009' or d.stat_id='540290015' or d.stat_id='540990004' or d.stat_id='540990005' or d.stat_id='ABT147' or d.stat_id='ANA115' or d.stat_id='ARE128' or d.stat_id='BEL116' or d.stat_id='BFT142' or d.stat_id='BWR139' or d.stat_id='CAT175' or d.stat_id='CDR119' or d.stat_id='CKT136' or d.stat_id='CND125' or d.stat_id='COW137' or d.stat_id='CTH110' or d.stat_id='DCP114' or d.stat_id='EGB181' or d.stat_id='GRS420' or d.stat_id='KEF112' or d.stat_id='LRL117' or d.stat_id='MKG113' or d.stat_id='PAR107' or d.stat_id='PED108' or d.stat_id='PNF126' or d.stat_id='PSU106' or d.stat_id='QAK172' or d.stat_id='SHN418' or d.stat_id='SPD111' or d.stat_id='UVL124' or d.stat_id='VPI120' or d.stat_id='WSP144' or d.stat_id='130590001' or d.stat_id='540390011' or d.stat_id='BRIG1' or d.stat_id='CACO1' or d.stat_id='COHU1' or d.stat_id='DOSO1' or d.stat_id='EGBE1' or d.stat_id='FRRE1' or d.stat_id='GRSM1' or d.stat_id='JARI1' or d.stat_id='LIGO1' or d.stat_id='LYBR1' or d.stat_id='MAVI1' or d.stat_id='MOMO1' or d.stat_id='PACK1' or d.stat_id='QUCI1' or d.stat_id='QURE1' or d.stat_id='ROMA1' or d.stat_id='SHEN1' or d.stat_id='SHRO1' or d.stat_id='SWAN1' or d.stat_id='WASH1' or d.stat_id='CT15' or d.stat_id='KY22' or d.stat_id='KY35' or d.stat_id='MA01' or d.stat_id='MA08' or d.stat_id='MD07' or d.stat_id='MD08' or d.stat_id='MD13' or d.stat_id='MD15' or d.stat_id='MD18' or d.stat_id='MD99' or d.stat_id='MI51' or d.stat_id='MI52' or d.stat_id='NC03' or d.stat_id='NC06' or d.stat_id='NC25' or d.stat_id='NC29' or d.stat_id='NC34' or d.stat_id='NC35' or d.stat_id='NC36' or d.stat_id='NC41' or d.stat_id='NC45' or d.stat_id='NJ00' or d.stat_id='NJ99' or d.stat_id='NY01' or d.stat_id='NY08' or d.stat_id='NY10' or d.stat_id='NY52' or d.stat_id='NY68' or d.stat_id='NY96' or d.stat_id='NY99' or d.stat_id='OH17' or d.stat_id='OH49' or d.stat_id='OH54' or d.stat_id='OH71' or d.stat_id='PA00' or d.stat_id='PA15' or d.stat_id='PA18' or d.stat_id='PA29' or d.stat_id='PA42' or d.stat_id='PA47' or d.stat_id='PA72' or d.stat_id='SC05' or d.stat_id='SC06' or d.stat_id='TN00' or d.stat_id='TN04' or d.stat_id='TN11' or d.stat_id='VA00' or d.stat_id='VA13' or d.stat_id='VA24' or d.stat_id='VA28' or d.stat_id='VA98' or d.stat_id='VA99' or d.stat_id='VT01' or d.stat_id='WV04' or d.stat_id='WV05' or d.stat_id='WV18')  ";
		  $discovaq = "4-km Window";
       }	
       if ($_POST['discovaq'] == "DISCOVERAQ_1km") {
              $str=$str." and (d.stat_id='DRAGON_164' or d.stat_id='DRAGON_165' or d.stat_id='DRAGON_167'or d.stat_id='DRAGON_168' or d.stat_id='DRAGON_169' or d.stat_id='DRAGON_171' or d.stat_id='DRAGON_172' or d.stat_id='DRAGON_173' or d.stat_id='DRAGON_174' or d.stat_id='DRAGON_175' or d.stat_id='DRAGON_176' or d.stat_id='DRAGON_178' or d.stat_id='DRAGON_180' or d.stat_id='DRAGON_181' or d.stat_id='DRAGON_183' or d.stat_id='DRAGON_185' or d.stat_id='DRAGON_187' or d.stat_id='DRAGON_190' or d.stat_id='DRAGON_191' or d.stat_id='DRAGON_192' or d.stat_id='DRAGON_193' or d.stat_id='DRAGON_194' or d.stat_id='DRAGON_195' or d.stat_id='DRAGON_196' or d.stat_id='DRAGON_207' or d.stat_id='DRAGON_216' or d.stat_id='DRAGON_219' or d.stat_id='DRAGON_224' or d.stat_id='DRAGON_225' or d.stat_id='DRAGON_230' or d.stat_id='DRAGON_231' or d.stat_id='DRAGON_234' or d.stat_id='DRAGON_237' or d.stat_id='DRAGON_243' or d.stat_id='DRAGON_250' or d.stat_id='DRAGON_252' or d.stat_id='DRAGON_253' or d.stat_id='Easton_260' or d.stat_id='GSFC303' or d.stat_id='SERC592' or d.stat_id='UMBC680' or d.stat_id='Wallops696' or d.stat_id='100010002' or d.stat_id='100010003' or d.stat_id='100031003' or d.stat_id='100031007' or d.stat_id='100031008' or d.stat_id='100031012' or d.stat_id='100032004' or d.stat_id='100051002' or d.stat_id='110010041' or d.stat_id='110010042' or d.stat_id='110010043' or d.stat_id='240031003' or d.stat_id='240051007' or d.stat_id='240053001' or d.stat_id='240150003' or d.stat_id='240251001' or d.stat_id='240290002' or d.stat_id='240313001' or d.stat_id='240330025' or d.stat_id='240330030' or d.stat_id='240338003' or d.stat_id='240430009' or d.stat_id='245100006' or d.stat_id='245100007' or d.stat_id='245100008' or d.stat_id='245100040' or d.stat_id='340070009' or d.stat_id='340071007' or d.stat_id='340110007' or d.stat_id='340150004' or d.stat_id='420010001' or d.stat_id='420290100' or d.stat_id='420410101' or d.stat_id='420430401' or d.stat_id='420450002' or d.stat_id='420710007' or d.stat_id='420750100' or d.stat_id='420910013' or d.stat_id='421010004' or d.stat_id='421010014' or d.stat_id='421010047' or d.stat_id='421010055' or d.stat_id='421010057' or d.stat_id='421010063' or d.stat_id='421010449' or d.stat_id='421010649' or d.stat_id='421011002' or d.stat_id='421330008' or d.stat_id='510030001' or d.stat_id='510130020' or d.stat_id='510330001' or d.stat_id='510470002' or d.stat_id='510590030' or d.stat_id='510690010' or d.stat_id='510870014' or d.stat_id='510870015' or d.stat_id='511010003' or d.stat_id='511071005' or d.stat_id='511130003' or d.stat_id='511870004' or d.stat_id='515100009' or d.stat_id='515100020' or d.stat_id='516300004' or d.stat_id='518400002' or d.stat_id='540030003' or d.stat_id='100031010' or d.stat_id='100031013' or d.stat_id='100051003' or d.stat_id='240030014' or d.stat_id='240090011' or d.stat_id='240130001' or d.stat_id='240170010' or d.stat_id='240199991' or d.stat_id='240210037' or d.stat_id='240259001' or d.stat_id='240339991' or d.stat_id='245100054' or d.stat_id='340071001' or d.stat_id='340150002' or d.stat_id='420010002' or d.stat_id='420019991' or d.stat_id='420431100' or d.stat_id='420550001' or d.stat_id='420710012' or d.stat_id='420990301' or d.stat_id='421010024' or d.stat_id='421330011' or d.stat_id='510610002' or d.stat_id='510850003' or d.stat_id='511530009' or d.stat_id='511790001' or d.stat_id='110010023' or d.stat_id='517600024' or d.stat_id='ARE128' or d.stat_id='BEL116' or d.stat_id='BWR139' or d.stat_id='SHN418' or d.stat_id='SHEN1' or d.stat_id='WASH1' or d.stat_id='MD07' or d.stat_id='MD13' or d.stat_id='MD15' or d.stat_id='MD18' or d.stat_id='MD99' or d.stat_id='PA00' or d.stat_id='PA47' or d.stat_id='VA00' or d.stat_id='VA28' or d.stat_id='VA98' ) ";
              $discovaq = "1-km Window";
	   }
	}  
        if ($_POST['discovaq'] == "DISCOVERAQ_2km_SJV") {
           $str=$str." and (d.stat_id = '060010007' or d.stat_id = '060010009' or d.stat_id = '060010011' or d.stat_id = '060050002' or d.stat_id = '060070007' or d.stat_id = '060070008' or d.stat_id = '060090001' or d.stat_id = '060111002' or d.stat_id = '060130002' or d.stat_id = '060131002' or d.stat_id = '060131004' or d.stat_id = '060170010' or d.stat_id = '060190007' or d.stat_id = '060190011' or d.stat_id = '060190242' or d.stat_id = '060192009' or d.stat_id = '060194001' or d.stat_id = '060195001' or d.stat_id = '060210003' or d.stat_id = '060290007' or d.stat_id = '060290008' or d.stat_id = '060290011' or d.stat_id = '060290014' or d.stat_id = '060290232' or d.stat_id = '060292012' or d.stat_id = '060295002' or d.stat_id = '060296001' or d.stat_id = '060310500' or d.stat_id = '060311004' or d.stat_id = '060333001' or d.stat_id = '060370002' or d.stat_id = '060370016' or d.stat_id = '060370113' or d.stat_id = '060371002' or d.stat_id = '060371103' or d.stat_id = '060371201' or d.stat_id = '060371302' or d.stat_id = '060371602' or d.stat_id = '060371701' or d.stat_id = '060374002' or d.stat_id = '060374006' or d.stat_id = '060375005' or d.stat_id = '060376012' or d.stat_id = '060379033' or d.stat_id = '060390004' or d.stat_id = '060390500' or d.stat_id = '060392010' or d.stat_id = '060410001' or d.stat_id = '060430003' or d.stat_id = '060470003' or d.stat_id = '060530002' or d.stat_id = '060530008' or d.stat_id = '060531003' or d.stat_id = '060550003' or d.stat_id = '060570005' or d.stat_id = '060590007' or d.stat_id = '060591003' or d.stat_id = '060592022' or d.stat_id = '060595001' or d.stat_id = '060610003' or d.stat_id = '060610004' or d.stat_id = '060610006' or d.stat_id = '060612002' or d.stat_id = '060658001' or d.stat_id = '060658005' or d.stat_id = '060659001' or d.stat_id = '060670002' or d.stat_id = '060670006' or d.stat_id = '060670010' or d.stat_id = '060670011' or d.stat_id = '060670012' or d.stat_id = '060670014' or d.stat_id = '060675003' or d.stat_id = '060690002' or d.stat_id = '060690003' or d.stat_id = '060710012' or d.stat_id = '060711004' or d.stat_id = '060712002' or d.stat_id = '060750005' or d.stat_id = '060771002' or d.stat_id = '060773005' or d.stat_id = '060790005' or d.stat_id = '060792006' or d.stat_id = '060793001' or d.stat_id = '060794002' or d.stat_id = '060798001' or d.stat_id = '060798005' or d.stat_id = '060798006' or d.stat_id = '060811001' or d.stat_id = '060830008' or d.stat_id = '060830011' or d.stat_id = '060831008' or d.stat_id = '060831013' or d.stat_id = '060831014' or d.stat_id = '060831018' or d.stat_id = '060831021' or d.stat_id = '060831025' or d.stat_id = '060832004' or d.stat_id = '060832011' or d.stat_id = '060833001' or d.stat_id = '060834003' or d.stat_id = '060850005' or d.stat_id = '060852009' or d.stat_id = '060870007' or d.stat_id = '060871003' or d.stat_id = '060890004' or d.stat_id = '060890007' or d.stat_id = '060890009' or d.stat_id = '060893003' or d.stat_id = '060950004' or d.stat_id = '060953003' or d.stat_id = '060970003' or d.stat_id = '060971003' or d.stat_id = '060990005' or d.stat_id = '060990006' or d.stat_id = '061010003' or d.stat_id = '061030005' or d.stat_id = '061070006' or d.stat_id = '061070009' or d.stat_id = '061072002' or d.stat_id = '061072010' or d.stat_id = '061090005' or d.stat_id = '061110007' or d.stat_id = '061110009' or d.stat_id = '061111004' or d.stat_id = '061112002' or d.stat_id = '061113001' or d.stat_id = '061130004' or d.stat_id = '061131003' or d.stat_id = '320310016' or d.stat_id = '320310020' or d.stat_id = '320310025' or d.stat_id = '320311005' or d.stat_id = '320312002' or d.stat_id = '320312009' or d.stat_id = '060130006' or d.stat_id = '060131001' or d.stat_id = '060132001' or d.stat_id = '060195025' or d.stat_id = '060290016' or d.stat_id = '060290017' or d.stat_id = '060310004' or d.stat_id = '060374004' or d.stat_id = '060410004' or d.stat_id = '060431001' or d.stat_id = '060472510' or d.stat_id = '060510001' or d.stat_id = '060510005' or d.stat_id = '060510011' or d.stat_id = '060571001' or d.stat_id = '060610002' or d.stat_id = '060631006' or d.stat_id = '060631009' or d.stat_id = '060650003' or d.stat_id = '060651003' or d.stat_id = '060670284' or d.stat_id = '060674001' or d.stat_id = '060710025' or d.stat_id = '060773010' or d.stat_id = '060890008' or d.stat_id = '060953001' or d.stat_id = '060970001' or d.stat_id = '060970002' or d.stat_id = '060973002' or d.stat_id = '061030002' or d.stat_id = '061050002' or d.stat_id = '061132001' or d.stat_id = '060012005' or d.stat_id = '060072002' or d.stat_id = '060074001' or d.stat_id = '060110007' or d.stat_id = '060132007' or d.stat_id = '060170011' or d.stat_id = '060192008' or d.stat_id = '060271023' or d.stat_id = '060271028' or d.stat_id = '060292009' or d.stat_id = '060333010' or d.stat_id = '060333011' or d.stat_id = '060333012' or d.stat_id = '060410003' or d.stat_id = '060631007' or d.stat_id = '060670007' or d.stat_id = '060772010' or d.stat_id = '060792004' or d.stat_id = '060792007' or d.stat_id = '060831020' or d.stat_id = '060831022' or d.stat_id = '060831033' or d.stat_id = '060831037' or d.stat_id = '060850002' or d.stat_id = '061030006'or d.stat_id = '061073000' or d.stat_id = '061110008' or d.stat_id = '320310022' or d.stat_id = '320310030' or d.stat_id = '320311026' or d.stat_id = '320312010' or d.stat_id = 'LAV410' or d.stat_id = 'PIN414' or d.stat_id = 'SEK430' or d.stat_id = 'YOS204' or d.stat_id = 'YOS404' or d.stat_id = 'BLIS1' or d.stat_id = 'DOME1' or d.stat_id = 'FRES1' or d.stat_id = 'HOOV1' or d.stat_id = 'KAIS1' or d.stat_id = 'LAVO1' or d.stat_id = 'PINN1' or d.stat_id = 'PORE1' or d.stat_id = 'RAFA1' or d.stat_id = 'SAGA1' or d.stat_id = 'SEQU1' or d.stat_id = 'TRIN1' or d.stat_id = 'YOSE1' ) ";
              $discoveraq = "2-km Window";
        }
//	else {
//	      $pca="None";
//	}   
/////////////////////////////////////////////////////////////////////////////

//  if ($stat_id) {
//		$str=$str." and d.stat_id='$stat_id'";
//}
//	else {
//		$stat_id="All";
//	}
    
	if ($stat_id) {
		$stat_id_str=" ";
		echo "$stat_id_file";
		
		if (($stat_id == "Selected_Sites") || ($stat_id == "Load_File")){
			if ($stat_id == "Selected_Sites") {
			   $file="$cache_amet/".$_POST['stat_file']."";
			}
			else {
			   echo "Station file being used: ".$_POST['stat_id_file']."";
			   $file=$_POST['stat_id_file'];
			}
			$arrayL = get_csv($file);
			$len=count($arrayL);
			for ($i=0;$i<$len;$i++){
				
				if ($i==0){
					$stat_id_str=" and (d.stat_id='".$arrayL[$i][0]."' ";
				}
				else{
				$stat_id_str=$stat_id_str." or d.stat_id='".$arrayL[$i][0]."' ";
				}
			}
			$str=$str." $stat_id_str )";
			
		}
		else {
                        $arrayL = preg_split('/\s+/', $stat_id);
                        $arrayL = implode(',', $arrayL);
                        $arrayL = str_getcsv($arrayL);
//			$arrayL = str_getcsv($stat_id);
                        $len=count($arrayL);
			for ($i=0;$i<$len;$i++) {
                            if ($i==0){
                                   $stat_id_str=" and (d.stat_id='".$arrayL[$i]."' ";
                                }
                                else{
                                   $stat_id_str=$stat_id_str." or d.stat_id='".$arrayL[$i]."' ";
                                }
                        }
                        $str=$str." $stat_id_str )";		
//			$str=$str." and d.stat_id='$stat_id'";
		}
    }
	else {
	   $stat_id="All";
	}
/////////////////////////////////////////////////////////////////////////////

///O3 Nonattainment Sites ////
//   if ($_POST['O3_NA_sites'] == "y") {
   if ($_POST['O3_NA_Sites']) {
 	   $file="/home/ubuntu/AMET_v16/web_interface/O3_NAA_Sites_v2_short_names.txt";
	   $arrayL = get_csv($file);
	   $len = count($arrayL);
	   $NA_sites_length = count($O3_NA_Sites);
	   $str=$str." and (d.stat_id=0000000 ";
           for ($i=0; $i<($NA_sites_length); $i++) {
	      for ($j=0; $j<($len-1); $j++) {
	         if ($O3_NA_Sites[$i] === $arrayL[$j][1]) {
	            $stat_id_str=$stat_id_str." or d.stat_id='".$arrayL[$j][0]."' ";
	         }
	      }
	   }
//                        for ($i=0;$i<$len;$i++) {
//                                if ($i==0) {
//                                        $stat_id_str=" and (d.stat_id='".$arrayL[$i][0]."' ";
//                                }
//                                else {
//                                	$stat_id_str=$stat_id_str." or d.stat_id='".$arrayL[$i][0]."' ";
//                                }
//			}
//		}
	   $str=$str." $stat_id_str )";
   }
/////////////////////////////////////////////////////////////////////////////

    if ($_POST['equates'] == "EQUATES_Summer_Daily_O3") { $str=$str." and s.daily_o3_maysep='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_O3") { $str=$str." and s.daily_o3_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_PM_AND_SPECS") { $str=$str." and s.daily_pm_mass_and_specs_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_PM_ONLY") { $str=$str." and s.daily_pm_mass_only_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_SPECS_ONLY") { $str=$str." and s.daily_pm_specs_only_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_BENZ") { $str=$str." and s.daily_voc_benz_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_ETHA") { $str=$str." and s.daily_voc_etha_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_ETHY") { $str=$str." and s.daily_voc_ethy_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Daily_ISOP") { $str=$str." and s.daily_voc_isop_jandec='T'"; }
//    if ($_POST['equates'] == "EQUATES_Daily_TOLU") { $str=$str." and s.='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_CO") { $str=$str." and s.hourly_co_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_ETHA") {  $str=$str." and s.hourly_etha_jandec='T'";}
    if ($_POST['equates'] == "EQUATES_Hourly_ETHY") {  $str=$str." and s.hourly_ethy_jandec='T'";}
    if ($_POST['equates'] == "EQUATES_Hourly_ISOP") { $str=$str." and s.hourly_isop_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_NO2") { $str=$str." and s.hourly_no2_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_NO") { $str=$str." and s.hourly_no_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_NOX") { $str=$str." and s.hourly_nox_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_NOY") { $str=$str." and s.hourly_noy_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_O3") { $str=$str." and s.hourly_o3_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_PM10") { $str=$str." and s.hourly_pm10_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_PM25") { $str=$str." and s.hourly_pm25_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_SO2") { $str=$str." and s.hourly_so2_jandec='T'"; }
    if ($_POST['equates'] == "EQUATES_Hourly_TOLU") { $str=$str." and s.hourly_tolu_jandec='T'"; }

//    if ($_POST['equates'] != "None") {
//       $arrayL = get_csv($file);
//       $len=count($arrayL);
//       for ($i=0;$i<$len;$i++){
//          if ($i==0){
//             $stat_id_str=" and (d.stat_id_POCode='".$arrayL[$i][2]."' ";
//          }
//          else {
//             $stat_id_str=$stat_id_str." or d.stat_id_POCode='".$arrayL[$i][2]."' ";
//          }
//       }
//       $str=$str." $stat_id_str )";
//    }	
	

//        $SITES = fopen($file, 'r');
//        $i=0;
//        while (($line = fgetcsv($SITES)) !== FALSE) {
//           if ($i==0) {
//              $stat_id_str=" and (d.stat_id_POCode='".$line[2]."' ";
//              $i++;
//           }
//           else {
//              $stat_id_str=$stat_id_str." or d.stat_id_POCode='".$line[2]."' ";
//           }
//        }
//        $str=$str." $stat_id_str )";
//        fclose($SITES);
//     }

/////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Date-Time Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($ys){
	    $date_start=sprintf("%04d",$ys).sprintf("%02d",$ms).sprintf("%02d",$ds);		// start date format for plot titles
	    $date_end=sprintf("%04d",$ye).sprintf("%02d",$me).sprintf("%02d",$de);			// end date format for plot titles
	    $date_start_q=sprintf("%04d",$ys).sprintf("%02d",$ms).sprintf("%02d",$ds);		// start date format for MYSQL query
	    $date_end_q=sprintf("%04d",$ye).sprintf("%02d",$me).sprintf("%02d",$de);		// end date format for MYSQL query
		$str=$str." and d.ob_dates BETWEEN $date_start_q and $date_end_q and d.ob_datee BETWEEN $date_start_q and $date_end_q";		// date query string
		$date_title = "$date_start to $date_end";		// date plot title format
	}
	if ($ob_time){
		$str=$str." and d.ob_time='$ob_time'";
	}
	if ($fcast_hr){
		$str=$str." and d.fcast_hr $fcast_cond $fcast_hr";
	}
	if ($init_utc) {
		$str=$str." and d.init_utc=$init_utc";
	}

	// Set start and end dates for 4 panel plot
	$date_start1=sprintf("%04d",$ys).sprintf("%02d",$ms1)."01";
	$date_start2=sprintf("%04d",$ys).sprintf("%02d",$ms2)."01";
	$date_start3=sprintf("%04d",$ys).sprintf("%02d",$ms3)."01";
	$date_start4=sprintf("%04d",$ys).sprintf("%02d",$ms4)."01";
	
	$date_end1=sprintf("%04d",$ye).sprintf("%02d",$me1)."31";
	$date_end2=sprintf("%04d",$ye).sprintf("%02d",$me2)."31";
	$date_end3=sprintf("%04d",$ye).sprintf("%02d",$me3)."31";
	$date_end4=sprintf("%04d",$ye).sprintf("%02d",$me4)."31";
/////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Hour Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    if ($start_hour < $end_hour) {
       $str=$str." and (d.ob_hour >= ".$start_hour." and d.ob_hour <= ".$end_hour.")";
	}
	else {
	   $str=$str." and (d.ob_hour >= ".$start_hour." or d.ob_hour <= ".$end_hour.")";
	}
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Season Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($_POST['season']){
	    if($_POST['season'] == "winter") {
		   $str=$str." and (month = 12 or month = 1 or month = 2)";
//                 $str=$str." and (month(d.ob_dates) = 12 or month(d.ob_dates) = 1 or month(d.ob_dates = 2))";
		   $date_title = "December to February $ys";
		}
		if ($_POST['season'] == "spring") {
		   $str=$str." and (month = 3 or month = 4 or month = 5)";
//                 $str=$str." and (month(d.ob_dates) = 3 or month(d.ob_dates) = 4 or month(d.ob_dates = 5))";
		   $date_title = "March to May $ys";
		}
		if ($_POST['season'] == "summer") {
		   $str=$str." and (month = 6 or month = 7 or month = 8)";
//                 $str=$str." and (month(d.ob_dates) = 6 or month(d.ob_dates) = 7 or month(d.ob_dates = 8))";
		   $date_title = "June to August $ys";
		}
		if ($_POST['season'] == "fall") {
		   $str=$str." and (month = 9 or month = 10 or month = 11)";
//                 $str=$str." and (month(d.ob_dates) = 9 or month(d.ob_dates) = 10 or month(d.ob_dates = 11))";
		   $date_title = "September to November $ys";
		}
	}
//////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Individual Month Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($ind_month) {
	    $str=$str." and month = ".$ind_month;
		if ($ind_month == "01") { $date_title= "January $ys"; }
		if ($ind_month == "02") { $date_title= "February $ys"; }
		if ($ind_month == "03") { $date_title= "March $ys"; }
		if ($ind_month == "04") { $date_title= "April $ys"; }
		if ($ind_month == "05") { $date_title= "May $ys"; }
		if ($ind_month == "06") { $date_title= "June $ys"; }
		if ($ind_month == "07") { $date_title= "July $ys"; }
		if ($ind_month == "08") { $date_title= "August $ys"; }
		if ($ind_month == "09") { $date_title= "September $ys"; }
		if ($ind_month == "10") { $date_title= "October $ys"; }
		if ($ind_month == "11") { $date_title= "November $ys"; }
		if ($ind_month == "12") { $date_title= "December $ys"; }
	}
//////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::    Parameter Occurrence Code Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        if ($POCode) {
            if ($POCode[0] != "All") {
                $POC_length = count($POCode);
                $str=$str." and (POCode= ";
                for ($i=0; $i<($POC_length-1); $i++) {
                   $str=$str.$POCode[$i]." or POCode=";
                }
                $str=$str.$POCode[$i].")";
            }
        }
//////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::    Day of Week Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        if ($DoW) {
            if ($DoW[0] != "All") {
                $DoW_length = count($DoW);
                $str=$str." and (DAYOFWEEK(ob_dates) = ";
                for ($i=0; $i<($DoW_length-1); $i++) {
                   $str=$str.$DoW[$i]." or DAYOFWEEK(ob_dates) = ";
                }
                $str=$str.$DoW[$i].")";
            }
        }
//////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::    Method Code Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        if ($Filter == "y") {
	   $str=$str." and (PM_TOT_method_code_ob=116 or PM_TOT_method_code_ob=117 or PM_TOT_method_code_ob=142 or PM_TOT_method_code_ob=143 or PM_TOT_method_code_ob=145 or PM_TOT_method_code_ob=221 or PM_TOT_method_code_ob=521 or PM_TOT_method_code_ob=545 or PM_TOT_method_code_ob=707 or PM_TOT_method_code_ob=810)";
	}
	if ($Non_Filter == "y") {
		$str=$str." and (PM_TOT_method_code_ob=170 or PM_TOT_method_code_ob=171 or PM_TOT_method_code_ob=178 or PM_TOT_method_code_ob=181 or PM_TOT_method_code_ob=182 or PM_TOT_method_code_ob=183 or PM_TOT_method_code_ob=184 or PM_TOT_method_code_ob=195 or PM_TOT_method_code_ob=209 or PM_TOT_method_code_ob=236 or PM_TOT_method_code_ob=238 or PM_TOT_method_code_ob=581 or PM_TOT_method_code_ob=701 or PM_TOT_method_code_ob=702 or PM_TOT_method_code_ob=703 or PM_TOT_method_code_ob=704 or PM_TOT_method_code_ob=715 or PM_TOT_method_code_ob=731 or PM_TOT_method_code_ob=733 or PM_TOT_method_code_ob=736 or PM_TOT_method_code_ob=738 or PM_TOT_method_code_ob=771 or PM_TOT_method_code_ob=791 or PM_TOT_method_code_ob=792 or PM_TOT_method_code_ob=802 or PM_TOT_method_code_ob=812) ";
	}
	if ($Method_Code) {
	   if ($Method_Code[0] != "All") {
		$str=$str." and (PM_TOT_method_code_ob= ";
  	    	$MC_length = count($Method_Code);
                $str=$str." and (PM_TOT_method_code_ob= ";
		for ($i=0; $i<($MC_length-1); $i++) {
                   $str=$str.$Method_Code[$i]." or PM_TOT_method_code_ob=";
                }
                $str=$str.$Method_Code[$i].")";
            }
        }
//////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Geographic-Based Criterion (not used in AQ module)
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($elev){
		$str=$str." and s.elev $elev_cond $elev";
	}
	if ($lat1 & $lat2) {
		$str=$str." and d.lat BETWEEN $lat1 and $lat2";
        }
        if ($lon1 & $lon2) {
		$str=$str." and d.lon BETWEEN $lon1 and $lon2";
	}
	if ($_POST['loc_setting']){
		$str=$str." and s.loc_setting=\'".$_POST['loc_setting']."\'";;
	}
        if ($_POST['aqs_co_network']){
                $str=$str." and s.co_network LIKE \'%".$_POST['aqs_co_network']."%\'";;
        }
        if ($_POST['near_road'] == 'n') {
                $str=$str." and (s.near_road=\'F\' or s.near_road = \'FALSE\' or s.near_road = \'NULL\') ";
        }
//////////////////////////////////////////////////////////////////////////////

	$query=$str." ".$custom_query;
	$pid = (rand()%1000000);
	 
////////////////////////////////////////////////////////////////

	$doplot="FALSE";
	$savefile="FALSE";
	if($_POST['data_format1'] == 1){ $savefile="TRUE";}
	 
	 /// Determine Plot Types
	if($_POST['ametplot'] == 1) {$doplot1="TRUE";}
	if($_POST['diurnal'] == 1) {$doplot2="TRUE";}
	if($_POST['textstats'] == 1) {$doplot3="TRUE";}
	 
	 ///  Determine Plot Format
	if($_POST['png']){	$plotfmt="png";	}
	if($_POST['pdf']){	$plotfmt="pdf";	}
	if($_POST['jpeg']){	$plotfmt="jpeg";	}
	 
	// 			Open web_query.R template file
	$file = fopen("/var/www/html/run_info.template", "r");
// 	 while (!feof($f)) {
//            $line = fgets($f);
//	    echo $line. "<br>";
//	 }

		$i=0;
		while (! feof($file)) {
			$l[$i] = fgets($file,1000);
			list($var, $threst) = explode("<-", $l[$i]);
			$var=trim($var);
			if( $var == "query"){$l[$i]="query<-\"$query\"\n";}
			if( $var == "pid"){$l[$i]="pid<-\"$pid\"\n";}
			if( $var == "dbase"){$l[$i]="dbase<-\"".$_POST['database_id']."\"\n";}
                        if( $var == "POCode"){$l[$i]="POCode<-\"".$_POST['POCode']."\"\n";}
                        if( $var == "Method_Code"){$l[$i]="Method_Code<-\"".$_POST['Method_Code']."\"\n";}
                        if( $var == "O3_NA_Sites"){$l[$i]="O3_NA_Sites<-\"".$_POST['O3_NA_Sites']."\"\n";}
			if( $var == "run_name1"){$l[$i]="run_name1<-\"$project_id\"\n";}	
			if( $var == "run_name2"){$l[$i]="run_name2<-\"".$_POST['project_id2']."\"\n";}
			if( $var == "run_name3"){$l[$i]="run_name3<-\"".$_POST['project_id3']."\"\n";}
			if( $var == "run_name4"){$l[$i]="run_name4<-\"".$_POST['project_id4']."\"\n";}
			if( $var == "run_name5"){$l[$i]="run_name5<-\"".$_POST['project_id5']."\"\n";}
			if( $var == "run_name6"){$l[$i]="run_name6<-\"".$_POST['project_id6']."\"\n";}
                        if( $var == "run_name7"){$l[$i]="run_name7<-\"".$_POST['project_id7']."\"\n";}
                        if( $var == "run_name8"){$l[$i]="run_name8<-\"".$_POST['project_id8']."\"\n";}
                        if( $var == "run_name9"){$l[$i]="run_name9<-\"".$_POST['project_id9']."\"\n";}
                        if( $var == "run_name10"){$l[$i]="run_name10<-\"".$_POST['project_id10']."\"\n";}
                        if( $var == "run_name11"){$l[$i]="run_name11<-\"".$_POST['project_id11']."\"\n";}
                        if( $var == "run_name12"){$l[$i]="run_name12<-\"".$_POST['project_id12']."\"\n";}
                        if( $var == "run_name13"){$l[$i]="run_name13<-\"".$_POST['project_id13']."\"\n";}
                        if( $var == "run_name14"){$l[$i]="run_name14<-\"".$_POST['project_id14']."\"\n";}
                        if( $var == "run_name15"){$l[$i]="run_name15<-\"".$_POST['project_id15']."\"\n";}
                        if( $var == "run_name16"){$l[$i]="run_name16<-\"".$_POST['project_id16']."\"\n";}
                        if( $var == "run_name17"){$l[$i]="run_name17<-\"".$_POST['project_id17']."\"\n";}
                        if( $var == "run_name18"){$l[$i]="run_name18<-\"".$_POST['project_id18']."\"\n";}
			if( $var == "run_name19"){$l[$i]="run_name19<-\"".$_POST['project_id19']."\"\n";}
			if( $var == "run_name20"){$l[$i]="run_name20<-\"".$_POST['project_id20']."\"\n";}
			if( $var == "species_in"){$l[$i]="species_in<-$species_ri\n";}
//			if( $var == "species_in"){$l[$i]="species_in<-\"".implode(",", $_POST['species']);
                        if( $var == "custom_species"){$l[$i]= "custom_species<-\"".$_POST['custom_species2']."\"\n"; }
                        if( $var == "custom_species_name"){$l[$i]= "custom_species_name<-\"".$_POST['custom_species_name']."\"\n"; }
                        if( $var == "custom_units"){$l[$i]= "custom_units<-\"".$_POST['custom_units']."\"\n"; }
			if( $var == "inc_csn"){$l[$i]= "inc_csn<-\"".$_POST['inc_csn']."\"\n"; }
			if( $var == "inc_improve"){$l[$i]= "inc_improve<-\"".$_POST['inc_improve']."\"\n"; }
			if( $var == "inc_castnet"){$l[$i]= "inc_castnet<-\"".$_POST['inc_castnet']."\"\n"; }
			if( $var == "inc_castnet_hr"){$l[$i]= "inc_castnet_hr<-\"".$_POST['inc_castnet_hr']."\"\n"; }
			if( $var == "inc_castnet_daily"){$l[$i]= "inc_castnet_daily<-\"".$_POST['inc_castnet_daily']."\"\n"; }
			if( $var == "inc_castnet_drydep"){$l[$i]= "inc_castnet_drydep<-\"".$_POST['inc_castnet_drydep']."\"\n"; }
			if( $var == "inc_capmon"){$l[$i]= "inc_capmon<-\"".$_POST['inc_capmon']."\"\n"; }
			if( $var == "inc_naps"){$l[$i]= "inc_naps<-\"".$_POST['inc_naps']."\"\n"; }
                        if( $var == "inc_naps_daily_o3"){$l[$i]= "inc_naps_daily_o3<-\"".$_POST['inc_naps_daily_o3']."\"\n"; }
			if( $var == "inc_nadp"){$l[$i]= "inc_nadp<-\"".$_POST['inc_nadp']."\"\n"; }
			if( $var == "inc_airmon_dep"){$l[$i]= "inc_airmon_dep<-\"".$_POST['inc_airmon_dep']."\"\n"; }
			if( $var == "inc_amon"){$l[$i]= "inc_amon<-\"".$_POST['inc_amon']."\"\n"; }
			if( $var == "inc_aqs_hourly"){$l[$i]= "inc_aqs_hourly<-\"".$_POST['inc_aqs_hourly']."\"\n"; }
			if( $var == "inc_aqs_daily_o3"){$l[$i]= "inc_aqs_daily_o3<-\"".$_POST['inc_aqs_daily_o3']."\"\n"; }
			if( $var == "inc_aqs_daily"){$l[$i]= "inc_aqs_daily<-\"".$_POST['inc_aqs_daily']."\"\n"; }
                        if( $var == "inc_aqs_daily_pm"){$l[$i]= "inc_aqs_daily_pm<-\"".$_POST['inc_aqs_daily_pm']."\"\n"; }
                        if( $var == "inc_aqs_daily_voc"){$l[$i]= "inc_aqs_daily_voc<-\"".$_POST['inc_aqs_daily_voc']."\"\n"; }
			if( $var == "inc_search"){$l[$i]= "inc_search<-\"".$_POST['inc_search']."\"\n"; }
			if( $var == "inc_search_daily"){$l[$i]= "inc_search_daily<-\"".$_POST['inc_search_daily']."\"\n"; }
			if( $var == "inc_aeronet"){$l[$i]= "inc_aeronet<-\"".$_POST['inc_aeronet']."\"\n"; }
                        if( $var == "inc_fluxnet"){$l[$i]= "inc_fluxnet<-\"".$_POST['inc_fluxnet']."\"\n"; }
                        if( $var == "inc_noaa_esrl_o3"){$l[$i]= "inc_noaa_esrl_o3<-\"".$_POST['inc_noaa_esrl_o3']."\"\n"; }
                        if( $var == "inc_toar"){$l[$i]= "inc_toar<-\"".$_POST['inc_toar']."\"\n"; }
                        if( $var == "inc_toar2_hourly"){$l[$i]= "inc_toar2_hourly<-\"".$_POST['inc_toar2_hourly']."\"\n"; }
			if( $var == "inc_toar2_daily_o3"){$l[$i]= "inc_toar2_daily_o3<-\"".$_POST['inc_toar2_daily_o3']."\"\n"; }
			if( $var == "inc_toar2_daily"){$l[$i]= "inc_toar2_daily<-\"".$_POST['inc_toar2_daily']."\"\n"; }
                        if( $var == "inc_purpleair_hourly"){$l[$i]= "inc_purpleair_hourly<-\"".$_POST['inc_purpleair_hourly']."\"\n"; }
                        if( $var == "inc_purpleair_daily"){$l[$i]= "inc_purpleair_daily<-\"".$_POST['inc_purpleair_daily']."\"\n"; }
                        if( $var == "inc_airnow_hourly"){$l[$i]= "inc_airnow_hourly<-\"".$_POST['inc_airnow_hourly']."\"\n"; }
                        if( $var == "inc_airnow_daily_o3"){$l[$i]= "inc_airnow_daily_o3<-\"".$_POST['inc_airnow_daily_o3']."\"\n"; }
			if( $var == "inc_nyccas"){$l[$i]= "inc_nyccas<-\"".$_POST['inc_nyccas']."\"\n"; }
			if( $var == "inc_mdn"){$l[$i]= "inc_mdn<-\"".$_POST['inc_mdn']."\"\n"; }
			if( $var == "inc_amtic"){$l[$i]= "inc_amtic<-\"".$_POST['inc_amtic']."\"\n"; }
			if( $var == "inc_mod"){$l[$i]= "inc_mod<-\"".$_POST['inc_mod']."\"\n"; }
			if( $var == "inc_admn"){$l[$i]= "inc_admn<-\"".$_POST['inc_admn']."\"\n"; }
			if( $var == "inc_aganet"){$l[$i]= "inc_aganet<-\"".$_POST['inc_aganet']."\"\n"; }
			if( $var == "inc_airbase_hourly"){$l[$i]= "inc_airbase_hourly<-\"".$_POST['inc_airbase_hourly']."\"\n"; }
			if( $var == "inc_airbase_daily"){$l[$i]= "inc_airbase_daily<-\"".$_POST['inc_airbase_daily']."\"\n"; }
			if( $var == "inc_aurn_hourly"){$l[$i]= "inc_aurn_hourly<-\"".$_POST['inc_aurn_hourly']."\"\n"; }
			if( $var == "inc_aurn_daily"){$l[$i]= "inc_aurn_daily<-\"".$_POST['inc_aurn_daily']."\"\n"; }
			if( $var == "inc_emep_hourly"){$l[$i]= "inc_emep_hourly<-\"".$_POST['inc_emep_hourly']."\"\n"; }
			if( $var == "inc_emep_daily"){$l[$i]= "inc_emep_daily<-\"".$_POST['inc_emep_daily']."\"\n"; }
                        if( $var == "inc_emep_daily_o3"){$l[$i]= "inc_emep_daily_o3<-\"".$_POST['inc_emep_daily_o3']."\"\n"; }
                        if( $var == "inc_emep_dep"){$l[$i]= "inc_emep_dep<-\"".$_POST['inc_emep_dep']."\"\n"; }
                        if( $var == "inc_calnex"){$l[$i]= "inc_calnex<-\"".$_POST['inc_calnex']."\"\n"; }
                        if( $var == "inc_soas"){$l[$i]= "inc_soas<-\"".$_POST['inc_soas']."\"\n"; }
                        if( $var == "inc_special"){$l[$i]= "inc_special<-\"".$_POST['inc_special']."\"\n"; }
			if( $var == "dates"){$l[$i]="dates<-\"$date_title\"\n";					}
			if( $var == "averaging"){$l[$i]="averaging<-\"".$_POST['data_averaging']."\"\n";	}
			if( $var == "site"){$l[$i]="site<-\"$stat_id\"\n";}
                        if( $var == "state"){$l[$i]="state<-$state\n";                              }
			if( $var == "rpo"){$l[$i]="rpo<-$rpo\n";	}	
			if( $var == "pca"){$l[$i]="pca<-$pca\n";	}
                        if( $var == "clim_reg"){$l[$i]="clim_reg<-$clim_reg\n";       }
                        if( $var == "world_reg"){$l[$i]="world_reg<-\"".$_POST['world_reg']."\"\n";       }
                        if( $var == "loc_setting"){$l[$i]="loc_setting<-\"".$_POST['loc_setting']."\"\n";       }
			if( $var == "conf_line"){$l[$i]="conf_line<-\"".$_POST['conf_line']."\"\n";}
			if( $var == "pca_flag"){$l[$i]="pca_flag<-\"".$_POST['pca_flag']."\"\n";}
                        if( $var == "bin_by_mod"){$l[$i]="bin_by_mod<-\"".$_POST['bin_by_mod']."\"\n";}
                        if( $var == "inc_error"){$l[$i]="inc_error<-\"".$_POST['inc_error']."\"\n";}
                        if( $var == "trend_line"){$l[$i]="trend_line<-\"".$_POST['trend_line']."\"\n";}
			if( $var == "coverage_limit"){$l[$i]="coverage_limit<-".$_POST['coverage']."\n";}
			if( $var == "all_valid"){$l[$i]="all_valid<-\"".$_POST['inc_valid']."\"\n";}
                        if( $var == "all_valid_amon"){$l[$i]="all_valid_amon<-\"".$_POST['inc_valid_amon']."\"\n";}
                        if( $var == "rm_negs_query"){$l[$i]="rm_negs_query<-\"".$_POST['rm_negs_query']."\"\n";}
			if( $var == "aggregate_data"){$l[$i]="aggregate_data<-\"".$_POST['agg_data']."\"\n";}
                        if( $var == "aggregate_data_gc"){$l[$i]="aggregate_data_gc<-\"".$_POST['agg_data_gc']."\"\n";}
			if( $var == "num_obs_limit"){$l[$i]="num_obs_limit<-".$_POST['num_obs_limit']."\n";}
			if( $var == "soccerplot_opt"){$l[$i]="soccerplot_opt<-".$_POST['soccerplot_opt']."\n";}
			if( $var == "overlay_opt"){$l[$i]="overlay_opt<-".$_POST['overlay_opt']."\n";}
                        if( $var == "png_res"){$l[$i]="png_res<-".$_POST['png_res']."\n";}
	                if( $var == "x_axis_min"){$l[$i]="x_axis_min<-$x_axis_min\n";}
			if( $var == "x_axis_max"){$l[$i]="x_axis_max<-$x_axis_max\n";}
			if( $var == "y_axis_min"){$l[$i]="y_axis_min<-$y_axis_min\n";}
			if( $var == "y_axis_max"){$l[$i]="y_axis_max<-$y_axis_max\n";}
                        if( $var == "inc_kelly_stats"){$l[$i]="inc_kelly_stats<-\"".$_POST['inc_kelly_stats']."\"\n";}
                        if( $var == "nmb_max"){$l[$i]="nmb_max<-$nmb_max\n";}
                        if( $var == "nme_min"){$l[$i]="nme_min<-$nme_min\n";}
                        if( $var == "nme_max"){$l[$i]="nme_max<-$nme_max\n";}
                        if( $var == "mb_max"){$l[$i]="mb_max<-$mb_max\n";}
                        if( $var == "me_min"){$l[$i]="me_min<-$me_min\n";}
                        if( $var == "me_max"){$l[$i]="me_max<-$me_max\n";}
                        if( $var == "rmse_min"){$l[$i]="rmse_min<-$rmse_min\n";}
                        if( $var == "rmse_max"){$l[$i]="rmse_max<-$rmse_max\n";}
                        if( $var == "cor_min"){$l[$i]="cor_min<-$cor_min\n";}
                        if( $var == "cor_max"){$l[$i]="cor_max<-$cor_max\n";}
                        if( $var == "nmb_int"){$l[$i]="nmb_int<-$nmb_int\n";}
                        if( $var == "mb_int"){$l[$i]="mb_int<-$mb_int\n";}
                        if( $var == "nme_int"){$l[$i]="nme_int<-$nme_int\n";}
                        if( $var == "cor_int"){$l[$i]="cor_int<-$cor_int\n";}
		        if( $var == "bias_y_axis_min"){$l[$i]="bias_y_axis_min<-$bias_y_axis_min\n";}
                        if( $var == "bias_y_axis_max"){$l[$i]="bias_y_axis_max<-$bias_y_axis_max\n";}
			if( $var == "density_zlim"){$l[$i]="density_zlim<-$density_zlim\n";}
			if( $var == "num_dens_bins"){$l[$i]="num_dens_bins<-$num_dens_bins\n";}
                        if( $var == "max_limit"){$l[$i]="max_limit<-".$_POST['max_limit']."\n";}
                        if( $var == "x_label_angle"){$l[$i]="x_label_angle<-".$_POST['x_angle']."\n";}
                        if( $var == "leg_size_fac"){$l[$i]="leg_size_fac<-".$_POST['leg_size_fac']."\n";}
			if( $var == "inc_ranges"){$l[$i]="inc_ranges<-\"".$_POST['inc_ranges']."\"\n";}
		        if( $var == "inc_whiskers"){$l[$i]="inc_whiskers<-\"".$_POST['inc_whiskers']."\"\n";}
		        if( $var == "inc_median_lines"){$l[$i]="inc_median_lines<-\"".$_POST['inc_median_lines']."\"\n";}
			if( $var == "remove_mean"){$l[$i]="remove_mean<-\"".$_POST['remove_mean']."\"\n";}
                        if( $var == "overlap_boxes"){$l[$i]="overlap_boxes<-\"".$_POST['overlap_boxes']."\"\n";}
                        if( $var == "avg_func"){$l[$i]="avg_func<-".$_POST['avg_func_opt']."\n";}
                        if( $var == "avg_func_name"){$l[$i]="avg_func_name<-\"".$_POST['avg_func_opt']."\"\n";}
                        if( $var == "stat_func"){$l[$i]="stat_func<-\"".$_POST['stat_func_opt']."\"\n";}
                        if( $var == "line_width"){$l[$i]="line_width<-\"".$_POST['line_width_val']."\"\n";}
			if( $var == "custom_title"){$l[$i]="custom_title<-\"".$_POST['custom_title']."\"\n";}
			if( $var == "stat_file"){$l[$i]="stat_file<-\"".$_POST['stat_file']."\"\n";}
			if( $var == "num_ints"){$l[$i]="num_ints<-$num_ints\n";}
			if( $var == "perc_error_max"){$l[$i]="perc_error_max<-$perc_error_max\n";}
			if( $var == "abs_error_max"){$l[$i]="abs_error_max<-$abs_error_max\n";}
			if( $var == "perc_range_min"){$l[$i]="perc_range_min<-$perc_range_min\n";}
			if( $var == "perc_range_max"){$l[$i]="perc_range_max<-$perc_range_max\n";}
			if( $var == "abs_range_min"){$l[$i]="abs_range_min<-$abs_range_min\n";}
			if( $var == "abs_range_max"){$l[$i]="abs_range_max<-$abs_range_max\n";}
			if( $var == "diff_range_min"){$l[$i]="diff_range_min<-$diff_range_min\n";}
			if( $var == "diff_range_max"){$l[$i]="diff_range_max<-$diff_range_max\n";}
			if( $var == "rmse_range_max"){$l[$i]="rmse_range_max<-$rmse_range_max\n";}
                        if( $var == "hist_max"){$l[$i]="hist_max<-$hist_max\n";}
                        if( $var == "quantile_min"){$l[$i]="quantile_min<-".$_POST['quantile_min']."\n";}
                        if( $var == "quantile_max"){$l[$i]="quantile_max<-".$_POST['quantile_max']."\n";}
                        if( $var == "symbsizfac"){$l[$i]="symbsizfac<-$symbsizfac\n";}
                        if( $var == "near_zero_color"){$l[$i]="near_zero_color<-\"".$_POST['near_zero_color']."\"\n";}
                        if( $var == "plot_radius"){$l[$i]="plot_radius<-$plot_radius\n";}
                        if( $var == "outlier_radius"){$l[$i]="outlier_radius<-$outlier_radius\n";}
                        if( $var == "fill_opacity"){$l[$i]="fill_opacity<-$fill_opacity\n";}
			if( $var == "remove_negatives"){$l[$i]="remove_negatives<- \"".$_POST['remove_negatives']."\"\n";}
			if( $var == "use_avg_stats"){$l[$i]="use_avg_stats<- \"".$_POST['use_avg_stats']."\"\n";}
			if( $var == "common_sites"){$l[$i]="common_sites<- \"".$_POST['common_sites']."\"\n";}
			if( $var == "common_sites_species"){$l[$i]="common_sites_species<- \"".$_POST['common_sites_species']."\"\n";}
                        if( $var == "inc_legend"){$l[$i]="inc_legend<- \"".$_POST['inc_legend']."\"\n";}
                        if( $var == "inc_points"){$l[$i]="inc_points<- \"".$_POST['inc_points']."\"\n";}
                        if( $var == "inc_bias"){$l[$i]="inc_bias<- \"".$_POST['inc_bias']."\"\n";}
                        if( $var == "inc_rmse"){$l[$i]="inc_rmse<- \"".$_POST['inc_rmse']."\"\n";}
                        if( $var == "inc_corr"){$l[$i]="inc_corr<- \"".$_POST['inc_corr']."\"\n";}
			if( $var == "use_var_mean"){$l[$i]="use_var_mean<- \"".$_POST['use_var_mean']."\"\n";}
                        if( $var == "plot_cor"){$l[$i]="plot_cor<- \"".$_POST['plot_cor']."\"\n";}
			if( $var == "inc_FRM_adj"){$l[$i]="inc_FRM_adj<- \"".$_POST['inc_FRM_adj']."\"\n";}
			if( $var == "use_median"){$l[$i]="use_median<- \"".$_POST['use_median']."\"\n";}
			if( $var == "stats_flags"){$l[$i]= "stats_flags<-c(\"".$_POST['stat1']."\",\"".$_POST['stat2']."\",\"".$_POST['stat3']."\",\"".$_POST['stat4']."\",\"".$_POST['stat5']."\",\"".$_POST['stat6']."\",\"".$_POST['stat7']."\",\"".$_POST['stat8']."\",\"".$_POST['stat9']."\",\"".$_POST['stat10']."\",\"".$_POST['stat11']."\",\"".$_POST['stat12']."\",\"".$_POST['stat13']."\",\"".$_POST['stat14']."\",\"".$_POST['stat15']."\",\"".$_POST['stat16']."\",\"".$_POST['stat17']."\",\"".$_POST['stat18']."\",\"".$_POST['stat19']."\")\n"; }
			if( $var == "run_info_text"){$l[$i]="run_info_text<- \"".$_POST['run_info_text']."\"\n";}
                        if( $var == "png_from_html"){$l[$i]="png_from_html<- \"".$_POST['png_from_html']."\"\n";}
			if( $var == "plot_colors"){$l[$i]="plot_colors<- c(\"".$_POST['network1_color']."\",\"".$_POST['network2_color']."\",\"".$_POST['network3_color']."\",\"".$_POST['network4_color']."\",\"".$_POST['network5_color']."\",\"".$_POST['network6_color']."\",\"".$_POST['network7_color']."\",\"".$_POST['network8_color']."\")\n";}
			if( $var == "plot_colors2"){$l[$i]="plot_colors2<- c(\"".$_POST['network1_color2']."\",\"".$_POST['network2_color2']."\",\"".$_POST['network3_color2']."\",\"".$_POST['network4_color2']."\",\"".$_POST['network5_color2']."\",\"".$_POST['network6_color2']."\",\"".$_POST['network7_color2']."\",\"".$_POST['network8_color2']."\")\n";}
                        if( $var == "plot_symbols"){$l[$i]="plot_symbols<- c(".$_POST['network1_symbol'].",".$_POST['network2_symbol'].",".$_POST['network3_symbol'].",".$_POST['network4_symbol'].",".$_POST['network5_symbol'].",".$_POST['network6_symbol'].",".$_POST['network7_symbol'].")\n";}
	                if( $var == "year_start"){$l[$i]="year_start<-$ys\n";}
			if( $var == "year_end"){$l[$i]="year_end<-$ye\n";}
                        if( $var == "month_start"){$l[$i]="month_start<-$ms\n";}
                        if( $var == "month_end"){$l[$i]="month_end<-$me\n";}
                        if( $var == "day_start"){$l[$i]="day_start<-$me\n";}
                        if( $var == "day_end"){$l[$i]="day_end<-$me\n";}
                        if( $var == "popup_ts"){$l[$i]="popup_ts<- \"".$_POST['popup_ts']."\"\n";}
			if( $var == "greyscale"){$l[$i]="greyscale<- \"".$_POST['greyscale']."\"\n";}
			if( $var == "inc_counties"){$l[$i]="inc_counties<- \"".$_POST['inc_counties']."\"\n";}
			if( $var == "obs_per_day_limit"){$l[$i]="obs_per_day_limit<-".$_POST['obs_per_day_limit']."\n";}
                        if( $var == "figdir"){$l[$i]="figdir<-\"$cache_amet\"\n";}
                        if( $var == "map_type"){$l[$i]="map_type<-".$_POST['map_type']."\n";}
                        if( $var == "img_height"){$l[$i]="img_height<-$img_height\n";}
                        if( $var == "img_width"){$l[$i]="img_width<-$img_width\n";}
			$i=$i+1;
		}
		fclose($file);
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Write a temporary R script for dynamic execution
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	$f = fopen("$cache_amet/run_info.r", "w+");
	$nl=$i;
	$i=0;
	while ($i<$nl) {
		fwrite($f, $l[$i]);
		$i=$i+1;
	}
	fclose($f);
/////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Write a temporary shell script for dynamic execution
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$l[0]="#!/bin/csh -f\n";
$l[1]="cd $cache_amet \n";
$l[2]="setenv PATH /usr/bin \n";
$l[3]="setenv R_LIBS /usr/local/lib/R/site-library \n";
$l[4]="setenv AMETBASE $amet_base \n";
$l[5]="setenv AMETRINPUT $cache_amet/run_info.r \n";
$l[6]="setenv AMET_OUT $cache_amet \n"; 
$l[7]="setenv MYSQL_CONFIG /var/www/html/amet-config.R \n";
$l[8]="setenv HOME $cache_amet \n";
$l[9]="$R_exe CMD BATCH --no-save --no-restore --verbose $amet_base/R_analysis_code/".$_POST['run_program']." web_query.txt \n";
if ($_POST['run_program'] == "AQ_Overlay_File.R") {		// need to include command to run the script generated by the R code
   $l[10]="./runOBS.sh \n";		// include in run script command to execute the script generated by the R code
   $nl=11;
}
else {
   $nl=10;
}
$f = fopen("$cache_amet/run_script.csh", "w+");
$i=0;
while ($i<$nl) {
   fwrite($f, $l[$i]);
   $i=$i+1;
}
fclose($f); 
/////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//	Execute Shell Script
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        `chmod 777 $cache_amet/run_info.r`;
	`chmod 777 $cache_amet/run_script.csh`;
	//`$cache_amet/run_script.csh > $cache_amet/web_query.txt`;
	`$cache_amet/run_script.csh`;
/////////////////////////////////////////////////////////////////

   echo "        <p align=\"left\"><font color=\"#FF0000\" size=\"6\">Your MySQL query:";
   echo "          </font><br>$query <br></p>";
   echo "       ";

   if ($_POST['run_program'] == "AQ_Stats_Plots.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats.csv"))	{
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats.csv\" >LINK to CSV Domain Wide Statistics File </a>" ;
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_sites_stats.csv\" >LINK to CSV Site Specific Statistics File </a><p>" ;
	 echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_hourly_stats.csv\" >LINK to CSV Hourly Specific Statistics File </a><p>" ;
	 echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_data.csv\" >LINK to Raw Query Data (CSV)</a><p>" ;
echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plots.zip\" >LINK to Zip File Containing All Files (.zip)</a><p>" ;

      }
   }

   echo "<table width=\"900\" border=\"0\">";// align=\"center\">";
   echo "          <td> ";
   if ($_POST['run_program'] == "AQ_Stats_Plots.R") {
	if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats_plot_NMB.png"))	{
		echo " <tr align=\"center\">  ";
		echo " <p align=\"center\">";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NMB.png\">NMB (PNG)</a> ";
        	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NME.png\">NME (PNG)</a> ";
         	echo "&nbsp;&nbsp;";
  		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_MB.png\">MB (PNG)</a> ";
         	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_ME.png\">ME (PNG)</a> ";
         	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FB.png\">FB (PNG)</a> ";
          	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FE.png\">FE (PNG)</a> ";
          	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_RMSE.png\">RMSE (PNG)</a>";
   			echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_Corr.png\">Corr (PNG)</a>";
	    echo "	<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NMB.pdf\">NMB (PDF)</a> ";
          	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NME.pdf\">NME (PDF)</a> ";
          	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_MB.pdf\">MB (PDF)</a> ";
          	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_ME.pdf\">ME (PDF)</a> ";
          	echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FB.pdf\">FB (PDF)</a> ";
	        echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FE.pdf\">FE (PDF)</a> ";
	        echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_RMSE.pdf\">RMSE (PDF)</a> ";
			echo "&nbsp;&nbsp;";
		echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_Corr.pdf\">Corr (PDF)</a> ";
	        echo "        </tr>";
	}
		else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting stats plots.";  
	}
   }
   if ($_POST['run_program'] == "AQ_Stats_Plots_leaflet_network.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats.csv"))  {
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats.csv\" >LINK to CSV Domain Wide Statistics File </a>" ;
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_sites_stats.csv\" >LINK to CSV Site Specific Statistics File </a><p>" ;
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_data.csv\" >LINK to Raw Query Data (CSV)</a><p>" ;
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plots.zip\" >LINK to Zip File Containing All Files (.zip)</a><p>" ;
      }
   }
   echo "<table width=\"900\" border=\"0\">";// align=\"center\">";
   if ($_POST['run_program'] == "AQ_Stats_Plots_leaflet_network.R") {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats_plot_NMB.html"))       {
                echo "        <tr align=\"center\">  ";
                echo " <p align=\"center\">";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NMB.html\">NMB</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NME.html\">NME</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_MB.html\">MB</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_ME.html\">ME</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FB.html\">FB</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FE.html\">FE</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_RMSE.html\">RMSE</a>";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_Corr.html\">Corr</a>";
                echo "        </tr>";
        }
        else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting stats plots."; }
                if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats_plot_NMB.png"))       {
                echo "        <tr align=\"center\">  ";
                echo " <p align=\"center\">";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NMB.png\">NMB</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_NME.png\">NME</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_MB.png\">MB</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_ME.png\">ME</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FB.png\">FB</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_FE.png\">FE</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_RMSE.png\">RMSE</a>";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot_Corr.png\">Corr</a>";
                echo "        </tr>";
	}
        
	else {
		echo " <p align=\"center\">";
		echo "PNG from HTML not requested. Check flag to create static png files from html files."; 
	}
   }
   if ($_POST['run_program'] == "AQ_Stats_Plots_leaflet.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats.csv"))  {
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats.csv\" >LINK to CSV Domain Wide Statistics File </a>" ;
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_sites_stats.csv\" >LINK to CSV Site Specific Statistics File </a><p>" ;
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_data.csv\" >LINK to Raw Query Data (CSV)</a><p>" ;
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plots.zip\" >LINK to Zip File Containing All Files (.zip)</a><p>" ;
      }
   }
   echo "<table width=\"900\" border=\"0\">";// align=\"center\">";
   if ($_POST['run_program'] == "AQ_Stats_Plots_leaflet.R") {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats_plot.html"))       {
                echo "<tr align=\"center\">  ";
                echo "<p align=\"center\">";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot.html\">All Stats (html)</a> ";
        }
        else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting stats plots."; }
   }
   if ($_POST['run_program'] == "AQ_Stats.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stats.zip"))      {
             echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stats.zip\" >Zip File Containing All Files (.zip)</a><p>" ;
      }
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting stats plots."; }
   }
   if ($_POST['run_program'] == "AQ_Raw_Data.R") {
      if(glob("$cache_amet2/${project_id}_${pid}_rawdata.csv"))	{
	     echo " <p align=\"center\">";
             echo "	<a href=\"$cache_amet2/${project_id}_${pid}_rawdata.csv\">Raw Network Data (CSV)</a> ";
      }   
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered creating raw data file."; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot.pdf"))	{
	     echo " <p align=\"center\">";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
	     echo "&nbsp;";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.png\">Mod/Ob Scatterplot (PNG)</a> ";
             echo "<p align=\"center\">";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.csv\">Scatterplot Data (CSV)</a> ";
      }   
      else {
             echo "An error was encountered plotting Scatter Plot. See log file below.";
             echo "<p><a href=\"$cache_amet2/web_query.txt\">Query_Log.txt</a>"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_ggplot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_ggplot.pdf"))    {
             echo " <p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_ggplot.pdf\">Scatterplot (PDF)</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_ggplot.png\">Scatterplot (PNG)</a> ";
             echo "<p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_ggplot.csv\">Scatterplot Data (CSV)</a> ";
          }
      else {
         echo "An error was encountered plotting Scatter Plot. See log file below.";
         echo "<p><a href=\"$cache_amet2/web_query.txt\">Query_Log.txt</a>"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot.html"))    {
             echo " <p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.html\">Mod/Ob Scatterplot (HTML)</a> ";
             echo "&nbsp;";
             echo "<p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.csv\">Scatterplot Data (CSV)</a> ";
          }
      else {
         echo "An error was encountered plotting Scatter Plot. See log file below.";
         echo "<p><a href=\"$cache_amet2/web_query.txt\">Query_Log.txt</a>"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_multisim_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_multi.html"))    {
             echo " <p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.html\">Mod/Ob Scatterplot (HTML)</a> ";
             echo "&nbsp;";
             echo "<p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.csv\">Scatterplot Data (CSV)</a> ";
          }
      else {
         echo "An error was encountered plotting Scatter Plot. See log file below.";
         echo "<p><a href=\"$cache_amet2/web_query.txt\">Query_Log.txt</a>"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_single.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_single.pdf"))	{
	     echo " <p align=\"center\">";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_single.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
             echo "&nbsp;";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_single.png\">Mod/Ob Scatterplot (PNG)</a> ";
             echo "<p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_single.csv\">Scatterplot Data (CSV)</a> ";
      }   
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Scatter Plot"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_density.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_density.pdf"))	{
	     echo " <p align=\"center\">";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
	     echo "&nbsp;";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density.png\">Mod/Ob Scatterplot (PNG)</a> ";
             echo "<p align=\"center\">";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density.csv\">Scatterplot Data (CSV)</a> ";
      }   
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Density Scatter Plot"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_density_ggplot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_density_ggplot.pdf"))    {
             echo " <p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density_ggplot.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
             echo "&nbsp;";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density_ggplot.png\">Mod/Ob Scatterplot (PNG)</a> ";
	     echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density_ggplot.html\">Mod/Ob Scatterplot (HTML)</a> ";
             echo "<p align=\"center\">";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density_ggplot.csv\">Scatterplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Density Scatter Plot"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_log.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_log.pdf"))	{
	     echo " <p align=\"center\">";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_log.pdf\">Model/Ob Log-Log Scatterplot (PDF)</a> ";
             echo "         </td>";
             echo "          <td> ";
      	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_log.png\">Model/Ob Log-Log Scatterplot (PNG)</a> ";
	     echo "         </td>";
             echo "<p align=\"center\">";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_log.csv\">Scatterplot Data (CSV File)</a> ";
      }   
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Log-Log Scatter Plot"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_mtom.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_mtom.pdf"))	{
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom.pdf\">Model/Model Scatterplot (PDF)</a> ";
	     echo "         </td>";
             echo "          <td> ";
   	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom.png\">Model/Model Scatterplot (PNG)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Model-Model Scatter Plot";   }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_mtom_density.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_mtom_density.pdf"))       {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom_density.pdf\">Density Scatterplot (PDF)</a> ";
             echo "         </td>";
             echo "          <td> ";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom_density.png\">Density Scatterplot (PNG)</a> ";
             echo "          <td> ";
	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom_density.html\">Density Scatterplot (HTML)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Model-Model Scatter Plot";   }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_percentiles.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_percentiles.pdf"))	{
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_percentiles.pdf\">Percentile Scatterplot (PDF)</a> ";
   	     echo "         </td>";
             echo "          <td> ";
  	     echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_percentiles.png\">Percentile Scatterplot (PNG)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting percentile scatter plot"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_soil.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_soil.pdf")) {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_soil.pdf\">Model/Ob Soil Scatterplot (PDF)</a> ";
                 echo "         </td>";
         echo "          <td> ";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_soil.png\">Model/Ob Soil Scatterplot (PNG)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting soil scatter plot"; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_skill.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_skill.pdf"))  {
                 echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_skill.pdf\">Skill Plot (PDF)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_skill.png\">Skill Plot (PNG)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_skill.csv\">Skill Plot Data (CSV)</a> ";
          }   
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting skill scatter plot."; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_bins.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_bins.pdf"))   {
         echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.png\">Mean Bias Plot (PNG)</a> ";
         echo "&nbsp;&nbsp;";
         echo " <a align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.pdf\">Mean Bias Plot (PDF)</a> ";
         echo "&nbsp;&nbsp;";
         echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.csv\">Raw Data File (CSV)</a> ";
      }   
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting binned scatter plots."; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_bins_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_bins.html"))   {
         echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.html\">Binned Plot (HTML)</a> ";
         echo "&nbsp;&nbsp;";
         echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.csv\">Raw Data File (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting binned scatter plots."; }
   }
   if ($_POST['run_program'] == "AQ_Scatterplot_multisim.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot.pdf"))    {
         echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.pdf\">Scatterplot (PDF)</a> ";
         echo "&nbsp;&nbsp;";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.png\">Scatterplot (PNG)</a> ";
         echo "&nbsp;&nbsp;";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.csv\">Scatterplot Data (CSV)</a> ";
      }   
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting multi scatter plot."; }
   }
   if ($_POST['run_program'] == "AQ_Soccerplot.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_soccerplot.pdf"))	{
	     echo "	<a href=\"$cache_amet2/${project_id}_${pid}_soccerplot.png\">Soccergoal Plot (PNG)</a> ";
		 echo "&nbsp;&nbsp;";
		 echo " <a href=\"$cache_amet2/${project_id}_${pid}_soccerplot.pdf\">Soccergoal Plot (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Soccergoal Plot"; }
   }
   if ($_POST['run_program'] == "AQ_Soccerplot_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_soccerplot_norm.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${pid}_soccerplot_norm.html\">NMB/NME Soccergoal Plot (HTML)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${pid}_soccerplot_frac.html\">FB/FE Soccergoal Plot (HTML)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Soccergoal Plot"; }
   }
   if ($_POST['run_program'] == "AQ_Bugleplot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_bugle_plot_error.pdf"))	{
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_bugle_plot_bias.png\">Bugle Plot Bias (PNG)</a> ";
		 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_bugle_plot_error.png\">Bugle Plot Error (PNG)</a> ";
		 echo " <p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_bugle_plot_bias.pdf\">Bugle Plot Bias(PDF)</a> ";
		 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_bugle_plot_error.pdf\">Bugle Plot Error (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bulge plot."; }
   }
   if ($_POST['run_program'] == "AQ_Timeseries.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
      echo "<center>";
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries.png"))	{
      echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.png\"> Time Series (PNG)</a> ";
      echo "&nbsp;&nbsp;";
      echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.pdf\"> Time Series (PDF)</a> ";
      echo "<p>";
      echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_bysite.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
      echo "<center>";
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries.zip"))     {
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.zip\"> Time Series (zip)</a> ";
      echo "&nbsp;&nbsp;";
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_csv.zip\">Timeseries Data (zip)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_dygraph.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
      echo "<center>";
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries_dygraph.html"))     {
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_dygraph.html\"> Time Series (HTML)</a> ";
      echo "<p>";
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_dygraph.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting dygraph timeseries plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_plotly.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
      echo "<center>";
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries.html"))     {
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.html\"> Time Series (HTML)</a> ";
      echo "<p>";
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plotly plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_bysite_bysite.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
      echo "<center>";
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries.zip"))     {
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.zip\"> Time Series (zip)</a> ";
      echo "&nbsp;&nbsp;";
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_csv.zip\">Timeseries Data (zip)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_networks_plotly.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
      echo "<center>";
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries.html"))     {
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.html\"> Time Series (HTML)</a> ";
      echo "<p>";
      echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plotly plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_species_plotly.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
      echo "<center>";
      if(file_exists("$cache_amet/${project_id}_multispec_${pid}_timeseries.html"))     {
      echo "    <a href=\"$cache_amet2/${project_id}_multispec_${pid}_timeseries.html\"> Time Series (HTML)</a> ";
      echo "<p>";
      echo "    <a href=\"$cache_amet2/${project_id}_multispec_${pid}_timeseries.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plotly plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_multi_networks.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
	  echo "<center>";
	  if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries.png"))	{
         echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.pdf\">Timeseries Plot (PDF)</a> ";
		 echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.png\">Timeseries Plot (PNG)</a> ";
		 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_multi_species.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
          echo "<center>";
          if(file_exists("$cache_amet/${project_id}_${pid}_timeseries.png"))     {
         echo " <a href=\"$cache_amet2/${project_id}_${pid}_timeseries.pdf\">Timeseries Plot (PDF)</a> ";
                 echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${pid}_timeseries.png\">Timeseries Plot (PNG)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${pid}_timeseries.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Timeseries_MtoM.R") {
      echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
          echo "<center>";
          if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries_mtom.png"))  {
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_mtom.pdf\">Timeseries Plot (PDF)</a> ";
                 echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_mtom.png\">Timeseries Plot (PNG)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_mtom.csv\">Timeseries Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries model to model plot"; }
   }
   echo "</center>";
   if ($_POST['run_program'] == "AQ_Boxplot_Hourly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_hourly.pdf"))	{
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_hourly.pdf\">Boxplot (PDF format)</a> ";
		 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_hourly.png\">Boxplot (PNG format)</a> ";
		 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_hourly_data.csv\">Median Data (CSV format)</a> ";
	  }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting hourly box plot."; }
   }
   if ($_POST['run_program'] == "AQ_Boxplot_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot.html")) {
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot.html\">Boxplot (HTML)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias.html\">Bias Boxplot (HTML)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_nmb.html\">NMB Boxplot (HTML)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot.csv\">Data (CSV)</a> ";
          }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting box plot."; }
   }
   if ($_POST['run_program'] == "AQ_Boxplot_MDA8.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_MDA8.pdf"))	{
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_MDA8.pdf\">MDA8 Boxplot (PDF)</a> ";
		 echo "         </td>";
         echo "          <td> ";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_MDA8.png\">MDA8 Boxplot (PNG)</a> ";
	  }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting MDA8 boxplot."; }
   }
   if ($_POST['run_program'] == "AQ_Boxplot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_all.pdf"))	{
 	         echo "	<p alight=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_all.png\">Boxplot (PNG)</a> ";
                 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_all.pdf\">Boxplot (PDF)</a> ";
		 echo "	<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias.png\">Bias Boxplot (PNG)</a> ";
                 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias.pdf\">Bias Boxplot (PDF)</a> ";
		 echo "	<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_norm_bias.png\">Normalized Bias Boxplot (PNG)</a> ";
                 echo "&nbsp;&nbsp;";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_norm_bias.pdf\">Normalized Bias Boxplot (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting box plot."; }
   }
   if ($_POST['run_program'] == "AQ_Boxplot_ggplot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_ggplot.pdf"))    {
    	         echo "<p alight=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_ggplot.png\">Boxplot (PNG)</a> ";
        	 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_ggplot.pdf\">Boxplot (PDF)</a> ";
                 echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias_ggplot.png\">Bias Boxplot (PNG)</a> ";
                 echo "&nbsp;&nbsp;";
                 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias_ggplot.pdf\">Bias Boxplot (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting box plot."; }
   }
   if ($_POST['run_program'] == "AQ_Boxplot_DofW.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_dow.pdf"))	{
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_dow.pdf\">Day of Week Boxplot (PDF)</a> ";
		 echo "         </td>";
    	         echo "          <td> ";
		 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_dow.png\">Day of Week Boxplot (PNG)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting day of week boxplot."; }
   }
   if ($_POST['run_program'] == "AQ_Boxplot_Roselle.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_roselle.pdf"))	{
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_roselle.png\">Roselle Boxplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_roselle_bias.png\">Roselle Boxplot Bias (PNG)</a> ";
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_roselle.pdf\">Roselle Boxplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_roselle_bias.pdf\">Roselle Boxplot Bias (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Roselle box plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot.pdf"))	{
	     echo "	<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot.pdf\">Stacked Barplot (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_panel.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_panel.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_panel.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_panel.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_panel_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_panel_AE6.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_panel_AE6.pdf"))       {
             echo "     <p align=\"center\"><a href=\"../$cache_amet2/${project_id}_${pid}_stacked_barplot_panel_AE6.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"../$cache_amet2/${project_id}_${pid}_stacked_barplot_panel_AE6.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"../$cache_amet2/${project_id}_${pid}_stacked_barplot_panel_AE6_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"../$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_AE6.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_AE6.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_AE6_ggplot.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_AE6_ggplot.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_ggplot.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_ggplot.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_data_ggplot.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_AE6_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_AE6.html"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6.html\">Stacked Barplot (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_AE6_ggplot_ts.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_AE6_ggplot.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_ggplot.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_ggplot.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_data_ggplot.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_AE6_ts.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_AE6_ts.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_ts.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_ts.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_ts.html\">Stacked Barplot (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_data_ts.csv\">Barplot Data (CSV)</a> ";
          }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_panel_AE6_multi.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_panel_AE6_multi.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_panel_AE6_multi.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_panel_AE6_multi.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_panel_AE6_multi_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_soil.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_soil.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_soil.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_soil.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_soil_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Stacked_Barplot_soil_multi.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_soil.pdf"))       {
             echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_soil.png\">Stacked Barplot (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_soil.pdf\">Stacked Barplot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_soil_data.csv\">Barplot Data (CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting soil bar plot."; }
   }
   if ($_POST['run_program'] == "AQ_Overlay_File.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_overlay.ncf"))	{
	     echo "	<a href=\"$cache_amet2/${project_id}_${pid}_overlay.ncf\">PAVE Obs Overlay File (IOAPI file)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered creating overlay file."; }
   }
   if ($_POST['run_program'] == "AQ_Monthly_Stat_Plot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_plot1.pdf"))	{
	     echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_plot1.pdf\">Obs/Mod Plot (PDF)</a> ";
             echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_plot1.png\">Obs/Mod Plot (PNG)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats.csv\">Monthly Stat File (CSV)</a> ";
 	     echo "&nbsp;&nbsp;";
	     echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot1.pdf\">NMB/NME/Corr Plot (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot1.png\">NMB/NME/Corr Plot (PNG)</a> ";
 	     echo "&nbsp;&nbsp;";
	     echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot2.pdf\">MdnB/MdnE/RMSE Plot (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot2.png\">MdnB/MdnE/RMSE Plot (PNG)</a> ";  
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting yearly stat plot."; }
   }
   if ($_POST['run_program'] == "AQ_Monthly_Stat_Plot_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats_plot.html"))  {
             echo "     <p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot.html\">Monthly Stat Plot (HTML)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting monthly stat plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.png"))	{
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.png\">Obs (PNG)</a> ";
	     echo "&nbsp;&nbsp;";
    	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.png\">Model (PNG)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.png\">Difference (PNG)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio.png\">Ratio (PNG)</a> ";
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.pdf\">Obs (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
  	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.pdf\">Model (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.pdf\">Difference (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio.pdf\">Ratio (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_leaflet.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot.html\">Spatial Plot (html)</a> ";
      }
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial plot."; }
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot.png"))        {
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot.png\">Spatial Plot (png)</a> ";
          }
      else { echo "<p> PNG from HTML not requested. Check flag to create static png files from html files."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_leaflet_network.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.html\">Obs (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.html\">Mod (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.html\">Diff (html)</a> ";
      }
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial plot."; }
             if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.png"))        {
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.png\">Obs (png)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.png\">Mod (png)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.png\">Diff (png)</a> ";
      }
      else { echo "<p> PNG from HTML not requested. Check flag to create static png files from html files."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_animation_ggplot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.html\">Obs (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.html\">Mod (html)</a> ";
             echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.html\">Diff (html)</a> ";
	     echo "     <p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_anim_obs.html\">Obs w/ Slider (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_anim_mod.html\">Mod w/ Slider (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_anim_diff.html\">Diff w/ Slider (html)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered making model/ob animation spatial plot."; }
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.pdf"))        {
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.pdf\">Obs (pdf)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.pdf\">Mod (pdf)</a> ";
             echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.pdf\">Avg Diff (pdf)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff_max.pdf\">Max Diff (pdf)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff_abs_max.pdf\">Abs Max Diff (pdf)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_tile.pdf\">4-Panel (pdf)</a> ";
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.png\">Obs (png)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.png\">Mod (png)</a> ";
             echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.png\">Avg Diff (png)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff_max.png\">Max Diff (png)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff_abs_max.png\">Abs Max Diff (png)</a> ";
	     echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_tile.png\">4-Panel (png)</a> ";
      }
      else { echo "<p><a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_animation_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.html\">Obs (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.html\">Mod (html)</a> ";
             echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.html\">Diff (html)</a> ";
             echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff_max.html\">Max Diff (html)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff_abs_max.html\">Abs Max Diff (html)</a> ";
	     echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_tile.html\">All Metrics (html)</a> ";
             echo "     <p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_anim_obs.html\">Obs w/ Slider (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_anim_mod.html\">Mod w/ Slider (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_anim_diff.html\">Diff w/ Slider (html)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered making model/ob animation spatial plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_Species_Diff_leaflet.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.html\">Obs (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.html\">Mod (html)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.html\">Diff (html)</a> ";
      }
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial plot."; }
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_obs.png"))        {
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_obs.png\">Obs (png)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mod.png\">Mod (png)</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.png\">Diff (png)</a> ";
      }
      else { echo "<p> PNG from HTML not requested. Check flag to create static png files from html files."; }
      }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_Diff_leaflet.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_diff.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.html\">Spatial Plot</a> ";
             echo "<p>";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_bias_diff.html\">Bias Hist</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_error_diff.html\">Error Hist</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_corr_diff.html\">Corr Hist</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_Diff_leaflet_network.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_bias_diff.html"))        {
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_1.html\">Bias1</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_2.html\">Bias2</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_1.html\">Error1</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_2.html\">Error2</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_1.html\">Corr1</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_2.html\">Corr2</a> ";
             echo "<p>";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_diff.html\">Bias Diff</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_diff.html\">Error Diff</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_diff.html\">Corr Diff</a> ";
             echo "<p>";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_bias_diff.html\">Bias Hist</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_error_diff.html\">Error Hist</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_corr_diff.html\">Corr Hist</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial plot."; }
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_bias_diff.png"))        {
             echo "   <p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_1.png\">Bias1</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_2.png\">Bias2</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_diff.png\">Bias Diff</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_1.png\">Error1</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_2.png\">Error2</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_diff.png\">Error Diff</a> ";
             echo "&nbsp;&nbsp;";
             echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_diff.png\">Corr Diff</a> ";
      }
      else {echo "<p> PNG from HTML not requested. Check flag to create static png files from html files."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_Ratio.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_ratio_obs.png"))	{
	     echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio_obs.png\">Obs Spatial Plot (PNG)</a> ";
 	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio_mod.png\">Model Spatial Plot (PNG)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio_diff.png\">Difference Plot (PNG)</a> ";
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio_obs.pdf\">Obs Spatial Plot (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio_mod.pdf\">Model Spatial Plot (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_ratio_diff.pdf\">Difference Plot (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial ratio plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_MtoM.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.png"))	{
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.png\">MtoM Diff Avg Plot (PNG)</a> ";
  	     echo "&nbsp;";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_max.png\">MtoM Diff Max Plot (PNG)</a> ";
	     echo "&nbsp;";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_min.png\">MtoM Diff Min Plot (PNG)</a> ";
             echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.pdf\">MtoM Diff Avg Plot (PDF)</a> ";
   	     echo "&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_max.pdf\">MtoM Diff Max Plot (PDF)</a> ";
	     echo "&nbsp;";
	     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_min.pdf\">MtoM Diff Min Plot (PDF)</a> ";
      }
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/model spatial diff plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_MtoM_leaflet.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.html"))      {
             echo "<a align=left href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.html\">MtoM Avg Plot</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_max.html\">MtoM Max Plot</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_min.html\">MtoM Min Plot</a> ";
             echo "&nbsp;";
             echo " <p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_ratio.html\">MtoM Ratio Plot</a> ";
          }
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/model spatial diff plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_MtoM_Species.R") {
      if(file_exists("$cache_amet/${project_id}_${pid}_spatialplot_mtom_species_diff_avg.png"))      {
             echo "<a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_avg.png\">Avg Diff (PNG)</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_max.png\">Max Diff (PNG)</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_min.png\">Min Diff (PNG)</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_perc.png\">Percent Diff (PNG)</a> ";
             echo "<p><a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_avg.pdf\">Avg Diff (PDF)</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_max.pdf\">Max Diff (PDF)</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_min.pdf\">Min Diff (PDF)</a> ";
             echo "&nbsp;";
             echo " <a href=\"$cache_amet2/${project_id}_${pid}_spatialplot_mtom_species_diff_perc.pdf\">Percent Diff (PDF)</a> ";
      }
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/model spatial diff plot."; }
   }
   if ($_POST['run_program'] == "AQ_Plot_Spatial_Diff.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_bias_1.png"))	{
         echo " <p align=\"left\">";
         echo "Run 1 Bias";
	 echo " <a align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_1.png\">(PNG)</a>";
	 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_1.pdf\"> (PDF)</a>";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	 echo "Run 1 Error ";
	 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_1.png\">(PNG)</a>";
	 echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_1.pdf\"> (PDF)</a>";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         echo "Run 1 Corr ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_1.png\">(PNG)</a>";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_1.pdf\"> (PDF)</a>";
         echo "<p>Run 2 Bias ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_2.png\">(PNG)</a> ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_2.pdf\"> (PDF)</a> ";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	 echo "Run 2 Error ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_2.png\">(PNG)</a> ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_2.pdf\"> (PDF)</a> ";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;";
         echo "Run 2 Corr ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_2.png\">(PNG)</a> ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_2.pdf\"> (PDF)</a> ";
	 echo "<p>Bias Diff ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_diff.png\">(PNG)</a> ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_diff.pdf\"> (PDF)</a> ";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	 echo "Error Diff ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_diff.png\">(PNG)</a> ";
	 echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_diff.pdf\"> (PDF)</a> ";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
         echo "Corr Diff ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_diff.png\">(PNG)</a> ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_diff.pdf\"> (PDF)</a> ";
         echo "<p>Bias Diff Hist ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_diff_hist.png\">(PNG)</a> ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_bias_diff_hist.pdf\"> (PDF)</a> ";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;";
         echo "Error Diff Hist ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_diff_hist.png\">(PNG)</a> ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_error_diff_hist.pdf\"> (PDF)</a> ";
         echo "&nbsp;&nbsp;&nbsp;&nbsp;";
         echo "Corr Diff Hist ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_diff_hist.png\">(PNG)</a> ";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_corr_diff_hist.pdf\"> (PDF)</a> ";
         echo "<p>Plot Data File";
         echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_diff.csv\">(CSV)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/ob spatial diff plot."; }
   }
   if (($_POST['run_program'] == "AQ_Kellyplot.R") || ($_POST['run_program'] == "AQ_Kellyplot.R")) {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_NMB.png"))       {
                echo "        <tr align=\"center\">  ";
                echo " <p align=\"center\">";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_NMB.png\">NMB (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_NME.png\">NME (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_MB.png\">MB (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_ME.png\">ME (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_RMSE.png\">RMSE (PNG)</a>";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_Corr.png\">Corr (PNG)</a>";
                echo "      <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_NMB.pdf\">NMB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_NME.pdf\">NME (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_MB.pdf\">MB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_ME.pdf\">ME (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_RMSE.pdf\">RMSE (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_Corr.pdf\">Corr (PDF)</a> ";
                echo "        </tr>";
                echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data.csv\">Kelly Plot Stats (CSV)</a> ";
        }
        else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots."; }
   }
   if (($_POST['run_program'] == "AQ_Kellyplot_plotly.R") || ($_POST['run_program'] == "AQ_Kellyplot_plotly.R")) {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_NMB.html"))       {
                echo "        <tr align=\"center\">  ";
                echo " <p align=\"center\">";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_NMB.html\">NMB (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_NME.html\">NME (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_MB.html\">MB (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_ME.html\">ME (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_RMSE.html\">RMSE (HTML)</a>";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_Corr.html\">Corr (HTML)</a>";
                echo "        </tr>";
                echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data.csv\">Kelly Plot Stats (CSV)</a> ";
        }
        else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots."; }
   }
   if (($_POST['run_program'] == "AQ_Kellyplot_region.R") || ($_POST['run_program'] == "AQ_Kellyplot_region.R")) {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_region_NMB.png"))       {
                echo "        <tr align=\"center\">  ";
                echo " <p align=\"center\">";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NMB.png\">NMB (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NME.png\">NME (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_MB.png\">MB (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_ME.png\">ME (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_RMSE.png\">RMSE (PNG)</a>";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_Corr.png\">Corr (PNG)</a>";
                echo "      <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NMB.pdf\">NMB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NME.pdf\">NME (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_MB.pdf\">MB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_ME.pdf\">ME (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_FB.pdf\">FB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_FE.pdf\">FE (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_RMSE.pdf\">RMSE (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_Corr.pdf\">Corr (PDF)</a> ";
                echo "        </tr>";
                echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data_region.csv\">Kelly Plot Stats (CSV)</a> ";
        }
        else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots."; }
   }
   if (($_POST['run_program'] == "AQ_Kellyplot_region_plotly.R") || ($_POST['run_program'] == "AQ_Kellyplot_region_plotly.R")) {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_region_NMB.html"))       {
                echo "<tr align=\"center\">  ";
                echo "<p align=\"center\">";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NMB.html\">NMB (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NME.html\">NME (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_MB.html\">MB (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_ME.html\">ME (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_RMSE.html\">RMSE (HTML)</a>";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_Corr.html\">Corr (HTML)</a>";
                echo "</tr>";
                echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data_region.csv\">Kelly Plot Stats (CSV)</a> ";
        }
        else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots."; }
   }
   if (($_POST['run_program'] == "AQ_Kellyplot_season.R") || ($_POST['run_program'] == "AQ_Kellyplot_season.R")) {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_season_NMB.png"))       {
                echo "<tr align=\"center\">  ";
                echo "<p align=\"center\">";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NMB.png\">NMB (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NME.png\">NME (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_MB.png\">MB (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_ME.png\">ME (PNG)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_RMSE.png\">RMSE (PNG)</a>";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_Corr.png\">Corr (PNG)</a>";
                echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NMB.pdf\">NMB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NME.pdf\">NME (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_MB.pdf\">MB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_ME.pdf\">ME (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_FB.pdf\">FB (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_FE.pdf\">FE (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_RMSE.pdf\">RMSE (PDF)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_Corr.pdf\">Corr (PDF)</a> ";
                echo "</tr>";
                echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data_season.csv\">Kelly Plot Stats (CSV)</a> ";
        }
        else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots."; }
   }
   if (($_POST['run_program'] == "AQ_Kellyplot_season_plotly.R") || ($_POST['run_program'] == "AQ_Kellyplot_season_plotly.R")) {
        if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_season_NMB.html"))       {
                echo "<tr align=\"center\">  ";
                echo "<p align=\"center\">";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NMB.html\">NMB (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NME.html\">NME (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_MB.html\">MB (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_ME.html\">ME (HTML)</a> ";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_RMSE.html\">RMSE (HTML)</a>";
                echo "&nbsp;&nbsp;";
                echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_Corr.html\">Corr (HTML)</a>";
                echo "</tr>";
                echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data_season.csv\">Kelly Plot Stats (CSV)</a> ";
        }
        else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots."; }
   }
   if ($_POST['run_program'] == "AQ_Histogram.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_histogram.pdf"))	{
	     echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram.png\">Histogram Plot (PNG)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_bias.png\">Histogram Bias Plot (PNG)</a> ";
	     echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram.pdf\">Histogram Plot (PDF)</a> ";
	     echo "&nbsp;&nbsp;";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_bias.pdf\">Histogram Bias Plot (PDF)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting histogram plot."; }
   }
   if ($_POST['run_program'] == "AQ_Histogram_plotly.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_histogram.html"))      {
	      echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram.html\">Histogram Plot (HTML)</a> ";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting histogram plot."; }
   }
      if ($_POST['run_program'] == "AQ_Temporal_Plots.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_ecdf.pdf"))	{
	     echo "ECDF Plot ";
   	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_ecdf.png\">(PNG)</a>";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_ecdf.pdf\"> (PDF)</a>";
	     echo "<p>Q-Q Plot ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_qq.png\">(PNG)</a> ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_qq.pdf\"> (PDF)</a> ";
	     echo "<p>Taylor Plot ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_taylor.png\">(PNG)</a> ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_taylor.pdf\"> (PDF)</a> ";
	     echo "<p>Periodogram Plot ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_periodogram.png\">(PNG)</a> ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_periodogram.pdf\"> (PDF)</a> ";	     
      }   
      else { echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting temporal plots."; }
   }
   if ($_POST['run_program'] == "AQ_Spectral_Analysis.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spectrum.pdf"))	{
	     echo "Spectrum Plot ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spectrum.png\">(PNG)</a>";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spectrum.pdf\"> (PDF)</a>";
	     echo "<p>Individual Site Spectrum Plots ";
	     echo "<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spectrum_all.pdf\"> (PDF)</a> ";	     
      }   
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting spectrum plots."; }
   }
   if ($_POST['run_program'] == "AQ_Summary_Panel_Plot.R") {
      if(file_exists("$cache_amet/${project_id}_${species}_${pid}_summary_panel_plot.html"))       {
             echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_summary_panel_plot.html\">Summary Panel Plot (HTML)</a>";
      }
      else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered creating summary panel plot."; }
   }
   echo "         </td>";
   
   echo "        </tr>";
   echo "      </table>";
//}
   echo "  <p>&nbsp;</p>";
   echo "  <p>&nbsp;</p>";
   echo "   <hr>";
}	
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
?>     
</p>
            <p align="left"><font color="#333333" face="Arial, Helvetica, sans-serif">This 
                web-based utility queries the AMET database for sub-sets of data, 
                then performs a variety of statistics and generates user-defined 
                plots.</a> </font>            </p>
            <h4><font color="#333333" face="Arial, Helvetica, sans-serif">Data 
              Subset Specification</font></h4>
            <p><font color="#333333" face="Arial, Helvetica, sans-serif">Currently 
              there several categories with multiple criteria that allow the user 
              to isolate a particular set of data. Please ignore criteria that do not apply 
              to your particular need, as those criteria will not 
              be considered in the data selection.</font></p>
			  <div align="center">
            <h2><br>
            <?php 
	  		/////////////////////////////////////////////// 
			  include ( 'amet-www-config.php'); 
	 		///////////////////////////////////////////////

       		echo " <form target=_blank name=shell method=post action=querygen_aq.php > ";
         	?>
                
                    <div align="center">
                      <h2>Database Specification</h2>
			<a name="Database"></a>
                        <?php 
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
//	Connect to Database via user supplied login and pass
	 /////////////////////////////////////////////// 
	 include ( 'amet-www-config.php'); 
	 ///////////////////////////////////////////////
		$mysqli = mysqli_init();
               // $mysqli->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
//                $mysqli->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/epa_pki.crt", NULL, NULL);
                //$mysqli->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/pki_epa_gov_chain.pem", NULL, NULL);
		$databaseHost = 'localhost';
                $databaseUsername = 'ametsecure';
                $databasePassword = 'ametpwd';

                $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword);
		//$mysqli->real_connect($mysql_server,$root_login,$root_pass);
		                $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword);

                if (! $mysqli) {

                   echo "MySQL Server Name: $mysql_server";

                   echo "<p>";

                   echo "MySQL User Name: $root_login";

                   echo "<p>";

                   echo "Error: Unable to connect to MySQL." . PHP_EOL;

                   echo "<p>";

                   echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;

                   echo "<p>";

                   echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;

                   echo "<p>";

                }

                $result = mysqli_query($mysqli, "SHOW DATABASES");

                mysqli_close($mysqli);

                if (! $result) {

                   die("Select DB Error: ".mysqli_error());

                }
		//if (! $mysqli) {
                //   echo "MySQL Server Name: $mysql_server";
                 //  echo "<p>"; 
                  // echo "MySQL User Name: $root_login";
                   //echo "<p>";
                 //  echo "Error: Unable to connect to MySQL." . PHP_EOL;
                 //  echo "<p>";
                 //  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                 //  echo "<p>";
                 //  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                 //  echo "<p>";
               // }
                //$result = $mysqli->query("SHOW DATABASES;");
                //$mysqli->close();
                //if (! $result) {
   	         //  die("Select DB Error: ".mysqli_error()); 
                //}
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
// Check database logs for the existance of the requested project id
		$i=0;
		echo "<label for=\"database_id\">Choose a Database</label><br><select name=database_id id=database_id onChange=\"MM_jumpMenu('parent',this,0)\"> ";
		echo "<option value= ></option>";
		if ($row = mysqli_fetch_array($result)) {
		   do {
		      $did=$row['Database'];
   	              echo $row['Database'];
		      $select="";
   		      if ($did == $_GET['database_id']) {
		         $select="SELECTED";
		      }
		      $data_str[$i]="Database ID: ".$row["Database"];
                      echo " <option value=querygen_aq.php?database_id=".$row["Database"]."&stat_id=".$_GET['stat_id']."&stat_file=".$_GET['stat_file']."  $select> $data_str[$i]  </option> ";
	   	   }
		   while($row = mysqli_fetch_assoc($result));
		}
		echo "</select> "; 
		//else{
		
		//	print "this is a test<br>";
		//	die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
		//}
               echo " <option value= ></option> </select> ";
               // $_SESSION['database_id']=$_GET['database_id'];
               // $statid		=$_GET['stat_id'];
               // $stat_file	=$_GET['stat_file'];
		$database_id	=$_GET['database_id'];
		
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://			
//if($_SESSION['database_id']){

//}
?>
                      
                      <h2>Project/Model Run Specification <br></h2>
                        <a name="station"></a>
                        <?php 
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
//	Connect to Database via user supplied login and pass
	 /////////////////////////////////////////////// 
	 include ( 'amet-www-config.php'); 
	 ///////////////////////////////////////////////
		//$dbase="test_avgAQ";
//		$link = mysql_connect($mysql_server,$root_login,$root_pass) or die("Connect Error: ".mysql_error());
//		$link = mysql_connect($mysql_server,$root_login,$root_pass) or die("Connect Error: ".mysql_error());
  	 $link = mysqli_connect($databaseHost, $databaseUsername, $databasePassword) or die("Connect Error: ".mysql_error()); 
              //  $link = mysqli_init();
                  $link->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);
//                $link->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/epa_pki.crt", NULL, NULL);
//                $link->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/pki_epa_gov_chain.pem", NULL, NULL);
	//	$link->real_connect($mysql_server,$root_login,$root_pass);
	//	$link->real_connect($databaseHost, $databaseUsername, $databasePassword);
		if (! $link)
		die("Couldn't connect to MySQL");
//                mysqli_select_db($database_id , $mysqli)
                mysqli_select_db($link, $database_id);
//                mysqli_close($mysqli);
//		or die("Select DB Error: ".mysql_error());
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
// Check database logs for the existance of the requested project id
                $result = $link->query("SELECT proj_code,user_id,model,email,description,DATE_FORMAT(proj_date,'%m/%d/%Y'),proj_time,DATE_FORMAT(min_date,'%m/%d/%Y'),DATE_FORMAT(max_date,'%m/%d/%Y') from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
//		$result=mysqli_query("SELECT proj_code,user_id,model,email,description,DATE_FORMAT(proj_date,'%m/%d/%Y'),proj_time,DATE_FORMAT(min_date,'%m/%d/%Y'),DATE_FORMAT(max_date,'%m/%d/%Y') from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
		$i=0;
		    echo "<label for=\"project_id\">Choose a Project</label><br><select name=project_id id=project_id onChange=\"MM_jumpMenu('parent',this,0)\"> ";
            
			echo " <option value= > Choose a Project </option> ";
		if ($row = mysqli_fetch_array($result)) {
		do {
			$pid=$row["proj_code"];
	
				$select="";
			if ($pid == $_GET['project_id']) {
				$a1=$row["proj_code"];
				$a2=$row["user_id"];
				$a3=$row["model"];
				$a4=$row["email"];
				$a5=$row["description"];
				$a6=$row[5];
				$a7=$row["proj_time"];
				$a8=$row[7];
				$a9=$row[8];
				$select="SELECTED";
				//<!-- The method below to retrieve the min and max dates is not being used because it is too slow. -->
				// Determine start and end dates of the data by querying the appropriate database		  
				//   $result2=mysql_query("SELECT min(ob_dates),max(ob_datee) from ".$a1."");
				//   $row2=mysql_fetch_array($result2);
				//   $a8=$row2["min(ob_dates)"];
				//   $a9=$row2["max(ob_datee)"];
			}	
			$proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[5];
             echo " <option value=querygen_aq.php?database_id=$database_id&project_id=".$row["proj_code"]."&stat_id=".$_GET['stat_id']."&stat_file=".$_GET['stat_file']."  $select> $proj_str[$i]  </option> ";

		}
		while($row = mysqli_fetch_array($result));

		} 
		else{
		
			print "this is a test<br>";
			die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
		}
         echo " <option value= ></option> </select> ";
	    $_SESSION['project_id']=$_GET['project_id'];
        $statid		=$_GET['stat_id'];
		$stat_file	=$_GET['stat_file'];
		$project_id	=$_GET['project_id'];
		$database_id=$_GET['database_id'];
		
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://			
if($_SESSION['project_id']){
print <<<TEST
          <p>
		  <table width="500" border="0" align="center" cellpadding="2" cellspacing="2">                           
                            <tr bgcolor="#CCFFCC">
                              <th colspan="2" scope="col"><h2>Project Details </h2></th>
                            </tr>
                            <tr>
                              <td width="152" align="right">Project ID: </td>
                              <td width="328" align="left">$project_id </td>
                            </tr>
                            <tr>
                              <td align="right">Owner: </td>
                              <td align="left">$a2</td>
                            </tr>
                            <tr>
                              <td align="right">Model: </td>
                              <td align="left">$a3</td>
                            </tr>
                            <tr>
                              <td align="right">Email: </td>
                              <td align="left">$a4</td>
                            </tr>
                            <tr>
                              <td align="right">Description: </td>
                              <td align="left">$a5</td>
                            </tr>
                            <tr>
                              <td align="right">Project Creation Date:  </td>
                              <td align="left">$a6 $a7 </td>
                            </tr>
                            <tr>
                              <td align="right">Earliest Record: </td>
                              <td align="left">$a8</td>
                            </tr>
                            <tr>
                              <td height="23" align="right">Latest Record: </td>
                              <td align="left">$a9</td>
                            </tr>
                          </table>
 		  <input name="project_id" type="hidden" value="$a1" > 
		  <input name="stat_id" type="hidden" value="$statid" > 
		  <input name="stat_file" type="hidden" value="$stat_file" > 
		  <input name="min_date" type="hidden" value=$a8 > 
		  <input name="max_date" type="hidden" value=$a9 > 
		  <input name="database_id" type="hidden" value="$database_id">
TEST;
}
else {
print <<<TEST
      <option value="" ></option> 
	  </select> 
      <p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p><p align="left">&nbsp;</p>
TEST;
}
?>

                        </font>
                        </p>
                    </h2>
                      <p align="left"><font face="Arial, Helvetica, sans-serif"><strong>Additional Project IDs:</strong><br>
            Select additional projects to use for model to model comparisons.<br>
            <br>
              <?php 
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//	Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	 include ( 'amet-www-config.php'); 
		//$dbase="test_avgAQ";
//		$link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//		if (! $link)
//		die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//		or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
		$i=0;
		echo "<label for=\"project_id2\">Project 2 ID: </label>";
		echo "<select name=\"project_id2\" id=\"project_id2\"> ";
		echo " <option value=\"\" selected> Choose a Project  </option> ";
		if ($row = mysqli_fetch_array($result)) {
		do {
			$pid=$row["proj_code"];
			$proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

		}
		while($row = mysqli_fetch_array($result));

		} 
		else{
		   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
		}
	        echo "</select> ";		
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Monitor / Network and Species Criteria - State, Site ID, RPO Regions, AQ Networks, Species to Plot
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
?>
            </p>

<p align="left"><?php 
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//	Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	 include ( 'amet-www-config.php'); 
		//$dbase="test_avgAQ";
//		$link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//		if (! $link)
//		die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//		or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
		$i=0;
		echo "<label for=\"project_id3\">Project 3 ID: </label>";
		echo "<select name=\"project_id3\" id=\"project_id3\"> ";
		echo " <option value=\"\" selected> Choose a Project  </option> ";
		if ($row = mysqli_fetch_array($result)) {
		do {
			$pid=$row["proj_code"];
			$proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

		}
		while($row = mysqli_fetch_array($result));

		} 
		else{
		
			
			die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
		}
		  echo "</select> ";	
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Monitor / Network and Species Criteria - State, Site ID, RPO Regions, AQ Networks, Species to Plot
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
?>
            </p>
            <p align="left"><?php 
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//	Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	 include ( 'amet-www-config.php'); 
		//$dbase="test_avgAQ";
//		$link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//		if (! $link)
//		die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//		or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
		$i=0;
		echo "<label for=\"project_id4\">Project 4 ID: </label>";
		echo "<select name=\"project_id4\" id=\"project_id4\"> ";
		echo " <option value=\"\" selected> Choose a Project  </option> ";
		if ($row = mysqli_fetch_array($result)) {
		do {
			$pid=$row["proj_code"];
			$proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

		}
		while($row = mysqli_fetch_array($result));

		} 
		else{
		
			
			die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
		}
		  echo "</select> ";		
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Monitor / Network and Species Criteria - State, Site ID, RPO Regions, AQ Networks, Species to Plot
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
?>
            </p>
            <p align="left"><?php 
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//	Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	 include ( 'amet-www-config.php'); 
		//$dbase="test_avgAQ";
//		$link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//		if (! $link)
//		die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//		or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
		$i=0;
		echo "<label for=\"project_id5\">Project 5 ID: </label>";
		echo "<select name=\"project_id5\" id=\"project_id5\"> ";
		echo " <option value=\"\" selected> Choose a Project  </option> ";
		if ($row = mysqli_fetch_array($result)) {
		do {
		   $pid=$row["proj_code"];
		   $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                   echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
		}
		while($row = mysqli_fetch_array($result));

		} 
		else{
		
			
			die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
		}
		  echo "</select> ";		
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Monitor / Network and Species Criteria - State, Site ID, RPO Regions, AQ Networks, Species to Plot
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
?>
            </p>
            <p align="left"><?php 
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//	Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	 include ( 'amet-www-config.php'); 
		//$dbase="test_avgAQ";
//		$link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//		if (! $link)
//		die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//		or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
		$i=0;
	        echo "<label for=\"project_id6\">Project 6 ID: </label>";    
		echo "<select name=\"project_id6\" id=\"project_id6\"> ";
		echo " <option value=\"\" selected> Choose a Project  </option> ";
		if ($row = mysqli_fetch_array($result)) {
		   do {
		      $pid=$row["proj_code"];
		      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
	  	   }
		   while($row = mysqli_fetch_array($result));
		} 
		else {
		   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
		}
		echo "</select> ";		
//////////////////////////////////////////////////////////////////////////////////////////////////


?>

            </p>
            <p align="left"><?php
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//      Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
         include ( 'amet-www-config.php');
                //$dbase="test_avgAQ";
//                $link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//                if (! $link)
//                die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//                or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id7\">Project 7 ID: </label>";    
		echo "<select name=\"project_id7\" id=\"project_id7\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                     $pid=$row["proj_code"];
                     $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                     echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>

            </p>
            <p align="left"><?php
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//      Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
         include ( 'amet-www-config.php');
                //$dbase="test_avgAQ";
//                $link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//                if (! $link)
//                die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//                or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id8\">Project 8 ID: </label>";    
		echo "<select name=\"project_id8\" id=\"project_id8\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                      $pid=$row["proj_code"];
                      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                   while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////

?>

            </p>
            <p align="left"><?php
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//      Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
         include ( 'amet-www-config.php');
                //$dbase="test_avgAQ";
//                $link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//                if (! $link)
//                die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//                or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id9\">Project 9 ID: </label>";    
		echo "<select name=\"project_id9\" id=\"project_id9\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                      $pid=$row["proj_code"];
                      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                   while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id10\">Project 10 ID: </label>";    
		echo "<select name=\"project_id10\" id=\"project_id10\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                      $pid=$row["proj_code"];
                      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                   while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////

?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id11\">Project 11 ID: </label>";    
		echo "<select name=\"project_id11\" id=\"project_id11\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                      $pid=$row["proj_code"];
                      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                   while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id12\">Project 12 ID: </label>";    
		echo "<select name=\"project_id12\" id=\"project_id12\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                      $pid=$row["proj_code"];
                      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                   while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id13\">Project 13 ID: </label>";    
		echo "<select name=\"project_id13\" id=\"project_id13\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                      $pid=$row["proj_code"];
                      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                   while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id14\">Project 14 ID: </label>";    
		echo "<select name=\"project_id14\" id=\"project_id14\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                      $pid=$row["proj_code"];
                      $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
                      echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   }
                   while($row = mysqli_fetch_array($result));
                }
                else {
                   die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////

?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id15\">Project 15 ID: </label>";    
		echo "<select name=\"project_id15\" id=\"project_id15\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                do {
                        $pid=$row["proj_code"];
                        $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

                }
                while($row = mysqli_fetch_array($result));

                }
                else{


                        die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id16\">Project 16 ID: </label>";    
		echo "<select name=\"project_id16\" id=\"project_id16\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                do {
                        $pid=$row["proj_code"];
                        $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

                }
                while($row = mysqli_fetch_array($result));

                }
                else{


                        die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////

?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id17\">Project 17 ID: </label>";    
		echo "<select name=\"project_id17\" id=\"project_id17\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                do {
                        $pid=$row["proj_code"];
                        $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

                }
                while($row = mysqli_fetch_array($result));

                }
                else{


                        die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id18\">Project 18 ID: </label>";    
		echo "<select name=\"project_id18\" id=\"project_id18\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                do {
                        $pid=$row["proj_code"];
                        $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

                }
                while($row = mysqli_fetch_array($result));

                }
                else{


                        die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id19\">Project 19 ID: </label>";    
		echo "<select name=\"project_id19\" id=\"project_id19\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                do {
                        $pid=$row["proj_code"];
                        $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

                }
                while($row = mysqli_fetch_array($result));

                }
                else{


                        die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


?>
</p>
<p align="left"><?php


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from aq_project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
                $i=0;
	        echo "<label for=\"project_id20\">Project 20 ID: </label>";    
		echo "<select name=\"project_id20\" id=\"project_id20\"> ";
                echo " <option value=\"\" selected> Choose a Project  </option> ";
                if ($row = mysqli_fetch_array($result)) {
                do {
                        $pid=$row["proj_code"];
                        $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[2];
             echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";

                }
                while($row = mysqli_fetch_array($result));

                }
                else{


                        die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
//////////////////////////////////////////////////////////////////////////////////////////////////


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Monitor / Network and Species Criteria - State, Site ID, RPO Regions, AQ Networks, Species to Plot
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
?>

            </p>
            <table width="800" border="0">
              <tr>
                <td><table width="800" border="1" align="left" cellpadding="10" cellspacing="5">
                    <tr align="center" valign="middle"> 
                      <td colspan="2"> <div align="center" class="style4 style3"><strong><font face="Arial, Helvetica, sans-serif">Monitor / Network and Species 
                            Criteria </font></strong></div></td>
                    </tr>
                    <tr align="center" valign="top" bgcolor="#CCCCCC"> 
                      <td width="396"> <div align="left"> 
			<p align="left"><span class="style5"><strong><font face="Arial, Helvetica, sans-serif"><u>State</u></font></strong></span><br>
                            <br>
				<input name="state_AL" type="checkbox" id="state_AL" value="y" unchecked><label for="state_AL">AL</label>
                                <input name="state_AK" type="checkbox" id="state_AK" value="y" unchecked><label for="state_AK">AK</label>
                                <input name="state_AR" type="checkbox" id="state_AR" value="y" unchecked><label for="state_AR">AR</label>
                                <input name="state_AZ" type="checkbox" id="state_AZ" value="y" unchecked><label for="state_AZ">AZ</label>
                                <input name="state_CA" type="checkbox" id="state_CA" value="y" unchecked><label for="state_CA">CA</label>
                                <input name="state_CO" type="checkbox" id="state_CO" value="y" unchecked><label for="state_CO">CO</label>
                                <input name="state_CT" type="checkbox" id="state_CT" value="y" unchecked><label for="state_CT">CT</label>
                                <input name="state_DE" type="checkbox" id="state_DE" value="y" unchecked><label for="state_DE">DE</label>
                                <input name="state_DC" type="checkbox" id="state_DC" value="y" unchecked><label for="state_DC">DC</label><br>
                                <input name="state_FL" type="checkbox" id="state_FL" value="y" unchecked><label for="state_FL">FL</label>
                                <input name="state_GA" type="checkbox" id="state_GA" value="y" unchecked><label for="state_GA">GA</label>
		  	        <input name="state_GU" type="checkbox" id="state_GU" value="y" unchecked><label for="state_GU">GU</label>
  			        <input name="state_HI" type="checkbox" id="state_HI" value="y" unchecked><label for="state_HI">HI</label>
			        <input name="state_ID" type="checkbox" id="state_ID" value="y" unchecked><label for="state_ID">ID</label>
			        <input name="state_IL" type="checkbox" id="state_IL" value="y" unchecked><label for="state_IL">IL</label>
			        <input name="state_IN" type="checkbox" id="state_IN" value="y" unchecked><label for="state_IN">IN</label>
			        <input name="state_IA" type="checkbox" id="state_IA" value="y" unchecked><label for="state_IA">IA</label>
 			        <input name="state_KS" type="checkbox" id="state_KS" value="y" unchecked><label for="state_KS">KS</label>
			        <input name="state_KY" type="checkbox" id="state_KY" value="y" unchecked><label for="state_KY">KY</label><br>
			        <input name="state_LA" type="checkbox" id="state_LA" value="y" unchecked><label for="state_LA">LA</label>
			        <input name="state_ME" type="checkbox" id="state_ME" value="y" unchecked><label for="state_ME">ME</label>
			        <input name="state_MD" type="checkbox" id="state_MD" value="y" unchecked><label for="state_MD">MD</label>
			        <input name="state_MA" type="checkbox" id="state_MA" value="y" unchecked><label for="state_MA">MA</label>
			        <input name="state_MI" type="checkbox" id="state_MI" value="y" unchecked><label for="state_MI">MI</label>
				<input name="state_MS" type="checkbox" id="state_MS" value="y" unchecked><label for="state_MS">MS</label>
			        <input name="state_MN" type="checkbox" id="state_MN" value="y" unchecked><label for="state_MN">MN</label>
			        <input name="state_MO" type="checkbox" id="state_MO" value="y" unchecked><label for="state_MO">MO</label>
			        <input name="state_MT" type="checkbox" id="state_MT" value="y" unchecked><label for="state_MT">MT</label><br>
			        <input name="state_NE" type="checkbox" id="state_NE" value="y" unchecked><label for="state_NE">NE</label>
	  		        <input name="state_NV" type="checkbox" id="state_NV" value="y" unchecked><label for="state_NV">NV</label>
	  		      	<input name="state_NH" type="checkbox" id="state_NH" value="y" unchecked><label for="state_NH">NH</label>
			      	<input name="state_NJ" type="checkbox" id="state_NJ" value="y" unchecked><label for="state_NJ">NJ</label>
			      	<input name="state_NM" type="checkbox" id="state_NM" value="y" unchecked><label for="state_NM">NM</label>
				<input name="state_NY" type="checkbox" id="state_NY" value="y" unchecked><label for="state_NY">NY</label>
				<input name="state_NC" type="checkbox" id="state_NC" value="y" unchecked><label for="state_NC">NC</label>
				<input name="state_ND" type="checkbox" id="state_ND" value="y" unchecked><label for="state_ND">ND</label>
				<input name="state_OH" type="checkbox" id="state_OH" value="y" unchecked><label for="state_OH">OH</label><br>
				<input name="state_OK" type="checkbox" id="state_OK" value="y" unchecked><label for="state_OK">OK</label>
				<input name="state_OR" type="checkbox" id="state_OR" value="y" unchecked><label for="state_OR">OR</label>
				<input name="state_PA" type="checkbox" id="state_PA" value="y" unchecked><label for="state_PA">PA</label>
				<input name="state_PR" type="checkbox" id="state_PR" value="y" unchecked><label for="state_PR">PR</label>
				<input name="state_RI" type="checkbox" id="state_RI" value="y" unchecked><label for="state_RI">RI</label>
				<input name="state_SC" type="checkbox" id="state_SC" value="y" unchecked><label for="state_SC">SC</label>
				<input name="state_SD" type="checkbox" id="state_SD" value="y" unchecked><label for="state_SD">SD</label>
				<input name="state_TN" type="checkbox" id="state_TN" value="y" unchecked><label for="state_TN">TN</label>
				<input name="state_TX" type="checkbox" id="state_TX" value="y" unchecked><label for="state_TX">TX</label><br>
				<input name="state_UT" type="checkbox" id="state_UT" value="y" unchecked><label for="state_UT">UT</label>
				<input name="state_VT" type="checkbox" id="state_VT" value="y" unchecked><label for="state_VT">VT</label>
				<input name="state_VA" type="checkbox" id="state_VA" value="y" unchecked><label for="state_VA">VA</label>
				<input name="state_WA" type="checkbox" id="state_WA" value="y" unchecked><label for="state_WA">WA</label>
				<input name="state_WV" type="checkbox" id="state_WV" value="y" unchecked><label for="state_WV">WV</label>
				<input name="state_WI" type="checkbox" id="state_WI" value="y" unchecked><label for="state_WI">WI</label>
				<input name="state_WY" type="checkbox" id="state_WY" value="y" unchecked><label for="state_WY">WY</label>

<p align="left"><span class="style5"><strong><font face="Arial, Helvetica, sans-serif"><u>Canada Provinces/Territories</u></font></strong></span><br><br>
                                <input name="state_AB" type="checkbox" id="state_AB" value="y" unchecked><label for="state_AB">AB</label>
                                <input name="state_BC" type="checkbox" id="state_BC" value="y" unchecked><label for="state_BC">BC</label>
                                <input name="state_MB" type="checkbox" id="state_MB" value="y" unchecked><label for="state_MB">MB</label>
                                <input name="state_NB" type="checkbox" id="state_NB" value="y" unchecked><label for="state_NB">NB</label>
                                <input name="state_NF" type="checkbox" id="state_NF" value="y" unchecked><label for="state_NF">NF</label>
                                <input name="state_NT" type="checkbox" id="state_NT" value="y" unchecked><label for="state_NT">NT</label>
                                <input name="state_NS" type="checkbox" id="state_NS" value="y" unchecked><label for="state_NS">NS</label>
                                <input name="state_NU" type="checkbox" id="state_NU" value="y" unchecked><label for="state_NU">NU</label>
                                <input name="state_ON" type="checkbox" id="state_ON" value="y" unchecked><label for="state_ON">ON</label>
                                <input name="state_PE" type="checkbox" id="state_PE" value="y" unchecked><label for="state_PE">PE</label>
                                <input name="state_QC" type="checkbox" id="state_QC" value="y" unchecked><label for="state_QC">QC</label>
                                <input name="state_SK" type="checkbox" id="state_SK" value="y" unchecked><label for="state_SK">SK</label>
                                <input name="state_YT" type="checkbox" id="state_YT" value="y" unchecked><label for="state_YT">YT</label>

<p align="left"><span class="style5"><strong><font face="Arial, Helvetica, sans-serif"><u>Other</u></font></strong></span><br><br>
                                <input name="state_AA" type="checkbox" id="state_AA" value="y" unchecked><label for="state_AA">AA</label>
                                <input name="state_AS" type="checkbox" id="state_AS" value="y" unchecked><label for="state_AS">AS</label>
                                <input name="state_AE" type="checkbox" id="state_AE" value="y" unchecked><label for="state_AE">AE</label>
                                <input name="state_AP" type="checkbox" id="state_AP" value="y" unchecked><label for="state_AP">AP</label>
                                <input name="state_MH" type="checkbox" id="state_MH" value="y" unchecked><label for="state_MH">MH</label>
                                <input name="state_MX" type="checkbox" id="state_MX" value="y" unchecked><label for="state_MX">MX</label>
                                <input name="state_FM" type="checkbox" id="state_FM" value="y" unchecked><label for="state_FM">FM</label>
                                <input name="state_MP" type="checkbox" id="state_MP" value="y" unchecked><label for="state_MP">MP</label>
                                <input name="state_PW" type="checkbox" id="state_PW" value="y" unchecked><label for="state_PW">PW</label>
                                <input name="state_VI" type="checkbox" id="state_VI" value="y" unchecked><label for="state_VI">VI</label>
                                <input name="state_WS" type="checkbox" id="state_WS" value="y" unchecked><label for="state_WS">WS</label>
                            <br><br>
			  </p>
                          </div>
                        <div align="center">
                          <p align="left"><strong class="style5 style7"><u>Climate Regions</u></strong> <br><br>
                               <input name="clim_reg_OV" type="checkbox" id="clim_reg_OV" value="y" unchecked><b><label for="clim_reg_OV">Ohio Valley</label></b><br> 
                               <input name="clim_reg_UM" type="checkbox" id="clim_reg_UM" value="y" unchecked><b><label for="clim_reg_UM">Upper Midwest</label></b><br>
                               <input name="clim_reg_NE" type="checkbox" id="clim_reg_NE" value="y" unchecked><b><label for="clim_reg_NE">Northeast</label></b><br>
                               <input name="clim_reg_NW" type="checkbox" id="clim_reg_NW" value="y" unchecked><b><label for="clim_reg_NW">Northwest</label></b><br>
                               <input name="clim_reg_South" type="checkbox" id="clim_reg_South" value="y" unchecked><b><label for="clim_reg_South">South</label></b><br>
                               <input name="clim_reg_SE" type="checkbox" id="clim_reg_SE" value="y" unchecked><b><label for="clim_reg_SE">Southeast</label></b><br>
                               <input name="clim_reg_SW" type="checkbox" id="clim_reg_SW" value="y" unchecked><b><label for="clim_reg_SW">Southwest</label></b><br>
                               <input name="clim_reg_West" type="checkbox" id="clim_reg_West" value="y" unchecked><b><label for="clim_reg_West">West</label></b><br>
                               <input name="clim_reg_WNC" type="checkbox" id="clim_reg_WNC" value="y" unchecked><b><label for="clim_reg_WNC">No. Rockies</label></b><br>
                              <br>
                              <a href="images/NOAA_Climate_Regions.PNG">Map of NOAA Climate Regions</a><br>
                           <p align="left"><strong class="style5 style7"><u>World Regions</u></strong> <br><br>
			      <label for="world_reg">World Region</label><select name="world_reg" id="world_reg">
				<option label="None" value="None" selected><label for="world_reg">None</label></option>
                                <option value="North America"><label for="world_reg">North America</label></option>
                                <option value="CONUS"><label for="world_reg">U.S. & Canada</label></option>
                                <option value="South America"><label for="world_reg">South America</label></option>
                                <option value="Europe"><label for="world_reg">Europe</label></option>
                                <option value="Asia"><label for="world_reg">Asia</label></option>
                              </select>
                              <br>
                              <font face="Arial, Helvetica, sans-serif">Isolate an evaluation dataset by Continent</font><br>
			      <br><br>
                           <label for="O3_NA_Sites"><strong><u>Ozone Nonattainment Regions</u></strong> </label><br><br><select name="O3_NA_Sites[]" id="O3_NA_Sites" multiple="multiple">
           		   <option value="Atlanta">Atlanta</option>
	                   <option value="Baltimore">Baltimore</option>
	                   <option value="Chicago">Chicago</option>
	                   <option value="Cincinnati">Cincinnati</option>
            		   <option value="Cleveland">Cleveland</option>
			   <option value="Columbus">Columbus</option>
			   <option value="Dallas_FortWorth">Dallas-FortWorth</option>
                           <option value="Denver">Denver</option>
                           <option value="Detroit">Detroit</option>
                           <option value="Door_County">Door County</option>
                           <option value="El_Paso">El Paso</option>
			   <option value="Connecticut">Connecticut</option>
			   <option value="Houston">Houston</option>
                           <option value="Imperial_County">Imperial County</option>
                           <option value="Las_Vegas">Las Vegas</option>
                           <option value="LA_San_Bernardino">LA San Bernardino</option>
                           <option value="LA_South_Coast">LA South Coast</option>
			   <option value="Louisville">Louisville</option>
                           <option value="Milwaukee">Milwaukee</option>
                           <option value="NY_NJ_CT">NY, NJ, and CT</option>
                           <option value="Northern_Wasatch_Front_UT">N. Wasatch Front UT</option>
                           <option value="PA_NJ_MD_DE">PA,NJ,MD and DE</option>
                           <option value="Phoenix">Phoenix</option>
                           <option value="Riverside_County">Riverside County</option>
                           <option value="Sacramento">Sacramento</option>
                           <option value="San_Antonio">San Antonio</option>
                           <option value="San_Diego">San Diego</option>
                           <option value="San_Francisco">San Francisco</option>
                           <option value="SJV">San Joaquin Valley</option>
                           <option value="Southern_Wasatch_Front">S. Wasatch Front UT</option>
                           <option value="St_Louis">St. Louis</option>
                           <option value="Ventura_County">Ventura County</option>
                           <option value="DC_MD_VA">Washington DC, MD, and VA</option>
			  </select>
			  </p>
                          <p align="left"><font face="Arial, Helvetica, sans-serif">Use this option to select sites in specific ozone nonattainment areas. Use Ctrl to select multiple areas.</font></p>
                        </div></td>
                      <td width="242"> <div align="left">
                        <p>
                            <label for="stat_id">Station ID(s):</label><input name="stat_id" type="text" id="stat_id" <?php echo "value=\"".$_GET['stat_id']."\" ";?>>
                            <br>
                          <font face="Arial, Helvetica, sans-serif">
                          Enter a site ID above. Multiple sites can be entered by using either a space or comma seperator between site IDs. 
                        <p>
                           <label for="stat_id_file">Station ID File</label><input name="stat_id_file" type="text" id="stat_id_file" value="">
                          <br>

                          <span class="style5">To load a custom site file, enter the location and name of the file above.  The format should be the same as this <a href=./example_stat_file.txt>example</a>. You must also enter &quot;Load_File&quot; as the site name in the top box. 
                          <p align="left"><strong class="style5 style7"><u>Principal Component Analysis (PCA) Regions</u></strong> <br>
                              <br>
                               <input name="pca_NE" type="checkbox" id="pca_NE" value="y" unchecked><label for="pca_NE"><b>Northeast</b> (Ozone)</label><br>
                               <input name="pca_GL" type="checkbox" id="pca_GL" value="y" unchecked><label for="pca_GL"><b>Great Lakes</b> (Ozone)</label><br>
                               <input name="pca_ATL" type="checkbox" id="pca_ATL" value="y" unchecked><label for="pca_ATL"><b>Mid Atlantic</b> (Ozone)</label><br>
                               <input name="pca_SW" type="checkbox" id="pca_SW" value="y" unchecked><label for="pca_SW"><b>Southwest</b> (Ozone)</label><br>
                               <input name="pca_NE2" type="checkbox" id="pca_NE2" value="y" unchecked><label for="pca_NE2"><b>Northeast</b> (Aerosols)</label><br>
                               <input name="pca_GL2" type="checkbox" id="pca_GL2" value="y" unchecked><label for="pca_GL2"><b>Great Lakes</b> (Aerosols)</label><br>
                               <input name="pca_SE" type="checkbox" id="pca_SE" value="y" unchecked><label for="pca_SE"><b>Southeast</b> (Aerosols)</label><br>
                               <input name="pca_LMW" type="checkbox" id="pca_LMW" value="y" unchecked><label for="pca_LMW"><b>Lower Midwest</b> (Aerosols)</label><br>
                               <input name="pca_West" type="checkbox" id="pca_West" value="y" unchecked><label for="pca_West"><b>West</b> (Aerosols)</label><br>
                              <br>
                              <a href="images/Ozone_PCA_Regions.PNG">Map of ozone PCA Regions</a><br>
                              <a href="images/Aerosol_PCA_Regions.PNG">Map of aerosol PCA Regions</a></p>
                         </font><strong class="style5 style7"><u>Regional Planning Organization (RPO) Regions</u></strong> <br>
                            <br>
                              <input name="rpo_VISTAS" type="checkbox" id="rpo_VISTAS" value="y" unchecked><b><label for="rpo_VISTAS"><b>VISTAS</b></label><br>
                              <input name="rpo_CENRAP" type="checkbox" id="rpo_CENRAP" value="y" unchecked><b><label for="rpo_CENRAP"><b>CENRAP</b></label><br>
                              <input name="rpo_MANEVU" type="checkbox" id="rpo_MANEVU" value="y" unchecked><b><label for="rpo_MANEVU"><b>MANEVU</b></label><br>
                              <input name="rpo_LADCO" type="checkbox" id="rpo_LADCO" value="y" unchecked><b><label for="rpo_LADCO"><b>LADCO</b></label><br>
                              <input name="rpo_WRAP" type="checkbox" id="rpo_WRAP" value="y" unchecked><b><label for="rpo_WRAP"><b>WRAP</b></label><br>
                          </p>
                            <br>
                            <label for="discovaq">DISCOVERAQ Grid Windows</label><select name="discovaq" id="discovaq">
                              <option value="None" selected>None</option>
                              <option value="DISCOVERAQ_4km">4-km Window</option>
                              <option value="DISCOVERAQ_1km">1-km Window</option>
                              <option value="DISCOVERAQ_2km_SJV">2-km Window SJV</option>
                            </select>
                              <br><br><label for="equates">EQUATES Site Lists</label><select name="equates" id="equates">
                              <option value="None" selected>None</option>
                              <option value="EQUATES_Summer_Daily_O3">EQUATES Summer Daily O3</option>
                              <option value="EQUATES_Daily_O3">EQUATES Daily O3</option>
                              <option value="EQUATES_Daily_PM_AND_SPECS">EQUATES Daily PM & SPECS</option>
                              <option value="EQUATES_Daily_PM_ONLY">EQUATES Daily PM Only</option>
                              <option value="EQUATES_Daily_SPECS_ONLY">EQUATES Daily PM Species Only</option>
                              <option value="EQUATES_Daily_BENZ">EQUATES Daily Benzene</option>
                              <option value="EQUATES_Daily_ETHA">EQUATES Daily Ethane</option>
                              <option value="EQUATES_Daily_ETHY">EQUATES Daily Ethylene</option>
                              <option value="EQUATES_Daily_ISOP">EQUATES Daily Isoprene</option>
			      <option value="EQUATES_Hourly_O3">EQUATES Hourly O3</option>
                              <option value="EQUATES_Hourly_CO">EQUATES Hourly CO</option>
                              <option value="EQUATES_Hourly_SO2">EQUATES Hourly SO2</option>
                              <option value="EQUATES_Hourly_NO">EQUATES Hourly NO</option>
                              <option value="EQUATES_Hourly_NOX">EQUATES Hourly NOX</option>
                              <option value="EQUATES_Hourly_NOY">EQUATES Hourly NOY</option>
                              <option value="EQUATES_Hourly_PM25">EQUATES Hourly PM25</option>
                              <option value="EQUATES_Hourly_PM10">EQUATES Hourly PM10</option>
                              <option value="EQUATES_Hourly_TOLU">EQUATES Hourly Toluene</option>
                              <option value="EQUATES_Hourly_ETHA">EQUATES Hourly Ethane</option>
                              <option value="EQUATES_Hourly_ETHY">EQUATES Hourly Ethylene</option>
                              <option value="EQUATES_Hourly_ISOP">EQUATES Hourly Isoprene</option>
                            </select>
                        </div></td>
                    </tr>
                    <tr align="center" valign="top" bgcolor="#CCCCCC">
                      <td width="396" height="748"><div align="left">
                        <span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>AQ Observation Networks</strong></font></span><font face="Arial, Helvetica, sans-serif"><strong><br>
                        </strong>Choose air quality monitoring networks to use.                        </font></p>
                        </div>
                        <div align="left">
                          <p><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_improve" type="checkbox" id="inc_improve" value="y" unchecked>
			    <span class="style8">
                            <strong><label for=inc_improve>IMPROVE</strong> (e.g. SO<sub>4</sub>,NO<sub>3</sub>,PM<sub>2.5</sub>,EC,OC,TC)</label> <br>
                            <input name="inc_csn" type="checkbox" id="inc_csn" value="y">
                            <label for="inc_csn"><strong>CSN</strong> (e.g. SO<sub>4</sub>,NO<sub>3</sub>,NH<sub>4</sub>,PM<sub>2.5</sub>,EC,OC,TC)</label><br>
                            <input name="inc_castnet" type="checkbox" id="inc_castnet" value="y">
                            <label for="inc_castnet"><strong>CASTNet</strong> (e.g. SO<sub>4</sub>,NO<sub>3</sub>,NH<sub>4</sub>,SO<sub>2</sub>,HNO<sub>3</sub>,TNO<sub>3</sub>) </label><br>
                            <input name="inc_castnet_hr" type="checkbox" id="inc_castnet_hr" value="y">
                            <label for="inc_castnet_hr"><strong>CASTNet</strong> <strong>- Hourly</strong> (O<sub>3</sub>, RH, Precip, T, Solor Rad, WSPD, WDIR) </label><br>
                            <input name="inc_castnet_daily" type="checkbox" id="inc_castnet_daily" value="y">
                            <label for="inc_castnet_daily"><strong>CASTNet Daily </strong>(1-hr and 8-hr max O<sub>3</sub>) </label><br>
                            <input name="inc_castnet_drydep" type="checkbox" id="inc_castnet_drydep" value="y">
                            <label for="inc_castnet_drydep"><strong>CASTNet Dry Dep </strong>(SO<sub>4</sub>,NO<sub>3</sub>,NH<sub>4</sub>,HNO<sub>3</sub>,TNO<sub>3</sub>,O<sub>3</sub>,SO<sub>2</sub>) </label><br>
                            <input name="inc_capmon" type="checkbox" id="inc_capmon" value="y">
                            <label for="inc_capmon"><strong>CAPMoN </strong>(SO<sub>4</sub>,NO<sub>3</sub>,NH<sub>4</sub>,HNO<sub>3</sub>,TNO<sub>3</sub>,SO<sub>2</sub>)</label><br>
                            <input name="inc_naps" type="checkbox" id="inc_naps" value="y">
                            <label for="inc_naps"><strong>NAPS - Hourly</strong> (O<sub>3</sub>,NO,NO<sub>2</sub>,NO<sub>X</sub>,SO<sub>2</sub>,PM<sub>2.5</sub>,PM<sub>10</sub>)</label><br>
                            <input name="inc_naps_daily_o3" type="checkbox" id="inc_naps_daily_o3" value="y">
                            <label for="inc_naps_daily_o3"><strong>NAPS - Daily O<sub>3</sub> </strong> (1-hr and 8-hr max O<sub>3</sub>)</label><br>
                            <input name="inc_nadp" type="checkbox" id="inc_nadp" value="y">
                            <label for="inc_nadp"><strong>NADP </strong> (e.g. SO<sub>4</sub>,NO<sub>3</sub>,NH<sub>4</sub>,Precip, Cl Ion)</label><br>
                            <input name="inc_amon" type="checkbox" id="inc_amon" value="y">
                            <label for="inc_amon"><strong>AMON</strong> (NH<sub>3</sub>)</label><br>
                            <font face="Arial, Helvetica, sans-serif">
                            <input name="inc_airmon_dep" type="checkbox" id="inc_airmon_dep" value="y">
                            <label for="inc_airmon_dep"><strong>AIRMON (Deposition)</strong> (SO<sub>4</sub>,NO<sub>3</sub>,NH<sub>4</sub>,Precip)</font></label><br>
                            </span><span class="style8">
                            <input name="inc_aqs_hourly" type="checkbox" id="inc_aqs_hourly" value="y">
                            <label for="inc_aqs_hourly"><strong>AQS - Hourly</strong> (e.g. NO,NO<sub>2</sub>,NO<sub>x</sub>,NO<sub>y</sub>,SO<sub>2</sub>,CO,PM<sub>2.5</sub>,O<sub>3</sub>,etc.)</label><br>
                            <input name="inc_aqs_daily_o3" type="checkbox" id="inc_aqs_daily_o3" value="y">
                            <label for="inc_aqs_daily_o3"><strong>AQS - Daily O<sub>3</sub> </strong> (1-hr and 8-hr max O<sub>3</sub>)</label><br>
                            <input name="inc_aqs_daily" type="checkbox" id="inc_aqs_daily" value="y">
                            <label for="inc_aqs_daily"><strong>AQS - Daily</strong> (e.g. PM<sub>2.5</sub>,PM<sub>10</sub>, and PAMS species) </label><br>
                            <input name="inc_aqs_daily_voc" type="checkbox" id="inc_aqs_daily_voc" value="y">
                            <label for="inc_aqs_daily_voc"><strong>AQS - Daily VOCs </strong> (select PAMS species) </label><br>
			    <input name="inc_aqs_daily_oaqps" type="checkbox" id="inc_aqs_daily_oaqps" value="y">
                            <label for="inc_aqs_daily_oaqps"><strong>AQS - Daily OAQPS O<sub>3</sub> </strong> (Various 8-hr max O<sub>3</sub>)</label><br>
                            <input name="inc_aqs_daily_pm" type="checkbox" id="inc_aqs_daily_pm" value="y">
                            <label for="inc_aqs_daily_pm"><strong>AQS - Daily (Old name) </strong> PM<sub>2.5</sub>,PM<sub>10</sub>, and PAMS species network </label><br>
			    <input name="inc_search" type="checkbox" id="inc_search" value="y">
                            <label for="inc_search"><strong>SEARCH Hourly</strong> (e.g. O<sub>3</sub>,CO,SO<sub>2</sub>,NO,HNO<sub>3</sub>,etc.)</label><br>
                            <input name="inc_search_daily" type="checkbox" id="inc_search_daily" value="y">
                            <label for="inc_search_daily"><strong>SEARCH Daily </strong> (Fine and Coarse Mode Species)</label><br>
                            <input name="inc_aeronet" type="checkbox" id="inc_aeronet" value="y">
                            <label for="inc_aeronet"><strong>AERONET </strong> (AOD: 340, 380, 440, 500, 675, 870, 1020, 1640)</label><br>
                            <input name="inc_fluxnet" type="checkbox" id="inc_fluxnet" value="y">
                            <label for="inc_fluxnet"><strong>FluxNet </strong> (Soil/Flux variables)</label><br>
                            <input name="inc_noaa_esrl_o3" type="checkbox" id="inc_noaa_esrl_o3" value="y">
                            <label for="inc_noaa_esrl_o3"><strong>NOAA ESRL </strong>(Hourly O<sub>3</sub>)</label><br>
                            <input name="inc_toar" type="checkbox" id="inc_toar" value="y">
                            <label for="inc_toar"><strong>TOAR </strong>(Daily O<sub>3</sub> values)</label><br>
                            <input name="inc_toar2_hourly" type="checkbox" id="inc_toar2_hourly" value="y">
                            <label for="inc_toar2_hourly"><strong>TOAR2 Hourly </strong>(O<sub>3</sub>,CO,SO<sub>2</sub>,NO,NO<sub>2</sub>,NO<sub>X</sub>,PM<sub>2.5</sub>)</label><br>
                            <input name="inc_toar2_daily_o3" type="checkbox" id="inc_toar2_daily_o3" value="y">
                            <label for="inc_toar2_daily_o3"><strong>TOAR2 Daily O<sub>3</sub> </strong>(e.g., 1-hr max, MDA8)</label><br>
                            <input name="inc_toar2_daily" type="checkbox" id="inc_toar2_daily" value="y">
                            <label for="inc_toar2_daily"><strong>TOAR2 Daily Average</strong> (O3,CO,SO<sub>2</sub>,NO,NO<sub>2</sub>,NO<sub>X</sub>,PM<sub>2.5</sub>)</label><br>
			    <input name="inc_purpleair_hourly" type="checkbox" id="inc_purpleair_hourly" value="y">
                            <label for="inc_purpleair_hourly"><strong>PurpleAir Hourly </strong>(PM<sub>2.5</sub>)</label><br>
                            <input name="inc_purpleair_daily" type="checkbox" id="inc_purpleair_daily" value="y">
                            <label for="inc_purpleair_daily"><strong>PurpleAir Daily </strong>(Daily PM<sub>2.5</sub>)</label><br>
			    <input name="inc_airnow_hourly" type="checkbox" id="inc_airnow_hourly" value="y">
                            <label for="inc_airnow_hourly"><strong>AirNow Hourly </strong>(O<sub>3</sub>, PM<sub>2.5</sub>)</label><br>
                            <input name="inc_airnow_daily_o3" type="checkbox" id="inc_airnow_daily_o3" value="y">
                            <label for="inc_airnow_daily_o3"><strong>AirNow Daily O3 </strong>(e.g., 1-hr max, MDA8 O<sub>3</sub>)</label><br>
			    <input name="inc_nyccas" type="checkbox" id="inc_nyccas" value="y">
                            <label for="inc_nyccas"><strong>NYCCAS </strong>(Two-week PM<sub>2.5</sub>)</label><br>
			    <input name="inc_mdn" type="checkbox" id="inc_mdn" value="y">
                            <label for="inc_mdn"><strong>MDN</strong> (Hg) </label><br>
                            <font face="Arial, Helvetica, sans-serif">
                            <input name="inc_amtic" type="checkbox" id="inc_amtic" value="y">
                            <label for="inc_amtic"><strong>AMTIC (HAPs)</strong></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_mod" type="checkbox" id="inc_mod" value="y">
                            <label for="inc_mod"><strong>Model_Model</strong> </font></font> </font></font></span></label></p>
                            <p><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><strong>European Networks<br>
                            </strong><font face="Arial, Helvetica, sans-serif">
			    <input name="inc_admn" type="checkbox" id="inc_admn" value="y">
			    <span class="style8">
                            <label for="inc_admn"><strong>ADMN</strong></span> </font></font></font><span class="style8">(SO<sub>4</sub>,NO<sub>3</sub>,NH<sub>4</sub>,Precip, Na Ion, Cl Ion)</span></font></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_aganet" type="checkbox" id="inc_aganet" value="y">
                            <span class="style8">
                            <label for="inc_aganet"><strong>AGANET</strong></span></font></font></font></font> <span class="style8"><font face="Arial, Helvetica, sans-serif">(HCl, NO<sub>2</sub>, NO<sub>Y</sub>, SO<sub>X</sub>, HNO<sub>3</sub>, SO<sub>2</sub>, Cl, Na)</font></span></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_airbase_hourly" type="checkbox" id="inc_airbase_hourly" value="y">
                            <span class="style8">
                            <label for="inc_airbase_hourly"><strong>AirBase_Hourly</strong></span></font></font></font></font> <span class="style8"><font face="Arial, Helvetica, sans-serif">(NO, NO<sub>2</sub>, NO<sub>X</sub>, SO<sub>2</sub>, CO, PM<sub>2.5</sub>, PM<sub>10</sub>, O<sub>3</sub>)</font></span></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_airbase_daily" type="checkbox" id="inc_airbase_daily" value="y">
                            <span class="style8">
                            <label for="inc_airbase_daily"><strong>AirBase_Daily</strong></label></span>
                            </font></font></font></font><span class="style8"><font face="Arial, Helvetica, sans-serif">(NO, NO<sub>2</sub>, NO<sub>X</sub>, SO<sub>2</sub>, CO, PM<sub>2.5</sub>, PM<sub>10</sub>, O<sub>3</sub>)</font></span></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_aurn_hourly" type="checkbox" id="inc_aurn_hourly" value="y">
                            <span class="style8">
                            <label for="inc_aurn_hourly"><strong>AURN_Hourly</strong></span></font></font></font></font> <span class="style8"><font face="Arial, Helvetica, sans-serif">(NO, NO<sub>2</sub>, NO<sub>X</sub>, SO<sub>2</sub>, CO, PM<sub>2.5</sub>, PM<sub>10</sub>, O<sub>3</sub>)</font></span></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_aurn_daily" type="checkbox" id="inc_aurn_daily" value="y">
                            <span class="style8">
                            <label for="inc_aurn_daily"><strong>AURN_Daily</strong></span> </font></font></font></font><span class="style8"><font face="Arial, Helvetica, sans-serif">(NO, NO<sub>2</sub>, NO<sub>X</sub>, SO<sub>2</sub>, CO, PM<sub>2.5</sub>, PM<sub>10</sub>, O<sub>3</sub>)</font></span></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_emep_hourly" type="checkbox" id="inc_emep_hourly" value="y">
                            <span class="style8">
                            <label for="inc_emep_hourly"><strong>EMEP - Hourly</strong></span></font></font></font></font> <span class="style8"><font face="Arial, Helvetica, sans-serif">(NO, NO<sub>2</sub>, NO<sub>X</sub>, SO<sub>2</sub>, CO, PM<sub>2.5</sub>, PM<sub>10</sub>, O<sub>3</sub>)</font></span></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
                            <input name="inc_emep_daily" type="checkbox" id="inc_emep_daily" value="y">
                            <span class="style8">
                            <label for="inc_emep_daily"><strong>EMEP - Daily</strong></span> </font></font></font></font><span class="style8"><font face="Arial, Helvetica, sans-serif">(SO<sub>4</sub>, NO<sub>3</sub>, NH4<sub>4</sub>, trace metals, PM<sub>2.5</sub>, PM<sub>10</sub>, O<sub>3</sub>)</font></span></label><br>
                            <input name="inc_emep_daily_o3" type="checkbox" id="inc_emep_daily_o3" value="y">
			    <span class="style8">
                            <label for="inc_emep_daily_o3"><strong>EMEP - Daily O<sub>3</sub></strong></span> </font></font></font></font><span class="style8"><font face="Arial, Helvetica, sans-serif"> (1-rh and 8-hr max O<sub>3</sub>)</font></span></label><br>
                            <input name="inc_emep_dep" type="checkbox" id="inc_emep_dep" value="y">
                            <span class="style8">
                            <label for="inc_emep_dep"><strong>EMEP - Dep</strong></span> </font></font></font></font><span class="style8"><font face="Arial, Helvetica, sans-serif">(SO<sub>4</sub>, NO<sub>3</sub>, NH4<sub>4</sub>, Cl, Na, trace metals)</font></span></label><br>
                            <p><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><strong>Campaigns<br>
                            </strong><font face="Arial, Helvetica, sans-serif">
			    <input name="inc_calnex" type="checkbox" id="inc_calnex" value="y">
			    <span class="style6"><label for="inc_calnex">CALNEX</span> </font></font></font><span class="style8"></span></font></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
			    <input name="inc_soas" type="checkbox" id="inc_soas" value="y">
			    <span class="style6"><label for="inc_soas">SOAS</span> </font></font></font><span class="style8"></span></font></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">
			    <input name="inc_special" type="checkbox" id="inc_special" value="y">
			    <span class="style6"><label for="inc_special">Special</span> </font></font></font><span class="style8"></span></font></label><br>
                            <font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">

                        </div></td>
                      <td width="242"><div align="left">
                        <div align="left">
                          <span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Species to Plot</strong></font></span><font face="Arial, Helvetica, sans-serif"><strong><br>
                          </strong>

            </p>
            <p align="left"><?php
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//      Connect to Database via user supplied login and pass
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
         include ( 'amet-www-config.php');
                //$dbase="test_avgAQ";
//                $link = mysql_connect($mysql_server,$root_login,$root_pass)or die("Connect Error: ".mysql_error());
//                if (! $link)
//                die("Couldn't connect to MySQL");
//        mysql_select_db($database_id , $link)
//                or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Populate species list using the column names from the select database/project_id 
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//                $result=mysql_query("SELECT COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$database_id' and TABLE_NAME='prmject_units' order by COLUMN_NAME")or die("There was an error accessing the database ".mysql_error());
                  $search_string = array(".","-");
                  $replace_string = array("_","_");
                  $project_id_fixed = str_replace($search_string,$replace_string,$project_id);
                  $result = $link->query("SELECT COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='$database_id' and TABLE_NAME='$project_id_fixed' and COLUMN_NAME like '%_ob'order by COLUMN_NAME")or die("There was an error accessing the database ".mysql_error());
                $i=0;
//                mysql_fetch_array($result);
                echo "<label for=\"species\"> Choose a Species. Use Ctrl to select/deselect multiple species. </label><br><select name=\"species_in[]\" id=\"species_in\" multiple=\"multiple\" size=\"15\"> ";
                echo " <option value=\"\" selected></option> ";
                if ($row = mysqli_fetch_array($result)) {
                   do {
                        $pid=$row["COLUMN_NAME"];
                        $proj_str[$i]=$row["COLUMN_NAME"];
                        $species_name[$i]=str_replace("_ob","",$proj_str[$i]);    
//                 echo " <option value=\"$pid\"> $proj_str[$i]  </option> ";
                   echo " <option value=\"$species_name[$i]\"> $species_name[$i]  </option> ";

                   }
                   while($row = mysqli_fetch_array($result));
                }
                else{
                       die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
                $link->close();
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Monitor / Network and Species Criteria - State, Site ID, RPO Regions, AQ Networks, Species to Plot
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
?>
                            <p></p>
                            <a href=./AMET_Species_Name_Mapping.txt>AMET Species Name Mapping</a><br>
                            <p></p>
                            <font face="Arial, Helvetica, sans-serif">
                              <label for="custom_species">Custom Species Specification</label><input name="custom_species" type="text" id="custom_species" size="35" maxlength="20000">
                              </font><br>
                            <font face="Arial, Helvetica, sans-serif">                              </font>
                            <span class="style2">Enter a species (or multiple species) manually. Acceptable format is comma separated list of species (e.g. SO4,NO3,NH4). Names must match the names used in the AMET database. A mapping of the AMET database names can be found above. You can also select multiple species above using Ctrl.</span>
                          </p>
                            <font face="Arial, Helvetica, sans-serif">
                              <label for="custom_species2">Custom Species MySQL String</label><input name="custom_species2" type="text" id="custom_species2" size="35" maxlength="20000">
                              </font><br>
                            <font face="Arial, Helvetica, sans-serif">                              </font>
                            <span class="style2">Enter a species query. Unlike above, this must be a properly formatted MySQL query string. This option is intended for advanced users. Example of a custom query is (2*d.Ca_ob+d.K_ob+2*d.Mg_ob+d.NA_ob) as NVC_ob, (2*d.Ca_mod+d.K_mod+2*d.Mg_mod+d.Na_mod) as NVC_mod.</span>
                            <font face="Arial, Helvetica, sans-serif">
                            <label for="custom_species_name">Custom Species Name</label><input name="custom_species_name" type="text" id="custom_species_name" size="35" maxlength="20000">
                              </font><br>
                            <font face="Arial, Helvetica, sans-serif">                              </font>
                            <span class="style2">Enter a name for your custom species (e.g., NVC).</span>
                            <font face="Arial, Helvetica, sans-serif">
                            <label for="custom_units">Custom Species Units</label><input name="custom_units" type="text" id="custom_units" size="35" maxlength="20000">
                              </font><br>
                            <font face="Arial, Helvetica, sans-serif">                              </font>
                            <span class="style2">Enter the units for your custom species (e.g., ugm3).</span>
                          </p>
                        </div>
                        </div></td>
                    </tr>
                  </table></td>
              </tr>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<!-- End Monitor / Network and Species Criteria Section -->
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<!-- Date and Time Criteria
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<td>&nbsp;</td>
<tr> <br>
<td><table width="800" border="1" align="left" cellpadding="10" cellspacing="5">
<tr align="center" valign="middle"> 
<td height="47" colspan="2"> <div align="center" class="style4 style3"><strong>  <font face="Arial, Helvetica, sans-serif">Date and Time Criteria</font></strong></div></td>
</tr>
<tr align="center" valign="middle" bgcolor="#CCCCCC"> 
<td colspan="2"> <div align="center"> 
<table width="100%" border="1" bordercolor="#CCCCCC">
<tr align="center"> 
<td colspan="3"><font color="#666666" face="Arial, Helvetica, sans-serif" class="style5"><strong>Start Date</strong></font></td>
<td colspan="3"><font color="#666666" face="Arial, Helvetica, sans-serif" class="style5"><strong>End Date</strong></font></td>
</tr>
<tr align="center" valign="middle"> 
<td><strong><font face="Arial, Helvetica, sans-serif"> 

<?php
	$dm1=$a8;		// set start date
	$dm2=$a9;		// set end date
	$miny=$dm1[6].$dm1[7].$dm1[8].$dm1[9];
	$maxy=$dm2[6].$dm2[7].$dm2[8].$dm2[9];
	echo "<label for=\"ys\">Year</label><br><select name=\"ys\" id=\"ys\" >";
	echo "	<option SELECTED></option>";
    $minyear=2000;
	$year=2025;	
	$y=1;$select="";
	while($y>0){
	   if($year == $miny) {
	      $select="SELECTED"; 
	   }
	   if($year == $minyear){
	      $y=-1;
	   }  
	   echo "  <option value=\"".$year."\" $select>".$year."</option>";
	   $select="";
	   $year=$year-1;
	}
 	echo "               </select>											";
?>
<td><strong><font face="Arial, Helvetica, sans-serif">
<?php
	$dm1=$a8;		// set start date
	$dm2=$a9;		// set end date
	$minm=$dm1[0].$dm1[1];
	$maxm=$dm2[0].$dm2[1];  
	$miny=$dm1[6].$dm1[7].$dm1[8].$dm1[9];
	$maxy=$dm2[6].$dm2[7].$dm2[8].$dm2[9]; 
	$num_years=$maxy-$miny;
	if ($num_years > 0) {
	   $minm=sprintf("%02d",1);
           $maxm=sprintf("%02d",12);
	}
	//list($yy1,$yy2,$yy3,$yy4,$mm1,$mm2,$dd1,$dd2) = split('[]', $_POST['max_date']);
	echo "<label for=\"ms\">Month</label><br><select name=\"ms\" id=\"ms\" >";
	echo "	<option SELECTED></option>";
	$month=$minm;
	$m=1;$select="SELECTED";
	while($m>0){
	if($month == $maxm){$m=-1;} 
	    echo "<option value=\"".$month."\" $select>".$month."</option>";
	//	echo "  <option value=\"".$month."\">".$month."</option>";
		$select="";
		//if ($month < 10) {
		$month=sprintf("%02d",$month+1);
		if ($month == 13){$month=sprintf("%02d",1);}
		//}
	}
 	echo "               </select>											";
?>
<td><strong><font face="Arial, Helvetica, sans-serif">
<label for="ds">Day</label><br><select name="ds" id="ds">
	<option value="1" selected>01</option>
	<option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
</select>
<td><strong><font face="Arial, Helvetica, sans-serif">
<?php
	//$y1=2;$y2=0;$y3=0;$y4=4;
	//$dm1=$_GET['min_date'];
	//$dm2=$_GET['max_date'];
	$dm1=$a8;		// set start date
	$dm2=$a9;		// set end date
	$miny=$dm1[6].$dm1[7].$dm1[8].$dm1[9];
	$maxy=$dm2[6].$dm2[7].$dm2[8].$dm2[9];
	//$miny=2000;
	echo "<label for=\"ye\">Year</label><br><select name=\"ye\" id=\"ye\" >";
	echo "	<option SELECTED></option>";
	$miny=2000;
	$year=2025;
	$y=1;$select="";
	while($y>0){
		if($year == $miny){
			$y=-1;
		}
		if ($year == $maxy) {
		   $select="SELECTED";
		} 
		echo "                 <option value=\"".$year."\" $select>".$year."</option>			";
		$select="";
		$year=$year-1;
	 }
	 echo "               </select>											";
?>
<td><strong><font face="Arial, Helvetica, sans-serif"> 

<?php
	// $dm1=$_GET['min_date'];
	// $dm2=$_GET['max_date'];
	$dm1=$a8;		// set start date
	$dm2=$a9;		// set end date
	$minm=$dm1[0].$dm1[1];
	$maxm=$dm2[0].$dm2[1];
	$miny=$dm1[6].$dm1[7].$dm1[8].$dm1[9];
	$maxy=$dm2[6].$dm2[7].$dm2[8].$dm2[9]; 
	$num_years=$maxy-$miny;
	if ($num_years > 0) {
	   $minm=sprintf("%02d",1);
           $maxm=sprintf("%02d",12);
	}
	//list($yy1,$yy2,$yy3,$yy4,$mm1,$mm2,$dd1,$dd2) = split('[]', $_POST['max_date']);
	echo "<label for=\"me\">Month</label><br><select name=\"me\" id=\"me\" >";
	echo "	<option SELECTED></option>";
	$month=$minm;
	$m=1;$select="";
	while($m>0){
	if($month == $maxm){
		$m=-1;
		$select="SELECTED";
	} 
	    echo "<option value=\"".$month."\" $select>".$month."</option>";
	//	echo "  <option value=\"".$month."\">".$month."</option>";
		$select="";
		//if ($month < 10) {
		$month=sprintf("%02d",$month+1);
		if ($month == 13){$month=sprintf("%02d",1);}
		//}
	}
 	echo "               </select>											";
?>
<td><strong><font face="Arial, Helvetica, sans-serif"> 

<label for="de">Day</label><br><select name="de" id="de">
	<option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31" selected>31</option>
</select>

</tr>
</table>
</div></td>
</tr>
<tr align="center" valign="top" bgcolor="#CCCCCC">
  <td>    <p align="left" class="style5"><span class="style5 style7"><font face="Arial, Helvetica, sans-serif"><strong>Set Hour Range </strong></font></span></p>
    <div align="left"><span class="style5 style7"><strong><font face="Arial, Helvetica, sans-serif"><span class="style10"></span>              
      <label for="start_hour">Start Hour </label><select name="start_hour" id="start_hour">
                <option ></option>
                <option value="00" selected>12AM</option>
                <option value="01">1AM</option>
                <option value="02">2AM</option>
                <option value="03">3AM</option>
                <option value="04">4AM</option>
                <option value="05">5AM</option>
                <option value="06">6AM</option>
                <option value="07">7AM</option>
                <option value="08">8AM</option>
                <option value="09">9AM</option>
                <option value="10">10AM</option>
                <option value="11">11AM</option>
                <option value="12">12PM</option>
                <option value="13">1PM</option>
                <option value="14">2PM</option>
                <option value="15">3PM</option>
                <option value="16">4PM</option>
                <option value="17">5PM</option>
                <option value="18">6PM</option>
                <option value="19">7PM</option>
                <option value="20">8PM</option>
                <option value="21">9PM</option>
                <option value="22">10PM</option>
                <option value="23">11PM</option>
              </select>

&nbsp;&nbsp;&nbsp;<span class="style10"></span>
  <label for="end_hour">End Hour </label><select name="end_hour" id="end_hour">
        <option ></option>
                 <option value="00">12AM</option>
                <option value="01">1AM</option>
                <option value="02">2AM</option>
                <option value="03">3AM</option>
                <option value="04">4AM</option>
                <option value="05">5AM</option>
                <option value="06">6AM</option>
                <option value="07">7AM</option>
                <option value="08">8AM</option>
                <option value="09">9AM</option>
                <option value="10">10AM</option>
                <option value="11">11AM</option>
                <option value="12">12PM</option>
                <option value="13">1PM</option>
                <option value="14">2PM</option>
                <option value="15">3PM</option>
                <option value="16">4PM</option>
                <option value="17">5PM</option>
                <option value="18">6PM</option>
                <option value="19">7PM</option>
                <option value="20">8PM</option>
                <option value="21">9PM</option>
                <option value="22">10PM</option>
                <option value="23" selected>11PM</option>
  </select>
  <br>
      </font></strong></span>    </div>
    <div align="left"><font face="Arial, Helvetica, sans-serif">Use this option to isolate a range of hours to include in the analysis. Hours are in LST. The default is to include all hours of the day in the analysis. </font></div>

  <span class="style5 style7"><strong><font face="Arial, Helvetica, sans-serif">    </font></strong></span></td>
  <td><div align="left">
  <label for="POCode"><strong>Select Parameter Occurence (PO) Code(s)</strong> </label><br><br><select name="POCode[]" id="POCode" multiple="multiple">
            <option value="All" selected>All</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
  </select>
  <br>
  <font face="Arial, Helvetica, sans-serif">Use this option
  to isolate the data by a specific parameter occurrence code. Use CTRL to select multiple POCs. Most observations use a parameter occurrence code of 1.</font></p>
  </div>    </td>
</tr>

 <tr align="center" valign="top" bgcolor="#CCCCCC"> 
 <span class="style5 style7"><strong><font face="Arial, Helvetica, sans-serif">    </font></strong></span></td>
  <td width="281"><div align="left">
  <label for="Filter"><strong>Filter Based PM Obs Only </strong><input name="Filter" type="checkbox" id="Filter" value="y" unchecked><br>
  <label for="Non_Filter"><strong>Non-Filter Based PM Obs Only </strong><input name="Non_Filter" type="checkbox" id="Non_Filter" value="y" unchecked><br><br>
  <label for="Method_Code"><strong>Select Individual PM Method Code(s)</strong> </label><br><br><select name="Method_Code[]" id="Method_Code" multiple="multiple">
            <option value="All" selected>All</option>
            <option value="142">142</option>
            <option value="143">143</option>
            <option value="145">145</option>
            <option value="155">155</option>
            <option value="170">170</option>
            <option value="178">178</option>
            <option value="180">180</option>
            <option value="181">181</option>
            <option value="182">182</option>
            <option value="183">183</option>
            <option value="209">209</option>
	    <option value="236">236</option>
	    <option value="238">236</option>
	    <option value="236">702</option>
            <option value="236">731</option>
            <option value="236">771</option>
  </select>
  <br><br>
  <font face="Arial, Helvetica, sans-serif">Use this option to isolate the data by a specific PM method code. Use CTRL to select multiple method codes.</font></p>
  <p></p><a href=./Method_codes_names_classification.xlsx>PM Method_Code_Descriptions</a><br><p></p>
  </div>    </td>

 <span class="style5 style7"><strong><font face="Arial, Helvetica, sans-serif">    </font></strong></span></td>
  <td><div align="left">
  <label for="POCode"><strong>Select Day of Week</strong> </label><br><br><select name="DoW[]" id="DoW" multiple="multiple">
            <option value="All" selected>All</option>
            <option value="1">Sunday</option>
            <option value="2">Monday</option>
            <option value="3">Tuesday</option>
            <option value="4">Wednesday</option>
            <option value="5">Thursday</option>
            <option value="6">Friday</option>
            <option value="7">Saturday</option>
  </select>
  <br><br>
  <font face="Arial, Helvetica, sans-serif">Use this option to isolate the data by a specific day of the week. Use CTRL to select multiple days.</font></p>
  </div>    </td>
</tr>


<tr align="center" valign="top" bgcolor="#CCCCCC"> 
<td width="281"> <div align="left">
</div>
<div align="left"><font face="Arial, Helvetica, sans-serif"> 
<label for="season"><strong>Seasonal Analysis</strong> </label><br><br><select name="season" id="season">
	<option SELECTED></option>
        <option value="winter">Winter (Dec,Jan,Feb)</option>
        <option value="spring">Spring (Mar,Apr,May)</option>
        <option value="summer">Summer (Jun,Jul,Aug)</option>
        <option value="fall">Autumn (Sep,Oct,Nov)</option>
</select>
<br>
Use this option to isolate evaluation data by a particular 
season of the year.  When using this option, set the dates above
to cover the entire season or year.  <em>All months in the season chosen
must fall within the dates set above.</em></font></div></td>
<td width="50%"> <div align="left">
<label for="ind_month"><strong>Choose Month</strong><br><br><select name="ind_month" id="ind_month">
	    <option ></option>
            <option value="01">Jan</option>
            <option value="02">Feb</option>
            <option value="03">Mar</option>
     	    <option value="04">Apr</option>
	    <option value="05">May</option>
	    <option value="06">Jun</option>
	    <option value="07">Jul</option>
	    <option value="08">Aug</option>
	    <option value="09">Sep</option>
	    <option value="10">Oct</option>
	    <option value="11">Nov</option>
	    <option value="12">Dec</option>
  </select>
  <br>
  <font face="Arial, Helvetica, sans-serif">Use this option 
  to isolate a data set by an individual month of the year. When using this option, set the dates above to cover at least the entire month. <em>It is preferrable to set the date range above to the whole year and then select an individual month from the list above.</em></font></p>
</div></td>
</tr>
<tr align="center" valign="top" bgcolor="#CCCCCC"> 
<td width="281" height="213"> <div align="left"> 
<font face="Arial, Helvetica, sans-serif">
<label for="remove_negatives"><strong>Remove Negatives Values</strong><br><br><select name="remove_negatives" id="remove_negatives">
<option value="y" selected>yes</option>
<option value="n">no</option>
</select>
<br>
Select "yes" to remove negative values from the analysis. All values less than zero are removed from the analysis. Obviously this can be a problem when plotting species with acceptable negative values (e.g. temperature).</font><br>
<p><font face="Arial, Helvetica, sans-serif">
<label for="rm_negs_query"><strong>Remove Negatives During Database Query </strong><input name="rm_negs_query" type="checkbox" id="rm_negs_query" value="y" unchecked><br>
Check this box to remove negative values during the database query phase (as opposed to after the query is complete). Use this option if you are doing a very large query, as it can avoid issues that can occur with very large queries. If envoked, the coverage limit will be based on the total number of HOURS in the specified time range, so currently only envoke for hourly data.</font></p>
<p><font face="Arial, Helvetica, sans-serif">
<label for="agg_data"><strong>Aggregate Data </strong><input name="agg_data" type="checkbox" id="agg_data" value="y" unchecked><br>
Check this box to aggregate duplicate observations. This typically occurs when multiple measurements are reported for the same site and time period using different parameter occurance codes (POCs). Checking this box will average multiple observations into a single value. If unchecked, observations will not be averaged and each observation will be treated as entirely unique.  </font></p>
<p><font face="Arial, Helvetica, sans-serif">
<label for="agg_data_gc"><strong>Aggreate Data by Grid Cell </strong><input name="agg_data_gc" type="checkbox" id="agg_data_gc" value="y" unchecked><br>
Check this box to aggregate multiple sites with the same grid cell. Checking this box will average all the sites/observations with a single grid cell into a single value with a new site name that is the concattenated row/col values. Note that the grid cell averaging process can result in a dillution of non-missing obs with more missing obs, and therefore you may need to reduce the coverage criteria to a lower value to avoid sites not plotting that should be plotted.  </font></p>
<td width="50%"> <div align="left">
<div align="left">
    <label for="data_averaging"><strong>Temporal Averaging</strong><br><br><select name="data_averaging" id="data_averaging">
      <option value="n" selected>None</option>
      <option value="h">Hour of Day Average</option>
      <option value="d">Daily Average</option>
      <option value="m">Monthly Average</option>
      <option value="ym">Year/Month Average</option>
      <option value="s">Seasonal Average</option>
      <option value="a">Annual Average</option>
      <option value="e">Entire Period Average</option>
      <option value="dow">Day of Week</option>
      <option value="t10">Site top 10</option>
    </select>
    <br>
        The default option is to use all available observations.  Alternatively, monthly average values can be used for the analysis. Currently, this option really only applies to the various scatterplots that can be generated. Most of the programs that can be run use all the available pairs, and some programs require hourly data to be used.</font>            </p>
  
 <label for="use_avg_stats"><strong>Use Average Values </strong><input name="use_avg_stats" type="checkbox" id="use_avg_stats" value="y" unchecked>
 <br><font face="Arial, Helvetica, sans-serif">Use average values for statistic calculations (<em>note this option only applies to scatter plots</em>) </font> </p>
  </div>
<div align="left">
<p>&nbsp;</p>
</div>
</div></td>
</tr>
</table>
<br></td>
</tr>
<td>&nbsp;</td>
  
<tr> 
<td><table width="800" border="1" align="left" cellpadding="10" cellspacing="5">
<tr align="center" valign="middle"> 
<td height="41" colspan="2"> <div align="center" class="style4 style3"><strong>  <font face="Arial, Helvetica, sans-serif">Geography Criteria</font></strong></div></td>
</tr>

<tr align="center" valign="top" bgcolor="#CCCCCC"> 
<td width="320"> <div align="left">
</div>
<div align="left">
<font face="Arial, Helvetica, sans-serif"> 
<label for="loc_setting"><strong>Site Landuse (AQS Only) </strong><br><br><select name="loc_setting" id="loc_setting">
<option ></option>
	<option value="RURAL">Rural</option>
        <option value="SUBURBAN">Suburban</option>
        <option value="URBAN AND CENTER CITY">Urban</option>
</select>
<br> 
Isolate AQS evaluation data by whether the site location setting is described as rural, suburban or urban.  Only applies to AQS sites.</font></p>
<font face="Arial, Helvetica, sans-serif">
<label for="near_road">Remove sites identified as near road </label><input name="near_road" type="checkbox" id="near_road" value="n" unchecked>
<br></font><font face="Arial, Helvetica, sans-serif"><br>
</div>
<div align="left">
<p><font face="Arial, Helvetica, sans-serif">
<label for="aqs_co_network"><strong>Subset by AQS/TOAR2 Co-Network</strong></label><br><br><select name="aqs_co_network" id="aqs_co_network">
<option ></option>
        <optgroup label="AQS Co-Networks">
        <option value="IMPROVE">IMPROVE</option>
        <option value="CSN">CSN</option>
        <option value="CASTNET">CASTNET</option>
        <optgroup label="TOAR2 Co-Networks">
        <option value="EPA">EPA</option>
        <option value="OpenAQ">OpenAQ</option>
        <option value="ECCC">ECCC</option>
        <option value="EEA">EEA</option>
        <option value="MMA">MMA</option>
        <option value="UBA">UBA</option>
        <option value="NIES">NIES</option>
        <option value="KRAQN">KRAQN</option>
        <option value="USP">USP</option>
        <option value="UNAL">UNAL</option>
        <option value="EMOV">EMOV</option>
        <option value="Unknown">Unknown</option>
</select>
<br>
<p><label for="common_sites"><strong>Use Only Common Sites </strong></label><input name="common_sites" type="checkbox" id="common_sites" value="y" unchecked>
<br><class="style5"><font face="Arial, Helvetica, sans-serif">Check this box to only use common sites among different simulations. Only sites from smallest common domain will be used. Can increase script run time slightly, particularly for large queries.</font></p>
<p><label for="common_sites_species"><strong>Use Only Common Sites for Species</strong></label><input name="common_sites_species" type="checkbox" id="common_sites_species" value="y" unchecked>
<br><class="style5"><font face="Arial, Helvetica, sans-serif">Check this box to only use common sites among different species. Only sites from the species with the fewest sites will be used. Can increase script run time slightly, particularly for large queries.</font></p>
</div></td>
<td width="320"> <div align="left"> 
<font face="Arial, Helvetica, sans-serif" class="style5"><strong>Latitude-Longitude 
</strong></font><br>
<br>
 <label for="lat1"><strong>Lat</strong> between </label><input name="lat1" type="text" id="lat1" size="10">
 <label for="lat2"> & </label><input name="lat2" type="text" id="lat2" size="10">
 deg</font></p>
 <p>
 <label for="lon1"><strong>Lon</strong> between </label><input name="lon1" type="text" id="lon1" size="10">
 <label for="lon2"> & </label><input name="lon2" type="text" id="lon2" size="10">
 deg</font><br>
<br>
<font face="Arial, Helvetica, sans-serif">Specify bounds on the evaluation data to examine. Latitudes must be given south to north, and Longitudes must be given west to east.</font></p>
</div></td>
</tr>
</table></td>
</tr>
<tr> 
<td>&nbsp;</td>
</tr>
<tr> 
<td><table width="900" border="1" align="left" cellpadding="10" cellspacing="5">
<tr align="center" valign="middle"> 
<td colspan="2"> <div align="center" class="style4 style3"><strong>  <font face="Arial, Helvetica, sans-serif">Data Format and Plot Specifications</font></strong></div></td>
</tr>
<tr align="center" valign="top" bgcolor="#CCCCCC"> 
<td height="204"> <div align="left"> 
<span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>&quot;Soccergoal&quot; Plot / &quot;Bugle&quot; Plot Options</strong></font></span><font face="Arial, Helvetica, sans-serif"><strong><br>
</strong></font><br>
<font face="Arial, Helvetica, sans-serif">
	<label for="soccerplot_opt"><strong>Select statistics to plot</strong><br><br></label><select name="soccerplot_opt" id="soccerplot_opt">
		<option value=1 selected>NMB vs. NME</option>
		<option value=2>FB vs. FE</option>
		<option value=3>NMdnB vs. NMdnE</option>
	</select>

</p><br><span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Kelly Plot Options</strong></font></span><font face="Arial, Helvetica, sans-serif"><br><br>
<label for=inc_kelly_stats>Include stat values on Kelly plots</label><input name="inc_kelly_stats" type="checkbox" id="inc_kelly_stats" value="y" unchecked>
<br><br>
<label for=nmb_max>NMB min/max: </label><input name="nmb_max" type="text" id="nmb_max" size="5">
<label for=nmb_int>int: </label><input name="nmb_int" type="text" id="nmb_int" size="5">
</font></p>
<label for=nme_min>NME min: </label><input name="nme_min" type="text" id="nme_min" size="5">
<label for=nme_max>max: </label><input name="nme_max" type="text" id="nme_max" size="5">
<label for=nme_int>int: </label><input name="nme_int" type="text" id="nme_int" size="5">
</font></p>
<label for=mb_max>MB min/max: </label><input name="mb_max" type="text" id="mb_max" size="5">
<label for=mb_int>int: </label><input name="mb_int" type="text" id="mb_int" size="5">
</font></p>
<label for=me_min>ME min: </label><input name="me_min" type="text" id="me_min" size="5">
<label for=me_max>max: </label><input name="me_max" type="text" id="me_max" size="5">
</font></p>
<label for=rmse_min>RMSE min: </label><input name="rmse_min" type="text" id="rmse_min" size="5">
<label for=rmse_max>max: </label><input name="rmse_max" type="text" id="rmse_max" size="5">
</font></p>
<label for=cor_min>CORR min: </label><input name="cor_min" type="text" id="cor_min" size="5">
<label for=cor_max>max: </label><input name="cor_max" type="text" id="cor_max" size="5">
<label for=cor_int>int: </label><input name="cor_int" type="text" id="cor_int" size="5">
</font></p>

</p>
</div></td>
<td> <div align="left"> 
<font face="Arial, Helvetica, sans-serif" class="style5"><strong>AMET Plots Axis Options </strong></font><br>
<br>
<label for=x_axis_min>x axis min: </label><input name="x_axis_min" type="text" id="x_axis_min" size="5">
</font><font face="Arial, Helvetica, sans-serif"> x axis max: </font><font face="Arial, Helvetica, sans-serif">
<label for=x_axis_max>x axis max: </label><input name="x_axis_max" type="text" id="x_axis_max" size="5">
</font></p>
<label for=y_axis_min>y axis min: </label><input name="y_axis_min" type="text" id="y_axis_min" size="5">
<label for=y_axis_max>y axis max: </label><input name="y_axis_max" type="text" id="y_axis_max" size="5">
</font></p>
<label for=bias_y_axis_min>bias y axis min: </label><input name="bias_y_axis_min" type="text" id="bias_y_axis_min" size="5">
<label for=bias_y_axis_max>bias y axis max: </label><input name="bias_y_axis_max" type="text" id="bias_y_axis_max" size="5">
</font></p>
<label for=density_zlim>density zlim max: </label><input name="density_zlim" type="text" id="density_zlim" size="5">
<label for=num_dens_bins>density num bins: </label><input name="num_dens_bins" type="text" id="num_dens_bins" size="5">
<br>
</font></p>
<label for=max_limit>skill plot max limit: </label><input name="max_limit" type="text" id="max_limit" size="5" value=70> 
</font></p>
<label for=x_angle>x axis label angle: </label><input name="x_angle" type="text" id="x_angle" size="5" value=0>
<br>
</font></p>
<label for=leg_size_fac>Factor to adjust legend text size: </label><input name="leg_size_fac" type="text" id="leg_size_fac" size="5" value=1>
<br>
</font></p>

Enter a value above to set the x and y axes limits for several plots (scatter, box, stacked bar, time series, etc). The density values only apply to the density scatter plot. Leave the value blank to use the value calculated by the script. The skill plot max limit only applies to the skill scatterplot.</font></p>
</div></td>
</tr>
<tr align="center" valign="top" bgcolor="#CCCCCC">
  <td><div align="left">
      <span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Scatter Plot Options</strong></font></span><font face="Arial, Helvetica, sans-serif"><strong><br>
        </strong></font><br>
        <input name="conf_line" type="checkbox" id="conf_line" value="y" unchecked><label for="conf_line">Include 2-to-1 Confidence Lines</label><br>
        <input name="pca_flag" type="checkbox" id="pca_flag" value="y" unchecked><label for="pca_flag">Use PCA Regions</label><br>
         <input name="bin_by_mod" type="checkbox" id="bin_by_mod" value="y" unchecked><label for="bin_by_mod">Bin by Model Values (binned bias plot only)</label><br>
        <input name="inc_error" type="checkbox" id="inc_error" value="y" unchecked><label for="inc_error">Include error on interactive binned plot</label><br>
        <input name="trend_line" type="checkbox" id="trend_line" value="y" checked><label for="trend_line">Include trend line on ggplot scatter plot</label><br>
        <br>
        <em><font face="Arial, Helvetica, sans-serif"><strong>Statistics</strong></font></em> (include up to 5) </p>
        <p>
        <input name="stat1" type="checkbox" id="stat1" value="y" unchecked><label for=stat1>Number of Pairs</label><br>
        <input name="stat2" type="checkbox" id="stat2" value="y" unchecked><label for=stat2>Mean Obs</label><br>
	<input name="stat3" type="checkbox" id="stat3" value="y" unchecked><label for=stat3>Mean Model</label><br>
	<input name="stat4" type="checkbox" id="stat4" value="y" checked><label for=stat4>Index of Agreement</label><br>
        <input name="stat5" type="checkbox" id="stat5" value="y" unchecked><label for=stat5>Correlation</label><br>
	<input name="stat6" type="checkbox" id="stat6" value="y" unchecked><label for=stat6>R Squared</label><br>
        <input name="stat7" type="checkbox" id="stat7" value="y" unchecked><label for=stat7>RMSE</label><br>
        <input name="stat8" type="checkbox" id="stat8" value="y" checked><label for=stat8>Systematic RMSE</label><br>
        <input name="stat9" type="checkbox" id="stat9" value="y" checked><label for=stat9>Unsystematic RMSE</label><br>
	<input name="stat10" type="checkbox" id="stat10" value="y" unchecked><label for=stat10>Norm Mean Bias (NMB, %)</label> <br>
        <input name="stat11" type="checkbox" id="stat11" value="y" unchecked><label for=stat11>Norm Mean Error (NME, %)</label> <br>
        <input name="stat12" type="checkbox" id="stat12" value="y" unchecked><label for=stat12>Norm Median Bias (NMdnB, %)</label> <br>
        <input name="stat13" type="checkbox" id="stat13" value="y" unchecked><label for=stat13>Norm Median Error (NMdnE, %)</label> <br>	
        <input name="stat14" type="checkbox" id="stat14" value="y" unchecked><label for=stat14>Mean Bias (MB) </label><br>
        <input name="stat15" type="checkbox" id="stat15" value="y" unchecked><label for=stat15>Mean Error (ME) </label><br>
        <input name="stat16" type="checkbox" id="stat16" value="y" checked><label for=stat16>Median Bias (MdnB) </label><br>
        <input name="stat17" type="checkbox" id="stat17" value="y" checked><label for=stat17>Median Error (MdnE) </label><br>
        <input name="stat18" type="checkbox" id="stat18" value="y" unchecked><label for=stat18>Fractional Bias (FB, %) </label><br>
        <input name="stat19" type="checkbox" id="stat19" value="y" unchecked><label for=stat19>Fractional Error (FE, %)</label></p>
      <p><font face="Arial, Helvetica, sans-serif"><em><strong>Plot Colors</strong></em> <br>
        <br>
 </font><font face="Arial, Helvetica, sans-serif">
 <label for=network1_color>Obs Color 1: </label>&nbsp;&nbsp;<select name="network1_color" id="network1_color">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99003>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black selected>Black</option>
  <option value=transparent>None</option>
</select>

<label for=network1_color2>Color 2: </label><select name="network1_color2" id="network1_color2">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99003>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black selected>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
  </font><font face="Arial, Helvetica, sans-serif"></font><font face="Arial, Helvetica, sans-serif">
  <label for=network2_color>Mod1 Color 1: </label><select name="network2_color" id="network2_color">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000 selected>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network2_color2>Color 2: </label><select name="network2_color2" id="network2_color2">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000 selected>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<br>
<label for=network3_color>Mod2 Color 1: </label><select name="network3_color" id="network3_color">
  <option value=#0000FF selected>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><font face="Arial, Helvetica, sans-serif">
<label for=network3_color2> Color 2: </label><select name="network3_color2" id="network3_color2">
  <option value=#0000FF selected>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network4_color>Mod3 Color 1: </label><select name="network4_color" id="network4_color">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D selected>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><font face="Arial, Helvetica, sans-serif">
<label for=network4_color2> Color 2: </label><select name="network4_color2" id="network4_color2">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=red>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D selected>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network5_color>Mod4 Color 1: </label><select name="network5_color" id="network5_color">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232 selected>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network5_color2>Color 2: </label><select name="network5_color2" id="network5_color2">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232 selected>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network6_color>Mod5 Color 1: </label><select name="network6_color" id="network6_color">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002 selected>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network6_color2> Color 2: </label><select name="network6_color2" id="network6_color2">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002 selected>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network7_color>Mod6 Color 1: </label><select name="network7_color" id="network7_color">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown selected>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network7_color2> Color 2: </label><select name="network7_color2" id="network7_color2">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown selected>Brown</option>
  <option value=#9900FF>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network8_color>Mod7 Color 1: </label><select name="network8_color" id="network8_color">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF9900>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF selected>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network8_color2> Color 2: </label><select name="network8_color2" id="network8_color2">
  <option value=#0000FF>Blue</option>
  <option value=#6FA8DC>Lgt Blue</option>
  <option value=#073763>Drk Blue</option>
  <option value=#FF0000>Red</option>
  <option value=#FF3333>Lgt Red</option>
  <option value=#CC0000>Drk Red</option>
  <option value=#FFFF33>Yellow</option>
  <option value=#F1C232>Drk Yellow</option>
  <option value=#93C47D>Lgt Green</option>
  <option value=#00FF00>Green</option>
  <option value=#38761D>Drk Green</option>
  <option value=#FF99002>Orange</option>
  <option value=brown>Brown</option>
  <option value=#9900FF selected>Purple</option>
  <option value=#D9D9D9>Lgt Grey</option>
  <option value=#CCCCCC>Med Grey</option>
  <option value=#666666>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<p><font face="Arial, Helvetica, sans-serif"><em><strong>Plot Symbols</strong></em> <br>
        <br>
Network 1 </font><font face="Arial, Helvetica, sans-serif">
<label for=network1_symbol>Net/Mod 1: </label> <select name="network1_symbol" id="network1_symbol">
  <option value=16 selected>Circle</option>
  <option value=17>Triangle</option>
  <option value=15>Square</option>
  <option value=18>Diamond</option>
  <option value=11>Star</option>
  <option value=8>Burst</option>
  <option value=4>X</option>
</select>
</font><br>
Network 2 </font><font face="Arial, Helvetica, sans-serif">
<label for=network2_symbol>Net/Mod 2: </label> <select name="network2_symbol" id="network2_symbol">
  <option value=16>Circle</option>
  <option value=17 selected>Triangle</option>
  <option value=15>Square</option>
  <option value=18>Diamond</option>
  <option value=11>Star</option>
  <option value=8>Burst</option>
  <option value=4>X</option>
</select>
</font><br>
Network 3 </font><font face="Arial, Helvetica, sans-serif">
<label for=network3_symbol>Net/Mod 3: </label> <select name="network3_symbol" id="network3_symbol">
  <option value=16>Circle</option>
  <option value=17>Triangle</option>
  <option value=15 selected>Square</option>
  <option value=18>Diamond</option>
  <option value=11>Star</option>
  <option value=8>Burst</option>
  <option value=4>X</option>
</select>
</font><br>
Network 4 </font><font face="Arial, Helvetica, sans-serif">
<label for=network4_symbol>Net/Mod 4: </label> <select name="network4_symbol" id="network4_symbol">
  <option value=16>Circle</option>
  <option value=17>Triangle</option>
  <option value=15>Square</option>
  <option value=18 selected>Diamond</option>
  <option value=11>Star</option>
  <option value=8>Burst</option>
  <option value=4>X</option>
</select>
</font></br>
Network 5 </font><font face="Arial, Helvetica, sans-serif">
<label for=network5_symbol>Net/Mod 5: </label> <select name="network5_symbol" id="network5_symbol">
  <option value=16>Circle</option>
  <option value=17>Triangle</option>
  <option value=15>Square</option>
  <option value=18>Diamond</option>
  <option value=11 selected>Star</option>
  <option value=8>Burst</option>
  <option value=4>X</option>
</select>
</font></br>
Network 6 </font><font face="Arial, Helvetica, sans-serif">
<label for=network6_symbol>Net/Mod 6: </label> <select name="network6_symbol" id="network6_symbol">
  <option value=16>Circle</option>
  <option value=17>Triangle</option>
  <option value=15>Square</option>
  <option value=18>Diamond</option>
  <option value=11>Star</option>
  <option value=8 selected>Burst</option>
  <option value=4>X</option>
</select>
</font></br>
Network 7 </font><font face="Arial, Helvetica, sans-serif">
<label for=network7_symbol>Net/Mod 7: </label><select name="network7_symbol" id="network7_symbol">
  <option value=16>Circle</option>
  <option value=17>Triangle</option>
  <option value=15>Square</option>
  <option value=18>Diamond</option>
  <option value=11>Star</option>
  <option value=8>Burst</option>
  <option value=4 selected>X</option>
</select>
</font></p>
  <td><div align="left">
      <span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>AMET Model Eval Stats/Plots</strong></font></span><br>
      <br>
      <font face="Arial, Helvetica, sans-serif">
      <input name="run_info_text" type="checkbox" id="run_info_text" value="y" checked><label for=run_info_text>Include run info text on plots </label>
      </font><font face="Arial, Helvetica, sans-serif"><br>
      <input name="zeroprecip" type="checkbox" id="zeroprecip" value="n" unchecked><label for=zeroprecip>Do not include zero precipitation observations in analysis.  Only use when precipitation data are available (e.g. NADP, AIRMON) </label>
      </font> </p>
      <p><font face="Arial, Helvetica, sans-serif">
      <input name="inc_valid" type="checkbox" id="inc_valid" value="y" checked><label for=inc_valid> Include only and all valid observations in the analysis based on available valid codes (obs w/ missing valid codes are considered valid).  Currently applies to only NADP, MDN and AMON networks.</label> </font></p>
      <p><font face="Arial, Helvetica, sans-serif">
      <input name="coverage" type="text" id="coverage" title="Coverage" size="3" maxlength="3" value=75><label for=Coverage></font></strong>Enter minimum completeness (as a %) for site specific calculations (e.g. at least 3 of 4 obs = 75%).  Note that this criteria does not apply to bulk domain computed statistics, only site specific calculations.</font></label> </p>
      <p><font face="Arial, Helvetica, sans-serif"><strong><font face="Arial, Helvetica, sans-serif">
        <input name="num_obs_limit" type="text" id="num_obs_limit" title="Num_Obs_Limit" size="5" maxlength="5" value=1><label for=Num_Obs_Limit></font></strong>Enter minimum number of observations required for site statistics calculations (default is set at 1 which would include all sites that meet the completeness criteria above)</font></label></p>
      <p><font face="Arial, Helvetica, sans-serif"><br>
      </font><font face="Arial, Helvetica, sans-serif"><strong>
       Stacked Bar Chart Options </strong></font></p>
      <p><font face="Arial, Helvetica, sans-serif">
      <input name="inc_FRM_adj" type="checkbox" id="inc_FRM_adj" "Include FRM Adjustment" value="y" checked><label for=inc_FRM_adj>Include CSN FRM adjustment</label></font> <br>
      <font face="Arial, Helvetica, sans-serif">
      <input name="use_median" type="checkbox" id="use_median" title="Use Median Instead of Mean" value="y" unchecked><label for=use_median>Use median instead of mean</label></font><br>
      <br>
  <p><span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Boxplot Options</strong></font></span><font face="Arial, Helvetica, sans-serif"><strong> <br>
  </strong></font><br>
  <input name="inc_whiskers" type="checkbox" id="inc_whiskers" value="y" unchecked><label for=inc_whiskers>Include whiskers on boxplot</label><br>
  <input name="inc_ranges" type="checkbox" id="inc_ranges" value="y" checked><label for=inc_ranges>Include 25-75% quartile ranges on boxplot</label><br>
  <input name="inc_median_lines" type="checkbox" id="inc_median_lines" value="y" unchecked><label for=inc_median_lines>Include median lines on boxplot</label><br>
  <input name="remove_mean" type="checkbox" id="remove_mean" value="y" unchecked><label for=remove_mean>Subtract mean from Hourly Boxplot or Spatial Plot scripts</label><br> 
  <input name="overlap_boxes" type="checkbox" id="overlap_boxes" value="y" unchecked><label for=overlap_boxes>Overlap boxes in GGplot box plot</label> </p>
  <p><span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Time Series Plot Options </strong></font></span><font face="Arial, Helvetica, sans-serif"><strong> <br>
  </strong>
     <p><font face="Arial, Helvetica, sans-serif">Choose which averaging function to plot on time series (note that the sum option averages the domain-wide sum by the number of sites)<strong><br>
     </strong><label for=avg_func_opt>Averaging Function:</label><select name="avg_func_opt" id="avg_func_opt">
       <option value="mean" selected>Mean</option>
       <option value="median">Median</option>
       <option value="sum">Sum</option>
     </select>
   </font></p>
  </font>
  <input name="inc_legend" type="checkbox" id="inc_legend" value="y" checked><label for=inc_legend> Include legend on time series plots</label> <br>
  <input name="inc_points" type="checkbox" id="inc_points" value="y" checked><label for=inc_points> Include points on time series plots</label> <br>
  <input name="inc_bias" type="checkbox" id="inc_bias" value="y" checked><label for=inc_bias> Include bias on interactive time series plots</label> <br>
  <input name="inc_rmse" type="checkbox" id="inc_rmse" value="y" unchecked><label for=inc_rmse> Include RMSE on interactive time series plots</label> <br>
  <input name="inc_corr" type="checkbox" id="inc_corr" value="y" unchecked><label for=inc_corr> Include Correlation on interactive time series plots</label> <br>
  <input name="inc_nmb" type="checkbox" id="inc_nmb" value="y" unchecked><label for=inc_nmb> Include NMB on interactive time series plots (not functional)</label><br>
  <input name="inc_nme" type="checkbox" id="inc_nme" value="y" unchecked><label for=inc_nme> Include NME on interactive time series plots (not functional)</label><br>
  <input name="use_var_mean" type="checkbox" id="use_var_mean" value="y" unchecked><label for=use_var_mean> Subtract period mean from time series plots</label> <br><br>
  <font face="Arial, Helvetica, sans-serif">
  <input name="obs_per_day_limit" type="text" id="obs_per_day_limit" size="4" value="0"><label for=obs_per_day_limit> Specify minimum limit on number of records per time unit (e.g. day) to include</label> </p>
  <input name="line_width_val" type="text" id="line_width_val" size="4" value="1"><label for=line_width_val> Specify time series and box plot line widths</label> </p></font>
  <div></td>

</tr>

<tr align="center" valign="top" bgcolor="#CCCCCC">
   <td><div align="left">
   <span class="style5"><font face="Arial, Helvetica, sans-serif"></font></span><font face="Arial, Helvetica, sans-serif">
     <label for=overlay_opt><strong>Overlay File Options</strong></label><br><br><select name="overlay_opt" id="overlay_opt">
       <option value=1 selected>Hourly</option>
       <option value=2>Daily</option>
       <option value=3>1hr Max (use with hourly data)</option>
       <option value=4>8hr Max (use with hourly data)</option>
     </select>
   </font></p>
   <p><font face="Arial, Helvetica, sans-serif">Currently, observation overlay files can be generated from hourly or daily data. If using hourly data (e.g. AQS hourly), choose hourly below. If using daily (e.g. AQS 8hr max) choose daily. You can also use hourly data (e.g. CASTNet hourly) to create daily values by selecting either 1hr or 8hr max below. <strong><br>
     </strong></font><br>
   </p>
   </div></td>

<td><div align="left">
<font face="Arial, Helvetica, sans-serif" class="style5"></font>
  <font face="Arial, Helvetica, sans-serif">
  <label for=custom_query><strong>Add Custom MYSQL Query </strong></label><br><br><input name="custom_query" type="text" id="custom_query" size="50" maxlength="20000">
  <br>
  <br>
  Use the box above to create your own custom MYSQL query. The query should begin with 'and' and contain valid MYSQL query commands. This is an advanced option for users familiar with database structure and queries. An example of a correctly formatted statement is:</font></p>
<p><font face="Arial, Helvetica, sans-serif"><strong>
      and d.SO4_ob &gt; 5 and d.SO4_ob &lt; 10 </strong></font></p>
<p><em><font face="Arial, Helvetica, sans-serif">The d refers to the main data table where the site compare data are stored. </font></em></p>
</div></td>
</tr>
<tr align="center" valign="top" bgcolor="#CCCCCC">
  <td colspan="2" align="left"><p><strong>Spatial Plot Options</strong></p>
    <p>Number of Intervals<font face="Arial, Helvetica, sans-serif">:
      &nbsp;
      <input name="num_ints" type="text" id="num_ints" title="Number of Intervals" size="5" value="">
    </font>&nbsp;&nbsp;RMSE Range Max:&nbsp;&nbsp;<font face="Arial, Helvetica, sans-serif"> &nbsp;&nbsp;&nbsp;
    <input name="rmse_range_max" type="text" id="rmse_range_max" title="RMSE Range Max" size="5" value="">
    </font><br>
      % Error Range Max:<font face="Arial, Helvetica, sans-serif">
  <input name="perc_error_max" type="text" id="perc_error_max" title="Percentage Error Max" size="5" value="">
  </font> &nbsp;&nbsp;&nbsp;Abs. Error Range Max:<font face="Arial, Helvetica, sans-serif">
  <input name="abs_error_max" type="text" id="abs_error_max" title="Absolute Error Max" size="5" value="">
  <br>
  </font>% Range Min: <font face="Arial, Helvetica, sans-serif"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="perc_range_min" type="text" id="perc_range_min" title="Percentage Range Min" size="5" value="">
  </font>&nbsp;&nbsp;&nbsp;% Range Max:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="perc_range_max" type="text" id="perc_range_max" title="Percentage Range Max" size="5" value="">
  <br>
      Abs. Range Min:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="abs_range_min" type="text" id="abs_range_min" title="Absolute Range Min" size="5" value="">
  &nbsp;&nbsp;&nbsp;Abs. Range Max:
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="abs_range_max" type="text" id="abs_range_max" title="Absolute Range Max" size="5" value="">
        <br>
      Difference Min:
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="diff_range_min" type="text" id="diff_range_min" title="Difference Range Min" size="5" value="">
  &nbsp;&nbsp;&nbsp;Difference Max:<font face="Arial, Helvetica, sans-serif"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="diff_range_max" type="text" id="diff_range_max" title="Difference Range Max" size="5" value="">
  <br>
      Histogram Max:
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="hist_max" type="text" id="hist_max" title="Histogram Max" size="5" value="">
  <br>
  <br>
  Adjust plot ranges based on quantile to avoid extreme ranges due to outliers. Values that fall outside the plotting range will show up as grey. Currently does not affect the actual data values included, only the plot range.
  <br>
  <br>
  </font>Quantile Min: <font face="Arial, Helvetica, sans-serif"> 
  <input name="quantile_min" type="text" id="quantile_min" title="Quantile Min" size="5" value="0.005">
  <br>
  </font>Quantile Max: <font face="Arial, Helvetica, sans-serif"> 
  <input name="quantile_max" type="text" id="quantile_max" title="Quantile Max" size="5" value="0.995">
  </font><font face="Arial, Helvetica, sans-serif"><br>
  <br>
</font>These options apply to either the stats and plots program, in which a percent range would be entered, or the spatial plot program, in which case a concentrations range would be entered.</p>
    <p> 
      <label for=greyscale>Plot using greyscale</label><input name="greyscale" type="checkbox" id="greyscale" title="Greyscale Flag" value="y" unchecked>
      <br>
      <label for=popup_ts>Include popup timeseries on leaflet plots (limted to less than 100 sites to avoid timeout issues)</label><input name="popup_ts" type="checkbox" id="popup_ts" title="Popup Timeseries" value="y" unchecked>
      <br>
      Near-zero color (e.g. grey50, black, white)
      <input name="near_zero_color" type="text" id="near_zero_color" title="Near Zero Color" size="10" value="grey50">
      <br>
      <label for=inc_counties>Include counties on map</label><input name="inc_counties" type="checkbox" id="inc_counties" title="Include Counties" value="y" checked>
      <br>
      Symbol size factor (default is one)
      <input name="symbsizfac" type="text" id="symbsizfac" title="Symbol Size Factor" size="4" value="1">
      <br>
      Symbol size on interactive spatial plots (0 = variable radius)
      <input name="plot_radius" type="text" id="plot_radius" title="Plot Point Radius" size="2" value="0">
      <br>
      Symbol size of outliers on interactive spatial plots 
      <input name="outlier_radius" type="text" id="outlier_radius" title="Outlier Point Radius" size="2" value="40">
      <br>
      Fill opacity on interactive spatial plots
     <input name="fill_opacity" type="text" id="fill_opacity" title="Fill Opacity" size="5" value="0.8">
      <br><br>
     <label for=map_type><strong>Interactive Spatial Plot Base Map</strong></label><br><select name="map_type" id="map_type">
       <option value=1 selected>Open Street Map: Default</option>
       <option value=2>Open Street Map: Black and While</option>
       <option value=3>Open Topo Map</option>
       <option value=4>ESRI World Imagery</option>
       <option value=5>HERE Hybrid Day</option>
     </select> 
    </p></td>
  </tr>
<tr align="center" valign="top" bgcolor="#CCCCCC"> 
<td width="281" align="left"><p><span class="style5"><font face="Arial, Helvetica, sans-serif"></font></span><font face="Arial, Helvetica, sans-serif"></font>
<label for=custom_title><strong>Custom title (applied to all plots)</strong></label><br><br><input name="custom_title" type="text" id="custom_title" size="50" maxlength="20000"><br>
<br><span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Plotly Image Size</strong></font></span><font face="Arial, Helvetica, sans-serif"><strong><br>
     </strong>
</font>Enter NULL for auto sizing. Enter height/width values (e.g. 900/1600) to export plot as a PNG file).</p>
<p>Height:<font face="Arial, Helvetica, sans-serif">
    <label for=img_height>Height: </label><input name="img_height" type="text" id="img_height" size="5" value="NULL">
    </font>&nbsp;&nbsp;<font face="Arial, Helvetica, sans-serif">
    <label for=img_width>Width: </label><input name="img_width" type="text" id="img_width" size="5" value="NULL">
    </font><br>
    <br>
    <font face="Arial, Helvetica, sans-serif">
    <input name="png_from_html" type="checkbox" id="png_from_html" value="y" unchecked><label for=png_from_html>Create static png files from html files (can be slow)</label>
    </font><font face="Arial, Helvetica, sans-serif"><br>
    <br><span class="style5"><font face="Arial, Helvetica, sans-serif"></font></span><font face="Arial, Helvetica, sans-serif">
     </strong>
     <label for=png_res><strong>PNG Plot Quality</strong><br><br><select name="png_res" id="png_res">
       <option value=150>Low</option>
       <option value=300 selected>Medium</option>
       <option value=600>High</option>
     </select>
   </font></p>
   <p><font face="Arial, Helvetica, sans-serif">Specify the image quality of the png plots produced. Lower quality images are smaller and load faster. <strong><br>

<td width="50%"> <div align="left">
<div align="left">
<font face="Arial, Helvetica, sans-serif"></font>
</div>
<div align="left"><font face="Arial, Helvetica, sans-serif">
    <label for=run_program><strong><span class="style4 style5 style3">Choose Program to Run</span></strong></label><br><br><select name="run_program" id="run_program">
    <option value="" selected><font face="Arial, Helvetica, sans-serif">Choose AMET Script to Execute</font></option>
    <optgroup label="Scatter Plots">
    <option value="AQ_Scatterplot.R"><font face="Arial, Helvetica, sans-serif">Multiple Networks Model/Ob Scatterplot (select stats only)</font></option>
    <option value="AQ_Scatterplot_ggplot.R"><font face="Arial, Helvetica, sans-serif">GGPlot Scatterplot (multi network, single run)</font></option>
    <option value="AQ_Scatterplot_plotly.R"><font face="Arial, Helvetica, sans-serif">Interactive Multiple Network Scatterplot</font></option>
    <option value="AQ_Scatterplot_multisim_plotly.R"><font face="Arial, Helvetica, sans-serif">Interactive Multiple Simulation Scatterplot</font></option>
    <option value="AQ_Scatterplot_single.R"><font face="Arial, Helvetica, sans-serif">Single Network Model/Ob Scatterplot (includes all stats)</font></option>
    <option value="AQ_Scatterplot_density.R"><font face="Arial, Helvetica, sans-serif">Density Scatterplot (single run, single network)</font></option>
    <option value="AQ_Scatterplot_density_ggplot.R"><font face="Arial, Helvetica, sans-serif">GGPlot Density Scatterplot (single run, single network)</font></option>
    <option value="AQ_Scatterplot_mtom.R"><font face="Arial, Helvetica, sans-serif">Model/Model Scatterplot (multiple networks)</font></option>
    <option value="AQ_Scatterplot_mtom_density_ggplot.R"><font face="Arial, Helvetica, sans-serif">Model/Model Density Scatterplot (single network)</font></option>
    <option value="AQ_Scatterplot_percentiles.R"><font face="Arial, Helvetica, sans-serif">Scatterplot of Percentiles (single network, single run)</font></option>
    <option value="AQ_Scatterplot_skill.R"><font face="Arial, Helvetica, sans-serif">Ozone Skill Scatterplot (single network, mult runs)</font></option>
    <option value="AQ_Scatterplot_bins.R"><font face="Arial, Helvetica, sans-serif">Binned MB & RMSE Scatterplots (single net., mult. run)</font></option>
    <option value="AQ_Scatterplot_bins_plotly.R"><font face="Arial, Helvetica, sans-serif">Interactive Binned Plot (single net., mult. run)</font></option>
    <option value="AQ_Scatterplot_multisim.R"><font face="Arial, Helvetica, sans-serif">Multi Simulation Scatter plot (single network, mult runs)</font></option>
    <option value="AQ_Scatterplot_soil.R"><font face="Arial, Helvetica, sans-serif">Soil Scatter plot (single network, mult runs)</font></option>
    </optgroup>
    <optgroup label="Time Series Plots">
    <option value="AQ_Timeseries.R"><font face="Arial, Helvetica, sans-serif">Time-series Plot (single network, multiple sites averaged)</font></option>
    <option value="AQ_Timeseries_bysite.R"><font face="Arial, Helvetica, sans-serif">Individual Site Time-series Plots (single network, multiple sites not average)</font></option>
    <option value="AQ_Timeseries_dygraph.R"><font face="Arial, Helvetica, sans-serif">Dygraph Time-series Plot (single network, multiple sites averaged)</font></option>
    <option value="AQ_Timeseries_plotly.R"><font face="Arial, Helvetica, sans-serif">Plotly Muli-simulation Timeseries</font></option>
    <option value="AQ_Timeseries_plotly_bysite.R"><font face="Arial, Helvetica, sans-serif">Individual Site Plotly Time-series Plots (single network, multiple sites not average)</font></option>
    <option value="AQ_Timeseries_networks_plotly.R"><font face="Arial, Helvetica, sans-serif">Plotly Multi-network Timeseries</font></option>
    <option value="AQ_Timeseries_species_plotly.R"><font face="Arial, Helvetica, sans-serif">Plotly Multi-species Timeseries</font></option>
    <option value="AQ_Timeseries_multi_networks.R"><font face="Arial, Helvetica, sans-serif">Multi-Network Time-series Plot (mult. net., single run)</font></option>
    <option value="AQ_Timeseries_multi_species.R"><font face="Arial, Helvetica, sans-serif">Multi-Species Time-series Plot (mult. species, single run)</font></option>
    <option value="AQ_Timeseries_MtoM.R"><font face="Arial, Helvetica, sans-serif">Model-to-Model Time-series Plot (single net., multi run)</font></option>
    <option value="AQ_Monthly_Stat_Plot.R"><font face="Arial, Helvetica, sans-serif">Year-long Monthly Statistics Plot (single network)</font></option>
    <option value="AQ_Monthly_Stat_Plot_plotly.R"><font face="Arial, Helvetica, sans-serif">Interactive Year-long Monthly Statistics Plot (single network)</font></option>
    </optgroup>
    <optgroup label="Spatial Plots">
    <option value="AQ_Stats_Plots.R"><font face="Arial, Helvetica, sans-serif">Species Statistics and Spatial Plots (multi networks)</font></option>
    <option value="AQ_Stats_Plots_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Species Statistics and Spatial Plots (single plot)</font></option>
    <option value="AQ_Stats_Plots_leaflet_network.R"><font face="Arial, Helvetica, sans-serif">Interactive Species Statistics and Spatial Plots (multiple plots)</font></option>
    <option value="AQ_Plot_Spatial.R"><font face="Arial, Helvetica, sans-serif">Spatial Plot (multi networks)</font></option>
    <option value="AQ_Plot_Spatial_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Spatial Plot (single plot)</font></option>
    <option value="AQ_Plot_Spatial_leaflet_network.R"><font face="Arial, Helvetica, sans-serif">Interactive Spatial Plot (multiple plots)</font></option>
    <option value="AQ_Plot_Spatial_animation_ggplot.R"><font face="Arial, Helvetica, sans-serif">Spatial Plots w/ Animations (ggplot version)</font></option>
    <option value="AQ_Plot_Spatial_animation_plotly.R"><font face="Arial, Helvetica, sans-serif">Spatial Plots w/ Animations (plotly version)</font></option>
    <option value="AQ_Plot_Spatial_Species_Diff_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Species Diff Spatial Plot (multi networks,multi species)</font></option>
    <option value="AQ_Plot_Spatial_MtoM.R"><font face="Arial, Helvetica, sans-serif">Model/Model Diff Spatial Plot (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_MtoM_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Model/Model Diff Spatial Plot (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_MtoM_Species.R"><font face="Arial, Helvetica, sans-serif">Model/Model Species Diff Spatial Plot (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_Diff.R"><font face="Arial, Helvetica, sans-serif">Spatial Plot of Bias/Error Difference (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_Diff_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Spatial Plot of Bias/Error Difference (single plot)</font></option>
    <option value="AQ_Plot_Spatial_Diff_leaflet_network.R"><font face="Arial, Helvetica, sans-serif">Interactive Spatial Plot of Bias/Error Difference (multiple plots )</font></option>
    <option value="AQ_Plot_Spatial_Ratio.R"><font face="Arial, Helvetica, sans-serif">Ratio Spatial Plot to total PM2.5 (multi network, multi run)</font></option>
    </optgroup>
    <optgroup label="Box Plots">
    <option value="AQ_Boxplot.R"><font face="Arial, Helvetica, sans-serif">Boxplot (single network, multi run)</font></option>
    <option value="AQ_Boxplot_ggplot.R"><font face="Arial, Helvetica, sans-serif">GGPlot Boxplot (single network, multi run)</font></option>
    <option value="AQ_Boxplot_plotly.R"><font face="Arial, Helvetica, sans-serif">Plotly Boxplot (single network, multi run)</font></option>
    <option value="AQ_Boxplot_DofW.R"><font face="Arial, Helvetica, sans-serif">Day of Week Boxplot (single network, multiple runs)</font></option>
    <option value="AQ_Boxplot_Hourly.R"><font face="Arial, Helvetica, sans-serif">Hourly Boxplot (single network, multiple runs)</font></option>
    <option value="AQ_Boxplot_MDA8.R"><font face="Arial, Helvetica, sans-serif">8hr Average Boxplot (single network, hourly data, can be slow)</font></option>
    <option value="AQ_Boxplot_Roselle.R"><font face="Arial, Helvetica, sans-serif">Roselle Boxplot (single network, multiple simulations)</font></option>
    </optgroup>
    <optgroup label="Stacked Bar Plots">
    <option value="AQ_Stacked_Barplot.R"><font face="Arial, Helvetica, sans-serif">PM2.5 Stacked Bar Plot (CSN or IMPROVE, multi run)</font></option>
    <option value="AQ_Stacked_Barplot_AE6.R"><font face="Arial, Helvetica, sans-serif">PM2.5 Stacked Bar Plot AE6 (CSN or IMPROVE, multi run)</font></option>
    <option value="AQ_Stacked_Barplot_AE6_plotly.R"><font face="Arial, Helvetica, sans-serif">Interactive Stacked Bar Plot</font></option>
    <option value="AQ_Stacked_Barplot_AE6_ggplot.R"><font face="Arial, Helvetica, sans-serif"> GGPlot Stacked Bar Plot</font></option>
    <option value="AQ_Stacked_Barplot_AE6_ts.R"><font face="Arial, Helvetica, sans-serif"> Stacked Bar Plot Time Series</font></option>
    <option value="AQ_Stacked_Barplot_soil.R"><font face="Arial, Helvetica, sans-serif">Soil Stacked Bar Plot (CSN or IMPROVE,multi run)</font></option>
    <option value="AQ_Stacked_Barplot_soil_multi.R"><font face="Arial, Helvetica, sans-serif">Soil Stacked Bar Plot Multi (CSN and IMPROVE,single run)</font></option>
    <option value="AQ_Stacked_Barplot_panel.R"><font face="Arial, Helvetica, sans-serif">Multi-Panel Stacked Bar Plot (full year data required)</font></option>
    <option value="AQ_Stacked_Barplot_panel_AE6.R"><font face="Arial, Helvetica, sans-serif">Multi-Panel Stacked Bar Plot AE6 (full year data)</font></option>
    <option value="AQ_Stacked_Barplot_panel_AE6_multi.R"><font face="Arial, Helvetica, sans-serif">Multi-Panel, Mulit Run Stacked Bar Plot AE6 (full year data)</font></option>
    </optgroup>
    <optgroup label="Misc Scripts">
    <option value="AQ_Summary_Panel_Plot.R"><font face="Arial, Helvetica, sans-serif">Summary panel plot w/ spatial, timeseries, histogram, and density scatterplot</font></option>
    <option value="AQ_Kellyplot.R"><font face="Arial, Helvetica, sans-serif">Kelly Plot (single species, single network, full year data)</font></option>
    <option value="AQ_Kellyplot_plotly.R"><font face="Arial, Helvetica, sans-serif">Plotly Kelly Plot (single species, single network, full year data)</font></option>
    <option value="AQ_Kellyplot_region.R"><font face="Arial, Helvetica, sans-serif">Climate Region Kelly Plot (single species, single network, multi sim)</font></option>
    <option value="AQ_Kellyplot_region_plotly.R"><font face="Arial, Helvetica, sans-serif">Plolty Climate Region Kelly Plot (single species, single network, multi sim)</font></option>
    <option value="AQ_Kellyplot_season.R"><font face="Arial, Helvetica, sans-serif">Seasonal Kelly Plot (single species, single network, multi sim)</font></option>
    <option value="AQ_Kellyplot_season_plotly.R"><font face="Arial, Helvetica, sans-serif">Plotly Seasonal Kelly Plot (single species, single network, multi sim)</font></option>
    <option value="AQ_Stats.R"><font face="Arial, Helvetica, sans-serif">Species Statistics (multi species, single network)</font></option>
    <option value="AQ_Raw_Data.R"><font face="Arial, Helvetica, sans-serif">Create raw data csv file (single network, single simulation)</font></option>
    <option value="AQ_Soccerplot.R"><font face="Arial, Helvetica, sans-serif">"Soccergoal" plot (multiple networks)</font></option>
    <option value="AQ_Soccerplot_plotly.R"><font face="Arial, Helvetica, sans-serif">Plotly "Soccergoal" plot (multiple networks/species)</font></option>
    <option value="AQ_Bugleplot.R"><font face="Arial, Helvetica, sans-serif">"Bugle" plot (multiple networks)</font></option>
    <option value="AQ_Histogram.R"><font face="Arial, Helvetica, sans-serif">Histogram (single network/species only)</font></option>
    <option value="AQ_Histogram_plotly.R"><font face="Arial, Helvetica, sans-serif">Interactive Histogram (single network, single species, multi run)</font></option>
    <option value="AQ_Temporal_Plots.R"><font face="Arial, Helvetica, sans-serif">CDF, Q-Q, Taylor Plots (single network, multi run)</font></option>
	</optgroup>
	<optgroup label="Experimental Scripts (may not work correctly)">
	<option value="AQ_Overlay_File.R"><font face="Arial, Helvetica, sans-serif">Create PAVE/VERDI Obs Overlay File (hourly/daily data only)</font></option>
	<option value="AQ_Scatterplot_log.R"><font face="Arial, Helvetica, sans-serif">Log-Log Model/Ob Scatterplot (multiple networks)</font></option>
	<option value="AQ_Spectral_Analysis.R"><font face="Arial, Helvetica, sans-serif">Spectral Analysis (single network, single run, experimental)</font></option>
	<option value="AQ_Plot_Spatial_Ratio.R"><font face="Arial, Helvetica, sans-serif">PM Ratio Spatial Plot (multi network, single run)</font></option>
  </select>
  <br>
<br>
Choose which program to run to create specific stats and figures. Note that some programs require certain temporal data (e.g. hourly, monthly). For information regarding each of the programs, <a href="./script_info.php">click here</a>. </font></div>
</div>
<p>&nbsp;</p>
</div></td>
</tr>
</table></td>
</tr>
<tr>
<td><div align="center"><font face="Arial, Helvetica, sans-serif"><strong> 
<input name="submit" type="submit" id="submit" value="Run Program (opens in new tab)">
</strong></font></div></td>
</tr>
</table>
<blockquote> 
   <blockquote> 
      <p align="left">&nbsp;</p>
   </blockquote>
</blockquote>
</form> 
</blockquote>
</blockquote>
</div>
<blockquote> 
   <p align="left">&nbsp;</p>
</blockquote>
<p>&nbsp;</p>
<!-- InstanceEndEditable --></td>
              </tr>
              <tr> 
                <td valign="TOP"><hr width="70%" color="#0000CC"> 
            </table></TD>
        </TR>
      </TABLE></TD>
  </TR>
  <TR> 
    <TD background="Templates/images/blkbottom.gif"> <DIV align="center"> 
          &nbsp;&nbsp; </A></P>
      </DIV></TD>
  </TR>
</TABLE>
</BODY>
<!-- InstanceEnd --></HTML>
