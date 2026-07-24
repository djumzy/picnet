<?php
/**
 * Template Name: Thematic Focus & Impact
 *
 * @package TheDreamers
 */
get_header(); ?>

<!-- Hero -->
<section class="td-page-hero" style="background-image:url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-discussion.jpg' ); ?>');">
  <div class="td-page-hero-overlay"></div>
  <div class="td-container" style="position:relative;z-index:1;padding-top:5rem;padding-bottom:5rem;">
    <p style="color:var(--td-secondary);font-weight:700;font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;margin-bottom:1rem;">Our Work</p>
    <h1 style="font-size:clamp(2rem,5vw,3.2rem);font-weight:900;color:#fff;margin:0 0 1.25rem;line-height:1.15;max-width:680px;">
      Our Thematic Focus<br><span style="color:var(--td-secondary);">&amp; Impact</span>
    </h1>
    <p style="font-size:1.1rem;color:rgba(255,255,255,.85);max-width:580px;line-height:1.7;margin-bottom:2rem;">
      Seven interconnected thematic pillars — anchored by peacebuilding and powered by innovation — drive everything we do in Rwamwanja. Each is grounded in measurable outcomes and aligned with the UN Sustainable Development Goals.
    </p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;">
      <a href="https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N" target="_blank" rel="noopener noreferrer" class="td-btn td-btn-secondary td-btn-lg">Fund Our Mission</a>
      <a href="<?php echo esc_url( td_page_url( 'programs' ) ); ?>" class="td-btn td-btn-outline td-btn-lg">Explore Programs &rarr;</a>
    </div>
  </div>
</section>

