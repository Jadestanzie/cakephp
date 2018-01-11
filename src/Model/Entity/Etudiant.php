<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Etudiant Entity
 *
 * @property int $idEtu
 * @property int $numEtu
 * @property string $nom
 * @property string $prenom
 * @property int $numSemestre
 */
class Etudiant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'numEtu' => true,
        'nom' => true,
        'prenom' => true,
        'numSemestre' => true
    ];
}
