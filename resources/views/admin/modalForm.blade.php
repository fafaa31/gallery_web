    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">add your picture</h1>
                </div>
                <div class="modal-body">
                    <form action={{ route('gallery.store') }} method="POST" enctype="multipart/form-data">
                        @csrf
                        <img src={{ asset('fotoku/default.jpg') }} alt="avatar" class="img-pre w-50">
                        <div class="my-3">
                            <label for="formFile" class="form-label">input picture file</label>
                            <input class="form-control" type="file" name="picture" id="formFile"
                                onchange="getImg(event)">
                            @error('picture')
                                <p class="text-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                name="caption">{{ old('caption') }}</textarea>
                            <label for="floatingTextarea2">caption</label>
                        </div>
                        @error('caption')
                            <p class="text-danger"> {{ $message }} </p>
                        @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @include('admin.script')
    @if (count($errors) > 0)
        <script type="text/javascript">
            $(document).ready(function() {
                $('#exampleModal').modal('show');
            });
        </script>
    @endif
