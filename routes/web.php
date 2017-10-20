<?php

/********************
| Rotas da área Admin
*********************/
Route::group(['as' => 'site.'], function () {
    Route::get('/',['as'=>'home', 'uses'=>'Site\SiteController@index']);
    Route::get('/pdf',['as'=>'pdf', 'uses'=>'Site\SiteController@geraPdf']);

    Route::post('/upload',['as'=>'upload', 'uses'=>'Site\SiteController@upload']);
    Route::post('/uploadImagem',['as'=>'upload-imagem', 'uses'=>'Site\SiteController@uploadImagem']);
    Route::post('/uploadResize',['as'=>'upload-resize', 'uses'=>'Site\SiteController@uploadResize']);
    Route::post('/uploadCrop',['as'=>'upload-crop', 'uses'=>'Site\SiteController@uploadCrop']);
});


/********************
| Rotas da área Admin
*********************/
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','can:pg-admin'] ], function () {
    ### Links ###
    Route::get('',['as'=>'home','uses'=>'Admin\DashboardController@index']);
    /********************
    | Rotas Usuário
    *********************/
    Route::group(['as' => 'user.', 'middleware' => ['can:admin-usuario'] ], function () {
        ### Links ###
        Route::get('/user',['as'=>'list', 'uses'=>'Admin\UserController@index']);
        Route::get('/user/edit/{id}',['as'=>'edit', 'uses'=>'Admin\UserController@edit']);
        ### Ações ###
        Route::post('/user/update',['as'=>'update','uses'=>'Admin\UserController@update']);
        Route::get('/user/delete/{id}',['as'=>'delete','uses'=>'Admin\UserController@delete']);
    });
    /********************
    | Rotas ACL
    *********************/
    Route::group(['as' => 'acl.', 'middleware' => ['can:admin-acl']], function () {
        ### Links ###
        Route::get('/acl/roles/list',['as'=>'roles-list', 'uses'=>'Admin\AclController@listRoles']);
        Route::get('/acl/permissions/list',['as'=>'permissions-list', 'uses'=>'Admin\AclController@listPermissions']);
        Route::get('/acl/role-permissions/list',['as'=>'role-permissions-list', 'uses'=>'Admin\AclController@listRolePermissions']);
        ### Ações ###
        Route::post('/acl/roles/store',['as'=>'store-role','uses'=>'Admin\AclController@storeRole']);
        Route::get('/acl/roles/edit/{id}',['as'=>'edit-role','uses'=>'Admin\AclController@editRole']);
        Route::post('/acl/roles/update',['as'=>'update-role','uses'=>'Admin\AclController@updateRole']);
        Route::get('/acl/roles/delete/{id}',['as'=>'delete-role','uses'=>'Admin\AclController@deleteRole']);

        Route::post('/acl/permissions/store',['as'=>'store-permission','uses'=>'Admin\AclController@storePermission']);
        Route::get('/acl/permissions/edit/{id}',['as'=>'edit-permission','uses'=>'Admin\AclController@editPermission']);
        Route::post('/acl/permissions/update',['as'=>'update-permission','uses'=>'Admin\AclController@updatePermission']);
        Route::get('/acl/permissions/delete/{id}',['as'=>'delete-permission','uses'=>'Admin\AclController@deletePermission']);

        Route::post('/acl/role-permissions/update',['as'=>'update-role-permission','uses'=>'Admin\AclController@updateRolePermission']);
        Route::post('/acl/role-user/update',['as'=>'update-role-user','uses'=>'Admin\AclController@updateRoleUser']);
    });
});

/************************
| Rotas de Autentication
*************************/
Auth::routes();
Route::get('/login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::get('/logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);
Route::get('/cadastre-se',['as'=>'cadastre-se','uses'=>'Auth\RegisterController@showRegistrationForm']);
