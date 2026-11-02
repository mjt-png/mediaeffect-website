<?php get_header(); ?>

<main id="main">

<!-- ============ HERO: عدسة الكاميرا ============ -->
<section class="hero" id="top" aria-labelledby="hero-title">
	<div class="hero-grid" aria-hidden="true"></div>

	<svg class="fl fl-drone" data-speed="-0.35" data-x="-60" viewBox="0 0 160 80" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"><path d="M40 40h80M30 26h30M100 26h30"/><path d="M45 26v14M115 26v14"/><rect x="62" y="34" width="36" height="18" rx="6" fill="currentColor"/><circle cx="80" cy="58" r="6"/></g><g class="props" fill="currentColor"><ellipse cx="45" cy="24" rx="20" ry="3"/><ellipse cx="115" cy="24" rx="20" ry="3"/></g></svg>

	<svg class="fl fl-ring" data-speed="0.25" data-rot="160" viewBox="0 0 200 200" aria-hidden="true"><circle cx="100" cy="100" r="92" fill="none" stroke="currentColor" stroke-width="3"/><circle cx="100" cy="100" r="74" fill="none" stroke="currentColor" stroke-width="1.5" stroke-dasharray="2 7"/><text font-size="11" font-weight="700" fill="currentColor" letter-spacing="3"><textPath href="#ringPath">24–70mm · F2.8 · MEDIA EFFECT · 4K ·</textPath></text><path id="ringPath" d="M100 18a82 82 0 1 1 0 164a82 82 0 1 1 0-164" fill="none"/></svg>

	<div class="hero-inner">
		<div class="hero-copy">
			<span class="eyebrow"><b>ME</b> تصوير · توثيق · إنتاج · طباعة</span>
			<h1 id="hero-title" class="hero-title">
				<span class="line"><span>نوثّق</span></span>
				<span class="line"><span><span class="focus-word">اللحظة</span></span></span>
				<span class="line"><span>كما تستحق.</span></span>
			</h1>
			<p class="hero-lead">فيديو وفوتوغراف وتصوير جوي، شاشات LED وصوتيات، مونتاج وإنتاج إعلانات وطباعة — من فريق واحد يعرف كيف تُلتقط
				<span class="swap" id="swap" aria-label="المناسبات والمؤتمرات والمعارض والفعاليات"><span class="on">المناسبات</span><span>المؤتمرات</span><span>المعارض</span><span>الفعاليات</span><span>العقارات</span></span></p>
			<div class="hero-cta">
				<a class="btn btn-green" href="#contact"><svg><use href="#i-arrow"/></svg> اطلب عرض سعر</a>
				<a class="btn btn-line" href="#work">شاهد أعمالنا</a>
			</div>
			<ul class="hero-facts">
				<li><b><span data-count="<?php me_attr( 'stat_years' ); ?>">0</span>+</b><span>عامًا في الميديا</span></li>
				<li><b>4K</b><span>معدات حديثة</span></li>
				<li><b>360°</b><span>تغطية كاملة</span></li>
			</ul>
		</div>

		<div class="viewfinder" id="viewfinder" aria-hidden="true">
			<div class="vf-screen">
				<img class="vf-img on" src="<?php me_img( 'p-moments.jpg' ); ?>" alt="" decoding="async">
				<img class="vf-img" src="<?php me_img( 'p-nd-man.jpg' ); ?>" alt="" decoding="async" loading="lazy">
				<img class="vf-img" src="<?php me_img( 'p-green.jpg' ); ?>" alt="" decoding="async" loading="lazy">
				<img class="vf-img" src="<?php me_img( 'p-nd-woman.jpg' ); ?>" alt="" decoding="async" loading="lazy">
				<img class="vf-img" src="<?php me_img( 'p-vest.jpg' ); ?>" alt="" decoding="async" loading="lazy">
				<div class="vf-thirds"></div>
				<svg class="iris" viewBox="-100 -100 200 200"><defs><clipPath id="irisClip"><circle r="100"/></clipPath></defs><g clip-path="url(#irisClip)"><path class="blade" style="--i:0" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:1" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:2" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:3" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:4" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:5" d="M-6 4L-74-120H96L58 12z"/></g></svg>
			</div>
			<span class="vf-c tl"></span><span class="vf-c tr"></span><span class="vf-c bl"></span><span class="vf-c br"></span>
			<span class="vf-focus"></span>
			<div class="vf-top"><span class="rec"><i></i>REC</span><span class="tc" id="timecode">00:00:00:00</span><span class="batt"><i></i></span></div>
			<div class="vf-bottom"><span>4K · 60fps</span><span>ISO 400</span><span>F2.8</span><span class="ev"><i></i></span></div>
		</div>
	</div>

	<a class="scroll-cue" href="#services"><span>مرّر</span><i></i></a>
