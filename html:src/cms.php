<?php

require_once 'Post.php';
require_once 'Category.php';
require_once 'Image.php';
require_once 'Portfolio_Item.php';

/**
* The parent of all controllers in this application [Dont' Repeat Yourself (DRY) Controller].
*
* This "dry" controller aims to eleminate a lot of repetitive ci=ode by declaring code
* that (1) loads the view and (2) evaluates whether a user us logged in and then
* redirecting the user if he/she has not.
*
* By: Jason Brooks
* jaythaceo@gmail.com
*/


abstract class Dry_controller extends CI_Controller {


	/**
	* Loads the specified view after saving parameters and flashdata
	* 
	*param string $view_
	*/

	protected function render_view($view_name, $view_parameters = NULL, $flashdata_name =NULL)
	{
		//Initialize array of data to be pased onto the view
		if ($view_parameters === NULL)
		 {
			$view_parameters = array();
		}

		//Save flashdata coming from redirects
		if ($flashdata_name != NULL && $this->session->flashdata($flashdata_name))
		 {
			$view_parameters[$flashdata_name] = $this->session->flashdata($flashdata_name);
		}

		//Check whether user is logged in (used for showing "logout" and "manage content" tab menu bar)
		
	}




}




?>





