<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkOrder[]|\Cake\Collection\CollectionInterface $workOrders
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Work Order'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="workOrders index large-9 medium-8 columns content">
    <h3><?= __('Work Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('windows_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('office_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_subbed', [
                        'label' => 'Date Submitted'
                    ]) ?></th>
                <th scope="col"><?= $this->Paginator->sort('deadline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_returned') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($workOrders as $workOrder): ?>
            <tr>
                <td><?= $this->Number->format($workOrder->id) ?></td>
                <td><?= $workOrder->has('user') ? $this->Html->link($workOrder->user->id, ['controller' => 'Users', 'action' => 'view', $workOrder->user->id]) : '' ?></td>
                <td><?= $workOrder->has('customer') ? $this->Html->link($workOrder->customer->id, ['controller' => 'Customers', 'action' => 'view', $workOrder->customer->id]) : '' ?></td>
                <td><?= $this->Number->format($workOrder->invoice_id) ?></td>
                <td><?= h($workOrder->user_name) ?></td>
                <td><?= h($workOrder->product) ?></td>
                <td><?= $this->Number->format($workOrder->quantity) ?></td>
                <td><?= h($workOrder->description) ?></td>
                <td><?= h($workOrder->windows_key) ?></td>
                <td><?= h($workOrder->office_key) ?></td>
                <td><?= $this->Number->format($workOrder->price) ?></td>
                <td><?= $this->Number->format($workOrder->discount) ?></td>
                <td><?= h($workOrder->notes) ?></td>
                <td><?= h($workOrder->date_subbed) ?></td>
                <td><?= h($workOrder->deadline) ?></td>
                <td><?= h($workOrder->date_returned) ?></td>
                <td><?= h($workOrder->created) ?></td>
                <td><?= h($workOrder->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $workOrder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $workOrder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $workOrder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $workOrder->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
