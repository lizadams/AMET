<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<HTML><!-- InstanceBegin template="/Templates/amet3.dwt" codeOutsideHTMLIsLocked="false" -->
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
t
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
				<h1 class="generic"><font face="Arial, Helvetica, sans-serif">Meteorology Analysis and Statistics Module</font></h1>
            <?php
	  /////////////////////////////////////////////// 
	 include ( 'amet-www-config.php'); 
	 include ( 'amet-lib.php'); 	 
	 ///////////////////////////////////////////////
		$database_id=			$_POST['database_id'];
                $project_id=                    $_POST['project_id'];
                $ametplot =                     $_POST['ametplot'];
                $data_format =                  $_POST['data_format'];
                $state=                         $_POST['state'];
                $stat_id=                       $_POST['stat_id'];
                $ob_network_g=                  $_POST['ob_network_g'];
                $ob_network_s=                  $_POST['ob_network_s'];
                $ys=                            $_POST['ys'];
                $ms=                            $_POST['ms'];
                $ds=                            $_POST['ds'];
                $ye=                            $_POST['ye'];
                $me=                            $_POST['me'];
                $de=                            $_POST['de'];
                $ob_time=                       $_POST['ob_time'];
                $fcast_cond=                    $_POST['fcast_cond'];
                $fcast_hr=                      $_POST['fcast_hr'];
                $init_utc=                      $_POST['init_utc'];
                $elev_cond=                     $_POST['elev_cond'];
                $elev=                          $_POST['elev'];
                $lat1=                          $_POST['lat1'];
                $lat2=                          $_POST['lat2'];
                $lon1=                          $_POST['lon1'];
                $lon2=                          $_POST['lon2'];
                $t1=                            $_POST['t1'];
                $t2=                            $_POST['t2'];
                $ws1=                           $_POST['ws1'];
                $ws2=                           $_POST['ws2'];
                $wd1=                           $_POST['wd1'];
                $wd2=                           $_POST['wd2'];
                $q1=                            $_POST['q1'];
                $q2=                            $_POST['q2'];
                $start_hour=                    $_POST['start_hour'];
                $end_hour=                      $_POST['end_hour'];
                $ind_month=                     $_POST['ind_month'];
                $custom_query=                  $_POST['custom_query'];
//                $species=                       $_POST['species'];
		
 //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
//	Query Generator Script, Executed when submit is pressed
if ($_POST['submit'] == "Run Program"){
//	echo("GOT HERE inside Run Program");
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
        if ($_POST['met_species']) {
           $species_ri = "\"".$_POST['met_species']."\"";
           $species = $_POST['met_species'];
        }
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
////////////////////////////////////////////////////////////////////////////////////////

	$str=" and d.stat_id=s.stat_id";
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Station Criterion, Query Strings   SELECT d.obs,d.mod from surface d, station s where ...
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
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
              $rpo="\"None\"";
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
              $pca="\"None\"";
        }
/////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//:: Climate Regions -- Central, East North Central, Northeast, Northwest, South, Southwest, Southwest, West, West North Central
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

//  if ($stat_id) {
//              $str=$str." and d.stat_id='$stat_id'";
//}
//      else {
//              $stat_id="All";
//      }

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
                        $arrayL = str_getcsv($stat_id);
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
//                      $str=$str." and d.stat_id='$stat_id'";
                }
    }
        else {
           $stat_id="All";
        }
