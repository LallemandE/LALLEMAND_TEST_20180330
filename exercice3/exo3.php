<?php
/*
In this exercise you will need to use PHP to handle a request to process an Ajax form.
The form will add a new vehicle to the database and will contain the following fields:
- Make
- Model
- Year
- Colour
The form will be processed in PHP. A success or error message will be displayed
depending on the entry.
Note: you do not need to use AJAX or SQL to do this, only PHP.
  
 */

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $message = '';
    
    $make = $_POST['Make'] ?? null;
    
    // check that the "argument" has been given and, if so that it is a string else => I build an error message.
    if (! $make || ! is_string($make)) {
      $message .= 'Invalid Make Parameter';  
    }
    
    $model = $_POST['Model'] ?? null;

    // check that the "argument" has been given and, if so that it is a string else => I build an error message.
    // if there is already something in $message, I had a "separator" before adding the new content.
    if (! $model || ! is_string($model)) {
        if ($message) $message .= ' / ';
        $message .= 'Invalid Make Parameter';
    }
    
    $year = $_POST['Year'] ?? null;

    // check that the "argument" has been given and, if so that it is an integer else => I build an error message.
    // if there is already something in $message, I had a "separator" before adding the new content.
    if (! $year || ! is_int($year)) {
        if ($message) $message .= ' / ';
        $message .= 'Invalid Make Parameter';
    }
    
    $colour = $_POST['Colour'] ?? null;
    
    // check that the "argument" has been given and, if so that it is a string else => I build an error message.
    // if there is already something in $message, I had a "separator" before adding the new content.
    if (! $colour || ! is_string($colour)) {
        if ($message) $message .= ' / ';
        $message .= 'Invalid Colour Parameter';
    }
    
    
    if (! $message) {
        // It is here that we could code SQL query to update the database.
        
        return "Request correctly executed !";
    }
    
    return $message;
    
}

return "Invalid Request !";