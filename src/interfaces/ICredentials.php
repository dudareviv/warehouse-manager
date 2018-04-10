<?php
/**
 * Created with love.
 * Author: Dudarev Ilia
 * Email: dudareviv@gmail.com
 * Date: 10.04.2018
 * Time: 14:10
 */

namespace Dudareviv\WarehouseManager\Interfaces;


/**
 * Интерфейс получателя товара.
 * @package Dudareviv\WarehouseManager\Interfaces
 */
interface ICredentials
{
    /**
     * Возвращает тип авторизации.
     * @return int
     */
    public function getType();

    /**
     * Возвращает токен авторизации.
     * @return mixed
     */
    public function getToken();
}