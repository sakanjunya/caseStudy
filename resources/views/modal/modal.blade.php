<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                            Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                            Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <form class="modal-body mb-1" action="userLogin" method="post">
                            @csrf
                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-envelope prefix"></i>
                                <label data-error="wrong" data-success="right" for="modalLRInput1">Your email</label>
                                <input type="email" id="modalLRInput1" class="form-control form-control-sm validate" name="mail" required>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <label data-error="wrong" data-success="right" for="modalLRInput2">Your password</label>
                                <input type="password" id="modalLRInput2" class="form-control form-control-sm validate" name="password" required>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-info">Log in <i class="fas fa-sign-in"></i></button>
                            </div>
                        </form>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                        <form class="modal-body" action="userInsert" method="post">
                            @csrf
                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-user"></i>
                                <label data-error="wrong" data-success="right" for="modalLRInput3">Your name</label>
                                <input type="text" id="modalLRInput3" class="form-control form-control-sm validate" name="name" required>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-envelope prefix"></i>
                                <label data-error="wrong" data-success="right" for="modalLRInput4">Your email</label>
                                <input type="email" id="modalLRInput4" class="form-control form-control-sm validate" name="mail" required>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-school"></i>
                                <label data-error="wrong" data-success="right" for="modalLRInput7">Your school</label>
                                <div class="form-group">
                                    <select id="select1a" class="form-control" name="school">
                                        <option value="" hidden>選択してください</option>
                                        @foreach($schools as $school)
                                            <option value="{{$school['id']}}">{{$school['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fas fa-lock prefix"></i>
                                <label data-error="wrong" data-success="right" for="modalLRInput5">Your password</label>
                                <input type="password" id="modalLRInput5" class="form-control form-control-sm validate" name="password" required>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fas fa-lock prefix"></i>
                                <label data-error="wrong" data-success="right" for="modalLRInput6">Repeat password</label>
                                <input type="password" id="modalLRInput6" class="form-control form-control-sm validate" name="repassword" required>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                            </div>

                        </form>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
