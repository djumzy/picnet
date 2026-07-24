<?php
/**
 * THEDREAMERS — Front Page (Home)
 * Hero Slider · Stats · What We Do · Approach · Programs · Partners · Newsletter · Blog Teasers
 *
 * @package TheDreamers
 */
get_header();

$slides = array(
  array(
    'image'       => THEDREAMERS_URI . '/assets/images/community-sensitization.jpg',
    'badge'       => __( 'Refugee-Led. Innovation-Driven. Future-Bound.', 'thedreamers' ),
    'title'       => __( 'From Aid Dependency to', 'thedreamers' ),
    'accent'      => __( 'Digital and Economic Resilience', 'thedreamers' ),
    'desc'        => __( 'We are a refugee-led organization equipping youth and women in Uganda with AI-integrated skills, mentorship, and capital to build sustainable, self-reliant futures.', 'thedreamers' ),
    'cta1_label'  => __( 'Invest in Impact', 'thedreamers' ),
    'cta1_url'    => td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ),
    'cta1_ext'    => true,
    'cta2_label'  => __( 'Explore the Academy ↗', 'thedreamers' ),
    'cta2_url'    => td_opt( 'academy_url', 'https://picknet.org/academy/' ),
    'cta2_ext'    => true,
  ),
  array(
    'image'       => THEDREAMERS_URI . '/assets/images/skilling.jpg',
    'badge'       => __( 'CYSED Program', 'thedreamers' ),
    'title'       => __( 'Skills That Open', 'thedreamers' ),
    'accent'      => __( 'Global Doors', 'thedreamers' ),
    'desc'        => __( 'PICKNET Academy\'s 12-week CYSED program blends vocational training with AI-integrated digital skills — preparing refugees for the modern economy. 12 tracks, one powerful future.', 'thedreamers' ),
    'cta1_label'  => __( 'Explore the Academy ↗', 'thedreamers' ),
    'cta1_url'    => td_opt( 'academy_url', 'https://picknet.org/academy/' ),
    'cta1_ext'    => true,
    'cta2_label'  => __( 'All Programs', 'thedreamers' ),
    'cta2_url'    => td_page_url( 'programs' ),
    'cta2_ext'    => false,
  ),
  array(
    'image'       => THEDREAMERS_URI . '/assets/images/knitting-exhibition.jpg',
    'badge'       => __( 'Kids Network', 'thedreamers' ),
    'title'       => __( 'Every Child Deserves', 'thedreamers' ),
    'accent'      => __( 'Safety & Dignity', 'thedreamers' ),
    'desc'        => __( 'Our Kids Network protects vulnerable, street-connected, and abandoned children across Rwamwanja — delivering psychosocial support, safe spaces, and pathways to education.', 'thedreamers' ),
    'cta1_label'  => __( 'Kids Network', 'thedreamers' ),
    'cta1_url'    => td_page_url( 'kids-network' ),
    'cta1_ext'    => false,
    'cta2_label'  => __( 'Our Programs', 'thedreamers' ),
    'cta2_url'    => td_page_url( 'programs' ),
    'cta2_ext'    => false,
  ),
  array(
    'image'       => THEDREAMERS_URI . '/assets/images/agribusiness.jpg',
    'badge'       => __( 'VELAs — Village Enterprise Learning Associations', 'thedreamers' ),
    'title'       => __( 'Community Capital,', 'thedreamers' ),
    'accent'      => __( 'Community Power', 'thedreamers' ),
    'desc'        => __( 'Through 40+ VELA savings groups, we put financial tools in the hands of the people who need them most — enabling 1,500+ youth and women to save, invest, and thrive.', 'thedreamers' ),
    'cta1_label'  => __( 'Our Approach', 'thedreamers' ),
    'cta1_url'    => td_page_url( 'approach' ),
    'cta1_ext'    => false,
    'cta2_label'  => __( 'Success Stories', 'thedreamers' ),
    'cta2_url'    => td_page_url( 'blog' ),
    'cta2_ext'    => false,
  ),
  array(
    'image'       => THEDREAMERS_URI . '/assets/images/tailoring-cutting.jpg',
    'badge'       => __( 'Impact Stories', 'thedreamers' ),
    'title'       => __( 'Transforming Lives,', 'thedreamers' ),
    'accent'      => __( 'One Story at a Time', 'thedreamers' ),
    'desc'        => __( 'From Antoinette who went from crawling to entrepreneurship, to Christmas who launched his own salon — real lives changed by real skills. Read the stories behind the numbers.', 'thedreamers' ),
    'cta1_label'  => __( 'Read Success Stories', 'thedreamers' ),
    'cta1_url'    => td_page_url( 'blog' ),
    'cta1_ext'    => false,
    'cta2_label'  => __( 'Meet Our Team', 'thedreamers' ),
    'cta2_url'    => td_page_url( 'team' ),
    'cta2_ext'    => false,
  ),
);
?>

