@extends('layouts/client/master')
@section('title', 'employer-my-account')
@section('content')
    <article id="my-account-page-employer">
        <section class="section-employer-prtrait">
            <div class="layout-100">
                <div class="my-page-employer-img"></div>
                <div class="employer-account-info">
                    <p class="text-001">norahyoon@gmail.com</p>
                    <p class="text-002">-</p>
                    <p class="text-002">-</p>
                </div>
                <a href="" class="button-create-job">create job</a>
            </div>
        </section>
        <section class="section-my-account-employer">
            <div class="employer-my-account">
                <div class="employer-my-account-info-box-wrap">
                    <div class="text-title">My account</div>
                    <div class="employer-my-account-profile">
                        <p class="text-001">User Name</p>
                        <p class="text-002">User Email</p>
                    </div>
                    <div class="employer-my-account-info-box employer-account-password">
                        <div class="text-003 change-password">Change Password<span class="purple-arrow arrow-01"></span></div>
                        <div class="employer-account-password-inner displayNone">
                            <p class="text-004">Current password</p>
                            <input type="password">
                            <p class="text-004">Enter new password</p>
                            <input type="password">
                            <p class="text-004">Confirm password</p>
                            <input type="password">
                            <button class="account-pw-reset-btn">Reset password</button>
                            <button class="cancel-btn pw-cancel">Cancel</button>
                        </div>
                    </div>
                    <div class="employer-my-account-info-box employer-account-email">
                        <div class="text-003 change-email">Change Email<span class="purple-arrow arrow-02"></span></div>
                        <div class="employer-account-email-inner displayNone">
                            <p class="text-004">Email address</p>
                            <input type="email">
                            <p class="text-004">Confirm email address</p>
                            <input type="email">
                            <p class="text-004">Password</p>
                            <input type="password">
                            <button class="save-btn">Save</button>
                            <button class="cancel-btn email-cancel">Cancel</button>
                        </div>
                    </div>
                    <div class="employer-my-account-info-box employer-account-delete">
                        <div class="text-003 delete-account">Delete account<span class="purple-arrow arrow-03"></span></div>
                        <div class="employer-account-delete-inner displayNone">
                            <p class="text-004">Password</p>
                            <input type="password">
                            <button class="delete-btn">Delete</button>
                            <button class="cancel-btn delete-cancel">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="employer-account-status">
                <div class="status-content">
                    <div class="text-001">My advantage</div>
                    <div class="text-002">Current membership</div>
                    <div class="billing-history-btn">billing history</div>
                    <div class="current-membership">Premium</div>
                    <div class="text-003">The next payment date is November 14, 2021</div>
                    <div class="remain-box">
                        <div class="text-004">Remain active job ad</div>
                        <div class="text-005">23</div>
                    </div>
                    <div class="remain-box">
                        <div class="text-004">Remain Resume view</div>
                        <div class="text-005">14</div>
                    </div>
                    <div class="remain-box">
                        <div class="text-004">Remain Bump-up ticket</div>
                        <div class="text-005">8</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-board section-invoice-history-modal displayNone">
            <div class="invoice-history">
                <div class="text-001">Invoice history</div>
                <div class="modal-close-btn"><b></b><b></b><b></b><b></b></div>
                <div class="table">
                    <ul class="row header">
                        <li>Invoices</li>
                        <li>Payment details</li>
                        <li>Payment amount</li>
                    </ul>
                    <ul class="row item">
                        <li><span class="col">Invoices</span>aaa</li>
                        <li><span class="col">Payment details</span>bbb</li>
                        <li><span class="col">Payment amount</span>ccc</li>
                    </ul>
                    <div class="noting-payment">This account has no invoice history.</div>
                </div>
            </div>
        </section>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/my-account-employer.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection