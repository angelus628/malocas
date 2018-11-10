<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shift $shift
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shifts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees Shifts'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="shifts form large-9 medium-8 columns content">
    <?= $this->Form->create($shift) ?>
    <fieldset>
        <legend><?= __('Add Shift') ?></legend>
        <?php
        echo $this->Form->control('day', ['options' => [
                'monday' => 'Lunes',
                'tuesday' => 'Martes',
                'wendsday' => 'Miércoles',
                'thursday' => 'Jueves',
                'friday' => 'Viernes',
                'saturday' => 'Sábado',
                'sunay' => 'Domingo',
            ]]);
        echo $this->Form->control('range_', ['options' => [
                '6-2' => '6am a 2pm',
                '2-10' => '2pm a 10pm',
                '10-6' => '10pm a 6am',
        ]]);
        echo $this->Form->hidden('hours', ['default' => '8']);
        echo $this->Form->hidden('month', ['default' => strftime('%B')]);
        echo $this->Form->hidden('year', ['default' => date('Y')]);
        echo $this->Form->hidden('date_', ['default' => date('d')]);
        echo $this->Form->control('employees._ids', ['options' => $employees]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
