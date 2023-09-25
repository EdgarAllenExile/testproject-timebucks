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
            <?= $this->Html->link(__('Edit Clicktrack'), ['action' => 'edit', $clicktrack->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clicktrack'), ['action' => 'delete', $clicktrack->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clicktrack->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clicktrack'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clicktrack'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="clicktrack view content">
            <h3><?= h($clicktrack->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($clicktrack->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('NetworkOfferId') ?></th>
                    <td><?= $this->Number->format($clicktrack->NetworkOfferId) ?></td>
                </tr>
                <tr>
                    <th><?= __('ClickCount') ?></th>
                    <td><?= $this->Number->format($clicktrack->ClickCount) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
