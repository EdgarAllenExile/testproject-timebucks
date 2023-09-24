<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="records view content">
            <h3><?= h($record->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($record->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('RecordId') ?></th>
                    <td><?= $this->Number->format($record->RecordId) ?></td>
                </tr>
                <tr>
                    <th><?= __('AdvertiserId') ?></th>
                    <td><?= $this->Number->format($record->AdvertiserId) ?></td>
                </tr>
                <tr>
                    <th><?= __('NetworkOfferId') ?></th>
                    <td><?= $this->Number->format($record->NetworkOfferId) ?></td>
                </tr>
                <tr>
                    <th><?= __('TaskCampaignId') ?></th>
                    <td><?= $this->Number->format($record->TaskCampaignId) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bid') ?></th>
                    <td><?= $this->Number->format($record->Bid) ?></td>
                </tr>
                <tr>
                    <th><?= __('MultipleConvAllowed') ?></th>
                    <td><?= $this->Number->format($record->MultipleConvAllowed) ?></td>
                </tr>
                <tr>
                    <th><?= __('DailyCap') ?></th>
                    <td><?= $this->Number->format($record->DailyCap) ?></td>
                </tr>
                <tr>
                    <th><?= __('TotalCap') ?></th>
                    <td><?= $this->Number->format($record->TotalCap) ?></td>
                </tr>
                <tr>
                    <th><?= __('NetworkECPC') ?></th>
                    <td><?= $this->Number->format($record->NetworkECPC) ?></td>
                </tr>
                <tr>
                    <th><?= __('TbECPC') ?></th>
                    <td><?= $this->Number->format($record->TbECPC) ?></td>
                </tr>
                <tr>
                    <th><?= __('LastChangeDate') ?></th>
                    <td><?= h($record->LastChangeDate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($record->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($record->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('IsActive') ?></th>
                    <td><?= $record->IsActive ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('LongName') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->LongName)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('ShortName') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->ShortName)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->Description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Instructions') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->Instructions)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Categories') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->Categories)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('ImageUrl') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->ImageUrl)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('TrackingUrl') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->TrackingUrl)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('MultipleConvRules') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->MultipleConvRules)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('SupportUrl') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->SupportUrl)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('PreviewUrl') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->PreviewUrl)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('UserAgents') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->UserAgents)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('DeviceType') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->DeviceType)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('OperatingSystem') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->OperatingSystem)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Other') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->Other)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Hash') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->Hash)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Network') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($record->Network)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
