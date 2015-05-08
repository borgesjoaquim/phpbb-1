<?php
/**
*
* plupload [Portugu�s Brasileiro]
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* @package language
* @version 2.0.0
* @author Suporte phpBB <contato@suportephpbb.com.br> http://www.suportephpbb.com.br/
* @copyright (c) 2005 phpBB Group, 2014 Suporte phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Traduzido por: suporte phpBB & Antonio Carlos Don� - segundo as normas do Acordo Ortogr�fico
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'PLUPLOAD_ADD_FILES'		=> 'Adicionar arquivos',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Adicione arquivos � fila de envio e clique no bot�o Iniciar.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s j� est� na fila.',
	'PLUPLOAD_CLOSE'			=> 'Fechar',
	'PLUPLOAD_DRAG'				=> 'Arraste arquivos para c�.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Erro de arquivo duplicado.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Pode anexar arquivos arrastando-os e soltando-os na caixa de mensagem.',
	'PLUPLOAD_ERR_INPUT'		=> 'Falha ao abrir fluxo de entrada.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Falha ao mover o arquivo enviado.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Falha ao abrir fluxo de sa�da.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'arquivo muito grande:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Erro na contagem de arquivos.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Extens�o de arquivo inv�lida:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'N�o h� mem�ria RAM dispon�vel.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'URL carregado est� errado ou n�o existe.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Extens�o do arquivo errada.',
	'PLUPLOAD_FILE'				=> 'arquivo: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'arquivo: %s, tamanho: %d, tamanho m�ximo do arquivo: %d',
	'PLUPLOAD_FILENAME'			=> 'Nome do arquivo',
	'PLUPLOAD_FILES_QUEUED'		=> '%d arquivos na fila',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Erro gen�rico.',
	'PLUPLOAD_HTTP_ERROR'		=> 'Erro HTTP.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Formato da imagem errado ou n�o suportado.',
	'PLUPLOAD_INIT_ERROR'		=> 'Erro Init.',
	'PLUPLOAD_IO_ERROR'			=> 'Erro IO.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Erro de seguran�a.',
	'PLUPLOAD_SELECT_FILES'		=> 'Selecione os arquivos',
	'PLUPLOAD_SIZE'				=> 'Tamanho',
	'PLUPLOAD_SIZE_ERROR'		=> 'Erro no tamanho do arquivo.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Iniciar envio',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Iniciar o envio da fila atual',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Parar envio',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Parar envio atual',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Enviados %d/%d arquivos',
));
?>