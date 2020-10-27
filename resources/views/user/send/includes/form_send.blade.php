<form method="POST" action="{{ route('mass_sending_post') }}">
    @csrf
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <div class="card-subtitle md-2 text-muted"></div>

                <div class="form-group">
                    <label for="group_id">Group ID</label>
                    <input name="group_id"
                           id="group_id"
                           type="number"
                           placeholder="enter group id"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label for="msg_template_id">Msg ID</label>
                    <input name="msg_template_id"
                           id="msg_template_id"
                           type="number"
                           placeholder="enter msg id"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label for="time">Time if need</label>
                    <input name="time"
                           id="time"
                           type="text"
                           placeholder="enter time format Year-month-day hour (2020-11-01 10:00)"
                           class="form-control"
                           >
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>

</div>
</form>
