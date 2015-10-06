<?php

namespace Evheniy\SitemapXmlBundle\Validate;

use Evheniy\SitemapXmlBundle\Entity\VideoEntity as Entity;
use Evheniy\SitemapXmlBundle\Exception\ValidateEntityException;

/**
 * Class VideoEntity
 * @package Evheniy\SitemapXmlBundle\Validate
 * https://developers.google.com/webmasters/videosearch/sitemaps
 */
class VideoEntity extends Entity implements ValidateEntityInterface
{
    /**
     * @var array
     */
    public static $currencies = array(
        'ADP',
        'AED',
        'AFA',
        'AFN',
        'ALK',
        'ALL',
        'AMD',
        'ANG',
        'AOA',
        'AOK',
        'AON',
        'AOR',
        'ARA',
        'ARL',
        'ARM',
        'ARP',
        'ARS',
        'ATS',
        'AUD',
        'AWG',
        'AZM',
        'AZN',
        'BAD',
        'BAM',
        'BAN',
        'BBD',
        'BDT',
        'BEC',
        'BEF',
        'BEL',
        'BGL',
        'BGM',
        'BGN',
        'BGO',
        'BHD',
        'BIF',
        'BMD',
        'BND',
        'BOB',
        'BOL',
        'BOP',
        'BOV',
        'BRB',
        'BRC',
        'BRE',
        'BRL',
        'BRN',
        'BRR',
        'BRZ',
        'BSD',
        'BTN',
        'BUK',
        'BWP',
        'BYB',
        'BYR',
        'BZD',
        'CAD',
        'CDF',
        'CHE',
        'CHF',
        'CHW',
        'CLE',
        'CLF',
        'CLP',
        'CNX',
        'CNY',
        'COP',
        'COU',
        'CRC',
        'CSD',
        'CSK',
        'CUC',
        'CUP',
        'CVE',
        'CYP',
        'CZK',
        'DDM',
        'DEM',
        'DJF',
        'DKK',
        'DOP',
        'DZD',
        'ECS',
        'ECV',
        'EEK',
        'EGP',
        'ERN',
        'ESA',
        'ESB',
        'ESP',
        'ETB',
        'EUR',
        'FIM',
        'FJD',
        'FKP',
        'FRF',
        'GBP',
        'GEK',
        'GEL',
        'GHC',
        'GHS',
        'GIP',
        'GMD',
        'GNF',
        'GNS',
        'GQE',
        'GRD',
        'GTQ',
        'GWE',
        'GWP',
        'GYD',
        'HKD',
        'HNL',
        'HRD',
        'HRK',
        'HTG',
        'HUF',
        'IDR',
        'IEP',
        'ILP',
        'ILR',
        'ILS',
        'INR',
        'IQD',
        'IRR',
        'ISJ',
        'ISK',
        'ITL',
        'JMD',
        'JOD',
        'JPY',
        'KES',
        'KGS',
        'KHR',
        'KMF',
        'KPW',
        'KRH',
        'KRO',
        'KRW',
        'KWD',
        'KYD',
        'KZT',
        'LAK',
        'LBP',
        'LKR',
        'LRD',
        'LSL',
        'LTL',
        'LTT',
        'LUC',
        'LUF',
        'LUL',
        'LVL',
        'LVR',
        'LYD',
        'MAD',
        'MAF',
        'MCF',
        'MDC',
        'MDL',
        'MGA',
        'MGF',
        'MKD',
        'MKN',
        'MLF',
        'MMK',
        'MNT',
        'MOP',
        'MRO',
        'MTL',
        'MTP',
        'MUR',
        'MVP',
        'MVR',
        'MWK',
        'MXN',
        'MXP',
        'MXV',
        'MYR',
        'MZE',
        'MZM',
        'MZN',
        'NAD',
        'NGN',
        'NIC',
        'NIO',
        'NLG',
        'NOK',
        'NPR',
        'NZD',
        'OMR',
        'PAB',
        'PEI',
        'PEN',
        'PES',
        'PGK',
        'PHP',
        'PKR',
        'PLN',
        'PLZ',
        'PTE',
        'PYG',
        'QAR',
        'RHD',
        'ROL',
        'RON',
        'RSD',
        'RUB',
        'RUR',
        'RWF',
        'SAR',
        'SBD',
        'SCR',
        'SDD',
        'SDG',
        'SDP',
        'SEK',
        'SGD',
        'SHP',
        'SIT',
        'SKK',
        'SLL',
        'SOS',
        'SRD',
        'SRG',
        'SSP',
        'STD',
        'SUR',
        'SVC',
        'SYP',
        'SZL',
        'THB',
        'TJR',
        'TJS',
        'TMM',
        'TMT',
        'TND',
        'TOP',
        'TPE',
        'TRL',
        'TRY',
        'TTD',
        'TWD',
        'TZS',
        'UAH',
        'UAK',
        'UGS',
        'UGX',
        'USD',
        'USN',
        'USS',
        'UYI',
        'UYP',
        'UYU',
        'UZS',
        'VEB',
        'VEF',
        'VND',
        'VNN',
        'VUV',
        'WST',
        'XAF',
        'XCD',
        'XEU',
        'XFO',
        'XFU',
        'XOF',
        'XPF',
        'XRE',
        'YDD',
        'YER',
        'YUD',
        'YUM',
        'YUN',
        'YUR',
        'ZAL',
        'ZAR',
        'ZMK',
        'ZMW',
        'ZRN',
        'ZRZ',
        'ZWD',
        'ZWL',
        'ZWR',
    );

