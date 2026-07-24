/**
 * THEDREAMERS — PICKNET Theme JS
 * Hero Slider · CountUp · FAQ · Newsletter · WhatsApp Widget · Mobile Nav
 */
(function () {
  'use strict';

  /* ── Helpers ───────────────────────────────────────────────────────────── */
  function qs(sel, ctx)  { return (ctx || document).querySelector(sel); }
  function qsa(sel, ctx) { return (ctx || document).querySelectorAll(sel); }
  function on(el, ev, fn, opts) { if (el) el.addEventListener(ev, fn, opts || false); }

  /* ══════════════════════════════════════════════════════════════════════
   * 1. MOBILE NAV + DESKTOP DROPDOWN
   * ══════════════════════════════════════════════════════════════════════ */
  function initMobileNav() {
    var toggle = qs('.td-nav-toggle');
    var menu   = qs('.td-mobile-menu');
    if (!toggle || !menu) return;

    // Mark items that have sub-menus
    qsa('.td-nav-menu > li, .td-mobile-menu > ul > li').forEach(function (li) {
      if (qs('.sub-menu', li)) li.classList.add('td-has-children');
    });

    // Hamburger open/close
    on(toggle, 'click', function () {
      toggle.classList.toggle('open');
      menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', menu.classList.contains('open'));
    });

    // Mobile accordion: tap top-level item with children toggles sub-menu
    qsa('.td-mobile-menu > ul > li.td-has-children > a').forEach(function (a) {
      on(a, 'click', function (e) {
        var li = a.parentElement;
        var isOpen = li.classList.contains('td-open');
        // Close all siblings
        qsa('.td-mobile-menu > ul > li.td-open').forEach(function (el) { el.classList.remove('td-open'); });
        if (!isOpen) li.classList.add('td-open');
        e.preventDefault(); // don't follow the '#' href on parent items
      });
    });

    // Desktop: keyboard-accessible dropdown toggle
    qsa('.td-nav-menu > li.td-has-children > a').forEach(function (a) {
      on(a, 'click', function (e) {
        var li = a.parentElement;
        // If the link is a real page (not '#'), allow navigation; otherwise toggle
        if (a.getAttribute('href') === '#' || !a.getAttribute('href')) {
          e.preventDefault();
          li.classList.toggle('td-open');
        }
      });
    });

    // Close desktop dropdowns on outside click
    on(document, 'click', function (e) {
      var nav = qs('.td-nav');
      if (nav && !nav.contains(e.target)) {
        qsa('.td-nav-menu > li.td-open').forEach(function (li) { li.classList.remove('td-open'); });
        toggle.classList.remove('open');
        menu.classList.remove('open');
      }
    });

    // Close mobile menu on escape
    on(document, 'keydown', function (e) {
      if (e.key === 'Escape') {
        toggle.classList.remove('open');
        menu.classList.remove('open');
      }
    });
  }

  /* ══════════════════════════════════════════════════════════════════════
   * 2. HERO SLIDER
   * ══════════════════════════════════════════════════════════════════════ */
  function initHeroSlider() {
    var hero = qs('.td-hero');
    if (!hero) return;

    var slides   = qsa('.td-hero-slide', hero);
    var dots     = qsa('.td-hero-dot',   hero);
    var prevBtn  = qs('.td-hero-nav.prev', hero);
    var nextBtn  = qs('.td-hero-nav.next', hero);
    if (!slides.length) return;

    var current    = 0;
    var total      = slides.length;
    var timer      = null;
    var transitioning = false;

    function goTo(idx) {
      if (transitioning || idx === current) return;
      transitioning = true;
      slides[current].classList.remove('active');
      if (dots[current]) dots[current].classList.remove('active');
      current = (idx + total) % total;
      slides[current].classList.add('active');
      if (dots[current]) dots[current].classList.add('active');
      setTimeout(function () { transitioning = false; }, 700);
    }

    function next() { goTo(current + 1); }
    function prev() { goTo(current - 1); }

    function resetTimer() {
      clearInterval(timer);
      timer = setInterval(next, 5500);
    }

    // Init first slide
    slides[0].classList.add('active');
    if (dots[0]) dots[0].classList.add('active');
    resetTimer();

    on(nextBtn, 'click', function () { next(); resetTimer(); });
    on(prevBtn, 'click', function () { prev(); resetTimer(); });

    dots.forEach(function (dot, i) {
      on(dot, 'click', function () { goTo(i); resetTimer(); });
    });

    // Touch swipe
    var touchStartX = 0;
    on(hero, 'touchstart', function (e) { touchStartX = e.changedTouches[0].clientX; }, { passive: true });
    on(hero, 'touchend', function (e) {
      var dx = e.changedTouches[0].clientX - touchStartX;
      if (Math.abs(dx) > 50) { dx < 0 ? next() : prev(); resetTimer(); }
    });
  }

  /* ══════════════════════════════════════════════════════════════════════
   * 3. COUNT-UP ANIMATION
   * ══════════════════════════════════════════════════════════════════════ */
  function initCountUp() {
    var counters = qsa('[data-countup]');
    if (!counters.length || !window.IntersectionObserver) return;

    var obs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el     = entry.target;
        var target = parseFloat(el.dataset.countup) || 0;
        var suffix = el.dataset.suffix || '';
        var dur    = 1800;
        var start  = null;

        function step(ts) {
          if (!start) start = ts;
          var progress = Math.min((ts - start) / dur, 1);
          var eased    = 1 - Math.pow(1 - progress, 3);
          var val      = Math.floor(eased * target);
          el.textContent = (val >= 1000 ? val.toLocaleString() : val) + suffix;
          if (progress < 1) requestAnimationFrame(step);
          else el.textContent = (target >= 1000 ? target.toLocaleString() : target) + suffix;
        }
        requestAnimationFrame(step);
        obs.unobserve(el);
      });
    }, { threshold: 0.4 });

    counters.forEach(function (el) { obs.observe(el); });
  }

  /* ══════════════════════════════════════════════════════════════════════
   * 4. FAQ ACCORDION
   * ══════════════════════════════════════════════════════════════════════ */
  function initFAQ() {
    var items = qsa('.td-faq-item');
    items.forEach(function (item) {
      var btn = qs('.td-faq-question', item);
      if (!btn) return;
      on(btn, 'click', function () {
        var isOpen = item.classList.contains('open');
        // Close all
        items.forEach(function (i) { i.classList.remove('open'); });
        // Toggle clicked
        if (!isOpen) item.classList.add('open');
      });
    });
  }

  /* ══════════════════════════════════════════════════════════════════════
   * 5. NEWSLETTER AJAX
   * ══════════════════════════════════════════════════════════════════════ */
  function initNewsletter() {
    var forms = qsa('.td-newsletter-form');
    forms.forEach(function (form) {
      on(form, 'submit', function (e) {
        e.preventDefault();
        var msgEl = qs('.td-nl-message', form);
        var btn   = qs('.td-nl-btn', form);
        var data  = new FormData(form);
        data.append('action', 'thedreamers_newsletter');
        data.append('nonce',  form.dataset.nonce || (window.TheDreamers && window.TheDreamers.newsletterNonce) || '');

        if (btn) { btn.disabled = true; btn.textContent = (window.TheDreamers && window.TheDreamers.strings.subscribing) || 'Subscribing…'; }
        if (msgEl) { msgEl.className = 'td-nl-message'; msgEl.textContent = ''; }

        fetch((window.TheDreamers && window.TheDreamers.ajaxUrl) || '/wp-admin/admin-ajax.php', {
          method: 'POST',
          body: data,
          credentials: 'same-origin',
        })
          .then(function (r) { return r.json(); })
          .then(function (res) {
            if (msgEl) {
              msgEl.textContent  = res.data && res.data.message ? res.data.message : (res.success ? 'Thank you!' : 'Error.');
              msgEl.className    = 'td-nl-message ' + (res.success ? 'success' : 'error');
            }
            if (res.success) form.reset();
          })
          .catch(function () {
            if (msgEl) { msgEl.textContent = 'Network error. Please try again.'; msgEl.className = 'td-nl-message error'; }
          })
          .finally(function () {
            if (btn) { btn.disabled = false; btn.textContent = (window.TheDreamers && window.TheDreamers.strings.subscribe) || 'Subscribe'; }
          });
      });
    });
  }

  /* ══════════════════════════════════════════════════════════════════════
   * 6. WHATSAPP WIDGET
   * ══════════════════════════════════════════════════════════════════════ */
  function initWhatsApp() {
    var cfg = window.TheDreamers || {};
    if (cfg.showWhatsapp === false) return;

    var number = cfg.whatsappNumber || '256740997528';
    var waUrl  = 'https://wa.me/' + number + '?text=Hello%20PICKNET%2C%20I%20would%20like%20to%20learn%20more%20about%20your%20programs.';

    var widget = document.createElement('div');
    widget.id  = 'td-wa-widget';
    widget.innerHTML = [
      '<div class="td-wa-popup" id="td-wa-popup" role="dialog" aria-label="Chat with PICKNET on WhatsApp">',
        '<div class="td-wa-header">',
          '<div class="td-wa-avatar">',
            '<svg viewBox="0 0 24 24" fill="white" width="22" height="22"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>',
          '</div>',
          '<div class="td-wa-info">',
            '<p class="td-wa-name">PICKNET Support</p>',
            '<p class="td-wa-status">Typically replies within minutes</p>',
          '</div>',
          '<button class="td-wa-close" id="td-wa-close" aria-label="Close">&times;</button>',
        '</div>',
        '<div class="td-wa-body">',
          '<div class="td-wa-bubble">',
            '<p>\uD83D\uDC4B Hello! Welcome to <strong>PICKNET</strong>.</p>',
            '<p>How can we help you today? Tap below to start a conversation on WhatsApp.</p>',
            '<p class="td-wa-time">just now</p>',
          '</div>',
        '</div>',
        '<div class="td-wa-footer">',
          '<a href="' + waUrl + '" target="_blank" rel="noopener noreferrer" class="td-wa-btn">',
            '<svg viewBox="0 0 24 24" fill="white" width="18" height="18"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>',
            ' Chat on WhatsApp',
          '</a>',
        '</div>',
      '</div>',
      '<div class="td-wa-hint" id="td-wa-hint">',
        '<span>Chat with us! \uD83D\uDC4B</span>',
        '<button id="td-wa-hint-close" aria-label="Dismiss">&times;</button>',
      '</div>',
      '<button class="td-wa-fab" id="td-wa-fab" aria-label="Chat on WhatsApp" aria-expanded="false">',
        '<svg viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>',
        '<span class="td-wa-pulse"></span>',
      '</button>',
    ].join('');

    document.body.appendChild(widget);

    var fab    = qs('#td-wa-fab');
    var popup  = qs('#td-wa-popup');
    var hint   = qs('#td-wa-hint');
    var close  = qs('#td-wa-close');
    var hClose = qs('#td-wa-hint-close');

    function openPopup()  { popup.classList.add('open');  fab.setAttribute('aria-expanded', 'true');  hint.classList.remove('show'); }
    function closePopup() { popup.classList.remove('open'); fab.setAttribute('aria-expanded', 'false'); }

    on(fab,    'click', function () { popup.classList.contains('open') ? closePopup() : openPopup(); });
    on(close,  'click', closePopup);
    on(hClose, 'click', function () { hint.classList.remove('show'); });

    // Show hint after 4 s
    setTimeout(function () { if (!popup.classList.contains('open')) hint.classList.add('show'); }, 4000);
    // Auto-hide hint after 10 s
    setTimeout(function () { hint.classList.remove('show'); }, 14000);
  }

  /* ══════════════════════════════════════════════════════════════════════
   * 7. PARTNER SCROLLER — clone track for seamless loop
   * ══════════════════════════════════════════════════════════════════════ */
  function initPartnerScroller() {
    var track = qs('.td-partner-track');
    if (!track) return;
    var clone = track.cloneNode(true);
    track.parentNode.appendChild(clone);
  }

  /* ══════════════════════════════════════════════════════════════════════
   * 8. STICKY NAV SHADOW
   * ══════════════════════════════════════════════════════════════════════ */
  function initStickyNav() {
    var nav = qs('.td-nav');
    if (!nav) return;
    on(window, 'scroll', function () {
      nav.style.boxShadow = window.scrollY > 10 ? '0 2px 20px rgba(0,0,0,.10)' : '0 1px 12px rgba(0,0,0,.06)';
    }, { passive: true });
  }

  /* ══════════════════════════════════════════════════════════════════════
   * INIT
   * ══════════════════════════════════════════════════════════════════════ */
  document.addEventListener('DOMContentLoaded', function () {
    initMobileNav();
    initHeroSlider();
    initCountUp();
    initFAQ();
    initNewsletter();
    initPartnerScroller();
    initStickyNav();
    initWhatsApp();
  });

})();
