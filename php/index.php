<?php

include __DIR__ . '/vendor/autoload.php';

$client = new MongoDB\Client('mongodb://root:root@mongo');

// Веселимся тут :)

/**
 * Задача
 *
 * Храним посты с комментариями к ним
 *
 * Пост содержит
 * - Наименование
 * - Описание
 * - Количество просмотров
 *
 * Может содержать:
 * - Имя автора
 * - Рейтинг (1-10)
 * - Список комментариев
 *
 * Комментарий содержит:
 * - Имя комментария
 * - Текст комментария
 *
 * Комментарий может содержать
 * - Количество лайков
 *
 */

/**
 * Вставка
 * - Вставляем данные всех возможных вариантов
 *
 * Обновление
 * - 2-3 запроса на различные обновления (updateOne, updateMany)
 * - 1 запрос на replace
 * - 1 запрос на upsert
 *
 * Удаление
 * - 2-3 запроса на удаление (deleteOne, deleteMany)
 *
 * Выборка
 * - Выбрать самые рейтинговые посты - 4 штуки
 * - Выбрать посты, для которых проставлен рейтинг
 * - Выбрать посты с количеством просмотров больше 100
 * - Выбрать посты, которые содержат комментарии
 * - Выбрать посты, количество комментариев в которых больше 3 (расширенное задание)
 * - Выбрать посты, в которые есть комментарии с количеством лайов от 10 (расширенное задание)
 */