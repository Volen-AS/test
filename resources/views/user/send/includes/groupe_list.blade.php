 <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="Card-body">
                <table>
                    <thead>
                    <tr>
                        <th >ID</th>
                        <th>Group name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($groups as $group)

                        <tr>
                            <td>{{ $group->id  }}</td>
                            <td>{{ $group->group_name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

