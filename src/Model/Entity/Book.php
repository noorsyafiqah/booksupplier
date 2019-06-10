<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string $Title
 * @property string $Genre
 * @property \Cake\I18n\FrozenTime $PublishYear
 * @property float $Price
 * @property int $author_id
 *
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\Invoice[] $invoices
 * @property \App\Model\Entity\Stock[] $stocks
 */
class Book extends Entity
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
        'Title' => true,
        'Genre' => true,
        'PublishYear' => true,
        'Price' => true,
        'author_id' => true,
        'author' => true,
        'invoices' => true,
        'stocks' => true
    ];
}
