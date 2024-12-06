<?php
include_once('../inc/header.php');
include_once('../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Horizontal</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Horizontal</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <!-- Input Username -->
                        <div class="form-group row">
                            <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input id="inputUsername3" type="text" class="form-control">
                            </div>
                        </div>

                        <!-- Input email -->
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input id="inputEmail3" type="email" class="form-control">
                            </div>
                        </div>

                        <!-- Input Password -->
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input id="inputPassword3" type="password" class="form-control">
                            </div>
                        </div>

                        <!-- input file -->
                        <div class="form-group row">
                            <label for="inputFile3" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="inputFile3">
                            </div>
                        </div>

                        <!-- Input Radios -->
                        <div class="form-group row">
                            <div class="col-form-label col-sm-2 pt-0">Radios</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input id="gridRadios1" class="form-check-input" type="radio"
                                        name="gridRadios" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        First radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="gridRadios2" class="form-check-input" type="radio"
                                        name="gridRadios" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Second radio
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input id="gridRadios3" class="form-check-input" type="radio"
                                        name="gridRadios" value="option3" disabled>
                                    <label class="form-check-label" for="gridRadios3">
                                        Third disabled radio
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Input Checkbox -->
                        <div class="form-group row">
                            <div class="col-form-label col-sm-2 pt-0">Checkbox</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input id="gridCheck1" class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="gridCheck1">
                                        Checkbox 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="gridCheck2" class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="gridCheck2">
                                        Checkbox 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input id="gridCheck3" class="form-check-input" type="checkbox">
                                    <label class="form-check-label" for="gridCheck3">
                                        Checkbox 3
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Input Text Area -->
                        <div class="form-group row">
                            <div class="col-form-label col-sm-2 pt-0">Text Area</div>
                            <div class="col-sm-10">
                                <textarea id="exampleFormControlTextarea1" class="form-control"
                                    rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Input Select menu -->
                        <div class="form-group row">
                            <div class="col-form-label col-sm-2 pt-0">Select Menu</div>
                            <div class="col-sm-10">
                                <select class="custom-select">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <!-- Input Multiple Select -->
                        <div class="form-group row">
                            <div class="col-form-label col-sm-2 pt-0"> Multiple Select</div>
                            <div class="col-sm-10">
                                <select class="custom-select" multiple>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <!-- Input Addons -->
                        <div class="form-group row">
                            <div class="col-form-label col-sm-2 pt-0"> Input Addons</div>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span id="basic-addon1" class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../inc/footer.php'); ?>