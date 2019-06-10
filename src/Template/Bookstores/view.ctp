<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bookstore $bookstore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookstore'), ['action' => 'edit', $bookstore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookstore'), ['action' => 'delete', $bookstore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookstore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookstores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookstore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookstores view large-9 medium-8 columns content">
    <h3><?= h($bookstore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= h($bookstore->Branch) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($bookstore->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookstore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TotalBranch') ?></th>
            <td><?= $this->Number->format($bookstore->TotalBranch) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($bookstore->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('TotalPrice') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('Bookstore Id') ?></th>
                <th scope="col"><?= __('Stock Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bookstore->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->id) ?></td>
                <td><?= h($invoices->TotalPrice) ?></td>
                <td><?= h($invoices->book_id) ?></td>
                <td><?= h($invoices->bookstore_id) ?></td>
                <td><?= h($invoices->stock_id) ?></td>
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
