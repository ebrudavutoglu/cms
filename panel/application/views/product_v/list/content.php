<!-- Main content -->
<section class="content">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ürün Listesi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <a href="<?php echo base_url("product/new_form"); ?>" class="btn pull-right btn-info"><i class="fa fa-plus"></i> Yeni Ekle</a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card margin-top">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!--ITEMS BOSSA ALERT GOSTER -->
                        <?php if(empty($items)){?>
                            <div class="alert">
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fa fa-check"></i> Kayıt Bulunamadı!</h5>
                                    Burada herhangi bir veri bulunmamaktadır. Eklemek için Lütfen <a href="#">Tıklayınız</a>.
                                </div>
                            </div>
                        <?php } else{ ?>
                            <!--ITEMS DOLUYSA ALERT GOSTER -->
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <th><i class="fa fa-reorder"></i></th>
                                    <th>id</th>
                                    <th>Başlık</th>
                                    <th>url</th>
                                    <th>Açıklama</th>
                                    <th>Durum</th>
                                    <th>İşlem</th>

                                </thead>
                                <tbody class="sortable" data-url="<?php echo base_url("product/rankSetter"); ?>">
                                    <?php foreach($items as $item){ ?>
                                        <tr id="ord-<?php echo $item->id; ?>">
                                            <td><i class="fa fa-reorder"></i></td>
                                            <td><?php echo $item->id; ?></td>
                                            <td><?php echo $item->title; ?></td>
                                            <td><?php echo $item->url; ?></td>
                                            <td><?php echo $item->description; ?></td>
                                            <td>
                                                <label>
                                                    <input 
                                                        data-url="<?php echo base_url("product/isActiveSetter/$item->id"); ?>"
                                                        type="checkbox" 
                                                        class="flat-red isActive" 
                                                        <?php echo ($item->isActive) ? "checked" :"" ; ?>
                                                    >
                                                </label>
                                            </td>
                                            <td>
                                                <button data-url="<?php echo base_url("product/delete/$item->id"); ?>" class="btn remove-btn  btn-outline-danger btn-sm" style="margin-right:5px;"><i class="fa fa-trash-o"></i>Sil</button>
                                                <a class="btn  btn-outline-info btn-sm" href="<?php echo base_url("product/update_form/$item->id"); ?>"><i class="fa fa-pencil-square-o"></i>Düzenle</a>
                                                <a class="btn  btn-outline-primary btn-sm" href="<?php echo base_url("product/image_form/$item->id"); ?>"><i class="fa fa-photo"></i>Resimler</a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>