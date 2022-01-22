<?php

namespace App\Exceptions;

use Exception;

class InvalidEntrySlugException extends \Exception {
    
    private $entry;

    public function __construct($entry, $message = "", $code = 0, Throwable $previous = null){
        parent::__construct($message, $code, $previous);
        $this->entry = $entry;

    }
    
    public function render(){
        return redirect(route('entries.show',$this->entry->getFullSlug()));

    }
}