</section>

<!-- ============ شريط الفيلم ============ -->
<div class="film-wrap" aria-hidden="true"><div class="filmstrip">
	<div class="strip" data-x="-280">
		<span>فيديو</span><span>فوتوغراف</span><span>تصوير جوي</span><span>شاشات LED</span><span>صوتيات</span><span>بث مباشر</span><span>مونتاج</span><span>إنتاج إعلانات</span><span>طباعة</span><span>هوية وواجهات</span><span>فيديو</span><span>فوتوغراف</span><span>تصوير جوي</span><span>شاشات LED</span>
	</div>
	<div class="strip strip-imgs" data-x="240">
		<img src="<?php me_img( 'p-events.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-details.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-realestate.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-nd-products.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-schools.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-nd-square.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-services.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-moments.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-green.jpg' ); ?>" alt="" loading="lazy"><img src="<?php me_img( 'p-vest.jpg' ); ?>" alt="" loading="lazy">
	</div>
</div></div>

<!-- ============ الخدمات ============ -->
<section class="section" id="services" aria-labelledby="services-title">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="kicker"><i>01</i> خدماتنا</span>
			<h2 id="services-title">من أول لقطة<br>إلى آخر مطبوعة.</h2>
			<p>اختر الخدمة اللي تحتاجها، وننقلك مباشرة لطلبها.</p>
		</div>

		<div class="svc-grid">
			<article class="svc reveal" style="--d:0">
				<div class="svc-bg"><img src="<?php me_img( 'p-events.jpg' ); ?>" alt="" loading="lazy"></div>
				<div class="svc-top"><span class="svc-ic"><svg><use href="#i-camera"/></svg></span><span class="svc-n">01</span></div>
				<h3>تغطيات إعلامية</h3>
				<div class="chips"><a href="#contact" data-svc="تغطية مناسبة">مناسبات</a><a href="#contact" data-svc="تغطية مؤتمر">مؤتمرات</a><a href="#contact" data-svc="تغطية معرض">معارض</a><a href="#contact" data-svc="تغطية فعالية">فعاليات</a><a href="#contact" data-svc="تصوير منتجات">منتجات</a><a href="#contact" data-svc="تصوير عقار">عقارات</a></div>
			</article>
			<article class="svc reveal" style="--d:1">
				<div class="svc-bg"><img src="<?php me_img( 'p-moments.jpg' ); ?>" alt="" loading="lazy"></div>
				<div class="svc-top"><span class="svc-ic"><svg><use href="#i-film"/></svg></span><span class="svc-n">02</span></div>
				<h3>تصوير وإنتاج</h3>
				<div class="chips"><a href="#contact" data-svc="تصوير فيديو">تصوير فيديو</a><a href="#contact" data-svc="تصوير فوتوغراف">فوتوغراف</a><a href="#contact" data-svc="تصوير جوي">تصوير جوي</a><a href="#contact" data-svc="مونتاج أو إنتاج إعلان">مونتاج</a><a href="#contact" data-svc="مونتاج أو إنتاج إعلان">إنتاج إعلانات</a></div>
			</article>
			<article class="svc reveal" style="--d:2">
				<div class="svc-bg"><img src="<?php me_img( 'p-nd-man.jpg' ); ?>" alt="" loading="lazy"></div>
				<div class="svc-top"><span class="svc-ic"><svg><use href="#i-led"/></svg></span><span class="svc-n">03</span></div>
				<h3>تجهيزات الفعاليات</h3>
				<div class="chips"><a href="#contact" data-svc="شاشات LED وصوتيات">شاشات LED</a><a href="#contact" data-svc="شاشات LED وصوتيات">صوتيات</a><a href="#contact" data-svc="بث مباشر">بث مباشر</a><a href="#contact" data-svc="تجهيزات فعالية">إضاءات سيتي كلر</a><a href="#contact" data-svc="تجهيزات فعالية">تنسيق احتفالات</a><a href="#contact" data-svc="تجهيزات فعالية">أعلام ومكعبات</a></div>
			</article>
			<article class="svc reveal" style="--d:3">
				<div class="svc-bg"><img src="<?php me_img( 'p-services.jpg' ); ?>" alt="" loading="lazy"></div>
				<div class="svc-top"><span class="svc-ic"><svg><use href="#i-print"/></svg></span><span class="svc-n">04</span></div>
				<h3>أعمال الطباعة</h3>
				<div class="chips"><a href="#contact" data-svc="أعمال طباعة">بنر + ستيكر</a><a href="#contact" data-svc="أعمال طباعة">أكواب</a><a href="#contact" data-svc="أعمال طباعة">ورقيات</a><a href="#contact" data-svc="أعمال طباعة">أكياس ورق</a><a href="#contact" data-svc="أعمال طباعة">بوكسات</a><a href="#contact" data-svc="أعمال طباعة">حروف بارزة</a></div>
			</article>
			<article class="svc reveal" style="--d:4">
				<div class="svc-bg"><img src="<?php me_img( 'p-vest.jpg' ); ?>" alt="" loading="lazy"></div>
				<div class="svc-top"><span class="svc-ic"><svg><use href="#i-pen"/></svg></span><span class="svc-n">05</span></div>
				<h3>هوية وواجهات</h3>
				<div class="chips"><a href="#contact" data-svc="هوية وواجهات">تصميم الشعارات</a><a href="#contact" data-svc="هوية وواجهات">واجهات كلادينج</a><a href="#contact" data-svc="هوية وواجهات">طباعة وتركيب</a></div>
			</article>
			<a class="svc svc-cta reveal" style="--d:5" href="#contact">
				<span class="svc-ic"><svg><use href="#i-wa"/></svg></span>
				<h3>ما لقيت خدمتك؟</h3>
				<p>كلّمنا وقل لنا وش تحتاج، ونرتّب لك الحل.</p>
				<span class="more">تواصل معنا <svg><use href="#i-arrow"/></svg></span>
			</a>
		</div>
	</div>