<!-- Headline Targets -->
<section style="background:var(--td-primary);color:#fff;border-top:1px solid rgba(255,255,255,.1);">
  <div class="td-container">
    <div style="display:grid;grid-template-columns:repeat(3,1fr);divide-color:rgba(255,255,255,.2);">
      <?php
      $targets = array(
        array( '78%',  'Impact',            'Transforming Lives.' ),
        array( '85%',  'Donor Confidence',  'Restoring Dignity.' ),
        array( '90%',  'Sustainability',    'Building Resilient Communities.' ),
      );
      foreach ( $targets as $i => $t ) :
        $border = $i > 0 ? 'border-left:1px solid rgba(255,255,255,.2);' : '';
      ?>
        <div style="padding:2rem 1.5rem;text-align:center;<?php echo $border; ?>">
          <p style="font-size:clamp(2.2rem,5vw,3rem);font-weight:900;color:var(--td-secondary);margin:0;line-height:1;"><?php echo esc_html( $t[0] ); ?></p>
          <p style="font-weight:700;font-size:.85rem;margin:.25rem 0 0;"><?php echo esc_html( $t[1] ); ?></p>
          <p style="color:rgba(255,255,255,.55);font-size:.75rem;margin:.25rem 0 0;"><?php echo esc_html( $t[2] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Impact Numbers -->
<section class="td-section" style="background:#fff;border-bottom:1px solid #eee;">
  <div class="td-container">
    <?php td_section_heading(
      __( 'Our Impact in Numbers', 'thedreamers' ),
      '',
      __( 'Seven years of refugee-led community development, measured where it matters most.', 'thedreamers' ),
      true
    ); ?>
    <div class="td-stats-grid" style="margin-top:0;">
      <?php
      $stats = array(
        array( '1,500+',  'Youth &amp; Women Trained' ),
        array( '120+',    'Businesses Launched' ),
        array( '40+',     'VELAs Established' ),
        array( '5,000+',  'Lives Impacted Directly &amp; Indirectly' ),
        array( '60–75%',  'Employment Transition Rate' ),
        array( '85%',     'Business Survival Rate (Up to 2 Yrs)' ),
      );
      foreach ( $stats as $s ) : ?>
        <div class="td-stat-card">
          <div class="td-stat-number"><?php echo wp_kses_post( $s[0] ); ?></div>
          <div class="td-stat-label"><?php echo wp_kses_post( $s[1] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Results 2021–2026 -->
<section class="td-section" style="background:#f8fafc;border-bottom:1px solid #eee;">
  <div class="td-container" style="max-width:900px;">
    <div style="display:flex;gap:2.5rem;flex-wrap:wrap;align-items:flex-start;">
      <div style="flex:0 0 200px;min-width:160px;">
        <p style="color:var(--td-secondary);font-weight:700;font-size:.8rem;letter-spacing:.1em;text-transform:uppercase;margin-bottom:.5rem;">Outputs</p>
        <h2 style="font-size:1.6rem;font-weight:900;color:var(--td-primary);margin:0 0 .75rem;line-height:1.2;">Results<br>2021–2026</h2>
        <p style="font-size:.85rem;color:#64748b;line-height:1.6;">Verified outputs delivered since our formalised programmes began.</p>
      </div>
      <ul style="flex:1;min-width:260px;list-style:none;padding:0;margin:0;">
        <?php
        $results = array(
          '1,500+ youth and women trained in tailoring, business, and other skills',
          'Tree planting and clean-up campaigns implemented across the settlement',
          'Local climate action champions identified and trained',
          'Increased access to networks and markets for beneficiaries',
          'Integrated data collection system for long-term outcome tracking established',
        );
        foreach ( $results as $r ) : ?>
          <li style="display:flex;gap:.75rem;align-items:flex-start;font-size:.9rem;color:#1e293b;margin-bottom:.75rem;">
            <span style="color:var(--td-secondary);font-size:1.1rem;flex-shrink:0;margin-top:.05rem;">✓</span>
            <?php echo esc_html( $r ); ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<!-- Foundation Pillar: Peacebuilding -->
<section class="td-section" style="background:#fff;">
  <div class="td-container" style="max-width:1000px;">
    <div style="margin-bottom:1.5rem;">
      <span style="display:inline-block;background:#1d4ed8;color:#fff;font-size:.72rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;padding:.3rem .75rem;border-radius:6px;margin-bottom:1rem;">
        Foundation Pillar &middot; SDG 16 &middot; SDG 10 &middot; SDG 8
      </span>
      <div style="display:flex;gap:1rem;align-items:flex-start;margin-bottom:1.5rem;">
        <div style="width:56px;height:56px;border-radius:12px;background:#eff6ff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
          <span style="font-size:1.6rem;">🤝</span>
        </div>
        <div>
          <h2 style="font-size:clamp(1.4rem,3vw,2rem);font-weight:900;color:var(--td-primary);margin:0 0 .3rem;line-height:1.2;">
            Conflict Resolution, Peacebuilding &amp; Social Cohesion
          </h2>
          <p style="font-size:.9rem;color:var(--td-secondary);font-weight:600;font-style:italic;margin:0;">The Foundation for Sustainable Development</p>
        </div>
      </div>
    </div>

    <!-- Triple Nexus -->
    <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:16px;padding:2rem;margin-bottom:2rem;">
      <div style="display:flex;flex-wrap:wrap;gap:.75rem;margin-bottom:1.25rem;">
        <?php
        $nexus = array(
          array( '#1d4ed8', 'Humanitarian Response' ),
          array( '#065f46', 'Development' ),
          array( '#92400e', 'Peace' ),
          array( 'var(--td-primary)', 'Triple Nexus Approach' ),
        );
        foreach ( $nexus as $n ) : ?>
          <span style="background:<?php echo esc_attr( $n[0] ); ?>;color:#fff;font-size:.72rem;font-weight:700;padding:.3rem .8rem;border-radius:50px;">
            <?php echo esc_html( $n[1] ); ?>
          </span>
        <?php endforeach; ?>
      </div>
      <p style="color:#1e293b;line-height:1.7;margin:0;">
        At PICKNET, we operate on a fundamental truth: sustainable economic development can only flourish where peace prevails. We do not treat peace as an afterthought — we treat it as an operational prerequisite. By embedding peacebuilding into every program, PICKNET delivers a proven Triple Nexus approach: seamlessly integrating humanitarian response, development, and peace to maximise the long-term ROI of donor investments.
      </p>
    </div>

    <!-- 4 Strategic Sub-pillars -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.25rem;margin-bottom:2rem;">
      <?php
      $sub_pillars = array(
        array( '🎯', 'City of Peace Initiative',                       'A landmark initiative to designate the Rwamwanja Refugee Settlement as an official City of Peace — a live, scalable global model for refugee-host community integration.' ),
        array( '⚖️', 'Inclusive Governance &amp; Grassroots Mediation','Training women, youth, and traditional leaders in structured conflict mediation — ensuring equitable resource management and preventing tensions from escalating.' ),
        array( '💼', 'Cross-Community Economic Cohesion',              'Joint economic ventures pairing refugees with host community members, leveraging shared commercial interests to dissolve cultural biases organically.' ),
        array( '🌱', 'Holistic Program Integration',                   'Mainstreaming peacebuilding across climate resilience, education, and livelihoods interventions — ensuring community stabilisation underpins every project.' ),
      );
      foreach ( $sub_pillars as $sp ) : ?>
        <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:1.5rem;">
          <div style="width:40px;height:40px;background:#dbeafe;border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1rem;font-size:1.2rem;">
            <?php echo $sp[0]; ?>
          </div>
          <h3 style="font-size:.9rem;font-weight:800;color:#1e293b;margin:0 0 .5rem;"><?php echo wp_kses_post( $sp[1] ); ?></h3>
          <p style="font-size:.82rem;color:#64748b;line-height:1.6;margin:0;"><?php echo esc_html( $sp[2] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Why Invest -->
    <div style="background:var(--td-primary);color:#fff;border-radius:16px;padding:2rem;">
      <p style="color:var(--td-secondary);font-weight:700;font-size:.8rem;letter-spacing:.1em;text-transform:uppercase;margin:0 0 1.5rem;">Why Invest in PICKNET?</p>
      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1.5rem;margin-bottom:1.5rem;">
        <?php
        $invest = array(
          array( 'Risk Mitigation',       'Proactively resolving social friction and resource conflicts protects and multiplies the impact of your funding.' ),
          array( 'Proven Holistic Model', 'Demonstrates how livelihoods, climate adaptation, and peace converge into one community-led framework.' ),
          array( 'Strategic Localization','As a deeply rooted partner, PICKNET provides direct access to refugee and host ecosystems with locally owned, lasting outcomes.' ),
        );
        foreach ( $invest as $inv ) : ?>
          <div>
            <p style="font-weight:700;color:var(--td-secondary);margin:0 0 .5rem;"><?php echo esc_html( $inv[0] ); ?></p>
            <p style="color:rgba(255,255,255,.78);font-size:.85rem;line-height:1.6;margin:0;"><?php echo esc_html( $inv[1] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <p style="color:rgba(255,255,255,.72);font-size:.85rem;font-style:italic;border-top:1px solid rgba(255,255,255,.2);padding-top:1.25rem;margin:0;">
        By partnering with PICKNET, donors aren&rsquo;t just funding isolated projects — you are investing in a proven mechanism that transforms fragile environments into self-reliant, peaceful, and economically resilient communities equipped to shape their own future.
      </p>
    </div>
  </div>
</section>

<!-- Six Thematic Pillars -->
<section class="td-section td-bg-light">
  <div class="td-container">
    <?php td_section_heading(
      __( 'Our Thematic Focus Areas', 'thedreamers' ),
      __( 'Six Pillars', 'thedreamers' ),
      __( 'Each pillar addresses a critical dimension of vulnerability — and together they form a comprehensive, systemic response to displacement and poverty.', 'thedreamers' ),
      true
    ); ?>

    <?php
    $areas = array(
      array(
        'sdg'     => 'SDG 4 · SDG 8',
        'num'     => '1',
        'emoji'   => '🔵',
        'title'   => __( 'Youth Skills &amp; Employment', 'thedreamers' ),
        'headline'=> __( 'Turning Potential into Opportunity', 'thedreamers' ),
        'desc'    => __( 'We equip young people with market-relevant vocational, digital, and financial skills, complemented by mentorship, apprenticeships, and job linkages to accelerate their transition into decent work.', 'thedreamers' ),
        'stats'   => array( array( '1,500+', 'Trained to date' ), array( '60–75%', 'Transition to employment or self-employment' ), array( '10–15%', 'Inclusion of persons with disabilities' ) ),
        'outcomes'=> array( 'Certified, market-ready skills across 12 vocational and digital disciplines', 'AI-integrated learning through the GeoAI Nexus framework', 'Direct linkage to PICKNET Market Hub and enterprise development support' ),
      ),
      array(
        'sdg'     => 'SDG 1 · SDG 2 · SDG 8',
        'num'     => '2',
        'emoji'   => '🟢',
        'title'   => __( 'Livelihoods, Entrepreneurship &amp; Agribusiness', 'thedreamers' ),
        'headline'=> __( 'Building Income Pathways', 'thedreamers' ),
        'desc'    => __( 'We support youth and women to start, grow, and sustain resilient enterprises — including climate-smart agribusiness — through training, incubation, and market access.', 'thedreamers' ),
        'stats'   => array( array( '120+', 'Businesses launched and supported' ), array( '70%+', 'Business survival rate' ), array( '40+', 'VELAs strengthening savings &amp; financial resilience' ) ),
        'outcomes'=> array( 'Business mentorship and enterprise development workshops', 'Market Hub providing physical space and market linkages', 'VELA community savings groups funding business startups' ),
      ),
      array(
        'sdg'     => 'SDG 5 · SDG 10',
        'num'     => '3',
        'emoji'   => '🟠',
        'title'   => __( 'Inclusive Economic Empowerment', 'thedreamers' ),
        'headline'=> __( 'Expanding Access &amp; Equity', 'thedreamers' ),
        'desc'    => __( 'We promote equitable access to opportunities for women, refugees, and persons with disabilities through inclusive programming, leadership development, and financial inclusion.', 'thedreamers' ),
        'stats'   => array( array( '60%+', 'Women participation across all programs' ), array( '40+', 'VELAs strengthening savings and financial resilience' ), array( '10–15%', 'Persons with disabilities included' ) ),
        'outcomes'=> array( 'Targeted outreach to female-headed households and persons with disabilities', 'Financial literacy training integrated into all livelihood tracks', 'Inclusive partnerships improving access to finance and opportunity' ),
      ),
      array(
        'sdg'     => 'SDG 12 · SDG 13',
        'num'     => '4',
        'emoji'   => '🌱',
        'title'   => __( 'Climate &amp; Environmental Sustainability', 'thedreamers' ),
        'headline'=> __( 'Building Resilient Futures on Sustainable Ground', 'thedreamers' ),
        'desc'    => __( 'We integrate climate-smart and environmentally responsible practices across all programs to promote green skills and resilient livelihoods — equipping communities to face environmental change.', 'thedreamers' ),
        'stats'   => array( array( '200+', 'Trained in climate-smart agribusiness' ), array( '3', 'Agribusiness tracks with climate integration' ), array( '2018', 'Year PICKNET began sustainable practice training' ) ),
        'outcomes'=> array( 'Climate-smart agribusiness techniques integrated into vocational tracks', 'Tree planting and clean-up campaigns implemented across the settlement', 'Local climate action champions identified and trained' ),
      ),
      array(
        'sdg'     => 'SDG 4 · SDG 9',
        'num'     => '5',
        'emoji'   => '🎓',
        'title'   => __( 'Education &amp; Skills Development', 'thedreamers' ),
        'headline'=> __( 'PICKNET Academy &amp; Kids Network', 'thedreamers' ),
        'desc'    => __( 'We deliver flexible, inclusive training combining vocational, digital, and entrepreneurship skills for youth and adults, while nurturing children through our Kids Network with foundational education, life skills, and early talent development.', 'thedreamers' ),
        'stats'   => array( array( '200+', 'Youth reached through the Digital Hub' ), array( '40%', 'Female digital track enrolment' ), array( '500+', 'Children in Kids Network safe spaces' ) ),
        'outcomes'=> array( 'Improved employability and entrepreneurial capacity', 'Increased access to digital and vocational learning', 'Stronger foundational skills for children and adolescents' ),
      ),
      array(
        'sdg'     => 'SDG 5 · SDG 10 · SDG 16',
        'num'     => '6',
        'emoji'   => '♿',
        'title'   => __( 'Equity, Gender &amp; Social Inclusion', 'thedreamers' ),
        'headline'=> __( 'Safety, Voice, and Dignity for All', 'thedreamers' ),
        'desc'    => __( 'We embed inclusive practices across all programs to ensure equal access, participation, and leadership opportunities for marginalized groups — including women, refugees, and persons with disabilities.', 'thedreamers' ),
        'stats'   => array( array( '500+', 'Children in safe spaces' ), array( '100%', 'Safeguarding policies across all programs' ), array( '60%+', 'Women participation across all programs' ) ),
        'outcomes'=> array( 'Dedicated safe spaces for children in the settlement', 'Child protection policies and safeguarding mechanisms', 'Psychosocial support and youth leadership programming' ),
      ),
    );
    foreach ( $areas as $area ) : ?>
      <div style="background:#fff;border-radius:16px;border:2px solid #e5e7eb;padding:2rem;margin-bottom:2rem;box-shadow:0 1px 4px rgba(0,0,0,.06);">
        <div style="display:flex;gap:2rem;flex-wrap:wrap;">
          <div style="min-width:200px;flex:0 0 200px;">
            <span style="display:inline-block;background:var(--td-primary);color:#fff;font-size:.7rem;font-weight:700;padding:.25rem .6rem;border-radius:6px;margin-bottom:.75rem;">
              <?php echo esc_html( $area['sdg'] ); ?>
            </span>
            <h3 style="font-size:1.1rem;font-weight:800;color:var(--td-primary);margin:0 0 .25rem;">
              <?php echo wp_kses_post( $area['emoji'] . ' ' . $area['num'] . '. ' . $area['title'] ); ?>
            </h3>
            <p style="font-size:.85rem;color:#64748b;font-style:italic;margin:0;">
              <?php echo esc_html( $area['headline'] ); ?>
            </p>
          </div>
          <div style="flex:1;min-width:260px;">
            <p style="color:#475569;line-height:1.7;margin-bottom:1.25rem;">
              <?php echo esc_html( $area['desc'] ); ?>
            </p>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:.75rem;margin-bottom:1.25rem;">
              <?php foreach ( $area['stats'] as $s ) : ?>
                <div style="background:#f8fafc;border-radius:10px;padding:1rem;text-align:center;">
                  <p style="font-size:1.3rem;font-weight:900;color:var(--td-primary);margin:0 0 .2rem;">
                    <?php echo esc_html( $s[0] ); ?>
                  </p>
                  <p style="font-size:.75rem;color:#64748b;margin:0;line-height:1.3;">
                    <?php echo esc_html( $s[1] ); ?>
                  </p>
                </div>
              <?php endforeach; ?>
            </div>
            <p style="font-size:.85rem;font-weight:700;color:#1e293b;margin-bottom:.5rem;">Key Outcomes</p>
            <ul style="list-style:none;padding:0;margin:0;">
              <?php foreach ( $area['outcomes'] as $o ) : ?>
                <li style="display:flex;gap:.5rem;align-items:flex-start;font-size:.85rem;color:#475569;margin-bottom:.4rem;">
                  <span style="color:var(--td-secondary);font-size:1rem;flex-shrink:0;margin-top:.1rem;">✓</span>
                  <?php echo esc_html( $o ); ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Theory of Change Pathway -->
<section class="td-section" style="background:#fff;">
  <div class="td-container" style="max-width:860px;">
    <?php td_section_heading(
      __( 'The Pathway', 'thedreamers' ),
      __( 'Theory of Change in Action', 'thedreamers' ),
      __( 'From vulnerability to resilience — our integrated model creates a self-reinforcing cycle of empowerment where each step builds on the last.', 'thedreamers' ),
      true
    ); ?>
    <?php
    $pathway = array(
      array( '1', 'TRAIN',   'Skills',             'Youth &amp; Women Empowerment and Skills Development', 'Vocational training, entrepreneurship, and financial literacy — building self-reliance and income generation through the CYSED Academy\'s 12-track programme.' ),
      array( '2', 'SUPPORT', 'Mentorship',          'Mentorship &amp; Business Support',  'Established creative youth hub and training centre with ongoing mentorship and coaching for business growth — pairing graduates with experienced mentors.' ),
      array( '3', 'LAUNCH',  'Market Hub',          'Market Hub &amp; Linkages',           'Connecting trained youth and women to markets and opportunities — access to networks, suppliers, buyers, and the PICKNET Market Hub trading platform.' ),
      array( '4', 'GROW',    'VELAs',               'Grow Enterprises (VELAs)',            'Supporting VELAs to scale and create decent jobs — business incubation and acceleration to over 85% survival rate for supported enterprises.' ),
      array( '5', 'SUSTAIN', 'Climate/Resilience',  'Climate Action &amp; Resilience',    'Green practices, reforestation, clean energy, and waste management — building climate resilience and long-term sustainability at household and community level.' ),
    );
    foreach ( $pathway as $p ) : ?>
      <div style="display:flex;gap:1.25rem;align-items:flex-start;margin-bottom:1.25rem;">
        <div style="width:56px;height:56px;border-radius:12px;background:var(--td-primary);color:#fff;display:flex;flex-direction:column;align-items:center;justify-content:center;flex-shrink:0;text-align:center;padding:.25rem;">
          <span style="font-size:1.2rem;font-weight:900;line-height:1;"><?php echo esc_html( $p[0] ); ?></span>
          <span style="font-size:.62rem;font-weight:700;line-height:1.2;"><?php echo esc_html( $p[1] ); ?></span>
          <span style="font-size:.52rem;opacity:.7;line-height:1;"><?php echo esc_html( $p[2] ); ?></span>
        </div>
        <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:1.25rem;flex:1;">
          <h3 style="font-size:.95rem;font-weight:800;color:#1e293b;margin:0 0 .35rem;"><?php echo wp_kses_post( $p[3] ); ?></h3>
          <p style="font-size:.85rem;color:#64748b;line-height:1.6;margin:0;"><?php echo esc_html( $p[4] ); ?></p>
        </div>
      </div>
    <?php endforeach; ?>
    <div style="background:#fef9ec;border:1px solid #fde68a;border-radius:12px;padding:1.25rem;text-align:center;margin-top:.5rem;">
      <p style="font-size:.9rem;font-weight:700;color:var(--td-primary);margin:0 0 .3rem;">
        💡 Impact: This pathway transforms learning into income, independence, and long-term resilience for individuals and communities.
      </p>
      <p style="font-size:.8rem;color:#64748b;margin:0;">Train → Support → Launch → Grow → Sustain</p>
    </div>
  </div>
</section>

<!-- SDG Alignment -->
<section class="td-section td-bg-light" style="">
  <div class="td-container" style="text-align:center;max-width:860px;">
    <?php td_section_heading(
      __( 'Aligned with the UN SDGs', 'thedreamers' ),
      __( 'Global Framework', 'thedreamers' ),
      __( 'Our work contributes directly to 10 of the 17 UN Sustainable Development Goals — a reflection of how interconnected our thematic areas are.', 'thedreamers' ),
      true
    ); ?>
    <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:.75rem;margin-top:2rem;">
      <?php
      $sdgs = array(
        array( 'SDG 1',  'No Poverty',                                '#c0392b' ),
        array( 'SDG 2',  'Zero Hunger',                               '#e67e22' ),
        array( 'SDG 4',  'Quality Education',                         '#c0392b' ),
        array( 'SDG 5',  'Gender Equality',                           '#e74c3c' ),
        array( 'SDG 8',  'Decent Work &amp; Economic Growth',         '#8e44ad' ),
        array( 'SDG 9',  'Industry, Innovation &amp; Infrastructure', '#e67e22' ),
        array( 'SDG 10', 'Reduced Inequalities',                      '#dd0073' ),
        array( 'SDG 12', 'Responsible Consumption',                   '#bf8b2e' ),
        array( 'SDG 13', 'Climate Action',                            '#3d9970' ),
        array( 'SDG 16', 'Peace, Justice &amp; Strong Institutions',  '#00689d' ),
      );
      foreach ( $sdgs as $s ) : ?>
        <div style="background:<?php echo esc_attr( $s[2] ); ?>;color:#fff;border-radius:10px;padding:.5rem 1rem;font-size:.82rem;font-weight:700;">
          <strong><?php echo esc_html( $s[0] ); ?></strong> &middot; <?php echo wp_kses_post( $s[1] ); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Powered by Innovation & Technology -->
<section class="td-section" style="background:#fff;border-bottom:1px solid #eee;">
  <div class="td-container" style="max-width:900px;">
    <?php td_section_heading(
      __( 'Powered by Innovation &amp; Technology', 'thedreamers' ),
      __( 'Innovation', 'thedreamers' ),
      __( 'PICKNET integrates cutting-edge tools into every layer of its programming — from beneficiary targeting to learning delivery and impact measurement.', 'thedreamers' ),
      true
    ); ?>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;margin-top:2rem;">
      <div style="background:var(--td-primary);color:#fff;border-radius:16px;padding:2rem;">
        <div style="width:48px;height:48px;background:rgba(255,255,255,.12);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;font-size:1.5rem;">🧠</div>
        <h3 style="font-weight:800;font-size:1.1rem;color:var(--td-secondary);margin:0 0 .75rem;">AI Integration</h3>
        <p style="color:rgba(255,255,255,.78);font-size:.88rem;line-height:1.6;margin:0;">Data-driven targeting, monitoring, and online intelligence — including the GeoAI Nexus framework that brings artificial intelligence into vocational and digital learning.</p>
      </div>
      <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:16px;padding:2rem;">
        <div style="width:48px;height:48px;background:rgba(30,58,95,.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;font-size:1.5rem;">💻</div>
        <h3 style="font-weight:800;font-size:1.1rem;color:var(--td-primary);margin:0 0 .75rem;">Digital Tools</h3>
        <p style="color:#64748b;font-size:.88rem;line-height:1.6;margin:0;">E-learning platforms, digital mentoring, and online behaviour solutions — expanding access to quality training and market connections beyond the settlement&rsquo;s physical boundaries.</p>
      </div>
    </div>
  </div>
</section>

<!-- Partnership Strategy -->
<section class="td-section td-bg-light">
  <div class="td-container" style="max-width:1000px;">
    <?php td_section_heading(
      __( 'Partnership Strategy', 'thedreamers' ),
      __( 'Collaboration', 'thedreamers' ),
      __( 'Stronger partnerships. Greater impact. Lasting change.', 'thedreamers' ),
      true
    ); ?>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.25rem;margin-top:2rem;">
      <?php
      $partner_types = array(
        array( '🏘️', 'Local Partners',                    'Work with local leaders, CBOs, youth groups, and women associations in Rwamwanja.' ),
        array( '🎓', 'Academic &amp; Training Institutions', 'Partner for training quality, research, innovation, and capacity building.' ),
        array( '🏛️', 'Government &amp; Agencies',           'Collaborate with OPM, OXFAM, UNHCR, local government, and line ministries.' ),
        array( '🌐', 'Development Partners',               'Align with donor priorities for joint programming and sustainable impact.' ),
        array( '💼', 'Private Sector',                     'Build partnerships for market access, internships, and resource mobilisation.' ),
        array( '🤝', 'Community Ownership',                'Promote participation, transparency, and shared accountability at every level.' ),
      );
      foreach ( $partner_types as $pt ) : ?>
        <div style="background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.5rem;box-shadow:0 1px 3px rgba(0,0,0,.05);">
          <div style="width:40px;height:40px;background:rgba(30,58,95,.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1rem;font-size:1.2rem;">
            <?php echo $pt[0]; ?>
          </div>
          <h3 style="font-size:.9rem;font-weight:800;color:#1e293b;margin:0 0 .5rem;"><?php echo wp_kses_post( $pt[1] ); ?></h3>
          <p style="font-size:.82rem;color:#64748b;line-height:1.55;margin:0;"><?php echo esc_html( $pt[2] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center;font-weight:700;color:var(--td-secondary);margin-top:2.5rem;">Partner Today, Change Forever.</p>
  </div>
</section>

<!-- Long-term Goal -->
<section class="td-section" style="background:rgba(30,58,95,.04);border-top:1px solid rgba(30,58,95,.08);border-bottom:1px solid rgba(30,58,95,.08);">
  <div class="td-container" style="max-width:900px;">
    <div style="display:flex;gap:2.5rem;flex-wrap:wrap;align-items:center;">
      <div style="flex:0 0 240px;min-width:180px;">
        <p style="color:var(--td-secondary);font-weight:700;font-size:.8rem;letter-spacing:.1em;text-transform:uppercase;margin-bottom:.5rem;">Long-term Goal</p>
        <h2 style="font-size:1.5rem;font-weight:900;color:var(--td-primary);margin:0;line-height:1.25;">Self-Reliant, Resilient Communities</h2>
      </div>
      <div style="flex:1;min-width:240px;">
        <p style="color:#475569;line-height:1.7;margin-bottom:1.25rem;">
          Self-reliant and empowered refugees and host communities in Rwamwanja — where youth and women thrive holistically and successfully, and where climate action ensures a sustainable environment for future generations.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:.6rem;">
          <?php
          $goals = array( 'Reduced Poverty & Unemployment', 'Thriving Youth-Led Enterprises', 'Financially Empowered Households', 'Climate-Conscious Communities', 'Sustainable Local Economies' );
          foreach ( $goals as $g ) : ?>
            <span style="background:rgba(30,58,95,.08);color:var(--td-primary);font-size:.75rem;font-weight:700;padding:.25rem .75rem;border-radius:50px;">✓ <?php echo esc_html( $g ); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="td-section td-bg-primary td-text-white" style="text-align:center;">
  <div class="td-container" style="max-width:700px;">
    <p style="color:var(--td-secondary);font-weight:700;font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;margin-bottom:.75rem;">Join the Movement</p>
    <h2 style="font-size:clamp(1.8rem,4vw,2.5rem);font-weight:900;color:#fff;margin:0 0 1rem;">Be Part of the Impact</h2>
    <p style="color:rgba(255,255,255,.78);font-size:1.05rem;line-height:1.7;margin-bottom:1rem;">
      Every shilling invested in PICKNET's work ripples through a community. Donate, partner, volunteer, or apply — and join a movement that is transforming displacement into opportunity.
    </p>
    <p style="color:var(--td-secondary);font-weight:700;font-size:1.05rem;font-style:italic;margin-bottom:2rem;">
      &ldquo;We are not just implementing projects — we are building systems.&rdquo;
    </p>
    <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
      <a href="https://www.paypal.com/ncp/payment/VWJ73GT2AUH2N" target="_blank" rel="noopener noreferrer" class="td-btn td-btn-secondary td-btn-lg">Donate Now</a>
      <a href="<?php echo esc_url( td_page_url( 'partner' ) ); ?>" class="td-btn td-btn-outline td-btn-lg">Partner With Us</a>
      <a href="<?php echo esc_url( td_page_url( 'volunteer' ) ); ?>" class="td-btn td-btn-outline td-btn-lg">Volunteer</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
