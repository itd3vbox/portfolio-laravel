<form action="{{ route('web-admin.sign-in.request') }}" method="POST">

    @csrf

    <div class="form-row">
        <label for="email">Email</label>
        <div class="input-icon">
            <input type="email" id="email" name="email" placeholder="Ex.: {{ env('MAIL_ADDRESS_CONTACT') }}"
                required>
                <i class="fas fa-at"></i>
        </div>
    </div>

    <div class="form-row">
        <label for="password">Password</label>
        <div class="input-icon">
            <input type="password" id="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                autocomplete="on" required>
            <i class="fas fa-key"></i>
        </div>
    </div>

    <div class="form-row">
        <button class="button-text">Enter</button>
    </div>

</form>