</section>

<!-- ============ الغالق: جملة تتكشّف مع التمرير ============ -->
<section class="shutter" id="shutter" aria-labelledby="shutter-title">
	<div class="shutter-sticky">
		<div class="shutter-lens" aria-hidden="true">
			<img src="<?php me_img( 'p-details.jpg' ); ?>" alt="" loading="lazy">
			<svg class="iris iris-scrub" viewBox="-100 -100 200 200"><defs><clipPath id="irisClip2"><circle r="100"/></clipPath></defs><g clip-path="url(#irisClip2)"><path class="blade" style="--i:0" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:1" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:2" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:3" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:4" d="M-6 4L-74-120H96L58 12z"/><path class="blade" style="--i:5" d="M-6 4L-74-120H96L58 12z"/></g></svg>
			<svg class="lens-scale" viewBox="0 0 200 200"><circle cx="100" cy="100" r="97" fill="none" stroke="currentColor" stroke-width="1" stroke-dasharray="1 5.1"/></svg>
		</div>
		<p class="statement" id="shutter-title" data-words>لأن تفاصيل مناسباتكم <em>لا تتكرر</em>، نضمن لكم توثيقًا احترافيًا يليق بجمال قصتكم.</p>
	</div>
</section>

<!-- ============ الأعمال ============ -->
<section class="section work" id="work" aria-labelledby="work-title">
	<div class="wrap">
		<div class="sec-head sec-head-row reveal">
			<div>
				<span class="kicker"><i>02</i> من أعمالنا</span>
				<h2 id="work-title">شغل يتكلم عن نفسه.</h2>
			</div>
			<p class="work-hint"><span class="hint-sm">اسحب يمين ويسار</span><span class="hint-lg">اضغط على أي عمل لعرضه كاملًا</span> · <b id="workCount">12</b> عملًا</p>
		</div>
	</div>
	<div class="gallery" id="gallery">
		<div class="g-col" data-speed="0.06">
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-nd-man.jpg' ); ?>"><img src="<?php me_img( 'p-nd-man.jpg' ); ?>" alt="اليوم الوطني 96 — عزّنا بكرمنا" loading="lazy"></button><figcaption>اليوم الوطني 96</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-details.jpg' ); ?>"><img src="<?php me_img( 'p-details.jpg' ); ?>" alt="تفاصيل لا تتكرر" loading="lazy"></button><figcaption>تفاصيل لا تتكرر</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-realestate.jpg' ); ?>"><img src="<?php me_img( 'p-realestate.jpg' ); ?>" alt="باقات تصوير العقارات" loading="lazy"></button><figcaption>تصوير العقارات</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-nd-square.jpg' ); ?>"><img src="<?php me_img( 'p-nd-square.jpg' ); ?>" alt="عزّنا بجودنا" loading="lazy"></button><figcaption>عزّنا بجودنا</figcaption></figure>
		</div>
		<div class="g-col" data-speed="-0.08">
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-moments.jpg' ); ?>"><img src="<?php me_img( 'p-moments.jpg' ); ?>" alt="لحظاتك تستحق أن تروى" loading="lazy"></button><figcaption>لحظاتك تستحق أن تروى</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-nd-products.jpg' ); ?>"><img src="<?php me_img( 'p-nd-products.jpg' ); ?>" alt="تميّز معنا في اليوم الوطني" loading="lazy"></button><figcaption>تميّز معنا في اليوم الوطني</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-schools.jpg' ); ?>"><img src="<?php me_img( 'p-schools.jpg' ); ?>" alt="باقات التميّز للمدارس" loading="lazy"></button><figcaption>باقات المدارس</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-vest.jpg' ); ?>"><img src="<?php me_img( 'p-vest.jpg' ); ?>" alt="هوية الفريق الميداني" loading="lazy"></button><figcaption>هوية الفريق الميداني</figcaption></figure>
		</div>
		<div class="g-col" data-speed="0.12">
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-nd-woman.jpg' ); ?>"><img src="<?php me_img( 'p-nd-woman.jpg' ); ?>" alt="عرض اليوم الوطني" loading="lazy"></button><figcaption>عرض اليوم الوطني</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-green.jpg' ); ?>"><img src="<?php me_img( 'p-green.jpg' ); ?>" alt="وثّق لحظاتك" loading="lazy"></button><figcaption>وثّق لحظاتك</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-events.jpg' ); ?>"><img src="<?php me_img( 'p-events.jpg' ); ?>" alt="باقات تصوير المناسبات" loading="lazy"></button><figcaption>تصوير المناسبات</figcaption></figure>
			<figure class="shot"><button type="button" data-full="<?php me_img( 'p-services.jpg' ); ?>"><img src="<?php me_img( 'p-services.jpg' ); ?>" alt="دليل خدماتنا" loading="lazy"></button><figcaption>دليل خدماتنا</figcaption></figure>
		</div>
	</div>
	<div class="rail-dots" id="railDots" aria-hidden="true"><i id="railBar"></i></div>
	<dialog class="lightbox" id="lightbox" aria-label="عرض العمل"><button type="button" class="lb-close" id="lbClose" aria-label="إغلاق">×</button><img id="lbImg" alt=""></dialog>
