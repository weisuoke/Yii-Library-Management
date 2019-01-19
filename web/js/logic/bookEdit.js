$(document).ready(function() {
	var id = wuUtil.getParams('id');
	$('.J-book-id').val(id);

	$.post('/index.php?r=book-add/info', {
		id: id
	}, function(resp) {
		if (resp.success) {
			var result = resp.result
			$('.J-book-title').val(result.title);
			$('.J-book-author').val(result.author);
		}
	})

	$(".J-submit-edit").on('click', function(e) {
		e.preventDefault();
		var JBookTitle = $('.J-book-title').val();
		var JBookAuthor = $('.J-book-author').val();
		if (!JBookTitle) {
			layer.msg('标题不能为空');
			return false;
		}

		if (!JBookAuthor) {
			layer.msg('作者不能为空');
			return false;
		}

		$.post('/index.php?r=book-add/update', {
			id: id,
			title: JBookTitle,
			author: JBookAuthor
		}, function(resp) {
			if (resp.success) {
				layer.msg('编辑成功');
				window.location.href = '/index.php?r=book-list/index'
			} else {
				layer.msg('编辑失败');
			}
		})
	})
})