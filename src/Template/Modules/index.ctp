<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module[]|\Cake\Collection\CollectionInterface $modules
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Module'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Resultats'), ['controller' => 'Resultats', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="modules index large-9 medium-8 columns content">
    <h3><?= __('Modules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idModule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('label') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorie') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modules as $module): ?>
            <tr>
                <td><?= $this->Number->format($module->idModule) ?></td>
                <td><?= h($module->label) ?></td>
                <td><?= h($module->categorie) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $module->idModule]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $module->idModule]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $module->idModule], ['confirm' => __('Are you sure you want to delete # {0}?', $module->idModule)]) ?>
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
