select * from controle
select * from professor
select * from noticia
select * from ofertaHorario 
SELECT * FROM horario as h, ofertaHorario as oh WHERE h.id = oh.codHorario and codOferta = 1

SELECT nome, id FROM materia where id != 1 

SELECT m.nome, m.id FROM materia as m, oferta as o where o.codMat = m.id and o.id = 4 

SELECT id FROM horario WHERE dia = "Segunda-feira" and inicio = "8:00" and fim = "10:00" and local = "AT107"

INSERT INTO materia (nome, objetivo, ementa, nCreditosTeoricos, nCreditosPraticos, codigoEscolar, abrev, optativa, perfil, codNucleo) VALUES ("teste", "bla", "bla", 2, 2, "teste", "tes", 1, 3)
insert into nucleo(nome) values("teste")
insert into oferta values(1, 3, 1, "extra", "2015", 2)

insert into controle values (1, "admin", "admin")
insert into controle values (2, "tiemi", "tiemi")
insert into controle values (3, "jose", "jose")
INSERT INTO controle (usuario, senha, adm) VALUES ("jose", "jose", 0)

delete from nucleo where id = 7

insert into horario values (2, "Terça-feira", "8:00", "10:00", "AT107")

insert into professor (nome, foto, paginaPessoal, area, codUsuario) values("Tiemi Christine Sakata", "Tiemitiemi.jpg", "sites.google.com/site/tisakata", "Mineração de Dados/ Aprendizado de Máquina Meta-aprendizado/ Algoritmos distribuídos/ Tolerância a falhas/", 5)
insert into professor (nome, foto, paginaPessoal, area, codUsuario) values("José de Oliveira Guimarães", null, "www.cyan-lang.org/jose/", "Linguagens de Programação, Orientação a Objetos, Computabilidade", 6)

insert into materia values(3, "Pesquisa Academica em Computação", "bla bla", "bla bla", 2, 0, "PAC", "PAC", 0, 1, 2)

delete from controle where id = 1

SELECT senha FROM controle WHERE usuario = 'Gustavo Eda'

SELECT foto FROM professor WHERE codUsuario = 2

select * from professor where codUsuario = 2

UPDATE materia set nome = "Algoritmos e Programação 1", codigoEscolar = "ALG1", abrev = "ALG1" WHERE cod = 1

SELECT m.id, m.nome FROM prerequisito p, materia m WHERE p.codMat = 1 AND m.id = p.codMatPre

SELECT idprofessor, nome FROM professor WHERE idprofessor = 3

SELECT ofertahorario.codHorario, ofertahorario.codOferta, horario.dia, horario.inicio, horario.fim, horario.local FROM ofertahorario, horario WHERE ofertahorario.codOferta = 1 AND ofertahorario.codHorario = horario.id

