<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateRecords extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
            $table = $this->table('records');
            $table->addColumn('RecordId', 'integer' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('AdvertiserId', 'integer' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('NetworkOfferId', 'integer' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('TaskCampaignId', 'integer' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('LongName', 'text' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('ShortName', 'text' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('Description', 'text' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('Instructions', 'text' , [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('Categories', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('Bid', 'float', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('ImageUrl', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('TrackingUrl', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('LastChangeDate', 'datetime', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('MultipleConvAllowed', 'integer', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('MultipleConvRules', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('DailyCap', 'float', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('TotalCap', 'float', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('NetworkECPC', 'float', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('TbECPC', 'float', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('SupportUrl', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('PreviewUrl', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('UserAgents', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('DeviceType', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('OperatingSystem', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('Other', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('Hash', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('IsActive', 'boolean', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('Network', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('created', 'datetime', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => false,
            ]);
            $table->create();
    }
}
