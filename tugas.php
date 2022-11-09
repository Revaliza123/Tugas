<h2>Muhammad Revaliza A</h2>
<?php
class document{
    public $authors;
    public $date;

    public function setAuthors($authors){
        $this->authors = $authors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function getDate(){
        return $this->date;
    }
}
$document1=new document();
$document1->setAuthors('Authors : J K Rowling');
$document1->setDate('Tanggal Terbit : 26-06-1997');

echo $document1->getAuthors();
echo "<br>";
echo $document1->getDate();
echo "<br>";

class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function  setAuthors($authors){
        $this->authors = $authors;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthors(){
        return $this->authors;
    }
}
$document2 = new Book();
$document2-> setTitle('Title : Harry Potter');

echo $document2->getTitle();
echo "<br>";
echo $document1->getAuthors();
echo"<br>";

class Email extends Book {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }
}

$document3 = new Email();
$document3-> setSubject('Genre : Fantasy');

echo $document3->getSubject();
echo "<br>";
echo $document1->getAuthors();
echo "<br>";
?>
 