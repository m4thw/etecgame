<?php

namespace App\Controllers;

class FuncionarioController extends BaseController
{

    public function index()
    {
        echo view('header');
        echo view('cadFuncionario');
        echo view('footer');
    }

    public function inserirFuncionario()
    {
        $data['msg'] = '';

        $request = service('request');

        if ($request->getMethod() === 'post') {

            $FuncionarioModelo = new \App\Models\FuncionarioModel();



            $FuncionarioModelo->set('codusu_FK', $request->getPost('codusu'));
            $FuncionarioModelo->set('nomeFun', $request->getPost('nomeFun'));
            $FuncionarioModelo->set('foneFun', $request->getPost('foneFun'));


            if ($FuncionarioModelo->insert()) {
                $data['msg'] = "Informações cadastradas com sucesso";
            } else {
                $data['msg'] = "Informações não cadastradas";
            }
        }
    }

    public function todosFuncionarios()
    {
        $FuncionarioModel = new \App\Models\FuncionarioModel();
        $registros = $FuncionarioModel->find();
        $data['funcionarios'] = $registros;

        $request = service('request');
        $codfuncionario = $request->getPost('codFun');
        $codFunAlterar = $request->getPost('codFunAlterar');

        if ($codfuncionario) {
            $this->funcionarioExcluir($codfuncionario);
            return redirect()->to(base_url('FuncionarioController/todosFuncionarios/'));
        }

        if ($codFunAlterar) {
            return $this->funcionarioAlterar();
        }

        echo view('header');
        echo view('listaFuncionario', $data);
        echo view('footer');
    }

    public function listaCodFuncionario()
    {
        $request = service('request');
        $data['usuario'] = '';



        if ($request->getPost('codusu')) {

            $UsuarioModel = new \App\Models\UsuarioModel();
            $codusuario = $request->getPost('codusu');
            $registros = $UsuarioModel->find($codusuario);

            $data['usuario'] = $registros;
        }

        if ($request->getPost('nomeFun') && $request->getPost('foneFun')) {

            $this->inserirFuncionario();
        }

        echo view('header');
        echo view('cadFuncionario', $data);
        echo view('footer');
    }

    public function buscaPrincipalFuncionarioCod()
    {
        $request = service('request');
        $FuncionarioModel = new \App\Models\FuncionarioModel();
        $codfuncionario = $request->getPost('codFun');
        $registros = $FuncionarioModel->find($codfuncionario);



        if ($request->getPost('codFunDeletar')) {
            $this->funcionarioExcluir($request->getPost('codFunDeletar'));
            return redirect()->to(base_url('FuncionarioController/todosFuncionarios/'));
        }

        if ($request->getPost('codFunAlterar')) {
            return $this->funcionarioAlterar();
        }

        $data['funcionario'] = $registros;

        echo view('header');
        echo view('listaCodFuncionario', $data);
        echo view('footer');
    }

    public function funcionarioExcluir($codFunDeletar)
    {
        if (is_null($codFunDeletar)) {
            return redirect()->to(base_url('FuncionarioController/todosFuncionarios'));
        }

        $FuncionarioModel = new \App\Models\FuncionarioModel();
        if ($FuncionarioModel->delete($codFunDeletar)) {
            return redirect()->to(base_url('FuncionarioController/todosFuncionarios'));
        } else {
            return redirect()->to(base_url('FuncionarioController/todosFuncionarios'));
        }
        return redirect()->to(base_url('FuncionarioController/todosFuncionarios'));
    }

    public function funcionarioAlterar()
    {
        $request = service('request');
        $codFunAlterar = $request->getPost('codFunAlterar');
        $nomeFun = $request->getPost('nomeFun');
        $foneFun = $request->getPost('foneFun');

        $FuncionarioModel = new \App\Models\FuncionarioModel();
        $registros = $FuncionarioModel->find($codFunAlterar);

        if ($request->getPost('nomeFun') && $request->getPost('foneFun')) {
            $registros->nomeFun = $nomeFun;
            $registros->foneFun = $foneFun;

            $FuncionarioModel->update($codFunAlterar, $registros);

            return redirect()->to(base_url('FuncionarioController/listaCodFuncionario/'));
        }

        $data['funcionario'] = $registros;

        echo view('header');
        echo view('alterarFormFuncionario', $data);
        echo view('footer');
    }
}
