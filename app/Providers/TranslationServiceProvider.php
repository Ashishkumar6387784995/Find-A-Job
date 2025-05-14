<?php

namespace App\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session as LaravelSession; // Import the Session facade

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Cache::rememberForever('translations', function () {
            $translations = collect();
            $language_option = ["ar", "nl", "en", "fr", "de", "hi", "it"];

            if (Schema::hasTable('settings')) {
                if (LaravelSession::get('setup_data') == '') {
                    // Call the helper method or directly access the session
                    $setup_data = $this->sitesetupSession('get');
                    if ($setup_data) {
                        $language_option = $setup_data->language_option;
                    }
                }
            }

            foreach ($language_option as $locale) { // Supported locales
                $translations[$locale] = [
                    'php' => $this->phpTranslations($locale),
                    'json' => $this->jsonTranslations($locale),
                ];
            }

            return $translations;
        });
    }

    /**
     * Helper method to simulate the 'sitesetupSession' functionality
     *
     * @param string $action
     * @return mixed
     */
    private function sitesetupSession($action)
    {
        if ($action == 'get') {
            return LaravelSession::get('setup_data');
        }
        return null;
    }

    private function phpTranslations($locale)
    {
        $path = resource_path("lang/$locale");

        return collect(File::allFiles($path))->flatMap(function ($file) use ($locale) {
            $key = ($translation = $file->getBasename('.php'));

            return [$key => trans($translation, [], $locale)];
        });
    }

    private function jsonTranslations($locale)
    {
        $path = resource_path("lang/$locale.json");

        if (is_string($path) && is_readable($path)) {
            return json_decode(file_get_contents($path), true);
        }

        return [];
    }
}