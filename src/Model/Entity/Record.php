<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Record Entity
 *
 * @property int $id
 * @property int $RecordId
 * @property int $AdvertiserId
 * @property int $NetworkOfferId
 * @property int $TaskCampaignId
 * @property string $LongName
 * @property string $ShortName
 * @property string $Description
 * @property string $Instructions
 * @property string $Categories
 * @property float $Bid
 * @property string $ImageUrl
 * @property string $TrackingUrl
 * @property \Cake\I18n\DateTime $LastChangeDate
 * @property int $MultipleConvAllowed
 * @property string $MultipleConvRules
 * @property float $DailyCap
 * @property float $TotalCap
 * @property float $NetworkECPC
 * @property float $TbECPC
 * @property string $SupportUrl
 * @property string $PreviewUrl
 * @property string $UserAgents
 * @property string $DeviceType
 * @property string $OperatingSystem
 * @property string $Other
 * @property string $Hash
 * @property bool $IsActive
 * @property string $Network
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Record extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'RecordId' => true,
        'AdvertiserId' => true,
        'NetworkOfferId' => true,
        'TaskCampaignId' => true,
        'LongName' => true,
        'ShortName' => true,
        'Description' => true,
        'Instructions' => true,
        'Categories' => true,
        'Bid' => true,
        'ImageUrl' => true,
        'TrackingUrl' => true,
        'LastChangeDate' => true,
        'MultipleConvAllowed' => true,
        'MultipleConvRules' => true,
        'DailyCap' => true,
        'TotalCap' => true,
        'NetworkECPC' => true,
        'TbECPC' => true,
        'SupportUrl' => true,
        'PreviewUrl' => true,
        'UserAgents' => true,
        'DeviceType' => true,
        'OperatingSystem' => true,
        'Other' => true,
        'Hash' => true,
        'IsActive' => true,
        'Network' => true,
        'created' => true,
        'modified' => true,
    ];
}
