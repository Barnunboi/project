<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkOrder $workOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Work Order'), ['action' => 'edit', $workOrder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Work Order'), ['action' => 'delete', $workOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workOrder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Work Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="workOrders view large-9 medium-8 columns content">
    <h3><?= h($workOrder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $workOrder->has('user') ? $this->Html->link($workOrder->user->id, ['controller' => 'Users', 'action' => 'view', $workOrder->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $workOrder->has('customer') ? $this->Html->link($workOrder->customer->id, ['controller' => 'Customers', 'action' => 'view', $workOrder->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($workOrder->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= h($workOrder->product) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($workOrder->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Windows Key') ?></th>
            <td><?= h($workOrder->windows_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Office Key') ?></th>
            <td><?= h($workOrder->office_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($workOrder->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($workOrder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Id') ?></th>
            <td><?= $this->Number->format($workOrder->invoice_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($workOrder->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($workOrder->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($workOrder->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Subbed') ?></th>
            <td><?= h($workOrder->date_subbed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deadline') ?></th>
            <td><?= h($workOrder->deadline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Returned') ?></th>
            <td><?= h($workOrder->date_returned) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($workOrder->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($workOrder->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Order Status') ?></h4>
        <?= $this->Text->autoParagraph(h($workOrder->order_status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($workOrder->invoices)): ?>
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
            <?php foreach ($workOrder->invoices as $invoices): ?>
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
</div>
