<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Administrador;


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




/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware([Administrador::class])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(Administrador::class);
        Route::get('admin/user/create', ['as' => 'admin.user.create', 'uses' => 'Admin\UserController@create']);
        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(Administrador::class);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(Administrador::class);;

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });

    /**viaturas */
    Route::get('admin/viaturas/index', ['as' => 'admin.viaturas.index', 'uses' => 'Admin\ViaturaController@index']);
    Route::get('admin/viaturas/show/{id}', ['as' => 'admin.viaturas.show', 'uses' => 'Admin\ViaturaController@show'])->withoutMiddleware(Administrador::class);
    Route::get('admin/viaturas/create', ['as' => 'admin.viaturas.create', 'uses' => 'Admin\ViaturaController@create']);
    Route::get('admin/viaturas/edit/{id}', ['as' => 'admin.viaturas.edit', 'uses' => 'Admin\ViaturaController@edit'])->withoutMiddleware(Administrador::class);;
    Route::put('admin/viaturas/update/{id}', ['as' => 'admin.viaturas.update', 'uses' => 'Admin\ViaturaController@update'])->withoutMiddleware(Administrador::class);;
    Route::post('admin/viaturas/store', ['as' => 'admin.viaturas.store', 'uses' => 'Admin\ViaturaController@store']);
    Route::get('admin/viaturas/delete/{id}', ['as' => 'admin.viaturas.delete', 'uses' => 'Admin\ViaturaController@destroy']);
    /**fim viaturas */

    /**atribuçoes de viatturas */

    Route::get('admin/atribuices-viaturas/index', ['as' => 'admin.atribuicoes.index', 'uses' => 'Admin\AtribuicoesControlle@index']);
    Route::get('admin/atribuices-viaturas/show/{id}', ['as' => 'admin.atribuicoes.show', 'uses' => 'Admin\AtribuicoesControlle@show'])->withoutMiddleware(Administrador::class);
    Route::get('admin/atribuices-viaturas/create', ['as' => 'admin.atribuicoes.create', 'uses' => 'Admin\AtribuicoesControlle@create']);
    Route::get('admin/atribuices-viaturas/edit/{id}', ['as' => 'admin.atribuicoes.edit', 'uses' => 'Admin\AtribuicoesControlle@edit'])->withoutMiddleware(Administrador::class);;
    Route::put('admin/atribuices-viaturas/update/{id}', ['as' => 'admin.atribuicoes.update', 'uses' => 'Admin\AtribuicoesControlle@update'])->withoutMiddleware(Administrador::class);;
    Route::post('admin/atribuices-viaturas/store', ['as' => 'admin.atribuicoes.store', 'uses' => 'Admin\AtribuicoesControlle@store']);
    Route::get('admin/atribuices-viaturas/delete/{id}', ['as' => 'admin.atribuicoes.delete', 'uses' => 'Admin\AtribuicoesControlle@destroy']);
    /**fim atribucoes */


    /**gastos-combustivel */

    Route::get('admin/gastos-combustivel/index', ['as' => 'admin.gastosCombustivel.index', 'uses' => 'Admin\GastosCombustivelController@index']);
    Route::get('admin/gastos-combustivel/relatorio', ['as' => 'admin.gastosCombustivel.relatorio', 'uses' => 'Admin\GastosCombustivelController@relatorio']);
    Route::get('admin/gastos-combustivel/show/{id}', ['as' => 'admin.gastosCombustivel.show', 'uses' => 'Admin\GastosCombustivelController@show'])->withoutMiddleware(Administrador::class);
    Route::get('admin/gastos-combustivel/create', ['as' => 'admin.gastosCombustivel.create', 'uses' => 'Admin\GastosCombustivelController@create']);
    Route::get('admin/gastos-combustivel/edit/{id}', ['as' => 'admin.gastosCombustivel.edit', 'uses' => 'Admin\GastosCombustivelController@edit'])->withoutMiddleware(Administrador::class);;
    Route::put('admin/gastos-combustivel/update/{id}', ['as' => 'admin.gastosCombustivel.update', 'uses' => 'Admin\GastosCombustivelController@update'])->withoutMiddleware(Administrador::class);;
    Route::post('admin/gastos-combustivel/store', ['as' => 'admin.gastosCombustivel.store', 'uses' => 'Admin\GastosCombustivelController@store']);
    Route::get('admin/gastos-combustivel/delete/{id}', ['as' => 'admin.gastosCombustivel.delete', 'uses' => 'Admin\GastosCombustivelController@destroy']);
    /**gastos-combustivel */



    /**solicitacoes */
    Route::get('admin/solicitacoes-viaturas/sw/{id}', ['as' => 'admin.solicitacoes.cadastrar', 'uses' => 'Admin\SolicitacoesController@solicitar']);
    Route::get('admin/localizadar-viaturas', ['as' => 'admin.solicitacoes.buscar', 'uses' => 'Admin\SolicitacoesController@index']);

 Route::get('admin/localizadar-viaturas', ['as' => 'admin.solicitacoes.buscar', 'uses' => 'Admin\SolicitacoesController@index']);
 Route::get('admin/solicitacoes-viaturas/relatorio', ['as' => 'admin.solicitacoes.relatorio', 'uses' => 'Admin\SolicitacoesController@relatorio']);

 Route::get('admin//solicitacoes-viaturas/listar', ['as' => 'admin.solicitacoes.listar', 'uses' => 'Admin\SolicitacoesController@index']);
    Route::get('admin/solicitacoes-viaturas/index', ['as' => 'admin.solicitacoes.index', 'uses' => 'Admin\SolicitacoesController@index']);
    Route::get('admin/solicitacoes-viaturas/show/{id}', ['as' => 'admin.solicitacoes.show', 'uses' => 'Admin\SolicitacoesController@show']);
    Route::get('admin/solicitacoes-viaturas/create', ['as' => 'admin.solicitacoes.create', 'uses' => 'Admin\SolicitacoesController@create']);
    Route::get('admin/solicitacoes-viaturas/edit/{id}', ['as' => 'admin.solicitacoes.edit', 'uses' => 'Admin\SolicitacoesController@edit']);
    Route::put('admin/solicitacoes-viaturas/update/{id}', ['as' => 'admin.solicitacoes.update', 'uses' => 'Admin\SolicitacoesController@update']);
    Route::post('admin/solicitacoes-viaturas/store', ['as' => 'admin.solicitacoes.store', 'uses' => 'Admin\SolicitacoesController@buscar']);
    Route::post('admin/solicitacoes-viaturas/cadastrar/solicitacao', ['as' => 'admin.cadastrar.store', 'uses' => 'Admin\SolicitacoesController@cadastrar']);
    Route::get('admin/solicitacoes-viaturas/delete/{id}', ['as' => 'admin.solicitacoes.delete', 'uses' => 'Admin\SolicitacoesController@destroy']);

    Route::get('admin/solicitacoes-viaturas/detalhes/{id}', ['as' => 'admin.solicitacoes.detalhes', 'uses' => 'Admin\SolicitacoesController@detalhes']);
    /**solicitacoes */
