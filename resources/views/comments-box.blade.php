<div>
    <form action="{{ route('comments.store', $id-> id) }}" method="POST">
        @csrf
    <div class="mb-3">
        <textarea name="content" class="fs-6 form-control" rows="1"></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Post Comment</button>
    </div>
    </form>
    <hr>
    <div class="d-flex align-items-start">
        <img src="https://i.pravatar.cc/50" class="rounded-circle me-2" alt="avatar">
        <div class="w-100">
            <div class="d-flex justify-content-between">
                <h6 class="">Name
                </h6>
                <small class="fs-6">1 hour ago</small>
            </div>
            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.</p>
        </div>
    </div>
</div>