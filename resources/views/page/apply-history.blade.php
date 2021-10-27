@extends('layouts/client/master')
@section('title', 'apply-history')
@section('content')
    <article class="my-history">
        <section class="section-seeker-prtrait">
            <div class="layout-100">
                <div class="my-page-seeker-img"></div>
                <div class="seeker-account-info">
                    <p class="text-001">norahyoon@gmail.com</p>
                    <p class="text-002">-</p>
                    <p class="text-002">-</p>
                </div>
            </div>
        </section>
        <div class="my-history-box-wrap">
            <div class="my-history-title-box">
                <p class="my-history-title saved-title select-title" onclick="clickSaved()">Saved</p>
                <p class="my-history-title applied-title" onclick="clickApplied()">Applied</p>
                <p class="my-history-title offered-title" onclick="clickOffered()">Offered jobs</p>
            </div>
            <section class="my-history-section-saved">
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="history-pagination">
                    <ul>
                        <li><a href="" class="prev-btn"><<</a></li>
                        <li><a href="" class="pagination-num active">1</a></li>
                        <li><a href="" class="pagination-num">2</a></li>
                        <li><a href="" class="pagination-num">3</a></li>
                        <li><a href="" class="next-btn">>></a></li>
                    </ul>
                </div>
            </section>
            <section class="my-history-section-applied displayNone">
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <div class="job-apply-btn" onClick=""><span></span>Apply Now</div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="history-pagination">
                    <ul>
                        <li><a href="" class="prev-btn"><<</a></li>
                        <li><a href="" class="pagination-num active">1</a></li>
                        <li><a href="" class="pagination-num">2</a></li>
                        <li><a href="" class="pagination-num">3</a></li>
                        <li><a href="" class="next-btn">>></a></li>
                    </ul>
                </div>
            </section>
            <section class="my-history-section-offered displayNone">
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <div class="job-link-btn-box">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <div class="job-link-btn-box">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <div class="job-link-btn-box">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <div class="job-link-btn-box">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <div class="job-link-btn-box">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="my-history-box">
                    <div class="job-title-box">
                        <div class="category-icon"></div>
                        <div class="text-001">Production Labourer/Belt Picker</div>
                    </div>
                    <div class="job-link-btn-box">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                    </div>
                    <p class="text-002 ellipsis">
                        What you will be responsible for You will have the ability to work in an outdoor environment which includes all weather element. Ideally you will have experience working on a 'picking belt' and can handle fast paced labouring duties.
                    </p>
                    <div class="history-job-info">
                        <p class="text-003">$25- 34.99 per hour</p>
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
                            <p class="text-005">Per hour + Overtime</p>
                        </div>
                    </div>
                    <p class="text-003">SEEKCRUIT<span class="icon-0 stylesheet"></span></p>
                    <div class="contact-info-box">
                        <div class="text-006">
                            +82 10 8999 9384 www.seekcruit.com<br>
                            8F Mindlre Bldh., Olympic-ro 8gil, Songpa-gu, Seoul, KR
                        </div>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                    <div class="history-btn-box-mobile">
                        <a class="job-more-info-btn" href="">More info.</a>
                        <a class="job-accept-btn" href="">Accept</a>
                        <div class="job-remove-btn"><span></span>Remove Job</div>
                    </div>
                </div>
                <div class="history-pagination">
                    <ul>
                        <li><a href="" class="prev-btn"><<</a></li>
                        <li><a href="" class="pagination-num active">1</a></li>
                        <li><a href="" class="pagination-num">2</a></li>
                        <li><a href="" class="pagination-num">3</a></li>
                        <li><a href="" class="next-btn">>></a></li>
                    </ul>
                </div>
            </section>
        </div>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/my-history.js') }}"></script>
@endsection