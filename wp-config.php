<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'educaejoga');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'educaejoga');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Educa1234');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql995.umbler.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uYcPt:uhZc#<I&rN4& XdSN.{zX!j17t|d:!,,~0b@;4@4%FAjN1!Uhnr{ WZ>qY');
define('SECURE_AUTH_KEY',  'x[kx2<5$$K-Rab0ms!$/6xV!X$Rn>$iy8!{HPf~e>Ab`G:TX^+MkO-nl t.dHBt&');
define('LOGGED_IN_KEY',    'D#SUPtLhk8c:Y/P`~F,w!D9Zm8;/NXhaV<v8P}=[fW00J9.z0WW~Cn%x.1}f#~[s');
define('NONCE_KEY',        'q)6,u~3;{x;otb#rRVTx0LbB|V6vV2QH!]P#?zBS 59Kbh@.jyrsKa{;IWq:C(+P');
define('AUTH_SALT',        'jiQ}UzZv=uH~muC[T9ob/RY,{x;Cmi3:K)5DYO|3MJptwYouy[xl2sI8{iIZ)iJR');
define('SECURE_AUTH_SALT', 'R)tqg&_P6Z5qkwqC_Q<y?B$^Cnh#khk=Y*0db$b~iNR=1<:Cr/7`.%6VQu_)REnR');
define('LOGGED_IN_SALT',   '-oHeZhWHwjSWkE/a_o`GS(7_E}@N/|1FNs2eMZkb7uLM9F$SiU>8v,[z#1ghOq=W');
define('NONCE_SALT',       'D$+^:B-2KQ$o1cDn-,k7Vp(xL;Y$s7N@k5Nj-cj =B60oI^Y<zw_U2B+pQMR|Co&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'gam_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
