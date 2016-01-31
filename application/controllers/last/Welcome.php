<?php

/**
 * The controller for displaying the last quote from our mock database.
 * 
 * controllers/last/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

	function __construct()
	{
		parent::__construct();
	}

	/**
         * Default method for showing the last quote in our mock database.
         */
	function index()
	{
            // Get the single quote view.
            $this->data['pagebody'] = 'justone';
            
            // Get the first record from the quotes object.
            $record = $this->quotes->last();
            
            // Set the values of the view parameters.
            $this->data['who'] = $record['who'];
            $this->data['what'] = $record['what'];
            $this->data['mug'] = $record['mug'];
            
            // Render the view.
            $this->render();
	}
        
}
/* End of file Welcome.php */
/* Location: application/controllers/last/Welcome.php */