</section>

<!-- ============ الباقات ============ -->
<section class="section packages" id="packages" aria-labelledby="packages-title">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="kicker"><i>03</i> الباقات</span>
			<h2 id="packages-title">اختر باقتك بثواني.</h2>
			<p>ثلاث باقات لكل مجال — أسعار تنافسية ومرنة، ونرسل لك عرض سعر بالتفصيل.</p>
		</div>

		<div class="tabs reveal" role="tablist" aria-label="مجال الباقة" id="pkgTabs">
			<button type="button" role="tab" id="tab-ev" aria-selected="true" aria-controls="pkg-ev">المناسبات</button>
			<button type="button" role="tab" id="tab-re" aria-selected="false" aria-controls="pkg-re" tabindex="-1">العقارات</button>
			<button type="button" role="tab" id="tab-sc" aria-selected="false" aria-controls="pkg-sc" tabindex="-1">المدارس</button>
			<i class="tab-ind" aria-hidden="true"></i>
		</div>

		<!-- المناسبات -->
		<div class="pkg-panel" id="pkg-ev" role="tabpanel" aria-labelledby="tab-ev" data-svc="تغطية مناسبة">
			<div class="pkgs">
				<article class="pkg"><span class="pkg-tier">البرونزية</span><ul><li class="no">تصوير جوي</li><li>تصوير فيديو <b>1 كاميرا</b></li><li>تصوير فوتوغراف</li><li>تعديل الصور</li><li>مونتاج للحفل <b>10 د</b></li><li>مونتاج برومو</li></ul><a class="btn btn-line" href="#contact" data-pkg="الباقة البرونزية">اطلب البرونزية</a></article>
				<article class="pkg"><span class="pkg-tier">الفضية</span><ul><li>تصوير جوي</li><li>تصوير فيديو <b>1 كاميرا</b></li><li>تصوير فوتوغراف</li><li>تعديل الصور</li><li>مونتاج للحفل <b>15 د</b></li><li>مونتاج برومو</li></ul><a class="btn btn-line" href="#contact" data-pkg="الباقة الفضية">اطلب الفضية</a></article>
				<article class="pkg pkg-gold"><span class="pkg-badge">الأشمل</span><span class="pkg-tier">الذهبية</span><ul><li>تصوير جوي</li><li>تصوير فيديو <b>2 كاميرا</b></li><li>تصوير فوتوغراف</li><li>تعديل الصور</li><li>مونتاج للحفل <b>30 د</b></li><li>مونتاج برومو</li></ul><a class="btn btn-green" href="#contact" data-pkg="الباقة الذهبية">اطلب الذهبية</a></article>
			</div>
			<div class="pkg-notes"><h4>متوفر عند الطلب</h4><ul><li>شاشات LED بكل المقاسات</li><li>بث مباشر داخلي أو على اليوتيوب</li><li>تصميم وطباعة بنرات للحفل</li></ul></div>
		</div>

		<!-- العقارات -->
		<div class="pkg-panel" id="pkg-re" role="tabpanel" aria-labelledby="tab-re" data-svc="تصوير عقار" hidden>
			<div class="pkgs">
				<article class="pkg"><span class="pkg-tier">البرونزية</span><ul><li class="no">لقطات إنشائية AI</li><li class="no">تصوير جوي</li><li>تصوير فيديو</li><li>تصوير فوتوغراف</li><li>مونتاج احترافي</li><li>تسليم خام التصوير</li></ul><a class="btn btn-line" href="#contact" data-pkg="الباقة البرونزية">اطلب البرونزية</a></article>
				<article class="pkg"><span class="pkg-tier">الفضية</span><ul><li class="no">لقطات إنشائية AI</li><li>تصوير جوي</li><li>تصوير فيديو</li><li>تصوير فوتوغراف</li><li>مونتاج احترافي</li><li>تسليم خام التصوير</li></ul><a class="btn btn-line" href="#contact" data-pkg="الباقة الفضية">اطلب الفضية</a></article>
				<article class="pkg pkg-gold"><span class="pkg-badge">الأشمل</span><span class="pkg-tier">الذهبية</span><ul><li>لقطات إنشائية AI</li><li>تصوير جوي</li><li>تصوير فيديو</li><li>تصوير فوتوغراف</li><li>مونتاج احترافي</li><li>تسليم خام التصوير</li></ul><a class="btn btn-green" href="#contact" data-pkg="الباقة الذهبية">اطلب الذهبية</a></article>
			</div>
		</div>

		<!-- المدارس -->
		<div class="pkg-panel" id="pkg-sc" role="tabpanel" aria-labelledby="tab-sc" data-svc="باقة مدارس سنوية" hidden>
			<div class="pkgs">
				<article class="pkg"><span class="pkg-tier">البرونزية</span><ul><li>بوستر إعلاني <b>5</b></li><li>بوستر ترويجي <b>5</b></li><li>فيديو محتوى تعليمي <b>5</b></li><li>صورة احترافية <b>250</b></li><li class="no">تغطية مصورة للرحلات</li><li class="no">إدارة حسابات السوشال ميديا</li></ul><a class="btn btn-line" href="#contact" data-pkg="الباقة البرونزية">اطلب البرونزية</a></article>
				<article class="pkg"><span class="pkg-tier">الفضية</span><ul><li>بوستر إعلاني <b>10</b></li><li>بوستر ترويجي <b>10</b></li><li>فيديو محتوى تعليمي <b>10</b></li><li>صورة احترافية <b>500</b></li><li>تغطية مصورة للرحلات</li><li class="no">إدارة حسابات السوشال ميديا</li></ul><a class="btn btn-line" href="#contact" data-pkg="الباقة الفضية">اطلب الفضية</a></article>
				<article class="pkg pkg-gold"><span class="pkg-badge">الأشمل</span><span class="pkg-tier">الذهبية</span><ul><li>بوستر إعلاني <b>20</b></li><li>بوستر ترويجي <b>20</b></li><li>فيديو محتوى تعليمي <b>20</b></li><li>صورة احترافية <b>1000</b></li><li>تغطية مصورة للرحلات</li><li>إدارة حسابات السوشال ميديا</li></ul><a class="btn btn-green" href="#contact" data-pkg="الباقة الذهبية">اطلب الذهبية</a></article>
			</div>
			<details class="pkg-notes">
				<summary>ملاحظات باقات المدارس</summary>
				<ul>
					<li>البوسترات الإعلانية تشمل المناسبات الوطنية والأيام العالمية.</li>
					<li>الطلعات التصويرية لفيديوهات المحتوى التعليمي تُحدَّد لها الحصص المستهدفة مسبقًا.</li>
					<li>التغطية المصورة للرحلات تشمل أي فعالية خارج أسوار المدرسة (ترفيهية أو تعليمية).</li>
					<li>يتم التنسيق مع إدارة المدرسة فيما يخص إدارة حسابات السوشال ميديا لتحديد آلية النشر.</li>
					<li>الباقات لا تشمل حفلات التخرج، مع إمكانية تقديم عروض خاصة لأصحاب الباقات لتغطيتها.</li>
					<li>مراعاة هوية المدرسة وتوجهها التعليمي في جميع التصاميم والفيديوهات.</li>
				</ul>
			</details>
		</div>
	</div>
