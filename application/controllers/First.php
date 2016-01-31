<?php

/**
 * The controller for displaying the first quote from our mock database.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

	function __construct()
	{
		parent::__construct();
	}

	/**
         * Default method for showing the first quote in our mock database.
         */
	function index()
	{
            // Get the single quote view.
            $this->data['pagebody'] = 'justone';
            
            // Get the first record from the quotes object.
            $record = $this->quotes->first();
            
            // Set the values of the view parameters.
            $this->data['who'] = $record['who'];
            $this->data['what'] = $record['what'];
            $this->data['mug'] = $record['mug'];
            
            // Render the view.
            $this->render();
	}
        
        /**
         * Show Bob Monkhouse's quote.
         */
        function zzz()
        {
            // Get the single quote view.
            $this->data['pagebody'] = 'justone';
            
            // Get Monkhouse's record from the quotes object.
            $record = $this->quotes->get('1');
            
            // Set the values of the view parameters.
            $this->data['who'] = $record['who'];
            $this->data['what'] = $record['what'];
            $this->data['mug'] = $record['mug'];
            
            // Render the view.
            $this->render();
        }
        
        /**
         * Show Mark Russell's quote.
         */
        function gimme($id)
        {
            // Get the single quote view.
            $this->data['pagebody'] = 'justone';
            
            // Get Russell's record from the quotes object.
            $record = $this->quotes->get($id);
            
            // Set the values of the view parameters.
            $this->data['who'] = $record['who'];
            $this->data['what'] = $record['what'];
            $this->data['mug'] = $record['mug'];
            
            // Render the view.
            $this->render();
        }
}

/* End of file First.php */
/* Location: application/controllers/First.php */