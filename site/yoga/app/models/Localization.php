<?php

class Localization
{


    public const ARRAY_FIELDS_LOCALIZATION_EN = [
        '/localEn' => 'English',
        '/localRu' => 'Russian'
    ];
    public const ARRAY_FIELDS_LOCALIZATION_RU = [
        '/localRu' => 'Russian',
        '/localEn' => 'English'
    ];

    public function checkFieldsLocalization (string $active)
    {
        if($active == 'ru'){
            return Localization::ARRAY_FIELDS_LOCALIZATION_RU;
        }
        if($active == 'en'){
            return Localization::ARRAY_FIELDS_LOCALIZATION_EN;
        }
    }
}