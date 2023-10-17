<!-- Modal_Login -->

<!-- Modal -->
<div class="modal fade" id="_loginmodal" tabindex="-1" aria-labelledby="_loginmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="_loginmodalLabel">Login iDiscuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/Forum/partials/_handlelogin.php" method="POST">
                <div class="modal-body">
                    <!-- form format -->
                    <div class="container">

                        <div class="form-group">
                            <label for="exampleInputEmail1"><b>User Name</b></label>
                            <input type="email" class="form-control" id="lg_email" name="lg_email"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><b>Password</b></label>
                            <input type="password" class="form-control" id="lg_password" name="lg_password">
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>