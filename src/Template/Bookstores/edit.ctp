<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstore $bookstore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bookstore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bookstore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bookstores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bookstores form large-9 medium-8 columns content">
    <?= $this->Form->create($bookstore) ?>
    <fieldset>
        <legend><?= __('Edit Bookstore') ?></legend>
        <?php
            echo $this->Form->control('Branch');
            echo $this->Form->control('Name');
            echo $this->Form->control('TotalBranch');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
