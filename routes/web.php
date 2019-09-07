<?php

Route::group([], function () {
    Route::get('/send-dyf', function () {
        return view('emails.dyf');
    });

    Route::get('/send-operador', function () {
        return view('emails.operador');
    });

    Route::get('/send-cliente', function () {
        return view('emails.cliente');
    });
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('salir');

Route::get('/home', function () {
    return redirect()->route('home');
});

Route::group([], function () {
    // Rutas de paginas estaticas
    Route::get('/preguntas-frecuentes', function () {
        return view('static.pages.preguntas-frecuentes');
    })->name('preguntas-frecuentes');

    Route::get('/contacto', function () {
        return view('static.pages.contacto');
    })->name('contacto');

    Route::get('/acerca-dyf', function () {
        return view('static.pages.acerca-dyf');
    })->name('acerca-dyf');

    Route::get('/politicas-privacidad', function () {
        return view('static.pages.politicas-privacidad');
    })->name('politicas-privacidad');

    Route::get('/terminos-condiciones', function () {
        return view('static.pages.terminos-condiciones');
    })->name('terminos-condiciones');

    /* Eventos DyF */
    Route::get('/eventos', function () {
        return view('static.events.event-home');
    })->name('event-home');

    /* Eventos DyF */
    Route::get('/blog', function () {
        return redirect()->route('home');
    })->name('blog');


    /* Ciudades */
    Route::get('/turbaco', function () {
        return view('static.pages.turbaco');
    })->name('turbaco');

    Route::get('/mompox', function () {
        return view('static.pages.mompox');
    })->name('mompox');

    Route::get('/carmen-de-bolivar', function () {
        return view('static.pages.elcarmen');
    })->name('elcarmen');

    Route::get('/palenque', function () {
        return view('static.pages.palenque');
    })->name('palenque');

    Route::get('/sanjacinto', function () {
        return view('static.pages.sanjacinto');
    })->name('sanjacinto');
});


/* Eventos */
Route::group(['prefix' => 'eventos'], function () {
    // Rutas de eventos estaticas
    Route::get('/bike-pray-cartagena', function () {
        return view('static.events.event-1');
    })->name('evento-1');
});

Route::group(['prefix' => 'eventos'], function () {
    // Rutas de eventos estaticas
    Route::get('/wef-cartagena', function () {
        return view('static.events.event-wef2019');
    })->name('evento-wef');
});

/* Blog */
Route::group(['prefix' => 'blog'], function () {
    Route::get('/por-que-ir-a-playa-blanca', function () {
        return view('static.events.event-2');
    })->name('blog-1');

    Route::get('/comidas-cartagena', function () {
        return view('static.events.event-3');
    })->name('blog-2');
});

// Default Authentication System
Auth::routes();

Route::group(['prefix' => 'dashboard', 'namespace' => 'Admin'], function () {

    // Routes of Admin Role
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:superadmin']], function () {
        // Routes resources.
        Route::get('/', 'DashboardController@admin')->name('admin');
        Route::resource('role', 'RoleController');
        Route::resource('user', 'UserController');
        Route::resource('combo', 'ComboController');
        Route::resource('image', 'ImageController');
        Route::resource('service', 'ServiceController');
        Route::resource('operator', 'OperatorController');
        Route::resource('category', 'CategoryController');
        Route::resource('permission', 'PermissionController');
        Route::resource('availability', 'AvailabilityController');

        Route::get('/service/active/{service}', 'ServiceController@status')->name('service.active');
        Route::get('/combo/{service}/opciones-de-pago', 'ComboController@comboPerService')->name('comboPerService');
        Route::get('/combo/{service}/create', 'ComboController@comboCreatePerService')->name('comboCreatePerService');
        Route::get('/combo/{service}/edit', 'ComboController@comboEditPerService')->name('comboEditPerService');
        Route::get('/horarios/{service}/listado', 'AvailabilityController@horariosService')->name('horariosService');
        Route::get('/horarios/{service}/crear', 'AvailabilityController@horariosServiceCreate')->name('horariosServiceCreate');
    });

    Route::resource('reservation', 'ReservationController')->middleware(['auth', 'role:superadmin|cliente|operador']);

    // Routes of Finanzas Role
    Route::group(['prefix' => 'finanzas', 'middleware' => ['auth', 'role:finanzas']], function () {
        // Routes
        Route::get('/', 'DashboardController@finanzas')->name('finanzas');
    });

    // Routes of Moderador Role
    Route::group(['prefix' => 'moderador', 'middleware' => ['auth', 'role:moderador']], function () {
        // Routes
        Route::get('/', 'DashboardController@moderador')->name('moderador');
    });

    // Routes of Operador Role
    Route::group(['prefix' => 'operador', 'middleware' => ['auth', 'role:operador']], function () {
        Route::get('/my-information', 'OperatorController@myInfo')->name('operador');
        Route::get('/list-reservations', 'OperatorController@listReservations')->name('listReservations');
        Route::get('/list-services', 'OperatorController@listServices')->name('listServices');
        Route::get('/servicio/{service}', 'ServiceController@show')->name('operador.servicio');
        Route::get('/crear/servicio', 'OperatorController@crearServicio')->name('crearServicio');
        Route::post('/guardar/servicio', 'OperatorController@guardarServicio')->name('guardarServicio');
        Route::get('/editar/{service}/edit', 'OperatorController@editarServicio')->name('editarServicio');
        Route::put('/actualizar/{service}', 'OperatorController@actualizarServicio')->name('actualizarSericio');
        Route::delete('borrar/{service}', 'OperatorController@borrarServicio')->name('borrarServicio');
    });

    // Routes of Cliente Role
    Route::group(['prefix' => 'cliente', 'middleware' => ['auth', 'role:cliente']], function () {
        // Routes
        Route::get('/detalle', 'DashboardController@cliente')->name('cliente');
        Route::get('/mis-reservas', 'UserController@myReservas')->name('myReservas');
    });

    Route::group(['prefix' => 'galeria', 'middleware' => ['auth', 'role:superadmin|operador']], function () {
        Route::get('/upload/{service}', 'ImageController@create')->name('formGalery');
        Route::post('/image-save', 'ImageController@store')->name('galerySave');
        Route::get('/{service}', 'ImageController@show')->name('myGalery');
        Route::DELETE('/image/{image}', 'ImageController@destroy')->name('galeryDestroy');
    });
});

