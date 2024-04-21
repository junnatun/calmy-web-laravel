<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calmy | Masuk</title>
    <link rel="stylesheet" href="/public/css/style.css" />
    <link rel="icon" type="image/x-icon" href="/src/icons/favicon.svg" />
    @vite('resources/css/app.css')
  </head>
  <body class="bg-main-bg bg-fixed">
    <div class="flex flex-row w-screen h-screen items-center">
      <div class="w-1/2 p-6">
        <img src="{{url('/images/ill-signin.svg')}}" alt="Sign In" />
      </div>
      <div class="w-1/2 flex flex-col items-center justify-center">
        <h1 class="text-4xl font-extrabold">Masuk</h1>
        <p class="text-center px-24 pt-6">
            Halo sahabat Calmy! Masuk dengan email dan bersenang-senang bersama.
        </p>
        <form action="">
          <div class="flex flex-col items-center pt-10">
            <label for="email" class="text-xl font-semibold">Email</label
            ><br />
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Masukkan email.."
              value=""
              class="bg-white px-24 py-4 rounded-lg text-center text-base"
            /><br />
          </div>
          <div class="flex flex-col items-center pt-10">
            <label for="email" class="text-xl font-semibold"
              >Kata Sandi</label
            ><br />
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Masukkan kata sandi.."
              value=""
              class="bg-white px-24 py-4 rounded-lg text-center text-base"
            /><br />
          </div>
          <div class="flex flex-row items-center justify-center my-8">
            <a
              href="index.html"
              class="px-12 py-4 bg-primary rounded-full text-white hover:bg-primaryDark"
            >
              Masuk
            </a>
          </div>
        </form>
        <p class="text-base">
          Belum punya akun?
          <span><a href="{{ route('landing.signup') }}" class="font-bold">Daftar</a></span>
        </p>
      </div>
    </div>
  </body>
</html>
