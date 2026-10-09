
<div class="jSliderContainer jScontact">
 <!-- <section class="blogs-slider-section">
    <div class="blogs-slider-header">

        <div class="blogs-slider-title">
            <h2 class="h2 text-heading-dark" style="color:white !important;">Get in touch</h2>
            <div class="underline overlayshadow"></div>
            <p class="ftw">
                From finding the right property to exploring investment opportunities, we’re here to guide you every step of the way.
            </p> 
        </div>
    </div>
</section> -->
<section class="contact-section">

    <div class="contact-watermark">contact</div>

    <div class="contact-container">

        <!-- LEFT SIDE -->
        <div class="contact-info">

            <h2>Corporate Office</h2>

            <p class="company-name">
                BST Developers India Pvt Ltd
            </p>

            <p>
                308, 3rd Floor,<br>
                ILD Trade Center,<br>
                D1 Block, Sector 47,<br>
                Gurugram, Haryana 122018
            </p>

            <!-- <div class="contact-details">

                <a href="tel:8929303303">
                    <span class="contact-icon">☎</span>
                    +91 89293 03303
                </a>

                <a href="mailto:info@bstdevelopers.com">
                    <span class="contact-icon">✉</span>
                    info@bstdevelopers.com
                </a>

            </div> -->


            <div class="sales-enquiry">

                <h2>Sales Enquiries</h2>

                <h4>GURUGRAM</h4>

                <a href="tel:8929303303">
                    <span class="contact-icon">☎</span>
                    +91 89293 03303
                </a>

                <a href="mailto:info@bstdevelopers.com">
                    <span class="contact-icon">✉</span>
                    info@bstdevelopers.com
                </a>

            </div>

        </div>


        <!-- RIGHT SIDE -->
        <div class="contact-form-wrapper">

            <h1>
                GET <span>IN TOUCH</span>
            </h1>

            <p class="form-intro">
                Have questions about a property or investment opportunity?<br>
                Our team is here to help you find the right path forward.
            </p>


            <form class="contact-form">
<!-- 
                <div class="form-row">

                    <div class="form-group">
                        <input  type="text" name="name" placeholder="Name *" required>
                    </div>

                    <div class="form-group phone-group">

                        <div class="country-code">
                            🇮🇳 +91
                        </div>

                        <input
                            type="tel"
                            name="phone"
                            placeholder="Phone *"
                            required
                        >

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">
                        <input
                            type="email"
                            name="email"
                            placeholder="Email *"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <select name="project">
                            <option value="">Select Project</option>
                            <option value="project-1">Project 1</option>
                            <option value="project-2">Project 2</option>
                            <option value="project-3">Project 3</option>
                        </select>
                    </div>

                </div>


                <div class="form-group comments-group">
                    <textarea
                        name="comments"
                        placeholder="Comments (if any)"
                    ></textarea>
                </div> -->
 <div class="form-left">

                    <div class="form-group">
                        <input type="text" placeholder="Name *">
                    </div>

                   <div class="form-group phone-group">

                        <div class="country-code">
                            🇮🇳 +91
                        </div>

                        <input
                            type="tel"
                            name="phone"
                            placeholder="Phone *"
                            required
                        >

                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Email *">
                    </div>

                    <div class="form-group">
                        <select>
                            <option value="">Select Project</option>
                            <option>Project One</option>
                            <option>Project Two</option>
                            <option>Project Three</option>
                            <option>Project Four</option>
                        </select>
                    </div>

                </div>
                        <!-- Right Comments Column -->
                <div class="form-right">

                    <div class="form-group comments-box">
                        <textarea placeholder="Comments (if any)"></textarea>
                    </div>

                 

                </div>


                <div class="submit-wrapper">
                    <button type="submit">
                        SUBMIT
                    </button>
                </div>

            </form>

        </div>

    </div>

</section>
</div>
<Style>
    /* ================================
   CONTACT SECTION
================================ */

.contact-section {
    position: relative;
    overflow: hidden;
    padding: 80px 7%;
    min-height: 720px;
}


/* Background watermark */

.contact-watermark {
    position: absolute;
    top: 15px;
    right: 10px;

    font-size: 150px;
    font-weight: 700;

    color: rgb(99 253 140 / 7%);

    line-height: 1;
    pointer-events: none;
    user-select: none;
}


/* Main container */

.contact-container {
    position: relative;
    z-index: 2;

    max-width: 1400px;
    margin: 0 auto;

    display: grid;
    grid-template-columns: 35% 65%;
}


/* ================================
   LEFT INFORMATION
================================ */

.contact-info {
    padding: 50px 70px 40px 0;

    border-right: 1px solid #d7ab3e;
}

.contact-info h2 {
    margin: 0 0 18px;

    font-size: 28px;
    font-weight: 600;

    color: #e1e3e6;
}

.contact-info p {
    margin: 0;

    font-size: 20px;
    line-height: 1.65;

    color: #eeeeee;
}

