$(document).ready(function() {
	$('.J-submit-add').on('click', function(e) {
		e.preventDefault();
		var JBookTitle = $('.J-book-title').val();
		var JBookAuthor = $('.J-book-author').val();
		if (!JBookTitle) {
			layer.msg('请输入图书名');
			return false;
		}

		if (!JBookAuthor) {
			layer.msg('请输入作者');
			return false;
		}

		$.post("/index.php?r=book-add/add", {
			title: JBookTitle,
			author: JBookAuthor
		}, function(resp) {
			console.log(resp)
			if (resp.success) {
				layer.msg("添加成功");
				window.location.href = '/index.php?r=book-list/index'
			} else {
				layer.msg("添加失败");
			}
		})
	})
})