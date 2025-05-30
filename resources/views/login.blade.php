<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
   >
   <meta
      http-equiv="X-UA-Compatible"
      content="ie=edge"
   >
   @vite('resources/css/app.css')
   <title>User Login</title>
</head>
<body class="font-figtree">
   <main class="py-8">
      <section class="container">
         <div class="flex w-full justify-center">
            <div class="w-1/2 rounded-lg border border-gray-300">
               {{--               card header --}}
               <div class="border-b border-b-gray-300 bg-gray-200 px-6 py-4 text-xl font-medium">
                  <h2>Login</h2>
               </div>

               {{--               Form --}}
               <form
                  method="POST"
                  action="{{ route('login.submit') }}"
                  class="flex flex-col gap-4 p-6"
               >
                  @csrf
                  <div class="flex flex-col gap-2">
                     <label for="email">Email Address</label>
                     <input
                        type="email"
                        id="email"
                        name="email"
                        class="rounded border border-gray-300 p-2 focus:outline-none"
                     >
                     @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                     @enderror
                  </div>

                  <div class="flex flex-col gap-2">
                     <label for="password">Password</label>
                     <div class="relative rounded border border-gray-300">
                        <input
                                type="password"
                                id="password"
                                name="password"
                                class="p-2 w-full focus:outline-none"
                        >

                        <button
                                type="button"
                                class="absolute bottom-3 right-3 size-5 cursor-pointer self-end"
                                onclick="togglePasswordVisibility()"
                        >
                           <svg
                                   xmlns="http://www.w3.org/2000/svg"
                                   fill="none"
                                   id="showPwdIcon"
                                   viewBox="0 0 24 24"
                                   stroke-width="1.5"
                                   stroke="currentColor"
                                   class="size-6"
                           >
                              <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"
                              />
                              <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                              />
                           </svg>

                           <svg
                                   xmlns="http://www.w3.org/2000/svg"
                                   fill="none"
                                   id="hidePwdIcon"
                                   viewBox="0 0 24 24"
                                   stroke-width="1.5"
                                   stroke="currentColor"
                                   class="hidden size-6"
                           >
                              <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"
                              />
                           </svg>
                        </button>
                     </div>


                     {{--           Error state for Validation Logic --}}
                     @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                     @enderror

                  </div>

                  <button
                     type="submit"
                     class="w-20 cursor-pointer rounded bg-blue-500 py-2 text-white"
                  >Submit</button>
               </form>
            </div>
         </div>
      </section>
   </main>

   <script>
      function togglePasswordVisibility() {
         const pwdInput = document.getElementById('password');
         const showPwd = document.getElementById('showPwdIcon');
         const hidePwd = document.getElementById('hidePwdIcon');

         if (pwdInput.type === 'password') {
            pwdInput.type = 'text';
            showPwd.classList.add('hidden');
            hidePwd.classList.remove('hidden');
         } else {
            pwdInput.type = 'password';
            showPwd.classList.remove('hidden');
            hidePwd.classList.add('hidden');
         }
      }
   </script>
</body>
</html>
