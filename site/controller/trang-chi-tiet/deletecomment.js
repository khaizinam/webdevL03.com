$(document).ready(() => {
    var deleteModal = $('#deleteModal')
    deleteModal.on('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var recipient = button.getAttribute('data-bs-id')
    var modalBodyInput = $('#deleteid')
    modalBodyInput.val(recipient)
    })

    $("#deleteBtn").click(function () {
        if(!$.active){
          $.ajax({
            cache: false,
            url: "../../controller/trang-chi-tiet/comment_controller.php",
            method: "POST",
            data: {
              deleteid: $("#deleteid").val()
            },
            success: function( result ) {
            //   $( "#addSuccess" ).html("Delete Successfully")
              $("#deleteBtn").click()
         
          
              $("#record"+$("#deleteid").val()).remove()
              
            }
          })
        }
      })
})