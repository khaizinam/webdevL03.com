function addcomment(userid, productid, content) {
    // console.log(userid, productid, content);
    // console.log(content)
    $.ajax({
        url: '../../controller/trang-chi-tiet/comment_controller.php',
        cache: false,
        type: 'POST',
        data: {
            userid : userid,
            productid: productid,
            content: content
        },
        success: function (data) {
            $('#comment_input').val('');
            $('#comment_input').blur();
            data = JSON.parse(data)[0];
            $(".comment_body").html(`<div class="comment">
            <p class="comment_title">
                ${data['username']}
                <button type="button" class="btn btnDel" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="${data['ID']}"><i class="fa-solid fa-trash comment-action"></i></button>
            </p>
            <div class="comment_content">
            
            <span id="comm${data['ID']}">${data['content']}</span>
                                        
            <button type="button" class="btn btnDel" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-id="${data['ID']}" data-bs-content="${data['content']}"><i class="fa-solid fa-pen comment-action"></i></button>
                     
            </div>
        </div>` + $(".comment_body").html());
            console.log(data);
        }
    })
}