# monitoria_apc

 Projeto de banco de dados, criação de um banco para a monitoria de apc.
 
## Autores

- Alícia Rita Oliveira dos Reis - `17/0129306`
- Cintia Leal Rodrigues - `17/0125696`

## CRUD

  A criação do CRUD foi em PHP, utilizando o XAMPP e composer 

## Banco de dados

  MySql

## Framework Frontend
  Bootstrap
  
## Script SQL
  ```sql
create database monitoria_apc ;
use monitoria_apc;

create table ALUNO (
	idAluno integer unsigned PRIMARY KEY auto_increment,
	matricula integer unsigned,
	nome varchar(100) NOT NULL);

create table PROFESSOR (
	idProfessor integer unsigned PRIMARY KEY,
	matricula integer unsigned,
    nome varchar(100) NOT NULL,
	senha varchar(50) NOT NULL);

create table MONITOR (
	idMonitor integer unsigned PRIMARY KEY,
	matricula integer unsigned,
    nome varchar(100) NOT NULL,
	senha varchar(50) NOT NULL);
    
create table MONITORIA (
	idMonitor integer unsigned,
	horarioMonitoria varchar(20) NOT NULL,
    diaDaSemana varchar(50),
    FOREIGN KEY (idMonitor) REFERENCES MONITOR(idMonitor));

create table TUTOR (
	idTutor integer unsigned PRIMARY KEY,
	matricula integer unsigned,
    nome varchar(100) NOT NULL,
	senha varchar(50) NOT NULL);
   
create table TUTORIA (
	idTutor integer unsigned, 
    horarioTutoria varchar(20) NOT NULL,
    diaDaSemana varchar(50),
    FOREIGN KEY (idTutor) REFERENCES TUTOR(idTutor));
    
create table TURMA (
	idProfessor integer unsigned,
	idAluno integer unsigned,
	idMonitor integer unsigned,
	idTutor integer unsigned,
	turma varchar(3) NOT NULL,
	horario varchar(20) NOT NULL,
    diaDaSemana varchar(60) NOT NULL,
    FOREIGN KEY (idProfessor) REFERENCES PROFESSOR(idProfessor),
	FOREIGN KEY (idAluno) REFERENCES ALUNO(idAluno),
	FOREIGN KEY (idMonitor) REFERENCES MONITOR(idMonitor),
	FOREIGN KEY (idTutor) REFERENCES TUTOR(idTutor));
    
create table CURSO(
	idAluno integer unsigned, 
    nome varchar(255) NOT NULL,
    tipoDisciplina varchar(3) NOT NULL,
    FOREIGN KEY (idAluno) REFERENCES ALUNO(idAluno));

create table DUVIDA(
	idAluno integer unsigned,
	assunto varchar(255) NOT NULL,
    matricula integer unsigned,
    descricao text,
    arquivo BLOB,
	dataDuvida TIMESTAMP on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (idAluno) REFERENCES ALUNO(idAluno));

create table AGENDAR (
	idAluno integer unsigned,
    idTutor integer unsigned,
    FOREIGN KEY (idTutor) references TUTORIA(idTutor),
	FOREIGN KEY (idAluno) REFERENCES ALUNO(idAluno),
    dia date);
  ```

