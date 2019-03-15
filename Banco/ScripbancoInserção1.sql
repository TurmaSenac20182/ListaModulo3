use mydb;

insert into setor(descricao)values
(
  "TI",
  "Adiminstração",
  "RH",
  "Contabilidade",
  "Atendimento",
  "Governancia"
);

insert into turno(descricao)values
  ("Manha"),
  ("Tarde"),
  ("Noite");
  

insert into funcionario(matricula,login,senha,nome,email,ramal,FK_setor,FK_funcao,FK_turno)values
  ("741852","teste1","123456789","joão teste1","teste1@teste.com","1114",1,2,3),
  ("123456","teste2","987654","Roberto teste2","teste2@teste.com","1234",2,2,2),
  ("852963","teste3","159357","Junior teste3","teste3@teste.com","852",3,2,3),
  ("743695","teste4","852014","Claudio teste4","teste4@teste.com","951",5,4,1),
  ("753654","teste5","123789","Eduardo teste5","teste5@teste.com","856",5,4,3);
  
select*from funcionario;


select f.nome,f.matricula,f.email,f.ramal,s.descricao as Setor,fc.descricao as Funçao ,t.descricao as Turno
from funcionario f
inner join setor s on s.descricao = f.fk_setor 
inner join funcao fc on f.FK_funcao = fc.descricao
inner join turno t on f.FK_turno = t.descricao ;



