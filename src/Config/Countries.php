<?php

namespace Reducktion\Socrates\Config;

abstract class Countries
{
    public static $all = [
        'AF',
        'AX',
        'AL',
        'DZ',
        'AS',
        'AD',
        'AO',
        'AI',
        'AQ',
        'AG',
        'AR',
        'AM',
        'AW',
        'AU',
        'AT',
        'AZ',
        'BS',
        'BH',
        'BD',
        'BB',
        'BY',
        'BE',
        'BZ',
        'BJ',
        'BM',
        'BT',
        'BO',
        'BQ',
        'BA',
        'BW',
        'BV',
        'BR',
        'IO',
        'BN',
        'BG',
        'BF',
        'BI',
        'KH',
        'CM',
        'CA',
        'CV',
        'KY',
        'CF',
        'TD',
        'CL',
        'CN',
        'CX',
        'CC',
        'CO',
        'KM',
        'CG',
        'CD',
        'CK',
        'CR',
        'CI',
        'HR',
        'CU',
        'CW',
        'CY',
        'CZ',
        'DK',
        'DJ',
        'DM',
        'DO',
        'EC',
        'EG',
        'SV',
        'GQ',
        'ER',
        'EE',
        'ET',
        'FK',
        'FO',
        'FJ',
        'FI',
        'FR',
        'GF',
        'PF',
        'TF',
        'GA',
        'GM',
        'GE',
        'DE',
        'GH',
        'GI',
        'GR',
        'GL',
        'GD',
        'GP',
        'GU',
        'GT',
        'GG',
        'GN',
        'GW',
        'GY',
        'HT',
        'HM',
        'VA',
        'HN',
        'HK',
        'HU',
        'IS',
        'IN',
        'ID',
        'IR',
        'IQ',
        'IE',
        'IM',
        'IL',
        'IT',
        'JM',
        'JP',
        'JE',
        'JO',
        'KZ',
        'KE',
        'KI',
        'KP',
        'KR',
        'KW',
        'KG',
        'LA',
        'LV',
        'LB',
        'LS',
        'LR',
        'LY',
        'LI',
        'LT',
        'LU',
        'MO',
        'MK',
        'MG',
        'MW',
        'MY',
        'MV',
        'ML',
        'MT',
        'MH',
        'MQ',
        'MR',
        'MU',
        'YT',
        'MX',
        'FM',
        'MD',
        'MC',
        'MN',
        'ME',
        'MS',
        'MA',
        'MZ',
        'MM',
        'NA',
        'NR',
        'NP',
        'NL',
        'NC',
        'NZ',
        'NI',
        'NE',
        'NG',
        'NU',
        'NF',
        'MP',
        'NO',
        'OM',
        'PK',
        'PW',
        'PS',
        'PA',
        'PG',
        'PY',
        'PE',
        'PH',
        'PN',
        'PL',
        'PT',
        'PR',
        'QA',
        'RE',
        'RO',
        'RU',
        'RW',
        'BL',
        'SH',
        'KN',
        'LC',
        'MF',
        'PM',
        'VC',
        'WS',
        'SM',
        'ST',
        'SA',
        'SN',
        'RS',
        'SC',
        'SL',
        'SG',
        'SX',
        'SK',
        'SI',
        'SB',
        'SO',
        'ZA',
        'GS',
        'SS',
        'ES',
        'LK',
        'SD',
        'SR',
        'SJ',
        'SZ',
        'SE',
        'CH',
        'SY',
        'TW',
        'TJ',
        'TZ',
        'TH',
        'TL',
        'TG',
        'TK',
        'TO',
        'TT',
        'TN',
        'TR',
        'TM',
        'TC',
        'TV',
        'UG',
        'UA',
        'AE',
        'GB',
        'US',
        'UM',
        'UY',
        'UZ',
        'VU',
        'VE',
        'VN',
        'VG',
        'VI',
        'WF',
        'EH',
        'XK',
        'YE',
        'ZM',
        'ZW',
    ];

