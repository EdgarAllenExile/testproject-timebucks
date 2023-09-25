<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clicktrack $clicktrack
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clicktrack->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clicktrack->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clicktrack'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="clicktrack form content">
            <?= $this->Form->create($clicktrack) ?>
            <fieldset>
                <legend><?= __('Edit Clicktrack') ?></legend>
                <?php
                    echo $this->Form->control('NetworkOfferId');
                    echo $this->Form->control('ClickCount');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
