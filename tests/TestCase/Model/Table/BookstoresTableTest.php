<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookstoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookstoresTable Test Case
 */
class BookstoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookstoresTable
     */
    public $Bookstores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bookstores',
        'app.Invoices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bookstores') ? [] : ['className' => BookstoresTable::class];
        $this->Bookstores = TableRegistry::getTableLocator()->get('Bookstores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bookstores);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
