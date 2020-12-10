<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-block">
                <h6 class="card-title text-bold"></h6>
                <div class="table-responsive">
                    <table class="datatable table table-stripped ">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Date</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->noticeTitle}}</td>
                            <td>{{$post->notice}}.
                            </td>
                            <td>{{$post->created_at}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
