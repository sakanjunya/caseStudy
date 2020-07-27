<div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="/caseStudy/public/addToStudent" method="post">
            @csrf
            <div class="modal-header">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                <h5 class="modal-title" id="exampleModalLabel">生徒の追加</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <label for="recipient-name" class="col-form-label"> 追加する人数を入力してください:</label>
                    <input type="number" class="form-control" id="recipient-name" name="students_num" min="1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                <button type="submit" class="btn btn-primary">次へ</button>
            </div>
        </form>
    </div>
</div>