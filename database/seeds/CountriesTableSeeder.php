<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sortname' => 'AF',
                'name' => 'Afghanistan',
                'phonecode' => 93,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            1 => 
            array (
                'id' => 2,
                'sortname' => 'AL',
                'name' => 'Albania',
                'phonecode' => 355,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            2 => 
            array (
                'id' => 3,
                'sortname' => 'DZ',
                'name' => 'Algeria',
                'phonecode' => 213,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            3 => 
            array (
                'id' => 4,
                'sortname' => 'AS',
                'name' => 'American Samoa',
                'phonecode' => 1684,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            4 => 
            array (
                'id' => 5,
                'sortname' => 'AD',
                'name' => 'Andorra',
                'phonecode' => 376,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            5 => 
            array (
                'id' => 6,
                'sortname' => 'AO',
                'name' => 'Angola',
                'phonecode' => 244,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            6 => 
            array (
                'id' => 7,
                'sortname' => 'AI',
                'name' => 'Anguilla',
                'phonecode' => 1264,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            7 => 
            array (
                'id' => 8,
                'sortname' => 'AQ',
                'name' => 'Antarctica',
                'phonecode' => 0,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            8 => 
            array (
                'id' => 9,
                'sortname' => 'AG',
                'name' => 'Antigua And Barbuda',
                'phonecode' => 1268,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            9 => 
            array (
                'id' => 10,
                'sortname' => 'AR',
                'name' => 'Argentina',
                'phonecode' => 54,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            10 => 
            array (
                'id' => 11,
                'sortname' => 'AM',
                'name' => 'Armenia',
                'phonecode' => 374,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            11 => 
            array (
                'id' => 12,
                'sortname' => 'AW',
                'name' => 'Aruba',
                'phonecode' => 297,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            12 => 
            array (
                'id' => 13,
                'sortname' => 'AU',
                'name' => 'Australia',
                'phonecode' => 61,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            13 => 
            array (
                'id' => 14,
                'sortname' => 'AT',
                'name' => 'Austria',
                'phonecode' => 43,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            14 => 
            array (
                'id' => 15,
                'sortname' => 'AZ',
                'name' => 'Azerbaijan',
                'phonecode' => 994,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            15 => 
            array (
                'id' => 16,
                'sortname' => 'BS',
                'name' => 'Bahamas The',
                'phonecode' => 1242,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            16 => 
            array (
                'id' => 17,
                'sortname' => 'BH',
                'name' => 'Bahrain',
                'phonecode' => 973,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            17 => 
            array (
                'id' => 18,
                'sortname' => 'BD',
                'name' => 'Bangladesh',
                'phonecode' => 880,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            18 => 
            array (
                'id' => 19,
                'sortname' => 'BB',
                'name' => 'Barbados',
                'phonecode' => 1246,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            19 => 
            array (
                'id' => 20,
                'sortname' => 'BY',
                'name' => 'Belarus',
                'phonecode' => 375,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            20 => 
            array (
                'id' => 21,
                'sortname' => 'BE',
                'name' => 'Belgium',
                'phonecode' => 32,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            21 => 
            array (
                'id' => 22,
                'sortname' => 'BZ',
                'name' => 'Belize',
                'phonecode' => 501,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            22 => 
            array (
                'id' => 23,
                'sortname' => 'BJ',
                'name' => 'Benin',
                'phonecode' => 229,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            23 => 
            array (
                'id' => 24,
                'sortname' => 'BM',
                'name' => 'Bermuda',
                'phonecode' => 1441,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            24 => 
            array (
                'id' => 25,
                'sortname' => 'BT',
                'name' => 'Bhutan',
                'phonecode' => 975,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            25 => 
            array (
                'id' => 26,
                'sortname' => 'BO',
                'name' => 'Bolivia',
                'phonecode' => 591,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            26 => 
            array (
                'id' => 27,
                'sortname' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'phonecode' => 387,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            27 => 
            array (
                'id' => 28,
                'sortname' => 'BW',
                'name' => 'Botswana',
                'phonecode' => 267,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            28 => 
            array (
                'id' => 29,
                'sortname' => 'BV',
                'name' => 'Bouvet Island',
                'phonecode' => 0,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            29 => 
            array (
                'id' => 30,
                'sortname' => 'BR',
                'name' => 'Brazil',
                'phonecode' => 55,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            30 => 
            array (
                'id' => 31,
                'sortname' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'phonecode' => 246,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            31 => 
            array (
                'id' => 32,
                'sortname' => 'BN',
                'name' => 'Brunei',
                'phonecode' => 673,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            32 => 
            array (
                'id' => 33,
                'sortname' => 'BG',
                'name' => 'Bulgaria',
                'phonecode' => 359,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            33 => 
            array (
                'id' => 34,
                'sortname' => 'BF',
                'name' => 'Burkina Faso',
                'phonecode' => 226,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            34 => 
            array (
                'id' => 35,
                'sortname' => 'BI',
                'name' => 'Burundi',
                'phonecode' => 257,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            35 => 
            array (
                'id' => 36,
                'sortname' => 'KH',
                'name' => 'Cambodia',
                'phonecode' => 855,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            36 => 
            array (
                'id' => 37,
                'sortname' => 'CM',
                'name' => 'Cameroon',
                'phonecode' => 237,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            37 => 
            array (
                'id' => 38,
                'sortname' => 'CA',
                'name' => 'Canada',
                'phonecode' => 1,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            38 => 
            array (
                'id' => 39,
                'sortname' => 'CV',
                'name' => 'Cape Verde',
                'phonecode' => 238,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            39 => 
            array (
                'id' => 40,
                'sortname' => 'KY',
                'name' => 'Cayman Islands',
                'phonecode' => 1345,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            40 => 
            array (
                'id' => 41,
                'sortname' => 'CF',
                'name' => 'Central African Republic',
                'phonecode' => 236,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            41 => 
            array (
                'id' => 42,
                'sortname' => 'TD',
                'name' => 'Chad',
                'phonecode' => 235,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            42 => 
            array (
                'id' => 43,
                'sortname' => 'CL',
                'name' => 'Chile',
                'phonecode' => 56,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            43 => 
            array (
                'id' => 44,
                'sortname' => 'CN',
                'name' => 'China',
                'phonecode' => 86,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            44 => 
            array (
                'id' => 45,
                'sortname' => 'CX',
                'name' => 'Christmas Island',
                'phonecode' => 61,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            45 => 
            array (
                'id' => 46,
                'sortname' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
                'phonecode' => 672,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            46 => 
            array (
                'id' => 47,
                'sortname' => 'CO',
                'name' => 'Colombia',
                'phonecode' => 57,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            47 => 
            array (
                'id' => 48,
                'sortname' => 'KM',
                'name' => 'Comoros',
                'phonecode' => 269,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            48 => 
            array (
                'id' => 49,
                'sortname' => 'CG',
                'name' => 'Congo',
                'phonecode' => 242,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            49 => 
            array (
                'id' => 50,
                'sortname' => 'CD',
                'name' => 'Congo The Democratic Republic Of The',
                'phonecode' => 242,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            50 => 
            array (
                'id' => 51,
                'sortname' => 'CK',
                'name' => 'Cook Islands',
                'phonecode' => 682,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            51 => 
            array (
                'id' => 52,
                'sortname' => 'CR',
                'name' => 'Costa Rica',
                'phonecode' => 506,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            52 => 
            array (
                'id' => 53,
                'sortname' => 'CI',
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
                'phonecode' => 225,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            53 => 
            array (
                'id' => 54,
                'sortname' => 'HR',
            'name' => 'Croatia (Hrvatska)',
                'phonecode' => 385,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            54 => 
            array (
                'id' => 55,
                'sortname' => 'CU',
                'name' => 'Cuba',
                'phonecode' => 53,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            55 => 
            array (
                'id' => 56,
                'sortname' => 'CY',
                'name' => 'Cyprus',
                'phonecode' => 357,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            56 => 
            array (
                'id' => 57,
                'sortname' => 'CZ',
                'name' => 'Czech Republic',
                'phonecode' => 420,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            57 => 
            array (
                'id' => 58,
                'sortname' => 'DK',
                'name' => 'Denmark',
                'phonecode' => 45,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            58 => 
            array (
                'id' => 59,
                'sortname' => 'DJ',
                'name' => 'Djibouti',
                'phonecode' => 253,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            59 => 
            array (
                'id' => 60,
                'sortname' => 'DM',
                'name' => 'Dominica',
                'phonecode' => 1767,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            60 => 
            array (
                'id' => 61,
                'sortname' => 'DO',
                'name' => 'Dominican Republic',
                'phonecode' => 1809,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            61 => 
            array (
                'id' => 62,
                'sortname' => 'TP',
                'name' => 'East Timor',
                'phonecode' => 670,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            62 => 
            array (
                'id' => 63,
                'sortname' => 'EC',
                'name' => 'Ecuador',
                'phonecode' => 593,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            63 => 
            array (
                'id' => 64,
                'sortname' => 'EG',
                'name' => 'Egypt',
                'phonecode' => 20,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            64 => 
            array (
                'id' => 65,
                'sortname' => 'SV',
                'name' => 'El Salvador',
                'phonecode' => 503,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            65 => 
            array (
                'id' => 66,
                'sortname' => 'GQ',
                'name' => 'Equatorial Guinea',
                'phonecode' => 240,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            66 => 
            array (
                'id' => 67,
                'sortname' => 'ER',
                'name' => 'Eritrea',
                'phonecode' => 291,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            67 => 
            array (
                'id' => 68,
                'sortname' => 'EE',
                'name' => 'Estonia',
                'phonecode' => 372,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            68 => 
            array (
                'id' => 69,
                'sortname' => 'ET',
                'name' => 'Ethiopia',
                'phonecode' => 251,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            69 => 
            array (
                'id' => 70,
                'sortname' => 'XA',
                'name' => 'External Territories of Australia',
                'phonecode' => 61,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            70 => 
            array (
                'id' => 71,
                'sortname' => 'FK',
                'name' => 'Falkland Islands',
                'phonecode' => 500,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            71 => 
            array (
                'id' => 72,
                'sortname' => 'FO',
                'name' => 'Faroe Islands',
                'phonecode' => 298,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            72 => 
            array (
                'id' => 73,
                'sortname' => 'FJ',
                'name' => 'Fiji Islands',
                'phonecode' => 679,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            73 => 
            array (
                'id' => 74,
                'sortname' => 'FI',
                'name' => 'Finland',
                'phonecode' => 358,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            74 => 
            array (
                'id' => 75,
                'sortname' => 'FR',
                'name' => 'France',
                'phonecode' => 33,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            75 => 
            array (
                'id' => 76,
                'sortname' => 'GF',
                'name' => 'French Guiana',
                'phonecode' => 594,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            76 => 
            array (
                'id' => 77,
                'sortname' => 'PF',
                'name' => 'French Polynesia',
                'phonecode' => 689,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            77 => 
            array (
                'id' => 78,
                'sortname' => 'TF',
                'name' => 'French Southern Territories',
                'phonecode' => 0,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            78 => 
            array (
                'id' => 79,
                'sortname' => 'GA',
                'name' => 'Gabon',
                'phonecode' => 241,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            79 => 
            array (
                'id' => 80,
                'sortname' => 'GM',
                'name' => 'Gambia The',
                'phonecode' => 220,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            80 => 
            array (
                'id' => 81,
                'sortname' => 'GE',
                'name' => 'Georgia',
                'phonecode' => 995,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            81 => 
            array (
                'id' => 82,
                'sortname' => 'DE',
                'name' => 'Germany',
                'phonecode' => 49,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            82 => 
            array (
                'id' => 83,
                'sortname' => 'GH',
                'name' => 'Ghana',
                'phonecode' => 233,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            83 => 
            array (
                'id' => 84,
                'sortname' => 'GI',
                'name' => 'Gibraltar',
                'phonecode' => 350,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            84 => 
            array (
                'id' => 85,
                'sortname' => 'GR',
                'name' => 'Greece',
                'phonecode' => 30,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            85 => 
            array (
                'id' => 86,
                'sortname' => 'GL',
                'name' => 'Greenland',
                'phonecode' => 299,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            86 => 
            array (
                'id' => 87,
                'sortname' => 'GD',
                'name' => 'Grenada',
                'phonecode' => 1473,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            87 => 
            array (
                'id' => 88,
                'sortname' => 'GP',
                'name' => 'Guadeloupe',
                'phonecode' => 590,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            88 => 
            array (
                'id' => 89,
                'sortname' => 'GU',
                'name' => 'Guam',
                'phonecode' => 1671,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            89 => 
            array (
                'id' => 90,
                'sortname' => 'GT',
                'name' => 'Guatemala',
                'phonecode' => 502,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            90 => 
            array (
                'id' => 91,
                'sortname' => 'XU',
                'name' => 'Guernsey and Alderney',
                'phonecode' => 44,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            91 => 
            array (
                'id' => 92,
                'sortname' => 'GN',
                'name' => 'Guinea',
                'phonecode' => 224,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            92 => 
            array (
                'id' => 93,
                'sortname' => 'GW',
                'name' => 'Guinea-Bissau',
                'phonecode' => 245,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            93 => 
            array (
                'id' => 94,
                'sortname' => 'GY',
                'name' => 'Guyana',
                'phonecode' => 592,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            94 => 
            array (
                'id' => 95,
                'sortname' => 'HT',
                'name' => 'Haiti',
                'phonecode' => 509,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            95 => 
            array (
                'id' => 96,
                'sortname' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'phonecode' => 0,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            96 => 
            array (
                'id' => 97,
                'sortname' => 'HN',
                'name' => 'Honduras',
                'phonecode' => 504,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            97 => 
            array (
                'id' => 98,
                'sortname' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'phonecode' => 852,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            98 => 
            array (
                'id' => 99,
                'sortname' => 'HU',
                'name' => 'Hungary',
                'phonecode' => 36,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            99 => 
            array (
                'id' => 100,
                'sortname' => 'IS',
                'name' => 'Iceland',
                'phonecode' => 354,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            100 => 
            array (
                'id' => 101,
                'sortname' => 'IN',
                'name' => 'India',
                'phonecode' => 91,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            101 => 
            array (
                'id' => 102,
                'sortname' => 'ID',
                'name' => 'Indonesia',
                'phonecode' => 62,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            102 => 
            array (
                'id' => 103,
                'sortname' => 'IR',
                'name' => 'Iran',
                'phonecode' => 98,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            103 => 
            array (
                'id' => 104,
                'sortname' => 'IQ',
                'name' => 'Iraq',
                'phonecode' => 964,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            104 => 
            array (
                'id' => 105,
                'sortname' => 'IE',
                'name' => 'Ireland',
                'phonecode' => 353,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            105 => 
            array (
                'id' => 106,
                'sortname' => 'IL',
                'name' => 'Israel',
                'phonecode' => 972,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            106 => 
            array (
                'id' => 107,
                'sortname' => 'IT',
                'name' => 'Italy',
                'phonecode' => 39,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            107 => 
            array (
                'id' => 108,
                'sortname' => 'JM',
                'name' => 'Jamaica',
                'phonecode' => 1876,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            108 => 
            array (
                'id' => 109,
                'sortname' => 'JP',
                'name' => 'Japan',
                'phonecode' => 81,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            109 => 
            array (
                'id' => 110,
                'sortname' => 'XJ',
                'name' => 'Jersey',
                'phonecode' => 44,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            110 => 
            array (
                'id' => 111,
                'sortname' => 'JO',
                'name' => 'Jordan',
                'phonecode' => 962,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            111 => 
            array (
                'id' => 112,
                'sortname' => 'KZ',
                'name' => 'Kazakhstan',
                'phonecode' => 7,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            112 => 
            array (
                'id' => 113,
                'sortname' => 'KE',
                'name' => 'Kenya',
                'phonecode' => 254,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            113 => 
            array (
                'id' => 114,
                'sortname' => 'KI',
                'name' => 'Kiribati',
                'phonecode' => 686,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            114 => 
            array (
                'id' => 115,
                'sortname' => 'KP',
                'name' => 'Korea North',
                'phonecode' => 850,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            115 => 
            array (
                'id' => 116,
                'sortname' => 'KR',
                'name' => 'Korea South',
                'phonecode' => 82,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            116 => 
            array (
                'id' => 117,
                'sortname' => 'KW',
                'name' => 'Kuwait',
                'phonecode' => 965,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            117 => 
            array (
                'id' => 118,
                'sortname' => 'KG',
                'name' => 'Kyrgyzstan',
                'phonecode' => 996,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            118 => 
            array (
                'id' => 119,
                'sortname' => 'LA',
                'name' => 'Laos',
                'phonecode' => 856,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            119 => 
            array (
                'id' => 120,
                'sortname' => 'LV',
                'name' => 'Latvia',
                'phonecode' => 371,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            120 => 
            array (
                'id' => 121,
                'sortname' => 'LB',
                'name' => 'Lebanon',
                'phonecode' => 961,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            121 => 
            array (
                'id' => 122,
                'sortname' => 'LS',
                'name' => 'Lesotho',
                'phonecode' => 266,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            122 => 
            array (
                'id' => 123,
                'sortname' => 'LR',
                'name' => 'Liberia',
                'phonecode' => 231,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            123 => 
            array (
                'id' => 124,
                'sortname' => 'LY',
                'name' => 'Libya',
                'phonecode' => 218,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            124 => 
            array (
                'id' => 125,
                'sortname' => 'LI',
                'name' => 'Liechtenstein',
                'phonecode' => 423,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            125 => 
            array (
                'id' => 126,
                'sortname' => 'LT',
                'name' => 'Lithuania',
                'phonecode' => 370,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            126 => 
            array (
                'id' => 127,
                'sortname' => 'LU',
                'name' => 'Luxembourg',
                'phonecode' => 352,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            127 => 
            array (
                'id' => 128,
                'sortname' => 'MO',
                'name' => 'Macau S.A.R.',
                'phonecode' => 853,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            128 => 
            array (
                'id' => 129,
                'sortname' => 'MK',
                'name' => 'Macedonia',
                'phonecode' => 389,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            129 => 
            array (
                'id' => 130,
                'sortname' => 'MG',
                'name' => 'Madagascar',
                'phonecode' => 261,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            130 => 
            array (
                'id' => 131,
                'sortname' => 'MW',
                'name' => 'Malawi',
                'phonecode' => 265,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            131 => 
            array (
                'id' => 132,
                'sortname' => 'MY',
                'name' => 'Malaysia',
                'phonecode' => 60,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            132 => 
            array (
                'id' => 133,
                'sortname' => 'MV',
                'name' => 'Maldives',
                'phonecode' => 960,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            133 => 
            array (
                'id' => 134,
                'sortname' => 'ML',
                'name' => 'Mali',
                'phonecode' => 223,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            134 => 
            array (
                'id' => 135,
                'sortname' => 'MT',
                'name' => 'Malta',
                'phonecode' => 356,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            135 => 
            array (
                'id' => 136,
                'sortname' => 'XM',
            'name' => 'Man (Isle of)',
                'phonecode' => 44,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            136 => 
            array (
                'id' => 137,
                'sortname' => 'MH',
                'name' => 'Marshall Islands',
                'phonecode' => 692,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            137 => 
            array (
                'id' => 138,
                'sortname' => 'MQ',
                'name' => 'Martinique',
                'phonecode' => 596,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            138 => 
            array (
                'id' => 139,
                'sortname' => 'MR',
                'name' => 'Mauritania',
                'phonecode' => 222,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            139 => 
            array (
                'id' => 140,
                'sortname' => 'MU',
                'name' => 'Mauritius',
                'phonecode' => 230,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            140 => 
            array (
                'id' => 141,
                'sortname' => 'YT',
                'name' => 'Mayotte',
                'phonecode' => 269,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            141 => 
            array (
                'id' => 142,
                'sortname' => 'MX',
                'name' => 'Mexico',
                'phonecode' => 52,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            142 => 
            array (
                'id' => 143,
                'sortname' => 'FM',
                'name' => 'Micronesia',
                'phonecode' => 691,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            143 => 
            array (
                'id' => 144,
                'sortname' => 'MD',
                'name' => 'Moldova',
                'phonecode' => 373,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            144 => 
            array (
                'id' => 145,
                'sortname' => 'MC',
                'name' => 'Monaco',
                'phonecode' => 377,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            145 => 
            array (
                'id' => 146,
                'sortname' => 'MN',
                'name' => 'Mongolia',
                'phonecode' => 976,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            146 => 
            array (
                'id' => 147,
                'sortname' => 'MS',
                'name' => 'Montserrat',
                'phonecode' => 1664,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            147 => 
            array (
                'id' => 148,
                'sortname' => 'MA',
                'name' => 'Morocco',
                'phonecode' => 212,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            148 => 
            array (
                'id' => 149,
                'sortname' => 'MZ',
                'name' => 'Mozambique',
                'phonecode' => 258,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            149 => 
            array (
                'id' => 150,
                'sortname' => 'MM',
                'name' => 'Myanmar',
                'phonecode' => 95,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            150 => 
            array (
                'id' => 151,
                'sortname' => 'NA',
                'name' => 'Namibia',
                'phonecode' => 264,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            151 => 
            array (
                'id' => 152,
                'sortname' => 'NR',
                'name' => 'Nauru',
                'phonecode' => 674,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            152 => 
            array (
                'id' => 153,
                'sortname' => 'NP',
                'name' => 'Nepal',
                'phonecode' => 977,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            153 => 
            array (
                'id' => 154,
                'sortname' => 'AN',
                'name' => 'Netherlands Antilles',
                'phonecode' => 599,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            154 => 
            array (
                'id' => 155,
                'sortname' => 'NL',
                'name' => 'Netherlands The',
                'phonecode' => 31,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            155 => 
            array (
                'id' => 156,
                'sortname' => 'NC',
                'name' => 'New Caledonia',
                'phonecode' => 687,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            156 => 
            array (
                'id' => 157,
                'sortname' => 'NZ',
                'name' => 'New Zealand',
                'phonecode' => 64,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            157 => 
            array (
                'id' => 158,
                'sortname' => 'NI',
                'name' => 'Nicaragua',
                'phonecode' => 505,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            158 => 
            array (
                'id' => 159,
                'sortname' => 'NE',
                'name' => 'Niger',
                'phonecode' => 227,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            159 => 
            array (
                'id' => 160,
                'sortname' => 'NG',
                'name' => 'Nigeria',
                'phonecode' => 234,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            160 => 
            array (
                'id' => 161,
                'sortname' => 'NU',
                'name' => 'Niue',
                'phonecode' => 683,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            161 => 
            array (
                'id' => 162,
                'sortname' => 'NF',
                'name' => 'Norfolk Island',
                'phonecode' => 672,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            162 => 
            array (
                'id' => 163,
                'sortname' => 'MP',
                'name' => 'Northern Mariana Islands',
                'phonecode' => 1670,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            163 => 
            array (
                'id' => 164,
                'sortname' => 'NO',
                'name' => 'Norway',
                'phonecode' => 47,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            164 => 
            array (
                'id' => 165,
                'sortname' => 'OM',
                'name' => 'Oman',
                'phonecode' => 968,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            165 => 
            array (
                'id' => 166,
                'sortname' => 'PK',
                'name' => 'Pakistan',
                'phonecode' => 92,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            166 => 
            array (
                'id' => 167,
                'sortname' => 'PW',
                'name' => 'Palau',
                'phonecode' => 680,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            167 => 
            array (
                'id' => 168,
                'sortname' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'phonecode' => 970,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            168 => 
            array (
                'id' => 169,
                'sortname' => 'PA',
                'name' => 'Panama',
                'phonecode' => 507,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            169 => 
            array (
                'id' => 170,
                'sortname' => 'PG',
                'name' => 'Papua new Guinea',
                'phonecode' => 675,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            170 => 
            array (
                'id' => 171,
                'sortname' => 'PY',
                'name' => 'Paraguay',
                'phonecode' => 595,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            171 => 
            array (
                'id' => 172,
                'sortname' => 'PE',
                'name' => 'Peru',
                'phonecode' => 51,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            172 => 
            array (
                'id' => 173,
                'sortname' => 'PH',
                'name' => 'Philippines',
                'phonecode' => 63,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            173 => 
            array (
                'id' => 174,
                'sortname' => 'PN',
                'name' => 'Pitcairn Island',
                'phonecode' => 0,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            174 => 
            array (
                'id' => 175,
                'sortname' => 'PL',
                'name' => 'Poland',
                'phonecode' => 48,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            175 => 
            array (
                'id' => 176,
                'sortname' => 'PT',
                'name' => 'Portugal',
                'phonecode' => 351,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            176 => 
            array (
                'id' => 177,
                'sortname' => 'PR',
                'name' => 'Puerto Rico',
                'phonecode' => 1787,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            177 => 
            array (
                'id' => 178,
                'sortname' => 'QA',
                'name' => 'Qatar',
                'phonecode' => 974,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            178 => 
            array (
                'id' => 179,
                'sortname' => 'RE',
                'name' => 'Reunion',
                'phonecode' => 262,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            179 => 
            array (
                'id' => 180,
                'sortname' => 'RO',
                'name' => 'Romania',
                'phonecode' => 40,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            180 => 
            array (
                'id' => 181,
                'sortname' => 'RU',
                'name' => 'Russia',
                'phonecode' => 70,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            181 => 
            array (
                'id' => 182,
                'sortname' => 'RW',
                'name' => 'Rwanda',
                'phonecode' => 250,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            182 => 
            array (
                'id' => 183,
                'sortname' => 'SH',
                'name' => 'Saint Helena',
                'phonecode' => 290,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            183 => 
            array (
                'id' => 184,
                'sortname' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'phonecode' => 1869,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            184 => 
            array (
                'id' => 185,
                'sortname' => 'LC',
                'name' => 'Saint Lucia',
                'phonecode' => 1758,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            185 => 
            array (
                'id' => 186,
                'sortname' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'phonecode' => 508,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            186 => 
            array (
                'id' => 187,
                'sortname' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'phonecode' => 1784,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            187 => 
            array (
                'id' => 188,
                'sortname' => 'WS',
                'name' => 'Samoa',
                'phonecode' => 684,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            188 => 
            array (
                'id' => 189,
                'sortname' => 'SM',
                'name' => 'San Marino',
                'phonecode' => 378,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            189 => 
            array (
                'id' => 190,
                'sortname' => 'ST',
                'name' => 'Sao Tome and Principe',
                'phonecode' => 239,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            190 => 
            array (
                'id' => 191,
                'sortname' => 'SA',
                'name' => 'Saudi Arabia',
                'phonecode' => 966,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            191 => 
            array (
                'id' => 192,
                'sortname' => 'SN',
                'name' => 'Senegal',
                'phonecode' => 221,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            192 => 
            array (
                'id' => 193,
                'sortname' => 'RS',
                'name' => 'Serbia',
                'phonecode' => 381,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            193 => 
            array (
                'id' => 194,
                'sortname' => 'SC',
                'name' => 'Seychelles',
                'phonecode' => 248,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            194 => 
            array (
                'id' => 195,
                'sortname' => 'SL',
                'name' => 'Sierra Leone',
                'phonecode' => 232,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            195 => 
            array (
                'id' => 196,
                'sortname' => 'SG',
                'name' => 'Singapore',
                'phonecode' => 65,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            196 => 
            array (
                'id' => 197,
                'sortname' => 'SK',
                'name' => 'Slovakia',
                'phonecode' => 421,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            197 => 
            array (
                'id' => 198,
                'sortname' => 'SI',
                'name' => 'Slovenia',
                'phonecode' => 386,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            198 => 
            array (
                'id' => 199,
                'sortname' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'phonecode' => 44,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            199 => 
            array (
                'id' => 200,
                'sortname' => 'SB',
                'name' => 'Solomon Islands',
                'phonecode' => 677,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            200 => 
            array (
                'id' => 201,
                'sortname' => 'SO',
                'name' => 'Somalia',
                'phonecode' => 252,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            201 => 
            array (
                'id' => 202,
                'sortname' => 'ZA',
                'name' => 'South Africa',
                'phonecode' => 27,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            202 => 
            array (
                'id' => 203,
                'sortname' => 'GS',
                'name' => 'South Georgia',
                'phonecode' => 0,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            203 => 
            array (
                'id' => 204,
                'sortname' => 'SS',
                'name' => 'South Sudan',
                'phonecode' => 211,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            204 => 
            array (
                'id' => 205,
                'sortname' => 'ES',
                'name' => 'Spain',
                'phonecode' => 34,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            205 => 
            array (
                'id' => 206,
                'sortname' => 'LK',
                'name' => 'Sri Lanka',
                'phonecode' => 94,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            206 => 
            array (
                'id' => 207,
                'sortname' => 'SD',
                'name' => 'Sudan',
                'phonecode' => 249,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            207 => 
            array (
                'id' => 208,
                'sortname' => 'SR',
                'name' => 'Suriname',
                'phonecode' => 597,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            208 => 
            array (
                'id' => 209,
                'sortname' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phonecode' => 47,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            209 => 
            array (
                'id' => 210,
                'sortname' => 'SZ',
                'name' => 'Swaziland',
                'phonecode' => 268,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            210 => 
            array (
                'id' => 211,
                'sortname' => 'SE',
                'name' => 'Sweden',
                'phonecode' => 46,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            211 => 
            array (
                'id' => 212,
                'sortname' => 'CH',
                'name' => 'Switzerland',
                'phonecode' => 41,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            212 => 
            array (
                'id' => 213,
                'sortname' => 'SY',
                'name' => 'Syria',
                'phonecode' => 963,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            213 => 
            array (
                'id' => 214,
                'sortname' => 'TW',
                'name' => 'Taiwan',
                'phonecode' => 886,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            214 => 
            array (
                'id' => 215,
                'sortname' => 'TJ',
                'name' => 'Tajikistan',
                'phonecode' => 992,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            215 => 
            array (
                'id' => 216,
                'sortname' => 'TZ',
                'name' => 'Tanzania',
                'phonecode' => 255,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            216 => 
            array (
                'id' => 217,
                'sortname' => 'TH',
                'name' => 'Thailand',
                'phonecode' => 66,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            217 => 
            array (
                'id' => 218,
                'sortname' => 'TG',
                'name' => 'Togo',
                'phonecode' => 228,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            218 => 
            array (
                'id' => 219,
                'sortname' => 'TK',
                'name' => 'Tokelau',
                'phonecode' => 690,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            219 => 
            array (
                'id' => 220,
                'sortname' => 'TO',
                'name' => 'Tonga',
                'phonecode' => 676,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            220 => 
            array (
                'id' => 221,
                'sortname' => 'TT',
                'name' => 'Trinidad And Tobago',
                'phonecode' => 1868,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            221 => 
            array (
                'id' => 222,
                'sortname' => 'TN',
                'name' => 'Tunisia',
                'phonecode' => 216,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            222 => 
            array (
                'id' => 223,
                'sortname' => 'TR',
                'name' => 'Turkey',
                'phonecode' => 90,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            223 => 
            array (
                'id' => 224,
                'sortname' => 'TM',
                'name' => 'Turkmenistan',
                'phonecode' => 7370,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            224 => 
            array (
                'id' => 225,
                'sortname' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'phonecode' => 1649,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            225 => 
            array (
                'id' => 226,
                'sortname' => 'TV',
                'name' => 'Tuvalu',
                'phonecode' => 688,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            226 => 
            array (
                'id' => 227,
                'sortname' => 'UG',
                'name' => 'Uganda',
                'phonecode' => 256,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            227 => 
            array (
                'id' => 228,
                'sortname' => 'UA',
                'name' => 'Ukraine',
                'phonecode' => 380,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            228 => 
            array (
                'id' => 229,
                'sortname' => 'AE',
                'name' => 'United Arab Emirates',
                'phonecode' => 971,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            229 => 
            array (
                'id' => 230,
                'sortname' => 'GB',
                'name' => 'United Kingdom',
                'phonecode' => 44,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            230 => 
            array (
                'id' => 231,
                'sortname' => 'US',
                'name' => 'United States',
                'phonecode' => 1,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            231 => 
            array (
                'id' => 232,
                'sortname' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'phonecode' => 1,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            232 => 
            array (
                'id' => 233,
                'sortname' => 'UY',
                'name' => 'Uruguay',
                'phonecode' => 598,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            233 => 
            array (
                'id' => 234,
                'sortname' => 'UZ',
                'name' => 'Uzbekistan',
                'phonecode' => 998,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            234 => 
            array (
                'id' => 235,
                'sortname' => 'VU',
                'name' => 'Vanuatu',
                'phonecode' => 678,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            235 => 
            array (
                'id' => 236,
                'sortname' => 'VA',
            'name' => 'Vatican City State (Holy See)',
                'phonecode' => 39,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            236 => 
            array (
                'id' => 237,
                'sortname' => 'VE',
                'name' => 'Venezuela',
                'phonecode' => 58,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            237 => 
            array (
                'id' => 238,
                'sortname' => 'VN',
                'name' => 'Vietnam',
                'phonecode' => 84,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            238 => 
            array (
                'id' => 239,
                'sortname' => 'VG',
            'name' => 'Virgin Islands (British)',
                'phonecode' => 1284,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            239 => 
            array (
                'id' => 240,
                'sortname' => 'VI',
            'name' => 'Virgin Islands (US)',
                'phonecode' => 1340,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            240 => 
            array (
                'id' => 241,
                'sortname' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'phonecode' => 681,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            241 => 
            array (
                'id' => 242,
                'sortname' => 'EH',
                'name' => 'Western Sahara',
                'phonecode' => 212,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            242 => 
            array (
                'id' => 243,
                'sortname' => 'YE',
                'name' => 'Yemen',
                'phonecode' => 967,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            243 => 
            array (
                'id' => 244,
                'sortname' => 'YU',
                'name' => 'Yugoslavia',
                'phonecode' => 38,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            244 => 
            array (
                'id' => 245,
                'sortname' => 'ZM',
                'name' => 'Zambia',
                'phonecode' => 260,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
            245 => 
            array (
                'id' => 246,
                'sortname' => 'ZW',
                'name' => 'Zimbabwe',
                'phonecode' => 263,
                'created_at' => '2019-11-18 11:47:23',
                'updated_at' => '2019-11-18 11:47:23',
            ),
        ));
        
        
    }
}