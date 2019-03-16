use mydb;

create view VW_CONSULTA_GERAL as  select f.nome,f.matricula,f.email,f.ramal,s.descricao as Setor,fun.descricao as Função, t.descricao as Turno
 from funcionario f
  inner join setor s on  s.codigo_setor =f.FK_SETOR  
   inner join funcao fun on  fun.codigo_funcao =  f.FK_FUNCAO 
    inner join turno  t on   t.codigo_turno = f.FK_TURNO;
 
 
select * from  VW_CONSULTA_GERAL where matricula="123456";

 