/* Media Effect — interactions (vanilla, no libraries) */
(() => {
	'use strict';
	const $ = (s, c = document) => c.querySelector(s);
	const $$ = (s, c = document) => [...c.querySelectorAll(s)];
	const RM = matchMedia('(prefers-reduced-motion: reduce)').matches;
	const root = document.documentElement;

	requestAnimationFrame(() => setTimeout(() => document.body.classList.add('loaded'), 60));

	/* ---------- header, progress, mobile bar ---------- */
	const header = $('#siteHeader'), prog = $('#progress'), mbar = $('.mobile-bar');
	let lastY = scrollY;
	const onScroll = () => {
		const y = scrollY, max = root.scrollHeight - innerHeight;
		header.classList.toggle('solid', y > 20);
		if (!document.body.classList.contains('nav-open')) header.classList.toggle('hide', y > 400 && y > lastY + 4);
		if (y < lastY - 4 || y < 400) header.classList.remove('hide');
		lastY = y;
		if (prog) prog.style.transform = `scaleX(${max > 0 ? y / max : 0})`;
		if (mbar) mbar.classList.toggle('show', y > innerHeight * .6);
	};
	addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	/* ---------- mobile menu ---------- */
	const toggle = $('#menuToggle'), nav = $('#nav');
	const setNav = open => {
		document.body.classList.toggle('nav-open', open);
		toggle.setAttribute('aria-expanded', open);
		toggle.setAttribute('aria-label', open ? 'إغلاق القائمة' : 'فتح القائمة');
		document.body.style.overflow = open ? 'hidden' : '';
	};
	toggle.addEventListener('click', () => setNav(!document.body.classList.contains('nav-open')));
	$$('a', nav).forEach(a => a.addEventListener('click', () => setNav(false)));
	addEventListener('keydown', e => { if (e.key === 'Escape' && document.body.classList.contains('nav-open')) { setNav(false); toggle.focus(); } });

	/* active nav link */
	const links = $$('a[href^="#"]', nav);
	const secObs = new IntersectionObserver(es => es.forEach(e => {
		if (e.isIntersecting) links.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + e.target.id));
	}), { rootMargin: '-45% 0px -50% 0px' });
	links.forEach(a => { const s = $(a.getAttribute('href')); if (s) secObs.observe(s); });

	/* ---------- reveal + counters ---------- */
	const count = el => {
		const to = parseInt(el.dataset.count, 10) || 0;
		if (RM) { el.textContent = to; return; }
		const t0 = performance.now(), d = 1400;
		const step = t => { const p = Math.min(1, (t - t0) / d); el.textContent = Math.round(to * (1 - Math.pow(1 - p, 3))); if (p < 1) requestAnimationFrame(step); };
		requestAnimationFrame(step);
	};
	const io = new IntersectionObserver(es => es.forEach(e => {
		if (!e.isIntersecting) return;
		e.target.classList.add('in');
		$$('[data-count]', e.target).forEach(count);
		if (e.target.matches('[data-count]')) count(e.target);
		io.unobserve(e.target);
	}), { threshold: .14, rootMargin: '0px 0px -6% 0px' });
	$$('.reveal').forEach(el => io.observe(el));
	$$('[data-count]').forEach(el => { if (!el.closest('.reveal')) io.observe(el); });

	/* ---------- hero: rotating word, viewfinder slideshow, timecode ---------- */
	const sw = $$('#swap span');
	if (!RM && sw.length) {
		let i = 0;
		setInterval(() => {
			const a = sw[i]; a.classList.remove('on'); a.classList.add('out');
			setTimeout(() => a.classList.remove('out'), 500);
			i = (i + 1) % sw.length; sw[i].classList.add('on');
		}, 2200);
	}
	const vf = $$('.vf-img');
	if (!RM && vf.length > 1) {
		let k = 0;
		setInterval(() => { vf[k].classList.remove('on'); k = (k + 1) % vf.length; vf[k].classList.add('on'); }, 3400);
	}
	const tc = $('#timecode');
	if (tc) {
		const t0 = performance.now(), pad = n => String(n).padStart(2, '0');
		const tick = () => {
			const ms = performance.now() - t0, f = Math.floor(ms / 40) % 25, s = Math.floor(ms / 1000);
			tc.textContent = `00:${pad(Math.floor(s / 60) % 60)}:${pad(s % 60)}:${pad(f)}`;
			if (!RM) requestAnimationFrame(tick);
		};
		tick();
	}

	/* ---------- statement words ---------- */
	const stmt = $('[data-words]');
	let words = [];
	if (stmt) {
		stmt.innerHTML = stmt.innerHTML.replace(/(<em>.*?<\/em>)|([^\s<>]+)/g, (m, em) => `<span class="w">${em || m}</span>`);
		words = $$('.w', stmt);
	}

	/* ---------- gallery rail (mobile) + lightbox ---------- */
	const gal = $('#gallery'), railBar = $('#railBar');
	if (gal && railBar) {
		const upd = () => {
			const max = gal.scrollWidth - gal.clientWidth;
			const p = max > 0 ? Math.abs(gal.scrollLeft) / max : 0;
			railBar.style.width = `${Math.max(12, (gal.clientWidth / gal.scrollWidth) * 100)}%`;
			railBar.style.transform = `translateX(${-p * (100 / ((gal.clientWidth / gal.scrollWidth) || 1) - 100)}%)`;
		};
		gal.addEventListener('scroll', upd, { passive: true });
		addEventListener('resize', upd);
		upd();
	}
	const lb = $('#lightbox'), lbImg = $('#lbImg');
	if (lb && lb.showModal) {
		$$('.shot button').forEach(b => b.addEventListener('click', () => {
			const img = $('img', b);
			lbImg.src = b.dataset.full; lbImg.alt = img.alt; lb.showModal();
		}));
		$('#lbClose').addEventListener('click', () => lb.close());
		lb.addEventListener('click', e => { if (e.target === lb) lb.close(); });
	}
	const wc = $('#workCount'); if (wc) wc.textContent = $$('.shot').length;

	/* ---------- package tabs ---------- */
	const tabs = $$('#pkgTabs [role="tab"]'), ind = $('.tab-ind');
	const selTab = (t, focus) => {
		tabs.forEach((x, i) => {
			const on = x === t;
			x.setAttribute('aria-selected', on); x.tabIndex = on ? 0 : -1;
			const p = $('#' + x.getAttribute('aria-controls'));
			p.hidden = !on;
			if (on) { p.classList.remove('enter'); void p.offsetWidth; p.classList.add('enter'); ind.style.transform = `translateX(${-i * 100}%)`; }
		});
		if (focus) t.focus();
	};
	tabs.forEach((t, i) => {
		t.addEventListener('click', () => selTab(t));
		t.addEventListener('keydown', e => {
			const k = e.key === 'ArrowLeft' ? 1 : e.key === 'ArrowRight' ? -1 : 0;
			if (k) { e.preventDefault(); selTab(tabs[(i + k + tabs.length) % tabs.length], true); }
		});
	});

	/* ---------- prefill booking form ---------- */
	const fSvc = $('#f-svc'), fPkg = $('#f-pkg'), fName = $('#f-name');
	const flash = el => { const f = el.closest('.field'); f.classList.remove('flash'); void f.offsetWidth; f.classList.add('flash'); setTimeout(() => f.classList.remove('flash'), 1600); };
	const setSel = (sel, val) => { if (!val) return; if (![...sel.options].some(o => o.value === val || o.text === val)) sel.add(new Option(val, val)); sel.value = val; flash(sel); };
	$$('[data-svc]').forEach(a => { if (a.tagName === 'A') a.addEventListener('click', () => { setSel(fSvc, a.dataset.svc); setTimeout(() => fName.focus({ preventScroll: true }), 700); }); });
	$$('[data-pkg]').forEach(a => a.addEventListener('click', () => {
		const panel = a.closest('.pkg-panel');
		setSel(fSvc, panel && panel.dataset.svc); setSel(fPkg, a.dataset.pkg);
		setTimeout(() => fName.focus({ preventScroll: true }), 700);
	}));

	/* ---------- form → WhatsApp ---------- */
	const form = $('#bookForm'), err = $('#formErr'), toast = $('#toast');
	const say = msg => { toast.textContent = msg; toast.classList.add('show'); setTimeout(() => toast.classList.remove('show'), 2600); };
	if (form) form.addEventListener('submit', e => {
		e.preventDefault();
		const v = id => $('#' + id).value.trim();
		const name = v('f-name'), phone = v('f-phone').replace(/[^\d+]/g, '');
		$$('.field', form).forEach(f => f.classList.remove('bad'));
		const bad = [];
		if (!name) bad.push('f-name');
		if (phone.replace(/\D/g, '').length < 9) bad.push('f-phone');
		if (bad.length) {
			bad.forEach(id => $('#' + id).closest('.field').classList.add('bad'));
			err.textContent = bad.includes('f-name') ? 'اكتب اسمك عشان نعرف نخدمك.' : 'رقم الجوال ناقص — تأكد منه.';
			$('#' + bad[0]).focus();
			return;
		}
		err.textContent = '';
		const lines = ['مرحبًا ميديا إيفكت 👋', `أبغى: ${v('f-svc')}`];
		if (v('f-pkg')) lines.push(`الباقة: ${v('f-pkg')}`);
		if (v('f-city')) lines.push(`المدينة: ${v('f-city')}`);
		if (v('f-date')) lines.push(`التاريخ: ${v('f-date')}`);
		if (v('f-notes')) lines.push(`تفاصيل: ${v('f-notes')}`);
		lines.push(`الاسم: ${name}`, `الجوال: ${phone}`);
		say('نفتح لك واتساب…');
		window.open(`https://wa.me/${form.dataset.wa}?text=${encodeURIComponent(lines.join('\n'))}`, '_blank', 'noopener');
	});

	/* ---------- scroll engine: parallax, rotation, scrubbed shutter, timeline ---------- */
	if (RM) { words.forEach(w => w.classList.add('lit')); return; }
	const par = $$('[data-speed],[data-rot],[data-x]').map(el => ({ el, sp: +el.dataset.speed || 0, rot: +el.dataset.rot || 0, x: +el.dataset.x || 0 }));
	const shutter = $('#shutter'), sticky = $('.shutter-sticky'), irisS = $('.iris-scrub');
	const tl = $('#timeline');
	const desktopOnly = el => el.classList.contains('g-col');
	let ticking = false;

	const frame = () => {
		ticking = false;
		const vh = innerHeight, wide = innerWidth >= 760;
		par.forEach(({ el, sp, rot, x }) => {
			const r = (el.parentElement || el).getBoundingClientRect();
			if (r.bottom < -200 || r.top > vh + 200) return;
			if (desktopOnly(el) && !wide) { el.style.transform = ''; return; }
			const c = (r.top + r.height / 2 - vh / 2) / vh; // -1 … 1 around viewport centre
			const ty = sp ? c * sp * vh * -1 : 0;
			el.style.transform = `translate3d(${x ? c * x * -1 : 0}px, ${ty.toFixed(1)}px, 0)${rot ? ` rotate(${(c * rot).toFixed(1)}deg)` : ''}`;
		});

		if (shutter) {
			const r = shutter.getBoundingClientRect();
			const total = r.height - vh;
			const p = Math.min(1, Math.max(0, -r.top / (total || 1)));
			sticky.style.setProperty('--p', p.toFixed(3));
			// iris opens over first 45 % of the scroll, then stays open
			irisS.style.setProperty('--open', Math.min(1, p / .45).toFixed(3));
			const lit = Math.round(Math.min(1, Math.max(0, (p - .15) / .7)) * words.length);
			words.forEach((w, i) => w.classList.toggle('lit', i < lit));
		}

		if (tl) {
			const r = tl.getBoundingClientRect();
			const p = Math.min(1, Math.max(0, (vh * .75 - r.top) / (r.height || 1)));
			tl.style.setProperty('--tp', p.toFixed(3));
		}
	};
	const req = () => { if (!ticking) { ticking = true; requestAnimationFrame(frame); } };
	addEventListener('scroll', req, { passive: true });
	addEventListener('resize', req);
	frame();
})();
