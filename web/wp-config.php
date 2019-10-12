<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'wordpress' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'wordpress' );

/** Hostname MySQL  */
define( 'DB_HOST', 'mariadb' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z@1FcB(EJQc;6,yCq~SC;Zhu)=lS0mq3JlGV=xmNR?.3GaliO`Se0ucG `MQ##&F' );
define( 'SECURE_AUTH_KEY',  'cA&P#qz 8I*XnXv@+e!*Ih|63;c]?UHzsV;1ITjLVnKgykG41#*DwY>g5#$9-8_T' );
define( 'LOGGED_IN_KEY',    '3z%2[zY7cpb&[5%ft/#@rk~k^!uA4;5CR=7S/dh_$V$vIw(rtI$8AbT11!`_LZZz' );
define( 'NONCE_KEY',        'Mdcu3ItUldrlU`}[AzehkQM%95 SN(c)t12*q[lf?{_(=8/xkoj9+h!|B!$d`_}d' );
define( 'AUTH_SALT',        '3Z_ioa:m)?nsYqK&t;]Q_ehrpkX(j+DHp4I+|aaN}3sQyCuu:?Xu!;Utvd]C5.$t' );
define( 'SECURE_AUTH_SALT', 'BAdJP,2ngi.`<eJN$h[E/(Kh./OPs27y%<}{fMo8d>-rNNGmEKmgsQ3Sb_|]+@__' );
define( 'LOGGED_IN_SALT',   'ZJ1c9FYBlY=dQ|0U@{B(5dJ<<+$H_[EkbI=Vp=2~:%!@N>W?*)x=8*J R5EovL[h' );
define( 'NONCE_SALT',       '[CsaB{6jWQH9W~_9H(db[@S*#HYy=<2*jh-UwkNY*er9vV4O[bgzXf<0al.t~tU@' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
