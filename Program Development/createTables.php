

<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body>
<?php

//Run this script to create the tables that will be used on the database for the senqual project.


$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql = "CREATE TABLE IF NOT EXISTS tbl_user( ".
       "name VARCHAR(255), ".
       "email VARCHAR(255) NOT NULL, ".
       "password VARCHAR(255), ".
       "affiliation VARCHAR(255), ".
	   "title VARCHAR(255), ".
	   "alertType VARCHAR(255), ".
	   "phone VARCHAR(255), ".
	   "alertFrequency int, ".
       "PRIMARY KEY ( email )); ";
mysql_select_db( 'senqual' );
$retval = mysql_query( $sql, $conn );
echo "</br>";
echo "User table created successfully\n";


echo "</br>";

$sql = "CREATE TABLE IF NOT EXISTS tbl_rules( ".
       "id VARCHAR(255) NOT NULL,".
       "start VARCHAR(255), ".
       "end VARCHAR(255), ".
       "discipline VARCHAR(255), ".
	   "owner VARCHAR(255), ".
	   "property VARCHAR(255), ".
	   "private int, ".
	   "PRIMARY KEY (id)); ";
mysql_select_db( 'senqual' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Rules table created successfully\n";


echo "</br>";

$sql = "CREATE TABLE IF NOT EXISTS tbl_monitor( ".
       "id VARCHAR(255) NOT NULL,".
	   "users VARCHAR(255), ".
       "private int, ".
	   "PRIMARY KEY (id)); ";
mysql_select_db( 'senqual' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Monitor table created successfully\n";

mysql_close($conn);
?>
</body>
</html>