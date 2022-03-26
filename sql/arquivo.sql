query 1: SELECT * FROM beneficiario WHERE situacao='A';

query 2: SELECT DISTINCT beneficiario.* FROM beneficiario inner join veiculo ON beneficiario.id = veiculo.idBeneficiario WHERE veiculo.situacao='A' 

query 3: SELECT * FROM beneficiario WHERE TIMESTAMPDIFF(YEAR, beneficiario.dataNascimento, CURDATE())>40

query 4: SELECT v.idbeneficiario,  (SELECT b.nome from beneficiario b where b.id = v.idbeneficiario) as nome, COUNT(*) as total from veiculo v inner join produtoVeiculo p on v.id = p.idveiculo inner join produto pd on p.idProduto=pd.id where pd.situacao='A' group by v.id having total > 2

query 5: INSERT INTO beneficiario (nome, documento, dataNascimento, sexo, situacao, logradouro, numero, bairro, cidade, estado, email, telefone) VALUES
						 ('Pedro','876241', '2000/01/01', 'M', 'A', 'Rua Exem', '100', 'Aires', 'Buenos Aires', 'SP', 'pedro@gmail.com', '751451231');

query 6: INSERT INTO veiculo (idBeneficiario, placa, chassi, renavam, modelo, montadora, anoFabricacao, anoModelo, situacao) VALUES (68, 1234567, '1812340482623b0de', 54789654124, 'Palio', 'Fiat', 2013, 2010, 'A');
	 INSERT INTO produtoVeiculo (idProduto, idVeiculo) VALUES (3, 40);

query 7: UPDATE veiculo SET situacao = 'I' WHERE anoFabricacao < 2001;


query 8(desafio): DELETE pv from produtoVeiculo pv inner join veiculo v on pv.idVeiculo = v.id inner join produto p on pv.idProduto = p.id where p.situacao = 'I' OR v.situacao = 'I'





