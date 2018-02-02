<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Word Entity
 *
 * @property int $id
 * @property string $wordtitle
 * @property string $word_syllables
 * @property string $picture
 * @property string $picture_dir
 * @property string $soundfile
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Word extends Entity
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
        'wordtitle' => true,
        'word_syllables' => true,
        'picture' => true,
        'picture_dir' => true,
        'soundfile' => true,
        'created' => true,
        'modified' => true
    ];
}
