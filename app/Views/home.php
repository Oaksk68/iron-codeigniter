<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<section class="hero" aria-labelledby="hero-title">
    <div class="hero-ad">
        <img class="hero-image mb-4" src="<?= base_url('images/iron_pdf_logo.svg') ?>"
            alt="IronPDF logo">
        <p class="hero-desc text-light">Building on the success of IronPDF for .NET</p>
        <h1 id="hero-title" class="hero-program-name my-3">Beta Software Program <br />
            <span class="">IronPDF for C++</span>
        </h1>
        <p class="coming-soon fw-light fs-7 mb-5">Coming soon</p>

        <img src="<?= base_url('images/PDF_Illustration.svg') ?>" class="pdf-illu" alt="" aria-hidden="true" />
        <img src="<?= base_url('images/c_2plus_icon.svg') ?>" class="c_2plus_icon" alt="" aria-hidden="true" />
        <img src="<?= base_url('images/CPP.jpg') ?>" class="cpp" alt="" aria-hidden="true" />
    </div>
</section>

<section class="email-signup" aria-labelledby="email-signup-title">
    <div class="">
        <h1 id="email-signup-title" class="heading">Be one of the first</h1>
        <p class="sub-heading">Sign up NOW to get early access!</p>
    </div>
    <div class="signupform">
        <?= view('components/signup_form') ?>
    </div>

    <div class="info">
        <div class="coming-soon">
            <p class="coming-soon-text fw-bold fs-7"># Coming soon</p>
            <p class="fw-light fs-6">IronPDF Beta Program also coming soon for <strong class="fw-medium">Python | Node.JS | Java</strong>
            </p>
        </div>
    </div>
</section>

<section class="about-ironPDF" aria-labelledby="about-title">
    <div class="custom-container py-5">
        <h1 id="about-title" class="heading text-center my-5">
            <span class="position-relative">IronPDF for C++</span>
        </h1>
        <div class="d-flex flex-md-row flex-column gap-1 gap-md-4 text-nowrap">
            <?php foreach ($pageData['features'] as $index => $feature): ?>
                <div class="feature-item d-flex">
                    <span class="icon"><?= esc($feature['icon']) ?></span>
                    <p><?= esc($feature['text']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="custom-container py-5">
        <div class="text-center text-lg-start">
            <p class="mb-4">
                The new <strong>IronPDF library for C++</strong> will enhance the C++ developer’s tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.
            </p>
            <p>IronPDF for C++ will help developers create C++ applications that can do all of these PDF processing tasks and more, with speed, precision, control, and excellence.</p>
        </div>
    </div>
    <div class="gradient-rectangle"></div>
    <div class="normal-rectangle"></div>
</section>

<section class="reason" aria-labelledby="reason-title">
    <div class="custom-container d-flex flex-lg-row flex-column align-items-center">
        <img src="<?= base_url('images/htmlToPdf.svg') ?>" class="image-fluid" alt="svg of html to pdf" />
        <div class="text-center text-lg-start">
            <h1 id="reason-title" class="heading">Why make a C++ PDF Library</h1>
            <p class="mb-4">C++ is one of the most popular, oldest, and important programming languages in use, being the language of choice in low-level systems and network programming and other domains where performance is critical.</p>
            <p>The release of IronPDF for C++ will aid developers in building performant applications that can carry out PDF-related processing tasks</p>
        </div>
    </div>
</section>

<section class="early-access" aria-labelledby="early-access-title">
    <div class="custom-container position-relative py-5">
        <h1 id="early-access-title" class="heading text-center text-lg-start">Early Access to <span>C++ PDF Library</span></h1>
        <p class="py-4 text-center text-lg-start">Joining the early access program will allow you to collaborate closely with our engineering team. You will be playing a key role in the development process as you share your early experiences using the C++ PDF library before its official launch. Your continual feedback after we release the library will be immensely helpful as we release new features and improve on existing features.</p>

        <div class="rounded-cards-wrapper d-flex flex-column flex-xl-row gap-2 gap-md-4.5">
            <div class="rounded-cards d-flex align-items-center gap-4.5">
                <p class="badge released-badge fw-bold fs-7"># Released</p>
                <div>
                    <img src="<?= base_url('images/IRONLogo.svg') ?>" alt="ironpdf_text_logo" />
                    <img src="<?= base_url('images/forJava.svg') ?>" alt="forJava_svg" />
                </div>
            </div>
            <div>
                <div class="rounded-cards d-flex align-items-center gap-4.5">
                    <p class="badge coming-soon-badge fw-bold fs-7"># Coming soon</p>
                    <div>
                        <img src="<?= base_url('images/IRONLogo.svg') ?>" alt="ironpdf_text_logo" />
                        <img src="<?= base_url('images/forPython.svg') ?>" alt="forPython_svg" />
                    </div>
                </div>
            </div>
            <div>
                <div class="rounded-cards d-flex align-items-center gap-4.5">
                    <p class="badge coming-soon-badge fw-bold fs-7"># Coming soon</p>
                    <div>
                        <img src="<?= base_url('images/IRONLogo.svg') ?>" alt="ironpdf_text_logo" />
                        <img src="<?= base_url('images/forNodeJS.svg') ?>" alt="forNodeJS_svg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="gradient-rectangle start-0"></div>
    </div>
</section>

<section class="sign-up-beta-program" aria-labelledby="beta-signup-title">
    <div class="custom-container d-flex flex-column align-items-center py-5">
        <h1 id="beta-signup-title" class="heading2 get-license-text text-center text-md-start">Sign up to our <span class="">Beta Program</span></h1>
        <div class="form-wrapper">
            <?= view('components/signup_form') ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
