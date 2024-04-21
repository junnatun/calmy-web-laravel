<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calmy | Daftar</title>
    <link rel="stylesheet" href="/public/css/style.css" />
    <link rel="icon" type="image/x-icon" href="/src/icons/favicon.svg" />
    @vite('resources/css/app.css')
  </head>
  <body class="bg-main-bg bg-fixed">
    <div class="flex flex-row w-screen items-center py-10">
      <div class="w-1/2 flex flex-col items-center justify-center px-10">
        <h1 class="text-4xl font-extrabold">Daftar</h1>
        <p class="text-center pt-6">
            Halo! Buat akun dengan email kamu dan mari berteman dengan Calmy!
        </p>
        <form action="" class="w-full">
          <div class="flex flex-col items-center pt-10">
            <label for="username" class="text-xl font-semibold pb-4"
              >Nama Pengguna</label>
            <input
              type="username"
              id="username"
              name="username"
              placeholder="Masukkan nama pengguna.."
              value=""
              class="bg-white w-3/5 h-16 p-4 rounded-lg text-center text-base"
            />
          </div>
          <div class="flex flex-col items-center pt-10">
            <label for="email" class="text-xl font-semibold pb-4">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Masukkan email.."
              value=""
              class="bg-white w-3/5 h-16 p-4 rounded-lg text-center text-base"
            />
          </div>
          <div class="flex flex-col items-center pt-10">
            <label for="password" class="text-xl font-semibold pb-4"
              >Kata Sandi</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Masukkan kata sandi.."
              value=""
              class="bg-white w-3/5 h-16 p-4 rounded-lg text-center text-base"
            />
          </div>
          <div class="flex flex-col items-center pt-10">
            <label for="cPassword" class="text-xl font-semibold pb-2"
              >Konfirmasi Kata Sandi</label
            >
            <input
              type="password"
              id="cPassword"
              name="cPassword"
              placeholder="Masukkan konfirmasi kata sandi.."
              value=""
              class="bg-white w-3/5 h-16 p-4 rounded-lg text-center text-base"
            />
          </div>
          <div class="flex flex-row items-center justify-center my-10">
            <a
              href="index.html"
              class="px-12 py-4 bg-primary rounded-full text-white hover:bg-primaryDark"
            >
              Daftar
            </a>
          </div>
        </form>
        <p class="text-base">
          Sudah punya akun?
          <span><a href="{{ route('landing.signin') }}" class="font-bold">Masuk</a></span>
        </p>
      </div>
      <div class="w-1/2 bottom-0 right-0 fixed">
        <img src="{{url('/images/ill-signup.svg')}}" alt="Sign Up" width="90%" />
      </div>
    </div>
  </body>
</html>
