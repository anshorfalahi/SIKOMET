<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, array<int, string>|string> [filter_name => classname]
     *                                               or [filter_name => [classname1, classname2, ...]]
     * @phpstan-var array<string, class-string|list<class-string>>
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'authenticate' => \App\Filters\Authenticate::class, 
        'AdminFilter' => \App\Filters\AdminFilter::class,
        'MediaFilter' => \App\Filters\MediaFilter::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array<string, array<string, array<string, string>>>|array<string, array<string>>
     * @phpstan-var array<string, list<string>>|array<string, array<string, array<string, string>>>
     */
    public array $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [
        'authenticate' => ['before' => 
            [
                'dashboard', 
                'profile_media',
                'list_profile_media', 
                'list_profile_media/*', 
                'upload_berkas',
                'validasi_berkas',
                'validasi_berkas/*',
                'pengajuan_kerja_sama',
                'pengajuan_kerja_sama/*',
                'daftar_berita_kontribusi',
                'daftar_berita_kontribusi/*',
                'perjanjian_kerja_sama',
                'perjanjian_kerja_sama/*',
                'kontribusi_wartawan',
                'kontribusi_wartawan/*',
                'kelola_dkisp',
                'kelola_dkisp/*',
                'daftar_berita_wartawan',
                'daftar_berita_wartawan/*',
                'daftar_berita',
                'daftar_berita/*',
            ]
        ],
        'MediaFilter' => ['before' => 
            [
                'auth/login', 
                'auth/register',
                'list_profile_media',
                'list_profile_media/*',
                'validasi_berkas',
                'validasi_berkas/*',
                'perjanjian_kerja_sama',
                'perjanjian_kerja_sama/*',
                'kontribusi_wartawan',
                'kontribusi_wartawan/*',
                'kelola_dkisp',
                'kelola_dkisp/*',
            ]
        ],
        'AdminFilter' => ['before' => 
            [
                'auth/login', 
                'auth/register',
                'profile_media',
                'upload_berkas',
                'daftar_berita',
                'pengajuan_kerja_sama',
                'pengajuan_kerja_sama/*',
            ]
        ],
    ];
}
