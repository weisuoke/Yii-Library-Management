$(document).ready(function() {
	var JBookItemDelete = $('.J-bookItem-delete');
	$('.J-add-book').on('click', function(e) {
		e.preventDefault();
		window.location.href = "/index.php?r=book-add/index";
	})

	JBookItemDelete.on('click', function(e) {
		e.preventDefault();
		var id = $(this).data('id');
		if (!id) {
			layer.msg('这条数据有误！');
		}
		$.post('/index.php?r=book-add/delete', {
			id: id
		}, function(resp) {
			if (resp.success) {
				layer.msg('删除成功');
				window.location.reload();
			} else {
				layer.msg('系统错误');
			}
		})
	})
})