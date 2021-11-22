<div class="row">
                <div class="card">
                    <!-- <div class="alert alert-primary mt-3 text-center" role="alert">
                        Uploaded video will not be appear!
                    </div> -->
                    <div class="card-body">
                        <h5 class="card-title">Upload Photo</h5>
                        <div class="alert alert-success hidden graphic_add" role="alert" id="graphic_add">
                              <b> Graphic added successfully.</b>
                        </div>
                        <form action="action.php" method="post" enctype="multipart/form-data" class="graphic_form"
                            id="graphic_form">
                            <div class="row">
                                <div class="col-lg-8 mb-3">
                                    <input class="form-control graphic" type="file" id="formFile" alt="Image/Video not found" name="graphic_name">
                                    <span id="graphic_err" style="color:red;"></span>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <button type="submit" name="add_graphic" class="btn btn-primary w-50">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>