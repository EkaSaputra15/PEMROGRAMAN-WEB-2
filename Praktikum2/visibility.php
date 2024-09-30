<!-- visibility.php -->
 <?php

 class visibility{
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'prptected';

    function tampilkanProperty(){
        echo  "ini akses di luar kelas <br>";
        echo  "public : " . $this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';
    }
 }