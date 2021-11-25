@extends('layouts/client/employer')
@section('title', 'employer-main')
@section('content') 
<article id="employer-main-page">
    <section class="section-recent-job">
        <div class="container-0 layout-100">
            <h4>My recent job ads</h4>
            <a href="/" class="create_ad">Post a job</a>
        </div>
        <table class="layout-100">
            <colgroup>
                <col width = "28%">
                <col width = "13%">
                <col width = "13%">
                <col width = "13%">
                <col width = "13%">
                <col width = "20%">
            </colgroup>
            <thead>
                <tr>
                    <th scope="col">Job</th>
                    <th scope="col">Candidates</th>
                    <th scope="col">Category</th>
                    <th scope="col">Work type</th>
                    <th scope="col">Pay type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="spacer">
                    <td colspan="6"></td>
                </tr>
                <tr class="selected">
                    <td>
                        <p>Designer</p>
                        <p class="text-0">Melbourne VIC 3000</p>
                    </td>
                    <td>5</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><div class="ads_view">View More</div></td>
                </tr>
                <tr class="spacer">
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td>
                        <p>Designer</p>
                        <p class="text-0">Melbourne VIC 3000</p>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><div class="ads_view">View More</div></td>
                </tr>
            </tbody>
        </table>
        <div class="section-recent-mobile-wrap">
            <div class="section-recent-mobile">
                <div class="recent-info-mobile select-recent">
                    <p class="text-001">Job</p>
                    <p class="text-002">Designer Melbourne VIC 3000</p>
                    <ul>
                        <li>
                            <p class="text-003">Candidates</p>
                            <p class="text-004">5</p>
                        </li>
                        <li>
                            <p class="text-003">Category</p>
                            <p class="text-004">-</p>
                        </li>
                        <li>
                            <p class="text-003">Work type</p>
                            <p class="text-004">-</p>
                        </li>
                        <li>
                            <p class="text-003">Pay type</p>
                            <p class="text-004">-</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="" class="add-job-ad">+</a>
                </div>
            </div>
            <div class="section-recent-mobile">
                <div class="recent-info-mobile">
                    <p class="text-001">Job</p>
                    <p class="text-002">Designer Melbourne VIC 3000</p>
                    <ul>
                        <li>
                            <p class="text-003">Candidates</p>
                            <p class="text-004">5</p>
                        </li>
                        <li>
                            <p class="text-003">Category</p>
                            <p class="text-004">-</p>
                        </li>
                        <li>
                            <p class="text-003">Work type</p>
                            <p class="text-004">-</p>
                        </li>
                        <li>
                            <p class="text-003">Pay type</p>
                            <p class="text-004">-</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="" class="add-job-ad">+</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-applicants">
        <div class="back-0"></div>
        <div class="icon-0"></div>
        <div class="back-1"></div>
        <div class="container-0 layout-100">
            <h4>Applicants<span>(5)</span></h1>
            <ul class="container-feed">
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-sdfsdfsdf</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="section-applicants-mobile">
        <h4>Applicants<span>(5)</span></h4>
        <div class="applicants-info-wrap select-applicants">
            <img src="/img/test_img.jpg">
            <div class="applicants-info-box">
                <div class="applicants-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="applicants-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="applicants-info-box">
                <div class="applicants-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="applicants-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="applicants-info-box">
                <div class="applicants-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="applicants-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="applicants-info-box">
                <div class="applicants-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="applicants-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="applicants-info-box">
                <div class="applicants-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="container-7 layout-100">
            <button class="button-alpha stylesheet"></button>
            <button class="button-prev stylesheet"></button>
            <a class="button-pagenate selected">1</a>
            <a class="button-pagenate">2</a>
            <a class="button-pagenate">3</a>
            <button class="button-next stylesheet"></button>
            <button class="button-omega stylesheet"></button>
        </div>
    </section>
    <section class="section-suggestions">
        <div class="container-0 layout-100">
            <h4>My Suggestions<span>(5)</span></h1>
            <ul class="container-feed">
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-sdfsdfsdf</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
                <li>
                    <div class="portrait"></div>
                    <div class="container-2">
                        <p class="text-0">Jeff Sangyub Roh</p>
                        <p class="text-1">Mildura</p>
                        <p class="text-2">
                            <span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                                <span class="star stylesheet"></span>
                            </span>
                        (4.2)</p>
                    </div>
                    <p class="text-3">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ 따라올테면 따라와봐. 메가패스-</p>
                    <a class="button-0">+ view more</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="section-suggestions-mobile">
        <h4>My suggestions<span>(5)</span></h4>
        <div class="suggestions-info-wrap select-suggestions">
            <img src="/img/test_img.jpg">
            <div class="suggestions-info-box">
                <div class="suggestions-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="suggestions-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="suggestions-info-box">
                <div class="suggestions-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="suggestions-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="suggestions-info-box">
                <div class="suggestions-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="suggestions-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="suggestions-info-box">
                <div class="suggestions-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="suggestions-info-wrap">
            <img src="/img/test_img.jpg">
            <div class="suggestions-info-box">
                <div class="suggestions-name-box">
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">
                        <span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </span>
                    (4.2)</p>
                </div>
                <p class="text-003">Mildura</p>
                <p class="text-004">저는 밀두라의 수장입니다. 나를 이길자 아무도 없으셈ㅋ</p>
            </div>
        </div>
        <div class="container-7 layout-100">
            <button class="button-alpha stylesheet"></button>
            <button class="button-prev stylesheet"></button>
            <a class="button-pagenate selected">1</a>
            <a class="button-pagenate">2</a>
            <a class="button-pagenate">3</a>
            <button class="button-next stylesheet"></button>
            <button class="button-omega stylesheet"></button>
        </div>
    </section>
    <section class="section-employer-find-person">
        <h4>Find the best person for your role</h4>
        <ul class="container-0 layout-100">
            <li>
                <div class="portrait"></div>
                <p class="text-0">Create a job ad</p>
                <p class="text-1">1234567890 qwertyuiop asdfghjkl zxcvbnm</p>
            </li>
            <li>
                <div class="portrait"></div>
                <p class="text-0">Choose your ad type</p>
                <p class="text-1">1234567890 qwertyuiop asdfghjkl zxcvbnm</p>
            </li>
            <li>
                <div class="portrait"></div>
                <p class="text-0">Manage your candidates</p>
                <p class="text-1">1234567890 qwertyuiop asdfghjkl zxcvbnm</p>
            </li>
        </ul>
    </section>
</article>
@endsection('content') 
