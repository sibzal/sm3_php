<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?
    class Animal
    {
        public $weight, $color, $age;

        function info()
        {
            echo 'Weight:' . $this->weight . '<br>' . 'Color:' . $this->color . '<br>' . 'Age:' . $this->age;
        }
    }



    class Lion extends Animal
    {
        public $arial;
        function info()
        {
            echo  '<span class="color">Arial: </span>' . $this->arial . '<br><br>' . '<span class="color">Weight: </span>' . $this->weight . '<br><br>' . '<span class="color">Color: </span>' . $this->color . '<br><br>' . '<span class="color">Age: </span>' . $this->age;
        }
    }


    class Rabbit extends Animal
    {
        public $speed;
        function info()
        {
            echo '<span class="color">Speed: </span>' . $this->speed . '<br><br>' . '<span class="color">Weight: </span>' . $this->weight . '<br><br>' . '<span class="color">Color: </span>' . $this->color . '<br><br>' . '<span class="color">Age: </span>' . $this->age;
        }
    }

    class Wolf extends Animal
    {
        public $length;
        function info()
        {
            echo '<span class="color">Length: </span>' . $this->length . '<br><br>' . '<span class="color">Weight: </span>' . $this->weight . '<br><br>' . '<span class="color">Color: </span>' . $this->color . '<br><br>' . '<span class="color">Age: </span>' . $this->age;
        }
    }

    $lion = new Lion();
    $lion->weight = '200';
    $lion->age = '3';
    $lion->color = 'yellow';
    $lion->arial = 'Africa';

    $rabbit = new Rabbit();
    $rabbit->weight = '15';
    $rabbit->age = '1';
    $rabbit->color = 'white';
    $rabbit->speed = '15';

    $wolf = new Wolf();
    $wolf->weight = '40';
    $wolf->color = 'gray';
    $wolf->age = '5';
    $wolf->length = '1,5';
    ?>

    <div class="container">
        <h2 class="title">Информация о животных</h2>
        <div class="information">
            <div class="info_animal">
                <img src="assets/img/lion.jpg" alt="lion" class="img">
                <div class="animal_text">
                    <h2 class="title_name">
                        Lion
                    </h2>
                    <p class="text"><? $lion->info();?></p>
                </div>
            </div>
            <div class="info_animal">
                <img src="assets/img/rabbit.jpg" alt="rabbit" class="img">
                <div class="animal_text">
                    <h2 class="title_name">Rabbit</h2>
                    <p class="text"><?$rabbit->info();?></p>
                </div>
            </div>
            <div class="info_animal">
                <img src="assets/img/wolf.jpg" alt="wolf" class="img">
                <div class="animal_text">
                    <h2 class="title_name">Wolf</h2>
                    <p class="text"><?$wolf->info();?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>