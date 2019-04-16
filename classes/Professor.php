<?php
class Professor{
	private $idProfessor;
	private $nome;
	private $cpf;
	private $sexo;
	private $email;
	private $disciplina;
	private $periodo;
	private $registro;

function getIdProfessor(){
	return $this->idProfessor;
}
function setIdProfessor($idProfessor){
	$this->idProfessor = $idProfessor;
}
function getNome(){
	return $this->nome;
}	
function setNome($nome){
	$this->nome = $nome;
}
function getCpf(){
	return $this->cpf;
}
function setCpf($cpf){
	$this->cpf = $cpf;
}
function getSexo(){
	return $this->sexo;
}
function setSexo($sexo){
	$this->sexo = $sexo;
}
function getEmail(){
	return $this->email;
}
function setEmail($email){
	$this->email = $email;
}
function getDisciplina(){
	return $this->disciplina;
}
function setDisciplina($disciplina){
	$this->disciplina = $disciplina;
}
function getPeriodo(){
	return $this->periodo;
}
function setPeriodo($periodo){
	$this->periodo = $periodo;
}
function getRegistro(){
	return $this->registro;
}
function setRegistro($registro){
	$this->registro = $registro;
}
}
?>