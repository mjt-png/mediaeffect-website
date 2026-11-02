<?php
/**
 * Media Effect theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ME_VERSION', '1.0.0' );

/* ------------------------------------------------------------------
 * القيم الافتراضية — تُعدَّل من: المظهر ← تخصيص ← بيانات ميديا إيفكت
 * ------------------------------------------------------------------ */
function me_defaults() {
	return array(
		'phone'      => '0537065212',
		'phone_view' => '05 370 65 212',
		'whatsapp'   => '966537065212',
		'email'      => '',
		'city'       => 'المملكة العربية السعودية',
		'stat_years' => '20',
		'instagram'  => '',
		'x'          => '',
		'tiktok'     => '',
		'snapchat'   => '',
	);
}

function me_opt( $key ) {
	$defaults = me_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	return get_theme_mod( 'me_' . $key, $default );
}

/* طباعة آمنة للقيم داخل القوالب */
function me_e( $key ) {
	echo esc_html( me_opt( $key ) );
}
function me_attr( $key ) {
	echo esc_attr( me_opt( $key ) );
}
function me_img( $file ) {
	echo esc_url( get_template_directory_uri() . '/assets/img/' . $file );
}
function me_home() {
	echo esc_url( home_url( '/' ) );
}
function me_tel() {
	echo esc_attr( preg_replace( '/[^0-9+]/', '', me_opt( 'phone' ) ) );
}
function me_wa() {
	echo esc_attr( preg_replace( '/[^0-9]/', '', me_opt( 'whatsapp' ) ) );
}

/* ------------------------------------------------------------------
 * إعداد القالب
 * ------------------------------------------------------------------ */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	register_nav_menus( array( 'primary' => 'القائمة الرئيسية' ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	$uri = get_template_directory_uri();
	wp_enqueue_style( 'me-fonts', 'https://fonts.googleapis.com/css2?family=Alexandria:wght@500;700;800&family=Readex+Pro:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'me-main', $uri . '/assets/css/main.css', array( 'me-fonts' ), ME_VERSION );
	wp_enqueue_script( 'me-main', $uri . '/assets/js/main.js', array(), ME_VERSION, true );
} );

add_action( 'wp_head', function () {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
	echo '<meta name="theme-color" content="#0b1a16">' . "\n";
	if ( ! has_site_icon() ) {
		echo '<link rel="icon" type="image/png" href="' . esc_url( get_template_directory_uri() . '/assets/img/favicon.png' ) . '">' . "\n";
		echo '<link rel="apple-touch-icon" href="' . esc_url( get_template_directory_uri() . '/assets/img/icon.png' ) . '">' . "\n";
	}
	if ( is_front_page() ) {
		$desc = 'ميديا إيفكت: خبرة 20 عامًا في الميديا — تغطيات إعلامية، تصوير جوي، شاشات LED، صوتيات، مونتاج، إنتاج إعلانات وأعمال طباعة.';
		echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
		echo '<meta property="og:image" content="' . esc_url( get_template_directory_uri() . '/assets/img/og.jpg' ) . '">' . "\n";
	}
}, 1 );

/* ------------------------------------------------------------------
 * التخصيص (Customizer)
 * ------------------------------------------------------------------ */
add_action( 'customize_register', function ( $wp_customize ) {
	$wp_customize->add_section( 'me_info', array(
		'title'    => 'بيانات ميديا إيفكت',
		'priority' => 30,
	) );

	$fields = array(
		'phone'      => 'رقم الجوال (للاتصال)',
		'phone_view' => 'رقم الجوال كما يظهر للزوار',
		'whatsapp'   => 'رقم الواتساب بالصيغة الدولية (مثال 9665XXXXXXXX)',
		'email'      => 'البريد الإلكتروني (اختياري)',
		'city'       => 'المدينة / نطاق الخدمة',
		'stat_years' => 'رقم: سنوات الخبرة',
		'instagram'  => 'رابط إنستقرام (اختياري)',
		'x'          => 'رابط إكس (اختياري)',
		'tiktok'     => 'رابط تيك توك (اختياري)',
		'snapchat'   => 'رابط سناب شات (اختياري)',
	);

	$defaults = me_defaults();
	foreach ( $fields as $key => $label ) {
		$is_url = in_array( $key, array( 'instagram', 'x', 'tiktok', 'snapchat' ), true );
		$wp_customize->add_setting( 'me_' . $key, array(
			'default'           => $defaults[ $key ],
			'sanitize_callback' => $is_url ? 'esc_url_raw' : 'sanitize_text_field',
		) );
		$wp_customize->add_control( 'me_' . $key, array(
			'label'   => $label,
			'section' => 'me_info',
			'type'    => $is_url ? 'url' : 'text',
		) );
	}
} );
