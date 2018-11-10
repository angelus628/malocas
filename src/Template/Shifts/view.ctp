<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shift'), ['action' => 'edit', $shift->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shift'), ['action' => 'delete', $shift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shift->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees Shifts'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="shifts view large-9 medium-8 columns content">
    <h3><?= h($shift->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Day') ?></th>
            <td><?= h($shift->day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Range ') ?></th>
            <td><?= h($shift->range_) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= h($shift->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shift->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hours') ?></th>
            <td><?= $this->Number->format($shift->hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($shift->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date ') ?></th>
            <td><?= $this->Number->format($shift->date_) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($shift->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shift->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->name) ?></td>
                <td><?= h($employees->lastname) ?></td>
                <td><?= h($employees->phone) ?></td>
                <td><?= h($employees->address) ?></td>
                <td><?= h($employees->email) ?></td>
                <td><?= h($employees->created) ?></td>
                <td><?= h($employees->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
