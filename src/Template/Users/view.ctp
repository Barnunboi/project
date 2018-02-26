<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Work Orders'), ['controller' => 'WorkOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Order'), ['controller' => 'WorkOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($user->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($user->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('First Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->first_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Last Name') ?></h4>
        <?= $this->Text->autoParagraph(h($user->last_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Role') ?></h4>
        <?= $this->Text->autoParagraph(h($user->role)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($user->customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Zip') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->customers as $customers): ?>
            <tr>
                <td><?= h($customers->id) ?></td>
                <td><?= h($customers->user_id) ?></td>
                <td><?= h($customers->first_name) ?></td>
                <td><?= h($customers->last_name) ?></td>
                <td><?= h($customers->email) ?></td>
                <td><?= h($customers->phone) ?></td>
                <td><?= h($customers->dob) ?></td>
                <td><?= h($customers->address) ?></td>
                <td><?= h($customers->city) ?></td>
                <td><?= h($customers->state) ?></td>
                <td><?= h($customers->zip) ?></td>
                <td><?= h($customers->created) ?></td>
                <td><?= h($customers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($user->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Work Order Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('User Name') ?></th>
                <th scope="col"><?= __('Product') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Subtotal') ?></th>
                <th scope="col"><?= __('Grand Total') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Date Subbed') ?></th>
                <th scope="col"><?= __('Deadline') ?></th>
                <th scope="col"><?= __('Date Returned') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->id) ?></td>
                <td><?= h($invoices->work_order_id) ?></td>
                <td><?= h($invoices->user_id) ?></td>
                <td><?= h($invoices->customer_id) ?></td>
                <td><?= h($invoices->user_name) ?></td>
                <td><?= h($invoices->product) ?></td>
                <td><?= h($invoices->description) ?></td>
                <td><?= h($invoices->price) ?></td>
                <td><?= h($invoices->subtotal) ?></td>
                <td><?= h($invoices->grand_total) ?></td>
                <td><?= h($invoices->notes) ?></td>
                <td><?= h($invoices->date_subbed) ?></td>
                <td><?= h($invoices->deadline) ?></td>
                <td><?= h($invoices->date_returned) ?></td>
                <td><?= h($invoices->created) ?></td>
                <td><?= h($invoices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Work Orders') ?></h4>
        <?php if (!empty($user->work_orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('User Name') ?></th>
                <th scope="col"><?= __('Product') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Windows Key') ?></th>
                <th scope="col"><?= __('Office Key') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Order Status') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Date Subbed') ?></th>
                <th scope="col"><?= __('Deadline') ?></th>
                <th scope="col"><?= __('Date Returned') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->work_orders as $workOrders): ?>
            <tr>
                <td><?= h($workOrders->id) ?></td>
                <td><?= h($workOrders->user_id) ?></td>
                <td><?= h($workOrders->customer_id) ?></td>
                <td><?= h($workOrders->invoice_id) ?></td>
                <td><?= h($workOrders->user_name) ?></td>
                <td><?= h($workOrders->product) ?></td>
                <td><?= h($workOrders->quantity) ?></td>
                <td><?= h($workOrders->description) ?></td>
                <td><?= h($workOrders->windows_key) ?></td>
                <td><?= h($workOrders->office_key) ?></td>
                <td><?= h($workOrders->price) ?></td>
                <td><?= h($workOrders->discount) ?></td>
                <td><?= h($workOrders->order_status) ?></td>
                <td><?= h($workOrders->notes) ?></td>
                <td><?= h($workOrders->date_subbed) ?></td>
                <td><?= h($workOrders->deadline) ?></td>
                <td><?= h($workOrders->date_returned) ?></td>
                <td><?= h($workOrders->created) ?></td>
                <td><?= h($workOrders->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WorkOrders', 'action' => 'view', $workOrders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WorkOrders', 'action' => 'edit', $workOrders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WorkOrders', 'action' => 'delete', $workOrders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workOrders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
