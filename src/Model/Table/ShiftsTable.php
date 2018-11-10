<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shifts Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsToMany $Employees
 *
 * @method \App\Model\Entity\Shift get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shift newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shift[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shift|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shift|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shift patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shift[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shift findOrCreate($search, callable $callback = null, $options = [])
 */
class ShiftsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('shifts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Employees', [
            'foreignKey' => 'shift_id',
            'targetForeignKey' => 'employee_id',
            'joinTable' => 'employees_shifts'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('day')
            ->maxLength('day', 255)
            ->requirePresence('day', 'create')
            ->notEmpty('day');

        $validator
            ->scalar('range_')
            ->maxLength('range_', 255)
            ->requirePresence('range_', 'create')
            ->notEmpty('range_');

        $validator
            ->integer('hours')
            ->requirePresence('hours', 'create')
            ->notEmpty('hours');

        $validator
            ->scalar('month')
            ->maxLength('month', 255)
            ->requirePresence('month', 'create')
            ->notEmpty('month');

        $validator
            ->integer('year')
            ->requirePresence('year', 'create')
            ->notEmpty('year');

        $validator
            ->integer('date_')
            ->requirePresence('date_', 'create')
            ->notEmpty('date_');

        return $validator;
    }
}
