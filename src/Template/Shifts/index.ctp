<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift[]|\Cake\Collection\CollectionInterface $shifts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shift'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees Shifts'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="shifts index large-9 medium-8 columns content">
    <h3><?= __('Shifts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('range_') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shifts as $shift): ?>
            <tr>
                <td><?= $this->Number->format($shift->id) ?></td>
                <td><?= h($shift->day) ?></td>
                <td><?= h($shift->range_) ?></td>
                <td><?= $this->Number->format($shift->hours) ?></td>
                <td><?= h($shift->month) ?></td>
                <td><?= $this->Number->format($shift->year) ?></td>
                <td><?= $this->Number->format($shift->date_) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shift->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shift->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id)]) ?>
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
