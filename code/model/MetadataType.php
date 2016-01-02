<?php

/**
 * Milkyway Multimedia
 * MetadataType.php
 *
 * @package milkyway-multimedia/ss-dataobject-metadata
 * @author Mellisa Hankins <mell@milkywaymultimedia.com.au>
 */
class MetadataType extends DataObject
{

    private static $singular_name = 'Metadata';

    private static $description = 'This is the metadata/attribute type that is used as a specification for the DataObject';

    private static $db = [
        'Title'       => 'Varchar',
        'Reference'   => 'Varchar',
        'Default'     => 'Varchar',
        'Description' => 'HTMLText',
        'Enabled'     => 'Boolean',
    ];

    private static $defaults = [
        'Enabled'  => true,
    ];

    public function onBeforeWrite()
    {
        parent::onBeforeWrite();

        if (!$this->Reference) {
            $this->Reference = implode(' - ', $this->referenceParts());
        }
    }

    public function referenceParts()
    {
        $parts = [$this->Title];
        return $parts;
    }
}
