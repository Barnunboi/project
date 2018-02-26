<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WorkOrder Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $customer_id
 * @property int $invoice_id
 * @property string $user_name
 * @property string $product
 * @property int $quantity
 * @property string $description
 * @property string $windows_key
 * @property string $office_key
 * @property float $price
 * @property int $discount
 * @property string $order_status
 * @property string $notes
 * @property \Cake\I18n\FrozenTime $date_subbed
 * @property \Cake\I18n\FrozenTime $deadline
 * @property \Cake\I18n\FrozenTime $date_returned
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Invoice[] $invoices
 */
class WorkOrder extends Entity
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
        'user_id' => true,
        'customer_id' => true,
        'invoice_id' => true,
        'user_name' => true,
        'product' => true,
        'quantity' => true,
        'description' => true,
        'windows_key' => true,
        'office_key' => true,
        'price' => true,
        'discount' => true,
        'order_status' => true,
        'notes' => true,
        'date_subbed' => true,
        'deadline' => true,
        'date_returned' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'customer' => true,
        'invoices' => true
    ];
}
