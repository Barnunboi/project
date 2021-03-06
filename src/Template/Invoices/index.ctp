<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Work Orders'), ['controller' => 'WorkOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Work Order'), ['controller' => 'WorkOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invoices index large-9 medium-8 columns content">
    <h3><?= __('Invoices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grand_total') ?></th>
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
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= $this->Number->format($invoice->id) ?></td>
                <td><?= $this->Number->format($invoice->work_order_id) ?></td>
                <td><?= $invoice->has('user') ? $this->Html->link($invoice->user->id, ['controller' => 'Users', 'action' => 'view', $invoice->user->id]) : '' ?></td>
                <td><?= $invoice->has('customer') ? $this->Html->link($invoice->customer->id, ['controller' => 'Customers', 'action' => 'view', $invoice->customer->id]) : '' ?></td>
                <td><?= h($invoice->user_name) ?></td>
                <td><?= h($invoice->product) ?></td>
                <td><?= h($invoice->description) ?></td>
                <td><?= $this->Number->format($invoice->price) ?></td>
                <td><?= $this->Number->format($invoice->subtotal) ?></td>
                <td><?= $this->Number->format($invoice->grand_total) ?></td>
                <td><?= h($invoice->notes) ?></td>
                <td><?= h($invoice->date_subbed) ?></td>
                <td><?= h($invoice->deadline) ?></td>
                <td><?= h($invoice->date_returned) ?></td>
                <td><?= h($invoice->created) ?></td>
                <td><?= h($invoice->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?>
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
