<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WorkOrders Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\InvoicesTable|\Cake\ORM\Association\BelongsTo $Invoices
 * @property \App\Model\Table\InvoicesTable|\Cake\ORM\Association\HasMany $Invoices
 *
 * @method \App\Model\Entity\WorkOrder get($primaryKey, $options = [])
 * @method \App\Model\Entity\WorkOrder newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WorkOrder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WorkOrder|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WorkOrder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WorkOrder[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WorkOrder findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WorkOrdersTable extends Table
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

        $this->setTable('work_orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id'
        ]);
        $this->hasMany('Invoices', [
            'foreignKey' => 'work_order_id'
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
            ->scalar('user_name')
            ->maxLength('user_name', 25)
            ->allowEmpty('user_name');

        $validator
            ->scalar('product')
            ->maxLength('product', 50)
            ->requirePresence('product', 'create')
            ->notEmpty('product');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->scalar('description')
            ->maxLength('description', 455)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('windows_key')
            ->maxLength('windows_key', 30)
            ->allowEmpty('windows_key');

        $validator
            ->scalar('office_key')
            ->maxLength('office_key', 30)
            ->allowEmpty('office_key');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->integer('discount')
            ->allowEmpty('discount');

        $validator
            ->scalar('order_status')
            ->maxLength('order_status', 255)
            ->requirePresence('order_status', 'create')
            ->notEmpty('order_status');

        $validator
            ->scalar('notes')
            ->maxLength('notes', 255)
            ->allowEmpty('notes');

        $validator
            ->dateTime('date_subbed')
            ->allowEmpty('date_subbed');

        $validator
            ->dateTime('deadline')
            ->allowEmpty('deadline');

        $validator
            ->dateTime('date_returned')
            ->allowEmpty('date_returned');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'));

        return $rules;
    }
}
