<!-- Modal_Signup -->

<!-- Modal -->
<div class="modal fade" id="_signupmodal" tabindex="-1" aria-labelledby="_signupmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="_signupmodalLabel">Signup iDiscuss</h5>
                
            </div>
            <form action="/Forum/partials/_handlesignups.php" method="POST">
                <div class="modal-body">
                    <!-- Form inserting here -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Email</label>
                        <input type="email" class="form-control" id="signupemail" name="signupemail"
                            aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="cnf_password" name="cnf_password">
                    </div>

                    <button type="submit" class="btn btn-success">Signup</button>
                </div>
            </form>

        </div>
    </div>
</div>