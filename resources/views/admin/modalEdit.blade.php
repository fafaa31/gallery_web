    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">edit your picture</h1>
                </div>
                <div class="modal-body">
                    <form action={{ route('gallery.update', $item->id) }} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <img src={{ asset('fotoku/' . $item->picture) }} alt="avatar" class="img-pre w-50">
                        <div class="my-3">
                            <label for="formFile" class="form-label">input picture file</label>
                            <input class="form-control" type="file" name="picture" id="formFile"
                                onchange="getImg(event)">
                        </div>
                        @error('picture')
                            <p class="error"> {{ $message }} </p>
                        @enderror
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                name="caption">{{ $item->caption }}</textarea>
                            <label for="floatingTextarea2">caption</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    @include('admin.script')
    @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function() {
                $(`#exampleModal${$item->id}`).modal('show');
            });
        </script>
    @endif
