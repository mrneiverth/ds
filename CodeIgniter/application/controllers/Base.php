<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller{

    /**
    * Homepage.
    */
    function Index(){
        //TODO
    }

    /**
    * Adiciona um usuário.
    */
    function criarUsuario(){

        //$data = ("25483125412", "12345678", "Fulano", 0);
        $data = $this->input->post();
        $status = $this->usuario_model->Inserir($data);

        if(!$status){
            $this->session->set_flashdata('error', 'Erro ao inserir novo usuário.');
        }else{
            $this->session->set_flashdata('success', 'Usuário inserido com sucesso.');
        }

        $this->load->view('home');
    }

    /**
    * Adiciona uma figurinha.
    */
    function criarFigurinha(){
        //$data = ("25483125412", "12345678", "Fulano", 0);
        $data = $this->input->post();
        $status = $this->figurinha_model->Inserir($data);

        if(!$status){
            $this->session->set_flashdata('error', 'Erro ao inserir nova figurinha.');
        }else{
            $this->session->set_flashdata('success', 'Figurinha inserida com sucesso.');
        }

        $this->load->view('home');
    }

    /**
    * Remove uma figurinha.
    */
    function deletarFigurinha(){
        $id = $this->input->post('ID');
        $status = $this->figurinha_model->Excluir($id);

        if(!$status){
            $this->session->set_flashdata('error', 'Erro ao excluir a figurinha.');
        }else{
            $this->session->set_flashdata('success', 'Figurinha excluída com sucesso.');
        }

        $this->load->view('home');
    }

    /**
    * Remove um usuário.
    */
    function deletarUsuario(){

        $cpf = $this->input->post('CPF');
        $status = $this->usuario_model->Excluir($cpf);

        if(!$status){
            $this->session->set_flashdata('error', 'Erro ao excluir o usuário.');
        }else{
            $this->session->set_flashdata('success', 'Usuário excluído com sucesso.');
        }

        $this->load->view('home');
    }

    /**
    * Atualiza uma figurinha.
    */
    function atualizarFigurinha(){
        
        $id = $this->input->post('ID');
        $status = $this->figurinha_model->GetByID($id);

        $data = $this->input->post();
        $status = $this->figurinha_model->Atualizar($id, $data);

        if(!$status){
            $this->session->set_flashdata('error', 'Erro ao atualizar a figurinha.');
        }else{
            $this->session->set_flashdata('success', 'Figurinha excluída com sucesso.');
        }

        $this->load->view('home');
    }

    /**
    * Atualiza um usuário.
    */
    function atualizarUsuario(){

        $cpf = $this->input->post('CPF');
        $status = $this->usuario_model->GetByCPF($cpf);

        $data = $this->input->post();
        $status = $this->usuario_model->Atualizar($cpf, $data);

        if(!$status){
            $this->session->set_flashdata('error', 'Erro ao atualizar o usuário.');
        }else{
            $this->session->set_flashdata('success', 'Usuário atualizado com sucesso.');
        }

        $this->load->view('home');
    }

}
