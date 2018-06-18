<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Usuario_model extends CI_Model {

  /*
  CREATE Usuario IF NOT EXISTS Usuario(
    CPF CHAR(11),
    Senha CHAR(8),
    Nome VARCHAR(60),
    Regras_Troca INT UNSIGNED,
    PRIMARY KEY(CPF),
    FOREIGN KEY (Regras_Troca) REFERENCES Regras_Troca (CPF)
  );
  */

  // Variável que define o nome da tabela
  var $Usuario = "";
  /**
  * Método Construtor
  */
  function __construct() {
    parent::__construct();
  }
  /**
  * Insere um registro na tabela
  *
  * @param array $data Dados a serem inserCPFos
  *
  * @return boolean
  */
  function Inserir($data) {
    if(!isset($data))
      return false;
    return $this->db->insert($this->Usuario, $data);
  }
  /**
  * Recupera um registro a partir de um CPF
  *
  * @param integer $CPF (CPF) do registro a ser recuperado
  *
  * @return array
  */
  function GetByCPF($CPF) {
    if(is_null($CPF))
      return false;
    $this->db->where('CPF', $CPF);

    $query = $this->db->get($this->Usuario);
    if ($query->num_rows() > 0) {
      echo
      return $query->row_array();
    } else {
      return null;
    }
  }
  /**
  * Lista todos os registros da tabela
  *
  * @param string $sort Campo para ordenação dos registros
  *
  * @param string $order Tipo de ordenação: ASC ou DESC
  *
  * @return array
  */
  function GetAll($sort = 'CPF', $order = 'asc') {
    $this->db->order_by($sort, $order);
    $query = $this->db->get($this->Usuario);
    if ($query->num_rows() > 0) {
      #echo "if (query->num_rows() > 0): $query"
      return $query->result_array();
    } else {
      return null;
    }
  }
  /**
  * Atualiza um registro na tabela
  *
  * @param integer $int CPF do registro a ser atualizado
  *
  * @param array $data Dados a serem inserCPFos
  *
  * @return boolean
  */
  function Atualizar($CPF, $data) {
    if(is_null($CPF) || !isset($data))
      return false;
    $this->db->where('CPF', $CPF);
    return $this->db->update($this->Usuario, $data);
  }
  /**
  * Remove um registro na tabela
  *
  * @param integer $int CPF do registro a ser removCPFo
  *
  *
  * @return boolean
  */
  function Excluir($CPF) {
    if(is_null($CPF))
      return false;
    $this->db->where('CPF', $CPF);
    return $this->db->delete($this->Usuario);
  }
}
/* End of file */
