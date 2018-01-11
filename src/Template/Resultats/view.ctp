<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resultat $resultat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resultat'), ['action' => 'edit', $resultat->idResultat]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resultat'), ['action' => 'delete', $resultat->idResultat], ['confirm' => __('Are you sure you want to delete # {0}?', $resultat->idResultat)]) ?> </li>
        <li><?= $this->Html->link(__('List Resultats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resultat'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resultats view large-9 medium-8 columns content">
    <h3><?= h($resultat->idResultat) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Resultat') ?></th>
            <td><?= h($resultat->resultat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdResultat') ?></th>
            <td><?= $this->Number->format($resultat->idResultat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumEtu') ?></th>
            <td><?= $this->Number->format($resultat->numEtu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdModule') ?></th>
            <td><?= $this->Number->format($resultat->idModule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NbCredit') ?></th>
            <td><?= $this->Number->format($resultat->nbCredit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NumSemestre') ?></th>
            <td><?= $this->Number->format($resultat->numSemestre) ?></td>
        </tr>
    </table>
</div>
