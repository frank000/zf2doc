<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Entity Class representing a Post of our Zend Framework 2 Blogging Application
 *
 * @ORM\Entity
 * @ORM\Table(name="tb_usu")
 * @property int $id
 * @property string $nome
 * @property string $senha
 * @property int $data
 * @property string $role
 */
class Teste {
	
	/**
	 * Primary Identifier
	 *
	 * @ORM\Id
	 * @ORM\Column(name="id_usu", type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var integer
	 * @access protected
	 */
	protected $id;
	
	/**
	 * Title of our Blog Post
	 *
	 * @ORM\Column(name="no_usu", type="string")
	 * @var string
	 * @access protected
	 */
	protected $nome;
	
	/**
	 * Title of our Blog Post
	 *
	 * @ORM\Column(name="se_usu", type="string")
	 * @var string
	 * @access protected
	 */
	protected $senha;
	
	/**
	 * Title of our Blog Post
	 *
	 * @ORM\Column(name="dt_criada", type="integer")
	 * @var integer
	 * @access protected
	 */
	protected $data;
	
	/**
	 * Title of our Blog Post
	 *
	 * @ORM\Column(name="role", type="string")
	 * @var string
	 * @access protected
	 */
	protected $role;
	
	
	
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $nome
	 */
	public function getNome() {
		return $this->nome;
	}

	/**
	 * @return the $senha
	 */
	public function getSenha() {
		return $this->senha;
	}

	/**
	 * @return the $data
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @return the $role
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * @param number $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param string $nome
	 */
	public function setNome($nome) {
		$this->nome = $nome;
	}

	/**
	 * @param string $senha
	 */
	public function setSenha($senha) {
		$this->senha = $senha;
	}

	/**
	 * @param \module\Application\src\Application\Entity\interger $data
	 */
	public function setData($data) {
		$this->data = $data;
	}

	/**
	 * @param string $role
	 */
	public function setRole($role) {
		$this->role = $role;
	}

	
	
	
	
}

?>