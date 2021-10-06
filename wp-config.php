<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
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
define( 'DB_NAME', 'hanhang' );

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
define( 'AUTH_KEY',         'er3@M259;!:^#3&ccJS~_n|56kW @XBcyl:cU5z6AY^TnEk$$d+I 0H$c:de.mLv' );
define( 'SECURE_AUTH_KEY',  'ZBJ|wk,!`I^Z5Z2;gba|u.?-c&Mtje7zrV%[+AYYA%u}E$]B8gL?_RjaqlKw-,:&' );
define( 'LOGGED_IN_KEY',    'CNUKDLyDQ*,s&luR1F*]0w?fOC^#/)_0qxU-phYtR2&F<&hW.`_TP/q_^Hz63T/7' );
define( 'NONCE_KEY',        '.:;V/( _^in?%PDg?z1s$[z>qhIY6!4=%QfQ`S?Zg|d>rxVgDlA/Q{b.L:M* @&m' );
define( 'AUTH_SALT',        '+V[zG;kFjPNk3vgw!`dr l 3} D,;!U-O)Zbs/sN0I+5!i#H?]r[Stx:tGQ6$=QT' );
define( 'SECURE_AUTH_SALT', 'haB%A/}!uyKQz89j%sMq)oOM2|;AQJAg-J gQX[qfb/,c+$op{=cME`umieQ&6&1' );
define( 'LOGGED_IN_SALT',   '?8M+??^QS<#WE}-DlX$jE&bbs1gp1 4tm8&x4<jPOdS*?6k3&Lod|SiUh5irUOLH' );
define( 'NONCE_SALT',       '|PB=wVqxLaY1f{<x67m)B74(U!i0p4lEco!)u{S<=kBJ]W!.>Qba!pBi:!NgE4G`' );

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
