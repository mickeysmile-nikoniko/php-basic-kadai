<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタ：プロパティに値を代入
      public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
      // メソッドを定義する
      public function show_price() {
        print_r($this->price);
      }
    } 

   // クラスを定義する
    class Animal {
    // プロパティを定義する
    private $name;
    private $height;
    private $weight;

    // コンストラクタ：プロパティに値を代入
    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
     // メソッドを定義する
    public function show_height() {
        print_r($this->height);
    }
    }

     // インスタンス化する
     $food = new Food('potate', 250);
     $animal = new Animal('dog', 60, 5000);

    // プロパティの値を出力する
    print_r($food);
    echo "<br>";
    print_r($animal);
    echo "<br>";

    // メソッドの実行
    $food->show_price();
    echo "<br>";
    $animal->show_height();


  ?>
</p>
</body>
</html>