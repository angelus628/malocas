<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployeesShift $employeesShift
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employees Shift'), ['action' => 'edit', $employeesShift->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employees Shift'), ['action' => 'delete', $employeesShift->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeesShift->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees Shifts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employees Shift'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shifts'), ['controller' => 'Shifts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shift'), ['controller' => 'Shifts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeesShifts view large-9 medium-8 columns content">
    <h3><?= h($employeesShift->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $employeesShift->has('employee') ? $this->Html->link($employeesShift->employee->name, ['controller' => 'Employees', 'action' => 'view', $employeesShift->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shift') ?></th>
            <td><?= $employeesShift->has('shift') ? $this->Html->link($employeesShift->shift->id, ['controller' => 'Shifts', 'action' => 'view', $employeesShift->shift->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employeesShift->id) ?></td>
        </tr>
    </table>
</div>
