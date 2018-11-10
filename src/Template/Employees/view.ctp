<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees Shifts'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($employee->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($employee->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($employee->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($employee->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($employee->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employee->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Shifts') ?></h4>
        <?php if (!empty($employee->shifts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('Range ') ?></th>
                <th scope="col"><?= __('Hours') ?></th>
                <th scope="col"><?= __('Month') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Date ') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->shifts as $shifts): ?>
            <tr>
                <td><?= h($shifts->id) ?></td>
                <td><?= h($shifts->day) ?></td>
                <td><?= h($shifts->range_) ?></td>
                <td><?= h($shifts->hours) ?></td>
                <td><?= h($shifts->month) ?></td>
                <td><?= h($shifts->year) ?></td>
                <td><?= h($shifts->date_) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shifts', 'action' => 'view', $shifts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shifts', 'action' => 'edit', $shifts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shifts', 'action' => 'delete', $shifts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shifts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
