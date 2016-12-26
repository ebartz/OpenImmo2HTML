<?php

/* This is supposed to convert the XML input file into propper HTML */



# include config file
include('config.php');

# include common functions
include('lib/common.php');

# parse XML to Multidimensional Array

$xml_data = simplexml_load_string(utf8_for_xml(file_get_contents($input_file)));
$json_data = json_encode($xml_data);
$data_array = json_decode($json_data,TRUE);

var_dump($xml_data);


?>
