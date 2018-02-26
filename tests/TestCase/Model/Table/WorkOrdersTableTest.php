<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkOrdersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkOrdersTable Test Case
 */
class WorkOrdersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkOrdersTable
     */
    public $WorkOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.work_orders',
        'app.users',
        'app.customers',
        'app.invoices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WorkOrders') ? [] : ['className' => WorkOrdersTable::class];
        $this->WorkOrders = TableRegistry::get('WorkOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WorkOrders);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
