<?php

use App\Book;
use App\BookList;

function runTest()
{
    $bl1 = new BookList(array());

    $b1 = new Book();
    $b1->setTitle("Благословение Небожителей")
    ->setAuthors(array("Мосян Тунсю"))
    ->setPublisher("Комильфо")
    ->setYear(2022);
    echo $b1 . PHP_EOL;

    $bl1->add($b1);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    $b2 = new Book();
    $b2->setTitle("Война и мир")
    ->setAuthors(array("Л.Н Толстой"))
    ->setPublisher("Акелла")
    ->setYear(1964);
    echo $b2 . PHP_EOL;

    $bl1->add($b2);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    $b3 = new Book();
    $b3->setTitle("Проза бродячих псов")
    ->setAuthors(array("Кафка Асагири","Санго Харукава"))
    ->setPublisher("Комильфо")
    ->setYear(2021);
    echo $b3 . PHP_EOL;

    $bl1->add($b3);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL . PHP_EOL;

    $bl1->store("BookList");

    $bl2 = new BookList();
    $bl2->load("BookList");

    for ($i = 0; $i < $bl2->count(); $i++) {
        echo "Ожидается: " . $bl1->get($i)  . PHP_EOL;
        echo "Получено: " . $bl2->get($i) . PHP_EOL;
    }

    
}