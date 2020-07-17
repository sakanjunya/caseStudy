<nav class="navbar navbar-light bg-light" style="margin: 0">
    <p class="navbar-brand" id="userName">{{session('name')}}</p>
    <form class="form-inline ml-auto">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="glyphicon glyphicon-search"></i></button>
    </form>
    @include('modal.createClassrooms')
    <div class="dropdown ml-auto mr-5">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            --Menu--
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#createClass">クラスを追加する</a>
            <a class="dropdown-item" href="#">自分のクラスを編集する。</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
</nav>