<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EtudiantTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EtudiantTable Test Case
 */
class EtudiantTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EtudiantTable
     */
    public $Etudiant;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.etudiant'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Etudiant') ? [] : ['className' => EtudiantTable::class];
        $this->Etudiant = TableRegistry::get('Etudiant', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Etudiant);

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
