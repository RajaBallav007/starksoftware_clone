<section class="py-5 position-relative" style="background-color: #f4fafe;">
    <div class="contact__rounded__bg bg-primary rounded-pill position-absolute"></div>
    <div class="container py-md-4 py-lg-5 position-relative z-3">
        <div class="row g-4 gx-lg-5 align-items-center justify-content-between">
            <div class="col-lg-5">
                <h2 class="fs-1 fw-bold text-dark mb-4 lh-sm">
                    <span class="d-block fs-3 ">Talk to us and</span>
                    get your project moving
                </h2>
                <ul class="list-unstyled ps-0 mb-0 fs-5 fw-medium check__list d-flex flex-column gap-2">
                    <li>We will respond to you within 24hours.</li>
                    <li>You'll be talking to product and tech experts (no account managers).</li>
                </ul>
                <div class="position-relative rounded-3 overflow-hidden mt-4 col-md-9 col-lg-12 mx-auto">
                    <img 
                        src="assets/images/common/contact-thumbnail.webp" 
                        alt="Contact Us" width="512" height="311" loading="lazy"
                        class="img-fluid w-100 rounded-3"
                    >
                    <button 
                        type="button"
                         data-bs-toggle="modal" data-bs-target="#videoModal"
                    class="btn btn-play rounded-circle d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#fff" d="M21.409 9.353a2.998 2.998 0 0 1 0 5.294L8.597 21.614C6.534 22.737 4 21.277 4 18.968V5.033c0-2.31 2.534-3.769 4.597-2.648z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="col-xxl-5 col-lg-6">
                <div class="bg-white p-4 rounded-4" style="box-shadow: 0px 0px 20px 0px rgba(0, 0, 0,0.1);">
                    <form action="submit-contact.php" method="POST" id="contactForm" class="row g-3 contact__form">
                        <div class="col-12">
                            <label for="name" class="d-block fw-medium mb-1">Name</label>
                            <input type="text" name="name" class="form-control fw-medium" id="name">
                            <small class="text-danger error" id="name_error"></small>
                        </div>
                        <div class="col-12">
                            <label for="email" class="d-block fw-medium mb-1">Email</label>
                            <input type="text" name="email" class="form-control fw-medium" id="email">
                            <small class="text-danger error" id="email_error"></small>
                        </div>
                        <div class="col-12">
                            <label for="phone" class="d-block fw-medium mb-1">Budget Size</label>
                            <input type="hidden" name="phoneDialCode" id="phoneDialCode" value="971">
                            <input type="text" name="phone" class="form-control fw-medium" id="phone" >
                            <small class="text-danger error" id="phone_error"></small>
                        </div> 
                        <div class="col-12">
                            <label for="message" class="d-block fw-medium mb-1">Description</label>
                            <textarea name="message" id="message" cols="30" rows="4" class="form-control h-auto"></textarea> 
                        </div>
                        <div class="col-12">
                            <label for="email" class="d-block fw-medium mb-1">How did you hear about us?</label>
                            <input type="text" name="email" class="form-control fw-medium" id="email">
                            <small class="text-danger error" id="email_error"></small>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary fw-semibold mt-4 text-uppercase">
                                <span class="spiner d-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="white" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                                </span>
                                <span>Submit</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" fill-rule="evenodd" d="M14.816 4.457a.75.75 0 0 1 1.06.026l6.667 7a.75.75 0 0 1 0 1.034l-6.667 7a.75.75 0 1 1-1.086-1.034l5.46-5.733H2a.75.75 0 0 1 0-1.5h18.25l-5.46-5.733a.75.75 0 0 1 .026-1.06" clip-rule="evenodd"/></svg>
                            </button>
                        </div>
                    </form>

                </div>
            </div><!--.col-->
        </div><!--.row-->
    </div><!--.container-->
</section>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width:1000px;">
        <div class="modal-content"> 
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close position-absolute bg-white p-2 z-3 opacity-100 top-0 end-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="ratio ratio-16x9">
                    <iframe width="1600" height="598" src="https://www.youtube.com/embed/u31qwQUeGuM" title="Placeholder video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div> 
        </div>
    </div>
</div>