/**estatistica */
Route::get('admin/estatistica/combustivel', ['as' => 'admin.estatistic.combustivel', 'uses' => 'Admin\EstatisticaController@combustivel'])->withoutMiddleware(Administrador::class);
Route::get('admin/estatistica/multa', ['as' => 'admin.estatistic.multa', 'uses' => 'Admin\EstatisticaController@multa'])->withoutMiddleware(Administrador::class);
    /**multas de viaturas */

    Route::get('admin/multas-viaturas/index', ['as' => 'admin.MultaViaturas.index', 'uses' => 'Admin\MultaViaturasController@index']);
    Route::get('admin/multas-viaturas/relatorio', ['as' => 'admin.MultaViaturas.relatorio', 'uses' => 'Admin\MultaViaturasController@relatorio']);
    Route::get('admin/multas-viatura/show/{id}', ['as' => 'admin.MultaViaturas.show', 'uses' => 'Admin\MultaViaturasController@show'])->withoutMiddleware(Administrador::class);
    Route::get('admin/multas-viatura/create', ['as' => 'admin.MultaViaturas.create', 'uses' => 'Admin\MultaViaturasController@create']);
    Route::get('admin/multas-viatura/edit/{id}', ['as' => 'admin.MultaViaturas.edit', 'uses' => 'Admin\MultaViaturasController@edit'])->withoutMiddleware(Administrador::class);;
    Route::put('admin/multas-viatura/update/{id}', ['as' => 'admin.MultaViaturas.update', 'uses' => 'Admin\MultaViaturasController@update'])->withoutMiddleware(Administrador::class);;
    Route::post('admin/multas-viatura/store', ['as' => 'admin.MultaViaturas.store', 'uses' => 'Admin\MultaViaturasController@store']);
    Route::get('admin/multas-viatura/delete/{id}', ['as' => 'admin.MultaViaturas.delete', 'uses' => 'Admin\MultaViaturasController@destroy']);
    /**multas de viaturas */

    Route::middleware([Editor::class])->group(function () {
        /* gallery */
        Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
        Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);

        Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
        Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);

        Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
        Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);

        Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
        /* end gallery */

        /* imageGallery */
        Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
        Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);

        Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
        /* End imageGallery */



        /* announcement */
        Route::get('admin/clientes/index', ['as' => 'admin.clientes.index', 'uses' => 'Admin\ClientsController@index']);
        Route::get('admin/clientes/show/{id}', ['as' => 'admin.clientes.show', 'uses' => 'Admin\ClientsController@show']);
        Route::get('admin/clientes/create', ['as' => 'admin.clientes.create', 'uses' => 'Admin\ClientsController@create']);
        Route::post('admin/clientes/store', ['as' => 'admin.clientes.store', 'uses' => 'Admin\ClientsController@store']);
        Route::get('admin/clientes/edit/{id}', ['as' => 'admin.clientes.edit', 'uses' => 'Admin\ClientsController@edit']);
        Route::put('admin/clientes/update/{id}', ['as' => 'admin.clientes.update', 'uses' => 'Admin\ClientsController@update']);
        Route::get('admin/clientes/delete/{id}', ['as' => 'admin.clientes.delete', 'uses' => 'Admin\ClientsController@destroy']);



        /* legislação */
        Route::get('admin/legislação/index', ['as' => 'admin.legislation.index', 'uses' => 'Admin\LegislationController@index']);
        Route::get('admin/legislação/show/{id}', ['as' => 'admin.legislation.show', 'uses' => 'Admin\LegislationController@show']);
        Route::get('admin/legislação/create', ['as' => 'admin.legislation.create', 'uses' => 'Admin\LegislationController@create']);
        Route::post('admin/legislaação/store', ['as' => 'admin.legislation.store', 'uses' => 'Admin\LegislationController@store']);
        Route::get('admin/legislação/edit/{id}', ['as' => 'admin.legislation.edit', 'uses' => 'Admin\LegislationController@edit']);
        Route::put('admin/legislação/update/{id}', ['as' => 'admin.legislation.update', 'uses' => 'Admin\LegislationController@update']);
        Route::get('admin/legislação/delete/{id}', ['as' => 'admin.legislation.delete', 'uses' => 'Admin\LegislationController@destroy']);
        /* end legislação */

        /* announcement */
        Route::get('admin/comunicados/index', ['as' => 'admin.announcement.index', 'uses' => 'Admin\AnnouncementController@index']);
        Route::get('admin/comunicados/show/{id}', ['as' => 'admin.announcement.show', 'uses' => 'Admin\AnnouncementController@show']);
        Route::get('admin/comunicados/create', ['as' => 'admin.announcement.create', 'uses' => 'Admin\AnnouncementController@create']);
        Route::post('admin/comunicados/store', ['as' => 'admin.announcement.store', 'uses' => 'Admin\AnnouncementController@store']);
        Route::get('admin/comunicados/edit/{id}', ['as' => 'admin.announcement.edit', 'uses' => 'Admin\AnnouncementController@edit']);
        Route::put('admin/comunicados/update/{id}', ['as' => 'admin.announcement.update', 'uses' => 'Admin\AnnouncementController@update']);
        Route::get('admin/comunicados/delete/{id}', ['as' => 'admin.announcement.delete', 'uses' => 'Admin\AnnouncementController@destroy']);
        /* end announcement */


        /* announcement */
        Route::get('admin/publicacoes/index', ['as' => 'admin.publication.index', 'uses' => 'Admin\PublicationController@index']);
        Route::get('admin/publicacoes/show/{id}', ['as' => 'admin.publication.show', 'uses' => 'Admin\PublicationController@show']);
        Route::get('admin/publicacoes/create', ['as' => 'admin.publication.create', 'uses' => 'Admin\PublicationController@create']);
        Route::post('admin/publicacoes/store', ['as' => 'admin.publication.store', 'uses' => 'Admin\PublicationController@store']);
        Route::get('admin/publicacoes/edit/{id}', ['as' => 'admin.publication.edit', 'uses' => 'Admin\PublicationController@edit']);
        Route::put('admin/publicacoes/update/{id}', ['as' => 'admin.publication.update', 'uses' => 'Admin\PublicationController@update']);
        Route::get('admin/publicacoes/delete/{id}', ['as' => 'admin.publication.delete', 'uses' => 'Admin\PublicationController@destroy']);
        /* end announcement */



        /* slideshow */
        Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
        Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);

        Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
        Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);

        Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
        Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);

        Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
        /* end slideshow */


        /* news */
        Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
        Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

        Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
        Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

        Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
        Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

        Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
        /* end news */


        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */


        /* dniap */
        Route::get('admin/dniap/show', ['as' => 'admin.dniap.show', 'uses' => 'Admin\DniapController@show']);

        Route::get('admin/dniap/edit/{id}', ['as' => 'admin.dniap.edit', 'uses' => 'Admin\DniapController@edit']);
        Route::put('admin/dniap/update/{id}', ['as' => 'admin.dniap.update', 'uses' => 'Admin\DniapController@update']);
        /* end dniap */

        /* dnpcc */
        Route::get('admin/dnpcc/show', ['as' => 'admin.dnpcc.show', 'uses' => 'Admin\DnpccController@show']);

        Route::get('admin/dnpcc/edit/{id}', ['as' => 'admin.dnpcc.edit', 'uses' => 'Admin\DnpccController@edit']);
        Route::put('admin/dnpcc/update/{id}', ['as' => 'admin.dnpcc.update', 'uses' => 'Admin\DnpccController@update']);
        /* end dnpcc */

        /* senra */
        Route::get('admin/senra/show', ['as' => 'admin.senra.show', 'uses' => 'Admin\SenraController@show']);

        Route::get('admin/senra/edit/{id}', ['as' => 'admin.senra.edit', 'uses' => 'Admin\SenraController@edit']);
        Route::put('admin/senra/update/{id}', ['as' => 'admin.senra.update', 'uses' => 'Admin\SenraController@update']);
        /* end senra */

        /* about */
        Route::get('admin/about/show', ['as' => 'admin.about.show', 'uses' => 'Admin\AboutController@show']);

        Route::get('admin/about/edit/{id}', ['as' => 'admin.about.edit', 'uses' => 'Admin\AboutController@edit']);
        Route::put('admin/about/update/{id}', ['as' => 'admin.about.update', 'uses' => 'Admin\AboutController@update']);
        /* end about */

        /* reclamation */
        Route::get('admin/reclamation/index', ['as' => 'admin.reclamation.index', 'uses' => 'Admin\ReclamationController@index']);
        Route::get('admin/reclamation/show/{id}', ['as' => 'admin.reclamation.show', 'uses' => 'Admin\ReclamationController@show']);


        /* reclamation */
        Route::get('admin/denucias/index', ['as' => 'admin.complaint.index', 'uses' => 'Admin\ComplaintController@index']);
        Route::get('admin/denucias/show/{id}', ['as' => 'admin.complaint.show', 'uses' => 'Admin\ComplaintController@show']);
    });
});
