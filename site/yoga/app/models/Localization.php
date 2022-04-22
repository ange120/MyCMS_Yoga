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

    public function checkFieldsLocalization (string $local)
    {
        if($local == 'en'){
            return Localization::ARRAY_FIELDS_LOCALIZATION_EN;
        }
        if($local == 'ru'){
            return Localization::ARRAY_FIELDS_LOCALIZATION_RU;
        }
    }
}