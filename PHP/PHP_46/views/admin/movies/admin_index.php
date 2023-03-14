<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Movies</h3>
                <a href="<?= url('admin/movies/create.php'); ?>" class="btn btn-app" style="float:right">
                  <i class="fas fa-plus"></i> New movie
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Release date</th>
                            <th>Desription</th>
                            <th>Runtime (min.)</th>
                            <th>Rating (MPAA)</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($movies as $movie) {?>

                            <tr>
                             <td><?= ($movie->id ?? ''); ?></td>
                              <td>
                                <img width="100" src="<?= ($movie->image ?? ''); ?>">
                              </td>
                              <td><?= ($movie->title ?? ''); ?></td>
                              <td><?= ($movie->release_date ?? ''); ?></td>
                              <td><?= ($movie->description ?? ''); ?></td>
                              <td><?= ($movie->runtime ?? ''); ?></td>
                              <td><?= ($movie->rating ?? ''); ?></td>
                              <td><?= ($movie->created_at ?? ''); ?></td>
                              <td><?= ($movie->updated_at ?? ''); ?></td>

                              <td>
                                <div class="btn-group">
                                    <a href='<?= url('admin/movies/edit.php?id='.($movie->id ?? '')); ?>' type="button" class="btn btn-info">Change</a>
                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="<?= url('admin/movies/delete.php?id='.($movie->id ?? '')); ?>">Delete</a>
                                    </div>
                                </div>
                              </td>

                            </tr>

                        <?php } ?>

                    </tbody>
                    <tfoot>
                    <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Release date</th>
                            <th>Desription</th>
                            <th>Runtime (min)</th>
                            <th>Rating (MPAA)</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