<!-- ═══════════════════════════════════════════════════════════════
     HERO SLIDER
     ═══════════════════════════════════════════════════════════════ -->
<section class="td-hero" aria-label="<?php esc_attr_e( 'Hero slideshow', 'thedreamers' ); ?>">

  <?php foreach ( $slides as $slide ) : ?>
    <div class="td-hero-slide">
      <img src="<?php echo esc_url( $slide['image'] ); ?>" alt="" aria-hidden="true" loading="eager">
      <div class="td-hero-overlay"></div>
    </div>
  <?php endforeach; ?>

  <!-- Content (first slide static, JS handles transitions) -->
  <div class="td-container" style="position:relative;z-index:2;width:100%;">
    <?php foreach ( $slides as $i => $slide ) : ?>
      <div class="td-hero-content-item" data-slide="<?php echo esc_attr( $i ); ?>" style="display:none;">
        <span class="td-hero-badge"><?php echo esc_html( $slide['badge'] ); ?></span>
        <h1 class="td-hero-title">
          <?php echo esc_html( $slide['title'] ); ?><br>
          <span class="accent"><?php echo esc_html( $slide['accent'] ); ?></span>
        </h1>
        <p class="td-hero-desc"><?php echo esc_html( $slide['desc'] ); ?></p>
        <div class="td-hero-btns">
          <a href="<?php echo esc_url( $slide['cta1_url'] ); ?>" class="td-btn td-btn-secondary td-btn-lg"
             <?php echo $slide['cta1_ext'] ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
            <?php echo esc_html( $slide['cta1_label'] ); ?>
          </a>
          <a href="<?php echo esc_url( $slide['cta2_url'] ); ?>" class="td-btn td-btn-outline td-btn-lg"
             <?php echo $slide['cta2_ext'] ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
            <?php echo esc_html( $slide['cta2_label'] ); ?>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Navigation -->
  <button class="td-hero-nav prev" aria-label="<?php esc_attr_e( 'Previous slide', 'thedreamers' ); ?>">&#8249;</button>
  <button class="td-hero-nav next" aria-label="<?php esc_attr_e( 'Next slide', 'thedreamers' ); ?>">&#8250;</button>

  <!-- Dots -->
  <div class="td-hero-controls" role="tablist">
    <?php for ( $i = 0; $i < count( $slides ); $i++ ) : ?>
      <button class="td-hero-dot" role="tab" aria-label="<?php printf( esc_attr__( 'Slide %d', 'thedreamers' ), $i + 1 ); ?>"></button>
    <?php endfor; ?>
  </div>

</section>

<script>
/* Inline hero content switcher tied to slider */
(function(){
  var items = document.querySelectorAll('.td-hero-content-item');
  if(!items.length) return;
  items[0].style.display = 'block';
  /* TheDreamers.heroContentSwitch is called from theme.js */
  window._tdHeroItems = items;
})();
</script>

<!-- ═══════════════════════════════════════════════════════════════
     IMPACT STATS
     ═══════════════════════════════════════════════════════════════ -->
