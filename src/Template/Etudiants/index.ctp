<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant[]|\Cake\Collection\CollectionInterface $etudiants
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['controller' => 'Modules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Resultats'), ['controller' => 'Resultats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etudiants index large-9 medium-8 columns content">
    <h3><?= __('Etudiants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idEtu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numEtu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numSemestre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= $this->Number->format($etudiant->idEtu) ?></td>
                <td><?= $this->Number->format($etudiant->numEtu) ?></td>
                <td><?= h($etudiant->nom) ?></td>
                <td><?= h($etudiant->prenom) ?></td>
                <td><?= $this->Number->format($etudiant->numSemestre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $etudiant->idEtu]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etudiant->idEtu]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etudiant->idEtu], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->idEtu)]) ?>
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
