<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Record> $records
 */
?>
<div class="records index content">
    <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Records') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('RecordId') ?></th>
                    <th><?= $this->Paginator->sort('AdvertiserId') ?></th>
                    <th><?= $this->Paginator->sort('NetworkOfferId') ?></th>
                    <th><?= $this->Paginator->sort('TaskCampaignId') ?></th>
                    <th><?= $this->Paginator->sort('Bid') ?></th>
                    <th><?= $this->Paginator->sort('LastChangeDate') ?></th>
                    <th><?= $this->Paginator->sort('MultipleConvAllowed') ?></th>
                    <th><?= $this->Paginator->sort('DailyCap') ?></th>
                    <th><?= $this->Paginator->sort('TotalCap') ?></th>
                    <th><?= $this->Paginator->sort('NetworkECPC') ?></th>
                    <th><?= $this->Paginator->sort('TbECPC') ?></th>
                    <th><?= $this->Paginator->sort('IsActive') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                <tr>
                    <td><?= $this->Number->format($record->id) ?></td>
                    <td><?= $this->Number->format($record->RecordId) ?></td>
                    <td><?= $this->Number->format($record->AdvertiserId) ?></td>
                    <td><?= $this->Number->format($record->NetworkOfferId) ?></td>
                    <td><?= $this->Number->format($record->TaskCampaignId) ?></td>
                    <td><?= $this->Number->format($record->Bid) ?></td>
                    <td><?= h($record->LastChangeDate) ?></td>
                    <td><?= $this->Number->format($record->MultipleConvAllowed) ?></td>
                    <td><?= $this->Number->format($record->DailyCap) ?></td>
                    <td><?= $this->Number->format($record->TotalCap) ?></td>
                    <td><?= $this->Number->format($record->NetworkECPC) ?></td>
                    <td><?= $this->Number->format($record->TbECPC) ?></td>
                    <td><?= h($record->IsActive) ?></td>
                    <td><?= h($record->created) ?></td>
                    <td><?= h($record->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $record->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
