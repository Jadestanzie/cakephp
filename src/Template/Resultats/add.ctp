<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resultat $resultat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Resultats'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="resultats form large-9 medium-8 columns content">
    <?= $this->Form->create($resultat) ?>
    <fieldset>
        <legend><?= __('Add Resultat') ?></legend>
        <?php
            echo $this->Form->control('numEtu');
            echo $this->Form->control('idModule');
            echo $this->Form->control('resultat');
            echo $this->Form->control('nbCredit');
            echo $this->Form->control('numSemestre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
