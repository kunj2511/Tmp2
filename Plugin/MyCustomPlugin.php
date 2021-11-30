<?php
/*
Plugin Name:MyPlug
Author:Mrugesh
*/

function form_data_menu()
{
	add_menu_page('FormData','FormData','manage_options','member-slug','form_data_insert');
}

add_action('admin_menu','form_data_menu');


function form_data_display_menu()
{
	add_menu_page('FormDataDisplay','FormDataDisplay','manage_options','member-slug-1','form_data_display');
}

add_action('admin_menu','form_data_display_menu');

function form_data_display()
{
	include('displaycount.php');
}
function form_data_insert()
{
	include('form.php');
}

register_activation_hook(__FILE__,'tablecreation');



function tablecreation()
{
	global $wpdb;
	$sql="Create table test(id int(11),name varchar(255));";
	$wpdb->query($sql);
}

?>