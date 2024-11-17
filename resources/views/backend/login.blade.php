<style>
    body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f6f9;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

form.modern-form {
  background: #fff;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

.form-outline {
  position: relative;
  margin-bottom: 1.5rem;
}

.form-control {
  border: 1px solid #ced4da;
  border-radius: 4px;
  padding: 10px;
  width: 100%;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.form-control:focus {
  border-color: #007bff;
  outline: none;
}

.form-label {
  position: absolute;
  top: 12px;
  left: 10px;
  font-size: 0.9rem;
  color: #6c757d;
  transition: all 0.3s ease;
  pointer-events: none;
}

.form-control:focus + .form-label,
.form-control:not(:placeholder-shown) + .form-label {
  top: -8px;
  left: 8px;
  font-size: 0.75rem;
  color: #007bff;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  font-size: 1rem;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.link {
  color: #007bff;
  text-decoration: none;
}

.link:hover {
  text-decoration: underline;
}

.social-buttons {
  display: flex;
  justify-content: center;
  gap: 10px;
}

.btn-floating {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #f4f6f9;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.3s ease;
}

.btn-floating i {
  font-size: 1.2rem;
  color: #6c757d;
}

.btn-floating:hover {
  background-color: #e0e0e0;
}

.facebook:hover i { color: #4267B2; }
.google:hover i { color: #DB4437; }
.twitter:hover i { color: #1DA1F2; }
.github:hover i { color: #333; }

</style>
<form action="{{route('do.login')}}" class="modern-form" method="post">
    @csrf

    @notifyCss
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" placeholder=" " name="email" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" placeholder=" " name="password"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col text-end">
      <!-- Simple link -->
      <a href="#!" class="link">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4 active">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!" class="link">Register</a></p>
    <p>or sign up with:</p>
    <div class="social-buttons">
      <button type="button" class="btn btn-floating mx-1 facebook"><i class="fab fa-facebook-f"></i></button>
      <button type="button" class="btn btn-floating mx-1 google"><i class="fab fa-google"></i></button>
      <button type="button" class="btn btn-floating mx-1 twitter"><i class="fab fa-twitter"></i></button>
      <button type="button" class="btn btn-floating mx-1 github"><i class="fab fa-github"></i></button>
    </div>
  </div>
</form>
<x-notify::notify />
@notifyJs