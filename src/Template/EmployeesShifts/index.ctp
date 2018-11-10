<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesShift[]|\Cake\Collection\CollectionInterface $employeesShifts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employees Shift'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeesShifts index large-9 medium-8 columns content">
    <h3><?= __('Employees Shifts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shift_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeesShifts as $employeesShift): ?>
            <tr>
                <td><?= $this->Number->format($employeesShift->id) ?></td>
                <td><?= $employeesShift->has('employee') ? $this->Html->link($employeesShift->employee->name, ['controller' => 'Employees', 'action' => 'view', $employeesShift->employee->id]) : '' ?></td>
                <td><?= $employeesShift->has('shift') ? $this->Html->link("{$employeesShift->shift->day} {$employeesShift->shift->range_}", ['controller' => 'Shifts', 'action' => 'view', $employeesShift->shift->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeesShift->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeesShift->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeesShift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesShift->id)]) ?>
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
