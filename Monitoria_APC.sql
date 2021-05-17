create database monitoria_apc ;
use monitoria_apc;

DROP TABLE IF EXISTS ALUNO;
DROP TABLE IF EXISTS PROFESSOR;
DROP TABLE IF EXISTS TURMA; 
DROP TABLE IF EXISTS MONITORIA;
DROP TABLE IF EXISTS MONITOR;
DROP TABLE IF EXISTS TUTORIA;
DROP TABLE IF EXISTS TUTOR;
DROP TABLE IF EXISTS CURSO;
DROP TABLE IF EXISTS DUVIDA;
DROP TABLE IF EXISTS AGENDAR;

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
	
select * from ALUNO;
insert into ALUNO ( matricula, nome ) VALUES ('150125637', 'Ana Julia Silva');
insert into ALUNO ( matricula, nome ) VALUES ('170158847', 'Mateus Costa Silta');
insert into ALUNO ( matricula, nome ) VALUES ('190046957', 'Maria Alice Reis');
insert into ALUNO ( matricula, nome ) VALUES ('190123314', 'Paulo Costa Ribeiro');
insert into ALUNO ( matricula, nome ) VALUES ('180094752', 'João Marcos Santos');

select * from PROFESSOR;
insert into PROFESSOR ( idProfessor, matricula, nome, senha) VALUES (1000, '205694153', 'Roberto Martins', 'null');
insert into PROFESSOR ( idProfessor, matricula, nome, senha) VALUES (1001, '902545212', 'Luis Gustavo', 'null' );
insert into PROFESSOR ( idProfessor, matricula, nome, senha) VALUES (1002, '360210054', 'Fernanda Santiago', 'null' );
insert into PROFESSOR ( idProfessor, matricula, nome, senha) VALUES (1003, '178620266', 'Vanessa Lima', 'null');
insert into PROFESSOR ( idProfessor, matricula, nome, senha) VALUES (1004, '230515846', 'Maria Luisa', 'null');

select * from MONITOR;
insert into MONITOR ( idMonitor, matricula, nome, senha) VALUES (10010, '160036523', 'Junior Lopes', 'null');
insert into MONITOR ( idMonitor, matricula, nome, senha) VALUES (10011, '170015696', 'Laura Dias', 'null');
insert into MONITOR ( idMonitor, matricula, nome, senha) VALUES (10012, '160158744', 'Mariana Sousa', 'null');
insert into MONITOR ( idMonitor, matricula, nome, senha) VALUES (10013, '150047788', 'Elton Ferreira', 'null');
insert into MONITOR ( idMonitor, matricula, nome, senha) VALUES (10014, '160112369', 'Junior Lopes', 'null');

select * from TUTOR;
insert into TUTOR ( idTutor, matricula, nome, senha) VALUES (11001, '160058478', 'Marcos Paulo', 'null');
insert into TUTOR ( idTutor, matricula, nome, senha) VALUES (11002, '150148744', 'Gabriel Rodrigues', 'null');
insert into TUTOR ( idTutor, matricula, nome, senha) VALUES (11003, '130152266', 'Camila Falcão', 'null');
insert into TUTOR ( idTutor, matricula, nome, senha) VALUES (11004, '170195222', 'Daniella Soares', 'null');
insert into TUTOR ( idTutor, matricula, nome, senha) VALUES (11005, '150069957', 'Wesley Silva', 'null');

select * from MONITORIA;
insert into MONITORIA (idMonitor, horarioMonitoria, diaDaSemana) VALUES (10012, '12:00 às 13:00', 'Seg e Qua');
insert into MONITORIA (idMonitor, horarioMonitoria, diaDaSemana) VALUES (10013, '12:00 às 13:00', 'Ter e Qui');
insert into MONITORIA (idMonitor, horarioMonitoria, diaDaSemana) VALUES (10014, '16:00 às 17:00', 'Seg e Qua');
insert into MONITORIA (idMonitor, horarioMonitoria, diaDaSemana) VALUES (10011, '15:00 às 17:00', 'Sab');
insert into MONITORIA (idMonitor, horarioMonitoria, diaDaSemana) VALUES (10010, '14:00 às 15:00', 'Seg e Sex');

select * from TUTORIA;
insert into TUTORIA (idTutor, horarioTutoria, diaDaSemana) VALUES ('11001', '14:00 às 17:50', 'Seg e Qua');
insert into TUTORIA (idTutor, horarioTutoria, diaDaSemana) VALUES ('11002', '08:00 às 11:50', 'Ter e Sex');
insert into TUTORIA (idTutor, horarioTutoria, diaDaSemana) VALUES ('11003', '14:00 às 17:50', 'Ter, Qua e Qui');
insert into TUTORIA (idTutor, horarioTutoria, diaDaSemana) VALUES ('11005', '08:00 às 11:50', 'Seg e Qua');
insert into TUTORIA (idTutor, horarioTutoria, diaDaSemana) VALUES ('11004', '19:00 às 21:50', 'Seg e Ter');

