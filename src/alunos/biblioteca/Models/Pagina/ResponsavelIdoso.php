<?php

namespace alunos\biblioteca\Models\Pagina;

class ResponsavelIdoso
{
    
    protected $table = 'ResponsavelIdoso';
    
    public function getResponsavelIdoso($app, $id = 1)
    {        
        return $app['entityManager']->getRepository('alunos\biblioteca\Models\Entities\ResponsavelIdoso')->findOneBy(array('Id' => $id));
    }
    
    public function setResponsavelIdoso($app, $data = [])
    {
        try{
            $app['db']->insert($this->table, $data);
            echo 'Deu certo';
        }
        catch(Exception $e){
            {
                echo $e->getMessage();
            }
        }
        //$result = $app['db']->insert($this->table, $data);
        //var_dump($result);
    }
}