<?php
/**
 * Template Name: Resources & Transparency
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <div class="td-page-hero-overlay" style="background:var(--td-primary);position:absolute;inset:0;opacity:.97;"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Accountability', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Resources & Transparency', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'PICKNET believes in radical transparency. Explore our reports, policies, impact data, and financial accountability documents.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<!-- Impact Metrics -->
<section class="td-section td-bg-white">
  <div class="td-container">
    <?php td_section_heading( __( 'Our Impact', 'thedreamers' ), __( 'Impact by the Numbers', 'thedreamers' ), '', true ); ?>
    <div class="td-grid-4" style="gap:1rem;">
      <?php
      $metrics = array(
        array( 'v' => '1,157+', 'l' => __( 'Youth & Women Trained', 'thedreamers' ) ),
        array( 'v' => '92+',    'l' => __( 'Businesses Launched', 'thedreamers' ) ),
        array( 'v' => '40+',    'l' => __( 'VELAs Established', 'thedreamers' ) ),
        array( 'v' => '150+',   'l' => __( 'Children Reached', 'thedreamers' ) ),
        array( 'v' => '46%',    'l' => __( 'Women Participation', 'thedreamers' ) ),
        array( 'v' => '90%+',   'l' => __( 'Fund Efficiency', 'thedreamers' ) ),
        array( 'v' => '3+',     'l' => __( 'Strategic Partners', 'thedreamers' ) ),
        array( 'v' => '7+',     'l' => __( 'Years of Service', 'thedreamers' ) ),
      );
      foreach ( $metrics as $m ) : ?>
        <div class="td-metric-card">
          <p class="td-metric-value"><?php echo esc_html( $m['v'] ); ?></p>
          <p class="td-metric-label"><?php echo esc_html( $m['l'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Success Stories -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading( __( 'Lives Transformed', 'thedreamers' ), __( 'Success Stories', 'thedreamers' ), __( 'Every number represents a person. Here are some of the lives PICKNET has helped change.', 'thedreamers' ), true ); ?>
    <div class="td-grid-3" style="gap:1.5rem;">
      <?php
      $stories = array(
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/story-antoinette.png',
          'name'  => 'Antoinette',
          'tag'   => __( 'Fashion Design & Tailoring', 'thedreamers' ),
          'quote' => __( 'I came to PICKNET unable to walk properly. They trained me in tailoring, connected me to a VELA group, and now I run my own sewing business that supports my four children.', 'thedreamers' ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/story-christmas-allan.png',
          'name'  => 'Christmas Allan',
          'tag'   => __( 'Hairdressing & Beauty', 'thedreamers' ),
          'quote' => __( 'After completing the hairdressing track, I launched my own salon in Rwamwanja. Today I employ two other young people and contribute to my community.', 'thedreamers' ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/story-esther-twizerimana.png',
          'name'  => 'Esther Twizerimana',
          'tag'   => __( 'Agribusiness', 'thedreamers' ),
          'quote' => __( 'The VELA savings group gave me capital to start my vegetable business. I have saved enough to pay school fees for all my children for the first time.', 'thedreamers' ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/story-florence-janine.png',
          'name'  => 'Florence Janine',
          'tag'   => __( 'Digital Skills', 'thedreamers' ),
          'quote' => __( 'PICKNET gave me access to a laptop and internet skills I never imagined I would have. I now manage social media for three small businesses in the settlement.', 'thedreamers' ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/story-madine-seremani.png',
          'name'  => 'Madine Seremani',
          'tag'   => __( 'Vocational Training', 'thedreamers' ),
          'quote' => __( 'I was unemployed and hopeless. After six months at PICKNET Academy, I secured a job as a skilled carpenter — building furniture and building my future.', 'thedreamers' ),
        ),
        array(
          'img'   => THEDREAMERS_URI . '/assets/images/story-tumaine-sebikari.png',
          'name'  => 'Tumaine Sebikari',
          'tag'   => __( 'Entrepreneurship', 'thedreamers' ),
          'quote' => __( 'The mentorship at PICKNET didn\'t just teach me business — it taught me to believe in myself. My poultry business now generates income that supports eight family members.', 'thedreamers' ),
        ),
      );
      foreach ( $stories as $story ) : ?>
        <div class="td-card" style="border-radius:1.25rem;overflow:hidden;box-shadow:0 2px 12px rgba(0,0,0,.08);transition:var(--td-transition);">
          <div style="position:relative;height:260px;overflow:hidden;">
            <img src="<?php echo esc_url( $story['img'] ); ?>"
                 alt="<?php echo esc_attr( $story['name'] ); ?>"
                 style="width:100%;height:100%;object-fit:cover;object-position:center top;display:block;"
                 loading="lazy">
            <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(0,0,0,.45) 0%,transparent 55%);"></div>
            <span class="td-program-card-tag" style="position:absolute;bottom:.75rem;left:.75rem;"><?php echo esc_html( $story['tag'] ); ?></span>
          </div>
          <div class="td-card-body">
            <blockquote style="border-left:3px solid var(--td-secondary);padding-left:1rem;margin:0 0 1rem;font-style:italic;color:var(--td-muted);font-size:.88rem;line-height:1.7;">
              "<?php echo esc_html( $story['quote'] ); ?>"
            </blockquote>
            <p style="font-weight:700;color:var(--td-primary);margin:0;">— <?php echo esc_html( $story['name'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Documents & Policies -->
<section class="td-section td-bg-white">
  <div class="td-container td-container-md">
    <?php td_section_heading( __( 'Documents & Policies', 'thedreamers' ), __( 'Transparency Documents', 'thedreamers' ), __( 'Our policies, reports, and governance documents available on request. Contact us to request any document.', 'thedreamers' ), true ); ?>
    <div class="td-grid-2" style="gap:1rem;">
      <?php
      $docs = array(
        array( 'icon' => '📋', 'title' => __( 'Annual Report', 'thedreamers' ),              'desc' => __( 'Yearly program summary, financial overview, and impact highlights.', 'thedreamers' ) ),
        array( 'icon' => '📊', 'title' => __( 'Impact Report', 'thedreamers' ),              'desc' => __( 'Detailed beneficiary data, outcomes measurement, and MEL findings.', 'thedreamers' ) ),
        array( 'icon' => '🛡', 'title' => __( 'Safeguarding Policy', 'thedreamers' ),        'desc' => __( 'Our child and adult safeguarding framework aligned with international standards.', 'thedreamers' ) ),
        array( 'icon' => '⚖', 'title' => __( 'Accountability Framework', 'thedreamers' ),   'desc' => __( 'How PICKNET holds itself accountable to beneficiaries, donors, and partners.', 'thedreamers' ) ),
        array( 'icon' => '🌱', 'title' => __( 'Environmental & Social Policy', 'thedreamers' ),'desc' => __( 'Our commitment to environmentally responsible programming.', 'thedreamers' ) ),
        array( 'icon' => '✅', 'title' => __( 'URSB Registration Certificate', 'thedreamers' ),'desc' => __( 'Official registration with Uganda Registration Services Bureau, June 2018.', 'thedreamers' ) ),
      );
      foreach ( $docs as $doc ) : ?>
        <div style="display:flex;gap:1rem;background:var(--td-light);border:1px solid var(--td-border);border-radius:1rem;padding:1.25rem;align-items:flex-start;" class="td-card">
          <span style="font-size:1.5rem;flex-shrink:0;"><?php echo $doc['icon']; // phpcs:ignore ?></span>
          <div>
            <h4 style="margin:0 0 .3rem;"><?php echo esc_html( $doc['title'] ); ?></h4>
            <p style="font-size:.85rem;color:var(--td-muted);margin:0;"><?php echo esc_html( $doc['desc'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:2.5rem;">
      <a href="<?php echo esc_url( td_page_url( 'contact' ) ); ?>" class="td-btn td-btn-primary td-btn-lg">
        <?php esc_html_e( 'Request Documents', 'thedreamers' ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer();
