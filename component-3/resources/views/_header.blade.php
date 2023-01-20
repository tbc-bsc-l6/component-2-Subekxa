<div class="row">
    <div class="col-3"></div>

    <!-- search bar here -->
    <div class="col-6 d-flex align-items-center justify-content-center">
        <form action="" method="GET" class="d-flex w-100">
            <div class="searchbar d-flex w-100">
                <input name="searchText" type="text" placeholder="Search here" class="form-control"
                    style="border-bottom-left-radius: 15px; border-top-left-radius: 15px;" value="{{ request('searchText') }}">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>