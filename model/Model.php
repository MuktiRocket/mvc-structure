<?php
include("Book.php");
class Model
{
    public function getBookDetails()
    {
        return array(
            "xyz" => new Book('xyz', 'jaydeep sarkar', 'classic book'),
            "jungle" => new Book('jungle', 'R.kipling', 'adventure')
        );
    }

    public function getBook($title)
    {
        $allbooks = $this->getBookDetails();
        return $allbooks[$title];
    }
}
