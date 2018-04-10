<?php
/**
 * Created with love.
 * Author: Dudarev Ilia
 * Email: dudareviv@gmail.com
 * Date: 10.04.2018
 * Time: 13:59
 */

namespace Dudareviv\WarehouseManager\Interfaces;


/**
 * Интерфейс склада.
 * @package Dudareviv\WarehouseManager\Interfaces
 */
interface IWarehouse
{
    /**
     * Проверяет доступ получателя товара к складу.
     * @param ICredentials $credentials
     * @return bool
     */
    public function hasAccess(ICredentials $credentials);

    /**
     * Возвращает количество товара.
     * @param IProduct $product
     * @return int
     */
    public function getProductsCount(IProduct $product);

    /**
     * Увеличивает количество товара на складе.
     * @param IProduct $product
     * @param int $count
     * @return bool
     */
    public function increaseProductsCount(IProduct $product, $count);

    /**
     * Уменьшает количество товара на складе.
     * @param IProduct $product
     * @param int $count
     * @return bool
     */
    public function decreaseProductsCount(IProduct $product, $count);
}