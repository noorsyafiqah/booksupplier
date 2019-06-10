<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookstores Model
 *
 * @property \App\Model\Table\InvoicesTable|\Cake\ORM\Association\HasMany $Invoices
 *
 * @method \App\Model\Entity\Bookstore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bookstore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bookstore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bookstore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookstore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bookstore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bookstore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bookstore findOrCreate($search, callable $callback = null, $options = [])
 */
class BookstoresTable extends Table
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

        $this->setTable('bookstores');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Invoices', [
            'foreignKey' => 'bookstore_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('Branch')
            ->maxLength('Branch', 200)
            ->requirePresence('Branch', 'create')
            ->allowEmptyString('Branch', false);

        $validator
            ->scalar('Name')
            ->maxLength('Name', 200)
            ->requirePresence('Name', 'create')
            ->allowEmptyString('Name', false);

        $validator
            ->integer('TotalBranch')
            ->requirePresence('TotalBranch', 'create')
            ->allowEmptyString('TotalBranch', false);

        return $validator;
    }
}
