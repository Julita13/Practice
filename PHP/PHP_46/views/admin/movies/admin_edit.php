<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update movie: <?= ($movie->title ?? ''); ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= url('admin/movies/update.php'); ?>" method="POST">

              <input type="hidden" name="id" value="<?= ($movie->id ?? ''); ?>">

                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="<?= ($movie->title ?? ''); ?>" id="title" placeholder="Enter title">
                  </div>

                  <div class="form-group">
                    <label for="release_date">Release date</label>
                    <input type="date" class="form-control" name="release_date" value="<?= ($movie->release_date ?? ''); ?>" id="release_date" placeholder="Release date">
                  </div>

                  <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="<?= ($movie->description ?? ''); ?>" id="description" placeholder="Enter description">
                  </div>

                  <div class="form-group">
                    <label for="runtime">Runtime (min.) </label>
                    <input type="number" class="form-control" name="runtime" max="1000" value="<?= ($movie->runtime ?? ''); ?>" id="runtime" placeholder="Enter runtime">
                  </div>

                  <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" maxlength="5" name="rating" value="<?= ($movie->rating ?? ''); ?>" id="rating" placeholder="Enter rating">
                  </div>

                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" value="<?= ($movie->image ?? ''); ?>" id="image" placeholder="url">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>