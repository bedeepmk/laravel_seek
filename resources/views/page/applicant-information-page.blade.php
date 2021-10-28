@extends('layouts/client/employer')
@section('title', 'applicant-information')
@section('content')
    <article>
        <section class="section-candidate-profile">
            <div class="candidate-profile-box">
                <div class="candidate-profile-info personal-profile-box">
                    <img src="img/test_img.jpg">
                    <div>
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <p class="text-002">Mildura</p>
                        <p class="text-002">+82 10 8999 9384</p>
                        <p class="text-002">norahyoon@gmail.com</p>
                    </div>
                </div>
                <div class="candidate-profile-info profile-info-summary">
                    <p class="text-003">Personal Summary</p>
                    <div class="text-004 inner-box">A highly motivates and hardworking individual, who has recently completed their A-Levels, achieving excellent grades in both Maths and Science. Seeking an apprenticeship in the engineering industry to build upon a keen scientific interest and start a career as a maintenance engineer. Eventual career goal is to become a fully-qualified and experienced maintenance or electrical engineer, with the longer-term aspiration of moving into project management. Eventual career goal is to become a fully-qualified and experienced maintenance or electrical engineer, with the longer-term aspiration of moving into project management.</div>
                </div>
                <div class="candidate-profile-info profile-career-history">
                    <p class="text-003">Career history</p>
                    <div class="inner-text-wrap">
                        <p class="text-005">Designer</p>
                        <p class="text-005">soop plants solution</p>
                        <p class="text-004">Jan 2017 - Present(4 years 7months)</p>
                    </div>
                    <div>
                        <p class="text-005">Designer</p>
                        <p class="text-005">soop plants solution</p>
                        <p class="text-004">Jan 2017 - Present(4 years 7months)</p>
                    </div>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Resume</p>
                    <ul class="resume-download-box">
                        <li>
                            <p class="text-004"><span>img</span>test_img.jpg</p>
                            <a href="img/test_img.jpg" download="test_img.jpg">download</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="candidate-profile-box">
                <div class="candidate-profile-info">
                    <p class="text-003">Education</p>
                    <p class="text-004">Korea national university of arts - design 2017</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Skills</p>
                    <p class="text-004">Farm Equipment</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Languages</p>
                    <p class="text-004">Korean, English</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Licences</p>
                    <p class="text-004">Driver</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Salary expectation</p>
                    <p class="text-004">$50 - 70 per hours</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Preferred location</p>
                    <p class="text-004">Mildura</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Classification of interest</p>
                    <p class="text-004">Design & Industrial Design</p>
                </div>
            </div>
            <div class="candidate-profile-box">
                <div class="candidate-profile-info profile-video-box">
                    <p class="text-003">Video Resume</p>
                    <img>
                </div>
                <div class="candidate-profile-info profile-strength-box">
                    <p class="text-003">Profile Strength</p>
                    <div>
                        <div class="star-wrap">
                            <span class="star stylesheet"></span>
                            <span class="star stylesheet"></span>
                        </div>
                        <ul id="progress">
                            <li id="rank-1">
                                <span class="square type1"></span>
                            </li>
                            <li id="rank-2">
                                <span class="square type2"></span>
                                <span class="square type1"></span>
                            </li>
                            <li id="rank-3">
                                <span class="square type2"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Availability</p>
                    <p class="text-004">2 weeks ago</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Preferred work types</p>
                    <p class="text-004">Full-time</p>
                </div>
                <div class="candidate-profile-info">
                    <p class="text-003">Right to work</p>
                    <p class="text-004">Yes</p>
                </div>
            </div>
        </section>
        <section class="section-candidate-profile-btn-wrap">
            <button>Suggest a job</button>
            <button href="">Video interview</button>
        </section>
    </article>
@endsection