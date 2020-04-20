</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Tiến Minh 2020</div>
            
        </div>
    </div>
    
</footer>
</div>
</div>
<script src="[ckeditor-build-path]/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="public/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="public/assets/demo/chart-area-demo.js"></script>
<script src="public/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="public/assets/demo/datatables-demo.js"></script>
<script type="text/javascript" src="public/js/admin.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

    load_product();

    function show(id){
       $.ajax({
        url:'?controller=admin-ajax&action=chi-tiet-don-hang&id='+id,
        method: 'get',
        dataType:'html',

    }).done(function(data){
        $('#modal').html(data);
        $("#exampleModalCenter").modal('show');
    });
}
$("#create").on('submit',function(e){
    e.preventDefault();

});

function load_product(){
    $.ajax({
        url : "?controller=admin-ajax&action=show-all-product",
        method:"get",
        dataType:"html",

    }).done(function(data){
     $("#show_product").html(data);
 });
}
function  add_product() {
    $("#mathang").modal('show');
    CKEDITOR.replace( 'mota' );
    $("#thoitrang").on('change',function(){
     var id = $(this).val();
     $.ajax({
        url : "?controller=admin-ajax&action=danh-sach-catalog&id="+id,
        method:"get",
        dataType:"json",

    }).done(function(data){
     let employee="<option value='null' selected >--Lựa chọn--</option>";  
     $.each(data,function(key,value){
         employee +=" <option value='"+value.id+"'>"+value.name+"</option>";    
     });
     $("#dm").html(employee);
 });
});


    $("#create_product").on("submit",function(e){
        e.preventDefault();
        for ( instance in CKEDITOR.instances ) {
            CKEDITOR.instances[instance].updateElement();
        }
          //  var name = $("[name=describes]").val();
          var data = new FormData(this);

          //  data.append('describes', CKEDITOR.instances['describes'].getData());
          $.ajax({
            url :"?controller=admin-ajax&action=add-product",
            method:"post",
            data :data ,
            contentType:false,
            processData:false

        }).done(function(data){
            $("#alert").html(data);
            document.querySelector("#create_product").reset();

        });

    });
}

function edit_product(id){
     $("#edit_product").modal('show');
     $("#masp").html(id);
      CKEDITOR.replace( 'mota2');
       $.ajax({
            url :"?controller=admin-ajax&action=show_product_id",
            method:"post",
            data :{id:id},
            dataType:"json",
        }).done(function(data){
             $.each(data, function(key, value){
            $("#update_product")[0].elements[3].value = value.price;
            $("#update_product")[0].elements[2].value = value.name;
            $("#update_product")[0].elements[4].value = value.discount;
            $("#update_img")[0].src = value.image_link;
           /* $("#update_img1")update_img1.src = value.image_link1;
               $("#update_img2")update_img1.src = value.image_link2;
                $("#update_img3")update_img1.src = value.image_link3;*/
             });
           
        });


     $("#update_product").on("submit",function(e){
        e.preventDefault();
         
        alert('ok');
});
       
}


</script>

</body>
</html>
