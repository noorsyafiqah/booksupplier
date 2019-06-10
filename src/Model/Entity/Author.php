<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Author Entity
 *
 * @property int $id
 * @property string $Name
 * @property string $Phone
 * @property string $Email
 *
 * @property \App\Model\Entity\Book[] $books
 * @property \App\Model\Entity\User[] $users
 */
class Author extends Entity
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
        'Name' => true,
        'Phone' => true,
        'Email' => true,
        'books' => true,
        'users' => true
    ];
}
