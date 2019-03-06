<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'geriatriasantavitoria');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ved[a0pR087Wh>$2WAQnX$<rl*%@L%kbGkFP>>l5yuYk#bYfV62 z`CqLU#(}#z*');
define('SECURE_AUTH_KEY',  'yf0D%OC{s,6gSkh[/m1<#(>)x]>Mf$m?T,`|kDAIWixOo-v:0(/[*Q=v@}pwmoNM');
define('LOGGED_IN_KEY',    ']*D.V!X~[XMz(. T|QGBbcOFT/)K.JKI`Qsk)re5h!9%e6CnZ u_.dxfqc$cqPX5');
define('NONCE_KEY',        'p|n9qUOFt{,:R4mFL3>J@+*Z)uucUIT`n`4uRwBnCiv9U{g+k$@ui,ccfd4B$0QY');
define('AUTH_SALT',        '};+-<[8Qqy^o-VxiYxPu-[:UG)w:BScP!XG.VkJ~kO;UO]C/0G30dVx$u~zdvEHo');
define('SECURE_AUTH_SALT', 'tyPB^Or=voI`>BaMe86%//bfRI(q %|(Lr,bO.N e=NQ]El8b]~:waB[q+?[Q<c%');
define('LOGGED_IN_SALT',   'GHyMLy3GB8C<&u.]zxF|_4i8fL`wy+FX}4b6<wgmP4B-vm.fQ( 766Qqv #YhN-/');
define('NONCE_SALT',       'va@y_kV-EuVVJE(_w9Qp~e}0+x@w/dc<QT!Z}4ov]L:UCzoVQ`~7Nu_;%;BC|Jow');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
