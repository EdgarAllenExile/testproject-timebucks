<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClicktrackFixture
 */
class ClicktrackFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'clicktrack';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'NetworkOfferId' => 1,
                'ClickCount' => 1,
            ],
        ];
        parent::init();
    }
}
