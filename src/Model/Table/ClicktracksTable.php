<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clicktrack Model
 *
 * @method \App\Model\Entity\Clicktrack newEmptyEntity()
 * @method \App\Model\Entity\Clicktrack newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Clicktrack[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clicktrack get($primaryKey, $options = [])
 * @method \App\Model\Entity\Clicktrack findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Clicktrack patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Clicktrack[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clicktrack|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clicktrack saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Clicktrack[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clicktrack[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clicktrack[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Clicktrack[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClicktracksTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->belongsTo('Records', [
            'foreignKey' => 'NetworkOfferId'
        ]);
        
        $this->setTable('clicktracks');
        $this->setDisplayField('NetworkOfferId');
        $this->setPrimaryKey('NetworkOfferId');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('NetworkOfferId')
            ->requirePresence('NetworkOfferId', 'create')
            ->notEmptyString('NetworkOfferId');

        $validator
            ->integer('ClickCount')
            ->notEmptyString('ClickCount');

        return $validator;
    }
}
