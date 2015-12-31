<?php namespace Milkyway\SS\Metadata\Extensions;

/**
 * Milkyway Multimedia
 * ManyMany.php
 *
 * @package milkyway-multimedia/ss-dataobject-metadata
 * @author Mellisa Hankins <mell@milkywaymultimedia.com.au>
 */
class ManyMany extends \DataExtension
{
    private static $many_many = [
        'Metadata' => 'MetadataType',
    ];

    private static $many_many_extraFields = [
        'Metadata' => [
            'Sort' => 'Int',
            'Detail'  => 'Varchar',
        ],
    ];

    public static function get_extra_config($class, $extension, $args)
    {
        $type = isset($args[0]) ? $args[0] : $class;

        \Config::inst()->update('Metadata', 'belongs_many_many', [
                $type => $class,
            ]
        );

        return null;
    }
}
