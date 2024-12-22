<<<<<<< HEAD
<?php

class visibility{
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';

    function tampilkanproperty(){
        echo "ini diakses di dalam kelas <br>";
        echo "public : " . $this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';
    }
=======
<?php

class visibility{
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';

    function tampilkanproperty(){
        echo "ini diakses di dalam kelas <br>";
        echo "public : " . $this->public . '<br>';
        echo "protected : " . $this->protected . '<br>';
        echo "private : " . $this->private . '<br>';
    }
>>>>>>> 753e988390e1b395992f377d210eaa17c493d6e6
}
