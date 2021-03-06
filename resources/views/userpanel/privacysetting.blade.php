@extends('layouts.userpanel')

@section('content')

    <!--************************************
				Dashboard Banner Start
		*************************************-->
    <div class="tg-dashboardbanner">
        <h1>Privacy Settings</h1>
        <ol class="tg-breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li class="tg-active">Privacy Settings</li>
        </ol>
    </div>
    <!--************************************
            Dashboard Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Section Start
        *************************************-->
        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <form class="tg-formtheme tg-formdashboard">
                    <fieldset>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                            <div class="tg-dashboardbox tg-privacysetting">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Privacy Settings</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <ul>
                                        <li>
                                            <div class="tg-checkbox">
                                                <input id="tg-privacysettingsone" type="checkbox" name="privacy settings" value="yes" checked>
                                                <label for="tg-privacysettingsone">Make my profile photo public</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-checkbox">
                                                <input id="tg-privacysettingstwo" type="checkbox" name="privacy settings" value="yes" checked>
                                                <label for="tg-privacysettingstwo">I want to receive monthly newsletter</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-checkbox">
                                                <input id="tg-privacysettingsthree" type="checkbox" name="privacy settings" value="no">
                                                <label for="tg-privacysettingsthree">I want to receive e-mail notifications of offers/messages</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-checkbox">
                                                <input id="tg-privacysettingsfour" type="checkbox" name="privacy settings" value="yes" checked>
                                                <label for="tg-privacysettingsfour">I want to receive e-mail alerts about new listings</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tg-checkbox">
                                                <input id="tg-privacysettingsfive" type="checkbox" name="privacy settings" value="no">
                                                <label for="tg-privacysettingsfive">Enable offers/messages option in all my ads Post</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button class="tg-btn" type="buttton">Update</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
                            <div class="tg-dashboardbox tg-deleteaccount">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Delete Account</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <div class="form-group">
                                        <div class="tg-select">
                                            <select>
                                                <option>Select Reason</option>
                                                <option>Select Reason</option>
                                                <option>Select Reason</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" class="form-control" placeholder="Description*"></textarea>
                                    </div>
                                    <button class="tg-btn" type="button" data-toggle="modal" data-target="#tg-modaldeleteconfirmation">Delete</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
        <!--************************************
                Section End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

    @endsection