</section>

<!-- ============ لماذا نحن ============ -->
<section class="section why" id="why" aria-labelledby="why-title">
	<div class="wrap why-grid">
		<div class="why-visual" aria-hidden="true">
			<svg class="big-lens" data-rot="-120" viewBox="0 0 300 300">
				<circle cx="150" cy="150" r="146" fill="#0b1a16"/>
				<circle cx="150" cy="150" r="128" fill="none" stroke="#2a3f38" stroke-width="10"/>
				<circle cx="150" cy="150" r="128" fill="none" stroke="#3d5a50" stroke-width="2" stroke-dasharray="3 9"/>
				<circle cx="150" cy="150" r="100" fill="#10231d"/>
				<circle cx="150" cy="150" r="78" fill="url(#glass)"/>
				<circle cx="150" cy="150" r="40" fill="#050c0a"/>
				<ellipse cx="122" cy="118" rx="22" ry="12" fill="#fff" opacity=".18" transform="rotate(-35 122 118)"/>
				<circle cx="176" cy="178" r="6" fill="#fff" opacity=".12"/>
				<text font-size="12" font-weight="700" fill="#7fa596" letter-spacing="4"><textPath href="#lensTxt">MEDIA EFFECT · ULTRA HD · 4K CINEMA ·</textPath></text>
				<path id="lensTxt" d="M150 36a114 114 0 1 1 0 228a114 114 0 1 1 0-228" fill="none"/>
				<defs><radialGradient id="glass" cx="40%" cy="35%"><stop offset="0" stop-color="#3b57a8"/><stop offset=".55" stop-color="#14306b"/><stop offset="1" stop-color="#03704f"/></radialGradient></defs>
			</svg>
			<div class="why-badge"><b><span data-count="<?php me_attr( 'stat_years' ); ?>">0</span>+</b><span>عامًا من الخبرة</span></div>
		</div>
		<div class="why-copy">
			<div class="sec-head reveal">
				<span class="kicker"><i>04</i> لماذا ميديا إيفكت</span>
				<h2 id="why-title">نحضر بوقتنا،<br>ونسلّم بموعدنا.</h2>
			</div>
			<ul class="feats">
				<li class="reveal" style="--d:0"><span><svg><use href="#i-award"/></svg></span><div><h3>خبرة <?php me_e( 'stat_years' ); ?> عامًا</h3><p>في تغطية المناسبات والمؤتمرات والمعارض والفعاليات.</p></div></li>
				<li class="reveal" style="--d:1"><span><svg><use href="#i-users"/></svg></span><div><h3>فريق متخصص</h3><p>مصورون ومونتيرون ومصممون يعرفون كيف تُلتقط اللحظة.</p></div></li>
				<li class="reveal" style="--d:2"><span><svg><use href="#i-camera"/></svg></span><div><h3>معدات عالية الجودة</h3><p>فيديو وفوتوغراف وتصوير جوي، وشاشات LED وأنظمة صوت.</p></div></li>
				<li class="reveal" style="--d:3"><span><svg><use href="#i-clock"/></svg></span><div><h3>التزام بالمواعيد</h3><p>نحضر في وقتنا ونسلّم في الموعد المتفق عليه.</p></div></li>
			</ul>
		</div>
	</div>
