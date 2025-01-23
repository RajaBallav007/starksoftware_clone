<div class="news__card card card-body">
    <a href="#" class="d-block rounded-3 overflow-hidden">
        <img 
            src="<?php echo $image; ?>" 
            alt="<?php echo $title; ?>"
            class="img-fluid w-100"
        >
    </a>
    <div class="pt-3">
        <p class="mb-2 fw-semibold small text-muted">04 Dec, 2024</p>
        <h3 class="fs-5 fw-semibold title">
            <a href="<?php echo $slug; ?>">
                <?php echo $title; ?>
            </a>
        </h3>
        <p class="fs-15 desc"><?php echo $description; ?></p>
        <a href="<?php echo $slug; ?>" class="d-inline-flex align-items-center gap-2 link fw-bold text-uppercase">
            <span>Read More</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                <path fill="#000" d="m220.24 132.24l-72 72a6 6 0 0 1-8.48-8.48L201.51 134H40a6 6 0 0 1 0-12h161.51l-61.75-61.76a6 6 0 0 1 8.48-8.48l72 72a6 6 0 0 1 0 8.48" />
            </svg>
        </a>
    </div>
</div>