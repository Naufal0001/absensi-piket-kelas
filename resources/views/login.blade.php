<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('partials.link')
    </head>
    
    <body class="bg-gray-100">
      <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm">
          <div class="bg-white shadow-md rounded-lg px-8 py-6">
            <h2 class="text-2xl font-bold text-center mb-8">Masuk</h2>
            <form>
                @csrf
              <div class="mb-4">
                <label class="block mb-2 font-semibold" for="username">Username</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                  type="text" id="username" placeholder="Enter your username" required>
              </div>
              <div class="mb-6">
                <label class="block mb-2 font-semibold" for="password">Password</label>
                <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                  type="password" id="password" placeholder="Enter your password" required>
                <p class="mt-2 hidden text-sm text-red-500">Incorrect password. Please try again.</p>
              </div>
              <div class="flex items-center justify-between">
                <button
                  class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition-colors"
                  type="submit">Log In</button>
                <a class="text-sm text-blue-500 hover:text-blue-600" href="#">Forgot Password?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </body>
</html>