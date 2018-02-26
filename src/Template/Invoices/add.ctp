<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Work Orders'), ['controller' => 'WorkOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Work Order'), ['controller' => 'WorkOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invoices form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Create A New Invoice') ?></legend>
        <?php
            echo $this->Form->control('work_order_id');
            echo $this->Form->control('customer_id', ['options' => $customers, 'empty' => true]);
            echo $this->Form->control('user_name');
            echo $this->Form->control('product');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('subtotal');
            echo $this->Form->control('grand_total');
            echo $this->Form->control('notes');
            echo $this->Form->control('date_subbed',[
                'empty' => true,
                'label' => 'Date Submitted',
                'DateFormat' => 'DMY',
                'minYear' => date('Y') - 5 
                
            ]);
            echo $this->Form->control('deadline', ['empty' => true]);
            echo $this->Form->control('date_returned', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
