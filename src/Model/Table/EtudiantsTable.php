<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Etudiants Model
 *
 * @method \App\Model\Entity\Etudiant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Etudiant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Etudiant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Etudiant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Etudiant findOrCreate($search, callable $callback = null, $options = [])
 */
class EtudiantsTable extends Table
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

        $this->setTable('etudiants');
        $this->setDisplayField('idEtu');
        $this->setPrimaryKey('idEtu');
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
            ->integer('idEtu')
            ->allowEmpty('idEtu', 'create');

        $validator
            ->integer('numEtu')
            ->requirePresence('numEtu', 'create')
            ->notEmpty('numEtu')
            ->minLength('numEtu', 5, "Le numéro étudiant doit comporter au moins 5 chiffres", 'create')
            ->greaterThan('numEtu', 10000, "Le numéro etudiant doit être supérieur à 10 000");
        

        $validator
            ->scalar('nom')
            ->maxLength('nom', 30)
            ->requirePresence('nom', 'create')
            ->notEmpty('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 30)
            ->requirePresence('prenom', 'create')
            ->notEmpty('prenom');

        $validator
            ->integer('numSemestre')
            ->requirePresence('numSemestre', 'create')
            ->notEmpty('numSemestre')
            ->greaterThan('numSemestre', 0, "Le numéro de semestre doit être positif")
            ->lessThan('numSemestre', 13, "Le numéro de semestres doit être inférieur à 13");

        return $validator;
    }
}
