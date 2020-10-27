<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div><br>
@if($users_in_group)
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="Card-body">
                    <table>
                    <thead>
                    <tr>
                        <th >ID User</th>
                        <th>Nickname</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users_in_group as $user_group)

                        @php
                            /** @var \App\Models\UserGroup $user_group */
                        @endphp
                        <tr>
                            <td>{{ $user_group->user_id }}</td>
                            <td>{{ $user_group->getName->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot></tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endif
