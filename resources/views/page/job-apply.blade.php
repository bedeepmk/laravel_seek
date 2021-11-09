@extends('layouts/client/master')
@section('title', 'job-apply')
@section('content')       
    <article id="job-apply-page">
        <section class="section-job-apply-info">
            <div class="apply-user-info-box">
                <div class="apply-user-info">
                    <img src="img/test_img.jpg">
                    <div>
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <p class="text-002">Mildura</p>
                        <p class="text-002">+82 10 8999 9384</p>
                        <p class="text-002">norahyoon@gmail.com</p>
                    </div>
                </div>
                <div>
                    <div class="text-003">SEEKCRUIT<span></span></div>
                    <div class="text-002">+82 10 8999 9384 www.seekcruit.com<br>
                        8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                    </div>
                </div>
            </div>
            <div class="apply-job-info-box">
                <div class="job-info-wrap">
                    <div>
                        <p class="text-003">$25- 34.99 per hour</p>
                    </div>
                    <div>
                        <p class="text-004">Job Type:</p>
                        <p class="text-005">Casual</p>
                    </div>
                    <div>
                        <p class="text-004">Salary Type:</p>
                        <p class="text-005">Hourly Rate</p>
                    </div>
                    <div>
                        <p class="text-004">Salary Detail:</p>
                        <p class="text-005 last-text-005">Per hour + Overtime</p>
                    </div>
                </div>
                <div class="category-icon"></div>
                <p class="text-006">Production Labourer/Belt Picker</p>
                <div class="layer-mask">
                    <p class="text-008">Immediate start available<br>
                        Training and development<br>
                        Overtime available<br>
                        <br>
                        What you will be responsible for<br>
                        You will have the ability to work in an outdoor environment which includes all weather element.<br>
                        Ideally you will have experience working on a ‘picking belt’ and can handle fast paced labouring duties.
                    </p>
                </div>
                <a href="" class="button-more stylesheet">More</a>
            </div>
        </section>
        <section class="my-resume-box">
            <div class="left-info">
                <div class="left-info-box info-summery">
                    <p class="text-001">Personal Summary<span class="star-img-p"></span></p>
                    <ul>
                        <li>
                            <p class="text-002">
                                Add a personal summary to your profile as a way to introduce who you are.
                            </p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addSummery()">Edit</a>
                </div>
                <div class="left-info-box add-summery displayNone">
                    <p class="text-001">Add Personal Summary<span class="star-img-p"></span></p>
                    <p>
                        <form method="post" name="post-summery" action="" accept-charset="utf-8">
                            <textarea id="summery" name="summery"></textarea>
                            <div class="save-btn" type="submit" onClick="postSummery()">Save</div>
                            <a class="cancel-btn" onClick="closeSummery()">Cancel</a>
                        </form>
                    </p>
                </div>
                <div class="left-info-box info-history">
                    <p class="text-001">Career history</p>
                    <ul>
                        <li>
                            <p class="text-002">Add your career history</p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addHistory()">Edit</a>
                </div>
                <div class="left-info-box add-role displayNone">
                    <p class="text-001">Add role</p>
                    <p>
                        <form method="POST" name="post-role" action="" accept-charset="utf-8">
                            <p class="text-003">Job title</p>
                            <input type="text" name="job-title" class="job-title">
                            <p class="text-003">Company name</p>
                            <input type="text" name="company" class="company-name">
                            <div class="role-info-box">
                                <p class="text-003">Started</p>
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="start-month" placeholder="Month">
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="start-year" placeholder="Year">
                                <br><br>
                                <p class="text-003">Ended</p>
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="end-month" placeholder="Month">
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="end-year" placeholder="Year">
                                <div class="checkbox-wrap">
                                    <input id="still-in-role" name="still-in-role" type="checkbox"><label for="still-in-role">Still in role</label>
                                </div>
                            </div>
                            <p class="text-003">Description<span class="text-gray">(recommended)</span></p>
                            <textarea class="role-description"></textarea>
                            <div class="save-btn" type="submit" onClick="postHistory()">Save</div>
                            <a class="cancel-btn" onClick="closeHistory()">Cancel</a>
                        </form>
                    </p>
                </div>
                <div class="left-info-box info-skills">
                    <p class="text-001">Skills</p>
                    <ul>
                        <li>
                            <p class="text-002">Let employers know how valuable you can be to them.</p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addSkills()">Edit</a>
                </div>
                <div class="left-info-box add-skills displayNone">
                    <p class="text-001">Add Skills</p>
                    <p class="text-004">Help employers find you by showcasing all of your skills.</p>
                    <p>
                        <form method="POST" name="post-skills" action="" accept-charset="utf-8">
                            <p class="text-003">Add new skill</p>
                            <div class="add-skill-box">
                                <input type="text" placeholder="e.g. Team bilding">
                                <span class="add-skill-btn">Add</span>
                            </div>
                            <p class="text-gray">Click add or press enter</p>
                            <p class="text-003">Added skills</p>
                            <p class="text-gray">No skills have been added</p>
                            <div class="save-btn" type="submit" onClick="postSkills()">Save</div>
                            <a class="cancel-btn" onClick="closeSkills()">Cancel</a>
                        </form>
                    </p>
                </div>
                <div class="left-info-box info-resume">
                    <p class="text-001">Resume</p>
                    <ul>
                        <li>
                            <p class="text-002">
                                Upload a resume for easy applying and access no matter where you are.
                            </p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addResume()">Edit</a>
                </div>
                <div class="left-info-box add-resume displayNone">
                    <p class="text-001">Resume</p>
                    <p class="text-002">Add up to 10 resumes. Accepted file type: Microsoft Word(.doc or .docx), Adobe PDF(.pdf) or text file(.txt or .rtf). 2MB file size limit.</p>
                    <p>
                        <form method="POST" id="post-resume" name="post-resume" action="" enctype="multipart/form-data">
                            <div id="drop-zone" class="drop-zone">
                                <p>img area</p>
                                <p id="fileDragDesc">To add a resume, drag and drop here or simply browse for a file.</p>
                                <label class="browse-btn" for="resume">Browse</label>
                                <input type="file" id="resume" multiple="multiple" accept=".doc, .docx, .pdf, .txt, .rtf">
                                <table id="fileListTable" width="100%" border="0px">
                                    <tbody id="fileTableTbody">
                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="save-btn" type="submit" onClick="postResume()">Save</div>
                            <a class="cancel-btn" onClick="closeResume()">Cancel</a>
                        </form>
                    </p>
                </div>
            </div>
            <div class="middle-info">
                <div class="middle-info-box info-work">
                    <p class="text-001">Right to work<span class="star-img-p"></span></p>
                    <ul>
                        <li>
                            <p class="text-002">Add your visa information.</p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addWork()">Edit</a>
                </div>
                <div class="middle-info-box add-work displayNone">
                    <p class="text-001">Add Right to work<span class="star-img-p"></span></p>
                    <p>
                    <form method="post" name="post-work" action="" accept-charset="utf-8">
                        <p class="text-003">Visa Type</p>
                        <span class="icon stylesheet gray-arrow"></span>
                        <select class="visa-type">
                            <option value="">test1</option>
                            <option value="">test2</option>
                            <option value="">test3</option>
                            <option value="">test4</option>
                        </select>
                        <p class="text-003">Expiration Date</p>
                        <div class="expiration-date">
                            <input class="check-date" name="date" placeholder="DD">
                            <span class="icon stylesheet gray-arrow"></span>
                            <input class="check-month" name="month" placeholder="MM">
                            <span class="icon stylesheet gray-arrow"></span>
                            <input class="check-year" name="year" placeholder="YYYY">
                            <span class="calendar-btn">calendar img</span>
                        </div>	
                        <div class="save-btn" type="submit" onClick="postWork()">Save</div>
                        <a class="cancel-btn" onClick="closeWork()">Cancel</a>
                    </form>
                    </p>
                </div>
                <div class="middle-info-box info-education">
                    <p class="text-001">Education</p>
                    <ul>
                        <li>
                            <p class="text-002">Tell employers about your education.</p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addEducation()">Edit</a>
                </div>
                <div class="middle-info-box add-education displayNone">
                    <p class="text-001">Add Education</p>
                    <p>
                        <form method="POST" name="post-education" action="" accept-charset="utf-8">
                            <p class="text-003">Institution</p>
                            <input type="text" name="institution" class="institution">
                            <p class="text-003">Course or qualification</p>
                            <input type="text" name="qualification" class="qualification">
                            <div class="education-info-box">
                                <div class="checkbox-wrap">
                                    <input id="qualification-complete" name="qualification-complete" type="checkbox"><label for="qualification-complete">Qualification complete</label>
                                </div>
                                <div class="blank-box"></div>
                                <p class="text-003">Expected finish (optional)</p>
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="option-month" placeholder="Month">
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="option-year" placeholder="Year">
                                <div class="checkbox-wrap">
                                    <input id="education-still-in-role" name="education-still-in-role" type="checkbox"><label for="education-still-in-role">Still in role</label>
                                </div>
                            </div>
                            <p class="text-003">Course highlights<span class="text-gray">(optional)</span></p>
                            <textarea class="course-highlight"></textarea>
                            <div class="save-btn" type="submit" onClick="postEducation()">Save</div>
                            <a class="cancel-btn" onClick="closeEducation()">Cancel</a>
                        </form>
                    </p>
                </div>
                <div class="middle-info-box info-languages">
                    <p class="text-001">Languages</p>
                    <ul>
                        <li>
                            <p class="text-002">Add languages to appeal to more companies and employers.</p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addLanguages()">Edit</a>
                </div>
                <div class="middle-info-box add-languages displayNone">
                    <p class="text-001">Add Languages</p>
                    <p>
                        <form method="POST" name="post-language" action="" accept-charset="utf-8">
                            <p class="text-003">Language</p>
                            <input type="text">
                            <div class="save-btn" type="submit" onClick="postLanguages()">Save</div>
                            <a class="cancel-btn" onClick="closeLanguages()">Cancel</a>
                        </form>
                    </p>
                </div>
                <div class="middle-info-box info-licence">
                    <p class="text-001">Licences</p>
                    <ul>
                        <li>
                            <p class="text-002">
                                Showcase your professional credentials. Add your relevant licences, certificates,
                                memberships and accreditations here.
                            </p>
                        </li>
                    </ul>
                    <a class="edit-btn" onClick="addLicence()">Edit</a>
                </div>
                <div class="middle-info-box add-licence displayNone">
                    <p class="text-001">Licences</p>
                    <p class="text-004">Showcase your licences, certificates, memberships and accreditations.</p>
                    <p>
                        <form method="POST" name="post-licence" action="" accept-charset="utf-8">
                            <p class="text-003">Licence name</p>
                            <input type="text" id="licence-name" name="licence-name" placeholder="e.g. Drivers Licence">
                            <p class="text-003">Issuing organisation<span class="text-gray">(optional)</span></p>
                            <input type="text" id="organisation" name="organisation">
                            <div class="licence-info-box">
                                <p class="text-003">Issue date<span class="text-gray">(optional)</span></p>
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="issue-month" placeholder="Month">
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="issue-year" placeholder="Year">
                                <br><br>
                                <p class="text-003 text-005">Expiry date<span class="text-gray">(recommended)</span></p>
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="recommend-month" placeholder="Month">
                                <span class="icon stylesheet gray-arrow"></span>
                                <input type="text" class="recommend-year" placeholder="Year">
                                <div class="checkbox-wrap">
                                    <input id="expiry-still-in-role" name="expiry-still-in-role" type="checkbox"><label for="expiry-still-in-role">No expiry</label>
                                </div>
                            </div>
                            <p class="text-003 text-005">Description<span class="text-gray">(recommended)</span></p>
                            <textarea class="licence-description"></textarea>
                            <div class="save-btn" type="submit" onClick="postLicence()">Save</div>
                            <a class="cancel-btn" onClick="closeLicence()">Cancel</a>
                        </form>
                    </p>
                </div>
            </div>
            <div class="right-info">
                <p class="text-001">Video resume</p>
                <div class="apply-video-resume-box">
                    <div class="video-resume-list-box">
                        <input type="radio" id="video-resume-1" name="apply-video-resume">
                        <label for="video-resume-1"><img src="img/test_img.jpg">strawberry picker</label>
                    </div>
                    <div class="video-resume-list-box">
                        <input type="radio" id="video-resume-2" name="apply-video-resume">
                        <label for="video-resume-2"><img src="img/test_img.jpg">strawberry picker</label>
                    </div>
                    <div class="video-resume-list-box">
                        <input type="radio" id="video-resume-3" name="apply-video-resume">
                        <label for="video-resume-3"><img src="img/test_img.jpg">strawberry picker</label>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-job-apply-btn">
            <button>Apply</button>
        </section>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/apply-page.js') }}"></script>
    <script src="{{ asset('js/drag-and-drop.js') }}"></script>
@endsection