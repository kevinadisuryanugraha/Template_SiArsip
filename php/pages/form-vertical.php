<?php
include_once('../inc/header.php');
include_once('../inc/sidebar.php');

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Vertical</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Vertical</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form>

                        <!-- Input Nama Lengkap -->
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Lengkap</label>
                            <input id="exampleInputName" type="text" class="form-control">
                        </div>

                        <!-- Input Email -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input id="exampleInputEmail1" type="email" class="form-control"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>

                        <!-- Input Password -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input id="exampleInputPassword1" type="password" class="form-control">
                        </div>

                        <!-- Input File -->
                        <div class="form-group">
                            <label for="exampleInputFile1">File</label>
                            <input id="exampleInputFile1" type="file" class="form-control-file">
                        </div>

                        <!-- input checkbox -->
                        <div class="form-group form-check mb-0">
                            <input id="exampleCheck1" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck1">Checkbox 1</label>
                        </div>
                        <div class="form-group form-check mb-0">
                            <input id="exampleCheck2" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck2">Checkbox 2</label>
                        </div>
                        <div class="form-group form-check">
                            <input id="exampleCheck3" type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="exampleCheck3">Checkbox 3</label>
                        </div>


                        <!-- input radio -->
                        <div class="form-group form-check mb-0">
                            <input id="exampleRadios1" class="form-check-input" type="radio"
                                name="exampleRadios" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-group form-check mb-0">
                            <input id="exampleRadios2" class="form-check-input" type="radio"
                                name="exampleRadios" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Second default radio
                            </label>
                        </div>
                        <div class="form-group form-check">
                            <input id="exampleRadios3" class="form-check-input" type="radio"
                                name="exampleRadios" value="option3" disabled>
                            <label class="form-check-label" for="exampleRadios3">
                                Disabled radio
                            </label>
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea id="exampleFormControlTextarea1" class="form-control" rows="3"></textarea>
                        </div>

                        <!-- input select Menu -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select id="exampleFormControlSelect1" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <!-- input Multiple Select -->
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Example multiple select</label>
                            <select id="exampleFormControlSelect2" class="form-control" multiple>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <!-- Input addons -->
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input id="inlineFormInputGroup" type="text" class="form-control"
                                placeholder="Username">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('../inc/footer.php'); ?>