$(function(){$(".delete").click(function(){Swal.fire({title:confirmDelete,icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Tak",cancelButtonText:"Nie"}).then(n=>{n.isConfirmed&&$.ajax({url:deleteUrl+$(this).data("id"),method:"DELETE"}).done(function(e){window.location.reload()}).fail(function(e){alert("ERROR")})})})});
