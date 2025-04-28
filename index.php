<?php 
declare(strict_types=1);

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

// создаём сотрудников
$manOne = new Manager("Bob", "Smith", 40);
$countPrice = $manOne->price;

$progOne = new Programmer("Stiv", "Way", 80);
$countPrice +=  $progOne->price;

$testerOne = new Tester("Petr", "Petrov", 60);
$countPrice += $testerOne->price;

$dirOne = new Director("Vasia", "Vasilievich", 120);
$countPrice += $dirOne->price;


// вывод на экран
echo $manOne->subname . " " . $manOne->name . ", позиция: " . $manOne->prof . ", зарплата: " 
. $manOne->price . " попугаев, " . $manOne->YouFeatures() . "." . PHP_EOL; 
echo "А ещё " . $manOne->Manage() . "!" . PHP_EOL;
echo "А ещё " . $manOne->Webinar() . "!" . PHP_EOL;
echo PHP_EOL;

echo $progOne->subname . " " . $progOne->name . ", позиция: " . $progOne->prof . ", зарплата: "
 . $progOne->price . " попугаев, " . $progOne->YouFeatures() . "." . PHP_EOL; 
echo "А ещё " . $progOne->Develop() . "!" . PHP_EOL;
echo "А ещё " . $progOne->Webinar() . "!" . PHP_EOL;
echo PHP_EOL;

echo $testerOne->subname . " " . $testerOne->name . ", позиция: " . $testerOne->prof . ", зарплата: "
  . $testerOne->price . " попугаев, " . $testerOne->YouFeatures() . "." . PHP_EOL; 
echo "А ещё " . $testerOne->Develop() . "!" . PHP_EOL;
echo "А ещё " . $testerOne->Webinar() . "!" . PHP_EOL;
echo PHP_EOL;

echo $dirOne->subname . " " . $dirOne->name . ", позиция: " . $dirOne->prof . ", зарплата: "
  . $dirOne->price . " попугаев, " . $dirOne->YouFeatures() . "." . PHP_EOL; 
echo "А ещё " . $dirOne->Manage() . "!" . PHP_EOL;
echo "А ещё " . $dirOne->Webinar() . "!" . PHP_EOL;

// итог
echo PHP_EOL;
echo "Общее колическо сотрудников: " . Employee::getCount() . "." . PHP_EOL;
echo "Общая сумма зарплат: " . $countPrice . " попугаев." . PHP_EOL;
