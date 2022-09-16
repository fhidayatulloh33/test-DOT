

<?php $__env->startSection('konten'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="float-right">
                        <a class="btn btn-success" data-bs-toggle="modal" href="#ModalAdd" role="button">Input Siswa</a>
                    </div>
                    <div class="table-responsive">
                        <?php if($message = Session::get('succes')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                        <?php endif; ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">NO</th>
                                    <th scope="col" class="text-center">NIS</th>
                                    <th scope="col" class="text-center">Nama Siswa</th>
                                    <th scope="col" class="text-center">Alamat</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $sisw; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e(++$i); ?></td>
                                    <td class="text-center"><?php echo e($siswa->NIS); ?></td>
                                    <td class="text-center"><?php echo e($siswa->NamaSiswa); ?></td>
                                    <td class="text-center"><?php echo e($siswa->Alamat); ?></td>
                                    <td class="text-center">
                                        <form action="<?php echo e(route('sisw.destroy',$siswa->id)); ?>" method="POST">

                                            <!-- <a class="btn btn-primary btn-sm" href="<?php echo e(route('sisw.edit',$siswa->id)); ?>">Edit</a> -->
                                            <a class="btn btn-primary btn-sm" data-bs-toggle="modal" href="#ModalEdit" role="button">Edit</a>

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal add  -->
    <div class="modal fade" id="ModalAdd" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    <form action="<?php echo e(route('sisw.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="NIS" class="form-label">NIS</label>
                            <input type="text" name="NIS" class="form-control" placeholder="NIS Siswa">
                        </div>
                        <div class="mb-3">
                            <label for="NamaSiswa" class="form-label">Nama Siswa</label>
                            <input type="text" name="NamaSiswa" class="form-control" placeholder="Nama Siswa">
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Alamat"></textarea>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- modal edit  -->
    <div class="modal fade" id="ModalEdit" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    <form action="<?php echo e(route('sisw.update',4)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="mb-3">
                            <label for="NIS" class="form-label">NIS</label>
                            <input type="text" name="NIS" class="form-control" placeholder="NIS Siswa" value="">
                        </div>
                        <div class="mb-3">
                            <label for="NamaSiswa" class="form-label">Nama Siswa</label>
                            <input type="text" name="NamaSiswa" class="form-control" placeholder="Nama Siswa" value="">
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Alamat"></textarea>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php echo $sisw->links(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\File\DOT\test-DOT\resources\views/sisw/index.blade.php ENDPATH**/ ?>