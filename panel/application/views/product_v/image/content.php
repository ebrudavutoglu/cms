<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary" style="margin-top:30px; padding:30px;">
                    <!-- form start -->
                    <form action="<?php echo base_url("product/image_upload/$item->id"); ?>" data-plugin="dropzone" class="dropzone" data-options="{url:'<?php echo base_url("product/image_upload/$item->id"); ?>">
                            <div class="dz-message">
                                <h3 class="m-h-lg">Yüklemek istediğiniz fotoğrafları buraya sürükleyiniz.</h3>
                                <p class="m-b-lg text-muted">Yüklemek için dosyalarınızı sürükleyiniz ya da buraya tıklayınız.</p>
                            </div>
                            <!--input name="file" type="file" multiple /-->
                    </form>
                </div>
            </div>
        </div>
        <div class="content-header">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0 text-dark"><b><?php echo $item->title; ?></b> kaydına ait fotoğraflar</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- form start -->
                    <table class="table table-bordered table-striped picture-table">
                        <thead>
                            <th class="w100 text-center">id</th>
                            <th class="w100 text-center">Görsel</th>
                            <th>Resim</th>
                            <th class="w100 text-center">Durum</th>
                            <th class="w100 text-center">İşlem</th>

                        </thead>
                        <tbody>
                            <td class="w100 text-center">1</td>
                            <td class="w100 text-center"><img width="100" src="http://img7.mynet.com/galeri/2016/02/29/115015841/6299874-600x406.jpg" alt=""></td>
                            <td>deneme-urun.jpg</td>
                            <td  class="w100 text-center">
                                <input 
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    type="checkbox" 
                                    class="flat-red isActive" 
                                    <?php echo (true) ? "checked" :"" ; ?>
                                >
                            </td>
                            <td  class="w100 text-center">
                                <button data-url="<?php echo base_url("product/delete/"); ?>" class="btn btn-block remove-btn  btn-outline-danger btn-sm" style="margin-right:5px;"><i class="fa fa-trash-o"></i>Sil</button>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>