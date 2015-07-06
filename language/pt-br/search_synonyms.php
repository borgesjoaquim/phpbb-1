<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

$synonyms = array( 
	'aben�oar'	=> 'aben�oado', 
	'abreviar'	=> 'reduzir', 
	'acomodar'	=> 'relaxar', 
	'administra��o'	=> 'sustenta��o', 
	'altura'	=> 'estatura', 
	'andr�'		=> 'nome', 
	'anemia'	=> 'doen�a', 
	'an�mico'	=> 'doente', 
	'anestesia'	=> 'sensibilidade', 
	'anexo'		=> 'arquivo', 
	'an�ncios'	=> 'not�cias', 
	'apatia'	=> 'indiferen�a', 
	'armadura'	=> 'uniforme', 
	'arqueiro'	=> 'guerreiro', 
	'arqueologia'	=> 'antiguidade', 
	'arqueozologia'	=> 'arqueozoico', 
	'�rtico'	=> 'do norte', 
	'atendimento'	=> 'recep��o', 
	'aus�ncia'	=> 'falta', 
	'avi�o'		=> 'aeronave', 

	'biologia'	=> 'natural', 

	'calend�rio'	 => 'data', 
	'cancelado'	=> 'eliminado', 
	'capturar'	=> 'prender', 
	'carro'		=> 'autom�vel', 
	'cat�logo'	=> 'guia', 
	'cenozoico'	=> 'antigo', 
	'centro'	=> 'meio', 
	'churrasco'	=> 'churrasqueira', 
	'cinza'		=> 'grisalho', 
	'comiss�o'	=> 'multid�o', 
	'conceder'	=> 'entregar', 
	'concordar'	=> 'combinar', 
	'conex�o'	=> 'liga��o', 
	'cor'		=> 'tom', 
	'criar'		 => 'gerar', 
	'curriculum'	 => 'curr�culo', 

	'defesa'	=> 'prote��o', 
	'desconhecido'  => 'ignorado', 
	'descri��o'	=> 'caracter�sticas', 
	'desculpas'	=> 'perd�o', 
	'desenvolver'	=> 'progredir', 
	'disciplina'	 => 'comportamento', 

	'enciclop�dia'  => 'obras', 
	'equipes'	=> 'grupos', 
	'escritos'	=> 'textos', 
	'est�tico'		 => 'visual', 
	'estrangeiro'	=> 'externo', 
	'etimologia'	 => 'etimol�gico', 
	'executando'	 => 'rodando', 
	'exist�ncia'	 => 'vida', 
	'exorbitante'	=> 'exagero', 
	'exuberante'	 => 'abundante', 

	'favorito'	=> 'predileto', 
	'feto'		=> 'ser vivo', 
	'fic��o'	=> 'efeitos', 
	'flores'	=> 'florescente', 

	'galera'	=> 'pessoal', 
	'genealogia'	=> 'geneal�gica', 
	'ginecologia'	=> 'ginecologista', 
	'gram�tica'	=> 'l�ngua', 
	'guerrilha'	=> 'revolta', 

	'haver'		=> 'existir', 
	'hem�cia'	=> 'hemoglobina', 
	'hematina'	=> 'gl�bulos', 
	'hematite'	=> 'c�lulas', 
	'hematologia'	=> 'sangue', 
	'hipoteca'	=> 'hipotecar', 
	'honra'		=> 'dignidade', 

	'ID'		 => 'identifica��o', 
	'inocular'	=> 'inocula��o', 
	'instalar'	=> 'instala��o', 
	'irrelevante'	=> 'sem import�ncia', 

	'jan'		=> 'janeiro', 
	'joias'		 => 'bijuteria', 
	'julgamento'	 => 'senten�a', 

	'km'		=> 'quil�metro', 

	'lazer'		 => 'descan�o', 
	'licen�a'	=> 'autoriza��o', 
	'limite'	=> 'fronteira', 
	'liquificar'	 => 'l�quido', 

	'm'			=> 'metro', 
	'manuten��o'	=> 'ger�ncia', 
	'mar'		=> 'mar�o', 
	'medieval'	=> 'cl�ssico', 
	'milha'		=> 'medida', 
	'miscel�nea'	=> 'mistura', 

	'n�meros'		=> 'quarenta', 

	'ocorr�ncia'	=> 'acontecimento', 
	'ofensa'	=> 'm�goa', 
	'ok'		=> 'correto', 
	'omiss�o'	=> 'falta', 
	'organizar'	=> 'arrumar', 
	'otimizar'	=> '�timo', 

	'pa�s'		=> 'na��o', 
	'paleografia'	=> 'decifrar', 
	'paleol�tico'	=> 'idade da pedra', 
	'paleontologia'	=> 'f�sseis', 
	'paleont�logo'	=> 'paleontologista', 
	'paleozoico'	=> 'era prim�ria', 
	'panfleto'	=> 'bilhete', 
	'paralelo'	=> 'semelhante', 
	'parlamento'	 => 'assembleia', 
	'PC'		=> 'computador', 
	'pediatra'	=> 'infantil', 
	'pediatria'	=> 'crian�as', 
	'peralta'	=> 'peralta', 
	'perodontia'	=> 'perodontia', 
	'phpBB'		 => 'Suporte phpBB', 
	'pijamas'	=> 'vestes', 
	'porto'		=> 'parada', 
	'possuir'	=> 'ter', 
	'praticar'	=> 'desempenhar', 
	'projeto'	=> 'programa', 
	'vc'					=> 'voc�',
	'tb'					=> 'tamb�m',
	'tbr'					=> 'trabalhar',
	'provis�rio'	=> 'tempor�rio', 
	'psi'		=> 'psicologia', 

	'guito'					=> 'dinheiro',

	'question�rio'	=> 'interrogat�rio', 

	'rarefazer'	=> 'dilatar', 
	'receber'	=> 'aceitar', 
	'recomendar'	=> 'aconselhar', 
	'registro'	=> 'cadastro', 
	'resist�ncia'	=> 'relut�ncia', 
	'resumir'	=> 'sintetizar', 
	'reuni�o'	=> 'comit�', 
	'rotulado'	=> 'nomeado', 

	'sabor'		=> 'gosto', 
	'salvador'	=> 'her�i', 
	'separar'	=> 'dividir', 
	'set'		=> 'setembro', 
	'sincero'	=> 'verdadeiro', 
	'sincronizar'	=> 'ajustar', 
	'substitu�do'	=> 'trocado', 
	'sucesso'	=> '�xito', 
	'superintendente'	=> 'supervisor', 
	'surpresa'	=> 'inesperado', 

	'teatro'	=> 'cinema', 
	'trabalhador'	=> 'funcion�rio', 
	'trabalhadores'	=> 'funcion�rios', 
	'trabalho'	=> 'emprego', 
	'tradu��o'	=> 'adapta��o', 
	'transferido'	=> 'transmitido', 

	'usual'		 => 'comum', 

	'valor'		 => 'nota', 
	'vencer'	=> 'derrotar', 
	'verificar'	=> 'checar', 
	'vigor'		 => 'vitalidade', 
	'vis�vel'	=> 'not�vel', 
	'vol'		 => 'volume', 
); 
