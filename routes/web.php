<?php
use App\Http\Controllers\LanguageController;
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
// dashboard Routes
// Route::get('/','DashboardController@dashboardEcommerce');

Route::get('clear_cache', function () {
    $clear[0] = \Artisan::call('cache:clear');
    $clear[1] = \Artisan::call('route:clear');
    $clear[2] = \Artisan::call('optimize:clear');
    $clear[3] = \Artisan::call('config:cache');
    $clear[4] = \Artisan::call('view:clear');
    $clear[5] = \Artisan::call('clear-compiled');
    $clear[6] = \Artisan::call('config:clear');

    dd($clear);
});



Route::get('/','DashboardController@inicioCon')->name('alumno.inicio');

Route::group(['middleware' => 'auth'], function () {
    // aqui solo rutas para el panel admin, se protegen con la autenticacion
    // aqui solo rutas para el panel admin, se protegen con la autenticacion
    // aqui solo rutas para el panel admin, se protegen con la autenticacion
    Route::get('/concurso-dibujo','PanelAdminController@index')->name('panelAdmin');
    // Route::get('/dashboard-ecommerce','PanelAdminController@index')->name('panelAdmin');

    //para bloquear desde el middleware
    //Route::get('/panelAdmin','PanelAdminController@index')->name('panelAdmin')->middleware('permission:ver-administrar');
    
    //Route::get('/panelAdmin/filtro','PanelAdminController@show');
    Route::get('/show','PanelAdminController@listado')->name('cargarTabla');
    Route::get('/formulario','PanelAdminController@formulario');
    //Route::get('/evaluar/{id}','PanelAdminController@evaluarForm')->name('evaluar');
    Route::get('/evaluar/{id}','PanelAdminController@evaluarForm')->name('evaluar')->middleware('permission:guardar-evaluar');
    Route::get('/evaluar2/{id}','PanelAdminController@evaluarForm2')->name('evaluar2')->middleware('permission:guardar-evaluar');
    Route::post('/evaluar','PanelAdminController@evaluarStore')->name('guardarEvaluacion');
    Route::get('/mostrarInfo/{id}','PanelAdminController@mostrarInfooo')->name('mostrarInfou');
    Route::get('/verEvaluacion/{id}','PanelAdminController@verEvaluacion')->name('verEvaluacion');
    Route::post('/revisar','PanelAdminController@revisarUpdate')->name('concurso.revisarDibujo'); 
    Route::post('/filtrar','PanelAdminController@filtrarBusqueda')->name('filtrar');
    Route::get('/mostrar','PanelAdminController@show')->name('mostrar');
    //Route::post('/mostrar','PanelAdminController@show')->name('mostrar');
    Route::get('/mostrarMunicipios/{idreg}','PanelAdminController@showMunicipios')->name('mostrarMunicipios');
    Route::get('/mostrarRegiones/{idreg}','PanelAdminController@showRegiones')->name('mostrarRegiones');
    
});

Route::get('/iniciar-sesion','AuthenticationController@loginPanelAdmin')->name('loginPanelAdmin');
//  Route::get('/dashboard-ecommerce','DashboardController@dashboardEcommerce');
//  Route::get('/dashboard-analytics','DashboardController@dashboardAnalytics');

//consultar curp alumno
Route::post('/consultar-curp','DashboardController@search')->name('alumno.buscar');
Route::post('/consultar-curptest','DashboardController@searchTest')->name('alumno.buscarTest');
Route::post('/consultar-curp-exitente','DashboardController@buscarAlumno')->name('alumno.buscarAlumno');
//guardar registro
Route::post('/guardar-registro/', 'DashboardController@guardarRegistro')->name('alumno.guardarRegistro');
//actualizar registro
Route::post('/actualizar-registro/', 'DashboardController@actualizarRegistro')->name('alumno.actualizarRegistro');
// bases del concurso
Route::get('/bases-concurso/', 'DashboardController@basesConcurso')->name('alumno.bases-concurso');

// enviar formulario de dudas y preguntas
Route::post('/enviar-dudas-preguntas/', 'DashboardController@enviarFomurlarioDudas')->name('alumno.enviarFomurlarioDudas');


Route::get('/clear_cache', function () {
    $clear[0] = \Artisan::call('cache:clear');
    $clear[1] = \Artisan::call('route:clear');
    $clear[2] = \Artisan::call('optimize:clear');
    $clear[3] = \Artisan::call('config:cache');
    $clear[4] = \Artisan::call('view:clear');
    $clear[5] = \Artisan::call('clear-compiled');
    $clear[6] = \Artisan::call('config:clear');
    dd($clear);
});








//Application Routes
Route::get('/app-email','ApplicationController@emailApplication');
Route::get('/app-chat','ApplicationController@chatApplication');
Route::get('/app-todo','ApplicationController@todoApplication');
Route::get('/app-calendar','ApplicationController@calendarApplication');
Route::get('/app-kanban','ApplicationController@kanbanApplication');
Route::get('/app-invoice-view','ApplicationController@invoiceApplication');
Route::get('/app-invoice-list','ApplicationController@invoiceListApplication');
Route::get('/app-invoice-edit','ApplicationController@invoiceEditApplication');
Route::get('/app-invoice-add','ApplicationController@invoiceAddApplication');
Route::get('/app-file-manager','ApplicationController@fileManagerApplication');

