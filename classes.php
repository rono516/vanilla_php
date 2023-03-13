<html>
    <body>
        <h3>This is the fruit program</h3>
    </body>

    <?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
}

    $apple = new Fruit("Apple", "red");

    echo $apple->get_name();

    ?>
</html>