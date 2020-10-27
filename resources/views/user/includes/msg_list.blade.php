<div class="container">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Massage</th>
                <th>Create time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($msgLists as $msgList)

                <tr>
                    <td>{{ $msgList->id }}</td>
                    <td>{{ $msgList->msg_text }}</td>
                    <td>{{ $msgList->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot></tfoot>
        </table>
        @if($msgLists->total() > $msgLists->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{ $msgList->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
