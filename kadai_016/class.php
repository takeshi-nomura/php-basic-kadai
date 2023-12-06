<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>kadai_016</title>

</head>
<body>
	<p>
<?php

class food
{

    public $name;

    public $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price()
    {
        echo $this->name . "の値段は" . $this->price . "円です。";
    }
}

class Animal
{

    public $name;

    public $height;

    public $weight;

    public function __construct(string $name, int $height, int $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height()
    {
        echo $this->name . "の身長は" . $this->height, "cmです。";
    }
}
$food = new food('ハンバーガー', 500);
print_r($food);
echo "<br>";
$food->show_price();
echo "<br>";

$animal = new Animal('人間', 160, 60);
print_r($animal);
echo "<br>";
$animal->show_height();

?>
</p>
</body>
</html>