</section>

<!-- ============ كيف نشتغل: لوح التصوير ============ -->
<section class="section process" id="process" aria-labelledby="process-title">
	<div class="wrap">
		<div class="sec-head reveal">
			<span class="kicker"><i>05</i> كيف نشتغل</span>
			<h2 id="process-title">أربع لقطات<br>وتكون موثّق.</h2>
		</div>
		<div class="timeline" id="timeline">
			<div class="tl-track" aria-hidden="true"><i class="tl-fill"></i><i class="tl-head"></i></div>
			<ol class="scenes">
				<li class="scene reveal" style="--d:0"><div class="clap" aria-hidden="true"><i></i></div><span class="sc-tc">SCENE 01 · 00:00</span><h3>أرسل طلبك</h3><p>عبّ النموذج تحت بأقل من دقيقة، أو اتصل علينا مباشرة.</p></li>
				<li class="scene reveal" style="--d:1"><div class="clap" aria-hidden="true"><i></i></div><span class="sc-tc">SCENE 02 · 00:15</span><h3>نفهم احتياجك</h3><p>نتواصل معك لتحديد التفاصيل والباقة الأنسب.</p></li>
				<li class="scene reveal" style="--d:2"><div class="clap" aria-hidden="true"><i></i></div><span class="sc-tc">SCENE 03 · 00:30</span><h3>عرض السعر والحجز</h3><p>عرض واضح بدون مفاجآت، ونثبّت الموعد.</p></li>
				<li class="scene reveal" style="--d:3"><div class="clap" aria-hidden="true"><i></i></div><span class="sc-tc">SCENE 04 · 00:45</span><h3>التصوير والتسليم</h3><p>نغطي مناسبتك ونسلّم الأعمال في موعدها.</p></li>
			</ol>
		</div>
	</div>
