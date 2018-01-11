<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant $etudiant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Etudiant'), ['action' => 'edit', $etudiant->idEtu]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etudiant'), ['action' => 'delete', $etudiant->idEtu], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->idEtu)]) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="etudiants view large-9 medium-8 columns content">
    <h3><?= h($etudiant->idEtu) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($etudiant->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($etudiant->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdEtu') ?></th>
            <td><?= $this->Number->format($etudiant->idEtu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumEtu') ?></th>
            <td><?= $this->Number->format($etudiant->numEtu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumSemestre') ?></th>
            <td><?= $this->Number->format($etudiant->numSemestre) ?></td>
        </tr>
    </table>
</div>
