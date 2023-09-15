    <!-- Modal -->
    <div class="modal fade" id="registerModal" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Register</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" require>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"
                            require>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Phone:</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter phone" name="phone"
                            require>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Message:</label>
                        <textarea class="form-control" name="message" id="message" cols="30"
                            rows="5">Hi, I would like to know more about the gymnastics program.</textarea>
                    </div>
                    <div class="checkbox">
                        <!-- <label><input type="checkbox" name="remember"> Call me</label> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="submitRegisterForm()">Submit</button>
                </div>
            </div>
        </div>
    </div>