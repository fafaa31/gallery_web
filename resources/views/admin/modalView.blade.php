    <!-- Modal -->
    <div class="modal fade" id="view{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">detail post</h1>
                </div>
                <div class="modal-body">
                    <img src={{ asset('fotoku/' . $item->picture) }} alt="avatar" class="img-pre w-100">
                    <div class="form-floating mt-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"
                            name="caption" disabled>{{ $item->caption }}</textarea>
                        <label for="floatingTextarea2">caption</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                </div>
            </div>
        </div>
    </div>
    @include('admin.script')
