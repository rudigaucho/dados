CREATE DATABASE  IF NOT EXISTS `portal_dados` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `portal_dados`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: portal_dados
-- ------------------------------------------------------
-- Server version	5.7.15-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atividades`
--

DROP TABLE IF EXISTS `atividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(60) DEFAULT NULL,
  `ccto` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `supervisor` varchar(60) DEFAULT NULL,
  `pdf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atividades`
--

LOCK TABLES `atividades` WRITE;
/*!40000 ALTER TABLE `atividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `atividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contratual`
--

DROP TABLE IF EXISTS `contratual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contratual` (
  `ba` bigint(20) NOT NULL,
  `ccto` int(11) DEFAULT NULL,
  `cliente` varchar(80) DEFAULT NULL,
  `tec` varchar(50) DEFAULT NULL,
  `tr_tec` varchar(10) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obs` varchar(300) DEFAULT NULL,
  `pdf` varchar(80) DEFAULT NULL,
  `supervisor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ba`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contratual`
--

LOCK TABLES `contratual` WRITE;
/*!40000 ALTER TABLE `contratual` DISABLE KEYS */;
INSERT INTO `contratual` VALUES (111111111,515204,'AGENCIA DE DEFESA AGROPECUARIA ','GIOVANNI ANTONIO','TR499208','2017-01-28','','94d68744ebe9f2529b041c171122981d.pdf',''),(121212120,772959,'CASSOL MATERIAIS DE CONSTRUCAO LTDA.','MARLON CRISTIAN','TR098662','2017-02-16','','c3c760ad4faf42bcde7dbeb95799f246.pdf',''),(191070261,776197,'CAMINHOS DO PARANA','ANDERSON FERREIRA','TR014330','2016-11-11','','79b2993452507ea408ce4aaae7e35a00.pdf',''),(191070563,513620,'POSTO ALDO SJP','FABIANO RIBEIRO','TR014779','2016-11-14','','02bda64293048954b7fdd96dcb9a9b9a.pdf',''),(191072006,741570,'KROMBERG & SCHUBERT DO BRASIL LTDA.','MARCELO MARANA','TR013958','2016-11-14','','68f90e52f974fdba18e94faff44d33a9.pdf',''),(191072045,519762,'SECRET ESTADO SEGURANCA PUBLICA ADM PENITENCIARIA','REGINALDO ALBERT','TR503771','2016-11-17','','ad14d4239b9efdbf39393d172e034a63.pdf',''),(191072107,799981,'CIA LATINO AMERICANA DE MEDICAMENTOS','DIEGO RAFAEL','TR462143','2016-11-16','','53aa031b3bc09ecb3705908952b7707f.pdf',''),(191072198,743572,'MERCADOMOVEIS LTDA','ROBSON FARIAS','TR495064','2016-11-18','','ef79a44541352786bc137cf863ba8044.pdf',''),(191072251,518195,'CNH LATIN AMERICA LTDA','ROBSON FARIAS','TR495064','2016-11-23','','6a5a9e07746efd3ffe3b20e2e7ddf3ce.pdf',''),(191072345,739847,'MARISA LOJAS VAREJISTAS LTDA','MARLON CRISTIAN','TR098662','2016-11-22','','1fff1b7bc6906e16ae1bf570f60db086.pdf',''),(191072435,799675,'CASVIG CATARINENSE DE SEGURANCA E VIGILANCIA LTDA','FABIO MIKUSSKA','TR030531','2016-11-16','','8f0714e7579dc73ad296a6d9b3d55686.pdf',''),(191072463,513394,'Z & D EMBALAGENS LTDA','LUDOVICO CARNEIRO','TR013924','2016-11-17','','1fb0696fae27ce1049655f2ae22d3d8a.pdf',''),(191072641,760183,'TECNOLOGIA BANCARIA SA','ALEX RONDERLEI','TR166084','2016-11-01','','96e5124c7b7c031abdaab9d43dcd4407.pdf',''),(191072751,516551,'PERFECTTA ASSES ODONTOLOGICA LTDA ME','FRANKLYN SIMAO','TR499206','2016-11-22','','c6edeb23de70b9813a8fb0bc4d915089.pdf',''),(191072799,782368,'MOINHO DO NORDESTE S/A','MARCOS AURELIO','TR013980','2016-11-16','','daed14f140ec13d04a02cf5c102d4b75.pdf',''),(191072824,495615,'ASSOCIACAO DOS NOTARIOS E REGISTRADORES DO ESTADO DO PARANA','JEAN GILBERT','TR014552','2016-11-16','','9e818d53d89b6d3a7a15dc88af88f2b9.pdf',''),(191072862,512064,'NILAGGE ADMINISTRACAO DE CONDOMINIOS LTDA','JEFFERSON RIBEIRO','TR014560','2016-11-22','','86f632c6edbbfd56f1f10b8d4b432b94.pdf',''),(191072894,478117,'APOIO CONSULTORIA E ASSESSORIA S S LTDA','GIOVANNI ANTONIO','TR499208','2016-11-17','','6e235eb1b149e454e921dc1e2e2bacff.pdf',''),(191072937,513096,'SECRET ESTADO SEGURANCA PUBLICA ADM PENITENCIARIA','GIOVANNI ANTONIO','TR499208','2016-11-17','','9965e2d9397a664ebc8dbe2bd2f25696.pdf',''),(191073690,785745,'LOJAS AMERICANAS S.A.','MARLON CRISTIAN','TR098662','2016-11-16','','3593758d80cc5b183396f82c7831b0a0.pdf',''),(191073909,512318,'RACIONAL INDUSTRIA DE PRE FABRICADOS LTDA','JOHAN SEBASTIAN','TR470015','2016-11-16','','0f01cbba14912e1f741a015c34cf0123.pdf',''),(191170213,742051,'MAGAZINE LUIZA','CLODOALDO JOSE','TR056678','2016-11-18','','f0b8606e8bdf57748c2032b8b8833604.pdf',''),(191382204,761243,'ARAUCO FOREST BRASIL SA','MARCOS AURELIO','TR013984','2016-12-13','','afff0f306ab7d499bd075ac187eaf306.pdf',''),(191386118,780306,'ARAUCO FOREST BRASIL SA ','MARCOS AURELIO','TR013980','2016-12-13','','919b15fa02da7f7e2b2c3754b5877f0d.pdf',''),(191386153,744218,'CLARO SA','MARCOS AURELIO','TR013980','2016-12-13','','afcbc81423893faf562edfada4295fe9.pdf',''),(191386200,517321,'TOYOTA SULPAR LTDA ','FABIO MIKUSSKA','TR030531','2016-12-16','','bc17425976d9471373b8253443bb1dea.pdf',''),(191386956,785433,'WAL MART BRASIL LTDA ','ANDERSON FERREIRA','TR014340','2016-12-14','','41193982336684aee08e884e0e61a472.pdf',''),(191386958,519738,'UNIVERSIDADE FEDERAL DO PARANA','FULVIO MURENO','TR544607','2016-12-21','','83be1a9626f165a15833d2943fb558ea.pdf',''),(191386986,786914,'UNIDAS SA','FABIANO RIBEIRO','TR014779','2016-12-19','','f4cb21848b1f296c5ae39483aeac6a0d.pdf',''),(191387003,519525,'SUPERMIX CONCRETO S/A','DIEGO RAFAEL','TR462143','2016-12-20','','514bdf2bef90b49cd5a0937eb256e29b.pdf',''),(191387038,773624,'PREFEITURA MUNICIPAL DE PARANAGUA','FULVIO MURENO','TR544607','2016-12-23','','7c01be6e534a8af3223f64856558d194.pdf',''),(191387079,785675,'LEVEL 3 COMUNICACOES DO BRASIL LTDA','ANDERSON FERREIRA','TR014330','2016-12-21','','5ef4441e1ade2d54fad0fc01485c50a6.pdf',''),(191387088,742931,'ADM DO BRASIL LTDA','FULVIO MURENO','TR544607','2016-12-23','','d5802420819450015d1c19369be1f799.pdf',''),(191387098,774031,'AKITA COM DE PECAS LTDA','CLODOALDO JOSE','TR056678','2016-12-16','','e225b18e10150542a15d256dfc031478.pdf',''),(191387128,515008,'BRASLIFT EQUIPAMENTOS E LOGISTICA LTDA','REGINALDO OLIVEIRA','TR002342','2016-12-17','','de48d826f8bbf36fd87f699263ef0ed7.pdf',''),(191387153,732663,'CONFEDERACAO NACIONAL DAS COOPERATIVAS DO SICOOB LTDA','ANDERSON FERREIRA','TR014340','2016-12-22','','30ce84d018f3688a1ed0ba0043e63a9e.pdf',''),(191515152,514242,'BEL PLUS SERVICO DE TRATAMENTO DE SUPERFICIE','WILLIAM LUCAS','TR565980','2016-12-23','','0fc10a97be229293994c380456cedb13.pdf',''),(191515240,783597,'IPIRANGA  PRODUTOS PETROLEO','MARLON CRISTIAN','TR098662','2016-12-23','','3c25c16e2e204c8fe94223aa6e9a622c.pdf',''),(191574917,776796,'CINEMARK BRASIL S.A.','FABIANO RIBEIRO','TR014779','2016-12-21','','d2a8a793633b7ad4ca86b9e6b75a4c45.pdf',''),(191575042,516336,'INJEPECAS COMERCIO E IMPORTACAO DE PECAS AUTOMOTIV','MARLON CRISTIAN','TR098662','2016-12-20','','04fea2102b7067ca736baca27246e8a8.pdf',''),(191576440,795262,'ITAU UNIBANCO S A ','MARCOS AURELIO','TR013980','2016-12-16','','1d9c4c34eff9baa8693eabaf39eacb29.pdf',''),(191576608,514909,'INDUSCALTA - INDUSTRIA DE CALCARIOS TAMANDARE LTDA','MARCOS AURELIO','TR013980','2016-12-23','','eddb86563af65b4e33db2c0df86008fc.pdf',''),(191766451,512866,'SDMO ENERGIA INDUSTRIA E COMERCIO DE MAQUINAS','GIOVANNI ANTONIO','TR499208','2017-01-23','','0d71259e5115c167e80370da9dd54184.pdf',''),(191766499,778937,'DIMED S/A - DISTRIBUIDORA DE MEDICAMENTOS ','MARLON CRISTIAN','TR098662','2017-01-20','','d3610ecd1ea1822e4172fa9f2295f826.pdf',''),(191766641,512159,'DEPARTAMENTO DE TRANSITO DETRAN','FULVIO MURENO','TR544607','2017-01-23','','b09e4b15f4a6d491994bd3ef4b17bdcc.pdf',''),(191766686,797224,'ITAU UNIBANCO S.A','ANDERSON FERREIRA','TR014340','2017-01-20','','0b8f2085e8cbf1849cd667e6227cb8e5.pdf',''),(191766710,788491,'CAIXA ECONOMICA FEDERAL','FULVIO MURENO','TR544607','2017-01-23','','3f2d58b7186d82dee4097bb0e6e19e7f.pdf',''),(191766833,742107,'MERCADOMOVEIS LTDA','MARLON CRISTIAN','TR098662','2017-01-18','','1a9ee85e42eb3e465fb6a1989048b41c.pdf',''),(191766875,776434,'COPACOLCOOPERATIVA AGROINDUSTRIAL CONSOLATA','DIEGO RAFAEL','TR462143','2017-01-23','','bbf8ae4c3003aab35fbfc8bf4d6113e5.pdf',''),(191766909,516047,'INSTITUTO PARANAENSE DE CIENCIA DO ESPORTE','GIOVANNI ANTONIO','TR499208','2017-01-17','','b2971f079cb02fdd9218fb2788e758a8.pdf',''),(191766971,757687,'MERCADOMOVEIS LTDA','JEAN GILBERT','TR014552','2017-01-16','','d9719b4d17b2bda2aba17a4a6729a126.pdf',''),(191767022,754692,'WAL MART BRASIL LTDA','MARCOS AURELIO','TR013980','2017-01-18','','8201623dd8dad5e03616c0f5c7babf1c.pdf',''),(191767041,517362,'MINISTERIO PUBLICO DA UNIAO','REGINALDO ALBERT','TR503771','2017-01-25','','5c43482d4ce9a09a109c126f8be06512.pdf',''),(191767051,515617,'FUNDO DE APOIO AO REGISTRO CIVIL','ALEX RONDERLEI','TR166084','2017-01-23','','9d81bcecf6227cb3d0cda20612aaf1cb.pdf',''),(191767072,719220,'VIA VAREJO SA','MARCOS AURELIO','TR013980','2017-01-18','','f6d91b5593b585e96cf946074e3bd177.pdf',''),(191767116,770336,'TELLERINA COMERCIO DE PRESENTES ','REGINALDO ALBERT','TR002342','2017-01-25','','5dcf3a54993874c8808f0c623d2f34e3.pdf',''),(191767588,489385,'MACROFERTIL - INDUSTRIA E COMERCIO DE FERTILIZANTE','FULVIO MURENO','TR544607','2017-01-23','','3c16d07b8b85589e0416cbbf249c066b.pdf',''),(191767613,518094,'VIA VAREJO SA ','FULVIO MURENO','TR544607','2017-01-23','','46a18fa1c87fe08ed5a51930a4080a6d.pdf',''),(191767659,717959,'VIA VAREJO SA','JEAN GILBERT','TR014552','2017-01-16','','200d7d3dc62110e560e66e745aa4a752.pdf',''),(191785495,770475,'HSBC BANK ','LUDOVICO CARNEIRO','TR013924','2017-01-23','','351b57e5b92cb32be4f20b8b7ca56118.pdf',''),(192065500,761201,'COPERATIVA SATA CLARA','ROBSON FARIAS','TR495064','2017-02-14','','e73b617c5c58166aa2fe5accff1d1e7b.pdf',''),(192065511,776255,'Horfran Eletro moveis','VALDIVINO BISPO','TR014289','2017-02-17','','1559edb87d13b8b02b3531e49256cd33.pdf',''),(192065660,775800,'LOJAS SALFER','ALEX RODERLEI','TR166084','2017-02-18','','0ed1d1b4903ca407f4ccce08bafcb8f2.pdf',''),(192123000,745973,'RUDDER SEGURANCA','MARLON CRISTIAN','TR098662','2017-02-13','','31322d0903ce3e31a4583d5e8a7a3c8e.pdf',''),(192249926,497382,'CONFEDERACAO INTERESTADUAL DAS COOPERATIVAS LIGADAS','ALEXANDRE CESAR MELERE','TR550237','2017-03-20','ENTREGUE PREVENTIVA AO FISCAL OI JOAO. ','1575512fb23739270e71e812a9bceb12.pdf',''),(192250183,767894,'MAGAZZINE LUIZA','ALEX RODERLEI','TR166084','2017-02-13','','5d9ebbc3e80437ce437853f9929434cc.pdf',''),(192250430,790706,'CENTRO INTEGRADO DE TELEMATICA DO EXERCITO','FRANKLYN SIMAO','TR499206','2017-02-16','','76e2572b5a60de356d6988d21b77ce2a.pdf',''),(192250488,772820,'PREFEITURA MUNICIPAL DE PARANAGUA','FULVIO MURENO','TR544607','2017-02-17','','7e397c96a4b4820f39e9e6abf12c277d.pdf',''),(192250497,812035,'PRIMESYS SOLUCOES EMPRESARIAIS S/A','FABIO MIKUSSKA','TR030531','2017-02-22','','0e080a16ed56e7d9c436054050abd518.pdf',''),(192250517,789605,'TAM LINHAS AEREAS','MARCELO MARANA','TR013958','2017-02-21','','d69b8dcdd399de8f1ce714fe015723ff.pdf',''),(192252148,786146,'BRASTUIR INVEST','FRANKLYN SIMAO','TR499206','2017-02-28','','75f37a370bf991f10680e8951b27f62b.pdf',''),(192307654,604106,'MINISTERIO PUBLICO DA UNIAO','Carlos Augusto Sarda','TR112022','2017-03-20','','5c5aed16485202bbd89f1f856879fe24.pdf',''),(192307657,449298,'CLEMAR ENGENHARIA LTDA','Carlos Augusto Sarda ','TR113022','2017-03-08','','106b026aa21643b382fcf2d01bf38d6c.pdf',''),(192307742,765261,'TELEFONICA','CHARLES CALEIRO','TR564958','2017-03-20','','2c09d1d8e0225776c68f5bed2c5bfd3e.pdf',''),(192307842,755853,'CECRED','LUIZ TOMAZINI','TR003429','2017-03-20','','4232e94111113e6dcf2be69f3f26d916.pdf',''),(192307925,769090,'FUNDO DE MATERIAIS ','CLAUDIO SALOME','TR070752','2017-03-20','','66829f95ad28777d6599e6ea1e48c331.pdf',''),(192307994,604988,'RECH IMPORTADORA','CHARLES BOEMER','TR003211','2017-03-20','','b07fa4e7bcbd0bf7bd438766d99d0158.pdf',''),(192308377,771576,'FUNDO DE MATERIAIS','ALCIONE AMARAL DE OLIVEIRA','TR099729','2017-03-20','PREVENTIVA ENTREGUE AO FISCAL OI JOAO. ','6bd1b9484777453b593b8dec1d4405dc.pdf',''),(192308444,731292,'CONFEDERACAO INTERESTADUAL DAS COOPERATIVAS LIGADAS','CLEITON ADAO GARCIA','TR601442','2017-03-20','ARQUIVO ENTREGUE AO FISCAL JOAO. ','4eee8c2bdbccb602aadbef5d1e47e4d0.pdf',''),(192308455,604730,'ACESSOLINE TELECOMUNICACOES','CLEITON ADAO GARCIA','TR061442','2017-03-20','ENTREGUE PREVENTIVA AO FISCAL OI JOAO.','f36636bbc8ab7809464a44b7724d8df1.pdf',''),(192308484,723689,'SICRED','ROB PATRICIO DA SILVEIRA ','TR148951','2017-03-15','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO GILBERTO.','2a7ac67230b50655e7e63c4f4e902f2d.pdf',''),(192308494,726384,'SICRED','PAULO HENRIQUE DALLA COSTA','TR115372','2017-03-06','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO JUNIOMAR.','ce67bc57ba95e34e2467f8fc01d926ff.pdf',''),(192308504,731188,'SICRED','DARLAN','TR075212','2017-03-07','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO JUNIOMAR.','2dac395fbd48cb754db5b0fbfa58dd83.pdf',''),(192308521,773335,'SICRED','DARLAN EWERLING','TR075212','2017-03-09','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO JUNIOMAR.','e085f7b4f511139f364cb5906ab88f8a.pdf',''),(192308585,732094,'SICRED','ITAMIR PEREIRA CONTE','TR168113','2017-03-13','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO JUNIOMAR.','ffeb980fa9284411c18cb552574c0e45.pdf',''),(192308638,462334,'SICRED','ITAMIR PEREIRA CONTE','TR168113','2017-03-14','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO JUNIOMAR.','cabde3363d0bc96b0cd91a5f94903540.pdf',''),(192308653,499488,'SICRED','ITAMIR PEREIRA CONTE','TR168113','2017-03-15','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO JUNIOMAR.','519f7154b807bcac3529d671b0c1adc0.pdf',''),(192308703,451180,'CLARO S/A','PAULO ROBERTO STAPASSOLI','TR010827','2017-03-20','ENTREGUE PREVENTIVA AO FISCAL DA OI JOAO.','b2c9de3fe1968fab67f320a9c573e3e0.pdf',''),(192314477,488486,'ARARANGUA PREFEITURA','JONATAS PEREIRA','TR018010','2017-03-20','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO GILBERTO.','78185c93eda099230ffd4fc353426542.pdf',''),(192314481,738104,'SERVICO SOCIAL DO COMERCIO - SESC','LUCIANO ARAUJO','TR018048','2017-03-03','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO GILBERTO.','dd92a173599c183eac9d7892be58ef7e.pdf',''),(192314484,436928,'CAPIVARI DE BAIXO PREFEITURA','LUIS DONATO BRADACZ','TR018053','2017-03-07','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO GILBERTO.','a1ff0c00483d6b0529be12f44b6da264.pdf',''),(192314792,420872,'PREFEITURA MUNICIPAL DE CRICIUMA','MAICON GREGORIO DE ALMEIDA','TR168641','2017-03-13','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO GILBERTO.','f6e576eb0c2f29361a71ddc459f81d83.pdf',''),(192314800,602071,'CEREAISTA FORQUILHINHA LTDA','RODRIGO GHEDIN','TR018123','2017-03-14','PREVENTIVA REMUNERADA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA REGIAO GILBERTO.','5a75eadfacfa9465581daa57e961de13.pdf',''),(192314812,769978,'FUNDO DE MATERIAIS, PUBLICACOES E IMPRESSO','NELSON FARIA','TR011012','2017-03-06','PREVENTIVA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA DA REGIAO DO SERGIO. ','336e57d8a24eefcc1c6fdad191fd59c2.pdf',''),(192314819,741215,'VONPAR REFRESCOS S/A','NELSON FARIA','TR011012','2017-03-08','PREVENTIVA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA DA REGIAO DO SERGIO. ','18d858af21c81ebe316820a6233dd873.pdf',''),(192314863,495053,'MAGAZINE LUIZA S/A','JACKSON HOFFMANN','TR064077','2017-03-09','PREVENTIVA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA DA REGIAO DO SERGIO. ','56a6351861c1ef91e122ff2fdacdc59e.pdf',''),(192314900,602479,'COMERCIAL ELETRICA SAO PEDRO LTDA','JOSE VIGARANI JUNIOR','TR018026','2017-03-17','PREVENTIVA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA DA REGIAO DO SERGIO. ','a2e602986ba4e8d58cc7e4d439eb62e1.pdf',''),(192314943,452794,'PALHOCA PREFEITURA','EMERSON NOGUEIRA ','TR039816','2017-03-15','','f5b72f865799e1ee3750fe4123a0ff0b.pdf',''),(192411250,766509,'FUNDO DE MATERIAIS, PUBLICACOES E IMPRESSO','CARLOS AUGUSTO SARDA','TR113022','2017-03-13','PREVENTIVA ENTREGUE AO FISCAL JOAO OI, PREVENTIVA DA REGIAO DO SERGIO. ','1bd9b3921564b0a864a420d8dc4cdd4c.pdf',''),(192422851,464252,'COMPANHIA DE SANEAMENTO DO PARANA SANEPAR','ALEX RODERLEI DA SILVA COMANDULLI','TR166084','2017-03-14','Contratual enviada ao fiscal Fabio para validacao','3e18656318b93e82484bf81a6976f72a.pdf',''),(192423341,775800,'MAGAZINE LUIZA','ALEX RODERLEI DA SILVA COMANDULLI','TR166084','2017-03-14','Contratual enviada ao fiscal Fabio para validacao','30874ce2ce0355b4e287e7aaa6578749.pdf',''),(192423590,796655,'LOJAS SALFER','ALEX RODERLEI DA SILVA COMANDULLI','TR166084','2017-03-13','Contratual enviada ao fiscal Fabio para validacao','3b66c2e4d036341e82d0c584779d2711.pdf',''),(192428166,510785,'HOSPITAL E MATERNIDADE DR LIMA LTDA','ANTONIO R. DA SILVA','TR002593','2017-03-14','Relatorio entregue para aprovacao do fiscal','1f2efa7f5a7567f3f6513b672fb5f825.pdf',''),(192428236,774184,'ONSEG ? SERVICOS DE VIGILANCIA E SEGURANCA LTDA','CARLOS ROBERTO DE SOUZA','TR002604','2017-03-14','Relatorio entregue para aprovacao do fiscal.','cf7abff876e6db0eba01470da8930cb9.pdf',''),(222222222,514546,'CINCO IRMAOS COMERCIO DE CONFECCOES E ELETRO MOVEIS','GIOVANNI ANTONIO','TR499208','2017-01-23','','f8f198d50c0b2a8a03f14ad06edee282.pdf','');
/*!40000 ALTER TABLE `contratual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `tr` varchar(10) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  `estado` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`tr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('100000','LUCIANO HENCKE','SEREDESA','GER',NULL),('380035','SERGIO OSMAR DA SILVA','380035','GA','SC'),('380339','CRISTHIAN FRANCISCO BRUCH','380339','GA','SC'),('380380','FLARES ANDRE DE LIZ','380380','GA','SC'),('380600','MARLOS UELDES FELICIO','380600','GA','PR'),('380754','JUNIOMAR ALEX MOCHNACZ','380754','GA','SC'),('381030','CLEOMAR APARECIDO BISCHOFF','381030','GA','PR'),('382051','GILBERTO MACHADO TEODORO','382051','GA','SC'),('382303','MARCIO ALVES DA CRUZ','382303','GA','PR'),('382473','ENIR JOSE RODRIGUES','382473','GA','SC'),('382632','LUIS FERNANDO FAIX','382632','GA','PR'),('383056','ANDERSON FELIPE FERRI','383056','GA','PR'),('389739','VALDELIRIO CASSIANO DE SOUZA','389739','GA','PR'),('391789','RUDINEI FEIJO','391789','GER',NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'portal_dados'
--

--
-- Dumping routines for database 'portal_dados'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-03  0:14:30
