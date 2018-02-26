<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property int $work_order_id
 * @property int $user_id
 * @property int $customer_id
 * @property string $user_name
 * @property string $product
 * @property string $description
 * @property int $price
 * @property int $subtotal
 * @property int $grand_total
 * @property string $notes
 * @property \Cake\I18n\FrozenTime $date_subbed
 * @property \Cake\I18n\FrozenTime $deadline
 * @property \Cake\I18n\FrozenTime $date_returned
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\WorkOrder[] $work_orders
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Customer $customer
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
        'work_order_id' => true,
        'user_id' => true,
        'customer_id' => true,
        'user_name' => true,
        'product' => true,
        'description' => true,
        'price' => true,
        'subtotal' => true,
        'grand_total' => true,
        'notes' => true,
        'date_subbed' => true,
        'deadline' => true,
        'date_returned' => true,
        'created' => true,
        'modified' => true,
        'work_orders' => true,
        'user' => true,
        'customer' => true
    ];
}
