<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false"><defs>
	<symbol id="i-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M11 6l-6 6 6 6"/></symbol>
	<symbol id="i-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.5l4.5 4.5L19 7.5"/></symbol>
	<symbol id="i-phone" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8a15.1 15.1 0 0 0 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1A17 17 0 0 1 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1z"/></symbol>
	<symbol id="i-wa" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2c-1.5 0-3-.4-4.3-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2zm4.5-6.1c-.2-.1-1.5-.7-1.7-.8-.2-.1-.4-.1-.6.1l-.8 1c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.3-.4.2-.4.7-1.3.1-.2 0-.3 0-.4l-.8-1.8c-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.4.1-.7.3-.2.3-.9.9-.9 2.2s.9 2.5 1 2.7c.1.2 1.8 2.8 4.4 3.9 1.6.7 2.3.8 3.1.6.5-.1 1.5-.6 1.7-1.2.2-.6.2-1.1.2-1.2-.1-.1-.3-.2-.5-.3z"/></symbol>
	<symbol id="i-camera" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><path d="M3 8.5A1.5 1.5 0 0 1 4.5 7h2.7l1.6-2.2h6.4L16.8 7h2.7A1.5 1.5 0 0 1 21 8.5v9a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 17.5z"/><circle cx="12" cy="13" r="3.8"/><circle cx="12" cy="13" r="1.4"/></symbol>
	<symbol id="i-film" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="1.5"/><path d="M7 5v14M17 5v14M3 9h4M3 15h4M17 9h4M17 15h4"/><path d="M10.5 10v4l3-2z" fill="currentColor"/></symbol>
	<symbol id="i-led" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><rect x="2.5" y="4" width="19" height="12" rx="1"/><path d="M12 16v4M8 20h8"/><path d="M6 8h2M10 8h2M14 8h2M6 12h2M10 12h2M14 12h2" stroke-linecap="round"/></symbol>
	<symbol id="i-print" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><path d="M7 9V3.5h10V9"/><rect x="3" y="9" width="18" height="8" rx="1.5"/><path d="M7 14h10v6.5H7z"/><circle cx="17.5" cy="12" r=".6" fill="currentColor"/></symbol>
	<symbol id="i-pen" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" stroke-linecap="round"><path d="M12 3l5 9-5 9-5-9z"/><circle cx="12" cy="12" r="1.6"/><path d="M12 3v7.4"/></symbol>
	<symbol id="i-clock" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
	<symbol id="i-users" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><circle cx="9" cy="8" r="3.4"/><path d="M2.5 20c.6-3.6 3.2-5.5 6.5-5.5s5.9 1.9 6.5 5.5"/><circle cx="17" cy="9" r="2.6"/><path d="M17 14.5c2.4.2 4 1.8 4.5 4.5"/></symbol>
	<symbol id="i-award" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"><circle cx="12" cy="9" r="6"/><path d="M8.5 14l-1.5 7 5-2.5 5 2.5-1.5-7"/></symbol>
	<symbol id="i-pin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></symbol>
	<symbol id="i-mail" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3.5 6.5l8.5 6.5 8.5-6.5"/></symbol>
	<symbol id="i-insta" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3.5" y="3.5" width="17" height="17" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor"/></symbol>
	<symbol id="i-x" viewBox="0 0 24 24" fill="currentColor"><path d="M17.8 3h3.1l-6.8 7.7L22 21h-6.2l-4.9-6.4L5.3 21H2.2l7.3-8.3L2 3h6.4l4.4 5.8zm-1.1 16.2h1.7L7.4 4.7H5.6z"/></symbol>
	<symbol id="i-tiktok" viewBox="0 0 24 24" fill="currentColor"><path d="M16.6 3c.3 2.2 1.7 3.8 3.9 4v3.1c-1.4 0-2.7-.4-3.9-1.1v6.3a6 6 0 1 1-6-6c.3 0 .6 0 .9.1v3.2a2.9 2.9 0 1 0 2 2.7V3z"/></symbol>
	<symbol id="i-snap" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.5c3 0 5.4 2.3 5.4 5.3v2.6c.6.2 1.2 0 1.7-.2.6-.2 1.2.5.6 1-.6.5-1.6.8-2.2 1 .5 1.8 2 3.4 3.8 4 .5.2.4.8-.1 1-.8.3-1.7.4-2.1.7-.3.4-.2 1.1-.8 1.2-.8.1-1.8-.3-2.9.1-1.1.4-1.9 1.6-3.4 1.6s-2.3-1.2-3.4-1.6c-1.1-.4-2.1 0-2.9-.1-.6-.1-.5-.8-.8-1.2-.4-.3-1.3-.4-2.1-.7-.5-.2-.6-.8-.1-1 1.8-.6 3.3-2.2 3.8-4-.6-.2-1.6-.5-2.2-1-.6-.5 0-1.2.6-1 .5.2 1.1.4 1.7.2V7.8c0-3 2.4-5.3 5.4-5.3z"/></symbol>
</defs></svg>

<a class="skip" href="#main">تخطَّ إلى المحتوى</a>
<div class="progress" aria-hidden="true"><i id="progress"></i></div>

<header class="site-header" id="siteHeader">
	<a class="brand" href="<?php me_home(); ?>#top" aria-label="ميديا إيفكت — الرئيسية">
		<img class="brand-color" src="<?php me_img( 'logo-color.png' ); ?>" alt="ميديا إيفكت Media Effect" width="678" height="543">
	</a>
	<nav class="nav" id="nav" aria-label="القائمة الرئيسية">
		<a href="#services">خدماتنا</a>
		<a href="#work">أعمالنا</a>
		<a href="#packages">الباقات</a>
		<a href="#why">لماذا نحن</a>
		<a href="#contact">تواصل</a>
	</nav>
	<div class="head-actions">
		<span class="rec-chip" aria-hidden="true"><i></i>REC</span>
		<a class="btn btn-ink btn-sm hide-sm" href="#contact">احجز تغطيتك</a>
		<button class="menu-toggle" id="menuToggle" type="button" aria-expanded="false" aria-controls="nav" aria-label="فتح القائمة"><span></span><span></span></button>
	</div>
</header>
