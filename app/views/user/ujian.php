<div class="main-content py-6">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php for ($i = 1; $i <= 20; $i++) { ?>
                    <p><?= $i ?>. Siapakah presiden pertama Indonesia?</p>
                    <input type="radio" id="pilihan1" name="pertanyaan1" value="george_washington">
                    <label for="pilihan1">Erik Tohir</label><br>
                    <input type="radio" id="pilihan2" name="pertanyaan2" value="abraham_lincoln">
                    <label for="pilihan2">Steven Chou</label><br>
                    <input type="radio" id="pilihan3" name="pertanyaan3" value="thomas_jefferson">
                    <label for="pilihan3">James Bond</label><br>
                    <input type="radio" id="pilihan4" name="pertanyaan4" value="thomas_jefferson">
                    <label for="pilihan4">Jokowi</label><br>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-github mt-3" type="submit"
                        name="submit">Submit
                </button>
            </div>
        </div>
    </div>
</div>