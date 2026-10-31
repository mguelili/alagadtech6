<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about-project', function () {
    $this->comment('IT0049 TFA6: From Arrays to Eloquent');
})->purpose('Display project information');
