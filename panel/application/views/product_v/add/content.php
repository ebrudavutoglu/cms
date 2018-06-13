<!-- Main content -->
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Yeni Ürün Ekle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <!-- form start -->
                    <form role="form" action="<?php echo base_url("product/save"); ?>" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Başlık</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Başlık">
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <textarea id="editor1" name="description" style="width: 100%">Açıklama</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-primary">Kaydet</button>
                            <a href="<?php echo base_url("product/index"); ?>" class="btn btn-md btn-outline-danger">İptal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>