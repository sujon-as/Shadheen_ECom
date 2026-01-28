<form action="{{ route('register.submit') }}" method="POST">
    @csrf

    <div class="form-group">
        <label style="color: #0f1535 !important;">Full Name *</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">Mobile Number *</label>
        <input type="text" class="form-control" name="mobile" required>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">Email *</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">NID *</label>
        <input type="text" class="form-control" name="nid" required>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">Gender *</label>
        <select name="gender" class="form-control" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">Country *</label>
        <input type="text" class="form-control" name="country" value="Bangladesh" required>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">Password *</label>
        <input type="password" class="form-control" name="first_password" required>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">Confirm Password *</label>
        <input type="password" class="form-control" name="re_password" required>
    </div>

    <div class="form-group">
        <label style="color: #0f1535 !important;">Referral ID (Optional)</label>
        <input type="text" class="form-control" name="referral_id">
    </div>

    {{-- Hidden inputs for required default values --}}
    <input type="hidden" name="user_name" value="">
    <input type="hidden" name="password" value="0">
    <input type="hidden" name="agent" value="0">
    <input type="hidden" name="type" value="0">
    <input type="hidden" name="category" value="0">
    <input type="hidden" name="division" value="0">
    <input type="hidden" name="distict" value="0">
    <input type="hidden" name="thana" value="0">
    <input type="hidden" name="product" value="0">
    <input type="hidden" name="placement_id" value="0">
    <input type="hidden" name="placement_hand" value="0">
    <input type="hidden" name="euser" value="0">
    <input type="hidden" name="user" value="">

    <div class="form-group">
        <button type="submit" class="btn btn-primary w-100" style="background-color: #0f1535 !important; color: white !important; border-color: #0f1535 !important;">Register</button>
    </div>
</form>

<div class="form-footer text-center mt-4">
    <p>
        Already have an account?
        <a href="{{ route('login') }}" class="text-primary font-weight-bold" style="color: #0f1535 !important;">
            Login
        </a>
    </p>
</div>

<script>
    // Mobile number auto-fill for user_name and user field
    document.querySelector('input[name="mobile"]').addEventListener('input', function () {
        document.querySelector('input[name="user_name"]').value = this.value;
        document.querySelector('input[name="user"]').value = this.value;
    });
</script>
