<div class="testimonial__card bg-white rounded-3 p-3">
    <svg width="87" height="75" viewBox="0 0 87 75" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 37.4763V74.4229H37.4465V37.4763H12.8156C12.8156 23.8951 23.8653 12.8454 37.4465 12.8454V0.529785C17.073 0.529785 0.5 17.1028 0.5 37.4763Z" fill="#F7F7F7"/>
        <path d="M86.7084 12.8454V0.529785C66.3349 0.529785 49.7619 17.1028 49.7619 37.4763V74.4229H86.7084V37.4763H62.0775C62.0775 23.8951 73.1272 12.8454 86.7084 12.8454Z" fill="#F7F7F7"/>
    </svg>
    <p>
        <?php echo $description; ?>
    </p>
    <div class="d-flex gap-3">
        <figure class="mb-0 thumbnail rounded-circle overflow-hidden">
            <img src="<?php echo $image; ?>" alt="<?php echo $author; ?>" class="img-fluid rounded-circle object-fit-cover" width="48" height="48">
        </figure>
        <div class="col">
            <p class="mb-0 lead-sm fw-semibold text-dark"><?php echo $author; ?></p>
            <p class="mb-0 fs-15"><?php echo $designation; ?></p>
        </div>
    </div>
</div>