select * from TURMA;
insert into TURMA (idProfessor, idAluno, idMonitor, idTutor, turma, horario, diaDaSemana) VALUES (1000, 1, 10014, 11004, 'A', '14:00 às 15:50', 'Seg, Ter e Qua');
insert into TURMA (idProfessor, idAluno, idMonitor, idTutor, turma, horario, diaDaSemana) VALUES (1001, 2, 10010, 11001, 'B', '08:00 às 09:50', 'Ter, Qui e Sex');
insert into TURMA (idProfessor, idAluno, idMonitor, idTutor, turma, horario, diaDaSemana) VALUES (1002, 3, 10011, 11003, 'C', '10:00 às 11:50', 'Seg, Qua e Sex');
insert into TURMA (idProfessor, idAluno, idMonitor, idTutor, turma, horario, diaDaSemana) VALUES (1003, 4, 10012, 11002, 'D', '16:00 às 17:50', 'Seg, Ter e Qui');
insert into TURMA (idProfessor, idAluno, idMonitor, idTutor, turma, horario, diaDaSemana) VALUES (1004, 5, 10013, 11005,'E', '19:00 às 20:50', 'Seg, Ter e Sex');

select * from CURSO;
insert into CURSO (idAluno, nome, tipoDisciplina) VALUES (1, 'Ciências da Computação', 'OBR');
insert into CURSO (idAluno, nome, tipoDisciplina) VALUES (2, 'Engenharia Aeroespacial', 'OPT');
insert into CURSO (idAluno, nome, tipoDisciplina) VALUES (4, 'Engenharia de Computação', 'OBR');
insert into CURSO (idAluno, nome, tipoDisciplina) VALUES (5, 'Computação', 'OBR');
insert into CURSO (idAluno, nome, tipoDisciplina) VALUES (3, 'Engenharia Civil', 'ML');

select * from DUVIDA;
insert into DUVIDA (idAluno, assunto, matricula, descricao, arquivo) VALUES (1, 'Estrutura for', '150125637', 'Como montar um for?', LOAD_FILE('Documentos/BD/ARQUIVO.PNG'));
insert into DUVIDA (idAluno, assunto, matricula, descricao, arquivo) VALUES (2, 'Erro no while', '150125637', 'While com loop infinito', LOAD_FILE('Documentos/BD/ARQUIVO.PNG'));
insert into DUVIDA (idAluno, assunto, matricula, descricao, arquivo) VALUES (3, 'If else', '190046957', 'Meu programa entra em dois if, como eu arrumo?', LOAD_FILE('Documentos/BD/ARQUIVO.PNG'));
insert into DUVIDA (idAluno, assunto, matricula, descricao, arquivo) VALUES (4, 'Erro no meu vetor', '170158847', 'Estou com erros no meu vetor, segue o vetor: int vet[] = {1,2,3,4,5,6,7,8,9,10,a} ', LOAD_FILE('Documentos/BD/ARQUIVO.PNG'));
insert into DUVIDA (idAluno, assunto, matricula, descricao, arquivo) VALUES (5, 'SyntaxError: invalid syntax', '180094752', 'Fui compilar meu programa no terminal e deu esse erro, o que pode ser?', LOAD_FILE('Documentos/BD/ARQUIVO.PNG'));

select * from AGENDAR;
insert into AGENDAR (idAluno, idTutor, dia) VALUES (1, '11005', '2021-05-12');
insert into AGENDAR (idAluno, idTutor, dia) VALUES (2, '11004', '2021-05-12');
insert into AGENDAR (idAluno, idTutor, dia) VALUES (3, '11003', '2021-05-13');
insert into AGENDAR (idAluno, idTutor, dia) VALUES (4, '11002', '2021-05-17');
insert into AGENDAR (idAluno, idTutor, dia) VALUES (5, '11001', '2021-04-28');

/* VIEW */
CREATE VIEW Buscar_Duvidas
AS SELECT ALUNO.matricula, DUVIDA.descricao, DUVIDA.arquivo, DUVIDA.assunto
FROM DUVIDA
INNER JOIN ALUNO
ON ALUNO.idAluno = DUVIDA.idAluno;

select * from Buscar_Duvidas;

CREATE PROCEDURE ATENDIMENTO (idAluno integer )
SELECT CONCAT ('Atendimento do Aluno ', idAluno) AS atende
FROM  ALUNO
WHERE idAluno = idAluno; 

CREATE PROCEDURE Q_turma (idProfessor integer )
SELECT CONCAT ('Professor é da turma ', turma) AS ministra
FROM  TURMA 
WHERE idProfessor = '1000'; 

CALL Q_turma('1000');
CALL ATENDIMENTO('1');
DROP PROCEDURE  ATENDIMENTO;
drop procedure Q_turma;