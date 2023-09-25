<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateClickTracks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('clicktracks');
        $table->addColumn('NetworkOfferId', 'integer' , [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('ClickCount', 'integer' , [
            'default' => 0,
            'null' => false,
        ]);
        $table->create();
    }
}
