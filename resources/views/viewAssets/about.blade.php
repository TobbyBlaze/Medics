<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-block">
                <h6 class="card-title text-bold"></h6>
                <div class="table-responsive">
                    <table class="datatable table table-stripped ">
                        <thead>
                        <tr>
                            
                            <th>About</th>
                            <th>Date</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            
                            <td>{{$post->about}}.
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
