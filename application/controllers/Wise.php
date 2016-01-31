<?php

/**
 * The controller for displaying the sixth quote from our mock database.
 * 
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application {

	function __construct()
	{
		parent::__construct();
	}

	/**
         * Default method for showing the sixth quote in our mock database.
         */
	function index()
	{
            // Get the single quote view.
            $this->data['pagebody'] = 'justone';
            
            // Get the fifth record from the quotes object.
            $record = $this->quotes->get('6');
            
            // Set the values of the view parameters.
            $this->data['who'] = $record['who'];
            $this->data['what'] = $record['what'];
            $this->data['mug'] = $record['mug'];
            
            // Render the view.
            $this->render();
	}
        
       function bingo()
	{
            // Get the single quote view.
            $this->data['pagebody'] = 'justone';
            
            // Get the fifth record from the quotes object.
            $record = $this->quotes->get('6');
            
            // Set the values of the view parameters.
            $this->data['who'] = $record['who'];
            $this->data['what'] = $record['what'];
            $this->data['mug'] = $record['mug'];
            
            // Render the view.
            $this->render();
	}
}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */

