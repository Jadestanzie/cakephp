<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant $etudiant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etudiant->idEtu],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->idEtu)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="etudiants form large-9 medium-8 columns content">
    <?= $this->Form->create($etudiant) ?>
    <fieldset>
        <legend><?= __('Edit Etudiant') ?></legend>
        <?php
            echo $this->Form->control('numEtu');
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('numSemestre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
