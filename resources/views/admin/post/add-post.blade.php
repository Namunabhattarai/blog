  @csrf
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="/admin/post/store" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="post_desc" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category_id" class="form-control">
                              <option value="0" selected> Select Category</option>
                              @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach


                          </select>
                      </div>
                      <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" autocomplete="off" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Image upload:</label>
                        <input type="file" name="image" class="form-control" autocomplete="off" required>
                    </div>
                    


                    <div class="form-group">
                        <label for="place">Address</label>
                        <input type="text" name="place" class="form-control" autocomplete="off" required>
                    </div>
                      
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>

