<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WorkOrder $workOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $workOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $workOrder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Work Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="workOrders form large-9 medium-8 columns content">
    <?= $this->Form->create($workOrder) ?>
    <fieldset>
        <legend><?= __('Edit Work Order') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('customer_id', ['options' => $customers, 'empty' => true]);
            echo $this->Form->control('invoice_id');
            echo $this->Form->control('user_name');
            echo $this->Form->control('product');
            echo $this->Form->control('quantity');
            echo $this->Form->control('description');
            echo $this->Form->control('windows_key');
            echo $this->Form->control('office_key');
            echo $this->Form->control('price');
            echo $this->Form->control('discount');
            echo $this->Form->control('order_status');
            echo $this->Form->control('notes');
            echo $this->Form->control('date_subbed', ['empty' => true]);
            echo $this->Form->control('deadline', ['empty' => true]);
            echo $this->Form->control('date_returned', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