<section class="td-stats">
  <div class="td-container">
    <div class="td-stats-grid">
      <?php
      $stats = array(
        array( 'n' => 1157, 'suffix' => '+',  'label' => __( 'Youth &amp; Women Trained', 'thedreamers' ) ),
        array( 'n' => 30,   'suffix' => '+',  'label' => __( 'VELAs Established', 'thedreamers' ) ),
        array( 'n' => 92,   'suffix' => '+',  'label' => __( 'Businesses Launched', 'thedreamers' ) ),
        array( 'n' => 46,   'suffix' => '%+', 'label' => __( 'Women Participation', 'thedreamers' ) ),
        array( 'n' => 3,    'suffix' => '+',  'label' => __( 'Strategic Partners', 'thedreamers' ) ),
      );
      foreach ( $stats as $s ) : ?>
        <div>
          <span class="td-stat-number" data-countup="<?php echo esc_attr( $s['n'] ); ?>" data-suffix="<?php echo esc_attr( $s['suffix'] ); ?>">0<?php echo esc_html( $s['suffix'] ); ?></span>
          <p class="td-stat-label"><?php echo $s['label']; // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     WHAT WE DO
     ═══════════════════════════════════════════════════════════════ -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading(
      __( 'Our Work', 'thedreamers' ),
      __( 'What We Do', 'thedreamers' ),
      __( 'PICKNET runs integrated, community-driven programs that address the root causes of poverty and displacement.', 'thedreamers' ),
      true
    ); ?>

    <div class="td-grid-3">
      <?php
      $programs = array(
        array(
          'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
          'color' => 'td-icon-green',
          'title' => __( 'Skills & Entrepreneurship', 'thedreamers' ),
          'desc'  => __( 'Vocational training, digital skills, and the CYSED Academy equip youth with in-demand competencies and entrepreneurship tools.', 'thedreamers' ),
          'link'  => td_page_url( 'academy' ),
        ),
        array(
          'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>',
          'color' => 'td-icon-amber',
          'title' => __( 'VELAs & Livelihoods', 'thedreamers' ),
          'desc'  => __( 'Village Enterprise Learning Associations bring financial inclusion and savings culture to communities left behind by formal banking.', 'thedreamers' ),
          'link'  => td_page_url( 'programs' ),
        ),
        array(
          'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
          'color' => 'td-icon-emerald',
          'title' => __( 'Child Protection', 'thedreamers' ),
          'desc'  => __( 'The Kids Network provides safe spaces, psychosocial support, and education pathways for vulnerable and street-connected children.', 'thedreamers' ),
          'link'  => td_page_url( 'kids-network' ),
        ),
      );
      foreach ( $programs as $p ) : ?>
        <div class="td-card">
          <div class="td-card-body">
            <div class="td-icon-box <?php echo esc_attr( $p['color'] ); ?>" style="margin-bottom:1.25rem;">
              <?php echo $p['icon']; // phpcs:ignore ?>
            </div>
            <h3 style="margin-bottom:.5rem;"><?php echo esc_html( $p['title'] ); ?></h3>
            <p style="color:var(--td-muted);font-size:.9rem;"><?php echo esc_html( $p['desc'] ); ?></p>
            <a href="<?php echo esc_url( $p['link'] ); ?>" class="td-btn td-btn-primary" style="margin-top:1rem;">
              <?php esc_html_e( 'Learn More', 'thedreamers' ); ?> &rarr;
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     APPROACH STRIP — Train · Mentor · Finance
     ═══════════════════════════════════════════════════════════════ -->
