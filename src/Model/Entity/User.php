<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $user_name
 * @property string $email
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer[] $customers
 * @property \App\Model\Entity\Invoice[] $invoices
 * @property \App\Model\Entity\WorkOrder[] $work_orders
 */
class User extends Entity
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
        'customer_id' => true,
        'user_name' => true,
        'email' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'customers' => true,
        'invoices' => true,
        'work_orders' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value) {

        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }

}