    /**
     * @var array
     */
    protected static $territories = array(
        'AC',
        'AD',
        'AE',
        'AF',
        'AG',
        'AI',
        'AL',
        'AM',
        'AN',
        'AO',
        'AQ',
        'AR',
        'AS',
        'AT',
        'AU',
        'AW',
        'AX',
        'AZ',
        'BA',
        'BB',
        'BD',
        'BE',
        'BF',
        'BG',
        'BH',
        'BI',
        'BJ',
        'BL',
        'BM',
        'BN',
        'BO',
        'BQ',
        'BR',
        'BS',
        'BT',
        'BV',
        'BW',
        'BY',
        'BZ',
        'CA',
        'CC',
        'CD',
        'CF',
        'CG',
        'CH',
        'CI',
        'CK',
        'CL',
        'CM',
        'CN',
        'CO',
        'CP',
        'CR',
        'CU',
        'CV',
        'CW',
        'CX',
        'CY',
        'CZ',
        'DE',
        'DG',
        'DJ',
        'DK',
        'DM',
        'DO',
        'DZ',
        'EA',
        'EC',
        'EE',
        'EG',
        'EH',
        'ER',
        'ES',
        'ET',
        'EU',
        'FI',
        'FJ',
        'FK',
        'FM',
        'FO',
        'FR',
        'GA',
        'GB',
        'GD',
        'GE',
        'GF',
        'GG',
        'GH',
        'GI',
        'GL',
        'GM',
        'GN',
        'GP',
        'GQ',
        'GR',
        'GS',
        'GT',
        'GU',
        'GW',
        'GY',
        'HK',
        'HM',
        'HN',
        'HR',
        'HT',
        'HU',
        'IC',
        'ID',
        'IE',
        'IL',
        'IM',
        'IN',
        'IO',
        'IQ',
        'IR',
        'IS',
        'IT',
        'JE',
        'JM',
        'JO',
        'JP',
        'KE',
        'KG',
        'KH',
        'KI',
        'KM',
        'KN',
        'KP',
        'KR',
        'KW',
        'KY',
        'KZ',
        'LA',
        'LB',
        'LC',
        'LI',
        'LK',
        'LR',
        'LS',
        'LT',
        'LU',
        'LV',
        'LY',
        'MA',
        'MC',
        'MD',
        'ME',
        'MF',
        'MG',
        'MH',
        'MK',
        'ML',
        'MM',
        'MN',
        'MO',
        'MP',
        'MQ',
        'MR',
        'MS',
        'MT',
        'MU',
        'MV',
        'MW',
        'MX',
        'MY',
        'MZ',
        'NA',
        'NC',
        'NE',
        'NF',
        'NG',
        'NI',
        'NL',
        'NO',
        'NP',
        'NR',
        'NU',
        'NZ',
        'OM',
        'PA',
        'PE',
        'PF',
        'PG',
        'PH',
        'PK',
        'PL',
        'PM',
        'PN',
        'PR',
        'PS',
        'PT',
        'PW',
        'PY',
        'QA',
        'RE',
        'RO',
        'RS',
        'RU',
        'RW',
        'SA',
        'SB',
        'SC',
        'SD',
        'SE',
        'SG',
        'SH',
        'SI',
        'SJ',
        'SK',
        'SL',
        'SM',
        'SN',
        'SO',
        'SR',
        'SS',
        'ST',
        'SV',
        'SX',
        'SY',
        'SZ',
        'TA',
        'TC',
        'TD',
        'TF',
        'TG',
        'TH',
        'TJ',
        'TK',
        'TL',
        'TM',
        'TN',
        'TO',
        'TR',
        'TT',
        'TV',
        'TW',
        'TZ',
        'UA',
        'UG',
        'UM',
        'US',
        'UY',
        'UZ',
        'VA',
        'VC',
        'VE',
        'VG',
        'VI',
        'VN',
        'VU',
        'WF',
        'WS',
        'XK',
        'YE',
        'YT',
        'ZA',
        'ZM',
        'ZW',
    );

