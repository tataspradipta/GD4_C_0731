<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>Tambah Movies</h4>
    </div>
    <hr>
    <form>
        <div class="mb-3">
            <label for="inputJudul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputGenre" class="form-label">Genre</label>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Drama</a></li>
                    <li><a class="dropdown-item" href="#">Romance</a></li>
                </ul>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputRelease" class="form-label">Release</label>
            <input type="text" class="form-control" id="inputRelease">
        </div>
        <div class="mb-3">
            <label for="inputSeason" class="form-label">Season</label>
            <input type="text" class="form-control" id="inputSeason">
        </div>
        <div class="mb-3">
            <label for="inputSynopsis" class="form-label">Synopsis</label>
            <input type="text" class="form-control" id="inputSynopsis">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>