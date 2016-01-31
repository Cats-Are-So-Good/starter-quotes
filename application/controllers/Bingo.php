<?php

/**
 * The controller for displaying the fifth quote from our mock database.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

	function __construct()
	{
		parent::__construct();
	}

	/**
         * Default method for showing the fifth quote in our mock database.
         */
	function index()
	{
            // Get the single quote view.
            $this->data['pagebody'] = 'justone';
            
            // Get the fifth record from the quotes object.
            $record = $this->quotes->get('5');
            
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