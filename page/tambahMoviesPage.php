<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="body d-flex justify-content-between">
        <h4>Tambah Movies</h4>
    </div>
    <hr>
    <form action="../process/tambahMoviesProcess.php" method="POST">
        <div class="mb-3">
            <label for="inputJudul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="inputEmail" name="inputEmail">
        </div>
        <div class="mb-3">
            <div class="mb-3"> <label for="inputGenre" class="form-label">Genre</label> <select class="form-select" aria-label="Default select example" name="inputGenre" id="inputGenre">
                    <option value="Action">Action</option>
                    <option value="Romance">Romance</option>
                    <option value="Drama">Drama</option>
                </select> </div>
        </div>
        <div class="mb-3">
            <label for="inputRelease" class="form-label">Release</label>
            <input type="text" class="form-control" id="inputRelease" name="inputRelease">
        </div>
        <div class="mb-3">
            <label for="inputSeason" class="form-label">Season</label>
            <input type="text" class="form-control" id="inputSeason" name="inputSeason">
        </div>
        <div class="mb-3">
            <label for="inputSynopsis" class="form-label">Synopsis</label>
            <input type="text" class="form-control" id="inputSynopsis" name="inputSynopsis">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>

</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>