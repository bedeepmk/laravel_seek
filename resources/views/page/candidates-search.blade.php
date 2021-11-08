@extends('layouts/client/employer')
@section('title', 'candidates-search')
@section('content')
    <article class="employer-candidate-search-page">
        <section class="section-candidate-search-filter">
            <div class="text-001">Filter & Refine</div>
            <div class="filter-info-box">
                <ul>
                    <li>
                        <label class="text-002">Category</label>
                        <input id="filter-category" type="text" readonly="readonly" placeholder="Category" onclick="cateClick()">
                        <div class="filter-category-list displayNone">
                            <ul class="filter-category-box">
                                <li value="1">Category1</li>
                                <li value="2">Category2</li>
                                <li value="3">Category3</li>
                                <li value="4">Category4</li>
                                <li value="5">Category5</li>
                                <li value="6">Category6</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Location</label>
                        <input id="filter-location" type="text" readonly="readonly" placeholder="VIC">
                        <div class="filter-location-list displayNone">
                            <ul>
                                <li value="location1">location1</li>
                                <li value="location2">location2</li>
                                <li value="location3">location3</li>
                                <li value="location4">location4</li>
                                <li value="location5">location5</li>
                                <li value="location6">location6</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Work type</label>
                        <input id="filter-work-type" type="text" readonly="readonly" placeholder="VIC">
                        <div class="filter-work-type-list displayNone">
                            <ul>
                                <li value="location1">location1</li>
                                <li value="location2">location2</li>
                                <li value="location3">location3</li>
                                <li value="location4">location4</li>
                                <li value="location5">location5</li>
                                <li value="location6">location6</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Right to work</label>
                        <input id="filter-right-to-work" type="text" readonly="readonly" placeholder="VIC">
                        <div class="filter-right-to-work-list displayNone">
                            <ul>
                                <li value="Yes">Yes</li>
                                <li value="No">No</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Availability</label>
                        <input id="filter-availability" type="text" readonly="readonly" placeholder="">
                        <div class="filter-availability-list displayNone">
                            <ul>
                                <li value="location1">location1</li>
                                <li value="location2">location2</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Salary</label>
                        <input id="filter-salary" type="text" readonly="readonly" placeholder="">
                        <div class="filter-salary-list displayNone">
                            <ul>
                                <li value="location1">location1</li>
                                <li value="location2">location2</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Languages</label>
                        <input id="filter-language" type="text" readonly="readonly" placeholder="">
                        <div class="filter-language-list displayNone">
                            <ul>
                                <li value="English">English</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Education</label>
                        <input id="filter-education" type="text" readonly="readonly" placeholder="">
                        <div class="filter-education-list displayNone">
                            <ul>
                                <li value="univ">univ</li>
                                <li value="location2">location2</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Resume</label>
                        <input id="filter-resume" type="text" readonly="readonly" placeholder="">
                        <div class="filter-resume-list displayNone">
                            <ul>
                                <li value="Yes">Yes</li>
                                <li value="No">No</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <label class="text-002">Career history</label>
                        <input id="filter-career-history" type="text" readonly="readonly" placeholder="">
                        <div class="filter-career-history-list displayNone">
                            <ul>
                                <li value="location1">location1</li>
                                <li value="location2">location2</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="filter-view-box">
                <button class="more-filter-btn" onclick="filter()">more filter</button>
            </div>
        </section>
        <section class="section-candidate-search">
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
            <div class="candidate-box-list">
                <div class="candidate-info-01">
                    <img src="img/test_img.jpg">
                    <div class="candidate-name-box">
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                    </div>
                </div>
                <div class="candidate-info-02">
                    <ul>
                        <li>
                            <div class="text-002">Category</div>
                            <div class="text-003">Category</div>
                        </li>
                        <li>
                            <div class="text-002">Location</div>
                            <div class="text-003">VIC</div>
                        </li>
                        <li>
                            <div class="text-002">Work type</div>
                            <div class="text-003">Full time</div>
                        </li>
                        <li>
                            <div class="text-002">Right to work</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Availability</div>
                            <div class="text-003">2 weeks</div>
                        </li>
                        <li>
                            <div class="text-002">Salary</div>
                            <div class="text-003">$40 - $60</div>
                        </li>
                        <li>
                            <div class="text-002">Languages</div>
                            <div class="text-003">English</div>
                        </li>
                        <li>
                            <div class="text-002">Education</div>
                            <div class="text-003">univ.</div>
                        </li>
                        <li>
                            <div class="text-002">Resume</div>
                            <div class="text-003">Yes</div>
                        </li>
                        <li>
                            <div class="text-002">Career history</div>
                            <div class="text-003">Yes</div>
                        </li>
                    </ul>
                </div>
                <div class="candidate-info-03">
                    <button>info.</button>
                </div>
            </div>
        </section>
        <section class="section-pagination">
            <div class="pagination">
                <ul>
                    <li><a href="" class="prev-btn"><<</a></li>
                    <li><a href="" class="pagination-num active">1</a></li>
                    <li><a href="" class="pagination-num">2</a></li>
                    <li><a href="" class="pagination-num">3</a></li>
                    <li><a href="" class="next-btn">>></a></li>
                </ul>
            </div>
        </section>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/candidate-search-filter.js') }}"></script>
@endsection