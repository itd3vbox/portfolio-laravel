<form>

    <div class="form-row f-status">
        <label for="fp-image">Status</label>
        <div class="text">
            <p>
                You can make the Project immediately visible.
            </p>
        </div>
        <div class="button-toggle-simple">
            <input type="hidden" name="status">
            <div class="btn">
                <div class="ball"></div>
            </div>
        </div>
        <div class="value">
            <div class="indicator"></div>
            <div class="data"></div>
        </div>
    </div>

    <div class="form-row f-file">
        <label for="fp-image">Image</label>
        <div class="text">
            <p>
                Add an Imange for your Progject.
            </p>
        </div>
        <div class="files">
            <div class="content-empty">
                <input type="file" accept="image/*">
                <div class="icon">
                    <i class="fas fa-upload"></i>
                </div>
                <p>
                    <span class="btn-choose">Choose a file</span> or 
                    drag it here.
                </p>
            </div>
            <div class="content-uploading">
                <p>Uploading ...</p>
            </div>
            <div class="content-grid">
                <div class="grid"></div>
                <div class="options">
                    <div class="button-icon btn-rect btn-choose">
                        <i class="fas fa-upload"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row f-name">
        <label for="fp-name">Name</label>
        <div class="text">
            <p>Give a Name for your Project.</p>
        </div>
        <div class="input-icon">
            <input type="text" 
                name="name" id="fp-name"
                placeholder="Ex.: Shop - Space Games">
            <i class="fas fa-dice-d6"></i>
        </div>
    </div>

    <div class="form-row f-links">
        <h6>Links</h6>
        <div class="text">
            <p>You can add some external Links.</p>
        </div>

        <div class="links">

            <div class="row r-url">
                <label for="fp-link-url">URL</label>
                <div class="text">
                    <p>
                        Give a valid URL.
                    </p>
                </div>
                <div class="input-icon">
                    <input type="url" 
                        name="link_url" id="fp-link-url"
                        placeholder="Ex.: https://fontawesome.com/">
                    <i class="fas fa-link"></i>
                </div>
            </div>

            <div class="row r-icon">
                <label for="fp-link-icon">Icon</label>
                <div class="text">
                    <p>
                        Give a Font Ansewome Icon.
                    </p>
                </div>
                <div class="input-icon">
                    <input type="text" 
                        name="link_icon" id="Ex.: fp-link-icon"
                        placeholder="fab fa-font-awesome">
                    <i class="fab fa-font-awesome"></i>
                </div>
            </div>

            <div class="row r-add">
                <div class="button-text">ADD</div>
            </div>

            <div class="list"></div>

        </div>

    </div>

    <div class="form-row f-submit">
        <div class="button-text">ADD</div>
    </div>

</form>