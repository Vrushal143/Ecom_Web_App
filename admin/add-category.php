<?php
include('../middleware/adminMiddleware.php');
include('includes/heder.php');
?>
<!----Add Category Php code --------->

<div class="container">
    <div class="row">
        <div class="col-md-12">
           

            <!-------------ADD Category start  ----------------------->
            <div class="card mt-4 ">
                <div class="card header ">
                    <h4 class="text-center mt-3 text-uppercase font-weight-bold ">Add Category</h4>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                        <label for="">Name</label>
                                        <input type="text" name="name" placeholder="Enter Category Name" class="form-control">
                                    
                                </div>
                                <div class="col-md-6">
                                   
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" placeholder="Enter Slug" class="form-control">
                                   
                                </div>
                                <div class="col-md-12">
                                   
                                        <label for="">Description</label>
                                        <textarea rows="3" name="description" placeholder="Enter description" class="form-control"></textarea>
                                    
                                </div>
                                <div class="col-md-12">
                                    
                                        <label for="">Upload Image</label>
                                        <input type="file" name="image" class="form-control">
                                   
                                </div>
                                <div class="col-md-12">
                                   
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" placeholder="Enter meta title" class="form-control">
                                    
                                </div>
                                <div class="col-md-12">
                                   
                                        <label for="">Meta Description</label>
                                        <textarea row="3" name="meta_description" placeholder="Enter meta description" class="form-control"></textarea>
                                   
                                </div>
                                <div class="col-md-12">
                                    
                                        <label for="">Meta Keyword</label>
                                        <textarea row="3" name="meta_keywords" placeholder="Enter meta keywords" class="form-control"></textarea>
                                    
                                </div>
                                <div class="col-md-6">
                                    
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status">
                                    
                                </div>
                                <div class="col-md-6">
                                    
                                        <label for="">Popular</label>
                                        <input type="checkbox" name="popular">
                                    
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="add-category_btn">Save</button>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

            <!-------------ADD Category end  ----------------------->

<?php include('includes/footer.php'); ?>