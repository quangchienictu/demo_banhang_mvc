<div class="container-fluid">
    <h1 class="mt-4">Quản lý Blog</h1>
     <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Danh sách</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
        <div class="card-body">
            <div class="table-responsive">
                <a class="btn btn-primary " style="float: right;margin-left: 50px;" href="?controller=admin&action=add-blog">Thêm mới</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Tile</th>
                            <th>Image</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Xoá</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $key => $value): ?>
                         <tr>
                            <td><?=$value['id']?></td>
                            <td><?=$value['title']?></td>
                            <td><img src="<?=$value['image']?>" width="200px;"></td>
                            <td><?=$value['author_name']?></td>
                            <td style="max-width: 70px;"><?=$value['time']?></td>
                            <td><button onclick="delete_blog(<?=$value['id']?>)" class="btn btn-danger" >Xoá</button></td>
                            <td><a href="?controller=admin&action=edit-blog&id=<?=$value['id']?>" class="btn btn-primary">Sửa</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="edit_catalog_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Thêm mới blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>

</div>
</div>
</div>
