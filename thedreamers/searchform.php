<form role="search" method="get" class="td-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div style="display:flex;max-width:500px;margin:0 auto;border:1px solid var(--td-border);border-radius:var(--td-radius-full);overflow:hidden;background:#fff;">
    <label class="screen-reader-text" for="td-search-field"><?php esc_html_e( 'Search for:', 'thedreamers' ); ?></label>
    <input
      type="search"
      id="td-search-field"
      name="s"
      value="<?php echo esc_attr( get_search_query() ); ?>"
      placeholder="<?php esc_attr_e( 'Search PICKNET…', 'thedreamers' ); ?>"
      style="flex:1;border:none;padding:.75rem 1.25rem;font-family:var(--td-font-sans);font-size:.95rem;outline:none;"
    >
    <button type="submit" style="background:var(--td-primary);color:#fff;border:none;padding:.75rem 1.5rem;font-family:var(--td-font-sans);font-weight:700;cursor:pointer;font-size:.9rem;">
      <?php esc_html_e( 'Search', 'thedreamers' ); ?>
    </button>
  </div>
</form>
