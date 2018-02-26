<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $phone
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $address
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Invoice[] $invoices
 * @property \App\Model\Entity\WorkOrder[] $work_orders
 */
class Customer extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'email' => true,
        'phone' => true,
        'dob' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'created' => true,
        'modified' => true,
        'users' => true,
        'invoices' => true,
        'work_orders' => true
    ];
}
