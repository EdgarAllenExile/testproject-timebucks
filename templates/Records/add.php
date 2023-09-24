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
            <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="records form content">
            <?= $this->Form->create($record) ?>
            <fieldset>
                <legend><?= __('Add Record') ?></legend>
                <?php
                    echo $this->Form->control('RecordId');
                    echo $this->Form->control('AdvertiserId');
                    echo $this->Form->control('NetworkOfferId');
                    echo $this->Form->control('TaskCampaignId');
                    echo $this->Form->control('LongName');
                    echo $this->Form->control('ShortName');
                    echo $this->Form->control('Description');
                    echo $this->Form->control('Instructions');
                    echo $this->Form->control('Categories');
                    echo $this->Form->control('Bid');
                    echo $this->Form->control('ImageUrl');
                    echo $this->Form->control('TrackingUrl');
                    echo $this->Form->control('LastChangeDate');
                    echo $this->Form->control('MultipleConvAllowed');
                    echo $this->Form->control('MultipleConvRules');
                    echo $this->Form->control('DailyCap');
                    echo $this->Form->control('TotalCap');
                    echo $this->Form->control('NetworkECPC');
                    echo $this->Form->control('TbECPC');
                    echo $this->Form->control('SupportUrl');
                    echo $this->Form->control('PreviewUrl');
                    echo $this->Form->control('UserAgents');
                    echo $this->Form->control('DeviceType');
                    echo $this->Form->control('OperatingSystem');
                    echo $this->Form->control('Other');
                    echo $this->Form->control('Hash');
                    echo $this->Form->control('IsActive');
                    echo $this->Form->control('Network');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
