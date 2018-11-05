<script>
@if(isset($soluong))
    swal({   
        title: "",
        text: "Đã thêm vào giỏ hàng !",         
        type: "success",   
        showCancelButton: false,   
        confirmButtonColor: "red",   
        closeOnConfirm: false,
        showConfirmButton: false,  
        timer: 1000 
        }
    );
    document.getElementById("soluong").innerHTML = "{{$soluong}}";
    document.getElementById("soluong2").innerHTML = "{{$soluong}}";
    document.getElementById("tongtien").innerHTML = "{{number_format($tongtien,0,".",",")}}đ";                     
@else
    swal({   
        title: "",
        text: "Sản phẩm đã có trong giỏ hàng !",         
        type: "error",   
        showCancelButton: false,   
        confirmButtonColor: "red",   
        closeOnConfirm: false,
        showConfirmButton: false,  
        timer: 1000 
        }
    );
@endif
</script>