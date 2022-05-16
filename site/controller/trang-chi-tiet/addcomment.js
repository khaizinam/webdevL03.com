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
            </p>
            <div class="comment_content">
            ${data['content']}
            </div>
        </div>` + $(".comment_body").html());
            console.log(data);
        }
    })
}