    /**
     * @return $this
     * @throws ValidateEntityException
     */
    public function validate()
    {
        if (empty($this->thumbnailLoc)) {
            throw new ValidateEntityException('"ThumbnailLoc" field must be not empty!');
        }
        if (filter_var($this->thumbnailLoc, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"ThumbnailLoc" field must be valid url!');
        }
        if (empty($this->title)) {
            throw new ValidateEntityException('"Title" field must be not empty!');
        }
        if (empty($this->description)) {
            throw new ValidateEntityException('"Description" field must be not empty!');
        }
        if (empty($this->contentLoc) && empty($this->playerLoc['url'])) {
            throw new ValidateEntityException('You must specify at least one of "ContentLoc" or "PlayerLoc"');
        }
        if (!empty($this->contentLoc) && filter_var($this->contentLoc, FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('A URL pointing to the actual video media file. This file should be in .mpg, .mpeg, .mp4, .m4v, .mov, .wmv, .asf, .avi, .ra, .ram, .rm, .flv, or other video file format.');
        }
        if (!empty($this->rating) && !$this->isValidRating()) {
            throw new ValidateEntityException('"Rating" field should be between 0.0 and 1.0!');
        }
        if (!empty($this->tag) && str_word_count($this->tag, 0) > 32) {
            throw new ValidateEntityException('"Tag" field can have 32 words maximum!');
        }
        if (!empty($this->category) && strlen($this->category) > 256) {
            throw new ValidateEntityException('"Category" field value should be a string no longer than 256 characters!');
        }
        $this->validatePlayerLoc();
        $this->validateRestriction();
        $this->validateGalleryLoc();
        $this->validatePrice();
        $this->validateUploader();
        $this->validatePlatform();

        return $this;
    }

    /**
     * @throws ValidateEntityException
     */
    protected function validatePlayerLoc()
    {
        if (!empty($this->playerLoc['url']) && filter_var($this->playerLoc['url'], FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"PlayerLoc[url]" field must be valid url!');
        }
        $this->playerLoc['allowEmbed'] = boolval($this->playerLoc['allowEmbed']);
    }

    /**
     * @return bool
     */
    protected function isValidRating()
    {

        return ($this->rating >= 0.0) && ($this->rating <= 1.0);
    }

    /**
     * @throws ValidateEntityException
     */
    protected function validateRestriction()
    {
        if (!empty($this->restriction['countries'])) {
            if (empty($this->restriction['relationship']) || !in_array($this->restriction['relationship'], array('allow', 'deny'))) {
                throw new ValidateEntityException('"Restriction[relationship]" field must be "allow" or "deny"!');
            }
            if (count(
                array_filter(
                    explode(' ', $this->restriction['countries']),
                    /**
                     *
                     */
                    function ($value) {
                    return !in_array(
                        trim($value),
                        self::$territories
                    );
                    }
                )
            )) {
                throw new ValidateEntityException('"Restriction[countries]" field must be valid country code like "US", "GB"...');
            }
        }
    }

    /**
     * @throws ValidateEntityException
     */
    protected function validateGalleryLoc()
    {
        if (!empty($this->galleryLoc['url']) && filter_var($this->galleryLoc['url'], FILTER_VALIDATE_URL) === false) {
            throw new ValidateEntityException('"GalleryLoc[url]" field must be valid url!');
        }
    }

    /**
     * @throws ValidateEntityException
     */
    protected function validatePrice()
    {
        if (!empty($this->price['price'])) {
            if (empty($this->price['currency']) || !in_array($this->price['currency'], self::$currencies)) {
                throw new ValidateEntityException('"Price[currency]" field must be valid currency code!');
            }
        }
    }

    /**
     * @throws ValidateEntityException
     */
    protected function validateUploader()
    {
        if (!empty($this->uploader['name'])) {
            if (!empty($this->uploader['info']) && filter_var($this->uploader['info'], FILTER_VALIDATE_URL) === false) {
                throw new ValidateEntityException('"Uploader[info]" field must be valid url!');
            }
        }
    }

    /**
     * @throws ValidateEntityException
     */
    protected function validatePlatform()
    {
        if (!empty($this->platform['code'])) {
            if (empty($this->platform['relationship']) || !in_array($this->platform['relationship'], array('allow', 'deny'))) {
                throw new ValidateEntityException('"Platform[relationship]" field must be "allow" or "deny"!');
            }
            if (count(
                array_filter(
                    explode(' ', $this->platform['code']),
                    /**
                     *
                     */
                    function ($value) {
                    return !in_array(
                        trim($value),
                        array('WEB', 'MOBILE', 'TV')
                    );
                    }
                )
            )) {
                throw new ValidateEntityException('"Platform[code]" field must be "WEB", "MOBILE", "TV"!');
            }
        }
    }
}