/////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Date-Time Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
        if ($ys){
            $date_start=sprintf("%04d",$ys)."-".sprintf("%02d",$ms)."-".sprintf("%02d",$ds)." 00:00:00";            // start date format for plot titles
            $date_end=sprintf("%04d",$ye)."-".sprintf("%02d",$me)."-".sprintf("%02d",$de)." 23:00:00";                      // end date format for plot titles
            $date_start_q=sprintf("%04d",$ys)."-".sprintf("%02d",$ms)."-".sprintf("%02d",$ds)." 00:00:00";          // start date format for MYSQL query
            $date_end_q=sprintf("%04d",$ye)."-".sprintf("%02d",$me)."-".sprintf("%02d",$de)." 23:00:00";            // end date format for MYSQL query
            $str=$str." and d.ob_date BETWEEN '$date_start_q' and '$date_end_q'";               // date query string
            $date_title = "$date_start to $date_end";               // date plot title format
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
//::    Hour Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
    if ($start_hour < $end_hour) {
       $str=$str." and (d.ob_time >= '".$start_hour."' and d.ob_time <= '".$end_hour."')";
        }
        else {
           $str=$str." and (d.ob_time >= '".$start_hour."' or d.ob_time <= '".$end_hour."')";
        }
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Season Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($_POST['season']){
	    if($_POST['season'] == "winter") {
		   $str=$str." and (MONTH(ob_date) = 12 or MONTH(ob_date) = 1 or MONTH(ob_date) = 2)";
//                 $str=$str." and (month(d.ob_dates) = 12 or month(d.ob_dates) = 1 or month(d.ob_dates = 2))";
		   $date_title = "December to February $ys";
		}
		if ($_POST['season'] == "spring") {
		   $str=$str." and (MONTH(ob_date) = 3 or MONTH(ob_date) = 4 or MONTH(ob_date) = 5)";
//                 $str=$str." and (month(d.ob_dates) = 3 or month(d.ob_dates) = 4 or month(d.ob_dates = 5))";
		   $date_title = "March to May $ys";
		}
		if ($_POST['season'] == "summer") {
		   $str=$str." and (MONTH(ob_date) = 6 or MONTH(ob_date) = 7 or MONTH(ob_date) = 8)";
//                 $str=$str." and (month(d.ob_dates) = 6 or month(d.ob_dates) = 7 or month(d.ob_dates = 8))";
		   $date_title = "June to August $ys";
		}
		if ($_POST['season'] == "fall") {
		   $str=$str." and (MONTH(ob_date) = 9 or MONTH(ob_date) = 10 or MONTH(ob_date) = 11)";
//                 $str=$str." and (month(d.ob_dates) = 9 or month(d.ob_dates) = 10 or month(d.ob_dates = 11))";
		   $date_title = "September to November $ys";
		}
	}
//////////////////////////////////////////////////////////////////////////////

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::	Individual Month Criterion
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($ind_month) {
	    $str=$str." and MONTH(ob_date) = ".$ind_month;
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
//::	Geographic-Based Criterion (not used in AQ module)
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	if ($elev){
		$str=$str." and s.elev $elev_cond $elev";
	}
	if ($lat1 & $lat2) {
		$str=$str." and s.lat BETWEEN $lat1 and $lat2";
        }
        if ($lon1 & $lon2) {
		$str=$str." and s.lon BETWEEN $lon1 and $lon2";
	}
	if ($_POST['loc_setting']){
		$str=$str." and s.loc_setting=\'".$_POST['loc_setting']."\'";;
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
	$file = fopen("/var/www/html/run_info_met.template", "r");
		$i=0;
		while (!feof($file)) {
   			$l[$i] = fgets($file,1000);
			list($var, $threst) = explode("<-", $l[$i]);
			$var=trim($var);
			if( $var == "query"){$l[$i]="query<-\"$query\"\n";}
			if( $var == "pid"){$l[$i]="pid<-\"$pid\"\n";}
			if( $var == "dbase"){$l[$i]="dbase<-\"".$_POST['database_id']."\"\n";}
			if( $var == "run_name1"){$l[$i]="run_name1<-\"$project_id\"\n";}	
			if( $var == "run_name2"){$l[$i]="run_name2<-\"".$_POST['project_id2']."\"\n";}
			if( $var == "run_name3"){$l[$i]="run_name3<-\"".$_POST['project_id3']."\"\n";}
			if( $var == "run_name4"){$l[$i]="run_name4<-\"".$_POST['project_id4']."\"\n";}
			if( $var == "run_name5"){$l[$i]="run_name5<-\"".$_POST['project_id5']."\"\n";}
			if( $var == "run_name6"){$l[$i]="run_name6<-\"".$_POST['project_id6']."\"\n";}
                        if( $var == "run_name7"){$l[$i]="run_name7<-\"".$_POST['project_id7']."\"\n";}
#                        if( $var == "species"){$l[$i]=  "species<-\"$species\"\n";      }
                        if( $var == "species_in"){$l[$i]="species_in<-$species_ri\n";} 
                        if( $var == "inc_all"){$l[$i]= "inc_all<-\"".$_POST['inc_all']."\"\n"; }
                        if( $var == "inc_metar"){$l[$i]= "inc_metar<-\"".$_POST['inc_metar']."\"\n"; }
                        if( $var == "inc_airnow"){$l[$i]= "inc_airnow<-\"".$_POST['inc_airnow']."\"\n"; }
                        if( $var == "inc_asos"){$l[$i]= "inc_asos<-\"".$_POST['inc_asos']."\"\n"; }
                        if( $var == "inc_maritime"){$l[$i]= "inc_maritime<-\"".$_POST['inc_maritime']."\"\n"; }
                        if( $var == "inc_sao"){$l[$i]= "inc_sao<-\"".$_POST['inc_sao']."\"\n"; }
                        if( $var == "inc_other_mtr"){$l[$i]= "inc_other_mtr<-\"".$_POST['inc_other_mtr']."\"\n"; }
			if( $var == "dates"){$l[$i]="dates<-\"$date_title\"\n";					}
			if( $var == "averaging"){$l[$i]="averaging<-\"".$_POST['data_averaging']."\"\n";	}
			if( $var == "site"){$l[$i]="site<-\"$stat_id\"\n";}
			if( $var == "state"){$l[$i]="state<-$state\n";				}
                        if( $var == "rpo"){$l[$i]="rpo<-$rpo\n";        }
                        if( $var == "pca"){$l[$i]="pca<-$pca\n";        }
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
                        if( $var == "greyscale"){$l[$i]="greyscale<- \"".$_POST['greyscale']."\"\n";}
                        if( $var == "inc_counties"){$l[$i]="inc_counties<- \"".$_POST['inc_counties']."\"\n";}
                        if( $var == "obs_per_day_limit"){$l[$i]="obs_per_day_limit<-".$_POST['obs_per_day_limit']."\n";}
                        if( $var == "figdir"){$l[$i]="figdir<-\"/var/www/html/cache\"\n";}
                        if( $var == "map_type"){$l[$i]="map_type<-".$_POST['map_type']."\n";}
                        if( $var == "img_height"){$l[$i]="img_height<-$img_height\n";}
                        if( $var == "img_width"){$l[$i]="img_width<-$img_width\n";}
                        $i=$i+1;
		}
//		echo("GOT HERE prior to close temporary R");
		fclose($file);
//		echo("GOT HERE write temporary R script");
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Write a temporary R script for dynamic execution
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	$f = fopen("/var/www/html/cache/run_info_met.r", "w+");
	$nl=$i;
	$i=0;
	while ($i<$nl) {
		fwrite($f, $l[$i]);
		$i=$i+1;
	}
	fclose($f);
/////////////////////////////////////////////////////////////////
//	echo("GOT HERE write temp shell script");

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Write a temporary shell script for dynamic execution
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$l[0]="#!/bin/csh -f\n";
$l[1]="cd /var/www/html/cache \n";
$l[2]="setenv PATH /usr/bin \n";
$l[3]="setenv R_LIBS /usr/local/lib/R/site-library \n";
$l[4]="setenv AMETBASE $amet_base \n";
$l[5]="setenv AMETRINPUT /var/www/html/cache/run_info_met.r \n";
$l[6]="setenv AMET_OUT /var/www/html/cache \n";
$l[7]="setenv MYSQL_CONFIG /var/www/html/amet-config.R \n";
$l[8]="setenv HOME /var/www/html/cache \n";
$l[9]="$R_exe --no-save --verbose /home/ubuntu/AMET_v16/R_analysis_code/".$_POST['run_program']." \n";
if ($_POST['run_program'] == "AQ_Overlay_File.R") {             // need to include command to run the script generated by the R code
   $l[10]="./runOBS.sh \n";              // include in run script command to execute the script generated by the R code
   $nl=11;
}
else {
   $nl=10;
}
$f = fopen("/var/www/html/cache/run_script_met.csh", "w+");
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
// echo("GOT HERE execute run script");
//`chmod +x $cache_amet/run_script.csh`;
        `chmod 777 /var/www/html/cache/run_info_met.r`;
        `chmod 777 /var/www/html/cache/run_script_met.csh`;
`/var/www/html/cache/run_script_met.csh > /var/www/html/cache/web_query.txt`;
	//`/run_script_met.csh`;

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
echo "         </td>";
echo "          <td> ";

if ($_POST['run_program'] == "AQ_Stats_Plots_leaflet_network.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats.csv"))  {
      echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats.csv\" >LINK to CSV Domain Wide Statistics File </a>" ;
      echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_sites_stats.csv\" >LINK to CSV Site Specific Statistics File </a><p>" ;
      echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_data.csv\" >LINK to Raw Query Data (CSV)</a><p>" ;
echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plots.zip\" >LINK to Zip File Containing All Files (.zip)</a><p>" ;

   }
}

echo "<table width=\"900\" border=\"0\">";// align=\"center\">";
echo "          <td> ";
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
             else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting stats plots.";
     }
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
             else {echo "PNG from HTML not requested. Check flag to create static png files from html files.";
     }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Stats_Plots_leaflet.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats.csv"))  {
      echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats.csv\" >LINK to CSV Domain Wide Statistics File </a>" ;
      echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_sites_stats.csv\" >LINK to CSV Site Specific Statistics File </a><p>" ;
      echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_data.csv\" >LINK to Raw Query Data (CSV)</a><p>" ;
echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plots.zip\" >LINK to Zip File Containing All Files (.zip)</a><p>" ;

   }
}

echo "<table width=\"900\" border=\"0\">";// align=\"center\">";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Stats_Plots_leaflet.R") {
     if(file_exists("$cache_amet/${project_id}_${species}_${pid}_stats_plot.html"))       {
             echo "        <tr align=\"center\">  ";
             echo " <p align=\"center\">";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_stats_plot.html\">All Stats (html)</a> ";
     }
             else {echo "PNG from HTML not requested. Check flag to create static png files from html files.";
     }
}
echo "         </td>";
echo "          <td> ";

if ($_POST['run_program'] == "AQ_Stats.R") {
   if(file_exists("$cache_amet/${project_id}_${pid}_stats.zip"))      {
      echo " <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stats.zip\" >Zip File Containing All Files (.zip)</a><p>" ;
     }
     else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting stats plots."; 

   }
}
echo "         </td>";
echo "          <td> ";   

if ($_POST['run_program'] == "AQ_Raw_Data.R") {
//      if(file_exists("$cache_amet/${project_id}_${pid}_rawdata.csv"))	{
   if(glob("$cache_amet/${project_id}_${pid}_rawdata.csv"))	{
     echo " <p align=\"center\">";
    echo "	<a href=\"$cache_amet2/${project_id}_${pid}_rawdata.csv\">Raw Network Data (CSV)</a> ";
  }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered creating raw data file."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot.pdf"))	{
     echo " <p align=\"center\">";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
//         echo "         </td>";
//        echo "          <td> ";
    echo "&nbsp;";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.png\">Mod/Ob Scatterplot (PNG)</a> ";
//		 echo "         </td>";
//         echo "          <td> ";
//		 echo "&nbsp;";
              echo "<p align=\"center\">";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.csv\">Scatterplot Data (CSV)</a> ";
  }   
   else {
      echo "An error was encountered plotting Scatter Plot. See log file below.";
      echo "<p><a href=\"$cache_amet2/web_query.txt\">Query_Log.txt</a>"; }
}
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_multisim_plotly.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_multi.html"))    {
          echo " <p align=\"center\">";
          echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_multi.html\">Mod/Ob Scatterplot (HTML)</a> ";
          echo "&nbsp;";
          echo "<p align=\"center\">";
          echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_multi.csv\">Scatterplot Data (CSV)</a> ";
       }
   else {
      echo "An error was encountered plotting Scatter Plot. See log file below.";
      echo "<p><a href=\"$cache_amet2/web_query.txt\">Query_Log.txt</a>"; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_single.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_single.pdf"))	{
     echo " <p align=\"center\">";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_single.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
//         echo "         </td>";
//         echo "          <td> ";
      echo "&nbsp;";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_single.png\">Mod/Ob Scatterplot (PNG)</a> ";
//		 echo "         </td>";
//         echo "          <td> ";
        echo "<p align=\"center\">";
        echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_single.csv\">Scatterplot Data (CSV)</a> ";
  }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Scatter Plot"; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_density.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_density.pdf"))	{
     echo " <p align=\"center\">";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
//         echo "         </td>";
//        echo "          <td> ";
    echo "&nbsp;";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density.png\">Mod/Ob Scatterplot (PNG)</a> ";
//		 echo "         </td>";
//         echo "          <td> ";
              echo "<p align=\"center\">";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density.csv\">Scatterplot Data (CSV)</a> ";
  }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Density Scatter Plot"; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_density_ggplot.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_density_ggplot.pdf"))    {
          echo " <p align=\"center\">";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density_ggplot.pdf\">Mod/Ob Scatterplot (PDF)</a> ";
//         echo "         </td>";
//        echo "          <td> ";
              echo "&nbsp;";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density_ggplot.png\">Mod/Ob Scatterplot (PNG)</a> ";
//               echo "         </td>";
//         echo "          <td> ";
              echo "<p align=\"center\">";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_density_ggplot.csv\">Scatterplot Data (CSV)</a> ";
       }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Density Scatter Plot"; }
}
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_mtom.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_mtom.pdf"))	{
     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom.pdf\">Model/Model Scatterplot (PDF)</a> ";
    echo "         </td>";
      echo "          <td> ";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom.png\">Model/Model Scatterplot (PNG)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Model-Model Scatter Plot";   }
}
echo "         </td>";
echo "         <td>"; 
if ($_POST['run_program'] == "AQ_Scatterplot_mtom_density.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_mtom_density.pdf"))       {
          echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom_density.pdf\">MtoM Density Scatterplot (PDF)</a> ";
              echo "         </td>";
      echo "          <td> ";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_mtom_density.png\">MtoM Density Scatterplot (PNG)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Model-Model Scatter Plot";   }
}
echo "         </td>";
echo "         <td>"; 
if ($_POST['run_program'] == "AQ_Scatterplot_percentiles.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_percentiles.pdf"))	{
     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_percentiles.pdf\">Percentile Scatterplot (PDF)</a> ";
    echo "         </td>";
      echo "          <td> ";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_percentiles.png\">Percentile Scatterplot (PNG)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting percentile scatter plot"; }
}
echo "         </td>";
echo "         <td>"; 
if ($_POST['run_program'] == "AQ_Scatterplot_soil.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_soil.pdf")) {
          echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_soil.pdf\">Model/Ob Soil Scatterplot (PDF)</a> ";
              echo "         </td>";
      echo "          <td> ";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_soil.png\">Model/Ob Soil Scatterplot (PNG)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting soil scatter plot"; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_skill.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_skill.pdf"))  {
              echo " <p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_skill.pdf\">Skill Plot (PDF)</a> ";
              echo "&nbsp;&nbsp;";
              echo " <a align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_skill.png\">Skill Plot (PNG)</a> ";
              echo "&nbsp;&nbsp;";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_skill.csv\">Skill Plot Data (CSV)</a> ";
       }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting skill scatter plot."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_bins.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_bins.pdf"))   {
      echo "     <p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.png\">Mean Bias Plot (PNG)</a> ";
      echo "&nbsp;&nbsp;";
      echo " <a align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.pdf\">Mean Bias Plot (PDF)</a> ";
      echo "&nbsp;&nbsp;";
      echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.csv\">Raw Data File (CSV)</a> ";
   }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting binned scatter plots."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_bins_plotly.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot_bins.html"))   {
      echo "     <p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.html\">Binned Plot (HTML)</a> ";
      echo "&nbsp;&nbsp;";
      echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot_bins.csv\">Raw Data File (CSV)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting binned scatter plots."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Scatterplot_multi.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_scatterplot.pdf"))    {
      echo " <p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.pdf\">Scatterplot (PDF)</a> ";
      echo "&nbsp;&nbsp;";
      echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.png\">Scatterplot (PNG)</a> ";
      echo "&nbsp;&nbsp;";
      echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_scatterplot.csv\">Scatterplot Data (CSV)</a> ";
   }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting multi scatter plot."; }
}
echo "         </td>";
echo "         <td>"; 
if ($_POST['run_program'] == "AQ_Soccerplot.R") {
   if(file_exists("$cache_amet/${project_id}_${pid}_soccerplot.pdf"))	{
     echo "	<a href=\"$cache_amet2/${project_id}_${pid}_soccerplot.png\">Soccergoal Plot (PNG)</a> ";
    echo "&nbsp;&nbsp;";
    echo " <a href=\"$cache_amet2/${project_id}_${pid}_soccerplot.pdf\">Soccergoal Plot (PDF)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Soccergoal Plot"; }
}
echo "         </td>";
echo "         <td>";
if ($_POST['run_program'] == "AQ_Soccerplot_plotly.R") {
   if(file_exists("$cache_amet/${project_id}_${pid}_soccerplot_norm.html"))        {
          echo "     <a href=\"$cache_amet2/${project_id}_${pid}_soccerplot_norm.html\">NMB/NME Soccergoal Plot (HTML)</a> ";
              echo "&nbsp;&nbsp;";
              echo " <a href=\"$cache_amet2/${project_id}_${pid}_soccerplot_frac.html\">FB/FE Soccergoal Plot (HTML)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Soccergoal Plot"; }
}
echo "         </td>";
echo "         <td>";  
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
echo "         </td>";
echo "         <td>";  
if ($_POST['run_program'] == "AQ_Timeseries.R") {
   echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
   echo "<center>";
   if(file_exists("/var/www/html/cache/${project_id}_${species}_${pid}_timeseries.png"))	{
   echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.png\"> Time Series (PNG)</a> ";
   echo "&nbsp;&nbsp;";
   echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.pdf\"> Time Series (PDF)</a> ";
   echo "<p>";
   echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.csv\">Timeseries Data (CSV)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plot"; }
}
echo "         </td>";
echo "</center>";
echo "         <td>";
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
echo "         </td>";
echo "</center>";
echo "         <td>"; 
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
echo "         </td>";
echo "</center>";
echo "         <td>";
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
echo "         </td>";
echo "</center>";
echo "         <td>";
if ($_POST['run_program'] == "AQ_Timeseries_plotly_bysite.R") {
   echo "<center><strong>AMET Timeseries Plots</strong></center><p>";
   echo "<center>";
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_timeseries.zip"))     {
   echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries.zip\"> Time Series (zip)</a> ";
   echo "&nbsp;&nbsp;";
   echo "    <a href=\"$cache_amet2/${project_id}_${species}_${pid}_timeseries_csv.zip\">Timeseries Data (zip)</a> ";
   }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting timeseries plot"; }
}
echo "         </td>";
echo "</center>";
echo "         <td>";
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
echo "         </td>";
echo "</center>";
echo "         <td>";
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
echo "         </td>";
echo "</center>";
echo "         <td>"; 
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
echo "         </td>";
echo "</center>";
echo "         <td>"; 
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
echo "         </td>";
echo "</center>";
echo "         <td>";
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
echo "         </td>";
echo "</center>";
echo "         <td>"; 
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Boxplot_MDA8.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_MDA8.pdf"))	{
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_MDA8.pdf\">MDA8 Boxplot (PDF)</a> ";
    echo "         </td>";
      echo "          <td> ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_MDA8.png\">MDA8 Boxplot (PNG)</a> ";
  }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting MDA8 boxplot."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Boxplot.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_all.pdf"))	{
     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_all.png\">Boxplot (PNG)</a> ";
      echo "&nbsp;&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_all.pdf\">Boxplot (PDF)</a> ";
    echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias.png\">Bias Boxplot (PNG)</a> ";
      echo "&nbsp;&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias.pdf\">Bias Boxplot (PDF)</a> ";
    echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_norm_bias.png\">Normalized Bias Boxplot (PNG)</a> ";
      echo "&nbsp;&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_norm_bias.pdf\">Normalized Bias Boxplot (PDF)</a> ";
  }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting box plot."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Boxplot_ggplot.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_ggplot.pdf"))    {
          echo "     <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_ggplot.png\">Boxplot (PNG)</a> ";
      echo "&nbsp;&nbsp;";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_ggplot.pdf\">Boxplot (PDF)</a> ";
              echo " <p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias_ggplot.png\">Bias Boxplot (PNG)</a> ";
      echo "&nbsp;&nbsp;";
              echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_bias_ggplot.pdf\">Bias Boxplot (PDF)</a> ";
       }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting box plot."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Boxplot_DofW.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_boxplot_dow.pdf"))	{
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_dow.pdf\">Day of Week Boxplot (PDF)</a> ";
    echo "         </td>";
      echo "          <td> ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_boxplot_dow.png\">Day of Week Boxplot (PNG)</a> ";
  }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting day of week boxplot."; }
}
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Stacked_Barplot_AE6_plotly.R") {
   if(file_exists("$cache_amet/${project_id}_${pid}_stacked_barplot_AE6.html"))       {
          echo "     <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6.html\">Stacked Barplot (HTML)</a> ";
          echo "&nbsp;&nbsp;";
          echo " <a href=\"$cache_amet2/${project_id}_${pid}_stacked_barplot_AE6_data.csv\">Barplot Data (CSV)</a> ";
       }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting bar plot."; }
}
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Overlay_File.R") {
   if(file_exists("$cache_amet/${project_id}_${pid}_overlay.ncf"))	{
     echo "	<a href=\"$cache_amet2/${project_id}_${pid}_overlay.ncf\">PAVE Obs Overlay File (IOAPI file)</a> ";
  }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered creating overlay file."; }
}
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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

echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";

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
echo "         </td>";
echo "          <td> ";

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
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Plot_Spatial_MtoM.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.png"))	{
     echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.png\">MtoM Diff Avg Plot (PNG)</a> ";
    echo "&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_max.png\">MtoM Diff Max Plot (PNG)</a> ";
    echo "&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_min.png\">MtoM Diff Min Plot (PNG)</a> ";
      echo "<p><a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_avg.pdf\">MtoM Diff Avg Plot (PDF)</a> ";
    echo "&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_max.pdf\">MtoM Diff Max Plot (PDF)</a> ";
    echo "&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spatialplot_mtom_diff_min.pdf\">MtoM Diff Min Plot (PDF)</a> ";
  }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/model spatial diff plot."; }
}
echo "         </td>";
echo "          <td> ";
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
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/model spatial diff plot."; }
}
echo "         </td>";
echo "          <td> ";
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
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting model/model spatial diff plot."; }
}
echo "         </td>";
echo "          <td> ";
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
echo "         </td>";
echo "          <td> ";
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
             else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots.";
     }
}
echo "         </td>";
echo "          <td> ";
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
             else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots.";
     }
}
echo "         </td>";
echo "          <td> ";
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
             else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots.";
     }
}
echo "         </td>";
echo "          <td> ";
if (($_POST['run_program'] == "AQ_Kellyplot_region_plotly.R") || ($_POST['run_program'] == "AQ_Kellyplot_region_plotly.R")) {
     if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_region_NMB.html"))       {
             echo "        <tr align=\"center\">  ";
             echo " <p align=\"center\">";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NMB.html\">NMB (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_NME.html\">NME (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_MB.html\">MB (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_ME.html\">ME (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_RMSE.html\">RMSE (HTML)</a>";
                     echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_region_Corr.html\">Corr (HTML)</a>";
             echo "        </tr>";
             echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data_region.csv\">Kelly Plot Stats (CSV)</a> ";
     }
             else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots.";
     }
}
echo "         </td>";
echo "          <td> ";
if (($_POST['run_program'] == "AQ_Kellyplot_season.R") || ($_POST['run_program'] == "AQ_Kellyplot_season.R")) {
     if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_season_NMB.png"))       {
             echo "        <tr align=\"center\">  ";
             echo " <p align=\"center\">";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NMB.png\">NMB (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NME.png\">NME (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_MB.png\">MB (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_ME.png\">ME (PNG)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_RMSE.png\">RMSE (PNG)</a>";
                     echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_Corr.png\">Corr (PNG)</a>";
         echo "      <p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NMB.pdf\">NMB (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NME.pdf\">NME (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_MB.pdf\">MB (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_ME.pdf\">ME (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_FB.pdf\">FB (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_FE.pdf\">FE (PDF)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_RMSE.pdf\">RMSE (PDF)</a> ";
                     echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_Corr.pdf\">Corr (PDF)</a> ";
             echo "        </tr>";
             echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data_season.csv\">Kelly Plot Stats (CSV)</a> ";
     }
             else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots.";
     }
}
echo "         </td>";
echo "          <td> ";
if (($_POST['run_program'] == "AQ_Kellyplot_season_plotly.R") || ($_POST['run_program'] == "AQ_Kellyplot_season_plotly.R")) {
     if(file_exists("$cache_amet/${project_id}_${species}_${pid}_Kellyplot_season_NMB.html"))       {
             echo "        <tr align=\"center\">  ";
             echo " <p align=\"center\">";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NMB.html\">NMB (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_NME.html\">NME (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_MB.html\">MB (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_ME.html\">ME (HTML)</a> ";
             echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_RMSE.html\">RMSE (HTML)</a>";
                     echo "&nbsp;&nbsp;";
             echo "  <a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_season_Corr.html\">Corr (HTML)</a>";
             echo "        </tr>";
             echo "<p align=\"center\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_Kellyplot_stats_data_season.csv\">Kelly Plot Stats (CSV)</a> ";
     }
             else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting Kelly plots.";
     }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Histogram.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_histogram.pdf"))	{
     echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram.png\">Histogram Plot(PNG)</a> ";
       echo "&nbsp;&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_bias.png\">Histogram Bias Plot (PNG)</a> ";
    echo "	<p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram.pdf\">Histogram Plot(PDF)</a> ";
       echo "&nbsp;&nbsp;";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram_bias.pdf\">Histogram Bias Plot (PDF)</a> ";
  }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting histogram plot."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Histogram_plotly.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_histogram.html")) {
     echo "     <p align=\"left\"><a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram.html\">Histogram Plot (HTML)</a> ";
       echo "&nbsp;&nbsp;";
    echo "      <a href=\"$cache_amet2/${project_id}_${species}_${pid}_histogram.csv\">Histogram Data (CSV)</a> ";
  }
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting histogram plot."; }
}
echo "         </td>";
echo "          <td> ";
   if ($_POST['run_program'] == "AQ_Temporal_Plots.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_ecdf.pdf"))	{
     echo "ECDF Plot ";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_ecdf.png\">(PNG)</a>";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_ecdf.pdf\"> (PDF)</a>";
    echo "<p>Q-Q Plot ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_qq.png\">(PNG)</a> ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_qq.pdf\"> (PDF)</a> ";
    echo "<p>Taylor Plot ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_taylor.png\">(PNG)</a> ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_taylor.pdf\"> (PDF)</a> ";
    echo "<p>Periodogram Plot ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_periodogram.png\">(PNG)</a> ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_periodogram.pdf\"> (PDF)</a> ";	     
  }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting temporal plots."; }
}
echo "         </td>";
echo "          <td> ";
if ($_POST['run_program'] == "AQ_Spectral_Analysis.R") {
   if(file_exists("$cache_amet/${project_id}_${species}_${pid}_spectrum.pdf"))	{
     echo "Spectrum Plot ";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spectrum.png\">(PNG)</a>";
    echo " <a href=\"$cache_amet2/${project_id}_${species}_${pid}_spectrum.pdf\"> (PDF)</a>";
    echo "<p>Individual Site Spectrum Plots ";
    echo "	<a href=\"$cache_amet2/${project_id}_${species}_${pid}_spectrum_all.pdf\"> (PDF)</a> ";	     
  }   
   else {echo "<a href=\"$cache_amet2/web_query.txt\">query_output.txt</a> An error was encountered plotting spectrum plots."; }
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

//                      echo " <form name=shell method=post action=querygen_met.php > ";
                        echo " <form target=_blank name=shell method=post action=querygen_met.php > ";
                ?>

                    <div align="center">
                      <h2>Database Specification</h2>
                        <a name="station"></a>
                        <?php
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
//      Connect to Database via user supplied login and pass
         ///////////////////////////////////////////////
         include ( 'amet-www-config.php');
         ///////////////////////////////////////////////
                //$dbase="test_avgAQ";
//              $link = mysql_connect($mysql_server,$root_login,$root_pass) or die("Connect Error: ".mysql_error());
                //$mysqli = mysqli_init();
                //$mysqli->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
                //$mysqli->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/pki_epa_gov_chain.pem", NULL, NULL);
//              //$mysqli->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/epa_pki.crt", NULL, NULL);
                //$mysqli->real_connect($mysql_server,$root_login,$root_pass);
		$databaseHost = 'localhost';
                $databaseUsername = 'ametsecure';
                $databasePassword = 'ametpwd';

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
//                         die("Couldn't connect to MySQL");
                }
                $result = $mysqli->query("SHOW DATABASES;");
                $mysqli->close();
                if (! $result) {
                   die("Select DB Error: ".mysqli_error());
                }
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
// Check database logs for the existance of the requested project id
                $i=0;
                echo "<label for=\"database_id\">Choose a Database</label><br><select name=database_id id=database_id onChange=\"MM_jumpMenu('parent',this,0)\"> ";
        echo " <option value= > Choose a Database  </option> ";


                if ($row = mysqli_fetch_array($result)) {
                do {
                        $did=$row['Database'];
                 echo $row['Database'];
                                $select="";
                if ($did == $_GET['database_id']) {
                           $select="SELECTED";
                        }
                    $data_str[$i]="Database ID: ".$row["Database"];
             echo " <option value=querygen_met.php?database_id=".$row["Database"]."&stat_id=".$_GET['stat_id']."&stat_file=".$_GET['stat_file']."  $select> $data_str[$i]  </option> ";
//                       $proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[5];
//            echo " <option value=querygen_aq.php?project_id=".$row["proj_code"]."&stat_id=".$_GET['stat_id']."&stat_file=".$_GET['stat_file']."  $select> $proj_str[$i]  </option> ";
                }
                while($row = mysqli_fetch_assoc($result));

                }
                echo "</select> ";
                //else{

                //      print "this is a test<br>";
                //      die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                //}
         echo " <option value= ></option> </select> ";