</section>

<!-- ============ التواصل ============ -->
<section class="section contact" id="contact" aria-labelledby="contact-title">
	<div class="wrap contact-grid">
		<div class="contact-copy">
			<span class="kicker"><i>06</i> احجز الآن</span>
			<h2 id="contact-title">وثّق لحظاتك<br><span class="hl">معنا.</span></h2>
			<p>عبّ البيانات ويفتح لك واتساب برسالة جاهزة فيها طلبك — نرد عليك بأسرع وقت.</p>
			<div class="direct">
				<a href="tel:<?php me_tel(); ?>"><span><svg><use href="#i-phone"/></svg></span><div><small>اتصل مباشرة</small><b dir="ltr"><?php me_e( 'phone_view' ); ?></b></div></a>
				<a href="https://wa.me/<?php me_wa(); ?>" target="_blank" rel="noopener"><span><svg><use href="#i-wa"/></svg></span><div><small>واتساب</small><b>ابدأ محادثة</b></div></a>
				<a href="#contact"><span><svg><use href="#i-pin"/></svg></span><div><small>نطاق الخدمة</small><b><?php me_e( 'city' ); ?></b></div></a>
			</div>
		</div>

		<form class="form reveal" id="bookForm" data-wa="<?php me_wa(); ?>" novalidate>
			<div class="f-row">
				<label class="field"><span>الاسم</span><input id="f-name" name="name" type="text" autocomplete="name" required placeholder="اسمك الكريم"></label>
				<label class="field"><span>رقم الجوال</span><input id="f-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" required placeholder="05xxxxxxxx" dir="ltr"></label>
			</div>
			<label class="field"><span>الخدمة</span>
				<select id="f-svc" name="service">
					<option>تغطية مناسبة</option><option>تغطية مؤتمر</option><option>تغطية معرض</option><option>تغطية فعالية</option><option>تصوير منتجات</option><option>تصوير عقار</option><option>تصوير فيديو</option><option>تصوير فوتوغراف</option><option>تصوير جوي</option><option>باقة مدارس سنوية</option><option>مونتاج أو إنتاج إعلان</option><option>شاشات LED وصوتيات</option><option>بث مباشر</option><option>تجهيزات فعالية</option><option>أعمال طباعة</option><option>هوية وواجهات</option><option>خدمة أخرى</option>
				</select>
			</label>
			<div class="f-row">
				<label class="field"><span>الباقة</span>
					<select id="f-pkg" name="package"><option value="">ما حددت</option><option>الباقة البرونزية</option><option>الباقة الفضية</option><option>الباقة الذهبية</option></select>
				</label>
				<label class="field"><span>التاريخ</span><input id="f-date" name="date" type="text" placeholder="مثال: الخميس 12 نوفمبر"></label>
			</div>
			<label class="field"><span>المدينة</span><input id="f-city" name="city" type="text" autocomplete="address-level2" placeholder="الرياض، جدة، …"></label>
			<label class="field"><span>تفاصيل إضافية <em>(اختياري)</em></span><textarea id="f-notes" name="notes" rows="3" placeholder="نوع المناسبة، عدد الحضور، المكان…"></textarea></label>
			<p class="form-err" id="formErr" role="alert"></p>
			<button class="btn btn-green btn-block" type="submit"><svg><use href="#i-wa"/></svg> أرسل الطلب عبر واتساب</button>
		</form>
	</div>
</section>

</main>

<?php get_footer(); ?>
