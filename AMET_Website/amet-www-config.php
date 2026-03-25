<?php
//////////////////////////////////////////////////////////////////
// Filename: amet-www-config.php                                //
//                                                              //
// This file is required by the various AMET PHP programs.      // 
//                                                              //
// This file provides necessary MYSQL information to the file   //
// above so that data from Site Compare can be added to the     //
// system's MYSQL database.                                     // 
//								//	
// LAST UPDATE: 03/2025						//
//////////////////////////////////////////////////////////////////

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// AMET and MySQL Configuration
$amet_base="/home/ubuntu/AMET_v16";                                          // Base directory where AMET-AQ is installed
$mysql_server="localhost";	// Name of MYSQL server
$root_login="ametsecure";		// Root login for MYSQL server
$root_pass="ametpwd";		// Root password for MYSQL server
$mysql_config="/var/www/html/amet-config.R";

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// R executable path
$R_exe="R";						// Path to R executable
$R_script="/usr/bin/Rscript";					// Path to R script executable
$R_lib="/usr/local/lib/R/site-library";              // Path to R library directory
#$R_proj_lib="/home/appel/linux/lib/proj4";                  	// Path to proj4 executable

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// Web paths
$http_server="";					// An expample if amet was on http://www.coastwx.com (www.coastwx.com)
$http_amet="";						// Extension from server root to amet
$cache_amet="/var/www/html/cache";		// Default AMET cache directory (needs to have read/write access for web server)
$cache_amet2="cache";
$http_cgi="/var/www/html";
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
?>
