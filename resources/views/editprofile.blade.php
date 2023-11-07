<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit Profile</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/editprofile.css" />
    @vite('resources/css/app.css')
<link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    {{-- @include('partials.navbar') --}}
    @include('partials.sidebar')

    <main>
      <div class="container">
        <div class="edit-profile-wrapper">
          <div class="back-to-userprofile">
            <a href="/profile">
              <img src="../assets/images/back-arrow.svg" alt="" />
              <span>Edit profile</span>
            </a>
          </div>
          <div class="edit-profile">
            <div class="edit-header">
              <img src="../assets/images/jessica.svg" alt="" />
              <div class="edit-profile-description">
                <div class="edit-profile-description-top">
                  <h4>Jessica_</h4>
                  <button>Change Password</button>
                </div>
                <button>Change photo profile</button>
              </div>
            </div>

            <form action="#">
              <div class="form-wrapper">
                <label for=""> Altenative name </label>
                <input type="text" value="Jessica Cathy" />
              </div>
              <p class="text-info">
                This name will be show as an alternate name of your account
              </p>

              <div class="form-wrapper">
                <label for="#">gender</label>
                <input type="text" value="female" />
              </div>
              <p class="text-info">
                This not will be part of your public profile
              </p>

              <div class="form-wrapper">
                <label for="">Email</label>
                <input
                  type="email"
                  name=""
                  id=""
                  value="jessica.catty@gmail.com"
                />
              </div>

              <div class="form-wrapper">
                <label for="#">No telephone</label>
                <input type="number" value="0892123002" />
              </div>
              <button type="submit" class="btn-submit">Save</button>
            </form>
          </div>
        </div>
      </div>
    </main>

    <script src="../js/app.js"></script>
  </body>
</html>
