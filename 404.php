<?php get_header(); ?>

<div class="not-found-container">
    <h1 class="not-found-title">Oops! Page not found.</h1>
    <p class="not-found-text">
        We couldn’t find the page you were looking for. It might have been moved or doesn't exist anymore.
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary not-found-button">Go to Homepage</a>
</div>

<?php get_footer(); ?>
