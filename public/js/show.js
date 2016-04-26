$(document).ready(function() {
    $("[id^=reply]").click(function() {
        var index = parseInt($(this).attr("id").replace('reply',''), 10);
        var replyComment = $("#" + index + "Comment");
        replyComment.append('<div id="CommentFormReply"><input type="text" class="form-control" style="width: 80%;" placeholder="Reply to this comment"><br />' +
            '<button class="btn btn-sm">Submit</button> <button class="btn btn-sm" onclick="removeReply();">Cancel</button></div>');
    });
});

function removeReply() {
    document.getElementById('CommentFormReply').remove();
}