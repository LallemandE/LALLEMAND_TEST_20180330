<?php
/*
 * In this exercise you will need to use PHP to handle a request to process an Ajax form.
 * The form will add a new vehicle to the database and will contain the following fields:
 * - Make
 * - Model
 * - Year
 * - Colour
 * The form will be processed in PHP. A success or error message will be displayed
 * depending on the entry.
 * Note: you do not need to use AJAX or SQL to do this, only PHP.
 *
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $errorMessage = '';
    
    $make = $_POST['Make'] ?? null;
    
    // $the argument should be a string else I start to build an error message.
    if (! $make || ! is_string($make)) {
        $errorMessage .= 'Invalid Make Parameter';
    }
    
    $model = $_POST['Model'] ?? null;
    
    // The model should be a string else I will add an error message.
    // if there is already something in $errorMessage, I had a "separator" before adding the new content.
    if (! is_string($model)) {
        if ($errorMessage)
            $errorMessage .= ' / ';
        $errorMessage .= 'Invalid Make Parameter';
    }
    
    $year = $_POST['Year'] ?? null;
    
    // The year should be an integer else I will add an error message.
    // if there is already something in $errorMessage, I had a "separator" before adding the new content.
    if (! is_int($year)) {
        if ($errorMessage)
            $errorMessage .= ' / ';
        $errorMessage .= 'Invalid Make Parameter';
    }
    
    $colour = $_POST['Colour'] ?? null;
    
    // The colour should be a string else I will add an error message.
    // if there is already something in $errorMessage, I had a "separator" before adding the new content.
    if (! is_string($colour)) {
        if ($errorMessage)
            $errorMessage .= ' / ';
        $errorMessage .= 'Invalid Colour Parameter';
    }
    
    // If the error message is empty
    if (strlen($errorMessage) == 0) {
        // It is here that we could code SQL query to update the database.
        
        return "Request correctly executed !";
    }
    
    return $errorMessage;
}

// if it is not a POST request.
return "Invalid Request !";