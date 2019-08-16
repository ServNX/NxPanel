<?php

Route::view('/auth/login', 'login')->name('login');

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');