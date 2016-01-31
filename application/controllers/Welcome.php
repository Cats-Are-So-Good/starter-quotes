<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage'; // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array();
        foreach ($source as $record) {
            $authors[] = array('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
        }
        $this->data['authors'] = $authors;

        $this->render();
    }

    //-------------------------------------------------------------
    //  Display Elaine Boosler's quote
    //-------------------------------------------------------------
    function shucks() {
        // Get the single quote view.
        $this->data['pagebody'] = 'justone';

        // Get Monkhouse's record from the quotes object.
        $record = $this->quotes->get('2');

        // Set the values of the view parameters.
        $this->data['who'] = $record['who'];
        $this->data['what'] = $record['what'];
        $this->data['mug'] = $record['mug'];

        // Render the view.
        $this->render();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */