<?php 
declare(strict_types=1);

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

$one = new Manager("Bob", "Smith", 20);

echo $one->subname . " " . $one->name . ", позиция: " . $one->price . " попугаев, " . 
 $one->features . PHP_EOL; 







// В итоге должно получиться:
// Иванов Иван, позиция: программист, зарплата: 20 попугаев, может заниматься разработкой приложения: пишет код,
// может проводить вебинары: на технические и психологические темы.

// Общее количество сотрудников: 1.
// Общая сумма зарплат: 20 попугаев.
