<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Records Model
 *
 * @method \App\Model\Entity\Record newEmptyEntity()
 * @method \App\Model\Entity\Record newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Record[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Record get($primaryKey, $options = [])
 * @method \App\Model\Entity\Record findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Record patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Record[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Record|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Record saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Record[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Record[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Record[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Record[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RecordsTable extends Table
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

        $this->setTable('records');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('RecordId')
            ->requirePresence('RecordId', 'create')
            ->notEmptyString('RecordId');

        $validator
            ->integer('AdvertiserId')
            ->requirePresence('AdvertiserId', 'create')
            ->notEmptyString('AdvertiserId');

        $validator
            ->integer('NetworkOfferId')
            ->requirePresence('NetworkOfferId', 'create')
            ->notEmptyString('NetworkOfferId');

        $validator
            ->integer('TaskCampaignId')
            ->requirePresence('TaskCampaignId', 'create')
            ->notEmptyString('TaskCampaignId');

        $validator
            ->scalar('LongName')
            ->requirePresence('LongName', 'create')
            ->notEmptyString('LongName');

        $validator
            ->scalar('ShortName')
            ->requirePresence('ShortName', 'create')
            ->notEmptyString('ShortName');

        $validator
            ->scalar('Description')
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description');

        $validator
            ->scalar('Instructions')
            ->requirePresence('Instructions', 'create')
            ->notEmptyString('Instructions');

        $validator
            ->scalar('Categories')
            ->requirePresence('Categories', 'create')
            ->notEmptyString('Categories');

        $validator
            ->scalar('Countries')
            ->requirePresence('Countries', 'create')
            ->notEmptyString('Countries');


        $validator
            ->numeric('Bid')
            ->requirePresence('Bid', 'create')
            ->notEmptyString('Bid');

        $validator
            ->scalar('ImageUrl')
            ->requirePresence('ImageUrl', 'create')
            ->notEmptyString('ImageUrl');

        $validator
            ->scalar('TrackingUrl')
            ->requirePresence('TrackingUrl', 'create')
            ->notEmptyString('TrackingUrl');

        $validator
            ->dateTime('LastChangeDate')
            ->requirePresence('LastChangeDate', 'create')
            ->notEmptyDateTime('LastChangeDate');

        $validator
            ->integer('MultipleConvAllowed')
            ->requirePresence('MultipleConvAllowed', 'create')
            ->notEmptyString('MultipleConvAllowed');

        $validator
            ->scalar('MultipleConvRules')
            ->requirePresence('MultipleConvRules', 'create')
            ->notEmptyString('MultipleConvRules');

        $validator
            ->numeric('DailyCap')
            ->requirePresence('DailyCap', 'create')
            ->notEmptyString('DailyCap');

        $validator
            ->numeric('TotalCap')
            ->requirePresence('TotalCap', 'create')
            ->notEmptyString('TotalCap');

        $validator
            ->numeric('NetworkECPC')
            ->requirePresence('NetworkECPC', 'create')
            ->notEmptyString('NetworkECPC');

        $validator
            ->numeric('TbECPC')
            ->requirePresence('TbECPC', 'create')
            ->notEmptyString('TbECPC');

        $validator
            ->scalar('SupportUrl')
            ->requirePresence('SupportUrl', 'create')
            ->notEmptyString('SupportUrl');

        $validator
            ->scalar('PreviewUrl')
            ->requirePresence('PreviewUrl', 'create')
            ->notEmptyString('PreviewUrl');

        $validator
            ->scalar('UserAgents')
            ->requirePresence('UserAgents', 'create')
            ->notEmptyString('UserAgents');

        $validator
            ->scalar('DeviceType')
            ->requirePresence('DeviceType', 'create')
            ->notEmptyString('DeviceType');

        $validator
            ->scalar('OperatingSystem')
            ->requirePresence('OperatingSystem', 'create')
            ->notEmptyString('OperatingSystem');

        $validator
            ->scalar('Other')
            ->requirePresence('Other', 'create')
            ->notEmptyString('Other');

        $validator
            ->scalar('Hash')
            ->requirePresence('Hash', 'create')
            ->notEmptyString('Hash');

        $validator
            ->boolean('IsActive')
            ->requirePresence('IsActive', 'create')
            ->notEmptyString('IsActive');

        $validator
            ->scalar('Network')
            ->requirePresence('Network', 'create')
            ->notEmptyString('Network');

        return $validator;
    }
}
