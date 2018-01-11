<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Resultat Entity
 *
 * @property int $idResultat
 * @property int $numEtu
 * @property int $idModule
 * @property string $resultat
 * @property int $nbCredit
 * @property int $numSemestre
 */
class Resultat extends Entity
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
        'idModule' => true,
        'resultat' => true,
        'nbCredit' => true,
        'numSemestre' => true
    ];
}
