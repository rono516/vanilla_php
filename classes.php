    <?php
    class BasketBall {
        private $baskets;

        function __construct(){
            $this->baskets = 0;
        }

        function score(){
            $this->baskets++;
            echo $this->baskets;
            
        }

      
}

    $b1 = new BasketBall();

    echo $b1->score();
    echo $b1->score();
    echo $b1->score();
    echo $b1->score();
    echo $b1->score();

    ?>
