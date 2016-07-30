<?php

namespace alunos\biblioteca\Controllers;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use alunos\biblioteca\Models\Pagina\Pagina;
use alunos\biblioteca\Models\Pagina\ResponsavelIdoso;

class frontController  implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('conteudo/index.twig');
        });
        
        $controllers->get('/pagina/{id}', function (Application $app, $id = 1) {
            $db = new Pagina;
            $data = $db->getPaginas($app, $id);
            if(count($data) > 0) {
                return $app->json($data, 200);
            }
            
            return $app->json(['result' => false], 404);
        });
        
        $controllers->get('/cadrespidoso', function (Application $app) {
            return $app['twig']->render('conteudo/cadRespIdoso.twig');
        });
        
        $controllers->get('/cadrespidoso/{id}', function (Application $app, $id = 1) {
            $db = new ResponsavelIdoso;
            $data = $db->getResponsavelIdoso($app, $id);
            if(count($data) > 0) {
                return $app->json($data, 200);
            }
            
            return $app->json(['result' => false], 404);
        });
        
        $controllers->post('/cadrespidoso', function (Application $app, Request $request) {
            /*echo 'Cheguei aqui ....';
            echo '<br>';
            echo $request->get('inputNomeResp3');
            echo '<br>';
            echo $request->get('inputCPFResp3');
            echo '<br>';
            echo $request->get('inputEndereco3');
            echo '<br>';
            echo $request->get('inputEmail3');
            echo '<br>';
            echo $request->get('inputTelefone3');
            echo '<br>';
            echo $request->get('inputNomeIdoso3');
            echo '<br>';
            echo $request->get('inputCPFIdoso3');
            echo '<br>';*/
            //return $app['twig']->render('conteudo/cadRespIdoso.twig');
            
            $ResponsavelIdoso = array(
                "ResponsavelCPF"        => $request->get('inputCPFResp3'),
                "ResponsavelNome"       => $request->get('inputNomeResp3'),
                "ResponsavelEmail"      => $request->get('inputEmail3'),
                "ResponsavelTelefone"   => $request->get('inputTelefone3'),
                "ResponsavelDDD"        => "11",
                "IdosoCPF"              => $request->get('inputCPFIdoso3'),
                "IdosoNome"             => $request->get('inputNomeIdoso3')
            );
            
            $db = new ResponsavelIdoso;
            $data = $db->setResponsavelIdoso($app, $ResponsavelIdoso);
            return 'Cadastrou';

        });
        
        return $controllers;
    }
}