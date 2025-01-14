<?php
/**
 * User: Wisp X
 * Date: 2018/10/2
 * Time: 13:02
 * Link: https://github.com/wisp-x
 */

// [命名规则配置文件]

$time = time();
$rand = function_exists('session_create_id') ? session_create_id() : uniqid();
$md5 = md5('LSKY PRO' . $rand . time());
$uniqid = substr(md5($rand), 8, 13);

return [
    'path' => [
        [
            'name' => '{Y}',
            'example' => '2018',
            'explain' => 'Year',
            'value' => date('Y'),
        ],
        [
            'name' => '{m}',
            'example' => '01',
            'explain' => 'Month',
            'value' => date('m'),
        ],
        [
            'name' => '{d}',
            'example' => '04',
            'explain' => 'Day',
            'value' => date('d'),
        ],
        [
            'name' => '{Ymd}',
            'example' => '20180104',
            'explain' => 'Upload date',
            'value' => date('Ymd'),
        ],
        [
            'name' => '{ymd}',
            'example' => '180104',
            'explain' => 'Upload date',
            'value' => date('ymd'),
        ],
        [
            'name' => '{Y-m-d}',
            'example' => '2018-01-04',
            'explain' => 'Upload date',
            'value' => date('Y-m-d'),
        ],
        [
            'name' => '{y-m-d}',
            'example' => '18-01-04',
            'explain' => 'Upload date',
            'value' => date('y-m-d'),
        ],
        [
            'name' => '{time-stamp}',
            'example' => '1514995200',
            'explain' => 'Upload date',
            'value' => $time,
        ],
        [
            'name' => '{uniqid}',
            'example' => '5bb2f89a38935',
            'explain' => 'Unique ID',
            'value' => $uniqid,
        ],
        [
            'name' => '{md5-32}',
            'example' => 'f96087bb0a9a5e8723dbde0d0f8dce34',
            'explain' => 'MD5 (non file)',
            'value' => $md5,
        ],
        [
            'name' => '{md5-16}',
            'example' => '0a9a5e8723dbde0d',
            'explain' => 'MD5 (non file)',
            'value' => substr($md5, 8, 16),
        ],
        [
            'name' => '{rend-character}',
            'example' => 'HgTLmGcDceplMduF',
            'explain' => '16 bit random string',
            'value' => str_rand(),
        ],
        [
            'name' => '{rend-character-8}',
            'example' => 'HgTLmGcD',
            'explain' => '16 bit random string',
            'value' => str_rand(8),
        ],
    ],
    'file' => [
        [
            'name' => '{Y}',
            'example' => '2018',
            'explain' => 'Year',
            'value' => date('Y'),
        ],
        [
            'name' => '{m}',
            'example' => '01',
            'explain' => 'Month',
            'value' => date('m'),
        ],
        [
            'name' => '{d}',
            'example' => '04',
            'explain' => 'Day',
            'value' => date('d'),
        ],
        [
            'name' => '{Ymd}',
            'example' => '20180104',
            'explain' => 'Upload date',
            'value' => date('Ymd'),
        ],
        [
            'name' => '{ymd}',
            'example' => '180104',
            'explain' => 'Upload date',
            'value' => date('ymd'),
        ],
        [
            'name' => '{Y-m-d}',
            'example' => '2018-01-04',
            'explain' => 'Upload date',
            'value' => date('Y-m-d'),
        ],
        [
            'name' => '{y-m-d}',
            'example' => '18-01-04',
            'explain' => 'Upload date',
            'value' => date('y-m-d'),
        ],
        [
            'name' => '{time-stamp}',
            'example' => '1514995200',
            'explain' => 'Upload date',
            'value' => $time,
        ],
        [
            'name' => '{uniqid}',
            'example' => '5bb2f89a38935',
            'explain' => 'Unique ID',
            'value' => $uniqid,
        ],
        [
            'name' => '{md5-32}',
            'example' => 'f96087bb0a9a5e8723dbde0d0f8dce34',
            'explain' => 'MD5 (non file)',
            'value' => $md5,
        ],
        [
            'name' => '{md5-16}',
            'example' => '0a9a5e8723dbde0d',
            'explain' => 'MD5 (non file)',
            'value' => substr($md5, 8, 16),
        ],
        [
            'name' => '{rend-character}',
            'example' => 'HgTLmGcDceplMduF',
            'explain' => '16 bit random string',
            'value' => str_rand(),
        ],
        [
            'name' => '{rend-character-8}',
            'example' => 'HgTLmGcD',
            'explain' => '8 bit random string',
            'value' => str_rand(8),
        ],
        [
            'name' => '{original}',
            'example' => 'Nothing',
            'explain' => 'Original file name',
            'value' => '{original}',
        ],
    ],
];
