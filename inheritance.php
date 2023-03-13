<html>
    <body>
        <?php
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "A {$this->name} is of color {$this->color}";
    }
}

class Cherry extends Fruit{
    public function message(){
        echo "Is cherry a fruit or a berry";
    }
}

$cherry = new Cherry("Cherry", 'red');
$cherry->message();
echo "<br>";
$cherry->intro();
        ?>
    </body>
</html>