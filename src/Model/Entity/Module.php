<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Module Entity
 *
 * @property int $idModule
 * @property string $label
 * @property string $categorie
 * @property string $description
 */
class Module extends Entity
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
        'label' => true,
        'categorie' => true,
        'description' => true
    ];
}