    public static $validators = [
        'AL' => \Reducktion\Socrates\Core\Albania\AlbaniaIdValidator::class,
        'BA' => \Reducktion\Socrates\Core\BosniaAndHerzegovina\BosniaAndHerzegovinaIdValidator::class,
        'BE' => \Reducktion\Socrates\Core\Belgium\BelgiumIdValidator::class,
        'BG' => \Reducktion\Socrates\Core\Bulgaria\BulgariaIdValidator::class,
        'BR' => \Reducktion\Socrates\Core\Brazil\BrazilIdValidator::class,
        'CH' => \Reducktion\Socrates\Core\Switzerland\SwitzerlandIdValidator::class,
        'CZ' => \Reducktion\Socrates\Core\CzechRepublic\CzechRepublicIdValidator::class,
        'DK' => \Reducktion\Socrates\Core\Denmark\DenmarkIdValidator::class,
        'EE' => \Reducktion\Socrates\Core\Estonia\EstoniaIdValidator::class,
        'ES' => \Reducktion\Socrates\Core\Spain\SpainIdValidator::class,
        'FI' => \Reducktion\Socrates\Core\Finland\FinlandIdValidator::class,
        'FR' => \Reducktion\Socrates\Core\France\FranceIdValidator::class,
        'GB' => \Reducktion\Socrates\Core\UnitedKingdom\UnitedKingdomIdValidator::class,
        'GR' => \Reducktion\Socrates\Core\Greece\GreeceIdValidator::class,
        'HR' => \Reducktion\Socrates\Core\Croatia\CroatiaIdValidator::class,
        'HU' => \Reducktion\Socrates\Core\Hungary\HungaryIdValidator::class,
        'IE' => \Reducktion\Socrates\Core\Ireland\IrelandIdValidator::class,
        'IS' => \Reducktion\Socrates\Core\Iceland\IcelandIdValidator::class,
        'IT' => \Reducktion\Socrates\Core\Italy\ItalyIdValidator::class,
        'LT' => \Reducktion\Socrates\Core\Lithuania\LithuaniaIdValidator::class,
        'LU' => \Reducktion\Socrates\Core\Luxembourg\LuxembourgIdValidator::class,
        'LV' => \Reducktion\Socrates\Core\Latvia\LatviaIdValidator::class,
        'MD' => \Reducktion\Socrates\Core\Moldova\MoldovaIdValidator::class,
        'ME' => \Reducktion\Socrates\Core\Montenegro\MontenegroIdValidator::class,
        'MK' => \Reducktion\Socrates\Core\NorthMacedonia\NorthMacedoniaIdValidator::class,
        'NL' => \Reducktion\Socrates\Core\Netherlands\NetherlandsIdValidator::class,
        'NO' => \Reducktion\Socrates\Core\Norway\NorwayIdValidator::class,
        'PL' => \Reducktion\Socrates\Core\Poland\PolandIdValidator::class,
        'PT' => \Reducktion\Socrates\Core\Portugal\PortugalIdValidator::class,
        'RO' => \Reducktion\Socrates\Core\Romania\RomaniaIdValidator::class,
        'RS' => \Reducktion\Socrates\Core\Serbia\SerbiaIdValidator::class,
        'SE' => \Reducktion\Socrates\Core\Sweden\SwedenIdValidator::class,
        'SI' => \Reducktion\Socrates\Core\Slovenia\SloveniaIdValidator::class,
        'SK' => \Reducktion\Socrates\Core\Slovakia\SlovakiaIdValidator::class,
        'TR' => \Reducktion\Socrates\Core\Turkey\TurkeyIdValidator::class,
        'UA' => \Reducktion\Socrates\Core\Ukraine\UkraineIdValidator::class,
        'XK' => \Reducktion\Socrates\Core\Kosovo\KosovoIdValidator::class,
    ];

    public static $extractors = [
        'AL' => \Reducktion\Socrates\Core\Albania\AlbaniaCitizenInformationExtractor::class,
        'BA' => \Reducktion\Socrates\Core\BosniaAndHerzegovina\BosniaAndHerzegovinaCitizenInformationExtractor::class,
        'BE' => \Reducktion\Socrates\Core\Belgium\BelgiumCitizenInformationExtractor::class,
        'BG' => \Reducktion\Socrates\Core\Bulgaria\BulgariaCitizenInformationExtractor::class,
        'DK' => \Reducktion\Socrates\Core\Denmark\DenmarkCitizenInformationExtractor::class,
        'CZ' => \Reducktion\Socrates\Core\CzechRepublic\CzechRepublicCitizenInformationExtractor::class,
        'EE' => \Reducktion\Socrates\Core\Estonia\EstoniaCitizenInformationExtractor::class,
        'FI' => \Reducktion\Socrates\Core\Finland\FinlandCitizenInformationExtractor::class,
        'FR' => \Reducktion\Socrates\Core\France\FranceCitizenInformationExtractor::class,
        'HR' => \Reducktion\Socrates\Core\Croatia\CroatiaCitizenInformationExtractor::class,
        'HU' => \Reducktion\Socrates\Core\Hungary\HungaryCitizenInformationExtractor::class,
        'IS' => \Reducktion\Socrates\Core\Iceland\IcelandCitizenInformationExtractor::class,
        'IT' => \Reducktion\Socrates\Core\Italy\ItalyCitizenInformationExtractor::class,
        'LT' => \Reducktion\Socrates\Core\Lithuania\LithuaniaCitizenInformationExtractor::class,
        'LU' => \Reducktion\Socrates\Core\Luxembourg\LuxembourgCitizenInformationExtractor::class,
        'LV' => \Reducktion\Socrates\Core\Latvia\LatviaCitizenInformationExtractor::class,
        'ME' => \Reducktion\Socrates\Core\Montenegro\MontenegroCitizenInformationExtractor::class,
        'MK' => \Reducktion\Socrates\Core\NorthMacedonia\NorthMacedoniaCitizenInformationExtractor::class,
        'NO' => \Reducktion\Socrates\Core\Norway\NorwayCitizenInformationExtractor::class,
        'PL' => \Reducktion\Socrates\Core\Poland\PolandCitizenInformationExtractor::class,
        'RO' => \Reducktion\Socrates\Core\Romania\RomaniaCitizenInformationExtractor::class,
        'RS' => \Reducktion\Socrates\Core\Serbia\SerbiaCitizenInformationExtractor::class,
        'SE' => \Reducktion\Socrates\Core\Sweden\SwedenCitizenInformationExtractor::class,
        'SI' => \Reducktion\Socrates\Core\Slovenia\SloveniaCitizenInformationExtractor::class,
        'SK' => \Reducktion\Socrates\Core\Slovakia\SlovakiaCitizenInformationExtractor::class,
        'UA' => \Reducktion\Socrates\Core\Ukraine\UkraineCitizenInformationExtractor::class,
        'XK' => \Reducktion\Socrates\Core\Kosovo\KosovoCitizenInformationExtractor::class,
    ];
}
