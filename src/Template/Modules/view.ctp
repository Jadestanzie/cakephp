<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Module'), ['action' => 'edit', $module->idModule]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Module'), ['action' => 'delete', $module->idModule], ['confirm' => __('Are you sure you want to delete # {0}?', $module->idModule)]) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modules view large-9 medium-8 columns content">
    <h3><?= h($module->idModule) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Label') ?></th>
            <td><?= h($module->label) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categorie') ?></th>
            <td><?= h($module->categorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdModule') ?></th>
            <td><?= $this->Number->format($module->idModule) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($module->description)); ?>
    </div>
</div>
