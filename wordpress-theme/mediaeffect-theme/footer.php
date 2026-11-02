<footer class="site-footer">
	<div class="wrap">
		<div class="f-big" aria-hidden="true"><span>MEDIA</span><span>EFFECT</span></div>
		<div class="f-grid">
			<div class="f-brand">
				<img src="<?php me_img( 'logo-white.png' ); ?>" alt="ميديا إيفكت" width="678" height="543" loading="lazy">
				<p>خبرة <?php me_e( 'stat_years' ); ?> عامًا في مجال الميديا — نوثّق اللحظة كما تستحق.</p>
			</div>
			<nav class="f-links" aria-label="روابط التذييل">
				<a href="#services">خدماتنا</a><a href="#work">أعمالنا</a><a href="#packages">الباقات</a><a href="#why">لماذا نحن</a><a href="#contact">احجز الآن</a>
			</nav>
			<div class="f-contact">
				<a href="tel:<?php me_tel(); ?>" dir="ltr"><?php me_e( 'phone_view' ); ?></a>
				<?php if ( me_opt( 'email' ) ) : ?><a href="mailto:<?php me_attr( 'email' ); ?>"><?php me_e( 'email' ); ?></a><?php endif; ?>
				<div class="socials">
					<?php if ( me_opt( 'instagram' ) ) : ?><a href="<?php echo esc_url( me_opt( 'instagram' ) ); ?>" target="_blank" rel="noopener" aria-label="إنستقرام"><svg><use href="#i-insta"/></svg></a><?php endif; ?>
					<?php if ( me_opt( 'x' ) ) : ?><a href="<?php echo esc_url( me_opt( 'x' ) ); ?>" target="_blank" rel="noopener" aria-label="إكس"><svg><use href="#i-x"/></svg></a><?php endif; ?>
					<?php if ( me_opt( 'tiktok' ) ) : ?><a href="<?php echo esc_url( me_opt( 'tiktok' ) ); ?>" target="_blank" rel="noopener" aria-label="تيك توك"><svg><use href="#i-tiktok"/></svg></a><?php endif; ?>
					<?php if ( me_opt( 'snapchat' ) ) : ?><a href="<?php echo esc_url( me_opt( 'snapchat' ) ); ?>" target="_blank" rel="noopener" aria-label="سناب شات"><svg><use href="#i-snap"/></svg></a><?php endif; ?>
				</div>
			</div>
		</div>
		<div class="f-bottom"><span>© <span id="year"><?php echo esc_html( gmdate( 'Y' ) ); ?></span> ميديا إيفكت — جميع الحقوق محفوظة</span></div>
	</div>
</footer>

<nav class="mobile-bar" aria-label="تواصل سريع">
	<a href="tel:<?php me_tel(); ?>"><svg><use href="#i-phone"/></svg> اتصال</a>
	<a class="mb-wa" href="https://wa.me/<?php me_wa(); ?>" target="_blank" rel="noopener"><svg><use href="#i-wa"/></svg> واتساب</a>
</nav>
<a class="fab-wa" href="https://wa.me/<?php me_wa(); ?>" target="_blank" rel="noopener" aria-label="راسلنا على واتساب"><svg><use href="#i-wa"/></svg></a>
<div class="toast" id="toast" role="status" aria-live="polite"></div>

<?php wp_footer(); ?>
</body>
</html>
