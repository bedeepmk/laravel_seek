{{-- @extends('layouts/client/employer-profile') --}}
@extends('layouts/client/employer2')
@section('title', 'employer-profile')
@section('content')
    <article id="employer-profile-page">
        <section class="section-employer-prtrait">
            <div class="layout-100">
                <img class="my-page-employer-img">
                <div class="employer-account-info">
                    <p class="text-001">norahyoon@gmail.com</p>
                    <p class="text-002">-</p>
                    <p class="text-002">-</p>
                </div>
                <a href="" class="button-create-job">Post a job</a>
            </div>
        </section>
        <section class="section-profile-img-modal displayNone">
            <div class="profile-modal-info">
                <div class="text-001">title</div>
                <div class="modal-close-btn"><b></b><b></b><b></b><b></b></div>
                <form method="post" action="" id="employer-profile-img">
                    <img src="img/default.png" id="img-preview">
                    <div class="btn-select-box">
                        <label class="browse-btn" for="profile-img">Browse</label>
                        <input class="img-input" type="file" id="profile-img" accept=".jpg, .png, .gif, .bmp, .jpeg">
                        <div class="delete-btn img-delete-btn">Delete</div>
                        <div class="save-btn img-save-btn">Save</div>
                    </div>
                </form>
            </div>
        </section>
        <div class="employer-profile-info">
            <section class="profile-info-left">
                <div class="profile-info-box">
                    <p class="text-001">Company name</p>
                    <p class="text-002">Add your company name.</p>
                    <p class="profile-add-btn add-company-name" onclick="addCompanyName()">Add company</p>
                    <form class="insert-company-name displayNone" action="" name="employer-company-name-post" method="POST">
                        <input type="text" name="employer-company-name">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelCompanyName()">cancel</div>
                    </form>
                </div>
                <div class="profile-info-box">
                    <p class="text-001">E-mail</p>
                    <p class="text-002">Add your e-mail.</p>
                    <p class="profile-add-btn add-company-email" onclick="addCompanyEmail()">Add E-mail</p>
                    <form class="insert-company-email displayNone" action="" name="employer-company-email-post" method="POST">
                        <input type="email" name="employer-company-email">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelCompanyEmail()">cancel</div>
                    </form>
                </div>
                <div class="profile-info-box">
                    <p class="text-001">Company summary</p>
                    <p class="text-002">Upload a resume for easy applying and access no matter where you are.</p>
                    <p class="profile-add-btn add-company-summary" onclick="addSummary()">Add Summary</p>
                    <form class="insert-company-summary displayNone" action="" name="employer-company-summary-post" method="POST">
                        <textarea type="tel" name="employer-company-summary"></textarea>
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelSummary()">cancel</div>
                    </form>
                </div>
            </section>
            <section class="profile-info-right">
                <div class="profile-info-box">
                    <p class="text-001">Contact number</p>
                    <p class="text-002">Add your contact number.</p>
                    <p class="profile-add-btn add-contact-number" onclick="addContactNumber()">Add Number</p>
                    <form class="insert-contact-number displayNone" action="" name="employer-contact-number-post" method="POST">
                        <input type="tel" name="employer-contact-number">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelContactNumber()">cancel</div>
                    </form>
                </div>
                <div class="profile-info-box">
                    <p class="text-001">Location</p>
                    <p class="text-002">Add your location.</p>
                    <p class="profile-add-btn add-location" onclick="addLocation()">Add location</p>
                    <form class="insert-location displayNone" action="" name="employer-location-post" method="POST">
                        <input type="tel" name="employer-location">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelLocation()">cancel</div>
                    </form>
                </div>
                <div class="profile-info-box">
                    <p class="text-001">Company logo</p>
                    <p class="text-002">Add your company logo.</p>
                    <p class="profile-add-btn add-logo" onclick="addLogo()">Add Logo</p>
                    <form class="insert-logo displayNone" action="" name="employer-logo-post" method="POST">
                        <label class="browse-btn" for="logo">Browse</label>
                        <input type="file" id="logo" accept=".jpg, .png, .gif">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelLogo()">cancel</div>
                    </form>
                </div>
                <div class="profile-info-box">
                    <p class="text-001">ABN(Australian business number)</p>
                    <p class="text-002">Add your business number.</p>
                    <p class="profile-add-btn add-business-number" onclick="addBusinessNumber()">Add Number</p>
                    <form class="insert-business-number displayNone" action="" name="employer-business-number-post" method="POST">
                        <input type="tel" name="employer-business-number">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelBusinessNumber()">cancel</div>
                    </form>
                </div>
            </section>
        </div>
        <div class="employer-profile-info-mobile">
            <section>
                <a href="10-2.html" class="employer-profile-create-job-btn-mobile">Create a job</a>
                <div class="mobile-profile">Profile</div>
                <div class="mobile-profile-info">
                    <img src="img/test_img.jpg">
                    <div>
                        <p>norahyoon@gmail.com</p>
                        <p>-</p>
                        <p>-</p>    
                    </div>
                </div>
                <p class="text-001 m-company-name-text" onclick="openCompanyName()">Company name</p>
                <div class="profile-info-box m-company-name-wrap">
                    <p class="text-002">Add your company name.</p>
                    <p class="profile-add-btn mobile-add-company-name" onclick="addCompanyNameMobile()">Add company</p>
                    <form class="mobile-insert-company-name displayNone" action="" name="employer-company-name-post" method="POST">
                        <input type="text" name="employer-company-name">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelCompanyNameMobile()">cancel</div>
                    </form>
                </div>
                <p class="text-001 m-company-email-text" onclick="openCompanyEmail()">E-mail</p>
                <div class="profile-info-box m-company-email-wrap">
                    <p class="text-002">Add your e-mail.</p>
                    <p class="profile-add-btn mobile-add-company-email" onclick="addCompanyEmailMobile()">Add E-mail</p>
                    <form class="mobile-insert-company-email displayNone" action="" name="employer-company-email-post" method="POST">
                        <input type="email" name="employer-company-email">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelCompanyEmailMobile()">cancel</div>
                    </form>
                </div>
                <p class="text-001 m-business-number-text" onclick="openBusinessNumber()">Business number</p>
                <div class="profile-info-box m-business-number-wrap displayNone">
                    <p class="text-002">Add your business number.</p>
                    <p class="profile-add-btn mobile-add-business-number" onclick="addBusinessNumberMobile()">Add Number</p>
                    <form class="mobile-insert-business-number displayNone" action="" name="employer-business-number-post" method="POST">
                        <input type="tel" name="employer-business-number">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelBusinessNumberMobile()">cancel</div>
                    </form>
                </div>
                <p class="text-001 m-contact-number-text" onclick="openContactNumber()">Contact number</p>
                <div class="profile-info-box m-contact-number-wrap displayNone">
                    <p class="text-002">Add your contact number.</p>
                    <p class="profile-add-btn mobile-add-contact-number" onclick="addContactNumberMobile()">Add Number</p>
                    <form class="mobile-insert-contact-number displayNone" action="" name="employer-contact-number-post" method="POST">
                        <input type="tel" name="employer-contact-number">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelContactNumberMobile()">cancel</div>
                    </form>
                </div>
                <p class="text-001 m-location-text" onclick="openLocation()">Location</p>
                <div class="profile-info-box m-location-wrap displayNone">
                    <p class="text-002">Add your location.</p>
                    <p class="profile-add-btn mobile-add-location" onclick="addLocationMobile()">Add location</p>
                    <form class="mobile-insert-location displayNone" action="" name="employer-location-post" method="POST">
                        <input type="tel" name="employer-location">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelLocationMobile()">cancel</div>
                    </form>
                </div>
                <p class="text-001 m-company-logo-text" onclick="openCompanyLogo()">Company logo</p>
                <div class="profile-info-box m-company-logo-wrap displayNone">
                    <p class="text-002">Add your company logo.</p>
                    <p class="profile-add-btn mobile-add-logo" onclick="addLogoMobile()">Add Logo</p>
                    <form class="mobile-insert-logo displayNone" action="" name="employer-logo-post" method="POST">
                        <label class="browse-btn" for="logo">Browse</label>
                        <input type="file" id="logo" accept=".jpg, .png, .gif">
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelLogoMobile()">cancel</div>
                    </form>
                </div>
                <p class="text-001 m-company-summary-text" onclick="openCompanySummary()">Company summary</p>
                <div class="profile-info-box m-company-summary-wrap displayNone">
                    <p class="text-002">Upload a resume for easy applying and access no matter where you are.</p>
                    <p class="profile-add-btn mobile-add-company-summary" onclick="addSummaryMobile()">Add Resume</p>
                    <form class="mobile-insert-company-summary displayNone" action="" name="employer-company-summary-post" method="POST">
                        <textarea type="tel" name="employer-company-summary"></textarea>
                        <div class="save-btn" type="submit">save</div>
                        <div class="cancel-btn" onclick="cancelSummaryMobile()">cancel</div>
                    </form>
                </div>
            </section>
        </div>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/employer-profile.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modal.js') }}"></script>
@endsection