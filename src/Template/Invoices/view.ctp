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
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookstores'), ['controller' => 'Bookstores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookstore'), ['controller' => 'Bookstores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoices view large-9 medium-8 columns content">
    <h3><?= h($invoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $invoice->has('book') ? $this->Html->link($invoice->book->id, ['controller' => 'Books', 'action' => 'view', $invoice->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bookstore') ?></th>
            <td><?= $invoice->has('bookstore') ? $this->Html->link($invoice->bookstore->id, ['controller' => 'Bookstores', 'action' => 'view', $invoice->bookstore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= $invoice->has('stock') ? $this->Html->link($invoice->stock->id, ['controller' => 'Stocks', 'action' => 'view', $invoice->stock->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TotalPrice') ?></th>
            <td><?= $this->Number->format($invoice->TotalPrice) ?></td>
        </tr>
    </table>
</div>
