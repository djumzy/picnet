<?php
/**
 * Template Name: FAQ
 *
 * @package TheDreamers
 */
get_header(); ?>

<section class="td-page-hero">
  <div class="td-page-hero-overlay" style="background:var(--td-primary);position:absolute;inset:0;opacity:.97;"></div>
  <div class="td-container">
    <div class="td-page-hero-content">
      <span class="td-page-hero-eyebrow"><?php esc_html_e( 'Got Questions?', 'thedreamers' ); ?></span>
      <h1><?php esc_html_e( 'Frequently Asked Questions', 'thedreamers' ); ?></h1>
      <p><?php esc_html_e( 'Everything you need to know about PICKNET — our programs, how to get involved, and how your support makes a difference.', 'thedreamers' ); ?></p>
    </div>
  </div>
</section>

<section class="td-section td-bg-white">
  <div class="td-container td-container-md">
    <?php
    $categories = array(
      array(
        'heading' => __( 'About PICKNET', 'thedreamers' ),
        'faqs' => array(
          array( 'q' => __( 'What is PICKNET?', 'thedreamers' ),                     'a' => __( 'PICKNET (Poverty, Injustice Consultancy and Kids Network) is a refugee-led community development organization based in Rwamwanja Refugee Settlement, Uganda. Founded in 2018 by Boniface Ahishakiye and Kobusinge Joselyne, PICKNET equips youth and women with vocational skills, digital training, entrepreneurship support, and financial literacy tools.', 'thedreamers' ) ),
          array( 'q' => __( 'Where does PICKNET operate?', 'thedreamers' ),          'a' => __( 'PICKNET primarily operates in Rwamwanja Refugee Settlement and surrounding host communities in Kamwenge District, western Uganda. We serve both refugee and host community populations.', 'thedreamers' ) ),
          array( 'q' => __( 'Is PICKNET officially registered?', 'thedreamers' ),    'a' => __( 'Yes. PICKNET is registered with Uganda Registration Services Bureau (URSB) since June 21, 2018. We operate with full legal compliance and maintain transparent governance structures.', 'thedreamers' ) ),
        ),
      ),
      array(
        'heading' => __( 'Programs & Eligibility', 'thedreamers' ),
        'faqs' => array(
          array( 'q' => __( 'Who can apply to PICKNET programs?', 'thedreamers' ),   'a' => __( 'PICKNET programs are open to youth aged 15–35 in Rwamwanja and surrounding communities. We specifically prioritize women, persons with disabilities, and the most economically vulnerable members of the community.', 'thedreamers' ) ),
          array( 'q' => __( 'What is the CYSED Program?', 'thedreamers' ),           'a' => __( 'CYSED (Community Youth Skills and Enterprise Development) is our flagship 12-week program offering 12 vocational and digital tracks including tailoring, ICT, agribusiness, creative arts, and more. Graduates receive certificates and business mentorship support.', 'thedreamers' ) ),
          array( 'q' => __( 'What are VELAs?', 'thedreamers' ),                      'a' => __( 'Village Enterprise Learning Associations (VELAs) are community savings groups that PICKNET establishes to promote financial inclusion. Members save together, access credit, and receive enterprise training to launch small businesses.', 'thedreamers' ) ),
        ),
      ),
      array(
        'heading' => __( 'Donating & Supporting', 'thedreamers' ),
        'faqs' => array(
          array( 'q' => __( 'How can I donate to PICKNET?', 'thedreamers' ),         'a' => __( 'You can donate securely via PayPal from anywhere in the world. Visit our Contact & Donate page and click "Donate Now via PayPal." No PayPal account required — you can pay with any credit or debit card.', 'thedreamers' ) ),
          array( 'q' => __( 'How much of my donation reaches programs?', 'thedreamers' ), 'a' => __( 'At least 90% of all donations go directly to our programs and beneficiaries. Administrative overhead is kept minimal through volunteer networks and lean operations.', 'thedreamers' ) ),
        ),
      ),
      array(
        'heading' => __( 'Partnerships', 'thedreamers' ),
        'faqs' => array(
          array( 'q' => __( 'How can my organization partner with PICKNET?', 'thedreamers' ), 'a' => __( 'We welcome implementation partnerships, funding partnerships, and advocacy collaborations. Complete our online Partnership Inquiry Form or email us at info@picknet.org. We respond within 3 business days.', 'thedreamers' ) ),
          array( 'q' => __( 'Does PICKNET accept volunteers?', 'thedreamers' ),       'a' => __( 'Yes! We welcome remote and in-person volunteers with skills in training, ICT, agriculture, health, communications, and more. Visit our Volunteer page to apply.', 'thedreamers' ) ),
        ),
      ),
    );
    foreach ( $categories as $cat ) : ?>
      <div style="margin-bottom:3rem;">
        <h2 style="font-size:1.25rem;color:var(--td-primary);border-bottom:2px solid var(--td-border);padding-bottom:.6rem;margin-bottom:1.25rem;">
          <?php echo esc_html( $cat['heading'] ); ?>
        </h2>
        <div style="display:flex;flex-direction:column;gap:.6rem;">
          <?php foreach ( $cat['faqs'] as $faq ) : ?>
            <div class="td-faq-item">
              <button class="td-faq-question">
                <span><?php echo esc_html( $faq['q'] ); ?></span>
                <span class="td-faq-chevron" aria-hidden="true">&#8964;</span>
              </button>
              <div class="td-faq-answer"><?php echo esc_html( $faq['a'] ); ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- Still have questions -->
    <div style="background:var(--td-light);border-radius:1.25rem;padding:2.5rem;text-align:center;margin-top:2rem;">
      <h3><?php esc_html_e( 'Still Have Questions?', 'thedreamers' ); ?></h3>
      <p style="color:var(--td-muted);margin-bottom:1.5rem;"><?php esc_html_e( 'We\'re happy to help. Reach out and we\'ll respond as quickly as possible.', 'thedreamers' ); ?></p>
      <a href="<?php echo esc_url( td_page_url( 'contact' ) ); ?>" class="td-btn td-btn-primary td-btn-lg">
        <?php esc_html_e( 'Contact Us', 'thedreamers' ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer();
