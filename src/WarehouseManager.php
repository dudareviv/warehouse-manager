<?php
/**
 * Created with love.
 * Author: Dudarev Ilia
 * Email: dudareviv@gmail.com
 * Date: 10.04.2018
 * Time: 13:56
 */

namespace Dudareviv\WarehouseManager;

use Dudareviv\WarehouseManager\Interfaces\IProduct;
use Dudareviv\WarehouseManager\Interfaces\ICredentials;
use Dudareviv\WarehouseManager\Interfaces\IWarehouse;


/**
 * Class WarehouseManager
 * @package Dudareviv\WarehouseManager
 */
class WarehouseManager
{
    /** @var IWarehouse */
    private $warehouse;

    /**
     * WarehouseManager constructor.
     * @param IWarehouse $warehouse
     */
    public function __construct(IWarehouse $warehouse)
    {
        $this->warehouse = $warehouse;
    }


    /**
     * Отгрузка товаров.
     * @param ICredentials $credentials
     * @param IProduct $product
     * @param int $count Количество товара.
     * @return bool Флаг результата выполнения.
     */
    public function productsShipment(ICredentials $credentials, IProduct $product, $count)
    {
        if (!$this->warehouse->hasAccess($credentials)) {
            // Кидать ошибку?
            return false;
        }

        if ($this->warehouse->getProductsCount($product) < $count) {
            return false;
        }

        if ($this->warehouse->decreaseProductsCount($product, $count)) {
            return true;
        }

        return false;
    }

    /**
     * Получение товаров.
     * @param ICredentials $credentials
     * @param IProduct $product
     * @param int $count Количество товара.
     * @return bool Флаг результата выполнения.
     */
    public function productsReceiving(ICredentials $credentials, IProduct $product, $count)
    {
        if (!$this->warehouse->hasAccess($credentials)) {
            // Кидать ошибку?
            return false;
        }

        if ($this->warehouse->increaseProductsCount($product, $count)) {
            return true;
        }

        return false;
    }

    /**
     * Информация о кол-ве товаров на складе.
     * @param IProduct $product
     * @return int Количество товара на складе.
     */
    public function productsCount(IProduct $product)
    {
        return $this->warehouse->getProductsCount($product);
    }

}