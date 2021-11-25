<?php

require_once 'Kindle.php';
require_once 'Nook.php';
require_once 'Book.php';
require_once 'eReaderAdapter.php';
require_once 'BookInterface.php';
require_once 'eReaderInterface.php';

class Person {
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}

(new Person)->read(new eReaderAdapter(new Nook()));