<?php
/**
 * Cấu hình cơ bản cho WordPress
 * Đức đã sửa code...
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *viet la ta day.....
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')%Kmn!U^ OlPrsS~E}24u/e_=Kq@g{#Nam6-Iq=^Y8N5=^+t~QN2zqA7/*m>}KQC' );
define( 'SECURE_AUTH_KEY',  'QxTEyaEc[NQTI)DU,s~k ``RI[NQhRuf<e7{2Tvr:i*wAh9+z]o:F+K q-l[T!JH' );
define( 'LOGGED_IN_KEY',    'F^v{nrP<Fp0B$2HJiaBf{qb{yzV=uwAjDoOw|8v%` plp4y%@:mA4<K6vjY{88(-' );
define( 'NONCE_KEY',        'vBzO!-ZI+&UlvxPw|?pq&k@j+h%$y|WiJ_>N/,QNjci)1//@%;3s|7VW Y>nM$t>' );
define( 'AUTH_SALT',        'aIY2}I5f`TL&Ai::6]+Gx4E1SyP-6y<W*c5F.h^l;kMU`/*>_;Js0-1QE4OFOi5u' );
define( 'SECURE_AUTH_SALT', 'Sd86V[>6S[UE$t{EqMsMZiX_I<|FV5F3nf,mmvIDeW=^)+_*npD*OJ!y13OYb_x9' );
define( 'LOGGED_IN_SALT',   '#<VY=[OsGwv2N P|&}Id4Q/YMczzSX3.04WQF$S(%>vY^Iro8:fj.Wn95oj:gV&$' );
define( 'NONCE_SALT',       'N5=::8GI-g:# YviB}YJA2y Pnb>GLPGW3pOu710X}N*riB`#X#XoX>[=g>YQ([7' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
