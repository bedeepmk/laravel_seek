@extends('layouts/client/master')
@section('title', 'seeker-my-account')
@section('content')
    <article id="my-account-page">
        <section class="section-my-account">
            <div class="my-account-info-box-wrap">
                <div class="text-title">My account</div>
                <div class="my-account-profile">
                    <p class="text-001">User Name</p>
                    <p class="text-002">User Email</p>
                </div>
                <div class="my-account-info-box account-password">
                    <div class="text-003 change-password">Change Password<span class="purple-arrow arrow-01"></span></div>
                    <div class="account-password-inner displayNone">
                        <p class="text-004">Current password</p>
                        <input type="password">
                        <p class="text-004">Enter new password</p>
                        <input type="password">
                        <p class="text-004">Confirm password</p>
                        <input type="password">
                        <button class="account-pw-reset-btn">Save</button>
                        <button class="cancel-btn pw-cancel">Cancel</button>
                    </div>
                </div>
                <div class="my-account-info-box account-email">
                    <div class="text-003 change-email">Change Email<span class="purple-arrow arrow-02"></span></div>
                    <div class="account-email-inner displayNone">
                        <p class="text-004">Email address</p>
                        <input type="email">
                        <p class="text-004">Confirm email address</p>
                        <input type="email">
                        <p class="text-004">Password</p>
                        <input type="password">
                        <p class="text-005">Email is used sign in to Farmnjobs and to be contacted by emplpoyers.</p>
                        <button class="save-btn">Save</button>
                        <button class="cancel-btn email-cancel">Cancel</button>
                    </div>
                </div>
                <div class="my-account-info-box account-delete">
                    <div class="text-003 delete-account">Delete Account<span class="purple-arrow arrow-03"></span></div>
                    <div class="account-delete-inner displayNone">
                        <p class="text-004">Password</p>
                        <input type="password">
                        <button class="delete-btn">Delete</button>
                        <button class="cancel-btn delete-cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/my-account-seeker.js') }}"></script>
@endsection