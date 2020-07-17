<div class="modal fade" id="createClass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="createClassroom" method="post">
            @csrf
            <div class="modal-header">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                <h5 class="modal-title" id="exampleModalLabel">クラス作成</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <label for="recipient-name" class="col-form-label"> クラスネーム:</label>
                    <input type="text" class="form-control" id="recipient-name" name="class_name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                <button type="submit" class="btn btn-primary">登録</button>
            </div>
        </form>
    </div>
</div>