<?php

declare(strict_types=1);

namespace YoastSeoForTypo3\YoastSeo\Utility;

use YoastSeoForTypo3\YoastSeo\Form\Element;
use YoastSeoForTypo3\YoastSeo\MetaTag\Generator;

class ConfigurationUtility
{
    /**
     * @return array<int, array<int, string>>
     */
    public static function getFormEngineNodes(): array
    {
        return [
            1514550050 => ['snippetPreview', Element\SnippetPreview::class],
            1514728465 => ['readabilityAnalysis', Element\ReadabilityAnalysis::class],
            1514830899 => ['focusKeywordAnalysis', Element\FocusKeywordAnalysis::class],
            1519937113 => ['insights', Element\Insights::class],
            1552342645 => ['cornerstone', Element\Cornerstone::class],
            1552511464 => ['internalLinkingSuggestion', Element\InternalLinkingSuggestion::class],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public static function getDefaultConfiguration(): array
    {
        return [
            'allowedDoktypes' => [
                'page' => 1,
                'backend_section' => 5,
            ],
            'translations' => [
                'availableLocales' => [
                    'ar',
                    'bg_BG',
                    'bs_BA',
                    'ca',
                    'da_DK',
                    'de_CH',
                    'de_DE',
                    'el',
                    'en_AU',
                    'en_CA',
                    'en_GB',
                    'en_NZ',
                    'en_ZA',
                    'es_AR',
                    'es_CL',
                    'es_CR',
                    'es_EC',
                    'es_ES',
                    'es_MX',
                    'fa_IR',
                    'fi',
                    'fr_BE',
                    'fr_CA',
                    'fr_FR',
                    'gl_ES',
                    'he_IL',
                    'hi_IN',
                    'hr',
                    'id_ID',
                    'it_IT',
                    'ja',
                    'ko_KR',
                    'it_LT',
                    'nb_NO',
                    'nl_BE',
                    'nl_NL',
                    'pl_PL',
                    'pl_AO',
                    'pt_BR',
                    'pt_PT',
                    'ro_RO',
                    'ru_RU',
                    'sk_SK',
                    'sq',
                    'sr_RS',
                    'sv_SE',
                    'tr_TR',
                    'uk',
                    'vi',
                    'zh_CN',
                    'zh_HK',
                    'zh_TW',
                ],
                'languageKeyToLocaleMapping' => [
                    'bg' => 'bg_BG',
                    'da' => 'da_DK',
                    'de' => 'de_DE',
                    'en' => 'en_GB',
                    'es' => 'es_ES',
                    'fa' => 'fa_IR',
                    'fr' => 'fr_FR',
                    'he' => 'he_IL',
                    'it' => 'it_IT',
                    'no' => 'nb_NO',
                    'nl' => 'nl_NL',
                    'pl' => 'pl_PL',
                    'pt' => 'pt_PT',
                    'ru' => 'ru_RU',
                    'sk' => 'sk_SK',
                    'sv' => 'sv_SE',
                    'tr' => 'tr_TR',
                ],
            ],
            'previewSettings' => [
                'basicAuth' => [
                    'username' => '',
                    'password' => '',
                ],
            ],
            'recordMetaTags' => [
                'description' => Generator\DescriptionGenerator::class,
                'opengraph' => Generator\OpenGraphGenerator::class,
                'twitter' => Generator\TwitterGenerator::class,
            ],
        ];
    }
}