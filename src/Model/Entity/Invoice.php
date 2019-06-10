<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property float $TotalPrice
 * @property int $book_id
 * @property int $bookstore_id
 * @property int $stock_id
 *
 * @property \App\Model\Entity\Book $book
 * @property \App\Model\Entity\Bookstore $bookstore
 * @property \App\Model\Entity\Stock $stock
 */
class Invoice extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'TotalPrice' => true,
        'book_id' => true,
        'bookstore_id' => true,
        'stock_id' => true,
        'book' => true,
        'bookstore' => true,
        'stock' => true
    ];
}
