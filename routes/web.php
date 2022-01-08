<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/login', 'AdminController@loginAdmin')->name('admin.login');
Route::post('/admin/login', 'AdminController@postloginAdmin')->name('admin.login');
Route::get('/admin/logout', 'AdminController@logOut')->name('admin.logout');
Route::get('about', function () {
    return view('about');
});
//
//Route::get('hanoi_tower', function () {
//    return view('Game.hanoi');
//});
//Route::get('gold', function () {
//    return view('Game.gold');
//});
//Route::get('sokoban', function () {
//    return view('Game.sokoban');
//});
//Route::get('number', function () {
//    return view('Game.number');
//});

Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogOut'], function () {

    Route::get('/', [
        'as' => 'admin.index',
        'uses' => 'AdminController@index'
    ]);
    Route::get('/filemanger', [
        'as' => 'admin.filemanager',
        'uses' => 'AdminController@fileManager'
    ]);

    Route::prefix('categories')->group(function () {
        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index',
            'middleware' => 'can:category-list'
        ]);
        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'CategoryController@create',
            'middleware' => 'can:category-create'

        ]);
        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'CategoryController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit',
            'middleware' => 'can:category-edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'CategoryController@destroy',
            'middleware' => 'can:category-delete'
        ]);
        Route::post('/update/{id}', [
            'as' => 'categories.update',
            'uses' => 'CategoryController@update'
        ]);
    });
    Route::prefix('menus')->group(function () {
        Route::get('/', [
            'as' => 'menus.index',
            'uses' => 'MenuController@index',
            'middleware' => 'can:menu-list'
        ]);
        Route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'MenuController@create',
            'middleware' => 'can:menu-create'

        ]);
        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'MenuController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'MenuController@edit',
            'middleware' => 'can:menu-edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'MenuController@destroy',
            'middleware' => 'can:menu-delete'
        ]);
        Route::post('/update/{id}', [
            'as' => 'menus.update',
            'uses' => 'MenuController@update'
        ]);
    });
    Route::prefix('games')->group(function () {
        Route::get('/', [
            'as' => 'games.index',
            'uses' => 'AdminGameController@index',
            'middleware' => 'can:game-list'
        ]);
        Route::get('/create', [
            'as' => 'games.create',
            'uses' => 'AdminGameController@create',
            'middleware' => 'can:game-create'
        ]);
        Route::post('/store', [
            'as' => 'games.store',
            'uses' => 'AdminGameController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'games.edit',
            'uses' => 'AdminGameController@edit',
            'middleware' => 'can:game-edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'games.delete',
            'uses' => 'AdminGameController@destroy',
            'middleware' => 'can:game-delete'
        ]);

        Route::post('/update/{id}', [
            'as' => 'games.update',
            'uses' => 'AdminGameController@update'
        ]);
    });
    Route::prefix('games/gamescore')->group(function () {
        Route::get('/{id}', [
            'as' => 'gamescore.index',
            'uses' => 'AdminGameScoreController@index',
            'middleware' => 'can:game-list'
        ]);
        Route::get('/create', [
            'as' => 'gamescore.create',
            'uses' => 'AdminGameScoreController@create',
            'middleware' => 'can:game-create'
        ]);
        Route::post('/store', [
            'as' => 'gamescore.store',
            'uses' => 'AdminGameScoreController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'gamescore.edit',
            'uses' => 'AdminGameScoreController@edit',
            'middleware' => 'can:game-edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'gamescore.delete',
            'uses' => 'AdminGameScoreController@destroy',
            'middleware' => 'can:game-delete'
        ]);

        Route::post('/update/{id}', [
            'as' => 'gamescore.update',
            'uses' => 'AdminGameScoreController@update'
        ]);
    });
    Route::prefix('sliders')->group(function () {
        Route::get('/', [
            'as' => 'sliders.index',
            'uses' => 'AdminSliderController@index'
        ]);
        Route::get('/create', [
            'as' => 'sliders.create',
            'uses' => 'AdminSliderController@create',
            'middleware' => 'can:slider-create'
        ]);
        Route::post('/store', [
            'as' => 'sliders.store',
            'uses' => 'AdminSliderController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'sliders.edit',
            'uses' => 'AdminSliderController@edit',
            'middleware' => 'can:slider-edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'sliders.delete',
            'uses' => 'AdminSliderController@destroy',
            'middleware' => 'can:slider-delete'
        ]);
        Route::post('/update/{id}', [
            'as' => 'sliders.update',
            'uses' => 'AdminSliderController@update'
        ]);
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'AdminUserController@index',
            'middleware' => 'can:user-list'
        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'AdminUserController@create',
            'middleware' => 'can:user-create'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'AdminUserController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'AdminUserController@edit',
            'middleware' => 'can:user-edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'AdminUserController@destroy',
            'middleware' => 'can:user-delete'
        ]);
        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'AdminUserController@update'
        ]);
    });
    Route::prefix('roles')->group(function () {
        Route::get('/', [
            'as' => 'roles.index',
            'uses' => 'AdminRoleController@index',
            'middleware' => 'can:role-list'
        ]);
        Route::get('/create', [
            'as' => 'roles.create',
            'uses' => 'AdminRoleController@create',
            'middleware' => 'can:role-create',
        ]);
        Route::post('/store', [
            'as' => 'roles.store',
            'uses' => 'AdminRoleController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'roles.edit',
            'uses' => 'AdminRoleController@edit',
            'middleware' => 'can:role-edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'roles.delete',
            'uses' => 'AdminRoleController@destroy',
            'middleware' => 'can:role-delete'
        ]);
        Route::post('/update/{id}', [
            'as' => 'roles.update',
            'uses' => 'AdminRoleController@update',

        ]);
    });
    Route::prefix('blog')->group(function () {
        Route::get('/', [
            'as' => 'blogs.index',
            'uses' => 'AdminBlogController@index',
            'middleware' => 'can:blog-list',

        ]);
        Route::get('/add', [
            'as' => 'blogs.create',
            'uses' => 'AdminBlogController@create',
            'middleware' => 'can:blog-create',
        ]);
        Route::post('/store', [
            'as' => 'blogs.store',
            'uses' => 'AdminBlogController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'blogs.edit',
            'uses' => 'AdminBlogController@edit',
            'middleware' => 'can:blog-edit',

        ]);
        Route::post('/update/{id}', [
            'as' => 'blogs.update',
            'uses' => 'AdminBlogController@update',


        ]);
        Route::get('/delete/{id}', [
            'as' => 'blogs.delete',
            'uses' => 'AdminBlogController@destroy',
            'middleware' => 'can:blog-delete',
        ]);

    });
    Route::prefix('rate-blog')->group(function () {
        Route::get('/{id}', [
            'as' => 'rateblog.index',
            'uses' => 'AdminBlogRateController@index',
            'middleware' => 'can:blog-list',

        ]);
        Route::get('/add', [
            'as' => 'rateblog.create',
            'uses' => 'AdminBlogRateController@create',
            'middleware' => 'can:blog-create',
        ]);
        Route::post('/store', [
            'as' => 'rateblog.store',
            'uses' => 'AdminBlogRateController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'rateblog.edit',
            'uses' => 'AdminBlogRateController@edit',
            'middleware' => 'can:blog-edit',

        ]);
        Route::post('/update/{id}', [
            'as' => 'rateblog.update',
            'uses' => 'AdminBlogRateController@update',


        ]);
        Route::get('/delete/{id}', [
            'as' => 'rateblog.delete',
            'uses' => 'AdminBlogRateController@destroy',
            'middleware' => 'can:blog-delete',
        ]);

    });
    Route::prefix('contact')->group(function () {
        Route::get('/', [
            'as' => 'contactadmin.index',
            'uses' => 'AdminContactController@index',
            'middleware' => 'can:contact-list',

        ]);
        Route::get('/add', [
            'as' => 'contactadmin.create',
            'uses' => 'AdminContactController@create',
            'middleware' => 'can:contact-create',
        ]);
        Route::post('/store', [
            'as' => 'contactadmin.store',
            'uses' => 'AdminContactController@store'
        ]);
        Route::get('/view/{id}', [
            'as' => 'contactadmin.view',
            'uses' => 'AdminContactController@view',
            'middleware' => 'can:contact-edit',

        ]);
        Route::get('/delete/{id}', [
            'as' => 'contactadmin.delete',
            'uses' => 'AdminContactController@destroy',
            'middleware' => 'can:contact-delete',
        ]);
        Route::post('/mail/{id}', [
            'as' => 'contactadmin.mail',
            'uses' => 'AdminContactController@sendMail',
            'middleware' => 'can:contact-edit',
        ]);
    });
    Route::prefix('permissions')->group(function () {
        Route::get('/', [
            'as' => 'permissions.index',
            'uses' => 'PermissionController@index'
        ]);
        Route::get('/create', [
            'as' => 'permissions.create',
            'uses' => 'PermissionController@create',
             'middleware' => 'can:permission-create',
        ]);
        Route::post('/store', [
            'as' => 'permissions.store',
            'uses' => 'PermissionController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'permissions.edit',
            'uses' => 'PermissionController@edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'permissions.delete',
            'uses' => 'PermissionController@destroy'
        ]);
        Route::post('/update/{id}', [
            'as' => 'permissions.update',
            'uses' => 'PermissionController@update'
        ]);
    });

    Route::prefix('game-rate')->group(function () {
        Route::get('/{id}', [
            'as' => 'gamerate.index',
            'uses' => 'AdminGameRateController@index'
        ]);
        Route::get('/create', [
            'as' => 'gamerate.create',
            'uses' => 'AdminGameRateController@create',
            'middleware' => 'can:permission-create',
        ]);
        Route::post('/store', [
            'as' => 'gamerate.store',
            'uses' => 'AdminGameRateController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'gamerate.edit',
            'uses' => 'AdminGameRateController@edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'gamerate.delete',
            'uses' => 'AdminGameRateController@destroy'
        ]);
        Route::post('/update/{id}', [
            'as' => 'gamerate.update',
            'uses' => 'AdminGameRateController@update'
        ]);
    });

});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
////////////////////////////////////////////////////////////////////
Route::get('home/login', [
    'as' => 'home.login',
    'uses' => 'HomeController@loginHome',
    'middleware' => 'CheckLogIn'
]);
Route::post('home/login', [
    'as' => 'home.login',
    'uses' => 'HomeController@postloginHome',
    'middleware' => 'CheckLogIn'
]);