//          $_SESSION['database_id']=$_GET['database_id'];
//        $statid               =$_GET['stat_id'];
//              $stat_file      =$_GET['stat_file'];
                $database_id    =$_GET['database_id'];

//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
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
		$link = mysqli_connect($databaseHost, $databaseUsername, $databasePassword) or die("Connect Error: ".mysql_error());
              //  $link = mysqli_init();
                  $link->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);
                //$link->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
               // $link->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/pki_epa_gov_chain.pem", NULL, NULL);
                //$link->ssl_set(NULL, NULL, "/etc/pki/ca-trust/source/anchors/epa_pki.crt", NULL, NULL);
                //$link->real_connect($mysql_server,$root_login,$root_pass);
                if (! $link)
                die("Couldn't connect to MySQL");
		mysqli_select_db($link, $database_id);
//		or die("Select DB Error: ".mysql_error());
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://
// Check database logs for the existance of the requested project id
		$result = $link->query("SELECT proj_code,user_id,model,email,description,DATE_FORMAT(proj_date,'%m/%d/%Y'),proj_time,DATE_FORMAT(min_date,'%m/%d/%Y'),DATE_FORMAT(max_date,'%m/%d/%Y') from project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
//		$result2 = $link->query("SELECT DATE_FORMAT(min(ob_date),'%m/%d/%Y'),DATE_FORMAT(max(ob_date),'%m/%d/%Y') from $proj_code._surface) or die("There was an error accessing the database ".mysql_error());
		$i=0;
		    echo "<label for=\"project_id\">Choose a Project</label><br><select name=project_id id=project_id onChange=\"MM_jumpMenu('parent',this,0)\"> ";
            
		echo " <option value= > Choose a Project </option> ";
		if ($row = mysqli_fetch_array($result)) {
		do {
			$pid=$row["proj_code"];
//			$result2 = $link->query("SELECT DATE_FORMAT(min(ob_date),'%m/%d/%Y'),DATE_FORMAT(max(ob_date),'%m/%d/%Y') from $proj_code._surface") or die("There was an error accessing the database ".mysql_error());                       	
//			$row2 = mysqli_fetch_array($result2);
				$select="";
			if ($pid == $_GET['project_id']) {
				
				$a1=$row["proj_code"];
				$a2=$row["user_id"];
				$a3=$row["model"];
				$a4=$row["email"];
				$a5=$row["description"];
				$a6=$row[5];
				$a7=$row["proj_time"];
//				$result2 = $link->query("SELECT DATE_FORMAT(min(ob_date),'%m/%d/%Y'),DATE_FORMAT(max(ob_date),'%m/%d/%Y') from $proj_code._surface") or die("There was an error accessing the database ".mysql_error());
//				$row2 = mysqli_fetch_array($result2);
//				$a8=$row[7];
//				$a9=$row[8];
				$a8=$row2[1];
				$a9=$row2[2];
				$select="SELECTED";
				//<!-- The method below to retrieve the min and max dates is not being used because it is too slow. -->
				// Determine start and end dates of the data by querying the appropriate database		  
				//   $result2=mysql_query("SELECT min(ob_dates),max(ob_datee) from ".$a1."");
				//   $row2=mysql_fetch_array($result2);
				//   $a8=$row2["min(ob_dates)"];
				//   $a9=$row2["max(ob_datee)"];
			}	
			$proj_str[$i]="Project ID: ".$row["proj_code"].", User ID: ".$row["user_id"].", Setup Date: ".$row[5];
             echo " <option value=querygen_met.php?database_id=$database_id&project_id=".$row["proj_code"]."&stat_id=".$_GET['stat_id']."&stat_file=".$_GET['stat_file']."  $select> $proj_str[$i]  </option> ";

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
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
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
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
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
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
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
//       mysql_select_db($database_id , $link)
//		or die("Select DB Error: ".mysql_error());
//////////////////////////////////////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Check database logs for the existance of the requested project id
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
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
		$result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
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
		else{
		
			
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
                $result = $link->query("SELECT proj_code, user_id, DATE_FORMAT(proj_date,'%m/%d/%Y'), proj_time, description from project_log ORDER BY proj_code")or die("There was an error accessing the database ".mysql_error());
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
                else{


                        die("No project were found in the database, this is likely a connection error. Contact AMET system adminsitrator <br>".mysql_error());
                }
                  echo "</select> ";
//                $link->close();
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
                      <td width="396"> <div align="center"> 
                          <p align="left"><span class="style5"><strong><font face="Arial, Helvetica, sans-serif">State</font></strong></span><br>
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
                              <br>
                          </p>
                              </div></td>
                      <td width="242"> <div align="left">
                        <p>
                            <label for="stat_id">Station ID</label><input name="stat_id" type="text" id="stat_id" <?php echo "value=\"".$_GET['stat_id']."\" ";?>>
                            <br>
                          <font face="Arial, Helvetica, sans-serif">
                          Enter a site ID above. You can select multiple sites by using a comma between sites (e.g., KBXK,KGYR,KLUF)
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
                            
                    </tr>
                    <tr align="center" valign="top" bgcolor="#CCCCCC">
                      <td width="396" height="250"><div align="left">
                        <span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Met Observation Networks</strong></font></span><font face="Arial, Helvetica, sans-serif"><strong><br>
                        </strong>Choose MET monitoring networks to use.                        </font></p>
                        </div>
                        <div align="left">
                          <p><font face="Arial, Helvetica, sans-serif">
                          <input name="inc_all" type="checkbox" id="inc_all" value="y" unchecked>
                          <label for=inc_all><strong>All</strong></label>
                          </font><br>
                          <font face="Arial, Helvetica, sans-serif">
                          <input name="inc_metar" type="checkbox" id="inc_metar" value="y" checked>
                          <label for=inc_metar><strong>METAR</strong></label></font><br>
                          <input name="inc_airnow" type="checkbox" id="inc_airnow" value="y" unchecked>
                          <label for=inc_airnow><strong>AIRNOW</strong></label></font><br>
                          <input name="inc_asos" type="checkbox" id="inc_asos" value="y" unchecked>
                          <label for=inc_asos><strong>ASOS</strong></label></font><br>
                          <font face="Arial, Helvetica, sans-serif">
                          <input name="inc_maritime" type="checkbox" id="inc_maritime" value="y" unchecked>
                          <label for=inc_maritime><strong>Maritime</strong></label></font><br>
                          <font face="Arial, Helvetica, sans-serif">
                          <input name="inc_sao" type="checkbox" id="inc_sao" value="y" unchecked>
                          <label for=inc_sao><strong>SAO</strong></label></font><br>
                          <font face="Arial, Helvetica, sans-serif">
                          <input name="inc_other_mtr" type="checkbox" id="inc_other_mtr" value="y" unchecked>
                          <label for=inc_other_mtr><strong>Other-Mtr</strong></label></font></p>
                          <p>&nbsp;</p>
                        </div></td>
                      <td width="242"><div align="left">
                        <div align="left">
                        <p><span class="style5"><font face="Arial, Helvetica, sans-serif"><strong>Met Variable  to Use </strong></font></span><font face="Arial, Helvetica, sans-serif"><strong><br>
                            <br>
                          </strong><br>
                          <label for="met_species">Choose a Species</label><br><select name="met_species" id="met_species">
                            <option value=""></option>
                            <optgroup label="Met Variable">
                            <option value="T" selected>T (2m)</option>
                            <option value="PCP1H">Hourly Precip</option>
                            <option value="WVMR">Water Vapor Mixing Ratio</option>
                            <option value="Wind_Speed">Wind Speed</option>
                            <option value="SRAD">Solar Radiation</option>
                            <option value="PSFC">Surface Pressure</option>
                          </select>
                          <br>
                          </font></p>
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
	$project_surface=$project_id."_surface";
	$result = $link->query("SELECT DATE_FORMAT(min(ob_date),'%m/%d/%Y'), DATE_FORMAT(max(ob_date),'%m/%d/%Y') from $project_surface") or die("There was an error accessing the database ".mysql_error());
        $row = mysqli_fetch_array($result);
        $a8=$row[0];
	$a9=$row[1];
	$dm1=$a8;		// set start date
	$dm2=$a9;		// set end date
	$miny=$dm1[6].$dm1[7].$dm1[8].$dm1[9];
	$maxy=$dm2[6].$dm2[7].$dm2[8].$dm2[9];
        echo "<label for=\"ys\">Year</label><br><select name=\"ys\" id=\"ys\" >";
        echo "  <option SELECTED></option>";    
	$minyear=1990;
	$year=2030;	
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

<br>
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
        $minm=sprintf("%02d",1);
        $maxm=sprintf("%02d",12);
	//list($yy1,$yy2,$yy3,$yy4,$mm1,$mm2,$dd1,$dd2) = split('[]', $_POST['max_date']);
	echo "<label for=\"ms\">Month</label><br><select name=\"ms\" id=\"ms\" >";
        echo "  <option SELECTED></option>";
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
<br>
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
<br>
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
        echo "  <option SELECTED></option>";
	$miny=1990;
	$year=2024;
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
  <br>
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
        $minm=sprintf("%02d",1);
        $maxm=sprintf("%02d",12);
	//list($yy1,$yy2,$yy3,$yy4,$mm1,$mm2,$dd1,$dd2) = split('[]', $_POST['max_date']);
	echo "<label for=\"me\">Month</label><br><select name=\"me\" id=\"me\" >";
        echo "  <option SELECTED></option>";
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
<br>
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

<br>
</tr>
</table>
</div></td>
</tr>
<tr align="center" valign="top" bgcolor="#CCCCCC">
  <td>    <p align="left" class="style5"><span class="style5 style7"><font face="Arial, Helvetica, sans-serif"><strong>Set Hour Range </strong></font></span></p>
    <div align="left"><span class="style5 style7"><strong><font face="Arial, Helvetica, sans-serif"><span class="style10"></span>              
    <label for="start_hour">Start Hour </label><select name="start_hour" id="start_hour">
		<option ></option>
                <option value="00:00:00" selected>12AM</option>
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
                &nbsp;&nbsp;&nbsp;<label for="end_hour">End Hour </label><select name="end_hour" id="end_hour">
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
                <option value="23:00:00" selected>11PM</option>
  </select>
  <br>
      </font></strong></span>    </div>
    <div align="left"><font face="Arial, Helvetica, sans-serif">Use this option to isolate a range of hours to include in the analysis. Hours are in LST. The default is to include all hours of the day in the analysis. </font></div>

  <span class="style5 style7"><strong><font face="Arial, Helvetica, sans-serif">    </font></strong></span></td>
  <td><div align="left">
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
<option value="y" unselected>yes</option>
<option value="n">no</option>
</select>
<br>
Select "yes" to remove negative values from the analysis. All values less than zero are removed from the analysis. Obviously this can be a problem when plotting species with acceptable negative values (e.g. temperature).</font><br>

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
Enter a value above to set the x and y axes limits for several plots (scatter, box, stacked bar, time series, etc). The density values only apply to the density scatter plot. Leave the value blank to use the value calculated by the script. The skill plot max limit only applies to the skill scatterplot.</font></p>
</div></td>
</tr>

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
 <label for=network1_color>Obs Color 1: </label><select name="network1_color" id="network1_color">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange3>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60 selected>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>

<label for=network1_color2>Color 2: </label><select name="network1_color2" id="network1_color2">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange3>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60 selected>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
  </font><font face="Arial, Helvetica, sans-serif"></font><font face="Arial, Helvetica, sans-serif">
  <label for=network2_color>Mod1 Color 1: </label><select name="network2_color" id="network2_color">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2 selected>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network2_color2>Color 2: </label><select name="network2_color2" id="network2_color2">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2 selected>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<br>
<label for=network3_color>Mod2 Color 1: </label><select name="network3_color" id="network3_color">
  <option value=blue selected>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><font face="Arial, Helvetica, sans-serif">
<label for=network3_color2> Color 2: </label><select name="network3_color2" id="network3_color2">
  <option value=blue selected>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network4_color>Mod3 Color 1: </label><select name="network4_color" id="network4_color">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4 selected>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><font face="Arial, Helvetica, sans-serif">
<label for=network4_color2> Color 2: </label><select name="network4_color2" id="network4_color2">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4 selected>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network5_color>Mod4 Color 1: </label><select name="network5_color" id="network5_color">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3 selected>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network5_color2>Color 2: </label><select name="network5_color2" id="network5_color2">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3 selected>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network6_color>Mod5 Color 1: </label><select name="network6_color" id="network6_color">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2 selected>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network6_color2> Color 2: </label><select name="network6_color2" id="network6_color2">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2 selected>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network7_color>Mod6 Color 1: </label><select name="network7_color" id="network7_color">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown selected>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network7_color2> Color 2: </label><select name="network7_color2" id="network7_color2">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown selected>Brown</option>
  <option value=purple>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
</font><br>
<label for=network8_color>Mod7 Color 1: </label><select name="network8_color" id="network8_color">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple selected>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
  <option value=black>Black</option>
  <option value=transparent>None</option>
</select>
<label for=network8_color2> Color 2: </label><select name="network8_color2" id="network8_color2">
  <option value=blue>Blue</option>
  <option value=skyblue2>Lgt Blue</option>
  <option value=darkblue>Drk Blue</option>
  <option value=red2>Red</option>
  <option value=red1>Lgt Red</option>
  <option value=red4>Drk Red</option>
  <option value=yellow>Yellow</option>
  <option value=yellow3>Drk Yellow</option>
  <option value=green1>Lgt Green</option>
  <option value=green>Green</option>
  <option value=green4>Drk Green</option>
  <option value=orange2>Orange</option>
  <option value=brown>Brown</option>
  <option value=purple selected>Purple</option>
  <option value=grey60>Lgt Grey</option>
  <option value=grey45>Med Grey</option>
  <option value=grey25>Drk Grey</option>
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
  <input name="line_width_val" type="text" id="line_width_val" size="4" value="1"><label for=line_width_val> Specify time series line widths</label> </p></font>
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
  <input name="quantile_min" type="text" id="quantile_min" title="Quantile Min" size="5" value="0.001">
  <br>
  </font>Quantile Max: <font face="Arial, Helvetica, sans-serif">
  <input name="quantile_max" type="text" id="quantile_max" title="Quantile Max" size="5" value="0.999">
  </font><font face="Arial, Helvetica, sans-serif"><br>
  <br>
</font>These options apply to either the stats and plots program, in which a percent range would be entered, or the spatial plot program, in which case a concentrations range would be entered.</p>
    <p>
      <label for=greyscale>Plot using greyscale</label><input name="greyscale" type="checkbox" id="greyscale" title="Greyscale Flag" value="y" unchecked>
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
<!--
    <option value="AQ_Scatterplot_skill.R"><font face="Arial, Helvetica, sans-serif">Ozone Skill Scatterplot (single network, mult runs)</font></option>
-->
    <option value="AQ_Scatterplot_bins.R"><font face="Arial, Helvetica, sans-serif">Binned MB & RMSE Scatterplots (single net., mult. run)</font></option>
    <option value="AQ_Scatterplot_bins_plotly.R"><font face="Arial, Helvetica, sans-serif">Interactive Binned Plot (single net., mult. run)</font></option>
    <option value="AQ_Scatterplot_multi.R"><font face="Arial, Helvetica, sans-serif">Multi Simulation Scatter plot (single network, mult runs)</font></option>
<!--
    <option value="AQ_Scatterplot_soil.R"><font face="Arial, Helvetica, sans-serif">Soil Scatter plot (single network, mult runs)</font></option>
-->
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
    <option value="AQ_Plot_Spatial_Species_Diff_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Species Diff Spatial Plot (multi networks,multi species)</font></option>
    <option value="AQ_Plot_Spatial_MtoM.R"><font face="Arial, Helvetica, sans-serif">Model/Model Diff Spatial Plot (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_MtoM_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Model/Model Diff Spatial Plot (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_MtoM_Species.R"><font face="Arial, Helvetica, sans-serif">Model/Model Species Diff Spatial Plot (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_Diff.R"><font face="Arial, Helvetica, sans-serif">Spatial Plot of Bias/Error Difference (multi network, multi run)</font></option>
    <option value="AQ_Plot_Spatial_Diff_leaflet.R"><font face="Arial, Helvetica, sans-serif">Interactive Spatial Plot of Bias/Error Difference (single plot)</font></option>
    <option value="AQ_Plot_Spatial_Diff_leaflet_network.R"><font face="Arial, Helvetica, sans-serif">Interactive Spatial Plot of Bias/Error Difference (multiple plots )</font></option>
<!--
    <option value="AQ_Plot_Spatial_Ratio.R"><font face="Arial, Helvetica, sans-serif">Ratio Spatial Plot to total PM2.5 (multi network, multi run)</font></option>
-->
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
<!--
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
-->
        <optgroup label="Misc Scripts">
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
<!--
        <option value="AQ_Plot_Spatial_Ratio.R"><font face="Arial, Helvetica, sans-serif">PM Ratio Spatial Plot (multi network, single run)</font></option>
-->
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
<input name="submit" type="submit" id="submit" value="Run Program">
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
��
