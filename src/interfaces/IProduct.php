<?php
/**
 * Created with love.
 * Author: Dudarev Ilia
 * Email: dudareviv@gmail.com
 * Date: 10.04.2018
 * Time: 14:09
 */

namespace Dudareviv\WarehouseManager\Interfaces;


/**
 * Интерфейс товара.
 * @package Dudareviv\WarehouseManager\Interfaces
 */
interface IProduct
{
    /**
     * Возвращает идентификатор товара.
     * @return int
     */
    public function getId();

}