<?php

namespace Translator;

use Exception;

class Translator
{
    private static $localesDir = 'inc/locales';
    private static $initialized = false;

    public static $localesShorts = [];
    public static $localesData = [];
    private static $currentLocale;

    public static function init(): void
    {
        self::$localesDir = get_template_directory() . '/' . self::$localesDir;
        self::addLocale('pl_PL', 'pl');
        self::$currentLocale = 'pl_PL';
        self::$initialized = true;
    }

    public static function addLocale($localeName, $localeShort): void
    {
        $langPath = self::$localesDir . '/' . $localeName . '.php';
        if (stream_resolve_include_path($langPath)) {
            self::$localesShorts[] = $localeShort;
            self::$localesShorts[$localeShort] = $localeName;

            self::$localesData[] = $localeName;
            self::$localesData[$localeName] = require($langPath);
        }
    }

    public static function setLocale($localeName): void
    {
        self::$currentLocale = $localeName;
    }

    public static function setLocaleByShort($localeShort): void
    {
        if(in_array($localeShort, self::$localesShorts))
            self::$currentLocale = self::$localesShorts[$localeShort];
    }

    public static function get($localeKey): mixed
    {
        $localeValue = '';

        if (!self::$initialized)
            self::init();

        $localeValue = self::$localesData[self::$currentLocale][$localeKey];

        return $localeValue;
    }
}
