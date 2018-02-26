<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Work Orders'), ['controller' => 'WorkOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Order'), ['controller' => 'WorkOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoices view large-9 medium-8 columns content">
    <h3><?= h($invoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $invoice->has('user') ? $this->Html->link($invoice->user->id, ['controller' => 'Users', 'action' => 'view', $invoice->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $invoice->has('customer') ? $this->Html->link($invoice->customer->id, ['controller' => 'Customers', 'action' => 'view', $invoice->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($invoice->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= h($invoice->product) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($invoice->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($invoice->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Order Id') ?></th>
            <td><?= $this->Number->format($invoice->work_order_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($invoice->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtotal') ?></th>
            <td><?= $this->Number->format($invoice->subtotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grand Total') ?></th>
            <td><?= $this->Number->format($invoice->grand_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Subbed') ?></th>
            <td><?= h($invoice->date_subbed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deadline') ?></th>
            <td><?= h($invoice->deadline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Returned') ?></th>
            <td><?= h($invoice->date_returned) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($invoice->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($invoice->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Work Orders') ?></h4>
        <?php if (!empty($invoice->work_orders)): ?>
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
            <?php foreach ($invoice->work_orders as $workOrders): ?>
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
