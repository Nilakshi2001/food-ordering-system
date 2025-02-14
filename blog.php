<?php include('includes/header.php'); ?>

<div class="container mt-5">
    <article class="blog-post">
        <h2>Corn Flakes</h2>
        <img src="images/cornflakes.jpg" class="img-fluid mb-3" alt="Corn Flakes">
        <div class="content-preview">
            <p>Corn flakes, or cornflakes, are a breakfast cereal made from toasting flakes of corn...</p>
            <button class="btn btn-link read-more">Read More</button>
        </div>
        <div class="full-content d-none">
            <!-- Full article content here -->
            <section class="related-articles mt-5">
                <h4>Related Articles</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/bran-flakes.jpg" class="card-img-top" alt="Bran Flakes">
                            <div class="card-body">
                                <h5>Bran Flakes</h5>
                                <button class="btn btn-link read-more">Read More</button>
                            </div>
                        </div>
                    </div>
                    <!-- Add more related articles -->
                </div>
            </section>
        </div>
    </article>
</div>

<script>
document.querySelectorAll('.read-more').forEach(button => {
    button.addEventListener('click', (e) => {
        const article = e.target.closest('.blog-post');
        article.querySelector('.content-preview').classList.add('d-none');
        article.querySelector('.full-content').classList.remove('d-none');
    });
});
</script>

<?php include('includes/footer.php'); ?>