.company-name {
    margin-bottom: 2px !important;
}


.contact-details {
    margin-top: 25px;

    display: flex;
    flex-direction: column;
    gap: 10px;
}

.contact-details a,
.sales-enquiry a {
    color: #eeeeee;
    text-decoration: none;

    font-size: 15px;

    transition: 0.3s ease;
}

.contact-details a:hover,
.sales-enquiry a:hover {
    color: #c6a477;
}


.contact-icon {
    display: inline-block;
    width: 22px;

    color: #ececec;
}


/* Sales */

.sales-enquiry {
    margin-top: 60px;
}

.sales-enquiry h2 {
    margin-bottom: 22px;
}

.sales-enquiry h4 {
    margin: 0 0 15px;

    font-size: 20px;
    letter-spacing: 5px;

    color: #444;
}

.sales-enquiry a {
    display: block;
    margin-bottom: 12px;
}


/* ================================
   FORM SIDE
================================ */

.contact-form-wrapper {
    padding: 0 0 0 55px;
}


/* Heading */

.contact-form-wrapper h1 {
    margin: 0 0 35px;

    font-size: 54px;
    font-weight: 500;

    letter-spacing: 7px;

    color: #34373a;
}

.contact-form-wrapper h1 span {
    color: #c6a477;
}


/* Intro */

.form-intro {
    max-width: 700px;

    margin: -15px 0 30px;

    font-size: 20px;
    line-height: 1.7;

    color: #fff;
}


/* Form */

.contact-form {
    position: relative;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 18px 12px;
}


/* Rows */

.form-row {
    display: contents;
}


/* Input */

.form-group {
    width: 100%;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    box-sizing: border-box;

    border: none;
    outline: none;

    color: #444444;

    font-family: inherit;
    font-size: 15px;

    transition: 0.3s ease;
}


.form-group input,
.form-group select {
    height: 62px;

    padding: 0 24px;

    border-radius: 30px;
}


.form-group textarea {
    min-height: 320px;

    padding: 24px;

    border-radius: 25px;

    resize: none;
}


.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    background: #eeeeee;
}


/* Placeholder */

.form-group input::placeholder,
.form-group textarea::placeholder {
    color: #777;
}


/* Select */

.form-group select {
    appearance: none;

    cursor: pointer;
}


/* Phone */

.phone-group {
    display: flex;

    background: #f4f4f4;

    border-radius: 30px;

    overflow: hidden;
}

.phone-group input {
    background: transparent;

    border-radius: 0;

    flex: 1;
}

.country-code {
    display: flex;
    align-items: center;

    padding: 0 18px;

    color: #555;

    font-size: 14px;

    border-right: 1px solid #ddd;
}


/* Comments */

.comments-group {
    grid-column: 2;
    grid-row: 2 / span 2;
}


/* Submit */

.submit-wrapper {
    grid-column: 2;

    display: flex;
    justify-content: flex-end;

    margin-top: 35px;
}

.submit-wrapper button {
    min-width: 210px;

    height: 58px;

    padding: 0 40px;

    border: none;
    border-radius: 35px;

    background: #c6a477;
    color: #ffffff;

    font-size: 15px;
    font-weight: 600;

    letter-spacing: 2px;

    cursor: pointer;

    transition: 0.3s ease;
}

.submit-wrapper button:hover {
    background: #b28e60;

    transform: translateY(-2px);
}


/* ================================
   TABLET
================================ */

@media (max-width: 991px) {

    .contact-section {
        padding: 70px 5%;
    }

    .contact-container {
        grid-template-columns: 1fr;
    }

    .contact-info {
        padding: 0 0 50px;

        border-right: none;
        border-bottom: 1px solid #eeeeee;
    }

    .contact-form-wrapper {
        padding: 50px 0 0;
    }

    .contact-form-wrapper h1 {
        font-size: 45px;
    }

}


/* ================================
   MOBILE
================================ */

@media (max-width: 767px) {

    .contact-section {
        padding: 55px 20px;
    }

    .contact-watermark {
        font-size: 80px;
        top: 30px;
        right: -20px;
    }

    .contact-info {
        padding-bottom: 40px;
    }

    .contact-info h2 {
        font-size: 23px;
    }

    .contact-form-wrapper {
        padding-top: 40px;
    }

    .contact-form-wrapper h1 {
        font-size: 34px;
        letter-spacing: 4px;

        margin-bottom: 25px;
    }

    .form-intro {
        font-size: 14px;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-group input,
    .form-group select {
        height: 56px;
    }

    .form-group textarea {
        min-height: 180px;
    }

    .comments-group {
        order: 5;
    }

    .submit-wrapper {
        order: 6;

        justify-content: center;

        margin-top: 15px;
    }

    .submit-wrapper button {
        width: 100%;
    }

}
.jScontact {
    background-image: url(assets/images/media/design/4.captions/image-md-1@md.webp);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 20px;
}

.contact-form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-left,
.form-right {
    width: 100%;
}
</Style>