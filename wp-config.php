<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'petshop');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j,!+n>}5d}yvL4a.T-w]f&Cv1{DIh!,cpYls>gKDT^KGu9*CQ*iW*rB%C1ft5w%s');
define('SECURE_AUTH_KEY',  'Kf`7]h#j8oF7NNIz8fe?lAO^34/i:Tj_!YvJb94iA5P%9jt2),Rd=`=WK,SM:.Yo');
define('LOGGED_IN_KEY',    '6jXp{){$>}t-u6wqE U`)q$5y9$-w4nM{kOE0Tbd+,!E>^z{_*..,0Rt_9dT :nj');
define('NONCE_KEY',        '}]<pZWB{8dejmZ[@K{]_sWV^.6h%P$x7H#=ix_ulH|U!|V`?i=>8EJ@AJ Eq_c U');
define('AUTH_SALT',        'uD|@(EW6iu=6%i{btC`c@aJ{b?x;w;xw)6r|zNf~KRJ>_1q@ZRsUv<&IPW3|>!%A');
define('SECURE_AUTH_SALT', 'wmhBVGG[c^Ql*lCMEa5!P%Hp)>)S)-+_b()Zt!T`uf60j8=2nKYM1*Y $$F-)u%g');
define('LOGGED_IN_SALT',   'x_LgR<kH_I#.`4002@Ow>qm*|zPi0j:Me]@9t[g%{u|hm;0dWG!s4*,0&.UCbb8!');
define('NONCE_SALT',       '1o]fFVhU>l8&Q-i!#IYe.Dg#Kh}K=BO-rwM4gyC/F1yBDX<ySF/j6j|zp@DzH!0C');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
