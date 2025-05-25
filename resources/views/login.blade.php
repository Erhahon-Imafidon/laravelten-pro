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
            <div class="w-1/2 border border-gray-300 rounded-lg">
{{--               card header--}}
               <div class="py-4 px-6 bg-gray-200 text-xl font-medium border-b border-b-gray-300">
                  <h2>Login</h2>
               </div>
               
{{--               Form--}}
               <form class="p-6 flex flex-col gap-4">
                  <div class="flex flex-col gap-2">
                     <label for="email">Email Address</label>
                     <input type="email" id="email" name="email" class="border border-gray-300 rounded p-2">
                  </div>

                  <div class="flex flex-col gap-2">
                     <label for="password">Password</label>
                     <input type="password" id="password" name="password" class="border border-gray-300 rounded p-2">
                  </div>

                  <button type="submit" class="bg-blue-500 text-white w-20 py-2 rounded cursor-pointer">Submit</button>
               </form>
            </div>
         </div>
      </section>
   </main>
</body>
</html>
