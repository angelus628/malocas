<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesShiftsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesShiftsTable Test Case
 */
class EmployeesShiftsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesShiftsTable
     */
    public $EmployeesShifts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employees_shifts',
        'app.employees',
        'app.shifts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeesShifts') ? [] : ['className' => EmployeesShiftsTable::class];
        $this->EmployeesShifts = TableRegistry::getTableLocator()->get('EmployeesShifts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeesShifts);

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