// Content Page Routes
Route::get('/content-grid','ContentController@gridContent');
Route::get('/content-typography','ContentController@typographyContent');
Route::get('/content-text-utilities','ContentController@textUtilitiesContent');
Route::get('/content-syntax-highlighter','ContentController@contentSyntaxHighlighter');
Route::get('/content-helper-classes','ContentController@contentHelperClasses');
Route::get('/colors','ContentController@colorContent');
// icons
Route::get('/icons-livicons','IconsController@liveIcons');
Route::get('/icons-boxicons','IconsController@boxIcons');
// card
Route::get('/card-basic','CardController@basicCard');
Route::get('/card-actions','CardController@actionCard');
Route::get('/widgets','CardController@widgets');
// component route
Route::get('/component-alerts','ComponentController@alertComponenet');
Route::get('/component-buttons-basic','ComponentController@buttonComponenet');
Route::get('/component-breadcrumbs','ComponentController@breadcrumbsComponenet');
Route::get('/component-carousel','ComponentController@carouselComponenet');
Route::get('/component-collapse','ComponentController@collapseComponenet');
Route::get('/component-dropdowns','ComponentController@dropdownComponenet');
Route::get('/component-list-group','ComponentController@listGroupComponenet');
Route::get('/component-modals','ComponentController@modalComponenet');
Route::get('/component-pagination','ComponentController@paginationComponenet');
Route::get('/component-navbar','ComponentController@navbarComponenet');
Route::get('/component-tabs-component','ComponentController@tabsComponenet');
Route::get('/component-pills-component','ComponentController@pillComponenet');
Route::get('/component-tooltips','ComponentController@tooltipsComponenet');
Route::get('/component-popovers','ComponentController@popoversComponenet');
Route::get('/component-badges','ComponentController@badgesComponenet');
Route::get('/component-pill-badges','ComponentController@pillBadgesComponenet');
Route::get('/component-progress','ComponentController@progressComponenet');
Route::get('/component-media-objects','ComponentController@mediaObjectComponenet');
Route::get('/component-spinner','ComponentController@spinnerComponenet');
Route::get('/component-bs-toast','ComponentController@toastsComponenet');
// extra component
Route::get('/ex-component-avatar','ExComponentController@avatarComponent');
Route::get('/ex-component-chips','ExComponentController@chipsComponent');
Route::get('/ex-component-divider','ExComponentController@dividerComponent');
// form elements
Route::get('/form-inputs','FormController@inputForm');
Route::get('/form-input-groups','FormController@inputGroupForm');
Route::get('/form-number-input','FormController@numberInputForm');
Route::get('/form-select','FormController@selectForm');
Route::get('/form-radio','FormController@radioForm');
Route::get('/form-checkbox','FormController@checkboxForm');
Route::get('/form-switch','FormController@switchForm');
Route::get('/form-textarea','FormController@textareaForm');
Route::get('/form-quill-editor','FormController@quillEditorForm');
Route::get('/form-file-uploader','FormController@fileUploaderForm');
Route::get('/form-date-time-picker','FormController@datePickerForm');
Route::get('/form-layout','FormController@formLayout');
Route::get('/form-wizard','FormController@formWizard');
Route::get('/form-validation','FormController@formValidation');
Route::get('/form-repeater','FormController@formRepeater');
// table route
Route::get('/table','TableController@basicTable');
Route::get('/extended','TableController@extendedTable');
Route::get('/datatable','TableController@dataTable');
// page Route
Route::get('/page-user-profile','PageController@userProfilePage');
Route::get('/page-faq','PageController@faqPage');
Route::get('/page-knowledge-base','PageController@knowledgeBasePage');
Route::get('/page-knowledge-base/categories','PageController@knowledgeCatPage');
Route::get('/page-knowledge-base/categories/question','PageController@knowledgeQuestionPage');
Route::get('/page-search','PageController@searchPage');
Route::get('/page-account-settings','PageController@accountSettingPage');
// User Route 
Route::get('/page-users-list','UsersController@listUser');
Route::get('/page-users-view','UsersController@viewUser');
Route::get('/page-users-edit','UsersController@editUser');
// Authentication  Route
Route::get('/auth-login','AuthenticationController@loginPage');
Route::get('/auth-register','AuthenticationController@registerPage');
Route::get('/auth-forgot-password','AuthenticationController@forgetPasswordPage');
Route::get('/auth-reset-password','AuthenticationController@resetPasswordPage');
Route::get('/auth-lock-screen','AuthenticationController@authLockPage');
// Miscellaneous
Route::get('/page-coming-soon','MiscellaneousController@comingSoonPage');
Route::get('/error-404','MiscellaneousController@error404Page');
Route::get('/error-500','MiscellaneousController@error500Page');
Route::get('/page-not-authorized','MiscellaneousController@notAuthPage');
Route::get('/page-maintenance','MiscellaneousController@maintenancePage');
// Charts Route
Route::get('/chart-apex','ChartController@apexChart');
Route::get('/chart-chartjs','ChartController@chartJs');
Route::get('/chart-chartist','ChartController@chartist');
Route::get('/maps-google','ChartController@googleMap');
// extension route
Route::get('/ext-component-sweet-alerts','ExtensionsController@sweetAlert');
Route::get('/ext-component-toastr','ExtensionsController@toastr');
Route::get('/ext-component-noui-slider','ExtensionsController@noUiSlider');
Route::get('/ext-component-drag-drop','ExtensionsController@dragComponent');
Route::get('/ext-component-tour','ExtensionsController@tourComponent');
Route::get('/ext-component-swiper','ExtensionsController@swiperComponent');
Route::get('/ext-component-treeview','ExtensionsController@treeviewComponent');
Route::get('/ext-component-block-ui','ExtensionsController@blockUIComponent');
Route::get('/ext-component-media-player','ExtensionsController@mediaComponent');
Route::get('/ext-component-miscellaneous','ExtensionsController@miscellaneous');
Route::get('/ext-component-i18n','ExtensionsController@i18n');
// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/ecommerce', 'AccessController@home')->middleware('role:Admin');

Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
