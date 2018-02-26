<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Work Orders'), ['controller' => 'WorkOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Order'), ['controller' => 'WorkOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($customer->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($customer->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($customer->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($customer->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= $this->Number->format($customer->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($customer->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customer->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('First Name') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->first_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Last Name') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->last_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('City') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->city)); ?>
    </div>
    <div class="row">
        <h4><?= __('State') ?></h4>
        <?= $this->Text->autoParagraph(h($customer->state)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($customer->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('User Name') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Passwordhash') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->customer_id) ?></td>
                <td><?= h($users->user_name) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->passwordhash) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($customer->invoices)): ?>
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
            <?php foreach ($customer->invoices as $invoices): ?>
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
        <?php if (!empty($customer->work_orders)): ?>
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
            <?php foreach ($customer->work_orders as $workOrders): ?>
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
