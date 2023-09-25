<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClicktrackTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClicktrackTable Test Case
 */
class ClicktrackTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClicktrackTable
     */
    protected $Clicktrack;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Clicktrack',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Clicktrack') ? [] : ['className' => ClicktrackTable::class];
        $this->Clicktrack = $this->getTableLocator()->get('Clicktrack', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Clicktrack);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClicktrackTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
