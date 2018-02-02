<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Words Model
 *
 * @method \App\Model\Entity\Word get($primaryKey, $options = [])
 * @method \App\Model\Entity\Word newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Word[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Word|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Word patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Word[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Word findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class WordsTable extends Table
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

        $this->setTable('words');
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
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('wordtitle')
            ->maxLength('wordtitle', 40)
            ->requirePresence('wordtitle', 'create')
            ->notEmpty('wordtitle');

        $validator
            ->scalar('word_syllables')
            ->maxLength('word_syllables', 150)
            ->requirePresence('word_syllables', 'create')
            ->notEmpty('word_syllables');

        $validator
            ->scalar('picture')
            ->maxLength('picture', 255)
            ->allowEmpty('picture');

        $validator
            ->scalar('picture_dir')
            ->maxLength('picture_dir', 255)
            ->requirePresence('picture_dir', 'create')
            ->notEmpty('picture_dir');

        $validator
            ->scalar('soundfile')
            ->maxLength('soundfile', 255)
            ->allowEmpty('soundfile');

        return $validator;
    }
}
