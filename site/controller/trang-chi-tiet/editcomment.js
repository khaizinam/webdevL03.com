$(document).ready(() => {
    var editModal = $('#editModal')
    editModal.on('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var idproduct = button.getAttribute('data-bs-id')
    var content = button.getAttribute('data-bs-content')
    var modalBodyId = $("#editproduct")
    var modalBodyName = $("#editname")
    modalBodyId.val(idproduct)
    modalBodyName.val(content)
    })

    var flagEdit = 1
    $("#editBtn").click(function() {
        if ($("#editname").val().trim().length < 1) {
          $("#editnameerr").html("Không được để trống!")
          $("#editname").focus()
          flagEdit = 0
        }
    
        if (flagEdit == 1) {
          if(!$.active){
          $.ajax({
            cache: false,
            url: "../../controller/trang-chi-tiet/comment_controller.php",
            method: "POST",
            data: {
              editid: $("#editproduct").val(),
              content: $("#editname").val(),
            },
            success: function( result ) {
                console.log(result);
            //   $( "#addSuccess" ).html("Update Successfully")
              $("#editclose").click()
            //   console.log(result)
              result = JSON.parse(result)
              $("#comm"+$("#editproduct").val()).replaceWith(`
              ${result.content}
              `)
            }
          })
        }
      }
      })

})