//---------------------------------------------------------------------------------------------------------------------

// Routes of App platform.
Route::group([], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/landing', 'HomeController@landing')->name('landing');
    Route::get('/categoria/{category}', 'HomeController@servicesPerCartegory')->name('category.query');
    Route::get('/servicio/{service}', 'HomeController@serviceReview')->name('service.query');
    Route::post('/search', 'HomeController@search')->name('search');
    Route::get('/buscador', 'HomeController@buscador')->name('buscador');

    // Rutas de Añadir al carrito.
    Route::post('/add-cart-gastronomia', 'ShoppingController@addCartGastronomia')->name('shopping.gastronomia');
    Route::post('/add-cart-nautica', 'ShoppingController@addCartNautica')->name('shopping.nautica');
    Route::post('/add-cart-islas', 'ShoppingController@addCartIslas')->name('shopping.islas');
    Route::post('/add-cart-tour', 'ShoppingController@addCartTour')->name('shopping.tour');
    Route::post('/add-cart-transfer-traslados', 'ShoppingController@addCartTransferTraslados')->name('shopping.transfer.traslados');
    Route::post('/add-cart-transfer-disposiciones', 'ShoppingController@addCartTransferDisposiciones')->name('shopping.transfer.disposiciones');

    Route::get('/carrito', 'ShoppingController@carrito')->name('shopping.cart');

    Route::post('/register-user', 'ShoppingController@registerUser')->name('registerUser');

    Route::post('/checkout', 'ShoppingController@checkoutStore')
        // ->middleware(['auth', 'role:cliente'])
        ->name('checkoutStore');

    Route::post('/checkoutReservation', 'ShoppingController@checkoutReservation')->name('checkoutReservation');
    Route::delete('/shopping/{shopping}', 'ShoppingController@destroy')->name('shopping.destroy');
    Route::delete('/shopping/delete/all', 'ShoppingController@vaciarCarro')->name('shopping.vaciarCarro');
});

// Routes of Images
Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'morph'], function () {
        Route::get('/service/upload', 'ServiceController@imageForm')->name('service.imageForm');
        Route::post('/service/save', 'ServiceController@imageSave')->name('service.imageSave');
    });
});

// return epayco ref_payco
Route::get('/epayco/{token}', 'ShoppingController@token')->name('epayco.token');


// Authentication route with social networks
/*
Route::group([], function () {
    Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.socialite');
    Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');
});
*/