<section class="td-section td-bg-primary" style="color:#fff;">
  <div class="td-container">
    <div style="text-align:center;margin-bottom:3rem;">
      <span class="td-badge td-badge-amber"><?php esc_html_e( 'Our Model', 'thedreamers' ); ?></span>
      <h2 style="color:#fff;margin-bottom:.75rem;"><?php esc_html_e( 'The Train–Mentor–Finance Model', 'thedreamers' ); ?></h2>
      <p style="color:rgba(255,255,255,.8);max-width:600px;margin:0 auto;">
        <?php esc_html_e( 'Three integrated pillars that reinforce each other — because skills alone are not enough.', 'thedreamers' ); ?>
      </p>
    </div>
    <div class="td-grid-3" style="gap:1.5rem;">
      <?php
      $steps = array(
        array( 'n' => '01', 'cls' => 'td-tmf-train',   'title' => __( 'Train', 'thedreamers' ),   'desc' => __( '12-week CYSED program across vocational and digital tracks, equipping participants with certified, market-relevant skills.', 'thedreamers' ) ),
        array( 'n' => '02', 'cls' => 'td-tmf-mentor',  'title' => __( 'Mentor', 'thedreamers' ),  'desc' => __( 'Structured business mentorship from experienced entrepreneurs — building enterprise mindsets and management skills.', 'thedreamers' ) ),
        array( 'n' => '03', 'cls' => 'td-tmf-finance', 'title' => __( 'Finance', 'thedreamers' ), 'desc' => __( 'VELA savings groups and community micro-finance provide start-up capital to launch and grow sustainable businesses.', 'thedreamers' ) ),
      );
      foreach ( $steps as $step ) : ?>
        <div class="td-tmf-card <?php echo esc_attr( $step['cls'] ); ?>" style="background:rgba(255,255,255,.08);border-color:rgba(255,255,255,.15);">
          <span class="td-tmf-number" style="color:rgba(255,255,255,.12);"><?php echo esc_html( $step['n'] ); ?></span>
          <h3 style="color:#fff;margin-bottom:.75rem;font-size:1.4rem;"><?php echo esc_html( $step['title'] ); ?></h3>
          <p style="color:rgba(255,255,255,.8);font-size:.92rem;line-height:1.7;"><?php echo esc_html( $step['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem;">
      <a href="<?php echo esc_url( td_page_url( 'approach' ) ); ?>" class="td-btn td-btn-secondary td-btn-lg">
        <?php esc_html_e( 'Read Our Full Approach', 'thedreamers' ); ?> &rarr;
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     SUCCESS STORIES PHOTO MOSAIC
     ═══════════════════════════════════════════════════════════════ -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <div style="text-align:center;max-width:640px;margin:0 auto 3rem;">
      <span class="td-badge td-badge-amber"><?php esc_html_e( 'Real Lives, Real Change', 'thedreamers' ); ?></span>
      <h2 style="margin-bottom:.75rem;"><?php esc_html_e( 'Success Stories in Action', 'thedreamers' ); ?></h2>
      <p style="color:var(--td-muted);font-size:1.05rem;line-height:1.7;">
        <?php esc_html_e( 'From garment cutting to agribusiness — every photo tells the story of a life transformed by skills, mentorship, and community.', 'thedreamers' ); ?>
      </p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:.75rem;">
      <?php
      $mosaic = array(
        array( 'src' => THEDREAMERS_URI . '/assets/images/tailoring-cutting.jpg',   'alt' => __( 'Garment cutting training', 'thedreamers' ),  'label' => __( 'Tailoring & Cutting', 'thedreamers' ) ),
        array( 'src' => THEDREAMERS_URI . '/assets/images/agribusiness.jpg',         'alt' => __( 'Agribusiness program', 'thedreamers' ),       'label' => __( 'Agribusiness', 'thedreamers' ) ),
        array( 'src' => THEDREAMERS_URI . '/assets/images/community-discussion.jpg', 'alt' => __( 'Community engagement', 'thedreamers' ),       'label' => __( 'Community Dialogues', 'thedreamers' ) ),
        array( 'src' => THEDREAMERS_URI . '/assets/images/practical-knitting.jpg',   'alt' => __( 'Practical crafts', 'thedreamers' ),            'label' => __( 'Crafts & Knitting', 'thedreamers' ) ),
      );
      foreach ( $mosaic as $m ) : ?>
        <div style="position:relative;overflow:hidden;border-radius:1.25rem;aspect-ratio:3/4;box-shadow:0 4px 18px rgba(0,0,0,.12);">
          <img src="<?php echo esc_url( $m['src'] ); ?>"
               alt="<?php echo esc_attr( $m['alt'] ); ?>"
               loading="lazy"
               style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;transition:transform .7s ease;">
          <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,.65) 0%,rgba(0,0,0,.05) 55%,transparent 100%);"></div>
          <span style="position:absolute;bottom:1rem;left:1rem;right:1rem;color:#fff;font-size:.85rem;font-weight:700;line-height:1.35;text-shadow:0 1px 4px rgba(0,0,0,.5);">
            <?php echo esc_html( $m['label'] ); ?>
          </span>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem;">
      <a href="<?php echo esc_url( td_page_url( 'blog' ) ); ?>" class="td-btn td-btn-primary td-btn-lg">
        <?php esc_html_e( 'Read All Success Stories', 'thedreamers' ); ?> &rarr;
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     RECENT BLOG POSTS
     ═══════════════════════════════════════════════════════════════ -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading(
      __( 'Stories of Change', 'thedreamers' ),
      __( 'Latest from the Blog', 'thedreamers' ),
      __( 'Real lives transformed by real skills — read the stories behind the numbers.', 'thedreamers' ),
      true
    ); ?>

    <?php
    $blog_query = new WP_Query( array( 'posts_per_page' => 3, 'post_status' => 'publish' ) );
    if ( $blog_query->have_posts() ) :
    ?>
      <div class="td-grid-3">
        <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
          <article class="td-post-card">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thedreamers-card' ); ?></a>
            <?php else : ?>
              <div style="height:180px;background:var(--td-primary);display:flex;align-items:center;justify-content:center;">
                <span style="color:rgba(255,255,255,.5);font-size:.85rem;">PICKNET</span>
              </div>
            <?php endif; ?>
            <div class="td-post-card-body">
              <div class="td-post-card-meta">
                <span class="td-post-card-cat"><?php the_category( ', ' ); ?></span>
                <span><?php echo esc_html( get_the_date() ); ?></span>
              </div>
              <h3 class="td-post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="td-post-card-excerpt"><?php the_excerpt(); ?></p>
            </div>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <div style="text-align:center;margin-top:2.5rem;">
        <a href="<?php echo esc_url( td_page_url( 'blog' ) ); ?>" class="td-btn td-btn-primary td-btn-lg">
          <?php esc_html_e( 'All Stories', 'thedreamers' ); ?> &rarr;
        </a>
      </div>
    <?php else : ?>
      <p style="text-align:center;color:var(--td-muted);"><?php esc_html_e( 'No stories published yet. Check back soon!', 'thedreamers' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     PARTNERS
     ═══════════════════════════════════════════════════════════════ -->
<section class="td-partners">
  <div class="td-container">
    <h3><?php esc_html_e( 'Partners & Collaborators', 'thedreamers' ); ?></h3>
    <div class="td-partner-track-wrap">
      <div class="td-partner-track">
        <?php
        $partners = array(
          array( 'name' => 'BURACED Uganda',       'img' => THEDREAMERS_URI . '/assets/images/partner-buraced.jpg' ),
          array( 'name' => 'Ustawi Schools',       'img' => THEDREAMERS_URI . '/assets/images/partner-ustawi.jpg' ),
          array( 'name' => 'Infiniti8 Academy',   'img' => THEDREAMERS_URI . '/assets/images/partner-infiniti8.webp' ),
          array( 'name' => 'UNESCO',               'img' => THEDREAMERS_URI . '/assets/images/partner-unesco.jpg' ),
          array( 'name' => 'Hope &amp; Ndeshi Academy', 'img' => THEDREAMERS_URI . '/assets/images/partner-hope-ndeshi.jpg' ),
        );
        foreach ( $partners as $p ) : ?>
          <img src="<?php echo esc_url( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['name'] ); ?>" class="td-partner-logo" loading="lazy" style="filter:none;opacity:1;">
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Partner CTA cards -->
    <div class="td-grid-3" style="margin-top:2.5rem;gap:1.25rem;max-width:860px;margin-left:auto;margin-right:auto;">
      <?php
      $partner_types = array(
        array(
          'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="28" height="28"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>',
          'color' => 'rgba(26,92,56,.1)', 'text' => 'var(--td-primary)',
          'title' => __( 'Implementation Partners', 'thedreamers' ),
          'desc'  => __( 'Co-deliver programs on the ground with shared expertise and resources.', 'thedreamers' ),
        ),
        array(
          'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="28" height="28"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>',
          'color' => 'rgba(217,119,6,.12)', 'text' => 'var(--td-secondary)',
          'title' => __( 'Funding Partners', 'thedreamers' ),
          'desc'  => __( 'Invest in scalable, evidence-based solutions that deliver measurable impact.', 'thedreamers' ),
        ),
        array(
          'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="28" height="28"><path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>',
          'color' => 'rgba(26,92,56,.1)', 'text' => 'var(--td-primary)',
          'title' => __( 'Advocacy Partners', 'thedreamers' ),
          'desc'  => __( 'Amplify refugee voices and champion systemic change.', 'thedreamers' ),
        ),
      );
      foreach ( $partner_types as $pt ) : ?>
        <div style="background:var(--td-light);border:1px solid var(--td-border);border-radius:1rem;padding:1.5rem;text-align:center;transition:var(--td-transition);">
          <div style="width:3.5rem;height:3.5rem;background:<?php echo esc_attr( $pt['color'] ); ?>;color:<?php echo esc_attr( $pt['text'] ); ?>;border-radius:.75rem;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;">
            <?php echo $pt['icon']; // phpcs:ignore ?>
          </div>
          <h4 style="color:<?php echo esc_attr( $pt['text'] ); ?>;margin-bottom:.5rem;"><?php echo esc_html( $pt['title'] ); ?></h4>
          <p style="font-size:.87rem;color:var(--td-muted);line-height:1.65;"><?php echo esc_html( $pt['desc'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:2rem;">
      <a href="<?php echo esc_url( td_page_url( 'partner' ) ); ?>" class="td-btn td-btn-primary td-btn-lg">
        <?php esc_html_e( 'Partner With PICKNET', 'thedreamers' ); ?> &rarr;
      </a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════════
     NEWSLETTER
     ═══════════════════════════════════════════════════════════════ -->
<?php if ( td_opt( 'show_newsletter', true ) ) : ?>
<section class="td-newsletter-section">
  <div class="td-container">
    <div class="td-newsletter-inner">
      <span class="td-badge td-badge-amber" style="background:rgba(217,119,6,.2);"><?php esc_html_e( 'Stay Connected', 'thedreamers' ); ?></span>
      <h2><?php echo esc_html( td_opt( 'newsletter_heading', __( 'Stay Connected with PICKNET', 'thedreamers' ) ) ); ?></h2>
      <p><?php esc_html_e( 'Get updates on programs, impact stories, and ways to support refugee-led development in Uganda.', 'thedreamers' ); ?></p>
      <form class="td-newsletter-form" data-nonce="<?php echo esc_attr( wp_create_nonce( 'thedreamers_newsletter_nonce' ) ); ?>">
        <div class="td-nl-row">
          <input type="text"  name="first_name" class="td-nl-input" placeholder="<?php esc_attr_e( 'Your first name (optional)', 'thedreamers' ); ?>" autocomplete="given-name">
          <input type="email" name="email"      class="td-nl-input td-nl-email" placeholder="<?php esc_attr_e( 'Your email address', 'thedreamers' ); ?>" required autocomplete="email">
          <button type="submit" class="td-nl-btn"><?php esc_html_e( 'Subscribe', 'thedreamers' ); ?></button>
        </div>
        <div class="td-nl-message" aria-live="polite"></div>
      </form>
      <p style="color:rgba(255,255,255,.5);font-size:.8rem;margin-top:1rem;">
        <?php esc_html_e( 'No spam, ever. Unsubscribe at any time.', 'thedreamers' ); ?>
      </p>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ═══════════════════════════════════════════════════════════════
     DONATE CTA STRIP
     ═══════════════════════════════════════════════════════════════ -->
<section style="background:var(--td-secondary);padding:3rem 0;">
  <div class="td-container" style="text-align:center;">
    <h2 style="color:#fff;margin-bottom:.75rem;"><?php esc_html_e( 'Your Support Changes Lives', 'thedreamers' ); ?></h2>
    <p style="color:rgba(255,255,255,.85);max-width:560px;margin:0 auto 2rem;">
      <?php esc_html_e( '90% of every donation goes directly to programs — training youth, protecting children, and empowering women in Rwamwanja.', 'thedreamers' ); ?>
    </p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( td_opt( 'donate_url', 'https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N' ) ); ?>"
         class="td-btn td-btn-lg" style="background:#fff;color:var(--td-secondary);font-weight:800;"
         target="_blank" rel="noopener noreferrer">
        <?php esc_html_e( 'Donate Now', 'thedreamers' ); ?>
      </a>
      <a href="<?php echo esc_url( td_page_url( 'contact' ) ); ?>" class="td-btn td-btn-outline td-btn-lg">
        <?php esc_html_e( 'Get in Touch', 'thedreamers' ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer();