Route::get('/register', [
    'as' => 'home.register',
    'uses' => 'HomeController@registerHome',
    'middleware' => 'CheckLogIn'
]);
Route::post('/register', [
    'as' => 'home.register',
    'uses' => 'HomeController@postregisterHome',
]);
Route::get('/logout', [
    'as' => 'home.logout',
    'uses' => 'HomeController@logout',
]);
Route::get('/allgame', [
    'as' => 'home.allgame',
    'uses' => 'HomeController@allGame',
]);
Route::get('/catgory/{slug}', [
    'as' => 'home.gameCategory',
    'uses' => 'HomeController@gameCategory',
]);
Route::get('/blog/{slug}', [
    'as' => 'home.blogdetails',
    'uses' => 'HomeController@detailBlog',
]);
Route::get('/', [
    'as' => 'home.index',
    'uses' => 'HomeController@index',
]);
Route::get('/blog', [
    'as' => 'home.blog',
    'uses' => 'HomeController@blog',
]);
Route::get('/contact', [
    'as' => 'home.contact',
    'uses' => 'HomeController@contact',
]);
Route::post('/contact', [
    'as' => 'home.contact',
    'uses' => 'HomeController@postcontact',
]);
Route::get('/details/{id}', [
    'as' => 'home.details',
    'uses' => 'HomeController@details',
]);
Route::get('/ranking/{id}', [
    'as' => 'home.ranking',
    'uses' => 'HomeController@ranking',
]);
Route::group(['prefix' => 'playgame', 'middleware' => 'checkAuth'], function () {
    Route::get('/slither/{id}', [
        'as' => 'game.slither',
        'uses' => 'HomeController@slither',
    ]);
    Route::get('/gold/{id}', [
        'as' => 'game.gold',
        'uses' => 'HomeController@gold',
    ]);
    Route::get('/sokoban/{id}', [
        'as' => 'game.sokoban',
        'uses' => 'HomeController@sokoban',
    ]);
    Route::get('/number/{id}', [
        'as' => 'game.number',
        'uses' => 'HomeController@number',
    ]);
    Route::get('/chess/{id}', [
        'as' => 'game.chess',
        'uses' => 'HomeController@chess',
    ]);
    Route::get('/line98/{id}', [
        'as' => 'game.line98',
        'uses' => 'HomeController@line98',
    ]);
    Route::get('/fill-maze/{id}', [
        'as' => 'game.fillmaze',
        'uses' => 'HomeController@fillmaze',
    ]);
    Route::get('/pacman/{id}', [
        'as' => 'game.pacman',
        'uses' => 'HomeController@pacman',
    ]);
    Route::get('/knight/{id}', [
        'as' => 'game.knight',
        'uses' => 'HomeController@knight',
    ]);
    Route::get('/hanoi_tower/{id}', [
        'as' => 'game.tower',
        'uses' => 'HomeController@hanoi',
    ]);
    Route::get('/money-change/{id}', [
        'as' => 'game.moneychange',
        'uses' => 'HomeController@moneychange',
    ]);
    Route::post('/savescore', [
        'as' => 'game.savescore',
        'uses' => 'HomeController@storeScore',
    ]);
    Route::post('/saverate/{id}', [
        'as' => 'game.saverate',
        'uses' => 'HomeController@saveRate',
    ]);
    Route::post('/saverateblog/{slug}', [
        'as' => 'game.saverateblog',
        'uses' => 'HomeController@saveRateBlog',
    ]);
    Route::get('/savescore', [
        'as' => 'game.savescore',
        'uses' => 'HomeController@getScore',
    ]);
});



