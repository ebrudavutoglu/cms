<!-- Main content -->
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ürünün Fotoğrafları</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- form start -->
                    <form action="/file-upload" data-plugin="dropzone" class="dropzone" data-options="{url:'../api/dropzone'}">
                            <div class="dz-message">
                                <h3 class="m-h-lg">Drop Files Here or Click To Upload</h3>
                                <p class="m-b-lg text-muted">This is just a demo dropzone. Selected files are not actually uploaded</p>
                            </div>
                            <!--input name="file" type="file" multiple /-->
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- form start -->
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>id</th>
                            <th>Görsel</th>
                            <th>Resim</th>
                            <th>Durum</th>
                            <th>İşlem</th>

                        </thead>
                        <tbody>
                            <td>1</td>
                            <td><img width="100" src="http://img7.mynet.com/galeri/2016/02/29/115015841/6299874-600x406.jpg" alt=""></td>
                            <td>deneme-urun.jpg</td>
                            <td>
                                <input 
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    type="checkbox" 
                                    class="flat-red isActive" 
                                    <?php echo (true) ? "checked" :"" ; ?>
                                >
                            </td>
                            <td>
                                <button data-url="<?php echo base_url("product/delete/"); ?>" class="btn remove-btn  btn-outline-danger btn-sm" style="margin-right:5px;"><i class="fa fa-trash-o"></i>Sil</button>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>