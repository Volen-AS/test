
@php
    /** @var \App\Models\Group */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <div class="card-subtitle md-2 text-muted"></div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" value="{{ $group->group_name }}"
                               id="name"
                               type="text"
                               class="form-control"
                               >
                    </div>

                    <div class="form-group">
                        <label for="new_users">Add users</label>
                        <input name="new_users"
                               id="new_users"
                               type="text"
                               placeholder="enter id 1,2,3..."
                               class="form-control"
                               >
                    </div>
                <div class="form-group">
                    <label for="rv_users">Delete users</label>
                    <input name="rv_users"
                           id="rv_users"
                           type="text"
                           placeholder="enter id 1,2,3..."
                           class="form-control"
                           >
                </div>
            </div>
        </div>
    </div>
</div>







