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
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#H]EHySy.[jTLm6;&P)?mcx}G^o^)T{QSVE-euC{2#qm1CEJ,@[U0=d)q4z9sLde');
define('SECURE_AUTH_KEY',  'Z$`^P1VIT/(EF*$7<f`ZF#kM8Y eRZF?9{BcYqtukuXq(3OU=`4c8Y&t~fJuP4BU');
define('LOGGED_IN_KEY',    'NWlqFrf*?<kXur%t;<GQyR69LG Qk3`$sJ*3NUQrB{R=aulg&^lX{T0l]lqlBe#Q');
define('NONCE_KEY',        'bb TDim=5G-nml{3-Lm;BG)hqYhN4HZ@RsA&Xp02O/{dT^mv7:V6 6h)UA-N.Wzo');
define('AUTH_SALT',        '{)5uIVj:{ O$ep>vdE=msv``n9wFu+L!n*F<,]AL~QG@vu$4u*5f/J9p(DIE2U8N');
define('SECURE_AUTH_SALT', 'U)dkdt@rD]yUABl<F?fr$uYRWzqB|}t=yk`~4!4ZCg)twjqTr]x0m7.F%iu~2X)P');
define('LOGGED_IN_SALT',   'SX`d%@ZX2vN=ze-j&#y):qA5+`hbF-]<!ZA>z{F,Xk-i.B5A]Ep%U?Z=x_rxJ|50');
define('NONCE_SALT',       's,{!=/(QB9UrTz}/(Hv_$$Gg48uy^,wDP;#v:*Bps{aB<TR|9cu)@)9xc,g/^O67');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'eej_';

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
