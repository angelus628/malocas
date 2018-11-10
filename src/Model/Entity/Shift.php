<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shift Entity
 *
 * @property int $id
 * @property string $day
 * @property string $range_
 * @property int $hours
 * @property string $month
 * @property int $year
 * @property int $date_
 *
 * @property \App\Model\Entity\Employee[] $employees
 */
class Shift extends Entity
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
        'day' => true,
        'range_' => true,
        'hours' => true,
        'month' => true,
        'year' => true,
        'date_' => true,
        'employees' => true
    ];

    protected function _getLabel()
    {
        return "{$this->_properties['day']} {$this->_properties['range_']} {$this->_properties['month']}";
    }
}
